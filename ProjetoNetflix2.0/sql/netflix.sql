-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Out-2023 às 14:34
-- Versão do servidor: 8.0.30
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `netflix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `lançamento_Netflix` datetime NOT NULL,
  `Perfis_id` int NOT NULL,
  `Perfis_Usuário_id` int NOT NULL,
  PRIMARY KEY (`id`,`Perfis_id`,`Perfis_Usuário_id`),
  KEY `fk_filme_Perfis1_idx` (`Perfis_id`,`Perfis_Usuário_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

DROP TABLE IF EXISTS `perfis`;
CREATE TABLE IF NOT EXISTS `perfis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `kidsOuNao` char(1) NOT NULL,
  `Usuário_id` int NOT NULL,
  PRIMARY KEY (`id`,`Usuário_id`),
  KEY `fk_Perfis_Usuário_idx` (`Usuário_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuário`
--

DROP TABLE IF EXISTS `usuário`;
CREATE TABLE IF NOT EXISTS `usuário` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `Nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_filme_Perfis1` FOREIGN KEY (`Perfis_id`,`Perfis_Usuário_id`) REFERENCES `perfis` (`id`, `Usuário_id`);

--
-- Limitadores para a tabela `perfis`
--
ALTER TABLE `perfis`
  ADD CONSTRAINT `fk_Perfis_Usuário` FOREIGN KEY (`Usuário_id`) REFERENCES `usuário` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
