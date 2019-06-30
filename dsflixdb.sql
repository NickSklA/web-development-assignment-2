-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 11:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `actorId` int(11) NOT NULL,
  `fullName` varchar(60) COLLATE utf8_bin NOT NULL,
  `profil_image_path` varchar(1024) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`actorId`, `fullName`, `profil_image_path`) VALUES
(1, 'Leonardo DiCaprio', 'resources/images/cast1.jpg'),
(2, 'Joseph Gordon-Levitt', 'resources/images/cast2.jpg'),
(3, 'Ellen Page', 'resources/images/cast3.jpg'),
(4, 'Tom Hardy', 'resources/images/cast4.jpg'),
(5, 'Robert Downey Jr.', 'resources/images/cast5.jpg'),
(6, 'Chris Evans', 'resources/images/cast6.jpg'),
(7, 'Mark Ruffalo', 'resources/images/cast7.jpg'),
(8, 'Chris Hemsworth', 'resources/images/cast8.jpg'),
(9, 'Jonah Hill', 'resources/images/cast9.jpg'),
(10, 'Channing Tatum', 'resources/images/cast10.jpg'),
(11, 'Brie Larson', 'resources/images/cast11.jpg'),
(12, 'Dave Franco', 'resources/images/cast12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `category_name` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `category_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Sci-Fi'),
(4, 'Comedy'),
(5, 'Crime');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `movieId` int(11) NOT NULL,
  `comment` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `userId`, `movieId`, `comment`) VALUES
(6, 1, 1, 'This is my first comment!'),
(7, 1, 2, 'Hello all, this is a comment for endgame'),
(8, 1, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a'),
(9, 2, 3, 'Hello, awesome movie!'),
(10, 2, 1, 'Hello world'),
(11, 4, 3, 'Hellllooo'),
(12, 4, 1, 'Awesome movie!! 8 Stars from me!');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieId` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `summary` varchar(1000) COLLATE utf8_bin NOT NULL,
  `produce_date` varchar(45) COLLATE utf8_bin NOT NULL,
  `director` varchar(45) COLLATE utf8_bin NOT NULL,
  `duration` varchar(45) COLLATE utf8_bin NOT NULL,
  `cover_image_path` varchar(1024) COLLATE utf8_bin NOT NULL,
  `background_image_path` varchar(1024) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieId`, `name`, `summary`, `produce_date`, `director`, `duration`, `cover_image_path`, `background_image_path`) VALUES
(1, 'Inception ', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.', '16 July 2010', 'Christopher Nolan', '2h 28min', 'resources/images/movie1.jpg', 'resources/images/movie-background1.jpg'),
(2, 'Avengers: Endgame', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to undo Thanos\' actions and restore order to the universe.', '26 April 2019', 'Anthony Russo', '3h 1min', 'resources/images/movie2.jpg', 'resources/images/movie-background2.jpg'),
(3, '21 Jump Street', 'A pair of underachieving cops are sent back to a local high school to blend in and bring down a synthetic drug ring.', '16 March 2012', ' Phil Lord', '1h 49min', 'resources/images/movie3.jpg', 'resources/images/movie-background3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_has_cast`
--

CREATE TABLE `movie_has_cast` (
  `movieId` int(11) NOT NULL,
  `actorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `movie_has_cast`
--

INSERT INTO `movie_has_cast` (`movieId`, `actorId`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `movie_has_category`
--

CREATE TABLE `movie_has_category` (
  `movieId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `movie_has_category`
--

INSERT INTO `movie_has_category` (`movieId`, `categoryId`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rateId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `movieId` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(45) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(45) COLLATE utf8_bin NOT NULL,
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `age` int(11) NOT NULL,
  `job_title` varchar(45) COLLATE utf8_bin NOT NULL,
  `username` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `email`, `age`, `job_title`, `username`, `password`) VALUES
(1, 'Nikos', 'Sklavounos', 'nikos.skl98@gmail.com', 21, 'Software Developer', 'nikos.skl', '1234567'),
(2, 'Giannis', 'Kefalladelis', 'giannis@gmail.com', 19, 'Soldier', 'giannis', '1234567'),
(3, 'Bob', 'Smith', 'bob@gmail.com', 35, 'Fisherman', 'bob.S', '1234567'),
(4, 'Katerina', 'Mantzou', 'kat@gmail.com', 28, 'Teacher', 'kat78', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`actorId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`,`userId`,`movieId`),
  ADD KEY `fk_comment_movie1_idx` (`movieId`),
  ADD KEY `fk_comment_users1_idx` (`userId`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `movie_has_cast`
--
ALTER TABLE `movie_has_cast`
  ADD PRIMARY KEY (`movieId`,`actorId`),
  ADD KEY `fk_movie_has_cast_cast1_idx` (`actorId`),
  ADD KEY `fk_movie_has_cast_movie_idx` (`movieId`);

--
-- Indexes for table `movie_has_category`
--
ALTER TABLE `movie_has_category`
  ADD PRIMARY KEY (`movieId`,`categoryId`),
  ADD KEY `fk_movie_has_category_category1_idx` (`categoryId`),
  ADD KEY `fk_movie_has_category_movie1_idx` (`movieId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rateId`,`userId`,`movieId`),
  ADD KEY `fk_rating_movie1_idx` (`movieId`),
  ADD KEY `fk_rating_users1_idx` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_movie1` FOREIGN KEY (`movieId`) REFERENCES `movie` (`movieId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_users1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `movie_has_cast`
--
ALTER TABLE `movie_has_cast`
  ADD CONSTRAINT `fk_movie_has_cast_cast1` FOREIGN KEY (`actorId`) REFERENCES `cast` (`actorId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movie_has_cast_movie` FOREIGN KEY (`movieId`) REFERENCES `movie` (`movieId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `movie_has_category`
--
ALTER TABLE `movie_has_category`
  ADD CONSTRAINT `fk_movie_has_category_category1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movie_has_category_movie1` FOREIGN KEY (`movieId`) REFERENCES `movie` (`movieId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_movie1` FOREIGN KEY (`movieId`) REFERENCES `movie` (`movieId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rating_users1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
