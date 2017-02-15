<?php

namespace App\Http\Controllers;

use App\Entity\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function blogDetail($year, $slug)
    {
        $blogDetail = Blog::detail($year, $slug);
        return view('modules.blog.detail', compact('blogDetail'));
        
    }
}
