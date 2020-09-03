<h1>Blog page</h1>
@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<a href="{{route('contact.create')}}">create Contact</a>
<table border="1">
    <tr>
       
        <th>phone</th>
        <th>street</th>
        <th>distric</th>
        <th>address</th>
        <th>days</th>
        <th>hours</th>
        <th>Action</th>
        <th>Action</th>
        <th>Send Message</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->street }}</td>
        <td>{{ $contact->distric }}</td>
        <td>{{ $contact->address }}</td>
        <td>{{ $contact->days }}</td>
        <td>{{ $contact->hours }}</td>
      
        <td><a href="{{ route('contact.edit',$contact->id) }}">edit</a></td>
        <td><a href="{{ route('contact.delete',$contact->id) }}">Delete</a></td>
        <td>
            <form action="{{route('contact.message')}}" method="POST">
                @csrf
                    <input type="text" name="fname" placeholder="Enter name">
                    <input type="email" name="email" placeholder="Enter  Email">
                    <input type="text" name="subject" placeholder="Enter Subject">
                      <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                  <button type="submit">Post Comment</button>
                </form>
        </td>
    </tr>
       
    @endforeach

       
 

</table>