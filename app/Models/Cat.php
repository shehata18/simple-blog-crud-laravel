<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $fillable=  ['name','desc','image'];

//    Cat Has Many Books
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
