<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    

    public function index()
    {
        $posts = Post::all();


        return view('posts.index', [
            "posts" => $posts,
        ]);
        
    }


    public function create()
    {
        
        return view('posts.create',[
            "page_title" => "Creer un poste"
        ]);
    }


    public function save(Request $request)
    {
        Post::create([
            'content' => $request->content
        ]);
    }

}
