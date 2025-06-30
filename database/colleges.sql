-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 05:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuonew-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_abbr` varchar(255) NOT NULL,
  `dean_name` varchar(255) NOT NULL,
  `dean_image` varchar(255) DEFAULT NULL,
  `dean_speach_title` varchar(255) DEFAULT NULL,
  `dean_speach_desc` text DEFAULT NULL,
  `about_college` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `college_name`, `college_abbr`, `dean_name`, `dean_image`, `dean_speach_title`, `dean_speach_desc`, `about_college`, `mission`, `vision`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'College of Arts and Education', 'COAED', 'Prof.Labo-Popoola, Serifat Olubunmi', NULL, 'As-salam alaykum warahmatullahi wabarakatuhu.', 'It is with great pleasure and a profound sense of duty that I extend a warm welcome to you to the College of Arts at Fountain University, Osogbo, Osun State.\n\nThe College of Arts stands as a beacon of intellectual inquiry, artistic expression, and cultural appreciation. Here, we embark on a journey of discovery, exploration, and transformation. Our curriculum not only celebrates the richness of human creativity but also integrates the teachings of Islam, fostering holistic growth and understanding among our students.\n\nAs stewards of this noble responsibility, the faculty and staff are committed to nurturing the minds and souls of our students. We understand the profound impact education has in shaping individuals and societies, and thus, we endeavor to cultivate academic excellence alongside moral integrity, compassion, and a sense of social responsibility.\n\nOur students are the heartbeat of this College. I encourage you to embrace this new chapter in your lives with open arms, embracing the myriad of opportunities and challenges it presents. Remember, knowledge transcends textbooks; it is woven into the very fabric of existence. Stay curious, ask questions, and pursue wisdom with humility and perseverance.\n\nTogether, let us create an environment where learning thrives, ideas flourish, and individuals emerge as compassionate leaders dedicated to personal growth and societal betterment.\n\nThank you.', 'The establishment of the College of Arts at Fountain University was driven by various reasons and considerations. As an Islamic faith-based institution with a legacy spanning over a decade, the university sought to enrich its educational offerings by incorporating a college that would cater to the spiritual and humanitarian dimensions of its mission.\nFollowing meticulous preparations by the University Management, the National Universities Commission (NUC) conducted a resource verification visit to the university in September 2023. It is gratifying to announce that the NUC approved the commencement of six (6) programs within the College, as conveyed in a letter dated November 6th, 2023. Additionally, the College houses the General Studies Unit, which oversees the general education courses offered throughout the university.\n', 'To train, produce and raise world-class intellectual scholars in arts and humanities.', 'To serve as a pinnacle of excellence in cultivating creative intellects guided by Islamic principles, advancing linguistic expression, and digital humanities, and fostering a harmonious integration of faith and creativity.', 1, NULL, NULL),
(2, 'College of Basic Medical and Health Sciences', 'COBMHES', 'Professor Adeoye, Moriam Dasola', NULL, 'As-salam alaykum, waramotullahi wa barakatul', 'Welcome to Fountain University Osogbo’s College of Basic Medical and Health Sciences (COBMHES), where greatness and compassion combine in the quest of knowledge to make your lifelong aspirations a reality. The institution is a beacon of innovation and academic excellence in the medical and health sciences. With cutting-edge facilities, world-class teachers, laboratories, resourceful workers, a welcoming environment, and a dedication to holistic education, we aspire to enable our students to become ethically sound healthcare leaders who have a beneficial influence on society. Join us on our revolutionary path to a healthier and brighter future.', 'The College began operations in the 2018/2019 academic session with Professor Muse Oke as the first dean, followed by Dr. Adeoye, M. D., who has since become a professor in recognition of her dedication and academic contributions to the college’s goals and the university’s growth. The College has four departments (Nursing Science, Medical Laboratory Science, Public Health, and Environmental Health Science), all of which are fully accredited by the National University Commission (NUC) and the professional bodies of the programs. This is due to the availability of the necessary resources and competent personnel. Since its inception, college enrollment has grown from 200 to 700 students.', 'The mission of the college is to educate, inspire, and empower the next generation of healthcare professionals to excel in the field of medical and health sciences. This is achievable through our comprehensive and rigorous academic curriculum that integrates theoretical knowledge with practical skills, ethical values, and a deep sense of social responsibility.', 'The vision of COBMHES is to become a global leader in medical and health sciences education, clinical training, counseling, research, and innovations to develop a sustainable system. We envision a future where our institution is recognized for producing exceptional healthcare professionals who are at the forefront of advancing knowledge, improving patient care, and addressing the healthcare challenges of the 21st century.', 1, NULL, NULL),
(3, 'College of Natural and Applied Sciences', 'CONAS', 'Prof. H.S. Bolarinwa', NULL, 'As-salam alaykum warahmatullahi wabarakatuhu', 'welcome to the College of Natural and Applied Sciences (CONAS) of Fountain University of Osogbo, where you turn your dreams into reality. We trust you are resourceful and realistic individual who wish to pursue academic excellence and we are here to serve you and groom you to achieve your lifelong dream not just career wise but an excellent relationship with your God and people.\r\n\r\nThe pivots and pilots of the world today solely rest on Scientists. Likewise, the compass for the future is best appreciated by Scientists. CONAS is not just a college but a preparation for relevance in the possible future. We inculcate minds and fashion out morally sound and energetic individuals that are not only naturally intelligent but also translate intelligence into enviable breakthrough research and discoveries, that are impactful to individuals you relate with and the world at large. I invite you to make use of the opportunities present here at the college, the personnel; the laboratories, the friendly and studious environment as well as the resourceful lecturers are at your disposal to make your dreams of pace setting the world come true.', 'Established in 2007, the College of Natural and Applied Sciences (CONAS) at Fountain University stands as a pioneer institution with a paramount goal – producing outstanding graduates destined for leadership in scientific fields. The inaugural Dean, Prof. Alágbe Wasiu Gbolagade, led the college during its formative years from 2007 to 2008. Subsequent leaders included Prof. Bunyamin Alao Ola-Adams (2010), Dr. David Segun Oluleye (Acting Dean, 2010-2011), and Dr. Amudalat Bolanle Olaniyan, who notably became the first acting female Dean in 2011/2012. Prof. Stephen Dele Fapohunda (2011/2012), Prof. Nureni Olayide Olawore (2011/2012 and 2012/2013), and Dr. Bashir Omolaran Bello (Acting Dean, 2012/2013 to 2014/2015) continued to shape the college’s trajectory. Prof. Abdulazeez Lawal assumed leadership from 2016 to 2021, paving the way for the current Dean, Prof. H.S Bolarinwa. CONAS commenced its journey with departments in biological sciences, chemical sciences, computer sciences, physics, electronics, and earth sciences. Over the years, the college has expanded its programs, consistently producing world-class graduates across diverse disciplines, attesting to its commitment to academic excellence.', 'Our mission is to provide a dynamic learning environment where students engage in rigorous scientific inquiry and hands-on applications. We strive to cultivate critical thinking, ethical leadership, and a passion for discovery. Through cutting-edge research and experiential learning, we prepare students to contribute meaningfully to their fields and society.', 'The College envisions becoming a globally recognized hub for scientific excellence and applied research. We aspire to empower graduates who are not only experts in their disciplines but also visionary problem solvers and catalysts for positive change. Our commitment to innovation, sustainability, and societal impact drives us towards being a leader in natural and applied sciences education.', 1, NULL, NULL),
(4, 'College of Management and Social Sciences', 'COMAS', 'Dr. Adeniran Raheemat', NULL, 'As-salam alaykum warahmatullahi wabarakatuhu.', 'You are warmly welcome to the College of Management and Social Sciences (COMAS) where we train complete graduates with high moral values in management and social sciences. Since inception, the college has been producing graduates who contribute to societal development within and outside of Nigeria.\r\n\r\nThe college which started out with 4 departments now boasts of 7 departments running various programmes at undergraduate and postgraduate levels. The departments are Accounting & Finance, Business Administration, Economics, Political Science, Public Administration, Mass Communication and Sociology & Criminology. The college is committed to cutting edge research, academic development and sound town-gown relationship. All these the college strives to achieve through its journal publication (Journal of Management & Social Sciences), academic conferences, roundtable discussion and annual Distinguished Lecture. In recognition of its modest efforts in scholarly promotion and further projection of the University’s visibility, the college received an award from the University during the 2023 Merit Awards of the University.', 'COMAS was one of the two pioneer colleges of the University at its take-off in 2007. Since its inception, the college has produced hundreds of graduates who are today doing well in their chosen fields in Nigeria and beyond.', 'The mission of the college is to build competitive and resourceful graduates with moral standard.', 'The vision of the college is to be a pace setter in knowledge impartation, research and moral development.', 1, NULL, NULL),
(5, 'College of Law', 'COLAW', 'Dr. Adeleke, Lateef Adeyemi', NULL, 'As salamu alaikum wa rahmatullahi wa barakatuhu', 'Welcome to the College of Law at Fountain University, Osogbo, where we believe in transforming dreams into reality. Here, we see you not just as a student, but as a partner in our shared journey towards academic excellence and personal growth.\r\n\r\nAt our college, we are committed to providing more than just education. We strive to create an inclusive and supportive environment where every individual feels valued and empowered to reach their full potential. Whether you aspire to be a legal scholar, a practicing lawyer, or a leader in your community, we are here to guide and support you every step of the way.', 'The College of Law is one of the newest programs established in the early 2020/2021 academic session. Dr. Abdulfatai Raji served as the pioneer Coordinator of the College during the 2020/2021 academic session, while Dr. K. O. Olaniyan holds the position of Dean for the College of Law as of the 2021/2022 academic session and continues to serve in that capacity.Currently, Dr. Adeleke, Lateef Adeyemi holds the position of Dean in this prestigious college.', 'The primary aim of the LL.B. (Common Law and Common & Islamic Law) Program is to train competent lawyers who are dedicated to advancing the cause of justice, enhancing human welfare, and contributing to national development. Additionally, the program seeks to produce lawyers who are globally competitive and proficient in utilizing both theoretical and practical tools to address societal challenges, foster positive change through legal means, and champion the pursuit of justice.', 'The Law program is meticulously designed to ensure that graduates possess a comprehensive understanding of legal principles and their significance in society. Given that all human activities—social, economic, and political—occur within a legal framework, it is imperative for law students to acquire broad general knowledge and exposure to various disciplines during their legal education journey. The program aims to introduce students to foundational legal knowledge, familiarize them with the principles of judicial processes and legal development, and equip them with essential tools and methods necessary for legal practice. ', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
