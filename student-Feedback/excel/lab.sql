-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 05:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `civil-20batch`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
`id` int(11) NOT NULL,
  `dept` varchar(150) DEFAULT NULL,
  `ac_yr` varchar(150) DEFAULT NULL,
  `labsub` varchar(100) NOT NULL,
  `term` varchar(150) NOT NULL,
  `inc` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `lab` (`id`, `dept`, `ac_yr`, `labsub`, `term`, `inc`) VALUES
(1, 'CE', '2020-2021', 'ppsc', 'I-I', 0),
(2, 'CE', '2020-2021', 'physics', 'I-I', 0),
(3, 'CE', '2020-2021', 'chemistry', 'I-I', 0),
(4, 'CE', '2020-2021', 'wt', 'I-II', 0),
(5, 'CE', '2020-2021', 'uml', 'I-II', 0);

--
-- Triggers `courses`
--
DELIMITER //
CREATE TRIGGER `ins` AFTER INSERT ON `lab`
 FOR EACH ROW BEGIN

declare d,c,t varchar(150);
select term into t from lab where id=new.id;
select dept into d from lab where id=new.id;

selectlab into c from lab where id=new.id;

insert into coursse_mark(dept,term,lab,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25,total,average,ic) VALUES (d,t,c,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

end
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `lab`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `lab`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
