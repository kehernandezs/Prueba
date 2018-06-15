-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2018 a las 19:23:34
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisismuestras`
--

CREATE TABLE `analisismuestras` (
  `idAnalisisMuestras` int(11) NOT NULL,
  `tipoAnalisis` int(11) NOT NULL,
  `fechaRecepcion` date NOT NULL,
  `cantidadMuestra` int(11) NOT NULL,
  `centimetrosCubicos` float(10,1) DEFAULT NULL,
  `Empresa_codigoEmpresa` int(11) NOT NULL,
  `Particular_codigoParticular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `analisismuestras`
--

INSERT INTO `analisismuestras` (`idAnalisisMuestras`, `tipoAnalisis`, `fechaRecepcion`, `cantidadMuestra`, `centimetrosCubicos`, `Empresa_codigoEmpresa`, `Particular_codigoParticular`) VALUES
(1, 1, '0000-00-00', 12, 3.5, 100411, 0),
(2, 2, '0000-00-00', 32, 3.5, 123, 0),
(7, 2, '0000-00-00', 123, 6.6, 123, 0),
(8, 2, '0000-00-00', 233, 6.6, 123, 0),
(9, 1, '0000-00-00', 233, 6.6, 0, 3500),
(10, 2, '0000-00-00', 79, 5.4, 156093, 0),
(11, 2, '0000-00-00', 78, 5.8, 0, 365736);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `rutContacto` int(11) NOT NULL,
  `nombreContacto` varchar(30) NOT NULL,
  `emailContacto` varchar(45) NOT NULL,
  `telefonoContacto` varchar(15) NOT NULL,
  `Empresa_codigoEmpresa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`rutContacto`, `nombreContacto`, `emailContacto`, `telefonoContacto`, `Empresa_codigoEmpresa`) VALUES
(1990114212, 'KEVIN HERNANDEZ', 'KEVIN@HOTMAIL.COM', '14124124', '2500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `rutEmpleado` varchar(10) NOT NULL,
  `nombreEmpleado` varchar(50) NOT NULL,
  `passwordEmpleado` varchar(10) NOT NULL,
  `categoria` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`rutEmpleado`, `nombreEmpleado`, `passwordEmpleado`, `categoria`) VALUES
('19006015', 'kevin hernandez', '1234', '2'),
('21312321', 'Pedro Pablo', '12345', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `codigoEmpresa` int(11) NOT NULL,
  `rutEmpresa` varchar(10) NOT NULL,
  `nombreEmpresa` varchar(30) NOT NULL,
  `passwordEmpresa` varchar(10) NOT NULL,
  `direccionEmpresa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigoEmpresa`, `rutEmpresa`, `nombreEmpresa`, `passwordEmpresa`, `direccionEmpresa`) VALUES
(123, '1234', 'KevinCorp', '1234', 'dwqqwd'),
(100411, '1234561', 'CORP', '1234', 'jklqdhj qjhdjkqh dhjqd jw'),
(115694, '12312412', 'HERNANDEZ', '4321', 'qwdqw dqwdq wd dqw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `particular`
--

CREATE TABLE `particular` (
  `codigoParticular` int(11) NOT NULL,
  `rutParticular` varchar(45) NOT NULL,
  `passwordParticular` varchar(45) NOT NULL,
  `nombreParticular` varchar(45) NOT NULL,
  `direccionParticular` varchar(45) NOT NULL,
  `emailParticular` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `particular`
--

INSERT INTO `particular` (`codigoParticular`, `rutParticular`, `passwordParticular`, `nombreParticular`, `direccionParticular`, `emailParticular`) VALUES
(3500, '1234', '1234', 'KEVIN', 'DWADWADAW', 'DADADAS@QDQWDQW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoanalisis`
--

CREATE TABLE `tipoanalisis` (
  `idTipoAnalisis` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoanalisis`
--

INSERT INTO `tipoanalisis` (`idTipoAnalisis`, `nombre`) VALUES
(1, 'Detección de micotoxinas'),
(2, 'Detección de\r\nbacterias nocivas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisismuestras`
--
ALTER TABLE `analisismuestras`
  ADD PRIMARY KEY (`idAnalisisMuestras`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`rutContacto`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`rutEmpleado`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`codigoEmpresa`),
  ADD UNIQUE KEY `rutEmpresa` (`rutEmpresa`);

--
-- Indices de la tabla `particular`
--
ALTER TABLE `particular`
  ADD PRIMARY KEY (`codigoParticular`),
  ADD UNIQUE KEY `rutParticular` (`rutParticular`);

--
-- Indices de la tabla `tipoanalisis`
--
ALTER TABLE `tipoanalisis`
  ADD PRIMARY KEY (`idTipoAnalisis`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisismuestras`
--
ALTER TABLE `analisismuestras`
  MODIFY `idAnalisisMuestras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `codigoEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156094;

--
-- AUTO_INCREMENT de la tabla `particular`
--
ALTER TABLE `particular`
  MODIFY `codigoParticular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365737;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
