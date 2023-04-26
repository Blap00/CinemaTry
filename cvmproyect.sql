-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2023 a las 01:12:34
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
-- Base de datos: `cvmproyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagecinema`
--

CREATE TABLE `imagecinema` (
  `numb_id` int(11) NOT NULL,
  `file_url` varchar(300) DEFAULT NULL,
  `Categoria` varchar(32) NOT NULL,
  `Nombre` varchar(32) NOT NULL,
  `Cantidad_disp` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagecinema`
--

INSERT INTO `imagecinema` (`numb_id`, `file_url`, `Categoria`, `Nombre`, `Cantidad_disp`) VALUES
(1, 'https://cartelera.elpais.com/assets/uploads/2019/06/28030126/C_05611.jpg', 'Accion', 'KarateKid', 0),
(2, 'https://cartelera.elpais.com/assets/uploads/2019/06/21030119/C_03913.jpg', 'Accion', 'Inglorious Bastard', 0),
(3, 'https://cartelera.elpais.com/assets/uploads/2022/10/14030125/C_13000.jpg', 'Accion', 'Spiderman 2', 0),
(4, 'https://cartelera.elpais.com/assets/uploads/2020/12/11030224/C_23327.jpg', 'Accion', 'Matrix Revolution', 0),
(5, 'https://cdn.europosters.eu/image/750/posters/five-nights-at-freddy-s-help-wanted-i112549.jpg', 'Suspenso', 'Five nights at freddys', 42),
(6, 'https://cartelera.elpais.com/assets/uploads/2021/05/14030144/C_23736.jpg', 'Suspenso', 'Ejercito de los muertos', 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagecinema`
--
ALTER TABLE `imagecinema`
  ADD PRIMARY KEY (`numb_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagecinema`
--
ALTER TABLE `imagecinema`
  MODIFY `numb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
