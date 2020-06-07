-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 06:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` int(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `divission` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `thana` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `cid`, `cname`, `phonenumber`, `divission`, `district`, `thana`) VALUES
(10, 'c1', 'Labyed Medical', '01747979703', 'Dhaka', 'Manikganj', 'Manikganj'),
(11, 'c2', 'Rajsahi Medical', '01747979703', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(12, 'c3', 'Eye Hospital', '01303187959', 'Dhaka', 'Manikganj', 'Manikganj'),
(13, 'c4', 'Dakha Medical', '01745879654', 'Dhaka', 'Narsingdi', 'Narsingdi Sadar'),
(14, 'c5', 'Popular', '01747979703', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(15, 'c6', 'Ibnesina Hospital', '01745879654', 'Dhaka', 'Ghazipur', 'Kaliakair ');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(100) NOT NULL,
  `diseases` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `diseases`) VALUES
(1, 'Autoimmune Diseases.'),
(2, 'Allergies & Asthma.'),
(3, 'Celiac Disease.'),
(4, 'Crohns & Colitis.'),
(5, 'Infectious Diseases.');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `divission_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district`, `divission_id`) VALUES
(1, 'Dhaka', 'DHAKA'),
(2, 'Ghazipur', 'DHAKA'),
(3, 'Kishoreganj', 'DHAKA'),
(4, 'Manikganj', 'DHAKA'),
(5, 'Narsingdi', 'DHAKA'),
(6, 'Faridpur', 'DHAKA'),
(7, 'Khulna', 'Khulna'),
(8, 'Kushtia', 'Khulna'),
(9, 'Magura', 'Khulna'),
(10, 'Jhenaidah', 'Khulna'),
(11, 'Bagerhat', 'Khulna'),
(12, 'Satkhira', 'Khulna'),
(13, 'Chittagong', 'Chittagong'),
(14, 'Feni', 'Chittagong'),
(15, 'Rangamati', 'Chittagong'),
(16, 'Noakhali', 'Chittagong'),
(17, 'Bandarban', 'Chittagong'),
(18, 'Khagrachhari', 'Chittagong'),
(19, 'Barguna ', 'Barisal'),
(20, 'Patuakhali', 'Barisal'),
(21, 'Madaripur', 'Barisal'),
(22, 'Bhola', 'Barisal'),
(23, 'Pirojpur', 'Barisal'),
(24, 'Shariatpur', 'Barisal'),
(25, 'Mymensingh ', 'Mymensingh'),
(26, 'Netrokona', 'Mymensingh'),
(27, 'Jamalpur', 'Mymensingh'),
(28, 'Sherpur', 'Mymensingh'),
(29, 'Bogura', 'Rajshahi'),
(30, 'Chapainawabganj', 'Rajshahi'),
(31, 'Joypurhat', 'Rajshahi'),
(32, 'Naogaon', 'Rajshahi'),
(33, 'Dinajpur', 'Rangpur'),
(34, 'Kurigram', 'Rangpur'),
(35, 'Rangpur', 'Rangpur'),
(36, 'Nilphamari', 'Rangpur'),
(37, 'Habiganj', 'Sylhet'),
(38, 'Moulvibazar', 'Sylhet'),
(39, 'Sunamganj', 'Sylhet'),
(40, 'Sylhet', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `divission`
--

CREATE TABLE `divission` (
  `id` int(100) NOT NULL,
  `divission` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divission`
--

INSERT INTO `divission` (`id`, `divission`) VALUES
(1, 'Dhaka'),
(2, 'Khulna'),
(3, 'Chittagong'),
(4, 'Barisal'),
(5, 'Mymensingh'),
(6, 'Rajshahi'),
(7, 'Rangpur'),
(8, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `divission` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `thana` varchar(50) NOT NULL,
  `specialty` varchar(50) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `bmdcregno` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `userid`, `username`, `gender`, `email`, `phonenumber`, `dob`, `divission`, `district`, `thana`, `specialty`, `degree`, `bmdcregno`, `description`) VALUES
