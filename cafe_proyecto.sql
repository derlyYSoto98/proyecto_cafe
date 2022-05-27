-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2022 a las 00:09:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafe_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finca`
--

CREATE TABLE `finca` (
  `id_finca` int(11) NOT NULL,
  `nombre_finca` varchar(50) NOT NULL,
  `ubicacion_finca` varchar(50) NOT NULL,
  `altitud_finca` varchar(25) NOT NULL,
  `foto_finca` varchar(250) NOT NULL,
  `ruta_finca` varchar(250) NOT NULL,
  `id_usua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `finca`
--

INSERT INTO `finca` (`id_finca`, `nombre_finca`, `ubicacion_finca`, `altitud_finca`, `foto_finca`, `ruta_finca`, `id_usua`) VALUES
(3, 'La loma', 'San Calixto', '350 m.s.n.m', 'caf.jpg', '../fotografiaFinca/caf.jpg', 83238658),
(4, 'El cielo', 'Gigante', '150 m.s.n.m', 'Colombia_fincas.jpg', 'fotografiaFinca/Colombia_fincas.jpg', 1080365889),
(5, 'Los Altos', 'Gallardo', '325m.s.n.m', 'coffee-g72e6ac5b5_1920.jpg', 'fotografiaFinca/coffee-g72e6ac5b5_1920.jpg', 222222),
(8, 'Cielo Alto', 'Vereda Avispero Suaza', '25m.s.n.m', 'coffee-g15c147697_1920-removebg-preview.png', 'fotografiaFinca/coffee-g15c147697_1920-removebg-preview.png', 1080365889);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `id_proceso` int(11) NOT NULL,
  `nombre_proceso` varchar(50) NOT NULL,
  `tipo_fer` varchar(50) NOT NULL,
  `fragancia_proceso` varchar(25) NOT NULL,
  `sabor_proceso` varchar(25) NOT NULL,
  `acidez_proceso` varchar(30) NOT NULL,
  `cuerpo_proceso` varchar(30) NOT NULL,
  `id_variedad` int(11) NOT NULL,
  `foto_proceso` varchar(250) NOT NULL,
  `ruta_proceso` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id_proceso`, `nombre_proceso`, `tipo_fer`, `fragancia_proceso`, `sabor_proceso`, `acidez_proceso`, `cuerpo_proceso`, `id_variedad`, `foto_proceso`, `ruta_proceso`) VALUES
(3, 'Fermentación', 'Principal', 'Vainilla4', 'Bicho', 'Baja3', 'Excelente', 3, 'modelo.png', '../fotografiaProceso/modelo.png'),
(6, 'Fermentación segundo nivel', 'Segundo', 'Limon', 'Agrio', 'Baja', 'Parcial', 5, 'ph-del-cafe.png', 'fotografiaProceso/ph-del-cafe.png'),
(7, 'lavado', 'Secundario', 'Vainilla', 'Coco', 'media', 'Excelente', 7, 'coffe-gcd0c64880_1920.jpg', 'fotografiaProceso/coffe-gcd0c64880_1920.jpg'),
(8, 'Empacado', 'Final', 'Limon', 'panela', 'Baja', 'Completo', 3, 'coffee-g303f023ab_1920.jpg', 'fotografiaProceso/coffee-g303f023ab_1920.jpg'),
(9, 'Cogida', 'Principal ', 'Tierra', 'panela', 'Baja1', 'simultaneo', 5, 'coffee-g72e6ac5b5_1920.jpg', 'fotografiaProceso/coffee-g72e6ac5b5_1920.jpg'),
(10, 'Fermentación tercer nivel', 'Principal', 'Vainilla', 'panela', 'Baja1', 'Excelente', 9, 'ella.jpg', 'fotografiaProceso/ella.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `direccion_usuario` varchar(50) NOT NULL,
  `telefono_usuario` varchar(25) NOT NULL,
  `foto_usuario` varchar(250) NOT NULL,
  `ruta_usuario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula_usuario`, `nombre_usuario`, `direccion_usuario`, `telefono_usuario`, `foto_usuario`, `ruta_usuario`) VALUES
(222222, 'Carlos Gomez', 'Salado Blanco', '989865', 'coffee-g0666c4f54_1920-removebg-preview.png', '../fotografiaUsuario/coffee-g0666c4f54_1920-removebg-preview.png'),
(26575740, 'Dinael Dias Gomez', 'Tarqui - Huila', '3115757812', 'coffee-g0666c4f54_1920.jpg', 'fotografiaUsuario/coffee-g0666c4f54_1920.jpg'),
(83238658, 'Daniel Diaz', 'Suaza - Huila', '3218985474', 'caficultor - copia.jpeg', '../fotografiaUsuario/caficultor - copia.jpeg'),
(1080365889, 'Alexandra Salcedo', 'Guadalupe huila', '3212952396', 'coffee-g15c147697_1920-removebg-preview.png', '../fotografiaUsuario/coffee-g15c147697_1920-removebg-preview.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedad`
--

