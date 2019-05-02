-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-05-2019 a las 00:45:55
-- Versión del servidor: 5.7.23
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `subete_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `mensaje` varchar(128) NOT NULL,
  `correo_usuario` varchar(64) NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `id_usuario`, `nombre`, `mensaje`, `correo_usuario`) VALUES
(1, 1, 'fernando', 'holaaaa', 'Tapices@unah.hn'),
(2, 1, 'fernando', 'es muy bueno', 'Tapices@unah.hn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

DROP TABLE IF EXISTS `destinos`;
CREATE TABLE IF NOT EXISTS `destinos` (
  `id_destino` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_destino` varchar(64) NOT NULL,
  `descripcion` varchar(64) NOT NULL,
  `abreviacion` varchar(64) NOT NULL,
  PRIMARY KEY (`id_destino`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id_destino`, `nombre_destino`, `descripcion`, `abreviacion`) VALUES
(1, 'Tegucigalpa', 'Capital', 'TGU'),
(2, 'San Pedro Sula', '', 'SAP'),
(3, 'Comayagua', '', 'CMG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(64) NOT NULL,
  `descripcion` varchar(64) NOT NULL,
  `direccion` varchar(64) NOT NULL,
  `telefono` varchar(64) NOT NULL,
  `correo` varchar(64) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre_empresa`, `descripcion`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Hedman Alas', '', 'Centro Comercial Centro America', '22232525', 'hedman@alas.com'),
(2, 'Viana', '', 'Boulevar fuerzas Armadas', '25253030', 'viana@gamil.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

DROP TABLE IF EXISTS `rutas`;
CREATE TABLE IF NOT EXISTS `rutas` (
  `id_ruta` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `id_origen` int(11) NOT NULL,
  `id_destino` int(11) NOT NULL,
  `hora_salida` time NOT NULL,
  `hora_llegada` time NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_ruta`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `id_empresa`, `id_origen`, `id_destino`, `hora_salida`, `hora_llegada`, `precio`, `estado`) VALUES
(1, 1, 1, 2, '15:20:00', '19:00:00', 250, 1),
(2, 2, 3, 1, '09:00:00', '10:20:00', 90, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(64) NOT NULL,
  `apellido_usuario` varchar(64) NOT NULL,
  `identidad_usuario` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `genero` varchar(64) NOT NULL,
  `correo_usuario` varchar(64) NOT NULL,
  `telefono_usuario` varchar(64) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `identidad_usuario`, `password`, `genero`, `correo_usuario`, `telefono_usuario`, `fecha_nacimiento`) VALUES
(1, 'ana', '', '', '$2y$10$ahoUoh0vB8qxNiilVYKXKOSTUokSZjFJYbeCZgtLdnd1mB.A1yNL6', 'male', 'ana@gmail.com', '', NULL),
(2, 'afer', '', '', '$2y$10$/9WlR.viP6Bk9G7oX2W4kuIlpgHqWUGBCxNFdcbbZF3q6SagaetvG', 'female', 'fer@gmail.com', '', NULL),
(3, 'Fernando', 'Padilla', 'Fernando', '$2y$10$GA2krllys8wYf3jNoFCcMOHhw.hQ09MXGN8yN4r7AKBDs0PNhr/Ga', 'male', 'fer1@gmail.com', '22335566', '2019-04-30'),
(4, 'Juan', 'Hernandez', '0801155500124', '$2y$10$JPbJfO3vVFTTT2Tr5Px08uBKSIQ1em26FNWDLn3sdV8EKWbn2gft6', 'male', 'joh@gmail.com', '22335566', '2019-04-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes_reservados`
--

DROP TABLE IF EXISTS `viajes_reservados`;
CREATE TABLE IF NOT EXISTS `viajes_reservados` (
  `id_viaje` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_compra` date DEFAULT NULL,
  PRIMARY KEY (`id_viaje`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `viajes_reservados`
--

INSERT INTO `viajes_reservados` (`id_viaje`, `id_usuario`, `id_ruta`, `estado`, `fecha_compra`) VALUES
(1, 1, 1, 0, '2019-04-29'),
(2, 1, 2, 0, '2019-04-21'),
(3, 1, 1, 1, '2019-04-29'),
(4, 1, 2, 1, '2019-04-29'),
(5, 1, 1, 1, '2019-04-29'),
(6, 4, 1, 0, '2019-05-01'),
(7, 1, 2, 0, '2019-05-02'),
(8, 3, 1, 1, '2019-05-02'),
(9, 3, 2, 1, '2019-05-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
