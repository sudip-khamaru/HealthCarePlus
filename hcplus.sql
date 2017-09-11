-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 03:55 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hcplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(10) NOT NULL,
  `text` varchar(250) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`a_id`, `reg_no`, `text`, `date`) VALUES
(35, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from kalyani university(KU).', '2016-12-09'),
(38, 'kupg/00331', 'You have recently changed your name from Md Washi Ul Hoque to Washi Ul Hoque', '2016-12-09'),
(40, 'kupg/00331', 'Click on Prescription to download your last Prescription given by Dr. Ramprasad Sharma.doctor.jpg', '2016-12-17'),
(54, 'kupg/00331', 'Click on Prescription to download your last Prescription given by Dr. Ramprasad Sharma.eula.1028.txt', '2016-12-17'),
(55, 'kucse/0002', 'You have recently changed your address from  to asansol', '2016-12-18'),
(56, 'kucse/0002', 'You have recently updated your profile picture - Untitled.png', '2016-12-18'),
(59, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-19'),
(60, 'kucse/0001', 'You have recently changed your address from  to kalyani,nadia', '2016-12-19'),
(61, 'kucse/0001', 'You have recently changed about you in your profile. That is- Professor of kalyani university', '2016-12-19'),
(62, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-19'),
(63, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-19'),
(64, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-20'),
(65, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-21'),
(66, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-21'),
(67, 'kupg/00331', 'You have recently updated your profile picture - Support_Services-512.png', '2016-12-21'),
(68, 'kupg/00331', 'You have recently changed your address from PG2, Kalyani University, Kalyani to PG-II, Kalyani University, Kalyani', '2016-12-21'),
(69, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-21'),
(70, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-21'),
(71, '', 'Click on Prescription to download your last Prescription given by .', '2016-12-21'),
(72, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to ', '2017-05-14'),
(73, 'kupg/00331', 'You have recently changed your phone number from 0 to ', '2017-05-14'),
(74, 'kupg/00331', 'You have recently changed your phone number from 0 to ', '2017-05-14'),
(75, 'kupg/00331', 'You have recently changed your phone number from 0 to ', '2017-05-14'),
(76, 'kupg/00331', 'You have recently changed your phone number from 1234567890 to ', '2017-05-14'),
(77, 'kupg/00331', 'You have recently changed your phone number from 123456789 to ', '2017-05-14'),
(78, 'kupg/00331', 'You have recently changed your phone number from 123456789 to cppdroid.png', '2017-05-16'),
(79, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to cppdroid.png', '2017-05-16'),
(80, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to cppdroid.png', '2017-05-16'),
(81, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to cppdroid.png', '2017-05-16'),
(82, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to cppdroid.png', '2017-05-16'),
(83, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to cppdroid.png', '2017-05-16'),
(84, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to cppdroid.png', '2017-05-16'),
(85, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to cppdroid.png', '2017-05-16'),
(86, 'kupg/00331', 'You have recently changed your phone number from 897205533 to cppdroid.png', '2017-05-16'),
(91, 'kupg/00331', 'You have recently updated your profile picture - sudip.jpg', '2017-05-22'),
(92, 'kupg/00331', 'You have recently uploaded your Blood Test report.', '2017-05-22'),
(93, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-22'),
(94, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-22'),
(95, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-22'),
(96, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-22'),
(97, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-24'),
(98, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-24'),
(99, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-24'),
(100, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-24'),
(101, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-24'),
(102, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-25'),
(103, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-25'),
(104, 'kk', 'Click on Prescription to download your last Prescription given by g.PHOTO.jpg', '2017-05-25'),
(105, 'kk', 'Click on Prescription to download your last Prescription given by g.PHOTO.jpg', '2017-05-25'),
(106, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-25'),
(107, '', 'Click on Prescription to download your last Prescription given by .', '2017-05-25'),
(108, 'kupg/00331', 'Click on Prescription to download your last Prescription given by fj.PHOTO ORIGINAL.jpg', '2017-05-25'),
(109, 'kupg/00420', 'Click on Prescription to download your last Prescription given by hh.PHOTO FOR WORK.jpg', '2017-05-25'),
(110, 'kupg/00420', 'Click on Prescription to download your last Prescription given by hh.PHOTO FOR WORK.jpg', '2017-05-25'),
(111, 'kupg/00420', 'Click on Prescription to download your last Prescription given by hh.PHOTO FOR WORK.jpg', '2017-05-25'),
(112, 'kupg/00420', 'Click on Prescription to download your last Prescription given by hh.PHOTO FOR WORK.jpg', '2017-05-25'),
(113, 'kupg/00420', 'Click on Prescription to download your last Prescription given by hh.PHOTO FOR WORK.jpg', '2017-05-25'),
(114, 'kupg/00420', 'Click on Prescription to download your last Prescription given by hh.PHOTO FOR WORK.jpg', '2017-05-25'),
(115, 'kupg/00331', 'You have recently uploaded your Blood Test report.', '2017-05-25'),
(116, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(117, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(118, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(119, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(120, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(121, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(122, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(123, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(124, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(125, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).hi', '2017-05-25'),
(126, 'kupg/00331', 'You have recently updated your profile picture - FormatFactorySIGNATURE~1.jpg', '2017-05-25'),
(127, 'kupg/00331', 'You have recently updated your profile picture - Photo 2_2.jpg', '2017-05-26'),
(128, 'kupg/00331', 'You have recently updated your profile picture - 17240383_1010004719100405_9137742090868282779_o.jpg', '2017-05-26'),
(129, 'kupg/00331', 'You have recently updated your profile picture - 4523.jpg', '2017-05-26'),
(130, 'kupg/00331', 'You have recently updated your profile picture - 11984.jpg', '2017-05-26'),
(131, 'kupg/00331', 'You have recently uploaded your MRI report.', '2017-05-26'),
(132, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).', '2017-05-26'),
(133, 'kupg/00331', 'You have recently updated your profile picture - 5351.jpg', '2017-05-26'),
(134, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).', '2017-05-26'),
(135, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of MCA from University of Kalyani(KU).', '2017-05-26'),
(136, 'kupg/00331', 'You have recently uploaded your MRI report.', '2017-05-26'),
(137, 'kupg/00331', 'Click on Prescription to download your last Prescription given by Dr. S.4523.jpg', '2017-05-27'),
(138, 'kupg/00331', 'Click on Prescription to download your last Prescription given by Dr. S.4523.jpg', '2017-05-27'),
(139, 'kupg/00331', 'Click on Prescription to download your last Prescription given by Dr. S.3787.jpg', '2017-05-27'),
(140, 'kupg/00331', 'Click on Prescription to download your last Prescription given by washiul.5250.jpg', '2017-05-27'),
(141, 'kupg/00331', 'Click on Prescription to download your last Prescription given by aa.11986.jpg', '2017-05-28'),
(142, 'kupg/00331', 'Click on Prescription to download your last Prescription given by km.5295.jpg', '2017-05-28'),
(143, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(144, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(145, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(146, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(147, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(148, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(149, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(150, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(151, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(152, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(153, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(154, 'kupg/00331', 'You have recently changed about you in your profile. That is- i am a final year student of CSE in University of Kalyani(KU).', '2017-05-29'),
(155, 'kupg/00331', 'You have recently changed your phone number from 8972055333 to 5351.jpg', '2017-05-29'),
(156, 'kupg/00331', 'You have recently updated your profile picture - 806.jpg', '2017-05-29'),
(157, 'kupg/00331', 'Click on Prescription to download your last Prescription given by df.5692.jpg', '2017-05-29'),
(158, 'kupg/00101', 'You have recently changed your name from Washim Khan to ', '2017-05-30'),
(159, 'kupg/00101', 'You have recently changed your department name from comp sc&engg to ', '2017-05-30'),
(160, 'kupg/00101', 'You have recently changed your date of birth from 06/02/1992 to ', '2017-05-30'),
(161, 'kupg/00101', 'You have recently changed your address from kalyani to ', '2017-05-30'),
(162, 'kupg/00101', 'You have recently changed your name from  to washiul', '2017-05-30'),
(163, 'kupg/00101', 'You have recently changed your department name from  to dsfdsfsdf', '2017-05-30'),
(164, 'kupg/00101', 'You have recently changed your date of birth from  to 06/02/1992', '2017-05-30'),
(165, 'kupg/00101', 'You have recently changed your address from  to jhsgfdjgdf', '2017-05-30'),
(166, 'kupg/00101', 'You have recently changed about you in your profile. That is- dfgdfg', '2017-05-30'),
(167, 'kupg/00101', 'You have recently changed your name from washiul to washiul hoque', '2017-05-30'),
(168, 'kupg/00101', 'You have recently changed your name from washiul hoque to washiul', '2017-05-30'),
(169, 'kupg/00101', 'You have recently changed your name from washiul hoque to washiul', '2017-05-30'),
(170, 'kupg/00331', 'You have recently updated your profile picture - 5295.jpg', '2017-05-30'),
(171, 'kupg/00331', 'Click on Prescription to download your last Prescription given by ghghg.godafoss_waterfalls_iceland-wide.jpg', '2017-05-30'),
(172, 'kupg/00331', 'Click on Prescription to download your last Prescription given by jj.4523.jpg', '2017-05-30'),
(173, 'kupg/00331', 'Click on Prescription to download your last Prescription given by mm.Fall-wallpaper-1366x768-HD-wallpaper.jpg', '2017-05-30'),
(174, 'kupg/00331', 'Click on Prescription to download your last Prescription given by fh.16197076_1101392486636061_43719558_o (3).jpg', '2017-05-30'),
(175, 'kupg/00331', 'Click on Prescription to download your last Prescription given by asa.11943.jpg', '2017-06-06'),
(176, 'kupg/00331', 'Click on Prescription to download your last Prescription given by Dr. Asutosh Shah.www.dmzwarez.info_Natures_ 0029.jpg', '2017-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(2) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `apass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'washi.washi786@gmail.com', 'indian'),
(2, 'sudipkhamaru@gmail.com', 'sudip'),
(3, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE IF NOT EXISTS `appoinment` (
  `name` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `registration_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`name`, `issue`, `age`, `phone_no`, `registration_no`) VALUES
('md washi ul hoque', 'X- Ray', '24', '7679012979', ''),
('md washi ul hoque', 'X- Ray', '24', '7679012979', 'HCP/133644'),
('sudip khamaru', 'Nutrition', '23', '7679012979', 'HCP/062966'),
('ss', 'Sport Medicine', '85', '888', 'HCP/433702'),
('', 'Physical Therapy', '', '', 'HCP/246464'),
('Md Washi Ul Hoque', 'Physical Therapy', '24', '7003928355', 'HCP/951772'),
('', 'Physical Therapy', '', '', 'HCP/853001'),
('', 'Physical Therapy', '', '', 'HCP/257394'),
('Sudip Khamaru', 'Nutrition', '25', '8972055333', 'HCP/529495'),
('Sudip Khamaru', 'Sport Medicine', '25', '9851588610', 'HCP/730746'),
('', 'Physical Therapy', '', '', 'HCP/780311'),
('', 'Physical Therapy', '', '', 'HCP/984669'),
('', 'Physical Therapy', '', '', 'HCP/135666'),
('', 'Physical Therapy', '', '', 'HCP/908591'),
('dd', 'Physical Therapy', '25', '9474122765', 'HCP/446186'),
('Sudip Khamaru', 'X- Ray', '25', '8972055333', 'HCP/101348');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `bid` varchar(5) NOT NULL,
  `bgroup` varchar(15) NOT NULL,
  `gainer` varchar(50) NOT NULL,
  `doner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bid`, `bgroup`, `gainer`, `doner`) VALUES
('b001', 'A+', 'A+, A-, O+, O-', 'A+, AB+'),
('b002', 'A-', 'A-, O-', 'A+, A-, AB+, AB-'),
('b003', 'B+', 'B+, B-, O+, O-', 'B+, AB+'),
('b004', 'B-', 'B-, O-', 'B+, B-, AB+, AB-'),
('b005', 'AB+', 'Everyone', 'AB+'),
('b006', 'AB-', 'AB-, A-, B-, O-', 'AB+, AB-'),
('b007', 'O+', 'O+, O-', 'O+, A+, B+, AB+'),
('b008', 'O-', 'O-', 'Everyone');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `receiver`, `message`) VALUES
(1, 'a', 'b', 'hi'),
(2, 'b', 'a', 'hi'),
(3, 'b', 'a', 'hlo'),
(4, 'b', 'a', 'gfhgh'),
(5, 'mr.y', 'mr.x', 'Hi'),
(6, 'mr.x', 'mr.y', 'hlo sir'),
(7, 'sudip', 'pritam', 'hi'),
(8, 'pritam', 'sudip', 'hello'),
(9, 'sudip', 'pritam', 'nyc job....'),
(10, 'pritam', 'sudip', 'Pravati kmn aa6e?'),
(11, 'sudip', 'pritam', 'or bf er sathe vlo a6e..'),
(12, 'pritam', 'sudip', 'gd'),
(13, 'sudip', 'pritam', '&#128528;&#128528;&#128528;&#128528;&#128528;'),
(14, 'pritam', 'sudip', 'gd'),
(15, 'sudipkhamaru@gmail.com', 'as', 'jjj'),
(16, '', 'rs', 'helooooooo'),
(17, 'Sudip Khamaru', 'rs', 'hellooooo'),
(18, 'Sudip Khamaru', 'Dr.', 'jh'),
(19, 'Sudip Khamaru', 'Dr.Ramprasad', 'hgjgjg'),
(20, 'Sudip Khamaru', 'Dr.Ramprasad', 'xxx'),
(21, 'Sudip Khamaru', 'Dr./', 'gjggjg'),
(22, 'Sudip Khamaru', 'Dr./Ramprasad', 'ttt'),
(23, 'Sudip Khamaru', 'Dr.Ramprasad', 'pp'),
(24, 'Sudip Khamaru', 'Dr.Ramprasad', 'qq'),
(25, 'Sudip Khamaru', 'Dr.', 'rr'),
(26, 'Sudip Khamaru', 'Dr. Ramprasad', 'er'),
(27, 'Sudip Khamaru', 'Dr. Ramprasad', 'ertt'),
(28, 'washi', 'sudip', 'hi'),
(29, 'sudip', 'washi', 'hello'),
(30, 'washi', 'sudip', 'how r u?'),
(31, 'sudip', 'washi', 'fine. u?'),
(32, 'sudip', 'washi', 'fine. u?:p'),
(33, 'washi', 'sudip', 'yoo'),
(34, 'Sudip Khamaru', 'Dr. Ramprasad', 'hi'),
(35, 'Sudip Khamaru', 'Dr. Ramprasad', 'hi'),
(36, 'Sudip Khamaru', 'Dr. Asutosh', 'hi! doc');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `serial` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `summary` varchar(10000) NOT NULL,
  `fact` varchar(10000) NOT NULL,
  `causes` varchar(10000) NOT NULL,
  `symptoms` varchar(10000) NOT NULL,
  `preventations` varchar(10000) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`serial`, `name`, `photo`, `summary`, `fact`, `causes`, `symptoms`, `preventations`) VALUES
(1, 'Malaria', 'malaria.jpg', 'Malaria is a very common disease in developing countries. The word malaria is derived from the word', 'Malaria is a very common disease in developing countries. The word malaria is derived from the word "mal-aria" meaning bad air. Ronald Ross first discovered the transmission of malaria by mosquitoes, while he was working in India (Secunderabad, AP) in 1897. Malaria is one of the most widespread diseases in the world.', 'Malaria is caused by protozoan of the genus Plasmodium.  Infection begins with a bite from an infected mosquito. The parasite travels from the mosquito to your liver, where the parasite begins to reproduce. The parasite leaves the liver and travels to the bloodstream, where it infects red blood cells. The parasite reproduces in the red blood cells, which destroys the cells and releases more parasites into the bloodstream. If another mosquito bites an infected person, that mosquito can then carry the infection to someone else.  Every year a handful of people are infected through blood transfusions or organ transplants. ', 'A malaria infection is generally characterized by recurrent attacks with the following signs and symptoms:  Moderate to severe shaking chills High fever Sweating Other signs and symptoms may include:  Headache Vomiting Diarrhea Malaria signs and symptoms typically begin within a few weeks after being bitten by an infected mosquito.', 'Exclusion from childcare, preschool, school or work is not necessary but cases should avoid being bitten by mosquitoes while they are unwell. Travellers to areas with malaria are usually advised to take preventative anti-malarial drugs. There is no vaccine to prevent human infection by this parasite. Personal protection and the environmental management of mosquitoes are important in preventing illness.'),
(2, 'Dengue', 'dengue.jpg', 'Dengue (pronounced DENgee) fever is a painful, debilitating mosquito-borne disease caused by', 'Dengue (pronounced DENgee) fever is a painful, debilitating mosquito-borne disease caused by any one of four closely related dengue viruses. These viruses are related to the viruses that cause West Nile infection and yellow fever.', 'Dengue fever is caused by any one of four dengue viruses spread by mosquitoes that thrive in and near human lodgings. When a mosquito bites a person infected with a dengue virus, the virus enters the mosquito. When the infected mosquito then bites another person, the virus enters that person''s bloodstream.', 'Symptoms, which usually begin four to six days after infection and last for up to 10 days, may include  Sudden, high fever Severe headaches Pain behind the eyes Severe joint and muscle pain Fatigue Nausea Vomiting Skin rash, which appears two to five days after the onset of fever Mild bleeding (such a nose bleed, bleeding gums, or easy bruising).', 'There is no vaccine to prevent dengue fever. The best way to prevent the disease is to prevent bites by infected mosquitoes, particularly if you are living in or traveling to a tropical area. This involves protecting yourself and making efforts to keep the mosquito population down.  To protect yourself:  Stay away from heavily populated residential areas, if possible. Use mosquito repellents, even indoors. When outdoors, wear long-sleeved shirts and long pants tucked into socks.'),
(3, 'Jaundice', 'jaundice.jpg', ' Bilirubin (bil-ih-ROO-bin) is a yellow-colored substance that is responsible for the yellowing of the', ' Bilirubin (bil-ih-ROO-bin) is a yellow-colored substance that is responsible for the yellowing of the skin and sclerae in jaundice. Bilirubin is a waste product that remains in the bloodstream after iron is removed from hemoglobin in red blood cells.', 'Jaundice most often occurs as a result of an underlying disorder that either causes overproduction of bilirubin or prevents the liver from disposing of it, both of which result in bilirubin being deposited in tissues. Acute inflammation of the liver - may impair the ability of the liver to conjugate and secrete bilirubin, resulting in a buildup. Inflammation of the bile duct - may prevent the secretion of bile and removal of bilirubin, causing jaundice. Obstruction of the bile duct - prevents the liver from disposing of bilirubin. Hemolytic anemia - production of bilirubin increases when large quantities of red blood cells are broken down. Gilbert''s syndrome - an inherited condition that impairs the ability of enzymes to process the excretion of bile.', 'Yellow tinge to the skin and the whites of the eyes, normally starting at the head and spreading down the body Pruritis (itchiness) Fatigue Abdominal pain - typically indicates a blockage of the bile duct Weight loss Vomiting', ' Treatment of jaundice typically requires a diagnosis of the specific cause in order to select suitable treatment options. Treatment would then target the cause, rather than the jaundice itself.  Anemia-induced jaundice may be treated by increasing the amount of iron in the blood; either by taking iron supplements or eating more iron-rich foods.  Hepatitis-induced jaundice may be treated with anti-viral or steroid medications.  Obstruction-induced jaundice may be treated via surgery to remove the obstruction.'),
(4, 'Cancer', 'cancer.jpg', 'Cancer is a class of diseases characterized by out-of-control cell growth. There are', 'Cancer is a class of diseases characterized by out-of-control cell growth. There are over 100 different types of cancer, and each is classified by the type of cell that is initially affected.  Cancer harms the body when altered cells divide uncontrollably to form lumps or masses of tissue called tumors.', 'Cancer is ultimately the result of cells that uncontrollably grow and do not die. Normal cells in the body follow an orderly path of growth, division, and death. Programmed cell death is called apoptosis, and when this process breaks down, cancer begins to form. Unlike regular cells, cancer cells do not experience programmatic death and instead continue to grow and divide. This leads to a mass of abnormal cells that grows out of control.', 'Symptoms Symptoms of cancer depend on the type and location of the cancer. For example, lung cancer can cause coughing, shortness of breath, or chest pain. Colon cancer often causes diarrhea, constipation, and blood in the stool. Some cancers may not have any symptoms at all.', 'Treatment varies based on the type of cancer and its stage. The stage of a cancer refers to how much it has grown and whether the tumor has spread from its original location.      If the cancer is confined to one location and has not spread, the most common treatment approach is surgery to cure the cancer. This is often the case with skin cancers, as well as cancers of the lung, breast, and colon.     If the tumor has spread to local lymph nodes only, sometimes these can be removed.'),
(5, 'HIV-AIDS', 'hiv.jpg', 'AIDS (Acquired immune deficiency syndrome or acquired immunodeficiency syndrome) is a', 'AIDS (Acquired immune deficiency syndrome or acquired immunodeficiency syndrome) is a syndrome caused by a virus called HIV (Human Immunodeficiency Virus). The illness alters the immune system, making people much more vulnerable to infections and diseases. This susceptibility worsens as the syndrome progresses.', 'HIV is a retrovirus that infects the vital organs of the human immune system. The virus progresses in the absence of antiretroviral therapy. The rate of virus progression varies widely between individuals and depends on many factors (age of the patient, body''s ability to defend against HIV, access to health care, existence of coexisting infections, the infected person''s genetic inheritance, resistance to certain strains of HIV). HIV can be transmitted through: Sexual transmission. It can happen when there is contact with infected sexual secretions (rectal, genital or oral mucous membranes). This can happen while having unprotected sex, including vaginal, oral and anal sex or sharing sex toys with someone infected with HIV.', 'Most people who have become recently infected with HIV will not have any symptoms. They may, however, have a flu-like illness within a month or two after exposure to the virus, with fever, headache, tiredness, and enlarged lymph nodes (glands of the immune system easily felt in the neck and groin).', 'Because there is no cure or vaccine to prevent HIV, the only way people can prevent infection from the virus is to avoid high-risk behaviors putting them at risk of infection, such as having unprotected sex or sharing needles.     NIAID urges everyone ages 13 to 64 to get tested for HIV as part of their routine health care. Catching HIV in its early stages can make a lifesaving difference.'),
(6, 'Typhoid', 'typhoid.jpg', 'Typhoid is an infection caused by the bacteria Salmonella typhimurium. The bacterium lives in the', 'Typhoid is an infection caused by the bacteria Salmonella typhimurium. The bacterium lives in the intestines and bloodstream of humans. It is spread between individuals by direct contact with the feces of an infected person.  No animals carry this disease, so transmission is always human to human.', 'Typhoid fever is contracted by drinking or eating the bacteria in contaminated food or water. People with acute illness can contaminate the surrounding water supply through stool, which contains a high concentration of the bacteria. Contamination of the water supply can, in turn, taint the food supply. The bacteria can survive for weeks in water or dried sewage.  About 3%-5% of people become carriers of the bacteria after the acute illness. Others suffer a very mild illness that goes unrecognized. These people may become long-term carriers of the bacteria -- even though they have no symptoms -- and be the source of new outbreaks of typhoid fever for many years. ', 'Symptoms normally begin 6-30 days after exposure to the bacteria. The two major symptoms of typhoid are fever and rash. Typhoid fever is particularly high, gradually increasing over several days up to 104 degrees Fahrenheit.  The rash, which does not affect every patient, consists of rose-colored spots, particularly on the neck and abdomen.', 'Typhoid is spread by contact and ingestion of infected human feces. This can happen through an infected water source or when handling food.  The following are some general rules to follow when traveling to help minimize the chance of typhoid infection: Drink bottled water (preferably carbonated). If bottled water cannot be sourced, ensure water is heated on a rolling boil for at least one minute before consuming.'),
(7, 'Cholera', 'cholera.png', 'Cholera is a serious bacterial disease that usually causes severe diarrhea and dehydration.', 'Cholera is a serious bacterial disease that usually causes severe diarrhea and dehydration. The disease is typically spread through contaminated water. In severe cases, immediate treatment is necessary because death can occur within hours.', 'Cholera is caused by bacteria called Vibrio cholerae. The disease’s deadly effects are the result of a strong toxin known as CTX that is produced by these bacteria in your small intestine. CTX interferes with the normal flow of sodium and chloride when it binds to your intestinal walls. When the bacteria attaches to the small intestine’s walls, your body begins to secrete large amounts of water that lead to diarrhea and rapid loss of fluids and salts.  Contaminated water supplies are the primary source of cholera infection. Uncooked fruits, vegetables, and other foods can also contain the bacteria that cause cholera.  Cholera is not usually passed from person to person through casual contact.', 'Symptoms of cholera can begin as soon as a few hours or as long as five days after infection. Often, symptoms are mild. But sometimes they are very serious. About one in 20 people infected have severe watery diarrhea accompanied by vomiting, which can quickly lead to dehydration.', 'Wash hands with soap and water frequently, especially after using the toilet and before handling food. Rub soapy, wet hands together for at least 15 seconds before rinsing. If soap and water aren''t available, use an alcohol-based hand sanitizer. Drink only safe water, including bottled water or water you''ve boiled or disinfected yourself. Use bottled water even to brush your teeth. Hot beverages are generally safe, as are canned or bottled drinks, but wipe the outside before you open them.'),
(8, 'Swine Flu', 'swineflu.jpg', 'Swine flu (swine influenza) is a respiratory disease caused by viruses (influenza viruses) that infect the respiratory tract', 'Swine flu (swine influenza) is a respiratory disease caused by viruses (influenza viruses) that infect the respiratory tract of pigs, resulting in nasal secretions, a barking cough, decreased appetite, and listless behavior. Swine flu produces most of the same symptoms in pigs as human flu produces in people.', 'Swine flu is very contagious. The disease is spread through saliva and mucus particles. People may spread it by:      sneezing     coughing     touching a germ-covered surface and then touching their eyes or nose.', 'The symptoms of swine flu are very much like those of regular influenza. They include:      chills     fever     coughing     sore throat     runny or stuffy nose     body aches     fatigue     diarrhea     nausea and vomiting', 'The best way to prevent swine flu is to get a yearly flu vaccination. Other easy ways to prevent swine flu include: frequently washing hands with soap or hand sanitizer not touching your nose, mouth, or eyes (the virus can survive on surfaces like telephones and tabletops) staying home from work or school if you''re ill avoiding large gatherings when swine flu is in season. It’s important to follow any public health recommendations regarding school closures or avoiding crowds during the flu season.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE IF NOT EXISTS `doctor_info` (
  `Name` text NOT NULL,
  `Age` int(2) NOT NULL,
  `Specialization` text NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Phone_no1` int(10) NOT NULL,
  `Phone_no2` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `photo` varchar(20) DEFAULT NULL,
  `doc_id` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`Name`, `Age`, `Specialization`, `Address`, `Phone_no1`, `Phone_no2`, `Email`, `photo`, `doc_id`) VALUES
('Kaiser Khan', 38, 'M.B.B.S.(Cal), M.D.(Cardio), F.R.C.S.(France).', '49 B, Camac Street, Kolkata - 700013.', 2100000987, 2100000988, 'dr_kaiserkhan@ku.ac.in', 'd2.png', 'd002'),
('Avinash Biswas', 28, 'M.B.B.S.(Cal).', 'Central Park, Kalyani - 741235.', 2100000933, 2100000944, 'dr_angiradebnath@ku.ac.in', 'd1.png', 'd003');

-- --------------------------------------------------------

--
-- Table structure for table `expire_medicine`
--

CREATE TABLE IF NOT EXISTS `expire_medicine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `composition` varchar(100) NOT NULL,
  `mfd` date NOT NULL,
  `exp` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `expire_medicine`
--

INSERT INTO `expire_medicine` (`id`, `batch_no`, `name`, `brand`, `composition`, `mfd`, `exp`) VALUES
(1, 'a', 'a', 'a', 'a', '2017-05-24', '2017-05-31'),
(2, 'p', 'p', 'p', 'p', '2017-05-11', '2017-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `fb`
--

CREATE TABLE IF NOT EXISTS `fb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ph/email` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `photo` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `suggestion` varchar(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `fb`
--

INSERT INTO `fb` (`id`, `ph/email`, `name`, `photo`, `comment`, `suggestion`, `date`) VALUES
(1, 'washi.washi786@gmail.com', 'Md Washi Ul Hoque', 'd1.png', 'Very Satisfied', 'We are very happy that there is a good health service in our university. Although if i suggest then  there should be a blood donation facility here.', '2016-10-20'),
(43, 'washi.washi786@gmail.com', 'Md Washi Ul Hoque', 'd2.png', 'Very satisfied', 'sudip sudipppppppppp', '2016-10-21'),
(44, 'washi.washi786@gmail.com', 'Washi Ul Hoque', 'IMG_20161029_035153.jpg', 'Very satisfied', 'There should be a blood bank.', '2016-12-17'),
(45, 'goutambasak.cu@gmail.com', 'Goutam Basak', 'd1.png', 'Satisfied', 'please improve the medicines.', '2016-12-19'),
(46, 'washi.washi786@gmail.com', 'Md Washi Ul Hoque', 'IMG_20161029_035153.jpg', 'Dissatisfied', 'hh', '2016-12-20'),
(47, 'washi.washi786@gmail.com', 'Md Washi Ul Hoque', 'Support_Services-512.png', 'Satisfied', 'Call facility should be here.', '2016-12-21'),
(48, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', 'cppdroid.png', 'Very satisfied', 'yy', '2017-05-10'),
(49, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', 'cppdroid.png', 'Satisfied', 'jj', '2017-05-10'),
(50, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', 'cppdroid.png', 'Dissatisfied', 'kk', '2017-05-10'),
(51, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', 'cppdroid.png', 'Very satisfied', '', '2017-05-10'),
(52, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', 'cppdroid.png', 'Very satisfied', 'hi', '2017-05-16'),
(53, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', '806.jpg', 'Dissatisfied', 'hahahah', '2017-05-29'),
(54, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', '5295.jpg', '', 'doctor should have some moral values instead of looking for earn money in wrong way\r\n', '2017-06-06'),
(55, 'sudipkhamaru@gmail.com', 'Sudip Khamaru', '5295.jpg', 'Very satisfied', 'Facility is too good.', '2017-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_status`
--

CREATE TABLE IF NOT EXISTS `medicine_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `composition` varchar(100) NOT NULL,
  `mfd` date NOT NULL,
  `exp` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `medicine_status`
--

INSERT INTO `medicine_status` (`id`, `batch_no`, `name`, `brand`, `composition`, `mfd`, `exp`) VALUES
(3, 'ABC12', 'ABC', 'ABC', 'ABC', '2015-05-11', '2017-06-16'),
(23, 'VVV', 'VVV', 'VVV', 'VVV', '2017-05-15', '2017-06-18'),
(27, 'vv', 'oo', 'b', 'b', '2017-05-15', '2017-12-12'),
(30, 'm', 'm', 'm', 'm', '2017-05-12', '2017-06-19'),
(32, 'mM', 'mM', 'mM', 'mM', '2016-02-13', '2017-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(100) NOT NULL,
  `notice` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `reg_no`, `notice`, `date`, `status`) VALUES
(1, 'kupg/00331', 'Prescription Uploaded.', '2017-05-27', 'seen'),
(2, 'kupg/00331', 'Prescription Uploaded.', '2017-05-27', 'seen'),
(3, 'kupg/00331', 'Prescription Uploaded.', '2017-05-27', 'seen'),
(4, 'kupg/00331', 'Prescription Uploaded.', '2017-05-28', 'seen'),
(5, 'kupg/00331', 'Prescription Uploaded.', '2017-05-28', 'seen'),
(6, 'kupg/00331', 'messege', '2017-05-28', 'seen'),
(7, 'kupg/00331', 'Prescription Uploaded.', '2017-05-29', 'seen'),
(8, 'kupg/00331', 'Prescription Uploaded.', '2017-05-30', 'seen'),
(9, 'kupg/00331', 'Prescription Uploaded.', '2017-05-30', 'seen'),
(10, 'kupg/00331', 'Prescription Uploaded.', '2017-05-30', 'seen'),
(11, 'kupg/00331', 'Prescription Uploaded.', '2017-05-30', 'seen'),
(12, 'kupg/00331', 'Prescription Uploaded.', '2017-06-06', 'seen'),
(13, 'kupg/00331', 'Prescription Uploaded.', '2017-06-09', 'unseen');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(100) NOT NULL,
  `prescription` text NOT NULL,
  `doctor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `reg_no`, `prescription`, `doctor`) VALUES
(1, 'kupg/00331', 'PHOTO ORIGINAL.jpg', 'fj'),
(2, 'kupg/00420', 'PHOTO FOR WORK.jpg', 'hh'),
(3, 'kupg/00420', 'PHOTO FOR WORK.jpg', 'hh'),
(4, 'kupg/00420', 'PHOTO FOR WORK.jpg', 'hh'),
(5, 'kupg/00420', 'PHOTO FOR WORK.jpg', 'hh'),
(6, 'kupg/00420', 'PHOTO FOR WORK.jpg', 'hh'),
(7, 'kupg/00420', 'PHOTO FOR WORK.jpg', 'hh'),
(8, 'kupg/00331', '4523.jpg', 'Dr. S'),
(9, 'kupg/00331', '4523.jpg', 'Dr. S'),
(10, 'kupg/00331', '3787.jpg', 'Dr. S'),
(11, 'kupg/00331', '5250.jpg', 'washiul'),
(12, 'kupg/00331', '11986.jpg', 'aa'),
(13, 'kupg/00331', '5295.jpg', 'km'),
(14, 'kupg/00331', '5692.jpg', 'df'),
(15, 'kupg/00331', 'godafoss_waterfalls_iceland-wide.jpg', 'ghghg'),
(16, 'kupg/00331', '4523.jpg', 'jj'),
(17, 'kupg/00331', 'Fall-wallpaper-1366x768-HD-wallpaper.jpg', 'mm'),
(18, 'kupg/00331', '16197076_1101392486636061_43719558_o (3).jpg', 'fh'),
(19, 'kupg/00331', '11943.jpg', 'asa'),
(20, 'kupg/00331', 'www.dmzwarez.info_Natures_ 0029.jpg', 'Dr. Asutosh Shah');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `reg_no`, `issue`, `photo`, `date`) VALUES
(1, '', 'MRI', '', '2017-05-17'),
(2, 'kupg/00331', 'MRI', 'PHOTO ORIGINAL.jpg', '2017-05-17'),
(3, 'kupg/00331', 'Blood Test', 'FormatFactorySIGNATURE.jpg', '2017-05-17'),
(4, 'kupg/00331', 'Sugar Test', 'Photo 2_3.jpg', '2017-05-17'),
(5, 'kupg/00331', 'MRI', 'IMG_20160423_020501.jpg', '2017-05-17'),
(6, 'kupg/00331', 'MRI', 'Dip.jpg', '2017-05-17'),
(7, 'kupg/00331', 'Blood Test', 'Copy of D- 1702549729 - Copy - Copy.jpg', '2017-05-17'),
(8, 'kupg/00331', 'Sugar Test', 'D- 1702549729.jpg', '2017-05-17'),
(9, 'kupg/00331', 'MRI', 'Copy of D- 1702549729 - Copy.jpg', '2017-05-17'),
(10, 'kupg/00331', 'Sugar Test', 'Copy of D- 1702549729.jpg', '2017-05-17'),
(11, 'kupg/00331', 'Sugar Test', 'D- 1702549729 - Copy.jpg', '2017-05-17'),
(12, 'kupg/00331', 'Blood Test', 'D- 1702549729 - Copy - Copy.jpg', '2017-05-17'),
(13, 'kupg/00331', 'Blood Test', 'sudip.jpg', '2017-05-22'),
(14, 'kupg/00331', 'Blood Test', 'g.jpg', '2017-05-22'),
(15, 'kupg/00331', 'Blood Test', 'Photo 2_2.jpg', '2017-05-25'),
(16, 'kupg/00331', 'MRI', '4523.jpg', '2017-05-26'),
(17, 'kupg/00331', 'MRI', '3787.jpg', '2017-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE IF NOT EXISTS `symptom` (
  `name` varchar(100) NOT NULL,
  `symptom1` varchar(1000) NOT NULL,
  `symptom2` varchar(1000) NOT NULL,
  `symptom3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`name`, `symptom1`, `symptom2`, `symptom3`) VALUES
('Viral Fever', 'Severe headache', 'Severe throat swelling', 'Mental confusion');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `Reg_no` varchar(10) NOT NULL,
  `Name` text NOT NULL,
  `Dob` varchar(10) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Dept` text NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Photo` text NOT NULL,
  `Sex` text NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Validate` text,
  `about_me` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Reg_no`, `Name`, `Dob`, `Phone`, `Dept`, `Address`, `Password`, `Photo`, `Sex`, `Email`, `Validate`, `about_me`) VALUES
('KUPG/00332', 'Kaiser Imam Khan', '06/01/1993', 7501548836, 'Comp Sc & Engg', 'PG2, Kalyani University, Kalyani', 'kaiser', 'd1.png', 'Male', 'jghdfjgkj@gmail.com', 'Yes', ''),
('kupg/00331', 'Sudip Khamaru', '11/04/1992', 9851588610, 'Comp. Sc. & Engg.', 'PG-II, Kalyani University, Kalyani', 'indianarmy', '5295.jpg', 'Male', 'sudipkhamaru@gmail.com', 'Yes', 'i am a final year student of CSE in University of Kalyani(KU).'),
('kucse/0002', 'Dr. Kaiser Imam Khan', '31/12/2016', 9999999999, 'Comp. Sc. & Engg.', 'asansol', '123', 'Untitled.png', '', 'gg@gmail.com', 'No', 'hi'),
('kucse/0001', 'Dr. Kalyani Mali', '31/12/1960', 9836005668, 'Comp. Sc. & Engg.', 'kalyani,nadia', 'india', 'km.jpg', '', 'kalyanimali1992@gmail.com', 'Yes', 'Professor of kalyani university'),
('kupg/00337', 'Goutam Basak', '07/05/1985', 9007227147, 'comp sc & engg', '', '9333687880', 'd1.png', '', 'goutambasak.cu@gmail.com', 'Yes', 'simple'),
('kupg/00300', 'Anannya Mistry', '20/12/2016', 9999999999, 'CSE', '', '123', 'd3.png', '', 'a@gmail.com', 'Yes', 'hi'),
('kupg/00003', 'User', '22/12/2016', 9999999999, 'CSE', '', '12345', 'user.png', '', 'user@gmail.com', 'Yes', 'User'),
('KUPG/00420', 'hh', '11/04/1992', 9474122765, 'cse', '', '123', 'd1.png', '', 'sudipkhamaru.007@gmail.com', 'Yes', ''),
('kupg/00100', 'was', '06/02/1992', 1234567890, 'cse', '', 'indianarmy', 'd1.png', '', 'washi.washi786@gmail.com', 'Yes', 'hi'),
('kupg/00101', 'washiul', '06/02/1992', 1234567891, 'dsfdsfsdf', 'jhsgfdjgdf', '123456', 'd1.png', '', 'washi.washi788@gmail.com', 'Yes', 'dfgdfg');
