-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2024 at 11:56 PM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2k_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_category` varchar(100) NOT NULL,
  `date_posted` date NOT NULL,
  `news_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_brief_content` varchar(50) NOT NULL,
  `news_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_category`, `date_posted`, `news_content`, `news_brief_content`, `news_image`) VALUES
(1, 'The Chief Executive Officer (CEO) at A2K Group', '', '2023-10-02', 'We would like to take the time to introduce some of our key executive staff members - each of whom is looking forward to working together towards providing bespoke digitalization services in the Philippines. First up is Daniel Jimenez, the Chief Executive Officer (CEO) at A2K Group. He is responsible for leading A2K\'s executive team, overseeing corporate affairs, and setting the strategic direction of the company. With corporate, non-profit, and research experience across the world, Daniel is passionate about bringing the benefits of engineering and architecture to diverse and growing communities through sustainable development and social entrepreneurship. Daniel holds a Master\'s degree in Engineering for Sustainable Development from the University of Cambridge, as well as a Master\'s degree in Structural Engineering and BSc in Civil and Environmental Engineering from the Massachusetts Institute of Technology. He was awarded a Gates Scholarship to study at the University of Cambridge, and a US Fulbright Scholarship for his research in the Philippines.', 'We would like to take the time to introduce some o', '/images/News/daniel.jpg'),
(2, 'DHVSU, A2K Group forge collaboration to heighten academic linkages', '', '2023-09-18', 'In line with the vision of Don Honorio Ventura State University (DHVSU) of becoming one of the recognizable universities in the ASEAN region in producing globally competitive professionals, the university signed a Memorandum of Understanding (MOU) with A2K Research and Experimental Development in Engineering and Technology held at the Caf&eacute; Honorio on September 18.\r\nThe MOU signing indicates mutual understanding between DHVSU and A2K group in pursuing academic excellence, scientific research, student internships, and workforce development.\r\nOffices of Research, Innovation, Training, and Extension (RITE) cluster will be the offices in charge of fulfilling the areas of cooperation which include faculty exchange, research opportunities, organizing symposia, advancement in teaching methodologies, student development, and promotion of activities and initiatives.\r\nAs a support to the activity, DHVSU executives, Dr. Enrique G. Baking, University President; Engr. Reden M. Hernandez, Vice President for Academic Affairs and concurrent OIC - Executive Vice President, OIC, Vice President for Administration and Finance; Dr. Dolores T. Quiambao, Vice President for Student Affairs and Services and concurrent dean of Graduate School; and Dr. Ranie B. Canlas, Vice President for RITE, are present in the MOU signing.\r\nDirectors, center managers, and staff under the RITE cluster are also present as guests in the small gathering for the grand opening of A2K Research and Experimental Development in Engineering and Technology local office.</p><br> \r\n\r\n<p class=\"text-start\">See more photos here -<a href=\"https://dhvsu.edu.ph/index.php/gallery-menu/linkages?fbclid=IwAR1UI-f-ewvTnqSFZ9l_JG2XTfG19e4ErcKWIod1YFouxFI7WoLxdFn38PU#dhvsu-a2k-group-forge-collaboration-to-heighten-academic-linkages\" style=\"word-wrap: break-word;\">https://dhvsu.edu.ph/index.php/gallery-menu/linkages?fbclid=IwAR1UI-f-ewvTnqSFZ9l_JG2XTfG19e4ErcKWIod1YFouxFI7WoLxdFn38PU#dhvsu-a2k-group-forge-collaboration-to-heighten-academic-linkages</a>\r\n\r\n<br><br>Credits: <i>SFB / Information Officer</i>\r\n<br>Photo credits: <i>Contributed photos from Con Sibug | Extension Services Management Office<br> A2K Group', 'We wanted to share a few remarks from our CEO, Mr ', 'images/News/dhvsu-collaboration.jpg'),
(3, 'Opening of our first office in the Philippines! ', '', '2023-09-18', 'We are thrilled to announce the opening of our first office in the Philippines! Located in Bacolor, we opened our doors to demonstrate our technical capabilities and introduce our staff members. We will be offering local courses exposing school-aged children to technology and innovation, and internships for university students very soon - watch this space for more information.', 'Bacolor, we opened our doors to demonstrate our te', 'images/News/cutting-of-ribbon.jpg'),
(4, 'A2K Group signed a Memorandum of Understanding (MOU) with the Don Honorio Ventura State University', '', '2023-09-18', 'September 18th marked the day that A2K Group signed a Memorandum of Understanding (MOU) with the Don Honorio Ventura State University (DHVSU). The collaboration will promote institutional exchanges between faculty and staff from each partner institution, enable internships for students, and allow the organization of symposia, conferences, short courses and meetings on research issues.</p><br>\r\n<p><span style=\"text-align: left; word-wrap: break-word;\"><i>See more photos here -</i><a href=\"https://www.facebook.com/a2kgrouporg/posts/pfbid094adZgWXWjGKWaMbp8Up6fx4xd3goZFAEDPKTnMpb6BUS6J6R3S4KvGTDviqsAc9l\">https://www.facebook.com/a2kgrouporg/posts/pfbid094adZgWXWjGKWaMbp8Up6fx4xd3goZFAEDPKTnMpb6BUS6J6R3S4KvGTDviqsAc9l</a></span>', 'September 18th marked the day that A2K Group signe', 'images/News/signing-of-mou.jpg'),
(5, 'Chairman of A2K Group\'s Management Board, Mr Jasdeep Sandhu.', '', '2023-10-04', 'Today, we are pleased to introduce the Chairman of A2K Group\'s Management Board, Mr Jasdeep Sandhu. His responsibilities include leading the Board in setting the strategic direction and governance standards for A2K Group, as well as overseeing all aspects of the business. Jasdeep Sandhu is experienced in supporting and promoting Southeast Asian talent through his work with artists around the region. Having founded Gajah Gallery ( https://gajahgallery.com/ ) in 1996, the Yogya Art Lab (YAL) in 2012, and a third exhibition space in Jakarta in 2022, he is committed to promoting artists from the region and highlighting their international relevance. Over the years, the gallery has reinvigorated academic contributions to the category of Southeast Asian art and history. Mr Sandhu\'s commitment to Southeast Asian talent and its future is what drives his passion for A2K\'s work towards providing digitalization services and educational opportunities in the region. Mr Jasdeep Sandhu holds a LLB (Honours) from the University of Warwick and was awarded the prestigious Patron of Heritage Award in 2008 by the National Heritage Board of Singapore.', 'Today, we are pleased to introduce the Chairman of', 'images/News/a2k-chairman.jpg'),
(6, 'A2K Group donates 3D printers, filaments to DHVSU', '', '2023-11-07', 'In a heightened collaboration with Don Honorio Ventura State University (DHVSU), A2K Research and Experimental Development in Engineering and Technology (A2K Group) donated three 3D printers and six 3D filaments to enhance the educational technology experiences of the Honorian community.\r\nThe donations were formally handed over on November 6, 2023, through the Vice President for Research, Innovation, Training, and Extension Office.\r\nA2K Group, led by its Chief Operations Officer Mark Nuqui and Chief Finance Officer Ronna Quiambao Silos, vision to extend digitalization services and strategies to organizations like DHVSU.\r\nThis includes providing solutions for creating digital tools and digitalization ventures that promote early exposure to innovative skills. <br><br>Credits: <i>SFB / Information Officer</i><br>\r\nPhoto credits: <i>Extension Services Management Office,Training Services Office,and Knowledge Management and Innovation Office</i>', 'In a heightened collaboration with Don Honorio Ven', 'images/News/399291880_884646140120910_2346009528985464653_n.jpg'),
(7, 'First OJT Recruitment Process This Year', '', '2024-02-15', 'We are happy to present the results of our first OJT recruitment process this year. Thank you very much for the overwhelming interest, and CONGRATULATIONS to those selected!', 'We are happy to present the results of our first O', 'images/News/First_OJT_Process.jpg'),
(8, 'We Celebrated the Completion of Our Office Extension', '', '2024-03-07', 'New year, new A2K Group space! On the 27th of January 2024, we celebrated the completion of our office extension. We are ready for our upcoming future-ready classes for school-level students!', '', 'images/News/extension.jpg'),
(9, 'Busy Week for Our OJTs: Welcome Session, Health Insurance Signing, Project Overviews, and All-Hands ', '', '2024-03-14', 'It\'s been a busy week for our OJTs - starting off with a welcome session with our CFO and COO, followed by health insurance signing, an overview of ongoing projects at A2K Group, and rounded off by the first all-hands workshop with the CTO. Well done, and keep up the good work!', '', 'images/News/ojt_health_insurance.jpg'),
(10, 'Join Our International Team: Full-Time/Part-Time Internship Opportunities Available!', '', '2024-04-15', 'Back by popular demand!\r\nAre you a past or current University student?* Are you interested in joining our international team of experts in solving national and global issues/challenges? Are you keen to learn new skills and are open to new challenges in the field of digital transformation services? We are recruiting for our full-time/part-time internships - apply now by clicking this link - <a href=\"https://rb.gy/iplf1\">https://rb.gy/iplf1</a><br><br>\r\n*Open to students from the following disciplines (or similar): Industrial Technology, Accounting Information Systems, and Electronics Engineering.\r\nOur INTERNSHIP PROGRAM provides students with unique training opportunities on a full-time/part-time basis. The internships focus on training students in digital tools needed to provide digital transformation services through real-world learning experiences and industry collaborations in partnership with A2K. Students will learn about digital transformation services implemented in various industries and be trained in digital tools needed to provide digital transformation services. Through hands-on experiences with industry partners, students will learn how to use these digital tools to provide digital transformation services.\r\n<br>Benefits include:\r\n<br>- Hybrid working in 2024\r\n<br>- Free lunches and snacks on-site\r\n<br>- Medical insurance coverage\r\n<br>- Monthly allowance~ \r\n<br>- Additional monetary incentives for performance', '', 'images/News/internship.jpg'),
(11, 'Summer Internship Success: Meet Our Newest Talents!', '', '2024-04-21', 'We are excited to announce our list of successful summer internship candidates. Congratulations to all!<br>\r\n<br>Angeles University Foundation\r\n<br>Don Honorio Ventura State University\r\n<br>Holy Angel University\r\n<br>Collegium Da Vinci\r\n<br>Adam Mickiewicz University, Pozna&nacute;\r\n<br>AGH University of Science and Technology', '', 'images/News/summer_internship.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
