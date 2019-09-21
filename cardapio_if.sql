-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Set-2019 às 23:44
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardapio_if`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `idCardapio` int(11) NOT NULL,
  `idNutricionista` int(11) NOT NULL,
  `tipoCardapio` int(11) DEFAULT NULL,
  `principalCardapio` varchar(150) DEFAULT NULL,
  `guarnicaoCardapio` varchar(150) DEFAULT NULL,
  `acompanhamentoCardapio` varchar(45) DEFAULT NULL,
  `salada1Cardapio` varchar(100) DEFAULT NULL,
  `salada2Cardapio` varchar(100) DEFAULT NULL,
  `sobremesaCardapio` varchar(100) DEFAULT NULL,
  `bebidaCardapio` varchar(50) DEFAULT NULL,
  `dataCardapio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`idCardapio`, `idNutricionista`, `tipoCardapio`, `principalCardapio`, `guarnicaoCardapio`, `acompanhamentoCardapio`, `salada1Cardapio`, `salada2Cardapio`, `sobremesaCardapio`, `bebidaCardapio`, `dataCardapio`) VALUES
(255, 1, 0, 'das', '', '', '', NULL, '', '', '2019-09-11'),
(257, 1, 0, 'd', '', '', '', NULL, '', '', '2019-09-13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nutricionista`
--

CREATE TABLE `nutricionista` (
  `idNutricionista` int(11) NOT NULL,
  `emailNutricionista` varchar(100) NOT NULL,
  `senhaNutricionista` text NOT NULL,
  `ultimoLoginNutricionista` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nutricionista`
--

INSERT INTO `nutricionista` (`idNutricionista`, `emailNutricionista`, `senhaNutricionista`, `ultimoLoginNutricionista`) VALUES
(1, 'teste@teste.com', 'teste', 'teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`idCardapio`),
  ADD KEY `idNutricionistax_idx` (`idNutricionista`);

--
-- Indexes for table `nutricionista`
--
ALTER TABLE `nutricionista`
  ADD PRIMARY KEY (`idNutricionista`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `idCardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `nutricionista`
--
ALTER TABLE `nutricionista`
  MODIFY `idNutricionista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD CONSTRAINT `idNutricionistax` FOREIGN KEY (`idNutricionista`) REFERENCES `nutricionista` (`idNutricionista`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
