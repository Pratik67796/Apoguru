<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usernotes extends Model
{
    protected $table = "user_note";

    protected $fillable = [
    'user_id', 'title', 'description'
  ];
    // use HasFactory;
}
