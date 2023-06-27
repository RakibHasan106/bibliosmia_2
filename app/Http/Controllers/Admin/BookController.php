<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function Index(){
        $books = Book::latest()->get(); 
        return view('admin.allbooks',compact('books'));
    }
    public function AddBook(){
        return view('admin.addbook');
    }
}
