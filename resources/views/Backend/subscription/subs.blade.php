<h1>Subscription home page</h1>

@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<a href="{{route('subscription.create')}}">subscription create</a>
<div style="margin-top: 10px"><a href="{{ route('subscription.email.sent.all') }}">Sent to All Subscriber</a></div>
<table border="1">
    <tr>
       
        <th>Email </th>
        <th>Action</th>
        <th>Action</th>
        
    </tr>
    @foreach ($subs as $sub)
    <tr>
        <td>{{ $sub->email }}</td>
        <td><a href="{{ route('sub.email',$sub->id) }}">Send email</a></td>
        <td><a href="{{ route('subscription.delete',$sub->id) }}">Delete</a></td>
       
    </tr>
       
    @endforeach

       
 

</table>