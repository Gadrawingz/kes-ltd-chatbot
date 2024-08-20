-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2024 at 08:15 AM
-- Server version: 11.4.2-MariaDB
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiboto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(1, 'Faustin', 'faustin@gmail.com', 'F@2024');

-- --------------------------------------------------------

--
-- Table structure for table `chat_answer`
--

CREATE TABLE `chat_answer` (
  `answer_id` int(10) NOT NULL,
  `answer_text` text NOT NULL,
  `question_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_answer`
--

INSERT INTO `chat_answer` (`answer_id`, `answer_text`, `question_id`) VALUES
(1, '<p class=\'inchat-p\'>KIBOTO Engineering Solutions Limited provides a range of services including:</p><ul class=\'inchat-ul\'><li>Projects in building, consultation, and supervision</li><li>Road and bridge construction</li><li>Water supply systems</li><li>Wastewater management</li><li>Irrigation and marshland development</li><li>Dams construction</li></ul>', 1),
(2, 'You can contact us through our website, phone number, or visit our office in Musanze, Rwanda.', 2),
(3, 'Our building and consultation services cover architectural design, project planning, and construction management. We ensure high-quality standards and timely completion of projects.', 3),
(4, 'We specialize in road construction, including highways and urban roads, as well as bridge construction for various spans and purposes.', 4),
(5, 'We design and implement water supply systems tailored to client needs, ensuring sustainable and efficient water distribution.', 5),
(6, 'Our wastewater management services include treatment plant design, construction, and maintenance, ensuring environmental compliance and sustainability.', 6),
(7, 'We provide expertise in designing and implementing irrigation systems for agriculture and development of marshlands for ecological and agricultural purposes.', 7),
(8, 'Our dam construction services encompass planning, design, and construction management to support water resource management and hydroelectric power generation.', 8),
(9, 'We adhere to rigorous quality control measures throughout every phase of the project, from planning to completion, to ensure durability and client satisfaction.', 9),
(10, 'Yes, we provide consultancy services in engineering, construction, and project management to assist clients in optimizing project outcomes and reducing risks.', 10),
(11, 'We primarily serve clients in Musanze, Rwanda, and surrounding regions, but we are open to discussing projects in other areas as well.', 11),
(12, 'We meticulously plan each project and adhere to strict timelines to ensure projects are completed on schedule without compromising quality.', 12),
(13, 'Yes, you can view our portfolio of past projects on our website or request more information during a consultation.', 13),
(14, 'We integrate sustainable practices into our project designs and construction processes to minimize environmental impact and promote eco-friendly solutions.', 14),
(15, 'Yes, we actively participate in community development initiatives through infrastructure projects that benefit local communities.', 15),
(16, 'KIBOTO operates primarily in construction, engineering consultancy, and project management.', 16),
(17, 'We offer expertise in designing and building infrastructure such as roads, bridges, water supply systems, and dams.', 17),
(18, 'Yes, we offer comprehensive maintenance services to ensure long-term functionality and efficiency of our projects.', 18),
(19, 'We serve a diverse range of clients including government agencies, private companies, and NGOs.', 19),
(20, 'Safety is our priority. We adhere strictly to safety regulations and provide continuous training to our staff.', 20),
(21, 'Yes, we have experience in managing projects of various scales, from small-scale developments to large infrastructure projects.', 21),
(22, 'We provide detailed cost estimates based on project requirements, ensuring transparency and accuracy.', 22),
(23, 'You can request a consultation through our website or by contacting our office directly.', 23),
(24, 'Yes, we integrate sustainable materials and practices to minimize environmental impact in our projects.', 24),
(25, 'Yes, we assist clients in navigating regulatory processes and obtaining necessary approvals for their projects.', 25),
(26, 'We have stringent quality control measures in place, including regular inspections and testing, to ensure high standards.', 26),
(27, 'Yes, we tailor our services to meet specific project needs and objectives.', 27),
(28, 'We have successfully completed projects both locally and internationally, bringing our expertise to diverse environments.', 28),
(29, 'We contribute to community development through job creation, skills training, and infrastructure improvements.', 29),
(30, 'Yes, we provide ongoing support after project completion to address any client needs or concerns.', 30),
(31, 'Yes, we offer project management services.', 31),
(32, 'Yes, we specialize in road construction projects.', 32),
(33, 'Yes, we provide water supply system design services.', 33),
(34, 'Yes, we provide consultancy services in engineering.', 34),
(35, 'Yes, we are located in Musanze, Rwanda.', 35),
(36, 'Yes, we offer maintenance services for completed projects.', 36),
(37, 'Yes, we have experience in dam construction.', 37),
(38, 'Yes, we have experience in managing large-scale infrastructure projects.', 38),
(39, 'Yes, we prioritize environmental sustainability in our projects.', 39),
(40, 'Yes, we assist with obtaining regulatory approvals for projects.', 40),
(41, 'Yes, we offer building and construction services.', 41),
(42, 'Yes, we specialize in irrigation and marshland development.', 42),
(43, 'Yes, we can provide examples of past projects.', 43),
(44, 'Yes, we provide design services for infrastructure projects.', 44),
(45, 'Yes, we offer consultations on engineering projects.', 45),
(46, 'Yes, we have expertise in wastewater management.', 46),
(47, 'Yes, we specialize in road and bridge construction projects.', 47),
(48, 'Yes, we collaborate with local communities on projects.', 48),
(49, 'Yes, we can provide cost estimates for projects.', 49),
(50, 'Yes, we ensure safety standards on construction sites.', 50);

-- --------------------------------------------------------

--
-- Table structure for table `chat_history`
--

CREATE TABLE `chat_history` (
  `hist_id` int(10) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `hist_session` varchar(80) NOT NULL,
  `question_id` int(10) NOT NULL,
  `hist_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_question`
--

CREATE TABLE `chat_question` (
  `question_id` int(10) NOT NULL,
  `question_text` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_question`
--

INSERT INTO `chat_question` (`question_id`, `question_text`, `category`) VALUES
(1, 'What services does KIBOTO Engineering Solutions Limited provide?', 'SERVICE'),
(2, 'How can I contact KIBOTO Engineering Solutions Limited?', 'CONTACT'),
(3, 'Can you provide more details about your building and consultation services?', 'DAM'),
(4, 'What types of road and bridge construction projects does KIBOTO handle?', 'PROJECT'),
(5, 'What expertise does KIBOTO have in water supply systems?', 'EXPERIENCE'),
(6, 'How does KIBOTO handle wastewater management projects?', 'WATER'),
(7, 'What does KIBOTO offer in terms of irrigation and marshland development?', 'IRRIGATION'),
(8, 'Could you explain KIBOTO approach to dam construction?', 'DAM'),
(9, 'How does KIBOTO ensure quality in its construction projects?', 'QUALITY'),
(10, 'Does KIBOTO Engineering Solutions Limited offer consultancy services?', 'SERVICE'),
(11, 'What geographical areas does KIBOTO Engineering Solutions Limited serve?', 'LOCATION'),
(12, 'How does KIBOTO handle project timelines and deadlines?', 'PROJECT'),
(13, 'Can I see examples of projects completed by KIBOTO Engineering Solutions Limited?', 'PROJECT'),
(14, 'How does KIBOTO ensure environmental sustainability in its projects?', 'INFRASTRUCTURE'),
(15, 'Is KIBOTO Engineering Solutions Limited involved in community development projects?', 'INFRASTRUCTURE'),
(16, 'What are the main sectors KIBOTO Engineering Solutions operates in?', 'SECTORS'),
(17, 'How can KIBOTO assist with infrastructure development?', 'INFRASTRUCTURE'),
(18, 'Does KIBOTO provide maintenance services for completed projects?', 'SERVICE'),
(19, 'What types of clients does KIBOTO work with?', 'SERVICE'),
(20, 'How does KIBOTO ensure safety on its construction sites?', 'QUALITY'),
(21, 'Can KIBOTO handle both large and smallscale projects?', 'PROJECT'),
(22, 'What is KIBOTO approach to cost estimation for projects?', 'PROJECT'),
(23, 'How can I request a consultation with KIBOTO?', 'SUPPORT'),
(24, 'Is KIBOTO involved in sustainable construction practices?', 'INFRASTRUCTURE'),
(25, 'Can KIBOTO assist with regulatory approvals and permits?', 'SERVICE'),
(26, 'How does KIBOTO ensure quality control in construction?', 'QUALITY'),
(27, 'Does KIBOTO offer customized solutions for unique project requirements?', 'SERVICE'),
(28, 'What is KIBOTO experience in international projects?', 'EXPERIENCE'),
(29, 'How does KIBOTO contribute to local communities?', 'SUPPORT'),
(30, 'Does KIBOTO provide postproject support and followup?', 'PROJECT'),
(31, 'Does KIBOTO Engineering Solutions provide project management services?', 'PROJECT'),
(32, 'Is KIBOTO involved in road construction projects?', 'INFRASTRUCTURE'),
(33, 'Can KIBOTO assist with water supply system design?', 'WATER'),
(34, 'Does KIBOTO offer consultancy services in engineering?', 'SERVICE'),
(35, 'Does KIBOTO operate in Musanze, Rwanda?', 'LOCATION'),
(36, 'Does KIBOTO provide maintenance services for completed projects?', 'SERVICE'),
(37, 'Does KIBOTO have experience in dam construction?', 'EXPERIENCE'),
(38, 'Can KIBOTO handle largescale infrastructure projects?', 'PROJECT'),
(39, 'Does KIBOTO prioritize environmental sustainability in its projects?', 'INFRASTRUCTURE'),
(40, 'Can KIBOTO assist with obtaining regulatory approvals for projects?', 'SERVICE'),
(41, 'Does KIBOTO offer services in building and construction?', 'SERVICE'),
(42, 'Is KIBOTO involved in irrigation and marshland development?', 'IRRIGATION'),
(43, 'Can KIBOTO provide examples of past projects?', 'PROJECT'),
(44, 'Does KIBOTO provide design services for infrastructure projects?', 'SERVICE'),
(45, 'Is KIBOTO available for consultations on engineering projects?', 'SERVICE'),
(46, 'Does KIBOTO have expertise in wastewater management?', 'EXPERIENCE'),
(47, 'Can KIBOTO assist with road and bridge construction projects?', 'INFRASTRUCTURE'),
(48, 'Does KIBOTO collaborate with local communities on projects?', 'SUPPORT'),
(49, 'Can KIBOTO provide cost estimates for projects?', 'PROJECTS'),
(50, 'Does KIBOTO ensure safety standards on construction sites?', 'QUALITY');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `telephone`, `email`, `message`) VALUES
(1, 'Joseph', '0783435918', 'manjoe240@gmai.com', 'How are you!'),
(2, 'Peter', '0783435920', 'gadrawingz@gmail.com', 'Hello my people!'),
(3, 'Karenzi', '07855356', 'karenzi4@gmail.com', 'Hello ntuye Burera mwamfasha'),
(4, 'Felix', '0783435922', 'felix@gmail.com', 'Your house is made up of many things, known as building materials. Whether you plan to construct your own house or want to keep it well-maintained for a long time, you should be fully aware of the building materials required for the same. Keeping these things in mind, we have listed here some of the commonly used building materials in construction for your reference. (Waiting to be edited)');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `deriverables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(10) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_role` varchar(200) NOT NULL,
  `description` varchar(240) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_name`, `member_role`, `description`, `picture`) VALUES
(1, 'Eng.DUHIMBAZE FAUSTIN', 'Chairperson/ Managing Director', 'Specialist in civil Engineering.', '8.jpg'),
(2, 'Eng. UBWIRWINEZA Jean Baptiste', 'Technical Director', 'Specialist in civil Engineering.', 'team1.png'),
(3, 'Mrs.UWAMAHORO CALMEN', 'Chief Finance Officer', 'Specialist in Business Management.', 'team1.png'),
(4, 'Eng.IRADUKUNDA Jean Pierre', 'Building Construction Engineer Officer', 'Specialist in civil Engineering.', 'team1.png'),
(5, 'Eng.GIRAMATA GLORIA', 'Raod & Bridge Construction Engineer Officer', 'Specialist in highway & railway Engineering.', 'team1.png'),
(6, 'Mr.RUTARINDWA Jean Pierre', 'IT Engineer', 'Specialist in Information Tech.', 'team1.png'),
(7, 'Eng.RUGAMBWA Jonathan', 'Projects Coordinator', 'Specialist in Civil Engineering.', 'team1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chat_answer`
--
ALTER TABLE `chat_answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `chat_history`
--
ALTER TABLE `chat_history`
  ADD PRIMARY KEY (`hist_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `chat_question`
--
ALTER TABLE `chat_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_answer`
--
ALTER TABLE `chat_answer`
  MODIFY `answer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `chat_history`
--
ALTER TABLE `chat_history`
  MODIFY `hist_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_question`
--
ALTER TABLE `chat_question`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_answer`
--
ALTER TABLE `chat_answer`
  ADD CONSTRAINT `chat_answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `chat_question` (`question_id`);

--
-- Constraints for table `chat_history`
--
ALTER TABLE `chat_history`
  ADD CONSTRAINT `chat_history_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `chat_question` (`question_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
