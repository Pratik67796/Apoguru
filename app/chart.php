<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chart extends Model
{
    use HasFactory;
    protected $table = "chart";

  protected $fillable = [
    'year', 'sales', 'Expenses','Profit','loss','bonus'
  ];

}
