<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Centre;
use Illuminate\Support\Str;

class CentreSeeder extends Seeder
{
    public function run(): void
    {
        $centres = [
            [
                'name' => 'Centre for Consultancy Services',
                'short_name' => 'FUCONSULT',
                'director_name' => 'Dr. T. O. Ayinde',
                'director_title' => 'Director',
                'email' => 'consultancy@fuo.edu.ng',
                'intro' => 'Welcome to the Centre for Consultancy Services. We provide high-quality consultancy services to our university, government, and external clients.',
                'description' => '<p>The Centre for Consultancy Service is a vital unit within Fountain University Osogbo, established to offer consultancy services to both internal and external stakeholders.</p><p>With a focus on excellence and innovation, we strive to address the diverse needs of our clients through tailored solutions and strategic insights.</p>',
                'mission' => 'To be a trusted partner for our clients, delivering innovative and practical solutions that drive positive outcomes and sustainable impact.',
                'vision' => 'To become a leading centre of excellence in consultancy services, known for our expertise, reliability, and commitment to client satisfaction.',
                'objectives' => "- Strategic advisory services\n- Process optimization\n- Research consulting\n- Training and capacity building",
                'sort_order' => 1,
            ],
            [
                'name' => 'Centre for Research, Innovation and Technology',
                'short_name' => 'FUCRIT',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'fucrit@fuo.edu.ng',
                'intro' => 'FUCRIT is dedicated to advancing research, fostering innovation, and leveraging technology for societal development.',
                'description' => '<p>The Centre for Research, Innovation and Technology (FUCRIT) serves as the hub for cutting-edge research and technological innovation at Fountain University.</p><p>We support researchers, provide access to modern laboratories, and facilitate industry partnerships.</p>',
                'mission' => 'To promote excellence in research, innovation, and technology development that contributes to societal advancement.',
                'vision' => 'To be a leading research and innovation hub in Africa.',
                'objectives' => "- Research support and funding\n- Technology transfer\n- Innovation incubation\n- Industry collaboration",
                'sort_order' => 2,
            ],
            [
                'name' => 'Centre for Spiritual Growth and Moral Excellence',
                'short_name' => 'FUSPirit',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'spiritualgrowth@fuo.edu.ng',
                'intro' => 'Dedicated to nurturing spiritual growth and moral excellence among students, staff, and the wider community.',
                'description' => '<p>The Centre for Spiritual Growth and Moral Excellence is committed to fostering a culture of spiritual awareness, moral uprightness, and ethical leadership within and beyond the university community.</p>',
                'mission' => 'To nurture spiritual growth and moral excellence in alignment with Islamic values.',
                'vision' => 'To produce graduates who are spiritually grounded and morally upright.',
                'objectives' => "- Spiritual mentoring programmes\n- Moral education workshops\n- Community outreach\n- Interfaith dialogue",
                'sort_order' => 3,
            ],
            [
                'name' => 'Centre for Linkages and Advancement',
                'short_name' => 'FUCOLA',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'linkages@fuo.edu.ng',
                'intro' => 'Building strategic partnerships and linkages with local and international institutions for mutual advancement.',
                'description' => '<p>The Centre for Linkages and Advancement facilitates partnerships between Fountain University and other academic institutions, industry players, and international organisations.</p>',
                'mission' => 'To build and sustain strategic partnerships that enhance the university\'s global reach and impact.',
                'vision' => 'To be the gateway for Fountain University\'s global partnerships.',
                'objectives' => "- International partnerships\n- Alumni engagement\n- MoU facilitation\n- Academic exchanges",
                'sort_order' => 4,
            ],
            [
                'name' => 'Centre for Arabic and Islamic Research, Translation and Immersion Programme',
                'short_name' => 'FUCATRIP',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'arabicresearch@fuo.edu.ng',
                'intro' => 'Advancing Arabic language studies and Islamic research through translation and immersive academic programmes.',
                'description' => '<p>The Centre for Arabic and Islamic Research, Translation and Immersion Programme is dedicated to the promotion of Arabic language proficiency and Islamic scholarship through innovative research and translation initiatives.</p>',
                'mission' => 'To advance Arabic language and Islamic scholarship through research, translation, and immersion.',
                'vision' => 'To be a centre of excellence in Arabic and Islamic studies.',
                'objectives' => "- Arabic language immersion\n- Islamic research\n- Translation services\n- Academic publications",
                'sort_order' => 5,
            ],
            [
                'name' => 'Centre for Sandwich Programmes',
                'short_name' => 'FUCOSP',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'sandwich@fuo.edu.ng',
                'intro' => 'Offering flexible sandwich programmes designed for working professionals seeking academic advancement.',
                'description' => '<p>The Centre for Sandwich Programmes provides opportunities for working professionals to pursue degree programmes through a flexible sandwich mode of study.</p>',
                'mission' => 'To provide accessible and quality education through flexible sandwich programmes.',
                'vision' => 'To be the preferred choice for working professionals seeking academic advancement.',
                'objectives' => "- Flexible degree programmes\n- Professional development\n- Weekend and holiday classes\n- Industry-relevant curricula",
                'sort_order' => 6,
            ],
            [
                'name' => 'Centre for Sub-Degree and Professional Programmes',
                'short_name' => 'FUCSUB',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'subdegree@fuo.edu.ng',
                'intro' => 'Providing sub-degree and professional certification programmes for career advancement.',
                'description' => '<p>The Centre for Sub-Degree and Professional Programmes offers diploma and professional certification courses designed to equip students with practical skills for the modern workplace.</p>',
                'mission' => 'To equip learners with practical skills and professional certifications.',
                'vision' => 'To be a leader in sub-degree and professional education.',
                'objectives' => "- Diploma programmes\n- Professional certifications\n- Skills development\n- Career guidance",
                'sort_order' => 7,
            ],
            [
                'name' => 'Centre for Entrepreneurship and Skill Acquisition',
                'short_name' => 'FUCESA',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'entrepreneurship@fuo.edu.ng',
                'intro' => 'Empowering students and the community with entrepreneurial skills and business acumen.',
                'description' => '<p>The Centre for Entrepreneurship and Skill Acquisition is committed to nurturing an entrepreneurial mindset among students and equipping them with the skills needed to succeed in the modern economy.</p>',
                'mission' => 'To foster entrepreneurship and skill acquisition for self-reliance and societal development.',
                'vision' => 'To produce job creators rather than job seekers.',
                'objectives' => "- Entrepreneurship training\n- Business incubation\n- Skills acquisition programmes\n- Mentorship and funding",
                'sort_order' => 8,
            ],
        ];

        foreach ($centres as $data) {
            Centre::updateOrCreate(
                ['slug' => Str::slug($data['name'])],
                $data
            );
        }

        $this->command->info('Centres seeded successfully.');
    }
}
