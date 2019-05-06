-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2019 at 10:01 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `Title` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `Title`) VALUES
(1, 'Hello'),
(2, '2008'),
(3, '10 Oct 2008'),
(4, '129 min'),
(5, 'Drama, Romance'),
(6, 'Atul Agnihotri'),
(7, 'Atul Agnihotri (screenplay), Chetan Bhagat (additional dialogue), Chetan Bhagat (book), Jalees Sherwani (lyrics), Alok Upadhyay (additional dialogue)');

-- --------------------------------------------------------

--
-- Table structure for table `searched_movie`
--

CREATE TABLE `searched_movie` (
  `search_id` int(11) NOT NULL,
  `Title` mediumtext NOT NULL,
  `Year` int(10) NOT NULL,
  `Released` varchar(100) NOT NULL,
  `Runtime` varchar(100) NOT NULL,
  `Genre` mediumtext NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Writer` longtext NOT NULL,
  `Plot` mediumtext NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Awards` varchar(100) NOT NULL,
  `Poster` varchar(200) NOT NULL,
  `Metascore` varchar(50) NOT NULL,
  `imdbRating` varchar(20) NOT NULL,
  `imdbVotes` varchar(20) NOT NULL,
  `imdbID` varchar(20) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `DVD` varchar(50) NOT NULL,
  `BoxOffice` varchar(50) NOT NULL,
  `Production` varchar(100) NOT NULL,
  `when_searched` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searched_movie`
--

INSERT INTO `searched_movie` (`search_id`, `Title`, `Year`, `Released`, `Runtime`, `Genre`, `Director`, `Writer`, `Plot`, `Language`, `Country`, `Awards`, `Poster`, `Metascore`, `imdbRating`, `imdbVotes`, `imdbID`, `Type`, `DVD`, `BoxOffice`, `Production`, `when_searched`) VALUES
(1, 'Hello', 2008, '10 Oct 2008', '129 min', 'Drama, Romance', 'Atul Agnihotri', 'Atul Agnihotri (screenplay), Chetan Bhagat (additional dialogue), Chetan Bhagat (book), Jalees Sherwani (lyrics), Alok Upadhyay (additional dialogue)', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-05-01 12:58:37'),
(2, 'Yeah Right!', 2003, 'N/A', '71 min', 'Music, Sport', 'Ty Evans, Spike Jonze', 'N/A', 'A skate video created Girl Skateboards in 2003.', 'English', 'USA', 'N/A', 'https://m.media-amazon.com/images/M/MV5BODQyNzgwODYzOF5BMl5BanBnXkFtZTcwNTQ3OTQyMQ@@._V1_SX300.jpg', 'N/A', '8.4', '911', 'tt0368456', 'movie', '01 Jan 2003', 'N/A', 'N/A', '2019-05-01 12:13:12'),
(3, 'Prison', 1987, '08 Dec 1987', '102 min', 'Crime, Drama, Horror, Thriller', 'Renny Harlin', 'Irwin Yablans (story), C. Courtney Joyner (screenplay)', 'The spirit of a long-dead prisoner returns for revenge, haunting the prison\'s new governor.', 'English', 'USA', '1 nomination.', 'https://m.media-amazon.com/images/M/MV5BMTk1MDRiZjktNGExOS00ZTg0LWE3MzMtMDZhOWJmZDlmYzFhXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', '47', '5.8', '3,390', 'tt0095904', 'movie', '19 Feb 2013', 'N/A', 'New World Video', '2019-05-01 12:14:59'),
(4, 'Crap', 2008, '01 Oct 2008', 'N/A', 'Short, Romance', 'Didier Konings, Vincent van den Broek', 'Vincent van den Broek', 'N/A', 'Dutch', 'Netherlands', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'tt1946183', 'movie', 'N/A', 'N/A', 'N/A', '2019-05-01 12:18:45'),
(5, 'Police', 2007, '16 Feb 2007', '113 min', 'Action, Comedy, Crime, Drama', 'Onur ÃœnlÃ¼', 'Onur ÃœnlÃ¼', 'Musa Rami, who has become a legend with his struggle against the mafia, is a police officer at homicide division. One day prior to celebrating his 63rd birthday, with a surprise party ...', 'Turkish', 'Turkey', '1 win ', 'https://m.media-amazon.com/images/M/MV5BNjllMmEyOGEtMWFjYi00NDY5LWE0NWUtMmFmM2E5NzRhNDhmXkEyXkFqcGdeQXVyMjExNjgyMTc@._V1_SX300.jpg', 'N/A', '6.7', '5,173', 'tt0826606', 'movie', 'N/A', 'N/A', 'N/A', '2019-05-02 18:15:03'),
(6, 'Crazy', 2000, '08 Jun 2000', '97 min', 'Drama', 'Hans-Christian Schmid', 'Hans-Christian Schmid (screenplay), Michael Gutmann (screenplay), Benjamin Lebert (novel)', 'Benjamin is a 16 year old, paralyzed on one side of his body, with lousy grades in math, who switches to a boarding school to reach grammar school. Acclimatization to the new environment is...', 'German', 'Germany', '5 wins ', 'https://m.media-amazon.com/images/M/MV5BN2ZkNzIyMGUtMDE0ZS00MTQ5LTk0ZjItYzM2NjFiZTRlMDJlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMzA3Njg4MzY@._V1_SX300.jpg', 'N/A', '6.6', '3,763', 'tt0215681', 'movie', 'N/A', 'N/A', 'TV/PRO Productions', '2019-05-02 18:20:14'),
(7, 'Cool', 2007, '06 Dec 2007', '100 min', 'Comedy', 'Nicos Perakis', 'Nicos Perakis', 'The film follows the parallel and entwining stories as well as the common fates of some very different young people for 24 hours in the summertime: from the prison to the corridors of the ...', 'Greek', 'Greece', 'N/A', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMDRlZjRmMWMtMGFlMi00N2VjLThhYjAtNzIyNmYxNDBkMTVlXkEyXkFqcGdeQXVyMDk1ODM3MA@@._V1_SX300.jpg', 'N/A', '4.5', '450', 'tt1092030', 'movie', 'N/A', 'N/A', 'N/A', '2019-05-02 19:12:16'),
(8, 'AK', 2012, 'N/A', '23 min', 'Short, Drama, War', 'Michael Chandler', 'Michael Chandler', 'AK is a short drama about a young Sierra Leonean who lived through the conflict as both victim and perpetrator. He now finds himself in a foreign land, London, as a student. Lost and ...', 'English', 'UK, Sierra Leone', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'tt2338336', 'movie', 'N/A', 'N/A', 'N/A', '2019-05-03 18:23:35'),
(9, 'Good Will Hunting', 1997, '09 Jan 1998', '126 min', 'Drama, Romance', 'Gus Van Sant', 'Matt Damon, Ben Affleck', 'Will Hunting, a janitor at M.I.T., has a gift for mathematics, but needs help from a psychologist to find direction in his life.', 'English', 'USA', 'Won 2 Oscars. Another 22 wins ', 'https://m.media-amazon.com/images/M/MV5BOTI0MzcxMTYtZDVkMy00NjY1LTgyMTYtZmUxN2M3NmQ2NWJhXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', '70', '8.3', '759,501', 'tt0119217', 'movie', '08 Dec 1998', 'N/A', 'Miramax Films', '2019-05-03 18:23:58'),
(10, 'Hey', 2016, '04 Sep 2016', '90 min', 'Comedy, Drama, Romance', 'Alex Jovanoski', 'Alex Jovanoski', 'A burglar with a gambling debt hides from local gangsters in his victim\'s home and forms a peculiar bond with that young woman, who just got diagnosed with a devastating disease.', 'German', 'Germany', 'N/A', 'https://m.media-amazon.com/images/M/MV5BNTYyOWE5YTMtNmQxNC00NjllLTk5MmItZjVjMTQyZWQ1NWMzXkEyXkFqcGdeQXVyNTYxMjk3NDY@._V1_SX300.jpg', 'N/A', '7.0', '37', 'tt4777522', 'movie', 'N/A', 'N/A', 'N/A', '2019-05-03 19:00:36'),
(11, 'Hello', 2008, '10 Oct 2008', '129 min', 'Drama, Romance', 'Atul Agnihotri', 'Atul Agnihotri (screenplay), Chetan Bhagat (additional dialogue), Chetan Bhagat (book), Jalees Sherwani (lyrics), Alok Upadhyay (additional dialogue)', 'Hello... is a tale about the events that happen one night at a call center. Told through the views of the protagonist, Shyam, it is a story of almost lost love, thwarted ambitions, absence ...', 'Hindi', 'India', 'N/A', 'https://m.media-amazon.com/images/M/MV5BZGM5NjliODgtODVlOS00OWZmLWIzYzMtMTI2OWIzMTM1ZGRhXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SX300.jpg', 'N/A', '3.4', '1,726', 'tt1087856', 'movie', '08 Dec 2008', 'N/A', 'N/A', '2019-05-03 19:15:31'),
(12, 'War', 2007, '24 Aug 2007', '103 min', 'Action, Crime, Thriller', 'Philip G. Atwell', 'Lee Anthony Smith, Gregory J. Bradley', 'An FBI Agent seeks vengeance on a mysterious assassin known as \"Rogue\" who murdered his partner.', 'English, Mandarin, Japanese, Cantonese', 'USA, Canada', 'N/A', 'https://m.media-amazon.com/images/M/MV5BNTIwMjE2Mjc1MF5BMl5BanBnXkFtZTYwNzI0OTI3._V1_SX300.jpg', '36', '6.3', '80,594', 'tt0499556', 'movie', '05 Jun 2007', 'N/A', 'New Glory Productions', '2019-05-03 19:17:33'),
(13, 'War', 2007, '24 Aug 2007', '103 min', 'Action, Crime, Thriller', 'Philip G. Atwell', 'Lee Anthony Smith, Gregory J. Bradley', 'An FBI Agent seeks vengeance on a mysterious assassin known as \"Rogue\" who murdered his partner.', 'English, Mandarin, Japanese, Cantonese', 'USA, Canada', 'N/A', 'https://m.media-amazon.com/images/M/MV5BNTIwMjE2Mjc1MF5BMl5BanBnXkFtZTYwNzI0OTI3._V1_SX300.jpg', '36', '6.3', '80,594', 'tt0499556', 'movie', '05 Jun 2007', 'N/A', 'New Glory Productions', '2019-05-03 19:17:49'),
(14, 'Help', 2010, '13 Aug 2010', '109 min', 'Horror, Thriller', 'Rajeev Virani', 'Viddesh Malandkar (dialogue), Viddesh Malandkar (screenplay), Manthan (lyrics), Deepak Pawar (dialogue), Deepak Pawar (screenplay)', 'An unhappily married pregnant woman suspects her vengeful deceased twin has returned from the dead.', 'Hindi', 'India', 'N/A', 'https://m.media-amazon.com/images/M/MV5BMjA1MzA1ODIwOV5BMl5BanBnXkFtZTcwOTM2MjE5Mw@@._V1_SX300.jpg', 'N/A', '4.5', '324', 'tt1663647', 'movie', 'N/A', 'N/A', 'BIGFlix', '2019-05-03 19:20:58'),
(15, 'Help', 2010, '13 Aug 2010', '109 min', 'Horror, Thriller', 'Rajeev Virani', 'Viddesh Malandkar (dialogue), Viddesh Malandkar (screenplay), Manthan (lyrics), Deepak Pawar (dialogue), Deepak Pawar (screenplay)', 'An unhappily married pregnant woman suspects her vengeful deceased twin has returned from the dead.', 'Hindi', 'India', 'N/A', 'https://m.media-amazon.com/images/M/MV5BMjA1MzA1ODIwOV5BMl5BanBnXkFtZTcwOTM2MjE5Mw@@._V1_SX300.jpg', 'N/A', '4.5', '324', 'tt1663647', 'movie', 'N/A', 'N/A', 'BIGFlix', '2019-05-03 19:21:33'),
(16, 'City of God', 2002, '13 Feb 2004', '130 min', 'Crime, Drama', 'Fernando Meirelles, KÃ¡tia Lund(co-director)', 'Paulo Lins (novel), BrÃ¡ulio Mantovani (screenplay)', 'In the slums of Rio, two kids\' paths diverge as one struggles to become a photographer and the other a kingpin.', 'Portuguese', 'Brazil, France, Germany', 'Nominated for 4 Oscars. Another 66 wins ', 'https://m.media-amazon.com/images/M/MV5BMGU5OWEwZDItNmNkMC00NzZmLTk1YTctNzVhZTJjM2NlZTVmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg', '79', '8.6', '639,695', 'tt0317248', 'movie', '08 Jun 2004', 'N/A', 'Miramax Films', '2019-05-03 19:24:30'),
(17, 'City of God', 2002, '13 Feb 2004', '130 min', 'Crime, Drama', 'Fernando Meirelles, KÃ¡tia Lund(co-director)', 'Paulo Lins (novel), BrÃ¡ulio Mantovani (screenplay)', 'In the slums of Rio, two kids\' paths diverge as one struggles to become a photographer and the other a kingpin.', 'Portuguese', 'Brazil, France, Germany', 'Nominated for 4 Oscars. Another 66 wins ', 'https://m.media-amazon.com/images/M/MV5BMGU5OWEwZDItNmNkMC00NzZmLTk1YTctNzVhZTJjM2NlZTVmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg', '79', '8.6', '639,695', 'tt0317248', 'movie', '08 Jun 2004', 'N/A', 'Miramax Films', '2019-05-03 19:26:04'),
(18, 'Bird Box', 2018, '21 Dec 2018', '124 min', 'Drama, Horror, Sci-Fi, Thriller', 'Susanne Bier', 'Eric Heisserer (screenplay), Josh Malerman (novel)', 'Five years after an ominous unseen presence drives most of society to suicide, a mother and her two children make a desperate bid to reach safety.', 'English', 'USA', 'N/A', 'https://m.media-amazon.com/images/M/MV5BMjAzMTI1MjMyN15BMl5BanBnXkFtZTgwNzU5MTE2NjM@._V1_SX300.jpg', '51', '6.6', '209,251', 'tt2737304', 'movie', '21 Dec 2018', 'N/A', 'Netflix', '2019-05-03 19:37:43'),
(19, 'My Name Is Hmmm...', 2013, '23 Apr 2014', '121 min', 'Drama', 'AgnÃ¨s B.', 'AgnÃ¨s B. (original idea), AgnÃ¨s B., Jean-Pol Fargeau', 'A fiction. An 11 year old runaway, the oldest daughter of three. An absent mother, an abusive father, a grandmother too pure to imagine what is going on. A field trip, the girl disappears.....', 'French, English', 'France', '1 win ', 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTA4M2M5NTYtNzZjZi00NjExLThhYzAtNzk2YWFkNmM3YzU2XkEyXkFqcGdeQXVyMjQzMzQzODY@._V1_SX300.jpg', '32', '5.4', '99', 'tt2325761', 'movie', 'N/A', 'N/A', 'N/A', '2019-05-03 19:38:33'),
(20, 'City of God', 2002, '13 Feb 2004', '130 min', 'Crime, Drama', 'Fernando Meirelles, KÃ¡tia Lund(co-director)', 'Paulo Lins (novel), BrÃ¡ulio Mantovani (screenplay)', 'In the slums of Rio, two kids\' paths diverge as one struggles to become a photographer and the other a kingpin.', 'Portuguese', 'Brazil, France, Germany', 'Nominated for 4 Oscars. Another 66 wins ', 'https://m.media-amazon.com/images/M/MV5BMGU5OWEwZDItNmNkMC00NzZmLTk1YTctNzVhZTJjM2NlZTVmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg', '79', '8.6', '639,695', 'tt0317248', 'movie', '08 Jun 2004', 'N/A', 'Miramax Films', '2019-05-03 19:39:12'),
(21, 'Sex and the City', 2008, '30 May 2008', '145 min', 'Comedy, Drama, Romance', 'Michael Patrick King', 'Michael Patrick King, Candace Bushnell (book), Darren Star (television series creator)', 'A New York City writer on sex and love is finally getting married to her Mr. Big. But her three best girlfriends must console her after one of them inadvertently leads Mr. Big to jilt her.', 'English', 'USA', '2 wins ', 'https://m.media-amazon.com/images/M/MV5BMTYyMzYxMjM3OF5BMl5BanBnXkFtZTcwNjg2OTA3MQ@@._V1_SX300.jpg', '53', '5.6', '109,844', 'tt1000774', 'movie', '23 Sep 2008', '$152,595,674', 'Warner Bros. Pictures', '2019-05-03 19:45:48'),
(22, 'Hello', 2008, '10 Oct 2008', '129 min', 'Drama, Romance', 'Atul Agnihotri', 'Atul Agnihotri (screenplay), Chetan Bhagat (additional dialogue), Chetan Bhagat (book), Jalees Sherwani (lyrics), Alok Upadhyay (additional dialogue)', 'Hello... is a tale about the events that happen one night at a call center. Told through the views of the protagonist, Shyam, it is a story of almost lost love, thwarted ambitions, absence ...', 'Hindi', 'India', 'N/A', 'https://m.media-amazon.com/images/M/MV5BZGM5NjliODgtODVlOS00OWZmLWIzYzMtMTI2OWIzMTM1ZGRhXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SX300.jpg', 'N/A', '3.4', '1,726', 'tt1087856', 'movie', '08 Dec 2008', 'N/A', 'N/A', '2019-05-04 09:31:36'),
(23, 'Baby', 2015, '23 Jan 2015', '159 min', 'Action, Thriller', 'Neeraj Pandey', 'Neeraj Pandey', 'An elite counter-intelligence unit learns of a plot, masterminded by a maniacal madman. With the clock ticking, it\'s up to them to track the terrorists\' international tentacles and prevent them from striking at the heart of India.', 'Hindi', 'India', 'N/A', 'https://m.media-amazon.com/images/M/MV5BYTdhNjBjZDctYTlkYy00ZGIxLWFjYTktODk5ZjNlMzI4NjI3XkEyXkFqcGdeQXVyMjY1MjkzMjE@._V1_SX300.jpg', 'N/A', '8.0', '47,848', 'tt3848892', 'movie', 'N/A', 'N/A', 'PVS', '2019-05-05 13:15:11'),
(24, 'I Think I Love My Wife', 2007, '16 Mar 2007', '90 min', 'Comedy, Drama, Romance', 'Chris Rock', 'Chris Rock (screenplay), Louis C.K. (screenplay), Ã‰ric Rohmer (motion picture \"Chloe in the Afternoon\")', 'A married man who daydreams about being with other women finds his will and morals tested after he\'s visited by the ex-mistress of his old friend.', 'English', 'USA, India', '1 nomination.', 'https://m.media-amazon.com/images/M/MV5BMzA0NTcxODEyN15BMl5BanBnXkFtZTcwOTA4MjI0MQ@@._V1_SX300.jpg', '49', '5.5', '15,868', 'tt0770772', 'movie', '12 Jun 2007', 'N/A', 'N/A', '2019-05-05 14:47:49'),
(25, 'My Week with Marilyn', 2011, '23 Dec 2011', '99 min', 'Biography, Drama', 'Simon Curtis', 'Adrian Hodges (screenplay), Colin Clark (books)', 'Colin Clark, an employee of Sir Laurence Olivier, documents the tense interaction between Olivier and Marilyn Monroe during the production of The Prince and the Showgirl (1957).', 'English, French', 'UK, USA', 'Nominated for 2 Oscars. Another 19 wins ', 'https://m.media-amazon.com/images/M/MV5BMTYzODYwOTIzOV5BMl5BanBnXkFtZTcwODE2NjAwNw@@._V1_SX300.jpg', '65', '7.0', '79,054', 'tt1655420', 'movie', '13 Mar 2012', '$12,600,000', 'The Weinstein Company', '2019-05-05 23:07:57'),
(26, 'Why', 1971, '27 Oct 1971', '102 min', 'Comedy, Drama', 'Nanni Loy', 'Sergio Amidei, Emilio Sanna, Rodolfo Sonego (idea)', 'The surveyor Giuseppe Di Noi experiments the troubles of the Italian Justice System of the \'70s while back in Italy for a vacation.', 'Italian', 'Italy', '2 wins ', 'https://images-na.ssl-images-amazon.com/images/M/MV5BYWVmNDMzYTMtN2ZhNS00ZWUxLTk1MjktNzJiZTMwMWFlNmU5XkEyXkFqcGdeQXVyNjU1MTczMzk@._V1_SX300.jpg', 'N/A', '7.6', '522', 'tt0066988', 'movie', 'N/A', 'N/A', 'N/A', '2019-05-06 23:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'Allan Musembya', 'engallanmusembya@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searched_movie`
--
ALTER TABLE `searched_movie`
  ADD PRIMARY KEY (`search_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `searched_movie`
--
ALTER TABLE `searched_movie`
  MODIFY `search_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
