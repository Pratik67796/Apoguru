<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // use HasFactory;
    protected $table = "rating";

    protected $fillable = [
        'user_id', 'course_id','name','star','description'
    ];
}
