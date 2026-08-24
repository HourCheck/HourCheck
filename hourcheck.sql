-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2026 a las 04:38:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hourcheck`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `institucion`, `email`, `contraseña`) VALUES
(1, 'chepe', 'Ofelia Herrera', 'chepito@clases.edu.sv', 12345678),
(2, 'test4', 'Ofelia Herrera', 'test4@clases.edu.sv', 12345678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `institucion`, `email`, `contraseña`) VALUES
(1, 'test1', 'Federación Suiza', 'h@clases.edu.sv', 12344566),
(2, 'test2', 'Ofelia Herrera', 'test2@clases.edu.sv', 1234567),
(3, 'Ashley Gomez', 'Ofelia Herrera', '6871089@clases.edu.sv', 123456789),
(4, 'Adriana', 'Ofelia Herrera', 'adriana@clases.edu.sv', 1234567),
(5, 'fabio', 'Ofelia Herrera', 'fabio@clases.edu.sv', 1234567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `nombre`, `codigo`, `director`, `email`, `contraseña`) VALUES
(1, 'ceoh', '1389', 'pepe', 'pepe@clases.edu.sv', '1234567'),
(2, 'CEOH', '1382', 'mario', 'mario@clases.edu.sv', '12345678'),
(3, 'CEOH', '1382', 'mario', 'mario@clases.edu.sv', '12345678'),
(4, 'CEOH', '1382', 'mario', 'mario@clases.edu.sv', '12345678'),
(5, 'test3', '3434', 'pepe', 'test1@clases.edu.sv', '12345678'),
(6, 'ofelia herrera', '1382', 'Chpe', 'chepe@clases.edu.sv', '1234567');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
