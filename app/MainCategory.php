<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
  protected $table = "main_categories";

  protected $fillable = [
    'name', 'status', 'image', 'applicable_to_pq'
  ];
 
  public function getpq(){
    return $this->hasMany('App\PastQuestion','main_category_id','id');
  }
  public function getcourse(){
    return $this->hasMany('App\Course','main_category_id','id');
  }
}
