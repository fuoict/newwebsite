<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\DepartmentFeaturedLink;

class DepartmentFeaturedLinksSeeder extends Seeder
{
    public function run(): void
    {
        $departments = Department::where('is_active', true)->get();

        $defaultLinks = [
            ['title' => 'Staff List',                'icon' => 'bx bx-user',         'url' => null,  'sort_order' => 1],
            ['title' => 'Admission Requirement',     'icon' => 'bx bx-file',         'url' => null,  'sort_order' => 2],
            ['title' => 'Duration of Programme',     'icon' => 'bx bx-time',         'url' => null,  'sort_order' => 3],
            ['title' => 'Requirement for Admission', 'icon' => 'bx bx-check-circle', 'url' => null,  'sort_order' => 4],
            ['title' => 'News and Events',           'icon' => 'bx bx-news',         'url' => null,  'sort_order' => 5],
            ['title' => 'Contact Us',                'icon' => 'bx bx-envelope',     'url' => null,  'sort_order' => 6],
        ];

        foreach ($departments as $dept) {
            foreach ($defaultLinks as $link) {
                // Skip if link already exists for this department
                $exists = DepartmentFeaturedLink::where('department_id', $dept->id)
                    ->where('title', $link['title'])
                    ->exists();

                if (!$exists) {
                    DepartmentFeaturedLink::create(array_merge($link, [
                        'department_id' => $dept->id,
                        'url' => $link['url'] ?? "/departments/{$dept->slug}/page/" . \Illuminate\Support\Str::slug($link['title']),
                    ]));
                }
            }
        }

        $this->command->info('Default featured links created for all departments.');
    }
}
