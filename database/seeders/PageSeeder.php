<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'About',
                'slug' => 'about',
                'status' => 'published',
                'content' => '<h2>About the University</h2><p>Update this content from the admin CMS.</p>',
                'meta_title' => 'About',
                'meta_description' => 'About the university page.',
                'published_at' => now(),
            ],
            [
                'title' => 'Contact',
                'slug' => 'contact',
                'status' => 'published',
                'content' => '<h2>Contact Us</h2><p>Update this content from the admin CMS.</p>',
                'meta_title' => 'Contact',
                'meta_description' => 'Contact the university.',
                'published_at' => now(),
            ],
            [
                'title' => 'FAQ',
                'slug' => 'faq',
                'status' => 'published',
                'content' => '<h2>Frequently Asked Questions</h2><p>Update this content from the admin CMS.</p>',
                'meta_title' => 'FAQ',
                'meta_description' => 'Frequently asked questions.',
                'published_at' => now(),
            ],
            [
                'title' => 'Gallery',
                'slug' => 'gallery',
                'status' => 'published',
                'content' => '<h2>Gallery</h2><p>Update this content from the admin CMS.</p>',
                'meta_title' => 'Gallery',
                'meta_description' => 'Gallery page.',
                'published_at' => now(),
            ],
            [
                'title' => 'Alumni',
                'slug' => 'alumni',
                'status' => 'published',
                'content' => '<h2>Alumni</h2><p>Update this content from the admin CMS.</p>',
                'meta_title' => 'Alumni',
                'meta_description' => 'Alumni page.',
                'published_at' => now(),
            ],
        ];

        foreach ($pages as $page) {
            Page::updateOrCreate(
                ['slug' => $page['slug']],
                $page
            );
        }
    }
}
