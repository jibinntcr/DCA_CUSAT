-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 07:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcements` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `dlt_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcements`, `link`, `status`, `dlt_status`) VALUES
(9, 'PhD Rank List 2022', 'https://dca.cusat.ac.in/assets/pdf/PhD%20ranklist2022.pdf', 1, 0),
(10, 'Interdisciplinary Elective offered 2022 - 22-382-0321 Cyber Forensic', 'https://dca.cusat.ac.in/assets/pdf/Cyber%20Forensic.pdf', 0, 0),
(11, 'Congratulations to placed students 2022-23', 'https://dca.cusat.ac.in/assets/pdf/Placement2022-23.pdf', 0, 0),
(12, 'INTERNATIONAL CONFERENCE ON ADVANCES IN INTELLIGENT COMPUTING AND APPLICATIONS (ICA2022) February 1-3,2023', 'https://icadcacusat.in/', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `completedresearchscholar`
--

CREATE TABLE `completedresearchscholar` (
  `id` int(15) NOT NULL,
  `reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completedresearchscholar`
--

INSERT INTO `completedresearchscholar` (`id`, `reg`, `name`, `guide`, `title`, `year`, `status`) VALUES
(1, ' 2022', 'name', 'guide', 'title', '2022', 0),
(2, ' edited', 'vsdvsdvsdsd', 'vsdvsdsdv', 'sdsvsdvdvsd', 'sdvsdvsdvsdv', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` varchar(35) NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `eventStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `name`, `year`, `image`, `link`, `status`, `eventStatus`) VALUES
(3, 'ICA DCA', '2023', 'thumb-ica.jpg', 'https://icadcacusat.in/', 1, 1),
(4, '2nd Police Science Congress', '2020', 'forensic.jpg', 'https://dca.cusat.ac.in/assets/pdf/2KPSC_Brochure.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(25) NOT NULL,
  `name` varchar(250) NOT NULL,
  `specialization` varchar(250) DEFAULT NULL,
  `seat` varchar(250) NOT NULL,
  `eligibility` varchar(6000) NOT NULL,
  `sllabus` varchar(250) NOT NULL,
  `sllabusLink` varchar(250) NOT NULL,
  `thumb` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `syllabus2` varchar(250) DEFAULT NULL,
  `syllabus3` varchar(250) DEFAULT NULL,
  `syllabus4` varchar(250) DEFAULT NULL,
  `syllabus5` varchar(250) DEFAULT NULL,
  `syllabus6` varchar(250) DEFAULT NULL,
  `syllabus7` varchar(250) DEFAULT NULL,
  `syllabus8` varchar(250) DEFAULT NULL,
  `syllabus9` varchar(250) DEFAULT NULL,
  `syllabus10` varchar(250) DEFAULT NULL,
  `syllabus11` varchar(250) DEFAULT NULL,
  `syllabus12` varchar(250) DEFAULT NULL,
  `syllabus13` varchar(250) DEFAULT NULL,
  `syllabus14` varchar(250) DEFAULT NULL,
  `syllabus15` varchar(250) DEFAULT NULL,
  `link2` varchar(250) DEFAULT NULL,
  `link3` varchar(250) DEFAULT NULL,
  `link4` varchar(250) DEFAULT NULL,
  `link5` varchar(250) DEFAULT NULL,
  `link6` varchar(250) DEFAULT NULL,
  `link7` varchar(250) DEFAULT NULL,
  `link8` varchar(250) DEFAULT NULL,
  `link9` varchar(250) DEFAULT NULL,
  `link10` varchar(250) DEFAULT NULL,
  `link11` varchar(250) DEFAULT NULL,
  `link12` varchar(250) DEFAULT NULL,
  `link13` varchar(250) DEFAULT NULL,
  `link14` varchar(250) DEFAULT NULL,
  `link15` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `specialization`, `seat`, `eligibility`, `sllabus`, `sllabusLink`, `thumb`, `image`, `syllabus2`, `syllabus3`, `syllabus4`, `syllabus5`, `syllabus6`, `syllabus7`, `syllabus8`, `syllabus9`, `syllabus10`, `syllabus11`, `syllabus12`, `syllabus13`, `syllabus14`, `syllabus15`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `link10`, `link11`, `link12`, `link13`, `link14`, `link15`, `status`) VALUES
(8, 'MCA', 'Master of Computer Applications', 'no seat', '<ul>\r\n	<li>Passed BCA/Bachelor degree in Computer Science Engineering or Equivalent degree</li>\r\n</ul>\r\n\r\n<p>OR</p>\r\n\r\n<ul>\r\n	<li>Passed BSc/BCom/BA with Mathematics at 10+2 level or at graduate level (with additional bridge course as per the norms o</li>\r\n</ul>\r\n', '2014 Admission Syllabus', 'https://dca.cusat.ac.in/assets/syllabus/MCA2014Syllabus.pdf', 'course-3.jpg', 'phd-image.jpg', '2015 Admission Syllabus', '2016 Admission Syllabus', '2019 Admission Syllabus', '2020 Admission Syllabus', '2022 Admission Syllabus', '', '', '', '', '', '', '', '', '', 'https://dca.cusat.ac.in/assets/syllabus/MCA2015Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2016Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2019Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2020Syllabus.pdf', 'https://dca.cusat.ac.in/assets/syllabus/MCA2022Syllabus.pdf', '', '', '', '', '', '', '', '', '', 1),
(9, 'M.SC. COMPUTER SCIENCE', 'Specialization in Data Science', 'Full Time Cost Sharing 25 Seats + 5 seats reserved for candidates sponsored by Kerala Police Academy(KEPA)', '<p>A candidate seeking admission to the M.Sc. Computer Science with specialization in Data Science must be a Science graduate with Mathematics as one of the core or complimentary subject or graduate in Electronics/Information Technology/Computer Science/ Computer Applications /Engineering/Technology with an aggregate of 60% marks or its equivalent CGPA.</p>\r\n', '2020 Admission Syllabus', 'https://dca.cusat.ac.in/assets/syllabus/Msc%20Data%20Science%202020.pdf', 'course-3.jpg', 'ai-image.jpg', '2020 Admission Syllabus', '', '', '', '', '', '', '', '', '', '', '', '', '', 'https://dca.cusat.ac.in/assets/syllabus/Msc%20Data%20Science%202022.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(10, 'M.SC. COMPUTER SCIENCE', 'Specialization in Artificial Intelligence', 'Full Time Cost Sharing 30 Seats', '<p>Any Science graduate with Mathematics as one of the core or complementary subject or graduate in Electronics / Information Technology/ Computer Science/ Computer Applications/ Engineering/ Technology with aggregate 60% marks or equivalent CGPA.</p>\r\n', '2021 Admission Syllabus', 'https://dca.cusat.ac.in/assets/syllabus/Msc%20AI%202021.pdf', 'course-2.jpg', 'ai-image.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dcaoth`
--

