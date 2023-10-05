<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useranswers extends Model
{
    // use HasFactory;
    protected $table = "user_answer";

    protected $fillable = [
          'user_id', 'question_id', 'user_answer'
    ];
}
