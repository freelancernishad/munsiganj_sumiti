<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parliamentary_Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'posision',
        'session',
        'ps_history',
        'info',
        'category',
    ];
}
