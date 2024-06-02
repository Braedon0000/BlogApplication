<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::group(['prefix'=>'ideas/','as'=>'idea','middleware'=>['auth']],function(){

});

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create')->WithoutMiddleware(['auth']);
Route::delete('/idea/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy')->middleware('auth');
Route::get('/idea/{idea}', [IdeaController::class, 'show'])->name('idea.show')->WithoutMiddleware(['auth']);
Route::get('/idea/{idea}/edit', [IdeaController::class, 'edit'])->name('idea.edit')->middleware('auth');
Route::put('/idea/{idea}', [IdeaController::class, 'update'])->name('idea.update')->middleware('auth');
Route::post('/idea/{idea}/comments', [CommentController::class, 'store'])->name('idea.comments.store')->middleware('auth');
 Route::resource('users', UserController::class)->only('show','edit','update')->middleware('auth');
 Route::get('profile',[UserController::class,'profile'])->middleware('auth')->name('profile');

 Route::delete('/idea/{idea}/comments', [CommentController::class, 'destroy'])->name('idea.comments.destroy')->middleware('auth');
Route::get('/idea/{idea}/comments', [CommentController::class, 'show'])->name('idea.comments.show')->WithoutMiddleware(['auth']);
Route::get('/idea/{idea}/comments', [CommentController::class, 'edit'])->name('idea.comments.edit')->middleware('auth');
Route::put('/idea/{idea}/comments', [CommentController::class, 'update'])->name('idea.comments.update')->middleware('auth');

// Route::post('users/{user}/follow',[FollowerController::class ,'follow'])->middleware('auth')->name('users.follow');
// Route::post('users/{user}/unfollow',[FollowerController::class ,'unfollow'])->middleware('auth')->name('users.unfollow');
