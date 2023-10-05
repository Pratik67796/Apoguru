<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
  
class PastQuestion extends Model
{
  protected $table = "past_questions";

  protected $fillable = [
    'main_category_id', 'parent_sub_category_id', 'child_sub_category_id', 'question_type_id', 'topic_id',
    'exam_month', 'exam_year', 'preamble', 'question'
  ];

  public function mainCategory() {
    return $this->belongsTo(MainCategory::class);
  }

  public function parentSubCategory() {
    return $this->belongsTo(ParentSubCategory::class);
  }

  public function childSubCategory() {
    return $this->belongsTo(ChildSubCategory::class);
  }

  public function questionType() {
    return $this->belongsTo(QuestionType::class);
  }

  public function topic() {
    return $this->belongsTo(Topic::class);
  }
  public function answers() {
    return $this->hasMany('App\PastQuestionAnswer','question_id','id');
  }
}
