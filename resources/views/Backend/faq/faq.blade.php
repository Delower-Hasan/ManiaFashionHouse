<h1>FAQ home page</h1>

@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> {{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<a href="{{route('faq.create')}}">create Faq</a>
<table border="1">
    <tr>
       
        <th>Question Title</th>
        <th>Question</th>
        <th>Answer</th>
        <th>Status</th>
    
 
        <th>Action</th>
        <th>Action</th>
        
    </tr>
    @foreach ($faqs as $faq)
    <tr>
        <td>{{ $faq->question_about }}</td>
        <td>{{ $faq->question }}</td>
        <td>{{ $faq->answer }}</td>
        <td>
           @if ($faq->status==1)
            Active    
            
            @elseif ($faq->status==0)
                Deactive
           @endif
                
        </td>
        
      
      
        <td><a href="{{ route('faq.edit',$faq->id) }}">edit</a></td>
        <td><a href="{{ route('faq.delete',$faq->id) }}">Delete</a></td>
       
    </tr>
       
    @endforeach

       
 

</table>