-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2020 a las 19:05:03
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nom-035`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario1`
--

CREATE TABLE `cuestionario1` (
  `idq1` int(11) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `pregunta1` int(2) NOT NULL,
  `pregunta2` int(2) NOT NULL,
  `pregunta3` int(2) NOT NULL,
  `pregunta4` int(2) NOT NULL,
  `pregunta5` int(2) NOT NULL,
  `pregunta6` int(2) NOT NULL,
  `pregunta7` int(2) NOT NULL,
  `pregunta8` int(2) NOT NULL,
  `pregunta9` int(2) NOT NULL,
  `pregunta10` int(2) NOT NULL,
  `pregunta11` int(2) NOT NULL,
  `pregunta12` int(2) NOT NULL,
  `pregunta13` int(2) NOT NULL,
  `pregunta14` int(2) NOT NULL,
  `pregunta15` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cuestionario1`
--

INSERT INTO `cuestionario1` (`idq1`, `correo`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`) VALUES
(5, 'ses@gmail.com', 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0),
(8, 'trabajador@ito.com', 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario2`
--

CREATE TABLE `cuestionario2` (
  `idq2` int(11) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `pregunta1` int(2) NOT NULL,
  `pregunta2` int(2) NOT NULL,
  `pregunta3` int(2) NOT NULL,
  `pregunta4` int(2) NOT NULL,
  `pregunta5` int(2) NOT NULL,
  `pregunta6` int(2) NOT NULL,
  `pregunta7` int(2) NOT NULL,
  `pregunta8` int(2) NOT NULL,
  `pregunta9` int(2) NOT NULL,
  `pregunta10` int(2) NOT NULL,
  `pregunta11` int(2) NOT NULL,
  `pregunta12` int(2) NOT NULL,
  `pregunta13` int(2) NOT NULL,
  `pregunta14` int(2) NOT NULL,
  `pregunta15` int(2) NOT NULL,
  `pregunta16` int(2) NOT NULL,
  `pregunta17` int(2) NOT NULL,
  `pregunta18` int(2) NOT NULL,
  `pregunta19` int(2) NOT NULL,
  `pregunta20` int(2) NOT NULL,
  `pregunta21` int(2) NOT NULL,
  `pregunta22` int(2) NOT NULL,
  `pregunta23` int(2) NOT NULL,
  `pregunta24` int(2) NOT NULL,
  `pregunta25` int(2) NOT NULL,
  `pregunta26` int(2) NOT NULL,
  `pregunta27` int(2) NOT NULL,
  `pregunta28` int(2) NOT NULL,
  `pregunta29` int(2) NOT NULL,
  `pregunta30` int(2) NOT NULL,
  `pregunta31` int(2) NOT NULL,
  `pregunta32` int(2) NOT NULL,
  `pregunta33` int(2) NOT NULL,
  `pregunta34` int(2) NOT NULL,
  `pregunta35` int(2) NOT NULL,
  `pregunta36` int(2) NOT NULL,
  `pregunta37` int(2) NOT NULL,
  `pregunta38` int(2) NOT NULL,
  `pregunta39` int(2) NOT NULL,
  `pregunta40` int(2) NOT NULL,
  `pregunta41` int(2) NOT NULL,
  `pregunta42` int(2) NOT NULL,
  `pregunta43` int(2) NOT NULL,
  `pregunta44` int(2) NOT NULL,
  `pregunta45` int(2) NOT NULL,
  `pregunta46` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cuestionario2`
--

INSERT INTO `cuestionario2` (`idq2`, `correo`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `pregunta21`, `pregunta22`, `pregunta23`, `pregunta24`, `pregunta25`, `pregunta26`, `pregunta27`, `pregunta28`, `pregunta29`, `pregunta30`, `pregunta31`, `pregunta32`, `pregunta33`, `pregunta34`, `pregunta35`, `pregunta36`, `pregunta37`, `pregunta38`, `pregunta39`, `pregunta40`, `pregunta41`, `pregunta42`, `pregunta43`, `pregunta44`, `pregunta45`, `pregunta46`) VALUES
(17, 'ses@gmail.com', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(20, 'trabajador@ito.com', 2, 2, 2, 2, 4, 1, 3, 1, 3, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 1, 3, 1, 3, 4, 1, 0, 0, 0, 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario3`
--

CREATE TABLE `cuestionario3` (
  `idq3` int(11) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `pregunta1` int(2) NOT NULL,
  `pregunta2` int(2) NOT NULL,
  `pregunta3` int(2) NOT NULL,
  `pregunta4` int(2) NOT NULL,
  `pregunta5` int(2) NOT NULL,
  `pregunta6` int(2) NOT NULL,
  `pregunta7` int(2) NOT NULL,
  `pregunta8` int(2) NOT NULL,
  `pregunta9` int(2) NOT NULL,
  `pregunta10` int(2) NOT NULL,
  `pregunta11` int(2) NOT NULL,
  `pregunta12` int(2) NOT NULL,
  `pregunta13` int(2) NOT NULL,
  `pregunta14` int(2) NOT NULL,
  `pregunta15` int(2) NOT NULL,
  `pregunta16` int(2) NOT NULL,
  `pregunta17` int(2) NOT NULL,
  `pregunta18` int(2) NOT NULL,
  `pregunta19` int(2) NOT NULL,
  `pregunta20` int(2) NOT NULL,
  `pregunta21` int(2) NOT NULL,
  `pregunta22` int(2) NOT NULL,
  `pregunta23` int(2) NOT NULL,
  `pregunta24` int(2) NOT NULL,
  `pregunta25` int(2) NOT NULL,
  `pregunta26` int(2) NOT NULL,
  `pregunta27` int(2) NOT NULL,
  `pregunta28` int(2) NOT NULL,
  `pregunta29` int(2) NOT NULL,
  `pregunta30` int(2) NOT NULL,
  `pregunta31` int(2) NOT NULL,
  `pregunta32` int(2) NOT NULL,
  `pregunta33` int(2) NOT NULL,
  `pregunta34` int(2) NOT NULL,
  `pregunta35` int(2) NOT NULL,
  `pregunta36` int(2) NOT NULL,
  `pregunta37` int(2) NOT NULL,
  `pregunta38` int(2) NOT NULL,
  `pregunta39` int(2) NOT NULL,
  `pregunta40` int(2) NOT NULL,
  `pregunta41` int(2) NOT NULL,
  `pregunta42` int(2) NOT NULL,
  `pregunta43` int(2) NOT NULL,
  `pregunta44` int(2) NOT NULL,
  `pregunta45` int(2) NOT NULL,
  `pregunta46` int(2) NOT NULL,
  `pregunta47` int(2) NOT NULL,
  `pregunta48` int(2) NOT NULL,
  `pregunta49` int(2) NOT NULL,
  `pregunta50` int(2) NOT NULL,
  `pregunta51` int(2) NOT NULL,
  `pregunta52` int(2) NOT NULL,
  `pregunta53` int(2) NOT NULL,
  `pregunta54` int(2) NOT NULL,
  `pregunta55` int(2) NOT NULL,
  `pregunta56` int(2) NOT NULL,
  `pregunta57` int(2) NOT NULL,
  `pregunta58` int(2) NOT NULL,
  `pregunta59` int(2) NOT NULL,
  `pregunta60` int(2) NOT NULL,
  `pregunta61` int(2) NOT NULL,
  `pregunta62` int(2) NOT NULL,
  `pregunta63` int(2) NOT NULL,
  `pregunta64` int(2) NOT NULL,
  `pregunta65` int(2) NOT NULL,
  `pregunta66` int(2) NOT NULL,
  `pregunta67` int(2) NOT NULL,
  `pregunta68` int(2) NOT NULL,
  `pregunta69` int(2) NOT NULL,
  `pregunta70` int(2) NOT NULL,
  `pregunta71` int(2) NOT NULL,
  `pregunta72` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cuestionario3`
--

INSERT INTO `cuestionario3` (`idq3`, `correo`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `pregunta21`, `pregunta22`, `pregunta23`, `pregunta24`, `pregunta25`, `pregunta26`, `pregunta27`, `pregunta28`, `pregunta29`, `pregunta30`, `pregunta31`, `pregunta32`, `pregunta33`, `pregunta34`, `pregunta35`, `pregunta36`, `pregunta37`, `pregunta38`, `pregunta39`, `pregunta40`, `pregunta41`, `pregunta42`, `pregunta43`, `pregunta44`, `pregunta45`, `pregunta46`, `pregunta47`, `pregunta48`, `pregunta49`, `pregunta50`, `pregunta51`, `pregunta52`, `pregunta53`, `pregunta54`, `pregunta55`, `pregunta56`, `pregunta57`, `pregunta58`, `pregunta59`, `pregunta60`, `pregunta61`, `pregunta62`, `pregunta63`, `pregunta64`, `pregunta65`, `pregunta66`, `pregunta67`, `pregunta68`, `pregunta69`, `pregunta70`, `pregunta71`, `pregunta72`) VALUES
(3, 'ses@gmail.com', 0, 3, 2, 3, 0, 1, 2, 3, 4, 3, 2, 1, 0, 1, 2, 3, 4, 3, 2, 1, 0, 1, 2, 1, 0, 1, 2, 3, 0, 3, 2, 1, 0, 1, 2, 3, 4, 3, 2, 1, 0, 1, 2, 3, 4, 3, 2, 1, 0, 1, 2, 3, 4, 1, 2, 1, 0, 3, 2, 1, 0, 1, 2, 3, 4, 3, 2, 1, 0, 1, 2, 3),
(4, 'trabajador@ito.com', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `razonsocial` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `rfc` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `actividadprincipal` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` int(1) NOT NULL,
  `numeroT` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`correo`, `razonsocial`, `rfc`, `domicilio`, `telefono`, `actividadprincipal`, `nivel`, `numeroT`) VALUES
('bloodseeker300x@gmail.com', 'Dungeon of Dägon', 'sfdk', 'CALLE 42 C', '2711867054', 'momoz', 3, 2),
('dum@gmail.com', 'tempraforte', '1111111111111', 'tuita', '1111111111', '', 2, 1),
('ejemplo@ito.com', 'Empresa Control', 'EJEM0101010AB', 'CALLE 1 AV 1', '1111111111', 'Usuario empresa de pruebas', 3, 2),
('marvel@gmail.com', 'marvel', '1', '1', '1', '1', 2, 1),
('sep1@gmail.com', 'SEP', 'SEP111111EDU', 'CALLE10', '3333333333', 'Secretaria de educación publica', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maincuestionario`
--

CREATE TABLE `maincuestionario` (
  `idtest` int(10) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `cuestionario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `maincuestionario`
--

INSERT INTO `maincuestionario` (`idtest`, `correo`, `fecha`, `cuestionario`) VALUES
(28, 'ses@gmail.com', '2020-12-06', 1),
(29, 'ses@gmail.com', '2020-12-06', 2),
(52, 'ses@gmail.com', '2020-12-06', 3),
(53, 'trabajador@ito.com', '2020-12-24', 1),
(54, 'trabajador@ito.com', '2020-12-23', 3),
(55, 'trabajador@ito.com', '2020-12-24', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manuales`
--

CREATE TABLE `manuales` (
  `idm` int(10) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `año` int(4) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `hipervinculo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `manuales`
--

INSERT INTO `manuales` (`idm`, `titulo`, `año`, `descripcion`, `hipervinculo`) VALUES
(1, 'Manual De Usuario Del Portal.', 2020, 'En este documento encontrará información sobre como operar el portal, tanto para las empresas como para los trabajadores.', '../resourses/Manual de usuario Empresa.pdf'),
(2, 'NORMA Oficial Mexicana NOM-035-STPS-2018', 2018, 'Factores de riesgo psicosocial en el trabajo-Identificación, análisis y prevención.', 'https://dof.gob.mx/nota_detalle_popup.php?codigo=5541828'),
(3, 'NORMA Oficial Mexicana NOM-019-STPS-2011', 2011, 'Constitución, integración, organización y funcionamiento de las\r\ncomisiones de seguridad e higiene. ', 'http://www.stps.gob.mx/bp/secciones/dgsst/normatividad/normas/Nom-019.pdf'),
(4, 'NORMA Oficial Mexicana NOM-030-STPS-2009', 2009, 'Servicios preventivos de seguridad y salud en el trabajo-Funciones y actividades. ', 'http://www.stps.gob.mx/bp/secciones/dgsst/normatividad/normas/Nom-030.pdf'),
(5, 'NMX-R-025-SCFI-2015', 2015, 'En Igualdad Laboral y No Discriminación.', 'https://www.gob.mx/inmujeres/documentos/norma-mexicananmx-r025-scfi-2015-en-igualdad-laboral-y-no-discriminacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `nivel` int(1) NOT NULL,
  `encuesta1` int(2) NOT NULL,
  `encuesta2` int(3) NOT NULL,
  `Mtrabajadores` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`nivel`, `encuesta1`, `encuesta2`, `Mtrabajadores`) VALUES
(1, 1, 14, 15),
(2, 2, 49, 50),
(3, 3, 99, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoP` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoM` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `estadocivil` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `niveldeestudios` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `departamento` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `contratacion` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `tipopersonal` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `tipodejornada` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `rotaciondeturnos` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `experienciaactual` int(1) NOT NULL,
  `experienciatotal` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`correo`, `empresa`, `nombre`, `apellidoP`, `apellidoM`, `sexo`, `edad`, `estadocivil`, `niveldeestudios`, `departamento`, `puesto`, `contratacion`, `tipopersonal`, `tipodejornada`, `rotaciondeturnos`, `experienciaactual`, `experienciatotal`) VALUES
('dumbo@gmail.com', 'marvel', 'www', 'www', 'www', 'Masculino', 18, 'Soltero', 'Sin fornacion', 'wwww', 'Operativo', 'Por obra o proyecyo', 'Sindicalizado', 'Nocturno', 'Si', 1, 1),
('ejemplo2@ito.com', 'Empresa Control', 'juan', 'perez', 'perez', 'Masculino', 18, 'Soltero', 'Sin fornacion', 'mercadotecnia', 'Operativo', 'Por obra o proyecyo', 'Sindicalizado', 'Nocturno', 'Si', 1, 1),
('juanluis@gmail.com', 'Dungeon of Dägon', 'Juan', 'Reyes', 'Delgado', 'Masculino', 60, 'Divorciado', 'Preparatoria', 'Consultorias', 'Operativo', 'Tiempo indeterminado', 'Sindicalizado', 'Mixto', 'No', 1, 30),
('oveja@gmail.com', 'tempraforte', 'oveja', 'de', 'dum', 'Masculino', 31, 'Soltero', 'Licenciatura', 'animación', 'Operativo', 'Honorarios', 'Ninguno', 'Mixto', 'Si', 1, 5),
('ses@gmail.com', 'Dungeon of Dägon', 'Roberto', 'Marquez', 'Castro', 'Masculino', 23, 'Union libre', 'Doctorado', '55', 'Gerente', 'Honorarios', 'Confianza', 'Mixto', 'No', 55, 55),
('trabajador@ito.com', 'Empresa Control', 'Pedro', ' Hernández', ' Hernández', 'Masculino', 18, 'Casado', 'Licenciatura', 'Computo', 'Profesional', 'Por tiempo determinado', 'Confianza', 'Diurno', 'No', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(10) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `foto` varchar(256) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `correo`, `password`, `tipo`, `foto`) VALUES
(2, 'bloodseeker300x@gmail.com', '1', 0, '../vista/img/2uzt3b4.jpg'),
(3, 'dum@gmail.com', '2222222222', 0, '../vista/img/rombo.png'),
(4, 'marvel@gmail.com', '1234567898', 0, ''),
(19, 'ses@gmail.com', '55', 1, '../vista/img/16298762_1840859162822887_5604461699412909966_n.jpg'),
(22, 'oveja@gmail.com', '3333333333', 1, ''),
(36, 'dumbo@gmail.com', '222222222211', 1, ''),
(45, 'dc1@gmail.com', '1111111111111', 1, '../vista/img/2017-07-16-absorbing-pain-like-a-dry-sponge-in-water.jpg'),
(48, 'ejemplo@ito.com', '111111111111', 0, '../vista/img/unknow.png'),
(49, 'trabajador@ito.com', '111111111111', 1, '../vista/img/unknow.png'),
(56, 'sep1@gmail.com', '1111111111', 0, ''),
(57, 'juanluis@gmail.com', '11111111', 1, ''),
(58, 'ejemplo2@ito.com', '111111111111', 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario1`
--
ALTER TABLE `cuestionario1`
  ADD PRIMARY KEY (`idq1`),
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `cuestionario2`
--
ALTER TABLE `cuestionario2`
  ADD PRIMARY KEY (`idq2`),
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `cuestionario3`
--
ALTER TABLE `cuestionario3`
  ADD PRIMARY KEY (`idq3`),
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `razonsocial` (`razonsocial`),
  ADD KEY `fk_nivel_empresa` (`nivel`);

--
-- Indices de la tabla `maincuestionario`
--
ALTER TABLE `maincuestionario`
  ADD PRIMARY KEY (`idtest`),
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD PRIMARY KEY (`idm`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`nivel`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `correo` (`correo`),
  ADD KEY `fk_empresa_trabajador` (`empresa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario1`
--
ALTER TABLE `cuestionario1`
  MODIFY `idq1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cuestionario2`
--
ALTER TABLE `cuestionario2`
  MODIFY `idq2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cuestionario3`
--
ALTER TABLE `cuestionario3`
  MODIFY `idq3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `maincuestionario`
--
ALTER TABLE `maincuestionario`
  MODIFY `idtest` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `manuales`
--
ALTER TABLE `manuales`
  MODIFY `idm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuestionario1`
--
ALTER TABLE `cuestionario1`
  ADD CONSTRAINT `fk_cuestionario1_trabajadores` FOREIGN KEY (`correo`) REFERENCES `maincuestionario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuestionario2`
--
ALTER TABLE `cuestionario2`
  ADD CONSTRAINT `fk_cuestionario2_trabajador` FOREIGN KEY (`correo`) REFERENCES `maincuestionario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuestionario3`
--
ALTER TABLE `cuestionario3`
  ADD CONSTRAINT `fk_cuestionario3_trabajadores` FOREIGN KEY (`correo`) REFERENCES `maincuestionario` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_nivel_empresa` FOREIGN KEY (`nivel`) REFERENCES `nivel` (`nivel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuarios_empresa` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `maincuestionario`
--
ALTER TABLE `maincuestionario`
  ADD CONSTRAINT `fk_maincuestionario` FOREIGN KEY (`correo`) REFERENCES `trabajadores` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `fk_empresa_trabajador` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`razonsocial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuarios_trabajador` FOREIGN KEY (`correo`) REFERENCES `usuarios` (`correo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
