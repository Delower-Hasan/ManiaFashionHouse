<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    function index(){
        $catagories = Catagory::all();
        return view('Backend/product_management/catagory/catagory',compact('catagories'));
    }
    function create(){
        return view('Backend/product_management/catagory/create_catagory');
    }
    function post(Request $request){
        Catagory::insert([
            'catagory_name'=>$request->catagory_name
        ]);
        return redirect(route('catagory.index'))->with('success','Catagory Added');
    }
    function edit($id){
        $catagory = Catagory::where('id',$id)->first();
        return view('Backend/product_management/catagory/edit_catagory',compact('catagory'));
    }
    function update(Request $request,$id){
        Catagory::findOrFail($id)->update([
            'catagory_name'=>$request->catagory_name
        ]);
        return redirect(route('catagory.index'))->with('success','Catagory Updated');
    }

    function destroy($id){
        Catagory::findOrFail($id)->delete();
        return back()->with('delete','Product Deleted successfully');
    }

}
