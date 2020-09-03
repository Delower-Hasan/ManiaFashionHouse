<h1>Contact form page</h1>
<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div style="margin-bottom: 10px">
        <input type="text" name="phone" placeholder="Enter phone">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="street" placeholder="Enter street">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="distric" placeholder="Enter distric">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="address" placeholder="Enter address">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="days" placeholder="Enter days">
    </div>
    <div style="margin-bottom: 10px">
        <input type="text" name="hours" placeholder="Enter hours">
    </div>
    <button type="submit">Submit</button>
   



</form>