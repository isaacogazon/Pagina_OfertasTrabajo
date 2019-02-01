-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2019 a las 16:07:23
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_1ert`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_oferta`
--

CREATE TABLE `tbl_oferta` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `poblacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fechacre` date NOT NULL,
  `fechacom` date NOT NULL,
  `psicologo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `candidato` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `otros` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_oferta`
--

INSERT INTO `tbl_oferta` (`id`, `descripcion`, `contacto`, `telefono`, `correo`, `direccion`, `poblacion`, `cp`, `provincia`, `estado`, `fechacre`, `fechacom`, `psicologo`, `candidato`, `otros`) VALUES
(65, 'Trabajo', 'Isaac', '685745845', 'daniel@daniel.es', 'Cancun Nº87', 'Villarrasa', '27001', '21', 'cancelada', '2018-12-28', '2020-01-10', 'Juan', 'Luis', 'Hola'),
(67, 'Nuevo trabajo', 'Isabel', '698574587', 'luis@luis.com', 'Alemania Nº8', 'Sevilla', '27855', '41', 'seleccionado', '2018-12-28', '2020-01-20', 'Pedro', 'Jose', ''),
(68, 'Nuevo trabajo2', 'Isaac', '698574587', 'luis@luis.com', 'Alemania Nº8', 'Sevilla', '27855', '41', 'realizando', '2018-12-28', '2019-12-12', 'Juan', 'Isabel', ''),
(69, 'fdf 1', 'Isaac', '658745874', 'isaac@isaac.es', '111', '111', '21700', '01', 'realizando', '2018-12-28', '2019-01-20', 'Luis', 'Jose', ''),
(70, 'Hola', 'Juan Luis', '698574587', 'luis@luis.com', 'Alemania Nº8', 'Sevilla', '27855', '41', 'realizando', '2018-12-28', '2029-09-23', 'Luis', 'Manolo', ''),
(71, 'fdf', 'Juan Luis', '685745845', 'daniel@daniel.es', 'Cancun Nº87', 'Villarrasa', '27001', '21', 'realizando', '2018-12-28', '2019-01-20', 'Luis', 'Pepe', ''),
(72, 'Trabajo', 'Juan Luis', '698574587', 'luis@luis.com', 'Alemania Nº8', 'Sevilla', '27855', '41', 'realizando', '2018-12-28', '2032-01-30', 'Daniel', 'Pepe', 'cansao'),
(73, 'Dia 30', 'Isaac', '698574587', 'luis@luis.com', 'Alemania Nº8', 'Sevilla', '27855', '41', 'seleccionado', '2018-12-29', '2025-02-11', 'Luis', 'Isaac ', ''),
(74, 'Trabajo', 'Isaac', '685745845', 'daniel@daniel.es', 'Cancun Nº87', 'Villarrasa', '27001', '21', 'seleccionado', '2018-12-29', '2019-01-20', 'Daniel', 'Manolo', ''),
(75, 'Nuevo trabajo', 'Isaac', '698547123', 'juan@juan.com', 'Santa Marta Nº6', 'Bollullos', '21700', '21', 'pendiente', '2018-12-29', '2021-01-10', 'Pepe', 'Pepe', ''),
(76, 'Nuevo trabajo', 'Juan Luis', '698574587', 'luis@luis.com', 'Alemania Nº8', 'Sevilla', '27855', '41', 'realizando', '2018-12-29', '2019-12-12', 'Maria', 'Manolo', ''),
(77, 'Nuevo trabajo', 'Juan Luis', '698574587', 'luis@luis.com', 'Alemania Nº8', 'Sevilla', '27855', '41', 'realizando', '2018-12-29', '2019-12-12', 'Pepe', 'Isabel', ''),
(78, 'Nueva ', 'Juan', '655252221', 'juan@juan.com', 'Santa Marta Nº6', 'Bollullos', '21700', '21', 'seleccionado', '2019-01-04', '2019-12-20', 'Maria', 'Pepe', 'jajajaja'),
(79, 'nuevo', 'Isaac', '685745845', 'daniel@daniel.es', 'Cancun Nº87', 'Villarrasa', '27001', '21', 'cancelada', '2019-01-08', '2019-01-10', 'Juan', 'Juan', 'No hay mas datos.'),
(80, 'hola23', 'Isaac', '633092395', 'isaac.ogazon@gmail.com', 'Blanca Paloma 64, Espana', 'La Palma del Condado', '21700', '21', 'seleccionado', '2019-01-16', '2024-02-23', 'Isaac', 'Isaac', 'Ultimo'),
(81, 'Hola a todos', 'Pedro', '699696669', 'pedro@pedro.com', 'Juan jose 34', 'Bollullos', '21899', '21', 'seleccionado', '2019-01-24', '2019-02-28', 'Maria', 'Isaac', 'Ultimo ingreso'),
(82, 'Trabajo', 'Isaac', '633092395', 'isaac.ogazon@gmail.com', 'Blanca Paloma 64, Espana', 'La Palma del Condado', '21700', '21', 'seleccionado', '2019-01-24', '0000-00-00', 'Daniel', 'Isaac Ogazón Pichard', '');

