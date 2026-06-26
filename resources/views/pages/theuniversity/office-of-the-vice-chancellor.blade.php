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
                            academic administrator, researcher, and transformational leader. She is the fourth substantive
                            Vice-Chancellor of
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
                            made significant contributions to the advancement of Food Science and Technology, higher
                            education, and national development. She has supervised numerous undergraduate and postgraduate
                            research projects, examined doctoral theses across several universities, reviewed manuscripts
                            for reputable international journals, and served as External Examiner and External Assessor for
                            professorial appointments in many Nigerian universities</p>
                        <p style="text-align: justify">An accomplished researcher and mentor, Professor Karim has attracted
                            several research grants, fellowships, and sponsorships from prestigious national and
                            international organisations, including TETFund, Global Affairs Canada, the African Union
                            Development Agency–NEPAD, ActionAid Nigeria, the Dutch Ministry, the N.G. Patel Foundation
                            (India), and the University of Ilorin Laboratory-to-Product Initiative, among others. She has
                            authored and co-authored over 195 scholarly publications, delivered more than 70 keynote
                            addresses, lead papers, public lectures, and conference presentations, and participated in
                            academic conferences and professional engagements across over twelve countries.</p>
                        <p style="text-align: justify">Professor Karim has rendered outstanding national service through
                            numerous strategic assignments. She has served as a National Call Group Member, UTME/JAMB
                            Supervisor, Test Item Moderator for JAMB, JUPEB Examination Supervisor, and as Chairperson and
                            Member of accreditation and resource verification panels of the National Universities Commission
                            (NUC) and the National Board for Technical Education (NBTE). Her exemplary service to academia
                            and society has earned her more than 35 prestigious awards and honours.</p>
                        <p style="text-align: justify">A passionate advocate of ethical leadership, peacebuilding, women's
                            empowerment, youth development, entrepreneurship, and community engagement, Professor Karim
                            combines academic excellence with exceptional administrative competence. Under her leadership,
                            Fountain University continues to strengthen its reputation for academic excellence, research and
                            innovation, digital transformation, entrepreneurship, institutional growth, and global
                            engagement.</p>
                        <p style="text-align: justify">Professor Karim is a Fellow of the Nigerian Institute of Food Science
                            and Technology (FNIFST), Fellow of the Society for Peace Studies and Practice (FSPSP), Fellow of
                            the Chartered Institute of Public Administration of Nigeria (FCPA), Fellow of the Cardinal
                            Onaiyekan Foundation for Peace, Life Fellow of the International Chartered World Learned Society
                            (LFICWLS), and a Member of the Institute of Food Technologists (MIFT).
                        </p>
                        <p style="text-align: justify">She is happily married to Professor Adegboyega Karim and remains
                            committed to advancing Fountain University's vision of producing competent, innovative, morally
                            upright, and globally competitive graduates while fostering research, innovation,
                            entrepreneurship, and sustainable national development.</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid px-5 align-items-center">
            <h2 style="text-align: center;">Vice-Chancellor's Speeches</h2> <br>
            <hr>
            <div class="row g-0 align-items-center">
                @foreach ($Records as $Record)
                    <div class="col-lg-4 pb-3">
                        <div class="number-list">


                            {{-- <a href="{{ $Record->link }}">{{ $Record->description }}</a> --}}

                            <a href="{{ $Record->link }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res"
                                    style="width: 17%" alt=""></a>
                            {{-- <h6>{{ $VcSpeech->title }}</h6> --}}
                            <h6><a href="{{ $Record->link }}">{{ $Record->title }}</a></h6>

                        </div>
                    </div>
                @endforeach
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
