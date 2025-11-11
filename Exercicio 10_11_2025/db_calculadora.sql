-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2025 às 01:43
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_calculadora`
--
CREATE DATABASE IF NOT EXISTS `db_calculadora` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_calculadora`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `memoria_calculadora`
--

CREATE TABLE `memoria_calculadora` (
  `id` int(11) NOT NULL COMMENT 'Número (ID) da calculadora, usaremos 1 para simplificar',
  `conteudo` decimal(18,8) NOT NULL DEFAULT 0.00000000 COMMENT 'Valor armazenado na memória'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `memoria_calculadora`
--

INSERT INTO `memoria_calculadora` (`id`, `conteudo`) VALUES
(1, 0.00000000);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `memoria_calculadora`
--
ALTER TABLE `memoria_calculadora`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
