<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interactiveanswers extends Model
{
   // use HasFactory;
   protected $table = "interactive_answers";

   protected $fillable = [
       'user_id','lecture_videos_id','interactive_qestion_id','interactive_answer','correct_answer'
   ];
}
