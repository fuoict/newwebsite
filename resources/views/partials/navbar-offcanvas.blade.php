{{-- Single source of truth for mobile offcanvas navigation — used by all layouts --}}
<div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1"
    id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="/" class="logo d-inline-block">
            <img class="logo-light w-50" src="{{ asset('img/logo/fuo-logo.png') }}" alt="Fountain University — home">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">
            <div class="accordion-item">
                <a href="/" class="accordion-button active">
                    Home
                </a>
            </div>

            {{-- THE UNIVERSITY --}}
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#offcanvas-collapseTwo" aria-expanded="false" aria-controls="offcanvas-collapseTwo">
                    The University
                </button>
                <div id="offcanvas-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="offcanvas-accordion-university">
                            <div class="accordion-item">
                                <a href="{{ route('about') }}" class="accordion-link">
                                    About the University
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('about-bot') }}" class="accordion-link">
                                    University Board of Trustees
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('about-governing-council') }}" class="accordion-link">
                                    Governing Council
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('the-senate') }}" class="accordion-link">
                                    The Senate
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('congregation') }}" class="accordion-link">
                                    Congregation
                                </a>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapseAdmin"
                                    aria-expanded="false" aria-controls="offcanvas-collapseAdmin">
                                    Principal Officers
                                </button>
                                <div id="offcanvas-collapseAdmin" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-university">
                                    <div class="accordion-body">
                                        <div class="accordion" id="offcanvas-accordion-admin">
                                            <div class="accordion-item">
                                                <a href="{{ route('the-vice-chancellor') }}"
                                                    class="accordion-link">
                                                    The Vice-Chancellor
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('the-dvc') }}"
                                                    class="accordion-link">
                                                    The Deputy Vice-Chancellor
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('the-registrar') }}"
                                                    class="accordion-link">
                                                    The Registrar
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('the-bursar') }}" class="accordion-link">
                                                    The Bursar
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('the-librarian') }}"
                                                    class="accordion-link">
                                                    The Librarian
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <a href="{{ route('our-gallery') }}" class="accordion-link">
                                    Our Gallery
                                </a>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapseShowcase"
                                    aria-expanded="false" aria-controls="offcanvas-collapseShowcase">
                                    Institutional Showcase
                                </button>
                                <div id="offcanvas-collapseShowcase" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-university">
                                    <div class="accordion-body">
                                        <div class="accordion" id="offcanvas-accordion-showcase">
                                            <div class="accordion-item">
                                                <a href="{{ route('partnerships') }}" class="accordion-link">Partnerships</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('donors') }}" class="accordion-link">Donors</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('scholarships') }}" class="accordion-link">Scholarships</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('dignitaries') }}" class="accordion-link">Dignitaries</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('honorary-doctorates') }}" class="accordion-link">Honorary Doctorates</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('convocation-lecturers') }}" class="accordion-link">Convocation Lecturers</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapseResources"
                                    aria-expanded="false" aria-controls="offcanvas-collapseResources">
                                    Resources
                                </button>
                                <div id="offcanvas-collapseResources" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-university">
                                    <div class="accordion-body">
                                        <div class="accordion" id="offcanvas-accordion-resources">
                                            <div class="accordion-item">
                                                <a href="{{ route('general-download') }}"
                                                    class="accordion-link">
                                                    General Downloads
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('students-download') }}"
                                                    class="accordion-link">
                                                    Students' Downloads
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('staff-downloads') }}"
                                                    class="accordion-link">
                                                    Staff Downloads
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ACADEMICS --}}
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#offcanvas-collapseThree" aria-expanded="false" aria-controls="offcanvas-collapseThree">
                    Academics
                </button>
                <div id="offcanvas-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="offcanvas-accordion-academics">
                            <div class="accordion-item">
                                <a href="{{ route('subdegree-programme') }}" class="accordion-link">
                                    Sub-Degree Programmes
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('undergradute-programme') }}" class="accordion-link">
                                    Undergraduate Programmes
                                </a>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapsePG"
                                    aria-expanded="false" aria-controls="offcanvas-collapsePG">
                                    Post-Graduate Programmes
                                </button>
                                <div id="offcanvas-collapsePG" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-academics">
                                    <div class="accordion-body">
                                        <div class="accordion" id="offcanvas-accordion-pg">
                                            <div class="accordion-item">
                                                <a href="{{ route('postgraduate-programme') }}"
                                                    class="accordion-link">
                                                    Postgraduate Programmes
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('the-dean-of-spgs') }}"
                                                    class="accordion-link">
                                                    Office of the Dean
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a target="_blank" rel="noopener noreferrer" href="https://ipss.fuo.edu.ng/" class="accordion-link">
                                    IPSS Programmes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ADMISSIONS --}}
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#offcanvas-collapseFour" aria-expanded="false" aria-controls="offcanvas-collapseFour">
                    Admissions
                </button>
                <div id="offcanvas-collapseFour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="offcanvas-accordion-admissions">
                            <div class="accordion-item">
                                <a href="{{ route('admission-requirement') }}" class="accordion-link">
                                    Admission Requirements
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ 'https://eportal.fuo.edu/applicant/SPGS' }}"
                                    class="accordion-link">
                                    Postgraduate Applications
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ 'https://eportal.fuo.edu/applicant' }}" class="accordion-link">
                                    Undergraduate Applications
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ 'https://eportal.fuo.edu/applicant/sandwich' }}"
                                    class="accordion-link">
                                    Sandwich Applications
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- COLLEGES & INSTITUTES --}}
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#offcanvas-collapseFive" aria-expanded="false" aria-controls="offcanvas-collapseFive">
                    Colleges & Institutes
                </button>
                <div id="offcanvas-collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="offcanvas-accordion-colleges">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapseColleges"
                                    aria-expanded="false" aria-controls="offcanvas-collapseColleges">
                                    Colleges
                                </button>
                                <div id="offcanvas-collapseColleges" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-colleges">
                                    <div class="accordion-body">
                                        <div class="accordion">
                                            @foreach ($Colleges as $College)
                                                <div class="accordion-item">
                                                    <a href="{{ route('colleges.show', $College->slug) }}"
                                                        class="accordion-link">
                                                        {{ $College->college_name }}
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapseInstitutes"
                                    aria-expanded="false" aria-controls="offcanvas-collapseInstitutes">
                                    Institutes
                                </button>
                                <div id="offcanvas-collapseInstitutes" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-colleges">
                                    <div class="accordion-body">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <a href="https://ipss.fuo.edu.ng/" class="accordion-link">
                                                    IPSS
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CENTRES & UNITS --}}
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#offcanvas-collapseCentresUnits" aria-expanded="false"
                    aria-controls="offcanvas-collapseCentresUnits">
                    Centres & Units
                </button>
                <div id="offcanvas-collapseCentresUnits" class="accordion-collapse collapse"
                    data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="offcanvas-accordion-centres-units">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapseCentres"
                                    aria-expanded="false" aria-controls="offcanvas-collapseCentres">
                                    Centres
                                </button>
                                <div id="offcanvas-collapseCentres" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-centres-units">
                                    <div class="accordion-body">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <a href="{{ route('consultancy') }}" class="accordion-link">Centre for Consultancy Services</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('fucrit') }}" class="accordion-link">Centre for Research and Innovation and Technology</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('spiritual-growth') }}" class="accordion-link">Centre for Spiritual Growth and Moral Excellence</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('linkages') }}" class="accordion-link">Centre for Linkages and Advancement</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('arabic-islamic-research') }}" class="accordion-link">Centre for Arabic and Islamic Research, Translation and Immersion Programme</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('sandwich') }}" class="accordion-link">Centre for Sandwich Programmes</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('subdegree') }}" class="accordion-link">Centre for Sub-degree and Professional Programmes</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('entrepreneurship') }}" class="accordion-link">Centre for Entrepreneurship and Skill Acquisition</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#offcanvas-collapseUnits"
                                    aria-expanded="false" aria-controls="offcanvas-collapseUnits">
                                    Units
                                </button>
                                <div id="offcanvas-collapseUnits" class="accordion-collapse collapse"
                                    data-bs-parent="#offcanvas-accordion-centres-units">
                                    <div class="accordion-body">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <a href="{{ route('academicplanning') }}" class="accordion-link">Academic Planning Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('bursary') }}" class="accordion-link">Bursary Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('counselling') }}" class="accordion-link">Counselling Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('ictunit') }}" class="accordion-link">ICT Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('auditunit') }}" class="accordion-link">Internal Audit Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('prounit') }}" class="accordion-link">Public Relations Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('qassurance') }}" class="accordion-link">Quality Assurance Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('registry') }}" class="accordion-link">Registry Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('siwes') }}" class="accordion-link">SIWES Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('sports') }}" class="accordion-link">Sports Unit</a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="{{ route('student-affairs') }}" class="accordion-link">Student Affairs Unit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PUBLICATIONS --}}
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#offcanvas-collapseSix" aria-expanded="false" aria-controls="offcanvas-collapseSix">
                    Publications
                </button>
                <div id="offcanvas-collapseSix" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="offcanvas-accordion-publications">
                            <div class="accordion-item">
                                <a href="{{ 'https://fountainjournals.com' }}" class="accordion-link">
                                    Fountain Journals
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('inaugural-lectures') }}" class="accordion-link">
                                    Inaugural Lectures
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('annual-report') }}" class="accordion-link">
                                    Annual Reports
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('fuo-chronicles') }}" class="accordion-link">
                                    Fountain Chronicles
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="offcanvas-contact-info">
            <h4>Contact Info</h4>
            <ul class="contact-info list-style">
                <li>
                    <i class="bx bxs-envelope"></i>
                    <a href="mailto:officeoftheregistrar@fuo.edu.ng">officeoftheregistrar@fuo.edu.ng</a>
                </li>
                <li>
                    <i class="bx bxs-time"></i>
                    <p>Mon - Fri: 9:00 - 18:00</p>
                </li>
            </ul>
            <ul class="social-profile list-style">
                <li><a href="https://www.facebook.com/fuoweb" target="_blank" rel="noopener noreferrer" aria-label="Fountain University on Facebook"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="https://www.instagram.com/fountain.university/" target="_blank" rel="noopener noreferrer" aria-label="Fountain University on Instagram"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="https://ng.linkedin.com/school/fountain-university-osogbo/" target="_blank" rel="noopener noreferrer" aria-label="Fountain University on LinkedIn"><i class='bx bxl-linkedin'></i></a></li>
            </ul>
        </div>
        <div class="offcanvas-other-options">
            <div class="option-item">
                <a href="{{ 'https://eportal.fuo.edu.ng' }}" class="default-btn">Portal</a>
            </div>
        </div>
    </div>
</div>
