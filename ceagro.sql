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
  nome VARCHAR(50) NOT NULL,
  id INT(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  id INT NOT NULL AUTO_INCREMENT,
  razao_social VARCHAR(255),
  cnpj VARCHAR(255),
  inscricao_estadual VARCHAR(255),
  nome VARCHAR(255),
  responsavel VARCHAR(255),
  email VARCHAR(255),
  atuacao VARCHAR(255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  id INT NOT NULL AUTO_INCREMENT,
  cliente_id INT NOT NULL,
  telefone VARCHAR(255),
  observacao VARCHAR(255),
  PRIMARY KEY(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  id INT NOT NULL AUTO_INCREMENT,
  cliente_id INT NOT NULL,
  cep VARCHAR(255),
  complemento VARCHAR(255),
  bairro VARCHAR(255),
  PRIMARY KEY(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  id INT NOT NULL auto_increment,
  numero INT NOT NULL,
  cliente_comprador_id INT NOT NULL,
  cliente_vendedor_id INT NOT NULL,
  produto_id INT NOT NULL,
  safra VARCHAR(255),
  quantidade INT,
  unidade_medida CHAR(1),
  descricao VARCHAR(255),
  PRIMARY KEY(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` INT(11) NOT NULL,
  `titulo` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
