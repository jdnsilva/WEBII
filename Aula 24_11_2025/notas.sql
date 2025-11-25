-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2025 às 01:17
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
-- Banco de dados: `notas`
--
CREATE DATABASE IF NOT EXISTS `notas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `notas`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `ano_letivo_semestre` varchar(10) NOT NULL,
  `periodo_curso` tinyint(4) NOT NULL,
  `diario` varchar(20) DEFAULT '',
  `codigo` varchar(20) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `ch` int(11) DEFAULT NULL,
  `nota` decimal(5,2) DEFAULT NULL,
  `freq_percent` decimal(5,2) DEFAULT NULL,
  `situacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `usuario_id`, `ano_letivo_semestre`, `periodo_curso`, `diario`, `codigo`, `descricao`, `ch`, `nota`, `freq_percent`, `situacao`) VALUES
(1, 1, '-', 1, '-', 'SUP.13078', '(BRTALGP) ALGORITMO E PROGRAMAÇÃO', 0, 60.00, 0.00, '-'),
(2, 1, '2024/1', 1, '343725', 'SUP.13078', '(BRTALGP) ALGORITMO E PROGRAMAÇÃO', 0, 60.00, 4.00, 'Reprovado'),
(3, 1, '2024/1', 1, '343726', 'SUP.13079', '(BRTINGT) INGLÊS TÉCNICO', 0, 30.00, 7.60, 'Aprovado'),
(4, 1, '2024/1', 1, '343727', 'SUP.13081', '(BRTIADM) INTRODUÇÃO À ADMINISTRAÇÃO', 0, 30.00, 10.00, 'Aprovado'),
(5, 1, '2024/1', 1, '343728', 'SUP.13083', '(BRTICOM) INTRODUÇÃO À COMPUTAÇÃO', 0, 60.00, 6.90, 'Aprovado'),
(6, 1, '-', 1, '-', 'SUP.13085', '(BRTLINP) LINGUAGEM DE PROGRAMAÇÃO', 0, 60.00, 0.00, '-'),
(7, 1, '2024/1', 1, '343729', 'SUP.13085', '(BRTLINP) LINGUAGEM DE PROGRAMAÇÃO', 0, 60.00, 5.20, 'Reprovado'),
(8, 1, '2024/1', 1, '343730', 'SUP.13183', '(BRTMATE) MATEMÁTICA', 0, 60.00, 10.00, 'Aprovado'),
(9, 1, '2024/2', 2, '350873', 'SUP.13155', '(BRTARQC) ARQUITETURA DE COMPUTADORES', 0, 30.00, 8.50, 'Aprovado'),
(10, 1, '2024/2', 2, '350874', 'SUP.13156', '(BRTBAND) BANCO DE DADOS', 0, 60.00, 9.50, 'Aprovado'),
(11, 1, '2024/2', 2, '350875', 'SUP.13157', '(BRTESTD) ESTRUTURAS DE DADOS', 0, 60.00, 6.10, 'Aprovado'),
(12, 1, '2024/1', 2, '-', 'SUP.13158', '(BRTESTA) ESTATÍSTICA 30,00', 30, 6.40, 0.00, 'Disciplina'),
(13, 1, '2024/2', 2, '350877', 'SUP.13159', '(BRTGPRO) GESTÃO DE PROJETOS', 0, 60.00, 9.50, 'Aprovado'),
(14, 1, '2024/2', 2, '350878', 'SUP.13160', '(BRTSISO) SISTEMAS OPERACIONAIS', 0, 60.00, 6.00, 'Aprovado'),
(15, 1, '2025/1', 3, '359425', 'SUP.13161', '(BRTBAN2) BANCO DE DADOS 2', 2, 60.00, 10.00, 'Aprovado'),
(16, 1, '2025/1', 3, '359426', 'SUP.13162', '(BRTDWEB) DESENVOLVIMENTO WEB', 0, 60.00, 8.50, 'Aprovado'),
(17, 1, '2025/1', 3, '359427', 'SUP.13163', '(BRTENGS) ENGENHARIA DE SOFTWARE', 0, 60.00, 10.00, 'Aprovado'),
(18, 1, '-', 3, '-', 'SUP.13164', '(BRTEST2) ESTRUTURAS DE DADOS 2', 2, 60.00, 0.00, '-'),
(19, 1, '2025/1', 3, '359428', 'SUP.13164', '(BRTEST2) ESTRUTURAS DE DADOS 2', 2, 60.00, 0.00, 'Reprovado'),
(20, 1, '2025/1', 3, '359429', 'SUP.13165', '(BRTREDC) REDES DE COMPUTADORES', 0, 60.00, 8.00, 'Aprovado'),
(21, 1, '2025/2', 4, '375318', 'SUP.13166', '(BRTASIS) ANÁLISE DE SISTEMAS', 0, 60.00, 0.00, 'Cursando'),
(22, 1, '2025/2', 4, '375319', 'SUP.13167', '(BRTDWE2) DESENVOLVIMENTO WEB 2', 2, 60.00, 0.00, 'Cursando'),
(23, 1, '2025/2', 4, '375320', 'SUP.13168', '(BRTEMPR) EMPREENDEDORISMO', 0, 30.00, 0.00, 'Cursando'),
(24, 1, '2025/2', 4, '375321', 'SUP.13169', '(BRTINHC) INTERAÇÃO HUMANO-COMPUTADOR', 0, 30.00, 0.00, 'Cursando'),
(25, 1, '2025/2', 4, '375322', 'SUP.13170', '(BRTPROO) PROGRAMAÇÃO ORIENTADA A OBJETOS', 0, 60.00, 0.00, 'Cursando'),
(26, 1, '2025/2', 4, '375323', 'SUP.13171', '(BRTRED2) REDE DE COMPUTADORES 2', 2, 60.00, 0.00, 'Cursando');

