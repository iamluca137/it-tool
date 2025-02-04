<?php

namespace App\Livewire\Pages\Tools;

use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use ZxcvbnPhp\Zxcvbn;

#[Layout('layout.app')]
#[Title('Password Strength Analyser - IT Tools')]
class PasswordStrengthAnalyser extends Component
{
    public string $password = '';
    public array $score = [];
    public string $backgroundColor = 'red';

    public function mount(): void
    {
        $this->analyzePassword();
    }

    public function updatedPassword(): void
    {
        $this->analyzePassword();
    }

    public function validatePassword(): void
    {
        $this->validate([
            'password' => 'nullable|string|max:100',
        ], [
            'password.required' => 'The password field is required.',
            'password.max' => 'The password may not be greater than 100 characters.',
        ]);
    }

    private function analyzePassword(): void
    {
        $this->validatePassword();
        $result = $this->updatePasswordStrength();
        $this->formatData($result);
    }

    private function updatePasswordStrength(): array
    {
        $analyzer = new Zxcvbn();
        return $analyzer->passwordStrength($this->password) ?? [
            'guesses' => 0,
            'guesses_log10' => 0,
            'crack_times_display' => [
                'online_throttling_100_per_hour' => '0 seconds',
                'online_no_throttling_10_per_second' => '0 seconds',
                'offline_slow_hashing_1e4_per_second' => '0 seconds',
                'offline_fast_hashing_1e10_per_second' => '0 seconds',
            ],
            'score' => 0,
            'feedback' => ['suggestions' => []],
            'calc_time' => 0,
        ];
    }

    private function formatData($result): void
    {
        $this->score = [
            'Password Length' => strlen($this->password),
            'Guesses' => $result['guesses'],
            'Guesses Log10' => $result['guesses_log10'],
            'Online Throttling 100 Per Hour' => $result['crack_times_display']['online_throttling_100_per_hour'],
            'Online No Throttling 10 Per Second' => $result['crack_times_display']['online_no_throttling_10_per_second'],
            'Offline Slow Hashing 1e4 Per Second' => $result['crack_times_display']['offline_slow_hashing_1e4_per_second'],
            'Offline Fast Hashing 1e10 Per Second' => $result['crack_times_display']['offline_fast_hashing_1e10_per_second'],
            'Score' => $result['score'] . ' / 4',
            'Feedback' => !empty($result['feedback']['suggestions']) ? implode(', ', $result['feedback']['suggestions']) : 'Your password is strong enough',
            'Calc Time' => $result['calc_time'],
        ];
    }

    public function refresh(): void
    {
        $this->password = '';
        $this->formatData($this->updatePasswordStrength());
    }

    public function render()
    {
        $tool = SubCategory::firstWhere('slug', 'password-strength-analyser');
        return view('livewire.pages.tools.password-strength-analyser', [
            'tool' => $tool,
        ]);
    }
}
