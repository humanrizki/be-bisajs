<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'slug',
        'description',
        'prices_point',
        'category_id',
        'user_id'
    ];
}
