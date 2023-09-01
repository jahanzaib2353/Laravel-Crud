@extends('layout')


@section('content')
<h2>Edit a user</h2>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>updated successfully!</strong> you have done.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<form action="/edit" method="post">
    @csrf
    <div class="col-sm-6">
        <label>Name</label>
        <input type="hidden" name="id" value ="{{$data->id ?? ''}}">
 
  <div class="form-group">
    
    <input type="first_name" class="form-control" value ="{{$data->first_name ?? '' }}" name="first_name" placeholder="enter first_name" required>
  </div>
  <div class="form-group">
    
    <input type="last_name" class="form-control" value ="{{$data->last_name ?? '' }}" name="last_name" placeholder="enter last_name" required>
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control" value ="{{$data->email ?? '' }}"  name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    
    <input type="number" class="form-control" value ="{{$data->phone ?? '' }}" name="phone" placeholder="phone" required >
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" value ="{{$data->address ?? '' }}" name="address" placeholder="enter  address" required>
  </div>
  <div class="form-group">
    
    <input type="file" class="form-control" value ="{{$data->pic ?? ''}}" name="pic" placeholder="upload pic" required>
  </div>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop