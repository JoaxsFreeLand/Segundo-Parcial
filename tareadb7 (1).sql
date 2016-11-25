-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2016 a las 18:06:37
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tareadb7`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fNacimiento` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `raza` varchar(20) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `name`, `fNacimiento`, `tipo`, `raza`, `peso`, `color`, `comentario`) VALUES
(1, 'Felita', '2006-07-10', 'Perro', 'chiguagua', '30 lb', 'Marron', 'Era buena'),
(2, 'Maritza', '2016-08-09', 'Gato', 'Normal', '15 lb', 'Varios', 'Es muy cagona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(80) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `estado` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`, `nombre`, `correo`, `estado`) VALUES
(1, 'joaxs12', '123456789', 'Joaquin Castillo', 'joaxs12@hotmail.com', ''),
(2, 'shenita', '123456789', 'Shena Castillo', 'shena@hotmail.com', ''),
(3, 'CJ', '123456', 'Carlos', 'CJ@hotmail.com', ''),
(4, 'hog14', '123456', 'hog', '34dec@htomail.com', ''),
(5, 'JohnnyB', '123456', 'Johnny Beltran', 'jb@hotmail.com', ''),
(6, 'aczino', '123456', 'Mauricio', 'aczino@hotmail.com', ''),
(7, 'chuty', '123456', 'Jose Castilla', 'chuty_dobletempo@hotmail.com', ''),
(8, 'Skone', '123456', 'Pepe Lopez', 'Skone_chite@hotmail.com', ''),
(9, 'TomCrowly', '123654', 'Tomy sanchez', 'tom@hotmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
