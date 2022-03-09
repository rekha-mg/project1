<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    //return view('welcome');
     return 'Home Page';
})->name('home.index');

Route::get('/contact',function(){
    return 'Contact';
})->name('home.contact');

Route::get('/posts/1',function(){
    return 'Blog post 1';
});
Route::get('/posts/2',function(){
    return 'Blog post 2';
});