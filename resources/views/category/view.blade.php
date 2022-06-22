@extends('layouts.forum')

@section('content')
     <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <input type="text" class="form-control" value="{{$category->title}}">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-info me-md-2" type="button">Update</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                </div>
            </div>
        </div>
     </div>
@endsection