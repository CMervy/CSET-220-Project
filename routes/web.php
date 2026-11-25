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
Route::get('/patient-of-doctor', function () {
    return view('patient-of-doctor');
});
Route::get('/doctor-home', function () {
    return view('doctor-home');
});
Route::get('/payment', function () {
    return view('payment');
});