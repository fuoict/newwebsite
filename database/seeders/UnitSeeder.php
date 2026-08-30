<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;
use Illuminate\Support\Str;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        $units = [
            [
                'name' => 'Academic Planning Unit',
                'short_name' => 'APU',
                'director_name' => 'Dr. M. O. Oyewole',
                'director_title' => 'Director',
                'email' => 'academicplanning@fuo.edu.ng',
                'intro' => 'The Academic Planning Unit is responsible for coordinating academic planning activities and ensuring effective academic administration.',
                'description' => '<p>The Academic Planning Unit coordinates the university\'s academic planning, including curriculum development, programme review, and academic quality assurance. We work closely with departments and colleges to ensure academic standards are maintained and improved.</p><h4>Responsibilities</h4><ul><li>Academic programme planning and development</li><li>Curriculum review and coordination</li><li>Academic calendar preparation</li><li>Programme accreditation support</li><li>Academic data analysis and reporting</li></ul>',
                'mission' => 'To provide effective academic planning support that enhances teaching, learning, and research quality.',
                'vision' => 'To be a centre of excellence in academic planning and quality assurance.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Bursary Unit',
                'short_name' => 'Bursary',
                'director_name' => 'Mr. A. I. Adeyemi',
                'director_title' => 'Bursar',
                'email' => 'bursary@fuo.edu.ng',
                'intro' => 'The Bursary is responsible for managing the university\'s financial operations, including payment processing, budget management, and financial reporting.',
                'description' => '<p>The Bursary Unit manages all financial transactions of the university, ensuring proper accounting and compliance with financial regulations.</p>',
                'mission' => 'To provide efficient and transparent financial services.',
                'vision' => 'To be a model of financial integrity and accountability.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Counselling Unit',
                'short_name' => 'Counselling',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'counselling@fuo.edu.ng',
                'intro' => 'The Counselling Unit provides professional guidance and psychological support to students for their personal and academic development.',
                'description' => '<p>We offer confidential counselling services to students dealing with academic stress, personal challenges, career decisions, and mental health concerns.</p>',
                'mission' => 'To support students\' holistic well-being through professional counselling.',
                'vision' => 'To foster a mentally healthy and thriving student community.',
                'sort_order' => 3,
            ],
            [
                'name' => 'ICT Unit',
                'short_name' => 'ICT',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'ict@fuo.edu.ng',
                'intro' => 'The ICT Unit manages the university\'s information and communication technology infrastructure and services.',
                'description' => '<p>We provide reliable IT infrastructure, internet services, and technical support to the university community. Our team ensures the smooth operation of all digital platforms and systems.</p><h4>Services</h4><ul><li>Internet and network services</li><li>Email and communication systems</li><li>E-learning platform support</li><li>Technical support and helpdesk</li></ul>',
                'mission' => 'To provide reliable and innovative ICT solutions that support teaching, learning, and research.',
                'vision' => 'To be a leader in educational technology and digital transformation.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Internal Audit Unit',
                'short_name' => 'Audit',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'audit@fuo.edu.ng',
                'intro' => 'The Internal Audit Unit provides independent assurance on the effectiveness of governance, risk management, and control processes.',
                'description' => '<p>Our mission is to enhance and protect organizational value by providing risk-based and objective assurance, advice, and insight.</p>',
                'mission' => 'To enhance and protect organizational value through independent audit assurance.',
                'vision' => 'To be a trusted partner in good governance and institutional integrity.',
                'sort_order' => 5,
            ],
            [
                'name' => 'Public Relations Unit',
                'short_name' => 'PRO',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'pro@fuo.edu.ng',
                'intro' => 'The Public Relations Unit manages the university\'s communication, media relations, and public image.',
                'description' => '<p>We handle press releases, media relations, social media management, and public communications for the university.</p>',
                'mission' => 'To manage and promote the university\'s image through effective communication.',
                'vision' => 'To be the voice of Fountain University to the world.',
                'sort_order' => 6,
            ],
            [
                'name' => 'Quality Assurance Unit',
                'short_name' => 'QA',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'qualityassurance@fuo.edu.ng',
                'intro' => 'The Quality Assurance Unit ensures that academic and administrative processes meet established standards.',
                'description' => '<p>We monitor and evaluate academic programmes, administrative processes, and service delivery to ensure compliance with national and international standards.</p>',
                'mission' => 'To ensure quality standards across all university operations.',
                'vision' => 'To be a beacon of quality in Nigerian higher education.',
                'sort_order' => 7,
            ],
            [
                'name' => 'Registry',
                'short_name' => 'Registry',
                'director_name' => null,
                'director_title' => 'Registrar',
                'email' => 'registry@fuo.edu.ng',
                'intro' => 'The Registry is the administrative nerve centre of the university, responsible for student records, admissions, and academic documentation.',
                'description' => '<p>We manage student admissions, registration, records, examinations, and graduation processes. The Registry also handles official university correspondence and documentation.</p>',
                'mission' => 'To provide efficient administrative services that support academic excellence.',
                'vision' => 'To be a model of administrative efficiency in Nigerian universities.',
                'sort_order' => 8,
            ],
            [
                'name' => 'SIWES Unit',
                'short_name' => 'SIWES',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'siwes@fuo.edu.ng',
                'intro' => 'The SIWES Unit coordinates the Students\' Industrial Work Experience Scheme, connecting students with industry placements.',
                'description' => '<p>We facilitate meaningful industry experiences for students, bridging the gap between academic learning and practical workplace skills.</p>',
                'mission' => 'To provide students with relevant industrial training experience.',
                'vision' => 'To produce graduates with practical skills for the global marketplace.',
                'sort_order' => 9,
            ],
            [
                'name' => 'Sports Unit',
                'short_name' => 'Sports',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'sports@fuo.edu.ng',
                'intro' => 'The Sports Unit promotes physical fitness, recreational activities, and competitive sports among students and staff.',
                'description' => '<p>We organize sports competitions, maintain sporting facilities, and promote healthy lifestyle through physical activities.</p>',
                'mission' => 'To promote sports excellence and healthy living in the university community.',
                'vision' => 'To be a centre of sporting excellence in Nigerian university sports.',
                'sort_order' => 10,
            ],
            [
                'name' => 'Student Affairs Unit',
                'short_name' => 'SAU',
                'director_name' => null,
                'director_title' => 'Director',
                'email' => 'studentaffairs@fuo.edu.ng',
                'intro' => 'The Student Affairs Unit caters to the non-academic needs of students, ensuring their welfare and well-being on campus.',
                'description' => '<p>We manage student welfare, accommodation, disciplinary matters, and extracurricular activities. Our goal is to create a supportive environment for student growth and development.</p>',
                'mission' => 'To promote student welfare and create a conducive campus environment.',
                'vision' => 'To be the students\' advocate and support system.',
                'sort_order' => 11,
            ],
        ];

        foreach ($units as $data) {
            Unit::updateOrCreate(
                ['slug' => Str::slug($data['name'])],
                $data
            );
        }

        $this->command->info('Units seeded successfully.');
    }
}
