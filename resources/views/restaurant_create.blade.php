@extends('backend.layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    div.container {
        width: 500px;
        color: #111;
    }
    
    div.container div.form-group input{
      color:red;
    }
   
    div.container h2 {
        text-align: center;
      }

    div.container button.btn {
        border: 1px dashed #111;
        color: #111;
    }

    div.container button.btn:hover, div.container button.btn:focus {
        background-color: lightskyblue;
    }
</style>

</head>
<body>

<div class="container">
  <h2>Insert restaurant</h2>
  <form action="{{ route('restaurant.submit') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control"  id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control"  placeholder="Enter description" name="description">
    </div>

    <div class="form-group">
      <label for="location">Location:</label>
      <input type="text" class="form-control"  placeholder="Enter location" name="location">
    </div>

    <div class="form-group">
      <label for="rating">Rating:</label>
      <input type="text" class="form-control"  placeholder="Enter rating" name="rating">
    </div>

    <button type="submit" class="btn btn-default">insert</button>
  </form>
</div>

</body>
</html>

@endsection