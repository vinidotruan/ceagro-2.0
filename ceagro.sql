-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Out-2018 às 16:44
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceagro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco`
--

DROP TABLE IF EXISTS `banco`;
CREATE TABLE IF NOT EXISTS `banco` (
  `nome` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cnpj` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `responsavel` varchar(50) DEFAULT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` char(2) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `assintaura` varchar(50) DEFAULT NULL,
  `atuacao` varchar(10) DEFAULT NULL,
  `inscricao_estadual` varchar(255) NOT NULL,
  `telefone2` int(11) NOT NULL,
  `obs` text NOT NULL,
  PRIMARY KEY (`cnpj`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  `peso_qualidade` text NOT NULL,
  `comissao` text NOT NULL,
  `clausula1` text NOT NULL,
  `clausula2` text NOT NULL,
  `clausula3` text NOT NULL,
  `ID_vendedor` int(11) NOT NULL,
  `ID_comprador` int(11) NOT NULL,
  `numero_confirmacao` int(11) NOT NULL,
  `ID_faturamento` int(11) NOT NULL,
  `ID_entrega` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

DROP TABLE IF EXISTS `entrega`;
CREATE TABLE IF NOT EXISTS `entrega` (
  `endereco` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faturamento`
--

DROP TABLE IF EXISTS `faturamento`;
CREATE TABLE IF NOT EXISTS `faturamento` (
  `endereco` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` double NOT NULL,
  `medida` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
