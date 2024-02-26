-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2024 a las 13:46:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicacentros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `imagen` blob NOT NULL,
  `siembra` varchar(20) NOT NULL,
  `semillero` varchar(20) NOT NULL,
  `transplante` varchar(20) NOT NULL,
  `cosecha` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id`, `nombre`, `imagen`, `siembra`, `semillero`, `transplante`, `cosecha`, `created_at`, `updated_at`) VALUES
(1, 'Zanahoria', '', '3;4;5', '0;1;2', '2;3;4', '5;6;7;8', NULL, NULL),
(2, 'Calabacín', '', '3;4;5', '', '2;3;4', '7;8;9', NULL, NULL),
(3, 'Ajo', '', '1;11;12', '', '0;10;11', '5;6', NULL, NULL),
(4, 'Guisantes', '', '1;11;12', '', '0;10;11', '5;6;7;8', NULL, NULL),
(5, 'Vainas', '', '3;4;5', '', '2;3;4', '5;6;7;8', NULL, NULL),
(6, 'Calabaza', '', '3;4;5', '', '2;3;4', '7;8;9', NULL, NULL),
(7, 'Lechuga', '', '3;4;5', '0;1;2', '2;3;4', '5;6;7;8', NULL, NULL),
(8, 'Patata', '', '3;4;5', '0;1;2', '2;3;4', '5;6;7;8', NULL, NULL),
(9, 'Puerro', '', '5;6;7;8', '1;2;3', '4;5;6;7', '0;1;7;8;9;10;11', NULL, NULL),
(10, 'Pimiento', '', '', '0;1', '2;3;4', '6;7;8', NULL, NULL),
(11, 'Tomate', '', '3;4;5', '0;1;2', '3;4', '6;7;8', NULL, NULL),
(12, 'Cebolla', '', '3', '0;11', '2', '3;7;8;9', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
