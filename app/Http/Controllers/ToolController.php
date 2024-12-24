<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    function tools($slug)
    {
        $tool = SubCategory::where('slug', $slug)->firstOrFail();
        return view("pages.tools.$tool->slug", compact('tool'));
    }
}
