<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Index(){
        $categories = Category::latest() -> get();
        return view('admin.allcategory',compact('categories'));
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
    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();
        return redirect()->route('allcategory')->with('message','Category Deleted Successfully');
    }
    public function EditCategory($id){
        $category_info=Category::findOrFail($id);
        return view('admin.editcategory',compact('category_info'));
    }

    public function UpdateCategory(Request $req){
        $id = $req->idstorage;

        $req->validate([
            'category_name'=> 'required|unique:categories',
        ]);

        Category::findOrFail($id)->update([
            'category_name' => $req->category_name,
            'slug' => strtolower(str_replace(' ','-',$req->category_name))
        ]);

        return redirect()->route('allcategory')->with('message','Category Updated Successfully!');
    }
}
