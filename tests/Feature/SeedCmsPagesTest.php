<?php

namespace Tests\Feature;

use App\Console\Commands\SeedCmsPages;
use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeedCmsPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_seeded_pages_receive_content(): void
    {
        $this->artisan('seed:cms-pages')->assertSuccessful();

        $page = Page::where('slug', 'about')->first();

        $this->assertNotNull($page);
        $this->assertNotEmpty(trim((string) $page->content));
        $this->assertStringContainsString('CMS', $page->content);
    }
}
