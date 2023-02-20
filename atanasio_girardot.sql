-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2023 a las 20:29:19
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atanasio_girardot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `Documento` varchar(15) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado decimo`
--

CREATE TABLE `grado decimo` (
  `Documento` varchar(15) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Celular` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado noveno`
--

CREATE TABLE `grado noveno` (
  `Documento` varchar(15) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Celular` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado octavo`
--

CREATE TABLE `grado octavo` (
  `Documento` varchar(15) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Celular` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado once`
--

CREATE TABLE `grado once` (
  `Documento` varchar(15) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Celular` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado septimo`
--

CREATE TABLE `grado septimo` (
  `Documento` varchar(15) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Celular` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado sexto`
--

CREATE TABLE `grado sexto` (
  `Documento` varchar(15) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Celular` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grado sexto`
--

INSERT INTO `grado sexto` (`Documento`, `Nombre`, `Apellidos`, `Correo`, `Celular`) VALUES
('1193579638', 'Jhorman David', 'Cardona Galeano', 'jhormandavid06@gmail.com', '3053388800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Documento` varchar(15) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
