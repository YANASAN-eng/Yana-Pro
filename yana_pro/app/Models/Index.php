<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id', 'index', 
    ];
    public function book(){
        return $this->belogsTo('App\Models\Book');
    }
    public function subindex(){
        return $this->hasMany('App\Models\Subindex');
    }
}

