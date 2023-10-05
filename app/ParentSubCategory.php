<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentSubCategory extends Model
{
  protected $table = "parent_sub_categories";

  protected $fillable = [
    'main_category_id', 'name','description', 'status', 'image', 'applicable_to_pq'
  ];

  public function mainCategory() {
    return $this->belongsTo(MainCategory::class);
  }
  public function getpq(){
    return $this->hasMany('App\PastQuestion','parent_sub_category_id','id');
  }
  public function getcourse(){
    return $this->hasMany('App\Course','parent_sub_category_id','id');
  }
}
