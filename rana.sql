-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2023 at 05:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rana`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name_fr`, `slug`, `created_at`, `updated_at`, `name_ar`, `name_en`) VALUES
(1, NULL, 1, 'Détergent liquide', 'detergent-liquide', '2023-02-01 08:11:23', '2023-03-03 10:24:37', 'منظف سائل', 'Liquid Laundry Detergent '),
(2, NULL, 1, 'Adoucissant', 'adoucissant', '2023-02-01 08:11:23', '2023-03-03 10:25:15', 'منعم الملابس', 'Fabric softener'),
(3, NULL, 1, 'Nettoyant Sol', 'nettoyant-sol', '2023-03-03 10:25:28', '2023-03-03 10:25:28', 'منظف الأرضيات', 'Floor Cleaner '),
(4, NULL, 1, 'Eau de Javel', 'eau-de-javel', '2023-03-03 10:25:49', '2023-03-03 10:25:49', 'ماء جافيل', 'Bleach'),
(5, NULL, 1, 'Liquide Vaisselle', 'liquide-vaisselle', '2023-03-03 10:26:04', '2023-03-03 10:26:04', 'سائل غسل الاواني', 'Dishwashing Liquid'),
(6, NULL, 1, 'Dégraissant', 'degraissant', '2023-03-03 10:26:18', '2023-03-03 10:26:18', 'مزيل الدهون', 'Kitchen Degreaser'),
(7, NULL, 1, 'Lave Vitres', 'lave-vitres', '2023-03-03 10:26:29', '2023-03-03 10:26:29', 'منظف الزجاج', 'Glass cleaner'),
(8, NULL, 1, 'Nettoyant WC', 'nettoyant-wc', '2023-03-03 10:26:40', '2023-03-03 10:26:40', 'منظف المرحاض', 'WC Cleaner Gel'),
(9, NULL, 1, 'Savon Liquide', 'savon-liquide', '2023-03-03 10:26:55', '2023-03-03 10:26:55', 'الصابون السائل', 'Liquid Soap'),
(10, NULL, 1, 'Parfum d\'Ambiance', 'parfum-d-ambiance', '2023-03-03 10:27:21', '2023-03-03 10:27:21', 'معطر الجو', 'Air freshener');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tele` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `prenom`, `email`, `tele`, `adresse`, `message`, `created_at`, `updated_at`) VALUES
(3, '251', 'Deserunt veritatis vero illo.', 'your.email+fakedata36144@gmail.com', '21321213213', '2979 Watson Skyway', 'saasdas', '2023-02-27 13:46:39', '2023-02-27 13:46:39'),
(5, 'asdas', 'asdasd', 'admin@admin.com', '08702342323', 'saasd', 'sads', '2023-03-10 13:52:03', '2023-03-10 13:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name_fr\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name_fr\"}}', 7),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 8),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'text_area', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'nom', 'text', 'Nom', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'prenom', 'text', 'Prenom', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'tele', 'text', 'Tele', 0, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'adresse', 'text', 'Adresse', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'message', 'text_area', 'Message', 0, 1, 1, 1, 1, 1, '{}', 7),
(63, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 9, 'category_id', 'text', 'Catégorie', 0, 0, 0, 1, 1, 1, '{}', 2),
(65, 9, 'user_id', 'text', 'Utilisateur', 0, 0, 0, 0, 0, 0, '{}', 4),
(69, 9, 'price', 'number', 'Prix', 0, 1, 1, 1, 1, 1, '{}', 26),
(71, 9, 'stars', 'select_dropdown', 'Numbre d\'Étoile', 0, 0, 1, 1, 1, 1, '{\"default\":\"5\",\"options\":{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"5\":\"5\"}}', 27),
(72, 9, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required_if:id,null\",\"messages\":{\"required\":\"The Image field is required.\"}}}', 28),
(73, 9, 'slug', 'text', 'Slug', 0, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 29),
(74, 9, 'meta_description', 'text_area', 'Meta Description', 0, 0, 0, 0, 0, 1, '{}', 30),
(75, 9, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 0, 0, 0, 1, '{}', 31),
(76, 9, 'status', 'select_dropdown', 'Status', 0, 0, 0, 0, 0, 1, '{}', 32),
(77, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 33),
(78, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 34),
(80, 9, 'product_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name_fr\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 3),
(84, 4, 'name_fr', 'text', 'Name Fr', 1, 1, 1, 1, 1, 1, '{}', 4),
(85, 4, 'name_ar', 'text', 'Name Ar', 0, 1, 1, 1, 1, 1, '{}', 5),
(86, 4, 'name_en', 'text', 'Name En', 0, 1, 1, 1, 1, 1, '{}', 6),
(87, 9, 'title_en', 'text', 'Title En', 0, 0, 1, 1, 1, 1, '{}', 6),
(88, 9, 'title_ar', 'text', 'Title Ar', 0, 0, 1, 1, 1, 1, '{}', 7),
(89, 9, 'description_en', 'text_area', 'Description En', 0, 0, 1, 1, 1, 1, '{}', 9),
(90, 9, 'description_ar', 'text_area', 'Description Ar', 0, 0, 1, 1, 1, 1, '{}', 10),
(91, 9, 'size_en', 'text', 'Size En', 0, 0, 1, 1, 1, 1, '{}', 12),
(92, 9, 'size_ar', 'text', 'Size Ar', 0, 0, 1, 1, 1, 1, '{}', 13),
(93, 9, 'parfums_en', 'text', 'Parfums En', 0, 0, 1, 1, 1, 1, '{}', 24),
(94, 9, 'parfums_ar', 'text', 'Parfums Ar', 0, 0, 1, 1, 1, 1, '{}', 25),
(95, 9, 'mode_emploi_en', 'text', 'Mode Emploi En', 0, 0, 1, 1, 1, 1, '{}', 18),
(96, 9, 'mode_emploi_ar', 'text', 'Mode Emploi Ar', 0, 0, 1, 1, 1, 1, '{}', 19),
(97, 9, 'precaution_emploi_en', 'text', 'Precaution Emploi En', 0, 0, 1, 1, 1, 1, '{}', 21),
(98, 9, 'precaution_emploi_ar', 'text', 'Precaution Emploi Ar', 0, 0, 1, 1, 1, 1, '{}', 22),
(99, 9, 'title_fr', 'text', 'Title Fr', 0, 0, 1, 1, 1, 1, '{}', 5),
(100, 9, 'description_fr', 'text_area', 'Description Fr', 0, 0, 1, 1, 1, 1, '{}', 8),
(101, 9, 'size_fr', 'text', 'Size Fr', 0, 0, 1, 1, 1, 1, '{}', 11),
(102, 9, 'uses_fr', 'text', 'Uses Fr', 0, 0, 1, 1, 1, 1, '{}', 14),
(103, 9, 'parfums_fr', 'text', 'Parfums Fr', 0, 1, 1, 1, 1, 1, '{}', 23),
(104, 9, 'mode_emploi_fr', 'text', 'Mode Emploi Fr', 0, 1, 1, 1, 1, 1, '{}', 17),
(105, 9, 'precaution_emploi_fr', 'text', 'Precaution Emploi Fr', 0, 1, 1, 1, 1, 1, '{}', 20),
(106, 9, 'uses_en', 'text', 'Uses En', 0, 0, 1, 1, 1, 1, '{}', 15),
(107, 9, 'uses_ar', 'text', 'Uses Ar', 0, 1, 1, 1, 1, 1, '{}', 16);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-02-01 08:11:23', '2023-03-27 13:33:18'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-02-01 08:11:23', '2023-03-21 14:35:42'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(7, 'contacts', 'contacts', 'Contact', 'Contacts', 'voyager-chat', 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-02-27 10:25:44', '2023-02-27 10:26:53'),
(9, 'products', 'products', 'Product', 'Products', NULL, 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-03-03 09:58:40', '2023-03-27 14:22:58');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-02-01 08:11:22', '2023-02-01 08:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-02-01 08:11:22', '2023-02-01 08:11:22', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2023-02-01 08:11:22', '2023-03-03 10:14:27', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2023-02-01 08:11:22', '2023-02-01 08:11:22', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2023-02-01 08:11:22', '2023-02-01 08:11:22', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2023-02-01 08:11:22', '2023-03-03 10:14:21', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2023-02-01 08:11:22', '2023-02-27 10:27:19', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2023-02-01 08:11:22', '2023-02-27 10:27:19', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2023-02-01 08:11:22', '2023-02-27 10:27:19', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2023-02-01 08:11:22', '2023-02-27 10:27:19', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 11, '2023-02-01 08:11:22', '2023-03-03 10:14:21', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 9, '2023-02-01 08:11:23', '2023-03-03 10:14:21', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2023-02-01 08:11:24', '2023-03-03 10:14:21', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 8, '2023-02-01 08:11:24', '2023-03-03 10:14:21', 'voyager.pages.index', NULL),
(14, 1, 'Contacts', '', '_self', 'voyager-chat', '#000000', NULL, 7, '2023-02-27 10:25:44', '2023-03-03 10:14:21', 'voyager.contacts.index', 'null'),
(15, 1, 'Products', '', '_self', 'voyager-shop', '#000000', NULL, 4, '2023-03-03 09:58:40', '2023-03-03 10:15:06', 'voyager.products.index', 'null');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2023-02-01 08:11:24', '2023-02-01 08:11:24');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(2, 'browse_bread', NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(3, 'browse_database', NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(4, 'browse_media', NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(5, 'browse_compass', NULL, '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(6, 'browse_menus', 'menus', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(7, 'read_menus', 'menus', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(8, 'edit_menus', 'menus', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(9, 'add_menus', 'menus', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(10, 'delete_menus', 'menus', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(11, 'browse_roles', 'roles', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(12, 'read_roles', 'roles', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(13, 'edit_roles', 'roles', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(14, 'add_roles', 'roles', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(15, 'delete_roles', 'roles', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(16, 'browse_users', 'users', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(17, 'read_users', 'users', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(18, 'edit_users', 'users', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(19, 'add_users', 'users', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(20, 'delete_users', 'users', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(21, 'browse_settings', 'settings', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(22, 'read_settings', 'settings', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(23, 'edit_settings', 'settings', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(24, 'add_settings', 'settings', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(25, 'delete_settings', 'settings', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(26, 'browse_categories', 'categories', '2023-02-01 08:11:23', '2023-02-01 08:11:23'),
(27, 'read_categories', 'categories', '2023-02-01 08:11:23', '2023-02-01 08:11:23'),
(28, 'edit_categories', 'categories', '2023-02-01 08:11:23', '2023-02-01 08:11:23'),
(29, 'add_categories', 'categories', '2023-02-01 08:11:23', '2023-02-01 08:11:23'),
(30, 'delete_categories', 'categories', '2023-02-01 08:11:23', '2023-02-01 08:11:23'),
(31, 'browse_posts', 'posts', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(32, 'read_posts', 'posts', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(33, 'edit_posts', 'posts', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(34, 'add_posts', 'posts', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(35, 'delete_posts', 'posts', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(36, 'browse_pages', 'pages', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(37, 'read_pages', 'pages', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(38, 'edit_pages', 'pages', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(39, 'add_pages', 'pages', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(40, 'delete_pages', 'pages', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(41, 'browse_contacts', 'contacts', '2023-02-27 10:25:44', '2023-02-27 10:25:44'),
(42, 'read_contacts', 'contacts', '2023-02-27 10:25:44', '2023-02-27 10:25:44'),
(43, 'edit_contacts', 'contacts', '2023-02-27 10:25:44', '2023-02-27 10:25:44'),
(44, 'add_contacts', 'contacts', '2023-02-27 10:25:44', '2023-02-27 10:25:44'),
(45, 'delete_contacts', 'contacts', '2023-02-27 10:25:44', '2023-02-27 10:25:44'),
(46, 'browse_products', 'products', '2023-03-03 09:58:40', '2023-03-03 09:58:40'),
(47, 'read_products', 'products', '2023-03-03 09:58:40', '2023-03-03 09:58:40'),
(48, 'edit_products', 'products', '2023-03-03 09:58:40', '2023-03-03 09:58:40'),
(49, 'add_products', 'products', '2023-03-03 09:58:40', '2023-03-03 09:58:40'),
(50, 'delete_products', 'products', '2023-03-03 09:58:40', '2023-03-03 09:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. \r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-02-01 08:11:24', '2023-03-21 14:35:59'),
(2, 1, 1, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. \r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-02-01 08:11:24', '2023-03-21 14:36:06'),
(3, 1, 1, 'Latest Post', NULL, 'This is the excerpt for the latest post', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. \r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-02-01 08:11:24', '2023-03-21 14:36:13'),
(4, 1, 1, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. \r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.\r\n\r\nIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2023-02-01 08:11:24', '2023-03-21 14:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_fr` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uses_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` int(11) DEFAULT NULL,
  `meta_keywords` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parfums_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_emploi_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precaution_emploi_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parfums_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parfums_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_emploi_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_emploi_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precaution_emploi_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precaution_emploi_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uses_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uses_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `user_id`, `title_fr`, `description_fr`, `size_fr`, `price`, `uses_fr`, `stars`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`, `parfums_fr`, `mode_emploi_fr`, `precaution_emploi_fr`, `title_en`, `title_ar`, `description_en`, `description_ar`, `size_en`, `size_ar`, `parfums_en`, `parfums_ar`, `mode_emploi_en`, `mode_emploi_ar`, `precaution_emploi_en`, `precaution_emploi_ar`, `uses_en`, `uses_ar`) VALUES
