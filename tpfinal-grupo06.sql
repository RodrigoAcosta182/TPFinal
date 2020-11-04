-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2020 a las 01:48:53
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpfinal-grupo06`
--
CREATE DATABASE IF NOT EXISTS `tpfinal-grupo06` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tpfinal-grupo06`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrastre`
--

CREATE TABLE `arrastre` (
  `Id` int(255) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargascombustible`
--

CREATE TABLE `cargascombustible` (
  `Id` int(255) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `LitroCargado` int(11) NOT NULL,
  `PrecioxLitro` int(11) NOT NULL,
  `Importe` double NOT NULL,
  `pEmpleado` int(11) NOT NULL,
  `pVehiculo` int(11) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(255) NOT NULL,
  `Codigo` int(255) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Dni` varchar(50) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `pProvincia` int(11) NOT NULL,
  `pLocalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id` int(255) NOT NULL,
  `pTipoEmpleado` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Dni` varchar(50) NOT NULL,
  `pProvincia` int(11) NOT NULL,
  `pLocalidad` int(11) NOT NULL,
  `pLicencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE `licencia` (
  `Id` int(255) NOT NULL,
  `Codigo` int(255) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `Id` int(255) NOT NULL,
  `pVehiculo` int(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  `pService` int(50) NOT NULL,
  `pEmpleado` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `pModelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `Id` int(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `pLocalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesto`
--

CREATE TABLE `respuesto` (
  `Id` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `Id` int(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `pTipoService` int(50) NOT NULL,
  `ImporteFinal` double NOT NULL,
  `FechaDesde` datetime NOT NULL,
  `FechaHasta` datetime NOT NULL,
  `pEmpleado` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicerepuesto`
--

CREATE TABLE `servicerepuesto` (
  `id` int(255) NOT NULL,
  `pService` int(255) NOT NULL,
  `pRepuesto` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursalorigen`
--

CREATE TABLE `sucursalorigen` (
  `id` int(11) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `pProvincia` int(11) NOT NULL,
  `pLocalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempleado`
--

CREATE TABLE `tipoempleado` (
  `Id` int(255) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervice`
--

CREATE TABLE `tiposervice` (
  `id` int(255) NOT NULL,
  `Codigo` int(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `Id` int(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`Id`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovehiculo`
--

CREATE TABLE `tipovehiculo` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciondiaria`
--

CREATE TABLE `ubicaciondiaria` (
  `Id` int(255) NOT NULL,
  `Codigo` int(50) NOT NULL,
  `pEmpleado` int(50) NOT NULL,
  `pVehiculo` int(50) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Codigo` int(255) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Hash` varchar(50) NOT NULL,
  `Active` int(1) NOT NULL DEFAULT 0,
  `pTipoUsuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Codigo`, `Nombre`, `Apellido`, `Email`, `Password`, `Hash`, `Active`, `pTipoUsuario`) VALUES
(1, 0, 'admin', 'admin', 'garlopacompany@gmail.com', 'Unlam2020', '', 0, 1),
(5, 0, 'Emiliano', 'Ortiz', 'emiortiz1992@gmail.com', '1234', 'd86ea612dec96096c5e0fcc8dd42ab6d', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(255) NOT NULL,
  `Patente` varchar(50) NOT NULL,
  `NroChasis` varchar(50) NOT NULL,
  `AñoFabricacion` date NOT NULL,
  `pTipoVehiculo` int(50) NOT NULL,
  `pArrastre` int(50) NOT NULL,
  `kilometraje` bigint(255) UNSIGNED NOT NULL,
  `pMantenimiento` int(50) NOT NULL,
  `pMarca` int(50) NOT NULL,
  `Alarma` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajeconcretado`
--

CREATE TABLE `viajeconcretado` (
  `Id` int(255) NOT NULL,
  `pViajes` int(255) NOT NULL,
  `FechaReal` datetime NOT NULL,
  `KmRecorrido` int(255) NOT NULL,
  `CombustibleCons` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `Id` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `pEmpleado` int(11) NOT NULL,
  `pSucursalOrigen` int(11) NOT NULL,
  `pCliente` int(11) NOT NULL,
  `pVehiculo` int(11) NOT NULL,
  `pArrastre` int(11) NOT NULL,
  `FechaOrigen` datetime NOT NULL,
  `FechaEstimada` datetime NOT NULL,
  `KmEstimado` int(11) NOT NULL,
  `CombustibleEst` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Finalizado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arrastre`
--
ALTER TABLE `arrastre`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cargascombustible`
--
ALTER TABLE `cargascombustible`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pEmpleado` (`pEmpleado`),
  ADD KEY `pVehiculo` (`pVehiculo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pLocalidad` (`pLocalidad`),
  ADD KEY `pProvincia` (`pProvincia`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pLicencia` (`pLicencia`),
  ADD KEY `pLocalidad` (`pLocalidad`),
  ADD KEY `pProvincia` (`pProvincia`),
  ADD KEY `empleado_ibfk_4` (`pTipoEmpleado`);

--
-- Indices de la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pVehiculo` (`pVehiculo`),
  ADD KEY `pService` (`pService`),
  ADD KEY `pEmpleado` (`pEmpleado`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pModelo` (`pModelo`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pLocalidad` (`pLocalidad`);

--
-- Indices de la tabla `respuesto`
--
ALTER TABLE `respuesto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pEmpleado` (`pEmpleado`),
  ADD KEY `pTipoService` (`pTipoService`);

--
-- Indices de la tabla `servicerepuesto`
--
ALTER TABLE `servicerepuesto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pService` (`pService`),
  ADD KEY `pRepuesto` (`pRepuesto`);

--
-- Indices de la tabla `sucursalorigen`
--
ALTER TABLE `sucursalorigen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pLocalidad` (`pLocalidad`),
  ADD KEY `pProvincia` (`pProvincia`);

--
-- Indices de la tabla `tipoempleado`
--
ALTER TABLE `tipoempleado`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tiposervice`
--
ALTER TABLE `tiposervice`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicaciondiaria`
--
ALTER TABLE `ubicaciondiaria`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pEmpleado` (`pEmpleado`),
  ADD KEY `pVehiculo` (`pVehiculo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pTipoUsuario` (`pTipoUsuario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pTipoVehiculo` (`pTipoVehiculo`),
  ADD KEY `pArrastre` (`pArrastre`),
  ADD KEY `pMantenimiento` (`pMantenimiento`),
  ADD KEY `pMarca` (`pMarca`);

--
-- Indices de la tabla `viajeconcretado`
--
ALTER TABLE `viajeconcretado`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pViajes` (`pViajes`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pArrastre` (`pArrastre`),
  ADD KEY `pEmpleado` (`pEmpleado`),
  ADD KEY `pSucursalOrigen` (`pSucursalOrigen`),
  ADD KEY `pCliente` (`pCliente`),
  ADD KEY `pVehiculo` (`pVehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arrastre`
--
ALTER TABLE `arrastre`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargascombustible`
--
ALTER TABLE `cargascombustible`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuesto`
--
ALTER TABLE `respuesto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicerepuesto`
--
ALTER TABLE `servicerepuesto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursalorigen`
--
ALTER TABLE `sucursalorigen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoempleado`
--
ALTER TABLE `tipoempleado`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiposervice`
--
ALTER TABLE `tiposervice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicaciondiaria`
--
ALTER TABLE `ubicaciondiaria`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `viajeconcretado`
--
ALTER TABLE `viajeconcretado`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargascombustible`
--
ALTER TABLE `cargascombustible`
  ADD CONSTRAINT `cargascombustible_ibfk_1` FOREIGN KEY (`pEmpleado`) REFERENCES `empleado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cargascombustible_ibfk_2` FOREIGN KEY (`pVehiculo`) REFERENCES `vehiculo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`pLocalidad`) REFERENCES `localidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`pProvincia`) REFERENCES `provincia` (`Id`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`pLicencia`) REFERENCES `licencia` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`pLocalidad`) REFERENCES `localidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`pProvincia`) REFERENCES `provincia` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_4` FOREIGN KEY (`pTipoEmpleado`) REFERENCES `tipoempleado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `mantenimiento_ibfk_1` FOREIGN KEY (`pVehiculo`) REFERENCES `vehiculo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimiento_ibfk_2` FOREIGN KEY (`pService`) REFERENCES `service` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimiento_ibfk_3` FOREIGN KEY (`pEmpleado`) REFERENCES `empleado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_ibfk_1` FOREIGN KEY (`pModelo`) REFERENCES `modelo` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`pLocalidad`) REFERENCES `localidad` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`pEmpleado`) REFERENCES `empleado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`pTipoService`) REFERENCES `tiposervice` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicerepuesto`
--
ALTER TABLE `servicerepuesto`
  ADD CONSTRAINT `servicerepuesto_ibfk_1` FOREIGN KEY (`pService`) REFERENCES `service` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `servicerepuesto_ibfk_2` FOREIGN KEY (`pRepuesto`) REFERENCES `respuesto` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursalorigen`
--
ALTER TABLE `sucursalorigen`
  ADD CONSTRAINT `sucursalorigen_ibfk_1` FOREIGN KEY (`pLocalidad`) REFERENCES `localidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sucursalorigen_ibfk_2` FOREIGN KEY (`pProvincia`) REFERENCES `provincia` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ubicaciondiaria`
--
ALTER TABLE `ubicaciondiaria`
  ADD CONSTRAINT `ubicaciondiaria_ibfk_1` FOREIGN KEY (`pEmpleado`) REFERENCES `empleado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ubicaciondiaria_ibfk_2` FOREIGN KEY (`pVehiculo`) REFERENCES `vehiculo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`pTipoUsuario`) REFERENCES `tipousuario` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`pTipoVehiculo`) REFERENCES `tipovehiculo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`pArrastre`) REFERENCES `arrastre` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_3` FOREIGN KEY (`pMantenimiento`) REFERENCES `mantenimiento` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_4` FOREIGN KEY (`pMarca`) REFERENCES `marca` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `viajeconcretado`
--
ALTER TABLE `viajeconcretado`
  ADD CONSTRAINT `viajeconcretado_ibfk_1` FOREIGN KEY (`pViajes`) REFERENCES `viajes` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD CONSTRAINT `viajes_ibfk_1` FOREIGN KEY (`pArrastre`) REFERENCES `arrastre` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `viajes_ibfk_2` FOREIGN KEY (`pEmpleado`) REFERENCES `empleado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `viajes_ibfk_3` FOREIGN KEY (`pSucursalOrigen`) REFERENCES `sucursalorigen` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `viajes_ibfk_4` FOREIGN KEY (`pCliente`) REFERENCES `cliente` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `viajes_ibfk_5` FOREIGN KEY (`pVehiculo`) REFERENCES `vehiculo` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
