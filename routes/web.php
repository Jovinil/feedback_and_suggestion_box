<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/login', function () {
//     return view('dashboard');
// });

Route::view('/', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/dashboard', 'boxes.index')->name('dashboard');
Route::view('/boxes/create', 'boxes.create')->name('boxes.create');
Route::view('/boxes/{box}', 'boxes.show')->name('boxes.show');
Route::view('/user/box', 'user.box')->name('user.box');
Route::view('/feedback/create', 'feedback.create')->name('feedback.create');

