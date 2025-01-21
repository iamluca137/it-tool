<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('Bcrypt - IT Tools')]
class Bcrypt extends Component
{
    public $text = '';
    public $hashedText = '';
    public $stringCheck;
    public $hashCheck;
    public $isMatch = false;

    public function mount(): void
    {
        $this->hashText();
    }

    public function compareHash(): void
    {
        $this->isMatch = password_verify($this->stringCheck, $this->hashCheck);
    }

    public function hashText(): void
    {
        $this->hashedText = password_hash($this->text, PASSWORD_BCRYPT);
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'bcrypt');
        return view('livewire.pages.tools.bcrypt', [
            'tool' => $tool,
        ]);
    }
}
