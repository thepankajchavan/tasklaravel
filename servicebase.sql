-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 07:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servicebase`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2021_07_30_141029_create_bank_accounts_table', 1),
(5, '2021_07_30_141056_create_user_profiles_table', 1),
(6, '2021_07_31_182009_create_companies_table', 1),
(7, '2021_07_31_205317_create_user_types_table', 1),
(8, '2021_08_02_192618_create_cities_table', 1),
(9, '2021_08_02_192724_create_states_table', 1),
(10, '2021_08_02_192934_create_user_pincodes_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_income` double(10,2) DEFAULT NULL,
  `occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `fname`, `lname`, `dob`, `gender`, `annual_income`, `occupation`, `family_type`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$O9yhe0LnNJvYO2x2kWB.IervWLQ27YDngz18UR6tBjDnoSobo6XIG', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'asd qwe', 'asd@asd.asd', 'user', NULL, '$2y$10$Ric1opqlUCSPrApsHO511unB2T9ekj8N0A/2FAEQ8srSRoQfBaUgW', 0, NULL, '2022-02-03 11:38:46', '2022-02-03 11:38:46', NULL, 'asd', 'qwe', '2015-06-20', 'Female', 12345.78, 'Government Job', 'Joint family'),
(3, 'Mr. Lavern Terry', 'jerde.johnathon@example.com', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'PLlrDqHLMf', '2022-02-03 12:19:34', '2022-02-03 12:19:34', NULL, 'Jesse Dare DVM', 'Esperanza Frami', '1971-06-24', 'Female', 4.00, 'Yes', 'Business'),
(4, 'Mrs. Sabryna Schumm', 'hjerde@example.org', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'SnRZW3aTf8', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Jerome Walker', 'Ms. Yessenia Hirthe Sr.', '1994-09-21', 'Male', 9.00, 'No', 'Government Job'),
(5, 'Dr. Rowland Hermann I', 'vhand@example.com', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'uZHRCbEvLt', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Leonel Walter', 'Thelma Quigley DVM', '1978-07-25', 'Female', 8.00, 'Yes', 'Government Job'),
(6, 'Maci Thompson', 'allison.keebler@example.com', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Y45DulzJAb', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Jack Hudson', 'Lera Kunde', '1990-06-09', 'Male', 8.00, 'Yes', 'Government Job'),
(7, 'Dr. Giovani Gerlach', 'anissa.turcotte@example.net', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'aRfH0WkkQZ', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Mr. Jasmin Cronin II', 'Rosa Shields', '1977-12-29', 'Male', 9.00, 'No', 'Business'),
(8, 'Mr. Marcus Schimmel', 'bert.emard@example.com', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'nUurstx26p', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Ken Leannon', 'Garnet Lesch', '1991-08-05', 'Male', 7.00, 'No', 'Business'),
(9, 'Torrance Klein', 'kswift@example.org', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'hJZeMugAQj', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Tracey Little', 'Uriel Champlin', '1974-04-14', 'Female', 0.00, 'No', 'Business'),
(10, 'Loyce Daniel I', 'thiel.kory@example.com', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'CgP37jmAvO', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Dale Schultz', 'Guy Steuber', '2020-07-23', 'Female', 1.00, 'No', 'Business'),
(11, 'Mr. Kyle Mosciski', 'wiegand.julia@example.net', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'EdPbVulEzl', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Mrs. Theodora Macejkovic I', 'Bradford Towne', '2018-11-20', 'Female', 9.00, 'Yes', 'Private job'),
(12, 'Prof. Emma Effertz', 'stefanie.adams@example.org', 'user', '2022-02-03 12:19:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'P0C1JqCLmn', '2022-02-03 12:19:35', '2022-02-03 12:19:35', NULL, 'Enos Pollich Sr.', 'Lenny Sporer I', '1985-12-23', 'Female', 9.00, 'No', 'Government Job'),
(13, 'Ernie D\'Amore', 'wabbott@example.net', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'OrqqtuMcuk', '2022-02-03 12:25:18', '2022-02-03 12:25:18', NULL, 'Catherine Kuvalis', 'Dr. Estrella Hartmann', '1976-04-28', 'Female', 0.00, 'Yes', 'Government Job'),
(14, 'Roel Davis DVM', 'qcrooks@example.com', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Oj97AeOrCu', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Ryann Green', 'Wilton Schamberger', '2016-12-16', 'Female', 4.00, 'No', 'Private job'),
(15, 'Blanche Rippin PhD', 'drunte@example.net', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '1miZbaDUmv', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Dr. Cole Ullrich MD', 'Mara Gutkowski', '2010-11-02', 'Female', 2.00, 'No', 'Business'),
(16, 'Raheem Daugherty IV', 'shields.einar@example.org', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'DLl8OuwtJo', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Dr. Lucas Senger PhD', 'Ruth Sporer', '1975-04-18', 'Female', 1.00, 'Yes', 'Business'),
(17, 'Aiyana Ruecker', 'mclaughlin.johnathan@example.com', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '7K0ekSFLxQ', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Lonnie Schultz III', 'Mr. Jarret Von DVM', '2012-12-22', 'Female', 4.00, 'No', 'Private job'),
(18, 'Jarvis Ledner', 'lisa32@example.org', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Ua5zvIzYBC', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Mr. Floy Pollich II', 'Ova Pagac', '1995-07-03', 'Female', 7.00, 'Yes', 'Government Job'),
(19, 'Miss Dina Marvin', 'hettinger.fidel@example.net', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'dXRJSRXlLp', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Dr. Hilario Kohler Sr.', 'Una Greenholt', '1975-10-23', 'Male', 1.00, 'Yes', 'Business'),
(20, 'Norene Paucek PhD', 'maximillian.schaden@example.com', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Ynlpr5LnDc', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Mrs. Carlotta Daugherty', 'Destiney Hayes', '2016-06-25', 'Female', 8.00, 'Yes', 'Private job'),
(21, 'Hettie Feest', 'salvador05@example.com', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'ZHBY0xFlQX', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Prof. Ines Weimann PhD', 'Fritz Trantow', '1993-06-27', 'Male', 2.00, 'Yes', 'Private job'),
(22, 'Dr. Jevon Doyle PhD', 'marlene.dibbert@example.net', 'user', '2022-02-03 12:25:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2Ed4DlOrcI', '2022-02-03 12:25:19', '2022-02-03 12:25:19', NULL, 'Dorris Thiel', 'Angel Nolan', '2004-02-24', 'Female', 2.00, 'No', 'Government Job');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
