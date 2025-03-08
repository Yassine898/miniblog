<?php

namespace App\Http\Controllers;
use App\Models\Post;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('index',compact('posts'));
    }

    public function show(Post $post){
        return view('show',compact('post'));
    }
    public function form(){
        return view('form');
    }
    public function store(){
         Post::create(['title'=>request('title'),'content'=>request('content')]);
         return back();
    }

    public function destroy(Post $post) {
        $post->delete(); // Deletes the post from the database
        return back();
    }

    public function editform(Post $post){
        return view('edit',compact('post'));
    }
    public function update(Post $post){
        $post->update([
            'title'=>request('title'),
            'content'=>request('content')
        ]);
        return redirect()->route('post.show',$post->id);
    }
}
