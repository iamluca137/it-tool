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
                        'description' => 'Generate random string with the chars you want, uppercase or lowercase letters, numbers and/or symbols.',
                        'icon' => 'fa-regular fa-shuffle',
                        'status' => 1
                    ],
                    [
                        'name' => 'Hash text',
                        'description' => 'Hash a text string using the function you need : MD5, SHA1, SHA256, SHA224, SHA512, SHA384, SHA3 or RIPEMD160',
                        'icon' => 'fa-regular fa-eye-slash',
                        'status' => 1
                    ],
                    [
                        'name' => 'Bcrypt',
                        'description' => 'Hash and compare text string using bcrypt. Bcrypt is a password-hashing function based on the Blowfish cipher.',
                        'icon' => 'fa-regular fa-key',
                        'status' => 1
                    ],
                    [
                        'name' => 'ULID generator',
                        'description' => 'Generate random Universally Unique Lexicographically Sortable Identifier (ULID).',
                        'icon' => 'fa-regular fa-arrow-down-9-1',
                        'status' => 1
                    ],
                    [
                        'name' => 'Encrypt / decrypt text',
                        'description' => 'Encrypt clear text and decrypt ciphertext using crypto algorithms like AES, TripleDES, Rabbit or RC4.',
                        'icon' => 'fa-regular fa-lock',
                        'status' => 1
                    ],
                    [
                        'name' => 'BIP39 passphrase generator',
                        'description' => 'Generate secure passphrases following the BIP39 standard.',
                        'icon' => 'fa-regular fa-bars-staggered',
                        'status' => 0
                    ],
                    [
                        'name' => 'Hmac generator',
                        'description' => 'Create a keyed-hash message authentication code (HMAC).',
                        'icon' => 'fa-brands fa-hackerrank',
                        'status' => 0
                    ],
                    [
                        'name' => 'RSA key pair generator',
                        'description' => 'Generate RSA public and private key pairs.',
                        'icon' => 'fa-regular fa-award',
                        'status' => 0
                    ],
                    [
                        'name' => 'Password strength analyser',
                        'description' => 'Evaluate the strength and security of passwords.',
                        'icon' => 'fa-regular fa-i-cursor',
                        'status' => 0
                    ],
                    [
                        'name' => 'PDF signature checker',
                        'description' => 'Verify the authenticity of digital signatures in PDF files.',
                        'icon' => 'fa-regular fa-file-lines',
                        'status' => 0
                    ],
                ],
            ],
            [
                'name' => 'Converter',
                'subcategories' => [
                    [
                        'name' => 'Date-time converter',
                        'description' => 'Convert between various date and time formats.',
                        'icon' => 'fa-regular fa-calendar-days',
                        'status' => 0
                    ],
                    [
                        'name' => 'Integer base converter',
                        'description' => 'Convert numbers between different bases (e.g., binary, decimal, hexadecimal).',
                        'icon' => 'fa-regular fa-arrow-right-arrow-left',
                        'status' => 0
                    ],
                    [
                        'name' => 'Roman numeral converter',
                        'description' => 'Convert numbers to and from Roman numerals.',
                        'icon' => 'fa-regular fa-x',
                        'status' => 0
                    ],
                    [
                        'name' => 'Base64 string encoder/decoder',
                        'description' => 'Encode or decode strings using Base64.',
                        'icon' => 'fa-regular fa-file-lines',
                        'status' => 0
                    ],
                    [
                        'name' => 'Base64 file converter',
                        'description' => 'Convert files to and from Base64 format.',
                        'icon' => 'fa-regular fa-file-lines',
                        'status' => 0
                    ],
                    [
                        'name' => 'Color converter',
                        'description' => 'Convert colors between formats like HEX, RGB, and HSL.',
                        'icon' => 'fa-regular fa-palette',
                        'status' => 0
                    ],
                    [
                        'name' => 'Case converter',
                        'description' => 'Change text to upper case, lower case, or title case.',
                        'icon' => 'fa-regular fa-font',
                        'status' => 0
                    ],
                    [
                        'name' => 'Text to NATO alphabet',
                        'description' => 'Convert text into NATO phonetic alphabet format.',
                        'icon' => 'fa-regular fa-volume-low',
                        'status' => 0
                    ],
                    [
                        'name' => 'Text to ASCII binary',
                        'description' => 'Convert text into binary ASCII representation.',
                        'icon' => 'fa-regular fa-hashtag',
                        'status' => 0
                    ],
                    [
                        'name' => 'Text to Unicode',
                        'description' => 'Convert text into Unicode code points.',
                        'icon' => 'fa-regular fa-bars',
                        'status' => 0
                    ],
                    [
                        'name' => 'YAML to JSON converter',
                        'description' => 'Convert YAML data into JSON format.',
                        'icon' => 'fa-regular fa-bars-staggered',
                        'status' => 0
                    ],

                    [
                        'name' => 'YAML to TOML',
                        'description' => 'Convert YAML data into TOML format.',
                        'icon' => 'fa-regular fa-bars-staggered',
                        'status' => 0
                    ],
                    [
                        'name' => 'JSON to YAML converter',
                        'description' => 'Convert JSON data into YAML format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly',
                        'status' => 0
                    ],
                    [
                        'name' => 'JSON to TOML',
                        'description' => 'Convert JSON data into TOML format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly',
                        'status' => 0
                    ],
                    [
                        'name' => 'List converter',
                        'description' => 'Convert lists into different structured formats.',
                        'icon' => 'fa-regular fa-list',
                        'status' => 0
                    ],
                    [
                        'name' => 'TOML to JSON',
                        'description' => 'Convert TOML data into JSON format.',
                        'icon' => 'fa-regular fa-brackets-square',
                        'status' => 0
                    ],
                    [
                        'name' => 'TOML to YAML',
                        'description' => 'Convert TOML data into YAML format.',
                        'icon' => 'fa-regular fa-brackets-square',
                        'status' => 0
                    ],
                    [
                        'name' => 'XML to JSON',
                        'description' => 'Convert XML data into JSON format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly',
                        'status' => 0
                    ],
                    [
                        'name' => 'JSON to XML',
                        'description' => 'Convert JSON data into XML format.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly',
                        'status' => 0
                    ],
                    [
                        'name' => 'Markdown to HTML',
                        'description' => 'Convert Markdown text into HTML format.',
                        'icon' => 'fa-brands fa-markdown',
                        'status' => 0
                    ],
                ],
            ],
            [
                'name' => 'Web',
                'subcategories' => [
                    [
                        'name' => 'Encode/decode URL-formatted strings',
                        'description' => 'Encode or decode strings into URL-friendly formats.',
                        'icon' => 'fa-regular fa-link',
                        'status' => 0
                    ],
                    [
                        'name' => 'Escape HTML entities',
                        'description' => 'Escape special characters into HTML entities.',
                        'icon' => 'fa-regular fa-code',
                        'status' => 0
                    ],
                    [
                        'name' => 'URL parser',
                        'description' => 'Parse and extract components from URLs.',
                        'icon' => 'fa-regular fa-link',
                        'status' => 0
                    ],
                    [
                        'name' => 'Device information',
                        'description' => 'Retrieve detailed device information.',
                        'icon' => 'fa-regular fa-desktop',
                        'status' => 0
                    ],
                    [
                        'name' => 'Basic auth generator',
                        'description' => 'Generate Basic Authentication headers.',
                        'icon' => 'fa-duotone fa-regular fa-code-commit',
                        'status' => 0
                    ],
                    [
                        'name' => 'Open graph meta generator',
                        'description' => 'Create Open Graph meta tags for better sharing.',
                        'icon' => 'fa-regular fa-tag',
                        'status' => 0
                    ],
                    [
                        'name' => 'OTP code generator',
                        'description' => 'Generate one-time passwords (OTPs).',
                        'icon' => 'fa-regular fa-mobile',
                        'status' => 0
                    ],
                    [
                        'name' => 'MIME types',
                        'description' => 'Look up and retrieve MIME type information.',
                        'icon' => 'fa-regular fa-globe',
                        'status' => 0
                    ],
                    [
                        'name' => 'JWT parser',
                        'description' => 'Decode and analyze JSON Web Tokens (JWTs).',
                        'icon' => 'fa-regular fa-key',
                        'status' => 0
                    ],
                    [
                        'name' => 'Keycode info',
                        'description' => 'Get keycode information for keyboard events.',
                        'icon' => 'fa-regular fa-keyboard',
                        'status' => 0
                    ],
                    [
                        'name' => 'Slugify string',
                        'description' => 'Convert text into URL-friendly slugs.',
                        'icon' => 'fa-regular fa-a',
                        'status' => 0
                    ],
                    [
                        'name' => 'HTML WYSIWYG editor',
                        'description' => 'Edit HTML content using a WYSIWYG editor.',
                        'icon' => 'fa-regular fa-pen-to-square',
                        'status' => 0
                    ],
                    [
                        'name' => 'User-agent parser',
                        'description' => 'Parse and analyze user-agent strings.',
                        'icon' => 'fa-light fa-browser',
                        'status' => 0
                    ],
                    [
                        'name' => 'HTTP status codes',
                        'description' => 'View and understand HTTP status codes.',
                        'icon' => 'fa-duotone fa-light fa-file-code',
                        'status' => 0
                    ],
                    [
                        'name' => 'JSON diff',
                        'description' => 'Compare differences between two JSON objects.',
                        'icon' => 'fa-regular fa-code-compare',
                        'status' => 0
                    ],
                    [
                        'name' => 'Outlook Safelink decoder',
                        'description' => 'Decode Outlook SafeLinks for original URLs.',
                        'icon' => 'fa-light fa-browser',
                        'status' => 0
                    ],
                ],
            ],
            [
                'name' => 'Images & Videos',
                'subcategories' => [
                    [
                        'name' => 'QR Code generator',
                        'description' => 'Generate QR codes for various purposes.',
                        'icon' => 'fa-regular fa-qrcode',
                        'status' => 0
                    ],
                    [
                        'name' => 'WiFi QR Code generator',
                        'description' => 'Create QR codes to easily share WiFi credentials.',
                        'icon' => 'fa-regular fa-qrcode',
                        'status' => 0
                    ],
                    [
                        'name' => 'SVG placeholder generator',
                        'description' => 'Generate SVG placeholders for images.',
                        'icon' => 'fa-regular fa-image',
                        'status' => 0
                    ],
                    [
                        'name' => 'Camera recorder',
                        'description' => 'Record videos using your camera.',
                        'icon' => 'fa-light fa-camera',
                        'status' => 0
                    ],
                ],
            ],
            [
                'name' => 'Development',
                'subcategories' => [
                    [
                        'name' => 'Git cheatsheet',
                        'description' => 'Quick reference guide for Git commands.',
                        'icon' => 'fa-brands fa-git',
                        'status' => 0
                    ],
                    [
                        'name' => 'Random port generator',
                        'description' => 'Generate random port numbers for development use.',
                        'icon' => 'fa-regular fa-shuffle',
                        'status' => 0
                    ],
                    [
                        'name' => 'Crontab generator',
                        'description' => 'Create cron job schedules easily.',
                        'icon' => 'fa-regular fa-clock',
                        'status' => 0
                    ],
                    [
                        'name' => 'JSON prettify and format',
                        'description' => 'Beautify and format JSON data.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly',
                        'status' => 0
                    ],
                    [
                        'name' => 'JSON minify',
                        'description' => 'Minify JSON data to reduce size.',
                        'icon' => 'fa-duotone fa-regular fa-brackets-curly',
                        'status' => 0
                    ],
                    [
                        'name' => 'JSON to CSV',
                        'description' => 'Convert JSON data to CSV format.',
                        'icon' => 'fa-regular fa-list',
                        'status' => 0
                    ],
                    [
                        'name' => 'SQL prettify and format',
                        'description' => 'Beautify and format SQL queries.',
                        'icon' => 'fa-regular fa-database',
                        'status' => 0
                    ],
                    [
                        'name' => 'Chmod calculator',
                        'description' => 'Calculate file permissions for chmod.',
                        'icon' => 'fa-regular fa-file-lines',
                        'status' => 0
                    ],
                    [
                        'name' => 'XML formatter',
                        'description' => 'Beautify and format XML data.',
                        'icon' => 'fa-regular fa-code',
                        'status' => 0
                    ],
                    [
                        'name' => 'Email normalizer',
                        'description' => 'Normalize email addresses to a standard format.',
                        'icon' => 'fa-regular fa-envelope',
                        'status' => 0
                    ],
                    [
                        'name' => 'Regex Tester',
                        'description' => 'Test and validate regular expressions.',
                        'icon' => 'fa-light fa-language',
                        'status' => 0
                    ],
                    [
                        'name' => 'Regex cheatsheet',
                        'description' => 'Quick reference guide for regular expressions.',
                        'icon' => 'fa-brands fa-node-js',
                        'status' => 0
                    ],
                ],
            ],
            [
                'name' => 'Math',
                'subcategories' => [
                    [
                        'name' => 'Math evaluator',
                        'description' => 'Evaluate mathematical expressions, including basic arithmetic, algebra, and more.',
                        'icon' => 'fa-regular fa-calculator',
                        'status' => 0
                    ],
                    [
                        'name' => 'ETA calculator',
                        'description' => 'Calculate estimated time of arrival based on distance and speed.',
                        'icon' => 'fa-regular fa-hourglass',
                        'status' => 0
                    ],
                    [
                        'name' => 'Percentage calculator',
                        'description' => 'Calculate percentages, percentage increase, and percentage decrease easily.',
                        'icon' => 'fa-regular fa-percent',
                        'status' => 0
                    ],
                ],
            ],
            [
                'name' => 'Measurement',
                'subcategories' => [
                    [
                        'name' => 'Chronometer',
                        'description' => 'Measure elapsed time with precision, useful for timing events or activities.',
                        'icon' => 'fa-regular fa-alarm-clock',
                        'status' => 0
                    ],
                    [
                        'name' => 'Temperature converter',
                        'description' => 'Convert temperatures between different units such as Celsius, Fahrenheit, and Kelvin.',
                        'icon' => 'fa-regular fa-temperature-three-quarters',
                        'status' => 0
                    ],
                    [
                        'name' => 'Benchmark builder',
                        'description' => 'Create and run benchmarks to measure the performance of your code or applications.',
                        'icon' => 'fa-regular fa-gauge',
                        'status' => 0
                    ],
                ],
            ],
            [
                'name' => 'Text',
                'subcategories' => [
                    [
                        'name' => 'Lorem ipsum generator',
                        'description' => 'Generate placeholder text for use in design mockups and layouts.',
                        'icon' => 'fa-regular fa-text',
                        'status' => 0
                    ],
                    [
                        'name' => 'Text statistics',
                        'description' => 'Analyze text to provide statistics such as word count, character count, and readability scores.',
                        'icon' => 'fa-light fa-file-lines',
                        'status' => 0
                    ],
                    [
                        'name' => 'Emoji picker',
                        'description' => 'Select and copy emojis to use in your text and messages.',
                        'icon' => 'fa-regular fa-icons',
                        'status' => 0
                    ],
                    [
                        'name' => 'String obfuscator',
                        'description' => 'Obfuscate text strings to make them harder to read or understand.',
                        'icon' => 'fa-regular fa-eye-slash',
                        'status' => 0
                    ],
                    [
                        'name' => 'Text diff',
                        'description' => 'Compare two pieces of text to highlight differences and similarities.',
                        'icon' => 'fa-regular fa-file-plus-minus',
                        'status' => 0
                    ],
                    [
                        'name' => 'Numeronym generator',
                        'description' => 'Generate numeronyms, which are abbreviations using numbers to represent letters in words.',
                        'icon' => 'fa-regular fa-input-numeric',
                        'status' => 0
                    ],
                    [
                        'name' => 'ASCII Art Text Generator',
                        'description' => 'Create ASCII art from text, converting your text into a visual representation using ASCII characters.',
                        'icon' => 'fa-regular fa-microchip',
                        'status' => 0
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
                    'status' => $sub['status']
                ]);
            }
        }
    }
}
