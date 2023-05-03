-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Abr-2023 às 19:44
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estacionamento`
CREATE DATABASE estacionamento;
USE estacionamento;
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessoadm`
--

CREATE TABLE `acessoadm` (
  `id` int(30) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessoadm`
--

INSERT INTO `acessoadm` (`id`, `usuario`, `senha`) VALUES
(1, 'edgarda', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessofun`
--

CREATE TABLE `acessofun` (
  `id` int(20) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessofun`
--

INSERT INTO `acessofun` (`id`, `usuario`, `senha`) VALUES
(1, 'edgard', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'edgardd', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(200) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `dataa` date NOT NULL,
  `entrada` time NOT NULL,
  `vaga` int(200) NOT NULL,
  `saida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `placa`, `dataa`, `entrada`, `vaga`, `saida`) VALUES
(62, 'HSM3293', '0000-00-00', '12:00:00', 24, '14:42:20'),
(63, 'MEW7889', '0000-00-00', '12:00:00', 45, '14:42:22'),
(64, 'IKI0886', '0000-00-00', '14:00:00', 56, '14:42:24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessoadm`
--
ALTER TABLE `acessoadm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `acessofun`
--
ALTER TABLE `acessofun`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessoadm`
--
ALTER TABLE `acessoadm`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `acessofun`
--
ALTER TABLE `acessofun`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
