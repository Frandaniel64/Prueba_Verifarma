-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-04-2022 a las 06:05:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `verifarma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacias`
--

CREATE TABLE `farmacias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `direccion` varchar(98) NOT NULL,
  `latitud` decimal(10,8) NOT NULL,
  `longitud` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `farmacias`
--

INSERT INTO `farmacias` (`id`, `nombre`, `direccion`, `latitud`, `longitud`) VALUES
(1, 'prueba', 'prueba9', '50.00000000', '40.00000000'),
(2, 'farmacia2', 'ramon falcon 300', '50.03200000', '45.00300000'),
(3, 'Monte Castr', 'AV ALVAREZ JONTE  4886', '-99.99999999', '-3.46204290'),
(4, 'Villa Gral.', 'AV JUAN B. JUSTO  4995', '-5.84689760', '-3.46117066'),
(5, 'Recoleta', 'GUEMES 3002', '-5.84093053', '-3.45917612'),
(6, 'Liniers', 'CARHUE 40', '-5.85248211', '-3.46396160'),
(7, 'Monte Castr', 'AV ALVAREZ JONTE  4886', '-5.85066499', '-3.46204290'),
(8, 'Villa Gral', 'Mitre AV JUAN B. JUSTO 4995', '-5.84730685', '-3.46147342'),
(9, 'Villa Ortuz', 'AV ELCANO  5391', '-5.84607373', '-3.45819643'),
(10, 'Coghlan', 'AV MONROE   3901', '-5.84675386', '-3.45627513'),
(11, 'Caballito', 'DOBLAS  3195', '-5.84312377', '-3.46190991'),
(12, 'Villa Del P', 'AV ALVAREZ JONTE 228', '-5.84754306', '-3.46059651'),
(13, 'Palermo', 'CERVIÑO  2311', '-58.40670800', '-3.45808106'),
(14, 'Farmacity', 'San Pedrito 33', '-34.63561100', '-58.48480050');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
