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

// 首頁
Route::get('/', 'WebController@index')->name('index');

// 註冊
Route::get('/register', 'WebController@getRegister')->name('register');
Route::post('/register', 'UserController@postRegister');

// 登入&登出
Route::get('/login', 'WebController@getLogin')->name('login');
Route::post('/login', 'UserController@postLogin');
Route::get('/logout', 'UserController@postLogout');

// 會員管理
Route::middleware('UserAuth')->get('/user', 'WebController@getUser');
Route::middleware('UserAuth')->post('/update', 'UserController@update')->name('update');

// 後台管理
Route::group(['middleware' => ['AdminAuth']], function(){
    // 會員資料
    Route::get('/admin_user', 'WebController@adminGetUser')->name('admin_user');
    Route::get('/admin_update_user/{email}', 'WebController@adminSlectUser');
    Route::get('/admin_delete_user/{email}', 'UserController@delete');
});


