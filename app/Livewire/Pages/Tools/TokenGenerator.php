<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('Token Generator - IT Tools')]
class TokenGenerator extends Component
{
    #[Url]
    public $length = 64;
    #[Url]
    public $includeUppercase = true;
    #[Url]
    public $includeLowercase = true;
    #[Url]
    public $includeNumbers = true;
    #[Url]
    public $includeSpecialChars = false;
    public $generatedToken = '';

    public function mount(): void
    {
        $this->generateToken();
    }

    public function generateToken(): void
    {
        // Character pools
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()-_=+[]{}|;:,.<>?';

        $characters = '';
        if ($this->includeLowercase) {
            $characters .= $lowercase;
        }
        if ($this->includeUppercase) {
            $characters .= $uppercase;
        }
        if ($this->includeNumbers) {
            $characters .= $numbers;
        }
        if ($this->includeSpecialChars) {
            $characters .= $specialChars;
        }

        // Generate the token
        $token = '';

        if (empty($characters)) {
            $this->generatedToken = $token;
            return;
        }

        $maxIndex = strlen($characters) - 1;
        for ($i = 0; $i < $this->length; $i++) {
            $token .= $characters[rand(0, $maxIndex)];
        }

        $this->generatedToken = $token;
    }

    public function updateLength(int $length): void
    {
        $this->length = $length;
        $this->generateToken();
    }

    public function updateIncludeUppercase(): void
    {
        $this->includeUppercase = !$this->includeUppercase;
        $this->generateToken();
    }

    public function updateIncludeLowercase(): void
    {
        $this->includeLowercase = !$this->includeLowercase;
        $this->generateToken();
    }

    public function updateIncludeNumbers(): void
    {
        $this->includeNumbers = !$this->includeNumbers;
        $this->generateToken();
    }

    public function updateIncludeSpecialChars(): void
    {
        $this->includeSpecialChars = !$this->includeSpecialChars;
        $this->generateToken();
    }

    public function refresh(): void
    {
        $this->reset('length');
        $this->generateToken();
    }

    public function render()
    {
        $slug = 'token-generator';
        $tool = SubCategory::where('slug', $slug)->first();
        return view('livewire.pages.tools.token-generator', [
            'tool' => $tool
        ]);
    }
}
