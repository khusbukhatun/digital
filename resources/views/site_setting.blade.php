@extends('backend.layouts.master')
@section('content')

<form method="post" enctype="multipart/form-data" action="{{ route('update.setting')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">system name</label>
      <input type="text" class="form-control"  aria-describedby="emailHelp" name="system_name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Phone</label>
      <input type="text" class="form-control" name="phone" >
    </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">address</label>
        <input type="text" class="form-control" name="address" >
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">slogan</label>
        <input type="text" class="form-control"   name="slogan">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Facebook</label>
        <input type="text" class="form-control"   name="facebook">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">instagram</label>
        <input type="text" class="form-control"  name="instagram" >
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">twitter</label>
        <input type="text" class="form-control"   name="twitter">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">logo</label>
        <input type="file" class="form-control"  name="logo" >
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">copyright</label>
        <input type="text" class="form-control"   name="copyright ">
      </div>

    <button type="submit" class="btn btn-primary">update</button>
  </form>



@endsection


