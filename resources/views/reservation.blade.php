@extends('backend.layouts.master')
@section('content')

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">


    <tr>
        <th scope='col'>Name</th>
        <th scope='col'>Email</th>
        <th scope='col'>Phone</th>
        <th scope='col'>Guest</th>
        <th scope='col'>Date</th>
        <th scope='col'>Time</th>
        <th scope='col'>Message</th>

    </tr>
@foreach ($data as $data )


<tr>

    <td>{{ $data->name }}</td>
    <td>{{ $data->email }}</td>
    <td>{{ $data->phone }}</td>
    <td>{{ $data->guest }}</td>
    <td>{{ $data->date }}</td>
    <td>{{ $data->time }}</td>
    <td>{{ $data->message }}</td>
</tr>
@endforeach
</table>
@endsection
