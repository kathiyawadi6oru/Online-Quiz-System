-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 09:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choice_id` int(255) NOT NULL,
  `q_id` int(255) NOT NULL,
  `stud_id` int(255) NOT NULL,
  `choice_option` varchar(1) NOT NULL,
  `result` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choice_id`, `q_id`, `stud_id`, `choice_option`, `result`) VALUES
(45, 4, 8, '1', 'false'),
(46, 5, 8, '2', 'false'),
(47, 6, 8, '4', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(255) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`, `course_type`) VALUES
(1, 'U1', 'B.Sc(CA & IT) ', 'UG'),
(2, 'U6', 'B.Sc(Syber & IT)', 'UG'),
(5, 'P1', 'M.Sc(CA & IT)', 'PG'),
(6, 'A1', 'BCA', 'UG');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `f_id` int(255) NOT NULL,
  `f_code` varchar(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_password` varchar(30) NOT NULL,
  `f_type` varchar(10) NOT NULL,
  `f_jod` date NOT NULL,
  `f_post` varchar(50) NOT NULL,
  `f_mail` varchar(50) NOT NULL,
  `f_mobile` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `f_code`, `f_name`, `f_password`, `f_type`, `f_jod`, `f_post`, `f_mail`, `f_mobile`) VALUES
(5, '17082221024', 'raj', '959', 'Admin', '1111-01-01', 'lead', 'raj0214@gmail.com', '9876543210'),
(6, '17082221080', 'mayank', '1432', 'Admin', '1999-11-02', 'head', 'mayankvachhani91@gmail.com', '9687315300');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_permission`
--

CREATE TABLE `faculty_permission` (
  `fac_per_id` int(255) NOT NULL,
  `f_id` int(255) NOT NULL,
  `sub_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_permission`
--

INSERT INTO `faculty_permission` (`fac_per_id`, `f_id`, `sub_id`) VALUES
(1, 6, 1),
(2, 5, 11),
(3, 6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(255) NOT NULL,
  `stud_id` int(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `stud_id`, `title`, `comment`) VALUES
(3, 8, 'sdfdswcw', 'nlknfcoiwds');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(255) NOT NULL,
  `sub_quiz_id` int(255) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL,
  `true_option` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `sub_quiz_id`, `question`, `option1`, `option2`, `option3`, `option4`, `true_option`) VALUES
(4, 5, 'what is ip', '1', '2', '3', '4', '4'),
(5, 5, 'what is ipss', '1dsd', '2dsfdsf', '3fsdv', '4fsd', '4'),
(6, 5, 'what is ipsscsdvsd', '1dsdfssdf', '2dsfdsfdfsdfehdghd', 'fgdf', '4fsdgfdg', '4');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL,
  `sem_code` varchar(20) NOT NULL,
  `sem_type` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `course_id`, `sem_code`, `sem_type`) VALUES
(1, 1, 'U11', 'odd'),
(7, 1, 'U12', 'even'),
(9, 2, 'U64', 'even'),
(10, 2, 'U61', 'odd'),
(11, 1, 'U15', 'odd'),
(13, 5, 'P12', 'even'),
(14, 1, 'U10', 'comp'),
(15, 1, 'U13', 'odd'),
(16, 1, 'U14', 'even'),
(18, 2, 'U60', 'comp'),
(19, 2, 'U62', 'even'),
(20, 2, 'U63', 'odd'),
(21, 2, 'U65', 'odd'),
(22, 2, 'U66', 'even'),
(23, 5, 'P10', 'comp'),
(24, 5, 'P11', 'odd'),
(25, 5, 'P13', 'odd'),
(26, 5, 'P14', 'even');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(255) NOT NULL,
  `stud_code` varchar(13) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_password` varchar(20) NOT NULL,
  `sem_id` int(255) NOT NULL,
  `stud_mobile` varchar(13) NOT NULL,
  `stud_mail` varchar(50) NOT NULL,
  `stud_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_code`, `stud_name`, `stud_password`, `sem_id`, `stud_mobile`, `stud_mail`, `stud_status`) VALUES
(6, '17062641010', 'suresh', '', 1, '14785236985', 'suresh@gmail.com', 1),
(8, '17082221080', 'mayank', '143200', 1, '1474523689', 'mayank@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(255) NOT NULL,
  `sem_id` int(255) NOT NULL,
  `sub_code` varchar(20) NOT NULL,
  `sub_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sem_id`, `sub_code`, `sub_name`) VALUES
(1, 1, 'U11A1IP1', 'Introduction to Programing - 1'),
(5, 10, 'U61A2OAT', 'Office Automation Tools'),
(8, 7, 'U12A2OCP', 'Object O C'),
(10, 11, 'U15A1WT', 'Web tecnology'),
(11, 11, 'U15B6BAA', 'BAA'),
(12, 7, 'U12A3DADA', 'csadcscwcdqdnjqdbnqjwbdj'),
(13, 1, 'U11A2OAT', 'office auto tools');

-- --------------------------------------------------------

--
-- Table structure for table `subject_quiz`
--

CREATE TABLE `subject_quiz` (
  `sub_quiz_id` int(255) NOT NULL,
  `sub_id` int(255) NOT NULL,
  `quiz_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_quiz`
--

INSERT INTO `subject_quiz` (`sub_quiz_id`, `sub_id`, `quiz_no`) VALUES
(5, 1, 'ip1'),
(6, 13, 'oat2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choice_id`),
  ADD KEY `q_id` (`q_id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `f_code` (`f_code`),
  ADD UNIQUE KEY `f_mail` (`f_mail`),
  ADD UNIQUE KEY `f_mobile` (`f_mobile`);

--
-- Indexes for table `faculty_permission`
--
ALTER TABLE `faculty_permission`
  ADD PRIMARY KEY (`fac_per_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `sub_quiz_id` (`sub_quiz_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`),
  ADD KEY `foreignkey` (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `foreignkey` (`sem_id`) USING BTREE;

--
-- Indexes for table `subject_quiz`
--
ALTER TABLE `subject_quiz`
  ADD PRIMARY KEY (`sub_quiz_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `choice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `f_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty_permission`
--
ALTER TABLE `faculty_permission`
  MODIFY `fac_per_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subject_quiz`
--
ALTER TABLE `subject_quiz`
  MODIFY `sub_quiz_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choice`
--
ALTER TABLE `choice`
  ADD CONSTRAINT `eterterg` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gdfgdgd` FOREIGN KEY (`q_id`) REFERENCES `question` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_permission`
--
ALTER TABLE `faculty_permission`
  ADD CONSTRAINT `f2` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreginK1` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `foreginkey1` FOREIGN KEY (`sub_quiz_id`) REFERENCES `subject_quiz` (`sub_quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `forignkeysemId` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`sem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `foreignkey-sem_id` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`sem_id`);

--
-- Constraints for table `subject_quiz`
--
ALTER TABLE `subject_quiz`
  ADD CONSTRAINT `fffffff` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
