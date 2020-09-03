<form action="{{ route('catagory.post') }}"  method='post'>
    @csrf
    <label for="Catagory">Add Catagory</label>
    <input type="text" id="Catagory" name="catagory_name" placeholder="Add Catagory">
    <button type="submit">Add</button>
</form>
