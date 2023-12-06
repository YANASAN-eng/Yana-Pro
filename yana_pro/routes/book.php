<?php
    use Illuminate\Support\Facades\Route;
    #書籍紹介
    Route::get('book', 'App\Http\Controllers\BookController@book')->name('book');
    #書籍詳細画面
    Route::get('book/detail/{id}', 'App\Http\Controllers\BookController@detail')->name('book.detail');
?>