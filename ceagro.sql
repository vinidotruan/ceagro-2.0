DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  id int not null AUTO_INCREMENT,
  razao_social varchar(255),
  cnpj varchar(255),
  inscricao_estadual varchar(255),
  nome varchar(255),
  responsavel varchar(255),
  email varchar(255),
  atuacao varchar(255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  cliente_id int not null,
  telefone varchar(255),
  observacao varchar(255)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE `enderecos` (
  id int not null AUTO_INCREMENT,
  cliente_id int not null,
  cep varchar(255),
  complemento varchar(255),
  bairro varchar(255)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  cliente_comprador_id int not null,
  cliente_vendedor_id int not null,
  produto_id int not null,
  peso_qualidade varchar(255),
  comissao varchar(255),
  clausula1 varchar(255) NOT NULL,
  clausula2 varchar(255) NOT NULL,
  clausula3 varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` double NOT NULL,
  `medida` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;