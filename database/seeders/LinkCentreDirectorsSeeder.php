<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Centre;
use App\Models\Lecturer;

class LinkCentreDirectorsSeeder extends Seeder
{
    public function run(): void
    {
        $centres = Centre::whereNotNull('director_name')->get();

        foreach ($centres as $centre) {
            // Try to find a matching lecturer by name fragments
            $nameParts = explode(' ', trim($centre->director_name));
            $lecturer = null;

            // Try full name first
            $lecturer = Lecturer::where('name', 'LIKE', "%{$centre->director_name}%")->first();

            // Try last name
            if (!$lecturer && count($nameParts) >= 2) {
                $lastName = end($nameParts);
                $lecturer = Lecturer::where('name', 'LIKE', "%{$lastName}%")->first();
            }

            if ($lecturer) {
                $centre->update(['lecturer_id' => $lecturer->id]);
                $this->command->info("Linked: {$centre->name} → {$lecturer->full_name}");
            } else {
                $this->command->warn("No match: {$centre->name} (director: {$centre->director_name})");
            }
        }
    }
}
