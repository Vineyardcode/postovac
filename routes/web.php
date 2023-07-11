<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();
    return view('home', ['posts' => $posts]);
});

//create
Route::post('/create-post', [PostController::class, 'createPost']);

//read
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);

//update
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);

//delete
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);

//save
// Route::save('/', [PostController::class, 'savePost']);

