<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Good;
use App\Models\Bookmark;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'img_path', 'degree', 'author', 'bibliographic_information', 'description', 'content',
    ];
    public function index(){
        return $this->hasMany('App\Models\Index');
    }
    public function good(){
        return $this->hasMany('App\Models\Good');
    }
    public function bookMark(){
        return $this->hasMany('App\Models\BookMark');
    }
    public function goodCount($book_id){
       return Good::where('book_id', $book_id)->count();
    }
    public function bookMarkCount($book_id){
        return BookMark::where('book_id', $book_id)->count();
    }
}
