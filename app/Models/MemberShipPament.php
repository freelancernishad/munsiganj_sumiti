<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberShipPament extends Model
{
    use HasFactory;

    protected $fillable = [

        'memberid',
        'method',
        'number',
        'amount',
        'TRXID',
    ];
}
