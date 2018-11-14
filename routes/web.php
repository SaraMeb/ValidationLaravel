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

Route::get('/', 'View@Home');
Route::post('/', 'View@home');
Route::get('/Halls', 'View@addHall');
Route::post('/insertHall', 'HallController@insertHall');
Route::post('/updateHall', 'View@updateHall');
Route::post('/updateHallAction', 'HallController@updateHall');
Route::post('/deleteHall', 'HallController@deleteHall');
