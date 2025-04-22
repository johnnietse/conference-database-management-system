-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 06, 2025 at 01:25 AM
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
-- Database: `conferencedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE `attendee` (
  `id` int(11) NOT NULL,
  `fName` varchar(40) DEFAULT NULL,
  `lName` varchar(40) DEFAULT NULL,
  `fee` enum('0','50','100') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendee`
--

INSERT INTO `attendee` (`id`, `fName`, `lName`, `fee`) VALUES
(1, 'Alice', 'King', '100'),
(2, 'Bob', 'Smith', '50'),
(3, 'Charlie', 'Williams', '0'),
(4, 'David', 'Lee', '100'),
(5, 'Eve', 'Brown', '50'),
(6, 'Frank', 'Davis', '0'),
(7, 'Grace', 'Miller', '100'),
(8, 'Hannah', 'Taylor', '50'),
(9, 'Olivia', 'Young', '0'),
(10, 'Lisa', 'Green', '50'),
(11, 'Kara', 'Thomas', '100'),
(12, 'Kelly', 'Kang', '0'),
(13, 'Douglas', 'Lopez', '50'),
(14, 'Noah', 'Green', '0'),
(15, 'Olivia', 'Hill', '100'),
(16, 'Paul', 'Adams', '50'),
(17, 'Quinn', 'Baker', '0'),
(18, 'Rachel', 'Carter', '100'),
(19, 'Samuel', 'Dave', '50'),
(20, 'Tom', 'Hall', '0'),
(21, 'Umi', 'Blake', '50'),
(22, 'Vanessa', 'Scott', '100'),
(23, 'Wendy', 'Masse', '0'),
(24, 'Xavier', 'Iris', '100');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(120) NOT NULL,
  `emailsSent` int(11) DEFAULT NULL,
  `level` enum('Gold','Bronze','Platinum','Silver') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `emailsSent`, `level`) VALUES
('AI Welch', 9, 'Gold'),
('Brekke LLC', 8, 'Platinum'),
('Cloud AI', 4, 'Silver'),
('Crist', 7, 'Gold'),
('Donnelly Group', 3, 'Bronze'),
('EffertzCode', 0, 'Bronze'),
('Gibson LLC', 15, 'Gold'),
('Hammes, Littel and Schultz', 5, 'Silver'),
('Thompson LLC', 10, 'Gold'),
('Wunsch', 12, 'Platinum');

-- --------------------------------------------------------

--
-- Table structure for table `jobad`
--

CREATE TABLE `jobad` (
  `companyName` varchar(120) NOT NULL,
  `jobTitle` varchar(250) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobad`
--

INSERT INTO `jobad` (`companyName`, `jobTitle`, `salary`, `location`) VALUES
('AI Welch', 'Software Developer', 90000, 'Dallas'),
('Brekke LLC', 'Product Designer', 75000, 'Seattle'),
('Cloud AI', 'Cloud Architect', 140000, 'Galena'),
('Crist', 'Backend Developer', 85000, 'Vancouver'),
('Donnelly Group', 'UI/UX Developer', 50000, 'Calgary'),
('EffertzCode', 'Network Engineer', 65000, 'Toronto'),
('Gibson LLC', 'AI Researcher', 625000, 'South Boston'),
('Hammes, Littel and Schultz', 'DevOps Engineer', 100000, 'New York City'),
('Thompson LLC', 'Frontend Developer', 95000, 'Surrey'),
('Thompson LLC', 'ML Data Analyst', 80000, 'Halifax'),
('Wunsch', 'ML Engineer', 135000, 'San Francisco');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fName` varchar(120) NOT NULL,
  `lName` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fName`, `lName`) VALUES
(1, 'Grace', 'Hoppi'),
(2, 'Alan', 'Turing'),
(3, 'Aidea', 'Lovlace'),
(4, 'Tim', 'Bay-Lee'),
(5, 'Marget', 'Hamilton'),
(6, 'Denny', 'Richie'),
(7, 'Barba', 'Niskovy'),
(8, 'Kenny', 'Thompson'),
(9, 'Brien', 'Kitchenville'),
(10, 'Linux', 'Toaldrus'),
(11, 'John', 'Backingham'),
(12, 'Franci', 'Allan');

-- --------------------------------------------------------

--
-- Table structure for table `memberof`
--

CREATE TABLE `memberof` (
  `id` int(11) NOT NULL,
  `subcommittee` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberof`
--

INSERT INTO `memberof` (`id`, `subcommittee`) VALUES
(1, 'Event Planning and Logistics'),
(2, 'Finance'),
(3, 'Sponsorship'),
(4, 'IT Support and Web Development'),
(3, 'Program'),
(3, 'Marketing'),
(4, 'Finance'),
(5, 'Registration'),
(5, 'Event Planning and Logistics'),
(6, 'Finance'),
(7, 'Marketing'),
(2, 'Sponsorship'),
(6, 'Art Design'),
(7, 'IT Support and Web Development'),
(8, 'IT Support and Web Development'),
(9, 'Operations'),
(9, 'Registration'),
(10, 'Marketing'),
(11, 'Art Design'),
(11, 'IT Support and Web Development'),
(12, 'Operations');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`id`) VALUES
(4),
(5),
(10),
(12),
(15),
(18),
(22),
(24);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `num` int(11) NOT NULL,
  `numbed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`num`, `numbed`) VALUES
(101, 2),
(102, 3),
(103, 2),
(104, 1),
(105, 2),
(106, 3),
(107, 1),
(108, 2),
(109, 3);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `location` int(11) NOT NULL,
  `sessionDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `speakerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`location`, `sessionDate`, `startTime`, `endTime`, `speakerID`) VALUES
(201, '2025-05-01', '10:30:00', '12:30:00', 8),
(202, '2025-05-01', '12:00:00', '15:30:00', 8),
(203, '2025-05-02', '09:30:00', '11:30:00', 8),
(204, '2025-05-02', '13:00:00', '14:30:00', 13),
(205, '2025-05-01', '14:30:00', '17:30:00', 16),
(206, '2025-05-01', '17:00:00', '18:30:00', 19),
(207, '2025-05-02', '14:30:00', '16:30:00', 23),
(208, '2025-05-02', '16:30:00', '18:00:00', 16);

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id`) VALUES
(8),
(13),
(16),
(19),
(23);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `companyName` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `companyName`) VALUES
(19, 'AI Welch'),
(14, 'Cloud AI'),
(13, 'Crist'),
(10, 'Donnelly Group'),
(16, 'EffertzCode'),
(11, 'Gibson LLC'),
(5, 'Hammes, Littel and Schultz'),
(4, 'Thompson LLC');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `roomNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roomNum`) VALUES
(1, 101),
(2, 101),
(3, 102),
(7, 102),
(8, 103),
(9, 103),
(13, 104),
(14, 105),
(16, 105),
(17, 106),
(20, 106),
(19, 107),
(21, 108),
(23, 109);

