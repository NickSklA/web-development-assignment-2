-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 01:14 PM
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
(12, 'Dave Franco', 'resources/images/cast12.jpg'),
(13, 'Ellen Burstyn', 'resources/images/cast13.jpg'),
(14, 'Matthew McConaughey', 'resources/images/cast14.jpg'),
(15, 'Mackenzie Foy', 'resources/images/cast15.jpg'),
(16, 'John Lithgow', 'resources/images/cast16.jpg'),
(17, 'Edward Asner', 'resources/images/cast17.jpg'),
(18, 'Christopher Plummer', 'resources/images/cast18.jpg'),
(19, 'Jordan Nagai', 'resources/images/cast19.jpg'),
(20, 'Bob Peterson', 'resources/images/cast20.jpg'),
(22, 'Jacob Tremblay', 'resources/images/cast22.jpg'),
(23, 'Sean Bridgers', 'resources/images/cast23.jpg'),
(24, 'Wendy Crewson', 'resources/images/cast24.jpg'),
(25, 'Jay Baruchel', 'resources/images/cast25.jpg'),
(26, 'Gerard Butler', 'resources/images/cast26.jpg'),
(27, 'Craig Ferguson', 'resources/images/cast27.jpg'),
(28, 'America Ferrera', 'resources/images/cast28.jpg'),
(29, 'Dylan O\'Brien', 'resources/images/cast29.jpg'),
(30, 'Aml Ameen', 'resources/images/cast30.jpg'),
(31, 'Ki Hong Lee', 'resources/images/cast31.jpg'),
(32, 'Blake Cooper', 'resources/images/cast32.jpg'),
(33, 'Seth Rogen', 'resources/images/cast33.jpg'),
(34, 'Rose Byrne', 'resources/images/cast34.jpg'),
(35, 'Elise Vargas', 'resources/images/cast35.jpg'),
(36, 'Zoey Vargas', 'resources/images/cast36.jpg'),
(37, 'Viggo Mortensen', 'resources/images/cast37.jpg'),
(38, 'Mahershala Ali', 'resources/images/cast38.jpg'),
(39, 'Linda Cardellini', 'resources/images/cast39.jpg'),
(40, 'Sebastian Maniscalco', 'resources/images/cast40.jpg');

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
(5, 'Crime'),
(6, 'Drama'),
(7, 'Animation'),
(8, 'Thriller'),
(9, 'Mystery'),
(10, 'Biography');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `movieId` int(11) NOT NULL,
  `comment` varchar(1000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `userId`, `movieId`, `comment`) VALUES
