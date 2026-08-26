<?php

namespace Tests\Feature;

use App\Models\Page;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageContentEditorTest extends TestCase
{
    use RefreshDatabase;

    public function test_page_store_accepts_rich_content_from_editor(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('admin.pages.store'), [
            'title' => 'About Us',
            'slug' => 'about-us',
            'status' => 'published',
            'content' => '<h2>Existing body</h2><p>Editable content from the editor.</p>',
        ]);

        $response->assertRedirect(route('admin.pages.index'));

        $page = Page::where('slug', 'about-us')->first();

        $this->assertNotNull($page);
        $this->assertSame('<h2>Existing body</h2><p>Editable content from the editor.</p>', $page->content);
    }
}
