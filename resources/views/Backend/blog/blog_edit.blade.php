<h1>Blog Edit Page</h1>
<form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div style="margin-bottom: 10px">
    <input type="file"  name='features_img' placeholder='blog Image'>
    </div>
    <img src="{{url($blog->features_img)}}" width="50" alt="">
    <div style="margin-bottom: 10px">
    <input type="text" value="{{$blog->author_name}}" name='author_name' placeholder='Author Name'>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" value="{{$blog->tag}}" name='tag' placeholder='tag'>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" value="{{$blog->title}}" name='title' placeholder='blog Title'>
    </div>
    <div style="margin-bottom: 10px">
         
        <textarea name='description' placeholder='blog Description' cols="30" rows="10">{{$blog->description}}</textarea>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name='meta_title' value="{{$blog->meta_title}}" placeholder='Meta Title'>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name='meta_description' value="{{$blog->meta_description}}" placeholder='Meta Description'>
    </div>
    <button type="submit">Submit</button>
</form>