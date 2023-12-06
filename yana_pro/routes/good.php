<?php
use Illuminate\Support\Facades\Route;

Route::post('book/good/create', 'App\Http\Controllers\GoodController@create')->name('book.good.create');
Route::post('book/good/delete', 'App\Http\Controllers\GoodController@delete')->name('book.good.delete');