<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty', 'course', 'sem_year', 'address', 'psm_title', 'userID', 'sv_name'
    ];
}
