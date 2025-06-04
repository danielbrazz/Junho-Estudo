-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2025 às 19:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controllerlist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `listinventory`
--

CREATE TABLE `listinventory` (
  `id` int(11) NOT NULL,
  `Item` varchar(40) DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `Valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `listinventory`
--

INSERT INTO `listinventory` (`id`, `Item`, `Quantidade`, `Valor`) VALUES
(1, 'Monitor á 24', 10, 850),
(2, 'Teclado USB', 25, 70),
(3, 'Mouse', 30, 45),
(4, 'Notebook Dell', 5, 3200),
(5, 'Cadeira ', 8, 950),
(6, 'Mesa ', 6, 650),
(7, 'Roteador Wi-Fi', 12, 180),
(8, 'Headset com microfone', 15, 120),
(9, 'HD Externo 1TB', 7, 400),
(10, 'Estabilizador', 10, 250);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `listinventory`
--
ALTER TABLE `listinventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `listinventory`
--
ALTER TABLE `listinventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
