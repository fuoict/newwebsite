<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_store_rich_page_fields(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post(route('admin.pages.store'), [
                'title' => 'About Us',
                'slug' => 'about-us',
                'status' => 'published',
                'hero_title' => 'Welcome to the University',
                'hero_subtitle' => 'A place for excellence',
                'content' => '<p>Hello world</p>',
            ]);

        $response->assertRedirect(route('admin.pages.index'));
        $this->assertDatabaseHas('pages', [
            'slug' => 'about-us',
            'hero_title' => 'Welcome to the University',
            'hero_subtitle' => 'A place for excellence',
        ]);
    }
}
