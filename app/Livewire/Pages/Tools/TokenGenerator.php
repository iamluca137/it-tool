<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('Token Generator - IT Tools')]
class TokenGenerator extends Component
{
    public function render()
    {
        $slug = 'token-generator';
        $tool = SubCategory::where('slug', $slug)->first();
        return view('livewire.pages.tools.token-generator', [
            'tool' => $tool
        ]);
    }
}
