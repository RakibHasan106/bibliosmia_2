<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Redis;

class AuthorController extends Controller
{
    public function AddAuthor(){
        return view('admin.addauthor');
    }
    public function AllAuthors(){
        $authors = Author::latest()->get();
        return view('admin.allauthors',compact('authors'));
    }
    public function StoreAuthor(Request $req){
        $req->validate([
            'author_name' => 'required|unique:authors',
        ]);
        Author::insert([
            'author_name' => $req->author_name,
            'slug' => strtolower(str_replace('.','',str_replace(' ','-',$req->author_name))),
        ]);

        return redirect()->route('allauthors')->with('message','Author Created Successfully!');
    }
    public function DeleteAuthor($id){
        Author::findOrFail($id)->delete();
        return redirect()->route('allauthors')->with('message','Author Deleted Successfully');
    }
    
    public function EditAuthor($id){
        $author_info = Author::findOrFail($id);
        return view('admin.editauthor',compact('author_info'));
    }
    
    public function UpdateAuthor(Request $req){
        $id = $req->idstorage;

        $req->validate([
            'author_name' => 'required|unique:authors',
        ]);

        Author::findOrFail($id)->update([
            'author_name' => $req->author_name,
            'slug' => strtolower(str_replace('.','',str_replace(' ','-',$req->author_name))),
        ]);
        return redirect()->route('allauthors')->with('message','Author Updated Successfully');
    }
}
