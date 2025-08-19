-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2025 at 07:08 AM
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
-- Database: `bos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `show_password` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `password`, `show_password`, `role`, `last_login`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Makwana jaydip', 'jaydeep@estv.in', '9876543210', '$2y$10$ZOkWg9zAHs9cF04ZSsPCeeStHo8tsbccuLYzvPHKAGyjKEChky8Xq', '12345', 'admin', NULL, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `show_password` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `email`, `mobile`, `password`, `show_password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'makwana jaydip', 'jaydeep@estv.in', '9723037928', '$2y$12$BQwk4yZP.D3Ze9bFjPjQ1urPVoKgFt1hQkiS2Ln3Kk3XJ4ABLcmf2', '123456', '1', '2025-06-30 00:36:54', '2025-07-01 23:34:40'),
(3, 'admin', 'admin@gmail.com', '1234567890', '$2y$12$ba31x5EaadhsmN5N44Ri8..BDrPvT3Ha6C.Hj.E0wkdavCU7cuqje', '123456', '1', '2025-07-01 01:04:10', '2025-07-01 01:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_assign_paper`
--

CREATE TABLE `faculty_assign_paper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `paper_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('0','1') DEFAULT NULL COMMENT '0=Inactive, 1=Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_assign_paper`
--

INSERT INTO `faculty_assign_paper` (`id`, `faculty_id`, `paper_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 3, 19, '1', '2025-07-03 07:48:46', '2025-07-03 07:48:46'),
(5, 3, 20, '1', '2025-07-03 07:48:46', '2025-07-03 07:48:46'),
(6, 3, 21, '1', '2025-07-03 07:48:46', '2025-07-03 07:48:46'),
(7, 3, 22, '1', '2025-07-03 07:48:46', '2025-07-03 07:48:46'),
(8, 1, 19, '0', '2025-07-04 23:30:56', '2025-07-07 07:47:13'),
(9, 1, 20, '1', '2025-07-04 23:30:56', '2025-07-04 23:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_26_093709_create_admins_table', 2),
(5, '2025_06_28_063557_create_paper_details_table', 3),
(6, '2025_06_30_045815_create_faculty_table', 4),
(7, '2025_07_03_072502_create_faculty_assign_paper_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `paper_details`
--

CREATE TABLE `paper_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `paper` varchar(255) DEFAULT NULL,
  `papername` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL COMMENT '0=Inactive, 1=Active',
  `recorded_video` varchar(255) DEFAULT NULL,
  `scheme` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_details`
--

INSERT INTO `paper_details` (`id`, `course`, `paper`, `papername`, `status`, `recorded_video`, `scheme`, `created_at`, `updated_at`) VALUES
(1, 'final', 'paper-1', 'Paper 1: Financial Reporting', '1', 'active', 'old', NULL, NULL),
(2, 'final', 'paper-2', 'Paper 2: Strategic Financial Management', '1', 'active', 'old', NULL, NULL),
(3, 'final', 'paper-3', 'Paper 3: Advanced Auditing and Professional Ethics', '1', 'active', 'old', NULL, NULL),
(4, 'final', 'paper-4', 'Paper 4: Corporate & Economic Laws', '1', 'active', 'old', NULL, NULL),
(5, 'final', 'paper-5', 'Paper 5: Strategic Cost Management and Performance Evaluation', '1', 'active', 'old', NULL, NULL),
(6, 'final', 'paper-7', 'Paper 7: Direct Tax Laws and International Taxation', '1', 'active', 'old', NULL, NULL),
(7, 'final', 'paper-8', 'Paper 8: Indirect Tax Laws', '1', 'active', 'old', NULL, NULL),
(8, 'intermediate', 'paper-1', 'Paper 1: Accounting', '1', 'active', 'old', NULL, NULL),
(9, 'intermediate', 'paper-2', 'Paper 2: Corporate and Other Laws', '1', 'active', 'old', NULL, NULL),
(10, 'intermediate', 'paper-3', 'Paper 3: Cost and Management Accounting', '1', 'active', 'old', NULL, NULL),
(11, 'intermediate', 'paper-4A', 'Paper 4A: Income-Tax law', '1', 'active', 'old', NULL, NULL),
(12, 'intermediate', 'paper-4B', 'Paper 4B: Indirect Taxes', '1', 'active', 'old', NULL, NULL),
(13, 'intermediate', 'paper-5', 'Paper 5: Advanced Accounting', '1', 'active', 'old', NULL, NULL),
(14, 'intermediate', 'paper-6', 'Paper 6: Auditing and Assurance', '1', 'active', 'old', NULL, NULL),
(15, 'intermediate', 'paper-7A', 'Paper 7 Section-A: Enterprise Information Systems', '1', 'active', 'old', NULL, NULL),
(16, 'intermediate', 'paper-7B', 'Paper 7 Section-B: Strategic Management', '1', 'active', 'old', NULL, NULL),
(17, 'intermediate', 'paper-8A', 'Paper 8A: Financial Management', '1', 'active', 'old', NULL, NULL),
(18, 'intermediate', 'paper-8B', 'Paper 8B: Economics for Finance', '1', 'active', 'old', NULL, NULL),
(19, 'foundation', 'paper-1', 'Paper 1: Principles and Practice of Accounting', '1', 'active', 'old', NULL, NULL),
(20, 'foundation', 'paper-2A', 'Paper 2: Sec-A: Business Laws', '1', 'active', 'old', NULL, NULL),
(21, 'foundation', 'paper-2B', 'Paper 2: Sec-B: Business Correspondence and Reporting', '1', 'active', 'old', NULL, NULL),
(22, 'foundation', 'paper-3', 'Paper 3: Business Mathematics and Logical Reasoning & Statistics', '1', 'active', 'old', NULL, NULL),
(23, 'foundation', 'paper-4_part-1', 'Paper 4 Part-I: Business Economics', '1', 'active', 'old', NULL, NULL),
(24, 'foundation', 'paper-4_part-2', 'Paper 4 Part-II: Business and Commercial Knowledge', '1', 'active', 'old', NULL, NULL),
(25, 'intermediate', 'paper-4', 'Paper-4: Taxation', '1', 'inactive', 'old', NULL, NULL),
(26, 'intermediate', 'paper-8', 'Paper-8: Financial Management and Economics for Finance', '1', 'inactive', 'old', NULL, NULL),
(27, 'intermediate', 'paper-7', 'Paper-7: Enterprise Information Systems and Strategic Management', '1', 'inactive', 'old', NULL, NULL),
(28, 'foundation', 'paper-1', 'Paper 1: Accounting', '1', 'active', 'new', NULL, NULL),
(29, 'foundation', 'paper-2', 'Paper 2: Business Laws', '1', 'active', 'new', NULL, NULL),
(30, 'foundation', 'paper-3', 'Paper 3: Quantitative Aptitude', '1', 'active', 'new', NULL, NULL),
(31, 'foundation', 'paper-4', 'Paper 4: Business Economics', '1', 'active', 'new', NULL, NULL),
(32, 'intermediate', 'paper-1', 'Paper 1: Advanced Accounting', '1', 'active', 'new', NULL, NULL),
(33, 'intermediate', 'paper-2', 'Paper 2: Corporate and Other Laws', '1', 'active', 'new', NULL, NULL),
(34, 'intermediate', 'paper-3A', 'Paper 3: Taxation (Section A: Income-tax Law)', '1', 'active', 'new', NULL, NULL),
(35, 'intermediate', 'paper-3B', 'Paper 3: Taxation (Section B: Goods and Services Tax)', '1', 'active', 'new', NULL, NULL),
(36, 'intermediate', 'paper-4', 'Paper 4: Cost and Management Accounting', '1', 'active', 'new', NULL, NULL),
(37, 'intermediate', 'paper-5', 'Paper 5: Auditing and Ethics', '1', 'active', 'new', NULL, NULL),
(38, 'intermediate', 'paper-6A', 'Paper 6: Financial Management and Strategic Management (Section A: Financial Management)', '1', 'active', 'new', NULL, NULL),
(39, 'intermediate', 'paper-6B', 'Paper 6: Financial Management and Strategic Management (Section B: Strategic Management)', '1', 'active', 'new', NULL, NULL),
(40, 'final', 'paper-1', 'Paper 1: Financial Reporting', '1', 'active', 'new', NULL, NULL),
(41, 'final', 'paper-2', 'Paper 2: Advanced Financial Management', '1', 'active', 'new', NULL, NULL),
(42, 'final', 'paper-3', 'Paper 3: Advanced Auditing, Assurance and Professional Ethics', '1', 'active', 'new', NULL, NULL),
(43, 'final', 'paper-4', 'Paper 4: Direct Tax Laws and International Taxation', '1', 'active', 'new', NULL, NULL),
(44, 'final', 'paper-5', 'Paper 5: Indirect Tax Laws', '1', 'active', 'new', NULL, NULL),
(45, 'final', 'paper-6', 'Paper 6: Integrated Business Solutions (Multi-disciplinary case study with Strategic Management)', '1', 'active', 'new', NULL, NULL),
(46, 'final', 'Webinar', 'Webinar', '1', 'active', 'new', NULL, NULL),
(47, 'intermediate', 'Webinar', 'Webinar', '1', 'active', 'new', NULL, NULL),
(48, 'foundation', 'Webinar', 'Webinar', '1', 'active', 'new', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2dJrIi6E1KOMeWzKXVqm1dB9wGvnQbDVdinDtFx8', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZXRIZzV4dEFrZ3NFNUVBQUpJOUxQcklzNW1DRnAxU0c4bFVPSFl4ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9mYWN1bHR5LWFzc2lnbi1wYXBlci8xIjt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1751894233),
('BD0tjsuEunBxOT7ZuuzYukjZhhcTvi2PX2mUeQ6P', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1kxaGltTHJMdW9lU2k0MEswMkZ2b2VjaURsTlFONHo2NWhhalRNciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fX0=', 1751873582),
('hDV3kMUqrNLi40p7TlqGTlRmFXvldFZQ581TeAGI', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibmY2Q1JPanRBSnI5S2dINTlFTW85bkZWSVVFS1pHZ1Bid3BQWHJnciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9mYWN1bHR5LWFzc2lnbi1wYXBlci8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1751692183),
('qRwiOwy4dlcrq9tIXSJR296jU8QizXQYsKts2HXi', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVHBaM1M5bTY5OVNsNmRBR01JSXo1RnJJUkJuR0thYnBvVUJOTVBhUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9mYWN1bHR5LWFzc2lnbi1wYXBlci8zIjt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1751549415),
('ZdiUvG6UhmwjXdrJY0EtOyzXlD92bZZhVsqJ2QSs', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1pib25tWHNMTlFmV1FjQmtWMUxzZEUyN0c2YTNzRVJUZHY1dlpXdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1751883335);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty_email_unique` (`email`);

--
-- Indexes for table `faculty_assign_paper`
--
ALTER TABLE `faculty_assign_paper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_assign_paper_faculty_id_foreign` (`faculty_id`),
  ADD KEY `faculty_assign_paper_paper_id_foreign` (`paper_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_details`
--
ALTER TABLE `paper_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_assign_paper`
--
ALTER TABLE `faculty_assign_paper`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paper_details`
--
ALTER TABLE `paper_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_assign_paper`
--
ALTER TABLE `faculty_assign_paper`
  ADD CONSTRAINT `faculty_assign_paper_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`),
  ADD CONSTRAINT `faculty_assign_paper_paper_id_foreign` FOREIGN KEY (`paper_id`) REFERENCES `paper_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
