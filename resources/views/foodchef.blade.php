@extends('backend.layouts.master')
@section('content')

    <div class="container">

        <form action  method="POST" enctype="multipart/form-data">

            @csrf

          <div class="form-group">
            <label for="name">Name:</label>
            <input  style="color:blue;" type="text" class="form-control"  placeholder="name" name="name">
          </div>

          <div class="form-group">
            <label for="speciality">Speciality:</label>
            <input  style="color:blue;" type="text" class="form-control"  placeholder="Speciality" name="Speciality">
          </div>

          <div class="form-group">
            <label for="price">Price:</label>
            <input  style="color:blue;" type="text" class="form-control" placeholder="Enter price" name="price">
          </div>

          <div class="form-group">
            <label for="image">Image:</label>
            <input  style="color:blue;" type="file" class="form-control" placeholder="Image" name="Image">
          </div>

          <button type="submit" class="btn btn-default">save</button>
        </form>
      </div>
@endsection

