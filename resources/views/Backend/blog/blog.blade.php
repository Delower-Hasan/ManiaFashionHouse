<h1>Blog page</h1>
@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<a href="{{route('blog.create')}}">create Blog</a>
<table border="1">
    <tr>
        <th>blog Image</th>
        <th>Blog Title</th>
        <th>Blog Description</th>
        <th>Author name</th>
        <th>Tag</th>
        <th>Blog meta title</th>
        <th>Blog meta Description</th>
        <th>Comment</th>
        <th>Action</th>
        <th>Action</th>
        <th>post Comment</th>
    </tr>

    @foreach ($blogs as $blog)
        <tr>
        <td><img src="{{url($blog->features_img)}}" width="50" alt=""></td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->description}}</td>
        <td>{{$blog->author_name}}</td>
        <td>{{$blog->tag}}</td>
        <td>{{$blog->meta_title}}</td>
        <td>{{$blog->meta_description}}</td>
        <td>
          @foreach ($comments as $comment)
              @if ($blog->id == $comment->blog_id)
                  {{ $comment->comment }}
              @endif
          @endforeach
        </td>
        <td><a href="{{route('blog.edit',$blog->id)}}">Edit</a></td>
        <td><a href="{{route('blog.delete',$blog->id)}}">Delete</a></td>
        
        <td>
        <form action="{{route('comment.store',$blog->id)}}" method="POST">
          @csrf
              <input type="text" name="fname" placeholder="Enter your name">
              <input type="email" name="email" placeholder="Enter your Email">
                <textarea name="comment" id="" cols="30" rows="10" placeholder="Your Comment"></textarea>
            <button type="submit">Post Comment</button>
          </form>

        </td>
        </tr>
    @endforeach

</table>