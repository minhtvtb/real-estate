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

Route::get('gioi-thieu', 'AboutController@index')->name('about');

Route::prefix('ygm-tv')->group(function (){
    Route::get('/', 'PagesController@index')->name('blog');
    Route::get('bai-viet/{slug}', 'PagesController@show')->name('blog.detail');
});

Route::prefix('tuyen-dung')->group(function (){
    Route::get('/', 'RecruitingController@index')->name('recruiting');
    Route::get('/chi-tiet/{slug}', 'RecruitingController@detail')->name('recruiting.detail');
});

Route::prefix('du-an')->group(function () {
    Route::get('/', 'ProjectsController@index')->name('projects');
    Route::get('{type}/{slug}', 'PostsController@index')->name('projects.detail');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
