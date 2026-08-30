@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Bursary Unit</h2>
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
                             <h2 class="title-anim">Bursary Unit</h2>
                            <p class="title-anim">Welcome to the Bursary Unit of Fountain University, Osogbo. The Bursary Unit is the financial heartbeat of the University, responsible for the management and administration of all financial resources to ensure transparency, accountability, and efficient service delivery.</p>
                            <p>Our dedicated team of financial professionals works diligently to uphold the highest standards of financial integrity while supporting the University's mission of providing quality education. We are committed to ensuring that every financial transaction is conducted with utmost professionalism and in compliance with established financial regulations and policies.</p>
                            <p>In carrying out its responsibilities, the Bursary Unit:</p>
                            <ul>
                                <li>Manages the University's financial operations, including budget preparation, execution, and monitoring.</li>
                                <li>Processes salary payments, allowances, and other financial entitlements for staff and faculty members.</li>
                                <li>Oversees the collection of tuition fees, acceptance fees, and other charges from students.</li>
                                <li>Maintains accurate and up-to-date financial records and books of accounts in line with approved accounting standards.</li>
                                <li>Prepares financial statements, reports, and returns for management, government, and regulatory agencies.</li>
                                <li>Coordinates internal financial controls and ensures compliance with university financial regulations and extant government financial guidelines.</li>
                                <li>Processes payments to vendors, contractors, and suppliers in accordance with established procurement procedures.</li>
                                <li>Manages pension, gratuity, and other retirement benefit schemes for staff of the University.</li>
                                <li>Provides financial advisory services to management for informed decision-making and strategic planning.</li>
                                <li>Coordinates external audit exercises and ensures implementation of audit recommendations.</li>
                            </ul>
                            <h4>Vision</h4>
                            <p>To be a model of financial excellence, transparency, and accountability in the Nigerian university system.</p>
                            <h4>Mission</h4>
                            <p>To provide efficient, transparent, and accountable financial management services that support the University's strategic objectives and ensure the judicious use of resources for the advancement of teaching, research, and community service.</p>
                            <h4>Philosophy</h4>
                            <p>Our philosophy is rooted in integrity, transparency, and accountability. We believe that sound financial management is the foundation upon which institutional excellence is built, and we are committed to upholding the highest ethical standards in all our financial operations.</p>
                            <h4>Our Core Functions</h4>
                            <ul>
                                <li>Budget Management and Financial Planning</li>
                                <li>Revenue Collection and Management</li>
                                <li>Payroll and Staff Financial Services</li>
                                <li>Financial Reporting and Analysis</li>
                                <li>Procurement and Payment Processing</li>
                                <li>Internal Controls and Compliance</li>
                                <li>Pension and Gratuity Administration</li>
                                <li>External Audit Coordination</li>
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
                                    <p class="title-anim">Bursary Unit</p>
                                    <div class="author-info">
                                        <span>Dr. S.S. </span>
                                        <h5>Balogun</h5>
                                        <p>Bursar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->

        <!-- Start Mission Area -->
        <div class="academics-area bg-color-1 ptb-100" >
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i> <p>Our Core Functions</p>
                    </div>
                    <h2>Mission, Vision, and Philosophy</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                            <h4>Mission</h4>
                            <p>To provide efficient, transparent, and accountable financial management services that support the University's strategic objectives and ensure the judicious use of resources for the advancement of teaching, research, and community service.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('img/icon/education-2.png') }}" alt="icon">
                            <h4>Vision</h4>
                            <p>To be a model of financial excellence, transparency, and accountability in the Nigerian university system.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('img/icon/education-3.png') }}" alt="icon">
                            <h4>Philosophy</h4>
                            <p>Our philosophy is rooted in integrity, transparency, and accountability. We believe that sound financial management is the foundation upon which institutional excellence is built.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mission Area -->

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
                            <h2>Bursary Unit</h2>
                            <ul>
                                <li style="list-style-type: none"><i class='bx bxs-phone'></i>  +234 (0) 803 706 3960</li>
                                <li style="list-style-type: none"><i class='bx bxs-envelope'></i>  Email: bursary@fuo.edu.ng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->

@endsection