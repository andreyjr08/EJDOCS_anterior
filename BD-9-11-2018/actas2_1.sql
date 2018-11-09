-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2018 a las 23:33:57
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actas2.1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas`
--

CREATE TABLE `actas` (
  `ID` int(11) NOT NULL,
  `USUARIO_ID` int(11) NOT NULL,
  `CREADO_POR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celulares`
--

CREATE TABLE `celulares` (
  `IMEI` int(11) NOT NULL,
  `ACCESORIOS` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `#CELULAR` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `PERSONA_ID` int(11) NOT NULL,
  `MODELO__CEL_ID` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadores`
--

CREATE TABLE `computadores` (
  `SERIAL` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ACTIVO_FIJO` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `PROCESADOR` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `MEMORIA_RAM` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `SERIAL_CARGADOR` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MODELO_ID` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`ID`, `NOMBRE`) VALUES
(1, 'TECNOLOGIAs DE LA INFORMACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos_duros`
--

CREATE TABLE `discos_duros` (
  `ID` int(11) NOT NULL,
  `SERIAL` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO_DISC_DUR` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log2`
--

CREATE TABLE `log2` (
  `ID` int(11) NOT NULL,
  `CEDULA` int(10) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CONTRASENA` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ROL_ID` int(11) DEFAULT NULL,
  `DEPARTAMENTO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `log2`
--

INSERT INTO `log2` (`ID`, `CEDULA`, `NOMBRE`, `CONTRASENA`, `ROL_ID`, `DEPARTAMENTO_ID`) VALUES
(1, 1112495044, 'JEINER ANDREY GRIJALBA', '7ecn0l061a', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_cel`
--

CREATE TABLE `modelos_cel` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_disc_duro`
--

CREATE TABLE `modelos_disc_duro` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MDOELO` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_pant`
--

CREATE TABLE `modelos_pant` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_pc`
--

CREATE TABLE `modelos_pc` (
  `ID` int(11) NOT NULL,
  `MARCA` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantallas`
--

CREATE TABLE `pantallas` (
  `ID` int(11) NOT NULL,
  `SERIAL` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MODELO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACTIVO_FIJO` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `MODELO_PANT` int(11) NOT NULL,
  `ACTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(10) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `NOMBRE`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CEDULA` int(11) NOT NULL,
  `NOMBRES` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `DEPARTAMENTO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CEDULA`, `NOMBRES`, `APELLIDOS`, `DEPARTAMENTO_ID`) VALUES
(1112495044, 'JEINER ANDREY', 'GRIJALBA', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actas`
--
ALTER TABLE `actas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USUARIO_ID` (`USUARIO_ID`),
  ADD KEY `CREADO_POR` (`CREADO_POR`);

--
-- Indices de la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD KEY `PERSONA_ID` (`PERSONA_ID`),
  ADD KEY `MODELO__CEL_ID` (`MODELO__CEL_ID`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`SERIAL`),
  ADD KEY `MODELO_ID` (`MODELO_ID`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `discos_duros`
--
ALTER TABLE `discos_duros`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MODELO_DISC_DUR` (`MODELO_DISC_DUR`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `log2`
--
ALTER TABLE `log2`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ROL_ID` (`ROL_ID`),
  ADD KEY `DEPARTAMENTO_ID` (`DEPARTAMENTO_ID`);

--
-- Indices de la tabla `modelos_cel`
--
ALTER TABLE `modelos_cel`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `modelos_disc_duro`
--
ALTER TABLE `modelos_disc_duro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `modelos_pant`
--
ALTER TABLE `modelos_pant`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `modelos_pc`
--
ALTER TABLE `modelos_pc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pantallas`
--
ALTER TABLE `pantallas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MODELO_PANT` (`MODELO_PANT`),
  ADD KEY `ACTA_ID` (`ACTA_ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CEDULA`),
  ADD KEY `DEPARTAMENTO_ID` (`DEPARTAMENTO_ID`),
  ADD KEY `DEPARTAMENTO_ID_2` (`DEPARTAMENTO_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actas`
--
ALTER TABLE `actas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `discos_duros`
--
ALTER TABLE `discos_duros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log2`
--
ALTER TABLE `log2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `modelos_cel`
--
ALTER TABLE `modelos_cel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos_disc_duro`
--
ALTER TABLE `modelos_disc_duro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos_pant`
--
ALTER TABLE `modelos_pant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelos_pc`
--
ALTER TABLE `modelos_pc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pantallas`
--
ALTER TABLE `pantallas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actas`
--
ALTER TABLE `actas`
  ADD CONSTRAINT `actas_ibfk_3` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuarios` (`CEDULA`),
  ADD CONSTRAINT `actas_ibfk_4` FOREIGN KEY (`CREADO_POR`) REFERENCES `log` (`CEDULA`);

--
-- Filtros para la tabla `celulares`
--
ALTER TABLE `celulares`
  ADD CONSTRAINT `celulares_ibfk_1` FOREIGN KEY (`MODELO__CEL_ID`) REFERENCES `modelos_cel` (`ID`),
  ADD CONSTRAINT `celulares_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `computadores`
--
ALTER TABLE `computadores`
  ADD CONSTRAINT `computadores_ibfk_1` FOREIGN KEY (`MODELO_ID`) REFERENCES `modelos_pc` (`ID`),
  ADD CONSTRAINT `computadores_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `discos_duros`
--
ALTER TABLE `discos_duros`
  ADD CONSTRAINT `discos_duros_ibfk_1` FOREIGN KEY (`MODELO_DISC_DUR`) REFERENCES `modelos_disc_duro` (`ID`),
  ADD CONSTRAINT `discos_duros_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `log2`
--
ALTER TABLE `log2`
  ADD CONSTRAINT `log2_ibfk_1` FOREIGN KEY (`DEPARTAMENTO_ID`) REFERENCES `departamentos` (`ID`),
  ADD CONSTRAINT `log2_ibfk_2` FOREIGN KEY (`ROL_ID`) REFERENCES `roles` (`ID`);

--
-- Filtros para la tabla `modelos_disc_duro`
--
ALTER TABLE `modelos_disc_duro`
  ADD CONSTRAINT `modelos_disc_duro_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `departamentos` (`ID`);

--
-- Filtros para la tabla `pantallas`
--
ALTER TABLE `pantallas`
  ADD CONSTRAINT `pantallas_ibfk_1` FOREIGN KEY (`MODELO_PANT`) REFERENCES `modelos_pant` (`ID`),
  ADD CONSTRAINT `pantallas_ibfk_2` FOREIGN KEY (`ACTA_ID`) REFERENCES `actas` (`ID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`DEPARTAMENTO_ID`) REFERENCES `departamentos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
