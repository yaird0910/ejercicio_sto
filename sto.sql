-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2018 a las 17:47:44
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `ap_paterno` varchar(15) NOT NULL,
  `ap_materno` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` int(10) UNSIGNED NOT NULL,
  `lugar_nacimiento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `ap_paterno`, `ap_materno`, `sexo`, `edad`, `lugar_nacimiento`) VALUES
(1, 'Yair', 'Diaz', 'Bueno', 'masculino', 25, 'Zacapu, Michoaca'),
(2, 'Nydia', 'Martinez', 'Venegas', 'femenino', 25, 'Morelia, Michoacan'),
(3, 'Claudio', 'Moreno', 'Fitzner', 'masculino', 26, 'Morelia, Michoacan'),
(4, 'Juan', 'Alvarez', 'Hernandez', 'masculino', 27, 'Huetamo, Michoacan'),
(5, 'Viridiana', 'Cortes', 'Medina', 'femenino', 26, 'Morelia, Michoacan'),
(6, 'Erick', 'Ortega', 'Rodriguez', 'masculino', 24, 'Puebla, Puebla'),
(8, 'Gabriel', 'Ponce', 'Cervantes', 'masculino', 25, 'Apatzingan, Michoacan'),
(9, 'Oscar', 'Cobarrubias', 'Diaz', 'masculino', 21, 'Morelia, Morelia'),
(10, 'Araceli', 'Salas', 'Gutierrez', 'femenino', 27, 'Leon, Guanajuato');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
