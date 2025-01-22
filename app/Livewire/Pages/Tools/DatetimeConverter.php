<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.app')]
#[Title('Hash Text - IT Tools')]
class DatetimeConverter extends Component
{
    public $formats = [
        'JS locale date string',
        'ISO 8601',
        'ISO 9075',
        'RFC 3339',
        'RFC 7231',
        'Unix timestamp',
        'Timestamp',
        'UTC format',
        'Mongo ObjectID',
        'Excel date/time',
    ];
    public $input = '';
    public $results = [];
    public $selectedFormat = 'JS locale date string';

    protected function rules(): array
    {
        return [
            'input' => ['required', 'regex:' . $this->getRegexForFormat($this->selectedFormat)],
            'selectedFormat' => 'required|in:JS locale date string,ISO 8601,ISO 9075,RFC 3339,RFC 7231,Unix timestamp,Timestamp,UTC format,Mongo ObjectID,Excel date/time',
        ];
    }

    private function getRegexForFormat(string $format): string
    {
        return match ($format) {
            'JS locale date string' => '/^\w{3} \w{3} \d{2} \d{4} \d{2}:\d{2}:\d{2} [\w\/_]+[+-]\d{4} \(\+\d{2}\)$/',
            'ISO 8601', 'RFC 3339' => '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/',
            'ISO 9075' => '/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/',
            'RFC 7231', 'UTC format' => '/^\w{3}, \d{2} \w{3} \d{4} \d{2}:\d{2}:\d{2} [+-]\d{2}$/',
            'Unix timestamp', 'Timestamp' => '/^\d+$/',
            'Mongo ObjectID' => '/^[0-9a-fA-F]{24}$/',
            'Excel date/time' => '/^\d+(\.\d+)?$/',
            default => '/.*/',
        };
    }

    public function mount(): void
    {
        $this->convert();
    }

    public function updatedInput(): void
    {
        $this->validateOnly('input');
        $this->convert();
    }

    public function updatedSelectedFormat(): void
    {
        $this->validateOnly('input');
        $this->convert();
    }

    // Format one of the date formats to all other formats
    public function convert(): void
    {
        $this->results = [];

        if ($this->input === '') {
            $date = time();
        } else {
            $date = strtotime($this->input);
        }

        foreach ($this->formats as $format) {
            $this->results[$format] = match ($format) {
                'JS locale date string' => date('D M d Y H:i:s eO (T)', $date),
                'ISO 8601' => date('c', $date),
                'ISO 9075' => date('Y-m-d H:i:s', $date),
                'RFC 3339' => date('Y-m-d\TH:i:sP', $date),
                'RFC 7231', 'UTC format' => date('D, d M Y H:i:s T', $date),
                'Unix timestamp', 'Timestamp' => $date,
                'Mongo ObjectID' => sprintf('%s%08x', dechex($date), 0),
                'Excel date/time' => ($date - 25569) * 86400,
            };
        }
    }


    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'date-time-converter');
        return view('livewire.pages.tools.datetime-converter', [
            'tool' => $tool,
        ]);
    }
}
