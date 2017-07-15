-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 05:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_models`
--

CREATE TABLE `home_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_models`
--

INSERT INTO `home_models` (`id`, `user_id`, `name`, `slug`, `image`, `phone_no`, `location`, `description`, `created_at`, `updated_at`) VALUES
(8, 3, 'Hari', '15969f23d72500', 'images/post/15969f23d71d07.jpg', '4343343', 'Bhaktapur', 'This is a nice place to live in.', '2017-07-15 05:00:17', '2017-07-15 05:00:17'),
(9, 3, 'Ram Hari', '15969f27090bc2', 'images/post/15969f27090410.jpg', '3894738430980', 'Lalitpur', 'Dherai ramro!', '2017-07-15 05:01:08', '2017-07-15 05:01:08'),
(10, 3, 'ashok poudel', '15969f27eb4021', 'images/post/15969f27eb3870.jpg', '384739470', 'Pokhara', 'lkadjfldsajfdlsflsdaflsda', '2017-07-15 05:01:22', '2017-07-15 05:01:22'),
(11, 3, 'Gopal', '15969f2910b33b', 'images/post/15969f2910abd7.jpg', '4343535535353', 'Kathmandu', 'zdfgggggggggggggggggggggggggg', '2017-07-15 05:01:41', '2017-07-15 05:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2017_07_15_075655_create_home_models_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `role` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verified`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Ram Bahadur', 'sagsraj@yahoo.com', '$2y$10$B83X48qwbS1YyyJ4dHDBGeSrj4rjBA5LCn3RGDumA/vUuFt3giaxm', 0, 1, 1, 'SdLm49GXi2E60a6HJikX01LmdECY5LpxaNRvd01UZy3UHma520Q3myBr8A21', '2017-07-15 00:45:29', '2017-07-15 00:45:29'),
(4, 'ashok', 'ashokpoudel023@gmail.com', '$2y$10$NNfVY.X3riPUmM9wgGb51um31DRNF6Ks8nAV4BLNEUuvT05VfG6LO', 0, 1, 0, 'quSU1RmONht6aanGa3wZNsIQfunCxDnT99wIaaP8d5qQiELtzkI7r0ap1Tqv', '2017-07-15 02:10:50', '2017-07-15 02:10:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_models`
--
ALTER TABLE `home_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_models`
--
ALTER TABLE `home_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
