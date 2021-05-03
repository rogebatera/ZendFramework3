-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Maio-2021 às 04:02
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `flieger`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_paciente`
--

CREATE TABLE `contato_paciente` (
  `id` int(11) NOT NULL,
  `nome_contato` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `paciente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato_paciente`
--

INSERT INTO `contato_paciente` (`id`, `nome_contato`, `telefone`, `paciente_id`) VALUES
(1, 'Dayane', '(41) 98949-0909', 1),
(2, 'Maria Eduarda', '(41) 98765-4109', 1),
(3, 'Jose', '(41) 98888-0909', 2),
(4, 'Lucas', '(41) 98877-0909', 2),
(5, 'Carlos', '(41) 99907-0809', 2),
(6, 'Mirella', '(31) 988920-0909', 3),
(7, 'Carolina', '(21) 98765-4109', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `sobrenome`) VALUES
(1, 'Rogerio', 'Lucio'),
(2, 'Tarcisio', 'Almeida'),
(3, 'Joao', 'Silva');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato_paciente`
--
ALTER TABLE `contato_paciente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato_paciente`
--
ALTER TABLE `contato_paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
