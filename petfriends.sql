-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2018 a las 23:11:34
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petfriends`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balance`
--

CREATE TABLE `balance` (
  `idtx_bala` mediumint(9) NOT NULL,
  `codi_ctas` varchar(6) NOT NULL,
  `debi_bala` int(10) NOT NULL,
  `cred_bala` int(10) NOT NULL,
  `fctx_bala` date NOT NULL,
  `fech_bala` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `iden_cate` varchar(6) NOT NULL,
  `nomb_cate` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`iden_cate`, `nomb_cate`, `created_at`, `updated_at`) VALUES
('000001', 'Comida Perro', '2018-03-06 05:12:49', '2018-03-06 05:12:49'),
('02', 'Comida gatos', '2018-03-06 05:46:41', '2018-03-06 05:46:41'),
('10', 'prueba3', '2018-03-17 22:25:11', '2018-03-17 22:25:11'),
('11', 'prueba4', '2018-03-17 22:25:49', '2018-03-17 22:25:49'),
('3', 'Raton', '2018-03-06 07:47:50', '2018-03-06 07:47:50'),
('4', 'Serpiente', '2018-03-06 08:02:01', '2018-03-06 08:02:01'),
('5', 'Peces', '2018-03-06 07:48:47', '2018-03-06 07:48:47'),
('6', 'prueba', '2018-03-17 22:19:13', '2018-03-17 22:19:13'),
('7', 'Araña', '2018-03-06 08:15:15', '2018-03-06 08:15:15'),
('8', 'prueba1', '2018-03-17 22:19:55', '2018-03-17 22:19:55'),
('9', 'prueba2', '2018-03-17 22:23:31', '2018-03-17 22:23:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clas_ctas`
--

CREATE TABLE `clas_ctas` (
  `codi_clas` varchar(2) NOT NULL,
  `nomb_clas` varchar(15) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clas_ctas`
--

INSERT INTO `clas_ctas` (`codi_clas`, `nomb_clas`, `updated_at`, `created_at`) VALUES
('1', 'Activo', '2018-03-06 13:41:54', '2018-03-06 13:41:54'),
('2', 'Pasivo', '2018-03-06 13:42:00', '2018-03-06 13:42:00'),
('3', 'Patrimonio', '2018-03-06 13:43:14', '2018-03-06 13:43:14'),
('4', 'Ingresos', '2018-03-06 13:43:21', '2018-03-06 13:43:21'),
('5', 'Egresos', '2018-03-06 13:43:25', '2018-03-06 13:43:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `iden_clie` varchar(10) NOT NULL,
  `pnom_clie` varchar(15) NOT NULL,
  `snom_clie` varchar(15) DEFAULT NULL,
  `pape_clie` varchar(15) NOT NULL,
  `sape_clie` varchar(15) DEFAULT NULL,
  `emai_clie` varchar(50) DEFAULT NULL,
  `dire_clie` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`iden_clie`, `pnom_clie`, `snom_clie`, `pape_clie`, `sape_clie`, `emai_clie`, `dire_clie`, `created_at`, `updated_at`) VALUES
('1030614149', 'Daniel', 'Camilo', 'Rojas', 'Arias', 'dan@mail.com', 'Cr 62 kr 20 27', '2018-03-06 09:46:15', '2018-03-06 09:46:15'),
('1069767713', 'Angely', 'Natalia', 'Reyes', 'Roldan', 'angelynar960@gmail.com', 'Calle 21 # 2-32', '2018-03-15 02:20:10', '2018-03-15 02:20:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `codi_ctas` varchar(6) NOT NULL,
  `nomb_ctas` varchar(30) NOT NULL,
  `codi_natu` varchar(2) NOT NULL,
  `codi_clas` varchar(2) NOT NULL,
  `auxi_ctas` varchar(2) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`codi_ctas`, `nomb_ctas`, `codi_natu`, `codi_clas`, `auxi_ctas`, `updated_at`, `created_at`) VALUES
('1105', 'Caja', '1', '1', 'NO', '2018-03-06 17:27:01', '2018-03-06 17:27:01'),
('2205', 'proveedores', '2', '2', 'SI', '2018-03-06 21:11:27', '2018-03-06 21:11:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `iden_empl` varchar(10) NOT NULL,
  `pnom_empl` varchar(15) NOT NULL,
  `snom_empl` varchar(15) DEFAULT NULL,
  `pape_empl` varchar(15) NOT NULL,
  `sape_empl` varchar(15) DEFAULT NULL,
  `dire_empl` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `iden_fact` varchar(6) NOT NULL,
  `fech_fact` date NOT NULL,
  `iden_clie` varchar(10) NOT NULL,
  `codi_usua` varchar(8) NOT NULL,
  `total_fact` int(7) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`iden_fact`, `fech_fact`, `iden_clie`, `codi_usua`, `total_fact`, `updated_at`, `created_at`) VALUES
('0001', '2018-03-17', '1069767713', '01', NULL, '2018-03-17 23:52:05', '2018-03-17 23:52:05'),
('0002', '2018-03-18', '1030614149', '03', NULL, '2018-03-17 23:53:35', '2018-03-17 23:53:35'),
('0003', '2018-03-17', '1069767713', '01', NULL, '2018-03-18 00:39:14', '2018-03-18 00:39:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `natu_ctas`
--

CREATE TABLE `natu_ctas` (
  `codi_natu` varchar(2) NOT NULL,
  `nomb_natu` varchar(15) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `natu_ctas`
--

INSERT INTO `natu_ctas` (`codi_natu`, `nomb_natu`, `updated_at`, `created_at`) VALUES
('1', 'Debito', '2018-03-06 13:36:31', '2018-03-06 13:36:31'),
('2', 'Credito', '2018-03-06 13:36:37', '2018-03-06 13:36:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `iden_prod` varchar(10) NOT NULL,
  `desc_prod` varchar(30) NOT NULL,
  `iden_cate` varchar(6) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`iden_prod`, `desc_prod`, `iden_cate`, `updated_at`, `created_at`) VALUES
('000002', 'Catchow gatittos', '02', '2018-03-17 19:53:05', '2018-03-17 19:53:05'),
('123', 'Purina dog chow', '000001', '2018-03-06 11:23:06', '2018-03-06 11:23:06'),
('1234', 'Purina cat', '02', '2018-03-06 11:23:46', '2018-03-06 11:23:46'),
('12345', 'Semillas', '3', '2018-03-06 11:25:26', '2018-03-06 11:25:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `nit_prov` varchar(15) NOT NULL,
  `rasz_prov` varchar(50) NOT NULL,
  `dire_prov` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`nit_prov`, `rasz_prov`, `dire_prov`, `updated_at`, `created_at`) VALUES
('1', 'Pepito comidas', 'cl 45 67 02', '2018-03-06 12:19:32', '2018-03-06 12:19:32'),
('2', 'Pepito cepillos', 'cl 45 67 02', '2018-03-06 12:20:23', '2018-03-06 12:20:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrop`
--

CREATE TABLE `registrop` (
  `iden_prod` varchar(10) NOT NULL,
  `iden_fact` varchar(6) NOT NULL,
  `fech_fact` date NOT NULL,
  `cant_prod` int(3) NOT NULL,
  `pvun_prod` int(6) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrop`
--

INSERT INTO `registrop` (`iden_prod`, `iden_fact`, `fech_fact`, `cant_prod`, `pvun_prod`, `updated_at`, `created_at`) VALUES
('000002', '0001', '2018-03-17', 3, 18000, '2018-03-18 00:37:03', '2018-03-18 00:37:03'),
('1234', '0002', '2018-03-25', 5, 10000, '2018-03-25 21:52:46', '2018-03-25 21:52:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `iden_rol` varchar(2) NOT NULL,
  `nomb_rol` varchar(15) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`iden_rol`, `nomb_rol`, `updated_at`, `created_at`) VALUES
('1', 'Super Usuario', '2018-03-13 22:53:53', '2018-03-13 22:53:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suministro`
--

CREATE TABLE `suministro` (
  `iden_prod` varchar(10) NOT NULL,
  `nit_prov` varchar(15) NOT NULL,
  `fech_sumi` date NOT NULL,
  `ccom_sumi` int(4) NOT NULL,
  `prep_sumi` int(7) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tele_clie`
--

CREATE TABLE `tele_clie` (
  `iden_clie` varchar(10) NOT NULL,
  `tlef_clie` varchar(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tele_clie`
--

INSERT INTO `tele_clie` (`iden_clie`, `tlef_clie`, `updated_at`, `created_at`) VALUES
('1030614149', '3112375805', '2018-03-15 02:02:58', '2018-03-15 02:02:58'),
('1069767713', '3202325733', '2018-03-15 02:21:39', '2018-03-15 02:21:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codi_usua` varchar(8) NOT NULL,
  `nomb_usua` varchar(15) NOT NULL,
  `pass_usua` varchar(15) NOT NULL,
  `iden_rol` varchar(2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codi_usua`, `nomb_usua`, `pass_usua`, `iden_rol`, `updated_at`, `created_at`) VALUES
('01', 'dcamilorojaas', 'dan12345', '1', '2018-03-13 23:04:52', '2018-03-13 23:04:52'),
('02', 'dfchacon', 'loquesea', '1', '2018-03-13 23:22:30', '2018-03-13 23:22:30'),
('03', 'kygonzalez', '5675657', '1', '2018-03-13 22:58:55', '2018-03-13 22:58:55'),
('4', 'anataliareyes', '12345', '1', '2018-03-15 01:34:45', '2018-03-15 01:34:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`idtx_bala`,`codi_ctas`),
  ADD KEY `idtx_bala` (`idtx_bala`),
  ADD KEY `FK_ctas_bala` (`codi_ctas`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`iden_cate`);

--
-- Indices de la tabla `clas_ctas`
--
ALTER TABLE `clas_ctas`
  ADD PRIMARY KEY (`codi_clas`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`iden_clie`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`codi_ctas`),
  ADD KEY `FK_ctas_natu` (`codi_natu`),
  ADD KEY `FK_ctas_clas` (`codi_clas`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`iden_empl`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`iden_fact`),
  ADD KEY `FK_fact_clie` (`iden_clie`),
  ADD KEY `FK_fact_usua` (`codi_usua`);

--
-- Indices de la tabla `natu_ctas`
--
ALTER TABLE `natu_ctas`
  ADD PRIMARY KEY (`codi_natu`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`iden_prod`),
  ADD KEY `FK_prod_cate` (`iden_cate`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`nit_prov`);

--
-- Indices de la tabla `registrop`
--
ALTER TABLE `registrop`
  ADD PRIMARY KEY (`iden_prod`,`iden_fact`,`fech_fact`),
  ADD KEY `FK_regi_fact` (`iden_fact`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`iden_rol`);

--
-- Indices de la tabla `suministro`
--
ALTER TABLE `suministro`
  ADD PRIMARY KEY (`iden_prod`,`nit_prov`,`fech_sumi`),
  ADD KEY `FK_sumi_prov` (`nit_prov`);

--
-- Indices de la tabla `tele_clie`
--
ALTER TABLE `tele_clie`
  ADD PRIMARY KEY (`iden_clie`,`tlef_clie`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codi_usua`),
  ADD KEY `FK_usua_rol` (`iden_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `balance`
--
ALTER TABLE `balance`
  MODIFY `idtx_bala` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `FK_ctas_bala` FOREIGN KEY (`codi_ctas`) REFERENCES `cuentas` (`codi_ctas`);

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `FK_ctas_clas` FOREIGN KEY (`codi_clas`) REFERENCES `clas_ctas` (`codi_clas`),
  ADD CONSTRAINT `FK_ctas_natu` FOREIGN KEY (`codi_natu`) REFERENCES `natu_ctas` (`codi_natu`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_fact_clie` FOREIGN KEY (`iden_clie`) REFERENCES `cliente` (`iden_clie`),
  ADD CONSTRAINT `FK_fact_usua` FOREIGN KEY (`codi_usua`) REFERENCES `usuario` (`codi_usua`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_prod_cate` FOREIGN KEY (`iden_cate`) REFERENCES `categorias` (`iden_cate`);

--
-- Filtros para la tabla `registrop`
--
ALTER TABLE `registrop`
  ADD CONSTRAINT `FK_regi_fact` FOREIGN KEY (`iden_fact`) REFERENCES `factura` (`iden_fact`),
  ADD CONSTRAINT `FK_regi_prod` FOREIGN KEY (`iden_prod`) REFERENCES `productos` (`iden_prod`);

--
-- Filtros para la tabla `suministro`
--
ALTER TABLE `suministro`
  ADD CONSTRAINT `FK_sumi_prod` FOREIGN KEY (`iden_prod`) REFERENCES `productos` (`iden_prod`),
  ADD CONSTRAINT `FK_sumi_prov` FOREIGN KEY (`nit_prov`) REFERENCES `proveedores` (`nit_prov`);

--
-- Filtros para la tabla `tele_clie`
--
ALTER TABLE `tele_clie`
  ADD CONSTRAINT `FK_tele_clie` FOREIGN KEY (`iden_clie`) REFERENCES `cliente` (`iden_clie`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usua_rol` FOREIGN KEY (`iden_rol`) REFERENCES `rol` (`iden_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
