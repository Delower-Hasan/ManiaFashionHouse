<h1>Blog create Page</h1>
<form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div style="margin-bottom: 10px">
        <input type="file" name='features_img' placeholder='blog Image'>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name='author_name' placeholder='Author Name'>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name='tag' placeholder='tag'>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name='title' placeholder='blog Title'>
    </div>
    <div style="margin-bottom: 10px">
         
        <textarea name='description' placeholder='blog Description' cols="30" rows="10"></textarea>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name='meta_title' placeholder='Meta Title'>
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name='meta_description' placeholder='Meta Description'>
    </div>
    <button type="submit">Submit</button>
</form>