-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2020 a las 20:32:32
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(10) NOT NULL,
  `libro_id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `estado` tinyint(2) NOT NULL COMMENT '1= visible 0:novisible '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id`, `libro_id`, `id_user`, `estado`) VALUES
(52, 25, 0, 1),
(53, 26, 0, 1),
(54, 26, 0, 1),
(55, 27, 0, 1),
(56, 26, 0, 1),
(57, 26, 0, 1),
(58, 26, 0, 1),
(59, 27, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(10) NOT NULL,
  `nombre_libro` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editorial` varchar(200) NOT NULL,
  `anio` int(4) UNSIGNED NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `libro` text NOT NULL,
  `portada` text NOT NULL,
  `vistas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre_libro`, `autor`, `editorial`, `anio`, `categoria`, `libro`, `portada`, `vistas`) VALUES
(25, 'un libro', 'asdas', 'asdasdas', 0, 'asdasda', 'ecbc997781561e9feae6d5f644466590.pdf', 'ecbc997781561e9feae6d5f644466590.jpg', 0),
(26, 'otro libro', 'asd', 'ASD', 0, 'asdfv', '75c3503a42c85d61d9ba0384a4c57a8c.pdf', '75c3503a42c85d61d9ba0384a4c57a8c.jpg', 0),
(27, 'UN LIBRO MAS', 'ALKSFNASKJ', 'KNDSAKJNC', 0, 'ksldnc', 'a44bec87f1a8a8b136cfcb591dfd4f7a.pdf', 'a44bec87f1a8a8b136cfcb591dfd4f7a.jpg', 0),
(28, 'don quijote de la mancha', 'uno', 'asas', 0, 'asdad', '7947eaf72134078f44b39a788f60da3d.pdf', '7947eaf72134078f44b39a788f60da3d.jpg', 0),
(29, 'sdas', 'sadasdas', 'asdasdas', 0, 'sadas', '6ba1ac73b018bb045c511153546e23f2.pdf', '6ba1ac73b018bb045c511153546e23f2.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(40) NOT NULL,
  `apellidoMaterno` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `rango` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `email`, `pass`, `rango`) VALUES
(1, 'ramiro', 'Altamirano', 'lopez', 'ramiro@gmail.com', '123456', 0),
(2, 'administrador', 'root', '', 'admin@admin.com', 'admin', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
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
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
