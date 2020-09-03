<h1>Contact form page</h1>
<form action="{{ route('about.store') }}" method="POST">
    @csrf
    <div style="margin-bottom: 10px">
        <input type="text" name="about_title" placeholder="Enter about title">
    </div>
    <div style="margin-bottom: 10px">
        <textarea  name="short_notes" placeholder="Enter short notes" id="" cols="30" rows="10"></textarea>
       
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="quotes" placeholder="Enter quotes">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="author_name" placeholder="Enter author name">
    </div>
    <div style="margin-bottom: 10px">
        <textarea name="our_story" placeholder="Enter our story" cols="30" rows="10"></textarea>
   
    </div>
    
    <button type="submit">Submit</button>
   



</form>