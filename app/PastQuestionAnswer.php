<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastQuestionAnswer extends Model
{
  protected $table = "past_question_answers";

  protected $fillable = [
    'question_id','admin_id', 'answer', 'correct', 'upvotes', 'downvotes', 'user_id','datetime'
  ];
}
