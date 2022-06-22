@extends('layouts.forum')

@section('content')
   <div class="container">
     <div class="row mt-3">
        <div class="col-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{url('/')}}/create" class="btn btn-success" type="button">New Post</a>
            </div>
        </div>
     </div>
     <hr>

     @php
        $categories=App\Models\Category::orderby('title','asc')
        ->get();    
     @endphp
     @if(count($categories)>0)
     @foreach($categories as $category)
     @php
      $posts=App\Models\Post::where('category_id', $category->id)->orderby('created_at', 'desc')->limit(3)->get();
     @endphp
     @if(count($posts)>0)
     <div class="row mt-3">
        <div class="col-12">
            <h4>{{$category->title}}</h4>
            <ul class="list-group">
               @foreach($posts as $post)

                <li class="list-group-item list-group-item-action">
                  <a href="{{url('/')}}/1/view">{{$post->title}}</a>
                    <span class="badge bg-info text-dark"><i class="fa-solid fa-comment-dots"></i></i> 4</span>
                    <span class="badge bg-danger"><i class="fa-solid fa-heart"></i> 3</span>
                    <br>
                    <small>2022-06-21 | by SB Hero</small>
                </li>
                @endforeach
            </ul>
            
            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-dark" type="button">All postings of Movie</button>
                 </div>
            </div>
        </div>
     </div>
     <hr>
     @endif
     @endforeach
     @endif
     
   </div>
@endsection