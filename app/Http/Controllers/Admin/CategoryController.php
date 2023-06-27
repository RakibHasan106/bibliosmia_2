<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Index(){
        return view('admin.allcategory');
    }
    public function AddCategory(){
        return view('admin.addcategory');
    }
    public function StoreCategory(Request $req){
        $req->validate([
            'category_name'=> 'required|unique:categories',
        ]);

        Category::insert([
            'category_name' => $req->category_name,
            'slug' => strtolower(str_replace(' ','-',$req->category_name))
        ]);

        return redirect()->route('allcategory')->with('message','Category Added Successfully');
    }
}
