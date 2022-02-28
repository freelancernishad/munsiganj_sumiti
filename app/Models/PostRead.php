<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostRead extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'ip',
        'count',
        'date',
    ];
}
