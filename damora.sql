-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 11:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_services`
--

CREATE TABLE `admin_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_services`
--

INSERT INTO `admin_services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Market Research', '2020-10-29 21:25:00', '2020-10-29 21:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'cryptocurrency', '2020-10-29 21:24:51', '2020-10-29 21:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `marker` tinyint(4) NOT NULL COMMENT '0=unread, 1=read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `message`, `file`, `sender`, `receiver`, `marker`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem id obcaecati autem recusandae aut laudantium quo qui doloribus. Nihil et voluptatem possimus autem ratione nesciunt vitae id quos aperiam. Aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem id obcaecati autem recusandae aut laudantium quo qui doloribus. Nihil et voluptatem possimus autem ratione nesciunt vitae id quos aperiam. Aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem id obcaecati autem recusandae aut laudantium quo qui doloribus. Nihil et voluptatem possimus autem ratione nesciunt vitae id quos aperiam. Aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem id obcaecati autem recusandae aut laudantium quo qui doloribus. Nihil et voluptatem possimus autem ratione nesciunt vitae id quos aperiam. Aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem id obcaecati autem recusandae aut laudantium quo qui doloribus. Nihil et voluptatem possimus autem ratione nesciunt', NULL, 1, 13, 0, '2020-12-14 11:03:33', '2020-12-14 11:03:33'),
(2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos id incidunt consequuntur? Aliquam sit similique, repudiandae corrupti eaque voluptatum placeat quidem natus aperiam, sequi earum ipsum, provident quos tempora cumque.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos id incidunt consequuntur? Aliquam sit similique, repudiandae corrupti eaque voluptatum placeat quidem natus aperiam, sequi earum ipsum, provident quos tempora cumque.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos id incidunt consequuntur? Aliquam sit similique, repudiandae corrupti eaque voluptatum placeat quidem natus aperiam, sequi earum ipsum, provident quos tempora cumque.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos id incidunt consequuntur? Aliquam sit similique, repudiandae corrupti eaque voluptatum placeat quidem natus aperiam, sequi earum ipsum, provident quos tempora cumque.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos id incidun', NULL, 12, 11, 0, '2020-12-15 05:42:06', '2020-12-15 05:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nasdaq', '2020-10-29 21:25:07', '2020-10-29 21:25:07');

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
(4, '2020_09_06_163608_add_status_to_user_table', 1),
(5, '2020_09_08_171508_create_sessions_table', 1),
(6, '2020_09_08_175214_create_comments_table', 1),
(7, '2020_09_14_171048_create_chats_table', 1),
(8, '2020_09_21_161001_create_services_table', 2),
(9, '2020_09_21_162418_add_service_owner', 3),
(10, '2020_09_21_165054_create_research_table', 4),
(11, '2020_09_28_160707_create_assets_table', 5),
(12, '2020_09_28_163209_create_admin_services_table', 6),
(13, '2020_09_28_165008_create_markets_table', 7),
(15, '2019_05_03_000001_create_customer_columns', 8),
(16, '2019_05_03_000002_create_subscriptions_table', 8),
(17, '2019_05_03_000003_create_subscription_items_table', 8),
(18, '2020_10_03_182254_create_packages_table', 9),
(19, '2020_10_30_041040_create_transactions_table', 10),
(21, '2020_10_31_182148_add_transaction_type', 11),
(22, '2020_10_31_185020_create_withdraws_table', 11),
(23, '2020_12_14_044457_add_token', 12),
(24, '2020_12_15_062811_add_subscription', 13),
(25, '2020_12_15_064233_create_subscriptions_table', 14),
(26, '2020_12_15_065708_add_subscription_end', 15),
(27, '2020_12_15_070501_add_subscription_status', 16);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `credit` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `credit`, `price`, `created_at`, `updated_at`) VALUES
(1, 20, 15, '2020-10-29 21:25:24', '2020-10-29 21:25:24'),
(2, 100, 70, '2020-10-29 21:25:38', '2020-10-29 21:25:38'),
(3, 500, 450, '2020-10-29 21:25:46', '2020-10-29 21:25:46');

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
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(10) UNSIGNED NOT NULL,
  `researcher` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `researcher`, `service`, `file`, `detail`, `created_at`, `updated_at`) VALUES
