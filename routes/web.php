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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/gioi-thieu', function (){
    return view('about');
})->name('about');

Route::get('/du-an', function (){
    return view('price');
})->name('projects');

Route::get('/ygm-tv', function (){
    return view('blog');
})->name('blog');
