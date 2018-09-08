-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-09-2018 a las 13:11:56
-- Versión del servidor: 5.6.39-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `navikeco_gestion_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `owfnlkd_usuarios`
--

CREATE TABLE `owfnlkd_usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `owfnlkd_usuarios`
--

INSERT INTO `owfnlkd_usuarios` (`idusuario`, `nombres`, `apellidos`, `usuario`, `password`, `estado`) VALUES
(1, 'José Iván', 'Chapoñán Casiano', 'navike21', 'e807f1fcf82d132f9bb018ca6738a19f', 'a'),
(2, 'Administrador', 'Administrador', 'admin', 'c80e999bdba0e8956428491050529392', 'a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `owfnlkd_usuarios`
--
ALTER TABLE `owfnlkd_usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `owfnlkd_usuarios`
--
ALTER TABLE `owfnlkd_usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
