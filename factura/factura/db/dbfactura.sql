-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 07:05:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbfactura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `costo` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cant_inventario` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `costo`, `precio`, `cant_inventario`, `descripcion`) VALUES
(1, 'Coca Cola', 3000, 4500, 10, 'Bebida color humilde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` int(12) NOT NULL,
  `producto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`nombre`, `direccion`, `telefono`, `producto`) VALUES
('Coca Cola', 'asdasda', 34242, 'asda'),
('Yeison Martinez', 'asdasd', 234234, 'Coca Cola'),
('Gaseosa S.A', 'Calle 20', 323323, 'Coca Cola'),
('Coca Cola', 'asdasda', 342342, 'Coca Cola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id-venta` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id-venta`, `nombre`, `cantidad`, `precio`, `total`) VALUES
(1, 'Coca Cola', 2, 3000, 6000),
(2, 'Coca Cola', 3, 3000, 9000),
(3, 'Coca Cola', 3, 3000, 9000),
(4, 'Coca Cola', 3, 3000, 9000),
(5, 'Coca Cola', 3, 3000, 9000),
(6, 'Coca Cola', 2, 3000, 6000),
(7, 'Coca Cola', 2, 3000, 6000),
(8, '', 0, 0, 0),
(9, '', 0, 0, 0),
(10, 'Coca Cola', 3, 4500, 13500),
(11, 'Coca Cola', 3, 4500, 13500),
(12, '', 0, 0, 0),
(13, '', 0, 0, 0),
(14, '', 0, 0, 0),
(15, '', 0, 0, 0),
(16, '', 0, 0, 0),
(17, '', 0, 0, 0),
(18, '', 0, 0, 0),
(19, '', 0, 0, 0),
(20, 'Coca Cola', 2, 4500, 9000),
(21, 'Coca Cola', 3, 4500, 13500),
(22, 'Coca Cola', 3, 4500, 13500),
(23, 'Coca Cola', 3, 4500, 13500),
(24, 'Coca Cola', 3, 4500, 13500),
(25, 'Coca Cola', 3, 4500, 13500),
(26, 'Coca Cola', 3, 4500, 13500),
(27, 'Coca Cola', 3, 4500, 13500),
(28, 'Coca Cola', 3, 4500, 13500),
(29, 'Coca Cola', 3, 4500, 13500),
(30, 'Coca Cola', 3, 4500, 13500),
(31, 'Coca Cola', 3, 4500, 13500),
(32, 'Coca Cola', 3, 4500, 13500),
(33, 'Coca Cola', 3, 4500, 13500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`telefono`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id-venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id-venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
