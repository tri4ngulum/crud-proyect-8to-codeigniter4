-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2023 at 03:24 AM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usuariopd`
--

-- --------------------------------------------------------

--
-- Table structure for table `boletos`
--

CREATE TABLE `boletos` (
  `id_boleto` int(11) NOT NULL,
  `nombre_boleto` varchar(50) NOT NULL,
  `precio_boleto` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `boletos`
--

INSERT INTO `boletos` (`id_boleto`, `nombre_boleto`, `precio_boleto`, `fecha`) VALUES
(1, 'Boleto Normal', 50, '2022-11-26'),
(3, 'Boleto Super ', 101.1, '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `metodosPago`
--

CREATE TABLE `metodosPago` (
  `id_metodoPago` int(11) NOT NULL,
  `nombre_metodoPago` varchar(50) NOT NULL,
  `clave_metodoPago` varchar(30) NOT NULL,
  `dia_metodoPago` int(11) NOT NULL,
  `year_metodoPago` int(4) NOT NULL,
  `cve_metodoPago` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `metodosPago`
--

INSERT INTO `metodosPago` (`id_metodoPago`, `nombre_metodoPago`, `clave_metodoPago`, `dia_metodoPago`, `year_metodoPago`, `cve_metodoPago`) VALUES
(3, 'Mara', '123', 12, 1234, 123),
(4, 'Mara', '12345', 10, 2030, 123),
(5, 'joaquin', '12345', 10, 2090, 134),
(8, 'Banorte', '1239876', 90, 2080, 456),
(9, 'Banamex', '1234567890', 29, 9999, 123),
(10, 'Alfil', '1234567', 20, 2000, 123),
(11, 'joj', '12345', 89, 8989, 897),
(12, 'pepe', '123456', 2, 2034, 321),
(13, 'Nuevo', '1234567898943', 20, 2090, 123),
(14, 'pepe', '1234412341324123', 12, 2078, 546),
(15, 'jose madrazo', '1324123421342134', 23, 2097, 435),
(16, 'sandra', '123454', 9, 909, 123);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `estatus_rol` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => Habilitado, 2 => Deshabilitado',
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_rol`, `estatus_rol`, `rol`) VALUES
(777, 1, 'admin'),
(888, 1, 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `estatus_usuario` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => Habilitado, 2 => Deshabilitado',
  `nombre_usuario` varchar(50) NOT NULL,
  `ap_paterno_usuario` varchar(50) NOT NULL,
  `ap_materno_usuario` varchar(50) NOT NULL,
  `sexo_usuario` tinyint(1) NOT NULL COMMENT '1 => Masc, 2 => Fem',
  `email_usuario` varchar(70) NOT NULL,
  `password_usuario` varchar(64) NOT NULL,
  `imagen_usuario` varchar(100) DEFAULT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `estatus_usuario`, `nombre_usuario`, `ap_paterno_usuario`, `ap_materno_usuario`, `sexo_usuario`, `email_usuario`, `password_usuario`, `imagen_usuario`, `id_rol`) VALUES
(1, 1, 'pepe', 'admin', 'god', 1, 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', NULL, 777),
(4, 2, 'mara cruz cruz', 'mara', 'mara', 2, 'mara@mara.com', 'bba08e1c62f7ddbd9489f82da7bdf2fe929db3b881b90ff7d64e4b61d9341201', 'ArcoLinux-2022-11-28-1669668023_screenshot_1920x1080.jpg', 888),
(5, 1, 'pedro', 'pedro', 'pedro', 1, 'pedro@pedro.com', 'ee5cd7d5d96c8874117891b2c92a036f96918e66c102bc698ae77542c186f981', '', 888),
(7, 1, 'joaquin', 'joaquin', 'joaquin', 2, 'joaquin@joaquin.com', '76aa1f8cc22a152e69e0b286c6c6658add458a8abd7f98a0c261523381fbd646', NULL, 888),
(9, 1, 'pepe', 'millas', 'balas', 1, 'pepe@balas.com', '2bac5324c7e7834a912168c9ee9a78a7b50bb089eb29b28689c03d94e8343ef2', NULL, 888),
(10, 1, 'jose', 'lorez', 'madrazo', 1, 'jose@lorez.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', NULL, 888);

-- --------------------------------------------------------

--
-- Table structure for table `usuario_metodoPago`
--

CREATE TABLE `usuario_metodoPago` (
  `id_usuario_metodoPago` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_metodoPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `usuario_metodoPago`
--

INSERT INTO `usuario_metodoPago` (`id_usuario_metodoPago`, `id_usuario`, `id_metodoPago`) VALUES
(4, 4, 8),
(5, 1, 9),
(6, 4, 10),
(7, 9, 12),
(8, 1, 13),
(9, 1, 14),
(10, 10, 15);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_boleto` int(11) NOT NULL,
  `precio_boleto` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total_venta` float NOT NULL,
  `fecha_venta` date NOT NULL,
  `id_metodoPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_usuario`, `id_boleto`, `precio_boleto`, `cantidad`, `total_venta`, `fecha_venta`, `id_metodoPago`) VALUES
(21, 4, 1, 50, 1, 50, '2022-11-30', 8),
(22, 9, 3, 101.1, 2, 202.2, '2022-11-30', 12),
(23, 4, 1, 50, 1, 50, '2022-11-30', 3),
(24, 1, 1, 50, 10, 500, '2022-11-03', 5),
(25, 1, 1, 50, 1, 50, '2022-12-09', 4),
(26, 4, 1, 50, 1, 50, '2022-11-29', 4),
(28, 7, 1, 50, 1, 50, '2022-12-01', 5),
(29, 4, 3, 101.1, 10, 1011, '2022-11-24', 3),
(30, 10, 3, 101.1, 3, 303.3, '2022-12-01', 15),
(32, 4, 1, 50, 10, 500, '2022-11-24', 10),
(33, 1, 1, 50, 10, 500, '2022-11-25', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boletos`
--
ALTER TABLE `boletos`
  ADD PRIMARY KEY (`id_boleto`);

--
-- Indexes for table `metodosPago`
--
ALTER TABLE `metodosPago`
  ADD PRIMARY KEY (`id_metodoPago`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indexes for table `usuario_metodoPago`
--
ALTER TABLE `usuario_metodoPago`
  ADD PRIMARY KEY (`id_usuario_metodoPago`),
  ADD KEY `id_metodoPago` (`id_metodoPago`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_boleto` (`id_boleto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `ventas_ibfk_3` (`id_metodoPago`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boletos`
--
ALTER TABLE `boletos`
  MODIFY `id_boleto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metodosPago`
--
ALTER TABLE `metodosPago`
  MODIFY `id_metodoPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario_metodoPago`
--
ALTER TABLE `usuario_metodoPago`
  MODIFY `id_usuario_metodoPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario_metodoPago`
--
ALTER TABLE `usuario_metodoPago`
  ADD CONSTRAINT `usuario_metodoPago_ibfk_1` FOREIGN KEY (`id_metodoPago`) REFERENCES `metodosPago` (`id_metodoPago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_metodoPago_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_boleto`) REFERENCES `boletos` (`id_boleto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`id_metodoPago`) REFERENCES `metodosPago` (`id_metodoPago`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
