<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;

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

// middleware(['auth']) - Check for authenticaion, if not logged in. 
// Go to login page

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Auth::routes();


Route::post('follow/{user}', [FollowsController::class, 'store']);

Route::get('/profile/{user}', [ProfilesController::class, 'index']
)->name('profile.show');
Route::patch('/profile/{user}', [ProfilesController::class, 'update']
)->name('profile.update');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit']
)->name('profile.edit');

Route::get('/', [PostsController::class, 'index']);
Route::post('/post', [PostsController::class, 'store']
)->name('post.store');
Route::get('/post/create', [PostsController::class, 'create']
)->name('post.create');
Route::get('/post/{post}', [PostsController::class, 'show']
)->name('post.show');

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
