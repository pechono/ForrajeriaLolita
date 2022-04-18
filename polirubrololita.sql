-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2022 a las 00:49:53
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `activo` tinyint(1) NOT NULL,
  `suelto` tinyint(1) NOT NULL,
  `presentacion` decimal(11,1) NOT NULL,
  `id_unidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nombre`, `id_tipo`, `precio_inicial`, `precio_final`, `limites_descuento`, `id_unidadVenta`, `caducidad`, `detalles`, `activo`, `suelto`, `presentacion`, `id_unidad`) VALUES
(1, 'Haggis jr 36', 4, '470.0', '650', '10', '1', 'no', '--', 1, 0, '26.0', 1),
(2, 'Haggis p 36', 4, '450.0', '640', '10', '1', 'no', '-\r\n', 1, 0, '36.0', 1),
(3, 'coca cola', 7, '150.0', '180', '0', '1', 'si', '-', 1, 0, '1.0', 1),
(4, 'cerveza quilmes lata 350', 7, '80.0', '100', '0', '1', 'si', '-\r\n', 1, 0, '30.0', 1),
(5, 'Si Diet', 9, '100.0', '200', '10', '1', 'si', '-', 1, 0, '0.0', 2),
(6, 'aceite natura 1l girasol', 9, '200.0', '300', '0', '1', 'si', '-', 1, 0, '0.0', 3),
(7, 'Gran Pastor 10kg cachorro', 1, '2800.0', '4500', '10', '2', 'si', '-', 1, 1, '0.0', 1),
(8, 'jabon liquido', 2, '400.0', '500', '10', '3', 'no', 'vidon de 10litro- consentrado\r\n', 1, 1, '0.0', 1),
(9, 'liquido limpia piso', 2, '600.0', '900', '0', '3', 'no', 'colores\r\n', 1, 1, '0.0', 1),
(10, 'pedigri adulto ', 1, '200.0', '300', '0', '2', 'si', 'Bolsa de 20kg', 1, 1, '0.0', 1),
(11, 'gatty pescado y verdura 15kg', 1, '2000.0', '3100', '0', '2', 'si', '-', 1, 0, '0.0', 2),
(12, 'gatty pescado y verdura 15kg', 1, '2000.0', '3100', '0', '2', 'si', '-', 1, 0, '0.0', 4),
(13, 'ala matick', 2, '250.0', '350', '10', '1', 'no', '----', 1, 0, '1.0', 1),
(14, 'ala matick', 2, '250.0', '350', '10', '1', 'no', '---', 1, 0, '1.0', 2),
(15, 'pedigri adulto', 1, '2.0', '3', '2', '2', 'si', '--', 1, 1, '20.0', 1),
(16, 'azucar chango', 9, '140.0', '220', '10', '1', 'no', '\r\n-', 1, 0, '1.0', 1),
(17, 'lenteja egram', 9, '200.0', '240', '10', '1', 'si', '', 1, 0, '40.0', 2),
(18, '7up zero', 7, '180.0', '220', '10', '1', 'si', '', 1, 0, '1.0', 6);

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
-- Estructura de tabla para la tabla `cierrecaja`
--

