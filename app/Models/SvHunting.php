<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SvHunting extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID', 'title', 'topic','reason', 'Meeting_Purpose', 'expertise', 'faculty', 'office'
    ];
}
