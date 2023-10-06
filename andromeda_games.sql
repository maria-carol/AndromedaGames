-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/10/2023 às 03:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `andromeda_games`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `plataforma` varchar(45) DEFAULT NULL,
  `descricao` varchar(250) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `preco` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `plataforma`, `descricao`, `imagem`, `preco`) VALUES
(12, 'Resident Evil 4', 'PlayStation', 'Jogo horripilante', 'prod2.png', 'R$ 100,00'),
(13, 'SimCity', 'PlayStation', 'Use sua criatividade', 'prod8.png', 'R$ 50,00'),
(14, 'The Sims 4', 'pc', 'O melhor jogo de simulação', 'prod5.png', 'R$ 99.90'),
(16, 'Undertale', 'Switch', 'Um jogo fofo e criativo', 'prod4.png', 'R$ 109.90'),
(17, 'Poly Bridge', 'Xbox', 'Um jogo legal de pontes', 'prod7.png', 'R$ 89.90'),
(18, 'FortiNite', 'pc', 'Jogo Legal', 'prod1.png', 'R$ 80,00'),
(19, 'GTA V', 'Switch', 'Tiro, porrada e bomba...', 'prod3.png', 'R$ 120.90'),
(20, 'Grounded', 'PlayStation', 'Jogo muito legal', 'prod6.png', 'R$ 99.99');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
