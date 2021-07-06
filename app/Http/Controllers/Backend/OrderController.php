<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Billing;
use App\Model\Backend\Catagory;
use App\Model\Backend\Checkout;
use App\Model\Backend\ColorSize;
use App\Model\Backend\Order;
use App\Model\Backend\Product;
use App\Model\Backend\Sale;
use App\Model\Backend\Shipping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index(){

        // $sales = Sale::all();
        // $billings = Billing::all();
        // $shippings = Shipping::all();
        return view('Backend.Order.order');
    }
    function create(){
        $catagories = Catagory::all();
        $products = Product::all();
        $colors = ColorSize::all();

        return view('Backend.Order.create_order',compact('products','colors','catagories'));
    }
    function OrderColorAzax($id){
        $colorsJson = ColorSize::where('product_id',$id)->get();
       return response()->json($colorsJson);
    }
    function storeAzax( $data){
        return response()->json($data);
    }
    function store(Request $request){
        return $request->all();
    }

}
