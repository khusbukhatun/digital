@extends('backend.layouts.master')
@section('content')

<style>
    button.btn {
        background-color: rgb(45, 106, 240);
        color: #ffffff;
    }

    button.btn:hover {
        text-decoration: 2px underline rgb(3, 51, 11);
        color: #ffffff;
    }

    input[type=file] {
        background: none;
        border: none;
        text-decoration: 3px underline rgba(96, 68, 255, 0.671);
    }

    input::placeholder {
        text-decoration: 2px underline rgba(57, 46, 124, 0.671);
        padding: 3px 2px;
    }

</style>

<div class="container">

    <form class="form-horizontal" action="{{ route('update.setting') }}" method="POST" enctype="multipart/form-data"
        name="form">

        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2">Logo:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" value="{{ $settings ? $settings->logo : '' }}" name="logo">
            </div>
        </div>

        @if (isset($settings)  && $settings->logo)
        <div class="form-group">
            <img src="{{ $settings ? $settings->logo : '' }}" height="100px" width="auto" alt="">
        </div>
        @endif

        <div class="form-group">
            <label class="control-label col-sm-2">system_name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter system_name" value="{{ $settings ? $settings->system_name : '' }}" name="system_name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">phone:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter phone" value="{{ $settings ? $settings->phone : '' }}" name="phone">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter address" value="{{ $settings ? $settings->address : '' }}" name="address">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">slogan:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter slogan" value="{{ $settings ? $settings->slogan : '' }}" name="slogan">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">facebook:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter facebook link" value="{{ $settings ? $settings->facebook : '' }}" name="facebook">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">instagram:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter instagram link" value="{{ $settings ? $settings->instagram : '' }}" name="instagram">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">twitter:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter twitter link" value="{{ $settings ? $settings->twitter : '' }}" name="twitter">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">Copyright:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Copyright" value="{{ $settings ? $settings->copyright : '' }}" name="copyright">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
        </div>

    </form>
</div>

@endsection


