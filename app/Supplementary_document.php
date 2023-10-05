<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplementary_document extends Model
{
    protected $table = "supplementary_document";

    protected $fillable = ['lecture_videos_id','document'];
}
