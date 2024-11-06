-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 01:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `email`, `phone`, `dob`, `city`, `password`, `picture`, `status`, `active`) VALUES
('EMP/062024/001', 'shann agarwal', 'suhan', 'suhan@gmail.com', '123456776', '2000-03-05', 'kolkata', '$2y$10$tqeqzYn4S6fQ8e7zO/i6xOalBzF4P0VjG8jVz18QxXz', '../others/upload/667bb58d5b094_BKD_0095.jpg', 0, 0),
('EMP/062024/002', 'Rajesh Das', 'rahul', 'rahul@gmail.com', '9955774488', '2000-03-05', 'kolkata', '$2y$10$Y1F3C2IrncF7zbGvmDA2Re.vuyqJ2se4N0axjbIsJql', '../others/upload/BKD_0188.jpg665cb9a636ffc_BKD_0188.jpg', 0, 0),
('EMP/062024/003', 'Rajesh Das', 'rajeshdas', 'rajeshdas032000@gmail.com', '06290983238', '2000-02-03', 'kolkata', '$2y$10$R4qFNS0DLMdWbt62zsgdu.8rj9vMoeSuEmL3l3k/csJT95v.nwggq', '../others/upload/667d676bd93dd_BKD_0188.jpg', 0, 0),
('EMP/062024/004', 'mahi roy', 'mahi', 'mahi@gmail.com', '6655443322', '2000-01-01', 'kolkata', '$2y$10$AYAFfq6G5MDn.vRm1Q6Inu/qUeVFJUpJchXo2ClPyo7', '../others/upload/667ea06a82c39_BKD_0140 (1).jpg', 0, 0),
('EMP/072024/001', 'saikat', 'saikat', 'saikat@gmail.com', '9876543210', '2000-01-01', 'kolkata', '$2y$10$vQscjpGYfBUuGapULKtSCelql09vNE.a2UjK1B4OLsjdXkt41WT5S', '../others/upload/66825bf5aaadf_BKD_0044.jpg', 1, 1),
('EMP/072024/002', 'suman', 'suman', 'suman@gmail.com', '2233445566', '2000-09-08', 'kolkata', '$2y$10$IrLSaui0NF1Ji/B/tG/ijOTXZSqIT/ZjGboqZu5Lwv5js0lWb9q6q', '../others/upload/66826ba45dfe3_BKD_0189.jpg', 0, 0),
('EMP/072024/003', 'Anik Das', 'anik', 'anik@gmail.com', '7766776677', '2000-02-02', 'kolkata', '$2y$10$obIlgm58cTJ.FI4tYbYqn.APh5hEjZkku1LSA/4.eoD5lG.mtHyLO', '../others/upload/66828e34d3318_BKD_0188.jpg', 0, 0),
('EMP/072024/004', 'priti', 'priti', 'priti@gmail.com', '9988776677', '2000-02-02', 'kolkata', '$2y$10$o7ldCLQN1JBpGp0CuAZNp.EOqZ8KhhDDETcW4/tkHVXbpIoksiP7e', '../others/upload/66828ecef3bb1_BKD_0189.jpg', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
