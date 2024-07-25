<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test1Controller;
use App\Http\Controllers\testController;
use App\Http\Controllers\usercontroller;
use Illuminate\Http\Request;


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome')->middleware('auth');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/header', function () {
    return view('header');
})->name('header');

Route::post('/login', [userController::class, 'login']);



Route::get('/register', function () {
    return view('register');
})->name('register')->middleware('auth');



Route::resource('test', test1Controller::class );
Route::resource('users', userController::class );



route::get('/blog', function(Request $request){
   //fonction permettant de me retourner le nom passer en parametre 
    return[
            // "Name"=> $request -> all(),
            "name"=>  $request->input('name'),
            "article"=>"Article1" ,
          ] ;
}) ;
route::get('/blog/1', function(){
    return[
            "Name"=> $_GET["Name"],
            "article"=>"Article1" ,
          ] ;
}) ;

route::get('/greeting',[testController::class,'greeting']);
route::get('/information',[testController::class,'information']);
route::get('/tooday',[testController::class,'tooday']);
route::get('/name',[testController::class,'name']);
route::get('/testn',[test1Controller::class,'index']);
