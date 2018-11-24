-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 03:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `granadamedicalfriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividades`
--

CREATE TABLE `actividades` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `TITULO` varchar(160) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  `NUM_PLAZAS` int(11) DEFAULT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inscripciones_actividades`
--

CREATE TABLE `inscripciones_actividades` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `ACTIVIDAD` int(11) NOT NULL,
  `PACIENTE` int(11) NOT NULL,
  `CONFIRMADA` tinyint(1) NOT NULL,
  `ACTIVA` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monitores`
--

CREATE TABLE `monitores` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `NOMBRE` varchar(80) NOT NULL,
  `APELLIDOS` varchar(100) NOT NULL,
  `TELEFONO` varchar(16) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monitores_actividades`
--

CREATE TABLE `monitores_actividades` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `ACTIVIDAD` int(11) NOT NULL,
  `MONITOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `IDENTIFICADOR` int(11) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `NOMBRE` varchar(80) NOT NULL,
  `APELLIDOS` varchar(100) NOT NULL,
  `TELEFONO` varchar(16) DEFAULT NULL,
  `EMAIL` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`IDENTIFICADOR`);

--
-- Indexes for table `inscripciones_actividades`
--
ALTER TABLE `inscripciones_actividades`
  ADD PRIMARY KEY (`IDENTIFICADOR`),
  ADD KEY `ACTIVIDAD` (`ACTIVIDAD`),
  ADD KEY `PACIENTE` (`PACIENTE`);

--
-- Indexes for table `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`IDENTIFICADOR`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indexes for table `monitores_actividades`
--
ALTER TABLE `monitores_actividades`
  ADD PRIMARY KEY (`IDENTIFICADOR`),
  ADD KEY `FK_MONITOR_ACTIVIDAD` (`MONITOR`),
  ADD KEY `FK_INSCRIPCION_MONITOR_ACTIVIDAD` (`ACTIVIDAD`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`IDENTIFICADOR`),
  ADD UNIQUE KEY `PACIENTES_DNI` (`DNI`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inscripciones_actividades`
--
ALTER TABLE `inscripciones_actividades`
  ADD CONSTRAINT `FK_INSCRIPCION_ACTIVIDAD` FOREIGN KEY (`ACTIVIDAD`) REFERENCES `actividades` (`IDENTIFICADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_INSCRIPCION_USUARIO` FOREIGN KEY (`PACIENTE`) REFERENCES `pacientes` (`IDENTIFICADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `monitores_actividades`
--
ALTER TABLE `monitores_actividades`
  ADD CONSTRAINT `FK_INSCRIPCION_MONITOR_ACTIVIDAD` FOREIGN KEY (`ACTIVIDAD`) REFERENCES `actividades` (`IDENTIFICADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_MONITOR_ACTIVIDAD` FOREIGN KEY (`MONITOR`) REFERENCES `monitores` (`IDENTIFICADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
