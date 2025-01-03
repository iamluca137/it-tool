<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\SubCategory;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

#[Layout('layout.app')]
#[Title('IT Tools')]
class Home extends Component
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    #[NoReturn] public function favorite($slug)
    {
        if (session()->has('favorites')) {
            $favorites = session()->get('favorites');
            if (!in_array($slug, $favorites)) {
                $favorites[] = $slug;
            } else {
                $favorites = array_diff($favorites, [$slug]);
            }
            session()->put('favorites', $favorites);
        } else {
            session()->put('favorites', [$slug]);
        }
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function render()
    {
        $favorites = [];
        $dataFavorites = session()->get('favorites', []);
        foreach ($dataFavorites as $item) {
            $favorites[] = SubCategory::where('slug', $item)->first();
        }
        $categories = Category::all();
        return view('livewire.pages.home', compact('categories', 'favorites'));
    }
}