--
-- Disparadores `tbl_oferta`
--
DELIMITER $$
CREATE TRIGGER `fecha_actual` BEFORE INSERT ON `tbl_oferta` FOR EACH ROW SET NEW.fechacre = CURRENT_DATE()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_provincias`
--

CREATE TABLE `tbl_provincias` (
  `cod` char(2) NOT NULL DEFAULT '00' COMMENT 'Código de la provincia de dos digitos',
  `nombre` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nombre de la provincia',
  `comunidad_id` tinyint(4) NOT NULL COMMENT 'Código de la comunidad a la que pertenece'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Provincias de españa; 99 para seleccionar a Nacional';

--
-- Volcado de datos para la tabla `tbl_provincias`
--

INSERT INTO `tbl_provincias` (`cod`, `nombre`, `comunidad_id`) VALUES
('01', 'Alava', 16),
('02', 'Albacete', 7),
('03', 'Alicante', 10),
('04', 'Almera', 1),
('05', 'Avila', 8),
('06', 'Badajoz', 11),
('07', 'Balears (Illes)', 4),
('08', 'Barcelona', 9),
('09', 'Burgos', 8),
('10', 'Cáceres', 11),
('11', 'Cádiz', 1),
('12', 'Castellón', 10),
('13', 'Ciudad Real', 7),
('14', 'Córdoba', 1),
('15', 'Coruña (A)', 12),
('16', 'Cuenca', 7),
('17', 'Girona', 9),
('18', 'Granada', 1),
('19', 'Guadalajara', 7),
('20', 'Guipzcoa', 16),
('21', 'Huelva', 1),
('22', 'Huesca', 2),
('23', 'Jaén', 1),
('24', 'León', 8),
('25', 'Lleida', 9),
('26', 'Rioja (La)', 17),
('27', 'Lugo', 12),
('28', 'Madrid', 13),
('29', 'Málaga', 1),
('30', 'Murcia', 14),
('31', 'Navarra', 15),
('32', 'Ourense', 12),
('33', 'Asturias', 3),
('34', 'Palencia', 8),
('35', 'Palmas (Las)', 5),
('36', 'Pontevedra', 12),
('37', 'Salamanca', 8),
('38', 'Santa Cruz de Tenerife', 5),
('39', 'Cantabria', 6),
('40', 'Segovia', 8),
('41', 'Sevilla', 1),
('42', 'Soria', 8),
('43', 'Tarragona', 9),
('44', 'Teruel', 2),
('45', 'Toledo', 7),
('46', 'Valencia', 10),
('47', 'Valladolid', 8),
('48', 'Vizcaya', 16),
('49', 'Zamora', 8),
('50', 'Zaragoza', 2),
('51', 'Ceuta', 18),
('52', 'Melilla', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave_usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `hora` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `nombre_usuario`, `clave_usuario`, `tipo`, `hora`) VALUES
(1, 'isaac', 'isaac', 'admin', '0000-00-00'),
(2, 'pepe', 'pepe', 'psicologo', '0000-00-00'),
(12, 'juan', 'juan', 'psicologo', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_oferta`
--
ALTER TABLE `tbl_oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_provincias`
--
ALTER TABLE `tbl_provincias`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `FK_ComunidadAutonomaProv` (`comunidad_id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_oferta`
--
ALTER TABLE `tbl_oferta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
