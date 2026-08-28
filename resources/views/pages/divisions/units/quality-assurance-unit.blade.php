@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Quality Assurance Unit</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start About Us Area -->
        <div class="about-us-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="text-content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Welcome to</p>
                            </div>
                             <h2 class="title-anim">Quality Assurance Unit</h2>
                            <p class="title-anim">Welcome to the Quality Assurance Unit of Fountain University, Osogbo. We are committed to maintaining and enhancing the quality of academic programmes, administrative processes, and service delivery across the University.</p>
                            <p>The Quality Assurance Unit serves as the custodian of academic standards, ensuring that all programmes and activities meet regulatory requirements and best practices in higher education. We work collaboratively with departments, faculties, and administrative units to promote a culture of continuous improvement and excellence.</p>
                            <p>In carrying out its responsibilities, the Quality Assurance Unit:</p>
                            <ul>
                                <li>Develops and implements quality assurance frameworks and policies for academic and administrative operations.</li>
                                <li>Conducts regular internal quality audits and evaluations of academic programmes and services.</li>
                                <li>Coordinates accreditation processes and prepares documentation for regulatory bodies including the National Universities Commission (NUC) and other relevant agencies.</li>
                                <li>Monitors compliance with established academic standards, guidelines, and benchmarks.</li>
                                <li>Gathers and analyses feedback from students, staff, and other stakeholders to identify areas for improvement.</li>
                                <li>Organises training workshops and seminars on quality management for staff and faculty members.</li>
                                <li>Prepares periodic quality assurance reports for management decision-making.</li>
                                <li>Recommends best practices and innovative strategies to enhance the overall quality of education and services at Fountain University.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="content" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ asset('img/all-img/about-image.png') }}" alt="image" class="img-fluid" style="max-height: 370px; border:solid 1px #ddd; border-radius: 10px;">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Fountain University, Osogbo</h4>
                                    <p class="title-anim">Quality Assurance Unit</p>
                                    <div class="author-info">
                                        <span>Dr. Razak Omokeji </span>
                                        <h5>Ganiyu</h5>
                                        <p>Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->

        <!-- Start Campus Tour Area -->
        <div class="campus-tour">
            <div class="container-fluid p-0">
                
                <div class="row g-0 align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="image cp-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Contact For Enquiries</p>
                            </div>
                            <h2>Quality Assurance Unit</h2>
                            <ul>
                                <li style="list-style-type: none"><i class='bx bxs-phone'></i>  +234 (0) 803 706 3960</li>
                                <li style="list-style-type: none"><i class='bx bxs-envelope'></i>  Email: qualityassurance@fuo.edu.ng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->
  
@endsection