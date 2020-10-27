-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2019 a las 18:32:22
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `worhou`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda`
--

CREATE TABLE `ayuda` (
  `Id_ayu` int(10) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ayuda`
--

INSERT INTO `ayuda` (`Id_ayu`, `Nombre`, `Correo`, `Descripcion`) VALUES
(1, 'Duan', 'du@misena', 'hola como estan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `Id_cargo` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`Id_cargo`, `Nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `Id_come` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `Id_tra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`Id_come`, `correo`, `comentario`, `fecha`, `Id_tra`) VALUES
(1, 'dala@misena', 'hola pego', '2019-09-11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `Id_doc` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`Id_doc`, `Nombre`) VALUES
(1, 'T.I'),
(2, 'C.C'),
(3, 'C.E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Id_registro` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Id_doc` int(10) NOT NULL,
  `Docucemto` int(20) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Id_cargo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Id_registro`, `Nombre`, `Apellido`, `Id_doc`, `Docucemto`, `Telefono`, `Correo`, `Contrasena`, `Id_cargo`) VALUES
(1, 'dala', 'uribe', 2, 1010, 123, 'dala@misena', '123', 1),
(2, 'dala', 'dala', 3, 123, 123, 'dala@empenada', '123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `Id_tra` int(10) NOT NULL,
  `trabajo` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `pdf_d` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`Id_tra`, `trabajo`, `descripcion`, `pdf_d`, `imagen`, `fecha`, `correo`) VALUES
(1, 'investigacion de desiertos', 'A continuacion se mostrara los diferentes resultados que se obtenieron en los estudios realizados en el sahara\r\n', 'PDF/Doc1.pdf', 'portada/Desert.jpg', '2019-09-03', 'dala@misena'),
(8, 'Los Studios detras de las peliculas', 'Aqui encontraras la historia de diferentes estudios de animaciÃ³n la forma en que trabajan los software que utilizan y los inicios de sus creadores.\r\n', 'PDF/Studios (p).pdf', 'portada/paula.jpg', '2019-09-17', 'paulabarahona12@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`Id_ayu`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`Id_cargo`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`Id_come`),
  ADD KEY `Id_tra` (`Id_tra`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`Id_doc`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`Id_registro`),
  ADD KEY `Id_doc` (`Id_doc`,`Id_cargo`),
  ADD KEY `Id_cargo` (`Id_cargo`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`Id_tra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  MODIFY `Id_ayu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `Id_registro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `Id_tra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`Id_tra`) REFERENCES `trabajo` (`Id_tra`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`Id_doc`) REFERENCES `documento` (`Id_doc`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`Id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
