-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Out-2023 às 23:42
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `plataforma` varchar(45) DEFAULT NULL,
  `descricao` varchar(250) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `preco` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `plataforma`, `descricao`, `imagem`, `preco`) VALUES
(4, 'Fortnite', 'pc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo1.png', 'R$ 39.90'),
(5, 'Resident Evil 4', 'pc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo2.png', 'R$ 119.90'),
(6, 'GTA V', 'Xbox', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo3.png', 'R$ 59.90'),
(7, 'Undertale', 'PlayStation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo4.png', 'R$ 39.90'),
(8, 'The sims 4', 'pc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo5.png', 'R$ 49.90'),
(9, 'Grounded', 'pc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo6.png', 'R$ 109.90'),
(10, 'Poly Bridge', 'Switch', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo7.png', 'R$ 49.90'),
(11, 'Simcity', 'PlayStation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius in massa vel varius.', 'jogo8.png', 'R$ 74.90');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES
('a', 'a@a', '$2y$10$ySP3OCEMF4itzFTo1avozetC0JzywgDI9lZ/3oqNBTdWJuI0raazG'),
('b', 'b@b', '$2y$10$DL7TLaaYgDjn4FX8uDhp6Os6RDTaCAZWebWNmsPyCTcAnbUfSpEIu');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
