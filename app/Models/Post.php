<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'thumbnail_img',
        'description',
        'user_id',
        'status'
    ];

    public function category(){
          return $this->hasOne(Category::class);
    }

    public function user(){
         return $this->hasOne(User::class);
    }
}
