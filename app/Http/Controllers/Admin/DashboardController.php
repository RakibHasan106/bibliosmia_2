<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class DashboardController extends Controller
{
    public function Index(){
        $book_count = Book::count();
        $author_count = Author::count();
        $publisher_count = Publisher::count();
        $category_count = Category::count();
        return view('admin.dashboard',compact('book_count','author_count'
                    ,'publisher_count','category_count'));
    }
}
