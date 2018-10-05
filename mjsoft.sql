-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-05-2013 a las 08:38:29
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.4.4-14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mjsoft`
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
  `HHAct` varchar(25) NOT NULL,
  `estAct` varchar(15) NOT NULL,
  `imagen` varchar(25) NOT NULL,
  `idPro` int(10) DEFAULT NULL,
  `idProy` int(10) DEFAULT NULL,
  `sugAct` varchar(500) NOT NULL,
  PRIMARY KEY (`idAct`),
  KEY `cronograma` (`idPro`),
  KEY `idProy` (`idProy`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`idAct`, `nomAct`, `fecIniAct`, `fecFinAct`, `HHAct`, `estAct`, `imagen`, `idPro`, `idProy`, `sugAct`) VALUES
(2, 'Recoleccion de  Jinformacion', '2013-10-12', '2013-10-15', '4', 'EnProceso', '1.png', 1088595052, 129, ''),
(8, 'Conversatorioo', '2013-05-09', '2013-05-09', '4', 'Proceso', '1.png', 1088591520, 129, ''),
(9, 'Entrevista', '2013-05-09', '2013-05-09', '3', 'Proceso', '1.png', 1088595052, 131, ''),
(10, 'Analisis de Formularios', '2013-05-12', '2013-05-12', '4', 'Proceso', 'AMERICA4.png', 1088595052, 132, 'dasd sadasdas das sada sdad asd as'),
(11, 'Mapa del sitIio', '2013-05-12', '2013-05-12', '12', 'Finalizado', 'AMERICA4.png', 1088591520, 132, 'dsfsdfsdfsd sdf sdf sdfsdfsd sdf sdf dfs sdfsdfsd sdf'),
(12, 'Entrevista y', '2013-05-12', '2013-05-12', '8', 'Proceso', 'AMERICA4.png', 1088591520, 133, ''),
(15, 'Diseno De Pagina Web', '2013-05-14', '2013-05-15', '24', 'Proceso', '1.png', 1088595052, 137, ''),
(16, 'Observacion directa', '2013-05-18', '2013-05-24', '0', 'Proceso', '1.png', 87510609, 144, ''),
(17, 'Promocion de sitio', '2013-05-24', '2013-06-08', '12', 'Proceso', '1.png', 87510650, 144, ''),
(18, 'Recoleccion de Info', '2013-05-17', '2013-05-18', '1 dia', 'Proceso', '1.png', 87510609, 147, ''),
(19, 'Entrevista', '2013-05-17', '2013-05-18', '24', 'Proceso', 'penguins.jpg', 1088591520, 148, 'me falto xxxx');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProy`, `nomProy`, `estProy`, `idUsu`) VALUES
(129, 'SinteticaSs', 'Finalizado', 87510608),
(130, 'Agresur', 'INICIAL', 87510608),
(131, 'Colegio Llorente', 'Proceso', 87510608),
(132, 'Aunar', 'Proceso', 87510608),
(133, 'Laguna', 'PorAsignar', 87510607),
(135, 'Sistema Bilblioteca', 'Proceso', 87510607),
(137, 'pagina Pueblo Viejo', 'Proceso', 1088591989),
(140, 'Prueba', 'PorAsignar', 87510607),
(144, 'Inglesia San Miguel', 'PorAsignar', 1088591989),
(147, 'Pagina Alpina S.A', 'Proceso', 87510505),
(148, 'Confamiliar', 'Proceso', 333333);

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
(333333, 'Michael', 'Rosero', 'Cliente', 'Masculino', '7777777', 'centro', 'mi@gnail.com', '12345'),
(87510505, 'Juan', 'Rivera', 'Cliente', 'Masculino', '320124555', 'Bolivarr', 'juan@gmail.com', '12345'),
(87510607, 'Hector', 'RodriguezB', 'Cliente', 'Masculino', '3146835857', 'Estadio I', 'hector@gmail.com', '132456'),
(87510608, 'David', 'Rodriguez', 'Cliente', 'Masculino', '313456000', 'Estadio II', 'david@gmail.com', '123'),
(87510609, 'Daniel', 'Ramirez', 'Programador', 'Masculino', '3121121211', 'Lorenzo', 'Daniel@gmail.com', '123'),
(87510650, 'Andres', 'Benavides', 'Programador', 'Maculino', '3121234534', 'San Luis', 'andres@gmail.com', '12345'),
(1088591515, 'Julian', 'Rodriguez', 'Administrador', 'Masculino', '31345645641', 'Estadio I', 'julian@gmail.com ', '123'),
(1088591520, 'Jamilton J', 'Meneses', 'Programador', 'Masculino', '3131666', 'Nuevo Sol', 'jamil@gmail.com', '12345'),
(1088591989, 'Luis', 'Rosero', 'Cliente', 'Masculino', '3125123121', 'calle 22 las cuadras', 'lucho@gmail.com', '123'),
(1088595052, 'Sebastian', 'Rodriguez', 'Programador', 'Masculino', '321', 'caaa', 'sebas@gmail.com', '123');

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
