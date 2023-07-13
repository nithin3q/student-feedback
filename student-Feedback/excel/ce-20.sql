-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 11:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civil-19batch`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `dept` varchar(150) DEFAULT NULL,
  `ac_yr` varchar(150) DEFAULT NULL,
  `courses` varchar(100) NOT NULL,
  `term` varchar(150) NOT NULL,
  `inc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




--
-- Triggers `courses`
--
DELIMITER $$
CREATE TRIGGER `ins` AFTER INSERT ON `courses` FOR EACH ROW BEGIN

declare d,c,t varchar(150);
select term into t from courses where id=new.id;
select dept into d from courses where id=new.id;

select courses into c from courses where id=new.id;

insert into coursse_mark(dept,term,course,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25,total,average,ic) VALUES (d,t,c,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coursse_mark`
--

CREATE TABLE `coursse_mark` (
  `id` int(11) NOT NULL,
  `dept` varchar(150) DEFAULT NULL,
  `term` varchar(150) NOT NULL,
  `course` varchar(150) DEFAULT NULL,
  `q1` varchar(50) DEFAULT NULL,
  `q2` varchar(50) DEFAULT NULL,
  `q3` varchar(50) DEFAULT NULL,
  `q4` varchar(50) DEFAULT NULL,
  `q5` varchar(50) DEFAULT NULL,
  `q6` varchar(50) DEFAULT NULL,
  `q7` varchar(50) DEFAULT NULL,
  `q8` varchar(50) DEFAULT NULL,
  `q9` varchar(50) DEFAULT NULL,
  `q10` varchar(50) DEFAULT NULL,
  `q11` varchar(50) DEFAULT NULL,
  `q12` varchar(50) DEFAULT NULL,
  `q13` varchar(50) DEFAULT NULL,
  `q14` varchar(50) DEFAULT NULL,
  `q15` varchar(50) DEFAULT NULL,
  `q16` varchar(50) DEFAULT NULL,
  `q17` varchar(50) DEFAULT NULL,
  `q18` varchar(50) DEFAULT NULL,
  `q19` varchar(50) DEFAULT NULL,
  `q20` varchar(50) DEFAULT NULL,
  `q21` varchar(50) DEFAULT NULL,
  `q22` varchar(50) DEFAULT NULL,
  `q23` varchar(50) DEFAULT NULL,
  `q24` varchar(50) DEFAULT NULL,
  `q25` varchar(50) DEFAULT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `e` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `average` int(11) DEFAULT NULL,
  `ic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursse_mark`
--

INSERT INTO `coursse_mark` (`id`, `dept`, `term`, `course`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `a`, `b`, `c`, `d`, `e`, `f`, `total`, `average`, `ic`) VALUES
(1, 'CE', 'I-I', 'R20CE111-M1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'CE', 'I-I', 'R20CE112-M2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'CE', 'I-I', 'R20CE113-EP', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'CE', 'I-I', 'R20CE114-EM', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'CE', 'I-I', 'R20CE115-ED', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'CE', 'I-II', 'R20CE121-ENG', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'CE', 'I-II', 'R20CE122-M3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'CE', 'I-II', 'R20CE123-EC', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'CE', 'I-II', 'R20CE124-PPSC', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'CE', 'I-II', 'R20CE125-CAED', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'CE', 'II-I', 'R20CE211-CVSM', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'CE', 'II-I', 'R20CE212-SM-1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'CE', 'II-I', 'R20CE213-FM', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'CE', 'II-I', 'R20CE214-S&G', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'CE', 'II-I', 'R20CE215-BMCP', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'CE', 'II-I', 'R20CE216-TE-1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0);
-- --------------------------------------------------------


--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept` varchar(300) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept`, `id`) VALUES
('CE', 1),
('EEE', 2),
('ME', 3),
('ECE', 4),
('CSE', 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(11) NOT NULL,
  `rollno` varchar(50) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `academic_year` varchar(150) DEFAULT NULL,
  `term` varchar(30) NOT NULL,
  `course` varchar(100) DEFAULT NULL,
  `ques1` int(11) DEFAULT NULL,
  `ques2` int(11) DEFAULT NULL,
  `ques3` int(11) DEFAULT NULL,
  `ques4` int(11) DEFAULT NULL,
  `ques5` int(11) DEFAULT NULL,
  `ques6` int(11) DEFAULT NULL,
  `ques7` int(11) DEFAULT NULL,
  `ques8` int(11) DEFAULT NULL,
  `ques9` int(11) DEFAULT NULL,
  `ques10` int(11) DEFAULT NULL,
  `ques11` int(11) DEFAULT NULL,
  `ques12` int(11) DEFAULT NULL,
  `ques13` int(11) DEFAULT NULL,
  `ques14` int(11) DEFAULT NULL,
  `ques15` int(11) DEFAULT NULL,
  `ques16` int(11) DEFAULT NULL,
  `ques17` int(11) DEFAULT NULL,
  `ques18` int(11) DEFAULT NULL,
  `ques19` int(11) DEFAULT NULL,
  `ques20` int(11) DEFAULT NULL,
  `ques21` int(11) DEFAULT NULL,
  `ques22` int(11) DEFAULT NULL,
  `ques23` int(11) DEFAULT NULL,
  `ques24` int(11) DEFAULT NULL,
  `ques25` int(11) DEFAULT NULL,
  `a` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `c` int(11) DEFAULT NULL,
  `d` int(11) DEFAULT NULL,
  `e` int(11) DEFAULT NULL,
  `f` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `sam` AFTER INSERT ON `feedback` FOR EACH ROW BEGIN
declare qq1,qq2,qq3,qq4,qq5,qq6,qq7,qq8,qq9,qq10,qq11,qq12,qq13,qq14,qq15,qq16,qq17,qq18,qq19,qq20,qq21,qq22,qq23,qq24,qq25,tot,t,i,a1,b1,c1,d1,e1,f1 integer;
DECLARE cou varchar(255);

select total into tot from feedback where sno=new.sno;
select course into cou from feedback where sno=new.sno;
SELECT ques1 into qq1 from feedback where sno=new.sno;
SELECT ques2 into qq2 from feedback where sno=new.sno;
SELECT ques3 into qq3 from feedback where sno=new.sno;
SELECT ques4 into qq4 from feedback where sno=new.sno;
SELECT ques5 into qq5 from feedback where sno=new.sno;
SELECT ques6 into qq6 from feedback where sno=new.sno;
SELECT ques7 into qq7 from feedback where sno=new.sno;
SELECT ques8 into qq8 from feedback where sno=new.sno;
SELECT ques9 into qq9 from feedback where sno=new.sno;
SELECT ques10 into qq10 from feedback where sno=new.sno;
SELECT ques11 into qq11 from feedback where sno=new.sno;
SELECT ques12 into qq12 from feedback where sno=new.sno;
SELECT ques13 into qq13 from feedback where sno=new.sno;
SELECT ques14 into qq14 from feedback where sno=new.sno;
SELECT ques15 into qq15 from feedback where sno=new.sno;
SELECT ques16 into qq16 from feedback where sno=new.sno;
SELECT ques17 into qq17 from feedback where sno=new.sno;
SELECT ques18 into qq18 from feedback where sno=new.sno;
SELECT ques19 into qq19 from feedback where sno=new.sno;
SELECT ques20 INTO qq20 from feedback where sno=new.sno;
SELECT ques21 into qq21 from feedback where sno=new.sno;
SELECT ques22 into qq22 from feedback where sno=new.sno;
SELECT ques23 into qq23 from feedback where sno=new.sno;
SELECT ques24 into qq24 from feedback where sno=new.sno;
SELECT ques25 into qq25 from feedback where sno=new.sno;
set a1=qq1+qq2+qq3;
set b1=qq4+qq5+qq6+qq7+qq8+qq9+qq10+qq11+qq12+qq13+qq14;
set c1=qq15+qq16;
set d1=qq17+qq18+qq19;
set e1=qq20+qq21;
set f1=qq22+qq23+qq24+qq25;
UPDATE coursse_mark set q1=q1+qq1,q2=q2+qq2,q3=q3+qq3,q4=q4+qq4,q5=q5+qq5,q6=q6+qq6,q7=q7+qq7,q8=q8+qq8,q9=q9+qq9,q10=q10+qq10,q11=q11+qq11,q12=q12+qq12,q13=q13+qq13,q14=q14+qq14,q15=q15+qq15,q16=q16+qq16,q17=q17+qq17,q18=q18+qq18,q19=q19+qq19,q20=q20+qq20,q21=q21+qq21,q22=q22+qq22,q23=q23+qq23,q24=q24+qq24,q25=q25+qq25,a=a+a1,b=b+b1,c=c+c1,d=d+d1,e=e+e1,f=f+f1,total=total+tot,ic=ic+1,average=total/15 where course=cou;
end
$$
DELIMITER ;


--
-- Table structure for table `first_users`
--

CREATE TABLE `first_users` (
  `id` int(11) NOT NULL,
  `us` varchar(150) DEFAULT NULL,
  `pwd` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_users`
--

INSERT INTO `first_users` (`id`, `us`, `pwd`) VALUES
(1, 'admin1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `logined` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`logined`) VALUES
('17ct21'),
('17ct22'),
('hji'),
('stud'),
('student1');

-- --------------------------------------------------------

--
-- Table structure for table `main_ad`
--

CREATE TABLE `main_ad` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_ad`
--

INSERT INTO `main_ad` (`id`, `username`, `password`) VALUES
(1, 'sample1', 'sample1'),
(2, 'sample2', 'sample2');

-- --------------------------------------------------------

--
-- Table structure for table `simple`
--

CREATE TABLE `simple` (
  `id` int(11) NOT NULL,
  `s` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple`
--

INSERT INTO `simple` (`id`, `s`) VALUES
(0, '1'),
(0, 'stud'),
(0, 'stud'),
(0, 'stud'),
(0, 'stud');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(150) DEFAULT NULL,
  `course` varchar(150) NOT NULL,
  `dept` varchar(150) DEFAULT NULL,
  `term` varchar(150) NOT NULL,
  `ac_yr` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_no` int(11) NOT NULL,
  `rollno` varchar(150) NOT NULL,
  `dept` varchar(150) DEFAULT NULL,
  `ac_yr` varchar(150) DEFAULT NULL,
  `term` varchar(150) NOT NULL,
  `key_gen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `dept` varchar(150) DEFAULT NULL,
  `term` varchar(100) DEFAULT NULL,
  `student_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `us` varchar(150) DEFAULT NULL,
  `pwd` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `us`, `pwd`) VALUES
(1, 'admin1', 'admin'),
(2, 'admin2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursse_mark`
--
ALTER TABLE `coursse_mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);


--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`logined`);

--
-- Indexes for table `main_ad`
--
ALTER TABLE `main_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_no`,`rollno`) USING BTREE;

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coursse_mark`
--
ALTER TABLE `coursse_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `first_courses`
--
ALTER TABLE `first_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `first_coursse_mark`
--
ALTER TABLE `first_coursse_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `first_feedback`
--
ALTER TABLE `first_feedback`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `first_staff`
--
ALTER TABLE `first_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `first_student`
--
ALTER TABLE `first_student`
  MODIFY `stud_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `first_users`
--
ALTER TABLE `first_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_ad`
--
ALTER TABLE `main_ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
