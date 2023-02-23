<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
class Dashboard extends Controller
{
    public function show_post(Request $request)
    {
        $userid=$request->user()->id;

        $posts = Post::where('user_id',$userid)->get();
        return view('dashboard',['posts'=>$posts]);
    }
}
