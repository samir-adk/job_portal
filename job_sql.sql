-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 04:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `about_id` int(11) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `motto` text NOT NULL,
  `established_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`about_id`, `organization_name`, `motto`, `established_date`) VALUES
(2, 'Job seeker', 'your job our priority', '2023-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_user_id`, `post_id`, `comment_timestamp`, `comment`) VALUES
(24, 8, 7, '2023-08-28 11:19:59', 'mmmm'),
(25, 8, 7, '2023-08-28 11:21:46', 'kjkj'),
(26, 8, 9, '2023-08-28 11:21:52', 'mkjkk'),
(27, 7, 9, '2023-09-03 10:50:51', 'jhhjhj'),
(28, 7, 6, '2023-09-03 10:50:57', 'hjuhjhjhjh'),
(29, 7, 6, '2023-09-03 11:15:34', 'jkjkj'),
(30, 7, 14, '2023-09-03 11:28:06', 'twxt mw all'),
(31, 21, 23, '2023-09-21 13:00:26', 'checjk data'),
(32, 21, 23, '2023-09-21 13:01:02', 'hhjhj'),
(33, 22, 25, '2023-09-21 13:40:05', 'who needed job?');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('dkcjsdf', 'mjksdlv', 'dkjsk;', 'jchjdf'),
('dmchdaiof', 'mcnadljv', '.,vjadipfaef', 'ljhfuoeaf,ne.jpfi');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `liked_user` int(11) DEFAULT NULL,
  `liked_post` int(11) DEFAULT NULL,
  `like_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `liked_user`, `liked_post`, `like_timestamp`) VALUES
(101, NULL, 17, '2023-09-17 13:03:13'),
(102, NULL, 17, '2023-09-17 13:03:13'),
(103, NULL, 17, '2023-09-17 13:03:14'),
(104, NULL, 17, '2023-09-21 12:51:09'),
(107, 21, 21, '2023-09-21 12:52:01'),
(108, 21, 23, '2023-09-21 12:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_category_id` int(11) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `post_user` int(11) DEFAULT NULL,
  `company_name` varchar(100) NOT NULL,
  `salary_range` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `posted_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `job_title`, `job_category_id`, `description`, `post_user`, `company_name`, `salary_range`, `location`, `posted_date`) VALUES
(17, 'programmer', 0, 'python developer needed , must know rest API', 8, 'sameer technologies', '$400 - $500', 'Nepal', '2023-09-16'),
(20, 'post 1', 3, 'kuc sioh f', 18, '', '', '', '2023-09-21'),
(21, 'post 2', 0, 'mckcnmdc sdlcmndsc xmcnldcnjd', 8, 'mcndlmcnd.c dmdc', 'kdd', 'cadcd', '2023-09-21'),
(22, 'post 3', 0, 'mckcnmdc sdlcmndsc xmcnldcnjd', 8, 'mcndlmcnd.c dmdc', 'kdd', 'cadcd', '2023-09-21'),
(23, 'check data', 3, 'data check desc', 21, '', '', '', '2023-09-21'),
(24, 'after update', 3, 'after', 21, '', '', '', '2023-09-21'),
(25, 'test me', 3, 'test me job provider', 22, '', '', '', '2023-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_type` enum('JOb Seeker','Job Provider') DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `skills` text DEFAULT NULL,
  `qualification` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_type`, `password`, `name`, `skills`, `qualification`) VALUES
(8, 'sameer@gmail.com', 'JOb Seeker', 'sameer', '', '', ''),
(18, 'sadichhha@gmail.com', '', '$2y$10$b5I1.cdDBIweXEn2kDtXdOhY6AOjun6p4y2S5F7ePBOhLhDQGZiou', 'sadichha', 'php django', 'masters'),
(21, '123@gmail.com', '', '$2y$10$Qm6msfncUFFfI31lasFcX.joNiML4U5k5xxyxQvfZeoHkWQmmqpF2', '123@gmail.com', '123@gmail.com', '123@gmail.com'),
(22, 'job@gmail.com', 'Job Provider', '$2y$10$Ag6MW2HBq/bHH9yxfi/rxe.emMzv81PKob65EOGnPB/XLfI7cUtJ6', 'job@gmail.com', 'job@gmail.com', 'job@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`about_id`);

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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
