<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function(){
    return "Hello, world";
});

Route::get('/',[Controller::class. 'index']);
Route::get('/', 'Controller@index');