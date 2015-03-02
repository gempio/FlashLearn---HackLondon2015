-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2015 at 05:40 AM
-- Server version: 5.5.41-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HackLondon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Modules`
--

CREATE TABLE IF NOT EXISTS `Modules` (
  `modID` varchar(50) NOT NULL DEFAULT '',
  `modName` varchar(30) DEFAULT NULL,
  `modDesc` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Modules`
--

INSERT INTO `Modules` (`modID`, `modName`, `modDesc`) VALUES
('0b80a81d3b6a7cc65fe005b6067c3dd8', 'Questions', 'It''s working coz Im a sneaky bastard.'),
('13', 'Lies', 'This module is all about lies.'),
('13055a50f757992317f2ed54a6e04ee3', 'Agile Methods', 'Agile Software Development In Teams.'),
('42', 'Truth', 'This module is all about truth.'),
('7858dc3df0977deb7da9941e88c06657', 'Answers', 'Because I''m awesome.'),
('998ae063839ad3004140b5ae97c8c162', 'Agile Methods', 'Agile Module.'),
('bf179968eb148ff7db89089ce1ddfd0e', 'Big Module for Third Year ', 'Third year Hacking Module'),
('e1b1a95af93ce64b08bdbe2fd02e76b5', 'Hello World', 'Hi there'),
('f7d1563d276bb89b1e9c29d3e316fff8', 'Hacking module', 'Hack module for HackLondon');

-- --------------------------------------------------------

--
-- Table structure for table `QstToMods`
--

