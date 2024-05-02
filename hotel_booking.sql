-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 01:14 PM
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
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotelbooking`
--

CREATE TABLE `hotelbooking` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_address` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(30) DEFAULT NULL,
  `customer_phone` varchar(30) DEFAULT NULL,
  `total_price` varchar(200) NOT NULL,
  `status` varchar(25) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelbooking`
--

INSERT INTO `hotelbooking` (`id`, `hotel_name`, `hotel_address`, `room_type`, `check_in_date`, `check_out_date`, `customer_name`, `customer_email`, `customer_phone`, `total_price`, `status`, `image_url`) VALUES
(8, 'sacher hotel', 'Kantnerstrasse 2', 'suit', '2024-04-01', '2024-04-02', 'Alicia', 'aa@yahoo.com', '4378292887764', '450', 'pending', 'https://cdn.pixabay.com/photo/2015/01/10/11/39/hotel-595121_1280.jpg'),
(9, 'Hilton Hotel', 'Schottenring 11, 1010 Wien', 'double room', '2024-04-06', '2024-04-09', 'Roselyn', 'dfg@gmail.com', '4378668287908', '900', 'pending', 'https://cdn.pixabay.com/photo/2016/11/14/02/28/apartment-1822409_1280.jpg'),
(13, 'chi wong Plaza', 'janis-joplin-Promenade 76', 'suit', '2024-03-29', '2024-03-30', 'JI', 'bbd@yahoo.com', '4378292887764', '200', 'pending', 'https://cdn.pixabay.com/photo/2012/11/22/06/14/hotel-66935_1280.jpg'),
(14, 'Park Hyatt HOTEL3', 'Am Hof 2', 'suit', '2024-03-28', '2024-04-06', 'JI', 'gsx@gmail.com', '4378668287908', '450', 'pending', 'https://cdn.pixabay.com/photo/2015/11/06/11/45/interior-1026452_1280.jpg'),
(16, 'His Royal Majesty Hotel', 'Simmeringer Hauptstrasse 3', 'single bed', '2024-04-03', '2024-04-07', 'Olivia Baker', 'bbd@yahoo.com', '4368826878989', '300', 'confirmed', 'https://cdn.pixabay.com/photo/2017/01/14/12/48/hotel-1979406_1280.jpg'),
(17, 'Hilton Hotel', 'Am Stadtpark 1, 1030 Wien', 'double bed', '2024-04-03', '2024-04-18', 'Alicia', 'dfg@gmail.com', '43728085467', '400', 'confirmed', 'https://cdn.pixabay.com/photo/2016/04/15/11/45/hotel-1330841_1280.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotelbooking`
--
ALTER TABLE `hotelbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
