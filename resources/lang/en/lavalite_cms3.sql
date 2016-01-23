-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2016 at 05:59 AM
-- Server version: 5.5.43-MariaDB
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavalite_cms3`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE IF NOT EXISTS `calendars` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `location` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` tinytext NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examples`
--

CREATE TABLE IF NOT EXISTS `examples` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `file` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `files` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `range` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `search` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `week` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_picker` date NOT NULL,
  `time_picker` time NOT NULL,
  `date_time_picker` datetime NOT NULL,
  `radios` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `checkboxes` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `switch` tinyint(4) NOT NULL,
  `select` enum('option1','option2','option3') COLLATE utf8_unicode_ci NOT NULL,
  `model_select` enum('ms1','ms2','ms3') COLLATE utf8_unicode_ci NOT NULL,
  `tinyints` tinyint(1) NOT NULL,
  `smallints` smallint(6) NOT NULL,
  `mediumints` mediumint(9) NOT NULL,
  `ints` int(11) NOT NULL,
  `bigints` bigint(20) NOT NULL,
  `decimals` decimal(10,0) NOT NULL,
  `floats` float NOT NULL,
  `doubles` double NOT NULL,
  `reals` double NOT NULL,
  `bits` bit(1) NOT NULL,
  `booleans` tinyint(1) NOT NULL,
  `dates` date NOT NULL,
  `datetimes` datetime NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `times` time NOT NULL,
  `years` year(4) NOT NULL,
  `chars` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `varchars` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tinytexts` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `texts` text COLLATE utf8_unicode_ci NOT NULL,
  `mediumtexts` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `longtexts` longtext COLLATE utf8_unicode_ci NOT NULL,
  `binarys` binary(1) NOT NULL,
  `varbinarys` varbinary(1) NOT NULL,
  `tinyblobs` tinyblob NOT NULL,
  `mediumblobs` mediumblob NOT NULL,
  `blobs` blob NOT NULL,
  `longblobs` longblob NOT NULL,
  `enums` enum('1','2') COLLATE utf8_unicode_ci NOT NULL,
  `sets` set('3','4') COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `examples`
--

INSERT INTO `examples` (`id`, `name`, `email`, `color`, `date`, `datetime`, `file`, `files`, `image`, `images`, `month`, `password`, `range`, `search`, `tel`, `time`, `url`, `week`, `date_picker`, `time_picker`, `date_time_picker`, `radios`, `checkboxes`, `switch`, `select`, `model_select`, `tinyints`, `smallints`, `mediumints`, `ints`, `bigints`, `decimals`, `floats`, `doubles`, `reals`, `bits`, `booleans`, `dates`, `datetimes`, `timestamps`, `times`, `years`, `chars`, `varchars`, `tinytexts`, `texts`, `mediumtexts`, `longtexts`, `binarys`, `varbinarys`, `tinyblobs`, `mediumblobs`, `blobs`, `longblobs`, `enums`, `sets`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'qwewqeqqqsdasd', '', '', '0000-00-00', '0000-00-00 00:00:00', '', 'Array', '', 'Array', '', '', '50', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '2', 'a:2:{s:1:"b";s:1:"1";s:1:"e";s:1:"1";}', 0, '', 'ms1', 0, 0, 0, 0, 0, '0', 0, 0, 0, b'0', 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', 0000, '', '', '', '', '', '', 0x00, '', '', '', '', '', '1', '', NULL, '2014-07-30 17:51:38', '2014-08-20 23:51:40'),
(2, 'qwewqe', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '', 0, '', '', 0, 0, 0, 0, 0, '0', 0, 0, 0, b'0', 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', 0000, '', '', '', '', '', '', 0x00, '', '', '', '', '', '1', '', '2014-07-30 17:55:03', '2014-07-30 17:52:02', '2014-07-30 17:55:03'),
(4, '', '', '', '0000-00-00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '', '', 0, 'option1', 'ms1', 0, 0, 0, 0, 0, '0', 0, 0, 0, b'0', 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '00:00:00', 0000, '', '', '', '', '', '', 0x00, '', '', '', '', '', '1', '', NULL, '2015-08-22 08:27:00', '2015-08-22 08:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(11) NOT NULL,
  `key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `open` enum('New','Same') COLLATE utf8_unicode_ci DEFAULT 'Same',
  `has_sub` tinyint(1) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `key`, `url`, `icon`, `permission`, `name`, `description`, `open`, `has_sub`, `order`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'admin', 'admin/', NULL, NULL, 'Admin', NULL, NULL, 1, 1, 1, NULL, NULL, NULL),