-- --------------------------------------------------------

--
-- Table structure for table `subcommittee`
--

CREATE TABLE `subcommittee` (
  `name` varchar(120) NOT NULL,
  `chairID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcommittee`
--

INSERT INTO `subcommittee` (`name`, `chairID`) VALUES
('Event Planning and Logistics', 1),
('Finance', 2),
('Sponsorship', 3),
('Program', 4),
('IT Support and Web Development', 5),
('Marketing', 6),
('Registration', 7),
('Art Design', 8),
('Operations', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee`
--
ALTER TABLE `attendee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `jobad`
--
ALTER TABLE `jobad`
  ADD PRIMARY KEY (`companyName`,`jobTitle`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberof`
--
ALTER TABLE `memberof`
  ADD KEY `id` (`id`),
  ADD KEY `subcommittee` (`subcommittee`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`location`,`sessionDate`,`startTime`),
  ADD KEY `speakerID` (`speakerID`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyName` (`companyName`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomNum` (`roomNum`);

--
-- Indexes for table `subcommittee`
--
ALTER TABLE `subcommittee`
  ADD PRIMARY KEY (`name`),
  ADD KEY `chairID` (`chairID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobad`
--
ALTER TABLE `jobad`
  ADD CONSTRAINT `jobad_ibfk_1` FOREIGN KEY (`companyName`) REFERENCES `company` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `memberof`
--
ALTER TABLE `memberof`
  ADD CONSTRAINT `memberof_ibfk_1` FOREIGN KEY (`id`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `memberof_ibfk_2` FOREIGN KEY (`subcommittee`) REFERENCES `subcommittee` (`name`);

--
-- Constraints for table `professional`
--
ALTER TABLE `professional`
  ADD CONSTRAINT `professional_ibfk_1` FOREIGN KEY (`id`) REFERENCES `attendee` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`speakerID`) REFERENCES `speaker` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `speaker`
--
ALTER TABLE `speaker`
  ADD CONSTRAINT `speaker_ibfk_1` FOREIGN KEY (`id`) REFERENCES `attendee` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD CONSTRAINT `sponsor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `attendee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sponsor_ibfk_2` FOREIGN KEY (`companyName`) REFERENCES `company` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id`) REFERENCES `attendee` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`roomNum`) REFERENCES `room` (`num`);

--
-- Constraints for table `subcommittee`
--
ALTER TABLE `subcommittee`
  ADD CONSTRAINT `subcommittee_ibfk_1` FOREIGN KEY (`chairID`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
