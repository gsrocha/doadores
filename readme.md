Doadores

O sistema foi feito em Laravel um frame work de PHP, siga as instruções para executar corretamente.


Instruções de instalação:

1# Execute o dump no mysql
CREATE DATABASE `doadores` /*!40100 DEFAULT CHARACTER SET latin1 */;
CREATE TABLE `doacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doador` int(11) NOT NULL,
  `valor_doacao` double(8,2) DEFAULT NULL,
  `forma_pagamento` int(1) DEFAULT NULL COMMENT '1 = Crédito\n2 = Débito',
  `agencia` varchar(45) DEFAULT NULL,
  `numero_conta` varchar(45) DEFAULT NULL,
  `numero_cartao` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
CREATE TABLE `doador_enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doador` int(11) NOT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `lat` varchar(45) DEFAULT NULL,
  `lon` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `doador_idx` (`id_doador`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
CREATE TABLE `doadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `data_de_nascimento` date DEFAULT NULL,
  `data_do_cadastro` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `intervalo_doacao` int(1) DEFAULT NULL COMMENT '1 = Único\n2 = Bimestral\n3 = Semestral\n4 = Anual',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

2# Baixe o repositório

3# Acesse o diretório do repositório (doadores) e execute o comando: composer install

4# No arquivo .env informe as credenciais do banco de dados mysql, para o sistema ter acesso

5# Execute o comando php artisan serve


