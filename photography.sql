-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2020 at 08:08 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageName` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingID` bigint(20) UNSIGNED NOT NULL,
  `customerName` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerEmail` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `eventDate` date DEFAULT NULL,
  `category` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packageName` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `packageType` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photographer` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `photoPackageID` bigint(20) UNSIGNED DEFAULT NULL,
  `cinepackageID` bigint(20) UNSIGNED DEFAULT NULL,
  `userID` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingID`, `customerName`, `customerEmail`, `phone`, `address`, `eventDate`, `category`, `packageName`, `status`, `packageType`, `photographer`, `amount`, `message`, `photoPackageID`, `cinepackageID`, `userID`, `created_at`, `updated_at`) VALUES
(5, 'Tasneem Ahmed Meem', 'meem@gmail.com', '01681423090', '10 Hawapara, Zindabazar, Sylhet', '2020-12-15', 'Photography', 'Signature', 'Confirmed', 'Premium', 'Amina Begum Tammi', 100000, 'There must be few black and white photos.', 2, NULL, 7, '2020-10-31 15:38:10', '2020-10-31 18:42:07'),
(6, 'Liza', 'liza@gmail.com', '01897654321', 'kumarpara', '2020-12-11', 'Photography', 'Elora', 'Confirmed', 'Exclusive', 'Ariful Haque', 60000, 'need a best cinematographar', 1, NULL, 8, '2020-11-01 12:36:41', '2020-11-01 12:38:33'),
(7, 'Liza', 'liza@gmail.com', '01796785432', 'kumarpara', '2020-02-01', 'Photography', 'Sentiment', 'Confirmed', 'Economy', 'Islam Rafat', 25000, NULL, 3, NULL, 8, '2020-11-01 13:11:25', '2020-11-01 13:13:12'),
(8, 'Tasneem Ahmed Meem', 'meem@gmail.com', '01671624532', 'Hawapara', '2021-01-01', 'Photography', 'Elora', 'Pending', 'Exclusive', 'Sanjeeda Chowdhury', 60000, NULL, 1, NULL, 7, '2020-11-02 06:29:48', '2020-11-02 06:29:48'),
(9, 'Tasneem Ahmed Meem', 'meem@gmail.com', '01671624532', 'Hawapara', '2021-01-01', 'Photography', 'Signature', 'Rejected', 'Premium', 'Amina Begum Tammi', 100000, NULL, 2, NULL, 7, '2020-11-04 09:24:23', '2020-11-04 09:26:52'),
(10, 'Tasneem Ahmed Meem', 'meem@gmail.com', '01671624532', 'Hawapara', '2021-01-01', 'Cinematography', 'Dream', 'Pending', NULL, 'Tanzim Shah', 200000, NULL, NULL, 1, 7, '2020-11-04 19:52:27', '2020-11-04 19:52:27'),
(11, 'Tasneem Ahmed Meem', 'meem@gmail.com', '01671624532', 'Hawapara', '2021-01-01', 'Cinematography', 'Emotion', 'Pending', NULL, 'Islam Rafat', 130000, NULL, NULL, 2, 7, '2020-11-04 19:53:33', '2020-11-04 19:53:33'),
(12, 'Tasneem Ahmed Meem', 'meem@gmail.com', '01671624532', 'Hawapara', '2021-01-01', 'Cinematography', 'Emotion', 'Pending', NULL, NULL, 130000, NULL, NULL, 2, 7, '2020-11-04 19:56:15', '2020-11-04 19:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `cenematography_packages`
--

CREATE TABLE `cenematography_packages` (
  `cinepackageID` bigint(20) UNSIGNED NOT NULL,
  `packageName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_footage` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edited_video` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `videographers` int(11) DEFAULT NULL,
  `vdo_quality` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cenematography_packages`
--

INSERT INTO `cenematography_packages` (`cinepackageID`, `packageName`, `raw_footage`, `edited_video`, `slug`, `videographers`, `vdo_quality`, `hours`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Dream', 'Yes', 'Yes', 'abc', 4, 'HD', 'Full Event', 200000, '2020-10-29 20:38:20', '2020-10-31 14:46:47'),
(2, 'Emotion', 'No', 'Yes', 'emotion', 2, 'SD/DV', '5', 130000, '2020-10-31 14:47:26', '2020-10-31 14:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `galleryID` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photographerID` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`galleryID`, `images`, `photographerID`, `userID`, `created_at`, `updated_at`) VALUES
(8, '725409.jpeg', 5, NULL, '2020-11-12 07:34:08', '2020-11-12 07:34:08'),
(9, '282392.jpeg', 5, NULL, '2020-11-12 07:34:08', '2020-11-12 07:34:08'),
(10, '359482.jpeg', 5, NULL, '2020-11-12 07:34:08', '2020-11-12 07:34:08'),
(11, '443450.jpeg', 5, NULL, '2020-11-12 07:34:08', '2020-11-12 07:34:08'),
(12, '240711.jpeg', 5, NULL, '2020-11-12 07:34:08', '2020-11-12 07:34:08'),
(14, '872420.jpeg', 5, NULL, '2020-11-12 07:34:08', '2020-11-12 07:34:08');

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
(3, '2019_03_28_084429_create_albums_table', 1),
(4, '2019_04_18_072114_create_photographers_table', 1),
(5, '2019_04_18_121534_create_cenematography_packages_table', 1),
(6, '2019_04_18_121559_create_photography_packages_table', 1),
(7, '2019_04_18_233510_create_bookings_table', 1),
(8, '2019_04_28_210218_create_photographer_reviews_table', 1),
(9, '2020_03_28_084445_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mahfuzx10@gmail.com', '$2y$10$SoMo.c1JmIMs93qvwLEK.e70AmOcAUXZZ8DpEuo/RHoj2mKct5oKK', '2020-10-30 19:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `photographerID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageName` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`photographerID`, `name`, `designation`, `slug`, `email`, `phone`, `description`, `facebook`, `twitter`, `instagram`, `imageName`, `created_at`, `updated_at`) VALUES
(1, 'Amina Begum Tammi', 'Senior P.G', 'amina-begum-tammi', 'tammi2408amina@gmail.com', '01972624389', 'Portrait', 'aminax10', 'aminax10', 'aminax10', 'abb399fbf8bd775e1381638d01336253.jpeg', '2020-10-29 21:15:09', '2020-10-31 13:52:16'),
(2, 'Ariful Haque', 'Senior P.G', 'martena-burgess', 'mahfuzx10@gmail.com', '01671621860', 'Candid specialist', 'mahfuzx10', 'mahfuzx10', 'mahfuzx10', 'c1a5b91e9b3631dc6a215171a734105b.jpeg', '2020-10-29 21:18:23', '2020-10-31 13:56:01'),
(3, 'Sanjeeda Chowdhury', 'Junior P.G', 'sanjeeda-chowdhury', 'sanjeedachy@gmail.com', '01703843091', 'Cinematography', 'sanjeedax10', 'sanjeedax10', 'sanjeedax10', '0e4a7cb83a43967fcd16894f30e4e9c1.jpeg', '2020-10-31 13:55:41', '2020-10-31 13:55:41'),
(4, 'Islam Rafat', 'Junior P.G', 'islam-rafat', 'rafat@gmail.com', '01717021811', 'Nature', 'rafatx10', 'rafatx10', 'rafatx10', '4ba0b7a6f0908b5a21efe0ec135d7e9b.jpeg', '2020-10-31 13:58:23', '2020-10-31 13:58:23'),
(5, 'Tanzim Shah', 'Junior P.G', 'tanzim-shah', 'tanzim@gmail.com', '01782151416', 'Videography', 'tanzim', 'tanzim', 'tanzim', '875ce3eac20aa2781309ef386bd99578.jpeg', '2020-10-31 14:00:15', '2020-10-31 14:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_reviews`
--

CREATE TABLE `photographer_reviews` (
  `photographerReviewID` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `photographerID` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographer_reviews`
--

INSERT INTO `photographer_reviews` (`photographerReviewID`, `comment`, `rating`, `photographerID`, `userID`, `created_at`, `updated_at`) VALUES
(9, 'Excellent behaviour', 5, 1, 7, '2020-11-04 14:56:39', '2020-11-04 14:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `photography_packages`
--

CREATE TABLE `photography_packages` (
  `photoPackageID` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `packageName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_print` int(11) DEFAULT NULL,
  `photo_shoot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unlimited',
  `imported_album` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poster_photo` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bridal_story` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_movie` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desk_calender` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photographers` int(11) DEFAULT NULL,
  `hours` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photography_packages`
--

INSERT INTO `photography_packages` (`photoPackageID`, `type`, `packageName`, `slug`, `total_print`, `photo_shoot`, `imported_album`, `poster_photo`, `bridal_story`, `photo_movie`, `desk_calender`, `photographers`, `hours`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Exclusive', 'Elora', 'abc', 100, 'Unlimited', 'Yes', 'No', NULL, NULL, NULL, 3, '6', 60000, '2020-10-29 20:37:58', '2020-10-31 14:44:43'),
(2, 'Premium', 'Signature', 'holly-wiggins', 200, 'Unlimited', 'Yes', NULL, 'Yes', 'Yes', 'Yes', 5, 'Full Event', 100000, '2020-10-30 15:20:58', '2020-10-31 14:44:33'),
(3, 'Economy', 'Sentiment', 'sentiment', 50, 'Unlimited', 'Yes', NULL, NULL, NULL, NULL, 2, '4', 25000, '2020-10-31 14:45:29', '2020-10-31 14:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'User',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userType`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Tammi', 'tammi2408amina@gmail.com', 'Admin', '2020-10-31 15:05:35', '$2y$10$s0EMGU/FgZt0A3BDFRC9qOi.lXbyDd6YZEzaK6i0A9U0MO2hxEy2.', NULL, '2020-10-31 15:04:40', '2020-10-31 15:05:35'),
(7, 'Tasneem Ahmed Meem', 'meem@gmail.com', 'User', '2020-10-31 15:22:39', '$2y$10$rHZNswZCKgdsX2NrdHsr2e2rzMf5BnpbxSRe3w45C0bmZWz6qTpWK', NULL, '2020-10-31 15:09:31', '2020-10-31 15:22:39'),
(8, 'Liza', 'liza@gmail.com', 'User', '2020-11-01 12:34:14', '$2y$10$g3EEluRwrhARHyhddVru2u3Urf4Y24ZQxFEal1gUcb157/1cCW3xW', NULL, '2020-11-01 12:33:00', '2020-11-01 12:34:14'),
(9, 'sania', 'sania@gmail.com', 'User', '2020-11-01 12:47:45', '$2y$10$38B6cBNu7uLfuIuJm88pQ.tw8HZ/FRb8UsrSy6btchVSg9MTtZqQ2', NULL, '2020-11-01 12:47:16', '2020-11-01 12:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumID`),
  ADD UNIQUE KEY `albums_slug_unique` (`slug`),
  ADD KEY `albums_userid_index` (`userID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `bookings_photopackageid_index` (`photoPackageID`),
  ADD KEY `bookings_cinepackageid_index` (`cinepackageID`),
  ADD KEY `bookings_userid_index` (`userID`);

--
-- Indexes for table `cenematography_packages`
--
ALTER TABLE `cenematography_packages`
  ADD PRIMARY KEY (`cinepackageID`),
  ADD UNIQUE KEY `cenematography_packages_slug_unique` (`slug`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`galleryID`),
  ADD KEY `galleries_photographerid_index` (`photographerID`),
  ADD KEY `galleries_userid_index` (`userID`);

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
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`photographerID`),
  ADD UNIQUE KEY `photographers_slug_unique` (`slug`);

--
-- Indexes for table `photographer_reviews`
--
ALTER TABLE `photographer_reviews`
  ADD PRIMARY KEY (`photographerReviewID`),
  ADD KEY `photographer_reviews_photographerid_index` (`photographerID`),
  ADD KEY `photographer_reviews_userid_index` (`userID`);

--
-- Indexes for table `photography_packages`
--
ALTER TABLE `photography_packages`
  ADD PRIMARY KEY (`photoPackageID`),
  ADD UNIQUE KEY `photography_packages_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cenematography_packages`
--
ALTER TABLE `cenematography_packages`
  MODIFY `cinepackageID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `galleryID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `photographerID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photographer_reviews`
--
ALTER TABLE `photographer_reviews`
  MODIFY `photographerReviewID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photography_packages`
--
ALTER TABLE `photography_packages`
  MODIFY `photoPackageID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_cinepackageid_foreign` FOREIGN KEY (`cinepackageID`) REFERENCES `cenematography_packages` (`cinepackageID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `bookings_photopackageid_foreign` FOREIGN KEY (`photoPackageID`) REFERENCES `photography_packages` (`photoPackageID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `bookings_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_photographerid_foreign` FOREIGN KEY (`photographerID`) REFERENCES `photographers` (`photographerID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `galleries_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `photographer_reviews`
--
ALTER TABLE `photographer_reviews`
  ADD CONSTRAINT `photographer_reviews_photographerid_foreign` FOREIGN KEY (`photographerID`) REFERENCES `photographers` (`photographerID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `photographer_reviews_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
