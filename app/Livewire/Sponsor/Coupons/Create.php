<?php

namespace App\Livewire\Sponsor\Coupons;

use App\Enums\TemplateLanguage;
use App\Enums\TemplateType;
use App\Models\Coupon;
use App\Models\Template;
use Illuminate\Validation\Rule;
use Livewire\Component;
use AshAllenDesign\ShortURL\Facades\ShortURL;

class Create extends Component
{
    public string $step = "info";
    public string $title, $amount, $confirm_amount, $payout_deadline;
    public string $language, $template_id = "";
    public string $search = "";
    public string $couponId;
    public $coupon_min_amount = 1;

    public function mount()
    {
        $this->language = TemplateLanguage::ENGLISH->value;
        // $this->title = "Deserunt";
        // $this->amount = "49";
        // $this->confirm_amount = "49";
        // $this->payout_deadline = "7";
        // $this->template_id = 2;
        // $this->step = "template";
    }

    public function render()
    {
        return view('livewire.sponsor.coupons.create', [
            'templates' => Template::whereType(TemplateType::COUPON->value)->whereLanguage($this->language)->when($this->search, fn($q) => $q->whereLike(['title'], $this->search))->get()
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
            'amount' => ['required', 'numeric', 'min:' . $this->coupon_min_amount],
            'confirm_amount' => ['required', 'numeric', 'min:' . $this->coupon_min_amount, 'same:amount'],
            // 'payout_deadline' => ['required'],
        ]);

        $this->step = "template";
    }
    public function save()
    {
        $this->create();

        return to_route('sponsors.coupons.index')->with('success', 'New coupon created successfully.');

    }

    public function saveAndSend()
    {
        $this->create();

        return to_route('sponsors.coupons.send.index', $this->couponId)->with('success', 'New coupon created successfully.');
    }

    private function create()
    {
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:' . $this->coupon_min_amount],
            'confirm_amount' => ['required', 'numeric', 'min:' . $this->coupon_min_amount, 'same:amount'],
            // 'payout_deadline' => ['required'],
            'language' => ['required', Rule::enum(TemplateLanguage::class)],
            'template_id' => ['required', 'exists:templates,id'],
        ], [
            'template_id.required' => 'Please select a template',
            'template_id.exists' => 'The selected template does not exist.'
        ]);
        $sponsor = auth()->user()->sponsor;

        $data = [];
        $data['user_id'] = auth()->id();
        $data['sponsor_id'] = sponsorId();
        $data['title'] = $this->title;
        $data['amount'] = $this->amount;
        $data['payout_deadline'] = (int) $sponsor->default_coupon_payout;
        // $data['payout_deadline'] = (int) $this->payout_deadline;
        // $data['payout_on'] = now()->addDays($data['payout_deadline']);
        $data['language'] = $this->language;
        $data['template_id'] = $this->template_id;
        $coupon_number = next_number($sponsor->last_coupon);
        $data['number'] = $sponsor->code . '-' . $sponsor->name_code . '-' . $coupon_number;

        // create coupon
        $coupon = Coupon::create($data);

        // update coupon shorten url
        $coupon->update([
            'shorten_url_activate' => ShortURL::destinationUrl(route('sponsors.coupons.activate.index', $coupon->uuid))->make()->default_short_url,
            'shorten_url_redeem' => ShortURL::destinationUrl(route('ad-space-owner.coupons.redeem.index', $coupon->uuid))->make()->default_short_url,
        ]);

        // update sponsor last coupon number
        $sponsor->update([
            'last_coupon' => $coupon_number,
        ]);

        $this->couponId = $coupon->uuid;
    }
}
