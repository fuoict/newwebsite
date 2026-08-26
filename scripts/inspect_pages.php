<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$rows = DB::table('pages')->orderBy('id')->get(['id','title','slug','status']);
foreach ($rows as $row) {
    echo json_encode((array) $row, JSON_UNESCAPED_SLASHES) . PHP_EOL;
}
