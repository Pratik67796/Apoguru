<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildSubCategory extends Model
{
  protected $table = "child_sub_categories";

  protected $fillable = [
    'main_category_id','parent_sub_category_id', 'name','description', 'status', 'image', 'applicable_to_pq'
  ];

  public function parentSubCategory() {
    return $this->belongsTo(ParentSubCategory::class);
  }
  public function getpq(){
    return $this->hasMany('App\PastQuestion','child_sub_category_id','id');
  }
  public function getcourse_parentid(){
    return $this->hasMany('App\Course','parent_sub_category_id','id');
  }
  public function getcourse(){
    return $this->hasMany('App\Course','child_sub_category_id','id');
  }
  public function getcourse_new(){
    return $this->hasMany('App\Course','child_sub_category_id','id')->inRandomOrder()->limit(3);
  }
}
