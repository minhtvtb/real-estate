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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/gioi-thieu', function (){
    return view('about');
})->name('about');

Route::prefix('/du-an')
    ->group(function (){
        Route::get('/', 'ProjectsController@index')->name('projects');
        Route::get('{type}/{slug}', 'PostsController@index')->name('projects.detail');
    });
Route::get('/ygm-tv', function (){
    return view('blog');
})->name('blog');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
