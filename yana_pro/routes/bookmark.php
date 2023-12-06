<?php 
use Illuminate\Support\Facades\Route;

Route::post('book/bookmark/create', 'App\Http\Controllers\BookmarkController@create')->name('bookmark.create');
Route::post('book/bookmark/delete', 'App\Http\Controllers\BookmarkController@delete')->name('bookmark.delete');