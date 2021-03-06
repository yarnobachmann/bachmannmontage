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

Route::get('/', 'Frontend\PagesController@home');

Route::get('/contact', 'Frontend\PagesController@contact');

Route::post('/contact', 'Frontend\PagesController@getcontact');

Route::get('/diensten', 'Frontend\PagesController@diensten');

Route::get('/projecten', 'Frontend\PagesController@projecten');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
