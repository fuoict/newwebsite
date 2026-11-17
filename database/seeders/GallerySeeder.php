<?php

namespace Database\Seeders;

use App\Models\GalleryAlbum;
use App\Models\GalleryImage;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $g = fn (string $file) => 'img/gallery/' . $file;

        $albums = [
            [
                'title' => 'Annual Staff Games',
                'description' => "It's all fun and competition as staff across departments take part in the staff games, building camaraderie and team spirit outside the office.",
                'images' => array_map(fn ($n) => $g("sport{$n}.jpeg"), range(1, 21)),
            ],
            [
                'title' => 'Courtesy Visit by CIPM',
                'description' => 'Representatives of the Chartered Institute of Personnel Management of Nigeria (CIPM) pay a courtesy visit to Fountain University, fostering partnership and professional engagement.',
                'images' => array_map(fn ($n) => $g("cipm{$n}.jpeg"), range(2, 11)),
            ],
            [
                'title' => 'Conferment of Fellowship in Public Administration',
                'description' => 'Distinguished contributions to Public Administration are honoured as Fountain University confers a fellowship award, celebrating excellence and dedication to the discipline',
                'images' => array_map(fn ($n) => $g("pub{$n}.jpeg"), array_merge(range(1, 15), [17, 18])),
            ],
            [
                'title' => 'Celebrating Three Years of Visionary Leadership',
                'description' => "Three years of purposeful leadership call for celebration, as Fountain University honours her Vice-Chancellor's third anniversary in office with a ceremony marking her continued impact and vision for the institution",
                'images' => array_merge(
                    [$g('basketball_court.jpg')],
                    array_map(fn ($n) => $g("vc{$n}.jpeg"), range(2, 19))
                ),
            ],
            [
                'title' => 'Military Delegation Visits Fountain University',
                'description' => 'Fountain University receives a delegation of military officers on a courtesy visit, fostering relations and dialogue between the institution and the armed forces. This gallery captures the warm reception and engaging discussions held during the visit.',
                'images' => array_map(fn ($n) => $g("force{$n}.jpeg"), range(1, 7)),
            ],
            [
                'title' => 'Welcoming Our New Students: Matriculation 2026',
                'description' => 'A new academic journey begins as Fountain University holds its 2026 Matriculation Ceremony, welcoming and officially admitting its newest students into the university family',
                'images' => array_map(fn ($n) => $g("mat{$n}.jpeg"), range(1, 20)),
            ],
            [
                'title' => '2026 Convocation Ceremony',
                'description' => 'Witness the joy and pride of our graduands as Fountain University holds its 2026 Convocation Ceremony, honouring years of hard work, dedication, and academic excellence.',
                'images' => array_map(fn ($n) => $g("convo{$n}.jpeg"), range(1, 21)),
            ],
            [
                'title' => 'VC Presents Award to Cisco and RUDN Representatives',
                'description' => 'Our Vice-Chancellor honours representatives of Cisco and RUDN University with awards, celebrating a partnership built on innovation and academic excellence. This gallery captures the memorable highlights of the presentation ceremony.',
                'images' => array_map(fn ($n) => $g("cisco{$n}.jpeg"), range(1, 11)),
            ],
            [
                'title' => 'Second Induction Ceremony of Nursing Students',
                'description' => 'Relive the proud and emotional moments from the second induction ceremony of our nursing students, as they officially take the oath of the nursing profession before family, faculty, and friends.',
                'images' => array_map(fn ($n) => $g("induct{$n}.jpeg"), array_merge(range(1, 10), range(12, 15))),
            ],
            [
                'title' => 'Celebrating Two Years of Purposeful Leadership',
                'description' => 'We invite you to relive the highlights from the colourful ceremony marking two years of impactful leadership by our Vice-Chancellor, as staff, students, and well-wishers gathered to celebrate her achievements and vision for the University.',
                'images' => array_map(fn ($f) => $g($f), [
                    '2_aniv.jpeg', '24_aniv.jpeg', '25_aniv.jpeg', '26_aniv.jpeg', '27_aniv.jpeg',
                    '28_aniv.jpg', '21_aniv.jpeg', '22_aniv.jpeg', '23_aniv.jpeg',
                ]),
            ],
            [
                'title' => 'Explore Our Gallery',
                'description' => 'We invite you to explore the gallery as our Vice Chancellor interacts with the diverse stakeholders who create the fabric of our campus community. You’ll find heartwarming moments from her familiarization visits to the gracious Ayanlowo Family and the spirited Isale Osun Community.',
                'images' => array_map(fn ($n) => $g("{$n}.jpg"), range(1, 5)),
            ],
            [
                'title' => 'Our Memorable Events',
                'description' => null,
                'images' => array_map(fn ($f) => $g($f), [
                    'm1.jpg', 'm2.jpg', 'm3.jpg', 'm4.jpg', 'm5.jpg', 'm6.jpg', 'm10.jpg', 'm8.jpg', 'm9.jpg',
                ]),
            ],
        ];

        foreach ($albums as $order => $data) {
            $album = GalleryAlbum::updateOrCreate(
                ['title' => $data['title']],
                [
                    'description' => $data['description'],
                    'sort_order' => $order + 1,
                    'is_active' => true,
                ]
            );

            foreach ($data['images'] as $i => $path) {
                GalleryImage::updateOrCreate(
                    ['gallery_album_id' => $album->id, 'image_path' => $path],
                    ['sort_order' => $i + 1]
                );
            }
        }
    }
}
