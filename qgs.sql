-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2020 at 09:30 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courseTitle` varchar(255) NOT NULL,
  `courseName` text NOT NULL,
  PRIMARY KEY (`courseTitle`(100))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseTitle`, `courseName`) VALUES
('CS16209', 'Computer Architecture'),
('CS16210', 'Database Management System');

-- --------------------------------------------------------

--
-- Table structure for table `generatedquestion`
--

DROP TABLE IF EXISTS `generatedquestion`;
CREATE TABLE IF NOT EXISTS `generatedquestion` (
  `ID` varchar(100) NOT NULL,
  `Sub` text NOT NULL,
  `Sec1` text,
  `Sec2` text,
  `Sec3` text,
  `Sec4` text,
  `Sec5` text,
  `Sec6` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generatedquestion`
--

INSERT INTO `generatedquestion` (`ID`, `Sub`, `Sec1`, `Sec2`, `Sec3`, `Sec4`, `Sec5`, `Sec6`) VALUES
('Qn_1600704210', '', 'Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>What is the abbreviation of OOPS?<br/><br/>', 'Define Definition\r\n<br/><br/>', '', '', '', ''),
('Qn_1600707630', 'sadf', 'What is the abbreviation of OOPS?<br/><br/>Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>', 'Define Definition\r\n<br/><br/>', '', '', '', ''),
('Qn_1600707724', 'sadf', 'What is the abbreviation of OOPS?<br/><br/>Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>', 'Define Definition\r\n<br/><br/>', '', '', '', ''),
('Qn_1600710737', 'Computer Architecture', 'What is the abbreviation of OOPS?<br/><br/>Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>', 'Define Definition\r\n<br/><br/>', 'Define two person zero sum game<br/><br/>What is meant by Kendallâ€™s notations?<br/><br/>', '', '', ''),
('Qn_1600710934', 'Computer Architecture', 'What is the abbreviation of OOPS?<br/><br/>Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>', 'Define Definition\r\n<br/><br/>', 'What is meant by Kendallâ€™s notations?<br/><br/>', 'Explain Simulation and state the advantages and disadvantages of simulation<br/><br/>) A supermarket has two girls ringing up sales at the counters. If the service time for each\r\ncustomer is exponential with mean 4 minutes, and if the people arrive in a Poisson fashion at the\r\nrate of 10 per hour. What is the probability of having to wait for service?\r\n<br/><br/>', 'A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.\r\n<br/><br/>', ''),
('Qn_1600712002', 'Computer Architecture', '1&ensp;Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>', '1&ensp;Define Definition\r\n<br/><br/>', '1&ensp;Define two person zero sum game<br/><br/>', '1&ensp; A T.V. repair man finds that the time spent on his job has an exponential distribution with mean\r\n35 minutes. If he repairs sets in the order in which they came in and if the arrival of sets is Poisson\r\nwith an average rate of 10 per 8 hour day, what is his expected idle time day? How many jobs are\r\nahead of the average set just brought in?<br/><br/>1&ensp;) A supermarket has two girls ringing up sales at the counters. If the service time for each\r\ncustomer is exponential with mean 4 minutes, and if the people arrive in a Poisson fashion at the\r\nrate of 10 per hour. What is the probability of having to wait for service?\r\n<br/><br/>', '1&ensp;A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.\r\n<br/><br/>', ''),
('Qn_1600712097', 'Computer Architecture', '1&ensp;Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>2&ensp;What is the abbreviation of OOPS?<br/><br/>', '1.&ensp;Define Slack and Surplus variable<br/><br/>', '1.&ensp;What is meant by Kendallâ€™s notations?<br/><br/>', '1.&ensp;Explain Simulation and state the advantages and disadvantages of simulation<br/><br/>2.&ensp; A T.V. repair man finds that the time spent on his job has an exponential distribution with mean\r\n35 minutes. If he repairs sets in the order in which they came in and if the arrival of sets is Poisson\r\nwith an average rate of 10 per 8 hour day, what is his expected idle time day? How many jobs are\r\nahead of the average set just brought in?<br/><br/>3.&ensp;) A supermarket has two girls ringing up sales at the counters. If the service time for each\r\ncustomer is exponential with mean 4 minutes, and if the people arrive in a Poisson fashion at the\r\nrate of 10 per hour. What is the probability of having to wait for service?\r\n<br/><br/>', '1.&ensp;A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.\r\n<br/><br/>', ''),
('Qn_1600752859', 'Computer Architecture', '&emsp;&emsp;<b><h3>1 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1*2=2</h3></b>1&ensp;What is the abbreviation of OOPS?<br/><br/>2&ensp;Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>', '', '', '', '', ''),
('Qn_1600754270', 'Computer Architecture', '&emsp;&emsp;<b><h3>1 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1*2=2</b>1&ensp;What is the abbreviation of OOPS?<br/><br/>2&ensp;Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>', '&emsp;&emsp;<b><h3>2 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2*1=2</h3></b>1.&ensp;Define Definition\r\n<br/><br/>', '', '', '', ''),
('Qn_1600754794', 'Computer Architecture', '&emsp;&emsp;<b><h3>1 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1*2=2</b></h3><br>1.&ensp;Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>2.&ensp;What is the abbreviation of OOPS?<br/><br/>', '&emsp;&emsp;<b><h3>2 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2*2=4</h3></b>1.&ensp;Define Definition\r\n<br/><br/>2.&ensp;Define Slack and Surplus variable<br/><br/>', '', '', '', ''),
('Qn_1600843145', 'Computer Architecture', '&emsp;&emsp;<b><h3>1 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1*3=3</b></h3><br>1.&ensp;When Minimax and Maximini criteria matches, then\r\n (a) Fair game exits (b) Saddle point exists (c) Mixed strategies exists (d) unfair game is exists<br/><br/>2.&ensp;Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>3.&ensp;What is the abbreviation of OOPS?<br/><br/>', '&emsp;&emsp;<b><h3>2 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2*2=4</h3></b><br>Choose any 2Questions from the following<br><br>1.&ensp;Define Slack and Surplus variable<br/><br/>2.&ensp;Define Definition\r\n<br/><br/>3.&ensp;Define Slack and Surplus Variables <br/><br/>', '&emsp;&emsp;<b><h3>3 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3*2=6</h3></b><br>Choose any 2Questions from the following<br><br>1.&ensp;Define two person zero sum game<br/><br/>2.&ensp;What is meant by Kendallâ€™s notations?<br/><br/>3.&ensp;State the applications of Monte Carlo Simulation<br/><br/>', '&emsp;&emsp;<b><h3>5 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;5*1=5</h3></b><br>Choose any 1Questions from the following<br><br>1.&ensp; A T.V. repair man finds that the time spent on his job has an exponential distribution with mean\r\n35 minutes. If he repairs sets in the order in which they came in and if the arrival of sets is Poisson\r\nwith an average rate of 10 per 8 hour day, what is his expected idle time day? How many jobs are\r\nahead of the average set just brought in?<br/><br/>2.&ensp;A supermarket has two girls ringing up sales at the counters. If the service time for each\r\ncustomer is exponential with mean 4 minutes, and if the people arrive in a Poisson fashion at the\r\nrate of 10 per hour. What is the probability of having to wait for service?\r\n<br/><br/>', '&emsp;&emsp;<b><h3>10 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;10*1=10</h3></b><br>Choose any 1Questions from the following<br><br>1.&ensp;Explain Simulation and state the advantages and disadvantages of simulation<br/><br/>2.&ensp;A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.\r\n<br/><br/>', '&emsp;&emsp;<b><h3>15 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;15*2=15</h3></b><br>Choose any 1Questions from the following<br><br>1.&ensp;What are the different costs associated with inventory<br/><br/>2.&ensp;A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.<br/><br/>'),
('Qn_1600844581', 'Computer Architecture', '&emsp;&emsp;<b><h3>1 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1*3=3</b></h3><br>1.&ensp;When Minimax and Maximini criteria matches, then\r\n (a) Fair game exits (b) Saddle point exists (c) Mixed strategies exists (d) unfair game is exists<br/><br/>2.&ensp;Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n<br/><br/>3.&ensp;What is the abbreviation of OOPS?<br/><br/>', '&emsp;&emsp;<b><h3>2 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2*3=6</h3></b><br>Choose any 3 Questions from the following<br><br>1.&ensp;Define Slack and Surplus variable<br/><br/>2.&ensp;Define Definition\r\n<br/><br/>3.&ensp;What do you understand by Transportation problem?<br/><br/>4.&ensp;Define Slack and Surplus Variables <br/><br/>', '&emsp;&emsp;<b><h3>3 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3*2=6</h3></b><br>Choose any 2 Questions from the following<br><br>1.&ensp;Define two person zero sum game<br/><br/>2.&ensp;What is meant by Kendallâ€™s notations?<br/><br/>3.&ensp;State the applications of Monte Carlo Simulation<br/><br/>', '&emsp;&emsp;<b><h3>5 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;5*2=10</h3></b><br>Choose any 2 Questions from the following<br><br>1.&ensp;A supermarket has two girls ringing up sales at the counters. If the service time for each\r\ncustomer is exponential with mean 4 minutes, and if the people arrive in a Poisson fashion at the\r\nrate of 10 per hour. What is the probability of having to wait for service?\r\n<br/><br/>2.&ensp;Explain Simulation and state the advantages and disadvantages of simulation<br/><br/>3.&ensp; A T.V. repair man finds that the time spent on his job has an exponential distribution with mean\r\n35 minutes. If he repairs sets in the order in which they came in and if the arrival of sets is Poisson\r\nwith an average rate of 10 per 8 hour day, what is his expected idle time day? How many jobs are\r\nahead of the average set just brought in?<br/><br/>', '&emsp;&emsp;<b><h3>10 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;10*1=10</h3></b><br>Choose any 1 Questions from the following<br><br>1.&ensp;A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.\r\n<br/><br/>2.&ensp;Explain Simulation and state the advantages and disadvantages of simulation<br/><br/>', '&emsp;&emsp;<b><h3>15 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;15*1=15</h3></b><br>Choose any 1 Questions from the following<br><br>1.&ensp;A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.<br/><br/>2.&ensp;What are the different costs associated with inventory<br/><br/>');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `difficulty` varchar(100) NOT NULL,
  `courseName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `difficulty`, `courseName`) VALUES
