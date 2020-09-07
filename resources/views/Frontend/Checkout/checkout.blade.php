
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Checkout Page</title>
  </head>
  <body>
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body>
</html>
