<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test1Controller;
use App\Http\Controllers\testController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});



Route::resource('test', test1Controller::class );

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
