<h1>Cart page</h1>

<table border="1">
    <tr>
      
        <th>
            product Image
        </th>
        <th>product price</th>
        <th>product quantity</th>
        <th>totall</th>
        <th>cart Delete</th>
      
    </tr>
<form  action="{{route('cart.update')}}" method="POST">
    @csrf
    @foreach ($carts as $cart)
    <tr>
      <input class="id" type="hidden" placeholder="cart id" name="cart_id[]" value="{{$cart->id}}">
    <td><img src="{{url($cart->productItem->product_img[0])}}" width="50" alt=""></td>
        <td class="price"> {{$cart->productItem->price}}</td>
    <td ><input class="quantity" type="number" min="1" name='quantity[]' value="{{$cart->quantity}}"></td>
    <td class="totall">{{$cart->totall}}</td>
    <td><a href="{{route('cart.delete',$cart->id)}}">Delete</a></td>
   
    </tr>
    @endforeach
  
    <button type="submit">update</button>

  

</form>



<div class="coupon " style="margin-bottom: 10px">
    <form action="{{ route('cart.index') }}" method="get">
        @csrf
        <input type="text" name ='coupon_code' placeholder="coupon">
        <button type="submit">apply coupon</button>
    </form>
</div>

</table>


<table border="1" style="margin-top: 20px">

    <tr>
        <th>subtotal</th>
        <td class="subTotal">{{ $total }}</td>
    </tr>
    <tr>
        <th>Discount</th>
        <td class="discount">{{ $discount  }} </td>
    </tr>
    <tr>
        <th>Grand Total</th>
        <td class="GrandTotal">{{ $grandTotal }}</td>
    </tr>
</table>













<script>
   let quantity = document.querySelectorAll('.quantity');
   let totall = document.querySelectorAll('.totall');
   let price = document.querySelectorAll('.price');
   let subTotal = document.querySelector('.subTotal');
   let GrandTotal = document.querySelector('.GrandTotal');
   let discount = document.querySelector('.discount');
   
   {{--  all total   --}}
  quantity.forEach(function(qun,index){
    qun.addEventListener('change',function(){
        let tot = price[index].innerHTML*qun.value;
        totall[index].innerHTML = tot
        {{--  subTotal  --}}
        let sub = 0
        totall.forEach(function(total,index){
          sub += parseInt(total.innerHTML)
           
        })
        subTotal.innerHTML=sub;
        GrandTotal.innerHTML = sub - sub*discount.innerHTML/100;
    })     
    })    

    
    


</script>




