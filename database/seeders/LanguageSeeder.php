<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'English',
                'code' => 'US',
                'icon' => 'us.svg',
                'is_active' => 1,
            ],
            [
                'name' => 'Tiếng Việt',
                'code' => 'VN',
                'icon' => 'vietnam.svg',
                'is_active' => 0,
            ],
            [
                'name' => 'Deutsch',
                'code' => 'DE',
                'icon' => 'germany.svg',
                'is_active' => 0,
            ],
            [
                'name' => 'Français',
                'code' => 'FR',
                'icon' => 'france.svg',
                'is_active' => 0,
            ],
            [
                'name' => '日本語',
                'code' => 'JP',
                'icon' => 'japan.svg',
                'is_active' => 0,
            ],
            [
                'name' => '한국어',
                'code' => 'KR',
                'icon' => 'korea.svg',
                'is_active' => 0,
            ],
            [
                'name' => '中文',
                'code' => 'CN',
                'icon' => 'china.svg',
                'is_active' => 0,
            ]
        ];

        foreach ($data as $item) {
            Language::create($item);
        }
    }
}
