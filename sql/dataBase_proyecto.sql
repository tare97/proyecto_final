--
-- Base de datos: `proyecto`.
--

-- --------------------------------------------------------

--
-- Estructura de tabla `usuarios`.
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla `publicaciones`.
--

CREATE TABLE `publicaciones` (
  `id_publicacion` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_publicaciones` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `texto` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla `comentar`.
--

CREATE TABLE `comentar` (
  `id_comentario` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_publicacion` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla `puntuar`.
--

CREATE TABLE `puntuar` (
  `id_puntuacion` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `id_publicacion` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `puntuacion_positiva` int(11) COLLATE utf8_unicode_ci NOT NULL
  `puntuacion_negativa` int(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla `comprar`.
--

CREATE TABLE `comprar` (
  `id_comprar` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `id_publicacion` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- CLAVES FORÁNEAS.
--

--
-- claves foraneas - publicaciones.
--

ALTER TABLE publicaciones ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`);

--
-- claves foraneas - comentar.
--

ALTER TABLE comentar ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`);
ALTER TABLE comentar ADD FOREIGN KEY (`id_publicacion`) REFERENCES publicaciones(`id_publicacion`);

--
-- claves foraneas - puntuar.
--

ALTER TABLE puntuar ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`);
ALTER TABLE puntuar ADD FOREIGN KEY (`id_publicacion`) REFERENCES publicaciones(`id_publicacion`);

--
-- claves foraneas - comprar.
--

ALTER TABLE comprar ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`);
ALTER TABLE comprar ADD FOREIGN KEY (`id_publicacion`) REFERENCES publicaciones(`id_publicacion`);