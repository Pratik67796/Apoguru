<?php

namespace App\Models;

use App\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemcomenderCourse extends Model
{
    use HasFactory;
    protected $table = "recommended_courses";
    protected $fillable = ['courses_id','parent_courses'];

    public function getCourse(){
        return $this->belongsTo(Course::class,'courses_id','id');
    }

}
