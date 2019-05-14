-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2019 a las 21:29:18
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `homesweethome`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_usuario` int(11) NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `clave` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `clave` text COLLATE utf8_bin NOT NULL,
  `tc_nombre` text COLLATE utf8_bin NOT NULL,
  `tc_emisor` text COLLATE utf8_bin NOT NULL,
  `tc_numero` int(11) NOT NULL,
  `tc_fecha_expiracion` date NOT NULL,
  `tc_codigo` int(11) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_estandar`
--

CREATE TABLE `cliente_estandar` (
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_premium`
--

CREATE TABLE `cliente_premium` (
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id_propiedad` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `numero` text COLLATE utf8_bin NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `piso` text COLLATE utf8_bin,
  `depto` text COLLATE utf8_bin,
  `codigo_postal` int(11) NOT NULL,
  `provincia` text COLLATE utf8_bin NOT NULL,
  `localidad` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id_propiedad`, `nombre`, `numero`, `direccion`, `piso`, `depto`, `codigo_postal`, `provincia`, `localidad`) VALUES
(2, 'df', '123', '158', 'A', 'F', 1900, '', ''),
(5, 'jhjhjhj', '565656', 'fdfdfdf', '', '', 1212121212, 'jjjjj', 'nnnnn'),
(6, 'nnbnbnbn', '151515', 'fghfghfgh', '', '', 124578, 'ggg', 'nnnnnnmmmm'),
(7, 'cvcvc454545', '4545', 'ertegdfvcvcv', '', '', 565656, 'ghgh', 'ghgh'),
(8, 'latar', '123', 'sdfsdf', '', '', 475869, 'vvv', 'bbb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades_hotsale`
--

CREATE TABLE `propiedades_hotsale` (
  `id_propiedad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date NOT NULL,
  `id_cliente_ganador` int(11) DEFAULT NULL,
  `disponible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades_subasta`
--

CREATE TABLE `propiedades_subasta` (
  `id_propiedad` int(11) NOT NULL,
  `precio_base` int(11) NOT NULL,
  `semana` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `propiedades_subasta`
--

INSERT INTO `propiedades_subasta` (`id_propiedad`, `precio_base`, `semana`, `fecha_ingreso`, `fecha_egreso`) VALUES
(2, 33, 5, '2019-05-14', '2019-05-17'),
(6, 55, 10, '2019-05-14', '2019-05-17'),
(8, 60, 3, '2019-05-14', '2019-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nro_semana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semanas`
--

CREATE TABLE `semanas` (
  `nro_semana` int(11) NOT NULL,
  `id_propiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_estandar_a_premium`
--

CREATE TABLE `solicitud_estandar_a_premium` (
  `id_cliente` int(11) NOT NULL,
  `fecha_solicitud` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta_2_df_5_2019`
--

CREATE TABLE `subasta_2_df_5_2019` (
  `monto` int(11) NOT NULL,
  `id_cliente` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta_5_jhjhjhj_4_2019`
--

CREATE TABLE `subasta_5_jhjhjhj_4_2019` (
  `monto` int(11) NOT NULL,
  `id_cliente` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta_6_nnbnbnbn_10_2019`
--

CREATE TABLE `subasta_6_nnbnbnbn_10_2019` (
  `monto` int(11) NOT NULL,
  `id_cliente` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta_8_latar_3_2019`
--

CREATE TABLE `subasta_8_latar_3_2019` (
  `monto` int(11) NOT NULL,
  `id_cliente` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `subasta_8_latar_3_2019`
--

INSERT INTO `subasta_8_latar_3_2019` (`monto`, `id_cliente`) VALUES
(70, '123456789'),
(80, '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_estandar`
--
ALTER TABLE `cliente_estandar`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_premium`
--
ALTER TABLE `cliente_premium`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id_propiedad`);

--
-- Indices de la tabla `propiedades_hotsale`
--
ALTER TABLE `propiedades_hotsale`
  ADD KEY `id_propiedad` (`id_propiedad`);

--
-- Indices de la tabla `propiedades_subasta`
--
ALTER TABLE `propiedades_subasta`
  ADD PRIMARY KEY (`id_propiedad`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `semanas`
--
ALTER TABLE `semanas`
  ADD PRIMARY KEY (`nro_semana`);

--
-- Indices de la tabla `solicitud_estandar_a_premium`
--
ALTER TABLE `solicitud_estandar_a_premium`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `subasta_2_df_5_2019`
--
ALTER TABLE `subasta_2_df_5_2019`
  ADD PRIMARY KEY (`monto`);

--
-- Indices de la tabla `subasta_5_jhjhjhj_4_2019`
--
ALTER TABLE `subasta_5_jhjhjhj_4_2019`
  ADD PRIMARY KEY (`monto`);

--
-- Indices de la tabla `subasta_6_nnbnbnbn_10_2019`
--
ALTER TABLE `subasta_6_nnbnbnbn_10_2019`
  ADD PRIMARY KEY (`monto`);

--
-- Indices de la tabla `subasta_8_latar_3_2019`
--
ALTER TABLE `subasta_8_latar_3_2019`
  ADD PRIMARY KEY (`monto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id_propiedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
