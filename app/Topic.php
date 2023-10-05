<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
  protected $table = "topics";

  protected $fillable = [
    'main_category_id','parent_sub_category_id','child_sub_category_id', 'name', 'status'
  ];

  public function childSubCategory() {
    return $this->belongsTo(ChildSubCategory::class);
  }
  public function maincat() {
    return $this->belongsTo(MainCategory::class,'main_category_id', 'id');
  }
  public function parentcat() {
    return $this->belongsTo(ParentSubCategory::class,'parent_sub_category_id','id');
  }
}
