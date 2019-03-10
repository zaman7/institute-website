-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 07:38 PM
-- Server version: 10.1.36-MariaDB
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
-- Database: `rimt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_table`
--

CREATE TABLE `about_table` (
  `id` int(1) NOT NULL DEFAULT '1',
  `about_title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_table`
--

INSERT INTO `about_table` (`id`, `about_title`, `description`) VALUES
(1, 'WELCOME TO RIMT', 'Welcome to Pathshala Polytechnic Institute. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(100) NOT NULL,
  `usersEmail` varchar(100) NOT NULL,
  `usersPassword` varchar(100) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`usersId`, `usersName`, `usersEmail`, `usersPassword`, `level`) VALUES
(2, 'zaman', 'zaman@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts_table`
--

CREATE TABLE `blog_posts_table` (
  `id` int(11) NOT NULL,
  `posts_title` varchar(255) NOT NULL,
  `posts_body` text NOT NULL,
  `posts_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `posts_image` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts_table`
--

INSERT INTO `blog_posts_table` (`id`, `posts_title`, `posts_body`, `posts_date`, `posts_image`, `author`) VALUES
(4, 'Program In The Auditorium 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...', '2019-03-11 00:35:53', 'images/blogs/7d95004b74.jpg', 'admin'),
(5, 'Program In The Auditorium 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.', '2019-03-11 00:36:19', 'images/blogs/f94567bbbf.jpg', 'zaman'),
(6, 'Program In The Auditorium 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.', '2019-03-11 00:37:45', 'images/blogs/2a4f2b5b73.jpg', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news_table`
--

CREATE TABLE `latest_news_table` (
  `id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `latest_news_table`
--

INSERT INTO `latest_news_table` (`id`, `news_title`, `news_link`) VALUES
(7, 'However, if you are not using Homestead, you will need to make sure your server meets the following requirements:', 'https://laravel.com/docs/5.8/installation'),
(8, 'However, if you are not using Homestead, you will need to make sure your server meets the following requirements:', 'https://laravel.com/docs/5.8/installation');

-- --------------------------------------------------------

--
-- Table structure for table `notices_table`
--

CREATE TABLE `notices_table` (
  `id` int(11) NOT NULL,
  `notices_title` varchar(100) NOT NULL,
  `notices_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notices_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices_table`
--

INSERT INTO `notices_table` (`id`, `notices_title`, `notices_date`, `notices_desc`) VALUES
(1, 'Final Exam Changed Date of 1st, 2nd &amp; 3rd Semester.', '2019-03-09 23:54:24', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Final Exam Changed Date of 2nd &amp; 3rd Semester.', '2019-03-09 23:55:08', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `sitedesc_table`
--

CREATE TABLE `sitedesc_table` (
  `id` int(1) NOT NULL DEFAULT '1',
  `siteLogo` varchar(100) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  `inistEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sitedesc_table`
--

INSERT INTO `sitedesc_table` (`id`, `siteLogo`, `phoneNumber`, `inistEmail`) VALUES
(1, 'images/logo/logo.gif', '+8801721279241', 'zaman@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sliders_table`
--

CREATE TABLE `sliders_table` (
  `id` int(11) NOT NULL,
  `slider_images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders_table`
--

INSERT INTO `sliders_table` (`id`, `slider_images`) VALUES
(4, 'images/slider/8e8893d552.jpg'),
(6, 'images/slider/83c9e3d595.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_table`
--

CREATE TABLE `social_table` (
  `id` int(1) NOT NULL DEFAULT '1',
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_table`
--

INSERT INTO `social_table` (`id`, `facebook`, `twitter`, `linkedin`, `google`) VALUES
(1, 'http://www.facebook.com/zaman7i', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_table`
--

CREATE TABLE `subjects_table` (
  `id` int(11) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `headOf_department` varchar(100) NOT NULL,
  `faculty_members` varchar(100) NOT NULL,
  `total_students` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects_table`
--

INSERT INTO `subjects_table` (`id`, `technology`, `headOf_department`, `faculty_members`, `total_students`, `icon`) VALUES
(1, 'Computer Technology', 'Kamruzzaman', '7', '130', 'desktop'),
(2, 'Electrical Technology', 'Hamidur Rahman', '5', '159', 'archive'),
(3, 'Mechanical Technology', 'Hamidur Rahman', '4', '80', 'desktop'),
(4, 'Civil Technology', 'Kamruzzaman', '6', '130', 'contao'),
(5, 'Electronic Technology', 'Kamruzzaman', '50', '3', 'desktop'),
(6, 'Electro Medical Tech.', 'Hamidur Rahman', '3', '40', 'archive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `blog_posts_table`
--
ALTER TABLE `blog_posts_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news_table`
--
ALTER TABLE `latest_news_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices_table`
--
ALTER TABLE `notices_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders_table`
--
ALTER TABLE `sliders_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects_table`
--
ALTER TABLE `subjects_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_posts_table`
--
ALTER TABLE `blog_posts_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `latest_news_table`
--
ALTER TABLE `latest_news_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notices_table`
--
ALTER TABLE `notices_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders_table`
--
ALTER TABLE `sliders_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects_table`
--
ALTER TABLE `subjects_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
