<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Cart;
use App\Model\Backend\Checkout;
use App\Model\Backend\District;
use Illuminate\Http\Request;
use App\Model\Backend\Division;
use App\Model\Backend\Order;
use App\Model\Backend\Product;
use App\Model\Backend\Union;
use App\Model\Backend\Upazila;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    function index(){
        $division = Division::all();
        $district = District::all();
        $upazila = Upazila::all();
        $union = Union::all();
        return view('Frontend.Checkout.checkout',compact('division','district','upazila','union'));
    }
    function store(Request $request){
        $grandTotal = session('grandTotal');
        $billing_id =   Checkout::insertGetId([
            'user_id'=>Auth::user() ? Auth::id() : null,
            'user_name'=>$request->user_name,
            'company_name'=>$request->company_name,
            'division'=>$request->division,
            'district'=>$request->district,
            'upozela'=>$request->upozela,
            'union'=>$request->union,
            'street_address'=>$request->street_address,
            'apartment'=>$request->apartment,
            'post_code'=>$request->post_code,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'grandTotal'=>500,
            'transaction_id'=>$request->transaction_id,
            'cash_on_deliver'=>$request->cash_on_deliver,
        ]);
        $MAC = exec('getmac');
        $MAC = strtok($MAC, ' ');

        $carts = Cart::where('mac_address',$MAC)->get();
        foreach($carts as $cart){
           Order::insert([
                'billing_id'=>$billing_id,
                'user_id'=>Auth::id()? Auth::id() : null,
                'product_id'=>$cart->product_id,
                'qty'=>$cart->quantity,
           ]);
           Product::where('id',$cart->product_id)->decrement('quantity',$cart->quantity);
            Cart::where('product_id',$cart->product_id)->delete();
        }

        return back();

    }

}
