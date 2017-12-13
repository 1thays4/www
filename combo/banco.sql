# phpMyAdmin MySQL-Dump
# version 2.2.0rc1
# http://phpwizard.net/phpMyAdmin/
# http://phpmyadmin.sourceforge.net/ (download page)
#
# Servidor: localhost
# Tempo de Generação: August 15, 2001, 10:39 am
# Versão do Servidor: 3.23.32
# Versão do PHP: 4.0.3pl1
# Banco de Dados : banco
# --------------------------------------------------------

#
# Estrutura da tabela 'categoria'
#

CREATE TABLE `categoria` (
  `codigo` int(11) NOT NULL auto_increment,
  `descricao` varchar(50) NOT NULL default '',
  PRIMARY KEY (`codigo`)
) TYPE=MyISAM;

#
# Extraindo dados da tabela 'categoria'
#

INSERT INTO categoria VALUES ( '1', 'Seriados');
INSERT INTO categoria VALUES ( '2', 'Filmes');
INSERT INTO categoria VALUES ( '3', 'Quadrinhos');
INSERT INTO categoria VALUES ( '4', 'Jogos');
# --------------------------------------------------------

#
# Estrutura da tabela 'sub_categoria'
#

CREATE TABLE `sub_categoria` (
  `codigo` int(11) NOT NULL auto_increment,
  `cod_categoria` int(11) NOT NULL default '0',
  `descricao` varchar(50) NOT NULL default '',
  PRIMARY KEY (`codigo`)
) TYPE=MyISAM;

#
# Extraindo dados da tabela 'sub_categoria'
#

INSERT INTO sub_categoria VALUES ( '1', '1', 'Star Trek');
INSERT INTO sub_categoria VALUES ( '2', '1', 'Jennie é um Genio');
INSERT INTO sub_categoria VALUES ( '3', '1', 'Profissão: Perigo');
INSERT INTO sub_categoria VALUES ( '4', '1', 'As Panteras');
INSERT INTO sub_categoria VALUES ( '5', '2', 'O Império Contra Ataca');
INSERT INTO sub_categoria VALUES ( '6', '2', 'Gladiador');
INSERT INTO sub_categoria VALUES ( '7', '2', 'Matrix');
INSERT INTO sub_categoria VALUES ( '8', '3', 'Super-Homem');
INSERT INTO sub_categoria VALUES ( '9', '3', 'Batman');
INSERT INTO sub_categoria VALUES ( '10', '3', 'Sandman');
INSERT INTO sub_categoria VALUES ( '11', '3', 'Lanterna-Verde');
