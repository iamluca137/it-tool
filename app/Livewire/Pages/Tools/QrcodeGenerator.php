<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

#[Layout('layout.app')]
#[Title('Token Generator - IT Tools')]
class QrcodeGenerator extends Component
{
    public $text = 'hello world';
    public $margin = 3;
    public $qrCode;
    public $foregroundColor = '#000000';
    public $backgroundColor = '#ffffff';
    public $styles = ['square', 'dot', 'round'];
    public $errorCorrections = ['Low', 'Medium', 'Quartile', 'High'];
    public $errorCorrection = 'Medium';
    public $style = 'square';

    public function mount(): void
    {
        $this->generateQrCode();
    }

    public function updatedText(): void
    {
        $this->generateQrCode();
    }

    public function updatedForegroundColor(): void
    {
        $this->generateQrCode();
    }

    public function updatedBackgroundColor(): void
    {
        $this->generateQrCode();
    }

    public function updatedMargin(): void
    {
        $this->generateQrCode();
    }

    public function updatedStyle(): void
    {
        $this->generateQrCode();
    }

    public function updatedErrorCorrection(): void
    {
        $this->generateQrCode();
    }

    public function updated($propertyName): void
    {
        $this->validateProperty($propertyName);
        $this->generateQrCode();
    }

    private function validateProperty($propertyName): void
    {
        switch ($propertyName) {
            case 'text':
                if (empty($this->text)) {
                    $this->text = 'hello world';
                }
                break;
            case 'margin':
                if (!is_numeric($this->margin)) {
                    $this->margin = 0;
                }
                break;
            case 'foregroundColor':
                if (!preg_match('/^#[a-f0-9]{6}$/i', $this->foregroundColor)) {
                    $this->foregroundColor = '#000000';
                }
                break;
            case 'backgroundColor':
                if (!preg_match('/^#[a-f0-9]{6}$/i', $this->backgroundColor)) {
                    $this->backgroundColor = '#ffffff';
                }
                break;
        }
    }

    private function generateQrCode(): void
    {
        try {
            // Remove all the previous QR codes
            $this->removeQrCodes();

            // Convert the foreground and background colors to RGB
            $foregroundColor = $this->convertHexToRgb($this->foregroundColor);
            $backgroundColor = $this->convertHexToRgb($this->backgroundColor);

            $this->qrCode = (string)QrCode::size('200')
                ->format('svg')
                ->margin($this->margin)
                ->style($this->style)
                ->errorCorrection($this->errorCorrection[0])
                ->backgroundColor($backgroundColor[0], $backgroundColor[1], $backgroundColor[2])
                ->color($foregroundColor[0], $foregroundColor[1], $foregroundColor[2])
                ->generate($this->text);
        } catch (\BaconQrCode\Exception\WriterException $e) {
            $this->qrCode = null;
        }
    }

    private function convertHexToRgb($hex): array
    {
        $hex = str_replace('#', '', $hex);
        if (strlen($hex) === 3) {
            $hex = str_repeat(substr($hex, 0, 1), 2) . str_repeat(substr($hex, 1, 1), 2) . str_repeat(substr($hex, 2, 1), 2);
        }
        return array_map('hexdec', str_split($hex, 2));
    }

    public function downloadQrCode(): ?\Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        if ($this->qrCode) {
            file_put_contents(public_path('images/qrcodes/qrcode.svg'), $this->qrCode);
            return response()->download(public_path('images/qrcodes/qrcode.svg'));
        }

        return null;
    }

    private function removeQrCodes(): void
    {
        $files = glob(public_path('images/qrcodes/*'));
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'qr-code-generator');
        return view('livewire.pages.tools.qrcode-generator', [
            'tool' => $tool,
        ]);
    }
}
