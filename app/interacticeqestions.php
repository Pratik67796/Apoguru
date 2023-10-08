<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interacticeqestions extends Model
{
    // use HasFactory;
    protected $table = "interactive_qestion";

    protected $fillable = [
       'user_id','lecture_videos_id','interactive_qestion'
    ];

    public function getAnswer(){
        return $this->hasMany(interactiveanswers::class,'interactive_qestion_id','id');
    }
}
