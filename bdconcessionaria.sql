-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2022 às 19:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdconcessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nomeCategoria`) VALUES
(2, 'babaloo'),
(3, 'babaloo'),
(4, 'queijo'),
(5, 'caranguejo'),
(6, 'fotos'),
(7, 'Mousse'),
(8, 'Pitanga'),
(9, 'Filé'),
(10, 'Computador'),
(11, 'bd'),
(12, 'batatinha'),
(13, 'dsds');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(50) DEFAULT NULL,
  `cpfCliente` char(14) DEFAULT NULL,
  `emailCliente` varchar(80) DEFAULT NULL,
  `senhaCliente` char(14) DEFAULT NULL,
  `logradouroCliente` varchar(25) DEFAULT NULL,
  `numLogCliente` int(11) DEFAULT NULL,
  `compCliente` varchar(20) DEFAULT NULL,
  `bairroCliente` varchar(50) DEFAULT NULL,
  `cidadeCliente` varchar(50) DEFAULT NULL,
  `ufCliente` char(2) DEFAULT NULL,
  `cepCliente` char(8) DEFAULT NULL,
  `telefonecliente` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `cpfCliente`, `emailCliente`, `senhaCliente`, `logradouroCliente`, `numLogCliente`, `compCliente`, `bairroCliente`, `cidadeCliente`, `ufCliente`, `cepCliente`, `telefonecliente`) VALUES
(3, 'ds', '44644464646', 'moisesvincetevbn@gmail.com', '26165165165', 'Rua Doutor Orlando de Pai', 70, 'casa', 'Vila Princesa Isabel', 'São Paulo', 'SP', '08410330', '11 95551-5515');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `idItemVenda` int(11) NOT NULL,
  `qtdeItemVenda` int(11) DEFAULT NULL,
  `subTotalItemVenda` double DEFAULT NULL,
  `idVenda` int(11) NOT NULL,
  `idVeiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmarcaveiculo`
--

CREATE TABLE `tbmarcaveiculo` (
  `idMarcaVeiculo` int(11) NOT NULL,
  `nomeMarcaVeiculo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbveiculo`
--

CREATE TABLE `tbveiculo` (
  `idVeiculo` int(11) NOT NULL,
  `descricaoVeiculo` varchar(50) DEFAULT NULL,
  `precoVeiculo` double DEFAULT NULL,
  `anoVeiculo` char(4) DEFAULT NULL,
  `idCategoria` int(11) NOT NULL,
  `idMarcaVeiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `idVenda` int(11) NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `valorTotalVenda` double DEFAULT NULL,
  `statusVenda` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD PRIMARY KEY (`idItemVenda`),
  ADD KEY `idVenda` (`idVenda`),
  ADD KEY `idVeiculo` (`idVeiculo`);

--
-- Índices para tabela `tbmarcaveiculo`
--
ALTER TABLE `tbmarcaveiculo`
  ADD PRIMARY KEY (`idMarcaVeiculo`);

--
-- Índices para tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  ADD PRIMARY KEY (`idVeiculo`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idMarcaVeiculo` (`idMarcaVeiculo`);

--
-- Índices para tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `idItemVenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmarcaveiculo`
--
ALTER TABLE `tbmarcaveiculo`
  MODIFY `idMarcaVeiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  MODIFY `idVeiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD CONSTRAINT `tbitemvenda_ibfk_1` FOREIGN KEY (`idVenda`) REFERENCES `tbvenda` (`idVenda`),
  ADD CONSTRAINT `tbitemvenda_ibfk_2` FOREIGN KEY (`idVeiculo`) REFERENCES `tbveiculo` (`idVeiculo`);

--
-- Limitadores para a tabela `tbveiculo`
--
ALTER TABLE `tbveiculo`
  ADD CONSTRAINT `tbveiculo_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`),
  ADD CONSTRAINT `tbveiculo_ibfk_2` FOREIGN KEY (`idMarcaVeiculo`) REFERENCES `tbmarcaveiculo` (`idMarcaVeiculo`);

--
-- Limitadores para a tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD CONSTRAINT `tbvenda_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
