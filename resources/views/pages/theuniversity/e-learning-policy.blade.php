@extends('layouts.app')

@section('content')
    <style>
        /* ── E-Learning Policy page (scoped ep- styles) ── */
        .ep-hero {
            background: linear-gradient(135deg, #0a7a4b 0%, #035f39 55%, #06301e 100%);
            color: #fff;
            border-radius: 20px;
            padding: 40px 44px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 18px 44px rgba(3, 95, 57, 0.18);
        }

        .ep-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(110% 130% at 88% 0%, rgba(255, 255, 255, 0.14), transparent 55%);
            pointer-events: none;
        }

        .ep-hero .ep-eyebrow {
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

        .ep-hero h1 {
            font-size: clamp(1.6rem, 3.4vw, 2.4rem);
            font-weight: 800;
            margin: 0 0 8px;
            position: relative;
            z-index: 1;
        }

        .ep-hero p {
            margin: 0;
            opacity: 0.9;
            font-size: 1.02rem;
            position: relative;
            z-index: 1;
        }

        .ep-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 22px;
            position: relative;
            z-index: 1;
        }

        .ep-meta span {
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 0.82rem;
            font-weight: 500;
        }

        .ep-actions {
            margin-top: 26px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            position: relative;
            z-index: 1;
        }

        .ep-btn {
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

        .ep-btn-pdf {
            background: #c9a227;
            color: #241f04;
            box-shadow: 0 10px 24px rgba(201, 162, 39, 0.35);
        }

        .ep-btn-pdf:hover {
            background: #d9b23c;
            color: #241f04;
            transform: translateY(-2px);
        }

        .ep-btn-print {
            background: rgba(255, 255, 255, 0.14);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.35);
        }

        .ep-btn-print:hover {
            background: rgba(255, 255, 255, 0.24);
            color: #fff;
            transform: translateY(-2px);
        }

        /* Table of contents */
        .ep-toc {
            background: #fff;
            border: 1px solid #e7ece9;
            border-radius: 16px;
            box-shadow: 0 10px 28px rgba(8, 43, 26, 0.06);
            padding: 22px 22px 18px;
            position: sticky;
            top: 96px;
        }

        .ep-toc h3 {
            font-size: 0.92rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #082b1a;
            margin: 0 0 14px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eef4f0;
        }

        .ep-toc ol {
            list-style: none;
            counter-reset: ep;
            margin: 0;
            padding: 0;
        }

        .ep-toc li {
            counter-increment: ep;
        }

        .ep-toc a {
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

        .ep-toc a::before {
            content: counter(ep, decimal-leading-zero);
            color: #035f39;
            font-weight: 700;
            font-size: 0.8rem;
            padding-top: 1px;
        }

        .ep-toc a:hover,
        .ep-toc a.ep-active {
            background: #eef4f0;
            color: #035f39;
        }

        .ep-toc details summary {
            font-weight: 700;
            color: #082b1a;
            cursor: pointer;
            padding: 4px 0 10px;
        }

        /* Document body */
        .ep-doc {
            background: #fff;
            border: 1px solid #e7ece9;
            border-radius: 16px;
            box-shadow: 0 10px 28px rgba(8, 43, 26, 0.06);
            padding: clamp(24px, 4vw, 48px);
        }

        .ep-section {
            padding-top: 8px;
            margin-bottom: 38px;
            scroll-margin-top: 90px;
        }

        .ep-section:last-child { margin-bottom: 0; }

        .ep-section-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }

        .ep-num {
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

        .ep-section-head h2 {
            margin: 0;
            font-size: clamp(1.15rem, 2.2vw, 1.45rem);
            font-weight: 800;
            color: #082b1a;
            line-height: 1.3;
        }

        .ep-doc h3 {
            font-size: 1.06rem;
            font-weight: 700;
            color: #035f39;
            margin: 26px 0 10px;
        }

        .ep-doc p {
            color: #46554d;
            line-height: 1.8;
            margin: 0 0 14px;
        }

        .ep-list {
            list-style: none;
            margin: 0 0 16px;
            padding: 0;
        }

        .ep-list li {
            position: relative;
            padding: 0 0 12px 30px;
            color: #46554d;
            line-height: 1.75;
        }

        .ep-list li::before {
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

        .ep-list li strong { color: #082b1a; }

        .ep-callout {
            background: #f4f8f6;
            border-left: 4px solid #035f39;
            border-radius: 0 14px 14px 0;
            padding: 20px 24px;
            margin: 0 0 18px;
        }

        .ep-callout p { margin: 0; color: #2f4a3d; font-style: italic; }

        .ep-role-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 16px;
            margin-top: 6px;
        }

        .ep-role {
            background: #fbfdfc;
            border: 1px solid #e7ece9;
            border-radius: 14px;
            padding: 20px 20px 8px;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .ep-role:hover {
            transform: translateY(-4px);
            border-color: rgba(3, 95, 57, 0.25);
            box-shadow: 0 14px 32px rgba(3, 95, 57, 0.12);
        }

        .ep-role h4 {
            margin: 0 0 10px;
            font-size: 0.98rem;
            font-weight: 800;
            color: #082b1a;
            padding-bottom: 10px;
            border-bottom: 2px solid #eef4f0;
        }

        .ep-role .ep-list li { padding-bottom: 10px; font-size: 0.92rem; }

        .ep-stakeholder-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 8px;
        }

        .ep-stakeholder-chips span {
            background: #eef4f0;
            color: #0f3a26;
            border: 1px solid #d8e6de;
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 0.88rem;
            font-weight: 600;
        }

        .ep-end {
            text-align: center;
            margin-top: 40px;
            padding-top: 26px;
            border-top: 2px dashed #e2eae6;
        }

        .ep-end a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #035f39;
            font-weight: 700;
            text-decoration: none;
        }

        .ep-end a:hover { text-decoration: underline; }

        @media (max-width: 992px) {
            .ep-toc { position: static; margin-bottom: 24px; }
        }

        @media print {
            .section-banner, .ep-hero .ep-actions, .ep-toc, .ep-end, footer, nav { display: none !important; }
            .ep-hero { box-shadow: none; }
            .ep-doc, .ep-hero { border: none; box-shadow: none; }
        }
    </style>

    <!-- Start Section Banner Area -->
    <div class="section-banner bg-3">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">E-Learning Policy</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo, Osun State, Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Banner Area -->

    <div class="container py-100">
        <!-- Document header -->
        <div class="ep-hero" data-aos="fade-up">
            <span class="ep-eyebrow">Institutional Policy Document</span>
            <h1>Fountain University E-Learning Policy</h1>
            <p>A guide and roadmap for integrating technology into our academic framework.</p>
            <div class="ep-meta">
                <span>&#127891; 2024 Revised Edition</span>
                <span>&#127760; Mixed-Mode, Faith-Based Education</span>
                <span>&#9998; Fountain University, Osogbo</span>
            </div>
            <div class="ep-actions">
                <a href="{{ asset('downloads/fuo-e-learning-policy.pdf') }}" class="ep-btn ep-btn-pdf" download>
                    <i class='bx bxs-file-pdf'></i> Download PDF
                </a>
                <a href="javascript:window.print()" class="ep-btn ep-btn-print">
                    <i class='bx bx-printer'></i> Print
                </a>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Table of contents -->
            <div class="col-lg-4">
                <div class="ep-toc" data-aos="fade-up">
                    <h3>Table of Contents</h3>
                    <details open>
                        <summary class="d-lg-none">Show sections</summary>
                        <ol>
                            <li><a href="#ep-introduction">Introduction</a></li>
                            <li><a href="#ep-scope">Scope and Objectives</a></li>
                            <li><a href="#ep-stakeholders">Stakeholders, Roles &amp; Responsibilities</a></li>
                            <li><a href="#ep-guidelines">Guidelines for E-Learning Courses</a></li>
                            <li><a href="#ep-conclusion">Conclusion</a></li>
                        </ol>
                    </details>
                </div>
            </div>

            <!-- Document body -->
            <div class="col-lg-8">
                <article class="ep-doc" data-aos="fade-up" data-aos-delay="100">

                    <!-- 1.0 Introduction -->
                    <section class="ep-section" id="ep-introduction">
                        <div class="ep-section-head">
                            <span class="ep-num">1.0</span>
                            <h2>Introduction</h2>
                        </div>
                        <p>In the ever-evolving landscape of education, embracing innovative approaches to teaching and learning is crucial. Recognizing this reality, Fountain University proudly presents this e-learning policy document, which serves as a guide and roadmap for integrating technology into our academic framework.</p>
                        <p>Driven by our vision of excellence in scholarship, service, and character development, we believe e-learning holds immense potential to:</p>
                        <ul class="ep-list">
                            <li><strong>Enhance the learning experience:</strong> Imagine interactive modules, engaging multimedia, and on-demand resources tailored to your learning style and pace. E-learning fosters deeper engagement, knowledge retention, and critical thinking skills.</li>
                            <li><strong>Increase accessibility:</strong> Break down geographical and time constraints. By bringing learning to you, this policy opens the door for wider participation and flexible learning opportunities, ensuring educational equity and inclusivity.</li>
                            <li><strong>Empower colleges:</strong> We recognize the dedication and expertise of our colleges. This policy provides tools and support to unlock their potential in utilizing technology, enriching their teaching methods, and creating innovative learning environments.</li>
                            <li><strong>Embrace the digital future:</strong> As technology transforms every aspect of life, equipping our students with digital literacy and technological know-how is essential. E-learning facilitates this, preparing them for success in a tech-driven world.</li>
                        </ul>

                        <h3 id="ep-vision">1.1 &nbsp; FUO e-Learning Vision</h3>
                        <div class="ep-callout">
                            <p>To be the premier Islamic university dedicated to producing capable and ingenious graduates for a better society via mixed-mode, faith-based education enhanced by ICT.</p>
                        </div>

                        <h3>1.2 &nbsp; Mission</h3>
                        <div class="ep-callout">
                            <p>To foster a collaborative environment where technology enhances faith-based teaching and learning at Fountain University.</p>
                        </div>

                        <h3>1.3 &nbsp; Rationale for the Policy</h3>
                        <p>This policy is not simply a document; it's a commitment to a vibrant and dynamic learning ecosystem. It establishes clear guidelines and support mechanisms for colleges, staff, and students to ensure the effective and responsible implementation of e-learning initiatives. It also explains systems and structures that will govern the progressive integration of e-Learning within existing institutional structure of the face to face mode of delivery by applying mixed mode delivery mechanism.</p>
                        <p>Within this document, you will find detailed information on:</p>
                        <ul class="ep-list">
                            <li>Scope and objectives of e-learning at Fountain University</li>
                            <li>Roles and responsibilities of stakeholders</li>
                            <li>Guidelines for developing and approving e-learning courses</li>
                            <li>Quality assurance standards and academic integrity protocols</li>
                            <li>Accessibility considerations and intellectual property regulations</li>
                            <li>Data privacy measures and evaluation procedures</li>
                            <li>Available resources and support mechanisms</li>
                        </ul>
                    </section>

                    <!-- 2.0 Scope and Objectives -->
                    <section class="ep-section" id="ep-scope">
                        <div class="ep-section-head">
                            <span class="ep-num">2.0</span>
                            <h2>Scope and Objectives of the E-Learning Policy</h2>
                        </div>
                        <p>Fountain University envisions e-learning as a strategic tool to:</p>
                        <ul class="ep-list">
                            <li><strong>Enhance and enrich traditional classroom teaching:</strong> This includes blended learning models, flipped classrooms, and web-enhanced activities that supplement face-to-face instruction.</li>
                            <li><strong>Offer fully online courses and programs:</strong> This could cater to geographically dispersed students, working professionals seeking upskilling, or niche programs requiring specific technological resources.</li>
                            <li><strong>Provide flexible learning opportunities:</strong> E-learning allows students to learn at their own pace, time, and location, promoting self-directed learning and catering to diverse learning styles.</li>
                            <li><strong>Increase colleges development and collaboration:</strong> E-learning tools and platforms can facilitate college training, resource sharing, and collaborative course development.</li>
                            <li><strong>Support research and scholarship:</strong> E-learning can be used to disseminate research findings, create open educational resources, and enhance collaboration with external partners.</li>
                            <li><strong>Improve administrative efficiency:</strong> Online platforms can streamline student registration, course delivery, and assessment processes.</li>
                        </ul>

                        <h3>2.1 &nbsp; Objectives</h3>
                        <ul class="ep-list">
                            <li><strong>Enhance learning outcomes:</strong> E-learning courses should be designed to achieve established learning outcomes with rigor and effectiveness comparable to traditional courses.</li>
                            <li><strong>Promote active learning and engagement:</strong> Utilise interactive content, diverse learning activities, and collaborative tools to engage students and foster deeper understanding.</li>
                            <li><strong>Support critical thinking and problem-solving skills:</strong> E-learning should encourage students to analyse information, evaluate arguments, and apply knowledge to real-world scenarios.</li>
                            <li><strong>Develop digital literacy skills:</strong> Integrate activities that equip students with essential skills for navigating online learning environments and accessing digital resources effectively.</li>
                        </ul>

                        <h3>2.2 &nbsp; Accessibility and Inclusivity</h3>
                        <ul class="ep-list">
                            <li><strong>Provide equal access to all students:</strong> Ensure e-learning courses and resources are accessible to students with disabilities, complying with relevant regulations and guidelines.</li>
                            <li><strong>Address diverse learning styles:</strong> Offer varied instructional methods and content formats to cater to individual learning preferences.</li>
                            <li><strong>Bridge the digital divide:</strong> Explore initiatives to address internet access limitations and provide technological support to ensure equitable participation in e-learning opportunities.</li>
                        </ul>

                        <h3>2.3 &nbsp; Flexibility and Innovation</h3>
                        <ul class="ep-list">
                            <li><strong>Expand course offerings:</strong> Offer a broader range of courses through online modalities, enriching the academic experience for students.</li>
                            <li><strong>Personalise learning paths:</strong> Adapt content and activities based on individual needs and learning styles to optimise the learning experience.</li>
                            <li><strong>Embrace innovative technologies:</strong> Explore and integrate emerging technologies, such as virtual reality or augmented reality, to enhance learning engagement and effectiveness.</li>
                            <li><strong>Promote college leadership and development:</strong> Provide training and support to empower college to design and deliver high-quality e-learning experiences.</li>
                        </ul>

                        <h3>2.4 &nbsp; Sustainability and Growth</h3>
                        <ul class="ep-list">
                            <li><strong>Develop a robust e-learning infrastructure:</strong> Invest in reliable technology platforms, learning management systems, and accessible resources.</li>
                            <li><strong>Promote continuous improvement:</strong> Implement quality assurance processes, gather feedback from stakeholders, and regularly evaluate the effectiveness of e-learning initiatives.</li>
                            <li><strong>Foster collaboration and partnerships:</strong> Seek partnerships with other institutions and organisations to share resources, expertise, and best practices in e-learning.</li>
                            <li><strong>Align with strategic goals:</strong> Integrate e-learning initiatives with the University's broader strategic goals and mission.</li>
                        </ul>
                    </section>

                    <!-- 3.0 Stakeholders -->
                    <section class="ep-section" id="ep-stakeholders">
                        <div class="ep-section-head">
                            <span class="ep-num">3.0</span>
                            <h2>Stakeholders, Roles and Responsibilities</h2>
                        </div>

                        <h3>3.1 &nbsp; Stakeholders</h3>
                        <div class="ep-stakeholder-chips">
                            <span>Vice-Chancellor</span>
                            <span>Director of ICT</span>
                            <span>Colleges</span>
                            <span>Students</span>
                            <span>IT Department</span>
                            <span>Library</span>
                            <span>Quality Assurance Committee</span>
                            <span>Academic Senate</span>
                        </div>

                        <h3>3.2 &nbsp; Roles and Responsibilities to the e-Learning Policy</h3>
                        <div class="ep-role-grid">
                            <div class="ep-role">
                                <h4>Vice-Chancellor</h4>
                                <ul class="ep-list">
                                    <li>Provide overall leadership and vision for e-learning initiatives.</li>
                                    <li>Allocate resources for e-learning development and implementation.</li>
                                    <li>Advocate for the benefits of e-learning to the wider university community.</li>
                                    <li>Approve the e-learning policy and related guidelines.</li>
                                </ul>
                            </div>
                            <div class="ep-role">
                                <h4>Director of ICT</h4>
                                <ul class="ep-list">
                                    <li>Lead the development and implementation of the e-learning strategy.</li>
                                    <li>Oversee the Learning Management System (LMS) and other e-learning infrastructure.</li>
                                    <li>Provide training and support for college and staff on e-learning best practices.</li>
                                    <li>Review and approve e-learning course proposals and materials.</li>
                                    <li>Monitor and evaluate the effectiveness of e-learning initiatives.</li>
                                    <li>Liaise with relevant departments and committees on e-learning matters.</li>
                                </ul>
                            </div>
                            <div class="ep-role">
                                <h4>College</h4>
                                <ul class="ep-list">
                                    <li>Design and develop high-quality e-learning courses and activities aligned with program curricula and learning outcomes.</li>
                                    <li>Integrate e-learning tools and resources into their teaching effectively.</li>
                                    <li>Participate in training and workshops on e-learning design and delivery.</li>
                                    <li>Provide timely feedback to students on their e-learning activities.</li>
                                    <li>Adhere to academic integrity policies in all e-learning activities.</li>
                                    <li>Participate in the evaluation and improvement of e-learning offerings.</li>
                                </ul>
                            </div>
                            <div class="ep-role">
                                <h4>Students</h4>
                                <ul class="ep-list">
                                    <li>Actively participate in e-learning activities and assignments.</li>
                                    <li>Complete e-learning modules and assessments independently and ethically.</li>
                                    <li>Seek assistance from college or support services when needed.</li>
                                    <li>Provide feedback on their e-learning experiences to improve future offerings.</li>
                                    <li>Report any instances of academic dishonesty or technical difficulties.</li>
                                </ul>
                            </div>
                            <div class="ep-role">
                                <h4>ICT Unit</h4>
                                <ul class="ep-list">
                                    <li>Provide and maintain the technical infrastructure for e-learning platforms and resources.</li>
                                    <li>Ensure the security and reliability of the LMS and other e-learning systems.</li>
                                    <li>Offer technical support to college, staff, and students on e-learning related issues.</li>
                                    <li>Collaborate with the e-learning team on infrastructure development and integration.</li>
                                </ul>
                            </div>
                            <div class="ep-role">
                                <h4>Library</h4>
                                <ul class="ep-list">
                                    <li>Collaborate with the e-learning team to provide access to digital learning resources.</li>
                                    <li>Support college in integrating information literacy skills into e-learning courses.</li>
                                    <li>Develop and offer training workshops on research skills and effective use of online resources.</li>
                                    <li>Assist students in accessing and evaluating online information for their e-learning activities.</li>
                                </ul>
                            </div>
                            <div class="ep-role">
                                <h4>Quality Assurance Committee</h4>
                                <ul class="ep-list">
                                    <li>Review and approve e-learning course proposals based on established quality standards.</li>
                                    <li>Conduct periodic reviews of existing e-learning courses to ensure content accuracy, pedagogical effectiveness, and accessibility.</li>
                                    <li>Provide feedback to college on improving their e-learning offerings.</li>
                                </ul>
                            </div>
                            <div class="ep-role">
                                <h4>Academic Senate</h4>
                                <ul class="ep-list">
                                    <li>Review and approve the e-learning policy and any major changes to it.</li>
                                    <li>Provide guidance on academic integrity and intellectual property issues related to e-learning.</li>
                                    <li>Advocate for the effective use of e-learning to enhance the quality of teaching and learning.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- 4.0 Guidelines -->
                    <section class="ep-section" id="ep-guidelines">
                        <div class="ep-section-head">
                            <span class="ep-num">4.0</span>
                            <h2>Guidelines for Developing and Approving E-Learning Courses</h2>
                        </div>

                        <h3>4.1 &nbsp; Planning and Development</h3>
                        <ul class="ep-list">
                            <li><strong>Needs Assessment:</strong> Identify the need for an e-learning course and how it aligns with program curriculum and learning outcomes. Consider factors like learner needs, accessibility requirements, and available resources.</li>
                            <li><strong>Course Design:</strong> Utilise effective instructional design principles to create engaging and interactive learning experiences. Define clear learning objectives, choose appropriate content and activities, and structure the course logically.</li>
                            <li><strong>Technology Selection:</strong> Select an LMS and learning objects that meet pedagogical needs, technical requirements, and accessibility standards.</li>
                            <li><strong>Development Team:</strong> Assemble a team with expertise in instructional design, content development, technology, and accessibility.</li>
                        </ul>

                        <h3>4.2 &nbsp; Content and Quality Assurance</h3>
                        <ul class="ep-list">
                            <li><strong>Accuracy and Currency:</strong> Ensure content is accurate, up-to-date, and aligned with relevant academic standards. Cite sources appropriately and avoid plagiarism.</li>
                            <li><strong>Pedagogical Soundness:</strong> Employ varied and engaging learning activities (e.g., simulations, discussions, videos) that cater to different learning styles and promote active participation.</li>
                            <li><strong>Accessibility:</strong> Follow WCAG guidelines to ensure equal access for all learners with disabilities. Use alternative text for images, provide closed captions for videos, and offer keyboard navigation options.</li>
                            <li><strong>Quality Review:</strong> Conduct internal and external peer reviews to assess the course's quality, alignment with learning objectives, and adherence to University policies and standards.</li>
                        </ul>

                        <h3>4.3 &nbsp; Technical Requirements and Support</h3>
                        <ul class="ep-list">
                            <li><strong>Technical Specifications:</strong> Ensure the course meets University's LMS technical specifications and adheres to security protocols.</li>
                            <li><strong>Testing and Compatibility:</strong> Test the course across different devices and browsers to ensure functionality and compatibility.</li>
                            <li><strong>Technical Support:</strong> Provide clear instructions and technical support resources for both college and students.</li>
                        </ul>

                        <h3>4.4 &nbsp; Approval Process</h3>
                        <ul class="ep-list">
                            <li><strong>Proposal Submission:</strong> Submit a detailed course proposal outlining learning objectives, content, pedagogy, technology, accessibility considerations, and development timeline.</li>
                            <li><strong>Review Committee:</strong> A designated committee (e.g., Instructional Design Committee) will review proposals based on established criteria, including alignment with curriculum, quality of content and instructional design, accessibility, and technical feasibility.</li>
                            <li><strong>Revision and Approval:</strong> Address feedback from the committee and revise the course as needed. Upon successful review and revisions, the committee will grant final approval.</li>
                        </ul>

                        <h3>4.5 &nbsp; Additional Considerations</h3>
                        <ul class="ep-list">
                            <li><strong>Intellectual Property:</strong> Establish clear policies regarding ownership and use of intellectual property created for e-learning courses.</li>
                            <li><strong>Copyright and Licensing:</strong> Ensure proper copyright clearance for all materials used in the course.</li>
                            <li><strong>Data Privacy:</strong> Adhere to data privacy regulations when collecting and storing student data.</li>
                            <li><strong>Sustainability and Maintenance:</strong> Develop a plan for ongoing maintenance, updates, and revisions of the e-learning course.</li>
                        </ul>

                        <h3>4.6 &nbsp; Resources</h3>
                        <ul class="ep-list">
                            <li>Fountain University Curriculum Guidelines</li>
                            <li>Learning Management System (LMS) User Guide and Technical Support Information</li>
                            <li>Instructional Design Best Practices Guidelines</li>
                            <li>Web Content Accessibility Guidelines (WCAG) Accessibility Guidelines</li>
                        </ul>
                    </section>

                    <!-- 5.0 Conclusion -->
                    <section class="ep-section" id="ep-conclusion">
                        <div class="ep-section-head">
                            <span class="ep-num">5.0</span>
                            <h2>Conclusion</h2>
                        </div>
                        <p>This e-learning policy sets the stage for Fountain University to become a leader in innovative and effective educational practices. By embracing e-learning, we unlock a world of possibilities for enhanced engagement, flexibility, and personalized learning experiences for our students.</p>
                        <p>However, the success of this policy hinges on continuous commitment and collaboration. We must:</p>
                        <ul class="ep-list">
                            <li><strong>Invest in ongoing college development:</strong> Provide regular training workshops, resources, and support to equip college with the skills and knowledge needed to design and deliver high-quality e-learning experiences.</li>
                            <li><strong>Foster a culture of innovation:</strong> Encourage experimentation with new e-learning tools and approaches, while ensuring rigorous quality assurance standards are maintained.</li>
                            <li><strong>Prioritize accessibility and equity:</strong> Integrate principles of universal design for learning (UDL) into all e-learning initiatives, ensuring all students have equal access and opportunity to thrive.</li>
                            <li><strong>Cultivate a collaborative spirit:</strong> Encourage collaboration between college, IT staff, librarians, and students to leverage diverse expertise and share best practices.</li>
                            <li><strong>Gather and analyse data:</strong> Regularly collect and analyse feedback from stakeholders to evaluate the impact of e-learning initiatives and inform continuous improvement.</li>
                        </ul>
                        <p>By remaining proactive, adaptable, and dedicated to learning alongside our students and college, we can ensure that Fountain University remains at the forefront of educational excellence in the digital age. Let us move forward together, embracing e-learning as a powerful tool to empower our students and transform our institution into a vibrant hub of knowledge creation and dissemination.</p>

                        <div class="ep-end">
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
            const links = Array.from(document.querySelectorAll('.ep-toc a'));
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
                    link.classList.toggle('ep-active', link.getAttribute('href') === '#' + current.id);
                });
            }

            window.addEventListener('scroll', sync, { passive: true });
            sync();
        })();
    </script>
@endsection
