-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/02/2021 às 02:00
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
-- Estrutura para tabela `busca`
--

CREATE TABLE `busca` (
  `bu_id` int(11) NOT NULL,
  `bu_nome` varchar(500) NOT NULL,
  `bu_categoria` varchar(500) NOT NULL,
  `bu_pag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `busca`
--

INSERT INTO `busca` (`bu_id`, `bu_nome`, `bu_categoria`, `bu_pag`) VALUES
(5, 'abobrinha', 'produto', 'abobrinha.php'),
(6, 'alface lisa', 'produto', 'alface.php'),
(7, 'banana maçã', 'produto', 'banana.php'),
(8, 'batata doce', 'produto', 'batata.php'),
(9, 'cará são tomé', 'produto', 'cara.php'),
(10, 'cebola', 'produto', 'cebola.php'),
(11, 'chuchu', 'produto', 'chuchu.php'),
(12, 'coentro', 'produto', 'coentro.php'),
(13, 'couve-flor', 'produto', 'couve.php'),
(14, 'folhagens', 'tipo', 'folhagens.php'),
(15, 'frutas', 'tipo', 'frutas.php'),
(16, 'hortelã', 'produto', 'hortela.php'),
(17, 'inhame', 'produto', 'inhame.php'),
(18, 'laranja bahia', 'produto', 'laranja.php'),
(19, 'maçã gala', 'produto', 'maca.php'),
(20, 'macaxeira', 'produto', 'macaxeira.php'),
(21, 'mandioquinha', 'produto', 'mandioquinha.php'),
(22, 'melancia', 'produto', 'melancia.php'),
(23, 'pepino japonês', 'produto', 'pepiho.php'),
(24, 'raízes / tubérculos', 'produto', 'raizes.php'),
(25, 'repolho', 'produto', 'repolho.php'),
(26, 'tomate cereja', 'produto', 'tomate.php'),
(27, 'uva roxa', 'produto', 'uva.php'),
(28, 'verduras / legumes', 'produto', 'verduras.php'),
(29, 'carrinho', 'página', 'carrinho.php'),
(30, 'pedidos', 'página', 'pedidos.php'),
(31, 'login', 'página', 'login.php'),
(32, 'cadastro', 'página', 'cadastro.php'),

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `ce_ca_id` int(100) NOT NULL,
  `ca_produto` varchar(100) NOT NULL,
  `ca_quantidade` int(3) NOT NULL,
  `ca_valor` varchar(5) NOT NULL,
  `ca_valor_pg` varchar(5) NOT NULL,
  `ca_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`ce_ca_id`, `ca_produto`, `ca_quantidade`, `ca_valor`, `ca_valor_pg`, `ca_data`) VALUES
