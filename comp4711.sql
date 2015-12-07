-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 03:52 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp4711`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `number` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `exp` varchar(11) NOT NULL,
  `mug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`number`, `name`, `position`, `height`, `weight`, `age`, `exp`, `mug`) VALUES
(2, 'Crosby, Mason', 'K', '6-1', '207', 31, '9', 'crosby-mason.jpg'),
(7, 'Hundley, Brett', 'QB', '6-3', '226', 22, 'R', 'hundley-brett.jpg'),
(8, 'Masthay, Tim', 'P', '6-1', '200', 28, '6', 'masthay-tim.jpg'),
(12, 'Rodgers, Aaron', 'QB', '6-2', '225', 31, '11', 'rodgers-aaron.jpg'),
(16, 'Tolzien, Scott', 'QB', '6-2', '213', 28, '5', 'tolzien-scott.jpg'),
(17, 'Adams, Davante', 'WR', '6-1', '215', 22, '2', 'adams-davante.jpg'),
(18, 'Cobb, Randall', 'WR', '5-10', '192', 25, '5', 'cobb-randall.jpg'),
(21, 'Clinton-Dix, Ha Ha', 'S', '6-1', '208', 22, '2', 'clinton-dix-haha.jpg'),
(22, 'Ripkowski, Aaron', 'FB', '6-1', '46', 22, 'R', 'ripkowski-aaron.jpg'),
(23, 'Randall, Damarious', 'CB', '5-11', '196', 23, 'R', 'randall-damarious.jpg'),
(24, 'Rollins, Quinten', 'CB', '5-11', '195', 23, 'R', 'rollins-quinten.jpg'),
(27, 'Lacy, Eddie', 'RB', '5-11', '234', 25, '3', 'lacy-eddie.jpg'),
(29, 'Hayward, Casey', 'CB', '5-11', '192', 26, '4', 'hayward-casey.jpg'),
(30, 'Kuhn, John', 'FB', '6-0', '250', 33, '10', 'kuhn-john.jpg'),
(32, 'Banjo, Chris', 'S', '5-10', '207', 25, '2', 'banjo-chris.jpg'),
(33, 'Hyde, Micah', 'DB', '6-0', '197', 24, '3', 'hyde-micah.jpg'),
(36, 'Gunter, LaDarius', 'CB', '6-2', '201', 23, 'R', 'gunter-ladarius.jpg'),
(37, 'Shields, Sam', 'CB', '5-11', '184', 27, '6', 'shields-sam.jpg'),
(39, 'Goodson, Demetri', 'CB', '5-11', '197', 26, '2', 'goodson-demetri.jpg'),
(42, 'Burnett, Morgan', 'S', '6-1', '209', 26, '6', 'burnett-morgan.jpg'),
(44, 'Starks, James', 'RB', '6-2', '218', 29, '6', 'starks-james.jpg'),
(46, 'Harris, Alonzo', 'RB', '6-1', '237', 23, 'R', 'harris-alonzo.jpg'),
(47, 'Ryan, Jake', 'LB', '6-2', '240', 23, 'R', 'ryan-jake.jpg'),
(48, 'Thomas, Joe', 'LB', '6-1', '227', 24, '1', 'thomas-joe.jpg'),
(51, 'Palmer, Nate', 'LB', '6-2', '248', 26, '3', 'palmer-nate.jpg'),
(52, 'Matthews, Clay', 'LB', '6-3', '255', 29, '7', 'matthews-clay.jpg'),
(53, 'Perry, Nick', 'LB', '6-3', '265', 25, '4', 'perry-nick.jpg'),
(55, 'Mulumba, Andy', 'LB', '6-3', '260', 25, '3', 'mulumba-andy.jpg'),
(56, 'Peppers, Julius', 'LB', '6-7', '287', 35, '14', 'peppers-julius.jpg'),
(61, 'Goode, Brett', 'LS', '6-1', '255', 31, '8', 'goode-brett.jpg'),
(63, 'Linsley, Core', 'C', '6-3', '301', 24, '2', 'linsley-corey.jpg'),
(64, 'Pennel, Mike', 'DT', '6-4', '332', 24, '2', 'pennel-mike.jpg'),
(65, 'Taylor, Lane', 'G', '6-3', '324', 25, '3', 'taylor-lane.jpg'),
(67, 'Barclay, Don', 'T/G', '6-4', '305', 26, '4', 'barclay-don.jpg'),
(69, 'Bakhtiari, David', 'T', '6-4', '310', 24, '3', 'bakhtiari-david.jpg'),
(70, 'Lang, T.J.', 'G', '6-4', '318', 28, '7', 'lang-t.jpg'),
(71, 'Sitton, Josh', 'G', '6-3', '318', 29, '8', 'sitton-josh.jpg'),
(73, 'Tretter, JC', 'C/G', '6-4', '307', 24, '3', 'tretter-jc.jpg'),
(75, 'Bulaga, Bryan', 'T', '6-5', '314', 26, '6', 'bulaga-bryan.jpg'),
(76, 'Daniels, Mike', 'DT', '6-0', '310', 26, '4', 'daniels-mike.jpg'),
(79, 'Walker, Josh', 'G', '6-5', '328', 24, '1', 'walker-josh.jpg'),
(80, 'Perillo, Justin', 'TE', '6-3', '250', 24, '2', 'perillo-justin.jpg'),
(82, 'Rodgers, Richard', 'TE', '6-4', '257', 23, '2', 'rodgers-richard.jpg'),
(83, 'Janis, Jeff', 'WR', '6-3', '219', 24, '2', 'janis-jeff.jpg'),
(84, 'Abbrederis, Jared', 'WR', '6-1', '195', 24, '2', 'abbrederis-jared.jpg'),
(86, 'Backman, Kennard', 'TE', '6-3', '245', 22, 'R', 'default.jpg'),
(88, 'Montgomery, Ty', 'WR', '6-0', '216', 22, 'R', 'montgomery-ty.jpg'),
(89, 'Jones, James', 'WR', '6-1', '208', 31, '9', 'jones-james.jpg'),
(90, 'Raji, B.J.', 'DT', '6-2', '337', 29, '7', 'raji-b.jpg'),
(91, 'Elliott, Jayrone', 'LB', '6-3', '255', 24, '2', 'elliot-jayrone.jpg'),
(95, 'Jones, Datone', 'DE', '6-4', '285', 25, '3', 'jones-datone.jpg'),
(96, 'Neal, Mike', 'LB', '6-3', '262', 28, '6', 'neal-mike.jpg'),
(98, 'Guion, Letroy', 'DT', '6-4', '322', 28, '8', 'guion-letroy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL,
  `conference` varchar(10) NOT NULL,
  `division` varchar(20) NOT NULL,
  `netPts` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `city`, `conference`, `division`, `netPts`) VALUES
