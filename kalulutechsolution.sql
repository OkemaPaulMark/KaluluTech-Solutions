-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 02:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalulutechsolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `heading`, `description`, `image`, `created_at`) VALUES
(1, 'The next big thing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo accusantium minima facere. Debitis distinctio nobis aspernatur rerum aperiam ullam. Totam laudantium mollitia praesentium blanditiis neque eos impedit quam explicabo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum blanditiis tempore, sequi libero, laborum impedit consectetur, quae cupiditate voluptatibus optio minima eligendi officiis dolorum porro accusamus. Ullam iste cupiditate sit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sed quibusdam aliquid deserunt.', 'uploads/67574d419b92e_blog.jpg', '2024-12-09 20:04:17'),
(2, 'The best thing to do to improve', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo accusantium minima facere. Debitis distinctio nobis aspernatur rerum aperiam ullam. Totam laudantium mollitia praesentium blanditiis neque eos impedit quam explicabo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum blanditiis tempore, sequi libero, laborum impedit consectetur, quae cupiditate voluptatibus optio minima eligendi officiis dolorum porro accusamus. Ullam iste cupiditate sit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sed quibusdam aliquid deserunt.', 'uploads/67574db1baf3d_2.jpg', '2024-12-09 20:06:09'),
(3, 'The best thing to do to improve', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur explicabo accusantium minima facere. Debitis distinctio nobis aspernatur rerum aperiam ullam. Totam laudantium mollitia praesentium blanditiis neque eos impedit quam explicabo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum blanditiis tempore, sequi libero, laborum impedit consectetur, quae cupiditate voluptatibus optio minima eligendi officiis dolorum porro accusamus. Ullam iste cupiditate sit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias sed quibusdam aliquid deserunt.', 'uploads/67574de106998_2.jpg', '2024-12-09 20:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `callrequest`
--

CREATE TABLE `callrequest` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `callrequest`
--

INSERT INTO `callrequest` (`id`, `fullname`, `contact`, `email`, `service`, `message`, `created_at`) VALUES
(1, 'okema', '0762110420', 'user@gmail.com', 'Mobile App', 'I would like you guys to make for me a mobile app', '2024-12-09 18:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `full_name`, `email`, `message`, `created_at`) VALUES
(1, 0, 'Adeline', 'test2@gmail.com', 'I really like the website but please improve on its responsiveness', '2024-12-09 18:40:51'),
(2, 0, 'John Doe', 'test@gmail.com', 'testing feedback', '2024-12-10 09:40:43'),
(3, 15, '', '', 'testing for signed in users', '2024-12-10 09:54:48'),
(4, 15, '', '', 'Another test for feedbacks', '2024-12-10 09:55:53'),
(5, 15, '', '', 'testing again', '2024-12-10 09:56:51'),
(6, 15, '', '', 'testing if its working now', '2024-12-10 09:59:15'),
(7, 13, '', '', 'testing', '2024-12-10 10:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(13, 'John', 'test2@gmail.com', '$2y$10$1xW.4JvPzWD2JoV0B4VebupBqj6tpRmkdtJRQXGRtEdJC9JK2RwRW', 'user'),
(14, 'okema', 'admin1@gmail.com', '$2y$10$jpBWtjGKk8D9wDuKeIlvcOetNaQxSR68ktjXS08rj1KfNypNJ/z1m', 'admin'),
(15, 'Ageno', 'user@gmail.com', '$2y$10$JE5lbpNNJHCYp9FGGj7LFe0t26uCT57RNDVdz.cuwwCYSIHsqHKB2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callrequest`
--
ALTER TABLE `callrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `callrequest`
--
ALTER TABLE `callrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
