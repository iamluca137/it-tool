<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('Hash Text - IT Tools')]
class HashText extends Component
{
    public $text = '';
    public $hashAlgorithms = ['md5', 'sha1', 'sha256', 'sha224', 'sha512/224', 'sha384', 'sha3-224', 'ripemd160'];
    public $selectedFormat = 'Hexadecimal';
    public $formats = ['Binary', 'Hexadecimal', 'Base64', 'Base64url'];
    public $hashedResults = [];

    public function mount(): void
    {
        $this->generateHashes();
    }

    public function hashText(): void
    {
        $this->generateHashes();
    }

    public function changeSelectedFormat($format): void
    {
        $this->selectedFormat = $format;
        $this->generateHashes();
    }

    private function generateHashes(): void
    {
        $this->hashedResults = [];

        foreach ($this->hashAlgorithms as $algorithm) {
            $hash = hash($algorithm, $this->text, true);
            $this->hashedResults[$algorithm] = $this->convertOutput($hash);
        }
    }

    private function convertOutput($hash): string
    {
        return match ($this->selectedFormat) {
            'Binary' => implode(' ', array_map('decbin', unpack('C*', $hash))),
            'Hexadecimal' => bin2hex($hash),
            'Base64' => base64_encode($hash),
            'Base64url' => rtrim(strtr(base64_encode($hash), '+/', '-_'), '='),
            default => bin2hex($hash),
        };
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'hash-text');
        return view('livewire.pages.tools.hash-text', [
            'tool' => $tool,
        ]);
    }
}
