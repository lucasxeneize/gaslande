-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2018 a las 22:48:50
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gaslande`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `monto` float NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `id_clasificacion` int(11) NOT NULL,
  `id_forma_pago` int(11) NOT NULL,
  `cuotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id`, `fecha`, `monto`, `descripcion`, `id_clasificacion`, `id_forma_pago`, `cuotas`) VALUES
(22, '02/02/2017', 1509000, 'prueba movimiento', 0, 1, 0),
(23, '21/12/2017', 11111, 'egreso', 0, 2, 0),
(24, '02/05/2018', 454545, '4545drf', 0, 1, 0),
(25, '02/05/2018', 454545, '4545drf', 0, 1, 0),
(26, '02/05/2018', 454545, '4545drf', 0, 1, 0),
(27, '02/05/2018', 454545, '4545drf', 0, 1, 0),
(28, '02/05/2018', 98000, '3/4', 0, 2, 0),
(29, '02/05/2018', 98000, '3/4', 0, 2, 0),
(30, '02/05/2018', 98000, '3/4', 0, 2, 0),
(31, '02/05/2018', 98000, '3/4', 0, 2, 0),
(32, '02/05/2018', 98000, '3/4', 0, 2, 0),
(33, '02/05/2018', 98000, '3/4', 0, 2, 0),
(34, '2018-10-16', 2220, '', 0, 2, 0),
(35, '2018-10-16', 2220, '', 0, 2, 0),
(36, '2018-10-16', 2220, '', 0, 2, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forma_pago` (`id_forma_pago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
