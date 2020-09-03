
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href= '{{ asset('/css/database.css') }}'> --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <title>Product</title>
  </head>
  <body>

@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (session('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> {{ session('delete') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif


<a href="{{ route('product.create') }}">Add Catagory</a>

<h2>Add Catagory</h2>
<div class="container">
    <div class="row">
        <div class="col-12">

          <table id="table_id" class="display">
            <thead>
                <th>Id</th>
                <th>product_id</th>
                <th>subcatagory_id</th>
                <th>product_img</th>
                <th>sku_id</th>
                <th>product_img</th>
                <th>product_name price</th>
                <th>quantity</th>
                <th>price</th>
                <th>short_description</th>
                <th>product_type</th>
                <th>long_description</th>
                <th>color</th>
                <th>size</th>
                <th>material</th>
                

                <th>Action</th>
                <th>Action</th>
            </thead>

            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->catagory->catagory_name }}</td>
                    <td>{{ $product->subcatagory->subcatagory }}</td>
                    <td >  
                      @foreach ($product->product_img as $img)
                      <img src="{{ url( $img ) }}" width="50" alt="">
                      @endforeach

                    </td>
                    
                    <td>{{ $product->sku_id }}</td>
                    
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->short_description }}</td>
                    <td>{{ $product->product_type }}</td>
                    <td>{{ $product->long_description }}</td>
                    <td>{{ $product->color }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->material }}</td>
                   

                    <td><a class="btn btn-info" href="{{ route('product.edit',$product->id) }}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{ route('product.delete',$product->id) }}">delete</a></td>
                </tr>
                @endforeach



            </tbody>

        </table>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/database.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/js/main.js') }}"></script>
  </body>
</html>


