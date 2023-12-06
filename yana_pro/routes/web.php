<?php

use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';
require __DIR__ . '/test.php';
require __DIR__ . '/book.php';
require __DIR__ . '/good.php';
require __DIR__ . '/bookmark.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#ホームページ
Route::get('index', 'App\Http\Controllers\YanaController@index')->name('index');
