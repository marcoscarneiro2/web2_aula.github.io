-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2021 às 03:05
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
-- Banco de dados: `jobs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `ID_candidato` int(11) NOT NULL,
  `telefone` char(16) DEFAULT NULL,
  `celular` char(16) NOT NULL,
  `foto_perfil` varchar(50) DEFAULT NULL,
  `curriculo` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT 'solteiro',
  `filhos` varchar(25) DEFAULT 'Não tenho filhos',
  `escolaridade` varchar(25) NOT NULL,
  `nacionalidade` varchar(15) NOT NULL,
  `descricao_candidato` varchar(100) DEFAULT NULL,
  `cep` char(9) NOT NULL,
  `rua` varchar(15) NOT NULL,
  `bairro` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `github` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `nivel` int(11) DEFAULT 2,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `educacao`
--

CREATE TABLE `educacao` (
  `ID_educacao` int(11) NOT NULL,
  `escolaridade` varchar(20) NOT NULL,
  `idCandidato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `ID_empresa` int(11) NOT NULL,
  `telefone` char(16) NOT NULL,
  `descricao_empresa` varchar(100) NOT NULL,
  `categoria` varchar(16) NOT NULL,
  `imagem_empresa` varchar(30) DEFAULT NULL,
  `cep` char(9) NOT NULL,
  `rua` varchar(15) NOT NULL,
  `bairro` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `sobre` varchar(100) DEFAULT NULL,
  `nivel` int(11) DEFAULT 1,
  `idUsuario` int(11) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enviar_vaga`
--

CREATE TABLE `enviar_vaga` (
  `ID_enviarVaga` int(11) NOT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  `idCandidato` int(11) DEFAULT NULL,
  `idVaga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia`
--

CREATE TABLE `experiencia` (
  `ID_experiencia` int(11) NOT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `nome_empresa` varchar(50) DEFAULT NULL,
  `descVaga` varchar(100) DEFAULT NULL,
  `idCandidato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `nome`, `email`, `senha`) VALUES
(19, 'maeboard2', 'marcos@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `ID_vagas` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `escolaridade` varchar(20) NOT NULL,
  `tipo_contrato` varchar(20) NOT NULL,
  `exigencias` varchar(200) NOT NULL,
  `idEmpresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`ID_candidato`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `educacao`
--
ALTER TABLE `educacao`
  ADD PRIMARY KEY (`ID_educacao`),
  ADD KEY `idCandidato` (`idCandidato`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_empresa`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `enviar_vaga`
--
ALTER TABLE `enviar_vaga`
  ADD PRIMARY KEY (`ID_enviarVaga`),
  ADD KEY `idEmpresa` (`idEmpresa`),
  ADD KEY `idCandidato` (`idCandidato`),
  ADD KEY `idVaga` (`idVaga`);

--
-- Índices para tabela `experiencia`
--
ALTER TABLE `experiencia`
  ADD PRIMARY KEY (`ID_experiencia`),
  ADD KEY `idCandidato` (`idCandidato`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`ID_vagas`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `ID_candidato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `educacao`
--
ALTER TABLE `educacao`
  MODIFY `ID_educacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `enviar_vaga`
--
ALTER TABLE `enviar_vaga`
  MODIFY `ID_enviarVaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `experiencia`
--
ALTER TABLE `experiencia`
  MODIFY `ID_experiencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `ID_vagas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`ID_usuario`);

--
-- Limitadores para a tabela `educacao`
--
ALTER TABLE `educacao`
  ADD CONSTRAINT `educacao_ibfk_1` FOREIGN KEY (`idCandidato`) REFERENCES `candidato` (`ID_candidato`);

--
-- Limitadores para a tabela `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`ID_usuario`);

--
-- Limitadores para a tabela `enviar_vaga`
--
ALTER TABLE `enviar_vaga`
  ADD CONSTRAINT `enviar_vaga_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`ID_empresa`),
  ADD CONSTRAINT `enviar_vaga_ibfk_2` FOREIGN KEY (`idCandidato`) REFERENCES `candidato` (`ID_candidato`),
  ADD CONSTRAINT `enviar_vaga_ibfk_3` FOREIGN KEY (`idVaga`) REFERENCES `vagas` (`ID_vagas`);

--
-- Limitadores para a tabela `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `experiencia_ibfk_1` FOREIGN KEY (`idCandidato`) REFERENCES `candidato` (`ID_candidato`);

--
-- Limitadores para a tabela `vagas`
--
ALTER TABLE `vagas`
  ADD CONSTRAINT `vagas_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`ID_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