(11, 'd1', 'Hasibul Hasan', 'Male', 'hashibul218@gmail.com', '01747979703', '1997-01-09', 'Khulna', 'Kushtia', 'Doulatpur ', 'Dermatology', 'FCPS', '1234567892', 'i am a doctor'),
(12, 'd2', 'Sishir', 'Male', 'hashibul218@gmail.com', '01747979703', '1997-01-02', 'Dhaka', 'Kishoreganj', 'Hossainpur ', 'Anesthesiology', 'FCPS', '1234567892', 'i am pro'),
(13, 'd6', 'Priyank Chopra', 'Female', 'mrahmatullah.alamin@gmail.com', '01747979703', '1998-01-02', 'Khulna', 'Bagerhat', 'Batiaghatar', 'Medical genetics', 'FCPS', '1234567892', 'i am a doctor'),
(14, 'd4', 'Sharuk khan', 'Male', 'hashibul218@gmail.com', '01747979703', '1999-12-15', 'Dhaka', 'Kishoreganj', 'Hossainpur ', 'Anesthesiology', 'FCPS', '1234567892', 'i ma \r\n'),
(15, 'd5', 'Amir Khan', 'Male', 'rg.sagor007@gmail.com', '01747979703', '1988-01-02', 'Khulna', 'Magura', 'Magura Sadar', 'Dermatology', 'FCPS', '1234567892', 'i ammmmm');

-- --------------------------------------------------------

--
-- Table structure for table `doctorsetschedule`
--

