<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;

class clientController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function LogIn(){
        return view('user.login');
    }
    public function SignUp(){
        return view('user.signup');
    }
    public function Cart(){
        return view('user.cart');
    }
    public function AboutUs(){
        return view('user.aboutus');
    }
    public function CategoryDisplay($id){
        $category = Category::findOrFail($id);
        $books = Book::where('book_category_id',$id)->latest()->get();
        return view('user.selectedcategorybooks',compact('category','books'));
    }
    public function PublisherDisplay($id){
        $publisher = Publisher::findOrFail($id);
        $books = Book::where('book_publisher_id',$id)->latest()->get();
        return view('user.selectedpublisherbooks',compact('publisher','books'));
    }
    public function AuthorDisplay($id){
        $author = Author::findOrFail($id);
        $books = Book::where('author_id',$id)->latest()->get();
        return view('user.selectedauthorbooks',compact('author','books'));
    }

    public function BookPageDisplay($id){
        $book = Book::findOrFail($id);

        $category = Category::findOrFail($book->book_category_id);
        $author = Author::findOrFail($book->author_id);
        $publisher = Publisher::findOrFail($book->book_publisher_id);
        
        return view('user.bookpage',compact('category','author','publisher','book'));
    }
}
