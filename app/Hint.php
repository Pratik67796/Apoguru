<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hint extends Model
{
    use HasFactory;
    protected $table = "user_hint";

    protected $fillable = [
        'user_id', 'question_id', 'hint_id'
    ];
    
    public function users() {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
