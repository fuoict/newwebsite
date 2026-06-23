<?php

namespace Database\Seeders;

use App\Models\InauguralLecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InauguralLectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lectures = [
            [
                'title' => 'The Motherless World, The Motherly Science: An Odyssey In The Atomic Cosmos',
                'speaker_name' => 'Prof. Abdulazeez Tunbosun Lawal',
                'lecture_date' => '2024-05-29',
                'image_path' => 'img/events/3_Inaugural.jpg',
            ],
            [
                'title' => 'From HoneyPot To TinderBox: The Trajectory Of The Most Valuable Asset In Nigeria',
                'speaker_name' => 'Prof. Abdullateef Usman',
                'lecture_date' => '2024-10-24',
                'image_path' => 'img/events/4_Inaugural.jpg',
            ],
            [
                'title' => 'Like Musa\'s Staff, Like Nation\'s Staff: ICT As A Tool For Development',
                'speaker_name' => 'Prof. Abdul Jaleel Kehinde Shittu',
                'lecture_date' => '2024-12-03',
                'image_path' => 'img/events/5_Inaugural.jpg',
            ],
            [
                'title' => 'Physical Chemistry: Winnowing Deep Truths from Profound Beautiful Nonsence',
                'speaker_name' => 'Prof. Moriam Dasola Adeoye',
                'lecture_date' => '2025-06-19',
                'image_path' => 'img/events/6_Inaugural.jpg',
            ],
            [
                'title' => 'From Laboratory Bench To Global Impact: Harnessing Biotechnology For Human Benefit',
                'speaker_name' => 'Prof. Nusrah Bolatito Afolabi-Balogun',
                'lecture_date' => '2025-12-18',
                'image_path' => 'img/events/7_Inaugural.jpg',
            ],
            [
                'title' => 'The Just, Justice, And The Justical: A Jurisprudential Analysis Journey In The Justical Jungle',
                'speaker_name' => 'Prof. Kazeem Olajide Olaniyan',
                'lecture_date' => '2026-04-23',
                'image_path' => 'img/events/8_Inaugural.jpg',
            ],
        ];

        foreach ($lectures as $lecture) {
            InauguralLecture::create($lecture);
        }
    }
}
