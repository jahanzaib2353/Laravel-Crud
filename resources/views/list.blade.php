@extends('layout')
@section('content')

<h1>List of the users</h1>
@if(Session::has('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ Session::get('status') }}</strong> you have done.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">pic</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->first_name}}</td>
      <td>{{$item->last_name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->pic}}</td>
      <td><a href="delete/{{$item->id}}"><i class="fa fa-trash margin-right ">Delete</i></a></td>
      <td><a href="edit/{{$item->id}}"><i class="fa fa-edit">Edit</i></a></td>

    </tr>
  @endforeach
  </tbody>
</table>
  
@stop