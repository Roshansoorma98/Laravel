<?php

use App\Http\Controllers\userController;

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [userController::class,'showUser'])->name('home');
Route::get('/user/{id}', [userController::class,'singleUser'])->name('view.user');

Route::post('/add', [userController::class,'addUser'])->name('addUser');

Route::post('/update/{id}', [userController::class,'updateUser'])->name('update.user');

Route::get('/delete/{id}', [userController::class,'deleteUser'])->name('delete.user');
Route::get('/deleteing/{id}', [userController::class,'deleteuser1'])->name('delete.user1');

Route::view('newuser','/adduser');
Route::post('/newuser', [UserController::class, 'addUser'])->name('newuser');

Route::get('/updatepage/{id}', [userController::class,'updatePage'])->name('update.page');
// Route::get('/users/{id}', function ($id) {
//     return view('user', ['data' => $id]);
// })->name('view.user');