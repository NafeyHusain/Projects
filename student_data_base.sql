-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 12, 2021 at 05:58 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data_base`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `stored_procedure` (IN `usn` VARCHAR(10))  BEGIN
	select s.usn ,s.name, s.dept_id ,s.phone,s.address,s.sem,s.batch,r.SGPA
    from student as s INNER JOIN result as r
    ON s.usn=r.usn
    where s.usn=usn;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stored_procedure2` (IN `usn` VARCHAR(10))  BEGIN
SELECT s.usn,s.name,s.dept_id,s.email,s.phone,s.address,s.sem,s.batch,s.gender,ca.description,exa.content,sm.Subject1,sm.Subject2,sm.Subject3,sm.Subject4,sm.Subject5,sm.Subject6
    from student s,cocurricular_activities ca , extra_curricular_activities exa ,subject_marks sm
	where s.usn=ca.usn AND ca.usn=exa.usn and exa.usn=sm.usn AND usn=usn;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stored_procedure3` (IN `usn` VARCHAR(10))  BEGIN
	SELECT s.usn,s.name,s.dept_id,s.email,s.phone,s.address,s.sem,s.batch,s.gender,ca.description,exa.content,sm.Subject1,sm.Subject2,sm.Subject3,sm.Subject4,sm.Subject5,sm.Subject6
    from student s,cocurricular_activities ca , extra_curricular_activities exa ,subject_marks sm
	where s.usn=ca.usn AND ca.usn=exa.usn and exa.usn=sm.usn AND usn=usn;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stored_procedure4` (IN `usn` VARCHAR(10))  BEGIN
	SELECT s.usn,s.email,s.dept_id,s.phone,s.address,s.sem,s.batch,s.gender,ca.description,exa.content,sm.Subject1,sm.Subject2,sm.Subject3,sm.Subject4,sm.Subject5,sm.Subject6
    from student s,cocurricular_activities ca , extra_curricular_activities exa ,subject_marks sm
	where s.usn=ca.usn AND ca.usn=exa.usn and exa.usn=sm.usn AND s.usn=usn;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `stored_procedure5` (IN `usn` VARCHAR(10))  BEGIN 
SELECT s.usn,s.name,s.email,s.dept_id,s.phone,s.address,s.sem,s.batch,s.gender,ca.description,exa.content,sm.Subject1,sm.Subject2,sm.Subject3,sm.Subject4,sm.Subject5,sm.Subject6 from student s,cocurricular_activities ca , extra_curricular_activities exa ,subject_marks sm where s.usn=ca.usn AND ca.usn=exa.usn and exa.usn=sm.usn AND s.usn=usn; 
END$$

DELIMITER ;

--
-- Dumping data for table `cocurricular_activities`
--

INSERT INTO `cocurricular_activities` (`usn`, `name`, `date`, `sem`, `description`) VALUES
('1DT18CS055', 'Prashanth Reddy', '27-02-2020', '4', 'Web Development Conducted CSI 33rd Convention in DSATM'),
('1DT18CS065', 'Nafey', '23-09-2019', '3', 'Debate event organized in The Esperenza  Cultural Fest of DSATM'),
('1DT18EC035', 'Hrushikesh B Chavare', '27-02-2019', '2', 'Inter College Science Forum held at DSATM , Bengaluru.'),
('1DT18IS002', 'Ayush Dravid', '27-02-2020', '5', '33rd CSI convention held at DSATM and participated in event web-development'),
('1DT18IS002', 'Aditya Prasad', '27-02-2020', '4', 'CSI 33rd convention held at DSATM participated in Decoding and also been part of the as volunteer.'),
('1DT18IS015', 'BHARATH H J', '15-09-20', '5', 'CPA: Programming Essentials in C++ \r\nDuring the Cisco Networking Academy® course, administered by the undersigned instructor, the student has studied the following skills:\r\nThis Statement of Achievement is to acknowledge that during the course CPA: Programming Essentials in C++, the student has been able to accomplish coding tasks related to the basics of programming in the C++ language, and understands the fundamental notions and techniques used in object-oriented programming.\r\nBy completing the course, the student is now ready to attempt the qualification CPA – C++ Certified Associate Programmer Certification, from the C++ Institute.'),
('1DT18IS023', 'Deepayan Ghosh', '17-08-2020', '5', 'SIMA Analaytica LTD : Full-stack Developer as intern'),
('1DT18IS039', 'Jason Francis Fernandes', '16-10-2020', '5', 'LIC POLICY Return Management System Project 2020 had a role of Free Lancer.'),
('1DT18IS052', 'MANVITH J Y', '30-09-2020', '4', 'UDEMY Course : Introduction to Databases and SQL online course under the guidance of Rakesh Gopalakrishnan'),
('1dt18me044', 'nagaraj', '25-06-2019', '5', 'hightest six'),
('1DT18ME078', 'shivaraj', '25-06-2019', '5', 'won the hostel premier league');

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `name`) VALUES
('1', 'ISE'),
('2', 'CSE'),
('3', 'ECE'),
('4', 'CIVIL');

