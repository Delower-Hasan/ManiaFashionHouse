
<h1>FAQ edit page</h1>
<form action="{{ route('faq.update',$faq->id) }}" method="POST">
    @csrf
    <div style="margin-bottom: 10px">
        <input type="text" value="{{ $faq->question_about }}" name="question_about" placeholder="Question About">
    </div>
   
    <div style="margin-bottom: 10px">
        <input type="text" value="{{ $faq->question }}" name="question" placeholder="Enter Question">
    </div>
    <div style="margin-bottom: 10px">
        <textarea  name="answer" placeholder="Enter Answer" id="" cols="30" rows="10">
            {{ $faq->answer }}
        </textarea>
    </div>

    <div style="margin-bottom: 10px">
        <select name="status" id="">
            <option {{ $faq->status==1? 'selected':'' }} value="1">Active</option>
            <option {{ $faq->status==0? 'selected':'' }} value="0">Deactive</option>
        </select>
       
    </div>
   
    
    <button type="submit">Update</button>
   



</form>