<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=  ['name','desc','image','price','cat_id'];

//    Books belongs To Cat
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
