-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Out-2022 às 17:41
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techcompany`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
)

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`) VALUES
(1, 'Giovane M.'),
(2, 'Felipe'),
(7, 'João Vitor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dispositivo`
--

CREATE TABLE `dispositivo` (
  `id` int(11) NOT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `armazenamento` varchar(8) DEFAULT NULL,
  `ram` varchar(8) DEFAULT NULL,
  `processador` varchar(10) DEFAULT NULL,
  `placamae` varchar(8) DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL
)

--
-- Extraindo dados da tabela `dispositivo`
--

INSERT INTO `dispositivo` (`id`, `modelo`, `armazenamento`, `ram`, `processador`, `placamae`, `idcliente`) VALUES
(2, 'Positivo Teste 1', 'SSD', '2GB', 'Intel', 'LGA', 1),
(3, '', 'SSD', '2GB', 'Intel', 'LGA', 1),
(4, 'Positivio Motio Q232A', 'SSD', '2GB', 'Intel', 'LGA', 1),
(5, 'PC Ryzen 5', 'SSD', '16GB', '', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemserv`
--

CREATE TABLE `ordemserv` (
  `id` int(11) NOT NULL,
  `cliente_idcliente` int(11) DEFAULT NULL,
  `dispositivo` int(11) DEFAULT NULL,
  `servico` varchar(40) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL
)

--
-- Extraindo dados da tabela `ordemserv`
--

INSERT INTO `ordemserv` (`id`, `cliente_idcliente`, `dispositivo`, `servico`, `descricao`) VALUES
(1, 1, 4, 'Manutenção/Limpeza', ''),
(2, 1, 4, 'Manutenção/Limpeza', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Índices para tabela `ordemserv`
--
ALTER TABLE `ordemserv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_idcliente` (`cliente_idcliente`),
  ADD KEY `dispositivo` (`dispositivo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `dispositivo`
--
ALTER TABLE `dispositivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `ordemserv`
--
ALTER TABLE `ordemserv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `dispositivo_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`id`);

--
-- Limitadores para a tabela `ordemserv`
--
ALTER TABLE `ordemserv`
  ADD CONSTRAINT `ordemserv_ibfk_1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `ordemserv_ibfk_2` FOREIGN KEY (`dispositivo`) REFERENCES `dispositivo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
