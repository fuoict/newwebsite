<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Page;

$page = Page::where('slug', 'entrepreneurship')->first();
if ($page) {
    echo "FOUND|{$page->status}|" . strlen($page->content) . "\n";
    echo substr($page->content, 0, 500);
} else {
    echo "NOTFOUND\n";
}
