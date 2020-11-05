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
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        $billing_id = Checkout::insertGetId([
            'user_id'=>Auth::id(),
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
            'grandTotal'=>100,
            'transaction_id'=>$request->transaction_id,
            'cash_on_deliver'=>$request->cash_on_deliver,
            'created_at'=>Carbon::now(),
        ]);

        $MAC = exec('getmac');
        $MAC = strtok($MAC, ' ');

        $carts = Cart::where('mac_address',$MAC)->get();
        $is_cart = Cart::where('mac_address',$MAC)->exists();
            if($is_cart){
                foreach($carts as $cart){
                    Order::insert([
                        'billing_id'=>$billing_id,
                        'user_id'=>Auth::id(),
                        'product_id'=>$cart->product_id,
                        'qty'=>$cart->quantity,
                        'is_paid'=>false,
                        'created_at'=>Carbon::now(),
                   ]);
                   Product::where('id',$cart->product_id)->decrement('quantity',$cart->quantity);
                    Cart::where('product_id',$cart->product_id)->delete();
                 }

            }
            else{
                return back()->with('No cart item available');
            }

        $email = $request->email;
        Mail::send('Frontend/Checkout/invoice',array('billing_id'=>$billing_id), function($message) use($email) {
            $message->to($email, 'Invoice')->subject
               ("Product Invoice");
            $message->from('dhhasansaha11@gmail.com','Alamin Fashion House');
         });
        return back();
    }

    function shippedProduct($id){
        Order::where('billing_id',$id)->update([
            'shipping_process'=>1,
        ]);
        return redirect('/');
    }

}
