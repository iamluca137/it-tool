<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;

class HomeController extends Controller
{
    function index()
    {
        $favorites = SubCategory::get()->random(3);
        $categories = Category::all();
        return view('pages.home', compact('categories', 'favorites'));
    }

    function about()
    {
        return view('pages.about');
    }
}
