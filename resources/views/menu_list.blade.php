@extends('backend.layouts.master')
@section('content')

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">

<thead>
    <tr>
        <th scope='col'>id</th>
        <th scope='col'>Dish_Name</th>
        <th scope='col'>Dish_Quality</th>
        <th scope='col'>Price</th>
        <th scope='col'>Cover</th>
        <th scope='col'>Action</th>
    </tr>
</thead>
<tbody>
    @if(isset($menus))
        @foreach($menus as $menu)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $menu->dish_name }}</td>
        <td>{{ $menu->dish_quality }}</td>
        <td>{{ $menu->price }}</td>
        <td>
            <img src="{{ $menu->cover }}" height="50px" width="80px">

        </td>

            <td>
            <a href="{{ route('menus.edit', $menu->id) }}">Edit</a>
            <a href="{{ route('menus.delete', $menu->id) }}">Delete</a>
            </td>
    </tr>
        @endforeach
    @endif
</tbody>

</table>



@endsection
