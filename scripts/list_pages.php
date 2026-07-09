<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "\nPage count: " . \App\Models\Page::count() . "\n\n";
foreach (\App\Models\Page::orderBy('updated_at', 'desc')->limit(50)->get() as $p) {
    echo "{$p->id}\t{$p->title}\t{$p->status}\t{$p->slug}\n";
}
