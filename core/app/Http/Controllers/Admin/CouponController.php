<?php

namespace App\Http\Controllers\Admin;
use App\Models\Coupon;
use App\Models\Plan;
use App\Models\Time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'All Coupons';

        $coupons = Coupon::latest()->paginate();

        return view('backend.coupon.index', compact('pageTitle', 'coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pageTitle = 'Create Coupon';

        $time=Time::all();
        return view('backend.coupon.create', compact('pageTitle','time'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bonus' => 'required|gte:0',
            'apply_limit' => 'required|gte:0',
        ], [
            // 'minimum.required_if' => 'Minimum Amount is required ',
            // 'maximum.required_if' => 'Maximum Amount is required ',
            // 'amount.required_if' => 'Amount is required',
            // 'repeat_time.required_if' => 'How Many Times  is required ',
        ]);
        Coupon::create([
            'apply_limit' => $request->apply_limit,
            'bonus' => $request->bonus,
            'status' => $request->status,
        ]);

        $notify[] = ['success', 'Coupon created successfully'];

        return redirect()->route('admin.coupon.index')->withNotify($notify);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        $pageTitle = 'Edit Coupon';     
        $time=Time::all();  
        return view('backend.coupon.edit', compact('pageTitle', 'coupon','time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'bonus' => 'required|gte:0',
            'apply_limit' => 'required|gte:0',
        ], [
            // 'minimum.required_if' => 'Minimum Amount is required ',
            // 'maximum.required_if' => 'Maximum Amount is required ',
            // 'amount.required_if' => 'Amount is required',
            // 'repeat_time.required_if' => 'How Many Times  is required ',
        ]);

        $coupon->update([
            'apply_limit' => $request->apply_limit,
            'bonus' => $request->bonus,
            'status' => $request->status,
        ]);

        $notify[] = ['success', 'Coupon Updated Successfully'];

        return redirect()->route('admin.coupon.index')->withNotify($notify);
    }

    public function couponStatusChange(Request $request)
    {
        $coupon = Coupon::findOrFail($request->id);

        if ($request->status) {
            $coupon->status = false;
        } else {
            $coupon->status = true;
        }

        $coupon->save();

        $notify = ['success' => 'Coupon Status Change Successfully'];

        return response($notify);
    }


}
