<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str as Str;

#[Layout('layout.app')]
#[Title('Token Generator - IT Tools')]
class UlidGenerator extends Component
{
    public $quantity = 1;
    public $ulidLists = [];
    public $formats = ['Raw', 'JSON'];
    public $selectedFormat = 'Raw';

    protected $rules = [
        'quantity' => 'required|integer|min:1|max:100',
    ];

    public function mount(): void
    {
        $this->generateUlid();
    }

    // Change the quantity of ULID to generate
    public function updatedQuantity(): void
    {
        $this->validateOnly('quantity');
        $this->generateUlid();
    }

    public function changeSelectedFormat($format): void
    {
        $this->selectedFormat = $format;
        $this->generateUlid();
    }

    public function generateUlid(): void
    {
        $this->reset('ulidLists');
        for ($i = 0; $i < $this->quantity; $i++) {
            $this->ulidLists[] = (string)Str::ulid();
        }

        if ($this->selectedFormat === 'JSON') {
            $this->ulidLists = json_encode($this->ulidLists, JSON_PRETTY_PRINT);
        }
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'ulid-generator');
        return view('livewire.pages.tools.ulid-generator', [
            'tool' => $tool,
        ]);
    }
}
