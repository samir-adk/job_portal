-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 02:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`, `created_at`, `category_id`) VALUES
('programming', '2023-08-20 06:46:09', 0),
('SEO', '2023-08-20 06:53:18', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `comment_user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `comment_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_user_id`, `post_id`, `comment_timestamp`, `comment`) VALUES
(24, 8, 7, '2023-08-28 11:19:59', 'mmmm'),
(25, 8, 7, '2023-08-28 11:21:46', 'kjkj'),
(26, 8, 9, '2023-08-28 11:21:52', 'mkjkk');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `liked_user` int(11) DEFAULT NULL,
  `liked_post` int(11) DEFAULT NULL,
  `like_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `liked_user`, `liked_post`, `like_timestamp`) VALUES
(72, 8, 13, '2023-08-27 10:15:32'),
(73, 8, 13, '2023-08-27 10:37:56'),
(74, 8, 13, '2023-08-27 10:38:04'),
(83, 8, 12, '2023-08-27 11:21:38'),
(85, 7, 6, '2023-08-27 11:23:46'),
(86, 7, 9, '2023-08-27 11:23:49'),
(87, 8, 6, '2023-08-28 07:36:04'),
(88, 8, 7, '2023-08-28 07:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_category_id` int(11) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `post_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `job_title`, `job_category_id`, `description`, `post_user`) VALUES
(6, 'dish washer', 3, 'washing dish', 6),
(7, 'new job', 0, 'new job', 5),
(9, 'new job updated', 0, 'SEO is the old method', 5),
(12, 'tittle', 0, 'dfrff', 7),
(13, 'new job posted', 3, 'yes it is the job', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `user_type`, `password`) VALUES
(1, '', 'sameer', 'Job Seeker', 'eresrrter'),
(2, '', 'sameer4', 'Job Seeker', 'eresrrter'),
(3, '', '1@gmail.com', 'Job Seeker', '1'),
(4, '', '1', 'Job Seeker', '1'),
(5, '', 'testme', 'Job Seeker', 'testme'),
(6, '', 'samir', 'Job Seeker', 'samir'),
(7, '', 'samir@gmail.com', 'Job Seeker', 'samir'),
(8, '', 'sameer@gmail.com', 'Job Seeker', 'sameer'),
(9, 'sujal', 'poudelsujal30@gmail.com', 'Job Provider', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `liked_user` (`liked_user`),
  ADD KEY `liked_post` (`liked_post`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_category_id` (`job_category_id`),
  ADD KEY `post_user` (`post_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`liked_user`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`liked_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`job_category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`post_user`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