CREATE TABLE IF NOT EXISTS `QstToMods` (
  `modID` varchar(50) NOT NULL,
  `qstID` varchar(100) NOT NULL,
  `pending` tinyint(1) NOT NULL,
  `weighing` int(11) NOT NULL,
  `qstText` text NOT NULL,
  `qstAnswer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `QstToMods`
--

INSERT INTO `QstToMods` (`modID`, `qstID`, `pending`, `weighing`, `qstText`, `qstAnswer`) VALUES
('42', '0cc87c4f6e52df21474b00cde7ec8099', 0, 23, 'This is a question.', 'waagwaga'),
('42', '1', 0, 5, 'What''s the answer to universe, life and everything?', '42'),
('0b80a81d3b6a7cc65fe005b6067c3dd8', '134916623518321895c0852ec3074ef3', 0, 42, 'This is a random Question.', 'This is a random Answer.'),
('42', '2', 0, 8, 'What''s 2+2', '4'),
('13', '3', 0, 3, 'What is your favorite food?', 'Mine too.'),
('42', '36c950f9336344baeadf1ce0795aa3e2', 0, 90, 'This is a really long ass question to test your pa', 'dawfhwaifhwapofwapofnwapognawpgonwapogjwapgojawpgjwagjwag[jmawg\r\n\r\n\r\n\r\n\r\nwgjaw;ognawp;gonawpgonwapgonwapgonwaghwapogwapognwapighwapighawg\r\nwa\r\n\r\ngawnglawinbgoawbg\r\n'),
('42', '3e73642f89adc383aae1f600d2155d60', 0, 20, 'This is a question.', 'egesgsegseg'),
('13', '4', 0, 29, 'Is grumpy cat grumpy?', 'Wrong.'),
('f7d1563d276bb89b1e9c29d3e316fff8', '4c03493b8299bb5fe1d8aec4b1485dbc', 0, 30, 'Blah blah blah', 'Hacking'),
('7858dc3df0977deb7da9941e88c06657', '93bf226475893e4a7e929b76fc9e48a5', 0, 42, 'HelloWorld', 'This one has a question too!!!'),
('42', 'a3b68bf2fc87871c503fdab7d5a5bf4d', 0, 20, 'What is Love?', 'Jim Carrey.'),
('f7d1563d276bb89b1e9c29d3e316fff8', 'b27f479d648f180265ee0dd9edd0414b', 0, 10, 'Hello', 'Hello2'),
('0b80a81d3b6a7cc65fe005b6067c3dd8', 'b6685b5b04d5fc41ba7cba72ea900198', 0, 10, 'Just so you can have one.', '...'),
('f7d1563d276bb89b1e9c29d3e316fff8', 'db095c7851d2ab1ad4694a484ab27c6d', 0, 10, 'Is md5 safe?', 'NO!');

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE IF NOT EXISTS `Questions` (
  `qstID` text NOT NULL,
  `qstText` text NOT NULL,
  `qstAnswer` text NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`qstID`, `qstText`, `qstAnswer`, `tags`) VALUES
('1', 'What is the answer behind life, universe and Everything.', '42', ''),
('2', 'What''s 2+2?', '4', ''),
('3', 'What is your favorite food?', 'Mine too.', ''),
('4', 'Is grumpy cat grumpy?', 'Wrong.', '');

-- --------------------------------------------------------

--
-- Table structure for table `Requests`
--

CREATE TABLE IF NOT EXISTS `Requests` (
  `reqID` varchar(100) NOT NULL,
  `fromID` varchar(50) NOT NULL,
  `toID` varchar(50) NOT NULL,
  `modID` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Requests`
--

INSERT INTO `Requests` (`reqID`, `fromID`, `toID`, `modID`, `message`) VALUES
('3a706d52d504f6f862c089344a0da2c3', 'hacker', 'hacker@hackLondon.org', '7858dc3df0977deb7da9941e88c06657', 'I have the answers.'),
('446c182e0b129a1f91afaa3b8e723334', 'hacker@hacklondon.org', 'hacker', '42', 'Please join... please.'),
('c8b948305b252890da6145cbbe00d553', 'hacker@hacklondon.org', 'davek@dave.com', '42', 'Please join... please.'),
('f37903e7989d6047dd2a81a69bf8637d', 'hacker@hacklondon.org', 'davek@dave.com', '42', 'welcome.');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `userID` varchar(40) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `nick` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userID`, `password`, `nick`) VALUES
('anotheruser@blah.com', '6f1ed002ab5595859014ebf0951522d9', 'blah'),
('dave@david.com', '1610838743cc90e3e4fdda748282d9b8', 'dave'),
('davek@dave.com', '1610838743cc90e3e4fdda748282d9b8', 'dave'),
('dkenny@dundee.ac.uk', '6f1ed002ab5595859014ebf0951522d9', 'dave'),
('hacker', '1a1dc91c907325c69271ddf0c944bc72', 'hacker'),
('hacker@hacklondon.org', '71b3d8412bd91aae31f5811c7919ce2d', 'hacker'),
('hello@world.co.uk', '5f4dcc3b5aa765d61d8327deb882cf99', 'HelloWorld'),
('jimmy@bob.com', '172522ec1028ab781d9dfd17eaca4427', 'david'),
('newuser@new.com', '22af645d1859cb5ca6da0c484f1f37ea', 'mew'),
('wat.', '5d41402abc4b2a76b9719d911017c592', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `UsersToMods`
--

CREATE TABLE IF NOT EXISTS `UsersToMods` (
  `userID` varchar(40) NOT NULL,
  `modID` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UsersToMods`
--

INSERT INTO `UsersToMods` (`userID`, `modID`, `admin`) VALUES
('hacker@hacklondon.org', 'f7d1563d276bb89b1e9c29d3e316fff8', 2),
('hacker@hacklondon.org', 'bf179968eb148ff7db89089ce1ddfd0e', 2),
('jimmy@bob.com', '13055a50f757992317f2ed54a6e04ee3', 2),
('hacker', '0b80a81d3b6a7cc65fe005b6067c3dd8', 2),
('hacker', '7858dc3df0977deb7da9941e88c06657', 2),
('hacker@hacklondon.org', '998ae063839ad3004140b5ae97c8c162', 2),
('hacker@hackLondon.org', '0b80a81d3b6a7cc65fe005b6067c3dd8', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Modules`
--
ALTER TABLE `Modules`
 ADD PRIMARY KEY (`modID`);

--
-- Indexes for table `QstToMods`
--
ALTER TABLE `QstToMods`
 ADD PRIMARY KEY (`qstID`);

--
-- Indexes for table `Requests`
--
ALTER TABLE `Requests`
 ADD PRIMARY KEY (`reqID`), ADD KEY `reqID` (`reqID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
 ADD PRIMARY KEY (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
