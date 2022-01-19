<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
//    public function edit(Post $post)
//    {
//        return view('profile', ['post' => $post]);
//    }

    public function edit()
    {
        return view('profile')->with('user', auth()->user());
    }
}
