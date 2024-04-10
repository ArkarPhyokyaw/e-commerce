@extends('layout.master')
@section('title','Category Created')
@section('content')



<h1 class="text-danger text-center">Created category </h1>
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <form action="/admin/category/created" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="file">file</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <input type="hidden" name="token" value="{{\App\Classes\CSRFToken::_token()}}">
                <div class="row justify-content-end no-gutters mt-4">
                        <button type="submit" class="btn btn-primary ">Created</button>
                </div>
            </form>
        </div>
    </div>

@endsection 
