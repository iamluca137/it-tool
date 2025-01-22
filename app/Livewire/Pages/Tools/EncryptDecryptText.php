<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('Encrypt / Decrypt Text - IT Tools')]
class EncryptDecryptText extends Component
{
    public $encryptText = '';
    public $decryptText = '';
    public $encryptedText = '';
    public $decryptedText = '';
    public $secretKeyEnc = '';
    public $secretKeyDec = '';
    private $cypherMethod = 'AES-256-CBC';
    private $encryption_iv = '1234567891011121';

    public function mount(): void
    {
        $this->encryptFunc();
    }

    public function updatedEncryptText(): void
    {
        $this->encryptFunc();
    }

    public function updatedSecretKeyEnc(): void
    {
        $this->encryptFunc();
    }

    public function updatedDecryptText(): void
    {
        $this->decryptText();
    }

    public function updatedSecretKeyDec(): void
    {
        $this->decryptText();
    }

    private function encryptFunc(): void
    {
        $this->encryptedText = openssl_encrypt($this->encryptText, $this->cypherMethod, $this->secretKeyEnc, $options = 0, $this->encryption_iv);
    }

    private function decryptText(): void
    {
        $this->decryptedText = openssl_decrypt($this->decryptText, $this->cypherMethod, $this->secretKeyDec, $options = 0, $this->encryption_iv) ?: '';
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'encrypt-decrypt-text');
        return view('livewire.pages.tools.encrypt-decrypt-text', [
            'tool' => $tool,
        ]);
    }
}
