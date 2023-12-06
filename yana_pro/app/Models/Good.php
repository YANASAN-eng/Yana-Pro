<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'book_id'
    ];
    public function user(){
        return $this->belong_To('App\Models\User');
    }
    public function book(){
        return $this->belong_To('App\Models\Book');
    }
}
