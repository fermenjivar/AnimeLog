-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2015 a las 03:34:03
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdanime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `season` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `score` float DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`codigo`, `nombre`, `year`, `season`, `score`, `imagen`) VALUES
(1, 'Neon Genesis Evangelion', 1995, 'Otoño', 10, 'img/a001.png'),
(2, 'Kill la Kill', 2013, 'Verano', 8, 'img/a002.jpg'),
(3, 'Welcome to the NHK', 2006, '', 10, 'img/a003.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE `tag` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`codigo`, `nombre`) VALUES
(1, 'Shonen'),
(2, 'Seinen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tagserie`
--

CREATE TABLE `tagserie` (
  `codigo` int(11) NOT NULL,
  `serie` int(11) DEFAULT NULL,
  `tag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tagserie`
--

INSERT INTO `tagserie` (`codigo`, `serie`, `tag`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temps`
--

CREATE TABLE `temps` (
  `codigo` int(11) NOT NULL,
  `serie` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `score` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `temps`
--

INSERT INTO `temps` (`codigo`, `serie`, `nombre`, `score`) VALUES
(1, 1, 'Serie Original', 9),
(2, 1, 'End of Evangelion', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tagserie`
--
ALTER TABLE `tagserie`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `serie` (`serie`),
  ADD KEY `tag` (`tag`);

--
-- Indices de la tabla `temps`
--
ALTER TABLE `temps`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `serie` (`serie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tag`
--
ALTER TABLE `tag`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tagserie`
--
ALTER TABLE `tagserie`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `temps`
--
ALTER TABLE `temps`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tagserie`
--
ALTER TABLE `tagserie`
  ADD CONSTRAINT `tagserie_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `serie` (`codigo`),
  ADD CONSTRAINT `tagserie_ibfk_2` FOREIGN KEY (`tag`) REFERENCES `tag` (`codigo`);

--
-- Filtros para la tabla `temps`
--
ALTER TABLE `temps`
  ADD CONSTRAINT `temps_ibfk_1` FOREIGN KEY (`serie`) REFERENCES `serie` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
