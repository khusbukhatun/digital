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
  <h2>Insert menu </h2>
  <form action="{{ route('menu.submit') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="dish_name">Dish_Name:</label>
      <input type="text" class="form-control"  placeholder="Enter dish_name" name="dish_name">
    </div>
    <div class="form-group">
      <label for="dish_quality">Dish_Quality:</label>
      <input type="text" class="form-control"  placeholder="Enter dish_quality" name="dish_quality">
    </div>


    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" placeholder="Enter price" name="price">
    </div>

    <div class="form-group">
      <label for="cover">Cover:</label>
      <input type="file" class="form-control" placeholder="Enter cover" name="cover">
    </div>



    <button type="submit" class="btn btn-default">insert</button>
  </form>
</div>

</body>
</html>

@endsection
