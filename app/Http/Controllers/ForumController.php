<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Heart;

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

    public function edit($id)
    {
        
        $categories=Category::orderby('title', 'asc')->get();
        $post=Post::find($id);
        if(auth()->user()->id == $post->user_id){
        return view('forum.edit')
        ->with('post', $post)
        ->with('categories', $categories);
        }else{
            return redirect('/');
        }
    }

    public function create()
    {
        if(isset(auth()->user()->id)){
            $categories=Category::orderby('title', 'asc')->get();
            return view('forum.create')->with('categories', $categories);
        } else{
            return redirect('/');  
        }
    }

    public function store(Request $request)
    {
        if(isset(auth()->user()->id)){
            $post=new Post;
            $post->title=$request->title; 
            $post->category_id=$request->category_id; 
            $post->content=$request->content; 
            $post->save();
        } 

       $result=$request->all();

       $data=array(
        'result'=> $result
       );

       return response()->json($data);
    }

    public function update(Request $request)
    {
        if(isset(auth()->user()->id)){
            $post=Post::find($request->post_id);
            $post->title=$request->title; 
            $post->category_id=$request->category_id; 
            $post->content=$request->content; 
            $post->save();
        }

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

        $posts=Post::where('category_id',$id)->orderby('created_at', 'desc')->paginate(3);
        return view('forum.category')
        ->with('posts', $posts)
        ->with('category_title', $category_title);
    }

    public function delete($id)
    {
        
        $post=Post::find($id);
        if(auth()->user()->id == $post->user_id){
           $post->delete();
        }
        return redirect('/');
    }

    public function replyStore(Request $request)
    {
       $reply=new Reply;
       $reply->user_id=auth()->user()->id;
       $reply->post_id=$request->post_id; 
       $reply->reply=$request->reply;
       $reply->save();
       
       return redirect('/'.$request->post_id.'/view');

    }

    public function heart(Request $request)
    {
       if(isset(auth()->user()->id)){
        $post_id=$request->post_id;
        $user_id=auth()->user()->id;
 
        $hearts=Heart::where('post_id', $post_id)->where('user_id', $user_id)->get();
        if(count($hearts)>0){
            foreach($hearts as $heart){
                $heart->delete();
            }
         
            }else{
            $heart=new Heart;
            $heart->user_id=$user_id;
            $heart->post_id=$post_id;
            $heart->save();
        }
      
       }
 
       return redirect('/'.$request->post_id.'/view');

    }

}
