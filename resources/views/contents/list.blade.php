@extends('main')
@section('content')

<div style="margin-top: 10px;margin-left: 1000px;"> <a href="{{url('/employee/create')}}" class="btn btn-primary" >Create new employee</a> </div>
<div class="col-12 " style="margin-top: 50px;margin-left: 50px;margin-right: 50px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">AGE</th>
      <th scope="col">Email</th>
      <th> Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($employees as $people)
      <th scope="row">{{$people->id}}</th>
      <td>{{$people->name}}</td>
      <td>{{$people->age}}</td>
      <td>{{$people->email}}</td>
      <td>
        <a href="/employee/{{ $people->id }}/edit"  class="btn btn-success">Sua</a>
        <a href="/employee/{{ $people->id }}/delete" class="btn btn-primary">Xoa</a>
      </td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>
</div>
@endsection
