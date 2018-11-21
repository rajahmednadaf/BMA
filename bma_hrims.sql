-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 09:45 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bma_hrims`
--
CREATE DATABASE IF NOT EXISTS `bma_hrims` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `bma_hrims`;
-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` char(20) COLLATE utf8_persian_ci NOT NULL,
  `branch_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `branch_city` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `branch_manager` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_city`, `branch_manager`) VALUES
('bma-KTS-br', 'Kota-e-Sange', 'Kabul', NULL),
('bma-main-br', 'main branch', 'Kabul', NULL),
('bma-pulkh-br', 'Pulkhumry', 'Pulkhumry', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `computer_change`
--

CREATE TABLE `computer_change` (
  `comp_change_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `ncomp_name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `ncomp_mac` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `nuser_name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `reason` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `change_date` date NOT NULL,
  `mgr_id` int(11) DEFAULT NULL,
  `mgr_status` tinyint(1) DEFAULT NULL,
  `sysadmin` int(11) DEFAULT NULL,
  `sysadmin_status` tinyint(1) DEFAULT NULL,
  `notity` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `dept_manager` int(11) DEFAULT NULL,
  `dept_head` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_manager`, `dept_head`) VALUES
(1, 'Human Resource ', 1, NULL),
(2, 'IT', 3, NULL),
(3, 'Finance & Accounting ', NULL, NULL),
(4, 'Investment', NULL, NULL),
(5, 'Compliance ', NULL, NULL),
(6, 'Document & Relation', NULL, NULL),
(7, 'Purchase & Logistic ', NULL, NULL),
(8, 'Risk Managment', NULL, NULL),
(9, 'Internal Audit', NULL, NULL),
(10, 'Operation', NULL, NULL),
(11, 'Branches', NULL, NULL),
(12, 'Real Estate', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `domain_user`
--

CREATE TABLE `domain_user` (
  `emp_id` int(11) NOT NULL,
  `comp_name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `comp_mac` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `new_comp_ip` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `mgr_id` int(11) DEFAULT NULL,
  `sysadmin_id` int(11) DEFAULT NULL,
  `domain_user_date` date NOT NULL,
  `domain_user_name` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `notify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_gname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_lastname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_fname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_gfname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_pob` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_gender` tinyint(1) DEFAULT NULL,
  `emp_desig` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_salary` int(11) NOT NULL,
  `emp_phoneNo` char(10) COLLATE utf8_persian_ci NOT NULL,
  `emp_emailAdd` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_profilePic` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_sigature` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_Tazkera` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_accountn` int(24) DEFAULT NULL,
  `emp_Pvillage` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Pdistrict` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Pprovince` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Tvillage` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Tdistrict` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Tprovince` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_DOJ` date NOT NULL,
  `emp_DOR` date DEFAULT NULL,
  `emp_type` tinyint(1) NOT NULL,
  `emp_branch_id` char(20) COLLATE utf8_persian_ci NOT NULL,
  `emp_mgr` int(11) DEFAULT NULL,
  `emp_dep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_gname`, `emp_lastname`, `emp_fname`, `emp_gfname`, `emp_dob`, `emp_pob`, `emp_gender`, `emp_desig`, `emp_salary`, `emp_phoneNo`, `emp_emailAdd`, `emp_profilePic`, `emp_sigature`, `emp_Tazkera`, `emp_accountn`, `emp_Pvillage`, `emp_Pdistrict`, `emp_Pprovince`, `emp_Tvillage`, `emp_Tdistrict`, `emp_Tprovince`, `emp_DOJ`, `emp_DOR`, `emp_type`, `emp_branch_id`, `emp_mgr`, `emp_dep`) VALUES
(1, 'Fazluddin', 'Faayez', 'Sayed Ali', 'Sher Ali', '1992-04-02', 'Ostar Jangle ', 1, 'IT Officer', 20000, '0798270584', 'fazluddin.fayez@gmail.com', NULL, NULL, '204095', 1234759573, 'Ostarjangle ', 'Doshi', 'Baghlan', 'Pulkhumry', 'second', 'Baghlan', '2018-06-06', NULL, 1, 'bma-main-br', NULL, 2),
(2, 'Farddin', 'omari', 'Sayeed Ali ', 'Rustam ', '2016-02-17', 'Kabul', 1, 'Risk Officer ', 1000, '0795365214', 'farddin.omari@gmail.com', NULL, NULL, '24504200', NULL, 'QARA BAGH', 'QARAB BAGH', 'Kabul', 'Taimany', 'Kabul', 'Kabul', '2018-05-10', NULL, 0, 'bma-main-br', 1, 8),
(3, 'Adbul Raqib', 'Saqeeb', 'Mohammad Amin', 'Mohammad Agha', '1990-07-11', 'Paghman', 1, 'Journalist', 10000, '0795651245', 'raqib.saqeeb@gmail.com', NULL, NULL, '14562055', NULL, 'Khal Dari ', 'Paghman', 'Kabul', 'Campany', 'Kabul', 'Kabul', '2017-09-13', NULL, 1, 'bma-KTS-br', 1, 10),
(5, 'ahmad', 'ahmadi', 'shir ali', 'shi Ahmad', '2014-02-02', 'Doshi', 1, 'RiskManager', 34000, '0798345687', 'ahamd@gmail.com', 'IMG/dweer/sd', 'IMG/sing/34', '345698', NULL, 'Doshi', 'Baghlan', 'Pulkhumry', 'Kapisa', 'parawan', 'Jabolsarj', '2014-07-06', NULL, 1, 'bma-main-br', 2, 4),
(8, 'faayez', 'ahamdi ', 'sayed ali ', 'abc', '0000-00-00', 'Taimani', 1, 'supervisor', 25000, '0798200300', 'faayez.ahmadi@gmail.om', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '40890938', NULL, 'Taimani', 'kabul', 'kabul', 'Sepesta', 'Doshi', 'Baghlan', '0000-00-00', NULL, 0, 'bma-main-br', 3, 2),
(9, 'farid', 'ahamdi ', 'jawad', 'karim', '1995-06-09', 'Doshi', 0, 'IT trainee', 10000, '0798200300', 'ahamd@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '40890938', NULL, 'AF', 'AG', 'AH', 'AB', 'AC', 'AD', '0000-00-00', NULL, 1, 'bma-KTS-br', 3, 2);

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `delete_employee` BEFORE DELETE ON `employee` FOR EACH ROW insert into employee_track_change
values(
current_user(),
now(),
'delete',
old.emp_id, 
old.emp_gname, 
old.emp_lastname,  
old.emp_fname  ,
old.emp_gfname, 
old.emp_dob ,
old.emp_pob  ,
old.emp_gender ,
old.emp_desig  ,
old.emp_salary ,
old.emp_phoneNo ,
old.emp_emailAdd,
old.emp_profilePic,  
old.emp_sigature ,
old.emp_Tazkera ,
old.emp_accountn ,
old.emp_Pvillage ,
old.emp_Pdistrict  ,
old.emp_Pprovince , 
old.emp_Tvillage ,
old.emp_Tdistrict , 
old.emp_Tprovince, 
old.emp_DOJ, 
old.emp_DOR ,
old.emp_type, 
old.emp_branch_id, 
old.emp_mgr,  
old.emp_dep )
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `emp_salary_update` BEFORE UPDATE ON `employee` FOR EACH ROW insert into employee_track_change
values(
current_user(),
now(),
'update',
old.emp_id, 
old.emp_gname, 
old.emp_lastname,  
old.emp_fname  ,
old.emp_gfname, 
old.emp_dob ,
old.emp_pob  ,
old.emp_gender ,
old.emp_desig  ,
old.emp_salary ,
old.emp_phoneNo ,
old.emp_emailAdd,
old.emp_profilePic,  
old.emp_sigature ,
old.emp_Tazkera ,
old.emp_accountn ,
old.emp_Pvillage ,
old.emp_Pdistrict  ,
old.emp_Pprovince , 
old.emp_Tvillage ,
old.emp_Tdistrict , 
old.emp_Tprovince, 
old.emp_DOJ, 
old.emp_DOR ,
old.emp_type, 
old.emp_branch_id, 
old.emp_mgr,  
old.emp_dep )
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `new_emp_insertion` AFTER INSERT ON `employee` FOR EACH ROW insert into employee_track_change
values(
current_user(),
now(),
'insert',
new.emp_id, 
new.emp_gname, 
new.emp_lastname,  
new.emp_fname  ,
new.emp_gfname, 
new.emp_dob ,
new.emp_pob  ,
new.emp_gender ,
new.emp_desig  ,
new.emp_salary ,
new.emp_phoneNo ,
new.emp_emailAdd,
new.emp_profilePic,  
new.emp_sigature ,
new.emp_Tazkera ,
new.emp_accountn ,
new.emp_Pvillage ,
new.emp_Pdistrict  ,
new.emp_Pprovince , 
new.emp_Tvillage ,
new.emp_Tdistrict , 
new.emp_Tprovince, 
new.emp_DOJ, 
new.emp_DOR ,
new.emp_type, 
new.emp_branch_id, 
new.emp_mgr,  
new.emp_dep )
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_advance_salary`
--

CREATE TABLE `employee_advance_salary` (
  `advan_salary_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `dos_f` date NOT NULL,
  `dos_t` date NOT NULL,
  `fmgr_id` int(11) DEFAULT NULL,
  `fmgr_status` tinyint(1) DEFAULT NULL,
  `empg1_id` int(11) DEFAULT NULL,
  `empg1_status` tinyint(1) DEFAULT NULL,
  `empg2_id` int(11) DEFAULT NULL,
  `empg2_status` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `notify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendance`
--

CREATE TABLE `employee_attendance` (
  `at_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `at_day` int(11) NOT NULL,
  `at_month` int(11) NOT NULL,
  `at_year` year(4) NOT NULL,
  `at_singin_time` time NOT NULL,
  `at_singout_time` time DEFAULT NULL,
  `at_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Triggers `employee_attendance`
--
DELIMITER $$
CREATE TRIGGER `emp_attendance_change` BEFORE UPDATE ON `employee_attendance` FOR EACH ROW insert into emp_attendance_Track_change
values(
current_user(),
now(),
'update',
old.at_id,
old.emp_id, 
old.at_day , 
old.at_month, 
old.at_year ,
old.at_singin_time ,
old.at_singout_time ,
old.at_status)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_contract`
--

CREATE TABLE `employee_contract` (
  `emp_contract_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `emp_contract_F` date NOT NULL,
  `emp_contract_T` date NOT NULL,
  `reason` varchar(150) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_overtime`
--

CREATE TABLE `employee_overtime` (
  `emp_id` int(11) NOT NULL,
  `overtime_hr` int(11) NOT NULL,
  `overtime_rate` float NOT NULL,
  `overtime_date` date DEFAULT NULL,
  `over_document` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_track_change`
--

CREATE TABLE `employee_track_change` (
  `user_commit` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `insert_date` datetime DEFAULT NULL,
  `action` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `emp_gname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_lastname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_fname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_gfname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_pob` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_gender` tinyint(1) DEFAULT NULL,
  `emp_desig` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_salary` int(11) NOT NULL,
  `emp_phoneNo` char(10) COLLATE utf8_persian_ci NOT NULL,
  `emp_emailAdd` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_profilePic` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_sigature` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `emp_Tazkera` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_accountn` int(24) DEFAULT NULL,
  `emp_Pvillage` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Pdistrict` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Pprovince` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Tvillage` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Tdistrict` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_Tprovince` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `emp_DOJ` date NOT NULL,
  `emp_DOR` date DEFAULT NULL,
  `emp_type` tinyint(1) NOT NULL,
  `emp_branch_id` char(20) COLLATE utf8_persian_ci NOT NULL,
  `emp_mgr` int(11) NOT NULL,
  `emp_dep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `employee_track_change`
--

INSERT INTO `employee_track_change` (`user_commit`, `insert_date`, `action`, `emp_id`, `emp_gname`, `emp_lastname`, `emp_fname`, `emp_gfname`, `emp_dob`, `emp_pob`, `emp_gender`, `emp_desig`, `emp_salary`, `emp_phoneNo`, `emp_emailAdd`, `emp_profilePic`, `emp_sigature`, `emp_Tazkera`, `emp_accountn`, `emp_Pvillage`, `emp_Pdistrict`, `emp_Pprovince`, `emp_Tvillage`, `emp_Tdistrict`, `emp_Tprovince`, `emp_DOJ`, `emp_DOR`, `emp_type`, `emp_branch_id`, `emp_mgr`, `emp_dep`) VALUES
('root@localhost', '2018-10-20 21:06:45', 'insert', 4, 'Mursal', 'Ahmadi', 'Sayed Tareq ', 'Sayed Mozafar', '1998-10-02', 'Doshi', 0, 'Customer Service Officer', 20000, '079653256', 'mursal.ahamdi@yahoo.com', NULL, NULL, '124560', 1245896350, 'Kalan Kozar', 'Doshi', 'Baghlan', 'Pulkhumry', 'Pulkhumry', 'Baghaln', '2015-10-15', NULL, 0, 'bma-pulkh-br', 2, 6),
('root@localhost', '2018-10-24 14:53:19', 'insert', 5, 'ahmad', 'ahmadi', 'shir ali', 'shi Ahmad', '2014-02-02', 'Doshi', 1, 'RiskManager', 34000, '0798345687', 'ahamd@gmail.com', 'IMG/dweer/sd', 'IMG/sing/34', '345698', NULL, 'Doshi', 'Baghlan', 'Pulkhumry', 'Kapisa', 'parawan', 'Jabolsarj', '2014-07-06', NULL, 1, 'bma-main-br', 2, 4),
('root@localhost', '2018-10-24 15:18:57', 'insert', 6, 'ahmad', 'ahmadi', 'shir ali', 'shi Ahmad', '2014-02-02', 'Doshi', 1, 'RiskManager', 34000, '0798345687', 'ahamd@gmail.com', 'IMG/dweer/sd', 'IMG/sing/34', '345698', NULL, 'Doshi', 'Baghlan', 'Pulkhumry', 'Kapisa', 'parawan', 'Jabolsarj', '2014-07-06', NULL, 1, 'bma-main-br', 2, 4),
('root@localhost', '2018-10-24 15:22:37', 'insert', 7, 'Farid', 'ahmadi', 'Zafar', 'shi Ahmad', '2014-02-02', 'Doshi', 1, 'Audit Officer', 36000, '0798565687', 'ahamd@gmail.com', 'IMG/dweer/sd', 'IMG/sing/34', '345398', NULL, 'Doshi', 'Baghlan', 'Pulkhumry', 'Kapisa', 'parawan', 'Jabolsarj', '2014-07-06', NULL, 1, 'bma-main-br', 2, 4),
('root@localhost', '2018-10-24 15:30:41', 'insert', 8, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200300', 'ahamd@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '40890938', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-24 15:54:13', 'delete', 7, 'Farid', 'ahmadi', 'Zafar', 'shi Ahmad', '2014-02-02', 'Doshi', 1, 'Audit Officer', 36000, '0798565687', 'ahamd@gmail.com', 'IMG/dweer/sd', 'IMG/sing/34', '345398', NULL, 'Doshi', 'Baghlan', 'Pulkhumry', 'Kapisa', 'parawan', 'Jabolsarj', '2014-07-06', NULL, 1, 'bma-main-br', 2, 4),
('root@localhost', '2018-10-24 15:59:23', 'delete', 8, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200300', 'ahamd@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '40890938', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-24 16:01:39', 'insert', 9, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200400', 'ahamd23@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '4532323', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-24 16:03:37', 'delete', 9, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200400', 'ahamd23@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '4532323', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-24 16:04:34', 'insert', 10, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200400', 'ahamd23@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '4532323', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-24 16:05:08', 'insert', 11, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200400', 'ahamd23@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '4532323', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-30 10:51:22', 'delete', 11, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200400', 'ahamd23@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '4532323', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-30 10:52:56', 'delete', 10, 'ahmad', 'ahamdi ', 'Sharif', 'Sharif Ahmad', '1995-06-09', 'Doshi', 1, 'IT Officer', 45000, '0798200400', 'ahamd23@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '4532323', NULL, 'kabul', 'kabul', 'kabul', 'Doshi', 'tatabarak', 'Baghlan', '2014-06-08', '0000-00-00', 1, 'bma-KTS-br', 1, 1),
('root@localhost', '2018-10-30 10:55:33', 'delete', 4, 'Mursal', 'Ahmadi', 'Sayed Tareq ', 'Sayed Mozafar', '1998-10-02', 'Doshi', 0, 'Customer Service Officer', 20000, '079653256', 'mursal.ahamdi@yahoo.com', NULL, NULL, '124560', 1245896350, 'Kalan Kozar', 'Doshi', 'Baghlan', 'Pulkhumry', 'Pulkhumry', 'Baghaln', '2015-10-15', NULL, 0, 'bma-pulkh-br', 2, 6),
('root@localhost', '2018-11-02 13:50:49', 'delete', 6, 'ahmad', 'ahmadi', 'shir ali', 'shi Ahmad', '2014-02-02', 'Doshi', 1, 'RiskManager', 34000, '0798345687', 'ahamd@gmail.com', 'IMG/dweer/sd', 'IMG/sing/34', '345698', NULL, 'Doshi', 'Baghlan', 'Pulkhumry', 'Kapisa', 'parawan', 'Jabolsarj', '2014-07-06', NULL, 1, 'bma-main-br', 2, 4),
('root@localhost', '2018-11-16 14:42:21', 'update', 3, 'Adbul Raqib', 'Saqeeb', 'Mohammad Amin', 'Mohammad Agha', '1990-07-11', 'Paghman', 1, 'Journalist', 140000, '0795651245', 'raqib.saqeeb@gmail.com', NULL, NULL, '14562055', NULL, 'Khal Dari ', 'Paghman', 'Kabul', 'Campany', 'Kabul', 'Kabul', '2017-09-13', NULL, 1, 'bma-KTS-br', 1, 10),
('root@localhost', '2018-11-17 12:17:34', 'insert', 8, 'faayez', 'ahamdi ', 'sayed ali ', 'abc', '0000-00-00', 'Taimani', 1, 'supervisor', 25000, '0798200300', 'faayez.ahmadi@gmail.om', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '40890938', NULL, 'Taimani', 'kabul', 'kabul', 'Sepesta', 'Doshi', 'Baghlan', '0000-00-00', NULL, 0, 'bma-main-br', 3, 2),
('root@localhost', '2018-11-17 15:09:18', 'insert', 9, 'farid', 'ahamdi ', 'jawad', 'karim', '1995-06-09', 'Doshi', 0, 'IT trainee', 10000, '0798200300', 'ahamd@gmail.com', 'photo/IMG_20160826_124333.jpg', 'signature/IMG_20160826_124337.jpg', '40890938', NULL, 'AF', 'AG', 'AH', 'AB', 'AC', 'AD', '0000-00-00', NULL, 1, 'bma-KTS-br', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee_transfer`
--

CREATE TABLE `employee_transfer` (
  `emp_transfer_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `branch_id` char(20) COLLATE utf8_persian_ci NOT NULL,
  `transfer_type` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `DOS` date NOT NULL,
  `DOE` date DEFAULT NULL,
  `document` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance_track_change`
--

CREATE TABLE `emp_attendance_track_change` (
  `user_commit` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `insert_date` datetime NOT NULL,
  `action` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `at_id` int(11) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `at_time` time NOT NULL,
  `at_day` int(11) NOT NULL,
  `at_month` int(11) NOT NULL,
  `at_year` year(4) NOT NULL,
  `at_singin_time` time NOT NULL,
  `at_singout_time` time NOT NULL,
  `at_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_relative`
--

CREATE TABLE `emp_relative` (
  `emp_rel_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `rel_fname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_lname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_gender` tinyint(1) NOT NULL,
  `rel_phno` char(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `rel_relationship` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_Pvillage` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_Pdistrict` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_Pprovince` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_Tvillage` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_Tdistrict` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `rel_Tprovince` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `emp_relative`
--

INSERT INTO `emp_relative` (`emp_rel_id`, `emp_id`, `rel_fname`, `rel_lname`, `rel_gender`, `rel_phno`, `rel_relationship`, `rel_Pvillage`, `rel_Pdistrict`, `rel_Pprovince`, `rel_Tvillage`, `rel_Tdistrict`, `rel_Tprovince`) VALUES
(1, 3, 'ahamed <br>', 'nadaf<br>', 0, '0798200300', 'uncle<br>', 'a<br>', 'b<br>', 'c<br>', 'd<br>', 'e<br>', 'f<br>'),
(2, 3, 'ahamed ', 'nadaf', 0, '0798200300', 'uncle', 'a', 'b', 'c', 'd', 'e', 'f'),
(3, 3, 'ramzan', 'sayeed', 0, '0798200300', 'uncle', 'naveli,', 'salcete', 'GOA', 'Doshi', 'tatabarak', 'Baghlan'),
(4, 9, 'anil', 'naik', 0, '0798034564', 'uncle', 'shiroda', 'ponda', 'ponda', 'ee', 'Doshi', 'ss'),
(5, 9, 'anil', 'naik', 0, '0798034564', 'uncle', 'shiroda', 'ponda', 'ponda', 'ee', 'Doshi', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `emp_reward`
--

CREATE TABLE `emp_reward` (
  `emp_r_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `reward_letter` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_warning`
--

CREATE TABLE `emp_warning` (
  `emp_w_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `warning_letter` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idiv_detail`
--

CREATE TABLE `idiv_detail` (
  `emp_id` int(11) NOT NULL,
  `ex_p` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `int_p` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `tazkera` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `12_c` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `grd_c` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `wrkp_l` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `edc_l` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `pgrd_c` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `phd_c` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `exp_c` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `hri_l` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `hc_c` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `plc_c` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `gl_1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `gl_l` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `contract_l` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `idiv_detail`
--

INSERT INTO `idiv_detail` (`emp_id`, `ex_p`, `int_p`, `tazkera`, `12_c`, `grd_c`, `wrkp_l`, `edc_l`, `pgrd_c`, `phd_c`, `exp_c`, `hri_l`, `hc_c`, `plc_c`, `gl_1`, `gl_l`, `contract_l`) VALUES
(2, 'PersonalFiles/Exam Papers/ID-Card.jpg', 'PersonalFiles/Interview Papers/main-qimg-6d6a8108b', 'abcdef', 'PersonalFiles/School/main-qimg-6d6a8108bc09b0d8899', 'PersonalFiles/Post Graduate Diploma/ID-Card.jpg', 'PersonalFiles/Work Permission letters/ID-Card.jpg', 'PersonalFiles/Higher Education Confermation/ID-Car', 'PersonalFiles/Post Graduate Diploma/ID-Card.jpg', 'PersonalFiles/PHD Diploma/ID-Card.jpg', 'experiencefolder', 'PersonalFiles/Hiring Letter/ID-Card.jpg', 'PersonalFiles/Health Certificates/ID-Card.jpg', 'PersonalFiles/Police Clearanc Cetificats/ID-Card.j', 'PersonalFiles/Grauntee letteers/main-qimg-6d6a8108', 'PersonalFiles/Grauntee letteers/main-qimg-6d6a8108', 'PersonalFiles/Contract Documents/main-qimg-6d6a810'),
(3, 'PersonalFiles/Exam Papers/ID-Card.jpg', 'PersonalFiles/Interview Papers/main-qimg-6d6a8108b', 'abcdef', 'PersonalFiles/School/main-qimg-6d6a8108bc09b0d8899', 'PersonalFiles/Post Graduate Diploma/ID-Card.jpg', 'PersonalFiles/Work Permission letters/ID-Card.jpg', 'PersonalFiles/Higher Education Confermation/ID-Car', 'PersonalFiles/Post Graduate Diploma/ID-Card.jpg', 'PersonalFiles/PHD Diploma/ID-Card.jpg', 'experiencefolder', 'PersonalFiles/Hiring Letter/ID-Card.jpg', 'PersonalFiles/Health Certificates/ID-Card.jpg', 'PersonalFiles/Police Clearanc Cetificats/ID-Card.j', 'PersonalFiles/Grauntee letteers/main-qimg-6d6a8108', 'PersonalFiles/Grauntee letteers/main-qimg-6d6a8108', 'PersonalFiles/Contract Documents/main-qimg-6d6a810'),
(9, 'PersonalFiles/Exam Papers/ID-Card.jpg', 'PersonalFiles/Interview Papers/ID-Card.jpg', 'abcdef', 'PersonalFiles/School/main-qimg-6d6a8108bc09b0d8899', 'PersonalFiles/Post Graduate Diploma/ID-Card.jpg', 'PersonalFiles/Work Permission letters/ID-Card.jpg', 'PersonalFiles/Higher Education Confermation/IMG_20', 'PersonalFiles/Post Graduate Diploma/ID-Card.jpg', 'PersonalFiles/PHD Diploma/ID-Card.jpg', 'experiencefolder', 'PersonalFiles/Hiring Letter/ID-Card.jpg', 'PersonalFiles/Health Certificates/ID-Card.jpg', 'PersonalFiles/Police Clearanc Cetificats/ID-Card.j', 'PersonalFiles/Grauntee letteers/ID-Card.jpg', 'PersonalFiles/Grauntee letteers/main-qimg-6d6a8108', 'PersonalFiles/Contract Documents/ID-Card.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `leave_apply`
--

CREATE TABLE `leave_apply` (
  `emp_leave_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `leave_startDate` date NOT NULL,
  `leave_endDate` date NOT NULL,
  `duration_incharge` int(11) NOT NULL,
  `leave_reason` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `leave_contact` char(10) COLLATE utf8_persian_ci NOT NULL,
  `addres_in_leave` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `mgr_id` int(11) DEFAULT NULL,
  `mgr_status` tinyint(1) DEFAULT NULL,
  `hod_id` int(11) DEFAULT NULL,
  `hod_status` tinyint(1) DEFAULT NULL,
  `hrmgr_id` int(11) DEFAULT NULL,
  `hrmgr_status` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `notify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `leave_type_id` int(11) NOT NULL,
  `leave_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `leave_duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`leave_type_id`, `leave_name`, `leave_duration`) VALUES
(1, 'Sick Leave', 2),
(2, 'Haij Leave', 7),
(3, 'Personal Leave', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `meet_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `meet_member1` int(11) DEFAULT NULL,
  `meet_member2` int(11) DEFAULT NULL,
  `meet_member3` int(11) DEFAULT NULL,
  `meet_member4` int(11) DEFAULT NULL,
  `meet_member5` int(11) DEFAULT NULL,
  `meet_member6` int(11) DEFAULT NULL,
  `meet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_agenda`
--

CREATE TABLE `meeting_agenda` (
  `meet_agenda_id` int(11) NOT NULL,
  `meet_id` int(11) NOT NULL,
  `meet_agenda_title` longtext COLLATE utf8_persian_ci NOT NULL,
  `meet_agenda_remark` longtext COLLATE utf8_persian_ci,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pervilidge`
--

CREATE TABLE `pervilidge` (
  `pervilidge_id` int(11) NOT NULL,
  `pervilidge_name` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pervilidge`
--

INSERT INTO `pervilidge` (`pervilidge_id`, `pervilidge_name`) VALUES
(1, 'delete'),
(2, 'update '),
(3, 'select'),
(4, 'create');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_training`
--

CREATE TABLE `scholarship_training` (
  `st_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `st_type` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `st_place` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `st_duration` int(11) NOT NULL,
  `st_commitment_letter` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usb_access`
--

CREATE TABLE `usb_access` (
  `emp_id` int(11) NOT NULL,
  `usb_type` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `data_type` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `reason` text COLLATE utf8_persian_ci NOT NULL,
  `usb_access_date` date DEFAULT NULL,
  `hod_id` int(11) DEFAULT NULL,
  `sysadmin_id` int(11) DEFAULT NULL,
  `sysadmin_status` tinyint(1) DEFAULT NULL,
  `notify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `emp_id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `user_date` date NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`emp_id`, `user_role_id`, `user_name`, `password`, `user_date`, `status`) VALUES
(1, 1, 'fazluddin.fayez', '1234', '2018-09-18', 1),
(3, 3, 'abdul.raqib', '12345', '2018-10-03', 0),
(9, 3, 'farid123', '123', '2018-11-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `user_role` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `user_role`) VALUES
(1, 'admin'),
(3, 'Manager'),
(4, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_pervilidge`
--

CREATE TABLE `user_role_pervilidge` (
  `user_role_id` int(11) NOT NULL,
  `user_pervilidge_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vpn_access`
--

CREATE TABLE `vpn_access` (
  `emp_id` int(11) NOT NULL,
  `comp_name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `comp_mac` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `comp_ip` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `reason` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `vpn_access_date` date DEFAULT NULL,
  `hod_id` int(11) DEFAULT NULL,
  `hod_status` tinyint(1) DEFAULT NULL,
  `sysadmin_id` int(11) DEFAULT NULL,
  `sysadmin_status` tinyint(1) DEFAULT NULL,
  `notify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD UNIQUE KEY `branch_name` (`branch_name`),
  ADD KEY `branch_fk` (`branch_manager`);

--
-- Indexes for table `computer_change`
--
ALTER TABLE `computer_change`
  ADD PRIMARY KEY (`comp_change_id`),
  ADD KEY `computer_ch_fk1` (`emp_id`),
  ADD KEY `computer_ch_fk2` (`mgr_id`),
  ADD KEY `computer_ch_fk3` (`sysadmin`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_name` (`dept_name`),
  ADD KEY `dept_fk1` (`dept_manager`),
  ADD KEY `dept_fk2` (`dept_head`);

--
-- Indexes for table `domain_user`
--
ALTER TABLE `domain_user`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `comp_name` (`comp_name`),
  ADD UNIQUE KEY `domain_user_name` (`domain_user_name`),
  ADD KEY `domain_user_fk2` (`mgr_id`),
  ADD KEY `domain_user_fk3` (`sysadmin_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `emp_fk1` (`emp_mgr`),
  ADD KEY `emp_fk2` (`emp_dep`),
  ADD KEY `emp_fk3` (`emp_branch_id`);

--
-- Indexes for table `employee_advance_salary`
--
ALTER TABLE `employee_advance_salary`
  ADD PRIMARY KEY (`advan_salary_id`),
  ADD KEY `em_advs_fk2` (`fmgr_id`),
  ADD KEY `em_advs_fk3` (`empg1_id`),
  ADD KEY `em_advs_fk4` (`empg2_id`),
  ADD KEY `em_advs1_fk1` (`emp_id`);

--
-- Indexes for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD PRIMARY KEY (`at_id`),
  ADD KEY `emp_att` (`emp_id`);

--
-- Indexes for table `employee_contract`
--
ALTER TABLE `employee_contract`
  ADD PRIMARY KEY (`emp_contract_id`),
  ADD KEY `emp_contract_fk` (`emp_id`);

--
-- Indexes for table `employee_overtime`
--
ALTER TABLE `employee_overtime`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employee_transfer`
--
ALTER TABLE `employee_transfer`
  ADD PRIMARY KEY (`emp_transfer_id`),
  ADD KEY `emp_tranfer_fk1` (`emp_id`),
  ADD KEY `emp_tranfer_fk2` (`dept_id`),
  ADD KEY `emp_tranfer_fk3` (`branch_id`);

--
-- Indexes for table `emp_relative`
--
ALTER TABLE `emp_relative`
  ADD PRIMARY KEY (`emp_rel_id`),
  ADD KEY `emp_relatv_fk` (`emp_id`);

--
-- Indexes for table `emp_reward`
--
ALTER TABLE `emp_reward`
  ADD PRIMARY KEY (`emp_r_id`),
  ADD KEY `emp_reward_fk` (`emp_id`);

--
-- Indexes for table `emp_warning`
--
ALTER TABLE `emp_warning`
  ADD PRIMARY KEY (`emp_w_id`),
  ADD KEY `emp_war_fk` (`emp_id`);

--
-- Indexes for table `idiv_detail`
--
ALTER TABLE `idiv_detail`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `leave_apply`
--
ALTER TABLE `leave_apply`
  ADD PRIMARY KEY (`emp_leave_id`),
  ADD KEY `leave_ap_fk1` (`emp_id`),
  ADD KEY `leave_ap_fk2` (`mgr_id`),
  ADD KEY `leave_ap_fk3` (`hod_id`),
  ADD KEY `leave_ap_fk4` (`hrmgr_id`),
  ADD KEY `leave_ap_fk5` (`leave_id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`leave_type_id`),
  ADD UNIQUE KEY `leave_name` (`leave_name`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meet_id`),
  ADD KEY `meetint_fk1` (`dept_id`),
  ADD KEY `meetint_fk2` (`meet_member1`),
  ADD KEY `meetint_fk3` (`meet_member2`),
  ADD KEY `meetint_fk4` (`meet_member3`),
  ADD KEY `meetint_fk5` (`meet_member4`),
  ADD KEY `meetint_fk6` (`meet_member5`),
  ADD KEY `meetint_fk7` (`meet_member6`);

--
-- Indexes for table `meeting_agenda`
--
ALTER TABLE `meeting_agenda`
  ADD PRIMARY KEY (`meet_agenda_id`),
  ADD KEY `met_agenda_fk` (`meet_id`);

--
-- Indexes for table `pervilidge`
--
ALTER TABLE `pervilidge`
  ADD PRIMARY KEY (`pervilidge_id`);

--
-- Indexes for table `scholarship_training`
--
ALTER TABLE `scholarship_training`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `sch_train_fk` (`emp_id`);

--
-- Indexes for table `usb_access`
--
ALTER TABLE `usb_access`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `usb_access_fk2` (`hod_id`),
  ADD KEY `usb_access_fk3` (`sysadmin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `users_fk2` (`user_role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- Indexes for table `user_role_pervilidge`
--
ALTER TABLE `user_role_pervilidge`
  ADD PRIMARY KEY (`user_pervilidge_id`,`user_role_id`),
  ADD KEY `u_r_p_fk1` (`user_role_id`);

--
-- Indexes for table `vpn_access`
--
ALTER TABLE `vpn_access`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `vpn_access_fk2` (`hod_id`),
  ADD KEY `vpn_access_fk3` (`sysadmin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer_change`
--
ALTER TABLE `computer_change`
  MODIFY `comp_change_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_advance_salary`
--
ALTER TABLE `employee_advance_salary`
  MODIFY `advan_salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_contract`
--
ALTER TABLE `employee_contract`
  MODIFY `emp_contract_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_transfer`
--
ALTER TABLE `employee_transfer`
  MODIFY `emp_transfer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_relative`
--
ALTER TABLE `emp_relative`
  MODIFY `emp_rel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_reward`
--
ALTER TABLE `emp_reward`
  MODIFY `emp_r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_warning`
--
ALTER TABLE `emp_warning`
  MODIFY `emp_w_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_apply`
--
ALTER TABLE `leave_apply`
  MODIFY `emp_leave_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `leave_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meeting_agenda`
--
ALTER TABLE `meeting_agenda`
  MODIFY `meet_agenda_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pervilidge`
--
ALTER TABLE `pervilidge`
  MODIFY `pervilidge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scholarship_training`
--
ALTER TABLE `scholarship_training`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_fk` FOREIGN KEY (`branch_manager`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `dept_fk1` FOREIGN KEY (`dept_manager`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `dept_fk2` FOREIGN KEY (`dept_head`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `emp_fk1` FOREIGN KEY (`emp_mgr`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `emp_fk2` FOREIGN KEY (`emp_dep`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `emp_fk3` FOREIGN KEY (`emp_branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD CONSTRAINT `emp_att` FOREIGN KEY (`emp_id`) REFERENCES `users` (`emp_id`);

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `meetint_fk1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `meetint_fk2` FOREIGN KEY (`meet_member1`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `meetint_fk3` FOREIGN KEY (`meet_member2`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `meetint_fk4` FOREIGN KEY (`meet_member3`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `meetint_fk5` FOREIGN KEY (`meet_member4`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `meetint_fk6` FOREIGN KEY (`meet_member5`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `meetint_fk7` FOREIGN KEY (`meet_member6`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `scholarship_training`
--
ALTER TABLE `scholarship_training`
  ADD CONSTRAINT `sch_train_fk` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `usb_access`
--
ALTER TABLE `usb_access`
  ADD CONSTRAINT `usb_access_fk1` FOREIGN KEY (`emp_id`) REFERENCES `users` (`emp_id`),
  ADD CONSTRAINT `usb_access_fk2` FOREIGN KEY (`hod_id`) REFERENCES `users` (`emp_id`),
  ADD CONSTRAINT `usb_access_fk3` FOREIGN KEY (`sysadmin_id`) REFERENCES `users` (`emp_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `uers_fk1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_fk2` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`user_role_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_role_pervilidge`
--
ALTER TABLE `user_role_pervilidge`
  ADD CONSTRAINT `u_r_p_fk1` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`user_role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `u_r_p_fk2` FOREIGN KEY (`user_pervilidge_id`) REFERENCES `pervilidge` (`pervilidge_id`);

--
-- Constraints for table `vpn_access`
--
ALTER TABLE `vpn_access`
  ADD CONSTRAINT `vpn_access_fk1` FOREIGN KEY (`emp_id`) REFERENCES `users` (`emp_id`),
  ADD CONSTRAINT `vpn_access_fk2` FOREIGN KEY (`hod_id`) REFERENCES `users` (`emp_id`),
  ADD CONSTRAINT `vpn_access_fk3` FOREIGN KEY (`sysadmin_id`) REFERENCES `users` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
