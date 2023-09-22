-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 04:31 AM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `fileUpload` varchar(255) DEFAULT NULL,
  `coverPhoto` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `fileUpload`, `coverPhoto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Neha Treutel', 'Caterpillar called after her. \'I\'ve something important to say!\' This sounded promising, certainly: Alice turned and came flying down upon her: she gave one sharp kick, and waited to see it trying in a trembling voice, \'--and I hadn\'t mentioned.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685291435_Untitled design.png', 9, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(2, 'Lyla King', 'There ought to eat her up in great fear lest she should meet the real Mary Ann, what ARE you doing out here? Run home this moment, I tell you!\' But she did not quite know what you had been looking at them with one finger for the baby, and not to.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332927_Untitled design (4).png', 17, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(3, 'Regan Haag', 'Alice replied, rather shyly, \'I--I hardly know, sir, just at first, perhaps,\' said the Mock Turtle. \'Seals, turtles, salmon, and so on.\' \'What a pity it wouldn\'t stay!\' sighed the Lory, as soon as look at them--\'I wish they\'d get the trial one way.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332164_Untitled design (2).png', 10, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(4, 'Miss Kelly Bechtelar', 'But there seemed to Alice as it settled down again very sadly and quietly, and looked at each other for some time in silence: at last it unfolded its arms, took the opportunity of saying to her daughter \'Ah, my dear! Let this be a grin, and she.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685292341_Untitled design (7).png', 3, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(5, 'Mrs. Laurence Kerluke II', 'First, however, she again heard a little bit of stick, and tumbled head over heels in its hurry to change the subject,\' the March Hare, \'that \"I breathe when I learn music.\' \'Ah! that accounts for it,\' said Alice. \'What IS a Caucus-race?\' said.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332927_Untitled design (4).png', 1, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(6, 'Claud Gusikowski', 'Normans--\" How are you getting on now, my dear?\' it continued, turning to Alice for protection. \'You shan\'t be beheaded!\' \'What for?\' said Alice. \'What sort of chance of getting up and saying, \'Thank you, sir, for your interesting story,\' but she.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332164_Untitled design (2).png', 9, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(7, 'Nina Schmitt', 'I suppose.\' So she set to work, and very soon finished it off. * * * * * * * * * * * * * * * * * * * \'What a funny watch!\' she remarked. \'It tells the day of the thing yourself, some winter day, I will tell you my adventures--beginning from this.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685292341_Untitled design (7).png', 11, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(8, 'Ahmad Kerluke', 'I hadn\'t cried so much!\' Alas! it was all about, and called out, \'First witness!\' The first thing she heard a little bit of mushroom, and crawled away in the sea, some children digging in the air. This time Alice waited patiently until it chose to.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685333692_Untitled design.png', 6, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(9, 'Jayne Kuphal', 'Crab took the hookah out of the Rabbit\'s voice; and Alice was more and more puzzled, but she gained courage as she could for sneezing. There was nothing else to do, and perhaps as this is May it won\'t be raving mad--at least not so mad as it.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332164_Untitled design (2).png', 13, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(10, 'Grayson Herzog', 'I like being that person, I\'ll come up: if not, I\'ll stay down here till I\'m somebody else\"--but, oh dear!\' cried Alice in a long, low hall, which was the Duchess\'s cook. She carried the pepper-box in her haste, she had not the right way to fly up.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685291435_Untitled design.png', 16, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(11, 'Xander Watsica V', 'I should be like then?\' And she squeezed herself up closer to Alice\'s great surprise, the Duchess\'s knee, while plates and dishes crashed around it--once more the pig-baby was sneezing on the song, perhaps?\' \'I\'ve heard something like it,\' said the.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332927_Untitled design (4).png', 13, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(12, 'Karson King', 'I know!\' exclaimed Alice, who was reading the list of the goldfish kept running in her lessons in the air. \'--as far out to sea!\" But the insolence of his great wig.\' The judge, by the time they were all in bed!\' On various pretexts they all.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685333692_Untitled design.png', 16, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(13, 'Gladyce Kirlin', 'THROUGH the earth! How funny it\'ll seem to put it to speak again. In a minute or two, and the beak-- Pray how did you call it sad?\' And she went on muttering over the jury-box with the end of half an hour or so there were three gardeners instantly.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332164_Untitled design (2).png', 6, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(14, 'Joanny Bogisich', 'I\'ll kick you down stairs!\' \'That is not said right,\' said the Hatter, with an M, such as mouse-traps, and the fall NEVER come to the conclusion that it was written to nobody, which isn\'t usual, you know.\' \'I don\'t know what they\'re like.\' \'I.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685291435_Untitled design.png', 13, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(15, 'Ms. Celine Denesik', 'I learn music.\' \'Ah! that accounts for it,\' said the Queen, and in a low voice. \'Not at first, perhaps,\' said the March Hare went \'Sh! sh!\' and the bright eager eyes were getting extremely small for a long tail, certainly,\' said Alice, in a hurried.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685333692_Untitled design.png', 1, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(16, 'Kade Gleason', 'Queen, stamping on the song, perhaps?\' \'I\'ve heard something like it,\' said Alice. \'Why, there they lay on the slate. \'Herald, read the accusation!\' said the Mock Turtle, who looked at Two. Two began in a tone of great curiosity. \'Soles and eels.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685292341_Untitled design (7).png', 15, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(17, 'Prof. Aiyana Hamill', 'Alice an excellent opportunity for croqueting one of the singers in the kitchen. \'When I\'M a Duchess,\' she said to herself; \'I should think it so quickly that the mouse doesn\'t get out.\" Only I don\'t think,\' Alice went on in these words: \'Yes, we.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332927_Untitled design (4).png', 3, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(18, 'Prof. Sabrina Lemke', 'A little bright-eyed terrier, you know, upon the other side will make you grow shorter.\' \'One side will make you dry enough!\' They all made of solid glass; there was no label this time with one eye; \'I seem to encourage the witness at all: he kept.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685291435_Untitled design.png', 18, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(19, 'Kelley Cartwright DDS', 'SIT down,\' the King triumphantly, pointing to the seaside once in the direction in which case it would be four thousand miles down, I think--\' (for, you see, Miss, we\'re doing our best, afore she comes, to--\' At this the whole party at once in the.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685292341_Untitled design (7).png', 17, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(20, 'Carter Watsica', 'Said his father; \'don\'t give yourself airs! Do you think you might catch a bat, and that\'s very like a telescope! I think you\'d take a fancy to herself how she would have this cat removed!\' The Queen smiled and passed on. \'Who ARE you doing out.', '\\fileUploads\\1684949100_Document.pdf', 'photoUploads/1685332164_Untitled design (2).png', 14, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(21, 'Lorem ipsum dolor sit', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nisl venenatis tortor, interdum hendrerit ac eros odio gravida natoque nascetur cubilia varius, cum ligula habitant quam nullam blandit potenti accumsan eleifend. Viverra nec commodo montes interdum tortor facilisis mi', 'fileUploads/1695347911_1684998022_Profile.pdf', 'photoUploads/1695347911_1685291435_Untitled design.png', 6, '2023-09-21 19:28:31', '2023-09-21 19:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `category_id`, `book_id`, `created_at`, `updated_at`) VALUES
(1, 4, 6, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(2, 2, 5, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(3, 3, 19, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(4, 4, 20, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(5, 4, 4, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(6, 3, 7, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(7, 2, 2, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(8, 4, 9, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(9, 1, 9, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(10, 2, 19, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(11, 4, 11, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(12, 4, 11, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(13, 2, 7, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(14, 3, 17, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(15, 5, 16, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(16, 3, 14, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(17, 5, 8, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(18, 2, 4, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(19, 2, 13, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(20, 1, 7, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(21, 3, 16, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(22, 5, 9, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(23, 3, 3, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(24, 1, 2, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(25, 3, 3, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(26, 5, 19, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(27, 4, 11, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(28, 5, 3, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(29, 1, 18, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(30, 3, 11, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(31, 5, 2, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(32, 1, 16, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(33, 1, 16, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(34, 4, 3, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(35, 5, 20, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(36, 4, 20, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(37, 1, 1, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(38, 3, 11, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(39, 4, 19, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(40, 4, 5, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(41, 2, 21, '2023-09-21 19:28:31', '2023-09-21 19:28:31'),
(42, 3, 21, '2023-09-21 19:28:31', '2023-09-21 19:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Romance', 8, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(2, 'Action', 19, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(3, 'Sci-Fi', 13, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(4, 'Cartoon', 14, '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(5, 'Drama', 5, '2023-09-20 23:08:27', '2023-09-20 23:08:27');

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
(1, '2013_03_22_031156_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_22_023903_create_categories_table', 1),
(7, '2023_05_22_024026_create_books_table', 1),
(8, '2023_05_23_072217_create_book_categories_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'reader', '2023-09-20 23:08:14', '2023-09-20 23:08:14'),
(2, 'author', '2023-09-20 23:08:14', '2023-09-20 23:08:14'),
(3, 'admin', '2023-09-20 23:08:14', '2023-09-20 23:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Braxton Becker', 'christophe57@example.net', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '82LYVrUVv2', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(2, 'Brooke Price', 'dominic80@example.net', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mgDrSnDXlA', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(3, 'Prof. Jaleel Bahringer Jr.', 'wchamplin@example.net', 1, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qidWMr99JzGoucBIdCMRl9cOADdK7JBbt5Ll3BdJ1GYuVCANFKLRMRAO0KG7', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(4, 'Dr. Otto Lindgren V', 'sandy.tillman@example.net', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GsNKAk2GCL', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(5, 'Buddy Moen', 'breitenberg.toni@example.org', 3, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jr71caoz1Z', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(6, 'Lorenza Klein', 'vivian35@example.com', 3, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IuErYEndJJ', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(7, 'Hans Schiller III', 'ephraim13@example.org', 1, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '35kUKwNMJc', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(8, 'Mrs. Donna King V', 'ulices21@example.org', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0dYtbi0RCO', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(9, 'Mr. Dale Turcotte PhD', 'marquardt.kaycee@example.net', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DcWLUpLS10', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(10, 'Davonte Upton', 'gutmann.brando@example.com', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bbs9hdcKrC', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(11, 'Dr. Stanton Rosenbaum', 'kavon.mitchell@example.net', 1, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JykzJYK5Sg', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(12, 'Brielle Ward', 'gene77@example.org', 1, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JEudQgAkcZ', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(13, 'Ricky Walter', 'greta.leuschke@example.org', 3, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VhtGI1mJ4X', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(14, 'Kennedy Koepp DDS', 'zbeier@example.org', 1, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WXdukpTsgY', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(15, 'Madalyn Hintz III', 'dock20@example.net', 3, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SDHJJqAec5', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(16, 'Prof. Jace Kuhn', 'tod21@example.com', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fQ8IRbng0u', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(17, 'Justice Swift', 'fschiller@example.com', 1, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'l5dy4Ny7aI', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(18, 'Hudson Erdman', 'aliyah46@example.com', 3, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vbdz5VbzT7', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(19, 'Liam Daniel', 'jaron53@example.net', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6EkxfRepgH', '2023-09-20 23:08:27', '2023-09-20 23:08:27'),
(20, 'Aaron Hickle I', 'abshire.sherman@example.net', 2, '2023-09-20 23:08:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'msNv0CTfOB', '2023-09-20 23:08:27', '2023-09-20 23:08:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_user_id_foreign` (`user_id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_categories_category_id_foreign` (`category_id`),
  ADD KEY `book_categories_book_id_foreign` (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD CONSTRAINT `book_categories_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
