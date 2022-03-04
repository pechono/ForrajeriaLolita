-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2022 a las 03:53:35
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polirubrololita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` int(5) NOT NULL,
  `precio_inicial` decimal(10,0) NOT NULL,
  `precio_final` decimal(10,0) NOT NULL,
  `limites_descuento` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_unidadVenta` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `caducidad` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nombre`, `id_tipo`, `precio_inicial`, `precio_final`, `limites_descuento`, `id_unidadVenta`, `caducidad`, `detalles`, `activo`) VALUES
(1, 'haguuis xg', 2, '55', '77', '10-12', '1', 'no', '-', 1),
(2, 'doggi ', 1, '1500', '2800', '10', '1', 'no', '-\r\n', 1),
(3, 'lecheentera ilolai', 2, '100', '178', '10-12', '1', 'si', '-', 1),
(4, 'leche descremada ilolai', 1, '50', '75', '10-12', '1', 'si', 'cidado con el lobo', 1),
(5, 'Si Diet', 2, '120', '180', '10-12', 'unidad', 'si', '-', 1),
(6, 'Si Diet', 2, '100', '180', '10-12', '1', 'si', '----', 1),
(7, 'ala matick 3litros', 1, '17', '27', '14', 'unidad', 'no', 'ver', 1),
(8, 'PABLO BALSAMO', 1, '1', '1', '1', 'unidad', 'si', 'hola', 1),
(9, 'ala matick 3litros', 1, '-1', '1', '1', 'unidad', 'no', 'ver', 1),
(10, 'ala matick 3litros', 1, '-1', '1', '1', 'unidad', 'no', 'ver', 1),
(11, 'ala matick 3litros', 1, '-1', '1', '1', 'unidad', 'no', 'ver', 1),
(12, 'ala matick 3litros', 1, '-1', '1', '1', 'unidad', 'no', 'ver', 1),
(13, 'ala matick 3litros', 1, '-1', '1', '1', 'unidad', 'no', 'ver', 1),
(14, 'ala matick 3litros', 1, '-1', '1', '1', 'unidad', 'no', 'ver', 1),
(15, 'ala matick 3litros', 1, '-1', '1', '1', 'unidad', 'si', 'ver', 1),
(16, 'pedigri cachorro 20kg', 1, '2050', '4000', '10', 'bolsa', 'no', 'bolsa amarilla con rojo', 1),
(17, 'pedigri cachorro 20kg', 1, '2050', '4000', '10', 'bolsa', 'no', 'bolsa amarilla con rojo', 1),
(18, 'pedigri adulto 20kg', 5, '2000', '4000', '10', 'bolsa', 'no', 'bolsa amarilla con rojo', 1),
(19, 'pedigri adulto 20kg', 5, '2000', '4000', '10', 'bolsa', 'no', 'bolsa amarilla', 1),
(20, 'Gran Pastor 10kg cachorro', 2, '2000', '4000', '10', 'bolsa', 'si', 'blncacon verde fluor ', 1),
(21, 'pritty limon 2,25l sin azucar', 3, '110', '225', '0', 'unidad', 'si', '-', 1),
(22, 'llevar Mate  Cruz de Malta 1kg -suave y duraera', 1, '230', '340', '3', 'unidad', 'si', 'hoja mas grande', 1),
(23, 'jabon', 4, '100', '150', '10', '10litro', 'no', '+ de 4 descuento', 1),
(24, 'leche ILOLAI descremada', 8, '80', '112', '10', 'unidad', 'si', '-', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `cantidad` decimal(10,0) NOT NULL,
  `id_art` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(6) NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `apellido`, `nombre`, `telefono`) VALUES
(0, 'sin definir', 'sin definir', '0000'),
(2, 'Balsamo', 'Pablo Nicolas', '3826-541085');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `id_operacion` int(10) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `venta` decimal(5,2) NOT NULL,
  `fecha` date NOT NULL,
  `descuento` decimal(5,2) NOT NULL,
  `detalle` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipoVenta` int(6) NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cliente` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`id_operacion`, `id_usuario`, `venta`, `fecha`, `descuento`, `detalle`, `id_tipoVenta`, `detalles`, `id_cliente`) VALUES
(1, 1, '999.99', '0000-00-00', '10.00', '-', 1, '', 0),
(2, 1, '999.99', '0000-00-00', '10.00', '-', 2, '', 0),
(3, 1, '574.00', '0000-00-00', '10.00', '-', 3, '', 0),
(4, 1, '675.00', '0000-00-00', '0.00', '-', 1, '', 0),
(5, 1, '675.00', '0000-00-00', '0.00', '-', 1, '', 0),
(6, 1, '675.00', '0000-00-00', '0.00', '-', 1, '', 0),
(7, 1, '675.00', '0000-00-00', '0.00', '-', 3, '', 0),
(8, 1, '675.00', '0000-00-00', '0.00', '-', 3, '', 0),
(9, 1, '40.00', '0000-00-00', '10.00', '-', 2, '', 0),
(10, 1, '675.00', '0000-00-00', '0.00', '-', 1, '', 0),
(11, 1, '60.00', '0000-00-00', '10.00', '-', 1, '', 0),
(12, 1, '999.99', '0000-00-00', '10.00', '-', 1, '', 0),
(13, 1, '1.00', '0000-00-00', '1.00', '-', 1, '', 0),
(14, 1, '20.00', '0000-00-00', '10.00', '-', 3, '', 0),
(15, 1, '225.00', '0000-00-00', '0.00', '-', 3, '', 0),
(16, 1, '20.00', '0000-00-00', '10.00', '-', 3, '', 0),
(17, 1, '225.00', '0000-00-00', '0.00', '-', 2, '', 0),
(18, 1, '999.99', '0000-00-00', '0.00', '-', 1, '', 0),
(19, 1, '999.99', '0000-00-00', '10.00', '-', 1, '', 0),
(20, 1, '999.99', '0000-00-00', '0.00', '-', 1, '', 0),
(21, 1, '999.99', '0000-00-00', '0.00', '-', 2, '', 0),
(22, 1, '20.00', '0000-00-00', '10.00', '-', 2, '', 0),
(23, 1, '999.99', '0000-00-00', '3.00', '-', 1, '', 0),
(24, 1, '77.00', '0000-00-00', '10.00', '-', 0, '', 0),
(25, 1, '231.00', '0000-00-00', '10.00', '-', 0, '', 0),
(26, 1, '999.99', '0000-00-00', '10.00', '-', 0, '', 0),
(27, 1, '999.99', '0000-00-00', '10.00', '-', 0, '', 0),
(28, 1, '999.99', '2022-02-10', '200.00', 'descuento en pañales', 1, 'enviar a domicilio', 1),
(29, 1, '77.00', '0000-00-00', '0.00', '', 1, '', 0),
(30, 1, '999.99', '2022-02-12', '0.00', '', 1, '', 0),
(31, 1, '999.99', '2022-02-12', '280.00', 'a domicilio', 1, 'alimnto ', 0),
(32, 1, '999.99', '2022-02-12', '53.00', 'leche', 1, '', 2),
(33, 1, '160.00', '0000-00-00', '18.00', '', 1, '', 2),
(34, 1, '38.00', '0000-00-00', '38.00', '', 1, '', 0),
(35, 1, '67.50', '0000-00-00', '7.50', '', 1, '', 0),
(36, 1, '999.99', '0000-00-00', '0.00', '', 1, '', 0),
(37, 1, '999.99', '0000-00-00', '280.00', '', 2, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rubro` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`, `rubro`, `direccion`, `localidad`, `mail`) VALUES
(1, 'diarco', '3826- 541608', 'hipermercadomayorista', 'la rioja ruta 5', 'la rioja', 'riarco@dirco.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_stock`, `id_articulo`, `cantidad`, `id_proveedor`) VALUES
(1, 1, 19, 1),
(2, 2, 14443, 1),
(3, 3, 20, 1),
(4, 4, 20, 1),
(5, 15, 177, 1),
(6, 0, 30, 1),
(7, 19, 22, 1),
(9, 20, 7, 1),
(10, 21, 20, 1),
(11, 22, 44, 1),
(12, 23, 8, 1),
(13, 24, 60, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoart`
--

CREATE TABLE `tipoart` (
  `id_tipoArt` int(11) NOT NULL,
  `tipoArti` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipoart`
--

INSERT INTO `tipoart` (`id_tipoArt`, `tipoArti`, `detalles`) VALUES
(1, 'alimento balanceado', '0lol,sdas'),
(2, 'pañales', '0'),
(3, 'gaseosa', '0'),
(4, 'loquido', '0'),
(5, 'farmacia', 'elentos especificos para animales'),
(6, 'adultos', '60kg'),
(7, 'medias', '60kg'),
(8, 'Lacteo', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoventa`
--

CREATE TABLE `tipoventa` (
  `id_tipoventa` int(11) NOT NULL,
  `tipoventa` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `interes` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipoventa`
--

INSERT INTO `tipoventa` (`id_tipoventa`, `tipoventa`, `detalles`, `interes`) VALUES
(1, 'Contado Efectivo', '--', 0),
(2, 'Tarjeta', '--', 15),
(3, 'Cuenta Coriente', '--', 20),
(4, 'Canje', '--', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cantidad` decimal(10,0) NOT NULL,
  `id_operacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_articulo`, `cantidad`, `id_operacion`) VALUES
(1, 1, '1', 1),
(2, 2, '3', 1),
(3, 3, '2', 1),
(4, 4, '4', 1),
(5, 3, '12', 2),
(6, 1, '2', 3),
(7, 3, '3', 3),
(8, 21, '3', 4),
(9, 21, '3', 5),
(10, 21, '3', 6),
(11, 21, '3', 7),
(12, 21, '3', 8),
(13, 1, '2', 9),
(14, 21, '3', 10),
(15, 1, '3', 11),
(16, 4, '96', 12),
(17, 15, '1', 13),
(18, 1, '1', 14),
(19, 21, '1', 15),
(20, 1, '1', 16),
(21, 21, '1', 17),
(22, 21, '5', 18),
(23, 3, '23', 19),
(24, 19, '3', 19),
(25, 2, '36', 20),
(26, 21, '40', 20),
(27, 21, '100', 21),
(28, 1, '1', 22),
(29, 1, '3', 23),
(30, 3, '2', 23),
(31, 15, '23', 23),
(32, 20, '3', 23),
(33, 22, '1', 23),
(34, 1, '1', 24),
(35, 1, '3', 25),
(36, 19, '1', 26),
(37, 23, '2', 26),
(38, 3, '40', 27),
(39, 1, '1', 29),
(40, 2, '1', 30),
(41, 2, '1', 31),
(42, 3, '3', 32),
(43, 19, '3', 32),
(44, 3, '1', 33),
(45, 4, '1', 34),
(46, 4, '1', 35),
(47, 1, '1', 36),
(48, 19, '1', 36),
(49, 1, '1', 37),
(50, 2, '1', 37);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`id_operacion`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Indices de la tabla `tipoart`
--
ALTER TABLE `tipoart`
  ADD PRIMARY KEY (`id_tipoArt`);

--
-- Indices de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  ADD PRIMARY KEY (`id_tipoventa`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `id_operacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipoart`
--
ALTER TABLE `tipoart`
  MODIFY `id_tipoArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  MODIFY `id_tipoventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
