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
    return view('welcome');
});

Route::get('/my_page', 'MyPlaceController@index');

Route::get('/my_city', 'MyCityController@index');

Route::get('/my_car', 'MyCarController@index');

Route::get('/my_dog', 'MyDogController@index');

Route::get('/my_life', 'MyLifeController@index');

