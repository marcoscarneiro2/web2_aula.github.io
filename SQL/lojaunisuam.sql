-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2021 às 23:46
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaunisuam`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`) VALUES
(9, 'novo teste', 'marcos@gmail.com', '$2y$10$.JncNh1alAwKLfqa1919LePM4v/k95D5nhbxfiSB7oB7Dzeh4kSaC'),
(11, 'marcos paulo', 'marcos@gmail.com', '$2y$10$6pqAH88iG3m2dcUBTZ5uYuNdUYZIkcHRHMz5vPV9zGVLBWEmGFFUy'),
(13, 'marcos', 'marcosunisuam@gmail.com', '$2y$10$gjth1s.Xqve3nZlueNLsFuHFcgJQuF8EnC2STBenGEXre3hrPfzvu'),
(14, 'pedro', 'pedro@x.com', '$2y$10$a7y83VB/WOpRiwSj.hTzHuAbgojcjLARUgEEJ9d0zkk.TuDMhhlna'),
(15, 'novo cadastro', 'novocadastro@gmail.com', '$2y$10$Jq2XDXdwevsKnVKlDRmDnuLy0bwBgzHfh47pxYkRFmdtfQ9ItBRqm'),
(16, 'victor manuel', 'victor@gmail.com', '$2y$10$IBJ5c6m19JHLoie/c53qzuG8jq0BgGfiP9wEjMP7Lk8G1A/PDaYzu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `nome_da_vaga` varchar(50) NOT NULL,
  `nome_da_empresa` varchar(50) NOT NULL,
  `descricao_vaga` varchar(255) NOT NULL,
  `salario` float(7,2) NOT NULL,
  `status` char(15) DEFAULT 'Aberto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `nome_da_vaga`, `nome_da_empresa`, `descricao_vaga`, `salario`, `status`) VALUES
(1, 'Estagiario full-stack', 'coca-cola', 'Estagiar como desenvolvedor', 800.00, 'Aberto'),
(2, 'Técnico de Ti', 'VagasTI', 'trabalhar na minha empresa como técnico de informática', 745.00, 'Aberto');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
