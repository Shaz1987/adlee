<?php

namespace App\Jobs;

use App\Enums\BookletPrintStatus;
use App\Models\Booklet;
use App\Models\BookletPrint;
use App\Services\DataService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Zip;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\File;

class SendBookletForPrint implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Booklet $booklet, public BookletPrint $bookletPrint)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $service = new DataService();

        $folderName = $this->booklet->number;
        $files = [];

        // saving all coupons in a folder
        foreach ($this->booklet->coupons as $coupon) {
            $fileName = $folderName . '/' . $coupon->number . '.pdf';
            $view = $coupon->template->view;

            $pdf = Pdf::loadView($view, $service->coupon($coupon, "print"))->setPaper('legal', 'landscape');
            Storage::disk('local')->put($fileName, $pdf->output());
            $files[] = Storage::disk('local')->path($fileName);
        }

        // saving shipping info inside coupon folder
        $content = "";
        $content .= $this->booklet->user?->name;
        $content .= "\n\n";
        $content .= $this->booklet->sponsor?->shipping_address;
        $content .= "\n";
        $content .= $this->booklet->sponsor?->shipping_city;
        $content .= "\n";
        $content .= $this->booklet->sponsor?->shipping_state;
        $content .= "\n";
        $content .= country_name($this->booklet->sponsor?->shipping_country);
        $content .= "\n";
        $content .= "order is shipping if possible. - or email when tracking is here ";
        $content .= $this->booklet->user?->email;
        $content .= "\n\nCompany Name: ";
        $content .= $this->booklet->sponsor?->company_name;
        $content .= "\n\nShipEngine Shipment Label:";
        $content .= "\n";
        $content .= "PDF: https://34bf-39-36-43-27.ngrok-free.app/shipengine/webhook";
        $content .= "\n";
        $content .= "PNG: https://34bf-39-36-43-27.ngrok-free.app/shipengine/webhook";
        $content .= "\n";
        $content .= "ZPL: https://34bf-39-36-43-27.ngrok-free.app/shipengine/webhook";

        Storage::disk('local')->put($folderName . '/shipping.txt', $content);
        // add shipping info file to files array to be zipped
        $files[] = Storage::disk('local')->path($folderName . '/shipping.txt');

        // create zip file
        $zipFilePath = public_path('prints');
        $zip = Zip::create($folderName . ".zip", $files)->saveTo($zipFilePath);

        // file information
        $fileName = $folderName . '.zip';
        $filePath = $zipFilePath . '/' . $fileName;

        // send email to admin about print booklet information with zip file
        $emails = settings('print-emails');
        $emails = !is_null($emails) ? json_decode($emails) : [];
        foreach ($emails as $email) {
            Notification::route('mail', $email)
                ->notify(new \App\Notifications\SendBookletForPrint($this->booklet->user->name, $filePath, $fileName));
        }
        // Notification::route('mail', 'dannys@adlee.io')
        //     ->notify(new \App\Notifications\SendBookletForPrint($this->booklet->user->name, $filePath, $fileName));
        // Notification::route('mail', 'dannys@jetwaveservices.com')
        //     ->notify(new \App\Notifications\SendBookletForPrint($this->booklet->user->name, $filePath, $fileName));
        // Notification::route('mail', 'developer3066@gmail.com')
        //     ->notify(new \App\Notifications\SendBookletForPrint($this->booklet->user->name, $filePath, $fileName));

        // delete folder from stroage path
        Storage::disk('local')->deleteDirectory($folderName);

        // delete zip file from public folder
        File::delete($filePath);

        // update the status of booklet print to send
        // $this->bookletPrint->update(['status' => BookletPrintStatus::SEND->value]);
    }
}
