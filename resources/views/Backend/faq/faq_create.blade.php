
<h1>FAQ page</h1>
<form action="{{ route('faq.store') }}" method="POST">
    @csrf
    <div style="margin-bottom: 10px">
        <input type="text"  name="question_about" placeholder="Question About">
    </div>
   
    <div style="margin-bottom: 10px">
        <input type="text"   name="question" placeholder="Enter quotes">
    </div>
    <div style="margin-bottom: 10px">
        <textarea  name="answer" placeholder="Enter short notes" id="" cols="30" rows="10">
           
        </textarea>
    </div>

    <div style="margin-bottom: 10px">
        <select name="status" id="">
            <option  value="1">Active</option>
            <option   value="0">Deactive</option>
        </select>
       
    </div>
   
    
    <button type="submit">Submit</button>
   



</form>