<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubIndex extends Model
{
    use HasFactory;
    protected $fillable = [
        'index_id', 'subindex',
    ];
    public function index(){
        return $this->belongsTo('App\Models\Index');
    }
}
