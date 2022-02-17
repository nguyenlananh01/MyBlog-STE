<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('pages.blog-left-sidebar');
    }

    public function detail(){
        return view ('pages.blog-detail');
    }
}
