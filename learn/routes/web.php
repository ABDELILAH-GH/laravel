<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route :: get('/hello',function () {
    return view('hello');
});
