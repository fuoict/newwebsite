@extends('layouts.app')

@section('content')
 <!-- Start Section Banner Area -->
        <div class="section-banner bg-12">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Admission Requirements</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start Academics Section Area -->
        <div class="academics-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="academics-left">
                            <div class="ac-category">
                                <ul>
                                    <li><a class="active" href="#">Overview</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}">Postgraduate Application</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}">Undergraduate Application</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}">Sandwich Application</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                                <a class="darkbtn" href="{{ route('about') }}">About</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-dec">
                                <h3> Admission Requirements – 2025/2026 Academic Session</h3>
                                <p>Welcome to Fountain University, Osogbo, a centre of academic excellence and moral uprightness. 
                                    We are delighted that you are considering joining our vibrantcommunity for the 2025/2026 academic session.
                                </p>
                                <p> All prospective candidates are advised to carefully read the following 
                                    admission requirements before proceeding with their application.
                                </p>

                                <h3> General Admission Requirements</h3>
                                <p>To be eligible for admission into any undergraduate programme at Fountain University, applicants must meet the following criteria:</p>
                                  <ul>
                                    <li>Minimum Age Requirement: Applicants must be at least 16 years old at the time of application.</li>
                                    <li>UTME Score Requirement: All candidates must have scored a minimum of 150 in the 2025 JAMB Unified Tertiary Matriculation Examination (UTME).</li>
                                    <li>O'Level Requirements: Candidates must possess a minimum of five (5) credit passes in relevant subjects including English Language and Mathematics, obtained at not more than two sittings in WAEC, NECO, or their equivalent.</li>
                                  </ul>

                                <h3> Programme-Specific UTME Cut-Off Marks</h3>
                                <p>Some programmes at Fountain University require higher UTME scores due to 
                                    their competitive nature. In addition to the general UTME requirement, 
                                    the following specific programmes have higher cut-off marks:</p>
                                  <ul>
                                    <li>B.NSc. Nursing Science – Minimum UTME score of 220.</li>
                                    <li>B.Physiotherapy – Minimum UTME score of 200.</li>
                                    <li>B.MLS. Medical Laboratory Science – Minimum UTME score of 170</li>
                                  </ul>
                                  <i>Candidates applying for any of the above-listed programmes must meet both the 
                                    general admission criteria and the programme-specific UTME score requirement.</i><br><br>

                                <h3> What’s Next?</h3>
                                <p>If you meet the above requirements, please proceed to the Fountain University 
                                    Application Portal to begin your admission process by clicking on the button below.</p>
                                   
                                <a class="btn btn-success" href="{{ 'https://eportal.fuo.edu.ng/applicant' }}">Start My Application</a> <br> <br>

                                <p>For further enquiries, please contact the Admissions Office via<i class='bx bxs-phone-call'></i><a href="tel:+2348160350557">+(234) 8160350557</a></li> or <button class="btn btn-success"> <a href="https://wa.me/8160350557" > Chat with us on WhatsApp</button></p>
</a>
                               <div class="program-info mt-4">
                               <div class="apply-program">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-sm-5 col-md-6">
                                            <div class="content">
                                                <h6>We look forward to welcoming you to Fountain University, where character and learning go hand in hand.</h6>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection