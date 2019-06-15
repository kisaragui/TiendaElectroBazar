-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2019 a las 04:29:56
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaEB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `unidad` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `precio`, `unidad`, `estado`, `descripcion`, `imagen`) VALUES
(20, 'Televisor', '15800.00', 15, 'Normal', 'Televisor de 21 pulgadas especial con swarttv, netflix, pantalla full HD', 'Televisor.jpg'),
(21, 'Radio', '1200.00', 20, 'Oferta', 'Radio de 300 watts de salida el cual incluye puertos USB', 'Radio.jpg'),
(22, 'Cocina', '22800.00', 30, 'Normal', 'Cocina de 6 hornillas con horno exra grande para grandes familias', 'Cocina.jpg'),
(23, 'Licuadora', '3400.00', 27, 'Normal', 'Licuadora de 10 velocidades con turbo para preparar todo tipo de jugos y triturar comidas', 'Licuadora.jpg'),
(24, 'Plancha', '1300.00', 42, 'Oferta', 'Plancha a vapor con aplicaciones de agua', 'Plancha.jpg'),
(25, 'Dvd', '1200.00', 16, 'Normal', 'Dvd por el cual podras ver todas peliculas con formato HD, ademas cuenta con puertos USB y conexión inalambrica', 'Dvd.jpg'),
(26, 'BluRay', '4500.00', 26, 'Normal', 'Blue ray por el cual podras ver las peliculas en formato HD, ademas cuenta con WiFi y conexion inalambrica', 'BluRay.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
