<?php

namespace App;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_documents extends Model
{
    protected $table = "user_document";

    protected $fillable = [
      'user_id', 'document_name', 'user_document'
  ];
    // use HasFactory;
}
