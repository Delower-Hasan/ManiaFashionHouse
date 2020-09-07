


@extends('Backend.dashboard.master')
@section('extra_css')
<!-- Jquery filer css -->
<link href="{{ url('/backend') }}/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
<link href="{{ url('/backend') }}/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

<!-- Bootstrap fileupload css -->
<link href="{{ url('/backend') }}/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

<!-- Summernote css -->
<link href="{{ url('/backend') }}/plugins/summernote/summernote.css" rel="stylesheet" />

@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Catagory</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product.create') }}">Product Create</a></li>

            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="card-box">
            <h4 class="header-title m-t-0">Add Product</h4>


            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="catagory_id">Catagory</label>
                        <select name="catagory_id" class="form-control" id="catagory_id">
                            <option >Select Catagory</option>
                            @foreach ($catagories as $catagory)
                            <option {{ $catagory->id==$product->catagory_id?'selected':'' }} value="{{ $catagory->id }}">{{ $catagory->catagory_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subcatagory_id">Subcatagory</label>
                        <select name="subcatagory_id" class="form-control" id="subcatagory_id">
                            <option v>Select Subcatagory</option>
                            @foreach ($subcatagories as $subcat)
                            <option {{ $subcat->id==$product->subcatagory_id?'selected':'' }} value="{{ $subcat->id }}">{{ $subcat->subcatagory }}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                                <select name="brand_id" class="form-control" id="brand_id">
                                    <option >Select Brand</option>
                                    @foreach ($brands as $brand)
                                    <option {{ $brand->id==$product->brand_id?'selected':'' }} value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card-box">
                                <h4 class="header-title m-t-0">Upload Image</h4>
                                <div class="p-20 p-b-0">
                                    <div class="form-group clearfix">
                                        <div class="col-sm-12 padding-left-0 padding-right-0">
                                            <input type="file" name="product_img[]" id="filer_input2"
                                                   multiple="multiple">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                 @foreach ($product->product_img as $img)
                        <img src="{{ url( $img ) }}" width="50" alt="">
                        @endforeach
                            </div>


                <div class="form-group">
                    <label for="SKU">SKU NO <span class="text-danger">*</span></label>
                    <input type="text" value="{{$product->sku_id  }}" name="sku_id" parsley-trigger="change" required
                           placeholder="SKU NO." class="form-control" id="SKU">
                </div>

                <div class="form-group">
                    <label for="product_name">Product Name NO <span class="text-danger">*</span></label>
                    <input type="text" value="{{$product->product_name  }}" name="product_name" parsley-trigger="change" required
                           placeholder="Product Name" class="form-control" id="product_name">
                </div>

                <div class="form-group">
                    <label for="quantity">quantity NO <span class="text-danger">*</span></label>
                    <input type="text" value="{{$product->quantity  }}" name="quantity" parsley-trigger="change" required
                           placeholder="Product quantity" class="form-control" id="quantity">
                </div>

                <div class="form-group">
                    <label for="price">Price NO <span class="text-danger">*</span></label>
                    <input type="text" value="{{$product->price  }}" name="price" parsley-trigger="change" required
                           placeholder="Product price" class="form-control" id="price">
                </div>




                            <div class="card-box">
                                <h4 class="m-b-30 m-t-0 header-title"><b>Product Short Description</b></h4>
                                <textarea name="short_description" id="description" placeholder="Product Description" cols="30" rows="10" class="form-control summernote">
                                   {{ $product->short_description }}
                                </textarea>
                            </div>

                            <div class="card-box">
                                <h4 class="m-b-30 m-t-0 header-title"><b>Product Long Description</b></h4>
                                <textarea name="long_description" id="Description" placeholder="Product Description" cols="30" rows="10" class="form-control summernote">
                                  {{  $product->long_description}}
                                </textarea>
                            </div>


                            <div class="form-group">
                              <label for="Color"> Color </label>
                              <input type="text" name="color" value="{{$product->color  }}"  id="Color" placeholder="Product Color" class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="Size"> Size </label>
                              <input type="text" value="{{$product->size  }}" name="size" id="Size" placeholder="Size" class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="Material"> Material </label>
                              <input type="text" value="{{$product->material  }}" name="material" id="Material" placeholder="Material" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="product type">product type NO <span class="text-danger">*</span></label>
                                <input type="text" value="{{$product->product_type  }}" name="product_type" parsley-trigger="change" required
                                       placeholder="Product type" class="form-control" id="product type">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option >Select status</option>
                                        <option {{ $product->status==1?'selected':'' }} value="1">Active</option>
                                        <option {{ $product->status==0?'selected':'' }} value="0">Deactive</option>

                                    </select>
                                </div>




                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Update
                    </button>
                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                        Cancel
                    </button>
                    <a href="{{ route('product.index') }}" class="btn btn-inverse waves-effect waves-light ">BACK</a>

                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->


</div>


@endsection

@section('extra_js')

<!-- Jquery filer js -->
<script src="{{ url('/backend') }}/plugins/jquery.filer/js/jquery.filer.min.js"></script>

<!-- Bootstrap fileupload js -->
<script src="{{ url('/backend') }}/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<!-- page specific js -->
<script src="{{ url('/backend') }}/assets/pages/jquery.fileuploads.init.js"></script>

<!-- App js -->
<script src="{{ url('/backend') }}/assets/js/jquery.core.js"></script>
<script src="{{ url('/backend') }}/assets/js/jquery.app.js"></script>

<!--Summernote js-->
<script src="{{ url('/backend') }}/plugins/summernote/summernote.min.js"></script>
@endsection

@section('main_js')
<script>
    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 200,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });


    });


{{--  dropdown dependency  --}}

$('#catagory_id').change(function(){
    var catagory = $(this).val();
 
    if(catagory){
        $.ajax({
           type:"GET",
           url:"{{url('/product/azax')}}/"+catagory,
           success:function(res){
            if(res){
                $("#subcatagory_id").empty();
                $("#subcatagory_id").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#subcatagory_id").append(`<option value='${value.id}'> ${value.subcatagory}</option>`);
                });

            }else{
               $("#subcatagory_id").empty();
            }
           }
        });
    }else{
        $("#catagory_id").empty();
        $("#subcatagory_id").empty();
    }
   });



</script>

@endsection




