<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/roles', function () {
    return view('roles');
});
Route::get('/patients', function () {
    return view('patients');
});
Route::get('/registration-approval', function () {
    return view('registration-approval');
});