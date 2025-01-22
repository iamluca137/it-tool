<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Tools\HashText;
use App\Livewire\Pages\Tools\TokenGenerator;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Tools\Bcrypt;
use App\Livewire\Pages\Tools\UlidGenerator;

// Pages
Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/favorite/{$tool}', [Home::class, 'favorite'])->name('favorite');
// Tools
Route::prefix('tools')->name('tools.')->group(function () {
    Route::get('/token-generator', TokenGenerator::class)->name('token-generator');
    Route::get('/hash-text', HashText::class)->name('hash-text');
    Route::get('/ascii-art-text-generator', TokenGenerator::class)->name('ascii-art-text-generator');
    Route::get('/base64-file-converter', TokenGenerator::class)->name('base64-file-converter');
    Route::get('/base64-string-encoder-decoder', TokenGenerator::class)->name('base64-string-encoder-decoder');
    Route::get('/basic-auth-generator', TokenGenerator::class)->name('basic-auth-generator');
    Route::get('/bcrypt', Bcrypt::class)->name('bcrypt');
    Route::get('/benchmark-builder', TokenGenerator::class)->name('benchmark-builder');
    Route::get('/bip39-passphrase-generator', TokenGenerator::class)->name('bip39-passphrase-generator');
    Route::get('/camera-recorder', TokenGenerator::class)->name('camera-recorder');
    Route::get('/case-converter', TokenGenerator::class)->name('case-converter');
    Route::get('/chmod-calculator', TokenGenerator::class)->name('chmod-calculator');
    Route::get('/chronometer', TokenGenerator::class)->name('chronometer');
    Route::get('/color-converter', TokenGenerator::class)->name('color-converter');
    Route::get('/crontab-generator', TokenGenerator::class)->name('crontab-generator');
    Route::get('/date-time-converter', TokenGenerator::class)->name('date-time-converter');
    Route::get('/device-information', TokenGenerator::class)->name('device-information');
    Route::get('/email-normalizer', TokenGenerator::class)->name('email-normalizer');
    Route::get('/emoji-picker', TokenGenerator::class)->name('emoji-picker');
    Route::get('/encode-decode-url-formatted-strings', TokenGenerator::class)->name('encode-decode-url-formatted-strings');
    Route::get('/encrypt-decrypt-text', TokenGenerator::class)->name('encrypt-decrypt-text');
    Route::get('/escape-html-entities', TokenGenerator::class)->name('escape-html-entities');
    Route::get('/eta-calculator', TokenGenerator::class)->name('eta-calculator');
    Route::get('/git-cheatsheet', TokenGenerator::class)->name('git-cheatsheet');
    Route::get('/hmac-generator', TokenGenerator::class)->name('hmac-generator');
    Route::get('/html-wysiwyg-editor', TokenGenerator::class)->name('html-wysiwyg-editor');
    Route::get('/http-status-codes', TokenGenerator::class)->name('http-status-codes');
    Route::get('/integer-base-converter', TokenGenerator::class)->name('integer-base-converter');
    Route::get('/json-diff', TokenGenerator::class)->name('json-diff');
    Route::get('/json-minify', TokenGenerator::class)->name('json-minify');
    Route::get('/json-prettify-and-format', TokenGenerator::class)->name('json-prettify-and-format');
    Route::get('/json-to-csv', TokenGenerator::class)->name('json-to-csv');
    Route::get('/json-to-toml', TokenGenerator::class)->name('json-to-toml');
    Route::get('/json-to-xml', TokenGenerator::class)->name('json-to-xml');
    Route::get('/json-to-yaml-converter', TokenGenerator::class)->name('json-to-yaml-converter');
    Route::get('/jwt-parser', TokenGenerator::class)->name('jwt-parser');
    Route::get('/keycode-info', TokenGenerator::class)->name('keycode-info');
    Route::get('/list-converter', TokenGenerator::class)->name('list-converter');
    Route::get('/lorem-ipsum-generator', TokenGenerator::class)->name('lorem-ipsum-generator');
    Route::get('/markdown-to-html', TokenGenerator::class)->name('markdown-to-html');
    Route::get('/math-evaluator', TokenGenerator::class)->name('math-evaluator');
    Route::get('/mime-types', TokenGenerator::class)->name('mime-types');
    Route::get('/numeronym-generator', TokenGenerator::class)->name('numeronym-generator');
    Route::get('/open-graph-meta-generator', TokenGenerator::class)->name('open-graph-meta-generator');
    Route::get('/otp-code-generator', TokenGenerator::class)->name('otp-code-generator');
    Route::get('/outlook-safelink-decoder', TokenGenerator::class)->name('outlook-safelink-decoder');
    Route::get('/password-strength-analyser', TokenGenerator::class)->name('password-strength-analyser');
    Route::get('/pdf-signature-checker', TokenGenerator::class)->name('pdf-signature-checker');
    Route::get('/percentage-calculator', TokenGenerator::class)->name('percentage-calculator');
    Route::get('/qr-code-generator', TokenGenerator::class)->name('qr-code-generator');
    Route::get('/random-port-generator', TokenGenerator::class)->name('random-port-generator');
    Route::get('/regex-cheatsheet', TokenGenerator::class)->name('regex-cheatsheet');
    Route::get('/regex-tester', TokenGenerator::class)->name('regex-tester');
    Route::get('/roman-numeral-converter', TokenGenerator::class)->name('roman-numeral-converter');
    Route::get('/rsa-key-pair-generator', TokenGenerator::class)->name('rsa-key-pair-generator');
    Route::get('/slugify-string', TokenGenerator::class)->name('slugify-string');
    Route::get('/sql-prettify-and-format', TokenGenerator::class)->name('sql-prettify-and-format');
    Route::get('/string-obfuscator', TokenGenerator::class)->name('string-obfuscator');
    Route::get('/svg-placeholder-generator', TokenGenerator::class)->name('svg-placeholder-generator');
    Route::get('/temperature-converter', TokenGenerator::class)->name('temperature-converter');
    Route::get('/text-diff', TokenGenerator::class)->name('text-diff');
    Route::get('/text-statistics', TokenGenerator::class)->name('text-statistics');
    Route::get('/text-to-ascii-binary', TokenGenerator::class)->name('text-to-ascii-binary');
    Route::get('/text-to-nato-alphabet', TokenGenerator::class)->name('text-to-nato-alphabet');
    Route::get('/text-to-unicode', TokenGenerator::class)->name('text-to-unicode');
    Route::get('/token-generator', TokenGenerator::class)->name('token-generator');
    Route::get('/toml-to-json', TokenGenerator::class)->name('toml-to-json');
    Route::get('/toml-to-yaml', TokenGenerator::class)->name('toml-to-yaml');
    Route::get('/ulid-generator', UlidGenerator::class)->name('ulid-generator');
    Route::get('/url-parser', TokenGenerator::class)->name('url-parser');
    Route::get('/user-agent-parser', TokenGenerator::class)->name('user-agent-parser');
    Route::get('/wifi-qr-code-generator', TokenGenerator::class)->name('wifi-qr-code-generator');
    Route::get('/xml-formatter', TokenGenerator::class)->name('xml-formatter');
    Route::get('/xml-to-json', TokenGenerator::class)->name('xml-to-json');
    Route::get('/yaml-to-json-converter', TokenGenerator::class)->name('yaml-to-json-converter');
    Route::get('/yaml-to-toml', TokenGenerator::class)->name('yaml-to-toml');
});

// Fallback
Route::fallback(function () {
    return redirect()->route('home');
});
