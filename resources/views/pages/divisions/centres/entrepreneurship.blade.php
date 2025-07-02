@extends('layouts.app')

@section('content')
<!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Centre for Entrepreneurship and Skill Acquisition</h2>
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
                                    <li><img src="" alt=""></li>
                                    <li><a href="{{ route('consultancy') }}">Overview</a></li>
                                    <li><a href="{{ route('our-campus') }}">The Campus Experience</a></li>
                                    <li><a href="{{ route('sports') }}">Sport</a></li>
                                    <li><a href="{{ route('counselling') }}">Counseling and Guidance</a></li>
                                    <li><a class="active" href="{{ route('entrepreneurship') }}">Entrepreneurship</a></li>
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
                                <h4>Welcome to the Centre for Entrepreneurship and Skill Acquisition</h4>
                                <p>As-salam alaykum warahmatullahi wabarakatuhu.</p>
                                <p>It is with immense pleasure and enthusiasm that I extend a warm welcome to every one of you to the Centre for Entrepreneurship and Skill Acquisition. Today marks the commencement of a thrilling journey dedicated to fostering innovation, creativity, and entrepreneurial spirit.</p>
                                <p>In this dynamic centre, we aspire to cultivate a vibrant ecosystem where individuals from diverse backgrounds can come together to explore their entrepreneurial potential, acquire essential skills, and unleash their creative energies. Whether you are an aspiring entrepreneur, a seasoned business professional, or simply someone with a passion for innovation, this center is your gateway to limitless possibilities.</p>
                                <p>As we embark on this journey together, I encourage each of you to embrace curiosity, embrace collaboration, and embrace the spirit of entrepreneurship. Together, let us seize the opportunities that lie ahead and make a lasting impact on our communities and the world at large.</p>
                                <p>Once again, welcome to the Centre for Entrepreneurship and Skill Acquisition. Here’s to a future filled with endless possibilities and boundless success.</p>
                                <p>Thank you.</p>

                                <div class="std-activities">
                                    <div class="graduate-events">
                                        <div class="content-items">
                                            <div class="content">
                                                <h2>AREMU, </h2>
                                                <p>Muideen Olawale</p>
                                                <p>Director, Centre for Entrepreneurship and Skill Acquisition, Fountain University, Osogbo, Osun State, Nigeria.</p>
                                                <p></p>
                                               
                                            </div>
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/units/aremu.jpg') }}" alt="image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="featured-clubs">
                                        <ul>
                                            <li><h3>About the Centres</h3></li>
                                        </ul>

                                        <div class="clubs-item">
                                            <span>Entrepreneurship is the backbone of economic growth and societal progress. It is through the entrepreneurial mindset that groundbreaking ideas are transformed into successful ventures, creating jobs, driving innovation, and making a positive impact on communities. The Center for Entrepreneurship is committed to nurturing and supporting aspiring entrepreneurs to turn their visions into reality.</span>
                                            <span>Our center is a hub of resources, knowledge, and support for entrepreneurs at all stages of their journey. Whether you are a budding entrepreneur with a promising idea, a startup looking to scale up, or an established business seeking to innovate, the Center for Entrepreneurship is here to guide and empower you.</span>
                                            <span>At our center, we offer a wide range of programs and initiatives designed to develop the skills, mindset, and networks necessary for entrepreneurial success. From mentorship programs and business incubators to workshops and networking events, we provide a nurturing environment where ideas can flourish, and entrepreneurs can thrive.</span>
                                            <span>We believe that entrepreneurship is not just about starting businesses; it is a way of thinking and approaching challenges with creativity, resilience, and a willingness to take calculated risks. Our aim is to help individuals develop this entrepreneurial mindset and equip them with the tools and knowledge needed to navigate the ever-changing business landscape.</span>
                                            <span>Through our partnerships with industry leaders, investors, and mentors, we provide access to valuable resources, expertise, and funding opportunities. We believe in the power of collaboration and networking, as the exchange of ideas and experiences can spark new innovations and open doors to endless possibilities.</span>
                                            <span>I encourage each and every one of you to take full advantage of the resources and opportunities offered by the Center for Entrepreneurship. Embrace the spirit of entrepreneurship, dare to dream big, and let your passion drive you towards success. Remember, every great journey starts with a single step, and today, you have taken that step toward a future filled with endless possibilities.</span>

                                            <h4>Mission</h4>
                                            <p>To inspire, educate, and empower individuals with the entrepreneurial mindset, skills, and resources needed to drive innovation, create value, and make a positive impact in society.</p>
                                        </div>
                                        <div class="clubs-item">
                                            <h4>Vision</h4>
                                            <p>To be a leading institution in fostering entrepreneurial intention among our students, equipping them to become job providers and solution providers in a rapidly evolving global economy.</p>
                                        </div>
                                        <div class="clubs-item">
                                            {{-- <span>4th Workshop “Advanced Materials”</span> --}}
                                            <h4>Composition</h4>
                                            <p>The Center for Consultancy Service is comprised of a multidisciplinary team of experienced consultants, researchers, and industry experts. Our diverse backgrounds and expertise enable us to offer a wide range of Entrepreneurship and Skill Acquisition across various sectors and industries.</p>
                                            
                                            <h4>Aim & Objectives</h4>
                                            <p>To foster an ecosystem that supports the development and growth of entrepreneurial ventures, including access to mentorship, funding, and networking opportunities.</p>
                                        </div>

                                        <div class="clubs-items">
                                            <h4>Our Sections</h4>
                                            <div class="row">
                                                

                                                <div class="col-lg-4">
                                                    <h4>Entrepreneurship pre-vocation</h4>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>Entrepreneurship vocation</h4>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>Entrepreneurship practical</h4>
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
        </div>
        <!-- End Academics Section Area -->

@endsection