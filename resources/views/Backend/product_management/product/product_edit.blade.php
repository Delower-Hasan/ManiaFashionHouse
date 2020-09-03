<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <title>Product</title>
  </head>
  <body>
    
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-3">
                      <div class="form-group">
                        <label for="catagory_id">Catagory</label>
                            <select name="catagory_id" class="form-control" id="catagory_id">
                                <option value="#">Select Catagory</option>
                                @foreach ($catagories as $catagory)
                                <option {{ $catagory->id==$product->catagory_id?'selected':'' }} value="{{ $catagory->id }}">{{ $catagory->catagory_name }}</option>
                                @endforeach

                            </select>
                        </div>
                      <div class="form-group">
                        <label for="catagory_id">Brand</label>
                            <select name="subcatagory_id" class="form-control" id="catagory_id">
                                <option value="#">Select Brand</option>
                                @foreach ($subcatagories as $subcat)
                                <option {{ $subcat->id==$product->subcatagory_id?'selected':'' }} value="{{ $subcat->id }}">{{ $subcat->subcatagory }}</option>
                                @endforeach
                            </select>
                        </div>
                      <div class="form-group">
                        <label for="product_name">Product Image</label>
                        <input type="file" class="form-control" multiple name="product_img[]" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" id="product_name">
                        </div>
                      <div class="form-group">
                        @foreach ($product->product_img as $img)
                        <img src="{{ url( $img ) }}" width="50" alt="">
                        @endforeach
                        
                            
                        </div>

                             <div class="form-group">
                              <label for="SKU">SKU ID</label>
                             <input type="text" name="sku_id" value="{{$product->sku_id  }}" id="SKU" placeholder="SKU NO." class="form-control">
                            </div>

                            

                            <div class="form-group">
                              <label for="product_name">Product Name</label>
                              <input type="text" id="product_name"  value="{{$product->product_name  }}"  name="product_name" placeholder="Product name" class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="quantity">Quantity </label>
                              <input type="text" id="quantity"  value="{{$product->quantity  }}" name="quantity" placeholder="Quantity " class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="Price">Price </label>
                              <input type="text" id="Price"  value="{{$product->price  }}" name="price" placeholder="price" class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="Short_description">Short_description </label>
                              <textarea name="short_description" value="{{$product->short_description  }}" id="Short_description" placeholder="Short Description" cols="30" rows="10" class="form-control">{{$product->short_description  }}</textarea>
                            </div>

                           
                            <div class="form-group">
                              <label for="product_type">Product Type </label>
                              <input type="text" name="product_type" value="{{$product->product_type  }}" id="product_type" placeholder="Product Type" class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="Description">Long Description </label>
                              <textarea name="long_description"  id="Description" placeholder="Product Description" cols="30" rows="10" class="form-control">
                               {{ $product->long_description   }} 
                              </textarea>
                              
                            </div>

                            <div class="form-group">
                              <label for="Color"> Color </label>
                              <input type="text" name="color" value="{{$product->color  }}" id="Color" placeholder="Product Color" class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="Size"> Size </label>
                              <input type="text" value="{{$product->size  }}"  name="size" id="Size" placeholder="Size" class="form-control">
                            </div>

                            <div class="form-group">
                              <label for="Material"> Material </label>
                              <input type="text" value="{{$product->material  }}"  name="material" id="Material" placeholder="Material" class="form-control">
                            </div>
                     
                    

                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update product</button>
              </form>

        </div>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>


