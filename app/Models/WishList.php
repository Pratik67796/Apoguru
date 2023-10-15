<?php

namespace App\Models;

use App\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $table = "wishlists";

    public function getCourse(){
        return $this->hasOne(Course::class,'id','course_id');
    }
}
