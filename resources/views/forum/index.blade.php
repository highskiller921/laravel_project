@extends('layouts.forum')

@section('content')
   <div class="container">
     <div class="row mt-3">
        <div class="col-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success" type="button">New Post</button>
            </div>
        </div>
     </div>
     <hr>
     <div class="row mt-3">
        <div class="col-12">
            <h4>Movie</h4>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                  <a href="{{url('/')}}/1/view">School opens in April.</a>
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-comment-dots"></i></i> 4</span>
                    <span class="badge bg-danger"><i class="fa-solid fa-heart"></i> 3</span>
                    <br>
                    <small>2022-06-21 | by SB Hero</small>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    School opens in April.
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-comment-dots"></i></i> 4</span>
                    <span class="badge bg-danger"><i class="fa-solid fa-heart"></i> 3</span>
                    <br>
                    <small>2022-06-21 | by SB Hero</small>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    School opens in April.
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-comment-dots"></i></i> 4</span>
                    <span class="badge bg-danger"><i class="fa-solid fa-heart"></i> 3</span>
                    <br>
                    <small>2022-06-21 | by SB Hero</small>
                </li>
            </ul>
            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-dark" type="button">All postings of Movie</button>
                 </div>
            </div>
        </div>
     </div>
     <hr>
     <div class="row mt-5">
        <div class="col-12">
            <h4>Music</h4>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    <a href="{{url('/')}}/1/view">School opens in April.</a> 
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-comment-dots"></i></i> 4</span>
                    <span class="badge bg-danger"><i class="fa-solid fa-heart"></i> 3</span>
                    <br>
                    <small>2022-06-21 | by SB Hero</small>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    School opens in April.
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-comment-dots"></i></i> 4</span>
                    <span class="badge bg-danger"><i class="fa-solid fa-heart"></i> 3</span>
                    <br>
                    <small>2022-06-21 | by SB Hero</small>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">
                    School opens in April.
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-comment-dots"></i></i> 4</span>
                    <span class="badge bg-danger"><i class="fa-solid fa-heart"></i> 3</span>
                    <br>
                    <small>2022-06-21 | by SB Hero</small>
                </li>
            </ul>
            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-dark" type="button">All postings of Movie</button>
                 </div>
            </div>
        </div>
     </div>
   </div>
@endsection