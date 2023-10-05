<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Course;

class TrancationHistory extends Model
{
    use HasFactory;

    protected $table = "tracation_histories";

    public function getCourse(){
        // return $this->hasMany(Course::class,'id','course_id');
        return $this->belongsTo(Course::class,'course_id','id');
    }
}
