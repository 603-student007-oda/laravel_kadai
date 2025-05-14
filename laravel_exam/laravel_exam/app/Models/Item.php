<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // protected $fillable = ['name', 'category_id', 'price'];

    use HasFactory;

    // public function category()
    // {
    //     return $this->belongTo(Category::class);
    // }
}
