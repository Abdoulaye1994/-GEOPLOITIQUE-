<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class,'index')->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('post.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
  //  Route::get('/dashboard', function () {
      //  return view('dashboard');
   // })->name('dashboard');
});
