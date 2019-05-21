<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        $posts = Post::all();
//        $posts = Post::with('author')->get();
        return view('post', compact('posts'));
    }

    public function postJson()
    {
        $posts = Post::all();
        $postsList = [];
        /** @var Post $post */
        foreach ($posts as $post){
            $temp = [];
            $temp['title'] = $post->title;
            $temp['authorName'] = $post->author->name;
            $postsList[] = $temp;
        }
        return response()->json(['postList' =>$postsList]);
    }
}
