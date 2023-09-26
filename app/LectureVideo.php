<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LectureVideo extends Model
{
  protected $table = "lecture_videos";

  protected $fillable = [
    'principal_topic_id', 'name', 'video', 'video_link', 'thumbnail', 'status','ordering_position'
  ];

  public function principalTopic() {
    return $this->belongsTo(\App\PrincipalTopic::class);
  }

  public function principle()
  {
      return $this->belongsTo(Principle::class);
  }
  
  public function getSupplementary(){
    return $this->hasMany(Supplementary_document::class,'lecture_videos_id','id');
  }

}
