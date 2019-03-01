-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 12:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cvmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `institute` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `duration_prefix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `user_id`, `title`, `year`, `institute`, `duration`, `duration_prefix`, `created_at`, `updated_at`) VALUES
(1, 1, 'bs software engineering', 2019, 'The University of Lahore Islambad Campus', 12, 'days', '2019-01-10 04:33:46', '2019-01-14 05:17:16'),
(2, 1, 'bs software engineering', 2019, 'The University of Lahore Islambad Campus', 12, 'years', '2019-01-10 04:49:37', '2019-01-10 04:49:37'),
(3, 5, 'bs software engineering', 2019, 'The University of Lahore Islambad Campus', 12, 'months', '2019-01-10 05:43:22', '2019-01-10 05:43:22'),
(4, 5, 'bs software engineering', 2019, 'The University of Lahore Islambad Campus', 12, 'months', '2019-01-10 05:43:31', '2019-01-10 05:43:31'),
(5, 1, 'bs software engineering', 2019, 'The University of Lahore Islambad Campus', 12, 'months', '2019-01-14 04:53:37', '2019-01-14 04:53:37'),
(6, 7, 'Laravel Development', 2018, 'The University of Lahore Islambad Campus', 3, 'months', '2019-01-15 01:55:05', '2019-01-15 01:55:05'),
(7, 7, 'bs software engineering', 2019, 'The University of Lahore Islambad Campus', 12, 'months', '2019-01-15 02:24:44', '2019-01-15 02:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `institute` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `passing_year` year(4) NOT NULL,
  `marks_percentage` double(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `institute`, `name`, `description`, `from_date`, `to_date`, `passing_year`, `marks_percentage`, `created_at`, `updated_at`) VALUES
(7, 1, 'The University of Lahore Islambad Campus', 'bs software engineering', 'software requireents engineeering etc', '2014-01-01', '2019-01-16', 2018, 92.00, '2019-01-11 08:18:15', '2019-01-11 08:18:15'),
(9, 2, 'The University of Lsadsdaahore Islambad Campus', 'bs softw', 'software requireents engineeering etc', '2019-01-12', '2019-01-24', 2018, 92.00, '2019-01-14 01:44:05', '2019-01-14 01:44:14'),
(10, 7, 'Comsats Islamabad', 'BS Software Engineering', 'Did softare engieering from the university of COMSATS Islamabad campus. learned coding and programming', '2014-01-01', '2019-01-01', 2018, 90.00, '2019-01-15 01:52:17', '2019-01-15 01:52:17'),
(11, 7, 'The University of Lsadsdaahore Islambad Campus', 'bs software engineering', 'as fsdfasdfsadf', '2019-01-18', '2019-01-17', 2018, 92.00, '2019-01-15 02:14:37', '2019-01-15 02:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `designation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `company_name`, `from_date`, `to_date`, `description`, `title`, `designation`, `created_at`, `updated_at`) VALUES
(3, 1, 'nsol', '2019-01-11', '2019-01-24', 'creating html web pages,', 'bs software engineering', 'frontend deloper', '2019-01-14 00:29:05', '2019-01-14 02:14:34'),
(5, 2, 'asdf as', '2019-01-02', '2019-01-16', 'software requireents engineeering etc', 'bs software engineering', 'asfsda', '2019-01-14 07:10:54', '2019-01-14 07:10:54'),
(6, 1, 'nsol', '2019-01-11', '2019-01-24', 'creating html web pages,', 'bs software engineering', 'Raja ji', '2019-01-14 00:29:05', '2019-01-14 02:14:34'),
(7, 7, 'NSOL', '2019-01-03', '2019-01-31', 'Creating web application using laravel and ajax etc', NULL, 'Laravel Developer', '2019-01-15 01:52:52', '2019-01-15 01:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `user_id`, `name`, `level`, `created_at`, `updated_at`) VALUES
(6, 7, 'Pashot', 4, '2019-01-15 01:52:58', '2019-01-15 01:52:58'),
(7, 7, 'Punjabi', 5, '2019-01-15 01:55:53', '2019-01-15 01:55:53'),
(8, 7, 'mazhar kokhar', 5, '2019-01-15 02:14:50', '2019-01-15 02:14:50'),
(9, 7, 'asif', 5, '2019-01-15 02:14:56', '2019-01-15 02:14:56'),
(10, 1, 'Pashto', 5, '2019-01-18 01:27:34', '2019-01-18 01:27:34');

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
(69, '2014_10_12_000000_create_users_table', 1),
(70, '2014_10_12_100000_create_password_resets_table', 1),
(71, '2019_01_08_075716_create_experiences_table', 1),
(72, '2019_01_08_103134_create_skills_table', 1),
(73, '2019_01_08_104308_create_certifications_table', 1),
(74, '2019_01_08_104622_create_education_table', 1),
(75, '2019_01_08_105428_create_languages_table', 1),
(76, '2019_01_08_105905_create_personals_table', 1),
(77, '2019_01_08_111016_create_projects_table', 1);

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
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_2` text COLLATE utf8mb4_unicode_ci,
  `city_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `user_id`, `first_name`, `last_name`, `address_1`, `address_2`, `city_name`, `postal_code`, `country`, `email`, `phone`, `age`, `date_of_birth`, `website`, `picture`, `objective`, `created_at`, `updated_at`) VALUES
