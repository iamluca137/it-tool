<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return view('pages.home', compact('categories'));
    }

    function about()
    {
        return view('pages.about');
    }
}