(1, 11, 13, 'file/QgOPITeJavM1gKYEWB5lTONFO6AZDyXlxr5GmTKn.pdf', 'Final Destination', '2020-10-29 21:38:51', '2020-10-29 21:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `market` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `subscription` int(11) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `market`, `asset`, `price`, `subscription`, `duration`, `description`, `file`, `provider`, `created_at`, `updated_at`) VALUES
(13, 'Market Research', 'cryptocurrency', 'cryptocurrency', 5, 10, '2', 'This is my first service', 'services/AU75gl4X1e9bNtwQVqb8v8VAZJTSRX08cY2mp763.jpeg', 11, '2020-12-15 01:30:51', '2020-12-15 01:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `subscriber` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=UnSub , 1=Subscribe',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `service_id`, `subscriber`, `status`, `created_at`, `updated_at`) VALUES
(1, 13, 12, 0, '2020-12-12 10:38:09', '2020-12-15 05:39:30'),
(2, 13, 12, 1, '2020-12-15 05:39:47', '2020-12-15 05:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `researcher` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `signal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `researcher`, `buyer`, `signal`, `created_at`, `updated_at`) VALUES
(1, 11, 12, 1, '2020-10-29 23:40:04', '2020-10-29 23:40:04'),
(2, 11, 12, 1, '2020-10-30 06:12:38', '2020-10-30 06:12:38'),
(3, 11, 12, 1, '2020-10-30 06:14:07', '2020-10-30 06:14:07'),
(4, 11, 12, 1, '2020-10-31 13:20:04', '2020-10-31 13:20:04'),
(5, 11, 12, 1, '2020-10-31 13:20:14', '2020-10-31 13:20:14'),
(6, 11, 12, 1, '2020-10-31 13:24:11', '2020-10-31 13:24:11'),
(7, 11, 12, 1, '2020-10-31 14:27:47', '2020-10-31 14:27:47'),
(8, 11, 12, 1, '2020-10-31 14:28:00', '2020-10-31 14:28:00'),
(9, 11, 12, 1, '2020-10-31 14:28:02', '2020-10-31 14:28:02'),
(10, 11, 26, 1, '2020-12-14 10:03:11', '2020-12-14 10:03:11'),
(11, 11, 26, 1, '2020-12-14 10:04:43', '2020-12-14 10:04:43'),
(12, 11, 26, 1, '2020-12-14 10:05:07', '2020-12-14 10:05:07'),
(13, 11, 26, 1, '2020-12-14 10:11:19', '2020-12-14 10:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) DEFAULT NULL,
  `token` int(11) DEFAULT NULL,
  `userRole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=admin, 2=buyer, 3=researcher',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0=pending, 1=approved, 2=rejected, 3=deleted',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `password`, `credit`, `token`, `userRole`, `created_at`, `updated_at`, `status`, `image`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$o6aGGuioBq4zs78TzEl3CujGDxa/F16n75eismKs4yKF4/NO.qaZi', NULL, NULL, '1', '2020-09-19 19:00:00', '2020-09-26 00:28:58', '1', 'user/BPOBM4IYJHZe5WdduSl74kMCbuUasLMnAqdf42qm.jpeg', NULL, NULL, NULL, NULL),
(11, 'moeez moeez', 'moeez', 'moeez@gmail.com', '$2y$10$58za4CGFPqU4GnCYD4asEeRRLd/.tE5jrY1xdWQeI.wNzLP1P4f/C', 48, NULL, '3', '2020-10-29 21:23:51', '2020-12-14 10:11:19', '1', 'user/BPOBM4IYJHZe5WdduSl74kMCbuUasLMnAqdf42qm.jpeg', NULL, NULL, NULL, NULL),
(12, 'saad', 'sado', 'saad@gmail.com', '$2y$10$PAH5s2Dsr2sbNSSBxn9pCeG7VMeXW/YivnH7BJbyZI1n0/FcOuJQq', 190, NULL, '2', '2020-10-29 21:24:11', '2020-12-15 05:39:47', '1', NULL, NULL, NULL, NULL, NULL),
(13, 'Khubaib', 'khu', 'khubaib@gmail.com', '$2y$10$f./Mi/YFbf9ol92M7W8XUepuxbxpsN6IPKozB7Hv.WhxCLOaQFlry', 0, NULL, '3', '2020-10-31 14:39:20', '2020-10-31 14:39:20', '0', 'user/BPOBM4IYJHZe5WdduSl74kMCbuUasLMnAqdf42qm.jpeg', NULL, NULL, NULL, NULL),
(26, 'Allied', 'ayees', 'ayeshatayyab66@gmail.com', '$2y$10$1KQgNNwZgbT2wo59JWrG9uVY9S0zRHod5gvRNb7d/UhqN9vlJohGC', 5, NULL, '2', '2020-12-14 09:44:47', '2020-12-14 10:11:19', '1', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` int(10) UNSIGNED NOT NULL,
  `researcher` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=pending,1=accept,2=reject',
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `researcher`, `status`, `amount`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 48, '2020-10-31 14:17:47', '2020-10-31 14:44:13'),
(3, 11, 2, 12, '2020-10-31 14:25:34', '2020-10-31 14:44:19'),
(4, 11, 0, 12, '2020-10-31 14:27:56', '2020-10-31 14:27:56'),
(5, 11, 0, 24, '2020-10-31 14:28:05', '2020-10-31 14:28:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_services`
--
ALTER TABLE `admin_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_unique` (`user`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_services`
--
ALTER TABLE `admin_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
