-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 06:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_id` int(111) NOT NULL,
  `Account_email` varchar(255) NOT NULL,
  `Account_password` varchar(255) NOT NULL,
  `Account_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_id`, `Account_email`, `Account_password`, `Account_number`) VALUES
(1, 'luxurydemon123@gmail.com', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`) VALUES
(1, 'nguyenquangthong1999@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Nguyễn Quang Thông');

-- --------------------------------------------------------

--
-- Table structure for table `cordinator`
--

CREATE TABLE `cordinator` (
  `Cordinator_id` int(11) NOT NULL,
  `Cordinator_name` varchar(255) NOT NULL,
  `Cordinator_email` varchar(255) NOT NULL,
  `Cordinator_phone` int(11) NOT NULL,
  `Cordinator_address` varchar(255) NOT NULL,
  `Faculity_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE `faculity` (
  `Faculity_id` int(11) NOT NULL,
  `Faculity_name` varchar(255) NOT NULL,
  `Faculity_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`Faculity_id`, `Faculity_name`, `Faculity_description`) VALUES
(2, 'Khóa Ngoại ngữ', 'Ngoại ngữ tiếng trung tiếng nhật'),
(3, 'nguyen van a', 'ád'),
(4, 'nguyen van a', 'a'),
(5, 'Khóa Ngoại ngữ', 'abc'),
(6, 'username', 'a'),
(7, 'Khóa Ngoại ngữ', 't565'),
(8, 'Khóa Ngoại ngữ', 'nội dung 2'),
(9, 'k', 'nội dung 2'),
(10, 'nguyen van a', 'ád'),
(11, 'k', 'ád'),
(12, '=', 'mô tả cho ngành Tin học'),
(13, 'abc', 'mô tả cho ngành Tin học');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_24_132432_create_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` int(11) NOT NULL,
  `Student_image` varchar(255) NOT NULL,
  `Student_uploadfile` varchar(255) NOT NULL,
  `Student_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Nguyene vawn A', 'a@gmail.com', '2021-02-24 06:44:08', '2021-02-24 06:44:08'),
(2, 'Nguyene vawn A', 'a@gmail.com', '2021-02-24 06:44:14', '2021-02-24 06:44:14'),
(3, 'Nguyene vawn B', 'a@gmail.com', '2021-02-24 06:44:42', '2021-02-24 06:44:42'),
(4, 'Nguyene vawn B', 'a@gmail.com', '2021-02-24 06:46:05', '2021-02-24 06:46:05'),
(5, 'Nguyene vawn B', 'a@gmail.com', '2021-02-24 06:46:18', '2021-02-24 06:46:18'),
(6, 'Nguyene vawn B', 'a@gmail.com', '2021-02-24 06:46:21', '2021-02-24 06:46:21'),
(7, 'Nguyene vawn B', 'a@gmail.com', '2021-02-24 06:46:46', '2021-02-24 06:46:46'),
(8, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:14:17', '2021-02-25 02:14:17'),
(9, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:14:34', '2021-02-25 02:14:34'),
(10, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:15:28', '2021-02-25 02:15:28'),
(11, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:15:42', '2021-02-25 02:15:42'),
(12, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:15:49', '2021-02-25 02:15:49'),
(13, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:18:07', '2021-02-25 02:18:07'),
(14, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:19:12', '2021-02-25 02:19:12'),
(15, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:19:12', '2021-02-25 02:19:12'),
(16, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:20:17', '2021-02-25 02:20:17'),
(17, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:21:20', '2021-02-25 02:21:20'),
(18, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:24:40', '2021-02-25 02:24:40'),
(19, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:25:50', '2021-02-25 02:25:50'),
(20, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:27:12', '2021-02-25 02:27:12'),
(21, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:27:49', '2021-02-25 02:27:49'),
(22, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:28:00', '2021-02-25 02:28:00'),
(23, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:31:02', '2021-02-25 02:31:02'),
(24, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:31:11', '2021-02-25 02:31:11'),
(25, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:31:28', '2021-02-25 02:31:28'),
(26, 'Nguyene vawn B', 'a@gmail.com', '2021-02-25 02:37:36', '2021-02-25 02:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cordinator`
--
ALTER TABLE `cordinator`
  ADD PRIMARY KEY (`Cordinator_id`);

--
-- Indexes for table `faculity`
--
ALTER TABLE `faculity`
  ADD PRIMARY KEY (`Faculity_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cordinator`
--
ALTER TABLE `cordinator`
  MODIFY `Cordinator_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculity`
--
ALTER TABLE `faculity`
  MODIFY `Faculity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