(6, 1, 1, 'I cannot phrase it better, so I will quote Rex Reed who called Inception\'s storyline \"prattling drivel.\" A friend claimed Inception is a \"thinking person\'s movie\", but a thinking person will realize that it is only masquerading as a thinking person\'s movie. At bottom, intellectually, \"there is no there there.\" Add to this that someone clearly believed the film needed to be pumped up with overwrought drama to qualify it as a \"summer blockbuster.\" I couldn\'t wait for it to end, and when it did, the intrusiveness of the loud, schlocky music over the closing credits seemed to crystallize all the incipient negative feelings I had been having throughout the movie. I hope that this director will go back to doing smaller films that do not stretch his concepts beyond what they can support.'),
(8, 1, 3, 'An honest review. I can\'t understand why there are certain people who constantly hype this movie on the IMDb and criticise other better movies. I guess they must be paid to do so. Certainly seems plausible since I\'ve now watched this crapfest. How bad is it? Do you remember the abysmal Ben Stiller butchering of Starsky and Hutch from a while back. 21 Jump Street is worse than that. Hardly surprising given that it stars Jonah Hill and Channing Tatum. I\'ve only seen Tatum in one movie before and he was a wooden, dull, boring plank in that. He\'s no better in this. As a leading man he\'s even more of a charisma vacuum than Chris O\'Donnell.\r\n\r\nStill at least he\'s better than Jonah Hill. Superbad wasn\'t just the title of his breakthrough movie its a description of his entire career.'),
(9, 2, 3, 'he movie version of \"21 Jump Street\" was supposed to be a comedy, I guess. And I guess you would think it\'s funny if you love the same old jokes about penises over and over from beginning of the movie to the very end, literally.\r\n\r\nI thought the movie was going to show how two older, wiser guys go back to high school as undercover cops, and show those young kids what\'s up. THAT would have been interesting. Instead, they go right back to how they were as kids, bumbling and fumbling their way along, and doing a LOT of stupid things as well.'),
(10, 2, 1, 'I don\'t get all the positive reviews for this movie. I found it overlong and I could not find a reason to care about any of the characters. Technically speaking, there was no true heroic character, as it was a bunch of technologically-advanced criminals and their victims. At several points during the movie I was pleading \"Go home! Go home!\" It had a decent idea but I have to think that Rod Serling (RIP) probably could have done a much better job with this and he would have done it in a shorter time. I really think the writers and producers could have made a tighter film with better and more interesting characters. Christopher Nolan did terrific, terrific work with Batman Begins and The Dark Knight, but this film is unworthy of its success.'),
(11, 4, 3, 'I liked the original show. I knew that this movie wouldn\'t be as good. I wasn\'t prepared for how horrible it was. If I had my own car with me I would have walked out. They took what was good about the show and threw it away. The movie is set in present day, over 20 years after the original show aired. It has Jonah Hill and Channing Tatum go undercover in a school to stop the flow of a new type of drug.'),
(12, 4, 1, 'Awesome movie!! 8 Stars from me!'),
(13, 6, 4, 'All is amazing. I can\'t describe anything. It\'s a film that leads you to think about yourself and your plans in your life. I am a real series/movies\' lover and... This was awesome.'),
(14, 7, 4, 'After watching this insane movie in the theatres back in 2014 I swore to god I will wait 5 years to watch it again so I get to forget it and experince the insanity it has again This without doubt is THE BEST MOVIE EVER MADE\r\n'),
(15, 10, 2, 'By the time Avengers: Endgame (2019) still fresh in my mind I can say that this movie is one of the best well spend 3 hours in my life and the best conclusion to the first chapter in the MCU history. I can\'t wait to see how they outdo all of this in the next 10 years'),
(16, 7, 2, 'If you\'ve watched a lot of these Marvel Cinematic Universe movies-as I have-than you probably laughed, was thrilled, and was ultimately touched by this-the pretty much final chapter of this run of the series which began with Iron Man back in \'08. The fate of him as well as Captain America and a few others were great epilogues for them. Oh, and one final cameo by Marvel Comics\' late creator of many of the company\'s popular superheroes-Stan Lee-makes it even more poignant. So to quote him, \"Excelsior!\"'),
(17, 5, 5, 'I was luckily able to catch a screening a few weeks ago here in Houston.\r\n\r\nAs an avid lover of Wall-E, I felt Pixar could never reach those heights again.\r\n\r\nI was wrong.\r\n\r\nUP\'s story will probably seem peculiar at first glance. An old man as a protagonist? It definitely blew my expectations. The first 5 minutes demolished every other Pixar feature just because it was the first time I cried in a theater.\r\n'),
(18, 9, 6, 'Lenny Abrahamson\'s Room opens in a 10 x 10 room that has no windows, a locked door, and no light other than that provided by an overhead skylight. Jack (Jacob Tremblay), a slight five-year old boy with hair down to his shoulders wakes up each morning as he has all his life, saying hello to his world. He says hello, not to the sun or the grass outside his front door where he can run and laugh and play but only to the objects which is all his world consists of: the lamp, the sink, the plant, the refrigerator. His only friend is a mouse that he feeds with some pleasure.'),
(19, 8, 7, 'I promise not to spoil the film below. This film is both emotionally and visually beautiful. The film took a good five years to produce and you can see every second of it was put to good use. The plot is outstanding, and works perfectly as a third chapter for this trilogy. The character has completed some of the most outstanding growths in what I\'d consider to be films as a whole. Getting to watch these characters grow from children to adults has been one of the most realistic experiences I\'ve ever seen put to film. This movie is amazing, now go watch it!'),
(20, 3, 8, 'I went into this film with low expectations. Having never read any of James Dashner\'s books, I cannot tell with any certainty if the screenwriters were true to the novel, or if the book makes a better effort than the film to distinguish itself from the multitude of superior films it meekly attempts to imitate. What I know is that I left the theater laughing. And not in a good way.\r\n'),
(21, 1, 9, 'I\'m struggling to understand how this got such good reviews. I usually rate the IMDb score as the gold standard but something has gone seriously wrong here. I did see the trailer, it was good and contained the only laughs of the movie. The movie was truly the most tedious thing I have ever experienced. Why did it get such good reviews from critics and such a high score on IMDb? User reviews here are spot on. Not a single good review. The reviewer above who mentioned he had sat down to more entertaining bowel movements surpassed any joke in the film.\r\n'),
(22, 10, 10, 'A journey of reawakening in a Country like ours - Gore Vidal called it the United States Of Amnesia - the absurdity of the behavior in the Southern communities even the kindest ones have a jarring effect. Viggo Mortensen is sheer perfection as the all American Italian. The opening of his heart and of his mind is a total joy and Mahershala Ali provides another magnetic character to his already rich list of magnetic characters but what makes this film fly so high is the humanity that Mortensen and Ali infuse their characters with. I loved them and Green Book provided me with one of the most satisfying endings of 2018. It leaves you with the hopeful thought that perhaps we\'re not there yet but that we are on our way.');

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
(3, '21 Jump Street', 'A pair of underachieving cops are sent back to a local high school to blend in and bring down a synthetic drug ring.', '16 March 2012', ' Phil Lord', '1h 49min', 'resources/images/movie3.jpg', 'resources/images/movie-background3.jpg'),
(4, 'Interstellar', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', '7 November 2014', 'Christopher Nolan', '2h 49min ', 'resources/images/movie4.jpg', 'resources/images/movie-background4.jpg'),
(5, 'Up', 'Seventy-eight year old Carl Fredricksen travels to Paradise Falls in his home equipped with balloons, inadvertently taking a young stowaway.', '29 May 2009', 'Pete Docter', '1h 36min', 'resources/images/movie5.jpg', 'resources/images/movie-background5.jpg'),
(6, 'Room', 'Held captive for 7 years in an enclosed space, a woman and her young son finally gain their freedom, allowing the boy to experience the outside world for the first time.', '22 January 2016', 'Lenny Abrahamson', '1h 58min', 'resources/images/movie6.jpg', 'resources/images/movie-background6.jpg'),
(7, 'How to Train Your Dragon', 'A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures than he assumed.', '26 March 2010', 'Dean DeBlois', '1h 38min', 'resources/images/movie7.jpg', 'resources/images/movie-background7.jpg'),
(8, 'The Maze Runner', 'Thomas is deposited in a community of boys after his memory is erased, soon learning they\'re all trapped in a maze that will require him to join forces with fellow \"runners\" for a shot at escape.', '19 September 2014', 'Wes Ball', '1h 53min', 'resources/images/movie8.jpg', 'resources/images/movie-background8.jpg'),
(9, 'Neighbors ', 'After they are forced to live next to a fraternity house, a couple with a newborn baby do whatever they can to take them down.', '9 May 2014', 'Nicholas Stoller', '1h 37min', 'resources/images/movie9.jpg', 'resources/images/movie-background9.jpg'),
(10, 'Green Book', 'A working-class Italian-American bouncer becomes the driver of an African-American classical pianist on a tour of venues through the 1960s American South.', '16 November 2018', 'Peter Farrelly', '2h 10min', 'resources/images/movie10.jpg', 'resources/images/movie-background10.jpg');

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
(3, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(6, 11),
(6, 22),
(6, 23),
(6, 24),
(7, 25),
(7, 26),
(7, 27),
(7, 28),
(8, 29),
(8, 30),
(8, 31),
(8, 32),
(9, 33),
(9, 34),
(9, 35),
(9, 36),
(10, 37),
(10, 38),
(10, 39),
(10, 40);

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
(3, 5),
(4, 2),
(4, 3),
(4, 6),
(5, 2),
(5, 4),
(5, 7),
(6, 6),
(6, 8),
(7, 1),
(7, 2),
(7, 7),
(8, 1),
(8, 3),
(8, 9),
(9, 4),
(10, 4),
(10, 6),
(10, 10);

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

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rateId`, `userId`, `movieId`, `rate`) VALUES
(1, 1, 1, 8),
(2, 1, 2, 6),
(3, 1, 3, 7),
(4, 1, 4, 8),
(5, 1, 5, 5),
(6, 1, 6, 4),
(7, 1, 7, 6),
(8, 1, 8, 8),
(9, 1, 9, 6),
(10, 1, 10, 8),
(11, 2, 1, 6),
(12, 2, 2, 5),
(13, 2, 3, 5),
(14, 2, 4, 7),
(15, 2, 5, 6),
(16, 2, 6, 4),
(17, 2, 7, 5),
(18, 2, 8, 6),
(19, 2, 9, 4),
(20, 2, 10, 6),
(21, 3, 1, 6),
(22, 3, 2, 8),
(23, 3, 3, 6),
(24, 3, 4, 7),
(25, 3, 5, 7),
(26, 3, 6, 5),
(27, 3, 7, 6),
(28, 3, 8, 7),
(29, 3, 9, 6),
(30, 3, 10, 6),
(31, 4, 1, 5),
(32, 4, 2, 7),
(33, 4, 3, 4),
(34, 4, 4, 5),
(35, 4, 5, 3),
(36, 4, 6, 2),
(37, 4, 7, 5),
(38, 4, 8, 6),
(39, 4, 9, 4),
(40, 4, 10, 6),
(41, 5, 1, 4),
(42, 5, 2, 5),
(43, 5, 3, 6),
(44, 5, 8, 5),
(45, 6, 9, 5),
(46, 6, 8, 4),
(47, 6, 5, 6),
(48, 6, 2, 8);

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
(4, 'Katerina', 'Mantzou', 'kat@gmail.com', 28, 'Teacher', 'kat78', '1234567'),
(5, 'Dana ', 'Andrews', 'dana.andrews55@gmail.com', 26, 'Designer', 'dana.andrews', '12345'),
(6, 'Chris ', 'Hernandez', 'chris.hernandez11@gmail.com', 29, 'Project Manager', 'chris.hernandez', '1234567'),
(7, 'Micheal ', 'Pierce', 'micheal.pierce36@gmail.com', 23, 'Student', 'micheal.pierce', '1234567'),
(8, 'Alexis ', 'Ward', 'alexis.w76@gmail.com', 32, 'Teacher', 'alexis.w', '1234567'),
(9, 'Martha ', 'Russell', 'marthal69@example.com', 18, 'Student', 'marthal69', '1234567'),
(10, 'Wade ', 'Banks', 'wade.b38@example.com', 29, 'Business analyst', 'wade.b38', '1234567');

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
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
