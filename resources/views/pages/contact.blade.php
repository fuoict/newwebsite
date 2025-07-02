@extends('layouts.app')

@section('content')
         <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Contact Us</h2>
                        <p data-aos="fade-up" data-aos-delay="200">For further inquiries, please contact us.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start Contact  Area-->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="contact-content">
                            <div class="header-content">
                                <h2>We’d Love To Hear From You</h2>
                                <p>At Fountain University, Osogbo, we are committed to providing a supportive and enriching academic environment. Whether you're exploring our programs, need help with admissions, or simply have questions, we're here to assist you.</p>
                                <p>Our dedicated staff and college work closely with students from enrollment through graduation, offering personalized support every step of the way. Fountain University proudly offers undergraduate and postgraduate degrees in Business, Education, Natural Sciences, Health Sciences, and Nursing.</p>
                                <p>For verifications, please email <a href="#">officeoftheregistrar@fuo.edu.ng</a></p>
                            </div>

                            <div class="contact-form">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-info">

                         <!-- Start Map Area -->
                        <div id="map" class="map-pd">
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe> --}}
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.607804737812!2d4.5487668999999995!3d7.747119850000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10382814270f4695%3A0xfcbaf1bb12650ead!2sFountain%20University%2C%20Osogbo%2C%20Osogbo!5e0!3m2!1sen!2sng!4v1751472199009!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- End Map Area -->

                        <div class="info-details">
                            <ul>
                                <li><i class='bx bxs-phone-call'></i> General Inquiries - <a href="tel:+2348160350557">+(234) 8160350557</a></li>
                                <li><i class='bx bxs-phone-call'></i> Enrollment Inquiries - <a href="tel:+18554750885">+(234) 8037063960</a></li>
                                <li><i class='bx bxs-map'></i> Oke-Osun, P.M.B. 4491, Osogbo, Osun State, Nigeria</li>
                                <li><i class='bx bxs-envelope'></i><a class="info-mail" href="to:enquiries@fuo.edu.ng">enquiries@fuo.edu.ng</a></li>
                                <li><i class='bx bxs-envelope'></i><a class="info-mail" href="to:officeoftheregistrar@fuo.edu.ng">officeoftheregistrar@fuo.edu.ng</a></li>
                                
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area-->
@endsection