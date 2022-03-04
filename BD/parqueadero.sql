-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2022 a las 16:51:03
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `placa` varchar(20) NOT NULL,
  `tipoCliente` varchar(45) DEFAULT NULL,
  `tiempoAcumulado` int(10) DEFAULT NULL,
  `ingreso` varchar(20) DEFAULT NULL,
  `salida` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`placa`, `tipoCliente`, `tiempoAcumulado`, `ingreso`, `salida`) VALUES
('DFF676', 'Invitado', 0, '10:17', ' '),
('DSF596', 'Oficial', 0, '22:52', ' '),
('FGT54R', 'Invitado', 0, '10:17', ' '),
('FOP094', 'Residente', 0, '10:49', ' '),
('IOP345', 'Residente', 0, '10:33', ' '),
('SDF43E', 'Residente', 0, '03:49', ' '),
('YHU789', 'Oficial', 0, '10:28', ' ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`placa`),
  ADD UNIQUE KEY `placa_UNIQUE` (`placa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
