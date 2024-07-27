<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'point_id',
        'total_now',
        'total_before',
        'status_total'
    ];
}
