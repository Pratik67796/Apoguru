<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name','country_code','email', 'password', 'avatar', 'phone', 'qualification', 'workplace','country', 'teaching_experience', 'summary',
        'credit', 'verification_status','Facebook','Instagram','LinkedIn','Telegram','Tiktok','Twitter','YouTube','extra_feild'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','last_login'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function course() {
      return $this->belongsTo(Course::class);
    }
    
    public function mainCategory() {
      return $this->belongsTo(MainCategory::class);
    }
  
    public function parentSubCategory() {
      return $this->belongsTo(ParentSubCategory::class);
    }
  
    public function childSubCategory() {
      return $this->belongsTo(ChildSubCategory::class);
    }
    public function getdocument() {
      return $this->hasMany(User_documents::class,'user_id','id');
    }
}
