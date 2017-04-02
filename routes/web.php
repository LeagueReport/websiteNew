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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@auth');
Route::get('/userInfo/{champion}', 'HomeController@userInfo');
Route::get('/userSets/{champion}', 'HomeController@userSets');
Route::get('/userGames/{id}','HomeController@userGames');

Route::get('/item', 'ItemController@index')->middleware('auth');

Route::get('/items', 'ItemController@items');
Route::get('/item/{id}', 'ItemController@item');
Route::get('/itemset/save/{item1}/{champion}/{item2}/{item3}/{item4}/{item5}/{item6}', 'ItemController@saveItemSet');

Route::get('/champions', 'ItemController@champions');
Route::get('/champion/{id}', 'ItemController@champion');

Route::get('/news', 'NewsController@display');
