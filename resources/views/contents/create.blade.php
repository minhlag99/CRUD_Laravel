@extends('main')
@section('content')

<div class="col col-12">
<div style="margin-top:50px;text-align:center;" ><h1>CREATE EMPLOYEE FORM</h1></div>
<form action="{{URL::to('/employee/create')}}" method="post">
@csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">NAME</span>
  <input type="text" class="form-control" name="name" placeholder="NAME" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">AGE</span>
  <input type="text" class="form-control" name="age" placeholder="AGE" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">EMAIL</span>
  <input type="text" class="form-control" name="email" placeholder="EMAIL" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
 <div>
 <input type="submit"  class="btn btn-primary " value="Submit" aria-describedby="basic-addon1">
 </div>
  
</div>
</form>
</div>
@endsection