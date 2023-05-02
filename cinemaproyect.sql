-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2023 a las 18:45:25
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
(1, 'The Karate Kid', 'Cuando la carrera profesional de su madre los lleva a China, Dre Parker, de 12 años, descubre que es un extraño en una tierra desconocida. A pesar de que él sabe un poco de karate, sus habilidades para pelear no son suficientes contra Cheng, el acosador de su escuela. Dre encuentra a un amigo en el Sr. Han, un empleado de mantenimiento que también es maestro de las artes marciales. El Sr. Han le enseña a Dre todo sobre kung fu con la esperanza de que venza a Cheng.', 10990, 10, 1, 1),
(2, 'Inglorious Bastard', 'II Guerra Mundial, Francia, Shosanna presencia la ejecución de su familia por orden del coronel nazi Hans Landa. Huye a Paris y adopta una nueva identidad como propietaria de un cine. Mientras el teniente Aldo Raine adiestra a un grupo de soldados judíos. Los hombres de Raine y una actriz alemana que agente doble, deben llevar a cabo una misión que hará caer a los jefes del Tercer Reich. El destino quiere que todos se encuentren bajo la marquesina de un cine donde Shosanna espera para vengarse.', 7990, 0, 1, 1),
(3, 'Spiderman 2', 'Como si Peter Parker no tuviera suficiente con sus propios problemas, estudios y su amor por Mary Jane, ahora tiene que salvar a la ciudad de un nuevo villano, el Doctor Octopus.', 54990, 0, 1, 1),
(4, 'Matrix, Revolutions', 'Neo sigue adquiriendo nuevos poderes. Ahora, algo más cansado, ha llegado a la tierra de nadie, un tranquilo lugar entre Matrix y el mundo de las máquinas. Trinity vela el cuerpo en coma de Neo, mientras Morfeo se enfrenta a una revelación.', 15000, 0, 1, 1),
(5, 'Five nights at freddys', 'Aun no esta disponible XD', 75990, 0, 2, 1),
(6, 'Ejercito de los muertos', 'Se ha declarado una epidemia zombi en Las Vegas. Un grupo de mercenarios decide adentrarse en la zona de cuarentena para perpetrar el mayor golpe de la historia.', 23000, 0, 2, 1),
(7, 'Tiburon', 'Un pueblo costero del este de Estados Unidos se ve amenazado por un gigantesco tiburón blanco que ha atacado a varias personas. Este hecho pone en entredicho la seguridad de los bañadores durante la estación veraniega. Por ello, el alcalde de la localidad encomienda la caza del pez al jefe de la policía, un pescador y a un científico quienes se enfrentarán a un animal muy inteligente y violento.', 6000, 0, 2, 1),
(8, 'La maldición de Lake Manor', 'Samuel, un niño parapléjico, vive con su madre en una casa aislada en el bosque. El joven está desesperado porque tiene prohibido salir de la casa, pero Denise, una nueva empleada en la mansión, intentará ayudarlo a salir de su reclusión.', 8000, 0, 2, 1),
(9, 'Octopussy', 'James Bond es enviado a Berlín oriental para esclarecer la muerte de su compañero, el agente 009. Las sospechas recaen sobre un príncipe afgano exiliado, asociado con \"Octopussy\", una mujer que lidera una organización contrabandista de joyas.', 12000, 0, 3, 1),
(10, 'Twister', 'Dos grupos de científicos persiguen a las tormentas para estudiar los comportamientos de los tornados. Ambos compiten por ser los primeros en analizar estos fenómenos meteorológicos desde dentro de un tornado.', 2500, 0, 3, 1),
(11, 'Fenix', 'Junio de 1945. Nelly, una superviviente de Auschwitz, regresa a su Berlín natal gravemente herida y con la cara deformada, acompañada de Lene, de la Agencia Judía y amiga desde antes de la guerra. Tras someterse a una traumática operación de reconstrucción facial, y a pesar de las advertencias de su amiga, Nelly se empeña en buscar a su marido Johnny, el amor de su vida.', 3200, 0, 3, 1),
(12, 'Willow', 'En las mazmorras del castillo de la malvada reina Bavmorda, una prisionera da a luz a una niña. Según una profecía, la niña será la que ponga fin al reinado de la hechicera. La comadrona intenta salvar a la niña de la ira de la reina, pero es perseguida por los perros y tiene que arrojar la cuna al río. Gracias a la corriente del río, la cuna llega a un pueblo de enanos, donde la niña es adoptada por Willow.', 5000, 0, 3, 1);

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
