
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- C3 charts css -->
    <link href="{{ url('/backend') }}/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

    <!-- App css -->
    <link href="{{url('/backend')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    @yield('extra_css')
    <link href="{{url('/backend')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/backend')}}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/backend')}}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Checkout Page</title>
  </head>
  <body>
  <div class="container">
      <div class="row">
          <div class="col-md-6">
            <h1>Checkout Page</h1>
            <div class="coupon " style="margin-top: 30px">
                <form action="{{ route('checkout.store') }}" method="post">
                    @csrf
                    <div style="margin-bottom: 10px">
                        <label for="user_name">User Name</label>
                        <input type="text" id="user_name" name ='user_name' placeholder="User Name">
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="company_name">Company Name</label>
                        <input type="text" id="company_name" name ='company_name' placeholder="Company Name">
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="division">Division</label>
                        <select name="division" id="division">
                            <option >Select Division</option>
                            @foreach ($division as $div)
                            <option value="{{ $div->id }}">{{ $div->name }}({{ $div->bn_name }}) </option>
                            @endforeach

                        </select>
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="district">District</label>
                        <select name="district" id="district">
                            <option >Select District</option>
                            @foreach ($district as $dist)
                            <option value="{{ $dist->id }}">{{ $dist->name }}({{ $dist->bn_name }}) </option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="upozela">UpoZela</label>
                        <select name="upozela" id="upozela">
                            <option >Select Upazila</option>
                            @foreach ($upazila as $upa)
                            <option value="{{ $upa->id }}">{{ $upa->name }}({{ $upa->bn_name }}) </option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="union">Union</label>
                        <select name="union" id="union">
                            <option >Select Upazila</option>
                            @foreach ($union as $uni)
                            <option value="{{ $uni->id }}">{{ $uni->name }}({{ $uni->bn_name }}) </option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="street_address">Address</label>
                        <input type="text" id="street_address" name ='street_address' placeholder="Street Address">
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="apartment">Apartment</label>
                        <input type="text" name ='apartment' placeholder="Apartment Or Unit number">
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="post_code">Post Code / Zip </label>
                        <input type="text" name ='post_code' placeholder="Post Code / zip">
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="phone">User Name</label>
                        <input type="text" name ='phone' placeholder="Phone">
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="email">User Name</label>
                        <input type="email" name ='email' placeholder="Email">
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="transaction_id">Cash</label>
                        <input type="text" name ='transaction_id' placeholder="Transaction Id">
                    </div>
                    <div style="margin-bottom: 10px">
                        <input type="checkbox" name="cash_on_deliver" class="form-check-input" id="cash_on_deliver">
                     <label class="form-check-label" for="cash_on_deliver">Cash On Delivery</label>
                        {{--  <label for="cash_on_deliver">Cash on Delivery</label>

                        <input type="text" name ='cash_on_deliver' placeholder="User">  --}}
                    </div>



                    <button type="submit">Order Now</button>
                </form>

            </div>
          </div>
      </div>
  </div>



<!-- jQuery  -->
<script src="{{url('/backend')}}/assets/js/jquery.min.js"></script>
<script src="{{url('/backend')}}/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="{{url('/backend')}}/assets/js/bootstrap.min.js"></script>
<script src="{{url('/backend')}}/assets/js/metisMenu.min.js"></script>
<script src="{{url('/backend')}}/assets/js/waves.js"></script>
<script src="{{url('/backend')}}/assets/js/jquery.slimscroll.js"></script>

  </body>
</html>