CREATE TABLE `cierrecaja` (
  `id_cierre` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `turno` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `efectivo` decimal(11,1) NOT NULL,
  `tarjeta` decimal(11,1) NOT NULL,
  `cCorriente` decimal(11,1) NOT NULL,
  `canje` decimal(11,1) NOT NULL,
  `pagoEnCuentaC` decimal(11,1) NOT NULL,
  `Total` decimal(11,1) NOT NULL,
  `ganancia` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cierrecaja`
--

INSERT INTO `cierrecaja` (`id_cierre`, `id_usuario`, `turno`, `fecha`, `efectivo`, `tarjeta`, `cCorriente`, `canje`, `pagoEnCuentaC`, `Total`, `ganancia`) VALUES
(1, 1, 1, '2022-02-28', '10.0', '20.0', '30.0', '40.0', '50.0', '100.0', '60.0'),
(2, 1, 2, '2022-03-01', '0.0', '253.0', '4000.0', '0.0', '0.0', '4333.0', '2131.0'),
(3, 1, 2, '2022-03-01', '0.0', '253.0', '4000.0', '0.0', '0.0', '4333.0', '2131.0'),
(4, 1, 2, '2022-03-01', '0.0', '253.0', '4000.0', '0.0', '0.0', '4333.0', '2131.0'),
(5, 2, 1, '2022-03-07', '0.0', '0.0', '8220.0', '0.0', '0.0', '8220.0', '4060.0'),
(6, 1, 1, '2022-03-18', '0.0', '0.0', '624.0', '0.0', '424.0', '54718.0', '20280.0');

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
(1, 'Sin definir', 'Sin definir', '00001'),
(2, 'Balsamo', 'Pablo Nicolas', '3826-541085'),
(3, 'Mercado', 'Julio', '3826-540099'),
(4, 'oliva', 'matias', '2003211'),
(5, 'caliva', 'mayra', '3826442018'),
(6, 'supermecado olguita', 'ivan', '3344555'),
(7, 'escudero', 'eduardo', '03826541085');

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
  `id_cliente` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_turno` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cuentacorriente`
--

INSERT INTO `cuentacorriente` (`id_cuentaCorriente`, `operacion`, `monto`, `fecha`, `detalles`, `id_cliente`, `id_usuario`, `id_turno`) VALUES
(28, 99, '427.0', '2022-02-17', '-', '2', 0, 0),
(29, 100, '4190.0', '2022-02-17', '-', '2', 0, 0),
(30, 103, '8400.0', '2022-02-18', '-', '4', 0, 0),
(31, 0, '-3000.0', '2022-02-21', '--', '2', 0, 0),
(33, 0, '-600.0', '2022-02-22', 'entrega', '2', 0, 0),
(34, 0, '-500.0', '2022-02-22', 'entrega', '2', 0, 0),
(35, 0, '-600.0', '2022-02-22', 'entrega', '2', 0, 0),
(36, 109, '8400.0', '2022-02-22', '-', '2', 0, 0),
(37, 0, '-600.0', '2022-02-22', 'entrega', '3', 0, 0),
(38, 0, '-317.0', '2022-02-22', 'entrega', '2', 0, 0),
(39, 0, '-2000.0', '2022-02-22', 'entrega', '2', 0, 0),
(40, 110, '77.0', '2022-02-22', '-', '4', 0, 0),
(41, 117, '424.0', '2022-02-22', '-', '5', 0, 0),
(42, 118, '270.0', '2022-02-22', '-', '6', 0, 0),
(43, 119, '1020.0', '2022-02-22', '-', '6', 0, 0),
(44, 0, '-1000.0', '2022-02-22', 'entrega', '6', 0, 0),
(45, 0, '-1000.0', '2022-02-22', 'entrega', '2', 0, 0),
(46, 128, '300.0', '2022-02-28', '-', '2', 1, 2),
(47, 128, '40000.0', '2022-02-28', '-', '6', 1, 1),
(48, 129, '1120.0', '2022-02-28', '-', '5', 1, 1),
(49, 130, '0.0', '2022-02-28', '-', '5', 1, 1),
(50, 132, '23.0', '2022-02-28', '-', '4', 1, 2),
(51, 134, '225.0', '2022-02-28', '-', '2', 1, 2),
(52, 136, '534.0', '2022-02-28', '-', '5', 1, 2),
(53, 139, '178.0', '2022-02-28', '-', '4', 1, 2),
(54, 0, '-20000.0', '2022-02-28', 'entrega', '6', 1, 2),
(55, 0, '-290.0', '2022-02-28', 'entrega', '6', 1, 2),
(56, 0, '-5525.0', '2022-02-28', 'entrega', '2', 1, 2),
(57, 143, '4000.0', '2022-03-01', '-', '1', 1, 2),
(58, 144, '4220.0', '2022-03-07', '-', '6', 2, 1),
(59, 145, '1200.0', '2022-03-09', '-', '3', 2, 1),
(60, 0, '-600.0', '2022-03-13', 'entrega', '3', 1, 1),
(61, 0, '-240.0', '2022-03-14', 'entrega', '6', 1, 1),
(62, 0, '-2000.0', '2022-03-14', 'entrega', '5', 1, 1),
(63, 0, '-23000.0', '2022-03-14', 'entrega', '6', 1, 1),
(64, 0, '-678.0', '2022-03-14', 'entrega', '4', 1, 1),
(65, 188, '424.0', '2022-03-18', '-', '2', 1, 1),
(66, 0, '-424.0', '2022-03-18', 'entrega', '2', 1, 1);

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
  `id_cliente` int(6) NOT NULL,
  `turno` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`id_operacion`, `id_usuario`, `venta`, `fecha`, `descuento`, `detalle`, `id_tipoVenta`, `detalles`, `id_cliente`, `turno`) VALUES
(98, 1, '8400.0', '2021-01-17', '10.0', 'a domicilio', 1, '', 1, 0),
(99, 1, '427.0', '2022-02-17', '22.5', '', 3, '', 2, 0),
(100, 1, '9190.0', '2022-02-17', '0.0', '', 3, 'a domicilo', 2, 0),
(101, 1, '8400.0', '2022-02-18', '0.0', '10%desc', 2, '', 3, 0),
(102, 1, '150.0', '2022-02-18', '0.0', '', 3, '10%desc', 4, 0),
(103, 1, '8400.0', '2022-02-18', '0.0', '', 3, '10%desc', 4, 0),
(104, 1, '626.0', '2022-02-19', '0.0', '', 2, '', 4, 0),
(105, 1, '400.0', '2022-02-19', '0.0', '', 1, '', 1, 0),
(106, 1, '400.0', '2022-02-19', '0.0', '', 1, '', 2, 0),
(107, 1, '5378.4', '2022-02-19', '597.6', 'descuento en todos\r\nlos productos. solo cliente vip', 1, '', 2, 0),
(108, 1, '77.0', '2022-02-21', '0.0', '', 1, '', 1, 0),
(109, 1, '8400.0', '2022-02-22', '0.0', '', 3, '', 2, 0),
(110, 1, '77.0', '2022-02-22', '0.0', '', 3, '', 4, 0),
(111, 1, '225.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(112, 1, '2800.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(113, 1, '5600.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(114, 1, '2.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(115, 1, '21538.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(116, 1, '9822.0', '2022-02-22', '0.0', '', 1, '', 4, 0),
(117, 1, '1424.0', '2022-02-22', '0.0', '', 3, '', 5, 0),
(118, 1, '770.0', '2022-02-22', '0.0', '', 3, '', 6, 0),
(119, 1, '1020.0', '2022-02-22', '0.0', '', 3, '', 6, 0),
(120, 1, '178.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(121, 1, '360.0', '2022-02-22', '0.0', '', 1, '', 3, 0),
(122, 1, '336.0', '2022-02-22', '0.0', '', 1, '', 4, 0),
(123, 1, '1200.0', '2022-02-22', '0.0', '', 2, '', 4, 0),
(124, 1, '178.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(125, 1, '10.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(126, 1, '0.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(127, 1, '0.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(128, 1, '40000.0', '2022-02-28', '0.0', '', 3, '', 6, 1),
(129, 1, '1120.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(130, 1, '0.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(131, 2, '1200.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(132, 1, '23.0', '2022-02-28', '0.0', '', 3, '', 4, 2),
(133, 1, '8400.0', '2022-02-28', '0.0', '', 2, '', 4, 2),
(134, 1, '225.0', '2022-02-28', '0.0', '', 3, '', 2, 2),
(135, 1, '178.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(136, 1, '534.0', '2022-02-28', '0.0', '', 3, '', 5, 2),
(137, 1, '356.0', '2022-02-28', '0.0', '', 2, '', 4, 2),
(138, 1, '178.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(139, 1, '178.0', '2022-02-28', '0.0', '', 3, '', 4, 2),
(140, 1, '77.0', '2022-03-01', '0.0', '', 1, '', 2, 2),
(141, 1, '253.0', '2022-03-01', '0.0', '', 2, '', 1, 2),
(142, 1, '3.0', '2022-03-01', '0.0', '', 1, '', 1, 2),
(143, 1, '4000.0', '2022-03-01', '0.0', '', 3, '', 1, 2),
(144, 2, '8220.0', '2022-03-07', '0.0', '', 3, '', 6, 1),
(145, 2, '1200.0', '2022-03-09', '0.0', '', 3, '', 3, 1),
(146, 2, '600.0', '2022-03-09', '0.0', '', 1, '', 1, 1),
(147, 1, '6500.0', '2022-03-12', '0.0', '', 1, '', 1, 1),
(148, 1, '6500.0', '2022-03-12', '0.0', '', 1, '', 1, 1),
(149, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(150, 1, '1280.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(151, 1, '1480.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(152, 1, '360.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(153, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(154, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(155, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(156, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(157, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(158, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(159, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(160, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(161, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(162, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(163, 1, '640.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(164, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(165, 1, '1280.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(166, 1, '200.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(167, 1, '200.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(168, 1, '2500.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(169, 1, '100.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(170, 1, '2040.0', '2022-03-13', '0.0', '', 2, '', 3, 1),
(171, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(172, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(173, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(174, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(175, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(176, 1, '6750.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(177, 1, '6750.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(178, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(179, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(180, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 4, 1),
(181, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(182, 1, '960.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(183, 1, '0.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(184, 1, '960.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(185, 1, '11250.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(186, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(187, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(188, 1, '624.0', '2022-03-18', '36.0', '', 3, '', 2, 1),
(189, 1, '650.0', '2022-03-30', '0.0', '', 1, '', 4, 1),
(190, 1, '1300.0', '2022-04-01', '0.0', '', 1, '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacionpedido`
--

CREATE TABLE `operacionpedido` (
  `id_operacionPedido` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_proveedor` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operacionpedido`
--

INSERT INTO `operacionpedido` (`id_operacionPedido`, `id_usuario`, `id_proveedor`, `fecha`) VALUES
(1, 1, 1, '2022-03-10'),
(2, 2, 1, '2022-03-10'),
(3, 2, 1, '2022-03-10'),
(4, 2, 1, '2022-03-10'),
(5, 2, 5, '2022-03-10'),
(6, 1, 1, '2022-03-12'),
(7, 1, 1, '2022-03-12'),
(8, 1, 1, '2022-03-12'),
(9, 1, 1, '2022-03-12'),
(10, 1, 4, '2022-03-12'),
(11, 1, 1, '2022-03-12'),
(12, 1, 1, '2022-03-12'),
(13, 1, 1, '2022-03-12'),
(14, 1, 1, '2022-03-12'),
(15, 1, 1, '2022-03-12'),
(16, 1, 1, '2022-03-12'),
(17, 1, 1, '2022-03-12'),
(18, 1, 1, '2022-03-12'),
(19, 1, 1, '2022-03-12'),
(20, 1, 1, '2022-03-12'),
(21, 1, 1, '2022-03-12'),
(22, 1, 1, '2022-03-12'),
(23, 1, 1, '2022-03-12'),
(24, 1, 1, '2022-03-12'),
(25, 1, 1, '2022-03-12'),
(26, 1, 1, '2022-03-12'),
(27, 1, 1, '2022-03-12'),
(28, 1, 4, '2022-03-12'),
(29, 1, 1, '2022-03-12'),
(30, 1, 1, '2022-03-12'),
(31, 1, 5, '2022-03-12'),
(32, 1, 1, '2022-03-12'),
(33, 1, 1, '2022-03-12'),
(34, 1, 1, '2022-03-12'),
(35, 1, 1, '2022-03-12'),
(36, 1, 1, '2022-03-12'),
(37, 1, 1, '2022-03-12'),
(38, 1, 1, '2022-03-12'),
(39, 1, 1, '2022-03-12'),
(40, 1, 6, '2022-03-12'),
(41, 1, 1, '2022-03-13'),
(42, 1, 1, '2022-03-13'),
(43, 1, 1, '2022-03-14'),
(44, 1, 1, '2022-03-14'),
(45, 1, 1, '2022-03-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(10) NOT NULL,
  `operacionPedido` int(10) NOT NULL,
  `id_articulo` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `operacionPedido`, `id_articulo`, `cantidad`) VALUES
(1, 3, 5, 10),
(2, 4, 4, 25),
(3, 5, 6, 10),
(4, 5, 5, 2),
(5, 5, 1, 1),
(6, 5, 2, 10),
(7, 6, 5, 25),
(8, 6, 6, 10),
(9, 7, 5, 10),
(10, 8, 5, 10),
(11, 9, 1, 25),
(12, 10, 5, 10),
(13, 11, 1, 25),
(14, 12, 1, 10),
(15, 13, 1, 10),
(16, 14, 1, 10),
(17, 15, 6, 10),
(18, 16, 1, 10),
(19, 17, 1, 10),
(20, 18, 1, 10),
(21, 19, 6, 2),
(22, 20, 6, 10),
(23, 21, 1, 10),
(24, 22, 1, 10),
(25, 23, 1, 10),
(26, 24, 1, 10),
(27, 25, 1, 10),
(28, 26, 1, 10),
(29, 27, 1, 10),
(30, 28, 4, 10),
(31, 29, 1, 10),
(32, 30, 6, 10),
(33, 31, 5, 10),
(34, 32, 5, 10),
(35, 33, 1, 10),
(36, 34, 2, 10),
(37, 35, 5, 10),
(38, 36, 3, 10),
(39, 37, 1, 10),
(40, 37, 6, 25),
(41, 37, 3, 10),
(42, 37, 4, 10),
(43, 38, 1, 10),
(44, 39, 1, 10),
(45, 39, 6, 10),
(46, 39, 5, 10),
(47, 40, 1, 10),
(48, 40, 4, 10),
(49, 40, 2, 10),
(50, 40, 5, 25),
(51, 41, 6, 10),
(52, 42, 6, 10),
(53, 43, 1, 10),
(54, 44, 1, 2),
(55, 44, 4, 1),
(56, 45, 2, 45),
(57, 45, 1, 50),
(58, 45, 5, 40),
(59, 45, 6, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidocar`
--

CREATE TABLE `pedidocar` (
  `id_pedidoCar` int(10) NOT NULL,
  `id_articulo` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Coca Cola srl Ar', '1', 'distribuidora1', 'avenida federal 21', 'chamical-La rioja', 'coca@cococola-argentina.com'),
(4, 'guanpeando', '123442323', 'guanpa', 'calle siempreviva 246', 'esprinfil', 'baloguando@gila.com'),
(5, 'lola Roca', '03826541085', 'calado', 'HIPOLITO IRIGOYEN 85', 'CAMICAL', 'bicicleteria balsamo'),
(6, 'supermercado todo sucio', '2002002', 'de todo un poco', 'lejos de casa', 'localidad durA', 'mail');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cantidad` decimal(11,1) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `stockMinimo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_stock`, `id_articulo`, `cantidad`, `id_proveedor`, `stockMinimo`) VALUES
(1, 1, '33.0', 1, 15),
(2, 2, '35.0', 1, 15),
(3, 3, '30.0', 1, 16),
(4, 4, '30.0', 3, 20),
(5, 5, '19.0', 4, 20),
(6, 6, '13.0', 4, 15),
(7, 7, '14.5', 4, 0),
(8, 8, '10.0', 4, 2),
(9, 9, '0.0', 1, 15),
(10, 10, '50.0', 1, 5),
(11, 11, '20.0', 1, 12),
(12, 16, '20.0', 6, 10),
(13, 17, '70.0', 4, 10),
(14, 18, '60.0', 1, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelto`
--

CREATE TABLE `suelto` (
  `id_suelto` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suelto`
--

INSERT INTO `suelto` (`id_suelto`, `id_articulo`, `fecha`) VALUES
(1, 9, '2022-04-04'),
(2, 9, '2022-04-04'),
(3, 9, '2022-04-04'),
(4, 9, '2022-04-04'),
(5, 9, '2022-04-04'),
(6, 9, '2022-04-04'),
(7, 9, '2022-04-04'),
(8, 9, '2022-04-04'),
(9, 9, '2022-04-04'),
(10, 9, '2022-04-04'),
(11, 9, '2022-04-04'),
(12, 9, '2022-04-04'),
(13, 9, '2022-04-04'),
(14, 9, '2022-04-04'),
(15, 9, '2022-04-04');

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
(1, 'alimento balaceado', 'hola'),
(2, 'limpieza', '-'),
(3, 'perfumeria', '-'),
(4, 'pañales', '-'),
(5, 'lacteo', '-}'),
(6, 'accesorio perro - gato-conejo', 'callares'),
(7, 'bebida', '-'),
(8, 'farmacia', '-'),
(9, 'almacen', '-'),
(10, 'indumentaria bebe', '-');

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
-- Estructura de tabla para la tabla `unidadcantidad`
--

CREATE TABLE `unidadcantidad` (
  `id` int(11) NOT NULL,
  `unidadVenta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidadcantidad`
--

INSERT INTO `unidadcantidad` (`id`, `unidadVenta`) VALUES
(1, 'Unidad'),
(2, 'Kilo'),
(3, 'Litro'),
(4, 'Bolsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedida`
--

CREATE TABLE `unidadmedida` (
  `umedida` varchar(20) NOT NULL,
  `id_unidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidadmedida`
--

INSERT INTO `unidadmedida` (`umedida`, `id_unidad`) VALUES
('Unidad', 1),
('Bolsa', 2),
('Pack', 3),
('Caja', 4),
('Kilo', 5),
('Litro', 6),
('Metro', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(6) NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `apellido`, `nombre`, `telefono`) VALUES
(1, 'pascui', 'pascui', 'albornos', 'matias', '0000'),
(2, 'lili', 'queloque', 'bruno', 'liliana', '0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cantidad` decimal(10,1) NOT NULL,
  `id_operacion` int(11) NOT NULL,
  `precioI` decimal(11,1) NOT NULL,
  `precioF` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_articulo`, `cantidad`, `id_operacion`, `precioI`, `precioF`) VALUES
(132, 2, '1.0', 112, '0.0', '0.0'),
(133, 2, '2.0', 113, '0.0', '0.0'),
(134, 15, '2.0', 114, '0.0', '0.0'),
(135, 1, '1.0', 115, '0.0', '0.0'),
(136, 2, '3.0', 115, '0.0', '0.0'),
(137, 3, '3.0', 115, '0.0', '0.0'),
(138, 4, '1.0', 115, '0.0', '0.0'),
(139, 20, '3.0', 115, '0.0', '0.0'),
(140, 22, '1.0', 115, '0.0', '0.0'),
(141, 24, '1.0', 115, '0.0', '0.0'),
(142, 2, '3.0', 116, '0.0', '0.0'),
(143, 15, '2.0', 116, '0.0', '0.0'),
(144, 22, '3.0', 116, '0.0', '0.0'),
(145, 25, '1.0', 116, '0.0', '0.0'),
(146, 3, '8.0', 117, '0.0', '0.0'),
(147, 1, '10.0', 118, '0.0', '0.0'),
(148, 22, '3.0', 119, '0.0', '0.0'),
(149, 3, '1.0', 120, '0.0', '0.0'),
(150, 26, '3.0', 121, '0.0', '0.0'),
(151, 24, '3.0', 122, '0.0', '0.0'),
(152, 25, '3.0', 123, '0.0', '0.0'),
(153, 3, '1.0', 124, '0.0', '0.0'),
(154, 15, '10.0', 125, '0.0', '0.0'),
(155, 19, '10.0', 128, '0.0', '0.0'),
(156, 24, '10.0', 129, '0.0', '0.0'),
(157, 26, '10.0', 131, '0.0', '0.0'),
(158, 15, '23.0', 132, '0.0', '0.0'),
(159, 2, '3.0', 133, '0.0', '0.0'),
(160, 4, '3.0', 134, '0.0', '0.0'),
(161, 3, '1.0', 135, '0.0', '0.0'),
(162, 3, '3.0', 136, '0.0', '0.0'),
(163, 3, '2.0', 137, '0.0', '0.0'),
(164, 3, '1.0', 138, '0.0', '0.0'),
(165, 3, '1.0', 139, '0.0', '0.0'),
(166, 1, '1.0', 140, '0.0', '0.0'),
(167, 3, '1.0', 141, '0.0', '0.0'),
(168, 4, '1.0', 141, '0.0', '0.0'),
(169, 15, '3.0', 142, '0.0', '0.0'),
(170, 19, '1.0', 143, '0.0', '0.0'),
(171, 1, '2.0', 144, '0.0', '0.0'),
(172, 19, '2.0', 144, '0.0', '0.0'),
(173, 6, '4.0', 145, '0.0', '0.0'),
(174, 6, '2.0', 146, '0.0', '0.0'),
(175, 1, '10.0', 147, '0.0', '0.0'),
(176, 1, '10.0', 148, '0.0', '0.0'),
(177, 1, '1.0', 149, '0.0', '0.0'),
(178, 2, '2.0', 150, '0.0', '0.0'),
(179, 2, '2.0', 151, '0.0', '0.0'),
(180, 4, '2.0', 151, '0.0', '0.0'),
(181, 3, '2.0', 152, '0.0', '0.0'),
(182, 1, '1.0', 162, '470.0', '650.0'),
(183, 2, '1.0', 163, '450.0', '640.0'),
(184, 2, '2.0', 165, '450.0', '640.0'),
(185, 5, '1.0', 166, '100.0', '200.0'),
(186, 5, '1.0', 167, '100.0', '200.0'),
(187, 4, '25.0', 168, '80.0', '100.0'),
(188, 4, '1.0', 169, '80.0', '100.0'),
(189, 2, '2.0', 170, '450.0', '640.0'),
(190, 3, '2.0', 170, '150.0', '180.0'),
(191, 4, '2.0', 170, '80.0', '100.0'),
(192, 5, '1.0', 170, '100.0', '200.0'),
(193, 7, '1.0', 171, '2800.0', '4500.0'),
(194, 7, '1.0', 172, '2800.0', '4500.0'),
(195, 7, '1.0', 173, '2800.0', '4500.0'),
(196, 7, '1.0', 174, '2800.0', '4500.0'),
(197, 7, '1.0', 175, '2800.0', '4500.0'),
(198, 7, '1.5', 176, '2800.0', '4500.0'),
(199, 7, '1.5', 177, '2800.0', '4500.0'),
(200, 7, '1.5', 178, '2800.0', '4500.0'),
(201, 7, '1.5', 179, '2800.0', '4500.0'),
(202, 7, '1.5', 180, '2800.0', '4500.0'),
(203, 7, '1.5', 181, '2800.0', '4500.0'),
(204, 2, '1.5', 182, '450.0', '640.0'),
(205, 2, '1.5', 184, '450.0', '640.0'),
(206, 7, '2.5', 185, '2800.0', '4500.0'),
(207, 7, '1.5', 186, '2800.0', '4500.0'),
(208, 7, '1.5', 187, '2800.0', '4500.0'),
(209, 3, '2.0', 188, '150.0', '180.0'),
(210, 6, '1.0', 188, '200.0', '300.0'),
(211, 1, '1.0', 189, '470.0', '650.0'),
(212, 1, '2.0', 190, '470.0', '650.0');

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
-- Indices de la tabla `cierrecaja`
--
ALTER TABLE `cierrecaja`
  ADD PRIMARY KEY (`id_cierre`);

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
-- Indices de la tabla `operacionpedido`
--
ALTER TABLE `operacionpedido`
  ADD PRIMARY KEY (`id_operacionPedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `pedidocar`
--
ALTER TABLE `pedidocar`
  ADD PRIMARY KEY (`id_pedidoCar`);

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
-- Indices de la tabla `suelto`
--
ALTER TABLE `suelto`
  ADD PRIMARY KEY (`id_suelto`);

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
-- Indices de la tabla `unidadcantidad`
--
ALTER TABLE `unidadcantidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

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
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cierrecaja`
--
ALTER TABLE `cierrecaja`
  MODIFY `id_cierre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cuentacorriente`
--
ALTER TABLE `cuentacorriente`
  MODIFY `id_cuentaCorriente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `id_operacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT de la tabla `operacionpedido`
--
ALTER TABLE `operacionpedido`
  MODIFY `id_operacionPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `pedidocar`
--
ALTER TABLE `pedidocar`
  MODIFY `id_pedidoCar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `suelto`
--
ALTER TABLE `suelto`
  MODIFY `id_suelto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tipoart`
--
ALTER TABLE `tipoart`
  MODIFY `id_tipoArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  MODIFY `id_tipoventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidadcantidad`
--
ALTER TABLE `unidadcantidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
