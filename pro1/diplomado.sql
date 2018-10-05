-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2013 a las 23:13:08
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `diplomado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE IF NOT EXISTS `cronograma` (
  `idAct` int(10) NOT NULL AUTO_INCREMENT,
  `nomAct` varchar(40) NOT NULL,
  `fecIniAct` varchar(20) NOT NULL,
  `fecFinAct` varchar(20) NOT NULL,
  `HHAct` int(3) NOT NULL,
  `estAct` int(1) NOT NULL,
  `idPro` int(10) DEFAULT NULL,
  `idProy` int(10) DEFAULT NULL,
  PRIMARY KEY (`idAct`),
  KEY `cronograma` (`idPro`),
  KEY `idProy` (`idProy`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`idAct`, `nomAct`, `fecIniAct`, `fecFinAct`, `HHAct`, `estAct`, `idPro`, `idProy`) VALUES
(8, 'Conversatorio', '2013-05-09', '2013-05-09', 4, 0, 1088591520, 129),
(9, 'Entrevista', '2013-05-09', '2013-05-09', 3, 0, 1088595052, 131);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `idProy` int(11) NOT NULL AUTO_INCREMENT,
  `nomProy` varchar(40) DEFAULT NULL,
  `estProy` varchar(25) NOT NULL,
  `idUsu` int(10) DEFAULT NULL,
  PRIMARY KEY (`idProy`),
  KEY `proyecto` (`idUsu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProy`, `nomProy`, `estProy`, `idUsu`) VALUES
(129, 'Sinteticas', 'Finalizado', 87510608),
(130, 'Agresur', 'INICIAL', 87510608),
(131, 'Colegio Llorente', 'Proceso', 87510608);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsu` int(10) NOT NULL,
  `nomUsu` varchar(50) NOT NULL,
  `apeUsu` varchar(50) NOT NULL,
  `tipUsu` varchar(50) NOT NULL,
  `genUsu` varchar(50) NOT NULL,
  `celUsu` varchar(50) NOT NULL,
  `dirUsu` varchar(50) NOT NULL,
  `corUsu` varchar(50) NOT NULL,
  `conUsu` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsu`, `nomUsu`, `apeUsu`, `tipUsu`, `genUsu`, `celUsu`, `dirUsu`, `corUsu`, `conUsu`) VALUES
(87510607, 'Hector', 'Rodriguez', 'Cliente', 'Masculino', '3146835857', 'Estadio I', 'hector@gmail.com', '123'),
(87510608, 'David', 'Rodriguez', 'Cliente', 'Masculino', '31345645641', 'Estadio I', 'hector@gmail.com', '123'),
(1088591515, 'Julian', 'Rodriguez', 'Administrador', 'Masculino', '31345645641', 'Estadio I', 'julian@gmail.com', '123'),
(1088591520, 'Jamiltomn', 'Meneses', 'Programador', 'Masculino', '3134561245', 'Nuevo Sol', 'jamil@gmail.com', '123'),
(1088595052, 'Sebastian', 'Rodriguez', 'Programador', 'Masculino', '321', 'caaa', '112s@gm', '123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `cronograma_ibfk_2` FOREIGN KEY (`idProy`) REFERENCES `proyecto` (`idProy`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cronograma_ibfk_3` FOREIGN KEY (`idProy`) REFERENCES `proyecto` (`idProy`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cronograma_ibfk_4` FOREIGN KEY (`idPro`) REFERENCES `usuario` (`idUsu`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
