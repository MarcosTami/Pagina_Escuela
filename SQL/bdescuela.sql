-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 20:45:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdescuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `contraseña`) VALUES
(10, 'admin2232', '$2y$10$amqaWrrC3v.k1s2scYl0SOSmxwPj3A18ZWJh2R3eOZf3lYROL1aC2'),
(11, 'admin', '$2y$10$V4VGm7w7RDJbCPU4YFfAc.MiNTQ/M6qLUDB1SIwmOf2DLTmMGGwd2'),
(12, 'admin200', '$2y$10$gNN60IuAcYF/.6FFJ4mu1usMEABPCXuq.r461PtHVUiZhLQEp110a'),
(13, 'adm', '$2y$10$Mzxxcc8fNMej7n.kiSmKEOFI5wV2m16a4GmfhjC3KRsCLlbo.gnQO'),
(14, 'a', '$2y$10$H/vCi2L5uA9ojoUL2vfZnuxLJZTsgfWYT6.Dfx8Eh.17fht05o/.u'),
(15, 'a', '$2y$10$H/vCi2L5uA9ojoUL2vfZnuxLJZTsgfWYT6.Dfx8Eh.17fht05o/.u'),
(16, 'admin300', '$2y$10$HGv/45wkz353k2aKHFiUGufn09Vcju0o2F2bCLxKQrZ7uOJMvYPMK'),
(17, 'admin300', '$2y$10$HGv/45wkz353k2aKHFiUGufn09Vcju0o2F2bCLxKQrZ7uOJMvYPMK'),
(18, 'admin2000', '$2y$10$R5tUezKpXp2Iq/7Ty96t.uthdBtb0KoyOUWwlEtM6/6vTIWE0rDka'),
(19, 'admin2000', '$2y$10$R5tUezKpXp2Iq/7Ty96t.uthdBtb0KoyOUWwlEtM6/6vTIWE0rDka'),
(20, '200', '$2y$10$OOy960NRWwn0vwTBdoqUyOhq1FhVCwPpoimUgKRvbYtqUKw1ZGyfi'),
(21, '200', '$2y$10$OOy960NRWwn0vwTBdoqUyOhq1FhVCwPpoimUgKRvbYtqUKw1ZGyfi'),
(22, '123', '$2y$10$mC79x7hvGMPhhmfsCbQR.ORJ2ABP5lYb82nHa20yxmtq1jYpWaPjO'),
(23, '123', '$2y$10$mC79x7hvGMPhhmfsCbQR.ORJ2ABP5lYb82nHa20yxmtq1jYpWaPjO'),
(24, '12', '$2y$10$uo5.JV1EunVI4ijV.7I7De2jUZRsMHzg2IdpeuLz9zNv3o1UfifVy'),
(25, 'aa', '$2y$10$V9.eY0OtYMcvkKVm2qfQx.WXwV9CYh6gH/59GXAIaU6oy96BSdIFO'),
(26, '144', '$2y$10$3/Epzd6JN7fiP1KU8HdI.O43ZvRpYn4UDN7MdJSerWsE.1MRiCzu.'),
(27, 'admin00', '$2y$10$0msWpERZQ9I9dMqTgDJ8D.vW6mfAFQkA6oZdv6j4dczhsJQ7E2ekK'),
(28, 'admin01', '$2y$10$68Cu5zFEn14FoQfUy0IlhuSMocOgu2h51BdI1iYYSUlAmd0cswQ0a'),
(29, 'admin1000', '$2y$10$L4EO0FZDMsHq0V6KItLTu.ipWXzBT6./O18GcAaBQegD3ZNEuLJZm'),
(30, '000', '$2y$10$9npUOjWBSdMX7dFBuRBVRuascX5XiIvkhOZSXmjGTLgYOtGbaaIs2'),
(31, '12300', '$2y$10$m3hjxkCSUFYT5MUPIPHS0eYuZ68PgAhdlQPCW7BGPfNeOpqPmW1Kq'),
(32, '09', '$2y$10$xm5uQrpp32hN0bA/DYR9yOoxbur.S6glJVQZZNtev41wubtG/GbCW'),
(33, '99', '$2y$10$3Xbv7npWm2lQkbf1JfQgceDYofeN3aHXjTmixh.7K/Rm1pkd.DCPW'),
(34, '99', '$2y$10$sepODJRWL1vxlsNRPWGbse0OINsP8razRIAJhvMiY5Pqf9BqMjqhq'),
(35, '99', '$2y$10$HxcVaY0rpTPbPW.TxaTR6.nNZk4DC8INgOPIQkyKis.K81mszs/8a'),
(36, '99', '$2y$10$TsgkqIicgvlcRJdH8P2tiu2NHnF0RJNG765Giu/agEHzeabie9evu'),
(37, '99', '$2y$10$x83JqI1YpKzjSsYO6jjsNeVimaiTkTLE3eKHmoSavLF8zpcQjiLbK'),
(38, '9999', '$2y$10$T3ZtBra3jfIn9VnFrzT6cuVdf6O38iuCqVf.zyBl40rpIUsMospKu'),
(39, '12', '$2y$10$r8lCUPv2NMfrGy5Nxpl4Vu3HQPHjPpuX2K8tBwnwno1qBI/NesR8W'),
(40, 'es', '$2y$10$oO6zknp2wHcIzjOiNlSH4.7ueZwDVKmFxXwZk7umqie.T6N7YOs2i'),
(41, 'admin3500', '$2y$10$9HeYSW.BBsSJrJBYDxa/Wu7jqbsrNZVSid3YH2SfiSSiva6vbhiFK'),
(42, 'admin35000', '$2y$10$4bN89Z4zP58F6NH8/RLhx.L./2Z4U7eX6/WUgp2SZi4Viqkx2Iada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `curso` varchar(5) NOT NULL,
  `dni` int(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `contacto_emergencia` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `curso`, `dni`, `telefono`, `contacto_emergencia`) VALUES
(57, 'Pablo ', 'Cantero', '2003-06-10', '7mo I', 46924918, 2147483647, '2494353490'),
(58, 'Bautista', 'Galvan', '2003-12-16', '7mo I', 46923452, 2147483647, '2494019567'),
(59, 'Mariano', 'Diniz', '2004-04-07', '7mo I', 45569270, 2147483647, '2494123545'),
(60, 'Roman ', 'Zarsa', '2003-10-22', '7mo I', 46996834, 2147483647, '2494678477'),
(61, 'Atilio Benjamin', 'Martinez Binelli', '2003-01-31', '7mo I', 44607802, 2147483647, '2494023427'),
(62, 'Patricio ', 'Olesen ', '2003-08-12', '7mo I', 46996827, 2147483647, '2494136525'),
(63, 'Felipe', 'Magno', '2004-06-18', '7mo I', 44384625, 2147483647, '2494112367'),
(64, 'Johannes Augusto', 'Coronel Carrio', '2003-11-05', '7mo I', 44607913, 2147483647, '2494022684'),
(65, 'Joaquin', 'Amuchategui', '2004-01-05', '7mo I', 46915987, 2147483647, '2494197328'),
(66, 'Manuel ', 'Santellan', '2003-08-14', '7mo I', 44606245, 2147483647, '2494133816'),
(67, 'Simon ', 'Aceto', '2004-05-15', '7mo I', 46999137, 2147483647, '2494369874'),
(68, 'Tomas', 'De Miguel', '2003-04-19', '7mo I', 44607410, 2147483647, '2494676735'),
(69, 'Michael', 'Tvihaug', '2003-07-28', '7mo I', 469234613, 2147483647, '2494019713'),
(70, 'Martin ', 'De Miguel', '2003-07-02', '7mo I', 45565820, 2147483647, '2494174682');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
