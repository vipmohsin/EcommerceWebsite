-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 10:59 PM
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
-- Database: `myloginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `oprice` int(30) NOT NULL,
  `nprice` int(30) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `category`, `pname`, `oprice`, `nprice`, `discription`, `pimage`, `date`) VALUES
(11, 'Nike', 'bata-1034', 8000, 7000, 'my shoes are good', 'images (1).jpeg', '2024-07-03 01:38:42'),
(12, 'Nike', 'air-101', 30000, 27000, 'its new air jordan ', 'shoes2.webp', '2024-07-05 02:16:34'),
(13, 'Bata', 'bata-108', 3000, 2900, 'its new shoes\r\n', 'shoes1.webp', '2024-07-05 02:17:21'),
(14, 'Nike', 'nike-12', 12000, 10000, 'its affordable bata', 'shoes3.jpg', '2024-07-05 02:18:45'),
(15, 'Air Jordan', 'air-10', 1200, 1000, 'latest  shoes model\r\n\r\n', 'shoes.jpeg', '2024-07-08 12:40:35'),
(16, 'Nike', 'bata-11', 9990, 9900, 'hello it is updated', 'shoes2.jpeg', '2024-07-08 12:46:03'),
(17, 'Nike', 'nike-102', 20000, 18000, 'A shoe is an item of footwear intended to protect and comfort the human foot. Though the human foot ', 'shooes3.jpeg', '2024-07-08 12:56:47'),
(18, 'Nike', 'nike-latest12', 9000, 8000, 'A shoe is an item of footwear intended to protect and comfort the human foot. Though the human foot ', 'shoes4.jpg', '2024-07-08 13:00:40'),
(19, 'Bata', 'bata-032', 12000, 9999, 'a shoe is a comfort for our leg and we provide the best comfortable products for our buyers.', 'shoe12.jpg', '2024-09-20 15:45:54'),
(20, 'Air Jordan', 'air-7', 13000, 10000, 'a shoe is a comfort for our leg and we provide the best comfortable products for our buyers.', 'shoe123.jpg', '2024-09-20 15:46:46'),
(21, 'Nike', 'nike pro', 11000, 8999, 'a shoe is a comfort for our leg and we provide the best comfortable products for our buyers.', 'shoe124.jpg', '2024-09-20 15:47:26'),
(22, 'Nike', 'bata AD-1', 15000, 13999, 'a shoe is a comfort for our leg and we provide the best comfortable products for our buyers.', 'shoe197.jpg', '2024-09-20 15:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `email`, `password`, `phone`, `country`, `date`) VALUES
(1, 'Mohsin', 'khan@gmail.com', '6345a8a1d2d04d5e9f0b3fea202bbfb2', 8382, 'Pakistan', '0000-00-00 00:00:00'),
(2, 'Ayan', 'ayan@gmail.com', '0b2cfd4581fbe8b7195bc16ae5e2b92c', 2147483647, 'Pakistan korangi karachi stree', '0000-00-00 00:00:00'),
(3, 'MOHSIN Khan', 'mohsin12@gmail.com', '6345a8a1d2d04d5e9f0b3fea202bbfb2', 213808130, 'Pakistan classic 5 no park', '2024-07-27 02:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `items` varchar(250) NOT NULL,
  `UserItems` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `buyeremail` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postalcode` int(6) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `land mark` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `OrderStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `items`, `UserItems`, `amount`, `buyeremail`, `name`, `email`, `cell`, `country`, `city`, `postalcode`, `adress`, `land mark`, `date`, `OrderStatus`) VALUES
(1, 'Id=12air-101(1) , Id=17nike-102(1) , Id=14nike-12(1)', '', 'Amount To Pay: 55,25', '', 'Zain Faheem Khan', 'zainofficial139@gmail.com', 2147483647, 'Pakistan', 'Karachi', 0, 'korangi 5 street no 2', '', '0000-00-00 00:00:00', 'Order Sent'),
(2, 'Id=13bata-108(1) , Id=18nike-latest12(1)', '', 'Amount To Pay: 11,150', '', 'Zain Faheem Khan', 'Farooqifarooqi7@gmail.com', 2147483647, 'Pakistan', 'Karachi', 121, 'korangi 5 street no 2', '3124', '0000-00-00 00:00:00', 'command'),
(3, 'Id=12air-101(3) , Id=17nike-102(1)', '', 'Amount To Pay: 99,250', '', 'Zain Faheem Khan', 'Farooqifarooqi7@gmail.com', 2147483647, 'Pakistan', 'Karachi', 0, 'korangi 5 street no 2', 'near water pump', '0000-00-00 00:00:00', 'Order Sent'),
(4, 'Id=18nike-latest12(1) , Id=11bata-1034(1) , Id=15air-10(1)', '', 'Amount To Pay: 16,250', '', 'Mohsin', 'mohsin@gmail.com', 2147483647, 'Pakistan', 'Karachi', 340, 'Korangi No. 5 Kps School, Karachi  ', 'near water pump', '0000-00-00 00:00:00', 'Order Sent'),
(6, 'Id=14nike-12(1)', '', 'Amount To Pay: 10,250', '', 'khan', 'mykhan@gmail.com', 2147483647, 'Pakistan', 'Karachi', 121, 'lahorwe No. 5 Kps School, Karachi  ', 'near kps school', '0000-00-00 00:00:00', 'Order Sent'),
(7, 'Id=14nike-12(2)', '', 'Amount To Pay: 20,250', '', 'MOHSIN Khan', 'mohsin@gmail.com', 312121212, 'Pakistan', 'Karachi', 121, 'korangi 5 street no 2', 'near clecnic', '0000-00-00 00:00:00', 'Order Sent'),
(9, 'Id=12air-101(1)', '', 'Amount To Pay: 27,250', '', 'nabeel', 'Farooqifarooqi7@gmail.com', 3134891, 'Pakistan', 'Karachi', 313, 'korangi no.4 near sultan hospital', '', '0000-00-00 00:00:00', 'pending'),
(14, 'Id=14nike-12(1) ,  Id=16bata-11(1) ,  Id=17nike-102(1)', '', 'Amount To Pay: 38,150', 'mykhan@gmail.com', 'Zain Faheem Khan', 'mykhan@gmail.com', 2147483647, 'Pakistan', 'Karachi', 0, 'korangi no.4 near sultan hospital', '131313', '2024-07-27 12:08:28', 'Order Sent'),
(15, 'Id=12air-101(1) ,  Id=13bata-108(1)', '', 'Amount To Pay: 30,150', 'zainofficial139@gmail.com', 'mnkajdfkh', 'zainofficial139@gmail.com', 2147483647, 'Pakistan', 'Karachi', 0, 'lahorwe No. 5 Kps School, Karachi  ', 'ad', '2024-07-30 11:44:13', 'pending'),
(19, 'Id=12air-101(1)', '', 'Amount To Pay: 27,250', '', 'Zain Faheem Khan', 'mykhan@gmail.com', 2147483647, 'Pakistan', 'Karachi', 0, 'korangi 5 street no 2', 'near clecnic', '2024-07-30 12:29:45', 'pending'),
(20, 'Id=12air-101(1) ,  Id=14nike-12(1)', '', 'Amount To Pay: 37,250', 'mohsin12@gmail.com', 'Zain Faheem Khan', 'zainofficial139@gmail.com', 2147483647, 'Pakistan', 'Karachi', 0, 'faf', 'fafsa', '2024-07-30 12:36:11', 'pending'),
(21, 'Id=18nike-latest12(1)', '', 'Amount To Pay: 8,250', 'mohsin12@gmail.com', 'Mohsin Khan', 'zainofficial1939@gmail.com', 9854, 'Pakistan', 'Karachi', 0, 'fgf', '', '2024-09-25 15:14:23', 'pending'),
(22, 'Id=15air-10(1) ,  Id=12air-101(1) ,  Id=14nike-12(1) ,  Id=18nike-latest12(1)', ' 1air-10(1) =1000 ,  2air-101(1) =28000 ,  3nike-12(1) =38000 ,  4nike-latest12(1) =46000           ', 'Amount To Pay: 46,250', 'mohsin12@gmail.com', 'Mohsin Khan', '03160205957@gmail.com', 11341414, 'Pakistan', 'Karachi', 4141, '4141faef', 'afaafarfea', '2024-11-11 14:50:16', 'pending'),
(23, 'Id=13bata-108(1) ,  Id=18nike-latest12(1)', ' bata-108(1) =2900 ,  nike-latest12(1) =10900', 'Amount To Pay: 11,150', 'mohsin12@gmail.com', 'Mohsin Khan', 'mohsin123@gmail.com', 2490829, 'Pakistan', 'Karachi', 242, 'koarachi korangi no. 5 1/2 near water filter area d house no 501', '14', '2024-11-22 09:45:55', 'pending'),
(24, 'Id=13bata-108(1) ,  Id=18nike-latest12(1) ,  Id=21nike pro(1)', ' bata-108(1) =2900 ,  nike-latest12(1) =10900 ,  nike pro(1) =19899', 'Amount To Pay: 20,149', 'mohsin12@gmail.com', 'Mohsin Khan', 'mykhan@gmail.com', 425346, 'Pakistan', 'Karachi', 36463, '3gsdfhtdujhdbssa', 'ga53453', '2024-11-22 09:48:45', 'pending'),
(25, 'Id=21nike pro(1) ,  Id=16bata-11(1) ,  Id=19bata-032(1)', ' nike pro(1) =8999 ,  bata-11(1) =18899 ,  bata-032(1) =28898', 'Amount To Pay: 29,148', 'mohsin12@gmail.com', 'mohsin', 'mohsin@gmail.com', 310103030, 'Pakistan', 'Karachi', 92482, 'korangi 5 main road korean', '1389', '2024-11-22 09:52:33', 'pending'),
(26, 'Id=14nike-12(1)', ' nike-12(1) =10000', 'Amount To Pay: 10,250', 'mohsin12@gmail.com', 'abbas', 'abbas@gmail.com', 19048194, 'Pakistan', 'Karachi', 90148, 'near korangi 5 1/2', '914', '2024-11-22 09:54:46', 'Order Sent'),
(27, 'Id=12air-101(1) ,  Id=14nike-12(1)', ' air-101(1) =27000 ,  nike-12(1) =37000', 'Amount To Pay: 37,250', 'mohsin12@gmail.com', 'Mohsin Khan', 'mohsin112@gmail.com', 3143132, 'Pakistan', 'Karachi', 15, 'mohsisndfnsdkfnnjznmdmnz', '2fzdsz', '2024-12-08 02:57:34', 'Order Sent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `password`, `dob`, `gender`, `image`, `date`) VALUES
(4, 'MOHSIN Khan', 'mohsin@gmail.com', 'mohsin', '2024-06-25', 'Male', 'mohsin.png', '0000-00-00'),
(6, 'Mohsin Khan', 'zainofficial139@gmail.com', '$2y$10$FGxyvr4.QTcmNDy7yuhiqe7HbKldTufp81LmmihvxvI.y2txIc9Ty', '2024-06-26', 'Male', 'mohsin.png', '0000-00-00'),
(7, 'My Khan', 'mykhan@gmail.com', '$2y$10$Iu2CNyZrLASo9IUP3KXGAuzJd7qjmjzTyJzaINnaMmgF0KaK7mDUm', '2024-07-03', 'Male', 'mohsin.png', '0000-00-00'),
(8, 'Ayan', 'ayan@gmail.com', '$2y$10$nPUt4B3UYgXAMC29uy9emufuknmrxYAy/ptLIojqAIhPYFkcW7vDu', '2024-07-08', 'Male', 'mydp.jpeg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
