-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14/11/2022 às 10:25
-- Versão do servidor: 5.7.36
-- Versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_clients_control`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adresses`
--

DROP TABLE IF EXISTS `adresses`;
CREATE TABLE IF NOT EXISTS `adresses` (
  `id_address` int(255) NOT NULL AUTO_INCREMENT,
  `id_client` varchar(255) DEFAULT NULL,
  `id_login` varchar(255) DEFAULT NULL,
  `street` text,
  `district` text,
  `city` text,
  `states` text,
  `country` text,
  `number_house` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_address`),
  KEY `id_client_fk` (`id_client`),
  KEY `id_login_fk` (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adresses`
--

INSERT INTO `adresses` (`id_address`, `id_client`, `id_login`, `street`, `district`, `city`, `states`, `country`, `number_house`) VALUES
(1, '127', '5', 'Rua Roque Soares de Lima', 'Centro', 'Campo bom', 'rs', 'Brasil', 31),
(2, '133', '5', 'Rua Roque Soares de Lima', 'Centro', 'Novo Hamburgo', 'RS', 'Brasil', 188),
(3, '136', '5', 'Rua Roque Soares de Lima', 'Centro', 'Novo Hamburgo', 'RS', 'Brasil', 188),
(4, '136', NULL, 'Rua Roque Soares de Lima', 'Centro', 'Novo Hamburgo', 'RS', '0', 188),
(5, '136', NULL, 'Rua Roque Soares de Lima', 'Centro', 'Novo Hamburgo', 'RS', '0', 188);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(10) NOT NULL AUTO_INCREMENT,
  `id_address` varchar(255) DEFAULT NULL,
  `id_login` varchar(255) DEFAULT NULL,
  `nome` text,
  `cpf` varchar(14) DEFAULT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_address_fk` (`id_address`),
  KEY `id_login_fk` (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `clients`
--

INSERT INTO `clients` (`id_client`, `id_address`, `id_login`, `nome`, `cpf`, `rg`, `phone`, `birth`) VALUES
(127, '27', '2', 'Milene', '04721097077', '71097470', '51992133253', '1991-11-14'),
(138, NULL, '5', 'Gabriel', '01715953002', '7109707492', '51992133253', '1999-07-14'),
(137, NULL, '5', 'Gabriel', '01715953002', '7109707492', '51992133253', '1991-07-14'),
(136, 'null', '5', 'Abacaxi', '04721097077', '7109707492', '51992133253', '2022-11-14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text,
  `email` varchar(140) NOT NULL,
  `senha` varchar(140) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id_login`, `nome`, `email`, `senha`) VALUES
(1, 'Milene', 'admin@admin.com', '1234'),
(2, 'Gabriel', 'eduardofaller@hotmail.com', '1234'),
(5, 'Eduardo', 'test@test.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
