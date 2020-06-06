-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 07:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carty`
--

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
(2, '2020_05_25_063253_create_products_table', 1),
(3, '2020_05_30_161307_create_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `imagePath`, `title`, `description`, `price`, `category`) VALUES
(1, '2020-05-25 02:42:27', '2020-05-25 02:42:27', 'https://botero.com.au/wp-content/uploads/ladies-tshirt-front-3.jpg', 'Black T-shirt', 'Loveable cool amazing.', 99.99, 'tshirt'),
(2, '2020-05-25 02:42:27', '2020-05-25 02:42:27', 'https://tshirt-factory.com/images/detailed/20/NEED-SUMMER-T-shirt-design-20667.jpg', 'Summer T-shirt 1', 'Black soft cotton will help you feel relax and stay cool at the same time.', 20.49, 'tshirt'),
(3, '2020-05-25 02:42:27', '2020-05-25 02:42:27', 'https://4menshop.com/images/thumbs/2019/01/ao-vest-nazafu-xam-muoi-tieu-1131-10576-slide-products-5c36c724b58ca.jpg', 'Luxury Vest', 'Luxury vest is a high-class product line, designed, tailor-made according to modern trends, youthful, healthy body design.', 250.99, 'vest'),
(4, '2020-05-25 02:42:27', '2020-05-25 02:42:27', 'https://cdn1.brandability.co.za/2017/02/26103513/BRT-Zone-Jacket-RedSilver.jpg', 'BRT Zone Jacket', 'Material: 130g Coated Ripstop 100% Polyester.', 60.01, 'jacket'),
(5, '2020-05-25 02:42:27', '2020-05-25 02:42:27', 'https://product.hstatic.net/1000284478/product/duskypink_wmfbegoniawc9w_1_4999862052a444bf90425fc772f5d85d_1024x1024.jpg', 'Tailored Begonia', 'Bộ sưu tập Ted Baker womenswear. Thiết kế áo vest nữ hiện đại. Phối miệng đệm vai giữ dáng áo.', 299.99, 'vest');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `email`, `password`) VALUES
(1, '2020-05-31 00:43:20', '2020-05-31 00:43:20', 'cartAdmin@gmail.com', '$2y$10$7H1ZifKiLbTgNCK9ZGTfieu4Wh.kdLT2n1CctyKcmjC3DpGNP/ybO'),
(2, '2020-06-01 10:55:09', '2020-06-01 10:55:09', 'test@test.com', '$2y$10$rtcZTxBZMYDMhNBNjmlQQO7NNEe4UZPtBBrdj544e0g53FBroKOIO'),
(3, '2020-06-01 11:08:02', '2020-06-01 11:08:02', 't@t.c', '$2y$10$ej4JC4AtMy2cuHukpyNUguBpoNQSb3OdZIARPc2lg4g12TQwPXOni'),
(4, '2020-06-01 21:24:20', '2020-06-01 21:24:20', 'c@c', '$2y$10$Bhd3Dve8t4U0s9NGosDAUeloSWbyyZAHlwHqBxs7/WnP7iB.0ln8e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
