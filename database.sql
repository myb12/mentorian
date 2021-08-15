-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 08:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentorian-opportunities`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `logo`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Category One', 'public/images/category/x4MOVYLNH52ekMcmo3Y7HbZF6FFVfasKOZodQOqG.svg', 'public/images/category/FxLwPOGoG9V4WhWpTrRt4Qf6HK7alTceEzJov5E2.jpg', '2021-08-03 06:15:48', '2021-08-10 08:39:45'),
(2, 'Category Two', 'public/images/category/Of03YTaBFLohIRlrDWgcWJeac70wtaWGutYDbEMO.svg', 'public/images/category/6OMmfP5WoUIYPxpW5F6nhEWjiyWnDWxVt5USHIok.jpg', '2021-08-03 06:15:59', '2021-08-10 08:39:54'),
(3, 'Category Three', 'public/images/category/wXeNw1lLdYTRL5T5CJnfsG3vQAzpm7P67Zx8Rnwi.png', 'public/images/category/Xqa5OprTvTnaVIvb88hwoKbxNslL9Jw71lrOG3OO.jpg', '2021-08-10 08:39:08', '2021-08-10 08:40:03'),
(4, 'Category Four', 'public/images/category/nuKA2wPANgHfLXWMNipddwI1eLd73i7QcM6iBNfo.png', 'public/images/category/yr5HhpAgzyF6RsPoiz8GjARj59MaVlfnA5M1TsCE.png', '2021-08-10 08:39:26', '2021-08-10 08:40:12'),
(5, 'Category Five', 'public/images/category/2mjgigYKVl2IqnUE4AgcL0gSq6Jncn8HrYIB1yuG.png', 'public/images/category/S4yE57JXOAa3oDt513mQoBVUm5u3KkNwuYO0UOWK.jpg', '2021-08-10 08:43:56', '2021-08-10 08:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `category_id`, `organization_name`, `banner`, `start_date`, `end_date`, `start_time`, `location`, `details`, `event_link`, `created_at`, `updated_at`) VALUES
(5, 'Consequatur voluptat', 2, 'Carson and Lowe Trading', 'public/images/event/v4oYFojK7raibSqooyMcDHHV1ZEwcnuqIi8sfNhf.jpg', '1985-05-11', '2017-04-11', '09:29:00', 'Dolor sit ad mollit', '<p>The next generation of the web&rsquo;s favorite icon library + toolkit is now available as a Beta release!&nbsp;<a href=\"https://fontawesome.com/plans/standard\">Subscribe to&nbsp;<strong>Font Awesome Pro</strong></a>&nbsp;and get instant access to the v6 beta.</p>', 'Error sed architecto', '2021-08-04 05:55:45', '2021-08-04 05:55:45');

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
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_at` tinyint(1) NOT NULL DEFAULT 0,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` date NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `title`, `category_id`, `company_name`, `company_logo`, `duration`, `work_at`, `salary`, `deadline`, `details`, `created_at`, `updated_at`) VALUES
(6, 'Web Designer', 3, 'Softimize.Tech', 'public/images/internship/8cqmNfLDb1hbmrJi4knx1f8fghM9hcRtneYJkQ9R.png', '6 Months', 1, 'Negotiable', '2021-08-10', '<p><strong>Job Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Workplace</strong></p>\r\n\r\n<ul>\r\n	<li>Chattogram</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Educational Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor degree in any discipline</li>\r\n</ul>\r\n\r\n<p><strong>Experience Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>At least 5 year(s)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Additional Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Age 25 to 35 years</li>\r\n	<li>Both males and females are allowed to apply</li>\r\n	<li>Strong programming skills in Object Oriented Python Development</li>\r\n	<li>Basic knowledge on database, web development, Git &amp; Linux commands</li>\r\n	<li>Strong analytic and problem-solving skills</li>\r\n	<li>Ability to communicate, obtain requirements, find solutions, and implement them in a clean</li>\r\n	<li>Ability to adapt to an ever-changing environment.</li>\r\n	<li>Self-starter attitude with the ability to work independently.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Number of openings</strong></p>\r\n\r\n<ul>\r\n	<li>Not specific</li>\r\n</ul>', '2021-08-10 09:08:14', '2021-08-10 09:08:14'),
(7, 'Web Developer', 5, 'Mentorian', 'public/images/internship/r2lYHvra9eJ2h0tRNJdxOlgqazT26HCIJxKc0hxg.svg', '5 Months', 0, 'Negotiable', '2021-08-10', '<p>Job Responsibilities</p>\r\n\r\n<ul>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wrokplace</p>\r\n\r\n<ul>\r\n	<li>Chattogram</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Educational Requirements</p>\r\n\r\n<ul>\r\n	<li>Bachelor degree in any discipline</li>\r\n</ul>\r\n\r\n<p>Experience Requirements</p>\r\n\r\n<ul>\r\n	<li>At least 5 year(s)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Additional Requirements</p>\r\n\r\n<ul>\r\n	<li>Age 25 to 35 years</li>\r\n	<li>Both males and females are allowed to apply</li>\r\n	<li>Strong programming skills in Object Oriented Python Development</li>\r\n	<li>Basic knowledge on database, web development, Git &amp; Linux commands</li>\r\n	<li>Strong analytic and problem-solving skills</li>\r\n	<li>Ability to communicate, obtain requirements, find solutions, and implement them in a clean</li>\r\n	<li>Ability to adapt to an ever-changing environment.</li>\r\n	<li>Self-starter attitude with the ability to work independently.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Number of openings</p>\r\n\r\n<ul>\r\n	<li>Not specific</li>\r\n</ul>', '2021-08-10 09:11:29', '2021-08-10 10:29:30'),
(8, 'Voluptas aut distinc', 4, 'MYB', 'public/images/internship/OEj4rRwvcr0FAANecY6uwlcgmmYCDmuYPauN8yrq.png', '4 Months', 1, 'Autem vel assumenda', '2000-08-24', '<p><strong>Job Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Workplace</strong></p>\r\n\r\n<ul>\r\n	<li>Chattogram</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Educational Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor degree in any discipline</li>\r\n</ul>\r\n\r\n<p><strong>Experience Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>At least 5 year(s)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Additional Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Age 25 to 35 years</li>\r\n	<li>Both males and females are allowed to apply</li>\r\n	<li>Strong programming skills in Object Oriented Python Development</li>\r\n	<li>Basic knowledge on database, web development, Git &amp; Linux commands</li>\r\n	<li>Strong analytic and problem-solving skills</li>\r\n	<li>Ability to communicate, obtain requirements, find solutions, and implement them in a clean</li>\r\n	<li>Ability to adapt to an ever-changing environment.</li>\r\n	<li>Self-starter attitude with the ability to work independently.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Number of openings</strong></p>\r\n\r\n<ul>\r\n	<li>Not specific</li>\r\n</ul>', '2021-08-11 01:34:02', '2021-08-13 08:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_at` tinyint(1) NOT NULL DEFAULT 0,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` date NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `category_id`, `company_name`, `company_logo`, `work_at`, `salary`, `deadline`, `details`, `created_at`, `updated_at`) VALUES
(7, 'Web Developer', 2, 'Mentorian', 'public/images/job/bBmQTVt6Mvzp5NvuvGdN2mF9z8xA5bzGiucyKgcL.png', 1, 'Negotiable', '2021-10-20', '<p><strong>Job Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Workplace</strong></p>\r\n\r\n<ul>\r\n	<li>Chattogram</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Educational Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor degree in any discipline</li>\r\n</ul>\r\n\r\n<p><strong>Experience Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>At least 5 year(s)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Additional Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Age 25 to 35 years</li>\r\n	<li>Both males and females are allowed to apply</li>\r\n	<li>Strong programming skills in Object Oriented Python Development</li>\r\n	<li>Basic knowledge on database, web development, Git &amp; Linux commands</li>\r\n	<li>Strong analytic and problem-solving skills</li>\r\n	<li>Ability to communicate, obtain requirements, find solutions, and implement them in a clean</li>\r\n	<li>Ability to adapt to an ever-changing environment.</li>\r\n	<li>Self-starter attitude with the ability to work independently.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Number of openings</strong></p>\r\n\r\n<ul>\r\n	<li>Not specific</li>\r\n</ul>', '2021-08-10 08:12:12', '2021-08-10 10:50:22'),
(8, 'Graphics Designer', 2, 'Softimize.Tech', 'public/images/job/FZBPWWZ2C8lWc1aLVvnDa8rP8bZg41K8MC8tQ5QD.png', 0, '20,000', '2021-08-10', '<p><strong>Job Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Workplace</strong></p>\r\n\r\n<ul>\r\n	<li>Chattogram</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Educational Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor degree in any discipline</li>\r\n</ul>\r\n\r\n<p><strong>Experience Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>At least 5 year(s)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Additional Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Age 25 to 35 years</li>\r\n	<li>Both males and females are allowed to apply</li>\r\n	<li>Strong programming skills in Object Oriented Python Development</li>\r\n	<li>Basic knowledge on database, web development, Git &amp; Linux commands</li>\r\n	<li>Strong analytic and problem-solving skills</li>\r\n	<li>Ability to communicate, obtain requirements, find solutions, and implement them in a clean</li>\r\n	<li>Ability to adapt to an ever-changing environment.</li>\r\n	<li>Self-starter attitude with the ability to work independently.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Number of openings</strong></p>\r\n\r\n<ul>\r\n	<li>Not specific</li>\r\n</ul>', '2021-08-10 08:14:12', '2021-08-10 10:48:33'),
(9, 'Content Writer', 1, 'Mentorian', 'public/images/job/oInI3iJ9IPGGXxKGu4C1zw16LeWaieba2wFUNHbC.png', 1, 'Negotiable', '2021-08-10', '<p><strong>Job Responsibilities</strong></p>\r\n\r\n<ul>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n	<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, iste.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Workplace</strong></p>\r\n\r\n<ul>\r\n	<li>Chattogram</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Educational Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Bachelor degree in any discipline</li>\r\n</ul>\r\n\r\n<p><strong>Experience Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>At least 5 year(s)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Additional Requirements</strong></p>\r\n\r\n<ul>\r\n	<li>Age 25 to 35 years</li>\r\n	<li>Both males and females are allowed to apply</li>\r\n	<li>Strong programming skills in Object Oriented Python Development</li>\r\n	<li>Basic knowledge on database, web development, Git &amp; Linux commands</li>\r\n	<li>Strong analytic and problem-solving skills</li>\r\n	<li>Ability to communicate, obtain requirements, find solutions, and implement them in a clean</li>\r\n	<li>Ability to adapt to an ever-changing environment.</li>\r\n	<li>Self-starter attitude with the ability to work independently.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Number of openings</strong></p>\r\n\r\n<ul>\r\n	<li>Not specific</li>\r\n</ul>', '2021-08-10 08:14:48', '2021-08-10 08:14:48');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_08_03_055658_create_categories_table', 1),
(8, '2021_08_03_112632_create_jobs_table', 1),
(9, '2021_08_04_055359_create_internships_table', 2),
(10, '2021_08_04_065222_create_events_table', 3),
(11, '2021_08_04_100340_create_workshops_table', 4);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Yasin', 'mohammadyasinbappy@outlook.com', NULL, '$2y$10$KBmDLMOBcq.ZhiC/55cqEu19NTBN1XtTzd2aRTSSA3OV7WGpBpKZ.', 'X9cj6bo9usT5syOLGmOMGx3hm1XpIH1tDShV718Apg9dx3hafrYS6YrgYoe7', '2021-08-12 08:35:08', '2021-08-12 08:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `organization_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `workshop_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `title`, `category_id`, `organization_name`, `banner`, `start_date`, `end_date`, `start_time`, `location`, `details`, `workshop_link`, `created_at`, `updated_at`) VALUES
(4, 'Professional Development Opportunity', 3, 'Softimize.Tech', 'public/images/workshop/SefqlRLVhxG6kkVON7gbpvqYcBjtwMukE0Ms07oW.jpg', '2021-09-10', '2021-10-10', '09:37:00', 'Dhaka', '<p>South Asia, home to more than one-fourth of the world&rsquo;s population, is set to be one of the hardest-hit regions in the world by COVID-19, as the region endures prolonged lockdowns. The economic impact here is likely to be greater than the health impact, as countries in the region do not have the fiscal space or safety nets for flattening the curve by halting production and economic activity.</p>\r\n\r\n<p>To facilitate a conversation on the adaptation that will be required to address the current crisis, Bangladesh Youth Leadership Center (BYLC) is organizing the South Asia Youth Resilience Summit 2020, between April 16 to 18, to be hosted live on Facebook. On each of the three days, there will be a moderated conversation with a global expert for an hour on how young people in South Asia can build resilience and navigate the complexities of present times caused by COVID-19. In addition, there will be workshops and panel discussions on each of the three days on issues ranging from mental health, leadership, to entrepreneurial realities during a global pandemic.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Speakers:</p>\r\n\r\n<p>Ronald Heifetz, Member, International Advisory Board, BYLC; Founder, Center for Public Leadership, Harvard Kennedy School Omar Ishrak, Chairman and CEO, Medtronic; Chairman of the Board, Intel Tarun Khanna, Jorge Paulo Lemann Professor, Harvard Business School</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Moderator</p>\r\n\r\n<p>Ejaj Ahmad, Founder, and President, Bangladesh Youth Leadership Center</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Benefits</p>\r\n\r\n<p>The Summit is open to all participants at no cost.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Eligibilities</p>\r\n\r\n<p>Open for all.</p>', 'https://mohammad-yasin.netlify.app/', '2021-08-10 09:37:44', '2021-08-13 08:28:00'),
(5, 'Commonwealth100 – Fully Funded Online Leadership Course', 5, 'Commonwealth', 'public/images/workshop/SWw5vOtNDRLIj3rUYTW9PdRC60Gy1Jd9HkvxjWbd.png', '2021-08-10', '2021-08-30', '09:00:00', 'Chattogram', '<p>Commonwealth100 is a new, free, crowd-sourced, experiential, online leadership development programme that aims to equip a new generation of young leaders from the Commonwealth with skills relevant to the 21st century, with the&nbsp;<strong>Open Source Leadership&nbsp;</strong>model.&nbsp;Open Source Leadership was crowdsourced from and co-created by 1000 young leaders across the Commonwealth in 2017 and identifies five key areas of development crucial for 21st-century leadership. Open Source Leaders are:&nbsp;<strong>Awake, Interconnected, Trustworthy, Quick, and Accessible.</strong></p>\r\n\r\n<blockquote>\r\n<p><strong><em>To get more exciting opportunities like this, at your fingertips, install the Youth Opportunities&nbsp;<a href=\"http://1qr.fr/1N6H0\" onclick=\"javascript:window.open(\'http://1qr.fr/1N6H0\'); return false;\">Mobile App here</a>&nbsp;from your cellphone.</em></strong></p>\r\n</blockquote>\r\n\r\n<p>The founding partners of Commonwealth100, are: The Scottish Government, Bank of Zambia, British Council. Our outreach partners, are: RMIT University, Queen Mary University of London, Westpac Bicentennial Foundation.</p>\r\n\r\n<p>The programme runs every 2 months for seven weeks and can be completed in your own time. If you complete the course you&rsquo;ll receive the Open Source Leader badge, an online certification that you can display on your CV or online platforms!</p>\r\n\r\n<p>Commonwealth100 aims to produce a more socially-conscious generation of leaders, create a network of young leaders in touch with each other, foster current and future global partnerships between young leaders, and frame a fresh, bold, principled, networked&nbsp;<a href=\"https://www.youthop.com/organizations/commonwealth\">Commonwealth</a>&nbsp;of the future.</p>\r\n\r\n<h3>Location:</h3>\r\n\r\n<p>&nbsp;Online</p>\r\n\r\n<h3>Benefits</h3>\r\n\r\n<ul>\r\n	<li>This is your opportunity to gain practical skills for the future, reflect upon your own leadership style, and move forward with a new perspective on how to make the most positive impact.</li>\r\n	<li>This gives you a chance to interact and connect with peers and young professionals all across the Commonwealth</li>\r\n	<li>You will have the opportunity to attend webinars conducted by senior leaders across the Commonwealth, along with access to articles and videos from them.</li>\r\n	<li>What&rsquo;s more, everyone who completes Commonwealth100 receives the Open Source Leadership Badge: an online badge you can use to set yourself apart, as a 21st Century leader.</li>\r\n	<li>You can put the badge on your CV and online profiles.</li>\r\n</ul>\r\n\r\n<h3>Eligibilities</h3>\r\n\r\n<ul>\r\n	<li>Commonwealth100 is open to young people aged 18+</li>\r\n	<li>You may be at the beginning of your career or in Higher or Further Education.</li>\r\n</ul>\r\n\r\n<p><strong>Eligible Regions:&nbsp;</strong>Citizens or residents of Commonwealth Countries, Commonwealth Countries</p>', 'https://commonpurpose.formstack.com/forms/commonwealth100', '2021-08-10 11:01:57', '2021-08-10 12:57:06'),
(6, 'Ut voluptatem Minim', 1, 'Mercer Santiago Plc', 'public/images/workshop/bDeFgIsEUK4iV6bZ9nKDLb3RxPftN9CxhQDCUDoj.png', '2010-02-17', '1970-04-21', '19:40:00', 'Consequuntur volupta', '<p>Commonwealth100 is a new, free, crowd-sourced, experiential, online leadership development programme that aims to equip a new generation of young leaders from the Commonwealth with skills relevant to the 21st century, with the&nbsp;<strong>Open Source Leadership&nbsp;</strong>model.&nbsp;Open Source Leadership was crowdsourced from and co-created by 1000 young leaders across the Commonwealth in 2017 and identifies five key areas of development crucial for 21st-century leadership. Open Source Leaders are:&nbsp;<strong>Awake, Interconnected, Trustworthy, Quick, and Accessible.</strong></p>\r\n\r\n<blockquote>\r\n<p><strong><em>To get more exciting opportunities like this, at your fingertips, install the Youth Opportunities&nbsp;<a href=\"http://1qr.fr/1N6H0\" onclick=\"javascript:window.open(\'http://1qr.fr/1N6H0\'); return false;\">Mobile App here</a>&nbsp;from your cellphone.</em></strong></p>\r\n</blockquote>\r\n\r\n<p>The founding partners of Commonwealth100, are: The Scottish Government, Bank of Zambia, British Council. Our outreach partners, are: RMIT University, Queen Mary University of London, Westpac Bicentennial Foundation.</p>\r\n\r\n<p>The programme runs every 2 months for seven weeks and can be completed in your own time. If you complete the course you&rsquo;ll receive the Open Source Leader badge, an online certification that you can display on your CV or online platforms!</p>\r\n\r\n<p>Commonwealth100 aims to produce a more socially-conscious generation of leaders, create a network of young leaders in touch with each other, foster current and future global partnerships between young leaders, and frame a fresh, bold, principled, networked&nbsp;<a href=\"https://www.youthop.com/organizations/commonwealth\">Commonwealth</a>&nbsp;of the future.</p>\r\n\r\n<h3>Location:</h3>\r\n\r\n<p>&nbsp;Online</p>\r\n\r\n<h3>Benefits</h3>\r\n\r\n<ul>\r\n	<li>This is your opportunity to gain practical skills for the future, reflect upon your own leadership style, and move forward with a new perspective on how to make the most positive impact.</li>\r\n	<li>This gives you a chance to interact and connect with peers and young professionals all across the Commonwealth</li>\r\n	<li>You will have the opportunity to attend webinars conducted by senior leaders across the Commonwealth, along with access to articles and videos from them.</li>\r\n	<li>What&rsquo;s more, everyone who completes Commonwealth100 receives the Open Source Leadership Badge: an online badge you can use to set yourself apart, as a 21st Century leader.</li>\r\n	<li>You can put the badge on your CV and online profiles.</li>\r\n</ul>\r\n\r\n<h3>Eligibilities</h3>\r\n\r\n<ul>\r\n	<li>Commonwealth100 is open to young people aged 18+</li>\r\n	<li>You may be at the beginning of your career or in Higher or Further Education.</li>\r\n</ul>\r\n\r\n<p><strong>Eligible Regions:&nbsp;</strong>Citizens or residents of Commonwealth Countries, Commonwealth Countries</p>', 'Voluptatum qui offic', '2021-08-10 15:10:02', '2021-08-10 15:10:02'),
(7, 'Water Innovation Lab 2018 in Canada', 3, 'Bell Warren Plc', 'public/images/workshop/RXHjLQvZWLU3qzmJP9tLQuSTYln9M3DL7ioAhccQ.png', '2019-11-05', '2019-02-15', '04:57:00', 'Facilis quia exercit', '<p>WILCanada 2018 will explore Canadian water leadership and innovation, focusing on the world&rsquo;s largest freshwater system &ndash; the Great Lakes.</p>\r\n\r\n<p>Waterlution&rsquo;s global Water Innovation Labs are front-running, immersive leadership development experiences designed to accelerate collaborative innovation, fast-track global knowledge sharing and devise new innovations that improve water security for the planet, and support emerging leaders (20-35 yrs) to implement SDG targets connected to water in their organisations and projects. With leadership training at its core, WIL global experiences equip the next generation of young water researchers, policy-makers, and waterpreneurs with mindsets and skillsets for beyond 2020: collaboration, creativity, global-engagement, complex problem solving, and impact-oriented thinking. Their groundbreaking, cross-sector, cross-disciplinary approach has become a proven new model for global engagement, co-innovation leadership, and a catalyst for co-created change.</p>\r\n\r\n<p>WILCanada 2018- At Queen&rsquo;s Biology Station in Kingston ON with Regional Field Tours H20 Global Leaders Facilitation Training- September 11-14 (an optional addition to developing global water leadership facilitation skills)Water Innovation Lab Canada- September 14-21 WIL Canada 2018 will be bigger than most global WILs. Waterlution will offer H2O Global Leaders training over the first 3 days (Sept 11-14), followed by the Water Innovation Lab Canada for the next 7 days (Sept 14 &ndash; 21).</p>\r\n\r\n<h3>Location:</h3>\r\n\r\n<p>&nbsp;Canada</p>\r\n\r\n<h3>&nbsp;Benefits</h3>\r\n\r\n<ul>\r\n	<li>Water Innovation Labs develop future water leaders to think holistically, design innovatively, and communicate effectively across cultures. By uniting young researchers, innovators, inventors, and entrepreneurs, WIL creates a platform to build new relationships, accelerate knowledge sharing, build transferable leadership skills, and co-develop potential solutions to water challenges across the globe.</li>\r\n	<li>WIL is an opportunity to venture into the wild, offering inter-generational and cross-sectoral learning for an &lsquo;on the ground&rsquo; level of collaboration between young leaders, mentors, and facilitators. You will connect directly with visionary resource experts in water treatment technologies, policy development, and community level water management who will share their global knowledge in the water sector. Wherever in the world, there is water, WIL exists to cultivate an unparalleled experience with facilitators and mentors that speak to each unique landscape. Our labs offer dynamic programming and challenge to ignite passion and spark innovative ideas and new skills to approach the future of water.</li>\r\n	<li>In the 21st century, water will be the marker of how countries flourish or fail. WIL is a transformative opportunity to expand your thinking with a tangible experience of water projects and observing challenges firsthand.</li>\r\n	<li>Everything about WIL is designed to bring to the surface new thinking and solutions that can be implemented once you return to your place of work.&nbsp;<strong>Bottom line:</strong>&nbsp;you will leave the program with invaluable new connections you can turn to in the years ahead. Furthermore, you will experience an unforgettable learning environment and opportunity for hands-on practice, helping you to embed your new skills and insights developed at the Lab. Oh, and by the way, you&rsquo;ll have a blast!</li>\r\n</ul>\r\n\r\n<h3>&nbsp;Eligibilities</h3>\r\n\r\n<ul>\r\n	<li>Are you 20-35 years old, passionate about water?</li>\r\n	<li>Are you a graduate student, young professional or community leader with a focus on water?</li>\r\n	<li>Do you have a water project, business idea, or artistic intervention that you would like to develop?</li>\r\n	<li>Do you want to build your leadership skills and techniques around collaborative innovation*?</li>\r\n	<li>Do you want to work alongside peers and industry experts and mentors to find solutions to challenging water problems and build an incredible global network?</li>\r\n</ul>\r\n\r\n<p><strong>Eligible Regions:&nbsp;</strong>Open for All</p>', 'Irure veniam omnis', '2021-08-10 15:22:53', '2021-08-10 15:22:53'),
(8, 'The Moroccan-Youth Debate Camp 2017 in Morocco', 1, 'MYDC', 'public/images/workshop/gl9UUc7Xoyc0bITz4YgFJAYrpyBib1C7c1eeZUuY.jpg', '2021-10-13', '2021-11-13', '09:00:00', 'Casablanca, Marrakech', '<p>The Moroccan Youth Debate Camp has everything you need to go back to school and succeed in MUN, Public Speaking, and/or Debate competitions with our 3 years of experience in hosting highly successful camps, and the best coaching staff in Morocco! Since 2014, The camp truly has been a life-changing experience for the students who attend. The very first camp was hosted in June of 2014 and has been hosted every summer since then, in Marrakech in 2014 and 2015 and then in Agadir and Casablanca in 2016 and the 2017 editions will be in Casablanca and Marrakech. We accept Moroccan and international as well as offer two full scholarships per year.</p>\r\n\r\n<p>The camp focuses on the World Schools Style (WSS) Debate Style, Public Speaking, Model United Nations (MUN), Diplomacy, and Leadership. Our week-long camp has lectures, exercises, workshops, social activities, and a tournament on the last day to put those new skills into action. The camp will also select and reward the top 3 speakers of the tournament and the winner of the debate tournament.</p>\r\n\r\n<h3>Location:</h3>\r\n\r\n<p>Morocco</p>\r\n\r\n<h3>Benefits</h3>\r\n\r\n<ul>\r\n	<li>Experience in MUN, Public Speaking, and/or Debate competitions with our 3 years experience in hosting highly successful camps.</li>\r\n	<li>The camp truly has been a life-changing experience for the students who attend.</li>\r\n	<li>They accept Moroccan and international as well as offer two full scholarships per year.</li>\r\n	<li>The camp focuses on the World Schools Style (WSS) Debate Style, Public Speaking, Model United Nations (MUN), Diplomacy, and Leadership.</li>\r\n	<li>Their week-long camp has lectures, exercises, workshops, social activities, and a tournament on the last day to put those new skills into action. The camp will also select and reward the top 3 speakers of the tournament and the winner of the debate tournament.</li>\r\n</ul>\r\n\r\n<h3>Eligibilities</h3>\r\n\r\n<ul>\r\n	<li>Middle Schoolers Group: 10-13 years of age.</li>\r\n	<li>High Schoolers Group: 13-19 years of age (If 13 and in high school).</li>\r\n	<li>University Group: 18-22 years of age.</li>\r\n</ul>\r\n\r\n<p><strong>Eligible Regions:&nbsp;</strong>Open for All.</p>', 'https://teammorocco.org/Camp/', '2021-08-13 08:03:50', '2021-08-13 08:03:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `internships_category_id_foreign` (`category_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshops_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `internships`
--
ALTER TABLE `internships`
  ADD CONSTRAINT `internships_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `workshops`
--
ALTER TABLE `workshops`
  ADD CONSTRAINT `workshops_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
