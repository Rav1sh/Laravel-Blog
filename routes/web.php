<?php

//use App\Http\Controllers\AboutController;
//use App\Http\Controllers\TopicController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\updateProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

//Route::get('/about', [AboutController::class, 'index']);
//Route::get('/topics', [TopicController::class, 'index'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('auth');
Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('auth');

Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');

Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');

Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');


Route::get('profile/{id}',[ProfileController::class, 'index'])->middleware('auth');
Route::patch('profile/update',[ProfileController::class, 'update'])->middleware('auth');

Route::patch('forum/posts/{post:id}/active', [PostController::class, 'active'])->middleware('admin');
//Route::get('/profile', [ProfileController::class, 'edit'])->middleware('admin');

//Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile');
//
////Route::get('profile/{id}',[ProfileController::class, 'index'])->middleware('auth');
//Route::patch('profile/update',[ProfileController::class, 'update'])->middleware('auth');
