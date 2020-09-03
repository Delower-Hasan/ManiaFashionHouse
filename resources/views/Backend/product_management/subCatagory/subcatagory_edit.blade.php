<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SubCatagory</title>
  </head>
  <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('subcatagory.update',$subcatagory->id) }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">SubCatagory</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $subcatagory->subcatagory }}" name="subcatagory" aria-describedby="emailHelp" placeholder="Enter Subcatagory">

                  <div class="form-group mt-3">
                      <select name="catagory_id" id="" class="form-control">
                          <option value="#">Select Catagory</option>
                          @foreach ($catagories as $catagory)
                          <option  value="{{ $catagory->id }}" {{ ( $catagory->id == $subcatagory->id) ? 'selected' : '' }}>{{ $catagory->catagory_name }}</option>
                          @endforeach


                      </select>
                  </div>

                <button type="submit" class="btn btn-primary">Add</button>
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


