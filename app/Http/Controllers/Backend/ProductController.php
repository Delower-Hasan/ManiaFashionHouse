<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\Catagory;
use App\Model\Backend\Product;
use App\Model\Backend\Subcatagory;
use Illuminate\Http\Request;
use Image;
use Str;
use Carbon;
class ProductController extends Controller
{
    function index(){
        
        $products = Product::all();
        return view('Backend/product_management/product/products',compact('products'));
    }

    function create(){
        $subcatagories = Subcatagory::all();
        $catagories = Catagory::all();
        return view('Backend.product_management.product.product_create',compact('subcatagories','catagories'));
    }
    function store(Request $request){
        $request->validate([
            'product_img'=>['required'],
            'catagory_id'=>['required'],
            'subcatagory_id'=>['required'],
            'sku_id'=>['required','integer'],
            'product_name'=>['required'],
            'quantity'=>['required','integer'],
            'price'=>['required','integer'],
            'short_description'=>['required'],
            'product_type'=>['required'],
            'long_description'=>['required'],
            'color'=>['required'],
            'size'=>['required'],
            'material'=>['required'],
           
            ]);

        // product

        if( $request->hasFile('product_img')){
            $get_image = $request->file('product_img'); //orginal image;
            $imgArry = [];
            foreach($get_image as $images){
                    $image = Str::random(5).".".$images->getClientOriginalExtension();
                    Image::make($images)->save(public_path('/backend/img/products/'.$image));
                    array_push($imgArry,"backend/img/products/".$image);
                }
                Product::insert([
                    'product_img'=>json_encode($imgArry),
                    'catagory_id'=>$request->catagory_id,
                    'subcatagory_id'=>$request->subcatagory_id,
                    'sku_id'=>$request->sku_id,
                    'product_name'=>$request->product_name,
                    'quantity'=>$request->quantity,
                    'price'=>$request->price,
                    'short_description'=>$request->short_description,
                    'product_type'=>$request->product_type,
                    'long_description'=>$request->long_description,
                    'color'=>$request->color,
                    'size'=>$request->size,
                    'material'=>$request->material,
                   
                    
                ]);
             
            }
    
        return redirect(route('product.index'))->with('success','Successfully product Added');

    }

    function edit($id){
        $subcatagories = Subcatagory::all();
        $catagories = Catagory::all();
        $product = Product::where('id',$id)->first();
        return view('Backend/product_management/product/product_edit',compact('subcatagories','catagories','product'));
    }
    function update(Request $request,$id){
        $request->validate([
            'product_img'=>['required'],
            'catagory_id'=>['required'],
            'subcatagory_id'=>['required'],
            'sku_id'=>['integer'],
            'product_name'=>['required'],
            'quantity'=>['integer'],
            'price'=>['integer'],
            ]);
        if($request->hasFile('product_img')){
            $get_image = $request->file('product_img');
            $imgArry = [];
            foreach($get_image as $images){
                $image = Str::random(5).".".$images->getClientOriginalExtension();
                    Image::make($images)->save(public_path('/backend/img/products/'.$image));
                    array_push($imgArry,"backend/img/products/".$image);
            }

            $product =Product::where('id',$id)->first();
            $productImage =$product->product_img;
            foreach($productImage as $img){
            if(file_exists($img)){
                    unlink($img);
                }
            }
            Product::findOrFail($id)->update([
                'product_img'=>$imgArry,
                'catagory_id'=>$request->catagory_id,
                'subcatagory_id'=>$request->subcatagory_id,
                'sku_id'=>$request->sku_id,
                'product_name'=>$request->product_name,
                'quantity'=>$request->quantity,
                'price'=>$request->price,
                'short_description'=>$request->short_description,
                'product_type'=>$request->product_type,
                'long_description'=>$request->long_description,
                'color'=>$request->color,
                'size'=>$request->size,
                'material'=>$request->material,
            ]);
        }
        else{
            Product::findOrFail($id)->update([
                'catagory_id'=>$request->catagory_id,
                'subcatagory_id'=>$request->subcatagory_id,
                'sku_id'=>$request->sku_id,
                'product_name'=>$request->product_name,
                'quantity'=>$request->quantity,
                'price'=>$request->price,
                'short_description'=>$request->short_description,
                'product_type'=>$request->product_type,
                'long_description'=>$request->long_description,
                'color'=>$request->color,
                'size'=>$request->size,
                'material'=>$request->material,
                    ]);
        }

        return redirect(route('product.index'))->with('success','Product Updated successfully');
    }

    function destroy($id){
        $product =Product::where('id',$id)->first();
        $productImage =$product->product_img;
       
       
   
        foreach($productImage as $img){
        if(file_exists($img)){
                unlink($img);  
            }
        }
        Product::findOrFail($id)->delete();
        return back()->with('delete','Product Deleted successfully');
    }

}
