<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index',compact('posts'));
    }
    public function create(){
        return view('posts.create');
    }

    public function show(Post $post){
        return view('posts.show',compact('post'));
    }
    public function store(){

        $this->validate(\request(),[
            'title'=>'required',
            'body'=>'required'
        ]);
       // dd(Post::created(request(['title','body'])));
//        $post = new Post;
//
//        $post->title = request('title');
//        $post->body  = request('body');
       Post::create(request(['title','body']));

//         $post->save();

       return redirect('/');
    }

}
