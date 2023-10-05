<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Socialenvirment extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function chat(){
        return view('admin.social_envirment.chat');
    }
    public function hint(){
        return view('admin.social_envirment.hint');
    }
    public function answer(){
        return view('admin.social_envirment.answer');
    }
    public function cancle_sub(){
        return view('admin.social_envirment.cancle_sub');
    }
}
