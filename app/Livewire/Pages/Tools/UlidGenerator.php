<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str as Str;

#[Layout('layout.app')]
#[Title('ULID Generator - IT Tools')]
class UlidGenerator extends Component
{
    public $quantity = 1;
    public $ulidLists = [];
    public $formats = ['Raw', 'JSON'];
    public $selectedFormat = 'Raw';

    public function mount(): void
    {
        $this->generateUlid();
    }

    // Change the quantity of ULID to generate
    public function updatedQuantity(): void
    {
        if (!is_numeric($this->quantity) || $this->quantity < 1) {
            $this->quantity = 1;
        } elseif ($this->quantity > 100) {
            $this->quantity = 100;
        }

        $this->generateUlid();
    }

    public function changeSelectedFormat($format): void
    {
        $this->selectedFormat = $format;
        $this->generateUlid();
    }

    private function generateUlid(): void
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
