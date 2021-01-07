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
-- Database: `image_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `image_text` text,
  `image_name` text,
  `score` int(11) NOT NULL DEFAULT '0',
  `submit_name` text,
  `submit_time` time DEFAULT NULL,
  `submit_date` date DEFAULT NULL,
  `submit_ampm` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `image_name`, `score`, `submit_name`, `submit_time`, `submit_date`, `submit_ampm`) VALUES
(2, 'image2.jpg', 'when. The most notable examples I know of are a post with a picture of a cat and dog named \"chungo\" and \"scrungus\" respectively in late 2015, and a post by author john green which had been edited by another user to say \"i love it when you call ', 'larger', 5, NULL, NULL, NULL, NULL),
(3, 'image3.jpg', 'me big chungo\" (you could edit other people\'s tumblr posts before reblogging them back in the day and everyone particularly loved doing ', 'even larger', 5, NULL, NULL, NULL, NULL),
(4, 'image4.png', 'this to john green\'s posts). Neither of these are exactly \"big chungus\", but both could have possibly served as inspiration for the phrase', 'even larger still', -1, NULL, NULL, NULL, NULL),
(5, 'image5.jpg', 'The phrase was definitely and most notably used by youtube game critic Jim Sterling starting as early as 2016. There doesn\'t seem to be any particular meaning to the phrase or inside joke it referenced, it was just something he used ', 'even large meanwhile', 7, NULL, NULL, NULL, NULL),
(6, 'image6.jpg', 'sometimes as a nonsense phrase in various contexts or username when playing some games. I\'m not sure whether it came about as a reference to the tumblr posts mentioned above or independently, but it does seem to have been later ', 'small', 2, NULL, NULL, NULL, NULL),
(7, 'image001.png', 'than those posts  Now, I really have no idea where the bugs bunny big chungus edit came from, or why it\'s suddenly become big on ', 'smaller', 7, NULL, NULL, NULL, NULL),
(14, 'download(6).jpg', 'reddit. There subreddits /r/bigchungus and /r/chungus have been active for 3 months and a year respectively, so it\'s not entirely new to reddit, but I don\'t know why exactly those subreddits started. In any case, it seems like ', 'even smaller still', 7, NULL, NULL, NULL, NULL),
(19, 'profile pic material 3.PNG', 'snowballed from their.\r\n\r\nSorry that this post doesn\'t have a lot of detail, but hopefully it\'s helpful and hopefully I didn\'t come off like a ', 'microscopic', 2, NULL, NULL, NULL, NULL),
(20, 'rat_giph.gif', 'rise and grind gamers >:)', 'small as gro', 100, NULL, NULL, NULL, NULL),
(21, 'profil pic material 11.PNG', 'this is a big and expic image please like :>>?', 'SO LARGE YOU CAN COM', 7, NULL, NULL, NULL, NULL),
(29, 'image1.jpg', 'changemachange', 'EVEN LARGER CHANGE', 7, NULL, NULL, NULL, NULL),
(30, 'image0.jpg', 'my existence', 'life', -1, NULL, NULL, NULL, NULL),
(31, 'image0(1).jpg', '\"--', '\"--', -1, NULL, NULL, NULL, NULL),
(35, 'profile pic material 5.PNG', 'wow man but exist', 'mr man', 0, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
