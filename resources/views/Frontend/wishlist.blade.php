<h1>Wishlist</h1>


<table border="1">
    <tr>
        
        <th>
            product Image
        </th>
        <th>product price</th>
        <th>Delete</th>
        
    </tr>

    @csrf
    @foreach ($wishlists as $wishlist)
    <tr>
        
        <td><img src="{{url($wishlist->product->product_img[0])}}" width="50" alt=""></td>
        <td>{{$wishlist->product->price}}</td>
        <td><a href="{{route('wishlistToCart.update',$wishlist->product_id)}}">Add to cart(wish to cart)</a></td>
    <td><a href="{{route('wishlist.delete',$wishlist->id)}}">Delete</a></td>
    
    </tr>
    @endforeach

  
    

</table>






