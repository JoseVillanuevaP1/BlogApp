<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [HomeController::class, "show"]);

Route::controller(PostsController::class)->group(function () {
    Route::get('/posts/create', "create");
    Route::get('/posts/{post}', "show");
    Route::post('/posts', "store");
    Route::get('/posts/{post}/edit', "edit");
    Route::patch('/posts/{post}', "update");
    Route::delete('/posts/{post}', "destroy");
});
