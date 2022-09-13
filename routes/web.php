<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',function(){
    return view('home');
})->name('website');
Route::get('/about',function(){
    return view('about');
});

Route::get('/category',function(){
    return view('category');
});
Route::get('/post',function(){
    return view('post');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/test',function(){
    return view('admin');
});
Route::resource('category', CategoryController::class);

