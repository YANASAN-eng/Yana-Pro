<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Good;
use App\Models\Bookmark;

class BookController extends Controller
{
    public function book(){
        $books = Book::get();
        $user = Auth::user();
        return view('book.book', compact('books', 'user'));
    }
    public function detail($id){
        $book = Book::where('id', $id)->first();
        $indices = $book->index()->get();
        $user = Auth::user();
        $good_count = $book->goodCount($book->id);
        $bookmark_count = $book->bookMarkCount($book->id);
        if(empty($user)){
            return view('book.detail', compact('book', 'indices', 'good_count', 'bookmark_count'));
        }else{
            $good_flag = 0;
            if(empty(Good::where('user_id', $user->id)->where('book_id', $id)->first())){
                $good_flag = 0;
            }else{
                $good_flag = 1;
            }
            $book_mark = 0;
            if(empty(Bookmark::where('user_id', $user->id)->where('book_id', $id)->first())){
                $bookmark_flag = 0;
            }else{
                $bookmark_flag = 1;
            }
            return view('book.detail', compact('book', 'indices', 'user', 'good_flag', 'bookmark_flag', 'good_count', 'bookmark_count'));
        }
    }
}
