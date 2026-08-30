<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            // ── THE UNIVERSITY ──
            [
                'title' => 'About Fountain University',
                'slug' => 'about-fountain-university',
                'section' => 'university',
                'layout_type' => 'text',
                'route_name' => 'about',
                'icon' => 'bx bx-info-circle',
                'intro' => 'Fountain University is more than just a place of learning; it\'s a place where dreams take flight.',
                'body' => '<p>Fountain University was licensed in 2007, following NASFAT\'s vision for quality education initiated in 2000.</p><p>Rooted in values of knowledge, character and service, the University promotes academic and moral excellence.</p>',
                'sort_order' => 1,
            ],
            [
                'title' => 'Board of Trustees',
                'slug' => 'board-of-trustees',
                'section' => 'university',
                'layout_type' => 'member-grid',
                'route_name' => 'about-bot',
                'icon' => 'bx bx-group',
                'banner_text' => 'Governing the vision of Fountain University',
                'intro' => 'The Board of Trustees provides strategic oversight and governance for Fountain University. The Board consists of distinguished individuals who bring wealth of experience in education, business, and public service.',
                'body' => '<h3>Functions of the Board</h3><ol><li>Determine the vision and mission of the University</li><li>Provide strategic direction and oversight</li><li>Ensure financial sustainability</li><li>Protect the University\'s assets and reputation</li><li>Appoint and evaluate the Vice-Chancellor</li><li>Approve major policies and plans</li><li>Ensure compliance with regulatory requirements</li><li>Represent the interests of stakeholders</li></ol>',
                'members' => [
                    ['name' => 'Alhaji AbdulRauf Oladimeji', 'role' => 'Chairman', 'photo' => ''],
                    ['name' => 'Mallam Bolaji Abdullahi', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Prof. Lamidi O. Adeyemi', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Alhaji Sakirudeen Adeniyi', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Alhaja Risikat Omowumi Ilyas', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Dr. Mutiu O. Balogun', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Alhaji K. O. Sanni', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Mallam Habib Abdullahi', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Chief (Mrs.) Modupe F. Afolabi', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Alhaji R.O. Balogun', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Mr. A. O. Okunlola', 'role' => 'Secretary', 'photo' => ''],
                ],
                'sort_order' => 2,
            ],
            [
                'title' => 'Governing Council',
                'slug' => 'governing-council',
                'section' => 'university',
                'layout_type' => 'member-grid',
                'route_name' => 'about-governing-council',
                'icon' => 'bx bx-shield-quarter',
                'banner_text' => 'The apex decision-making body of the University',
                'intro' => 'The Governing Council is the highest decision-making body of Fountain University. It is responsible for the general management and oversight of the University.',
                'members' => [
                    ['name' => 'Prof. Musbau Akanji, OON', 'role' => 'Pro-Chancellor & Chairman', 'photo' => ''],
                    ['name' => 'Alhaji Muritala Ajadi', 'role' => 'Vice-Chairman', 'photo' => ''],
                    ['name' => 'Prof. Abubakar A. Rasheed, MFR', 'role' => 'Member (NUC Rep)', 'photo' => ''],
                    ['name' => 'Alhaji AbdulRauf Oladimeji', 'role' => 'Member (BOT Rep)', 'photo' => ''],
                    ['name' => 'Dr. Mutiu O. Balogun', 'role' => 'Member (BOT Rep)', 'photo' => ''],
                    ['name' => 'Alhaji Lamidi Adetayo Oladimeji', 'role' => 'Member (BOT Rep)', 'photo' => ''],
                    ['name' => 'Prof. Adebayo Musibau Balogun', 'role' => 'Member (Senate Rep)', 'photo' => ''],
                    ['name' => 'Dr. A. O. Ogunleye', 'role' => 'Member (Congregation Rep)', 'photo' => ''],
                    ['name' => 'Mrs. A. A. Sulaiman', 'role' => 'Member (Congregation Rep)', 'photo' => ''],
                    ['name' => 'Prof. O.O. Oladimeji', 'role' => 'Member (NASFAT Rep)', 'photo' => ''],
                    ['name' => 'Alhaji S. K. Babalola', 'role' => 'Member (NASFAT Rep)', 'photo' => ''],
                    ['name' => 'Dr. K. A. Abisogun', 'role' => 'Member (NASFAT Rep)', 'photo' => ''],
                    ['name' => 'Alhaja Sekinah Adekola', 'role' => 'Member (NASFAT Rep)', 'photo' => ''],
                    ['name' => 'Alhaji U. F. Adetola', 'role' => 'Member (NASFAT Rep)', 'photo' => ''],
                    ['name' => 'Prof. L. O. Adeyemi', 'role' => 'Member (NASFAT Rep)', 'photo' => ''],
                    ['name' => 'Prof. T. N. Gballa', 'role' => 'Member (FCTA Rep)', 'photo' => ''],
                    ['name' => 'Barrister Abiola Olaboyede Balogun', 'role' => 'Member (FCTA Rep)', 'photo' => ''],
                    ['name' => 'Prof. Aminu Adeniran', 'role' => 'Member', 'photo' => ''],
                    ['name' => 'Mr. Abiola Balogun', 'role' => 'Member (Visitor\'s Rep)', 'photo' => ''],
                    ['name' => 'Mrs. Bolanle Adenike Adesida', 'role' => 'Member (Visitor\'s Rep)', 'photo' => ''],
                    ['name' => 'Dr. Kabiru Adetola', 'role' => 'Member (NASFAT Youth)', 'photo' => ''],
                    ['name' => 'Alh. Saheed Adekilekun', 'role' => 'Member (NASFAT Youth)', 'photo' => ''],
                ],
                'sort_order' => 3,
            ],
            [
                'title' => 'The Senate',
                'slug' => 'the-senate',
                'section' => 'university',
                'layout_type' => 'text',
                'route_name' => 'the-senate',
                'icon' => 'bx bx-book-reader',
                'banner_text' => 'The apex academic body of the University',
                'body' => '<p>The Senate is the highest academic body of the University. It is responsible for the regulation of academic standards and the general control of all academic programmes.</p><p>The Senate meets regularly to deliberate on academic matters and approve new programmes, examinations results, and academic policies.</p>',
                'sort_order' => 4,
            ],
            [
                'title' => 'Congregation',
                'slug' => 'congregation',
                'section' => 'university',
                'layout_type' => 'text',
                'route_name' => 'congregation',
                'icon' => 'bx bx-group',
                'banner_text' => 'The assembly of all graduates and members',
                'body' => '<p>The Congregation is the assembly of all graduates of the University and such other persons as the University may, from time to time, admit to membership.</p>',
                'sort_order' => 5,
            ],

            // ── PRINCIPAL OFFICERS ──
            [
                'title' => 'The Vice-Chancellor',
                'slug' => 'the-vice-chancellor',
                'section' => 'officers',
                'layout_type' => 'officer',
                'route_name' => 'the-vice-chancellor',
                'icon' => 'bx bx-crown',
                'banner_text' => 'Fountain University, Osogbo, Osun State, Nigeria.',
                'officers' => [
                    [
                        'name' => 'Professor Olayinka Ramota Karim',
                        'title' => 'Vice-Chancellor',
                        'photo' => 'img/all-img/prof_olayinka.jpeg',
                        'qualifications' => 'FNIFST, FCOFP, FSPSP, FCPA, MIFT, LFICWLS',
                        'bio' => '<p>Professor Olayinka Ramota Karim is an accomplished Food Scientist, academic administrator, researcher, peace advocate, and transformational leader. She is the fourth substantive Vice-Chancellor of Fountain University, Osogbo, Nigeria, having assumed office on 1 March 2023.</p><p>She obtained her Bachelor of Science (Hons.) degree in Food Science and Technology from the Federal University of Agriculture, Abeokuta in 1992. She subsequently earned a Master of Science degree from the University of Ibadan in 1995 and a Doctor of Philosophy degree in Food Science and Technology from the Federal University of Agriculture, Abeokuta in 2005.</p><p>With over three decades of distinguished experience in teaching, research, university administration, community service, and consultancy, Professor Karim has made remarkable contributions to the advancement of Food Science and Technology, higher education, peacebuilding, and national development.</p><p>An accomplished researcher and mentor, Professor Karim has authored and co-authored over 195 scholarly publications, delivered more than 70 keynote addresses, and participated in academic conferences across more than 15 countries.</p><p>Professor Karim is a Fellow of the Nigerian Institute of Food Science and Technology (FNIFST), Fellow of the College of Food Processors (FCOFP), Fellow of the Society for Peace Studies and Practice (FSPSP), Fellow of the Chartered Institute of Public Administration of Nigeria (FCPA), and Life Fellow of the International Chartered World Learned Society (LFICWLS).</p>',
                    ],
                ],
                'sort_order' => 1,
            ],
            [
                'title' => 'The Deputy Vice-Chancellor',
                'slug' => 'the-dvc',
                'section' => 'officers',
                'layout_type' => 'officer',
                'route_name' => 'the-dvc',
                'icon' => 'bx bx-user',
                'banner_text' => 'Fountain University, Osogbo, Osun State, Nigeria.',
                'officers' => [
                    [
                        'name' => 'Professor Abdullateef Usman',
                        'title' => 'Deputy Vice-Chancellor',
                        'photo' => 'img/all-img/professor-abdullateef-usman.jpg',
                        'qualifications' => '',
                        'bio' => '<p>Professor Abdullateef Usman is a distinguished scholar and administrator serving as the Deputy Vice-Chancellor of Fountain University, Osogbo.</p><h4>Education</h4><ul><li>Ph.D in relevant field</li><li>M.Sc. degree</li><li>B.Sc. degree</li></ul><h4>Career Timeline</h4><ul><li>Appointed DVC at Fountain University</li><li>Previously served in various academic capacities</li><li>Extensive experience in university administration</li><li>Published researcher with numerous publications</li><li>Active contributor to academic development</li></ul>',
                    ],
                ],
                'sort_order' => 2,
            ],
            [
                'title' => 'The Registrar',
                'slug' => 'the-registrar',
                'section' => 'officers',
                'layout_type' => 'officer',
                'route_name' => 'the-registrar',
                'icon' => 'bx bx-file',
                'banner_text' => 'Fountain University, Osogbo, Osun State, Nigeria.',
                'officers' => [
                    [
                        'name' => 'Adenekan, Sheriff Adeyemi',
                        'title' => 'Registrar',
                        'photo' => 'img/all-img/adenekan-sheriff.jpeg',
                        'qualifications' => 'FSTI, ANUA-UK, MANUPA',
                        'bio' => '<p>Mr. Adenekan Sheriff Adeyemi is a seasoned administrator and registrar of Fountain University, Osogbo. He brings extensive experience in university administration and management.</p><h4>Biography</h4><p>With a strong background in educational administration and management, Mr. Adenekan has been instrumental in streamlining administrative processes at Fountain University. His dedication to excellence in university governance has contributed significantly to the institution\'s growth and development.</p>',
                    ],
                ],
                'sort_order' => 3,
            ],
            [
                'title' => 'The Bursar',
                'slug' => 'the-bursar',
                'section' => 'officers',
                'layout_type' => 'officer',
                'route_name' => 'the-bursar',
                'icon' => 'bx bx-money',
                'banner_text' => 'Fountain University, Osogbo, Osun State, Nigeria.',
                'officers' => [
                    [
                        'name' => 'Mr. A. I. Adeyemi',
                        'title' => 'Bursar',
                        'photo' => '',
                        'qualifications' => '',
                        'bio' => '<p>Mr. A. I. Adeyemi is the Bursar of Fountain University, Osogbo. He is responsible for the financial management and accounting operations of the University.</p>',
                    ],
                ],
                'sort_order' => 4,
            ],
            [
                'title' => 'The Librarian',
                'slug' => 'the-librarian',
                'section' => 'officers',
                'layout_type' => 'officer',
                'route_name' => 'the-librarian',
                'icon' => 'bx bx-book',
                'banner_text' => 'Fountain University, Osogbo, Osun State, Nigeria.',
                'officers' => [
                    [
                        'name' => 'Mrs. T. O. Raji',
                        'title' => 'University Librarian',
                        'photo' => '',
                        'qualifications' => '',
                        'bio' => '<p>Mrs. T. O. Raji is the University Librarian of Fountain University, Osogbo. She oversees the university library services and information resources.</p>',
                    ],
                ],
                'sort_order' => 5,
            ],

            // ── ADMISSIONS ──
            [
                'title' => 'Admission Requirements',
                'slug' => 'admission-requirements',
                'section' => 'admissions',
                'layout_type' => 'text',
                'route_name' => 'admission-requirement',
                'icon' => 'bx bx-file',
                'sort_order' => 1,
            ],
            [
                'title' => 'Undergraduate Applications',
                'slug' => 'undergraduate-applications',
                'section' => 'admissions',
                'layout_type' => 'text',
                'route_name' => 'undergraduate-applications',
                'icon' => 'bx bx-link-external',
                'body' => '<p>Apply for undergraduate programmes at Fountain University through our online portal.</p><p><a href="https://eportal.fuo.edu.ng/" target="_blank" class="btn btn-primary">Go to Application Portal →</a></p>',
                'sort_order' => 2,
            ],
            [
                'title' => 'Postgraduate Applications',
                'slug' => 'postgraduate-applications',
                'section' => 'admissions',
                'layout_type' => 'text',
                'route_name' => 'spgs-applications',
                'icon' => 'bx bx-link-external',
                'sort_order' => 3,
            ],
            [
                'title' => 'Sandwich Applications',
                'slug' => 'sandwich-applications',
                'section' => 'admissions',
                'layout_type' => 'text',
                'route_name' => 'sandwich-applications',
                'icon' => 'bx bx-link-external',
                'sort_order' => 4,
            ],

            // ── PUBLICATIONS ──
            [
                'title' => 'Annual Reports',
                'slug' => 'annual-reports',
                'section' => 'publications',
                'layout_type' => 'text',
                'route_name' => 'annual-report',
                'icon' => 'bx bx-file',
                'sort_order' => 1,
            ],
            [
                'title' => 'Fountain Chronicles',
                'slug' => 'fountain-chronicles',
                'section' => 'publications',
                'layout_type' => 'text',
                'route_name' => 'fuo-chronicles',
                'icon' => 'bx bx-news',
                'sort_order' => 2,
            ],

            // ── OTHER ──
            [
                'title' => 'Our Gallery',
                'slug' => 'our-gallery',
                'section' => 'other',
                'layout_type' => 'gallery',
                'route_name' => 'our-gallery',
                'icon' => 'bx bx-images',
                'sort_order' => 1,
            ],
            [
                'title' => 'Our Campus',
                'slug' => 'our-campus',
                'section' => 'other',
                'layout_type' => 'text',
                'route_name' => 'our-campus',
                'icon' => 'bx bx-building-house',
                'sort_order' => 2,
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'section' => 'other',
                'layout_type' => 'text',
                'route_name' => 'contact',
                'icon' => 'bx bx-envelope',
                'sort_order' => 3,
            ],
        ];

        foreach ($pages as $data) {
            Page::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }

        $this->command->info('Pages seeded: ' . count($pages) . ' pages created/updated.');
    }
}
