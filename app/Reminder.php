<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = "user_reminders";

    protected $fillable = [
    'user_id', 'title', 'description','date','time'
  ];
    // use HasFactory;
}
