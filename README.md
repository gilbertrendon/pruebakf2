# pruebakf2
Fase 2 prueba konecta


--Se debe crear una base de datos en wamp server(o xamp server sino es en windows), pero yo lo hice en windows.
--La base de datos se debe llamar pruebakf2 y se crea ejecutando el siguiente código:


-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2020 at 10:10 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebakf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `ID` int(11) DEFAULT NULL,
  `Nombredeproducto` varchar(100) NOT NULL,
  `Referencia` varchar(100) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Fechadecreacion` datetime NOT NULL,
  `Fechadeultimaventa` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`ID`, `Nombredeproducto`, `Referencia`, `Precio`, `Peso`, `Categoria`, `Stock`, `Fechadecreacion`, `Fechadeultimaventa`) VALUES
(1, 'ASDF', '1234', 1000, 1, 'CAT1', 40, '2020-10-24 00:00:00', '2020-10-24 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--PARA LAS VALIDACIONES SE HICIERON EN EL INDEX Y OTROS FORMULARIOS
