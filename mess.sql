-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 11:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `postId` int(11) DEFAULT NULL,
  `userId` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `text` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postId`, `userId`, `date`, `text`) VALUES
(1, 6, 'guroosh14032', '2016-11-27 05:09:19am', 'tttt'),
(2, 9, 'akshat14009', '2016-11-27 04:11:22pm', 'just kidding');

-- --------------------------------------------------------

--
-- Table structure for table `day_meal`
--

CREATE TABLE `day_meal` (
  `name` varchar(100) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `meal` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_meal`
--

INSERT INTO `day_meal` (`name`, `day`, `meal`) VALUES
('Cutlet', 1, 'breakfast'),
('Sprouts', 1, 'breakfast'),
('Bread butter', 1, 'breakfast'),
('Bread butter', 2, 'breakfast'),
('Bread butter', 3, 'breakfast'),
('Bread butter', 4, 'breakfast'),
('Bread butter', 5, 'breakfast'),
('Bread butter', 6, 'breakfast'),
('Bread butter', 7, 'breakfast'),
('Cornflakes', 1, 'breakfast'),
('Cornflakes', 4, 'breakfast'),
('Milk/Tea', 1, 'breakfast'),
('Milk/Tea', 2, 'breakfast'),
('Milk/Tea', 3, 'breakfast'),
('Milk/Tea', 4, 'breakfast'),
('Milk/Tea', 5, 'breakfast'),
('Milk/Tea', 6, 'breakfast'),
('Milk/Tea', 7, 'breakfast'),
('Pav bhaji ', 2, 'breakfast'),
('Chutney', 2, 'breakfast'),
('Chutney', 3, 'breakfast'),
('Aloo paratha', 3, 'breakfast'),
('Idli sambhar', 4, 'breakfast'),
('Puri aloo', 5, 'breakfast'),
('Poha', 6, 'breakfast'),
('Sandwich', 6, 'breakfast'),
('Vada Sambhar', 7, 'breakfast'),
('Dal makhani', 6, 'dinner'),
('Gajar matar aloo', 6, 'dinner'),
('Rice', 1, 'lunch'),
('Rice', 2, 'lunch'),
('Rice', 3, 'lunch'),
('Rice', 4, 'lunch'),
('Rice', 5, 'lunch'),
('Rice', 6, 'lunch'),
('Rice', 1, 'dinner'),
('Rice', 2, 'dinner'),
('Rice', 3, 'dinner'),
('Rice', 4, 'dinner'),
('Rice', 5, 'dinner'),
('Rice', 6, 'dinner'),
('Rice', 7, 'dinner'),
('Roti', 1, 'lunch'),
('Roti', 2, 'lunch'),
('Roti', 3, 'lunch'),
('Roti', 4, 'lunch'),
('Roti', 5, 'lunch'),
('Roti', 6, 'lunch'),
('Roti', 7, 'lunch'),
('Roti', 1, 'dinner'),
('Roti', 2, 'dinner'),
('Roti', 3, 'dinner'),
('Roti', 4, 'dinner'),
('Roti', 5, 'dinner'),
('Roti', 6, 'dinner'),
('Roti', 7, 'dinner'),
('Salad', 1, 'lunch'),
('Salad', 2, 'lunch'),
('Salad', 3, 'lunch'),
('Salad', 4, 'lunch'),
('Salad', 5, 'lunch'),
('Salad', 6, 'lunch'),
('Salad', 7, 'lunch'),
('Salad', 1, 'dinner'),
('Salad', 2, 'dinner'),
('Salad', 3, 'dinner'),
('Salad', 4, 'dinner'),
('Salad', 5, 'dinner'),
('Salad', 6, 'dinner'),
('Salad', 7, 'dinner'),
('Coconut barfy', 6, 'dinner'),
('Coffee', 1, 'snacks'),
('Coffee', 4, 'snacks'),
('Coffee', 5, 'snacks'),
('Tea', 2, 'snacks'),
('Tea', 3, 'snacks'),
('Tea', 6, 'snacks'),
('Tea', 7, 'snacks'),
('Chowmein', 2, 'snacks'),
('Veg sandwich', 3, 'snacks'),
('Samosa', 4, 'snacks'),
('Pakori', 1, 'snacks'),
('Pakori', 5, 'snacks'),
('Mackroni', 6, 'snacks'),
('Bread roll', 7, 'snacks'),
('Chole', 1, 'lunch'),
('Sitafal subzi', 1, 'lunch'),
('Poori', 1, 'lunch'),
('Papad', 1, 'lunch'),
('Papad', 2, 'lunch'),
('Papad', 3, 'lunch'),
('Papad', 4, 'lunch'),
('Papad', 5, 'lunch'),
('Papad', 6, 'lunch'),
('Papad', 7, 'lunch'),
('Boondi raita', 1, 'lunch'),
('Ghiya kofta', 2, 'lunch'),
('Raita', 2, 'lunch'),
('Raita', 3, 'lunch'),
('Raita', 5, 'lunch'),
('Raita', 7, 'lunch'),
('Moong dal', 3, 'lunch'),
('Gobhi aloo', 3, 'lunch'),
('Kadhi', 4, 'lunch'),
('Shimla mirch', 4, 'lunch'),
('Manchuriyan gravy', 5, 'lunch'),
('Beans aloo', 5, 'lunch'),
('Chole bhature', 6, 'lunch'),
('Veg pulao', 6, 'lunch'),
('Curd', 6, 'lunch'),
('Arhar dal fry', 7, 'lunch'),
('Mix veg', 7, 'lunch'),
('Kala masoor dal', 1, 'dinner'),
('Aloo matar', 1, 'dinner'),
('Sewaiyan', 1, 'dinner'),
('Gajar halwa', 2, 'dinner'),
('Fish curry', 3, 'dinner'),
('Kadhai paneer', 3, 'dinner'),
('Gulab jamun', 3, 'dinner'),
('Malai kofta', 4, 'dinner'),
('Ice cream', 4, 'dinner'),
('Egg curry', 5, 'dinner'),
('palak paneer', 5, 'dinner'),
('Mix dal', 5, 'dinner'),
('Kheer', 5, 'dinner'),
('Chicken masala', 7, 'dinner'),
('Shahi paneer', 7, 'dinner'),
('Veg biryani', 7, 'dinner'),
('GJamun', 7, 'dinner');