CREATE TABLE `dcaoth` (
  `id` int(35) NOT NULL,
  `AuthKey` mediumtext NOT NULL,
  `any` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dcaoth`
--

INSERT INTO `dcaoth` (`id`, `AuthKey`, `any`) VALUES
(1, '<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">\r\n    <div class=\"container py-5\">\r\n        <div class=\"row g-5\">\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <!-- <img src=\"img/logo.png\" width=\"250\" class=\"\">\r\n                </br>\r\n                </br> -->\r\n\r\n                <!-- <h4 class=\"text-white mb-3\">Quick Link</h4> -->\r\n                <h5 class=\"text-white mb-3\">Quick Links</h5>\r\n                <a class=\"btn btn-link\" href=\"https://www.cusat.ac.in/\" target=\"_blank\">CUSAT Website</a>\r\n                <a class=\"btn btn-link\" href=\"https://admissions.cusat.ac.in/\" target=\"_blank\">Admissions</a>\r\n                <!-- <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>\r\n                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>\r\n                <a class=\"btn btn-link\" href=\"\">FAQs & Help</a> -->\r\n            </div>\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <h5 class=\"text-white mb-3\">Address</h5>\r\n                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>Department of Computer Applications</br>\r\n                    Cochin University of Science and Technology, Cochin-682022</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>0484 - 2577602</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>0484 - 2576253</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-fax me-3\"></i>0484-2577602</p>\r\n                <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>dcahod@cusat.ac.in</p>\r\n                <!-- <div class=\"d-flex pt-2\">\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>\r\n                </div> -->\r\n            </div>\r\n            <div class=\"col-lg-6 col-md-4\">\r\n                <!-- <h4 class=\"text-white mb-3\">Gallery</h4> -->\r\n                <div class=\"row pt-2\">\r\n                    <iframe class=\"row\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.645178526911!2d76.32375311476514!3d10.04610989281956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c30d4ca4cff%3A0x6af14597a4b11a2a!2sDepartment%20of%20Computer%20Applications!5e0!3m2!1sen!2sin!4v1651077849312!5m2!1sen!2sin\" frameborder=\"0\" style=\"min-height: 300px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>\r\n                </div>\r\n            </div>\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <!-- <h4 class=\"text-white mb-3\">Newsletter</h4>\r\n                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p> -->\r\n                <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">\r\n                    <!-- <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\"> -->\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"container\">\r\n        <div class=\"copyright\">\r\n            <div class=\"row\">\r\n                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">\r\n                    &copy; <a class=\"border-bottom\" href=\"https://dca.cusat.ac.in/\">DCA CUSAT</a>, All Right Reserved.\r\n\r\n                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you\'d like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->\r\n                    <!--                   Designed By <a class=\"border-bottom\" href=\"https://infinio.co.in/#Home\">infinio.co.in</a><br><br> -->\r\n\r\n                </div>\r\n                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">Designed by\r\n                    &copy; <a class=\"border-bottom\" href=\"https://infiniio.co.in/\">INFINIO TECHNOLOGIES</a>\r\n                </div>\r\n                <!-- <div class=\"col-md-6 text-center text-md-end\">\r\n                    <div class=\"footer-menu\">\r\n                        <a href=\"\">Home</a>\r\n                        <a href=\"\">Cookies</a>\r\n                        <a href=\"\">Help</a>\r\n                        <a href=\"\">FQAs</a>\r\n                    </div>\r\n                </div> -->\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<!-- <div class=\"container-fluid bg-dark text-light footer mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">\r\n    <div class=\"container py-2\">\r\n        <div class=\"row g-5\">\r\n            <div class=\"col-lg-3 col-md-6\">\r\n                <div class=\"d-flex pt-2\">\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.facebook.com/DCACochinUniversity\"><i class=\"fab fa-facebook-f\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.youtube.com/channel/UCS25dOwkInTys91KSKmdfjw\"><i class=\"fab fa-youtube\"></i></a>\r\n                    <a class=\"btn btn-outline-light btn-social\" href=\"https://www.linkedin.com/in/dcacusat/\"><i class=\"fab fa-linkedin-in\"></i></a>\r\n                </div>\r\n            </div>\r\n        </div>\r\n\r\n    </div>\r\n    <div class=\"copyright\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-7 text-center text-md-start mb-3 mb-md-0 text-md-end\">\r\n                &copy; DCA CUSAT . All Right Reserved | Design By <a class=\"border-bottom\" href=\"https://infinio.co.in/\">Infinio</a>\r\n\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div> -->', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `iqacLink` varchar(250) NOT NULL,
  `about` mediumtext NOT NULL,
  `interest1` varchar(250) NOT NULL,
  `interest2` varchar(25) DEFAULT NULL,
  `interest3` varchar(25) DEFAULT NULL,
  `interest4` varchar(25) DEFAULT NULL,
  `interest5` varchar(25) DEFAULT NULL,
  `interest6` varchar(25) DEFAULT NULL,
  `interest7` varchar(25) DEFAULT NULL,
  `interest8` varchar(25) DEFAULT NULL,
  `interest9` varchar(25) DEFAULT NULL,
  `interest10` varchar(25) DEFAULT NULL,
  `education1` mediumtext DEFAULT NULL,
  `edDescription1` mediumtext DEFAULT NULL,
  `education2` mediumtext DEFAULT NULL,
  `edDescription2` mediumtext DEFAULT NULL,
  `education3` mediumtext DEFAULT NULL,
  `edDescription3` mediumtext DEFAULT NULL,
  `education4` mediumtext DEFAULT NULL,
  `edDescription4` mediumtext DEFAULT NULL,
  `education5` mediumtext DEFAULT NULL,
  `edDescription5` mediumtext DEFAULT NULL,
  `education6` mediumtext DEFAULT NULL,
  `edDescription6` mediumtext DEFAULT NULL,
  `experience1` mediumtext DEFAULT NULL,
  `experience2` mediumtext DEFAULT NULL,
  `experience3` mediumtext DEFAULT NULL,
  `experience4` mediumtext DEFAULT NULL,
  `experience5` mediumtext DEFAULT NULL,
  `experience6` mediumtext DEFAULT NULL,
  `experience7` mediumtext DEFAULT NULL,
  `experience8` mediumtext DEFAULT NULL,
  `experience9` mediumtext DEFAULT NULL,
  `experience10` mediumtext DEFAULT NULL,
  `expDescription1` mediumtext DEFAULT NULL,
  `expDescription2` mediumtext DEFAULT NULL,
  `expDescription3` mediumtext DEFAULT NULL,
  `expDescription4` mediumtext DEFAULT NULL,
  `expDescription5` mediumtext DEFAULT NULL,
  `expDescription6` mediumtext DEFAULT NULL,
  `expDescription7` mediumtext DEFAULT NULL,
  `expDescription8` mediumtext DEFAULT NULL,
  `expDescription9` mediumtext DEFAULT NULL,
  `expDescription10` mediumtext DEFAULT NULL,
  `publications` mediumtext DEFAULT NULL,
  `foundedProjects` varchar(250) DEFAULT NULL,
  `otherInfo` mediumtext DEFAULT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role1` mediumtext DEFAULT NULL,
  `role2` mediumtext DEFAULT NULL,
  `role3` mediumtext DEFAULT NULL,
  `role4` mediumtext DEFAULT NULL,
  `role5` mediumtext DEFAULT NULL,
  `role6` mediumtext DEFAULT NULL,
  `role7` mediumtext DEFAULT NULL,
  `role8` mediumtext DEFAULT NULL,
  `role9` mediumtext DEFAULT NULL,
  `role10` mediumtext DEFAULT NULL,
  `project1` mediumtext DEFAULT NULL,
  `project2` mediumtext DEFAULT NULL,
  `project3` mediumtext DEFAULT NULL,
  `project4` mediumtext DEFAULT NULL,
  `project5` mediumtext DEFAULT NULL,
  `project6` mediumtext DEFAULT NULL,
  `project7` mediumtext DEFAULT NULL,
  `project8` mediumtext DEFAULT NULL,
  `project9` mediumtext DEFAULT NULL,
  `project10` mediumtext DEFAULT NULL,
  `agency1` mediumtext DEFAULT NULL,
  `agency2` mediumtext DEFAULT NULL,
  `agency3` mediumtext DEFAULT NULL,
  `agency4` mediumtext DEFAULT NULL,
  `agency5` mediumtext DEFAULT NULL,
  `agency6` mediumtext DEFAULT NULL,
  `agency7` mediumtext DEFAULT NULL,
  `agency8` mediumtext DEFAULT NULL,
  `agency9` mediumtext DEFAULT NULL,
  `agency10` mediumtext DEFAULT NULL,
  `thumbname` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `designation`, `email`, `address`, `iqacLink`, `about`, `interest1`, `interest2`, `interest3`, `interest4`, `interest5`, `interest6`, `interest7`, `interest8`, `interest9`, `interest10`, `education1`, `edDescription1`, `education2`, `edDescription2`, `education3`, `edDescription3`, `education4`, `edDescription4`, `education5`, `edDescription5`, `education6`, `edDescription6`, `experience1`, `experience2`, `experience3`, `experience4`, `experience5`, `experience6`, `experience7`, `experience8`, `experience9`, `experience10`, `expDescription1`, `expDescription2`, `expDescription3`, `expDescription4`, `expDescription5`, `expDescription6`, `expDescription7`, `expDescription8`, `expDescription9`, `expDescription10`, `publications`, `foundedProjects`, `otherInfo`, `image`, `status`, `role1`, `role2`, `role3`, `role4`, `role5`, `role6`, `role7`, `role8`, `role9`, `role10`, `project1`, `project2`, `project3`, `project4`, `project5`, `project6`, `project7`, `project8`, `project9`, `project10`, `agency1`, `agency2`, `agency3`, `agency4`, `agency5`, `agency6`, `agency7`, `agency8`, `agency9`, `agency10`, `thumbname`) VALUES
