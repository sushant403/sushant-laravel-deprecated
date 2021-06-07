-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2021 at 09:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal-portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freelance_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `user_id`, `title_tag`, `short_desc`, `long_desc`, `location`, `phone`, `birthday`, `skill`, `github_url`, `instagram_url`, `twitter_url`, `linkedin_url`, `freelance_url`, `resume_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Designer, Perfectionist, Creative Doer', 'I have been working in the Web Development field since 7+ years. These are the languages I excel at and what I work on everyday. HTML5 - CSS3 - Vanilla JavaScript - VueJS - PHP Core - Laravel Framework', 'I am always serious about the punctuality and satisfaction of the client who trusts me with their project as well as thankful for the opportunity given to me. I work on time, I work as promised and I never give chance for the client to be dissatisfied about the work I do for them. Additionally, I am fluent in English, Nepali and Hindi. Team worker and a Perfectionist. I like to work on the minor details. Cooperative, Calm and Fast, but good worker.', 'Kathmandu, Nepal', '+977 986*****94', '1998-07-13', 'Laravel', 'https://github.com/sushant403', 'https://instagram.com/sushantpdl', 'https://twitter.com/sushant_pdll', 'https://www.linkedin.com/in/sushantpoudel/', 'https://www.upwork.com/o/profiles/users/~010f233202f1bb5ba7/', 'https://drive.google.com/file/d/1RfmpyXRp_m4bWxJGgcQAkpRXeO4rHIYY/view', '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_30_142120_create_sessions_table', 1),
(7, '2021_04_06_170638_create_seometa_table', 1),
(8, '2021_04_06_170723_create_abouts_table', 1),
(9, '2021_04_06_170747_create_portfolios_table', 1),
(10, '2021_04_06_170835_create_resumes_table', 1),
(11, '2021_04_06_203509_create_contacts_table', 1),
(12, '2021_04_09_095543_create_services_table', 1),
(13, '2021_04_09_141850_create_media_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `portfolio_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `title`, `type`, `short_desc`, `long_desc`, `portfolio_url`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Freelancers Platform', 'product', NULL, NULL, 'https://skillpark.herokuapp.com/', 'skillpark-Frontend_SushantPoudel.png', '2021-06-04 06:59:04', '2021-06-04 07:45:05', NULL),
(2, 1, 'Karyapalika Forum', 'product', NULL, NULL, 'https://karyapalika.herokuapp.com/', 'karyapalika-Frontend_SushantPoudel.png', '2021-06-04 06:59:04', '2021-06-04 07:44:53', NULL),
(3, 1, 'Writell Blogging Site', 'project', NULL, NULL, 'https://writell.herokuapp.com/', 'Writell-Frontend_SushantPoudel.png', '2021-06-04 06:59:04', '2021-06-04 07:44:39', NULL),
(4, 1, 'Consultancy CMS Website', 'product', NULL, NULL, 'https://preludeint.com', 'preludeint-Frontend_SushantPoudel.png', '2021-06-04 06:59:04', '2021-06-04 07:44:28', NULL),
(5, 1, 'HamroLagani Mockup', 'design', NULL, NULL, 'https://hamrolagani.herokuapp.com/', 'lagani-Frontend_SushantPoudel.png', '2021-06-04 06:59:04', '2021-06-04 07:44:15', NULL),
(6, 1, 'Sajilo Marmat Sewa', 'design', NULL, NULL, 'https://sajilosewa.com', 'sms-Frontend_SushantPoudel.png', '2021-06-04 06:59:04', '2021-06-04 07:44:04', NULL),
(7, 1, 'The Puzzle of Motivation', 'photography', NULL, NULL, 'https://www.youtube.com/rrkrvAUbU9Y', '6.jpg', '2021-06-04 06:59:04', '2021-06-04 07:45:35', NULL),
(8, 1, 'ICT Solutions', 'design', NULL, NULL, 'http://compronepal.com', 'konnectford-Frontend_SushantPoudel.png', '2021-06-04 07:46:57', '2021-06-04 07:46:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `skill`, `title`, `short_desc`, `long_desc`, `company`, `date_from`, `date_to`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'Web Administrator | Database Manager', 'Managing the Database Administration and leading a team of 5 members on the company. Managing Website using CorePHP and React. Also working as a Sales Team.', '', 'Sajilo Marmat Sewa', 'May 2020', 'Jan 2021', '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL),
(2, 1, NULL, 'Frontend Supervisor | UX / UI Designer', 'Worked with the team of 7, analyzing the user interface and the system to optimize the overall website. I am working on various projects ordered by clients. Development using Python (Django) at the backend and Bootstrap/jQuery at the frontend.', '', 'Dailo Tech.', 'Jan 2021', 'March 2021', '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL),
(3, 1, NULL, 'Project Leader | FullStack Developer | UX-UI Designer', 'Developed a fully functional CMS along with Appointment Request System using AngularJS. I am working on various projects ordered by clients. Collaborated in a team, designed the system UI and managed the hosting of the website.', '', 'Prelude International Private Limited', 'Feb 2021', 'April 2021', '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL),
(4, 1, NULL, 'Laravel Web Developer | UX-UI Designer', 'Currently working on Burgeon Tech established in (Nepal, Canada). I am working on various projects ordered by clients. Also working as a Web Designer and Full Stack Developer.', '', 'Burgeon Tech.', 'Dec. 2019', 'Feb. 2021', '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL),
(5, 1, NULL, 'Project Design | Development | Freelance', 'Created many note-worthy projects (including Skillpark Inc.). Team-led Competitions and managed many projects, both for companies and startups.', '', 'Freelance & Project Based', 'Jan. 2021', 'Current', '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seometa`
--

CREATE TABLE `seometa` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seometa`
--

INSERT INTO `seometa` (`id`, `meta_url`, `meta_title`, `meta_description`, `meta_keywords`, `meta_author`, `meta_image_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://sushantp.com.np', 'Sushant Poudel - Resume | CV | Portfolio', 'Sushant Poudel - Portfolio / Resume. Full Stack Web Developer and Designer since 7+ years.', 'sushant, sushantp, sushant poudel portfolio, resume, cv, personal website, sushantpoudel, portfolio', 'Sushant Poudel', 'https://avatars2.githubusercontent.com/u/59304990?s=460&u=bcc656b65c5b5370cf54613248b54239c39857b4&v=4', '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `short_desc`, `long_desc`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Laravel Web Application', 'I create Laravel Based Web Applications with Frontend and Backend including [Admin] Support.', 'Have been developing web application using Laravel since Version 5. I have worked on both companies and personal projects with the framework along with JavaScript / VueJS.', NULL, '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL),
(2, 1, 'Web Designing', 'I design frontend according to the idea or from scratch. I use Figma and little bit of my imagination.', 'Being familiar with Figma and UX/UI designing, I have conquered many creative designs in the last 3 years. I have created websites from scratch with just an idea and/or concepts.', NULL, '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL),
(3, 1, 'Creative Copywriter', 'I write contents. I post blogs. I create contexts for the websites and/or companies.', 'Fluency in English and few other languages has certainly been my plus point on writing contents. Accurate Grammar Knowledge has helped me achieve many \'Blogging Site\' Clients and more.', NULL, '2021-06-04 06:59:04', '2021-06-04 06:59:04', NULL),
(4, 1, 'Website Management', 'I have enough experiences in managing small projects. I have been involved in the big ones.', 'Currently involved in managing the Database and the Website of Sajilo Marmat Sewa. I have also led teams, including Hackathon Competitions, to complete various projects.', 'photo.jpg', '2021-06-04 06:59:04', '2021-06-04 07:56:06', NULL),
(5, 1, 'Project Management', 'Have handled many projects in my career.', 'Yes Indeed', 'Writell-Frontend_SushantPoudel.png', '2021-06-04 07:55:49', '2021-06-04 07:55:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9F7bblC9uluCLxjomdcbDjCIfrV2ucTredINrpze', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiT2I1T3dHT1l2cDVnaWxCOXpLVmhTb3MyVzVjMEdDSnZ6SDloTUpIUyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vcGVyc29uYWwtcG9ydGZvbGlvLnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkTlYvYzFEaVlXcXVlTWJsOU4vSUdCZTZYR0RsM0hRdmZFZ0lpdjg1NWVKeU1HS3I4TG1ncG0iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJE5WL2MxRGlZV3F1ZU1ibDlOL0lHQmU2WEdEbDNIUXZmRWdJaXY4NTVlSnlNR0tyOExtZ3BtIjt9', 1622814192);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `is_dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `is_dark_mode`, `created_at`, `updated_at`) VALUES
(1, 'Sushant Poudel', 'sushantpoudelofficial@gmail.com', '2021-06-04 06:59:04', '$2y$10$NV/c1DiYWqueMbl9N/IGBe6XGDl3HQvfEgIiv855eJyMGKr8Lmgpm', NULL, NULL, '4SABQIxOBzLy9xEiY4pjbuP3IDLOR5qb1extZj2eF2fXvH4x1e9DxdLNgT43', NULL, NULL, 0, '2021-06-04 06:59:04', '2021-06-04 06:59:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_user_id_foreign` (`user_id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumes_user_id_foreign` (`user_id`);

--
-- Indexes for table `seometa`
--
ALTER TABLE `seometa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seometa`
--
ALTER TABLE `seometa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
