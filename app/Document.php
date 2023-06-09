<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
  protected $table = "documents";

  protected $fillable = [
    'user_id', 'document_type', 'document', 'status', 'notes_by_admin'
  ];
}
