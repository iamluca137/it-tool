<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\SlugifyTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use SlugifyTrait;

    public function run(): void
    {
        $dataCats = [
            [
                'name' => 'Crypto',
                'subcategories' => [
                    [
                        'name' => 'Token generator',
                        'description' => 'Generate a secure random token for various use cases.',
                        'icon' => 'fa-regular fa-shuffle',
                    ],
                    [
                        'name' => 'Hash text',
                        'description' => 'Convert text into a secure hash value.',
                        'icon' => 'fa-regular fa-eye-slash',
                    ],
                    [
                        'name' => 'Bcrypt',
                        'description' => 'Generate a secure hash using the Bcrypt algorithm.',
                        'icon' => 'fa-regular fa-key',
                    ],
                    [
                        'name' => 'UUIDs generator',
                        'description' => 'Create unique identifiers (UUIDs) for your applications.',
                        'icon' => 'fa-regular fa-fingerprint',
                    ],
                    [
                        'name' => 'ULID generator',
                        'description' => 'Create unique identifiers (UUIDs) for your applications.',
                        'icon' => 'fa-regular fa-arrow-down-9-1',
                    ],
                    [
                        'name' => 'Encrypt / decrypt text',
                        'description' => 'Securely encrypt or decrypt text data.',
                        'icon' => 'fa-regular fa-lock',
                    ],
                    [
                        'name' => 'BIP39 passphrase generator',
                        'description' => 'Generate secure passphrases following the BIP39 standard.',
                        'icon' => 'fa-regular fa-bars-staggered',
                    ],
                    [
                        'name' => 'Hmac generator',
                        'description' => 'Create a keyed-hash message authentication code (HMAC).',
                        'icon' => 'fa-brands fa-hackerrank',
                    ],
                    [
                        'name' => 'RSA key pair generator',
                        'description' => 'Generate RSA public and private key pairs.',
                        'icon' => 'fa-regular fa-award',
                    ],
                    [
                        'name' => 'Password strength analyser',
                        'description' => 'Evaluate the strength and security of passwords.',
                        'icon' => 'fa-regular fa-i-cursor',
                    ],
                    [
                        'name' => 'PDF signature checker',
                        'description' => 'Verify the authenticity of digital signatures in PDF files.',
                        'icon' => 'fa-regular fa-file-lines',
                    ],
                ],
            ],
            [
                'name' => 'Converter',
                'subcategories' => [
                    [
                        'name' => 'Date-time converter',
                        'description' => 'Convert between various date and time formats.',
                        'icon' => 'fa-regular fa-calendar-days'
                    ],
                    [
                        'name' => 'Integer base converter',
                        'description' => 'Convert numbers between different bases (e.g., binary, decimal, hexadecimal).',
                        'icon' => 'fa-regular fa-arrow-right-arrow-left'
                    ],
                    [
                        'name' => 'Roman numeral converter',
                        'description' => 'Convert numbers to and from Roman numerals.',
                        'icon' => 'fa-regular fa-x'
                    ],
                    [
                        'name' => 'Base64 string encoder/decoder',
                        'description' => 'Encode or decode strings using Base64.',
                        'icon' => 'fa-regular fa-file-lines'
                    ],
                    [
                        'name' => 'Base64 file converter',
                        'description' => 'Convert files to and from Base64 format.',
                        'icon' => 'fa-regular fa-file-lines'
                    ],
                    [
                        'name' => 'Color converter',
                        'description' => 'Convert colors between formats like HEX, RGB, and HSL.',
                        'icon' => 'fa-regular fa-palette'
                    ],
                    [
                        'name' => 'Case converter',
                        'description' => 'Change text to upper case, lower case, or title case.',
                        'icon' => 'fa-regular fa-font'
                    ],
                    [
                        'name' => 'Text to NATO alphabet',
                        'description' => 'Convert text into NATO phonetic alphabet format.',
                        'icon' => 'fa-regular fa-volume-low'
                    ],
                    [
                        'name' => 'Text to ASCII binary',
                        'description' => 'Convert text into binary ASCII representation.',
                        'icon' => 'fa-regular fa-hashtag'
                    ],
                    [
                        'name' => 'Text to Unicode',
                        'description' => 'Convert text into Unicode code points.',
                        'icon' => 'fa-regular fa-bars'
                    ],
                    [
                        'name' => 'YAML to JSON converter',
                        'description' => 'Convert YAML data into JSON format.',
                        'icon' => 'fa-regular fa-bars-staggered'
                    ],

                    [
                        'name' => 'YAML to TOML',
                        'description' => 'Convert YAML data into TOML format.',
                        'icon' => 'fa-regular fa-bars-staggered'
                    ],
                    [
                        'name' => 'JSON to YAML converter',
                        'description' => 'Convert JSON data into YAML format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly'
                    ],
                    [
                        'name' => 'JSON to TOML',
                        'description' => 'Convert JSON data into TOML format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly'
                    ],
                    [
                        'name' => 'List converter',
                        'description' => 'Convert lists into different structured formats.',
                        'icon' => 'fa-regular fa-list'
                    ],
                    [
                        'name' => 'TOML to JSON',
                        'description' => 'Convert TOML data into JSON format.',
                        'icon' => 'fa-regular fa-brackets-square'
                    ],
                    [
                        'name' => 'TOML to YAML',
                        'description' => 'Convert TOML data into YAML format.',
                        'icon' => 'fa-regular fa-brackets-square'
                    ],
                    [
                        'name' => 'XML to JSON',
                        'description' => 'Convert XML data into JSON format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly'
                    ],
                    [
                        'name' => 'JSON to XML',
                        'description' => 'Convert JSON data into XML format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly'
                    ],
                    [
                        'name' => 'Markdown to HTML',
                        'description' => 'Convert Markdown text into HTML format.',
                        'icon' => 'fa-brands fa-markdown'
                    ],
                ],
            ],
            [
                'name' => 'Web',
                'subcategories' => [
                    [
                        'name' => 'Encode/decode URL-formatted strings',
                        'description' => 'Encode or decode strings into URL-friendly formats.',
                        'icon' => 'fa-regular fa-link'
                    ],
                    [
                        'name' => 'Escape HTML entities',
                        'description' => 'Escape special characters into HTML entities.',
                        'icon' => 'fa-regular fa-code'
                    ],
                    [
                        'name' => 'URL parser',
                        'description' => 'Parse and extract components from URLs.',
                        'icon' => 'fa-regular fa-link'
                    ],
                    [
                        'name' => 'Device information',
                        'description' => 'Retrieve detailed device information.',
                        'icon' => 'fa-regular fa-desktop'
                    ],
                    [
                        'name' => 'Basic auth generator',
                        'description' => 'Generate Basic Authentication headers.',
                        'icon' => 'fa-duotone fa-regular fa-code-commit'
                    ],
                    [
                        'name' => 'Open graph meta generator',
                        'description' => 'Create Open Graph meta tags for better sharing.',
                        'icon' => 'fa-regular fa-tag'
                    ],
                    [
                        'name' => 'OTP code generator',
                        'description' => 'Generate one-time passwords (OTPs).',
                        'icon' => 'fa-regular fa-mobile'
                    ],
                    [
                        'name' => 'MIME types',
                        'description' => 'Look up and retrieve MIME type information.',
                        'icon' => 'fa-regular fa-globe'
                    ],
                    [
                        'name' => 'JWT parser',
                        'description' => 'Decode and analyze JSON Web Tokens (JWTs).',
                        'icon' => 'fa-regular fa-key'
                    ],
                    [
                        'name' => 'Keycode info',
                        'description' => 'Get keycode information for keyboard events.',
                        'icon' => 'fa-regular fa-keyboard'
                    ],
                    [
                        'name' => 'Slugify string',
                        'description' => 'Convert text into URL-friendly slugs.',
                        'icon' => 'fa-regular fa-a'
                    ],
                    [
                        'name' => 'HTML WYSIWYG editor',
                        'description' => 'Edit HTML content using a WYSIWYG editor.',
                        'icon' => 'fa-regular fa-pen-to-square'
                    ],
                    [
                        'name' => 'User-agent parser',
                        'description' => 'Parse and analyze user-agent strings.',
                        'icon' => 'fa-light fa-browser'
                    ],
                    [
                        'name' => 'HTTP status codes',
                        'description' => 'View and understand HTTP status codes.',
                        'icon' => 'fa-duotone fa-light fa-file-code'
                    ],
                    [
                        'name' => 'JSON diff',
                        'description' => 'Compare differences between two JSON objects.',
                        'icon' => 'fa-regular fa-code-compare'
                    ],
                    [
                        'name' => 'Outlook Safelink decoder',
                        'description' => 'Decode Outlook SafeLinks for original URLs.',
                        'icon' => 'fa-light fa-browser'
                    ],
                ],
            ],
            [
                'name' => 'Images & Videos',
                'subcategories' => [
                    [
                        'name' => 'QR Code generator',
                        'description' => 'Generate QR codes for various purposes.',
                        'icon' => 'fa-regular fa-qrcode'
                    ],
                    [
                        'name' => 'WiFi QR Code generator',
                        'description' => 'Create QR codes to easily share WiFi credentials.',
                        'icon' => 'fa-regular fa-qrcode'
                    ],
                    [
                        'name' => 'SVG placeholder generator',
                        'description' => 'Generate SVG placeholders for images.',
                        'icon' => 'fa-regular fa-image'
                    ],
                    [
                        'name' => 'Camera recorder',
                        'description' => 'Record videos using your camera.',
                        'icon' => 'fa-light fa-camera'
                    ],
                ],
            ],
            [
                'name' => 'Development',
                'subcategories' => [
                    [
                        'name' => 'Git cheatsheet',
                        'description' => 'Quick reference guide for Git commands.',
                        'icon' => 'fa-brands fa-git'
                    ],
                    [
                        'name' => 'Random port generator',
                        'description' => 'Generate random port numbers for development use.',
                        'icon' => 'fa-regular fa-shuffle'
                    ],
                    [
                        'name' => 'Crontab generator',
                        'description' => 'Create cron job schedules easily.',
                        'icon' => 'fa-regular fa-clock'
                    ],
                    [
                        'name' => 'JSON prettify and format',
                        'description' => 'Beautify and format JSON data.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly'
                    ],
                    [
                        'name' => 'JSON minify',
                        'description' => 'Minify JSON data to reduce size.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly'
                    ],
                    [
                        'name' => 'JSON to CSV',
                        'description' => 'Convert JSON data to CSV format.',
                        'icon' => 'fa-regular fa-list'
                    ],
                    [
                        'name' => 'SQL prettify and format',
                        'description' => 'Beautify and format SQL queries.',
                        'icon' => 'fa-regular fa-database'
                    ],
                    [
                        'name' => 'Chmod calculator',
                        'description' => 'Calculate file permissions for chmod.',
                        'icon' => 'fa-regular fa-file-lines'
                    ],
                    [
                        'name' => 'XML formatter',
                        'description' => 'Beautify and format XML data.',
                        'icon' => 'fa-regular fa-code'
                    ],
                    [
                        'name' => 'Email normalizer',
                        'description' => 'Normalize email addresses to a standard format.',
                        'icon' => 'fa-regular fa-envelope'
                    ],
                    [
                        'name' => 'Regex Tester',
                        'description' => 'Test and validate regular expressions.',
                        'icon' => 'fa-light fa-language'
                    ],
                    [
                        'name' => 'Regex cheatsheet',
                        'description' => 'Quick reference guide for regular expressions.',
                        'icon' => 'fa-brands fa-node-js'
                    ],
                ],
            ],
            [
                'name' => 'Math',
                'subcategories' => [
                    [
                        'name' => 'Math evaluator',
                        'description' => 'Evaluate mathematical expressions, including basic arithmetic, algebra, and more.',
                        'icon' => 'fa-regular fa-calculator'
                    ],
                    [
                        'name' => 'ETA calculator',
                        'description' => 'Calculate estimated time of arrival based on distance and speed.',
                        'icon' => 'fa-regular fa-hourglass'
                    ],
                    [
                        'name' => 'Percentage calculator',
                        'description' => 'Calculate percentages, percentage increase, and percentage decrease easily.',
                        'icon' => 'fa-regular fa-percent'
                    ],
                ],
            ],
            [
                'name' => 'Measurement',
                'subcategories' => [
                    [
                        'name' => 'Chronometer',
                        'description' => 'Measure elapsed time with precision, useful for timing events or activities.',
                        'icon' => 'fa-regular fa-alarm-clock'
                    ],
                    [
                        'name' => 'Temperature converter',
                        'description' => 'Convert temperatures between different units such as Celsius, Fahrenheit, and Kelvin.',
                        'icon' => 'fa-regular fa-temperature-three-quarters'
                    ],
                    [
                        'name' => 'Benchmark builder',
                        'description' => 'Create and run benchmarks to measure the performance of your code or applications.',
                        'icon' => 'fa-regular fa-gauge'
                    ],
                ],
            ],
            [
                'name' => 'Text',
                'subcategories' => [
                    [
                        'name' => 'Lorem ipsum generator',
                        'description' => 'Generate placeholder text for use in design mockups and layouts.',
                        'icon' => 'fa-regular fa-text'
                    ],
                    [
                        'name' => 'Text statistics',
                        'description' => 'Analyze text to provide statistics such as word count, character count, and readability scores.',
                        'icon' => 'fa-light fa-file-lines'
                    ],
                    [
                        'name' => 'Emoji picker',
                        'description' => 'Select and copy emojis to use in your text and messages.',
                        'icon' => 'fa-regular fa-icons'
                    ],
                    [
                        'name' => 'String obfuscator',
                        'description' => 'Obfuscate text strings to make them harder to read or understand.',
                        'icon' => 'fa-regular fa-eye-slash'
                    ],
                    [
                        'name' => 'Text diff',
                        'description' => 'Compare two pieces of text to highlight differences and similarities.',
                        'icon' => 'fa-regular fa-file-plus-minus'
                    ],
                    [
                        'name' => 'Numeronym generator',
                        'description' => 'Generate numeronyms, which are abbreviations using numbers to represent letters in words.',
                        'icon' => 'fa-regular fa-input-numeric'
                    ],
                    [
                        'name' => 'ASCII Art Text Generator',
                        'description' => 'Create ASCII art from text, converting your text into a visual representation using ASCII characters.',
                        'icon' => 'fa-regular fa-microchip'
                    ],
                ],
            ]
        ];


        foreach ($dataCats as $item) {
            $category = Category::create([
                'name' => $item['name'],
            ]);

            foreach ($item['subcategories'] as $sub) {
                SubCategory::create([
                    'category_id' => $category->id,
                    'name' => $sub['name'],
                    'slug' => $this->slugify($sub['name']),
                    'description' => $sub['description'],
                    'icon' => $sub['icon'],
                ]);
            }
        }
    }
}