(1, 3, NULL, 'Nettoyant Sol Jaim', 'Le Nettoyant de Sol Jaim est un produit d\'entretien liquide parfait pour le nettoyage régulier des surfaces de sol. Non seulement il désinfecte et nettoie efficacement, mais laisse votre sol brillant en un seul passage. Ce produit est doté d\'un parfum agréable qui procure une sensation de fraîcheur durable.', '1L', '20', 'Brillance & propreté', 5, 'products\\March2023\\qHIGecJMkj8t7avl66QG.png', 'netoyant-sol-jaim-jaune', NULL, NULL, NULL, '2023-03-03 13:27:00', '2023-03-24 14:25:59', 'Roses de M’Gouna – Lavande – Aoud – Citron', 'Versez 2 bouchons dans 5 litres d’eau. Nettoyer le sol avec un balai éponge ou serpillère. Laissez sécher sans rincer.', 'Tenir hors portée des enfants, Éviter le contact avec les yeux, en cas de contact avec les yeux, laver immédiatement avec de l’eau. À conserver à l’abri du soleil et de la chaleur.', 'Jaim Floor Cleaner', 'منظف الأرضيات Jaim ', 'Jaim Floor Cleaner is a perfect maintenance product for regular cleaning of floor surfaces. It not only disinfects and cleans effectively, but leaves your floor shiny in just one pass. This product has a pleasant fragrance that provides a long-lasting feeling of freshness.', 'منظف الأرضيات Jaim السائل مثالي للعناية بأسطح الأرضيات. فهو لا يقوم فقط بالتطهير والتنظيف بشكل فعال ، ولكنه يترك أرضيتك لامعة بلمسة واحدة. كما يحتوي على رائحة لطيفة توفر شعورا دائما بالانتعاش.', '1L', '1 لتر', 'Roses of M\'Gouna - Lavender– Oud – Lemon', 'ورد مڭجونا ، خزامى، عود، حامض.', 'Pour 2 capfuls into 5 liters of water. Clean the floor with a mop. Let dry without rinsing.', 'منظف الأرضيات Jaim السائل مثالي للعناية بأسطح الأرضيات. فهو لا يقوم فقط بالتطهير والتنظيف بشكل فعال ، ولكنه يترك أرضيتك لامعة بلمسة واحدة. كما يحتوي على رائحة لطيفة توفر شعورا دائما بالانتعاش.', 'Keep out of reach of children, Avoid contact with eyes, in case of contact with eyes, wash immediately with water. Store away from direct sunlight and heat.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين ، في حالة ملامسة العينين ، اغسلها بالماء على الفور. يخزن بعيدا عن الشمس والحرارة.', 'Shine & Cleanliness', 'لمعان ونظافة'),
(2, 3, NULL, 'Nettoyant Sol Jaim', 'Le Nettoyant de Sol Jaim est un produit d\'entretien liquide parfait pour le nettoyage régulier des surfaces de sol. Non seulement il désinfecte et nettoie efficacement, mais laisse votre sol brillant en un seul passage. Ce produit est doté d\'un parfum agréable qui procure une sensation de fraîcheur durable.', '1L', '20', 'Brillance & propreté', 5, 'products\\March2023\\X9hpPscN0xoY5UyRvJ6H.png', 'nettoyant-sol-jaim-violet', NULL, NULL, NULL, '2023-03-03 13:56:00', '2023-03-24 14:26:02', 'Roses de M’Gouna – Lavande – Aoud – Citron', 'Versez 2 bouchons dans 5 litres d’eau. Nettoyer le sol avec un balai éponge ou serpillère. Laissez sécher sans rincer.', 'Tenir hors portée des enfants, Éviter le contact avec les yeux, en cas de contact avec les yeux, laver immédiatement avec de l’eau. À conserver à l’abri du soleil et de la chaleur.', 'Jaim Floor Cleaner', 'منظف الأرضيات Jaim ', 'Jaim Floor Cleaner is a perfect maintenance product for regular cleaning of floor surfaces. It not only disinfects and cleans effectively, but leaves your floor shiny in just one pass. This product has a pleasant fragrance that provides a long-lasting feeling of freshness.', 'منظف الأرضيات Jaim السائل مثالي للعناية بأسطح الأرضيات. فهو لا يقوم فقط بالتطهير والتنظيف بشكل فعال ، ولكنه يترك أرضيتك لامعة بلمسة واحدة. كما يحتوي على رائحة لطيفة توفر شعورا دائما بالانتعاش.', '1L', '1 لتر', 'Roses of M\'Gouna - Lavender– Oud – Lemon', 'ورد مڭجونا ، خزامى، عود، حامض.', 'Pour 2 capfuls into 5 liters of water. Clean the floor with a mop. Let dry without rinsing.', 'منظف الأرضيات Jaim السائل مثالي للعناية بأسطح الأرضيات. فهو لا يقوم فقط بالتطهير والتنظيف بشكل فعال ، ولكنه يترك أرضيتك لامعة بلمسة واحدة. كما يحتوي على رائحة لطيفة توفر شعورا دائما بالانتعاش.', 'Keep out of reach of children, Avoid contact with eyes, in case of contact with eyes, wash immediately with water. Store away from direct sunlight and heat.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين ، في حالة ملامسة العينين ، اغسلها بالماء على الفور. يخزن بعيدا عن الشمس والحرارة.', 'Shine & Cleanliness', 'لمعان ونظافة'),
(3, 3, NULL, 'Nettoyant Sol Jaim', 'Le Nettoyant de Sol Jaim est un produit d\'entretien liquide parfait pour le nettoyage régulier des surfaces de sol. Non seulement il désinfecte et nettoie efficacement, mais laisse votre sol brillant en un seul passage. Ce produit est doté d\'un parfum agréable qui procure une sensation de fraîcheur durable.', '1L', '20', 'Brillance & propreté', 5, 'products\\March2023\\b5nUkQV4cnOzcBCfu79l.png', 'nettoyant-sol-jaim-rose', NULL, NULL, NULL, '2023-03-06 13:14:00', '2023-03-27 13:34:45', 'Roses de M’Gouna – Lavande – Aoud – Citron', 'Versez 2 bouchons dans 5 litres d’eau. Nettoyer le sol avec un balai éponge ou serpillère. Laissez sécher sans rincer.', 'Tenir hors portée des enfants, Éviter le contact avec les yeux, en cas de contact avec les yeux, laver immédiatement avec de l’eau. À conserver à l’abri du soleil et de la chaleur.', 'Jaim Floor Cleaner', 'منظف الأرضيات Jaim ', 'Jaim Floor Cleaner is a perfect maintenance product for regular cleaning of floor surfaces. It not only disinfects and cleans effectively, but leaves your floor shiny in just one pass. This product has a pleasant fragrance that provides a long-lasting feeling of freshness.', 'منظف الأرضيات Jaim السائل مثالي للعناية بأسطح الأرضيات. فهو لا يقوم فقط بالتطهير والتنظيف بشكل فعال ، ولكنه يترك أرضيتك لامعة بلمسة واحدة. كما يحتوي على رائحة لطيفة توفر شعورا دائما بالانتعاش.', '1L', '1 لتر', 'Roses of M\'Gouna - Lavender– Oud – Lemon', 'ورد مڭجونا ، خزامى، عود، حامض.', 'Pour 2 capfuls into 5 liters of water. Clean the floor with a mop. Let dry without rinsing.', 'منظف الأرضيات Jaim السائل مثالي للعناية بأسطح الأرضيات. فهو لا يقوم فقط بالتطهير والتنظيف بشكل فعال ، ولكنه يترك أرضيتك لامعة بلمسة واحدة. كما يحتوي على رائحة لطيفة توفر شعورا دائما بالانتعاش.', 'Keep out of reach of children, Avoid contact with eyes, in case of contact with eyes, wash immediately with water. Store away from direct sunlight and heat.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين ، في حالة ملامسة العينين ، اغسلها بالماء على الفور. يخزن بعيدا عن الشمس والحرارة.', 'Shine & Cleanliness', 'لمعان ونظافة'),
(4, 1, NULL, 'Détergent Liquide Jaim Matic', 'Le Détergent Liquide Jaim Matic contient une formule efficace pour nettoyer en profondeur et éliminer les tâches difficiles.\r\nLe Détergent Liquide Jaim Matic est spécialement développé pour préserver l’élasticité et la forme de vos vêtements.', '3L', '50', 'Cleans,disinfects,perfumes', 4, 'products\\March2023\\PgKKABpXErfpRi8pw8yL.png', 'detergent-liquide-jaim-matic-rose', NULL, NULL, NULL, '2023-03-06 13:24:00', '2023-03-24 14:20:27', 'Roses de M’Gouna - Océan – Lavande – Savon de Marseille', 'Triez le linge selon le textile et la couleur. Versez l’équivalent du dosage mentionné dans le bac doseur de la lessive liquide de votre machine à laver ou versez le contenu dans un bac à lessive en cas de nettoyage à la main.', 'Tenir hors portée des enfants. Éviter le contact avec les yeux. En cas de contact avec les yeux, laver immédiatement avec de l’eau.', 'Jaim Matic Liquid Laundry Detergent', 'منظف سائل Jaim Matic', 'Jaim Floor Cleaner is a perfect maintenance product for regular cleaning of floor surfaces. It not only disinfects and cleans effectively, but leaves your floor shiny in just one pass. This product has a pleasant fragrance that provides a long-lasting feeling of freshness.', 'يحتوي المنظف السائل Jaim Matic على تركيبة فعالة للتنظيف وإزالة البقع الصعبة.\r\nتم تطوير المنظف السائل Jaim Matic  خصيصًا للحفاظ على مرونة وشكل ملابسك.', '3L', '3 لتر', 'Roses of M\'Gouna - Ocean - Lavender - Marseille soap', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Jaim Matic Liquid Laundry Detergent has an effective formula for cleaning and removing tough stains. Jaim Matic Liquid Laundry Detergent is specially developed to preserve the elasticity and shape of your clothing.', 'اسكب ما يعادل الجرعة المذكورة في المكان المخصص له في الغسالة أو في حوض الغسيل في حالة التنظيف باليدين.', 'Keep out of reach of children. Avoid eye contact. In case of contact with eyes, wash immediately with water.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Clean, protect and remove stains from clothes', 'ينظف ، يحمي و يزيل البقع  من الملابس'),
(5, 1, NULL, 'Détergent Liquide Jaim Matic', 'Le Détergent Liquide Jaim Matic contient une formule efficace pour nettoyer en profondeur et éliminer les tâches difficiles.\r\nLe Détergent Liquide Jaim Matic est spécialement développé pour préserver l’élasticité et la forme de vos vêtements.', '3L', '50', 'Nettoie, Protège et Détache', 5, 'products\\March2023\\bFmhIMBuuPtIjkbd97Tk.png', 'detergent-liquide-jaim-matic-bleu', NULL, NULL, NULL, '2023-03-06 13:26:00', '2023-03-24 14:19:41', 'Roses de M’Gouna - Océan – Lavande – Savon de Marseille', 'Triez le linge selon le textile et la couleur. Versez l’équivalent du dosage mentionné dans le bac doseur de la lessive liquide de votre machine à laver ou versez le contenu dans un bac à lessive en cas de nettoyage à la main.', 'Tenir hors portée des enfants. Éviter le contact avec les yeux. En cas de contact avec les yeux, laver immédiatement avec de l’eau.', 'Jaim Matic Liquid Laundry Detergent', 'منظف سائل Jaim Matic', 'Jaim Floor Cleaner is a perfect maintenance product for regular cleaning of floor surfaces. It not only disinfects and cleans effectively, but leaves your floor shiny in just one pass. This product has a pleasant fragrance that provides a long-lasting feeling of freshness.', 'يحتوي المنظف السائل Jaim Matic على تركيبة فعالة للتنظيف وإزالة البقع الصعبة.\r\nتم تطوير المنظف السائل Jaim Matic  خصيصًا للحفاظ على مرونة وشكل ملابسك.', '3L', '3 لتر', 'Roses of M\'Gouna - Ocean - Lavender - Marseille soap', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Jaim Matic Liquid Laundry Detergent has an effective formula for cleaning and removing tough stains. Jaim Matic Liquid Laundry Detergent is specially developed to preserve the elasticity and shape of your clothing.', 'اسكب ما يعادل الجرعة المذكورة في المكان المخصص له في الغسالة أو في حوض الغسيل في حالة التنظيف باليدين.', 'Keep out of reach of children. Avoid eye contact. In case of contact with eyes, wash immediately with water.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Clean, protect and remove stains from clothes', 'ينظف ، يحمي و يزيل البقع  من الملابس'),
(6, 1, NULL, 'Détergent Liquide Jaim Matic', 'Le Détergent Liquide Jaim Matic contient une formule efficace pour nettoyer en profondeur et éliminer les tâches difficiles.\r\nLe Détergent Liquide Jaim Matic est spécialement développé pour préserver l’élasticité et la forme de vos vêtements.', '3L', '50', 'Nettoie, Protège et Détache', 5, 'products\\March2023\\JXUyOm2igyNZvDh6IZAi.png', 'detergent-liquide-jaim-matic-violet', NULL, NULL, NULL, '2023-03-06 13:28:00', '2023-03-24 14:00:25', 'Roses de M’Gouna - Océan – Lavande – Savon de Marseille', 'Triez le linge selon le textile et la couleur. Versez l’équivalent du dosage mentionné dans le bac doseur de la lessive liquide de votre machine à laver ou versez le contenu dans un bac à lessive en cas de nettoyage à la main.', 'Tenir hors portée des enfants. Éviter le contact avec les yeux. En cas de contact avec les yeux, laver immédiatement avec de l’eau.', 'Jaim Matic Liquid Laundry Detergent', 'منظف سائل Jaim Matic', 'Jaim Floor Cleaner is a perfect maintenance product for regular cleaning of floor surfaces. It not only disinfects and cleans effectively, but leaves your floor shiny in just one pass. This product has a pleasant fragrance that provides a long-lasting feeling of freshness.', 'يحتوي المنظف السائل Jaim Matic على تركيبة فعالة للتنظيف وإزالة البقع الصعبة.\r\nتم تطوير المنظف السائل Jaim Matic  خصيصًا للحفاظ على مرونة وشكل ملابسك.', '3L', '3 لتر', 'Roses of M\'Gouna - Ocean - Lavender - Marseille soap', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Jaim Matic Liquid Laundry Detergent has an effective formula for cleaning and removing tough stains. Jaim Matic Liquid Laundry Detergent is specially developed to preserve the elasticity and shape of your clothing.', 'اسكب ما يعادل الجرعة المذكورة في المكان المخصص له في الغسالة أو في حوض الغسيل في حالة التنظيف باليدين.', 'Keep out of reach of children. Avoid eye contact. In case of contact with eyes, wash immediately with water.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Clean, protect and remove stains from clothes', 'ينظف ، يحمي و يزيل البقع  من الملابس'),
(7, 1, NULL, 'Détergent Liquide Jaim Matic blanc', 'Le Détergent Liquide Jaim Matic contient une formule efficace pour nettoyer en profondeur et éliminer les tâches difficiles.\r\nLe Détergent Liquide Jaim Matic est spécialement développé pour préserver l’élasticité et la forme de vos vêtements.', '3L', '50', 'Cleans,disinfects,perfumes', 5, 'products\\March2023\\tmIbRkTWLoZ5HZyP3e5j.png', 'detergent-liquide-jaim-matic-blanc', NULL, NULL, NULL, '2023-03-06 13:30:00', '2023-03-24 13:39:23', 'Roses de M’Gouna - Océan – Lavande – Savon de Marseille', 'Triez le linge selon le textile et la couleur. Versez l’équivalent du dosage mentionné dans le bac doseur de la lessive liquide de votre machine à laver ou versez le contenu dans un bac à lessive en cas de nettoyage à la main.', 'Tenir hors portée des enfants. Éviter le contact avec les yeux. En cas de contact avec les yeux, laver immédiatement avec de l’eau.', 'Jaim Matic Liquid Laundry Detergent', 'منظف سائل Jaim Matic', 'Jaim Matic Liquid Laundry Detergent has an effective formula for cleaning and removing tough stains.\r\nJaim Matic Liquid Laundry Detergent is specially developed to preserve the elasticity and shape of your clothing.', 'يحتوي المنظف السائل Jaim Matic على تركيبة فعالة للتنظيف وإزالة البقع الصعبة.\r\nتم تطوير المنظف السائل Jaim Matic  خصيصًا للحفاظ على مرونة وشكل ملابسك.', '3L', '3 لتر', 'Roses of M\'Gouna - Ocean - Lavender - Marseille soap', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Jaim Matic Liquid Laundry Detergent has an effective formula for cleaning and removing tough stains. Jaim Matic Liquid Laundry Detergent is specially developed to preserve the elasticity and shape of your clothing.', 'اسكب ما يعادل الجرعة المذكورة في المكان المخصص له في الغسالة أو في حوض الغسيل في حالة التنظيف باليدين.', 'Keep out of reach of children. Avoid eye contact. In case of contact with eyes, wash immediately with water.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Clean, protect and remove stains from clothes', 'ينظف ، يحمي و يزيل البقع  من الملابس'),
(8, 1, NULL, 'Détergent Liquide Jaim Matic', 'Le Détergent Liquide Jaim Matic contient une formule efficace pour nettoyer en profondeur et éliminer les tâches difficiles.Le Détergent Liquide Jaim Matic est spécialement développé pour préserver l’élasticité et la forme de vos vêtements.', '3L', '50', 'Nettoie, Protège et Détache', 5, 'products\\March2023\\3snXSodqlciGQSLbFJSs.png', 'detergent-liquide-jaim-matic', NULL, NULL, NULL, '2023-03-06 13:34:00', '2023-03-27 14:21:52', 'Roses de M’Gouna - Océan – Lavande – Savon de Marseille', 'Triez le linge selon le textile et la couleur. Versez l’équivalent du dosage mentionné dans le bac doseur de la lessive liquide de votre machine à laver ou versez le contenu dans un bac à lessive en cas de nettoyage à la main.', 'Tenir hors portée des enfants. Éviter le contact avec les yeux. En cas de contact avec les yeux, laver immédiatement avec de l’eau.', 'Jaim Matic Liquid Laundry Detergent', 'منظف سائل Jaim Matic', 'Jaim Matic Liquid Laundry Detergent has an effective formula for cleaning and removing tough stains.\r\nJaim Matic Liquid Laundry Detergent is specially developed to preserve the elasticity and shape of your clothing.', 'يحتوي المنظف السائل Jaim Matic على تركيبة فعالة للتنظيف وإزالة البقع الصعبة.\r\nتم تطوير المنظف السائل Jaim Matic  خصيصًا للحفاظ على مرونة وشكل ملابسك.', '3L', '3 لتر', 'Roses of M\'Gouna - Ocean - Lavender - Marseille soap', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Jaim Matic Liquid Laundry Detergent has an effective formula for cleaning and removing tough stains. Jaim Matic Liquid Laundry Detergent is specially developed to preserve the elasticity and shape of your clothing.', 'اسكب ما يعادل الجرعة المذكورة في المكان المخصص له في الغسالة أو في حوض الغسيل في حالة التنظيف باليدين.', 'Keep out of reach of children. Avoid eye contact. In case of contact with eyes, wash immediately with water.', 'يحفظ بعيدا عن متناول الأطفال. تجنب ملامسة العينين. في حالة ملامسة العينين ، اغسل بالماء على الفور.', 'Clean, protect and remove stains from clothes', 'ينظف ، يحمي و يزيل البقع  من الملابس');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-02-01 08:11:22', '2023-02-01 08:11:22'),
(2, 'user', 'Normal User', '2023-02-01 08:11:22', '2023-02-01 08:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2023-02-01 08:11:24', '2023-02-01 08:11:24'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2023-02-01 08:11:24', '2023-02-01 08:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$AOl0Kzja0A6/8LMhDTQwPuYZ7rhsjFIJq2PHpY843H8w1HGiIX/Ru', 'mdyzzAkqfDTQtp6KNvFTc3nY3uP07Eo2ugBM3E1VafXRi9VlvPxHhxjSBxyb', NULL, '2023-02-01 08:11:23', '2023-02-01 08:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
