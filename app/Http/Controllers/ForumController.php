<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class ForumController extends Controller
{
    public function index()
    {
        return view('forum.index');
    }

    public function view($id)
    {
        $post=Post::find($id);
        return view('forum.view')
        ->with('post', $post);
    }

    public function create()
    {
        $categories=Category::orderby('title', 'asc')->get();
        return view('forum.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
       $post=new Post;
       $post->title=$request->title; 
       $post->category_id=$request->category_id; 
       $post->content=$request->content; 
       $post->save();

       $result=$request->all();

       $data=array(
        'result'=> $result
       );

       return response()->json($data);
    }

    public function category($id)
    {
        $category=Category::find($id);
        $category_title=$category->title;

        $posts=Post::where('category_id',$id)->orderby('created_at', 'desc')->get();
        return view('forum.category')
        ->with('posts', $posts)
        ->with('category_title', $category_title);
    }

}
