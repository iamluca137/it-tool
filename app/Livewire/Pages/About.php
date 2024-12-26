<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('About - IT Tools')]
class About extends Component
{
    public function render()
    {
        return view('livewire.pages.about');
    }
}
