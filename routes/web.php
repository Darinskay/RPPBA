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
Route::post('/home/subscribe','HomeController@postSubscribe');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'BaseController@getIndex');
Route::get('/catalog/{id}', 'CatalogController@getCatalog');
Route::get('/{id}', 'ProductController@getIndex');

Auth::routes();