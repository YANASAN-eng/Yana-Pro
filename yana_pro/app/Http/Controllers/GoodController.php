<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;

class GoodController extends Controller
{
    public function create(Request $request){
        $datas = $request->all();
        Good::create([
            'user_id' => $datas['user_id'],
            'book_id' => $datas['book_id']
        ]);
        return response()->json([
            'good_flag' => 1,
            'count' => Good::where('book_id', $datas['book_id'])->count(),
        ]);
    }
    public function delete(Request $request){
        $datas = $request->all();
        Good::where('user_id', $datas['user_id'])
            ->where('book_id', $datas['book_id'])
            ->forceDelete();
        return response()->json([
            'good_flag' => 0,
            'count' => Good::where('book_id', $datas['book_id'])->count(),
        ]);
    }
}
