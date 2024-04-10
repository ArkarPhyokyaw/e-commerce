@extends('layout.master')
@section('title','Admin Home page')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-4">
            @include("layout.admin_sidebar")
        </div>
        <div class="col-md-8"></div>
    </div>
</div>

@endsection 