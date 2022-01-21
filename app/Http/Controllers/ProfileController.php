<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index(){
        if (auth()->id() != implode(\request(['id']))) {
            //Has no permissions
            abort(403);
        }
        return view('profile');
    }

    // Update profile
    public function update(){
        $attributes = \request()->validate([
            "username" => 'required',
            "name" => 'required',
            "email" => 'required'
        ]);
        User::where('id', auth()->id())->update($attributes);

        return redirect('/');
    }
}
