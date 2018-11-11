<<<<<<< HEAD
﻿
SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";

INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('1', 'Banco Santander (Brasil) S.A', '033');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('2', 'Itaú Unibanco Holding S.A', '237');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('3', 'Banco Bradesco S.A', '745');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('4', 'HSBC Bank Brasil S.A - Banco Múltiplo', '399');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('5', 'Caixa Ecnonômica Federal', '104');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('6', 'Banco Mercantil do Brasil S.A', '389');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('7', 'Banco Rural S.A', '453');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('8', 'Banco Safra S.A', '422');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('9', 'Banco Rendimento S.A', '633');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('10', 'Banco do Brasil S.A', '001');
INSERT INTO `bancos`(`id`, `nome`, `codigo`) VALUES ('11','Banco Itaú S.A', '341');
=======
﻿INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('1', 'Banco Santander (Brasil) S.A', '033');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('2', 'Itaú Unibanco Holding S.A', '237');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('3', 'Banco Bradesco S.A', '745');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('4', 'HSBC Bank Brasil S.A - Banco Múltiplo', '399');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('5', 'Caixa Ecnonômica Federal', '104');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('6', 'Banco Mercantil do Brasil S.A', '389');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('7', 'Banco Rural S.A', '453');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('8', 'Banco Safra S.A', '422');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('9', 'Banco Rendimento S.A', '633');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('10', 'Banco do Brasil S.A', '001');
INSERT INTO `sistemaceagro`.`bancos` (`id`, `nome`, `codigo`) VALUES ('11','Banco Itaú S.A', '341');
>>>>>>> dbe3f6040e1b7756202b6baf6ff9660b59904f8c

DROP TABLE IF EXISTS `bancos`;
CREATE TABLE
IF NOT EXISTS `bancos`
(
  `id` INT AUTO_INCREMENT NOT NULL,
  `nome` VARCHAR (50) NOT NULL,
  `codigo` VARCHAR (50),
  PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE
IF NOT EXISTS `clientes`
(
  id INT NOT NULL AUTO_INCREMENT,
  banco_id INT,
  razao_social VARCHAR (255),
  cnpj VARCHAR (255),
  inscricao_estadual VARCHAR (255),
  nome VARCHAR (255),
  email VARCHAR (255),
  atuacao VARCHAR (255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contas_bancarias`;
CREATE TABLE
IF NOT EXISTS `contas_bancarias`
(
  `id` INT NOT NULL AUTO_INCREMENT,
  `cliente_id` INT(11) NOT NULL,
  `banco_id` VARCHAR(100) DEFAULT NULL,
  `agencia` VARCHAR(20) DEFAULT NULL,
  `conta` VARCHAR(20) DEFAULT NULL,
  `digito` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE
IF NOT EXISTS `contatos`
(
  id INT NOT NULL AUTO_INCREMENT,
  cliente_id INT NOT NULL,
  telefone VARCHAR (255),
  observacao VARCHAR (255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `enderecos_faturamentos`;
CREATE TABLE
IF NOT EXISTS `enderecos_faturamentos`
(
  id INT NOT NULL AUTO_INCREMENT,
  cliente_id INT NOT NULL,
  cep VARCHAR (255),
  complemento VARCHAR (255),
  bairro VARCHAR (255),
  cidade VARCHAR (255),
  numero VARCHAR (255),
  estado VARCHAR (255),
  rua VARCHAR (255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `enderecos_entregas`;
CREATE TABLE
IF NOT EXISTS `enderecos_entregas`
(
  id INT NOT NULL AUTO_INCREMENT,
  cliente_id INT NOT NULL,
  cep VARCHAR (255),
  complemento VARCHAR (255),
  bairro VARCHAR (255),
  cidade VARCHAR (255),
  numero VARCHAR (255),
  estado VARCHAR (255),
  rua VARCHAR (255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE
IF NOT EXISTS `contratos`
(
  id INT NOT NULL auto_increment,
  numero INT NOT NULL,
  cliente_comprador_id INT NOT NULL,
  cliente_vendedor_id INT NOT NULL,
  produto_id INT NOT NULL,
  assinatura_comprador VARCHAR (255),
  assinatura_vendedor VARCHAR (255),
  responsavel_comprador VARCHAR (255),
  responsavel_vendedor VARCHAR (255),
  safra VARCHAR (255),
  quantidade INT,
  unidade_medida CHAR (2),
  descricao VARCHAR (255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE
IF NOT EXISTS `produtos`
(
  `id` INT AUTO_INCREMENT NOT NULL,
  `tipo` VARCHAR (100),
  `nome` VARCHAR (100),
  `categoria` VARCHAR (100),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

DROP TABLE IF EXISTS `adendos`;
CREATE TABLE
IF NOT EXISTS `adendos`
(
  `id` INT AUTO_INCREMENT NOT NULL,
  `contrato_id` INT NOT NULL,
  `definicao` VARCHAR (100),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;