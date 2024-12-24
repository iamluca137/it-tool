<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/tools/{slug}', [ToolController::class, 'tools'])->name('tools');

Route::fallback(function () {
    return redirect()->route('home');  
});
