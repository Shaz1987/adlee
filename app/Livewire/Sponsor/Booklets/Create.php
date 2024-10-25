<?php

namespace App\Livewire\Sponsor\Booklets;

use App\Enums\TemplateLanguage;
use App\Enums\TemplateType;
use App\Models\Booklet;
use App\Models\Coupon;
use App\Models\Template;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;
use AshAllenDesign\ShortURL\Facades\ShortURL;

class Create extends Component
{
    public string $step = "info";
    public string $title, $amount, $confirm_amount, $payout_deadline, $coupons;
    public string $language, $template_id = "";
    public string $search = "";
    public int $couponLimit = 50;
    public $booklet_min_amount = 1;

    public function mount()
    {
        $this->language = TemplateLanguage::ENGLISH->value;
        $this->coupons = "50";

        // $this->title = "Deserunt";
        // $this->amount = "50";
        // $this->confirm_amount = "50";
        // $this->payout_deadline = "7";
        // $this->coupons = "2";
        // $this->template_id = 2;
        // $this->step = "template";
    }

    public function render()
    {
        return view('livewire.sponsor.booklets.create', [
            'templates' => Template::withCount(['booklets'])->whereType(TemplateType::COUPON->value)->whereLanguage($this->language)->when($this->search, fn($q) => $q->whereLike(['title'], $this->search))->get()
        ]);
    }

    public function updatedLanguage()
    {
        $this->template_id = "";
    }

    public function changeStep($step)
    {
        $this->step = $step;
    }

    public function selectTemplate($id)
    {
        $this->template_id = $id;
    }

    public function validateInfo()
    {
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:' . $this->booklet_min_amount],
            'confirm_amount' => ['required', 'numeric', 'min:' . $this->booklet_min_amount, 'same:amount'],
            'coupons' => ['required', 'numeric', 'multiple_of:' . $this->couponLimit],
            // 'payout_deadline' => ['required'],
        ], [
            'coupons.multiple_of' => 'The number of coupons must be a multiple of ' . $this->couponLimit
        ]);

        $this->step = "template";
    }
    public function save()
    {
        $this->create();

        return to_route('sponsors.booklets.index')->with('success', 'New booklet created successfully.');
    }

    private function create()
    {
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:' . $this->booklet_min_amount],
            'confirm_amount' => ['required', 'numeric', 'min:' . $this->booklet_min_amount, 'same:amount'],
            'coupons' => ['required', 'numeric', 'multiple_of:' . $this->couponLimit],
            // 'payout_deadline' => ['required'],
            'language' => ['required', Rule::enum(TemplateLanguage::class)],
            'template_id' => ['required', 'exists:templates,id'],
        ], [
            'coupons.multiple_of' => 'The number of coupons must be a multiple of ' . $this->couponLimit,
            'template_id.required' => 'Please select a template',
            'template_id.exists' => 'The selected template does not exist.'

        ]);

        DB::transaction(function () {
            $sponsor = auth()->user()->sponsor;

            // creating new booklet
            $data = [];
            $data['user_id'] = auth()->id();
            $data['sponsor_id'] = sponsorId();
            $data['title'] = $this->title;
            $data['amount'] = $this->amount;
            $data['payout_deadline'] = (int) $sponsor->default_coupon_payout;
            // $data['payout_deadline'] = (int) $this->payout_deadline;
            $data['language'] = $this->language;
            $data['template_id'] = $this->template_id;
            $booklet_number = next_number($sponsor->last_booklet);
            $data['number'] = $sponsor->name_code . $booklet_number;

            $booklet = Booklet::create($data);

            // update sponsor last booklet number
            $sponsor->update([
                'last_booklet' => $booklet_number,
            ]);

            $lastCoupon = $sponsor->last_coupon;

            // creating coupons as sponsors choose to create
            for ($i = 0; $i < $this->coupons; $i++) {
                $data['booklet_id'] = $booklet->id;
                $coupon_number = next_number($lastCoupon);
                $data['number'] = $sponsor->code . '-' . $sponsor->name_code . '-' . $coupon_number;

                // create coupon
                $coupon = Coupon::create($data);

                // update coupon shorten url
                $coupon->update([
                    'shorten_url_activate' => ShortURL::destinationUrl(route('sponsors.coupons.activate.index', $coupon->uuid))->make()->default_short_url,
                    'shorten_url_redeem' => ShortURL::destinationUrl(route('ad-space-owner.coupons.redeem.index', $coupon->uuid))->make()->default_short_url,
                ]);

                $lastCoupon = $coupon_number;
            }

            // update sponsor last coupon number
            $sponsor->update([
                'last_coupon' => $coupon_number,
            ]);
        });

    }
}
