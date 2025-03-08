<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;


class CommentController extends Controller
{
    public function store(Post $post){
        $post->comments()->create(['content'=>request('content')]);
        return back();
    }
    public function destroy(Comment $comment){
        $comment->delete();
        return back();
    }
}
 