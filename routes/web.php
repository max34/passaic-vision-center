<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return View('index');
});

Route::get('home', function()
{
    return View('index');
});

Route::get('staff',function(){
    return View('staff');
});

Route::get('services', function(){
    return View('services');
});

Route::get('contact', function(){
    return View('contact');
});

Route::get('blog', function(){
    return View('blog');
});