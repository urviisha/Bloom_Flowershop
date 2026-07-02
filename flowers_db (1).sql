-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2026 at 12:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `product_name`, `product_price`, `quantity`, `added_at`) VALUES
(1, 12, 1, 'Orange & Purple Lily Bouquet', 1499.00, 1, '2025-12-05 18:58:05'),
(2, 12, 3, 'Premium Blue Rose Bouquet', 1299.00, 1, '2025-12-05 19:37:28'),
(3, 11, 10, 'Sunflower Love Bunch', 1399.00, 1, '2025-12-05 21:18:48'),
(4, 12, 12, 'Deluxe Pink Rose Bouquet', 1499.00, 1, '2025-12-05 21:35:51'),
(5, 11, 13, 'Fresh Blue & Pink Mix Bouquet', 1699.00, 1, '2025-12-06 05:04:07'),
(6, 13, 3, 'Premium Blue Rose Bouquet', 1299.00, 1, '2025-12-06 05:15:52'),
(7, 11, 3, 'Premium Blue Rose Bouquet', 1299.00, 1, '2025-12-06 06:09:20'),
(8, 15, 3, 'Premium Blue Rose Bouquet', 1299.00, 1, '2026-01-12 16:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Orange & Purple Lily Bouquet', 1499, 'img/01.jpg'),
(2, 'Luxury Purple & Blue Bouquet', 2199, 'img/02.jpg'),
(3, 'Premium Blue Rose Bouquet', 1299, 'img/03.jpg'),
(4, 'Classic Red Rose Bouquet', 899, 'img/04.jpg'),
(5, 'Grand Red & Pink Rose Mix Bouquet', 1299, 'img/05.jpg'),
(6, 'Pastel Rose Elegance Bouquet', 1599, 'img/06.jpg'),
(7, 'Sunflower-Rose Harmony Bouquet', 1899, 'img/07.jpg'),
(8, 'Sunny Peach Delight Bouquet', 2199, 'img/08.jpg'),
(9, 'Royal Pink Lily Bloom', 3299, 'img/09.jpg'),
(10, 'Blush Elegance Bouquet', 1899, 'img/10.jpg'),
(11, 'Pastel Tulip Dream', 3499, 'img/11.jpg'),
(12, 'Lavender Romance Bouquet', 1499, 'img/12.jpg'),
(13, 'Sweet Daisy Charm', 799, 'img/13.jpg'),
(14, 'Rustic Lavender Fields', 1199, 'img/14.jpg'),
(15, 'Rainbow Garden Bouquet', 2199, 'img/15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(11, 'Hetvi', 'hetvijadav833@gmail.com', '$2y$10$C.v/HuqayTpwQKmxGB0eM.es1bKCzyw1FQjLy.OZ1s80IVya0xLOK', '2025-12-03 18:37:12'),
(12, 'urvisha', 'urvishachauhan47@gmail.com', '$2y$10$UjJvgdjeR9QCabWHnT/kBunzXQkLmtCyzpVs3lk5AOrrvxghzIzuG', '2025-12-04 14:20:15'),
(13, 'Riya', 'riya@gmail.com', '$2y$10$DB9ZYf.LfYQlx0G4pol7mu3ViinzRcFEFdfB5e4jtujXb6OOPzdyS', '2025-12-06 05:10:15'),
(15, 'yash', 'yashchauhan33@gmail.com', '$2y$10$uajNvIkzMkM4VdhcUQdVhOCpbZrCKS8mNd2dk6Ai4QKuNXDblFm1.', '2026-01-12 16:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `product_name`, `product_price`, `product_image`, `created_at`) VALUES
(1, 11, 14, 'Rustic Lavender Fields', 1199, 'img/14.jpg', '2025-12-05 20:50:54'),
(4, 11, 7, 'Sunflower-Rose Harmony Bouquet', 1899, 'img/07.jpg', '2025-12-05 21:08:27'),
(5, 11, 6, 'Pastel Rose Elegance Bouquet', 1599, 'img/06.jpg', '2025-12-05 21:09:30'),
(6, 11, 15, 'Rainbow Garden Bouquet', 2199, 'img/15.jpg', '2025-12-05 21:13:46'),
(7, 11, 11, 'Pastel Tulip Dream', 3499, 'img/11.jpg', '2025-12-05 21:14:23'),
(8, 12, 3, 'Premium Blue Rose Bouquet', 1299, 'img/03.jpg', '2025-12-05 21:31:43'),
(9, 12, 8, 'Sunny Peach Delight Bouquet', 2199, 'img/08.jpg', '2025-12-05 21:34:56'),
(10, 11, 4, 'Classic Red Rose Bouquet', 899, 'img/04.jpg', '2025-12-06 05:05:47'),
(11, 13, 1, 'Orange & Purple Lily Bouquet', 1499, 'img/01.jpg', '2025-12-06 05:12:48'),
(12, 11, 2, 'Luxury Purple & Blue Bouquet', 2199, 'img/02.jpg', '2025-12-06 06:08:59'),
(13, 15, 3, 'Premium Blue Rose Bouquet', 1299, 'img/03.jpg', '2026-01-12 16:33:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
