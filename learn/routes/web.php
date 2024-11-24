<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('1_routage.welcome');
}) ;
//1_routage
/*Route::get('/employee/{id?}' , function ($id = 0) {
    return view('1_routage.employee');
})->name('employee');
Route::get('/employee/{id}/subordinates/',function($id){
return view('1_routage.subordinates');
})->name('subordinates');
Route::get('/employee/{id}/subordinates/{subordinateId}', function ($id,
$subordinateId) {
return view('1_routage.subordinateDetails');
})->name('subordinateDetails');
Route::get('/links',function (){
    return view('1_routage.links');
})->name('links');*/

