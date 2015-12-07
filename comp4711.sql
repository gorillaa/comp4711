-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 07:14 AM
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
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(11) NOT NULL,
  `hometeam` varchar(10) NOT NULL,
  `awayteam` varchar(10) NOT NULL,
  `homescore` varchar(10) NOT NULL,
  `awayscore` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `conference` varchar(10) NOT NULL,
  `division` varchar(20) NOT NULL,
  `netPts` int(11) NOT NULL,
  `pointsfor` int(11) NOT NULL,
  `pointsagainst` int(11) NOT NULL,
  `home` varchar(10) NOT NULL,
  `road` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `code`, `name`, `conference`, `division`, `netPts`, `pointsfor`, `pointsagainst`, `home`, `road`) VALUES
(1, 'ARI', 'Arizona Cardinals', 'NFC', 'NCW', 117, 302, 185, '3-1', '4-1'),
(2, 'ATL', 'Atlanta Falcons', 'NFC', 'NCS', 39, 229, 190, '3-1', '3-2'),
(3, 'BAL', 'Baltimore Ravens', 'AFC', 'ACN', -26, 210, 236, '1-3', '1-4'),
(4, 'BUF', 'Buffalo Bills', 'AFC', 'ACE', 24, 231, 207, '2-3', '3-1'),
(5, 'CAR', 'Carolina Panthers', 'NFC', 'NCS', 80, 255, 175, '5-0', '4-0'),
(6, 'CHI', 'Chicago Bears', 'NFC', 'NCN', -35, 199, 234, '1-3', '3-2'),
(7, 'CIN', 'Cincinnati Bengals', 'AFC', 'ACN', 87, 229, 142, '4-0', '4-0'),
(8, 'CLE', 'Cleveland Browns', 'AFC', 'ACN', -91, 186, 277, '1-3', '1-5'),
(9, 'DAL', 'Dallas Cowboys', 'NFC', 'NCE', -48, 166, 214, '1-4', '1-3'),
(10, 'DEN', 'Denver Broncos', 'AFC', 'ACW', 37, 205, 168, '3-1', '4-1'),
(11, 'DET', 'Detroit Lions', 'NFC', 'NCN', -94, 167, 261, '1-3', '1-4'),
(12, 'GB', 'Green Bay Packers', 'NFC', 'NCN', 34, 219, 185, '4-1', '2-2'),
(13, 'HOU', 'Houston Texans', 'AFC', 'ACS', -31, 174, 205, '2-2', '1-3'),
(14, 'IND', 'Indianapolis Colts', 'AFC', 'ACS', -27, 200, 227, '2-3', '2-2'),
(15, 'JAC', 'Jacksonville Jaguars', 'AFC', 'ACS', -63, 192, 255, '2-2', '1-4'),
(16, 'KC', 'Kansas City Chiefs', 'AFC', 'ACW', 29, 224, 195, '2-2', '2-3'),
(17, 'MIA', 'Miami Dolphins', 'AFC', 'ACE', -34, 191, 225, '1-2', '3-3'),
(18, 'MIN', 'Minnesota Vikings', 'NFC', 'NCN', 44, 198, 154, '4-0', '3-2'),
(19, 'NE', 'New England Patriots', 'AFC', 'ACE', 134, 303, 169, '5-0', '4-0'),
(20, 'NO', 'New Orleans Saints', 'NFC', 'NCS', -60, 255, 315, '3-2', '1-4'),
(21, 'NYG', 'New York Giants', 'NFC', 'NCE', 20, 273, 253, '3-2', '2-3'),
(22, 'NYJ', 'New York Jets', 'AFC', 'ACE', 33, 217, 184, '3-2', '2-2'),
(23, 'OAK', 'Oakland Raiders', 'AFC', 'ACW', -14, 227, 241, '2-3', '2-2'),
(24, 'PHI', 'Philadelphia Eagles', 'NFC', 'NCE', 28, 212, 184, '2-2', '2-3'),
(25, 'PIT', 'Pittsburgh Steelers', 'AFC', 'ACN', 45, 236, 191, '4-2', '2-2'),
(26, 'SD', 'San Diego Chargers', 'AFC', 'ACW', -39, 210, 249, '2-3', '0-4'),
(27, 'SEA', 'Seattle Seahawks', 'NFC', 'NCW', 20, 199, 179, '2-2', '2-3'),
(28, 'SF', 'San Francisco 49ers', 'NFC', 'NCW', -97, 126, 223, '3-2', '0-4'),
(29, 'STL', 'St. Louis Rams', 'NFC', 'NCW', -17, 166, 183, '3-2', '1-3'),
(30, 'TB', 'Tampa Bay Buccaneers', 'NFC', 'NCS', -46, 191, 237, '2-3', '2-2'),
(31, 'TEN', 'Tennessee Titans', 'AFC', 'ACS', -45, 169, 214, '0-5', '2-2'),
(32, 'WAS', 'Washington Redskins', 'NFC', 'NCE', -4, 205, 209, '4-1', '0-4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

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