(1, 'Arizona Cardinals', 'Glendale, AZ', 'NFC', 'NCW', 117),
(2, 'Atlanta Falcons', 'Atlanta, GA', 'NFC', 'NCS', 39),
(3, 'Baltimore Ravens', 'Baltimore, MD', 'AFC', 'ACN', -26),
(4, 'Buffalo Bills', 'Orchard Park, NY', 'AFC', 'ACE', 24),
(5, 'Carolina Panthers', 'Charlotte, NC', 'NFC', 'NCS', 80),
(6, 'Chicago Bears', 'Chicago, IL', 'NFC', 'NCN', -35),
(7, 'Cincinnati Bengals', 'Cincinnati, Ohio', 'AFC', 'ACN', 87),
(8, 'Cleveland Browns', 'Cleveland, OH', 'AFC', 'ACN', -91),
(9, 'Dallas Cowboys', 'Arlington, TX', 'NFC', 'NCE', -48),
(10, 'Denver Broncos', 'Denver, CO', 'AFC', 'ACW', 37),
(11, 'Detroit Lions', 'Detroit, MI', 'NFC', 'NCN', -94),
(12, 'Green Bay Packers', 'Green Bay, WI', 'NFC', 'NCN', 34),
(13, 'Houston Texans', 'Houston, TX', 'AFC', 'ACS', -31),
(14, 'Indianapolis Colts', 'Indianapolis, IN', 'AFC', 'ACS', -27),
(15, 'Jacksonville Jaguars', 'Jacksonville, FL', 'AFC', 'ACS', -63),
(16, 'Kansas City Chiefs', 'Kansas City, MO', 'AFC', 'ACW', 29),
(17, 'Miami Dolphins', 'Miami Gardens, FL', 'AFC', 'ACE', -34),
(18, 'Minnesota Vikings', 'Minneapolis, MN', 'NFC', 'NCN', 44),
(19, 'New England Patriots', 'Foxborough, MA', 'AFC', 'ACE', 134),
(20, 'New Orleans Saints', 'New Orleans, LA', 'NFC', 'NCS', -60),
(21, 'New York Giants', 'East Rutherford, NJ', 'NFC', 'NCE', 20),
(22, 'New York Jets', 'East Rutherford, NJ', 'AFC', 'ACE', 33),
(23, 'Oakland Raiders', 'Oakland, CA', 'AFC', 'ACW', -14),
(24, 'Philadelphia Eagles', 'Philadelphia, PA', 'NFC', 'NCE', 28),
(25, 'Pittsburgh Steelers', 'Pittsburgh, PA', 'AFC', 'ACN', 45),
(26, 'San Diego Chargers', 'San Diego, CA', 'AFC', 'ACW', -39),
(27, 'San Francisco 49ers', 'Santa Clara, CA', 'NFC', 'NCW', -97),
(28, 'Seattle Seahawks', 'Seattle, WA', 'NFC', 'NCW', 20),
(29, 'St. Louis Rams', 'St. Louis, MO', 'NFC', 'NCW', -17),
(30, 'Tampa Bay Buccaneers', 'Tampa, FL', 'NFC', 'NCS', -46),
(31, 'Tennessee Titans', 'Nashville, TN', 'AFC', 'ACS', -45),
(32, 'Washington Redskins', 'Landover, MD', 'NFC', 'NCE', -4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
