-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 11:34 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `tokenid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doj` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tokenid`, `name`, `email`, `phone`, `password`, `doj`) VALUES
(1, '', 'Vibinraj Rajesh Kumar', 'vibinrajesh@gmail.com', '8759468261', '$2y$10$ktka.LedPyf8Mt6NZtJOiuxrD4Y6CjqQmJk.NRYD6Xcsuu3kFKLoe', '2023-12-27 15:58:21'),
(2, '', 'Vibinraj Rajesh Kumar', 'vibinrajesh@gmail.com', '8759468261', '$2y$10$1HJwCq8/qWVBd7sMiQctKu4/3NJyc9Of6A7iL5ZcOEBbc.AgaqBsW', '2023-12-27 15:59:29'),
(3, '101409508339060803557', 'Vibinraj Rajesh', 'vibinrajesh2021@gmail.com', '', '', '2023-12-27 15:59:52'),
(4, '', 'Vibinraj Rajesh Kumar', 'vibinrajesh@gmail.com', '8759468261', '$2y$10$L1fkKac9KRnSVXi5YVbInOOp0.Wu9Nr8fmXgURwOgt9UJA40jk4hG', '2023-12-27 16:00:55'),
(5, '', 'Vibinraj Rajesh Kumar', 'vibinrajesh@gmail.com', '8759468261', '$2y$10$INIvqBc8q3R.qz8v0jcTtO27SF2Z5UGTGGEuCF2IFFs.txUa1oqMm', '2023-12-27 16:01:55'),
(6, '', 'Vibinraj Rajesh Kumar', 'vibinrajesh@gmail.com', '8759468261', '$2y$10$m/xP0FXsYvrOEtomvMXZ6uFL1Ocx0spk8rEpUGiPZaynns8DcFMNe', '2023-12-27 16:02:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
