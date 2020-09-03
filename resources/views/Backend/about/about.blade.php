<h1>About home page</h1>

@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<a href="{{route('about.create')}}">create Contact</a>
<table border="1">
    <tr>
       
        <th>about_title</th>
        <th>short_notes</th>
        <th>quotes</th>
        <th>author_name</th>
        <th>our_story</th>
 
        <th>Action</th>
        <th>Action</th>
        
    </tr>
    @foreach ($abouts as $abouts)
    <tr>
        <td>{{ $abouts->about_title }}</td>
        <td>{{ $abouts->short_notes }}</td>
        <td>{{ $abouts->quotes }}</td>
        <td>{{ $abouts->author_name }}</td>
        <td>{{ $abouts->our_story }}</td>
      
      
        <td><a href="{{ route('about.edit',$abouts->id) }}">edit</a></td>
        <td><a href="{{ route('about.delete',$abouts->id) }}">Delete</a></td>
       
    </tr>
       
    @endforeach

       
 

</table>