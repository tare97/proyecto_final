--
-- Base de datos: `proyecto`.
--

-- --------------------------------------------------------

--
-- Estructura de tabla `usuarios`.
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Inserción de un usuario administrador por defecto (para poder entrar en la parte administrador).
--

INSERT INTO `usuarios`(`usuario`, `nombre`, `apellido`, `email`, `password`, `tipo_usuario`) 
VALUES ('admin','administrador','01','enjoyart56@gmail.com','admin','admin');

UPDATE `usuarios` 
SET `password`=MD5(password)
WHERE `nombre`='administrador';


-- --------------------------------------------------------

--
-- Estructura de tabla `publicaciones`.
--

CREATE TABLE `publicaciones` (
  `id_publicacion` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_publicacion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `texto` varchar(635) COLLATE utf8_unicode_ci NOT NULL,
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
  `comentario` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
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
  `puntuacion` boolean
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

ALTER TABLE publicaciones ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`) ON DELETE CASCADE;

--
-- claves foraneas - comentar.
--

ALTER TABLE comentar ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`) ON DELETE CASCADE;
ALTER TABLE comentar ADD FOREIGN KEY (`id_publicacion`) REFERENCES publicaciones(`id_publicacion`) ON DELETE CASCADE;

--
-- claves foraneas - puntuar.
--

ALTER TABLE puntuar ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`) ON DELETE CASCADE;
ALTER TABLE puntuar ADD FOREIGN KEY (`id_publicacion`) REFERENCES publicaciones(`id_publicacion`) ON DELETE CASCADE;

--
-- claves foraneas - comprar.
--

ALTER TABLE comprar ADD FOREIGN KEY (`id_usuario`) REFERENCES usuarios(`id_usuario`) ON DELETE CASCADE;
ALTER TABLE comprar ADD FOREIGN KEY (`id_publicacion`) REFERENCES publicaciones(`id_publicacion`) ON DELETE CASCADE;


---
--- PROBADOR DE TEXTO PARA PUBLICACIONES (630 CARACTERES).
---

/*

Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
In ac est vehicula, hendrerit justo eu, eleifend justo. 
Vivamus id turpis ut ligula varius accumsan in ut eros. 
Sed eget luctus sapien. 
Pellentesque ac velit aliquam, aliquam purus in, molestie augue. 
Morbi vestibulum augue ac suscipit rhoncus. 
Curabitur vulputate imperdiet leo, id facilisis purus euismod at. 
Donec et sollicitudin purus, ut egestas leo. 
Sed eget leo velit. 
Ut ac velit vitae velit consequat placerat. 
Nulla semper ac arcu laoreet ullamcorper.
Sed non lectus euismod, tincidunt arcu vel, faucibus turpis. 
Donec dictum rutrum magna, egt rutrum. 

/*