(2, 0, 'main', '/', NULL, NULL, 'Main Menu', 'Website main menu', NULL, 1, 0, 1, NULL, NULL, NULL),
(3, 0, 'bottom', '/', NULL, NULL, 'Bottom', 'Bottom menu', NULL, 1, 2, 1, NULL, NULL, NULL),
(4, 1, 'content', '/admin/page/page', 'fa fa-book', NULL, 'Content', '', NULL, 1, 1, 1, NULL, NULL, '2015-11-14 04:42:07'),
(5, 4, '', '/admin/page/page', 'fa fa-book', NULL, 'Pages', '', NULL, 0, 0, 1, NULL, NULL, '2015-11-11 07:43:30'),
(7, 4, NULL, '/admin/menu', 'fa fa-bars', NULL, 'Menu', NULL, NULL, 0, 1, 1, NULL, NULL, '2015-09-15 03:14:31'),
(8, 2, NULL, '/', NULL, NULL, 'Home', NULL, NULL, 0, 0, 1, NULL, NULL, NULL),
(9, 2, NULL, '/about-us.html', NULL, NULL, 'About Us', NULL, NULL, 0, 1, 1, NULL, NULL, '2015-11-14 05:26:57'),
(10, 2, NULL, '/contact.html', NULL, NULL, 'Contact Us', NULL, NULL, 0, 3, 1, NULL, NULL, '2015-12-16 01:32:14'),
(11, 1, '', 'admin', 'fa fa-dashboard', NULL, 'Dashboard', '', NULL, 0, 0, 1, NULL, NULL, '2015-11-14 05:26:04'),
(12, 1, NULL, 'admin/user/user', 'fa fa-users', NULL, 'Users', NULL, NULL, 1, 2, 1, NULL, NULL, '2015-09-15 05:09:05'),
(13, 12, '', 'admin/user/user', 'fa fa-users', NULL, 'Users', '', NULL, 0, 0, 1, NULL, NULL, '2015-12-16 01:37:54'),
(14, 12, NULL, '/admin/user/role', NULL, NULL, 'Roles', NULL, NULL, 0, 1, 1, NULL, NULL, '2015-09-15 03:15:54'),
(15, 12, NULL, '/admin/user/permission', NULL, NULL, 'Permissions', NULL, NULL, 0, 2, 1, NULL, NULL, '2015-09-15 05:09:05'),
(16, 1, '', 'admin/package/package', '', NULL, 'Package', '', 'Same', 0, 3, 1, '2015-09-15 07:07:21', '2015-09-15 03:16:19', '2015-09-15 07:07:21'),
(17, 2, '', 'sadsadsa', '', NULL, 'asdsad', '', '', 0, 3, 1, '2015-12-16 01:30:53', '2015-11-14 05:26:16', '2015-12-16 01:30:53'),
(18, 2, '', 'gfdgdgdgdfgfdg', '', NULL, 'fdgfddfgf', '', '', 0, 2, 1, '2015-12-16 01:32:31', '2015-12-16 01:32:08', '2015-12-16 01:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `read` enum('Yes','No') NOT NULL DEFAULT 'No',
  `type` enum('System','Admin','User') NOT NULL DEFAULT 'System',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_05_100001_create_user_table', 1),
('2015_01_05_100010_create_password_resets_table', 1),
('2015_02_23_161101_create_defender_roles_table', 1),
('2015_02_23_161102_create_defender_permissions_table', 1),
('2015_02_23_161103_create_defender_role_user_table', 1),
('2015_02_23_161104_create_defender_permission_user_table', 1),
('2015_02_23_161105_create_defender_permission_role_table', 1),
('2015_08_05_100011_create_pages_table', 1),
('2015_08_05_100012_create_menus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `banner` mediumtext COLLATE utf8_unicode_ci,
  `view` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'page',
  `compiler` enum('php','blade','twif','none') COLLATE utf8_unicode_ci DEFAULT 'none',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `upload_folder` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading` text COLLATE utf8_unicode_ci,
  `title` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `keyword` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `images` text COLLATE utf8_unicode_ci,
  `abstract` text COLLATE utf8_unicode_ci,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `order`, `banner`, `view`, `compiler`, `status`, `upload_folder`, `heading`, `title`, `content`, `keyword`, `description`, `images`, `abstract`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 0, NULL, 'page', NULL, 1, 'uploads/pages/2015/10/30/120754586', 'Home', 'Homepage title', 'Home Pageddasdasdasd', '', '', '[]', NULL, 0, NULL, NULL, '2015-12-10 07:31:36'),
(2, 'About Us', 'about-us', 0, NULL, 'page', NULL, 1, NULL, 'About Us', 'About Us', 'About Us', NULL, NULL, NULL, NULL, 0, '2015-10-30 22:38:19', NULL, '2015-10-30 22:38:19'),
(3, 'Contact Us', 'contact', 0, NULL, 'page', NULL, 1, 'uploads/pages/2015/11/14/102850880', 'Contact Us', 'Contact Us', '<p><br></p>', '', '', '[]', NULL, 0, NULL, NULL, '2015-11-14 04:58:51'),
(4, 'Page Not foundh', '404', 0, NULL, 'page', NULL, 1, 'uploads/pages/2015/11/14/103217412', 'Page Not found', 'Page Not found', '{"en":"fdsfdsffzxczxczxczxczxcdxsdsadsadsadaddsfsdfdsffasdsadasdasdasdsadaaaa"}', 'xzczxcxz', 'cxzczxczxc', '[]', NULL, 0, NULL, NULL, '2015-12-12 05:13:50'),
(5, 'asdsaddddd', 'asdsa', 50, NULL, 'page', '', 0, 'uploads/pages/2015/10/30/112133909', 'asdsa', 'asdsa', 'dasdasdasd', '', '', '[]', NULL, 0, '2015-12-10 07:06:11', '2015-10-30 05:53:10', '2015-12-10 07:06:11'),
(6, 'sdfdsfsdfdsfsdfsdf', 'sdfdsf', 50, NULL, 'page', '', 0, 'uploads/pages/2015/10/30/120726734', 'sdfdsf', 'sdfdsf', 'sfsdfsdfdsf', '', '', '[]', NULL, 0, '2015-10-30 06:37:41', '2015-10-30 06:37:29', '2015-10-30 06:37:41'),
(8, 'asdsadasdsssssss', 'asdsad', 50, NULL, 'page', '', 0, 'uploads/pages/2015/11/02/050719541', 'asdsad', 'asdsad', 'sadasdsad', '', '', '[]', NULL, 0, '2015-11-01 23:37:37', '2015-11-01 23:37:22', '2015-11-01 23:37:37'),
(11, 'asdsdfsdfdsfsdf', 'asd', 50, NULL, 'page', '', 0, 'uploads/pages/2015/12/09/130444107', 'asd', 'asd', 'sadsadasdasdsdfdsfdsf', '', '', '[]', NULL, 0, '2015-12-09 08:21:51', '2015-12-09 07:34:53', '2015-12-09 08:21:51'),
(13, 'asdas', '', 50, NULL, 'page', 'none', 0, 'uploads/pages/2015/12/10/130142892', 'asdas', 'asdas', 'dasdasdasdasdasdasd', '', '', NULL, NULL, 0, '2015-12-10 07:31:51', '2015-12-10 07:31:45', '2015-12-10 07:31:51'),
(14, 'sdfdsfsd', '', 50, NULL, 'page', 'none', 0, 'uploads/pages/2015/12/10/130813868', 'sdfdsfsd', 'sdfdsfsd', 'fsdfsdfsdfsdff', '', '', NULL, NULL, 0, '2015-12-10 07:38:21', '2015-12-10 07:38:16', '2015-12-10 07:38:21'),
(16, 'fghgf', '', 50, NULL, 'page', 'none', 0, 'uploads/pages/2015/12/10/134940522', 'fghgf', 'fghgf', 'hfggfhfghh', '', '', NULL, NULL, 0, '2015-12-10 08:20:52', '2015-12-10 08:19:43', '2015-12-10 08:20:52'),
(17, 'xcvxcv', '', 50, NULL, 'page', 'none', 0, 'uploads/pages/2015/12/11/033427441', 'xcvxcv', 'xcvxcv', 'cxvxcvxcvxcvxcvcxvcx', '', '', NULL, NULL, 0, '2015-12-10 22:05:42', '2015-12-10 22:04:32', '2015-12-10 22:05:42'),
(18, 'saasdasdasd', 'sa', 50, NULL, 'page', '', 0, 'uploads/pages/2015/12/11/033512266', 'sa', 'sa', 'dsadasdasdasd', '', '', NULL, NULL, 0, '2015-12-11 01:40:28', '2015-12-10 22:05:15', '2015-12-11 01:40:28'),
(19, '{"es":"Es - names","en":"En - namez"}', 'retertertert', 50, NULL, 'page', '', 0, 'uploads/pages/2015/12/12/104503642', 'retertertert', 'retertertert', '{"en":"En Contentz","es":"Es contents"}', '', '', NULL, NULL, 0, NULL, '2015-12-12 05:15:09', '2015-12-14 06:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `readable_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `readable_name`, `created_at`, `updated_at`) VALUES
(1, 'package.page.view', 'View Page', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'package.page.create', 'Create Page', '0000-00-00 00:00:00', '2015-11-04 06:03:22'),
(3, 'package.page.edit', 'Update Page', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'package.page.delete', 'Delete Page', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'superuser', '{"package.page.create":"1","package.page.delete":"1"}', '0000-00-00 00:00:00', '2015-11-04 05:09:31'),
(2, 'user', '{"package.page.create":"1","package.page.view":"1"}', '0000-00-00 00:00:00', '2015-11-05 06:39:40'),
(4, 'manager', '{"package.page.create":"1","package.page.edit":"1"}', '2015-11-04 04:10:19', '2015-11-09 07:43:08'),
(5, 'admin', '', '2015-11-09 07:41:52', '2015-11-09 07:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(2, 4),
(19, 2),
(2, 1),
(24, 2),
(21, 1),
(21, 2),
(1, 5),
(26, 2),
(27, 4),
(28, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `skey` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `type` enum('System','Default','User') NOT NULL DEFAULT 'Default',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `skey`, `name`, `value`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'sada', 'asdzxczxczxczxczxcc', 'asd', 'Default', '2015-10-01 06:29:43', '2015-10-01 00:59:43', '2015-10-01 00:59:43'),
(2, 0, 'zX', 'zX', 'zXZX', 'Default', '2015-09-09 13:30:14', '2015-09-09 08:00:14', '2015-09-09 08:00:14'),
(3, 0, 'asdasdsss', 'asd', 'asdasd', 'Default', '2015-10-01 06:29:47', '2015-10-01 00:59:47', '2015-10-01 00:59:47'),
(4, 0, 'zxcxzczxc', 'zxczxc', 'zxc', 'Default', '2015-10-01 06:29:51', '2015-10-01 00:59:51', '2015-10-01 00:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `category` varchar(45) NOT NULL,
  `task` tinytext NOT NULL,
  `time_required` time NOT NULL,
  `time_taken` time NOT NULL,
  `file` text NOT NULL,
  `proprity` enum('low','medium','high','critical') NOT NULL,
  `status` enum('to_do','in_progress','completed') NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `parent_id`, `user_id`, `start`, `end`, `category`, `task`, `time_required`, `time_taken`, `file`, `proprity`, `status`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'sss', '00:00:00', '00:00:00', '', '', '', 0, '2015-09-05 01:19:06', '2015-09-05 01:19:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `reporting_to` int(11) DEFAULT '0',
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `permissions` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` enum('','male','female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_login` text COLLATE utf8_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reporting_to`, `name`, `email`, `password`, `active`, `permissions`, `remember_token`, `sex`, `dob`, `designation`, `mobile`, `phone`, `address`, `street`, `city`, `district`, `state`, `country`, `photo`, `web`, `social_login`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Super User', 'superuser@superuser.com', '$2y$10$3ceUn0PhKBTjVLH/n881f.VfmfclfLCDNx9WV.B6CEM8fXnBIcnrq', 1, '', 'lfMXcqjGsGtjetcMlc57yX9ujhnJOP5zTwPOxjUgI9D4GJbzDDLaLd5aqTpB', 'male', '2014-05-15', 'Super User', 'aas', '1', '', '3dsasd', '4ssadsad', '5ssad', '6saaaa', 7, '', 'http://www.ggogle.com', NULL, NULL, '2014-05-12 05:03:41', '2015-12-16 00:10:02'),
(2, 0, 'George John', 'george@renfos.com', '$2y$10$bKwW6PzSa1GDOeUTqtTaLOVMutZ12ObeslBfEXPx2pJAL/2B8aB06', NULL, '{"package.":"1","package.page.create":"1","package.page.view":"1"}', 'v6iyvFnqp5aSALZVHkQqR3QE8ENBYb7ctnOT6YOT4ICAUVXDTmPn75pB0u1E', NULL, '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-24 00:52:00', '2015-11-05 06:39:01'),
(19, 0, 'Test User', 'user@user.com', '$2y$10$d9A5bXogEfXq4FThralFdePRU8xe3QcSo0gpJuoQzyXgnwR3Y/8i.', NULL, '{"package.page.create":"1"}', 'DNShJTmECYDCpHzjVCOHkiFlbNkLPyHUKABmFmJzZQdnoZ6GFJdodgZehWDA', NULL, '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-04 05:14:17', '2015-12-02 23:15:29'),
(20, 0, 'Test ', 'test@test.com', '$2y$10$DNDlrF9aW/fRZqe8OY98..60Ycv6JxHA0qlfwGt6jhADn2M/1vxCK', NULL, '', 'JIaXalACQi3WMTWi87uy5Vg3Wgc6YGVkKyhZv1XgVgVhwh0ROx8bGWYeOTkQ', NULL, '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-05 06:39:11', '2015-11-04 06:10:05', '2015-11-05 06:39:11'),
(21, 0, 'George', 'user1@usaer.com', '$2y$10$G2IdRbQrOthqAnS0tTBPU.pBAhQe3NyRny9gxppNEKa00R9WRWuM.', NULL, '', NULL, NULL, '0000-00-00', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-14 04:04:15', '2015-11-13 01:18:17', '2015-11-14 04:04:15'),
(22, 0, 'User', 'user5@user.com', '$2y$10$LObcdP.1Hu5OAgAxKc.9ZOIZruvNywYJ6TX3Yit7MiVCvnXJp7zDS', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-13 01:38:06', '2015-11-13 01:38:06'),
(23, 0, 'User', 'user6@user.com', '$2y$10$S26P9cV2NtFyvX8qVabgXue7cEabCULNC/6mLkdrHa.S5TSa1NUkm', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-13 01:39:20', '2015-11-13 01:39:20'),
(24, 0, 'wsewqe', 'user45@user.com', '$2y$10$BC7oPWK9qSzM2IX.BkLn.e8IXdSIv12qA5Vn3qAs7RIw7OSbjflda', 0, '', 'R91JKHWD10vphZt4RkWU9zgoNp2AiTwGXRjsY6OXW8l9l3ieolW5HYc1vGia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-14 05:27:14', '2015-11-13 03:18:39', '2015-11-14 05:27:14'),
(25, 0, 'Test', 'user@test.com', '$2y$10$kZov0j8JpnJyzG26Xv24sObs6/j70A5ImODIdk9XVN0ph2Jje/C1.', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-02 07:20:25', '2015-12-02 07:20:25'),
(26, 0, 'Test', 'user1@test.com', '$2y$10$ggyuOw5gNfpTXAHcq4qqKeijG/M/ZIPpWGoZ5j4txGE0yrJzpA5Mi', 0, '', 'FzocI4VrQKMrqUdtgxNdNwUAwXNpsesELAhMa9hwhh5mFLOMVdKOApf3SX9f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-02 07:22:16', '2015-12-02 07:22:23'),
(27, 0, 'Test', 'user2@test.com', '$2y$10$kEXs0NoiwHgy6Ye56lVkZOM1XljllMCTSUC3hGWRzm069CXzlb.rq', 0, '', 'ffRzHcW75uQYzgMdprZsb3J7oLl2KKQ3e9lvhaxVW9mfBCaH0ipLPFu8qbMJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-02 07:23:02', '2015-12-02 07:23:08'),
(28, 0, 'Test', 'user12@test.com', '$2y$10$jrLEtP4NI7/8zx993ojwReiuGwmvqWufIo84BcqPRM3ybM9Wlwz8C', 0, '', 'nrMEGlnRfODWA0AkQJkHpUG5Ruf2SEUSRSltSLzs9HNImrnN1IrRbcywSStO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-02 23:15:47', '2015-12-02 23:15:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examples`
--
ALTER TABLE `examples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_index` (`user_id`),
  ADD KEY `role_user_role_id_index` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `examples`
--
ALTER TABLE `examples`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