-- --------------------------------------------------------

--
-- Table structure for table `hidden`
--

CREATE TABLE `hidden` (
  `userID` varchar(100) DEFAULT NULL,
  `postId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hidden`
--

INSERT INTO `hidden` (`userID`, `postId`) VALUES
('guroosh14032', 1),
('akshat14009', 1),
('akshat14009', 8),
('akshat14009', 3),
('akshat14009', 2);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `userId` varchar(100) DEFAULT NULL,
  `postId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `name` varchar(100) NOT NULL,
  `up` int(11) DEFAULT NULL,
  `down` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`name`, `up`, `down`) VALUES
('Aloo matar', 0, 0),
('Aloo paratha', 0, 0),
('Arhar dal fry', 0, 0),
('Beans aloo', 0, 0),
('Boondi raita', 0, 0),
('Bread butter', 0, 0),
('Bread roll', 13, 14),
('Chicken masala', 0, 0),
('Chole', 0, 0),
('Chole bhature', 0, 0),
('Chowmein', 0, 0),
('Chutney', 0, 0),
('Coconut barfy', 0, 0),
('Coffee', 0, 0),
('Cornflakes', 0, 0),
('Curd', 0, 0),
('Cutlet', 0, 0),
('Dal makhani', 0, 0),
('Egg curry', 0, 0),
('Fish curry', 0, 0),
('Gajar halwa', 0, 0),
('Gajar matar aloo', 0, 0),
('Ghiya kofta', 0, 0),
('GJamun', 0, 0),
('Gobhi aloo', 0, 0),
('Gulab jamun', 0, 0),
('Ice cream', 0, 0),
('Idli sambhar', 0, 0),
('Kadhai paneer', 0, 0),
('Kadhi', 0, 0),
('Kala masoor dal', 0, 0),
('Kheer', 0, 0),
('Mackroni', 0, 0),
('Malai kofta', 0, 0),
('Manchuriyan gravy', 0, 0),
('methi aloo', 0, 0),
('Milk/Tea', 2, 0),
('Mix dal', 0, 0),
('Mix veg', 0, 0),
('Moong dal', 0, 0),
('Pakori', 0, 0),
('palak paneer', 0, 0),
('Papad', 0, 0),
('Pav bhaji ', 0, 0),
('Poha', 0, 0),
('Poori', 0, 0),
('Puri aloo', 0, 0),
('Raita', 0, 0),
('Rice', 0, 0),
('Roti', 0, 0),
('Salad', 0, 0),
('Samosa', 0, 0),
('Sandwich', 0, 0),
('Sewaiyan', 0, 0),
('Shahi paneer', 0, 0),
('Shimla mirch', 0, 0),
('Sitafal subzi', 0, 0),
('Sprouts', 0, 0),
('Tea', 0, 0),
('Vada Sambhar', 25, 6),
('Veg biryani', 0, 0),
('Veg pulao', 0, 0),
('Veg sandwich', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userId` varchar(100) DEFAULT NULL,
  `text` varchar(400) DEFAULT NULL,
  `imageURL` varchar(200) DEFAULT NULL,
  `userImageURL` varchar(200) DEFAULT NULL,
  `upVotes` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userId`, `text`, `imageURL`, `userImageURL`, `upVotes`, `date`) VALUES
(1, 'guroosh14032', 'Hey guroosh\n', '', '', 0, '2016-11-27 05:05:40am'),
(2, 'akshat14009', 'Hey guroosh', '', '', 0, '2016-11-27 05:06:34am'),
(3, 'guroosh14032', 'lll', '', '', 0, '2016-11-27 05:08:26am'),
(4, 'guroosh14032', 'hey homie', '', '', 0, '2016-11-27 05:08:39am'),
(5, 'guroosh14032', 'loll', '', '', 0, '2016-11-27 05:08:59am'),
(6, 'guroosh14032', 'hjhh', '', '', 0, '2016-11-27 05:09:10am'),
(7, 'guroosh14032', 'uuu', '', '', 0, '2016-11-27 05:09:58am'),
(8, 'akshat14009', 'hey homie', '', '', 0, '2016-11-27 05:30:24am'),
(9, 'akshat14009', 'hello akshat', '', '', 0, '2016-11-27 04:11:15pm');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `meal` varchar(40) DEFAULT NULL,
  `start_time` varchar(40) DEFAULT NULL,
  `end_time` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`meal`, `start_time`, `end_time`) VALUES
('breakfast', '83000', '100000'),
('lunch', '123000', '143000'),
('snacks', '161500', '180000'),
('dinner', '200000', '213000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
