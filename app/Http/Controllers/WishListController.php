<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class WishListController extends Controller
{
    public function addWishList(Request $request){
        $saveWishList = new WishList();
        $saveWishList->user_id = $request->user_id;
        $saveWishList->course_id = $request->course_id;
        $saveWishList->save();
        return response()->json([
            'message' => "Thank you, For adding this course to wishlist.",
            'status' => 200, // Add your data here
        ]);
    }

    public function cart(){
        $auth = Auth::guard('user_new')->user();
        $getWishList = WishList::where('user_id','=',$auth->id)->count();
        
        $view = View::make('user.comman.cart',['getWishList'=>$getWishList ])->render();
        return response()->json(['content' => $view,'authId' =>$auth->id]);
    }

    public function cartList(Request $request){
        $getWishLists = WishList::with('getCourse')->where('user_id','=',$request->authId)->get();
        $view = View::make('user.comman.cart-list',['getWishLists'=>$getWishLists])->render();
        return response()->json(['content' => $view]);
    }

    public function removeFromCart(Request $request){
        WishList::where('id','=',$request->id)->delete();
        return response()->json([
            'message' => "Course is removed from cart.",
            'status' => 200, // Add your data here
        ]);
    }
}
