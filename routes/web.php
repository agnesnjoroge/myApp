<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',function(){
  return view('index');
})->name('index');
Route::get('/about',function(){
  return view('about');
});
//Route::get('/items',function(){
  //return view('items');
//});
Route::get('/contact',function(){
  return view('contact');
});
//Route::get('/user/{id}', function (string $id) {      
    // return 'User '.$id;
  
//});

Route::view('/welcome','welcome');
//Route::view('/items','items');
Route::resource('items', itemController::class);