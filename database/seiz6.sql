-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 10:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seiz6`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario6`
--

CREATE TABLE `usuario6` (
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasena` varchar(15) DEFAULT NULL,
  `auditoria` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario6`
--

INSERT INTO `usuario6` (`nombre`, `correo`, `usuario`, `contrasena`, `auditoria`) VALUES
('carlos', 'carlos@gmail.com', 'carlos', 'carlos', '2023-06-23 22:00:24'),
('jacobo1432', 'jacob12@gmail.com', 'jacoter', 'E9syWt3Yu=j9%Sg', '2023-06-23 21:50:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario6`
--
ALTER TABLE `usuario6`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
