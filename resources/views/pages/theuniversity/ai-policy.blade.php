@extends('layouts.app')

@section('content')
    <style>
        /* ── AI Policy page (scoped ap- styles) ── */
        .ap-hero {
            background: linear-gradient(135deg, #0a7a4b 0%, #035f39 55%, #06301e 100%);
            color: #fff;
            border-radius: 20px;
            padding: 40px 44px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 18px 44px rgba(3, 95, 57, 0.18);
        }

        .ap-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(110% 130% at 88% 0%, rgba(255, 255, 255, 0.14), transparent 55%);
            pointer-events: none;
        }

        .ap-hero .ap-eyebrow {
            display: inline-block;
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.28);
            color: #fff;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: 999px;
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
        }

        .ap-hero h1 {
            font-size: clamp(1.6rem, 3.4vw, 2.4rem);
            font-weight: 800;
            margin: 0 0 8px;
            position: relative;
            z-index: 1;
        }

        .ap-hero p {
            margin: 0;
            opacity: 0.9;
            font-size: 1.02rem;
            position: relative;
            z-index: 1;
        }

        .ap-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 22px;
            position: relative;
            z-index: 1;
        }

        .ap-meta span {
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 0.82rem;
            font-weight: 500;
        }

        .ap-actions {
            margin-top: 26px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            position: relative;
            z-index: 1;
        }

        .ap-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        .ap-btn-doc {
            background: #c9a227;
            color: #241f04;
            box-shadow: 0 10px 24px rgba(201, 162, 39, 0.35);
        }

        .ap-btn-doc:hover {
            background: #d9b23c;
            color: #241f04;
            transform: translateY(-2px);
        }

        .ap-btn-print {
            background: rgba(255, 255, 255, 0.14);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.35);
        }

        .ap-btn-print:hover {
            background: rgba(255, 255, 255, 0.24);
            color: #fff;
            transform: translateY(-2px);
        }

        /* Table of contents */
        .ap-toc {
            background: #fff;
            border: 1px solid #e7ece9;
            border-radius: 16px;
            box-shadow: 0 10px 28px rgba(8, 43, 26, 0.06);
            padding: 22px 22px 18px;
            position: sticky;
            top: 96px;
            max-height: calc(100vh - 130px);
            overflow-y: auto;
        }

        .ap-toc h3 {
            font-size: 0.92rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #082b1a;
            margin: 0 0 14px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eef4f0;
        }

        .ap-toc ol {
            list-style: none;
            counter-reset: ap;
            margin: 0;
            padding: 0;
        }

        .ap-toc li {
            counter-increment: ap;
        }

        .ap-toc a {
            display: flex;
            gap: 10px;
            padding: 8px 10px;
            border-radius: 10px;
            color: #3c4a43;
            text-decoration: none;
            font-size: 0.9rem;
            line-height: 1.45;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .ap-toc a::before {
            content: counter(ap, decimal-leading-zero);
            color: #035f39;
            font-weight: 700;
            font-size: 0.8rem;
            padding-top: 1px;
        }

        .ap-toc a:hover,
        .ap-toc a.ap-active {
            background: #eef4f0;
            color: #035f39;
        }

        .ap-toc details summary {
            font-weight: 700;
            color: #082b1a;
            cursor: pointer;
            padding: 4px 0 10px;
        }

        /* Document body */
        .ap-doc {
            background: #fff;
            border: 1px solid #e7ece9;
            border-radius: 16px;
            box-shadow: 0 10px 28px rgba(8, 43, 26, 0.06);
            padding: clamp(24px, 4vw, 48px);
        }

        .ap-section {
            padding-top: 8px;
            margin-bottom: 38px;
            scroll-margin-top: 90px;
        }

        .ap-section:last-child { margin-bottom: 0; }

        .ap-section-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }

        .ap-num {
            flex: none;
            width: 46px;
            height: 46px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #0a7a4b, #035f39);
            color: #fff;
            font-weight: 800;
            font-size: 0.92rem;
            box-shadow: 0 8px 18px rgba(3, 95, 57, 0.25);
        }

        .ap-section-head h2 {
            margin: 0;
            font-size: clamp(1.15rem, 2.2vw, 1.45rem);
            font-weight: 800;
            color: #082b1a;
            line-height: 1.3;
        }

        .ap-doc h3 {
            font-size: 1.06rem;
            font-weight: 700;
            color: #035f39;
            margin: 26px 0 10px;
        }

        .ap-doc p {
            color: #46554d;
            line-height: 1.8;
            margin: 0 0 14px;
        }

        .ap-list {
            list-style: none;
            margin: 0 0 16px;
            padding: 0;
        }

        .ap-list li {
            position: relative;
            padding: 0 0 12px 30px;
            color: #46554d;
            line-height: 1.75;
        }

        .ap-list li::before {
            content: "";
            position: absolute;
            left: 4px;
            top: 10px;
            width: 9px;
            height: 9px;
            border-radius: 3px;
            background: linear-gradient(135deg, #0a7a4b, #035f39);
            transform: rotate(45deg);
        }

        .ap-list li strong { color: #082b1a; }

        .ap-callout {
            background: #f4f8f6;
            border-left: 4px solid #035f39;
            border-radius: 0 14px 14px 0;
            padding: 20px 24px;
            margin: 0 0 18px;
        }

        .ap-callout p { margin: 0; color: #2f4a3d; font-style: italic; }

        /* Tables */
        .ap-table-wrap {
            overflow-x: auto;
            margin: 0 0 18px;
            border: 1px solid #e7ece9;
            border-radius: 12px;
        }

        .ap-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.92rem;
            min-width: 520px;
        }

        .ap-table th,
        .ap-table td {
            padding: 12px 14px;
            text-align: left;
            vertical-align: top;
            border-bottom: 1px solid #eef4f0;
            line-height: 1.65;
            color: #46554d;
        }

        .ap-table th {
            background: #f4f8f6;
            color: #082b1a;
            font-weight: 800;
            font-size: 0.84rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .ap-table td strong { color: #082b1a; }
        .ap-table tr:last-child td { border-bottom: none; }

        .ap-tick {
            display: inline-block;
            margin: 0 14px 6px 0;
            white-space: nowrap;
        }

        /* Role grid */
        .ap-role-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 16px;
            margin-top: 6px;
        }

        .ap-role {
            background: #fbfdfc;
            border: 1px solid #e7ece9;
            border-radius: 14px;
            padding: 20px 20px 8px;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .ap-role:hover {
            transform: translateY(-4px);
            border-color: rgba(3, 95, 57, 0.25);
            box-shadow: 0 14px 32px rgba(8, 43, 26, 0.12);
        }

        .ap-role h4 {
            margin: 0 0 10px;
            font-size: 0.98rem;
            font-weight: 800;
            color: #082b1a;
            padding-bottom: 10px;
            border-bottom: 2px solid #eef4f0;
        }

        .ap-role .ap-role-note {
            font-size: 0.86rem;
            color: #5a6b62;
            line-height: 1.65;
            margin: 0 0 10px;
        }

        .ap-role .ap-list li { padding-bottom: 10px; font-size: 0.92rem; }

        .ap-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 8px;
        }

        .ap-chips span {
            background: #eef4f0;
            color: #0f3a26;
            border: 1px solid #d8e6de;
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 0.88rem;
            font-weight: 600;
        }

        .ap-note {
            font-size: 0.86rem;
            color: #7a8a81;
            font-style: italic;
            margin: -6px 0 16px;
        }

        .ap-end {
            text-align: center;
            margin-top: 40px;
            padding-top: 26px;
            border-top: 2px dashed #e2eae6;
        }

        .ap-end a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #035f39;
            font-weight: 700;
            text-decoration: none;
        }

        .ap-end a:hover { text-decoration: underline; }

        @media (max-width: 992px) {
            .ap-toc { position: static; max-height: none; margin-bottom: 24px; }
        }

        @media print {
            .section-banner, .ap-hero .ap-actions, .ap-toc, .ap-end, footer, nav { display: none !important; }
            .ap-hero { box-shadow: none; }
            .ap-doc, .ap-hero { border: none; box-shadow: none; }
        }
    </style>

    <!-- Start Section Banner Area -->
    <div class="section-banner bg-3">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">AI Policy</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo, Osun State, Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Banner Area -->

    <div class="container py-100">
        <!-- Document header -->
        <div class="ap-hero" data-aos="fade-up">
            <span class="ap-eyebrow">Institutional Policy Document</span>
            <h1>Fountain University AI Policy</h1>
            <p>Institutional policy on the use of artificial intelligence in teaching, learning, research and administration.</p>
            <div class="ap-meta">
                <span>&#127891; 2026 Edition</span>
                <span>&#128220; Draft v1.0 &mdash; for Senate consideration</span>
                <span>&#9998; Fountain University, Osogbo</span>
            </div>
            <div class="ap-actions">
                <a href="{{ asset('downloads/fuo-ai-policy-2026-draft.docx') }}" class="ap-btn ap-btn-doc" download>
                    <i class='bx bxs-download'></i> Download Document
                </a>
                <a href="javascript:window.print()" class="ap-btn ap-btn-print">
                    <i class='bx bx-printer'></i> Print
                </a>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Table of contents -->
            <div class="col-lg-4">
                <div class="ap-toc" data-aos="fade-up">
                    <h3>Table of Contents</h3>
                    <details open>
                        <summary class="d-lg-none">Show sections</summary>
                        <ol>
                            <li><a href="#ap-introduction">Introduction</a></li>
                            <li><a href="#ap-definitions">Definitions and Acronyms</a></li>
                            <li><a href="#ap-scope">Scope and Objectives</a></li>
                            <li><a href="#ap-principles">Guiding Principles</a></li>
                            <li><a href="#ap-stakeholders">Stakeholders, Roles &amp; Responsibilities</a></li>
                            <li><a href="#ap-learning">AI in Learning and Assessment</a></li>
                            <li><a href="#ap-teaching">AI in Teaching</a></li>
                            <li><a href="#ap-research">AI in Research and Postgraduate Work</a></li>
                            <li><a href="#ap-administration">AI in Administration and Communications</a></li>
                            <li><a href="#ap-data">Data Protection, Privacy, Security &amp; IP</a></li>
                            <li><a href="#ap-integrity">Academic Integrity, Detection &amp; Due Process</a></li>
                            <li><a href="#ap-literacy">AI Literacy, Training and Capacity Building</a></li>
                            <li><a href="#ap-equity">Equity, Access and Infrastructure</a></li>
                            <li><a href="#ap-approval">Approval of AI Tools and Initiatives</a></li>
                            <li><a href="#ap-monitoring">Monitoring, Evaluation and Review</a></li>
                            <li><a href="#ap-implementation">Implementation Plan</a></li>
                            <li><a href="#ap-breaches">Breaches and Sanctions</a></li>
                            <li><a href="#ap-conclusion">Conclusion</a></li>
                            <li><a href="#ap-appendices">Appendices A &ndash; C</a></li>
                        </ol>
                    </details>
                </div>
            </div>

            <!-- Document body -->
            <div class="col-lg-8">
                <article class="ap-doc" data-aos="fade-up" data-aos-delay="100">

                    <!-- 1.0 Introduction -->
                    <section class="ap-section" id="ap-introduction">
                        <div class="ap-section-head">
                            <span class="ap-num">1.0</span>
                            <h2>Introduction</h2>
                        </div>
                        <p>Artificial Intelligence (AI), and generative AI in particular, has moved within a short period from specialist laboratories into the daily study, teaching, research and administrative routines of universities. Students now draft, summarise, translate and code with AI tools; lecturers prepare materials and feedback with them; and administrative offices are being offered AI systems for admissions, records and communication. Fountain University recognises that these tools carry real benefits and real risks, and that silence on the matter leaves students, staff and the institution exposed.</p>
                        <p>This policy builds on the University's Institutional E-Learning Policy (2024 Revised Edition), which committed Fountain University to mixed-mode, faith-based education enhanced by Information and Communication Technology (ICT). It sets out how AI may be used responsibly across the University so that it strengthens, rather than displaces, genuine learning, honest scholarship and sound character. Driven by our vision of excellence in scholarship, service and character development, the University believes that well-governed AI can:</p>
                        <ul class="ap-list">
                            <li><strong>Deepen learning:</strong> provide explanation, practice and feedback on demand, adapted to the pace and needs of each learner.</li>
                            <li><strong>Widen access:</strong> support students with disabilities, those learning in a second language, and those studying at a distance.</li>
                            <li><strong>Strengthen teaching and research:</strong> relieve staff of routine tasks so that more time is spent on mentoring, inquiry and quality.</li>
                            <li><strong>Prepare graduates for the future:</strong> equip students with the AI literacy, judgement and ethics demanded by employers and society.</li>
                        </ul>
                        <p>At the same time, the University is clear that AI cannot think, believe, take responsibility or bear witness to the truth on anyone's behalf. Responsibility for every piece of work submitted, every grade awarded and every decision taken at Fountain University remains with identifiable human beings.</p>

                        <h3 id="ap-vision">1.1 &nbsp; Vision</h3>
                        <div class="ap-callout">
                            <p>To be the premier Islamic university producing capable, ingenious and upright graduates who use artificial intelligence with competence, honesty and moral responsibility for the good of society.</p>
                        </div>

                        <h3>1.2 &nbsp; Mission</h3>
                        <div class="ap-callout">
                            <p>To foster an environment in which artificial intelligence enhances faith-based teaching, learning, research and service at Fountain University, governed by Islamic ethical values, the laws of the Federal Republic of Nigeria and the highest standards of academic integrity.</p>
                        </div>

                        <h3>1.3 &nbsp; Rationale for the Policy</h3>
                        <p>This policy is a commitment to clarity and fairness. Without it, students face inconsistent expectations from one course to another, staff lack guidance on what is permitted, misconduct cases risk being decided on unreliable evidence, and personal data may be exposed through careless use of external tools. This document therefore provides:</p>
                        <ul class="ap-list">
                            <li>A common framework, applied course by course, that tells students exactly what level of AI use is permitted in each assessment;</li>
                            <li>Clear duties of disclosure for students, staff and researchers;</li>
                            <li>Safeguards for personal data, confidential information and intellectual property;</li>
                            <li>A fair, evidence-based procedure for handling suspected AI-related misconduct;</li>
                            <li>Governance structures, training commitments and review mechanisms that allow the policy to keep pace with a fast-moving technology.</li>
                        </ul>

                        <h3>1.4 &nbsp; Legal and Regulatory Context</h3>
                        <p>This policy shall be read together with, and is subordinate to, the following instruments as amended from time to time:</p>
                        <ul class="ap-list">
                            <li><strong>Nigeria Data Protection Act, 2023 (NDPA)</strong> and the NDPA General Application and Implementation Directive, 2025 (GAID), issued by the Nigeria Data Protection Commission (NDPC), which govern the processing of personal data, require Data Protection Impact Assessments for high-risk processing such as automated decision-making, and protect individuals from decisions based solely on automated processing.</li>
                            <li><strong>Copyright Act, 2022</strong>, in respect of materials uploaded to, or produced with, AI tools.</li>
                            <li><strong>The National Artificial Intelligence Strategy</strong> published by the Federal Ministry of Communications, Innovation and Digital Economy, which the University supports through responsible adoption and AI-skills development.</li>
                            <li><strong>Regulations, guidelines and the Core Curriculum and Minimum Academic Standards (CCMAS) of the National Universities Commission (NUC).</strong> The NUC has indicated that it is developing a National AI Roadmap and Policy Framework for the Nigerian University System; upon its issuance, this policy shall be reviewed and aligned with it.</li>
                            <li><strong>The UNESCO Guidance for Generative AI in Education and Research (2023)</strong>, as a reference for good international practice.</li>
                            <li><strong>The University's own statutes</strong>, Student Handbook, examination regulations, staff conditions of service, research ethics guidelines and the Institutional E-Learning Policy.</li>
                        </ul>
                        <div class="ap-callout">
                            <p>Where any provision of this policy conflicts with national law or an applicable NUC directive, the law or directive shall prevail.</p>
                        </div>
                    </section>

                    <!-- 2.0 Definitions -->
                    <section class="ap-section" id="ap-definitions">
                        <div class="ap-section-head">
                            <span class="ap-num">2.0</span>
                            <h2>Definitions and Acronyms</h2>
                        </div>
                        <p>In this policy, unless the context otherwise requires:</p>
                        <div class="ap-table-wrap">
                            <table class="ap-table">
                                <thead>
                                    <tr><th style="width: 30%;">Term</th><th>Meaning</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><strong>Artificial Intelligence (AI)</strong></td><td>Computer systems that perform tasks normally requiring human intelligence, such as generating text, images, audio or code, analysing data, translating, predicting or making recommendations.</td></tr>
                                    <tr><td><strong>Generative AI</strong></td><td>AI that produces new content (text, images, audio, video, code) in response to prompts, for example large language model chatbots and image generators.</td></tr>
                                    <tr><td><strong>AI tool</strong></td><td>Any software, application, platform, browser extension or feature that uses AI, whether free, paid or embedded in other software (including word processors and search engines).</td></tr>
                                    <tr><td><strong>Approved AI tool</strong></td><td>An AI tool listed on the University's Register of Approved AI Tools maintained under Section 14.</td></tr>
                                    <tr><td><strong>AI-assisted work</strong></td><td>Work produced by a person who used AI for part of the process, with the person directing, evaluating and taking responsibility for the final product.</td></tr>
                                    <tr><td><strong>AI-generated content</strong></td><td>Content produced substantially by an AI tool with little or no human creative or intellectual contribution.</td></tr>
                                    <tr><td><strong>AI-Use Statement</strong></td><td>A short declaration, in the form in Appendix B, describing which AI tools were used, how, and for what purpose.</td></tr>
                                    <tr><td><strong>AI detection tool</strong></td><td>Software that claims to estimate whether text or other content was produced by AI.</td></tr>
                                    <tr><td><strong>Automated decision</strong></td><td>A decision taken solely by automated means, without meaningful human review, that produces legal or similarly significant effects for a person.</td></tr>
                                    <tr><td><strong>Hallucination</strong></td><td>False, fabricated or unsupported output presented by an AI tool as fact, including invented references.</td></tr>
                                    <tr><td><strong>Personal data</strong></td><td>Any information relating to an identified or identifiable natural person, as defined in the NDPA.</td></tr>
                                    <tr><td><strong>Staff</strong></td><td>All academic, non-teaching, part-time, visiting and contract staff of the University.</td></tr>
                                    <tr><td><strong>Student</strong></td><td>Any person registered on a programme of the University at any level and by any mode of study.</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <h3>Acronyms</h3>
                        <div class="ap-chips">
                            <span>AI &mdash; Artificial Intelligence</span>
                            <span>CCMAS &mdash; Core Curriculum and Minimum Academic Standards</span>
                            <span>DPIA &mdash; Data Protection Impact Assessment</span>
                            <span>DPO &mdash; Data Protection Officer</span>
                            <span>GAID &mdash; General Application and Implementation Directive</span>
                            <span>ICT &mdash; Information and Communication Technology</span>
                            <span>LMS &mdash; Learning Management System</span>
                            <span>NDPA &mdash; Nigeria Data Protection Act</span>
                            <span>NDPC &mdash; Nigeria Data Protection Commission</span>
                            <span>NUC &mdash; National Universities Commission</span>
                            <span>UNESCO &mdash; United Nations Educational, Scientific and Cultural Organization</span>
                            <span>WCAG &mdash; Web Content Accessibility Guidelines</span>
                        </div>
                    </section>

                    <!-- 3.0 Scope and Objectives -->
                    <section class="ap-section" id="ap-scope">
                        <div class="ap-section-head">
                            <span class="ap-num">3.0</span>
                            <h2>Scope and Objectives of the Policy</h2>
                        </div>

                        <h3>3.1 &nbsp; Scope</h3>
                        <p>This policy applies to all students and staff of Fountain University, and to consultants, contractors, visiting scholars and partners when acting on behalf of the University or using its systems or data. It covers the use of any AI tool, whether provided by the University or obtained privately, in connection with:</p>
                        <ul class="ap-list">
                            <li>Learning, coursework and all forms of assessment, including examinations, projects, practicals and Students' Industrial Work Experience Scheme (SIWES) reports;</li>
                            <li>Teaching, course design, marking and feedback;</li>
                            <li>Research, theses, dissertations, publications, grant applications and peer review;</li>
                            <li>Administration, including admissions, records, finance, human resources and student services;</li>
                            <li>Official communications, publicity, media production and public relations.</li>
                        </ul>

                        <h3>3.2 &nbsp; Objectives</h3>
                        <ul class="ap-list">
                            <li><strong>Protect academic integrity:</strong> ensure that awards of the University continue to certify the genuine knowledge and abilities of graduates.</li>
                            <li><strong>Enable responsible innovation:</strong> encourage staff and students to use AI where it improves learning, teaching, research and service.</li>
                            <li><strong>Provide clarity and consistency:</strong> replace uncertainty with a single framework that every course applies in the same way.</li>
                            <li><strong>Develop AI literacy:</strong> equip every graduate and staff member with the knowledge to use AI critically, ethically and effectively.</li>
                            <li><strong>Safeguard rights:</strong> protect privacy, personal data, intellectual property and the right to fair treatment.</li>
                            <li><strong>Promote equity:</strong> ensure that no student is advantaged or disadvantaged by the ability to pay for AI tools or by disability.</li>
                            <li><strong>Uphold the University's faith-based mission:</strong> apply Islamic ethical values to a new technology.</li>
                        </ul>
                    </section>

                    <!-- 4.0 Guiding Principles -->
                    <section class="ap-section" id="ap-principles">
                        <div class="ap-section-head">
                            <span class="ap-num">4.0</span>
                            <h2>Guiding Principles</h2>
                        </div>
                        <p>As an Islamic university, Fountain University grounds this policy in the ethical teachings of Islam, which are fully consistent with the universal values of honest scholarship. Every provision of this policy is to be interpreted in the light of the following principles.</p>

                        <h3>4.1 &nbsp; Islamic Ethical Foundations</h3>
                        <div class="ap-table-wrap">
                            <table class="ap-table">
                                <thead>
                                    <tr><th style="width: 34%;">Principle</th><th>Application to AI use</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><strong>Amanah (trust and stewardship)</strong></td><td>Knowledge, data and the University's name are trusts. Staff and students must use AI in ways that protect the data, confidence and reputation entrusted to them.</td></tr>
                                    <tr><td><strong>Sidq (truthfulness)</strong></td><td>Honesty requires that the use of AI is disclosed, that AI output is never passed off as one's own unaided work, and that no fabricated data or references are presented as real.</td></tr>
                                    <tr><td><strong>'Ilm and Ihsan (knowledge pursued with excellence)</strong></td><td>AI should serve the pursuit of genuine understanding and excellent work, not become a shortcut that empties learning of its purpose.</td></tr>
                                    <tr><td><strong>'Adl (justice and fairness)</strong></td><td>AI must not be used in ways that discriminate, entrench bias or treat people unfairly; allegations of misuse must be judged justly, on sound evidence.</td></tr>
                                    <tr><td><strong>Maslahah (public good and prevention of harm)</strong></td><td>AI should be adopted where it brings genuine benefit and avoided where its harms (to privacy, integrity, wellbeing or society) outweigh its benefits.</td></tr>
                                    <tr><td><strong>Shura (consultation)</strong></td><td>Decisions about AI at the University shall be made through consultation with staff, students and relevant experts.</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3>4.2 &nbsp; Operational Principles</h3>
                        <ul class="ap-list">
                            <li><strong>Human accountability:</strong> a named person is responsible for every output, grade and decision, whatever tools were used.</li>
                            <li><strong>Transparency:</strong> AI use is disclosed in the manner required by this policy.</li>
                            <li><strong>Verification:</strong> AI output is treated as unverified until checked against reliable sources.</li>
                            <li><strong>Privacy by default:</strong> personal and confidential data are not entered into AI tools except as permitted in Section 10.</li>
                            <li><strong>Proportionality:</strong> controls are matched to risk; low-risk uses are encouraged, high-risk uses are carefully governed.</li>
                            <li><strong>Fairness of process:</strong> no student or staff member shall be sanctioned on the basis of unreliable or untested evidence.</li>
                        </ul>
                    </section>

                    <!-- 5.0 Stakeholders -->
                    <section class="ap-section" id="ap-stakeholders">
                        <div class="ap-section-head">
                            <span class="ap-num">5.0</span>
                            <h2>Stakeholders, Roles and Responsibilities</h2>
                        </div>

                        <h3>5.1 &nbsp; Stakeholders</h3>
                        <div class="ap-chips">
                            <span>Governing Council</span>
                            <span>Vice-Chancellor</span>
                            <span>Senate</span>
                            <span>AI Governance Committee</span>
                            <span>Deans, Directors and Heads of Department</span>
                            <span>Academic Staff</span>
                            <span>Students</span>
                            <span>Directorate of ICT</span>
                            <span>University Library</span>
                            <span>Postgraduate School</span>
                            <span>Directorate of Academic Planning and Quality Assurance</span>
                            <span>Data Protection Officer</span>
                            <span>Registry and Administrative Units</span>
                            <span>Information and Public Relations Unit</span>
                            <span>Student Affairs Division</span>
                        </div>
                        <p class="ap-note">Unit titles will be conformed to the University's current organogram before approval by Senate.</p>

                        <h3>5.2 &nbsp; Roles and Responsibilities</h3>
                        <div class="ap-role-grid">
                            <div class="ap-role">
                                <h4>Governing Council</h4>
                                <ul class="ap-list">
                                    <li>Ratify the policy and any major amendment to it.</li>
                                    <li>Approve resources for AI infrastructure, licences and training.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Vice-Chancellor</h4>
                                <ul class="ap-list">
                                    <li>Provide overall leadership and vision for the responsible use of AI.</li>
                                    <li>Constitute the AI Governance Committee and approve its terms of reference.</li>
                                    <li>Approve the Register of Approved AI Tools on the recommendation of the Committee.</li>
                                    <li>Allocate resources for implementation and advocate the policy to the University community.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Senate</h4>
                                <ul class="ap-list">
                                    <li>Approve the policy and its academic provisions, including the tier framework in Section 6 and the procedure in Section 11.</li>
                                    <li>Approve consequential amendments to examination and misconduct regulations.</li>
                                    <li>Receive the annual report of the AI Governance Committee.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>AI Governance Committee</h4>
                                <p class="ap-role-note">Chaired by the Deputy Vice-Chancellor (Academic) or such other officer as the Vice-Chancellor may appoint; membership to include the Director of ICT, the University Librarian, the Data Protection Officer, the Dean of the Postgraduate School, the Director of Academic Planning and Quality Assurance, one representative of each College, a scholar of Islamic ethics, the Head of the Information and Public Relations Unit, and two student representatives.</p>
                                <ul class="ap-list">
                                    <li>Oversee implementation, interpret the policy and issue practice guidance.</li>
                                    <li>Evaluate AI tools and initiatives and maintain the Register of Approved AI Tools.</li>
                                    <li>Monitor developments in law, NUC regulation and technology, and recommend amendments.</li>
                                    <li>Report annually to Senate.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Deans, Directors and Heads of Department</h4>
                                <ul class="ap-list">
                                    <li>Ensure that every course outline and assessment brief declares an AI-use tier.</li>
                                    <li>Promote consistency of practice and assessment redesign within their units.</li>
                                    <li>Ensure staff complete required training.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Academic Staff</h4>
                                <ul class="ap-list">
                                    <li>Declare the AI-use tier for each assessment and explain it to students at the start of the course.</li>
                                    <li>Design assessments that remain valid where AI is available.</li>
                                    <li>Model responsible AI use and disclose substantial AI use in teaching materials.</li>
                                    <li>Retain final responsibility for marking and feedback.</li>
                                    <li>Raise suspected misuse only in accordance with Section 11.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Students</h4>
                                <ul class="ap-list">
                                    <li>Read and comply with the tier declared for each assessment and seek clarification where unsure.</li>
                                    <li>Disclose AI use as required and retain evidence of their working process (notes, drafts, version history).</li>
                                    <li>Verify AI output and take full responsibility for submitted work.</li>
                                    <li>Never enter other people's personal data or confidential University material into AI tools.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Directorate of ICT</h4>
                                <ul class="ap-list">
                                    <li>Assess the security and technical suitability of AI tools and maintain approved tools within the University's systems and LMS.</li>
                                    <li>Provide technical support and manage institutional licences and access.</li>
                                    <li>Implement security controls and monitor for misuse of University systems.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>University Library</h4>
                                <ul class="ap-list">
                                    <li>Lead AI and information literacy training, including verification of sources and citation of AI.</li>
                                    <li>Provide guidance on copyright and licensing of materials used with AI tools.</li>
                                    <li>Support researchers on publisher and funder AI requirements.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Postgraduate School</h4>
                                <ul class="ap-list">
                                    <li>Apply Section 8 to theses and dissertations, including declarations and supervisory guidance.</li>
                                    <li>Ensure examiners and supervisors are briefed on the policy.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Directorate of Academic Planning and Quality Assurance</h4>
                                <ul class="ap-list">
                                    <li>Integrate AI-related standards into programme and course review.</li>
                                    <li>Monitor the validity of assessment and the consistency of tier declarations.</li>
                                    <li>Collect data for the evaluation required by Section 15.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Data Protection Officer</h4>
                                <ul class="ap-list">
                                    <li>Advise on compliance with the NDPA and GAID.</li>
                                    <li>Conduct or supervise Data Protection Impact Assessments for AI systems.</li>
                                    <li>Handle data-subject requests and incidents involving AI tools.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Registry and Administrative Units</h4>
                                <ul class="ap-list">
                                    <li>Ensure that no decision affecting a student or staff member is taken solely by automated means.</li>
                                    <li>Use only approved AI tools for administrative work involving personal data.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Information and Public Relations Unit</h4>
                                <ul class="ap-list">
                                    <li>Apply Section 9 to official communications and media content.</li>
                                    <li>Communicate the policy to internal and external audiences.</li>
                                </ul>
                            </div>
                            <div class="ap-role">
                                <h4>Student Affairs Division</h4>
                                <ul class="ap-list">
                                    <li>Support student awareness of the policy and student wellbeing in matters related to AI use.</li>
                                    <li>Coordinate student representation on AI matters.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- 6.0 Learning and Assessment -->
                    <section class="ap-section" id="ap-learning">
                        <div class="ap-section-head">
                            <span class="ap-num">6.0</span>
                            <h2>Use of AI in Learning and Assessment</h2>
                        </div>

                        <h3>6.1 &nbsp; The Three-Tier Framework</h3>
                        <p>Because the right level of AI use depends on what an assessment is meant to measure, the University does not adopt a single rule for all courses. Instead, every assessment shall be assigned one of the following three tiers by the course lecturer:</p>
                        <div class="ap-table-wrap">
                            <table class="ap-table">
                                <thead>
                                    <tr><th style="width: 22%;">Tier</th><th>What it means</th><th>Typical examples</th></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Tier 1: AI-Prohibited</strong></td>
                                        <td>No AI tool may be used at any stage in producing the work, except assistive technology approved for a student with a disability.</td>
                                        <td>Invigilated examinations and tests; in-class writing; assessments of foundational skills; oral examinations.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tier 2: AI-Assisted (with disclosure)</strong></td>
                                        <td>AI may be used only for the purposes the lecturer specifies (e.g. brainstorming, outlining, language editing, debugging). The student's own analysis and expression must form the substance of the work. An AI-Use Statement is required.</td>
                                        <td>Essays, reports, term papers, projects and lab write-ups where specified support is acceptable.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tier 3: AI-Integrated</strong></td>
                                        <td>AI use is permitted or required as part of the task. The student is assessed on how well they direct, evaluate, correct and build on AI output. An AI-Use Statement is required.</td>
                                        <td>Tasks on prompt design, critical evaluation of AI output, AI-supported coding or data analysis, digital media production.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3>6.2 &nbsp; Declaration of Tiers</h3>
                        <ul class="ap-list">
                            <li>The lecturer shall declare the tier for each assessment in the course outline and in the assessment brief, using the form in Appendix A, and shall explain it to students at the beginning of the course.</li>
                            <li>For Tier 2, the lecturer shall state which uses are permitted. Any use not stated is treated as not permitted.</li>
                            <li>Invigilated examinations are Tier 1 unless Senate has approved otherwise for a specific course.</li>
                            <li>Where no tier has been declared, the student should seek clarification from the lecturer. A student who acts in good faith on a reasonable interpretation shall not be penalised for the omission of the lecturer; the Head of Department shall ensure that the omission is corrected.</li>
                            <li>A lecturer may change the tier of an assessment only before it is set, and must inform students in writing.</li>
                        </ul>

                        <h3>6.3 &nbsp; Permitted Uses Outside Assessed Work</h3>
                        <p>Outside assessed work, students are encouraged to use AI tools as study aids, provided they observe Section 10. Appropriate uses include explaining difficult concepts, generating practice questions, summarising their own notes, receiving feedback on drafts for practice, language support, and accessibility support. Students should remember that AI tools may be wrong, outdated or biased, and should confirm important information with lecturers, textbooks and the Library.</p>

                        <h3>6.4 &nbsp; Conduct Prohibited in All Tiers</h3>
                        <p>The following constitute academic misconduct regardless of tier:</p>
                        <ul class="ap-list">
                            <li>Presenting AI-generated content as one's own unaided work, or failing to provide a required AI-Use Statement, or providing a false one;</li>
                            <li>Using AI in a Tier 1 assessment, or for a purpose not permitted in a Tier 2 assessment;</li>
                            <li>Fabricating or falsifying data, results, quotations, interview responses or references with AI, or submitting AI-produced references that the student has not verified to exist;</li>
                            <li>Using AI tools during an invigilated examination, including through phones, smart glasses, earpieces or other devices;</li>
                            <li>Uploading examination questions, marking schemes or another student's work to an AI tool without authorisation;</li>
                            <li>Using AI to complete work on behalf of another student, or obtaining AI-produced work from a third party or paid service;</li>
                            <li>Using AI to impersonate another person, or to create false or misleading images, audio or video ("deepfakes") of any member of the University community.</li>
                        </ul>

                        <h3>6.5 &nbsp; Disclosure and Citation</h3>
                        <p>Where AI use is permitted, the student shall attach an AI-Use Statement (Appendix B) naming the tool and version, the date of use, the purpose, and how the output was used or modified. Where AI-generated text, images or code are quoted or reproduced, they shall be cited in the referencing style required by the course, and students should retain their prompts and outputs so that they can be produced on request. AI tools shall not be cited as a source of facts; facts must be traced to and cited from reliable original sources.</p>

                        <h3>6.6 &nbsp; Assessment Design</h3>
                        <p>Departments shall progressively review their assessments so that they remain a valid measure of student learning. Staff are encouraged to:</p>
                        <ul class="ap-list">
                            <li>Include process evidence such as proposals, annotated drafts, reflective logs and version history;</li>
                            <li>Use oral components, presentations and short vivas to confirm understanding;</li>
                            <li>Set tasks grounded in local contexts, recent class activities, fieldwork or personal reflection;</li>
                            <li>Assess higher-order skills such as critique, synthesis and application, including critique of AI output;</li>
                            <li>Retain supervised, in-person assessment for core competencies that every graduate must demonstrate unaided.</li>
                        </ul>
                    </section>

                    <!-- 7.0 Teaching -->
                    <section class="ap-section" id="ap-teaching">
                        <div class="ap-section-head">
                            <span class="ap-num">7.0</span>
                            <h2>Use of AI in Teaching</h2>
                        </div>
                        <p>Staff may use AI to support teaching, including preparing lesson plans, examples, quizzes, case studies, slides, translations and accessible versions of materials, subject to the following conditions:</p>
                        <ul class="ap-list">
                            <li>Staff remain responsible for the accuracy, quality, originality and appropriateness of all teaching materials, including their consistency with the University's values and the CCMAS.</li>
                            <li>Where AI has substantially generated teaching materials or assessment items, staff should acknowledge this to students, modelling the transparency expected of them.</li>
                            <li>AI may assist marking and feedback (for example, by suggesting comments against a rubric), but every mark and grade shall be determined and confirmed by the responsible examiner. No grade shall be awarded solely by an AI system.</li>
                            <li>Student work, names, matriculation numbers or other personal data shall not be uploaded to any AI tool other than an approved tool cleared for that purpose under Section 14.</li>
                            <li>Staff shall not require students to purchase or create personal accounts on AI tools as a condition of completing a course; where AI use is required (Tier 3), the University-provided tool or a free alternative shall be available.</li>
                        </ul>
                    </section>

                    <!-- 8.0 Research -->
                    <section class="ap-section" id="ap-research">
                        <div class="ap-section-head">
                            <span class="ap-num">8.0</span>
                            <h2>Use of AI in Research and Postgraduate Work</h2>
                        </div>

                        <h3>8.1 &nbsp; General Requirements</h3>
                        <p>Researchers are responsible for the integrity of all research outputs. AI tools cannot be listed as authors or co-authors, because they cannot take responsibility for the work.</p>
                        <ul class="ap-list">
                            <li>Substantive use of AI in research (for example in literature searching, data analysis, coding, transcription, translation or drafting) shall be disclosed in the methods section or acknowledgements, in line with the requirements of the relevant publisher, funder or conference.</li>
                            <li>The fabrication, falsification or manipulation of data, images or results with AI is serious research misconduct.</li>
                            <li>Research involving the processing of participants' personal data with AI tools requires the approval of the relevant Research Ethics Committee, and participants shall be informed where AI is used in processing their data.</li>
                            <li>Researchers shall not upload unpublished data, manuscripts, or confidential partner information to AI tools that may retain or train on such material.</li>
                        </ul>

                        <h3>8.2 &nbsp; Theses and Dissertations</h3>
                        <ul class="ap-list">
                            <li>Every thesis, dissertation and long essay shall include a signed declaration stating whether, and how, AI tools were used, in the form prescribed by the Postgraduate School or the relevant College.</li>
                            <li>The candidate shall agree the permitted uses of AI with the supervisor at the proposal stage, and the agreement shall be recorded in supervision records.</li>
                            <li>The intellectual contribution, argument, analysis and conclusions must be the candidate's own. Language editing support is permitted where disclosed.</li>
                            <li>Examiners may question the candidate on any part of the work at the oral examination, including the process by which it was produced.</li>
                        </ul>

                        <h3>8.3 &nbsp; Peer Review and Grant Assessment</h3>
                        <p>Staff acting as peer reviewers, examiners or grant assessors shall not upload manuscripts, proposals or theses under review to AI tools, because doing so breaches confidentiality. Any use of AI in review must comply with the policy of the journal, funder or body concerned.</p>
                    </section>

                    <!-- 9.0 Administration -->
                    <section class="ap-section" id="ap-administration">
                        <div class="ap-section-head">
                            <span class="ap-num">9.0</span>
                            <h2>Use of AI in Administration and Communications</h2>
                        </div>

                        <h3>9.1 &nbsp; Administrative Decisions</h3>
                        <ul class="ap-list">
                            <li>No decision with legal or similarly significant effect on any person, including admission, progression, award, discipline, appointment, promotion, scholarship or financial aid, shall be taken solely by automated means. A competent officer shall review and take responsibility for every such decision.</li>
                            <li>Any AI system used to support such decisions shall be subject to a Data Protection Impact Assessment and to approval under Section 14, and affected persons shall be informed of the use of AI and of their right to human review.</li>
                            <li>AI systems shall be monitored for bias and accuracy, and their use suspended where unfair outcomes are identified.</li>
                        </ul>

                        <h3>9.2 &nbsp; Official Communications and Media</h3>
                        <ul class="ap-list">
                            <li>AI may be used to draft, edit, translate or design official communications, but every publication issued in the name of the University shall be reviewed and approved by an accountable officer before release.</li>
                            <li>AI-generated or AI-altered images, audio or video shall not be presented as authentic records of real persons or events. Synthetic media used in University publications shall be clearly labelled.</li>
                            <li>The likeness or voice of any member of the University community shall not be generated or altered with AI without that person's consent.</li>
                            <li>AI chatbots or virtual assistants deployed by the University shall identify themselves as AI and provide a route to a human officer.</li>
                            <li>Content shall be checked to ensure that it does not infringe copyright or trademarks and is consistent with the University's values and brand guidelines.</li>
                        </ul>
                    </section>

                    <!-- 10.0 Data Protection -->
                    <section class="ap-section" id="ap-data">
                        <div class="ap-section-head">
                            <span class="ap-num">10.0</span>
                            <h2>Data Protection, Privacy, Security and Intellectual Property</h2>
                        </div>

                        <h3>10.1 &nbsp; Information that must not be entered into unapproved AI tools</h3>
                        <p>Unless an AI tool has been specifically approved for that category of information under Section 14, staff and students shall not enter:</p>
                        <ul class="ap-list">
                            <li>Personal data of students, staff, applicants, alumni or research participants, including names, matriculation or staff numbers, contact details, results, photographs and records;</li>
                            <li>Sensitive personal data, including health, religious belief, financial and disciplinary information;</li>
                            <li>Examination questions, marking schemes and unreleased results;</li>
                            <li>Unpublished research data, manuscripts, patentable inventions and confidential partner information;</li>
                            <li>Confidential University documents, including Council, Senate and committee papers, contracts and financial records;</li>
                            <li>Passwords, access credentials or security information.</li>
                        </ul>

                        <h3>10.2 &nbsp; Data Protection Compliance</h3>
                        <ul class="ap-list">
                            <li>All processing of personal data with AI tools shall comply with the NDPA and the GAID, including the principles of lawfulness, purpose limitation, data minimisation, accuracy, storage limitation, security and accountability.</li>
                            <li>A Data Protection Impact Assessment shall be completed, under the supervision of the Data Protection Officer, before any AI system that processes personal data at scale, profiles individuals or supports significant decisions is deployed.</li>
                            <li>Contracts with AI vendors shall address data location, retention, use of University data for model training, security standards, breach notification and cross-border transfer requirements.</li>
                            <li>Any suspected data breach involving an AI tool shall be reported immediately to the Data Protection Officer and the Directorate of ICT.</li>
                        </ul>

                        <h3>10.3 &nbsp; Intellectual Property and Copyright</h3>
                        <ul class="ap-list">
                            <li>Ownership of works created by staff and students with the assistance of AI shall be governed by the University's intellectual property policy and the Copyright Act, 2022. Persons relying on AI-generated content should be aware that the legal protection of such content is uncertain.</li>
                            <li>Copyrighted materials, including licensed e-resources from the Library, shall not be uploaded to AI tools where the licence prohibits it.</li>
                            <li>Staff and students shall comply with the terms of service of any AI tool they use, and shall check whether outputs may be used for the intended purpose.</li>
                        </ul>
                    </section>

                    <!-- 11.0 Integrity -->
                    <section class="ap-section" id="ap-integrity">
                        <div class="ap-section-head">
                            <span class="ap-num">11.0</span>
                            <h2>Academic Integrity, AI Detection and Due Process</h2>
                        </div>

                        <h3>11.1 &nbsp; Status of AI Detection Tools</h3>
                        <p>AI detection tools are known to produce false positives, and studies have shown they are more likely to wrongly flag the writing of people who write in a second language, a matter of direct relevance to Nigerian students. Accordingly:</p>
                        <ul class="ap-list">
                            <li>A result from an AI detection tool may be used only as an indicator that a submission requires further review. It shall never by itself constitute proof of misconduct.</li>
                            <li>Only detection tools approved under Section 14 may be used, and student work shall not be uploaded to any other detection service.</li>
                            <li>Where a detection result forms part of a referral, the student shall be informed of the tool used and of the result.</li>
                        </ul>

                        <h3>11.2 &nbsp; Procedure for Suspected AI Misuse</h3>
                        <ul class="ap-list">
                            <li><strong>Initial review:</strong> a lecturer who suspects AI misuse shall consider the full context, including the declared tier, the student's previous work and any AI-Use Statement.</li>
                            <li><strong>Academic conversation:</strong> the lecturer, with the Head of Department or a designated colleague present, shall invite the student to discuss the work. The student may present drafts, notes, version history, sources and prompts, and may be asked to explain or reproduce aspects of the work orally. This conversation is not a disciplinary hearing.</li>
                            <li><strong>Resolution or referral:</strong> where the concern is resolved, no further action is taken. Where it is not resolved, or where there is evidence of deliberate deception, the matter shall be referred under the University's existing academic misconduct regulations.</li>
                            <li><strong>Fair hearing:</strong> in any misconduct proceedings the student shall be informed in writing of the allegation and the evidence, given a reasonable opportunity to respond, and allowed any representation available under the regulations. Findings shall be based on the balance of all evidence.</li>
                            <li><strong>Proportionate outcomes:</strong> outcomes shall take account of the tier, the extent of misuse, intent, the student's level of study and whether it is a first occurrence. A first, minor breach arising from genuine misunderstanding may be addressed through education and resubmission rather than penalty.</li>
                            <li><strong>Appeal:</strong> the student shall have the right of appeal provided under the University's regulations.</li>
                        </ul>

                        <h3>11.3 &nbsp; Records</h3>
                        <p>Records of academic conversations and referrals shall be kept securely, in accordance with the NDPA, and used only for the purposes of the procedure and for anonymised reporting under Section 15.</p>
                    </section>

                    <!-- 12.0 AI Literacy -->
                    <section class="ap-section" id="ap-literacy">
                        <div class="ap-section-head">
                            <span class="ap-num">12.0</span>
                            <h2>AI Literacy, Training and Capacity Building</h2>
                        </div>
                        <ul class="ap-list">
                            <li><strong>Students:</strong> all new students shall complete an AI literacy and academic integrity orientation module, to be integrated into an existing general studies course or orientation programme, covering how AI works, its limitations, verification, disclosure, data protection and the ethics of AI from an Islamic perspective.</li>
                            <li><strong>Academic staff:</strong> all academic staff shall complete foundation training on this policy, tier declaration and assessment redesign within the first year of implementation, with periodic refresher training thereafter.</li>
                            <li><strong>Non-teaching staff:</strong> staff in administrative and communication roles shall receive training on data protection and the responsible use of approved AI tools.</li>
                            <li><strong>Communities of practice:</strong> the AI Governance Committee shall support the sharing of good practice across Colleges, including showcases of effective AI-integrated teaching.</li>
                            <li><strong>Research and curriculum:</strong> the University shall encourage research on AI in education, Islamic perspectives on AI ethics, and the integration of AI competencies into curricula consistent with the CCMAS.</li>
                        </ul>
                    </section>

                    <!-- 13.0 Equity -->
                    <section class="ap-section" id="ap-equity">
                        <div class="ap-section-head">
                            <span class="ap-num">13.0</span>
                            <h2>Equity, Access and Infrastructure</h2>
                        </div>
                        <ul class="ap-list">
                            <li><strong>Equal access:</strong> where AI use is required, the University shall provide access to an approved tool at no additional cost to students, or ensure a free alternative is available.</li>
                            <li><strong>Bridging the digital divide:</strong> the University shall make AI-enabled facilities available in laboratories, the Library and other designated spaces for students without suitable personal devices or connectivity.</li>
                            <li><strong>Disability and accessibility:</strong> students with disabilities may use approved assistive AI tools in all tiers as reasonable accommodation, through the University's existing accommodation process. University AI deployments shall meet the Web Content Accessibility Guidelines (WCAG).</li>
                            <li><strong>Language and culture:</strong> the University shall recognise the bias of many AI tools toward foreign contexts and languages, and shall encourage critical evaluation of outputs for relevance to Nigerian and Islamic contexts.</li>
                            <li><strong>Infrastructure:</strong> the Directorate of ICT shall plan for the bandwidth, security, licences and integration with the LMS needed to implement this policy.</li>
                        </ul>
                    </section>

                    <!-- 14.0 Approval -->
                    <section class="ap-section" id="ap-approval">
                        <div class="ap-section-head">
                            <span class="ap-num">14.0</span>
                            <h2>Approval of AI Tools and Initiatives</h2>
                        </div>

                        <h3>14.1 &nbsp; Register of Approved AI Tools</h3>
                        <p>The AI Governance Committee shall maintain a Register of Approved AI Tools, published on the University website and LMS, stating for each tool the purposes and categories of information for which it is approved. Staff and students may use other publicly available AI tools for low-risk purposes that comply with Sections 6 and 10, but University data within the categories in Section 10.1 may be processed only with approved tools.</p>

                        <h3>14.2 &nbsp; Approval Process</h3>
                        <ul class="ap-list">
                            <li><strong>Proposal:</strong> the requesting unit submits a proposal describing the tool, its purpose, users, data involved, cost and expected benefits.</li>
                            <li><strong>Technical and security review:</strong> the Directorate of ICT assesses security, reliability, integration and vendor terms.</li>
                            <li><strong>Data protection review:</strong> the Data Protection Officer determines whether a Data Protection Impact Assessment is required and, if so, supervises it.</li>
                            <li><strong>Committee recommendation:</strong> the AI Governance Committee evaluates the proposal against this policy, including equity, accessibility and ethical considerations.</li>
                            <li><strong>Approval:</strong> the Vice-Chancellor approves entry on the Register; where the proposal affects curricula, assessment or academic regulations, Senate approval is also required.</li>
                            <li><strong>Review:</strong> approved tools shall be reviewed at least annually, and approval may be withdrawn where risks emerge.</li>
                        </ul>
                    </section>

                    <!-- 15.0 Monitoring -->
                    <section class="ap-section" id="ap-monitoring">
                        <div class="ap-section-head">
                            <span class="ap-num">15.0</span>
                            <h2>Monitoring, Evaluation and Review</h2>
                        </div>
                        <p>The AI Governance Committee shall submit an annual report to Senate covering, at minimum:</p>
                        <ul class="ap-list">
                            <li>The proportion of courses with declared tiers and the distribution of tiers across Colleges;</li>
                            <li>Completion rates for student and staff training;</li>
                            <li>The number, nature and outcomes of AI-related academic integrity cases, in anonymised form;</li>
                            <li>Approved tools, Data Protection Impact Assessments completed and any data incidents;</li>
                            <li>Feedback from staff and student surveys on the effectiveness and fairness of the policy.</li>
                        </ul>
                        <div class="ap-callout">
                            <p>This policy shall be reviewed every two years, and earlier where required by a change in national law, the issuance of an NUC framework on AI, a significant technological development, or the findings of the annual report.</p>
                        </div>
                    </section>

                    <!-- 16.0 Implementation -->
                    <section class="ap-section" id="ap-implementation">
                        <div class="ap-section-head">
                            <span class="ap-num">16.0</span>
                            <h2>Implementation Plan</h2>
                        </div>
                        <div class="ap-table-wrap">
                            <table class="ap-table">
                                <thead>
                                    <tr><th style="width: 24%;">Phase</th><th style="width: 18%;">Indicative timing</th><th>Key actions</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><strong>Phase 1: Approval and set-up</strong></td><td>Months 1&ndash;3</td><td>Senate approval and Council ratification; constitution of the AI Governance Committee; initial Register of Approved AI Tools; amendments to examination and misconduct regulations.</td></tr>
                                    <tr><td><strong>Phase 2: Awareness and training</strong></td><td>Months 3&ndash;6</td><td>Communication campaign to staff and students; foundation training for academic staff; development of the student orientation module; publication of templates and quick-reference guides.</td></tr>
                                    <tr><td><strong>Phase 3: Full implementation</strong></td><td>Months 6&ndash;12</td><td>Tier declarations in all course outlines; AI-Use Statements in use; student orientation delivered; Data Protection Impact Assessments for existing AI systems.</td></tr>
                                    <tr><td><strong>Phase 4: Review</strong></td><td>Month 12 onwards</td><td>First annual report to Senate; assessment redesign continued; policy refinements recommended.</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <!-- 17.0 Breaches -->
                    <section class="ap-section" id="ap-breaches">
                        <div class="ap-section-head">
                            <span class="ap-num">17.0</span>
                            <h2>Breaches and Sanctions</h2>
                        </div>
                        <p>Breaches of this policy by students shall be handled under the Student Handbook and academic misconduct regulations, following the procedure in Section 11. Breaches by staff shall be handled under the applicable conditions of service and disciplinary procedures. Breaches involving personal data may also be subject to sanctions under the NDPA. Sanctions shall be proportionate and shall take account of intent, harm and any mitigating circumstances.</p>
                    </section>

                    <!-- 18.0 Conclusion -->
                    <section class="ap-section" id="ap-conclusion">
                        <div class="ap-section-head">
                            <span class="ap-num">18.0</span>
                            <h2>Conclusion</h2>
                        </div>
                        <p>This policy positions Fountain University to embrace artificial intelligence with confidence while holding firmly to the values that define it. Its success depends less on the document itself than on the shared commitment of the University community. We must:</p>
                        <ul class="ap-list">
                            <li><strong>Keep learning at the centre:</strong> use AI to deepen understanding, never to replace the effort through which understanding is gained.</li>
                            <li><strong>Be honest about our tools:</strong> make disclosure a normal, unremarkable part of academic life.</li>
                            <li><strong>Protect what is entrusted to us:</strong> treat personal data, confidential information and the University's reputation as an amanah.</li>
                            <li><strong>Judge fairly:</strong> ensure that every allegation is resolved on sound evidence and through due process.</li>
                            <li><strong>Keep pace:</strong> review our practices regularly as the technology, the law and our understanding evolve.</li>
                        </ul>
                        <p>By remaining principled, adaptable and committed to learning alongside our students, Fountain University will produce graduates who are not only capable users of artificial intelligence, but discerning and upright stewards of it.</p>
                    </section>

                    <!-- Appendices -->
                    <section class="ap-section" id="ap-appendices">
                        <div class="ap-section-head">
                            <span class="ap-num">A&ndash;C</span>
                            <h2>Appendices</h2>
                        </div>

                        <h3>Appendix A: Assessment AI-Use Declaration</h3>
                        <p class="ap-note">For course outlines and assessment briefs.</p>
                        <div class="ap-table-wrap">
                            <table class="ap-table">
                                <thead>
                                    <tr><th style="width: 34%;">Item</th><th>Entry</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><strong>Course code and title</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>Assessment</strong></td><td>&mdash;</td></tr>
                                    <tr>
                                        <td><strong>AI-use tier (tick one)</strong></td>
                                        <td>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Tier 1: AI-Prohibited</span>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Tier 2: AI-Assisted (with disclosure)</span>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Tier 3: AI-Integrated</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Permitted uses (Tier 2 only)</strong></td>
                                        <td>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Brainstorming ideas</span>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Outlining</span>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Language and grammar editing</span>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Code debugging</span>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Translation of sources</span>
                                            <span class="ap-tick">[&nbsp;&nbsp;] Other (specify):</span>
                                        </td>
                                    </tr>
                                    <tr><td><strong>Tools provided or recommended (Tier 3)</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>AI-Use Statement required?</strong></td><td>Yes (Tiers 2 and 3) / Not applicable (Tier 1)</td></tr>
                                    <tr><td><strong>Lecturer's name and date</strong></td><td>&mdash;</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3>Appendix B: Student AI-Use Statement</h3>
                        <p class="ap-note">To be attached to any Tier 2 or Tier 3 submission.</p>
                        <div class="ap-table-wrap">
                            <table class="ap-table">
                                <thead>
                                    <tr><th style="width: 34%;">Item</th><th>Entry</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td><strong>Student name and matriculation number</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>Course code and assessment</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>AI tool(s) used, with version</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>Date(s) of use</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>Purpose(s) of use</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>How the output was used, checked and modified</strong></td><td>&mdash;</td></tr>
                                    <tr><td><strong>Declaration</strong></td><td>I confirm that this statement is complete and accurate, that I have verified any facts and references in my work, and that I take full responsibility for this submission. I can provide my prompts and drafts on request.</td></tr>
                                    <tr><td><strong>Signature and date</strong></td><td>&mdash;</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3>Appendix C: Quick Reference for Students</h3>
                        <div class="ap-table-wrap">
                            <table class="ap-table">
                                <thead>
                                    <tr><th>You may</th><th>You may not</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>Use AI to understand concepts and revise, outside assessed work</td><td>Submit AI-generated work as your own</td></tr>
                                    <tr><td>Use AI as the tier for each assessment allows</td><td>Use AI in invigilated examinations</td></tr>
                                    <tr><td>Ask your lecturer when the tier is unclear</td><td>Submit references you have not checked</td></tr>
                                    <tr><td>Use approved assistive AI tools if you have a disability accommodation</td><td>Upload other people's personal data, exam papers or classmates' work to AI tools</td></tr>
                                    <tr><td>Keep your notes, drafts and prompts as evidence of your work</td><td>Use AI to create fake images, audio or video of any person</td></tr>
                                    <tr><td>Disclose AI use honestly in your AI-Use Statement</td><td>Pay for or obtain AI-produced work from others</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="ap-end">
                            <a href="#top" onclick="window.scrollTo({top:0,behavior:'smooth'}); return false;">
                                <i class='bx bx-up-arrow-alt'></i> Back to top
                            </a>
                        </div>
                    </section>

                </article>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const links = Array.from(document.querySelectorAll('.ap-toc a'));
            const sections = links
                .map(link => document.querySelector(link.getAttribute('href')))
                .filter(Boolean);

            function sync() {
                if (!sections.length) return;
                let current = sections[0];
                for (const section of sections) {
                    if (section.getBoundingClientRect().top <= 120) current = section;
                }
                links.forEach(link => {
                    link.classList.toggle('ap-active', link.getAttribute('href') === '#' + current.id);
                });
            }

            window.addEventListener('scroll', sync, { passive: true });
            sync();
        })();
    </script>
@endsection
