<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable = [

        'memberId',
        'Reference',
        'name',
        'age',
        'dob',
        'father_name',
        'Spouse_name',
        'education',
        'occupation',
        'bio',
        'pr_vill',
        'pr_post',
        'pr_thana',
        'pr_dist',
        'pr_division',
        'p_vill',
        'p_post',
        'p_thana',
        'p_dist',
        'p_division',
        'Present_address',
        'phoneNumber',
        'phoneNumber2',
        'email',
        'website',
        'pesahgot_address',
        'blood_group',
        'nid',
        'samagik_unoyon',
        'hobby',
        'fee',
        'image',
        'status',




    ];
}
