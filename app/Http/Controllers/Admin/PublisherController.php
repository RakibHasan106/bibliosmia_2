<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function Index(){
        return view('admin.allpublishers');
    }
    public function Addpublisher(){
        return view('admin.addpublisher');
    }
}
