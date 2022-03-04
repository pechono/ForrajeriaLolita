-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2022 a las 04:09:22
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
  `precio_inicial` decimal(11,1) NOT NULL,
  `precio_final` decimal(11,0) NOT NULL,
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
(1, 'haguuis xg', 2, '55.0', '77', '10-12', '1', 'no', '-', 1),
(2, 'doggi ', 1, '1500.0', '2800', '10', '1', 'no', '-\r\n', 1),
(3, 'lecheentera ilolai', 2, '100.0', '178', '10-12', '1', 'si', '-', 1),
(4, 'leche descremada ilolai', 1, '50.0', '75', '10-12', '1', 'si', 'cidado con el lobo', 1),
(5, 'Si Diet', 2, '120.0', '180', '10-12', 'unidad', 'si', '-', 1),
(6, 'Si Diet', 2, '100.0', '180', '10-12', '1', 'si', '----', 1),
(7, 'ala matick 3litros', 1, '17.0', '27', '14', 'unidad', 'no', 'ver', 1),
(8, 'PABLO BALSAMO', 1, '1.0', '1', '1', 'unidad', 'si', 'hola', 1),
(9, 'ala matick 3litros', 1, '-1.0', '1', '1', 'unidad', 'no', 'ver', 1),
(10, 'ala matick 3litros', 1, '-1.0', '1', '1', 'unidad', 'no', 'ver', 1),
(11, 'ala matick 3litros', 1, '-1.0', '1', '1', 'unidad', 'no', 'ver', 1),
(12, 'ala matick 3litros', 1, '-1.0', '1', '1', 'unidad', 'no', 'ver', 1),
(13, 'ala matick 3litros', 1, '-1.0', '1', '1', 'unidad', 'no', 'ver', 1),
(14, 'ala matick 3litros', 1, '-1.0', '1', '1', 'unidad', 'no', 'ver', 1),
(15, 'ala matick 3litros', 1, '-1.0', '1', '1', 'unidad', 'si', 'ver', 1),
(16, 'pedigri cachorro 20kg', 1, '2050.0', '4000', '10', 'bolsa', 'no', 'bolsa amarilla con rojo', 1),
(17, 'pedigri cachorro 20kg', 1, '2050.0', '4000', '10', 'bolsa', 'no', 'bolsa amarilla con rojo', 1),
(18, 'pedigri adulto 20kg', 5, '2000.0', '4000', '10', 'bolsa', 'no', 'bolsa amarilla con rojo', 1),
(19, 'pedigri adulto 20kg', 5, '2000.0', '4000', '10', 'bolsa', 'no', 'bolsa amarilla', 1),
(20, 'Gran Pastor 10kg cachorro', 2, '2000.0', '4000', '10', 'bolsa', 'si', 'blncacon verde fluor ', 1),
(21, 'pritty limon 2,25l sin azucar', 3, '110.0', '225', '0', 'unidad', 'si', '-', 1),
(22, 'llevar Mate  Cruz de Malta 1kg -suave y duraera', 1, '230.0', '340', '3', 'unidad', 'si', 'hoja mas grande', 1),
(23, 'jabon', 4, '100.0', '150', '10', '10litro', 'no', '+ de 4 descuento', 1),
(24, 'leche ILOLAI descremada', 8, '80.0', '112', '10', 'unidad', 'si', '-', 1),
(25, 'gran pastor cachorro', 1, '250.0', '400', '10', 'kilo', 'si', 'la bolsa 10kg', 1),
(26, 'pepsi 1ltro retornble', 3, '100.0', '120', '0', 'unidad', 'si', '-', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `cantidad` decimal(10,1) NOT NULL,
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
(1, 'sin definir', 'sin definir', '0000'),
(2, 'Balsamo', 'Pablo Nicolas', '3826-541085'),
(3, 'Mercado', 'Franco', '3826-541085'),
(4, 'Franco', 'Nahuel', '3826-541085'),
(5, 'caliva', 'mayra', '3826442018'),
(6, 'supermecado olguita', 'ivan', '00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentacorriente`
--

CREATE TABLE `cuentacorriente` (
  `id_cuentaCorriente` int(6) NOT NULL,
  `operacion` int(6) NOT NULL,
  `monto` decimal(11,1) NOT NULL,
  `fecha` date NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cliente` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cuentacorriente`
--

INSERT INTO `cuentacorriente` (`id_cuentaCorriente`, `operacion`, `monto`, `fecha`, `detalles`, `id_cliente`) VALUES
(28, 99, '427.0', '2022-02-17', '-', '2'),
(29, 100, '4190.0', '2022-02-17', '-', '2'),
(30, 103, '8400.0', '2022-02-18', '-', '4'),
(31, 0, '-3000.0', '2022-02-21', '--', '2'),
(33, 0, '-600.0', '2022-02-22', 'entrega', '2'),
(34, 0, '-500.0', '2022-02-22', 'entrega', '2'),
(35, 0, '-600.0', '2022-02-22', 'entrega', '2'),
(36, 109, '8400.0', '2022-02-22', '-', '2'),
(37, 0, '-600.0', '2022-02-22', 'entrega', '3'),
(38, 0, '-317.0', '2022-02-22', 'entrega', '2'),
(39, 0, '-2000.0', '2022-02-22', 'entrega', '2'),
(40, 110, '77.0', '2022-02-22', '-', '4'),
(41, 117, '424.0', '2022-02-22', '-', '5'),
(42, 118, '270.0', '2022-02-22', '-', '6'),
(43, 119, '1020.0', '2022-02-22', '-', '6'),
(44, 0, '-1000.0', '2022-02-22', 'entrega', '6'),
(45, 0, '-1000.0', '2022-02-22', 'entrega', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `id_operacion` int(10) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `venta` decimal(11,1) NOT NULL,
  `fecha` date NOT NULL,
  `descuento` decimal(5,1) NOT NULL,
  `detalle` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipoVenta` int(6) NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cliente` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`id_operacion`, `id_usuario`, `venta`, `fecha`, `descuento`, `detalle`, `id_tipoVenta`, `detalles`, `id_cliente`) VALUES
(98, 1, '8400.0', '2021-01-17', '10.0', 'a domicilio', 1, '', 1),
(99, 1, '427.0', '2022-02-17', '22.5', '', 3, '', 2),
(100, 1, '9190.0', '2022-02-17', '0.0', '', 3, 'a domicilo', 2),
(101, 1, '8400.0', '2022-02-18', '0.0', '10%desc', 2, '', 3),
(102, 1, '150.0', '2022-02-18', '0.0', '', 3, '10%desc', 4),
(103, 1, '8400.0', '2022-02-18', '0.0', '', 3, '10%desc', 4),
(104, 1, '626.0', '2022-02-19', '0.0', '', 2, '', 4),
(105, 1, '400.0', '2022-02-19', '0.0', '', 1, '', 1),
(106, 1, '400.0', '2022-02-19', '0.0', '', 1, '', 2),
(107, 1, '5378.4', '2022-02-19', '597.6', 'descuento en todos\r\nlos productos. solo cliente vip', 1, '', 2),
(108, 1, '77.0', '2022-02-21', '0.0', '', 1, '', 1),
(109, 1, '8400.0', '2022-02-22', '0.0', '', 3, '', 2),
(110, 1, '77.0', '2022-02-22', '0.0', '', 3, '', 4),
(111, 1, '225.0', '2022-02-22', '0.0', '', 1, '', 1),
(112, 1, '2800.0', '2022-02-22', '0.0', '', 1, '', 1),
(113, 1, '5600.0', '2022-02-22', '0.0', '', 1, '', 1),
(114, 1, '2.0', '2022-02-22', '0.0', '', 1, '', 1),
(115, 1, '21538.0', '2022-02-22', '0.0', '', 1, '', 1),
(116, 1, '9822.0', '2022-02-22', '0.0', '', 1, '', 4),
(117, 1, '1424.0', '2022-02-22', '0.0', '', 3, '', 5),
(118, 1, '770.0', '2022-02-22', '0.0', '', 3, '', 6),
(119, 1, '1020.0', '2022-02-22', '0.0', '', 3, '', 6),
(120, 1, '178.0', '2022-02-22', '0.0', '', 1, '', 1),
(121, 1, '360.0', '2022-02-22', '0.0', '', 1, '', 3),
(122, 1, '336.0', '2022-02-22', '0.0', '', 1, '', 4),
(123, 1, '1200.0', '2022-02-22', '0.0', '', 2, '', 4);

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
(1, 'diarco', '3826- 541608', 'hipermercadomayorista', 'la rioja ruta 5', 'la rioja', 'riarco@dirco.com'),
(2, 'Bicicleria Balsamo', '382541085', 'ciclismo en general', 'hipolito yrigoyen 85', 'balsamo2@hotmail.com', ''),
(3, 'Coca Cola', '-', '', 'avenida federal 304', 'chamical', 'coca@cococoargentina.com'),
(4, 'guanpeando', '123442323', 'guanpa', 'calle siempreviva 246', 'esprinfil', 'baloguando@gila.com'),
(5, 'lola Roca', '03826541085', 'calado', 'HIPOLITO IRIGOYEN 85', 'CAMICAL', 'bicicleteria balsamo');

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
(1, 1, 0, 1),
(2, 2, 0, 1),
(3, 3, 1, 1),
(4, 4, 0, 1),
(5, 15, 171, 1),
(6, 0, 30, 1),
(7, 19, 11, 1),
(9, 20, 4, 1),
(10, 21, 18, 1),
(11, 22, 30, 1),
(12, 23, 0, 1),
(13, 24, 52, 1),
(14, 25, 0, 1),
(15, 26, 13, 3);

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
(8, 'Lacteo', '-'),
(9, 'perro y gatos', 'de todo');

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
(132, 2, '1', 112),
(133, 2, '2', 113),
(134, 15, '2', 114),
(135, 1, '1', 115),
(136, 2, '3', 115),
(137, 3, '3', 115),
(138, 4, '1', 115),
(139, 20, '3', 115),
(140, 22, '1', 115),
(141, 24, '1', 115),
(142, 2, '3', 116),
(143, 15, '2', 116),
(144, 22, '3', 116),
(145, 25, '1', 116),
(146, 3, '8', 117),
(147, 1, '10', 118),
(148, 22, '3', 119),
(149, 3, '1', 120),
(150, 26, '3', 121),
(151, 24, '3', 122),
(152, 25, '3', 123);

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
-- Indices de la tabla `cuentacorriente`
--
ALTER TABLE `cuentacorriente`
  ADD PRIMARY KEY (`id_cuentaCorriente`);

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
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cuentacorriente`
--
ALTER TABLE `cuentacorriente`
  MODIFY `id_cuentaCorriente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `id_operacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tipoart`
--
ALTER TABLE `tipoart`
  MODIFY `id_tipoArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  MODIFY `id_tipoventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
