-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2018 às 02:07
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lugares`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
  `idlugar` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `latitude` varchar(200) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lugares`
--

INSERT INTO `lugares` (`idlugar`, `nome`, `latitude`, `longitude`) VALUES
(1, 'Av', '-22.498283', '-48.562878'),
(2, 'Old Burguer', '-22.497338', '-48.560743');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lugares`
--
ALTER TABLE `lugares`
 ADD PRIMARY KEY (`idlugar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
