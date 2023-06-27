<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function Index(){
        return view('admin.allbooks');
    }
    public function AddBook(){
        return view('admin.addbook');
    }
}
