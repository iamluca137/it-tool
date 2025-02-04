<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Spatie\Color\Cmyk;
use Spatie\Color\Hex;
use Spatie\Color\Hsb;
use Spatie\Color\Hsl;
use Spatie\Color\Rgb;

#[Layout('layout.app')]
#[Title('Color Converter - IT Tools')]
class ColorConverter extends Component
{
    public $formats = ['hex', 'rgb', 'hsl', 'hsb', 'cmyk'];
    public $colorPicker = '#ff0000';
    public array $inputs = [
        'hex'  => '',
        'rgb'  => '',
        'hsl'  => '',
        'hsb'  => '',
        'cmyk' => '',
    ];

    protected function rules(): array
    {
        return [
            'colorPicker' => ['required', 'string', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/'],
            'inputs.hex'  => ['required', 'string', 'regex:/^#(?:[0-9a-fA-F]{3}){1,2}$/'],
            'inputs.rgb'  => ['required', 'string', 'regex:/^rgb\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*\)$/'],
            'inputs.hsl'  => ['required', 'string', 'regex:/^hsl\(\s*(?:360|3[0-5]\d|[12]?\d{1,2})\s*,\s*(?:100|[1-9]?\d)%\s*,\s*(?:100|[1-9]?\d)%\s*\)$/'],
            'inputs.hsb'  => ['required', 'string', 'regex:/^hsb\(\s*(?:360|3[0-5]\d|[12]?\d{1,2})\s*,\s*(?:100|[1-9]?\d)%\s*,\s*(?:100|[1-9]?\d)%\s*\)$/'],
            'inputs.cmyk' => ['required', 'string', 'regex:/^cmyk\(\s*(?:100|[1-9]?\d)%\s*,\s*(?:100|[1-9]?\d)%\s*,\s*(?:100|[1-9]?\d)%\s*,\s*(?:100|[1-9]?\d)%\s*\)$/'],
        ];
    }

    public function mount(): void
    {
        $this->convert();
    }

    public function updated($property): void
    {
        if ($property === 'colorPicker') {
            $this->validateOnly('colorPicker');
            $this->convert();
            return;
        }

        if (str_starts_with($property, 'inputs.')) {
            $format = substr($property, 7);
            if (in_array($format, $this->formats)) {
                $this->validateOnly($property);
                $this->colorPicker = (string)call_user_func([self::class, 'convertToHex'], $this->inputs[$format], $format);
                $this->convert();
            }
        }
    }

    private function convert(): void
    {
        $color = Hex::fromString($this->colorPicker);
        $this->inputs = [
            'hex'  => (string)$color->toHex(),
            'rgb'  => (string)$color->toRgb(),
            'hsl'  => (string)$color->toHsl(),
            'hsb'  => (string)$color->toHsb(),
            'cmyk' => (string)$color->toCmyk(),
        ];
    }

    private static function convertToHex(string $color, string $format): string
    {
        return match ($format) {
            'rgb' => (string)Rgb::fromString($color)->toHex(),
            'hsl' => (string)Hsl::fromString($color)->toHex(),
            'hsb' => (string)Hsb::fromString($color)->toHex(),
            'cmyk' => (string)Cmyk::fromString($color)->toHex(),
            default => $color,
        };
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'color-converter');
        return view('livewire.pages.tools.color-converter', [
            'tool' => $tool,
        ]);
    }
}
