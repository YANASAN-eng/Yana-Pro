<?php

use Illuminate\Support\Facades\Route;

#ログイン画面
Route::get('login', 'App\Http\Controllers\UserController@loginForm')->name('loginForm');
#ログイン実行
Route::post('login', 'App\Http\Controllers\UserController@login')->name('login');
#ログアウト
Route::get('logout', 'App\Http\Controllers\UserController@logout')->name('logout');
#会員登録画面
Route::get('registration', 'App\Http\Controllers\UserController@registrationForm')->name('registrationForm');
#会員登録
Route::post('registration', 'App\Http\Controllers\UserController@registration')->name('registration');

?>