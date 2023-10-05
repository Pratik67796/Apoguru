<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\MainCategory;
use App\ParentSubCategory;
use App\ChildSubCategory;
use App\PastQuestion;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    public function storeImage(Request $request){
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
    // Main Categories
    public function createMainCategory() {
      $main_categories = MainCategory::with('getpq','getcourse')->get();
      // dd($main_categories);
      return view('admin.categories.main_category.create', compact('main_categories'));
    }

    public function storeMainCategory(Request $request) {
      //dd($request);
      $path = base_path().'/main_category_images';
      $file = $request->file('image');
      $mainImageName = time().$file->getClientOriginalName();
      $file->move(public_path('main_category_images'), $mainImageName);

      if($request->applicable_to_pq == "on") {
        $applicable_to_pq = 1;
      } else {
        $applicable_to_pq = 0;
      }

      $main_category = MainCategory::create([
        'name' => $request->name,
        'image' => $mainImageName,
        'applicable_to_pq' => $applicable_to_pq
      ]);

      if($main_category) {
        return redirect()->back()->with('msg', 'Main Category Added Successfully');
      } else {
        return redirect()->back()->with('error', 'Something went wrong, please try again later');
      }
    }

    public function editMainCategory($id) {
      $main_categories = MainCategory::all();
      $main_category = MainCategory::find($id);
      if($main_category) {
        return view('admin.categories.main_category.edit', compact('main_category', 'main_categories'));
      } else {
        return redirect()->back()->with('error', 'Main category not found, please try again later');
      }
    }

    public function updateMainCategory(Request $request, $id) {
      $main_category = MainCategory::find($id);
      if($main_category) {
        if($request->file('image')) {
          $path = base_path().'/main_category_images';
          $file = $request->file('image');
          $mainImageName = time().$file->getClientOriginalName();
          $file->move(public_path('main_category_images'), $mainImageName);
          $main_category->image = $mainImageName;
        }
        if($request->applicable_to_pq == "on") {
          $applicable_to_pq = 1;
        } else {
          $applicable_to_pq = 0;
        }
        $main_category->name = $request->name;
        $main_category->applicable_to_pq = $applicable_to_pq;
        $main_category->save();
        return redirect()->back()->with('msg', 'Main Category Updated Successfully');

      } else {
        return redirect()->back()->with('error', 'Main category not found, please try again later');
      }
    }

    public function deleteMainCategory($id) {
      $main_category = MainCategory::find($id);
      if($main_category) {
        $main_category->delete();
        return redirect()->back()->with('msg', 'Main Category Deleted Successfully');
      } else {
        return redirect()->back()->with('error', 'Main category not found, please try again later');
      }
    }

    // Parent Sub Categories
    public function createParentSubCategory() {
      $main_categories = MainCategory::orderby('name')->get();
      $parent_sub_categories = ParentSubCategory::with('getpq','getcourse')->get();
      // dd($parent_sub_categories);
      return view('admin.categories.parent_sub_category.create', compact('parent_sub_categories', 'main_categories'));
    }

    public function storeParentSubCategory(Request $request) {
      $path = base_path().'/parent_sub_category_images';
      $file = $request->file('image');
      $mainImageName = time().$file->getClientOriginalName();
      $file->move(public_path('parent_sub_category_images'), $mainImageName);

      if($request->applicable_to_pq == "on") {
        $applicable_to_pq = 1;
      } else {
        $applicable_to_pq = 0;
      }

      $main_category = ParentSubCategory::create([
        'main_category_id' => $request->main_category_id,
        'name' => $request->name,
        'description' => $request->description,
        'image' => $mainImageName,
        'applicable_to_pq' => $applicable_to_pq
      ]);

      if($main_category) {
        return redirect()->back()->with('msg', 'Parent Sub Category Added Successfully');
      } else {
        return redirect()->back()->with('error', 'Something went wrong, please try again later');
      }
    }

    public function editParentSubCategory($id) {
      $main_categories = MainCategory::orderby('name')->get();
      $parent_sub_categories = ParentSubCategory::all();
      $parent_sub_category = ParentSubCategory::find($id);
      if($parent_sub_category) {
        return view('admin.categories.parent_sub_category.edit', compact('main_categories', 'parent_sub_category', 'parent_sub_categories'));
      } else {
        return redirect()->back()->with('error', 'Parent sub category not found, please try again later');
      }
    }

    public function updateParentSubCategory(Request $request, $id) {
      $parent_sub_category = ParentSubCategory::find($id);
      if($parent_sub_category) {
        if($request->file('image')) {
          $path = base_path().'/parent_sub_category_images';
          $file = $request->file('image');
          $mainImageName = time().$file->getClientOriginalName();
          $file->move(public_path('parent_sub_category_images'), $mainImageName);
          $parent_sub_category->image = $mainImageName;
        }
        if($request->applicable_to_pq == "on") {
          $applicable_to_pq = 1;
        } else {
          $applicable_to_pq = 0;
        }
        $parent_sub_category->main_category_id = $request->main_category_id;
        $parent_sub_category->name = $request->name;
        $parent_sub_category->description = $request->description;
        $parent_sub_category->applicable_to_pq = $applicable_to_pq;
        $parent_sub_category->save();
        return redirect()->back()->with('msg', 'Parent sub Category Updated Successfully');

      } else {
        return redirect()->back()->with('error', 'Parent sub category not found, please try again later');
      }
    }

    public function deleteParentSubCategory($id) {
      $parent_sub_category = ParentSubCategory::find($id);
      if($parent_sub_category) {
        $parent_sub_category->delete();
        return redirect()->back()->with('msg', 'Parent Sub Category Deleted Successfully');
      } else {
        return redirect()->back()->with('error', 'Parent Sub category not found, please try again later');
      }
    }

    // Child Sub Categories
    public function createChildSubCategory() {
      $main_categories = MainCategory::orderby('name')->get();
      $parent_sub_categories = ParentSubCategory::orderby('name')->get();
      $child_sub_categories = ChildSubCategory::orderby('name')->with('getpq','getcourse')->get();
      // dd($child_sub_categories);
      return view('admin.categories.child_sub_category.create', compact('main_categories','parent_sub_categories', 'child_sub_categories'));
    }

    public function storeChildSubCategory(Request $request) {
      $path = base_path().'/child_sub_category_images';
      $file = $request->file('image');
      $mainImageName = time().$file->getClientOriginalName();
      $file->move(public_path('child_sub_category_images'), $mainImageName);

      if($request->applicable_to_pq == "on") {
        $applicable_to_pq = 1;
      } else {
        $applicable_to_pq = 0;
      }
      $main_category = ChildSubCategory::create([
        'main_category_id'=>$request->main_category_id,
        'parent_sub_category_id' => $request->parent_sub_category_id,
        'name' => $request->name,
        'description' => $request->description,
        'image' => $mainImageName,
        'applicable_to_pq' => $applicable_to_pq
      ]);

      if($main_category) {
        return redirect()->back()->with('msg', 'Child Sub Category Added Successfully');
      } else {
        return redirect()->back()->with('error', 'Something went wrong, please try again later');
      }
    }

    public function editChildSubCategory($id) {
      $main_categories = MainCategory::all();
      $parent_sub_categories = ParentSubCategory::all();
      $child_sub_categories = ChildSubCategory::all();
      $child_sub_category = ChildSubCategory::find($id);
      if($child_sub_category) {
        return view('admin.categories.child_sub_category.edit', compact('main_categories','parent_sub_categories', 'child_sub_categories', 'child_sub_category'));
      } else {
        return redirect()->back()->with('error', 'Child sub category not found, please try again later');
      }
    }

    public function updateChildSubCategory(Request $request, $id) {
      $child_sub_category = ChildSubCategory::find($id);
      if($child_sub_category) {
        if($request->file('image')) {
          $path = base_path().'/child_sub_category_images';
          $file = $request->file('image');
          $mainImageName = time().$file->getClientOriginalName();
          $file->move(public_path('child_sub_category_images'), $mainImageName);
          $child_sub_category->image = $mainImageName;
        }
        if($request->applicable_to_pq == "on") {
          $applicable_to_pq = 1;
        } else {
          $applicable_to_pq = 0;
        }
        $child_sub_category->main_category_id = $request->main_category_id;
        $child_sub_category->parent_sub_category_id = $request->parent_sub_category_id;
        $child_sub_category->name = $request->name;
        $child_sub_category->description = $request->description;
        $child_sub_category->applicable_to_pq = $applicable_to_pq;
        $child_sub_category->save();
        return redirect()->back()->with('msg', 'Child sub Category Updated Successfully');

      } else {
        return redirect()->back()->with('error', 'Child sub category not found, please try again later');
      }
    }

    public function deleteChildSubCategory($id) {
      $child_sub_category = ChildSubCategory::find($id);
      if($child_sub_category) {
        $child_sub_category->delete();
        return redirect()->back()->with('msg', 'Child Sub Category Deleted Successfully');
      } else {
        return redirect()->back()->with('error', 'Child Sub category not found, please try again later');
      }
    }
}
