-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 01:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houseofcalypso`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_item_id`, `user_id`, `product_id`, `quantity`) VALUES
(26, 4, 22, 3),
(36, 1, 12, 2),
(37, 1, 19, 1),
(41, 6, 20, 6),
(43, 6, 5, 1),
(45, 6, 10, 1),
(46, 6, 2, 1),
(47, 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL,
  `material` varchar(30) NOT NULL,
  `colour` varchar(30) NOT NULL,
  `measurements` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_category_id`, `name`, `description`, `material`, `colour`, `measurements`, `stock`, `price`) VALUES
(1, 3, 'Jahi Gold Bowl', 'These sublime Jahi gold bowls are handmade with a golden brass finish and rustic, imperfect rim. They make a beautiful decorative accessory.', 'Brass', 'Brushed Gold', '4cm x 9.5cm x 9.5cm', 45, 1900),
(2, 2, 'Jahi Gold Plate', 'Our Jahi brushed gold plates are handmade from solid brass, they have an imperfect handmade feel to them. Perfect for holding jewellery or as a table decoration.', 'Brass', 'Brushed Gold', '2cm x 13.5cm x 13.5cm', 49, 2430),
(3, 1, 'Ea Matcha Cup', 'Beautiful stoneware matcha cup handmade by Danish artists TYBO. EA matcha cup is a beautifully shaped stoneware cup inspired by traditional Japanese design. Each piece is hand thrown and glazed by hand in their workshop in Jutland, DK. Matcha ceremon', 'Stoneware', 'Eggshell White', '10.5cm × 8cm', 100, 3200),
(4, 2, 'Aio Stoneware Platter', 'Beautiful stoneware platter handmade by Danish artists TYBO.With a devotion to details and simple aesthetics, TYBO creates functional handcrafted objects to enjoy for everyday use.', 'Stoneware', 'Olive Brown', 'w 18cm', 120, 3000),
(5, 1, 'Hasami Mug Medium', 'The mugs are crafted from Hasami’s custom blend of porcelain and clay, which gives the things a lovely matte finish. It is the perfect everyday coffee or tea mug, and both dishwasher and microwave safe.', 'Porcelain & Clay', 'Black', '8cm x 9cm x 8.5 cm', 249, 3100),
(6, 1, 'Hasami Mug Small', 'Beautiful minimalistic small mugs by Japanese Hasami Porcelain. The mugs are crafted from Hasami’s custom blend of porcelain and clay, which gives the things a lovely matte finish. The mugs are more textured to touch than traditional porcelain, which', 'Porcelain & Clay', 'Natural', '7.2cm x 8cm x 8.5 cm', 250, 2400),
(7, 1, 'Hasami Mug Large', 'The mugs are crafted from Hasami’s custom blend of porcelain and clay and glazed with a custom handmade glaze.', 'Porcelain & Clay', 'Grey', '10.6cm x 10cm x 8.5 cm', 250, 3500),
(8, 4, 'Hasami Milk Pitcher', 'The milk pitcher is crafted from Hasami’s custom blend of porcelain and clay, which gives the pitcher a lovely matte finish. The pitcher are more textured to touch than traditional porcelain, which evolves in time with use gets softer with use.', 'Porcelain & Clay', 'Grey', '5cm x 8cm x 5cm', 150, 2900),
(9, 1, 'Viki Weiland Stoneware Mug', 'Beautiful stoneware mug handmade by Viki Weiland - a ceramic artist from Copenhagen, Denmark. The style is simple and natural yet raw with a focus on quality, material, and detail.', 'Stoneware', 'Dark', '9cm x 5cm x 8cm', 20, 3600),
(10, 1, 'Ryoku-Yu Tea Cup', 'Nishimura has a fondness for antique pottery and the Kannyu patterns that develop over time as liquids permeate the clay. Her vessels will develop subtle crackle patterns with use and age.', 'Ceramic', 'Mint', 'dia 8cm x 6cm', 48, 2500),
(11, 1, 'Two-Tone Mug', 'Each handmade piece in this series will vary slightly in size and appearance. The mug contains some bronze glazing and is not suitable for use in microwave ovens.', 'Semi-porcelain', 'Bronze', 'dia 7cm x 7cm', 20, 3500),
(12, 1, 'Kittachi Mug', 'The Kittachi coffee mug has a slender, cylindrical design which retains heat well while maintaining the pleasant aroma of the contents.', 'Ceramic', 'Metallic', 'dia 5cm x 11cm', 18, 3500),
(13, 2, 'Madison Charger Plate', 'The Madison charger plate serves with elegance and luxury. A timeless piece of stoneware designed and made by Penny Kelly.', 'Stoneware', 'Ivory', 'w 25cm', 35, 5000),
(14, 2, 'Everyday Lunch Plate in Marshmellow', 'This coarse, bright terracotta colored clay is iced in a glossy white glaze layered on top of a blush pink that pokes through in speckles, crackles and swoops. A fun “neutral” that has enough variation to work on its own, but also pairs well with oth', 'Clay', 'Marshmellow', 'w 17cm', 20, 3700),
(15, 2, 'Everyday Lunch Plate in Morning Bun', 'Like a treat pulled fresh out from the oven, this toasty brown glaze is snuggled inside a buff clay – a combo that goes together like cinnamon and sugar.', 'Clay', 'Morning Bun', 'w 17cm', 20, 3700),
(16, 2, 'Everyday Lunch Plate in Poppy Party', 'Made to highlight the clay used to throw it, this line is only glazed on the inside. The outside is left coarse and raw, just a few steps removed from the earth it was dug from.', 'Clay', 'Poppy Party', 'w 17cm', 20, 3700),
(17, 2, 'Pacific Drift Share Plate', 'Inspired by the idea of serving food on a mortared out piece of stone, we designed this shape to bring you a feeling of closeness with nature. Think the exact opposite of Grandma’s china. It’s heavy, with a matte finish and a cratered out center that', 'Stoneware', 'Grey', 'dia 19cm x  2cm', 50, 4000),
(18, 3, 'Savanna Wave Bowl', 'It’s spectacular, it’s swoopy, and it’s good for soup-y!', 'Stoneware', 'Earth Brown', 'dia 14cm x 5cm', 50, 4500),
(19, 4, 'Laetitia di Goia Pitcher', 'Beautiful geometric pitcher by French artist Laetitia Di Gioia. Perfect for serving your favorite drink or for flowers. The outside has a lovely matt glaze and glossy inside, which makes it practical for everyday use and easy to clean.', 'Porcelain & Clay', 'Eggshell', 'h 22cm x 9cm', 29, 11100),
(20, 4, 'Viggo Milk Jug', 'The Viggo milk pitcher is part of the new Viggo collection handmade by TYBO art and craft. Viggo Tyrrestrup was a passionated artist and designer. Inspired by his work we did the drawings for this collection.', 'Stoneware', 'Ash Grey', 'h 8cm x 8cm', 94, 3500),
(21, 3, 'Gold Sake Bowl', 'Maekawa’s pottery is made using the iron-rich soil of Tokoname and the red clay that is appreciated to brew the finest tasting tea.', 'Ceramic', 'Iron Red', 'dia 5.5cm x h 3.3cm', 50, 2500),
(22, 3, 'Oribe Tea Bowl', 'Tea bowl made from Czech stoneware with cracked slip surface and Oribe glaze (a copper glaze) over the slip.', 'Ceramic', 'Copper', 'w 15cm x d 14.5cm x h 9cm', 7, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `category_name`) VALUES
(1, 'Mugs'),
(2, 'Plates'),
(3, 'Bowls'),
(4, 'Jugs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `phone`, `email`, `password`) VALUES
(1, 'John Doe', '7869705969', 'johndoe@email.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'Jane Doe', '7959649697', 'janedoe@email.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e'),
(4, 'Jules Verne', '8594858584', 'julesverne@email.com', '37cb86f135333be07db53d32fb3498819a59f3e5'),
(6, 'harsha d', '9623200674', 'harshadespnde@email.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `cart_user_fk` (`user_id`),
  ADD KEY `cart_product_fk` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category_fk` (`product_category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `cart_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_category_fk` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`product_category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
