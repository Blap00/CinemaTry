-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2023 a las 04:42:09
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinemaproyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idPelicula` int(11) NOT NULL,
  `nombrePelicula` varchar(50) NOT NULL,
  `sinopsis` varchar(1500) NOT NULL,
  `precio` int(11) NOT NULL,
  `descuento` tinyint(3) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `disponible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idPelicula`, `nombrePelicula`, `sinopsis`, `precio`, `descuento`, `idCategoria`, `disponible`) VALUES
(1, 'The Karate Kid', 'Cuando la carrera profesional de su madre los lleva a China, Dre Parker, de 12 años, descubre que es un extraño en una tierra desconocida. A pesar de que él sabe un poco de karate, sus habilidades para pelear no son suficientes contra Cheng, el acosador de su escuela. Dre encuentra a un amigo en el Sr. Han, un empleado de mantenimiento que también es maestro de las artes marciales. El Sr. Han le enseña a Dre todo sobre kung fu con la esperanza de que venza a Cheng.', 10990, 0, 1, 1),
(2, 'Inglorious Bastard', '', 7990, 0, 1, 1),
(3, 'Spiderman 2', '', 54990, 0, 1, 1),
(4, 'Matrix, Revolutions', '', 15000, 0, 1, 1),
(5, 'Five nights at freddys', '', 75990, 0, 2, 1),
(6, 'Ejercito de los muertos', '', 23000, 0, 2, 1),
(7, 'Tiburon', '', 6000, 0, 2, 1),
(8, 'La maldición de Lake Manor', '', 8000, 0, 2, 1),
(9, 'Octopussy', '', 12000, 0, 3, 1),
(10, 'Twister', 'Cuando la carrera profesional de su madre los lleva a China, Dre Parker, de 12 años, descubre que es un extraño en una tierra desconocida. A pesar de que él sabe un poco de karate, sus habilidades para pelear no son suficientes contra Cheng, el acosador de su escuela. Dre encuentra a un amigo en el ', 2500, 0, 3, 1),
(11, 'Fenix', '', 3200, 0, 3, 1),
(12, 'Willow', '', 5000, 0, 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idPelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
