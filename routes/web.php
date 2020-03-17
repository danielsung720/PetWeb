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

// Route::get('/', function () { return view('index'); }); Vue

Route::get('/', 'WebController@index')->name('index');

// 登入
Route::get('/login', 'WebController@getLogin')->name('login');
Route::post('/login', 'MemberController@postLogin');

// 登出
Route::get('/logout', 'MemberController@postLogout')->name('logout');

// 註冊
Route::get('/register', 'WebController@getRegister')->name('register');
Route::post('/register', 'MemberController@postRegister');