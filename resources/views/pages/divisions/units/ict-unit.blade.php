
@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">ICT Unit</h2>
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
                             <h2 class="title-anim">ICT UNIT</h2>
                            <p class="title-anim">Mission</p>
                            <p>To provide innovative, quality and sustainable ICT solutions and services that meet the aspiration of the University in learning, teaching, research and management.</p>
                            <p>Aims and Objectives</p>
                            <ul>
                                <li>To provide Web development services: Website, portal and software application designing, development, and maintenance.</li>
                                <li>To ensure provisioning of internet access to staff and students. Providing Campus Area Network (CAN) infrastructure including cabling, switches, servers which are the backbone of the internet service.</li>
                                <li>To ensure hardware and software solutions operate optimally</li>
                                <li>Equipment / Service: PCs, Laptops, Printers, Scanners, Plotters, IP Phones, Servers, and Cloud Solutions</li>
                                <li>To train staff and students on IT Services and products and promotes the efficient use of the services above.</li>
                                <li>To equip graduates with modern ICT tools for analyzing and solving Engineering, Scientific and general problems</li>
                                <li>To provide data to enhance the decision-making processes of the university</li>
                                <li>To provide ICT Laboratory services: provide basic functional computer services for users who may not have access to such technology at home or on campus</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="content" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ asset('img/all-img/about-image.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Fountain University, Osogbo</h4>
                                    <p class="title-anim">ICT Unit</p>
                                    <div class="author-info">
                                        <span>Prof Hakeem S. </span>
                                        <h5>Bolarinwa</h5>
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
                            <h2>Information and Communications Technology Unit</h2>
                            <ul>
                                <li style="list-style-type: none"><i class='bx bxs-phone'></i>  +2348050313501, +2347035373028</li>
                                <li style="list-style-type: none"><i class='bx bxs-envelope'></i>  ict@fuo.edu.ng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->

@endsection