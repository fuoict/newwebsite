@extends('layouts.app')

@section('content')
<!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">The University Library</h2>
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
                                    <li><a href="{{ route('the-university-library') }}">Overview</a></li>
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
                                <h4>Welcome to the University Library</h4>
                                <p>Fountain University, Osogbo was granted an operational license as a Private University on May 2007 by the Federal Government on the recommendation of the National Universities Commission. The desire of the Nasrul-lahi-il-fathi Society of Nigeria (NASFAT) to establish a university was borne out of its educational policy and plan. Fountain University commenced its academic activities on the 12th march, 2008; the university presently occupied the former Muslim Grammar School, Oke-Osun, and Osogbo. Presently, Fountain University Library, Osogbo operates at its temporary location within the University premises. The University has four Colleges which are College of Natural and Applied Sciences (CONAS), College of Management and Social Science (COMAS), College of Basic Medical and Health Sciences (COBMEHS), College of Law (COLAW). The University has a Central Library and a Law Library that support the programs of the colleges.</p>

                                <div class="std-activities">
                                    <div class="graduate-events">
                                        <div class="content-items">
                                            <div class="content p-4" style="width: 100%;">
                                                <h2>Functionalities</h2>
                                                <ul>
                                                    <li>Registration of staff and students</li>
                                                    <li>Provision of access to wide range of textbooks in the open shelves.</li>
                                                    <li>Charging and Discharging of books to staff and students.</li>
                                                    <li>Linking up students with other in institutional Libraries for further research.</li>
                                                    <li>Access to e-library databases</li>
                                                    <li>Periodic training of users on the users on the use of databases</li>
                                                    <li>Assisting users in the course of accessing databases</li>
                                                    <li>Printing and photocopying services/Reprographic Services</li>
                                                    <li>Provision of access to current sources of information such as newspapers.</li>
                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="featured-clubs">
                                        <ul>
                                            <li><h3>About the Centres</h3></li>
                                        </ul>

                                        <div class="clubs-item">
                                            <h4>Mission</h4>
                                            <p>The University Library is to provide a strong research base with global outlets and links to support qualitative teaching and scholarly findings that have community impacts.</p>
                                        </div>
                                        <div class="clubs-item">
                                            <h4>Vision</h4>
                                            <p>The University Library is to be a Centre of Excellence in providing conducive environment for research activities in addition to the provision of adequate prints and resources. The library is to create easy accessibility and connectivity to international databases that will enhance research and development.</p>
                                        </div>
                                        <div class="clubs-item">
                                            <h4>Goal</h4>
                                            <p>To support the academic mission of the university by providing access to a wide range of information resources and services that facilitate teaching, learning, research, and intellectual inquiry. Here are some specific goals of a university library.</p>
                                            
                                            <h4>USER GROUP AND SERVICE HOUR</h4>
                                            <p>The University Library serves a student population of about 2000 and a staff population of about 200.</p>

                                            <h4>Semester</h4>
                                            <p>Mondays to Fridays          | 8:00am-8:00pm</p>
                                            <h6>The library is closed on Sundays and public holidays.</h6>
                                        </div>

                                        <div class="clubs-items">
                                            <h4 class="mb-4">FACILITIES AND SERVICES IN FOUNTAIN UNIVERSITY LIBRARY</h4>
                                            <div class="row">
                                                

                                                <div class="col-lg-6">
                                                    <h4>CONDUCIVE STUDY AREA</h4>
                                                    <p>The temporary Library Building has a total sitting capacity of 140 including the general reading hall, an E-library, circulation area, Staff Offices, Serial/Reference Section and Cataloguing and Classification room. The reading furniture is adequate.</p>
                                                    
                                                </div>

                                                <div class="col-lg-6">
                                                    <h4>REPROGRAPHY & BINDERY</h4>
                                                    <p>There is Reprographic Unit in the Library which carries out photocopy services especially for special library materials that are not expected to be borrowed out. Presently, there is a newly- established bindery unit that would take care of the binding of final year students projects.  Downloaded journal articles are photocopied and bounded for placement on the shelves.</p>
                                                </div>                                                 

                                                <div class="col-lg-6">
                                                    <h4>BROAD COLLECTION BASE</h4>
                                                    <p>Fountain University, Osogbo has a broad collection base of 4 colleges and Post Graduate School, 16 Departments and 18 Programmes/Subject Specializations. Research4life and Lawpavillon databases with over 3,400 e-journals and peer review business publications capable of servicing the four colleges in the University. The e-library also provides access to a good number of free e-books.</p>
                                                </div>

                                                

                                                <div class="col-lg-6">
                                                    <h4>CATALOGUING & CLASSIFICATION: ORGANIZATION OF LIBRARY RESOURCES/MATERIALS</h4>
                                                    <p>The University Library has been automated. The cataloguing and classification of books are carried out using online classification system through the existing internet connectivity in the library. There is provision of OPAC workstation in the library, where staff and students can access the holdings of the library before moving down to the shelf.</p>
                                                </div>

                                                 
                                                
                                                <div class="col-lg-6">
                                                    <h4>SERIAL/REFERENCE SERVICES</h4>
                                                    <p>These two units are presently co-habited in a section. The Serial Unit has both local and International Journals that are adequate to support the existing programmes. University Library subscribes to International Journal titles for every programme. We subscribe to a wide range of local journals too. For logistic reason, library subscribes to five (5) newspapers which are processed and made available at the circulation desk. This is to endure monitoring and control of its use. The newspaper indexing has been introduced.</p>
                                                    <p> The reference unit is responsible for the provision of reference services to the library users using reference tools like Dictionaries, Encyclopedias, Yearbooks, Directories and Online searches for information that are not available in hard format.</p>
                                                </div>  

                                                <div class="col-lg-6">
                                                    <h4>INTERNET & E-RESOURCES</h4>
                                                    <p>The University library has workstations connected to the internet and e-resources. In addition, there are  Computers at the Information and Communication Technology (ICT) Center that are equally connected to the Internet and linked to the Library E-resources. </p>
                                                    <p>The students can connect to the Library E-resources through campus Wi-Fi even while in their hall of residences using their Laptops Computers, Ipads and Androids. The Library provides wide access to e-resources by making available the passwords to all the students and staff.</p>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>INSTITUTIONAL REPOSITORY</h4>
                                                    <p>The University Library hosts the Institutional Repository. Particularly Fountain University College publications are online and accessible from e-library. Past question papers and student’s projects are domesticated and placed online for access to library Users.</p>                                                   
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>ICT TRAINING/ PROFESSIONAL DEVELOPMENT</h4>
                                                    <p>The University Library appreciates the need to train the staff and students in the act of accessing resources in the e-library databases. Training workshop is organized for both staff and students once in a session.</p>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>E-LIBRARY SERVICES</h4>
                                                    <p>The University e-library is a hub of academic activities providing e-resources support to both staff and students in the quest for knowledge advancement. The University Library subscribes to various electronic databases. Also, the University Library is connected to a good number of Open Source databases.</p>
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