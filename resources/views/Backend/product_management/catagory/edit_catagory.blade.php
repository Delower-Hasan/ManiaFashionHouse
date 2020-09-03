<form action="{{ route('catagory.update',$catagory->id) }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Update Catagory address</label>
      <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $catagory->catagory_name }}"  name="catagory_name" aria-describedby="emailHelp" placeholder="Enter Catagory">

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
