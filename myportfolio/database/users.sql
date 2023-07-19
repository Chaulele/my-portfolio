-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 04:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `aboutme`, `skills`) VALUES
(1, '    <p>I am Malawian aged 24,who resides in Blantyer, but currently upgrading my studies in Bachelor of Science in Information and Communication Technology programme at Mzuzu University, weekend class which is under the Faculty of Faculty of Science, Technology and Innovation.</p>', ' <ul>\r\n            <li>Nertworking</li>\r\n            <li>Systems Support</li>\r\n            <li>HTML</li>\r\n            <li>CSS</li>\r\n            <li>Data entry</li>\r\n            <li>programming in C</li>\r\n    </ul>');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(5) NOT NULL,
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills`) VALUES
(1, '<section class=\"my-skills\">\r\n    <h4>My skills</h4>\r\n         <button name=\"button\">Networking</button/>\r\n         <button name=\"button\">Systems Support</button>\r\n         <button name=\"button\">HTML</button>\r\n         <button name=\"button\">CSS</button>\r\n         <button name=\"button\">Data entry</button>  \r\n  </section>\r\n    <section id=\"skills\">\r\n        <h4>Some of my skills</h4>\r\n        <ul>\r\n            <li>Nertworking</li>\r\n            <li>Systems Support</li>\r\n            <li>HTML</li>\r\n            <li>CSS</li>\r\n            <li>Data entry</li>\r\n        </ul>\r\n        \r\n    </section>\r\n    </section>\r\n    <section id=\"tools\">\r\n         <h4>Tools</h4>\r\n        <ul>\r\n            <li>HTML</li>\r\n            <li>CSS</li>\r\n            <li>GITHUB</li>\r\n            <li>TREB EDITOR</li>\r\n            </ul><br>\r\n    </section>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
