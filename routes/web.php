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

// 註冊
Route::get('/register', 'WebController@getRegister')->name('register');
Route::post('/register', 'UserController@postRegister');

// 登入&登出
Route::get('/login', 'WebController@getLogin')->name('login');
Route::post('/login', 'UserController@postLogin');
Route::get('/logout', 'UserController@postLogout')->name('logout');

// 會員管理
Route::middleware('UserAuth')->get('/member', 'WebController@getMember')->name('member');