CREATE TABLE `variedad` (
  `id_variedad` int(11) NOT NULL,
  `nombre_variedad` varchar(50) NOT NULL,
  `descripcion_var` varchar(250) NOT NULL,
  `foto_variedad` varchar(250) NOT NULL,
  `ruta_variedad` varchar(250) NOT NULL,
  `id_fin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `variedad`
--

INSERT INTO `variedad` (`id_variedad`, `nombre_variedad`, `descripcion_var`, `foto_variedad`, `ruta_variedad`, `id_fin`) VALUES
(3, 'Castilla', 'Calidad superior', 'modelo.png', 'fotografiaVariedad/modelo.png', 3),
(5, 'Borbon rosado', 'Café de alta calidad para ser comercializado', 'caf.jpg', 'fotografiaVariedad/caf.jpg', 4),
(7, 'Caturra', 'Cafe de calidad exportacion', 'caf.jpg', 'fotografiaVariedad/caf.jpg', 8),
(8, 'Max', 'Nueva variedad de cafe', 'coffee-g0666c4f54_1920-removebg-preview.png', 'fotografiaVariedad/coffee-g0666c4f54_1920-removebg-preview.png', 5),
(9, 'Borbon', 'Muy buen cafe', 'coffe-gcd0c64880_1920.jpg', 'fotografiaVariedad/coffe-gcd0c64880_1920.jpg', 3),
(10, 'llllllll', 'cafe mas o menos', 'coffee-g15c147697_1920.jpg', 'fotografiaVariedad/coffee-g15c147697_1920.jpg', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `finca`
--
ALTER TABLE `finca`
  ADD PRIMARY KEY (`id_finca`),
  ADD KEY `id_usua` (`id_usua`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id_proceso`),
  ADD KEY `id_variedad` (`id_variedad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula_usuario`);

--
-- Indices de la tabla `variedad`
--
ALTER TABLE `variedad`
  ADD PRIMARY KEY (`id_variedad`),
  ADD KEY `id_fin` (`id_fin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `finca`
--
ALTER TABLE `finca`
  MODIFY `id_finca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id_proceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cedula_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1080365891;

--
-- AUTO_INCREMENT de la tabla `variedad`
--
ALTER TABLE `variedad`
  MODIFY `id_variedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `finca`
--
ALTER TABLE `finca`
  ADD CONSTRAINT `finca_ibfk_1` FOREIGN KEY (`id_usua`) REFERENCES `usuario` (`cedula_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD CONSTRAINT `proceso_ibfk_1` FOREIGN KEY (`id_variedad`) REFERENCES `variedad` (`id_variedad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `variedad`
--
ALTER TABLE `variedad`
  ADD CONSTRAINT `variedad_ibfk_1` FOREIGN KEY (`id_fin`) REFERENCES `finca` (`id_finca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
