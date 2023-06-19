<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $with = ['categories' , 'user'];

    public function categories(){
        return $this->belongsToMany(Category::class , 'book_categories')->withTimestamps();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
