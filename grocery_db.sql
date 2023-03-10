-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(52, 0, 30, 'iPhone 14 ', 999, 1, 'iphone14pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `details`, `price`, `image`) VALUES
(30, 'Apple iPhone 14 ', 'electronics', 'Apple iPhone 14\r\n\r\n About this item\r\n\r\n    15.40 cm (6.1-inch) Super Retina XDR display\r\n    Advanced camera system for better photos in any light\r\n    Cinematic mode now in 4K Dolby Vision up to 30 fps\r\n    Action mode for smooth, steady, handheld videos\r\n    Vital safety technology ??? Crash Detection calls for help when you can???t\r\n', 89000, 'iphone14pro.jpg'),
(31, 'H&M Nasa Merch', 'clothes', 'H&M Nasa \r\nTop in sweatshirt fabric made from a cotton blend. Relaxed fit with dropped shoulders and ribbing around the neckline, cuffs and hem. Soft brushed inside.', 1200, 'h&m nasa.jpeg'),
(38, 'ADIDAS Stunicon ', 'shoes', 'ADIDAS Stunicon \r\nSole: Rubber\r\nClosure: Lace-Up\r\nFit Type: Regular\r\nShoe Width: Medium\r\nUpper Material: Mesh; Outer Sole: Rubber; Insole: Comfort Insole ', 2738, 'adidasblack.jpg'),
(39, 'PUMA Zod ', 'shoes', 'PUMA Zod Runner V3 Running Shoes For Men????(Black)\r\n\r\nUpper Material:-Textile\r\nLower Material:-Rubber\r\n', 2450, 'pumablack.jpg'),
(41, 'Van Heusen', 'clothes', 'Van Heusen Black Men&#39;s Blazzer\r\n\r\nCare Instructions: Dry Clean Only\r\nvan heusen suits & blazers, , men suits & blazers, buy van heusen suits & blazers for men, suits & blazers online, for men\r\n', 3899, 'blazzer.jpg'),
(45, 'H&M Jacket', 'clothes', 'Lightweight puffer jacket in woven fabric with a hood and discreet zip down the front with a chin guard. Pockets in the side seams with a concealed zip, and narrow elastication at the cuffs and hem. Unlined.', 4320, 'hmgoepprod.jpg'),
(46, 'Nike Jordans', 'shoes', 'Original AJ I Design\r\n\r\nGenuine leather and bold colour-blocking recreate the classic look.\r\n\r\nAir Cushioning\r\n\r\nEncapsulated Air in the heel cushions every step.\r\n\r\nHeritage Traction\r\n\r\nBased on the design of the original outsole, the rubber-integrated traction pattern includes a forefoot pivot circle.', 9742, 'jordans.jpg'),
(48, 'US Polo Men&#39;s Clarkin', 'shoes', '- Fit : Relaxed fit\r\n- Features : Lightweight , High on comfort, pull tab\r\n- Care tips : Delicate wash\r\n- Knitted uppers and overall breathable construct\r\n- Lightweight and easy to slip-in with lycra lining', 1949, 'uspolo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(31, 'abc', 'test@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', 'admin'),
(32, 'yash', 'yash@gmail.com', '6de3bb80cc76782b7ee4c5bd89aafde2', 'user'),
(34, 'Tarun', 'tarun@icloud.com', 'a412c990fef411aee2396fb42707c32e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
