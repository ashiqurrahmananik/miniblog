<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomepageController extends Controller
{
    public function show_post()
    {
        $posts = Post::all();
        return view('homepage',['posts'=>$posts]);
    }
}
