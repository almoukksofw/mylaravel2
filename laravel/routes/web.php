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

Route::get('user/{id}/{surename}', function($id,$surname){

})->where(['id'=>'[0-5]+','surename'=>'[a-z]+' ] );