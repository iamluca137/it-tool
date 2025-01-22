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
    public $hashedText;
    public $stringCheck;
    public $hashCheck;
    public $isMatch = false;

    public function mount(): void
    {
        $this->hashText();
    }

    public function updatedText(): void
    {
        $this->hashText();
    }

    public function updatedStringCheck(): void
    {
        $this->compareHash();
    }

    public function updatedHashCheck(): void
    {
        $this->compareHash();
    }

    private function compareHash(): void
    {
        $this->isMatch = password_verify($this->stringCheck, $this->hashCheck);
    }

    private function hashText(): void
    {
        $this->hashedText = password_hash($this->text, PASSWORD_BCRYPT);
    }

    public function refresh(): void
    {
        $this->reset('text', 'stringCheck', 'hashCheck', 'isMatch');
        $this->hashText();
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'bcrypt');
        return view('livewire.pages.tools.bcrypt', [
            'tool' => $tool,
        ]);
    }
}
