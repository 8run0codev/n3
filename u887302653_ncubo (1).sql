
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2016 a las 06:15:23
-- Versión del servidor: 10.0.22-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u887302653_ncubo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE IF NOT EXISTS `base` (
  `idProd` int(3) NOT NULL,
  `idCol` int(3) DEFAULT NULL,
  PRIMARY KEY (`idProd`),
  KEY `idCol_idx` (`idCol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `base`
--

INSERT INTO `base` (`idProd`, `idCol`) VALUES
(8, 1),
(9, 1),
(1, 2),
(2, 2),
(3, 2),
(6, 2),
(10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCat` int(3) NOT NULL AUTO_INCREMENT,
  `cat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCat`, `cat`) VALUES
(1, '3x3'),
(2, 'variaciones'),
(3, 'cuboides'),
(4, 'accesorios'),
(5, '2x2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `idCol` int(3) NOT NULL AUTO_INCREMENT,
  `Col` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idCol`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`idCol`, `Col`) VALUES
(1, 'Blanco'),
(2, 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` text COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8_spanish_ci NOT NULL,
  `subtotal` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=113 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
  `idcuen` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `apm` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `Password` text COLLATE utf8_spanish_ci NOT NULL,
  `Correo` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`idcuen`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=74 ;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`idcuen`, `Nombre`, `Apellido`, `apm`, `Usuario`, `Password`, `Correo`, `tipo`) VALUES
(1, 'Admin', 'principal', 'admin', 'admin', '12345', 'admin@cubos.com', 1),
(14, 'prueba', 'probando', 'probada', 'prueba', '12345', 'prueba@prueba.com', 2),
(66, 'Bruno', 'Gomez', 'Mora', 'Bruno', '12345', 'randomaccessmx@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `idMar` int(3) NOT NULL AUTO_INCREMENT,
  `nomMar` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idMar`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMar`, `nomMar`) VALUES
(1, 'Moyu'),
(2, 'Shengshou'),
(3, 'Yuxin'),
(4, 'Rubik´s'),
(5, 'Dayan'),
(6, 'LanLan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProd` int(3) NOT NULL AUTO_INCREMENT,
  `desProd` varchar(45) DEFAULT NULL,
  `preProd` double DEFAULT NULL,
  `idMar` int(3) DEFAULT NULL,
  `idSubCat` int(3) DEFAULT NULL,
  `imgProd` varchar(45) NOT NULL,
  `col` varchar(10) NOT NULL,
  `Cantidad` int(3) NOT NULL,
  PRIMARY KEY (`idProd`),
  KEY `idMar_idx` (`idMar`),
  KEY `idSubCat_idx` (`idSubCat`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProd`, `desProd`, `preProd`, `idMar`, `idSubCat`, `imgProd`, `col`, `Cantidad`) VALUES
(3, 'Void Cube', 250, 4, 5, 'voidcube.jpg', 'Negro', 10),
(6, 'Cubo artesanal', 200, 1, 1, '790863_p1.jpg.jpg', 'Cafe', 35),
(9, 'Megaminx', 180, 1, 1, '503479_megaminx.jpg', 'Negro', 12),
(10, 'Professor Pyraminx', 600, 1, 1, '198609_professor.jpg', 'Negro', 34),
(11, 'Maru 3x3', 500, 1, 1, '159211_maru.jpeg', '', 21),
(12, 'Gosth Cube', 500, 1, 1, '840027_p2.jpg', '', 22),
(13, 'Manzana 3x3', 150, 1, 1, '595917_p3.jpg', '', 21),
(14, 'Megamorphix', 200, 1, 1, '597290_p4.jpg', '', 13),
(15, 'Barrel Cube', 200, 1, 1, '636935_barrel.jpg', '', 16),
(28, 'Cubo Gato Kawaii Desu Ne', 200, 1, 1, '581894_yj-1635-1589962-1-product.jpg', '', 3),
(27, 'Cubo para niños - Disney', 15, 1, 1, '575781_cubo-magico-disney-chico-2-600x534.jpg', '', 19),
(21, 'Cubo 3x3', 500, 1, 1, '80746_skewbe.jpg', '', 23),
(26, 'Mirror', 150, 1, 1, '820445_mirror.jpg', '', 10),
(30, 'Square-1', 280, 1, 1, '513953_square-1.jpg', '', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `idSubCat` int(3) NOT NULL AUTO_INCREMENT,
  `subCat` varchar(20) DEFAULT NULL,
  `idCat` int(3) DEFAULT NULL,
  PRIMARY KEY (`idSubCat`),
  KEY `idCat_idx` (`idCat`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `subcat`
--

INSERT INTO `subcat` (`idSubCat`, `subCat`, `idCat`) VALUES
(1, 'estandar', 1),
(2, 'cuboides', 3),
(3, 'variaciones', 2),
(4, 'accesorios', 4),
(5, 'variaciones', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
