<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;

class BookController extends Controller
{
    public function Index(){
        $books = Book::latest()->get(); 
        return view('admin.allbooks',compact('books'));
    }
    public function AddBook(){
        $categories = Category::latest()->get();
        $publishers = Publisher::latest()->get();
        $authors = Author::latest()->get();
        return view('admin.addbook',compact('categories','publishers','authors'));
    }
    public function StoreBook(Request $req){
        $req->validate([
            'book_name'=> 'required|unique:books',
            'book_img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author_id'=>'required',
            'book_publisher_id'=> 'required',
            'book_category_id'=> 'required',
            'price'=> 'required',
            'quantity'=> 'required', 
            'book_publish_date'=>'required',
            'book_page_no'=>'required',         
            'book_description'=> 'required',
        ]);

        $image = $req->file('book_img');
        $img_name = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
        $req->book_img->move(public_path('upload'),$img_name);
        $img_url = 'upload/'.$img_name;

        
        $category_id = $req->book_category_id;
        $publisher_id = $req->book_publisher_id;
        $author_id = $req->author_id;

        $category_name = Category::where('id',$category_id)->value('category_name');
        $publisher_name = Publisher::where('id',$publisher_id)->value('publisher_name');
        $author_name = Author::where('id',$author_id)->value('author_name');

        Book::insert([
            'book_name' => $req->book_name,
            'slug' => strtolower(str_replace(' ','-',$req->book_name)),
            'author_name' => $author_name,
            'author_id' => $author_id,
            'price' => $req->price,
            'quantity' => $req->quantity,
            'book_category_id' => $category_id,
            'book_category_name' => $category_name,
            'book_publisher_id' => $publisher_id,
            'book_publisher_name' => $publisher_name,
            'book_description' => $req->book_description,
            'book_page_no' => $req->book_page_no,
            'book_publish_date' => $req->book_publish_date,
            'book_img' => $img_url,
        ]);

        Category::where('id',$category_id)->increment('product_count'); //product count means how many books under the category
        Publisher::where('id',$publisher_id)->increment('publisher_count'); //publisher count means how many books saved for the publisher
        Author::where('id',$author_id)->increment('book_count'); 

        return redirect()->route('allbooks')->with('message','Book Added Successfully');
    }

    public function DeleteBook($id){
        $book_info = Book::findOrFail($id);
        unlink($book_info->book_img);
        Book::findOrFail($id)->delete();
        return redirect()->route('allbooks')->with('message','Book Deleted Successfully');
    }
    public function EditBook($id){
        $book_info=Book::findOrFail($id);
        return view('admin.editbook',compact('book_info'));
    }
    public function UpdateBook(request $req){
        $id = $req->idstorage;
        $req->validate([
            'book_name'=> 'required|unique:books',
            'price'=> 'required',
            'quantity'=> 'required', 
            'book_publish_date'=>'required',
            'book_page_no'=>'required',         
            'book_description'=> 'required',
        ]);
        Book::findOrFail($id)->update([
            'book_name' => $req->book_name,
            'slug' => strtolower(str_replace(' ','-',$req->book_name)),
            'price' => $req->price,
            'quantity' => $req->quantity,
            'book_description' => $req->book_description,
            'book_page_no' => $req->book_page_no,
            'book_publish_date' => $req->book_publish_date,
        ]);
        return redirect()->route('allbooks')->with('message','Book Updated Successfully!');
    }
    public function ChangeBookImg($id){
        $book_info = Book::findOrFail($id);
        return view('admin.changebookimg',compact('book_info'));
    }
    public function UpdateBookImg(request $req){
        $id = $req -> idstorage;
        $req->validate([
            'book_img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $req->file('book_img');
        $img_name = hexdec(uniqid()). '.' .$image->getClientOriginalExtension();
        $req->book_img->move(public_path('upload'),$img_name);
        $img_url = 'upload/'.$img_name;

        unlink(Book::where('id',$id)->value('book_img'));
        
        Book::findOrFail($id)->update([
            'book_img' => $img_url,
        ]);
        return redirect()->route('allbooks')->with('message','Book Image Updated');
    }
}