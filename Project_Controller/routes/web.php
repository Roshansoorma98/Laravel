<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestControll;
use App\Http\Controllers\TestingController;


Route::get('/', function () {
    return view('welcome');
});

 Route::controller(TestControll::class)->group(function(){

    Route::get('/','showHome')->name('home');

    Route::get('/users/{id}','showUser')->name('users');
    
    Route::get('/blog','showBlog')->name('blog');

 });


 Route::get('/test',TestingController::Class);