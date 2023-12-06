-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 12:55 PM
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
(16, 'Airtel', 'media/Airtel.png', 'Electronics', 'Airtel shop and service centre for all your airtel mobile needs', '', 'media/', '09:00:00', '19:00:00', 'Ground floor', '0733100100', 'customerservice@ke.airtel.com', 'https://www.facebook.com/AirtelKe/?_rdc=1&_rdr', 'https://www.instagram.com/airtel_kenya/', 'https://www.youtube.com/user/airtelkenya', 'https://twitter.com/AIRTEL_KE', 'https://www.airtelkenya.com/store_finder/airtel_shop'),
(18, 'Chicken Inn', 'media/Chicken Inn.png', 'Restaurant', 'Chicken Inn is a haven for all fried chicken enthusiasts. Delight in tantalizing and flavourful chicken dishes.\r\n\r\n', 'Luv Dat Chicken', 'media/', '09:30:00', '20:00:00', 'Ground floor', '0700323323', 'customercare@ke-simbisa.com', 'https://www.facebook.com/ChickenInnKE', '', 'https://www.youtube.com/@simbisabrandskenya.5731', 'https://twitter.com/i/flow/login?redirect_after_login=%2FChickenInnKe%2F', 'https://chickeninn.co.ke/cgi-sys/suspendedpage.cgi'),
(19, 'CJs', 'media/CJ_s.jpg', 'Restaurant', 'CJs, the restaurant where cullinary excellence and exquisite flavours come together to create a dining experince like none other.', '', 'media/', '06:30:00', '23:00:00', 'Ground floor', '0792000090', 'info@cjs.co.ke', 'https://www.facebook.com/CJs254/', 'instagram.com/cjs254/?hl=en', '', 'https://twitter.com/cjs_254/status/1160817144558444544', 'https://cjs.co.ke/user/home'),
(20, 'Gadget Shop', 'media/gudgetshop.png', 'Electronics', 'Welcome to Gagdet Shop, your ultimate destination for cutting-edge technology and innovation. Gagdet Shop believes in empowering customers with the latest gadgets and electronics that enhances everyday life.', '', 'media/', '10:00:00', '19:30:00', 'Ground floor', '0115561312', 'gadgetshopkenya@gmail.com', 'https://www.facebook.com/thegadgetshopkenya/?_rdc=1&_rdr', 'https://www.instagram.com/thegadgetshopkenya/', '', '', 'https://www.thegadgetshopkenya.com/'),
(21, 'Galitos', 'media/Galitos-Logo-removebg-preview-1.png', 'Restaurant', 'Welcome to Galitos, where taste meets perfection in every bite. Get ready to embark on a culinary journey that will leave you yearning for the next visit to our flame-kissed haven.', '', 'media/', '09:00:00', '19:00:00', 'Ground floor', '0718000090', 'customercare@ke-simbisa.com', 'https://www.facebook.com/GalitosKenya?_rdc=1&_rdr', 'https://www.instagram.com/galitos_kenya/', '', 'https://twitter.com/galitoske', 'https://galitos.co.ke/'),
(22, 'Healthy U', 'media/healthy u logo.png', 'Healthcare', 'Welcome to Healthy U, the gateway to a healthier lifestyle. Visit the store and embark on a journey of wellness and nourishment like never before', '', 'media/', '09:00:00', '19:00:00', 'Ground floor', '0709694000', 'info@healthy-u2000.com', 'https://www.facebook.com/healthyu2000', 'https://www.instagram.com/healthyuke/', '', 'https://twitter.com/healthyuke', 'https://www.healthyu.co.ke/'),
(23, 'Hotpoint', 'media/Hotpoint.png', 'Electronics', 'Welcome to Hotpoint, your ultimate destination for all things electronic. Step into the cutting-edge electronics shop, prepare to immerse yourself in a world of innovation, creativity, and technological wonders.', '', 'media/', '10:00:00', '20:00:00', 'Ground floor', '0203699750', 'imrretail@hotpoint.co.ke', 'https://www.facebook.com/HotpointKenya', 'https://www.instagram.com/hotpointkenya/', 'https://www.youtube.com/channel/UCAr01W7yePoKKOjgHLD09jw', 'https://twitter.com/HotpointKenya', 'https://hotpoint.co.ke/?gclid=CjwKCAjw-IWkBhBTEiwA2exyOyOwjSS_4-gooF_igFkafC8h0-qQ0M3g5gCYrewYc1AAElxY7TYBahoC3QwQAvD_BwE'),
(24, 'Lintons', 'media/LI Logo New_WhiteText_Black (1).png', 'Beauty', 'Lintons have a curated collection of the finest beauty products from renowened brands that are dedicating to enhancing natural beauty.', '', 'media/', '08:00:00', '19:00:00', 'Ground floor', '0769563736', 'marketing@lintonsbeauty.com', 'https://www.facebook.com/LintonsBeauty/', 'https://www.instagram.com/irisdental/', '', '', 'https://www.lintonsbeauty.com/'),
(25, 'Lorenzo Drycleaners', 'media/lorenzo.png', 'Dry cleaning', 'Lorenzo offers excpetional dry cleaning and garment care services that maintain the pristine condition and longevity of garments.', '', 'media/', '07:30:00', '20:00:00', 'Ground floor', '0728400200', 'info@lorenzodrycleaners.co.ke', 'https://www.facebook.com/lorenzoprofessionaldrycleaners/', 'https://www.instagram.com/lorenzodrycleaners/', '', '', 'https://www.lorenzodrycleaners.co.ke/'),
(26, 'Naivas', 'media/Naivas.png', 'Shopping', 'Naivas is the one-stop destination for all your needs. The supermarket is thoughfully organized to make your shopping experience convenient and enjoyable. Naivas offers a foodmarket for all your groceries, with fresh and quality produce.', '', 'media/', '08:00:00', '20:30:00', 'Ground floor', '0758112233', 'onlinemarketing@naivas.co.ke', 'https://www.facebook.com/NaivasSupermarkets/?ref=page_internal', 'https://www.instagram.com/naivas_supermarket/?fbclid=IwAR1KyZyy0R6m2GnySQ5lnTs2rce7BUe6DPlDgr-TKqLRbaI86Hkv3lhv5k4', '', 'https://twitter.com/naivas_kenya?fbclid=IwAR1zWi24y6-Almvdrj2ObocrE-hdiv-LdKD6RXnih-GkQyhXMa-pb7SZ_Ok', 'https://naivas.online/'),
(27, 'Optica', 'media/optica-1.png', 'Healthcare', 'Optica is the premier destination for all things eye care. With a modern an welcoming store where you get expertise, quality products and personalized services to help you achieve optimal vision and style', '', 'media/', '10:00:00', '19:00:00', 'Ground floor', '0709709000', 'support@optica.africa', 'https://www.facebook.com/opticakenya/', 'https://www.instagram.com/opticakenya/', 'https://www.youtube.com/channel/UCxdnH57klG2NMY8hzsGvZQg?view_as=subscriber', 'https://twitter.com/OpticaKenya', 'https://optica.africa/'),
(28, 'Pharmaplus', 'media/Pharmaplus.png', 'Healthcare', 'Welcome to Pharmaplus your trusted source for all your pharmaceutical needs. Pharmaplus carries a comprehensive selection of prescription medications, over-the-counter drugs, vitamins, and supplements', '', 'media/', '00:00:00', '00:00:00', 'Ground floor', '0793560460', 'marketing@pharmaplus.co.ke', 'https://www.facebook.com/PharmaplusKenya/', 'https://www.instagram.com/pharmaplus_kenya/https://www.instagram.com/opticakenya/', 'https://www.youtube.com/channel/UCiOlUYx4qJ2-Y3KaiiiVTlw', 'https://twitter.com/pharmaplus254', 'https://www.pharmapluspharmacies.co.ke/'),
(29, 'Alladin', 'media/Alladin.png', 'Fashion', '\r\nAlladin world of brands. Indulge in a delightful shopping experience where you can explore the latest fashion trends, discover unique statement pieces, and elevate your personal style.', '', 'media/', '09:00:00', '21:00:00', 'First floor', '0791888880', 'customercare@alladin.co.ke', 'https://www.facebook.com/alladinwob/', 'https://www.instagram.com/alladin_wob/?hl=en', '', 'https://twitter.com/Alladin_WOB', 'https://www.alladin.co.ke/');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