CREATE TABLE `doctorsetschedule` (
  `id` int(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `divission` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `thana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorsetschedule`
--

INSERT INTO `doctorsetschedule` (`id`, `did`, `dname`, `cid`, `cname`, `time`, `date`, `divission`, `district`, `thana`) VALUES
(24, 'd1', 'Hasibul Hasan', 'c1', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'Dhaka', 'Manikganj', 'Manikganj'),
(25, 'd2', 'Sishir', 'c3', 'Eye Hospital', '02pm - 05pm', '2020-04-29', 'Dhaka', 'Manikganj', 'Manikganj'),
(26, 'd2', 'Sishir', 'c2', 'Rajsahi Medical', '02pm - 05pm', '2020-04-29', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(27, 'd2', 'Sishir', 'c5', 'Popular', '02pm - 05pm', '2020-04-29', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(28, 'd2', 'Sishir', 'c2', 'Rajsahi Medical', '02pm - 05pm', '2020-04-29', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(29, 'd2', 'Sishir', 'c2', 'Rajsahi Medical', '02pm - 05pm', '2020-04-29', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(30, 'd4', 'Sharuk khan', 'c2', 'Rajsahi Medical', '08pm - 10pm', '2020-05-01', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(31, 'd4', 'Sharuk khan', 'c2', 'Rajsahi Medical', '08am - 10am', '2020-04-29', 'Khulna', 'Bagerhat', 'Batiaghatar'),
(33, 'd1', 'Hasibul Hasan', 'c4', 'Dakha Medical', '02pm - 05pm', '2020-04-30', 'Dhaka', 'Narsingdi', 'Narsingdi Sadar');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `notification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `pid`, `did`, `dname`, `cname`, `time`, `date`, `notification`) VALUES
(12, 'p1', 'd1', 'Hasibul Hasan', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'You are appointed'),
(13, 'p1', 'd1', 'Hasibul Hasan', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'You are appointed'),
(14, 'p2', 'd2', 'Sishir', 'Rajsahi Medical', '02pm - 05pm', '2020-04-29', 'You are appointed'),
(15, 'p2', 'd2', 'Sishir', 'Rajsahi Medical', '02pm - 05pm', '2020-04-29', 'You are appointed'),
(16, 'p3', 'd4', 'Sharuk khan', 'Rajsahi Medical', '08pm - 10pm', '2020-05-01', 'You are Rejected'),
(17, 'p4', 'd1', 'Hasibul Hasan', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'You are appointed'),
(18, 'p4', 'd4', 'Sharuk khan', 'Rajsahi Medical', '08pm - 10pm', '2020-05-01', 'You are Rejected'),
(19, 'p5', 'd4', 'Sharuk khan', 'Rajsahi Medical', '08pm - 10pm', '2020-05-01', 'You are appointed'),
(20, 'p1', 'd4', 'Sharuk khan', 'Rajsahi Medical', '08am - 10am', '2020-04-29', 'You are appointed'),
(21, 'p1', 'd1', 'Hasibul Hasan', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'You are appointed'),
(22, 'p1', 'd1', 'Hasibul Hasan', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'You are Rejected'),
(23, 'p1', 'd1', 'Hasibul Hasan', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'You are appointed');

-- --------------------------------------------------------

--
-- Table structure for table `patientrecords`
--

CREATE TABLE `patientrecords` (
  `id` int(100) NOT NULL,
  `did` varchar(200) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `pid` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `cid` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `symptom` varchar(200) DEFAULT NULL,
  `diseases` varchar(200) NOT NULL,
  `test` varchar(200) NOT NULL,
  `testclinic` varchar(200) DEFAULT NULL,
  `report` varchar(200) NOT NULL,
  `medicines` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientrecords`
--

INSERT INTO `patientrecords` (`id`, `did`, `dname`, `pid`, `pname`, `cid`, `cname`, `time`, `date`, `symptom`, `diseases`, `test`, `testclinic`, `report`, `medicines`) VALUES
(1, 'd1', 'Hasibul Hasan', 'p1', 'dola', 'c1', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'High fever,sick', 'Allergies & Asthma.', 'Urine test', 'Dhanmondi South East Hospital', 'sdfsd', 'napa extra'),
(2, 'd2', 'Sishir', 'p2', 'tithi ghosh', 'c2', 'Rajsahi Medical', '02pm - 05pm', '2020-04-29', 'High fever,sick', 'Celiac Disease.', 'Urine test', 'Al Noor Eye Hospital', 'something', 'napa'),
(3, 'd1', 'Hasibul Hasan', 'p4', 'Dipto Mondol', 'c1', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'asd', 'Allergies & Asthma.', 'Urine test,another test', 'Al Noor Eye Hospital', 'something', 'fulvin'),
(4, 'd4', 'Sharuk khan', 'p5', 'wadud', 'c2', 'Rajsahi Medical', '08pm - 10pm', '2020-05-01', 'High fever,sick', 'Crohns & Colitis.', 'Urine test', 'Dhanmondi South East Hospital', 'sdfsd', 'napa'),
(5, 'd4', 'Sharuk khan', 'p1', 'dola', 'c2', 'Rajsahi Medical', '08am - 10am', '2020-04-29', 'Fever', 'Allergies & Asthma.', 'Urine test', 'Al Noor Eye Hospital', 'something', 'eorjfpierjf'),
(6, 'd1', 'Hasibul Hasan', 'p1', 'dola', 'c1', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'High fever,sick', 'Crohns & Colitis.', 'Urine test', 'Dhanmondi South East Hospital', 'something', 'fdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `patientrequest`
--

CREATE TABLE `patientrequest` (
  `id` int(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `divission` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `thana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientrequest`
--

INSERT INTO `patientrequest` (`id`, `pid`, `pname`, `did`, `dname`, `cid`, `cname`, `time`, `date`, `divission`, `district`, `thana`) VALUES
(34, 'p1', 'dola', 'd2', 'Sishir', 'c3', 'Eye Hospital', '02pm - 05pm', '2020-04-29', 'Dhaka', 'Manikganj', 'Manikganj');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `bloodgroup` varchar(11) NOT NULL,
  `divission` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `thana` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `userid`, `username`, `gender`, `email`, `phonenumber`, `dob`, `bloodgroup`, `divission`, `district`, `thana`) VALUES
(8, 'p1', 'dola', 'Female', 'afiarahman218@hotmail.com', '01745879654', '1997-02-24', 'O+', 'Khulna', 'Jhenaidah', 'Jhenaidah Sadar'),
(9, 'p2', 'tithi ghosh', 'Female', 'afiarahman218@hotmail.com', '01303187959', '1998-01-02', 'B+', 'Dhaka', 'Kishoreganj', 'Hossainpur '),
(10, 'p3', 'Tania karim', 'Female', 'rg.sagor007@gmail.com', '01745879654', '1998-01-02', 'B-', 'Khulna', 'Satkhira', 'Assasuni'),
(11, 'p4', 'Dipto Mondol', 'Male', 'mrahmatullah.alamin@gmail.com', '01747979703', '1997-01-15', 'A-', 'Dhaka', 'Faridpur', 'Faridpur Sadar'),
(12, 'p5', 'wadud', 'Male', 'afiarahman218@hotmail.com', '01745879654', '1998-01-02', 'A-', 'Khulna', 'Magura', 'Magura Sadar'),
(13, 'p6', 'ridu', 'Male', 'hashibul218@gmail.com', '01747979703', '1999-01-02', 'B+', 'Dhaka', 'Kishoreganj', 'Hossainpur ');

-- --------------------------------------------------------

--
-- Table structure for table `patientwaiting`
--

CREATE TABLE `patientwaiting` (
  `id` int(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `divission` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `thana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientwaiting`
--

INSERT INTO `patientwaiting` (`id`, `pid`, `pname`, `did`, `dname`, `cid`, `cname`, `time`, `date`, `divission`, `district`, `thana`) VALUES
(22, 'p1', 'dola', 'd1', 'Hasibul Hasan', 'c1', 'Labyed Medical', '02pm - 05pm', '2020-04-29', 'Dhaka', 'Manikganj', 'Manikganj');

-- --------------------------------------------------------

--
-- Table structure for table `slot1`
--

CREATE TABLE `slot1` (
  `id` int(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `slot1` varchar(100) DEFAULT NULL,
  `divission` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `thana` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot1`
--

INSERT INTO `slot1` (`id`, `cid`, `cname`, `slot1`, `divission`, `district`, `thana`, `date`) VALUES
(24, 'c1', 'Labyed Medical', '08am - 10am', 'Dhaka', 'Manikganj', 'Manikganj', '2020-04-28'),
(25, 'c1', 'Labyed Medical', '02pm - 05pm', 'Dhaka', 'Manikganj', 'Manikganj', '2020-04-29'),
(26, 'c1', 'Labyed Medical', '02pm - 05pm', 'Dhaka', 'Manikganj', 'Manikganj', '2020-04-30'),
(27, 'c2', 'Rajsahi Medical', '08am - 10am', 'Khulna', 'Bagerhat', 'Batiaghatar', '2020-04-28'),
(28, 'c2', 'Rajsahi Medical', '02pm - 05pm', 'Khulna', 'Bagerhat', 'Batiaghatar', '2020-04-29'),
(30, 'c2', 'Rajsahi Medical', '08pm - 10pm', 'Khulna', 'Bagerhat', 'Batiaghatar', '2020-05-01'),
(31, 'c3', 'Eye Hospital', '08am - 10am', 'Dhaka', 'Manikganj', 'Manikganj', '2020-04-28'),
(32, 'c3', 'Eye Hospital', '02pm - 05pm', 'Dhaka', 'Manikganj', 'Manikganj', '2020-04-29'),
(33, 'c3', 'Eye Hospital', '08pm - 10pm', 'Dhaka', 'Manikganj', 'Manikganj', '2020-04-30'),
(34, 'c4', 'Dakha Medical', '08am - 10am', 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', '2020-04-28'),
(35, 'c4', 'Dakha Medical', '02pm - 05pm', 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', '2020-04-30'),
(36, 'c4', 'Dakha Medical', '08pm - 10pm', 'Dhaka', 'Narsingdi', 'Narsingdi Sadar', '2020-05-01'),
(37, 'c5', 'Popular', '08am - 10am', 'Khulna', 'Bagerhat', 'Batiaghatar', '2020-04-29'),
(38, 'c5', 'Popular', '02pm - 05pm', 'Khulna', 'Bagerhat', 'Batiaghatar', '2020-04-30'),
(39, 'c5', 'Popular', '08pm - 10pm', 'Khulna', 'Bagerhat', 'Batiaghatar', '2020-05-01'),
(40, 'c6', 'Ibnesina Hospital', '08am - 10am', 'Dhaka', 'Ghazipur', 'Kaliakair ', '2020-04-28'),
(41, 'c6', 'Ibnesina Hospital', '02pm - 05pm', 'Dhaka', 'Ghazipur', 'Kaliakair ', '2020-04-30'),
(42, 'c6', 'Ibnesina Hospital', '08pm - 10pm', 'Dhaka', 'Ghazipur', 'Kaliakair ', '2020-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `tempdoctorrequests`
--

CREATE TABLE `tempdoctorrequests` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `divission` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `thana` varchar(50) NOT NULL,
  `specialty` varchar(50) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `bmdcregno` varchar(20) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempdoctorrequests`
--

INSERT INTO `tempdoctorrequests` (`id`, `userid`, `username`, `gender`, `email`, `phonenumber`, `dob`, `divission`, `district`, `thana`, `specialty`, `degree`, `bmdcregno`, `description`) VALUES
(12, 'd3', 'Borhan   Uddin', 'Male', 'rg.sagor007@gmail.com', '01745879654', '1998-01-02', 'Dhaka', 'Kishoreganj', 'Hossainpur ', 'Medical genetics', 'FCPS', '1234567892', 'i am a doctor');

-- --------------------------------------------------------

--
-- Table structure for table `tempusers`
--

CREATE TABLE `tempusers` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempusers`
--

INSERT INTO `tempusers` (`id`, `userid`, `password`, `status`) VALUES
(12, 'd3', '$2y$10$SiTlAxdrS7LEMAnkhVPd6.VMU5VZ78BZ0OnBJRm8C/gNYszNF.iTa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `testclinic`
--

CREATE TABLE `testclinic` (
  `id` int(100) NOT NULL,
  `tcname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testclinic`
--

INSERT INTO `testclinic` (`id`, `tcname`) VALUES
(1, 'Abir General Hospital'),
(2, 'Ad-Din Hospital'),
(3, 'Al Noor Eye Hospital'),
(4, 'Dhanmondi South East Hospital'),
(5, 'Dr. Salahuddin Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
  `id` int(100) NOT NULL,
  `thana` varchar(100) NOT NULL,
  `district_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`id`, `thana`, `district_id`) VALUES
(1, 'Dhamrai', 'Dhaka'),
(2, 'Kaliakair ', 'Ghazipur'),
(3, 'Hossainpur ', 'Kishoreganj'),
(4, 'Manikganj', 'Manikganj'),
(5, 'Narsingdi Sadar', 'Narsingdi'),
(6, 'Faridpur Sadar', 'Faridpur'),
(7, 'Terakhada', 'Khulna'),
(8, 'Doulatpur ', 'Kushtia'),
(9, 'Magura Sadar', 'Magura'),
(10, 'Jhenaidah Sadar', 'Jhenaidah'),
(11, 'Batiaghatar', 'Bagerhat'),
(12, 'Assasuni', 'Satkhira'),
(21, 'Kotwali ', 'Chittagong'),
(22, 'Patenga', 'Rangamati'),
(23, 'Taltali', 'Barguna '),
(24, 'Kalkini', 'Madaripur'),
(25, 'Durgapur', 'Netrokona'),
(26, 'Sreebardi Upazila', 'Sherpur'),
(27, 'Bholahat Upazila', 'Chapainawabganj'),
(28, 'Atrai Upazila', 'Naogaon'),
(29, 'Rajarhat Upazila', 'Kurigram'),
(30, 'Domar', 'Nilphamari'),
(31, 'Kamalganj', 'Moulvibazar'),
(32, 'Bishwamvarpur', 'Sunamganj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `password`, `status`) VALUES
(32, 'Hasibul', '$2y$10$8moQr00INAVm/xKXRm0pi.eFbcCnTAXPM13h.mfrNH80t.Bn80vM.', 1),
(34, 'd1', '$2y$10$a5.cZAITn9N08uyopba1O.9Z6rKPV7IuOIC8GhkZElRllC1heyDFW', 2),
(35, 'c1', '$2y$10$heKmFh/Cs50ss8yEotU11evecDoLf6krJtGtSKy3U7VoMUaHgIMWy', 4),
(36, 'p1', '$2y$10$a6AYjOfKsEZDSMT1rhL5Ze330EPYZ2NeH5gYFCAMYNgFCsgm4XDLe', 3),
(37, 'c2', '$2y$10$FtMM/FSjvC9QsibiTEank.j9zSZ0/HaZj9hKc/qjXGSC9WMCjZzyS', 4),
(38, 'c3', '$2y$10$25/pj0j4JPG28dDcV98sSOH/rBmJzdEjdr3MqT9/FRQA3MYG9IaSO', 4),
(39, 'c4', '$2y$10$Tqakl/huNnDUNo449.12M.zpVIGY/4NAOdXumvCnOHsNq2P0VVx/m', 4),
(40, 'c5', '$2y$10$0YYLQHQIdypwvXL/fiPUvuNA/kuWXfY4t.8XQUBCIk73SHjH9Qy6u', 4),
(41, 'c6', '$2y$10$Pd9gSIlhHnP5ArrpvgTzuuRg1OsS5Jl.n4ha5tFYDznuJT5QG1xMK', 4),
(42, 'p2', '$2y$10$YNwS7zHh7zDj8jNsIPXLkOGCYeOs4mDMcJmKUHSLeELRTGvsDwydO', 3),
(43, 'p3', '$2y$10$pKH0S3199Ibj.Ux1/fhXJugtpzLDE1V4ZsfsfUj/QZnMfpMoTJaIO', 3),
(44, 'p4', '$2y$10$fI0ONm3t7wjgcACqcXHriuLzqTiCr4BAMBrj9DHS5vXvBTM3rwLCi', 3),
(45, 'p5', '$2y$10$F68eTmnqtwXM0w9M1g0N.erlE89X.LWKIxUbfM8B19i.DwsXm9hV.', 3),
(46, 'd2', '$2y$10$U3pNxn3AjXVcek/MtxZycedtC7E2RGr9S5pQtLNujiuRueR0TRQ2S', 2),
(47, 'd6', '$2y$10$58UagYKP/2wsDxOPOPO8quNzJfZG9YB3Txxbt8L99WBVFnHAVIhke', 2),
(48, 'd4', '$2y$10$ID.OiRzH7y.8Ebn2otPdhOi56Gv66zAWakEtcSo24Zw.bU2eendEu', 2),
(49, 'd5', '$2y$10$JReWWTKJf3VbD/2ozCJphe/MaaoKFYaTo6Yq5DWFDd5MzI567YI3y', 2),
(50, 'p6', '$2y$10$kP5M40gpZWcZdNrZGonWAeQUeTr16WzWuS.M/wANK.eZk/b/QwFlW', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divission`
--
ALTER TABLE `divission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `doctorsetschedule`
--
ALTER TABLE `doctorsetschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientrecords`
--
ALTER TABLE `patientrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientrequest`
--
ALTER TABLE `patientrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `patientwaiting`
--
ALTER TABLE `patientwaiting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot1`
--
ALTER TABLE `slot1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempdoctorrequests`
--
ALTER TABLE `tempdoctorrequests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `tempusers`
--
ALTER TABLE `tempusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `testclinic`
--
ALTER TABLE `testclinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thana`
--
ALTER TABLE `thana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `divission`
--
ALTER TABLE `divission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctorsetschedule`
--
ALTER TABLE `doctorsetschedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `patientrecords`
--
ALTER TABLE `patientrecords`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patientrequest`
--
ALTER TABLE `patientrequest`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patientwaiting`
--
ALTER TABLE `patientwaiting`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slot1`
--
ALTER TABLE `slot1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tempdoctorrequests`
--
ALTER TABLE `tempdoctorrequests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tempusers`
--
ALTER TABLE `tempusers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testclinic`
--
ALTER TABLE `testclinic`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
