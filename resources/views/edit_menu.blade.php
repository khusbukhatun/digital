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
  <h2>Update Member</h2>
  <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="dish_name">Dish_Name:</label>
      <input type="text" class="form-control" value="{{ $menu->dish_name ?? null }}" id="name" placeholder="Enter dish_name" name="dish_name">
    </div>
    <div class="form-group">
      <label for="dish_quality">Dish_Quality:</label>
      <input type="text" class="form-control" value="{{ $menu->dish_quality ?? null }}" placeholder="Enter dish_quality" name="dish_quality">
    </div>


    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" value="{{ $menu->price ?? null }}" placeholder="Enter price" name="price">
    </div>

    <div class="form-group">
      <label for="cover">Cover:</label>
      <input type="file" class="form-control" value="{{ $menu->cover ?? null }}" placeholder="Enter cover" name="cover">
    </div>



    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>

@endsection
