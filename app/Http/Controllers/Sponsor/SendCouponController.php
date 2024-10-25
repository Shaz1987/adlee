<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Notifications\SendCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class SendCouponController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        abort_if($coupon->booklet_id, 403, "You cannot send this coupon by email");
        return view('sponsor.coupons.send', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function send(Request $request, Coupon $coupon)
    {
        abort_if($coupon->booklet_id, 403, "You cannot send this coupon by email");

        $request->validate([
            'email' => ['required', 'email', 'string', 'max:255']
        ]);

        $coupon->load(['sponsor', 'template']);

        try {
            DB::transaction(function () use ($request, $coupon) {
                $coupon->update([
                    'redeemed_by' => $request->email
                ]);

                Notification::route('mail', $request->email)
                    ->notify(new SendCoupon($coupon));
            });

            return to_route('sponsors.coupons.index')->with('success', 'Coupon successfully send.');
        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
}
