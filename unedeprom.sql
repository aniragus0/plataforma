-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2015 a las 22:56:01
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `unedeprom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cedeprom`
--

CREATE TABLE `cedeprom` (
  `id` int(11) NOT NULL,
  `cedeprom` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cct` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cedeprom`
--

INSERT INTO `cedeprom` (`id`, `cedeprom`, `cct`) VALUES
(1, 'APATZINGAN', 'CCT'),
(2, 'CD HIDALGO', 'CCT'),
(3, 'CHERAN', 'CCT'),
(4, 'COAHUAYANA', 'CCT'),
(5, 'COALCOMAN', 'CCT'),
(6, 'EL DUIN', 'CCT'),
(7, 'EPITACIO HUERTA', 'CCT'),
(8, 'HUETAMO', 'CCT'),
(9, 'JIQUILPAN', 'CCT'),
(10, 'LA HUACANA', 'CCT'),
(11, 'LA PIEDAD', 'CCT'),
(12, 'LAZARO CARDENAS', 'CCT'),
(13, 'LOS REYES', 'CCT'),
(14, 'MARAVATIO', 'CCT'),
(15, 'MORELIA', 'CCT'),
(16, 'MORELIA II', 'CCT'),
(17, 'PARACHO', 'CCT'),
(18, 'PATZCUARO', 'CCT'),
(19, 'PURUANDIRO', 'CCT'),
(20, 'TACAMBARO', 'CCT'),
(21, 'URUAPAN', 'CCT'),
(22, 'ZACAPU', 'CCT'),
(23, 'ZAMORA', 'CCT'),
(24, 'ZITACUARO', 'CCT'),
(25, 'UNEDEPROM MORELIA', 'CCT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(240) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` enum('CURSO','TALLER','DIPLOMADO','MAESTRIA','ESPECIALIZACION','DOCTORADO','SEMINARIO') CHARACTER SET utf8 NOT NULL DEFAULT 'CURSO',
  `modalidad` enum('INICIAL','PREESCOLAR REGULAR','PREESCOLAR INDIGENA','CAPEP','PRIMARIA REGULAR','PRIMARIA INDIGENA','PRIMARIA MULTIGRADO','SECUNDARIA GENERAL Y TECNICA','TELESECUNDARIA','EDUCACION FISICA','EDUCACION ARTISTICA','EDUCACION ESPECIAL','EDUCACION EXTRAESCOLAR') CHARACTER SET utf8 NOT NULL DEFAULT 'INICIAL',
  `destinatario` enum('DOCENTES FRENTE A GRUPO','DIRECTIVO ESCOLAR','APOYO TECNICO Y PEDAGOGICO') CHARACTER SET utf8 NOT NULL DEFAULT 'DOCENTES FRENTE A GRUPO',
  `duracion` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_termino` date NOT NULL,
  `cupo` int(11) NOT NULL,
  `institucion` enum('UNEDEPROM MORELIA','CENTRO DE MAESTROS') CHARACTER SET utf8 NOT NULL DEFAULT 'CENTRO DE MAESTROS',
  `prioridad` enum('MATEMATICAS','ESPAÑOL','CIENCIAS','TIC','HISTORIA','FCyE','INGLES','GESTION ESCOLAR','PREVIOLEM','CURSO BASICO','CONTRALORIA SOLCIAL','CEFCSP','ARTISTICA') CHARACTER SET utf8 NOT NULL DEFAULT 'CURSO BASICO',
  `estatus` enum('ABIERTO','CERRADO','CANCELADO','PROXIMO') COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'ABIERTO'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `tipo`, `modalidad`, `destinatario`, `duracion`, `fecha_inicio`, `fecha_termino`, `cupo`, `institucion`, `prioridad`, `estatus`) VALUES
(2, 'prueba de curso numero2', 'ESPECIALIZACION', 'PREESCOLAR INDIGENA', 'DIRECTIVO ESCOLAR', 100, '2015-07-02', '2015-07-08', 500, 'UNEDEPROM MORELIA', 'CIENCIAS', 'ABIERTO'),
(4, 'curso de redes', 'MAESTRIA', 'INICIAL', 'APOYO TECNICO Y PEDAGOGICO', 150, '2015-07-08', '2015-07-21', 200, 'UNEDEPROM MORELIA', 'TIC', 'ABIERTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `idmaestro` int(11) DEFAULT NULL,
  `idcurso` int(11) DEFAULT NULL,
  `prioridad` int(11) DEFAULT NULL,
  `idcedeprom` int(11) DEFAULT NULL,
  `datos` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `estatus_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `idmaestro`, `idcurso`, `prioridad`, `idcedeprom`, `datos`, `estatus_curso`) VALUES
(10, 2, 2, 0, 6, NULL, NULL),
(12, 5, 4, 0, 5, NULL, NULL),
(13, 4, 2, 1, 10, NULL, NULL),
(14, 7, 4, 0, 2, NULL, NULL),
(15, 2, 4, NULL, 5, NULL, NULL),
(16, 2, 4, NULL, 2, NULL, NULL),
(17, 2, 4, NULL, 5, NULL, NULL),
(18, 2, 4, NULL, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `curp` varchar(25) NOT NULL,
  `sexo` varchar(25) NOT NULL,
  `grado` varchar(150) NOT NULL,
  `municipio` varchar(150) NOT NULL,
  `localidad` varchar(150) NOT NULL,
  `cedeprom` varchar(100) NOT NULL,
  `nivel` varchar(150) NOT NULL,
  `modalidad` varchar(150) NOT NULL,
  `cct` varchar(20) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comentarios` longtext NOT NULL,
  `fechahora` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`id`, `nombre`, `apellidos`, `rfc`, `curp`, `sexo`, `grado`, `municipio`, `localidad`, `cedeprom`, `nivel`, `modalidad`, `cct`, `telefono`, `email`, `comentarios`, `fechahora`) VALUES
(2, 'ZEFERINO CAMBIOS', 'ROSILES HERNANDEZFFFS', 'ROHZ841116HD7S', 'ROHZ841116HD71111S', 'MUJER', 'GRADOS', 'ACUITZIO', 'MORELIAS', 'APATZINGAN', 'NIVELS', 'MODALIDADS', 'NANSSSSS', '12345678901111', 'ino_mxs@hotmail.com', 'COMETA', '2015-07-22 08:03:24'),
(4, 'ZEFERINO', 'ROSILES HERNANDEZ', 'ROHZ841116HD9', 'ROHZ841116HD71111', 'HOMBRE', 'GRADO', '0', 'MORELIA', '0', 'NIVEL', 'MODALIDAD', '		CCT', '1234567890', 'ino_mx@hotmail.com', 'NINGUNA', '2015-07-22 08:09:37'),
(5, 'ZEFERINO', 'ROSILES HERNANDEZ', 'ROHZ841116HD0', 'ROHZ841116HD71111', 'HOMBRE', 'GRADO', '0', 'MORELIA', '0', 'NIVEL', 'MODALIDAD', '		CCT', '1234567890', 'ino_mx@hotmail.com', 'NINGUNA', '2015-07-22 08:10:50'),
(7, 'DFGDSG', 'DFS', 'DFSGDSFGDSGDFG', 'DFSGDFSGSDGDSFGDSF', 'HOMBRE', 'DSFGDSG', 'AGUILILLA', 'DSFGSDG', 'CHERAN', 'DSFGSDG', 'DFGDSG', '		CCT', '454646545', 'dsgdg@sdfsdf.com', 'SDFSA', '2015-07-22 08:28:18'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2015-08-10 11:32:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(11) NOT NULL,
  `municipio` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `municipio`) VALUES
(1, 'ACUITZIO'),
(2, 'AGUILILLA'),
(3, 'ALVARO OBREGON'),
(4, 'ANGAMACUTIRO'),
(5, 'ANGANGUEO'),
(6, 'APATZINGAN'),
(7, 'APORO'),
(8, 'AQUILA'),
(9, 'ARIO'),
(10, 'ARTEAGA'),
(11, 'BRISENAS'),
(12, 'BUENAVISTA'),
(13, 'CARACUARO'),
(14, 'CHARAPAN'),
(15, 'CHARO'),
(16, 'CHAVINDA'),
(17, 'CHERAN'),
(18, 'CHILCHOTA'),
(19, 'CHINICUILA'),
(20, 'CHUCANDIRO'),
(21, 'CHURINTZIO'),
(22, 'CHURUMUCO'),
(23, 'COAHUAYANA'),
(24, 'COALCOMAN'),
(25, 'COENEO'),
(26, 'COJUMATLAN'),
(27, 'CONTEPEC'),
(28, 'COPANDARO'),
(29, 'COTIJA'),
(30, 'CUITZEO'),
(31, 'ECUANDUREO'),
(32, 'EPITACIO HUERTA'),
(33, 'ERONGARICUARO'),
(34, 'GABRIEL ZAMORA'),
(35, 'HIDALGO'),
(36, 'HUANDACAREO'),
(37, 'HUANIQUEO'),
(38, 'HUETAMO'),
(39, 'HUIRAMBA'),
(40, 'INDAPARAPEO'),
(41, 'IRIMBO'),
(42, 'IXTLAN'),
(43, 'JACONA '),
(44, 'JIMENEZ'),
(45, 'JIQUILPAN'),
(46, 'JOSE SIXTO VERDUZCO'),
(47, 'JUAREZ'),
(48, 'JUNGAPEO'),
(49, 'LA HUACANA'),
(50, 'LA PIEDAD'),
(51, 'LAGUNILLAS'),
(52, 'LAZARO CARDENAS'),
(53, 'LOS REYES'),
(54, 'MADERO'),
(55, 'MARAVATIO'),
(56, 'MARCOS CATELLANOS'),
(57, 'MORELIA'),
(58, 'MORELOS'),
(59, 'MUGICA'),
(60, 'NAHUATZEN'),
(61, 'NOCUPETARO'),
(62, 'NUEVO URECHO'),
(63, 'NUMARAN'),
(64, 'NVO. PARANGARICUTIRO'),
(65, 'OCAMPO'),
(66, 'PAJACUARAN'),
(67, 'PANINDICUARO'),
(68, 'PARACHO'),
(69, 'PARACUARO'),
(70, 'PATZCUARO'),
(71, 'PENJAMILLO'),
(72, 'PERIBAN'),
(73, 'PUREPERO'),
(74, 'PURUANDIRO'),
(75, 'QUERENDARO'),
(76, 'QUIROGA'),
(77, 'SAHUAYO'),
(78, 'SALVADOR ESCALANTE'),
(79, 'SAN LUCAS'),
(80, 'SANTA ANA MAYA'),
(81, 'SENGUIO'),
(82, 'SUSPUATO'),
(83, 'TACAMBARO'),
(84, 'TANAHUATO'),
(85, 'TANGAMANDAPIO'),
(86, 'TANGANCICUARO'),
(87, 'TARETAN'),
(88, 'TARIMBARO'),
(89, 'TEPALCATEPEC'),
(90, 'TINGAMBATO'),
(91, 'TINGUINDIN'),
(92, 'TIQUICHEO'),
(93, 'TLAPUJAHUA'),
(94, 'TLAZAZALCA'),
(95, 'TOCUMBO'),
(96, 'TUMBISCATIO'),
(97, 'TURICATO'),
(98, 'TUXPAN'),
(99, 'TUZANTLA'),
(100, 'TZINTZUNTZAN'),
(101, 'TZITZIO'),
(102, 'URUAPAN'),
(103, 'VENUSTIANO CARRANZA'),
(104, 'VILLA JIMENEZ'),
(105, 'VILLAMAR'),
(106, 'VISTA HERMOSA'),
(107, 'YURECUARO'),
(108, 'ZACAPU'),
(109, 'ZAMORA'),
(110, 'ZINAPARO'),
(111, 'ZINAPECUARO'),
(112, 'ZIRACUARETIRO'),
(113, 'ZITACUARO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idcedeprom` int(11) NOT NULL,
  `prioridad` int(11) DEFAULT NULL,
  `cupo` int(11) DEFAULT NULL,
  `estatus_sede` enum('ABIERTA','CERRADA','CANCELADA','CUPO LLENO') COLLATE utf8mb4_spanish_ci DEFAULT 'ABIERTA',
  `estatus_curso` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `idcurso`, `idcedeprom`, `prioridad`, `cupo`, `estatus_sede`, `estatus_curso`) VALUES
(6, 2, 4, 1, 50, 'CERRADA', NULL),
(7, 2, 7, 2, 100, 'ABIERTA', NULL),
(8, 2, 17, 3, 80, 'ABIERTA', NULL),
(19, 2, 3, 0, NULL, 'ABIERTA', NULL),
(21, 4, 5, 0, 100, 'ABIERTA', NULL),
(22, 4, 2, 1, 100, 'ABIERTA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `sede` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `nivel`, `sede`, `status`) VALUES
(1, 'Salvador Aguilar Villaseñor', 'aniragus0', 'Plastickey', 'Uno', 'Morelia', 'Activo'),
(2, 'Zeferino Rosiles Hernandez', 'ino_mx', 'contraseña', 'Dos', 'Quiroga', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cedeprom`
--
ALTER TABLE `cedeprom`
  ADD PRIMARY KEY (`id`,`cedeprom`,`cct`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cedeprom`
--
ALTER TABLE `cedeprom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `maestros`
--
ALTER TABLE `maestros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
