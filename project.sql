-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 03:00 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_details`
--

CREATE TABLE `block_details` (
  `blockid` int(10) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stateid` int(11) NOT NULL,
  `block` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `block_details`
--

INSERT INTO `block_details` (`blockid`, `state`, `stateid`, `block`, `created_at`, `updated_at`) VALUES
(1, 'Bihar', 1, 'siwan', NULL, NULL),
(2, 'Bihar', 1, 'araria', NULL, NULL),
(3, 'Bihar', 1, 'islampur', NULL, NULL),
(4, 'Bihar', 1, 'nalanda', NULL, NULL),
(5, 'Bihar', 1, 'jagdishpur', NULL, NULL),
(6, 'Bihar', 1, 'silkat', NULL, NULL),
(7, 'Bihar', 1, 'katihar', NULL, NULL),
(8, 'Bihar', 1, 'kumraw', NULL, NULL),
(9, 'Bihar', 1, 'hajipur', NULL, NULL),
(10, 'Bihar', 1, 'patna', NULL, NULL),
(11, 'west Bengal', 2, 'alipurduar', NULL, NULL),
(12, 'west Bengal', 2, 'bankura', NULL, NULL),
(13, 'west Bengal', 2, 'bardhaman', NULL, NULL),
(14, 'west Bengal', 3, 'birbhum', NULL, NULL),
(15, 'west Bengal', 2, 'coochbehar', NULL, NULL),
(16, 'west Bengal', 2, 'darjelling', NULL, NULL),
(17, 'west Bengal', 2, 'hooghly', NULL, NULL),
(18, 'west Bengal', 2, 'howrah', NULL, NULL),
(19, 'west Bengal', 2, 'jalpaiguri', NULL, NULL),
(20, 'west Bengal', 2, 'malda', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `candidateid` int(11) NOT NULL,
  `candidatename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `constituencyid` int(10) UNSIGNED NOT NULL,
  `partyid` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`candidateid`, `candidatename`, `electionid`, `constituencyid`, `partyid`, `vote`, `created_at`, `updated_at`) VALUES
(1, 'Raja Ram Mohan Singh', 1, 1, 1, 0, '2016-05-06 07:15:17', '2016-05-06 07:15:17'),
(6, 'Kejriwal', 1, 2, 1, 0, '2016-05-06 07:16:50', '2016-05-06 07:16:50'),
(10, 'Alok', 1, 3, 1, 0, '2016-05-06 07:17:55', '2016-05-06 07:17:55'),
(2, 'Mahatma Gandhi', 1, 1, 2, 0, '2016-05-06 07:15:34', '2016-05-06 07:15:34'),
(7, 'Kumar Vishwas', 1, 2, 2, 0, '2016-05-06 07:17:10', '2016-05-06 07:17:10'),
(12, 'Manish', 1, 4, 2, 0, '2016-05-06 07:18:42', '2016-05-06 07:18:42'),
(3, 'Jawahar Lal', 1, 1, 3, 0, '2016-05-06 07:15:57', '2016-05-06 07:15:57'),
(8, 'Saurabh', 1, 2, 3, 0, '2016-05-06 07:17:26', '2016-05-06 07:17:26'),
(11, 'Bittu', 1, 3, 3, 0, '2016-05-06 07:18:13', '2016-05-06 07:18:13'),
(4, 'Sonia', 1, 1, 4, 2, '2016-05-06 07:16:16', '2016-05-06 07:16:16'),
(9, 'Shubham', 1, 2, 4, 0, '2016-05-06 07:17:40', '2016-05-06 07:17:40'),
(13, 'Vishal', 1, 4, 4, 0, '2016-05-06 07:18:59', '2016-05-06 07:18:59'),
(5, 'Modi', 1, 1, 5, 3, '2016-05-06 07:16:33', '2016-05-06 07:16:33'),
(14, 'Gautam', 1, 4, 5, 0, '2016-05-06 07:19:19', '2016-05-06 07:19:19'),
(100, 'Gautam', 1, 1, 7, 0, '2016-05-06 04:50:53', '2016-05-06 04:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `constituency_block_details`
--

CREATE TABLE `constituency_block_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `constituencyid` int(10) UNSIGNED NOT NULL,
  `block` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `constituency_block_details`
--

INSERT INTO `constituency_block_details` (`id`, `electionid`, `constituencyid`, `block`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'siwan', '2016-05-06 07:05:34', '2016-05-06 07:05:34'),
(2, 1, 1, 'araria', '2016-05-06 07:05:34', '2016-05-06 07:05:34'),
(3, 1, 2, 'islampur', '2016-05-06 07:13:00', '2016-05-06 07:13:00'),
(4, 1, 2, 'nalanda', '2016-05-06 07:13:01', '2016-05-06 07:13:01'),
(5, 1, 2, 'jagdishpur', '2016-05-06 07:13:01', '2016-05-06 07:13:01'),
(6, 1, 3, 'silkat', '2016-05-06 07:13:55', '2016-05-06 07:13:55'),
(7, 1, 3, 'katihar', '2016-05-06 07:13:55', '2016-05-06 07:13:55'),
(8, 1, 3, 'kumraw', '2016-05-06 07:13:55', '2016-05-06 07:13:55'),
(9, 1, 3, 'hajipur', '2016-05-06 07:13:55', '2016-05-06 07:13:55'),
(10, 1, 4, 'patna', '2016-05-06 07:14:12', '2016-05-06 07:14:12'),
(11, 1, 5, 'siwan', '2016-05-06 04:53:13', '2016-05-06 04:53:13'),
(12, 1, 5, 'araria', '2016-05-06 04:53:13', '2016-05-06 04:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `constituency_details`
--

CREATE TABLE `constituency_details` (
  `constituencyid` int(10) UNSIGNED NOT NULL,
  `constituencyname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `constituency_details`
--

INSERT INTO `constituency_details` (`constituencyid`, `constituencyname`, `electionid`, `created_at`, `updated_at`) VALUES
(1, 'araria', 1, '2016-05-06 07:05:34', '2016-05-06 07:05:34'),
(2, 'islampur', 1, '2016-05-06 07:13:00', '2016-05-06 07:13:00'),
(3, 'hajipur', 1, '2016-05-06 07:13:55', '2016-05-06 07:13:55'),
(4, 'patna', 1, '2016-05-06 07:14:12', '2016-05-06 07:14:12'),
(5, 'Howrah', 1, '2016-05-06 04:53:13', '2016-05-06 04:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `electionid` int(10) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`electionid`, `year`, `status`, `state`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 2016, 'State', 'Bihar', '2016-05-07', '2016-05-10', '2016-05-06 07:01:54', '2016-05-06 07:01:54'),
(14, 2016, 'State', 'West Bengal', '2016-05-11', '2016-05-13', '2016-05-06 03:15:36', '2016-05-06 03:15:36'),
(15, 2016, 'State', 'Bihar', '2016-05-11', '2016-05-13', '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(16, 2016, 'State', 'West Bengal', '2016-05-11', '2016-05-13', '2016-05-06 03:42:12', '2016-05-06 03:42:12'),
(17, 2016, 'State', 'West Bengal', '2017-04-16', '2018-11-11', '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(18, 2016, 'State', 'West Bengal', '2016-05-11', '2016-05-13', '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(19, 2016, 'State', 'West Bengal', '2016-05-11', '2016-05-13', '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(20, 2016, 'State', 'West Bengal', '2016-05-11', '2016-05-13', '2016-05-06 07:24:43', '2016-05-06 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_15_165055_create_elections_table', 2),
('2016_04_16_073618_create_block_details_table', 3),
('2016_04_15_165548_create_constituency_details_table', 4),
('2016_04_15_165913_create_constituency_block_details_table', 5),
('2016_04_15_170030_create_parties_table', 6),
('2016_04_15_170740_create_candidate_details_table', 7),
('2016_04_15_203511_create_voter_details_table', 8),
('2016_04_16_072429_create_voting_statuses_table', 9),
('2016_04_21_100345_create_voting_statuses_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `partyid` int(11) NOT NULL,
  `partyname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partysymbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`partyid`, `partyname`, `partysymbol`, `created_at`, `updated_at`) VALUES
(1, 'BJP', 'lotus', '2016-05-06 06:27:48', '2016-05-06 06:27:48'),
(2, 'INC', 'hand', '2016-05-06 06:28:51', '2016-05-06 06:28:51'),
(3, 'BSP', 'elephant', '2016-05-06 06:29:13', '2016-05-06 06:29:13'),
(4, 'RJD', 'lantern', '2016-05-06 06:29:44', '2016-05-06 06:29:44'),
(5, 'LJP', 'hut', '2016-05-06 06:30:04', '2016-05-06 06:30:04'),
(6, 'SSP', 'fan', '2016-05-06 02:29:30', '2016-05-06 02:29:30'),
(7, 'BSSP', 'Lamb', '2016-05-06 04:50:24', '2016-05-06 04:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voter_details`
--

CREATE TABLE `voter_details` (
  `voterid` int(10) UNSIGNED NOT NULL,
  `votername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voter_details`
--

INSERT INTO `voter_details` (`voterid`, `votername`, `dob`, `state`, `block`, `created_at`, `updated_at`) VALUES
(1, 'Himanshu', '1994-02-02', 'Bihar', 'siwan', '2016-05-06 06:49:45', '2016-05-06 06:49:45'),
(2, 'Gautam', '1994-01-01', 'Bihar', 'siwan', '2016-05-06 06:50:19', '2016-05-06 06:50:19'),
(3, 'Raj', '1992-01-01', 'Bihar', 'siwan', '2016-05-06 06:50:42', '2016-05-06 06:50:42'),
(4, 'Piyush', '1990-01-01', 'Bihar', 'araria', '2016-05-06 06:51:16', '2016-05-06 06:51:16'),
(5, 'Anand', '1990-02-02', 'Bihar', 'araria', '2016-05-06 06:51:40', '2016-05-06 06:51:40'),
(6, 'Ashish', '1990-02-03', 'Bihar', 'araria', '2016-05-06 06:52:01', '2016-05-06 06:52:01'),
(7, 'Sayan', '1990-02-04', 'West Bengal', 'alipurduar', '2016-05-06 06:52:53', '2016-05-06 06:52:53'),
(8, 'Mainak', '1990-04-04', 'West Bengal', 'alipurduar', '2016-05-06 06:53:20', '2016-05-06 06:53:20'),
(9, 'Saurav', '1990-04-05', 'West Bengal', 'alipurduar', '2016-05-06 06:54:35', '2016-05-06 06:54:35'),
(10, 'Parimal', '1991-02-02', 'West Bengal', 'bankura', '2016-05-06 06:55:31', '2016-05-06 06:55:31'),
(11, 'Manish', '1980-01-01', 'West Bengal', 'bankura', '2016-05-06 06:56:00', '2016-05-06 06:56:00'),
(12, 'Vishal', '1991-04-04', 'West Bengal', 'bankura', '2016-05-06 06:56:38', '2016-05-06 06:56:38'),
(13, 'Rupesh', '1975-01-01', 'Bihar', 'islampur', '2016-05-06 06:57:40', '2016-05-06 06:57:40'),
(14, 'Patel', '1994-02-02', 'Bihar', 'islampur', '2016-05-06 06:57:57', '2016-05-06 06:57:57'),
(15, 'Sohini', '1994-11-04', 'West Bengal', 'bardhaman', '2016-05-06 06:59:40', '2016-05-06 06:59:40'),
(16, 'Shradha', '1994-03-15', 'West Bengal', 'bardhaman', '2016-05-06 07:00:56', '2016-05-06 07:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `voting_statuses`
--

CREATE TABLE `voting_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `voterid` int(10) UNSIGNED NOT NULL,
  `electionid` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `token` int(11) NOT NULL,
  `Estatus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voting_statuses`
--

INSERT INTO `voting_statuses` (`id`, `voterid`, `electionid`, `status`, `token`, `Estatus`, `created_at`, `updated_at`) VALUES
(1, 7, 14, 0, 0, 0, '2016-05-06 03:15:36', '2016-05-06 03:15:36'),
(2, 8, 14, 0, 0, 0, '2016-05-06 03:15:36', '2016-05-06 03:15:36'),
(3, 9, 14, 0, 0, 0, '2016-05-06 03:15:36', '2016-05-06 03:15:36'),
(4, 10, 14, 0, 0, 0, '2016-05-06 03:15:36', '2016-05-06 03:15:36'),
(5, 11, 14, 0, 0, 0, '2016-05-06 03:15:36', '2016-05-06 03:15:36'),
(6, 12, 14, 0, 0, 0, '2016-05-06 03:15:36', '2016-05-06 03:15:36'),
(7, 15, 14, 0, 0, 0, '2016-05-06 03:15:37', '2016-05-06 03:15:37'),
(8, 16, 14, 0, 0, 0, '2016-05-06 03:15:37', '2016-05-06 03:15:37'),
(9, 1, 15, 0, 7260, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(10, 2, 15, 0, 14177, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(11, 3, 15, 0, 19301, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(12, 4, 15, 1, 47137, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(13, 5, 15, 0, 0, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(14, 6, 15, 0, 0, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(15, 13, 15, 0, 0, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(16, 14, 15, 0, 0, 0, '2016-05-06 03:16:33', '2016-05-06 03:16:33'),
(17, 7, 16, 0, 0, 0, '2016-05-06 03:42:12', '2016-05-06 03:42:12'),
(18, 8, 16, 0, 0, 0, '2016-05-06 03:42:13', '2016-05-06 03:42:13'),
(19, 9, 16, 0, 0, 0, '2016-05-06 03:42:13', '2016-05-06 03:42:13'),
(20, 10, 16, 0, 0, 0, '2016-05-06 03:42:13', '2016-05-06 03:42:13'),
(21, 11, 16, 0, 0, 0, '2016-05-06 03:42:13', '2016-05-06 03:42:13'),
(22, 12, 16, 0, 0, 0, '2016-05-06 03:42:13', '2016-05-06 03:42:13'),
(23, 15, 16, 0, 0, 0, '2016-05-06 03:42:13', '2016-05-06 03:42:13'),
(24, 16, 16, 0, 0, 0, '2016-05-06 03:42:13', '2016-05-06 03:42:13'),
(25, 7, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(26, 8, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(27, 9, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(28, 10, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(29, 11, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(30, 12, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(31, 15, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(32, 16, 17, 0, 0, 0, '2016-05-06 04:47:44', '2016-05-06 04:47:44'),
(33, 7, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(34, 8, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(35, 9, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(36, 10, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(37, 11, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(38, 12, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(39, 15, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(40, 16, 18, 0, 0, 0, '2016-05-06 05:45:57', '2016-05-06 05:45:57'),
(41, 7, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(42, 8, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(43, 9, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(44, 10, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(45, 11, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(46, 12, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(47, 15, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(48, 16, 19, 0, 0, 0, '2016-05-06 05:47:57', '2016-05-06 05:47:57'),
(49, 7, 20, 0, 0, 0, '2016-05-06 07:24:43', '2016-05-06 07:24:43'),
(50, 8, 20, 0, 0, 0, '2016-05-06 07:24:44', '2016-05-06 07:24:44'),
(51, 9, 20, 0, 0, 0, '2016-05-06 07:24:44', '2016-05-06 07:24:44'),
(52, 10, 20, 0, 0, 0, '2016-05-06 07:24:44', '2016-05-06 07:24:44'),
(53, 11, 20, 0, 0, 0, '2016-05-06 07:24:44', '2016-05-06 07:24:44'),
(54, 12, 20, 0, 0, 0, '2016-05-06 07:24:44', '2016-05-06 07:24:44'),
(55, 15, 20, 0, 0, 0, '2016-05-06 07:24:44', '2016-05-06 07:24:44'),
(56, 16, 20, 0, 0, 0, '2016-05-06 07:24:44', '2016-05-06 07:24:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_details`
--
ALTER TABLE `block_details`
  ADD PRIMARY KEY (`blockid`),
  ADD KEY `block_details_stateid_index` (`stateid`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`electionid`,`partyid`,`constituencyid`),
  ADD KEY `candidate_details_constituencyid_foreign` (`constituencyid`),
  ADD KEY `candidate_details_partyid_foreign` (`partyid`);

--
-- Indexes for table `constituency_block_details`
--
ALTER TABLE `constituency_block_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constituency_block_details_electionid_foreign` (`electionid`),
  ADD KEY `constituency_block_details_constituencyid_foreign` (`constituencyid`);

--
-- Indexes for table `constituency_details`
--
ALTER TABLE `constituency_details`
  ADD PRIMARY KEY (`constituencyid`),
  ADD KEY `constituency_details_electionid_foreign` (`electionid`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`electionid`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`partyid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voter_details`
--
ALTER TABLE `voter_details`
  ADD PRIMARY KEY (`voterid`);

--
-- Indexes for table `voting_statuses`
--
ALTER TABLE `voting_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voting_statuses_voterid_foreign` (`voterid`),
  ADD KEY `voting_statuses_electionid_foreign` (`electionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block_details`
--
ALTER TABLE `block_details`
  MODIFY `blockid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `constituency_block_details`
--
ALTER TABLE `constituency_block_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `constituency_details`
--
ALTER TABLE `constituency_details`
  MODIFY `constituencyid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `electionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `voter_details`
--
ALTER TABLE `voter_details`
  MODIFY `voterid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `voting_statuses`
--
ALTER TABLE `voting_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD CONSTRAINT `candidate_details_constituencyid_foreign` FOREIGN KEY (`constituencyid`) REFERENCES `constituency_details` (`constituencyid`),
  ADD CONSTRAINT `candidate_details_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`),
  ADD CONSTRAINT `candidate_details_partyid_foreign` FOREIGN KEY (`partyid`) REFERENCES `parties` (`partyid`);

--
-- Constraints for table `constituency_block_details`
--
ALTER TABLE `constituency_block_details`
  ADD CONSTRAINT `constituency_block_details_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`);

--
-- Constraints for table `constituency_details`
--
ALTER TABLE `constituency_details`
  ADD CONSTRAINT `constituency_details_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`);

--
-- Constraints for table `voting_statuses`
--
ALTER TABLE `voting_statuses`
  ADD CONSTRAINT `voting_statuses_electionid_foreign` FOREIGN KEY (`electionid`) REFERENCES `elections` (`electionid`),
  ADD CONSTRAINT `voting_statuses_voterid_foreign` FOREIGN KEY (`voterid`) REFERENCES `voter_details` (`voterid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
