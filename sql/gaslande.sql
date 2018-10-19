-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2018 a las 22:47:18
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
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE `clasificaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ingreso_egreso` varchar(1) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'I=Ingresos E=Egresos',
  `fijo_variable` varchar(1) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'F=Fijo V=Variable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clasificaciones`
--

INSERT INTO `clasificaciones` (`id`, `nombre`, `ingreso_egreso`, `fijo_variable`) VALUES
(1, 'SUELDO', 'I', 'F'),
(2, 'ESTACIONAMIENTO', 'I', 'V'),
(4, 'TRABAJO EXTRA', 'I', 'V'),
(5, 'VENTA DOLARES', 'I', 'V'),
(6, 'OTROS', 'I', 'V'),
(7, 'DPTO-DIVIDENDO', 'E', 'F'),
(8, 'DPTO-GASTOS COMUNES', 'E', 'F'),
(9, 'DPTO-CONTRIBUCIONES', 'E', 'F'),
(10, 'DPTO-INTERNET', 'E', 'F'),
(11, 'DPTO-LUZ', 'E', 'F'),
(12, 'DPTO-AGUA', 'E', 'F'),
(13, 'ALMUERZO TRABAJO', 'E', 'V'),
(14, 'TRANSPORTE', 'E', 'V'),
(15, 'OTROS', 'E', 'V');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id`, `nombre`) VALUES
(1, 'EFECTIVO'),
(2, 'TARJETA CRÉDITO'),
(3, 'TRANSFERENCIA');

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
(36, '2018-10-16', 2220, '', 0, 2, 0),
(37, '2018-10-18', 2160, 'FRUTOS SECOS SEMILLAS ZAPALLO', 15, 2, 1),
(38, '2018-10-19', 1000000, '', 1, 3, 0),
(39, '2018-10-19', 35000, '', 2, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos_old`
--

CREATE TABLE `movimientos_old` (
  `id` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `monto` float NOT NULL,
  `ingreso_egreso` int(11) NOT NULL COMMENT '1=Ingreso 2=Egreso',
  `descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `id_forma_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `movimientos_old`
--

INSERT INTO `movimientos_old` (`id`, `fecha`, `monto`, `ingreso_egreso`, `descripcion`, `id_forma_pago`) VALUES
(22, '02/02/2017', 1509000, 1, 'prueba movimiento', 1),
(23, '21/12/2017', 11111, 2, 'egreso', 2),
(24, '02/05/2018', 454545, 2, '4545drf', 1),
(25, '02/05/2018', 454545, 2, '4545drf', 1),
(26, '02/05/2018', 454545, 2, '4545drf', 1),
(27, '02/05/2018', 454545, 2, '4545drf', 1),
(28, '02/05/2018', 98000, 1, '3/4', 2),
(29, '02/05/2018', 98000, 1, '3/4', 2),
(30, '02/05/2018', 98000, 1, '3/4', 2),
(31, '02/05/2018', 98000, 1, '3/4', 2),
(32, '02/05/2018', 98000, 1, '3/4', 2),
(33, '02/05/2018', 98000, 1, '3/4', 2),
(34, '2018-10-16', 2220, 2, '', 2),
(35, '2018-10-16', 2220, 2, '', 2),
(36, '2018-10-16', 2220, 2, '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos_tarjeta_credito`
--

CREATE TABLE `movimientos_tarjeta_credito` (
  `id_movimiento` int(11) NOT NULL,
  `id_tarjeta_credito` int(11) NOT NULL,
  `cuotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `banco` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`id`, `nombre`, `banco`) VALUES
(1, 'MASTERCARD GOLD', 'SANTANDER'),
(2, 'VISA OPENSKY', 'BCI');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forma_pago` (`id_forma_pago`);

--
-- Indices de la tabla `movimientos_old`
--
ALTER TABLE `movimientos_old`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forma_pago` (`id_forma_pago`);

--
-- Indices de la tabla `movimientos_tarjeta_credito`
--
ALTER TABLE `movimientos_tarjeta_credito`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `movimientos_old`
--
ALTER TABLE `movimientos_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimientos_old`
--
ALTER TABLE `movimientos_old`
  ADD CONSTRAINT `forma_pago` FOREIGN KEY (`id_forma_pago`) REFERENCES `forma_pago` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
