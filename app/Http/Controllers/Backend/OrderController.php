<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Checkout;
use App\Model\Backend\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index(){
        $billings = Checkout::all();
        $orders = Order::all();
        return view('Backend.Order.order',compact('orders','billings'));
    }
}
