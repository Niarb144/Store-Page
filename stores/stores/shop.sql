-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 10:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stores`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_logo_image` varchar(255) DEFAULT NULL,
  `shop_category` varchar(255) DEFAULT NULL,
  `shop_description` text DEFAULT NULL,
  `shop_motto` varchar(255) DEFAULT NULL,
  `shop_images` text DEFAULT NULL,
  `opening_hours` time DEFAULT NULL,
  `closing_hours` time DEFAULT NULL,
  `shop_location` varchar(255) NOT NULL,
  `shop_mobile_number` varchar(15) DEFAULT NULL,
  `shop_email` varchar(255) DEFAULT NULL,
  `shop_facebook_link` varchar(255) DEFAULT NULL,
  `shop_instagram_link` varchar(255) DEFAULT NULL,
  `shop_youtube_link` varchar(255) DEFAULT NULL,
  `shop_twitter_link` varchar(255) DEFAULT NULL,
  `shop_website_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `shop_name`, `shop_logo_image`, `shop_category`, `shop_description`, `shop_motto`, `shop_images`, `opening_hours`, `closing_hours`, `shop_location`, `shop_mobile_number`, `shop_email`, `shop_facebook_link`, `shop_instagram_link`, `shop_youtube_link`, `shop_twitter_link`, `shop_website_link`) VALUES
(30, 'Airtel', 'media/Airtel-Logo-2010-present-removebg-preview.png', 'Electronics', 'Airtel shop and service centre for all your airtel mobile needs\r\n', '', 'media/Airtel-Logo-2010-present-removebg-preview.png', '09:00:00', '19:00:00', 'Ground floor', '0733100100', 'customerservice@ke.airtel.com', 'https://www.facebook.com/AirtelKe/?_rdc=1&_rdr', 'https://www.instagram.com/airtel_kenya/', 'https://www.youtube.com/user/airtelkenya', 'https://twitter.com/AIRTEL_KE', 'https://www.airtelkenya.com/store_finder/airtel_shop'),
(31, 'Big Knife', 'media/Big Knife Logo-02 2.png', 'Restaurant', 'A culinary oasis where the tantalizing flavors of the Middle East come to life. Get the most authentic and delicious shawarma experience.', '', 'media/portfolio-1.jpg', '10:00:00', '22:30:00', 'Ground floor', '0710733373', '', 'https://www.facebook.com/bigknife254/', 'https://www.instagram.com/bigknife254/?hl=en', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
