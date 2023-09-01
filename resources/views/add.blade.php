@extends('layout')


@section('content')
<h2>Add a user</h2>
<form action="add" method="post">
    @csrf
    <div class="col-sm-6">
 
  <div class="form-group">
    
    <input type="first_name" class="form-control" name="first_name" placeholder="enter first_name" required>
  </div>
  <div class="form-group">
    
    <input type="last_name" class="form-control" name="last_name" placeholder="enter last_name" required>
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control"  name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    
    <input type="number" class="form-control" name="phone" placeholder="phone" required >
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="address" placeholder="enter  address" required>
  </div>
  <div class="form-group">
    
    <input type="file" class="form-control" name="pic" placeholder="upload pic" required>
  </div>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop