-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 09:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dompet`
--

-- --------------------------------------------------------

--
-- Table structure for table `eksklusif`
--

CREATE TABLE `eksklusif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eksklusif`
--

INSERT INTO `eksklusif` (`id`, `title`, `gambar1`, `gambar2`, `gambar3`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'DOMPET EKSKLUSIF Best Seller !!', 'assets/gambar/QBWIJIQKB6sC8iLGzz7bqBfCbkAAPHQkjCe2URyB.jpeg', 'assets/gambar/Wv0ahE26sGK2OwD24hjlCHln77DhSjCra09LhVLW.jpeg', 'assets/gambar/xjHTniyF6I11j7vCLLqd6b9gsnDChN6cx4DQYNT2.jpeg', NULL, '2020-06-17 15:04:35', '2020-06-17 15:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `emboss`
--

CREATE TABLE `emboss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emboss`
--

INSERT INTO `emboss` (`id`, `title`, `gambar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Logo Emboss', 'assets/gambar/MC36ibdHdPYRUbxr9JFyb00Ynr0BQEYVlZSaO56M.jpeg', NULL, '2020-06-18 18:37:18', '2020-06-18 18:37:18');

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
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga_normal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_diskon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potongan_ongkir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_sekarang` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_tf` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_cod` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `harga_normal`, `harga_diskon`, `diskon`, `potongan_ongkir`, `pesan_sekarang`, `pesan_tf`, `pesan_cod`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '300.000', '170.000', 'PROMO TERBATAS..!!!', '20.000', 'https://wa.me/6285694670485?text=Saya%20mau%20order%20dompet%2C%20GRATIS%20POUCH%20sekarang%21', 'https://wa.me/6285694670485?text=Transfer%20bank%3A%0ASaya%20Mau%20Order%20Dompet%20Via%20Bank%20Transfer.%20Double%20Promo%20Gratis%20POUCH%20PREMIUM%20SERBAGUNA%20Dan%20Potongan%20harga%20Rp.%2020.000%2C-', 'https://wa.me/6285694670485?text=Saya%20Mau%20Order%20Dompet%20Via%20COD.%0ADengan%20Double%20Promo%20Discount%20Gratis%20POUCH%20PREMIUM%20SERBAGUNA%20%0ABest%20Seller', NULL, '2020-06-21 22:55:33', '2020-06-21 22:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan`
--

CREATE TABLE `keunggulan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keunggulan`
--

INSERT INTO `keunggulan` (`id`, `title`, `gambar1`, `gambar2`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Keunggulan Product', 'assets/gambar/zEAksuZ2n3JpFoYYaU0Znr4d5QEsT8feIw2ZYHTG.jpeg', 'assets/gambar/pt3NVhNyOB2CzWEWWskWRuh8XNMcZqkZLHhlvnUQ.jpeg', NULL, '2020-06-17 23:58:30', '2020-06-18 00:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'assets/gambar/JYqQVdBpiBR7HgYw7gp6EiVQIBzgtiDhGwLV3u8Z.jpeg', NULL, '2020-06-17 03:01:04', '2020-06-17 22:39:58');

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
(4, '2020_06_17_083644_create_logo_table', 1),
(5, '2020_06_17_212630_create_eksklusif_table', 2),
(6, '2020_06_18_042024_create_warnadompet_table', 3),
(7, '2020_06_18_050806_create_warnadompet_table', 4),
(8, '2020_06_18_055231_create_keunggulan_table', 5),
(9, '2020_06_18_072549_create_emboss_table', 6),
(10, '2020_06_19_015438_create_promo_table', 7),
(11, '2020_06_20_053945_create_harga_table', 8),
(12, '2020_06_21_041923_create_testimoni_table', 9),
(13, '2020_06_22_045309_create_harga_table', 10),
(14, '2020_06_22_052844_create_harga_table', 11),
(15, '2020_06_22_054659_create_harga_table', 12);

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
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_promo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_promo` int(11) NOT NULL,
  `waktu_promo` datetime NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `nama_promo`, `stock_promo`, `waktu_promo`, `gambar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pouch Serba Guna', 50, '2020-06-22 21:39:37', 'assets/gambar/mIkNK1VsTeG7pQclYlDef0tROdfTVzBs3KoBziGc.jpeg', NULL, '2020-06-19 11:45:17', '2020-06-19 11:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `testimoni`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'assets/gambar/JUlNR7S09d0AuRgwCl0dIBe521Fjh0Yrt9BKdfW3.jpeg', NULL, '2020-06-20 21:50:30', '2020-06-20 21:50:30'),
(2, 'assets/gambar/uqFtu2rZwEZoXblurPJDwAZzeipSHAfX2UZ02wdl.jpeg', NULL, '2020-06-20 21:50:46', '2020-06-20 21:50:46'),
(3, 'assets/gambar/NJyG2yqaQnNUsLCVmObVwjmlPjsv2PMsgVUnaZKz.jpeg', NULL, '2020-06-20 21:51:00', '2020-06-20 21:51:00'),
(4, 'assets/gambar/vIQptttrOXFf7sk3aHkW8nobfplEdwDo1N1bT427.jpeg', NULL, '2020-06-20 21:51:15', '2020-06-20 21:51:15'),
(5, 'assets/gambar/m5pHX6qdBSrmEbvFdeL7sm3ip19wvNO1IR3y33Ps.jpeg', NULL, '2020-06-20 21:51:31', '2020-06-20 21:51:31'),
(6, 'assets/gambar/fBj8lYWWqH9WPyOf3VZrkp7cAhas5uGnueEbeUFx.jpeg', NULL, '2020-06-20 21:51:44', '2020-06-20 21:51:44'),
(7, 'assets/gambar/vjkkeTLUU9iSXumz15bw5Q6SQglBfXtjPGUJezmw.jpeg', NULL, '2020-06-20 21:51:55', '2020-06-20 21:51:55');

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

-- --------------------------------------------------------

--
-- Table structure for table `warnadompet`
--

CREATE TABLE `warnadompet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warna1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warnadompet`
--

INSERT INTO `warnadompet` (`id`, `warna1`, `gambar1`, `warna2`, `gambar2`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Warna Hitam', 'assets/gambar/dnylePTiIrzEb5f5Qb5ricwdekp2yQVgqGHC42Rb.jpeg', 'Warna Coklat', 'assets/gambar/rbsCS4wnE5GuF06Zp1zK2M02ZrBqHaEQEjg52Auj.jpeg', NULL, '2020-06-17 22:27:25', '2020-06-17 22:33:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eksklusif`
--
ALTER TABLE `eksklusif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emboss`
--
ALTER TABLE `emboss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keunggulan`
--
ALTER TABLE `keunggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warnadompet`
--
ALTER TABLE `warnadompet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eksklusif`
--
ALTER TABLE `eksklusif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emboss`
--
ALTER TABLE `emboss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keunggulan`
--
ALTER TABLE `keunggulan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warnadompet`
--
ALTER TABLE `warnadompet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