(3, 'Dr. M. V. Judy', 'Professor and Head of the Department', 'judynair@cusat.ac.in', 'Department of Computer Applications, Cochin University of Science and Technology,', 'https://iqac.cusat.ac.in/Web/profile_view/184/Dr.M.V.JUDY', 'Dr. M. V. Judy is presently a Professor and Head of the Department of Computer Applications at Cochin University of Science & Technology, Kerala. She received her Ph.D. degree from Sastra Deemed University in 2009. She has 19 + years of teaching experience along with numerous research articles published in peer-reviewed Journals and International Conferences. She serves as the Principal Investigator for various Projects funded from DST, State Plan Grants, and Department of Biotechnology. Dr. Judy’s Research Interest includes Machine Learning, Big Data Analytics, Computational Biology and Affective Computing.', ' Data Mining ', 'Computational Biology', 'Big Data', 'Evolutionary Computing', 'Affective Computing', '', '', '', '', '', 'Ph.D. (Computer Science)', '2009', 'M.Phil. (Computer Science)', '2005', 'Master of Computer Applications (MCA)', '2002', '', '', '', '', '', '', 'Professor', 'Associate Professor', 'Associate Professor and H', 'Assistant Professor-III', 'Lecturer', '', '', '', '', '', 'Department of Computer Applications, Cochin University of Science and Technology (CUSAT), Cochin, Kerala.\r\nDecember 2019 - Till Date', 'Department of Computer Applications, Cochin University of Science and Technology (CUSAT), Cochin, Kerala.\r\nDecember 2016 - November 2019', 'Department of CS and IT AMRITA University (Kochi Campus)\r\nJune 2010 - December 2016', 'SASTRA University, Thanjavur.\r\nAugust 2003 - November 2009', 'Bishop Heber College, Trichy.\r\nAugust 2002 - August 2003', '', '', '', '', '', '<ul>\r\n	<li>Sabeen Govind P.V., M.V. Judy (2022). A Block-Based Data Hiding Technique Using Convolutional Neural Network. In: Roy S., Sinwar D., Perumal T., Slowik A., Tavares, J.M.R.S. (eds) Innovations in Computational Intelligence and Computer Vision . Advances in Intelligent Systems and Computing, vol 1424. Springer, Singapore.<a href=\"https://doi.org/10.1007/978-981-19-0475-2_21\">Read Online</a></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Soman G., Vivek M. V., M. V. Judy, Papageorgiou E, Gerogiannis VC. Precision-Based Weighted Blending Distributed Ensemble Model for Emotion Classification. Algorithms. 2022; 15(2):55.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Sabeen Govind and M. V. Judy, &ldquo;A Secure Framework for Remote Diagnosis in Health Care: A High Capacity Reversible Data Hiding Technique for Medical Images&rdquo;, Computers &amp; Electrical Engineering, An International Journal, Elsevier, SCI(2021), Impact factor: 2.67.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Sabeen Govind P.V., Varghese B.M. &amp; M.V. Judy , &ldquo;A high imperceptible data hiding technique using quorum function&quot;, Multimedia Tools and Applications (2021), Springer, Scopus Q1, SCI impact factor: 2.313</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>M. V. Judy, Autism spectrum disorders: Integration of the genome, transcriptome and the environment, Journal of the Neurological Sciences, Elsevier Publication, ISSN: 0022-510X15 May 2016, Vol 364, pp 167&ndash;176, SCI, Impact Factor: 2.126</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://scholar.google.ca/citations?user=e9Nuq2IAAAAJ&amp;hl=en\">Google Scholar Profile</a></li>\r\n</ul>\r\n', NULL, '', 'faculty-judy (1).jpg', 1, 'Co-PI', 'Principal Investigator', 'Supervisor ', 'Principal Investigator', 'Principal Investigator', 'Mentor', 'Co-PI', '', '', '', 'Establishment of Bioinformatics Centre, CUSAT', 'Visual Enhancement of Underwater Optical Images and, Accuracy Improvement of Target', 'Big data analytics research Facility', 'Development of a computational tool, algorithms for Gene finding, mapping of genotype – phenotype based on classification of clinical data for Autism spectrum disorder.', 'Implementation of enhanced Deep learning algorithms for Big data analytics in computational epidemiology', 'Automated real time traffic control system', 'Securing Clinical Information in Medical Images', '', '', '', 'Department of Biotechnology, Govt of India', 'Department of Science and Technology Frontiers And Futuristic Technologies', 'CUSAT – State Plan Grants 2016-2017', 'Department of Science and Technology Cognitive Science Division', 'CUSAT – State Plan Grants 2016-2017', 'IEDC - CUSAT7', 'Rajagiri Hospital/Rajagiri School of Social Sciences', '', '', '', ' MCA ,M.Phil. ,Ph.D.'),
(4, 'Dr. A. Sreekumar ', 'Professor', 'sreekumar@cusat.ac.in', 'Department of Computer Applications,\r\nCochin University of Science and Technology', 'https://iqac.cusat.ac.in/', 'Dr. A. Sreekumar is a Professor in the Department of Computer Applications, Cochin University of Science and Technology, Kerala. The Department of Computer Applications, CUSAT awarded him a Ph.D. degree in 2010. In addition to his 29+ years of teaching experience, he has published numerous research articles in peer reviewed journals and conferences both nationally and internationally.', 'Number Theory', 'Secret sharing', 'Visual Cryptography', 'Cryptography', 'Compiler Design', '', '', '', '', '', 'Ph.D. in Cryptography', '2010', 'M.Tech. Computer Science', '1992', 'M.Sc. Mathematics', '1986', '', '', '', '', '', '', 'Professor', 'Lecturer', '', '', '', '', '', '', '', '', 'Department of Computer Applications, Cochin University of Science and Technology (CUSAT), Cochin, Kerala\r\nMarch 1994 - Till Date', 'Sri Venkateswara College of Engineering (SVCE), Chennai\r\nJanuary 1993 - March 1994', '', '', '', '', '', '', '', '', '<ul>\r\n	<li>An extensive study on the evolution of context-aware personalized travel recommender systems . S. Renjith, A. Sreekumar, M. Jathavedan - Information Processing &amp; Management 57 (1), 102078</li>\r\n	<li>On constructing morphological erosion of intuitionistic fuzzy hypergraphs. P. M. Dhanya, A. Sreekumar, M. Jathavedan, P. B. Ramkumar - The Journal of Analysis 27 (2), 583-603</li>\r\n	<li>A novel secret sharing scheme using POB number system and CRT. M. P. Deepika, A. Sreekumar - Int J Appl Eng Res 11 (3), 2049-2054</li>\r\n	<li>An efficient secret sharing scheme for n out of n scheme using POB-number system. A. Sreekumar, S. B. Sundar - Hack. in 33</li>\r\n	<li><a href=\"https://scholar.google.com/citations?hl=en&amp;user=NwUWdm8AAAAJ&amp;view_op=list_works\">Google Scholar Profile</a></li>\r\n</ul>\r\n', NULL, '', 'faculty-sreekumar (1).jpg', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'M.Sc. ,M.Tech. ,Ph.D.'),
(5, 'Dr. Vinod P.', 'Professor', 'vinod.p@cusat.ac.in', 'Department of Computer Applications,\r\nCochin University of Science and Technology', 'https://iqac.cusat.ac.in/Web/profile_view/401/Prof.Dr.VINODP', 'Dr. Vinod P., is presently a Professor in the Department of Computer Applications at Cochin University of Science & Technology, Cochin, Kerala. He was a Postdoctoral Researcher at the Department of Mathematics, University of Padua, Italy, where he implemented the EU-H2020 project named TagitSmart. He was also a Postdoctoral researcher at Malaviya National Institute of Technology, Jaipur, Rajasthan under the ISEA project on Mobile Security. He holds his Ph.D. in Computer Engineering from Malaviya National Institute of Technology, Jaipur, India. Recently he was awarded Marie Sklodowska-Curie Post Doctoral fellowship under Horizon Europe .For the implementation of this project, he is approved 1,88,590.08/- Euros from the host institution of research which is the University of Padua, Italy . In 2021 he was awarded the Seal of Excellence for a Marie Skłodowska-Curie Individual Fellowship project proposal (Project Title OPTIMA: Organization Specific Threat Intelligence Mining and Sharing ) by the European Commission. For the implementation of this project, he is approved 100,000 Euros from the host institution of research which is the University of Padua, Italy. He has numerous research articles published in peer-reviewed Journals and International Conferences. He is a reviewer of a number of security journals few to name are IEEE Transactions of Information Forensics, IEEE Communication Surveys and Tutorials, Elsevier Computer Communications, and is also serving as a programme committee member in the International Conferences related to Computer and Information Security. Dr.Vinod’s area of interest is Adversarial Machine Learning, Malware Analysis, Context aware privacy-preserving Data Mining, and Natural Language Processing.', 'Adversarial Machine Learning', 'Context aware privacy-pre', 'Natural Language Processi', 'Malware Analysis', 'Data Mining', '', '', '', '', '', 'Post-Doctoral Researcher', '(“SPRITZ Security and privacy Group”), at the Department of Mathematics,University of Padua, Italy (2017-2018)\r\nEU H2020 Project TagItSmart! - A Smart Tags driven service platform for enabling ecosystems of connected objects.\r\nPrincipal Supervisor: Prof.Mauro Conti, University of Padua, Italy', 'Post-Doctoral Fellowship', 'Malaviya National Institute of Technology, Jaipur (2016-2017)\r\nProject: Mobile Security, Information Security Education Awareness-II (ISEA-II)\r\nPrincipal Supervisor: Prof.Manoj Singh Gaur, Director, Indian Institute of Technology, Jammu', 'Ph.D. in Computer Engineering', 'Malaviya National Institute of Technology, Jaipur (2008-2012)\r\nThesis: Malware Detection Methodologies\r\nPrincipal Supervisor: Prof.Vijaylaxmi, Malaviya National Institute of Technology, Jaipur\r\nCo-Supervisor: Prof. Manoj Singh Gaur Malaviya National Institute of Technology, Jaipur', 'M.Tech. Information Technology', 'School of IT, RGPV,Bhopal, India (Duration:2003-2005)', 'B.E. in Computer Science & Engineering', 'RGPV, Bhopal, India(Duration: 1997-2001)', '', '', 'Professor', 'Professor & Head', 'Associate Professor', 'Assistant Professor', 'Lecturer', 'Lecturer', '', '', '', '', 'Department of Computer Applications, Cochin University of Science and Technology (CUSAT), Cochin, Kerala\r\nNovember 2020 - Till Date', 'Department of Computer Science & Engineering, SCMS School of Engineering & Technology, Kerala, India\r\n2017-October 2020', 'Department of Computer Science & Engineering, SCMS School of Engineering & Technology, Kerala, India\r\n2012-2017', 'Department of Computer Science & Engineering, SCMS School of Engineering & Technology, Kerala, India\r\n2005-November 2012', 'Department of Computer Science & Engineering, Oriental Institute of Science & Technology, Bhopal, MadhyaPradesh, India\r\n2002-2003', 'Department of Computer Science & Engineering, Mandsaur Institute of Technology, MadhyaPradesh, India\r\n2001-2002', '', '', '', '', '<ul>\r\n	<li>Vishnu P. R., Vinod P., and Suleiman Y. Yerima. &quot;A Deep Learning Approach for Classifying Vulnerability Descriptions Using Self Attention Based Neural Network.&quot; Journal of Network and Systems Management 30, no. 1 (2022): 1-27.</li>\r\n	<li>Renjith G., Sonia Laudanna, S. Aji, Corrado Aaron Visaggio, and Vinod P. &quot;GANG-MAM: GAN based enGine for Modifying Android Malware.&quot; SoftwareX 18 (2022): 100977.</li>\r\n	<li>Asha S., and Vinod P. &quot;Evaluation of adversarial machine learning tools for securing AI systems.&quot; Cluster Computing 25, no. 1 (2022): 503-522.</li>\r\n	<li>Ashik, Mathew, A. Jyothish, S. Anandaram, Vinod P., Francesco Mercaldo, Fabio Martinelli, and Antonella Santone. &quot;Detection of Malicious Software by Analyzing Distinct Artifacts Using Machine Learning and Deep Learning Algorithms.&quot; Electronics 10, no. 14 (2021): 1694.</li>\r\n	<li>Anandhi, V., Vinod P., and Varun G. Menon. &quot;Malware visualization and detection using DenseNets.&quot; Personal and Ubiquitous Computing (2021): 1-17.</li>\r\n	<li>Anupama, M. L., Vinod P., Corrado Aaron Visaggio, M. A. Arya, Josna Philomina, Rincy Raphael, Anson Pinhero, K. S. Ajith, and P. Mathiyalagan. &quot;Detection and robustness evaluation of android malware classifiers.&quot; Journal of Computer Virology and Hacking Techniques (2021): 1-24.</li>\r\n	<li><a href=\"https://scholar.google.co.in/citations?user=l9y5N3QAAAAJ&amp;hl=en\">Google Scholar Profile</a></li>\r\n</ul>\r\n', NULL, '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>namename</td>\r\n			<td>namename</td>\r\n			<td>namename</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 'faculty-vinod (1).jpg', 1, 'abc', '', '', '', '', '', '', '', '', '', 'abc', '', '', '', '', '', '', '', '', '', 'abc', '', '', '', '', '', '', '', '', '', 'M.Tech. ,Ph.D.');

-- --------------------------------------------------------

--
-- Table structure for table `gallerimages`
--

CREATE TABLE `gallerimages` (
  `id` int(35) NOT NULL,
  `image` varchar(250) NOT NULL,
  `galleryID` int(35) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallerimages`
--

INSERT INTO `gallerimages` (`id`, `image`, `galleryID`, `name`) VALUES
(7, 'galleryImages/faculty-vinod (1).jpg', 22, 'test gallery'),
(8, 'galleryImages/faculty-sreekumar (1).jpg', 22, 'test gallery'),
(9, 'galleryImages/faculty-judy (1).jpg', 22, 'test gallery'),
(10, 'galleryImages/faculty-padmakumary.jpg', 22, 'test gallery'),
(11, 'galleryImages/faculty-sindhu.jpg', 22, 'test gallery'),
(12, 'galleryImages/innpasco2017.jpg', 22, 'test gallery'),
(13, 'galleryImages/innpasco4_0.jpg', 22, 'test gallery'),
(14, 'galleryImages/thumb-6.jpg', 22, 'test gallery'),
(15, 'galleryImages/forensic.jpg', 22, 'test gallery'),
(16, 'galleryImages/thumb-ica.jpg', 22, 'test gallery'),
(17, 'galleryImages/faculty-vinod (1).jpg', 23, 'new gallery'),
(18, 'galleryImages/faculty-sreekumar (1).jpg', 23, 'new gallery'),
(19, 'galleryImages/faculty-judy (1).jpg', 23, 'new gallery'),
(20, 'galleryImages/faculty-padmakumary.jpg', 23, 'new gallery'),
(21, 'galleryImages/faculty-sindhu.jpg', 23, 'new gallery'),
(22, 'galleryImages/faculty-pramod.jpg', 23, 'new gallery'),
(23, 'galleryImages/faculty-kannan.jpg', 23, 'new gallery'),
(24, 'galleryImages/faculty-deepika.jpg', 23, 'new gallery'),
(25, 'galleryImages/faculty-rafida.jpg', 23, 'new gallery'),
(26, 'galleryImages/faculty-vishnu.jpg', 23, 'new gallery'),
(27, 'galleryImages/faculty-vinod.jpg', 23, 'new gallery'),
(28, 'galleryImages/faculty-judy.jpg', 23, 'new gallery'),
(29, 'galleryImages/faculty-sabu.jpg', 23, 'new gallery'),
(30, 'galleryImages/faculty-sreekumar.jpg', 23, 'new gallery'),
(31, 'galleryImages/faculty-pramod.jpg', 24, 'new gallery'),
(32, 'galleryImages/faculty-kannan.jpg', 24, 'new gallery'),
(33, 'galleryImages/faculty-deepika.jpg', 24, 'new gallery'),
(34, 'galleryImages/faculty-rafida.jpg', 24, 'new gallery'),
(35, 'galleryImages/faculty-vishnu.jpg', 24, 'new gallery'),
(36, 'galleryImages/faculty-vinod.jpg', 24, 'new gallery'),
(37, 'galleryImages/faculty-judy.jpg', 24, 'new gallery'),
(38, 'galleryImages/faculty-sabu.jpg', 24, 'new gallery'),
(39, 'galleryImages/faculty-sreekumar.jpg', 24, 'new gallery'),
(40, 'galleryImages/faculty-vinod (1).jpg', 25, 'TEST'),
(41, 'galleryImages/faculty-sreekumar (1).jpg', 25, 'TEST'),
(42, 'galleryImages/faculty-judy (1).jpg', 25, 'TEST'),
(43, 'galleryImages/faculty-padmakumary.jpg', 25, 'TEST'),
(44, 'galleryImages/faculty-sindhu.jpg', 25, 'TEST'),
(45, 'galleryImages/innpasco2017.jpg', 25, 'TEST'),
(46, 'galleryImages/innpasco4_0.jpg', 25, 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `thumbnail`, `status`) VALUES
(22, 'test gallery', 'innpasco2017.jpg', 0),
(23, 'new gallery', '1.jfif', 0),
(24, 'new gallery', '1.jfif', 1),
(25, 'TEST', '1 (2).jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `message` varchar(6000) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltSts` tinyint(1) DEFAULT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `name`, `message`, `photo`, `status`, `dltSts`, `designation`) VALUES
(7, 'Dr. M. V. JUDY', '<p>Welcome to the Department of Computer Applications!!!<br />\r\nAs the Department of Computer Applications, we are committed to providing education, research, and innovation that will impact our world for the better, and we strive to develop global leaders and socially responsible professionals. We seek to provide our students with a balance of both intellectual and practical experiences to enable them to serve the needs of society.<br />\r\n<strong>&ldquo;Let us aspire to greatness by immersing ourselves in knowledge &ldquo;</strong></p>\r\n', 'HODs desk.jpg', 1, NULL, 'Professor and Head of the Department.');

-- --------------------------------------------------------

--
-- Table structure for table `mous`
--

CREATE TABLE `mous` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mous`
--

INSERT INTO `mous` (`id`, `name`, `image`, `year`, `description`, `status`, `dltStatus`) VALUES
(2, '  Kerala Police Academy', 'kp.jpg', '2019', 'Cochin University of Science and Technology signed an MoU with Kerala Police Academy (KEPA) under the initiative of the Department of Computer Applications. The objective of the MoU is to promote scientific and cultural cooperation between Kerala Police Academy and Cochin University of Science and Technology. KEPA had identified the Department as their potential collaborator and under this collaboration, discussions were conducted, workshops were organized, students were given internships at KEPA, and seat reservation was done for KEPA people in the MSC Computer Science with specialization in Data Science program run by the Department.', 1, 0),
(3, ' Wipro Technology', 'wiprologo.jpg', '2021', 'The intention of the Parties is to engage in research work on blockchain security in publicly available information and define processes or approaches to enhance the security of blockchain components. The outcome of the research work will be whitepapers that provide an overview of measures to enhance blockchain security(“Initiative”).', 1, 0),
(4, ' UNIVERSITY OF THESSALY', 'ths.jpg', 'SCHOOL OF TECHNOLOGY DEPT. OF ENERGY SYSTEMS 2021', 'UTH and CUSAT wish to promote cooperation between the two institutions in education and in academic research; therefore, they agree to cooperate in the following areas: Joint research, Joint proposal submission, Dissemination of results, Exchange of staff, and Any other relevant activity.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `projectname` varchar(250) NOT NULL,
  `publicationDate` varchar(250) NOT NULL,
  `member1` varchar(250) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltStatus` tinyint(1) NOT NULL,
  `member2` varchar(255) DEFAULT NULL,
  `member3` varchar(255) DEFAULT NULL,
  `member4` varchar(255) DEFAULT NULL,
  `member5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patents`
--

INSERT INTO `patents` (`id`, `name`, `projectname`, `publicationDate`, `member1`, `description`, `image`, `status`, `dltStatus`, `member2`, `member3`, `member4`, `member5`) VALUES
(2, 'Dr. Santosh Kumar M. B.', 'PORTABLE AGRICULTURE NETWORK SYSTEM', '24/05/2019', 'Dr. Santosh Kumar M. B.', 'Banana plant farmers are facing severe problems of uprooting and breakage of their fully grown plants due to climatic (wind or other) effects. They find it difficult to safeguard their plants from such natural forces owing to their ignorance as to how and where failure could get started. In order to predict failure pattern of banana plants through a Finite Element Analysis (FEA), the mechanical properties of the plants are essential. Isotropic behavior is assumed for the banana plants and the Young’s modulus of elasticity, Poisson’s ratio, compressive strength and flexural strength of the material of stems of banana plants were determined.', 'patent-santhosh-kumar.jpg', 1, 0, 'Kannan Balakrishnan', 'Sunilkumar Neelakantapillai', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recognition`
--

CREATE TABLE `recognition` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `recognition` varchar(6000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltSts` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recognition`
--

INSERT INTO `recognition` (`id`, `name`, `designation`, `recognition`, `status`, `dltSts`) VALUES
(2, '  Dr. Vinod P.', 'Professor', '<p><strong>MARIE SKLODOWSKA</strong></p>\r\n\r\n<p>Post Doctoral fellowship (Seal of Excellence) under Horizon Europe, for the implementation of this project, he is approved 1,88,590.08/- Euros from the host institution of research which is the University of Padua, Italy.</p>\r\n\r\n<p><br />\r\n<strong>IN 2021 HE WAS AWARDED THE SEAL OF EXCELLENCE FOR A MARIE SKŁODOWSKA</strong></p>\r\n\r\n<p>Curie Individual Fellowship project proposal (Project Title OPTIMA: Organization Specific Threat Intelligence Mining and Sharing ) by the European Commission, approved 100,000 Euros from the host institution of research which is the University of Padua, Italy.</p>\r\n\r\n<p><br />\r\n<strong>SPADE</strong></p>\r\n\r\n<p>Signature-based Packer Detection, In Symposium on Information Security (SIS 2013), BITS Pilani, Hyderabad campus, November 15-16, 2013</p>\r\n', 1, 0),
(3, '  Dr. Rafidha Rehiman K. A.', 'Assistant Professor', '<p><strong>APPRECIATION FROM KEPA(2020)</strong></p>\r\n\r\n<p>Kerala Police Academy</p>\r\n\r\n<p><br />\r\n<strong>MENTOR TO FINAL SELECTED PROJECT FOR SMART INDIA HACKATHON(2017)</strong></p>\r\n\r\n<p>Ministry of HRD</p>\r\n\r\n<p><br />\r\n<strong>MENTOR TO FINAL SELECTED PROJECT FOR SMART INDIA HACKATHON(2017)</strong></p>\r\n\r\n<p>Ministry of Road Transport and Highways</p>\r\n', 1, 0),
(4, 'Dr. M. V. Judy', 'Professor', '<p><strong>APPRECIATION FROM CUSAT(2020)</strong></p>\r\n\r\n<p>CUSAT</p>\r\n\r\n<p><br />\r\n<strong>APPRECIATION FROM CUSAT WSC(2021)</strong></p>\r\n\r\n<p>CUSAT</p>\r\n\r\n<p><br />\r\n<strong>APPRECIATION FROM IEEE MALABAR SUBSECTION(2020)</strong></p>\r\n\r\n<p>IEEE</', 1, 0),
(5, 'Dr. B. Kannan', 'Emeritus Professor', '<p><strong>APPRECIATION FROM COLLEGE OF ENGINEERING KIDANGOOR(2021)</strong></p>\r\n\r\n<p>College of Engineering Kidangoor</p>\r\n', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `regulations`
--

CREATE TABLE `regulations` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `year` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regulations`
--

INSERT INTO `regulations` (`id`, `name`, `file`, `status`, `year`) VALUES
(4, 'Ph.D Regulations', 'PhDregulations_2018.pdf', 1, '2018');

-- --------------------------------------------------------

--
-- Table structure for table `researchguide`
--

CREATE TABLE `researchguide` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `area` varchar(6000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `researchguide`
--

INSERT INTO `researchguide` (`id`, `name`, `designation`, `area`, `image`, `status`) VALUES
(3, 'Dr. A. Sreekumar', 'Professor', '<ul>\r\n	<li>Algorithms</li>\r\n	<li>Graph Theory</li>\r\n	<li>Image Processing</li>\r\n	<li>Machine Intelligence</li>\r\n</ul>\r\n', 'faculty-sreekumar.jpg', 1),
(4, 'Dr. Sabu M. K.', 'Professor', '<ul>\r\n	<li>Rough Set Theory</li>\r\n	<li>Data Mining</li>\r\n	<li>Machine Learning</li>\r\n	<li>Artificial Intelligence</li>\r\n</ul>\r\n', 'faculty-sabu.jpg', 1),
(5, 'Dr. M. V. Judy ', 'Professor', '<ul>\r\n	<li>Data Science</li>\r\n	<li>Business Data Analytics</li>\r\n	<li>Machine Learning</li>\r\n	<li>Computational Biology</li>\r\n</ul>\r\n', 'faculty-judy.jpg', 1),
(6, 'Dr. Vinod P.', 'Professor', '<ul>\r\n	<li>Cyber Security</li>\r\n	<li>Malware Analysis</li>\r\n	<li>Machine Learning</li>\r\n</ul>\r\n', 'faculty-vinod.jpg', 1),
(7, 'Dr. Vishnukumar S.', 'Associate Professor', '<ul>\r\n	<li>Digital Image Processing</li>\r\n	<li>Machine Learning &amp; Deep Learning</li>\r\n	<li>Soft Computing</li>\r\n	<li>Computer Vision</li>\r\n</ul>\r\n', 'faculty-vishnu.jpg', 1),
(8, 'Dr. Rafidha Rehiman K. A.', 'Assistant Professor', '<ul>\r\n	<li>Cyber Security</li>\r\n	<li>Cryptography</li>\r\n</ul>\r\n', 'faculty-rafida.jpg', 1),
(9, 'Dr. Deepika M. P.', 'Assistant Professor', '<ul>\r\n	<li>Number Theory</li>\r\n	<li>Cryptography</li>\r\n	<li>Visual Cryptography</li>\r\n	<li>Quantum Cryptography</li>\r\n	<li>Secret Sharing</li>\r\n	<li>Information Security</li>\r\n</ul>\r\n', 'faculty-deepika.jpg', 1),
(10, 'Dr. B. Kannan', 'Emeritus Professor', '<ul>\r\n	<li>Algorithms</li>\r\n	<li>Graph Theory</li>\r\n	<li>Image Processing</li>\r\n</ul>\r\n', 'faculty-kannan.jpg', 1),
(11, 'Dr. K. V. Pramod', 'Emeritus Professor', '<ul>\r\n	<li>Mathematics</li>\r\n	<li>Simulation &amp; Modelling</li>\r\n</ul>\r\n', 'faculty-pramod.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `researchlab`
--

CREATE TABLE `researchlab` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `facility2` varchar(250) DEFAULT NULL,
  `facility3` varchar(250) DEFAULT NULL,
  `facility4` varchar(250) DEFAULT NULL,
  `facility5` varchar(250) DEFAULT NULL,
  `facility6` varchar(250) DEFAULT NULL,
  `facility7` varchar(250) DEFAULT NULL,
  `facility8` varchar(250) DEFAULT NULL,
  `facility9` varchar(250) DEFAULT NULL,
  `facility10` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `researchlab`
--

INSERT INTO `researchlab` (`id`, `name`, `image`, `content`, `status`, `facility2`, `facility3`, `facility4`, `facility5`, `facility6`, `facility7`, `facility8`, `facility9`, `facility10`) VALUES
(5, 'A I Research', 'lab-ai.jpg', 'Lenovo Thinksystem SR670 GPU server with Intel Xeon Gold 6226R processor', 1, 'GPUs - 2XTesla A100 with 40 GB memory each', '', '', '', '', '', '', '', ''),
(6, 'Cyber Intelligence', 'lab-cyber-for.jpg', 'High end Forensic Workstation : FRED', 1, 'All-in-one Field Cyber Forensic Kit : VPER kit', 'Write Blockers Kit with Forensic Duplicator : ULTRA Kit', 'Universal Forensic Extraction Kit', 'Digital Image Forensic Software : Amped Authenticate', 'Cyber Forensic Analysis Software : Encase V7', 'Forensic Tool Kit : FTK-6', '', '', ''),
(7, 'Data Science', 'lab-data.jpg', 'Big Data Analytics platform with high performance hadoop cluster comprising of', 1, 'Name node server - Fujitsu primergy RX2540 M4', '2 X Data node servers- Fujitsu primergy RX2530 M4', 'Cluster Supports Hortonworks Data platform, HDP 3.0', '10 X GPU based high performance work stations for deep learning', '', '', '', '', ''),
(8, 'Machine Learning', 'ailab.jpg', '11 LENOVO intel core-i7 All in one PCs', 1, 'Windows 8', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `researchscholar`
--

CREATE TABLE `researchscholar` (
  `id` int(255) NOT NULL,
  `reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `scholarstatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `researchscholar`
--

INSERT INTO `researchscholar` (`id`, `reg`, `name`, `guide`, `title`, `year`, `status`, `scholarstatus`) VALUES
(3, '  2528', 'James K.N', 'Dr. Babu Sundar S', 'Real Time Raga Detection and Analysis Using Computer', '2009', 1, 'Completed'),
(4, '3845', 'Malathi S', 'Dr B Kannan', 'Software Engineering	', '2009', 1, 'Current'),
(5, '2529', 'Sreekumar A', 'Dr. Babu Sundar S', 'Secret Sharing Schemes using Visual Cryptography', '2010', 1, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `studentslab`
--

CREATE TABLE `studentslab` (
  `id` int(15) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` varchar(250) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `facility2` varchar(250) DEFAULT NULL,
  `facility3` varchar(250) DEFAULT NULL,
  `facility4` varchar(250) DEFAULT NULL,
  `facility5` varchar(250) DEFAULT NULL,
  `facility6` varchar(250) DEFAULT NULL,
  `facility7` varchar(250) DEFAULT NULL,
  `facility8` varchar(250) DEFAULT NULL,
  `facility9` varchar(250) DEFAULT NULL,
  `facility10` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentslab`
--

INSERT INTO `studentslab` (`id`, `name`, `image`, `content`, `status`, `facility2`, `facility3`, `facility4`, `facility5`, `facility6`, `facility7`, `facility8`, `facility9`, `facility10`) VALUES
(2, 'MCA Computer', 'lab-mca.jpg', '90 PCs', 1, 'Windows 8/10', 'Ubuntu 16.04/18.04', '', '', '', '', '', '', ''),
(3, 'M.Sc. Computer Science AI Lab', 'lab-msc-ai.jpg', '30 PCs', 1, 'Ubuntu 18.04', '', '', '', '', '', '', '', ''),
(4, 'M.Sc. Computer Data Science Lab', 'lab-msc2.jpg', '30 intel core i7(10th generation) PCs', 1, 'Windows 10 Pro', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `techfest`
--

CREATE TABLE `techfest` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` varchar(35) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `techfest`
--

INSERT INTO `techfest` (`id`, `name`, `year`, `image`, `link`, `status`) VALUES
(2, 'Innpasco 4.0', '2019', 'innpasco4_0.jpg', 'https://dca.cusat.ac.in/assets/pdf/INNPASCO%204.pdf', 1),
(3, 'Innpasco', '2017', 'innpasco2017.jpg', 'https://dca.cusat.ac.in/assets/pdf/INNPASCO_TECHFEST-2017.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `technicalstaff`
--

CREATE TABLE `technicalstaff` (
  `id` int(25) NOT NULL,
  `name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicalstaff`
--

INSERT INTO `technicalstaff` (`id`, `name`, `designation`, `image`, `status`) VALUES
(2, 'Sindhu P. Menon ', 'Programme Assistant', 'faculty-sindhu.jpg', 1),
(3, 'Padmakumary A. P.', 'Technical Officer Grade I', 'faculty-padmakumary.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `message` varchar(6000) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `batch` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dltStatus` tinyint(1) NOT NULL,
  `course` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `message`, `designation`, `batch`, `status`, `dltStatus`, `course`) VALUES
(3, ' Navami S. Binu', 'navami.png', 'I feel very proud and blessed to be a part of the DCA family. I have received such wonderful teachers who guided me throughout the course. The faculties have very good subject knowledge. The non-teaching staff are really supportive and friendly towards each student. Everyone experiences a new life with new environment and learns life skills that go beyond education. Thank you, DCA for every life lessons', 'Systems Engineer , TCS Digital', '2019-2022', 1, 0, 'MCA '),
(5, 'Mukesh Chandra Suyal', 'Mukesh.png', 'Hello, this is Mukesh.\r\nI passed out in 2009 from DCA, CUSAT. We were really fortunate to be a part of the department, and it was overall a great experience with good memories. The faculties were great and helped us excel in our journey. The curriculum is one of the best, which has practical implications. The labs are advanced and equipped with the latest technology stack. The lush green campus is really exceptional with good ambience. Best wishes!', 'Senior Developer, Experian', '2006-2009', 1, 0, 'MCA'),
(6, 'Akash Kumar', 'akash.png', 'The MCA program of DCA CUSAT is one of the best programs available in India. All subjects are upgraded and continue with the latest market demands. It has been a great learning experience for me to be a part of such a great institution, which has helped me to develop my overall personality.. Thanks to all the faculty and staff at DCA.', 'R&D (High-Performance Computing), AMD Bangalore', ' 2006-2009', 1, 0, 'MCA'),
(7, 'Rajat V. K.', 'rajath.png', 'I am Rajat V. K., a 2016 batch graduate from DCA,CUSAT and currently employed as the Quality Assurance Lead at Mariapps Marine Solutions Pvt Ltd in Kochi. The faculty, staff, and placement department helped me acquire the skills necessary for a successful corporate career. Having earned my MCA from CUSAT, and being a CUSATian, are accomplishments that fill me with enormous pride. I\'d like to express my gratitude to the faculty and staff for helping me become a \'Better Person\'.', 'QA Lead, Mariapps', '2013-16', 1, 0, 'MCA '),
(10, 'Basil T. Paul', 'Basil.png', 'Deciding to go with the MCA at DCA, CUSAT was one of the best decisions that I have made in my life. They have given me an ample amount of opportunities for building up my career. Because of that, I was able to get into TCS Digital through campus placement where I started my career and took me to greater heights. The valuable support from all the faculty members and advice are one of the pillars that made me who I am today.', 'Software Engineer, Boston Consulting Group (BCG)', '2014-2017', 1, 0, 'MCA'),
(11, 'Rejin Jose K.', 'rejin.png', 'My post-graduation experience at DCA is a real gemstone in my life. Enterprising professors, facilities, and a vibrant student community provided me with a great framework for exploring research and entrepreneurial possibilities. The diverse community and academic autonomy of the university fueled my personal and professional journey. I am always grateful for the support and knowledge served by the entire department.', 'AI Engineer at IQVIA', '2016-2018', 1, 0, 'MCA'),
(12, 'Padma Nair', 'padma.png', 'Cusat campus is very unique with huge labs, an amphitheater and a wonderful library. Lot of events are conducted like Innpasco(DCA fest), Sargam(cusat arts fest) and many more. You will learn, grow and have a very changed perspective due to the diverse environment here. DCA provides many placement opportunities, good faculty etc. Be it education, friendship or memories, I have learnt a lot from here and so will U!', 'Content Writer, Wala Services', ' 2017-2020', 1, 0, 'MCA'),
(13, 'Jino P. J.', 'jino.png', 'DCA,CUSAT is the best with the Faculty focusing on developing our natural skills to implement it in IT interdisciplinary areas. As a previous research scholar, NCILC was one platform which interacted with pioneers in my area. Through this, I got an internship at Indian Statistical Institute, Kolkata. The placement cell gives guidelines and ample opportunities for industry interaction. An eternity of memorable experiences.', 'DataScientist, UVJ Technologies Pvt. Ltd.', '2018', 1, 0, 'Ph.D. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('admin@dcacusat', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(35) NOT NULL,
  `name` varchar(250) NOT NULL,
  `year` varchar(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `year`, `image`, `link`, `status`) VALUES
(2, 'Data Science Workshop', '2022', 'thumb-6.jpg', 'https://dca.cusat.ac.in/assets/pdf/Data%20Science%20Workshop-RGNIYD%20&%20CUSAT.pdf', 1),
(3, 'Winter School on Cyber Security and Threat Intelligence', '2022', 'thumb-6.jpg', 'https://dca.cusat.ac.in/CyberWS2022/', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completedresearchscholar`
--
ALTER TABLE `completedresearchscholar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dcaoth`
--
ALTER TABLE `dcaoth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerimages`
--
ALTER TABLE `gallerimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleryID` (`galleryID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mous`
--
ALTER TABLE `mous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recognition`
--
ALTER TABLE `recognition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regulations`
--
ALTER TABLE `regulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchguide`
--
ALTER TABLE `researchguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchlab`
--
ALTER TABLE `researchlab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchscholar`
--
ALTER TABLE `researchscholar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentslab`
--
ALTER TABLE `studentslab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techfest`
--
ALTER TABLE `techfest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicalstaff`
--
ALTER TABLE `technicalstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `completedresearchscholar`
--
ALTER TABLE `completedresearchscholar`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dcaoth`
--
ALTER TABLE `dcaoth`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallerimages`
--
ALTER TABLE `gallerimages`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mous`
--
ALTER TABLE `mous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patents`
--
ALTER TABLE `patents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recognition`
--
ALTER TABLE `recognition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regulations`
--
ALTER TABLE `regulations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `researchguide`
--
ALTER TABLE `researchguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `researchlab`
--
ALTER TABLE `researchlab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `researchscholar`
--
ALTER TABLE `researchscholar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentslab`
--
ALTER TABLE `studentslab`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `techfest`
--
ALTER TABLE `techfest`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technicalstaff`
--
ALTER TABLE `technicalstaff`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallerimages`
--
ALTER TABLE `gallerimages`
  ADD CONSTRAINT `gallerimages_ibfk_1` FOREIGN KEY (`galleryID`) REFERENCES `gallery` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
