-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/02/2021 às 01:05
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_feira_em_casa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `us_id` int(100) NOT NULL,
  `us_nome` varchar(50) NOT NULL,
  `us_sobrenome` varchar(50) NOT NULL,
  `us_idade` int(3) NOT NULL,
  `us_telefone` varchar(13) NOT NULL,
  `us_cep` varchar(9) NOT NULL,
  `us_email` varchar(100) NOT NULL,
  `us_senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`us_id`, `us_nome`, `us_sobrenome`, `us_idade`, `us_telefone`, `us_cep`, `us_email`, `us_senha`) VALUES
(2, 'Eduardo', 'Maques', 17, '2147483647', '54240-030', 'edu@gmail.com', 'dudu18'),
(3, 'teste', '1', 18, '2147483647', '54250-018', 'teste1@gmail.com', 'teste1'),
(4, 'teste', '2', 24, '(81)985624197', '55360-024', 'teste2@gmail.com', 'teste2'),
(5, 'teste', '3', 55, '(81)940028922', '54240-030', 'teste3@gmail.com', 'teste3'),
(29, 'teste', '4', 4, '(81)940028932', '54240-141', 'teste4@gmail.com', 'teste4'),
(39, 'teste', 'email', 78, '(81)940028936', '54240-041', 'testeemail@gmail.com', 'testee'),
(40, 'teste', '5', 5, '(81)940028555', '54240-555', 'teste5@gmail.com', 'teste5'),
(41, 'teste', '6', 6, '(81)940028926', '54240-046', 'teste6@gmail.com', 'teste6'),
(42, 'teste', '7', 7, '(81)940028932', '54240-030', 'teste7@gmail.com', 'teste7'),
(43, 'teste', 'final', 18, '(81)940028925', '54240-048', 'testef@gmail.com', 'testef'),
(44, 'isabella ', 'larissa', 16, '(81)984853650', '54240-030', 'isabella.marinho1928@gmail.com', 'amodud');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `us_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
