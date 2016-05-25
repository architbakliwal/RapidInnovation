-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 09:11 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `question2answer`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_coment`
--

DROP TABLE IF EXISTS `class_coment`;
CREATE TABLE IF NOT EXISTS `class_coment` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `generated_time` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `content_by` int(11) NOT NULL,
  `published` int(11) NOT NULL DEFAULT '0',
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class_gid`
--

DROP TABLE IF EXISTS `class_gid`;
CREATE TABLE IF NOT EXISTS `class_gid` (
  `clgid` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  PRIMARY KEY (`clgid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `difficult_level`
--

DROP TABLE IF EXISTS `difficult_level`;
CREATE TABLE IF NOT EXISTS `difficult_level` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(100) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `difficult_level`
--

INSERT INTO `difficult_level` (`did`, `level_name`, `institute_id`) VALUES
(1, 'Easy', 1),
(2, 'Medium', 1),
(3, 'Difficult', 1);

-- --------------------------------------------------------

--
-- Table structure for table `essay_qsn`
--

DROP TABLE IF EXISTS `essay_qsn`;
CREATE TABLE IF NOT EXISTS `essay_qsn` (
  `essay_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `essay_cont` longtext NOT NULL,
  `essay_score` int(11) NOT NULL,
  `essay_status` int(11) NOT NULL DEFAULT '0',
  `q_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`essay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `gcm_ids`
--

DROP TABLE IF EXISTS `gcm_ids`;
CREATE TABLE IF NOT EXISTS `gcm_ids` (
  `gcm_id` int(11) NOT NULL AUTO_INCREMENT,
  `gcm_regid` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  PRIMARY KEY (`gcm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institute_data`
--

DROP TABLE IF EXISTS `institute_data`;
CREATE TABLE IF NOT EXISTS `institute_data` (
  `su_institute_id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL DEFAULT 'logo.png',
  `contact_info` text NOT NULL,
  `active_till` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `custom_domain` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`su_institute_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `institute_data`
--

INSERT INTO `institute_data` (`su_institute_id`, `organization_name`, `logo`, `contact_info`, `active_till`, `status`, `description`, `custom_domain`) VALUES
(1, '', 'logo.png', '', 2147483647, 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `live_class`
--

DROP TABLE IF EXISTS `live_class`;
CREATE TABLE IF NOT EXISTS `live_class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(1000) NOT NULL,
  `initiated_by` int(11) NOT NULL,
  `initiated_time` int(11) NOT NULL,
  `closed_time` int(11) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `noti_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_ipn`
--

DROP TABLE IF EXISTS `paypal_ipn`;
CREATE TABLE IF NOT EXISTS `paypal_ipn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itransaction_id` varchar(60) NOT NULL,
  `ipayerid` varchar(60) NOT NULL,
  `iname` varchar(60) NOT NULL,
  `iemail` varchar(60) NOT NULL,
  `itransaction_date` datetime NOT NULL,
  `ipaymentstatus` varchar(60) NOT NULL,
  `ieverything_else` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qbank`
--

DROP TABLE IF EXISTS `qbank`;
CREATE TABLE IF NOT EXISTS `qbank` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `description` text NOT NULL,
  `cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  `q_type` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `question_category`
--

DROP TABLE IF EXISTS `question_category`;
CREATE TABLE IF NOT EXISTS `question_category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `question_category`
--

INSERT INTO `question_category` (`cid`, `category_name`, `institute_id`) VALUES
(1, 'General', 1),
(2, 'Math', 1),
(3, 'General History', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question_sub_category`
--

DROP TABLE IF EXISTS `question_sub_category`;
CREATE TABLE IF NOT EXISTS `question_sub_category` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question_sub_category`
--

INSERT INTO `question_sub_category` (`scid`, `category_name`, `institute_id`) VALUES
(1, 'Geometry', 1),
(2, 'Data Interpretation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quid` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `pass_percentage` varchar(5) NOT NULL,
  `test_type` int(1) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `view_answer` int(1) NOT NULL,
  `max_attempts` int(3) NOT NULL,
  `correct_score` varchar(1000) NOT NULL,
  `incorrect_score` varchar(1000) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  `qids_static` text,
  `qselect` int(11) NOT NULL DEFAULT '1',
  `ip_address` text NOT NULL,
  `camera_req` int(1) NOT NULL DEFAULT '0',
  `pract_test` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`quid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `quiz_group`
--

DROP TABLE IF EXISTS `quiz_group`;
CREATE TABLE IF NOT EXISTS `quiz_group` (
  `qgid` int(11) NOT NULL AUTO_INCREMENT,
  `quid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`qgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `quiz_qids`
--

DROP TABLE IF EXISTS `quiz_qids`;
CREATE TABLE IF NOT EXISTS `quiz_qids` (
  `qquid` int(11) NOT NULL AUTO_INCREMENT,
  `quid` text NOT NULL,
  `cid` text NOT NULL,
  `did` text NOT NULL,
  `no_of_questions` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`qquid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

DROP TABLE IF EXISTS `quiz_result`;
CREATE TABLE IF NOT EXISTS `quiz_result` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `quid` int(11) NOT NULL,
  `qids` text NOT NULL,
  `category_name` varchar(1000) DEFAULT NULL,
  `qids_range` varchar(1000) DEFAULT NULL,
  `oids` text NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `last_response` int(11) NOT NULL,
  `time_spent` int(11) NOT NULL,
  `time_spent_ind` text NOT NULL,
  `score` float NOT NULL,
  `percentage` varchar(10) NOT NULL DEFAULT '0',
  `q_result` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `institute_id` int(11) NOT NULL DEFAULT '1',
  `photo` text NOT NULL,
  `essay_ques` int(11) NOT NULL DEFAULT '0',
  `score_ind` varchar(2000) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `q_options`
--

DROP TABLE IF EXISTS `q_options`;
CREATE TABLE IF NOT EXISTS `q_options` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `score` varchar(10) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

DROP TABLE IF EXISTS `super_admin`;
CREATE TABLE IF NOT EXISTS `super_admin` (
  `super_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `veri` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`super_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`super_id`, `email`, `username`, `password`, `veri`) VALUES
(1, 'superadmin@example.com', 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL DEFAULT '0',
  `gid` int(10) NOT NULL,
  `su` int(1) DEFAULT '1',
  `main_su_admin` int(11) NOT NULL DEFAULT '0',
  `institute_id` int(11) NOT NULL,
  `veri_code` int(11) NOT NULL,
  `noti` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `credit`, `gid`, `su`, `main_su_admin`, `institute_id`, `veri_code`, `noti`) VALUES
(1, 'admin', 'dc06698f0e2e75751545455899adccc3', 'architbakliwal@gmail.com', 'admin', 'admin', '1000', 9, 1, 1, 1, 0, ''),
(14, 'student', 'cd73502828457d15655bbd7a63fb0bc8', 'student@gmail.com', 'student', 'student', '0', 9, 0, 0, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
CREATE TABLE IF NOT EXISTS `user_group` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) NOT NULL,
  `institute_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`gid`, `group_name`, `institute_id`) VALUES
(9, 'Students', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
