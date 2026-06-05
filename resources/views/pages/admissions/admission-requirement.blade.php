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
                                <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}">Postgraduate Application</a>
                                </li>
                                <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}">Undergraduate Application</a>
                                </li>
                                <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}">Sandwich Application</a>
                                </li>
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
                            <h3> Admission Requirements – 2026/2027 Academic Session</h3>
                            <p>Welcome to Fountain University, Osogbo, a centre of academic excellence and moral
                                uprightness.
                                We are delighted that you are considering joining our vibrant community for the 2026/2027
                                academic session.
                            </p>
                            <p> All prospective candidates are advised to carefully read the following
                                admission requirements before proceeding with their application.
                            </p>

                            <h3> General Admission Requirements</h3>
                            <p>To be eligible for admission into any undergraduate programme at Fountain University,
                                applicants must meet the following criteria:</p>
                            <ul>
                                <li>Minimum Age Requirement: Applicants must be at least 16 years old at the time of
                                    application.</li>
                                <li>UTME Score Requirement: All candidates must have scored a minimum of 150 in the 2026
                                    JAMB Unified Tertiary Matriculation Examination (UTME).</li>
                                <li>O'Level Requirements: Candidates must possess a minimum of five (5) credit passes in
                                    relevant subjects including English Language and Mathematics, obtained at not more than
                                    two sittings in WAEC, NECO, or their equivalent.</li>
                                {{-- </ul>
                            <h3> Direct Entry Admission</h3>
                            <p>For Candidates seeking admission into 200 Level through JAMB Direct Entry,
                                the required points to qualify for admission into any of our Courses
                                from any recognized A-level certification programme is 5 points.
                                However, 7 points apply to Medical Laboratory Science while 9 points apply
                                to both Nursing and Physiotherapy.
                            </p> --}}
                                <h3>Programme-specific UTME cut-off marks</h3>
                                <p>Approved minimum admissible marks for the 2026/2027 admission exercise at Fountain
                                    University, Osogbo. All programmes require a minimum UTME score alongside the Direct
                                    Entry (D/E) point shown.</p>

                                <div style="overflow-x:auto; border:0.5px solid #e0e0e0; border-radius:10px;">
                                    <table style="width:100%; border-collapse:collapse; font-size:14px;">
                                        <thead>
                                            <tr style="background:#f5f5f5;">
                                                <th
                                                    style="padding:10px 14px; text-align:left; font-weight:600; border-bottom:1px solid #ddd;">
                                                    S/N</th>
                                                <th
                                                    style="padding:10px 14px; text-align:left; font-weight:600; border-bottom:1px solid #ddd;">
                                                    College</th>
                                                <th
                                                    style="padding:10px 14px; text-align:left; font-weight:600; border-bottom:1px solid #ddd;">
                                                    Programme</th>
                                                <th
                                                    style="padding:10px 14px; text-align:center; font-weight:600; border-bottom:1px solid #ddd;">
                                                    UTME</th>
                                                <th
                                                    style="padding:10px 14px; text-align:center; font-weight:600; border-bottom:1px solid #ddd;">
                                                    D/E</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- COMAS -->
                                            <tr style="background:#f9f9f9;">
                                                <td colspan="5"
                                                    style="padding:8px 14px; font-weight:600; font-size:13px; color:#555;">
                                                    COMAS — College of Management &amp; Social Sciences</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">1</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Accounting
                                                </td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">2</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Banking &amp;
                                                    Finance</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">3</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Business
                                                    Administration</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">4</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Criminology
                                                    &amp; Security Studies</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">5</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Economics
                                                </td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">6</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Mass
                                                    Communication</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600; color:#2e7d32;">
                                                    160</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">7</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Political
                                                    Science</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">8</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Public
                                                    Administration</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">9</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Sociology
                                                </td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">10</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Library &amp;
                                                    Information Science</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>

                                            <!-- CONAS -->
                                            <tr style="background:#f9f9f9;">
                                                <td colspan="5"
                                                    style="padding:8px 14px; font-weight:600; font-size:13px; color:#555;">
                                                    CONAS — College of Natural &amp; Applied Sciences</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">11</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    CONAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Biochemistry
                                                    &amp; Nutrition</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">12</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    CONAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Electronics
                                                    &amp; Communication</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">13</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    CONAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Electronics
                                                    &amp; Computer Systems</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">14</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    CONAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Industrial
                                                    &amp; Environmental Chemistry</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">15</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    CONAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Microbiology
                                                </td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">16</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    CONAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Food Science
                                                    &amp; Technology</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">17</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    CONAS</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Physics with
                                                    Electronics</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>

                                            <!-- COMPUTING -->
                                            <tr style="background:#f9f9f9;">
                                                <td colspan="5"
                                                    style="padding:8px 14px; font-weight:600; font-size:13px; color:#555;">
                                                    COMPUTING — College of Computing</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">18</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMPUTING</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Computer
                                                    Science</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600; color:#1565c0;">
                                                    170</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    06</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">19</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMPUTING</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Software
                                                    Engineering</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">20</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMPUTING</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">
                                                    Cybersecurity</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">21</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COMPUTING</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Information
                                                    &amp; Communication Technology</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>

                                            <!-- COBMHES -->
                                            <tr style="background:#f9f9f9;">
                                                <td colspan="5"
                                                    style="padding:8px 14px; font-weight:600; font-size:13px; color:#555;">
                                                    COBMHES — College of Basic Medical, Health &amp; Environmental Sciences
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">22</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COBMHES</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">
                                                    Environmental Health Science</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">23</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COBMHES</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Medical
                                                    Laboratory Science</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600; color:#1565c0;">
                                                    190</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    08</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">24</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COBMHES</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Nursing
                                                    Science</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600; color:#b71c1c;">
                                                    220</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    10</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">25</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COBMHES</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Public
                                                    Health</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    05</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">26</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COBMHES</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Doctor of
                                                    Physiotherapy</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600; color:#b71c1c;">
                                                    200</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    10</td>
                                            </tr>

                                            <!-- COAED -->
                                            <tr style="background:#f9f9f9;">
                                                <td colspan="5"
                                                    style="padding:8px 14px; font-weight:600; font-size:13px; color:#555;">
                                                    COAED — College of Arts, Education &amp; Humanities</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">27</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Arabic</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">28</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">English</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">29</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">French</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">30</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">History
                                                    &amp; International Studies</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">31</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Islamic
                                                    Studies</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">32</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Linguistics
                                                </td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">33</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Education
                                                    &amp; Arabic</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">34</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Education
                                                    &amp; English</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">35</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Education
                                                    &amp; Islamic Studies</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">36</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Education
                                                    &amp; Economics</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">37</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COAED</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Education
                                                    &amp; Computer Science</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600;">
                                                    150</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    04</td>
                                            </tr>

                                            <!-- COLAW -->
                                            <tr style="background:#f9f9f9;">
                                                <td colspan="5"
                                                    style="padding:8px 14px; font-weight:600; font-size:13px; color:#555;">
                                                    COLAW — College of Law</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">38</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COLAW</td>
                                                <td style="padding:9px 14px; border-bottom:1px solid #f0f0f0;">Common Law
                                                </td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; font-weight:600; color:#b71c1c;">
                                                    220</td>
                                                <td
                                                    style="padding:9px 14px; border-bottom:1px solid #f0f0f0; text-align:center; color:#777;">
                                                    10</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:9px 14px;">39</td>
                                                <td
                                                    style="padding:9px 14px; font-size:12px; color:#777; text-transform:uppercase;">
                                                    COLAW</td>
                                                <td style="padding:9px 14px;">Common &amp; Islamic Law</td>
                                                <td
                                                    style="padding:9px 14px; text-align:center; font-weight:600; color:#b71c1c;">
                                                    200</td>
                                                <td style="padding:9px 14px; text-align:center; color:#777;">09</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <i>Candidates applying for any of the above-listed programmes must meet both the
                                    general admission criteria and the programme-specific UTME score
                                    requirement.</i><br><br>

                                <h3> What’s Next?</h3>
                                <p>If you meet the above requirements, please proceed to the Fountain University
                                    Application Portal to begin your admission process by clicking on the button below.</p>

                                <a class="btn btn-success" href="{{ 'https://eportal.fuo.edu.ng/applicant' }}">Start My
                                    Application</a> <br> <br>

                                <p>For further enquiries, please contact the Admissions Office via<i
                                        class='bx bxs-phone-call'></i><a href="tel:+2348160350557">+(234) 8160350557</a>
                                    </li> or
                                    <button class="btn btn-success"> <a href="https://wa.me/8160350557"> Chat with us on
                                            WhatsApp</button>
                                </p>
                                </a>
                                <div class="program-info mt-4">
                                    <div class="apply-program">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12 col-sm-5 col-md-6">
                                                <div class="content">
                                                    <h6>We look forward to welcoming you to Fountain University, where
                                                        character
                                                        and learning go hand in hand.</h6>
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
