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
    public $typeEncrypts = [
        'MD5',
        'SHA1',
        'SHA256',
        'SHA224',
        'SHA512',
        'SHA384',
        'SHA3',
        'RIPEMD160',
    ];
    public function render()
    {
        $slug = 'hash-text';
        $tool = SubCategory::where('slug', $slug)->first();
        return view('livewire.pages.tools.hash-text', [
            'tool' => $tool
        ]);
    }
}
