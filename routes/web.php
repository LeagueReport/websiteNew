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


// Route that calls function index in HomeController 
Route::get('/', 'HomeController@index');
// Import for all routes in Auth library
Auth::routes();
// Route that calls function auth in HomeController
Route::get('/home', 'HomeController@auth');
// Route that calls function userInfo in HomeController
Route::get('/userInfo/{champion}', 'HomeController@userInfo');
// Route that calls function userSets in HomeController
Route::get('/userSets/{champion}', 'HomeController@userSets');
// Route that calls function getChampId in HomeControlelr
Route::get('/userchampIcon/{championId}', 'HomeController@getChampId');
// Route that calls function userGames in HomeController
Route::get('/userGames/{id}','HomeController@userGames');
// Route that calls funciton index in ItemController 
// We add a middleware('auth') to state that you cannot go to the page if you are not logged 
Route::get('/item', 'ItemController@index')->middleware('auth');
// Route that calls function items in ItemController 
Route::get('/items', 'ItemController@items');
// Route that calls function item in ItemController
Route::get('/item/{id}', 'ItemController@item');
// Route that calls saveItemSet function in ItemController
Route::get('/itemset/save/{item1}/{champion}/{item2}/{item3}/{item4}/{item5}/{item6}', 'ItemController@saveItemSet');
// Route that calls function champions in ItemController
Route::get('/champions', 'ItemController@champions');
// Route that calls function champion in ItemController
Route::get('/champion/{id}', 'ItemController@champion');
// Route that calls function dipslay in NewsController 
Route::get('/news', 'NewsController@display');
