<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Billing;
use App\Model\Backend\Checkout;
use App\Model\Backend\Order;
use App\Model\Backend\Sale;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index(){
        $sales = Sale::all();
        $billings = Billing::all();
        return view('Backend.Order.order',compact('sales','billings'));
    }
}
