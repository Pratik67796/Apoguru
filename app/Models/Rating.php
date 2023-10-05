<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = "ratings";
    protected $fillable = ['rating','comment','user_id','course_id'];


    public function getRatingUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