(2, 'Coentro', 4, '2.40', '9.6', '2020-01-18 00:00:00'),
(2, 'Mandioquinha', 2, '19.99', '39.98', '2021-02-11 00:00:00'),
(2, 'Inhame', 1, '9.50', '9.5', '2021-02-11 00:00:00'),
(2, 'Uva Roxa', 3, '8.50', '25.5', '2021-02-11 00:00:00'),
(2, 'Cebola', 5, '3.25', '16.25', '2021-02-11 00:00:00'),
(2, 'Chuchu', 10, '1.50', '15', '2021-02-11 00:00:00'),
(2, 'Uva Roxa', 5, '8.50', '42.5', '2021-02-13 00:00:00'),
(2, 'Uva Roxa', 5, '8.50', '42.5', '2021-02-13 00:00:00'),
(2, 'Banana Maçã', 5, '0.25', '1.25', '2021-02-13 00:00:00'),
(3, 'Melancia', 3, '7.00', '21', '2021-02-14 00:00:00'),
(2, 'Cebola', 4, '3.25', '13', '2021-02-14 00:00:00'),
(2, 'Uva Roxa', 5, '8.50', '42.5', '2021-02-13 23:26:18'),
(2, 'Maçã Gala', 4, '0.80', '3.2', '2021-02-14 00:00:00'),
(2, 'Mandioquinha', 4, '19.99', '79.96', '2021-02-14 00:00:00'),
(2, 'Melancia', 5, '7.00', '35', '2021-02-14 00:00:00'),
(2, 'Abobrinha', 4, '4.80', '19.2', '0000-00-00 00:00:00'),
(2, 'Laranja Bahia', 2, '0.50', '1', '0000-00-00 00:00:00'),
(2, 'Cebola', 4, '3.25', '13', '2021-02-14 00:00:00'),
(2, 'Inhame', 2, '9.50', '19', '2021-02-14 00:00:00'),
(2, 'Banana Maçã', 1, '0.25', '0.25', '2014-02-21 00:00:00'),
(2, 'Laranja Bahia', 3, '0.50', '1.5', '0000-00-00 00:00:00'),
(2, 'Banana Maçã', 3, '0.25', '0.75', '2021-02-14 00:00:00'),
(2, 'Abobrinha', 3, '4.80', '14.4', '0000-00-00 00:00:00'),
(2, 'Cará São Tomé', 3, '4.29', '12.87', '0000-00-00 00:00:00'),
(2, 'Macaxeira', 3, '3.10', '9.3', '2021-02-14 00:00:00'),
(2, 'Coentro', 3, '2.40', '7.2', '2021-02-14 00:00:00'),
(2, 'Coentro', 5, '2.40', '12', '0000-00-00 00:00:00'),
(2, 'Abobrinha', 3, '4.80', '14.4', '2021-02-14 05:01:18'),
(2, 'Batata Doce', 3, '3.59', '10.77', '2021-02-14 05:02:06'),
(2, 'Banana Maçã', 3, '0.25', '0.75', '2021-02-14 05:02:06'),
(2, 'Coentro', 4, '2.40', '9.6', '2021-02-14 16:47:42'),
(2, 'Cebola', 7, '3.25', '22.75', '2021-02-14 16:59:33'),
(2, 'Cebola', 3, '3.25', '9.75', '2021-02-14 17:27:29'),
(2, 'Cebola', 3, '3.25', '9.75', '2021-02-14 17:29:51'),
(2, 'Cebola', 5, '3.25', '16.25', '2021-02-14 17:54:01'),
(54, 'Coentro', 4, '2.40', '9.6', '2021-02-14 18:01:29'),
(54, 'Batata Doce', 4, '3.59', '14.36', '2021-02-14 18:01:29'),
(2, 'Cebola', 1, '3.25', '3.25', '2021-02-14 18:44:52'),
(4, 'Tomate Cereja', 5, '20.99', '104.9', '2021-02-14 21:56:23'),
(4, 'Laranja Bahia', 200, '0.50', '100', '2021-02-14 21:56:23'),
(4, 'Uva Roxa', 5, '8.50', '42.5', '2021-02-14 21:56:23'),
(4, 'Mandioquinha', 5, '19.99', '99.95', '2021-02-14 21:56:23'),
(4, 'Couve-Flor', 6, '10.99', '65.94', '2021-02-14 21:56:23'),
(4, 'Banana Maçã', 5, '0.25', '1.25', '2021-02-15 00:39:23'),
(4, 'Batata Doce', 6, '3.59', '21.54', '2021-02-15 00:39:23'),
(54, 'Banana Maçã', 10, '0.25', '2.5', '2021-02-15 22:12:51'),
(54, 'Abobrinha', 2, '4.80', '9.6', '2021-02-15 22:12:51'),
(54, 'Alface Lisa', 8, '2.59', '20.72', '2021-02-15 22:12:51'),
(54, 'Batata Doce', 5, '3.59', '17.95', '2021-02-15 22:12:51'),
(54, 'Cará São Tomé', 3, '4.29', '12.87', '2021-02-15 22:12:51'),
(54, 'Cebola', 3, '3.25', '9.75', '2021-02-15 22:12:51'),
(54, 'Chuchu', 8, '1.50', '12', '2021-02-15 22:12:51'),
(54, 'Coentro', 5, '2.40', '12', '2021-02-15 22:12:51'),
(54, 'Couve-Flor', 2, '10.99', '21.98', '2021-02-15 22:12:51'),
(54, 'Hortelã', 4, '3.50', '14', '2021-02-15 22:12:51'),
(54, 'Inhame', 3, '9.50', '28.5', '2021-02-15 22:12:51'),
(54, 'Laranja Bahia', 15, '0.50', '7.5', '2021-02-15 22:12:51'),
(54, 'Maçã Gala', 5, '0.80', '4', '2021-02-15 22:12:51'),
(54, 'Macaxeira', 3, '3.10', '9.3', '2021-02-15 22:12:51'),
(54, 'Mandioquinha', 1, '19.99', '19.99', '2021-02-15 22:12:51'),
(54, 'Melancia', 1, '7.00', '7', '2021-02-15 22:12:51'),
(54, 'Pepino Japonês', 3, '2.20', '6.6', '2021-02-15 22:12:51'),
(54, 'Repolho', 2, '6.50', '13', '2021-02-15 22:12:51'),
(54, 'Tomate Cereja', 1, '20.99', '20.99', '2021-02-15 22:12:51'),
(54, 'Uva Roxa', 2, '8.50', '17', '2021-02-15 22:12:51'),
(5, 'Inhame', 2, '9.50', '19', '2021-02-15 23:52:20'),
(5, 'Batata Doce', 18, '3.59', '64.62', '2021-02-15 23:52:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `ce_da_id` int(11) NOT NULL,
  `da_nome` varchar(500) NOT NULL,
  `da_email` varchar(500) NOT NULL,
  `da_rua` varchar(500) NOT NULL,
  `da_bairro` varchar(500) NOT NULL,
  `da_cidade` varchar(500) NOT NULL,
  `da_uf` varchar(2) NOT NULL,
  `da_casa` int(100) NOT NULL,
  `da_complemento` varchar(500) NOT NULL,
  `da_pagamento` varchar(100) NOT NULL,
  `da_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `dados`
--

INSERT INTO `dados` (`ce_da_id`, `da_nome`, `da_email`, `da_rua`, `da_bairro`, `da_cidade`, `da_uf`, `da_casa`, `da_complemento`, `da_pagamento`, `da_data`) VALUES
(2, 'Marcela', 'marcelasantinhos349@gmai.com', 'Rua Quatro', 'Curado', 'Jaboatão dos Guararapes', 'PE', 75, 'd', 'Débito', '2021-02-14 17:54:22'),
(2, 'Eduardo Marques', 'e.marques180303@gmail.com', 'Rua Quatro', 'Curado', 'Jaboatão dos Guararapes', 'PE', 75, 'c', 'Dinheiro', '2021-02-14 17:54:22'),
(54, 'dudu', 'edu@gmail.com', 'Rua Rosendo Adriano', 'Cavaleiro', 'Jaboatão dos Guararapes', 'PE', 18, 'e', 'Crédito', '2021-02-14 18:01:58'),
(2, 'dudu', 'e.marques180303@gmail.com', 'Rua Cinco', 'Curado', 'Jaboatão dos Guararapes', 'PE', 75, 'l', 'Crédito', '2021-02-14 18:45:22'),
(4, 'teste2', 'teste2@gmail.com', 'Rua Dois', 'Curado', 'Jaboatão dos Guararapes', 'PE', 120, 'Apartamento 8', 'Débito', '2021-02-14 21:58:30'),
(4, 'teste2', 'teste2@gmail.com', 'Rua Cinco', 'Curado', 'Jaboatão dos Guararapes', 'PE', 46, 'a', 'Dinheiro', '2021-02-15 00:39:58'),
(54, 'Agora Vai', 'agora.vai@gmail.com', 'Rua Três', 'Zumbi do Pacheco', 'Jaboatão dos Guararapes', 'PE', 45, 'Apartamento 128', 'Débito', '2021-02-15 22:14:15');

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
(44, 'isabella ', 'larissa', 16, '(81)984853650', '54240-030', 'isabella.marinho1928@gmail.com', 'amodud'),
(45, 'Romário', 'Marques', 41, '(81)940028933', '54240-030', 'romario@gmail.com', 'Roma12'),
(46, 'teste', '8', 8, '(81)940028922', '54240-141', 'teste8@gmail.com', 'teste8'),
(47, 'teste', '9', 9, '(81)940028933', '54240-040', 'teste9@gmail.com', 'teste9'),
(48, 'teste', 'car', 4, '(81)940028932', '54240-048', 'teste@gmail.com', 'teste'),
(49, 'Eduardo ', 'Marques', 17, '(81)985624197', '54240-040', 'e.marques180303@gmail.com', 'Em18'),
(50, 'teste', '11', 11, '(81)940028929', '54240-038', 'teste11@gmail.com', '111111'),
(51, 'teste', '12', 12, '(81)940028925', '54240-038', 'teste12@gmail.com', '121212'),
(52, 'teste', '13', 13, '(81)940028928', '54240-141', 'teste13@gmail.com', '131313'),
(53, 'teste', '14', 14, '(81)940028933', '54240-031', 'teste14@gmail.com', '141414'),
(54, 'Agora', 'Vai', 185, '(81)940028928', '54240-048', 'agora.vai@gmail.com', 'agrvai');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `busca`
--
ALTER TABLE `busca`
  ADD PRIMARY KEY (`bu_id`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD KEY `ce_ca_id` (`ce_ca_id`);

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD KEY `ce_da_id` (`ce_da_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `busca`
--
ALTER TABLE `busca`
  MODIFY `bu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `us_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `ce_ca_id` FOREIGN KEY (`ce_ca_id`) REFERENCES `usuarios` (`us_id`);

--
-- Restrições para tabelas `dados`
--
ALTER TABLE `dados`
  ADD CONSTRAINT `ce_da_id` FOREIGN KEY (`ce_da_id`) REFERENCES `usuarios` (`us_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