-- --------------------------------------------------------

--
-- Estrutura para tabela `historicos`
--

CREATE TABLE `historicos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `conteudo` longtext NOT NULL,
  `data_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `historicos`
--

INSERT INTO `historicos` (`id`, `usuario_id`, `conteudo`, `data_envio`) VALUES
(2, 1, '-	1	-	SUP.13078 (BRTALGP)	ALGORITMO E PROGRAMAÇÃO	60,00	-	-	-\r\n2024/1	1	343725	SUP.13078 (BRTALGP)	ALGORITMO E PROGRAMAÇÃO	60,00	4,00	100%	Reprovado\r\n2024/1	1	343726	SUP.13079 (BRTINGT)	INGLÊS TÉCNICO	30,00	7,60	95,0%	Aprovado\r\n2024/1	1	343727	SUP.13081 (BRTIADM)	INTRODUÇÃO À ADMINISTRAÇÃO	30,00	10,00	95,0%	Aprovado\r\n2024/1	1	343728	SUP.13083 (BRTICOM)	INTRODUÇÃO À COMPUTAÇÃO	60,00	6,90	100%	Aprovado\r\n-	1	-	SUP.13085 (BRTLINP)	LINGUAGEM DE PROGRAMAÇÃO	60,00	-	-	-\r\n2024/1	1	343729	SUP.13085 (BRTLINP)	LINGUAGEM DE PROGRAMAÇÃO	60,00	5,20	97,5%	Reprovado\r\n2024/1	1	343730	SUP.13183 (BRTMATE)	MATEMÁTICA	60,00	10,00	100%	Aprovado\r\n2024/2	2	350873	SUP.13155 (BRTARQC)	ARQUITETURA DE COMPUTADORES	30,00	8,50	100%	Aprovado\r\n2024/2	2	350874	SUP.13156 (BRTBAND)	BANCO DE DADOS	60,00	9,50	100%	Aprovado\r\n2024/2	2	350875	SUP.13157 (BRTESTD)	ESTRUTURAS DE DADOS	60,00	6,10	100%	Aprovado\r\n2024/1	2	-	SUP.13158 (BRTESTA)	ESTATÍSTICA	30,00	6,40	-	Aproveit. Disciplina\r\n2024/2	2	350877	SUP.13159 (BRTGPRO)	GESTÃO DE PROJETOS	60,00	9,50	100%	Aprovado\r\n2024/2	2	350878	SUP.13160 (BRTSISO)	SISTEMAS OPERACIONAIS	60,00	6,00	100%	Aprovado\r\n2025/1	3	359425	SUP.13161 (BRTBAN2)	BANCO DE DADOS 2	60,00	10,00	95,0%	Aprovado\r\n2025/1	3	359426	SUP.13162 (BRTDWEB)	DESENVOLVIMENTO WEB	60,00	8,50	100%	Aprovado\r\n2025/1	3	359427	SUP.13163 (BRTENGS)	ENGENHARIA DE SOFTWARE	60,00	10,00	95,0%	Aprovado\r\n-	3	-	SUP.13164 (BRTEST2)	ESTRUTURAS DE DADOS 2	60,00	-	-	-\r\n2025/1	3	359428	SUP.13164 (BRTEST2)	ESTRUTURAS DE DADOS 2	60,00	0,00	85,0%	Reprovado\r\n2025/1	3	359429	SUP.13165 (BRTREDC)	REDES DE COMPUTADORES	60,00	8,00	100%	Aprovado\r\n2025/2	4	375318	SUP.13166 (BRTASIS)	ANÁLISE DE SISTEMAS	60,00	-	-	Cursando\r\n2025/2	4	375319	SUP.13167 (BRTDWE2)	DESENVOLVIMENTO WEB 2	60,00	-	-	Cursando\r\n2025/2	4	375320	SUP.13168 (BRTEMPR)	EMPREENDEDORISMO	30,00	-	-	Cursando\r\n2025/2	4	375321	SUP.13169 (BRTINHC)	INTERAÇÃO HUMANO-COMPUTADOR	30,00	-	-	Cursando\r\n2025/2	4	375322	SUP.13170 (BRTPROO)	PROGRAMAÇÃO ORIENTADA A OBJETOS	60,00	-	-	Cursando\r\n2025/2	4	375323	SUP.13171 (BRTRED2)	REDE DE COMPUTADORES 2	60,00	-	-	Cursando', '2025-11-24 23:54:33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'jean@email.com', '$2y$10$USEQHP2kWdcvZIngA0sTfOIUVlQnUJDwMEc6zdsBE2qfoYDDSz8O6');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `historicos`
--
ALTER TABLE `historicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `historicos`
--
ALTER TABLE `historicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `historicos`
--
ALTER TABLE `historicos`
  ADD CONSTRAINT `historicos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
