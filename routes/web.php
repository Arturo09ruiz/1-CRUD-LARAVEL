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


//web.php

Route::get('create','MemberController@create');
Route::post('create','MemberController@store');
Route::get('/','MemberController@index');
Route::get('/edit/member/{id}','MemberController@edit');
Route::post('/edit/member/{id}','MemberController@update');
Route::delete('/delete/member/{id}','MemberController@destroy');