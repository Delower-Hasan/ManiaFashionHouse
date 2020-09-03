<?php

namespace App\Model\Backend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Protected $casts=[
		'product_img' =>'array'
	] ;
    protected $fillable = [
        'catagory_id',
        'subcatagory_id',
        'product_img',
        'sku_id',
        'product_name',
        'quantity',
        'price',
        'short_description',
        'product_type',
        'long_description',
        'color',
        'size',
        'material',
     
    ];
    public function catagory()
    {
        return $this->belongsTo(Catagory::class,'catagory_id');
    }
    public function subcatagory()
    {
        return $this->belongsTo(Subcatagory::class,'subcatagory_id');
    }
}
