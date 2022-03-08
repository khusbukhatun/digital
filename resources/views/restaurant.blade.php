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
        <th scope='col'>Name</th>
        <th scope='col'>Description</th>
        <th scope='col'>Location</th>
        <th scope='col'>Rating</th>
        <th scope='col'>Action</th>
    </tr>
</thead>
<tbody>
    @if(isset($restaurants))
        @foreach($restaurants as $restaurant)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $restaurant->name }}</td>
        <td>{{ $restaurant->description }}</td>
        <td>{{ $restaurant->location }}</td>
        <td>{{ $restaurant->rating }}</td>
            <td>
            <a href="{{ route('restaurants.edit', $restaurant->id) }}">Edit</a>
            <a href="{{ route('restaurants.delete', $restaurant->id) }}">Delete</a>
            </td>
    </tr>
        @endforeach
    @endif
</tbody>

</table>
 


@endsection