(1600696951, 'Define Definition\r\n', '2', 'CS16209'),
(1600696994, 'What is the abbreviation of OOPS?', '1', 'CS16209'),
(1600698908, 'Which defines the semantic web?\r\na.collection of web\r\nb. Turing of data\r\nc. Web of data\r\nd. None of these\r\n', '1', 'CS16209'),
(1600710444, 'Define Slack and Surplus variable', '2', 'CS16209'),
(1600710493, 'A supermarket has two girls ringing up sales at the counters. If the service time for each\r\ncustomer is exponential with mean 4 minutes, and if the people arrive in a Poisson fashion at the\r\nrate of 10 per hour. What is the probability of having to wait for service?\r\n', '5', 'CS16209'),
(1600710509, ' A T.V. repair man finds that the time spent on his job has an exponential distribution with mean\r\n35 minutes. If he repairs sets in the order in which they came in and if the arrival of sets is Poisson\r\nwith an average rate of 10 per 8 hour day, what is his expected idle time day? How many jobs are\r\nahead of the average set just brought in?', '5', 'CS16209'),
(1600710525, 'Explain Simulation and state the advantages and disadvantages of simulation', '5', 'CS16209'),
(1600710545, 'A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.\r\n', '10', 'CS16209'),
(1600710575, 'Define two person zero sum game', '3', 'CS16209'),
(1600710589, 'What is meant by Kendallâ€™s notations?', '3', 'CS16209'),
(1600842922, 'When Minimax and Maximini criteria matches, then\r\n (a) Fair game exits (b) Saddle point exists (c) Mixed strategies exists (d) unfair game is exists', '1', 'CS16209'),
(1600842961, 'Define Slack and Surplus Variables ', '2', 'CS16209'),
(1600842976, 'State the applications of Monte Carlo Simulation', '3', 'CS16209'),
(1600843021, 'A particular item has a demand of 9000 units/year. The cost of one procurement is\r\nRs.100 and the holding cost per unit is Rs 2.40 per year. The replacement is\r\ninstantaneous and no shortages are allowed. Determine (i) the Economic lot size.\r\n(ii)The number of orders per year and (iii) The time between orders.', '15', 'CS16209'),
(1600843074, 'Explain Simulation and state the advantages and disadvantages of simulation', '10', 'CS16209'),
(1600843096, 'What are the different costs associated with inventory', '15', 'CS16209'),
(1600843352, 'What do you understand by Transportation problem?', '2', 'CS16209'),
(1600844540, 'How do you solve an Assignment problem if the profit is to be maximized?', '1', 'CS16210'),
(1600844551, 'Define Slack and Surplus Variables', '2', 'CS16210');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isTeacher` int(1) NOT NULL,
  `isFetcher` int(1) NOT NULL,
  `isAdmin` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `isTeacher`, `isFetcher`, `isAdmin`) VALUES
(1, 'admin', '$2y$10$gUaNoH8XL2dRziYJTbhU0.gm5IHAF2aAYg/6tgKh5XfamcqN0pRgi', '2020-09-20 00:51:52', 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
