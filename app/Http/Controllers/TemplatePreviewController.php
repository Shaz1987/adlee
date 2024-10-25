<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Template;
use App\Services\DataService;
use App\Services\TestDataService;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use AshAllenDesign\ShortURL\Facades\ShortURL;

class TemplatePreviewController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Template $template)
    {
        $f = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);

        if ($request->has('coupon')) {
            $coupon = Coupon::with(['booklet:id,number', 'sponsor:id,company_name,company_logo,address,city,postal_code'])->where('uuid', $request->coupon)->first();

            abort_if(is_null($coupon), 404);

            $data = [
                'adlee_logo' => "https://adlee.io/demo/adlee-logo.png",
                'sponsor_logo' => asset($coupon->sponsor->company_logo),
                'sponsor_name' => $coupon->sponsor->company_name,
                'book_number' => $coupon->booklet?->number,
                'coupon_number' => $coupon->number,
                'sponsor_address' => $coupon->sponsor->address,
                'sponsor_city' => $coupon->sponsor->city,
                'sponsor_zipcode' => $coupon->sponsor->postal_code,
                'amount_in_words' => ucwords(str_replace('-', " ", $f->format($coupon->amount)) . ' dollars'),
                'amount_in_digits' => $coupon->amount,
                'sponsor_qr_code' => QrCode::size(80)->style('round')->generate($coupon->shorten_url_activate),
                'bbo_qr_code' => QrCode::size(50)->style('round')->generate($coupon->shorten_url_redeem),
                'shorten_url' => str_replace(config('services.replace_url'), '', $coupon->shorten_url_redeem),
            ];

        } elseif ($request->has('task')) {
            $service = new DataService();
            $language = $template?->language ?? 'english';
            $name = $language . "_name";
            $coupon = Coupon::with(['task'])->where('uuid', $request->get('task'))->first();
            $data = $service->template($coupon, $coupon->task->$name);
            // dd($template->view);
            // dd($data);
        } else {
            $service = new TestDataService();
            $data = $service->template();
        }


        // return view("templates/coupons/oW659tMThyhVwXRG", $data);
        return view($template->view, $data);
    }
}
