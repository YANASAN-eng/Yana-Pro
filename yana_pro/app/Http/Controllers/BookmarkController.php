<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bookmark;

class BookmarkController extends Controller
{
    public function create(Request $request){
        $datas = $request->all();
        Bookmark::create([
            'user_id' => $datas['user_id'],
            'book_id' => $datas['book_id'],
        ]);
        return response()->json([
            'bookmark_flag' => 1,
            'count' => BookMark::where('book_id' , $datas['book_id'])->count(),
        ]);
    }
    public function delete(Request $request){
        $datas = $request->all();
        Bookmark::where('user_id', $datas['user_id'])
            ->where('book_id', $datas['book_id'])
            ->forceDelete();
        return response()->json([
            'bookmark_flag' => 0,
            'count' => BookMark::where('book_id', $datas['book_id'])->count(),
        ]);
    }
}
