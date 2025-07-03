@extends('layouts.app')

@section('content')
 <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
                        {{-- <p data-aos="fade-up" data-aos-delay="200">Get Started with Access to Issues of Fountain Chronicles</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Academics Section Area -->
        <div class="academics-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="academics-left">
                            <div class="ac-category">
                                <ul>
                                    <li><a href="{{ route('the-university-library') }}">Library</a></li>
                                    <li><a href="{{ 'https://google.com' }}">Webmail</a></li>
                                    <li><a class="active" href="">FAQ</a></li>
                                    <li><a href="{{ route('alumni') }}">Alumni</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                 </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-dec">
                                <div class="faq-content">
                                    <div class="faq-item">
                                        <div class="faq-question">What is the portal url</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                        <p>Kindly click on this link https://eportal.fuo.edu.ng to visit our university portal</a></p>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-question">How do I start admission processing?</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                        <p>Visit https://eportal.fuo.edu.ng  or <a href="https://eportal.fuo.edu.ng">click here</a></p>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-question">After filling the admission form, what do I expect?</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                        <p>Expect the admission office to process the admission and admit you from their in-house portal.</p>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-question">If I am admitted, what would I do next ?</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                         <p>You will pay acceptance fee of 75,000</p>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-question">What next after admission and payment of acceptance fee?</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                        <p>You will print provisional admission letter from the portal then to pay your school fees and all other payment pertaining to your college or departments</p>
                                    </div>
                                     <div class="faq-item">
                                        <div class="faq-question">How will I know which payments to make among the listed fees.</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                        <p><p>Contact the bursary unit, or department or level adviser for advice. Fees listed are for your level.</p></p>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-question">When will I do my course registration?</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                        <p>Proceed to course registration after payment of your prescribed fees. Go to your level adviser, as stated on your course form for approval of courses, thereafter print your course form for necessary signatures.</p>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-question">I cannot find some courses on the course list, what will i do?</div>
                                        <div class="icon-container"><i class='bx bx-chevron-down'></i></div>
                                    </div>
                                    <div class="faq-answer">
                                        <p>Make a complaint to you Head of Departments</p>
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