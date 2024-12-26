<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Layout('layout.app')]
#[Title('IT Tools')]
class Home extends Component
{
    public function render()
    {
        $favorites = SubCategory::get()->random(3);
        $categories = Category::all();
        return view('livewire.pages.home', compact('categories', 'favorites'));
    }
}
