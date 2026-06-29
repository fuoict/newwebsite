@extends('layouts.app')

@section('content')
    <!-- Start Section Banner Area -->
    <div class="section-banner bg-3">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">The Vice Chancellor</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo, Osun State, Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Banner Area -->

    <!-- Start About Area -->
    <div class="about-alumni ptb-100">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-start">
                <div class="col-lg-5">
                    <img src="{{ asset('img/all-img/prof_olayinka.jpeg') }}" alt="The-Vice-Chancellor"
                        class="img-fluid me-3" data-aos="fade-zoom-in" data-aos-delay="100">
                </div>
                <div class="col-lg-7">
                    <div class="content" data-aos="fade-up" data-aos-delay="100">

                        <h2>PROFESSOR OLAYINKA RAMOTA KARIM</h2>
                        <div class="sub-title">
                            <i class='bx bxs-graduation'></i>
                            <p>(FNIFST, FCOFP, FSPSP, FCPA, MIFT, LFICWLS) </p>
                        </div>
                        <h4>Profile</h4>
                        <p style="text-align: justify">Professor Olayinka Ramota Karim is an accomplished Food Scientist,
                            academic administrator, researcher, peace advocate,
                            and transformational leader. She is the fourth substantive Vice-Chancellor of
                            Fountain University, Osogbo, Nigeria, having assumed office on 1 March 2023.</p>
                        <p style="text-align: justify">She obtained her Bachelor of Science (Hons.) degree in Food Science
                            and Technology from the Federal University of Agriculture, Abeokuta (now Federal University of
                            Agriculture, Abeokuta) in 1992. She subsequently earned a Master of Science degree from the
                            University of Ibadan in 1995 and a Doctor of Philosophy degree in Food Science and Technology
                            from the Federal University of Agriculture, Abeokuta in 2005, becoming the first Ph.D. graduate
                            of the Department of Food Science and Technology. She further broadened her professional
                            expertise with a Diploma in Agribusiness and Post-Harvest Management (Israel) in 2015 and
                            professional certificates in Inter-Religious Dialogue, Conflict Transformation, and Mediation in
                            2019.</p>
                        <p style="text-align: justify">With over three decades of distinguished experience in teaching,
                            research, university administration, community service, and consultancy, Professor Karim has
                            made remarkable contributions to the advancement of Food Science and Technology, higher
                            education, peacebuilding, and national development. She has supervised numerous undergraduate
                            and postgraduate research projects, examined doctoral theses across several universities,
                            reviewed manuscripts for reputable national and international journals, and served as External
                            Examiner and External Assessor for professorial appointments in many Nigerian universities.</p>
                        <p style="text-align: justify">An accomplished researcher and mentor, Professor Karim has attracted
                            several research grants, fellowships, and sponsorships from prestigious national and
                            international organisations, including TETFund, Global Affairs Canada, the African Union
                            Development Agency–NEPAD, ActionAid Nigeria, the Dutch Ministry, the N.G. Patel Foundation
                            (India), and the University of Ilorin Laboratory-to-Product Initiative, among others. She has
                            authored and co-authored over 195 scholarly publications, delivered more than 70 keynote
                            addresses, lead papers, public lectures, and conference presentations, and participated in
                            academic conferences, research collaborations, and professional engagements across more than 15
                            countries.</p>
                        <p style="text-align: justify">Professor Karim has rendered outstanding national service through
                            numerous strategic assignments. She has served as a National Call Group Member, UTME/JAMB
                            Supervisor, Test Item Moderator for JAMB, JUPEB Examination Supervisor, and as Chairperson and
                            Member of accreditation and resource verification panels of the National Universities Commission
                            (NUC) and the National Board for Technical Education (NBTE). Her exemplary contributions to
                            academia, public service, and community development have earned her more than 35 prestigious
                            awards and honours.</p>
                        <p style="text-align: justify">A passionate advocate of ethical leadership, peacebuilding, women's
                            empowerment, youth development, entrepreneurship, and community engagement, Professor Karim
                            combines academic excellence with exceptional administrative competence. Under her leadership,
                            Fountain University continues to strengthen its reputation for academic excellence, research and
                            innovation, digital transformation, entrepreneurship, institutional growth,
                            internationalisation, and global engagement.</p>
                        <p style="text-align: justify">Professor Karim is a Fellow of the Nigerian Institute of Food Science
                            and Technology (FNIFST), Fellow of the College of Food Processors (FCOFP), Fellow of the Society
                            for Peace Studies and Practice (FSPSP), Fellow of the Chartered Institute of Public
                            Administration of Nigeria (FCPA), Fellow of the Cardinal Onaiyekan Foundation for Peace (FCOFP),
                            Life Fellow of the International Chartered World Learned Society (LFICWLS), and a Member of the
                            Institute of Food Technologists (MIFT).</p>
                        <p style="text-align: justify">Beyond her professional accomplishments, Professor Karim is a
                            distinguished community builder, peace ambassador, and spiritual leader. She is the Yeye
                            Fiwasaye of Oyan City, Osun State, and the Khadimatul-Ummah (Servant of the Muslim Community) of
                            the Istijabah Prayer Group of Nigeria, honours conferred in recognition of her selfless service
                            to humanity, moral leadership, and commitment to community development. She is also a devoted
                            and committed member of the Nasrul-Lahi-l-Fatih Society (NASFAT), where she actively supports
                            programmes that promote spiritual growth, social development, and community service.</p>
                        <p style="text-align: justify">In recognition of her outstanding contributions to higher education,
                            leadership, nation-building, peacebuilding, and women's development, Muslim News Nigeria
                            honoured Professor Karim in 2026 as one of the 30 Muslim Women of Substance in Nigeria.</p>
                        <p style="text-align: justify">Professor Karim is happily married to Professor Adegboyega Karim. She
                            remains unwaveringly committed to advancing Fountain University's vision of producing competent,
                            innovative, morally upright, and globally competitive graduates while fostering excellence in
                            teaching, research, innovation, entrepreneurship, peacebuilding, and sustainable national
                            development.</p>


                    </div>
                </div>
            </div>

        </div>

        @php
            $spotlightFolder = public_path('img/vc-spotlight');
            $vcSpotlightImages = [];

            if (is_dir($spotlightFolder)) {
                $files = glob($spotlightFolder . '/*.{jpg,jpeg,png,webp,gif,JPG,JPEG,PNG,WEBP,GIF}', GLOB_BRACE);
                sort($files, SORT_NATURAL | SORT_FLAG_CASE);

                foreach ($files as $filePath) {
                    if (! is_file($filePath)) {
                        continue;
                    }

                    $fileName = basename($filePath);
                    $vcSpotlightImages[] = [
                        'src' => 'img/vc-spotlight/' . rawurlencode($fileName),
                        'caption' => '',
                    ];
                }
            }

            if (empty($vcSpotlightImages)) {
                $vcSpotlightImages = [
                    ['src' => 'img/vc-spotlight/third aniv.jpeg', 'caption' => ''],
                    ['src' => 'img/gallery/m2.jpg', 'caption' => 'Leading a student-success roundtable'],
                    ['src' => 'img/gallery/m3.jpg', 'caption' => 'Speaking at the university convocation'],
                    ['src' => 'img/gallery/m4.jpg', 'caption' => 'Meeting with staff and guests'],
                    ['src' => 'img/gallery/m5.jpg', 'caption' => 'Campus tour with visiting dignitaries'],
                ];
            }
        @endphp

        <section class="vc-spotlight-area">
            <div class="container-fluid">
                <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-star'></i> <p>Spotlight</p>
                    </div>
                    <h2>VC Spotlight</h2>
                    <p>Moments from the Office of the Vice-Chancellor captured in motion.</p>
                    <div class="vc-spotlight-action">
                        <a href="{{ route('our-gallery') }}" class="default-btn">Explore VC Moments</a>
                    </div>
                </div>

                <div class="vc-spotlight-slider" data-aos="fade-up" data-aos-delay="200">
                    <div class="vc-spotlight-track">
                        @foreach (array_merge($vcSpotlightImages, $vcSpotlightImages) as $item)
                            <div class="vc-spotlight-card">
                                <div class="vc-spotlight-image">
                                    <img src="{{ asset($item['src']) }}" alt="VC spotlight image">
                                    @if (!empty($item['caption']))
                                        <div class="vc-spotlight-caption">{{ $item['caption'] }}</div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid px-5 align-items-center">
            <h2 class="text-center">Vice-Chancellor's Speeches</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Speech Title</th>
                            <th scope="col" class="text-center">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($Records as $index => $Record)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <a href="{{ $Record->link }}" target="_blank" rel="noopener noreferrer">
                                        {{ $Record->title }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ $Record->link }}" target="_blank" rel="noopener noreferrer"
                                        aria-label="Download {{ $Record->title }}">
                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;"
                                            alt="PDF icon">
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="text-center text-muted">No speeches available at the moment.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End About Area -->


    <!-- Start Global Alumni Events Area -->
    {{-- <div class="global-alumni-events ptb-100" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="global-content-items">
                <div class="content">
                    <h2>ACADEMIC QUALIFICATIONS</h2>
                    <p>
                    <ul>
                        <li>Ph.D. Food Science and Technology (Food Processing and Quality Control) </li>
                        <li>M.Sc. Food Technology</li>
                        <li>B.Sc. Honours Food Science and Technology (Second Class Upper Division)</li>
                    </ul>
                    </p>
                    <a class="default-btn" href="#">Download CV</a>
                </div>
                <div class="image">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Global Alumni Events Area -->
@endsection
