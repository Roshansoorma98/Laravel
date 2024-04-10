<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('categories',[App\Http\Controllers\categoryController::class, 'index']);
Route::get('categories/create',[App\Http\Controllers\categoryController::class, 'create']);
Route::post('categories/create',[App\Http\Controllers\categoryController::class, 'store']);
Route::get('categories/{id}/edit',[App\Http\Controllers\categoryController::class, 'edit']);
Route::put('categories/{id}/edit',[App\Http\Controllers\categoryController::class, 'update']);
Route::get('categories/{id}/delete',[App\Http\Controllers\categoryController::class, 'destroy']);





