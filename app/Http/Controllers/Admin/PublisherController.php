<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function Index(){
        $publishers = Publisher::latest()->get();
        return view('admin.allpublishers',compact('publishers'));
    }
    public function Addpublisher(){
        return view('admin.addpublisher');
    }
    public function StorePublisher(Request $req){
        $req->validate([
            'publisher_name' => 'required|unique:publishers'
        ]);
        Publisher::insert([
            'publisher_name' => $req->publisher_name,
            'slug' => strtolower(str_replace(' ','-',$req->publisher_name))
        ]);
        return redirect()->route('allpublishers')->with('message','publisher added successfully!');
    }
    public function DeletePublisher($id){
        Publisher::findOrFail($id)->delete();
        return redirect()->route('allpublishers')->with('message','publisher deleted successfully');
    }
    public function EditPublisher($id){
        $publisher_info = Publisher::findOrFail($id);
        return view('admin.editpublisher',compact('publisher_info'));
    }
    public function UpdatePublisher(Request $req){
        $id = $req->idstorage;
        $req->validate([
            'publisher_name' => 'required|unique:publishers'
        ]);
        Publisher::findOrFail($id)->update([
            'publisher_name' => $req->publisher_name,
            'slug' => strtolower(str_replace(' ','-',$req->publisher_name))
        ]);
        return redirect()->route('allpublishers')->with('message','Publisher Updated Successfully');
    }
}
