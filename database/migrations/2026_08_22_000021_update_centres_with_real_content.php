<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Update Consultancy with real content
        DB::table('centres')->where('slug', 'centre-for-consultancy-services')->update([
            'intro' => 'As-salam alaykum warahmatullahi wabarakatuhu. We are dedicated to providing high-quality consultancy services to our university, government, and external clients.',
            'description' => '<p>The Centre for Consultancy Service is a vital unit within Fountain University Osogbo, established to offer consultancy services to both internal and external stakeholders. With a focus on excellence and innovation, we strive to address the diverse needs of our clients through tailored solutions and strategic insights.</p>
<p>Our team of experienced consultants is dedicated to providing top-notch advisory services to both internal university departments and external clients. As the Director of Consulting Services, I am proud to lead a team of talented professionals who are committed to delivering high-quality solutions tailored to meet our client\'s specific needs.</p>
<p>What sets our consulting services apart is our unique combination of academic expertise, industry experience, and innovative thinking. Whether you are looking to optimize processes, develop strategic plans, or tackle complex challenges, our consultants are here to help.</p>',
            'mission' => 'To be a trusted partner for our clients, delivering innovative and practical solutions that drive positive outcomes and sustainable impact. We are committed to excellence, integrity, and professionalism in all aspects of our work.',
            'vision' => 'To become a leading centre of excellence in consultancy services, known for our expertise, reliability, and commitment to client satisfaction. We aspire to make a meaningful difference in the organisations and communities we serve.',
            'objectives' => "- Modular Certificate (Beginners, Intermediate and Advanced Stages) — Less than 1 Month\n- Programme Certificate — One-off terminal certificate programme\n- Professional training and capacity building\n- Strategic advisory services\n- Research consulting",
            'director_name' => 'Dr. T. O. Ayinde',
            'director_title' => 'Director, Centre for Consultancy Services',
        ]);

        // Update FUCRIT with real content
        DB::table('centres')->where('slug', 'centre-for-research-innovation-and-technology')->update([
            'intro' => 'The Academic Board of Fountain University Osogbo has established the University Research Committee to monitor, advise and provide assurance on the quality of research programmes and activities.',
            'description' => '<p>The Centre for Research, Innovation and Technology (FUCRIT) serves as the hub for cutting-edge research and technological innovation at Fountain University.</p>
<p>The Academic Board of the Fountain University Osogbo has established the University Research Committee ("the Committee") in accordance with section 48 of the Academic Board Charter. This Charter sets out the Committee\'s objective, authority, composition and tenure, roles and responsibilities, reporting and administrative arrangements.</p>
<h4>Committee Responsibilities</h4>
<ul>
<li>Monitor the development of the University\'s policies and plans in relation to research</li>
<li>Oversee research performance and advise on the coordination of the University\'s research effort</li>
<li>Monitor the quality and integrity of the University\'s research activities</li>
<li>Make recommendations to the Academic Board on accrediting, reaccrediting or disestablishing postgraduate programmes</li>
</ul>
<h4>Collaborating Institutions</h4>
<ul>
<li>International Islamic University Malaysia</li>
<li>Nigerian Airforce Institute</li>
</ul>',
            'mission' => 'Engaging in innovative, multidisciplinary, and transformative research to solve local, national, and global challenges.',
            'vision' => 'Uniting Science, Technology, and Innovation to bring FUO into the limelight for national and global reputation.',
            'objectives' => "- Monitor research quality and integrity\n- Advise on research policy development\n- Coordinate university research efforts\n- Facilitate industry collaborations\n- Support innovation and technology transfer",
            'director_name' => 'ADEBIYI, Rasheed Ademola',
            'director_title' => 'PhD, ARPA — Director, FUCRIT',
        ]);

        // Update Sub-Degree with real content
        DB::table('centres')->where('slug', 'centre-for-sub-degree-and-professional-programmes')->update([
            'intro' => 'The Centre for Sub-Degree Programmes at Fountain University offers a variety of associate degrees, diplomas, and certificate programmes designed to provide foundational knowledge and skills.',
            'description' => '<p>The Centre for Sub-Degree Programmes at Fountain University offers a variety of associate degrees, diplomas, and certificate programmes. These programmes are designed to provide foundational knowledge and skills that can lead to further education or immediate employment.</p>
<p>To deliver high-quality sub-degree programmes that bridge the gap between secondary education and higher education or employment.</p>',
            'mission' => 'Our philosophy centers on the belief that education should be accessible, practical, and transformative.',
            'vision' => 'To become a leading provider of sub-degree education, renowned for our commitment to academic excellence and our ability to produce knowledgeable and highly skilled graduates.',
            'objectives' => "- Associate degree programmes\n- Diploma programmes\n- Professional certification courses\n- Skills development workshops\n- Career guidance and placement",
            'director_name' => 'Professor Kazeem Alabi',
            'director_title' => 'Director, Centre for Sub-Degree Programmes',
        ]);

        // Update Entrepreneurship with real content
        DB::table('centres')->where('slug', 'centre-for-entrepreneurship-and-skill-acquisition')->update([
            'intro' => 'Empowering students and the community with entrepreneurial skills and business acumen for self-reliance and societal development.',
            'description' => '<p>The Centre for Entrepreneurship and Skill Acquisition is committed to nurturing an entrepreneurial mindset among students and equipping them with the skills needed to succeed in the modern economy.</p>
<p>We offer practical training, business incubation, mentorship, and access to funding opportunities for aspiring entrepreneurs within the university community.</p>',
            'mission' => 'To foster entrepreneurship and skill acquisition for self-reliance and societal development.',
            'vision' => 'To produce job creators rather than job seekers.',
            'objectives' => "- Entrepreneurship training programmes\n- Business incubation and mentorship\n- Skills acquisition workshops\n- Industry partnerships\n- Access to startup funding",
        ]);

        // Update remaining centres with better content
        DB::table('centres')->where('slug', 'centre-for-spiritual-growth-and-moral-excellence')->update([
            'intro' => 'Dedicated to nurturing spiritual growth and moral excellence among students, staff, and the wider community.',
            'description' => '<p>The Centre for Spiritual Growth and Moral Excellence is committed to fostering a culture of spiritual awareness, moral uprightness, and ethical leadership within and beyond the university community.</p><p>We organise regular spiritual programmes, moral education workshops, and community outreach initiatives that align with the university\'s Islamic foundation.</p>',
            'mission' => 'To nurture spiritual growth and moral excellence in alignment with Islamic values.',
            'vision' => 'To produce graduates who are spiritually grounded and morally upright.',
            'objectives' => "- Spiritual mentoring programmes\n- Moral education workshops\n- Community outreach\n- Interfaith dialogue\n- Character development initiatives",
        ]);

        DB::table('centres')->where('slug', 'centre-for-linkages-and-advancement')->update([
            'intro' => 'Building strategic partnerships and linkages with local and international institutions for mutual advancement.',
            'description' => '<p>The Centre for Linkages and Advancement facilitates partnerships between Fountain University and other academic institutions, industry players, and international organisations.</p><p>We work to expand the university\'s global reach through MoU facilitation, academic exchanges, and alumni engagement programmes.</p>',
            'mission' => 'To build and sustain strategic partnerships that enhance the university\'s global reach and impact.',
            'vision' => 'To be the gateway for Fountain University\'s global partnerships.',
            'objectives' => "- International partnerships\n- Alumni engagement\n- MoU facilitation\n- Academic exchanges\n- Industry collaborations",
        ]);

        DB::table('centres')->where('slug', 'centre-for-arabic-and-islamic-research-translation-and-immersion-programme')->update([
            'intro' => 'Advancing Arabic language studies and Islamic research through translation and immersive academic programmes.',
            'description' => '<p>The Centre for Arabic and Islamic Research, Translation and Immersion Programme is dedicated to the promotion of Arabic language proficiency and Islamic scholarship through innovative research and translation initiatives.</p><p>We offer immersive Arabic language programmes, Islamic research support, and translation services for academic and community purposes.</p>',
            'mission' => 'To advance Arabic language and Islamic scholarship through research, translation, and immersion.',
            'vision' => 'To be a centre of excellence in Arabic and Islamic studies.',
            'objectives' => "- Arabic language immersion programmes\n- Islamic research initiatives\n- Translation services\n- Academic publications\n- Community Arabic classes",
        ]);

        DB::table('centres')->where('slug', 'centre-for-sandwich-programmes')->update([
            'intro' => 'Offering flexible sandwich programmes designed for working professionals seeking academic advancement.',
            'description' => '<p>The Centre for Sandwich Programmes provides opportunities for working professionals to pursue degree programmes through a flexible sandwich mode of study.</p><p>Our programmes are structured to accommodate the schedules of working adults, with classes held during weekends and holiday periods.</p>',
            'mission' => 'To provide accessible and quality education through flexible sandwich programmes.',
            'vision' => 'To be the preferred choice for working professionals seeking academic advancement.',
            'objectives' => "- Flexible degree programmes\n- Professional development\n- Weekend and holiday classes\n- Industry-relevant curricula\n- Work-study integration",
        ]);
    }

    public function down(): void
    {
        // This is a data migration — no rollback needed
    }
};