(12, 1, 'raheel', 'khan', 'blue area g7ss', NULL, 'islambaad aaa', 44000, NULL, 'raheel@gmail.com', '923469332235', NULL, '2004-01-31', 'mraheelkhan.com', NULL, 'sadfasf asdfas', '2019-01-11 02:35:10', '2019-01-29 08:54:18'),
(13, 6, 'mazhar', 'khan13321', 'aalj d 3 2', NULL, 'isb', 1123, NULL, 'aa@aa.cc', '123123123', NULL, '1997-02-06', 'sahib.com', NULL, 'fsadfasjf lsadfsa', '2019-01-11 02:42:16', '2019-01-11 06:22:22'),
(14, 7, 'Kabeer', 'Hussain', 'Chandni Chowk, Rawalpindi', NULL, 'RawalPindi', 44600, 'Pakistan', 'kabeerkhan@gmail.com', '+92353535355', NULL, '2015-02-10', 'kabeehussain.co.nf', NULL, 'I am very good kabeer hussain dvevelper. \r\nand noman shah is bad man with no professionalism. Paksitan india', '2019-01-15 01:51:14', '2019-01-15 01:51:14'),
(15, 8, 'Rameen', 'Tariq', 'Chandni Chowk, Rawalpindi', NULL, 'RawalPindi', 44600, 'Pakistan', 'rameen@gmail.com', '9233333737372', NULL, '1997-01-08', 'rameentariq.com', NULL, 'I am very motti and there is no other good motti in the world other than me. I will kill all of other motti if anyone got mottier than me.', '2019-01-15 02:43:33', '2019-01-15 02:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `duration` int(11) DEFAULT NULL,
  `duration_prefix` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `title`, `description`, `duration`, `duration_prefix`, `details`, `company`, `created_at`, `updated_at`) VALUES
(4, 1, 'sdfdsa f', 'sadfsda', 22, 'months', NULL, 'nsol', '2019-01-14 06:04:51', '2019-01-14 06:04:51'),
(5, 7, 'Restaurant Fajar 2 Isha', 'slfj salfjks adl;fjs;alfjk salfj;sddf', 10, 'months', NULL, 'Niku Solutions', '2019-01-15 01:54:43', '2019-01-15 01:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `level`, `user_id`, `created_at`, `updated_at`) VALUES
(5, '123sqfrdf', 5, 1, '2019-01-14 06:42:45', '2019-01-14 06:42:45'),
(6, 'bs sofneering', 5, 2, '2019-01-14 06:43:58', '2019-01-14 06:43:58'),
(7, 'bs software engineering', 5, 1, '2019-01-14 06:56:49', '2019-01-14 06:56:49'),
(8, 'URdu', 3, 7, '2019-01-15 01:53:02', '2019-01-15 01:53:02'),
(9, 'Laravel', 5, 7, '2019-01-15 01:53:17', '2019-01-15 01:53:17'),
(10, 'bs sofneering', 3, 7, '2019-01-15 02:15:06', '2019-01-15 02:15:06'),
(11, 'bs software eineering', 5, 7, '2019-01-15 02:15:12', '2019-01-15 02:15:12'),
(12, 'asf asf as', 5, 7, '2019-01-15 02:15:18', '2019-01-15 02:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'raheel khan', 'raheel@gmail.com', NULL, '$2y$10$C3dIzn.lBSQy3SEdzr2tP.4oVcbG86UfL/ErYLTLFe4Sv7CCzXrl.', NULL, '2019-01-29 08:21:33', '2019-01-29 08:42:58'),
(3, 'user', 'hilal', 'hilal@gmail.com', NULL, '$2y$10$uUzpcRmONY76zF4h7cgvEuxAmv455Gt9wPMPRMF3xqzgSOuPeASg2', 'YC3e3GPk5nO5JyJc9pufstliBEiWv4ozGaZeOFv6IJo3PfLU7dusyUfkY58H', '2019-01-09 02:53:02', '2019-01-09 02:53:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
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
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
