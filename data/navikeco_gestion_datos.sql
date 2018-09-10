-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2018 a las 11:45:13
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

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
-- Estructura de tabla para la tabla `aklsdfjr_country`
--

CREATE TABLE `aklsdfjr_country` (
  `idcountry` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psnbliberw_distributor`
--

CREATE TABLE `psnbliberw_distributor` (
  `iddistributor` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `companny` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` longtext NOT NULL,
  `origin` char(3) NOT NULL,
  `registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sdfogn_subscribe`
--

CREATE TABLE `sdfogn_subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `coments` longtext NOT NULL,
  `origin` char(4) NOT NULL,
  `registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sldgje_salon`
--

CREATE TABLE `sldgje_salon` (
  `idsalon` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `salon_name` varchar(200) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` longtext NOT NULL,
  `use_products` char(4) NOT NULL,
  `origin` char(3) NOT NULL,
  `registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aklsdfjr_country`
--
ALTER TABLE `aklsdfjr_country`
  ADD PRIMARY KEY (`idcountry`);

--
-- Indices de la tabla `owfnlkd_usuarios`
--
ALTER TABLE `owfnlkd_usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `psnbliberw_distributor`
--
ALTER TABLE `psnbliberw_distributor`
  ADD PRIMARY KEY (`iddistributor`);

--
-- Indices de la tabla `sdfogn_subscribe`
--
ALTER TABLE `sdfogn_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sldgje_salon`
--
ALTER TABLE `sldgje_salon`
  ADD PRIMARY KEY (`idsalon`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aklsdfjr_country`
--
ALTER TABLE `aklsdfjr_country`
  MODIFY `idcountry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `owfnlkd_usuarios`
--
ALTER TABLE `owfnlkd_usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `psnbliberw_distributor`
--
ALTER TABLE `psnbliberw_distributor`
  MODIFY `iddistributor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sdfogn_subscribe`
--
ALTER TABLE `sdfogn_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sldgje_salon`
--
ALTER TABLE `sldgje_salon`
  MODIFY `idsalon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
