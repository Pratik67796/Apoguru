<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrincipalTopic extends Model
{
  protected $table = "principal_topics";

  protected $fillable = [
    'course_id', 'name', 'status','ordering_position'
  ];

  public function course() {
    return $this->belongsTo(\App\Course::class);
  }

  public function getCourse() {
    return $this->hasOne(\App\Course::class,'id','course_id');
  }

  public function get_video(){
    return $this->hasOne('App\LectureVideo','principal_topic_id','id');
  }
  public function getall_videos(){
    return $this->hasMany('App\LectureVideo','principal_topic_id','id')->orderBy('ordering_position','ASC');
  }
  public function videos()
    {
        return $this->hasMany(LectureVideo::class);
    }
}
