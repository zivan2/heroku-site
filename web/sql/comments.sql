-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2019 at 05:40 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `diff_normal_b.png`
--

DROP TABLE IF EXISTS `diff_normal_b.png`;
CREATE TABLE IF NOT EXISTS `diff_normal_b.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image0(1).jpg`
--

DROP TABLE IF EXISTS `image0(1).jpg`;
CREATE TABLE IF NOT EXISTS `image0(1).jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image0(2).jpg`
--

DROP TABLE IF EXISTS `image0(2).jpg`;
CREATE TABLE IF NOT EXISTS `image0(2).jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image0.jpg`
--

DROP TABLE IF EXISTS `image0.jpg`;
CREATE TABLE IF NOT EXISTS `image0.jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image001.png`
--

DROP TABLE IF EXISTS `image001.png`;
CREATE TABLE IF NOT EXISTS `image001.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image001.png`
--

INSERT INTO `image001.png` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'this is dumb lmao', 'oisin', '2019-01-15', '01:58:27', 'am'),
(2, 'this is damn straight ya', 'oisin but not irish', '2019-01-15', '02:34:02', 'am'),
(3, 'i like shrimp but this image is cool too i guess', 'krimpshrimp123', '2019-01-15', '03:09:03', 'am'),
(4, 'dimps are really nice dude and this image sucks', 'limpdimp', '2019-01-15', '03:10:31', 'am'),
(5, 'bro you gotta try the grimps they give in china. maybe after looking at this image', 'primpgrimp', '2019-01-15', '03:12:01', 'am'),
(6, 'nasd', 'asd', '2019-01-15', '03:19:00', 'am'),
(7, 'no give me that one', 'send me cheese', '2019-01-15', '03:21:11', 'am');

-- --------------------------------------------------------

--
-- Table structure for table `image1(1).jpg`
--

DROP TABLE IF EXISTS `image1(1).jpg`;
CREATE TABLE IF NOT EXISTS `image1(1).jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image1.jpg`
--

DROP TABLE IF EXISTS `image1.jpg`;
CREATE TABLE IF NOT EXISTS `image1.jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image1.jpg`
--

INSERT INTO `image1.jpg` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'a cool image indeed mhm', 'ivan', '2019-01-15', '01:42:06', 'am'),
(2, 'a cool image indeed mhm', 'ivan', '2019-01-15', '01:42:08', 'am');

-- --------------------------------------------------------

--
-- Table structure for table `image2.jpg`
--

DROP TABLE IF EXISTS `image2.jpg`;
CREATE TABLE IF NOT EXISTS `image2.jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image2.jpg`
--

INSERT INTO `image2.jpg` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'this is epic i love cheeeese', 'cheeseman', '2019-01-15', '01:27:00', 'pm');

-- --------------------------------------------------------

--
-- Table structure for table `image3.jpg`
--

DROP TABLE IF EXISTS `image3.jpg`;
CREATE TABLE IF NOT EXISTS `image3.jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image3.jpg`
--

INSERT INTO `image3.jpg` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'wow so cool', 'ivan', '2019-01-15', '12:08:33', 'am'),
(2, 'this is epic guys wow', 'marko', '2019-01-15', '12:08:52', 'am'),
(3, 'so ugly disgusting go away please', 'peter', '2019-01-15', '12:49:11', 'am'),
(4, 'this is also epic as i am', 'epicman123', '2019-01-15', '01:34:45', 'am'),
(5, 'wow i love this is so inclusive!!!', 'superinclusivityforall2019', '2019-01-15', '01:40:57', 'am'),
(6, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'im tired please work', '2019-01-15', '03:24:29', 'am'),
(7, 'DSLANAKJSF:KJSAFN', 'WORK', '2019-01-15', '03:33:57', 'am'),
(8, 'asdasdgagsadsg', 'ok maybe ill stay up a lil longer', '2019-01-15', '03:36:50', 'am'),
(9, '', '', '2019-01-15', '03:37:49', 'am'),
(10, 'askfukbsdau;baeuhrhowuee32342134', 'pleasepleaseimdyning', '2019-01-15', '03:40:48', 'am'),
(11, 'yeyeye', 'ok finally', '2019-01-15', '03:44:09', 'am'),
(12, 'yonk', 'ok now', '2019-01-15', '03:44:47', 'am');

-- --------------------------------------------------------

--
-- Table structure for table `image4.png`
--

DROP TABLE IF EXISTS `image4.png`;
CREATE TABLE IF NOT EXISTS `image4.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image4.png`
--

INSERT INTO `image4.png` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'markoparko', 'newmerica', '2019-01-15', '01:43:51', 'pm');

-- --------------------------------------------------------

--
-- Table structure for table `image5.jpg`
--

DROP TABLE IF EXISTS `image5.jpg`;
CREATE TABLE IF NOT EXISTS `image5.jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image5.jpg`
--

INSERT INTO `image5.jpg` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'merica hrik yea', 'americaman', '2019-01-15', '01:32:27', 'pm');

-- --------------------------------------------------------

--
-- Table structure for table `image6.jpg`
--

DROP TABLE IF EXISTS `image6.jpg`;
CREATE TABLE IF NOT EXISTS `image6.jpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image6.jpg`
--

INSERT INTO `image6.jpg` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'i am comment man', 'commentman', '2019-01-15', '03:12:41', 'am');

-- --------------------------------------------------------

--
-- Table structure for table `profile pic material 3(1).png`
--

DROP TABLE IF EXISTS `profile pic material 3(1).png`;
CREATE TABLE IF NOT EXISTS `profile pic material 3(1).png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile pic material 3.png`
--

DROP TABLE IF EXISTS `profile pic material 3.png`;
CREATE TABLE IF NOT EXISTS `profile pic material 3.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile pic material 4.png`
--

DROP TABLE IF EXISTS `profile pic material 4.png`;
CREATE TABLE IF NOT EXISTS `profile pic material 4.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile pic material 5.png`
--

DROP TABLE IF EXISTS `profile pic material 5.png`;
CREATE TABLE IF NOT EXISTS `profile pic material 5.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil pic material 11.png`
--

DROP TABLE IF EXISTS `profil pic material 11.png`;
CREATE TABLE IF NOT EXISTS `profil pic material 11.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rat_giph.gif`
--

DROP TABLE IF EXISTS `rat_giph.gif`;
CREATE TABLE IF NOT EXISTS `rat_giph.gif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rat_giph.gif`
--

INSERT INTO `rat_giph.gif` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(11, 'this is awemsome i grind every day yes', 'hank', '2019-01-23', '05:14:31', 'am');

-- --------------------------------------------------------

--
-- Table structure for table `screenshot_6.png`
--

DROP TABLE IF EXISTS `screenshot_6.png`;
CREATE TABLE IF NOT EXISTS `screenshot_6.png` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `time_ampm` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screenshot_6.png`
--

INSERT INTO `screenshot_6.png` (`id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES
(1, 'very large yes', 'big large man1', '2019-01-15', '01:32:57', 'pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
