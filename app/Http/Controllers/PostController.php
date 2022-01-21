<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->Where('active', 1)->filter(request(['search', 'category', 'author']))->get(),

            'count' => Post::where('user_id', auth()->id())->count()


        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
            'count' => Post::where('user_id', auth()->id())->count()
        ]);
    }

    public function active(Post $post){
        if ($post->active){
            Post::where('id',$post['id'])->update(['active' => false]);

        }
        else{
            Post::where('id',$post['id'])->update(['active' => true]);
        }
        return back();
    }
}