--
-- Dumping data for table `extra_curricular_activities`
--

INSERT INTO `extra_curricular_activities` (`usn`, `name`, `sem`, `date`, `content`) VALUES
('1DT18CS065', 'Nafey', '3', '21-10-2019', 'Volley Ball taluk level held by sports auhority of VTU at Bengaluru'),
('1DT18IS012', 'Ayush Dravid', '3', '18-04-2020', 'DANCE COMPETITION of the event Esperanza'),
('1DT18IS023', 'Deepayan Ghosh', '4', '08-02-2020', 'Karate National Level held at Bengaluru and had secured Bronze (3rd Position) '),
('1dt18me044', 'nagaraj', '5', '25-06-2019', 'straight six '),
('1DT18ME078', 'shivaraj', '5', '25-06-2019', 'cricket tournament runner-up');

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`usn`, `name`, `sem`, `SGPA`) VALUES
('1DT18CS055', 'Prashanth Reddy', '4', '8.89'),
('1DT18CS065', 'Nafey', '4', '9.1'),
('1DT18EC035', 'Hrushikesh B Chavare', '4', '8.02'),
('1DT18IS002', 'Aditya Prasad', '4', '8.83'),
('1DT18IS012', 'Ayush Dravid', '4', '8.00'),
('1DT18IS015', 'Bharath H J', '4', '9.00'),
('1DT18IS023', 'Deepayan Ghosh', '4', '8.42'),
('1DT18IS039', 'Jason Francis Fernandes', '4', '9.00'),
('1DT18IS052', 'Manvith J Y', '4', '8.34'),
('1dt18me044', 'nagaraj', '5', '8'),
('1DT18ME078', 'shivaraj', '5', '8');

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `email`, `dept_id`, `phone`, `address`, `sem`, `batch`, `gender`) VALUES
('1DT18CS055', 'Prashanth Reddy', 'lprashanth987@gmail.com', '2', '9019723839', 'Ward 3,Bsaveshwaranagar,Ballari', '5', '2018', 'MALE'),
('1DT18CS065', 'Nafey', 'nafeyahthenx@gmail.com', '2', '8904991412', 'Wadi-e-huda , Shivamogga Karnataka', '5', '2018', 'MALE'),
('1DT18CV001', 'Abhishek M G', 'abhishekmg@gmail.com', '3', '9916553352', 'Gulbarga', '5', '2018-22', 'M'),
('1DT18CV002', 'ABHINANDAN', '@gmail.com', '4', '9008124644', 'xyz', '5', '2018-22', 'M'),
('1DT18EC035', 'Hrushikesh B Chavare', 'infohrushikesh@gmail.com', '3', '9945895800', 'House No 429 Chavare Street, Shedbal, Belagavi Karnataka', '5', '2018', 'MALE'),
('1DT18IS002', 'Aditya Prasad', '1dt18is002.adityaprasad@gmail.com', '1', '8930528335', 'Brigade Meadows Kaglipura Bengaluru Karnataka', '5', '2018', 'MALE'),
('1DT18IS012', 'Ayush Dravid', '1dt18is012.ayushdravid@gmail.com', '1', '8618529543', 'Sakalwara Bengaluru Karnataka', '5', '2018', 'MALE'),
('1DT18IS015', 'Bharath H J', '1dt18is015.bharath@gmail.com', '1', '6362787700', 'Shree Nilaya , Jayanagar 1st Stage Hassan 573201 Karnataka', '5', '2018', 'MALE'),
('1DT18IS023', 'Deepayan Ghosh', '1d18is023.deepayanghosh@gmail.com', '1', '7019449052', 'Gottigere Bannerghata Banglore Karnataka', '5', '2018', 'MALE'),
('1DT18IS039', 'Jason Francis Fernandes', '1dt18is039.jason@gmail.com', '1', '8310174544', 'LIC of India Quarters Karwar Karnataka', '5', '2018', 'MALE'),
('1DT18IS052', 'ManvithJ Y', '1dt18is052.manvithjy@gmail.com', '1', '9482818188', 'Javagal Thirthahalli Taluk Shivmogha Karnataka', '5', '2018', 'MALE'),
('1dt18me044', 'NAGARAJ', 'nagaraj@gmail.com', '4', '9916553352', 'vidyanagar sedam', '5', '2018-22', 'M'),
('1DT18ME078', 'SHIVARAJ', 'shivaraj@gmail.com', '4', '9916553352', 'tumkur', '5', '2018-22', 'M');

--
-- Dumping data for table `subject_marks`
--

INSERT INTO `subject_marks` (`usn`, `Subject1`, `Subject2`, `Subject3`, `Subject4`, `Subject5`, `Subject6`) VALUES
('1DT18CS055', '89', '89', '89', '89', '89', '89'),
('1DT18CS065', '91', '91', '91', '91', '91', '91'),
('1dt18me044', '87', '70', '70', '70', '70', '70'),
('1DT18ME078', '87', '87', '87', '87', '87', '87');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
