-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2019 às 07:14
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caoemequilibrio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `creche`
--

CREATE TABLE `creche` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `observacoes` text NOT NULL,
  `id_pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `creche`
--

INSERT INTO `creche` (`id`, `data`, `observacoes`, `id_pet`) VALUES
(1, '2019-06-18 00:00:00', '1111111111111111111111111111111111111111111111111111111111111111111', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospedagem`
--

CREATE TABLE `hospedagem` (
  `id` int(11) NOT NULL,
  `entrada` date NOT NULL,
  `saida` date NOT NULL,
  `valor_diaria` double NOT NULL,
  `observacoes` text NOT NULL,
  `id_pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hospedagem`
--

INSERT INTO `hospedagem` (`id`, `entrada`, `saida`, `valor_diaria`, `observacoes`, `id_pet`) VALUES
(3, '0000-00-00', '0000-00-00', 25, '1212', 5),
(4, '0000-00-00', '0000-00-00', 255, '1212', 5),
(5, '0000-00-00', '0000-00-00', 255, '1212', 10),
(6, '0000-00-00', '0000-00-00', 25, '1212', 9),
(7, '0000-00-00', '0000-00-00', 25, '1212', 10),
(8, '0000-00-00', '0000-00-00', 25, '1212', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `raca` varchar(100) NOT NULL,
  `peso` double NOT NULL,
  `foto` varchar(200) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`id`, `nome`, `raca`, `peso`, `foto`, `ativo`) VALUES
(1, 'Floquinho', '1', 1, 'img/travel.png', 0),
(2, '12', '111', 11111, 'img/IMG_20170114_155149851_BURST001.jpg', 0),
(3, '222222222', '22222222222', 2222222222, 'img/1.JPG', 1),
(4, '11', '1', 1, 'img/', 0),
(5, '11', '1', 1, 'img/_DSC0018.JPG', 1),
(6, '11', '1', 1, 'img/_DSC0011.JPG', 1),
(7, '11234', '1', 1, 'img/', 0),
(8, '133333', '23', 2222, 'img/_DSC0027.JPG', 1),
(9, 'cao 6', '1', 1, 'img/', 1),
(10, 'Amanda', '1212', 2222, 'img/1.JPG', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `descricao`, `ativo`) VALUES
(1, 'Administrador 2', 1),
(3, 'teste 2', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tutor`
--

INSERT INTO `tutor` (`id`, `cpf`, `nome`, `telefone`, `endereco`, `instagram`, `facebook`, `ativo`) VALUES
(1, '02666687120', 'Amanda1', '67981646461', 'r. Jorge Pedro Bedoglim,285,Mata do Jacinto', '@100perspectiva', 'amandex', '1'),
(2, '222222', 'Thainara', '111111111111', '121212', 'insta', 'facebook', '0'),
(3, '3333333333', 'nome', 'tel', 'end', 'inst', 'fb', '0'),
(4, '1123', '1', '1', '1', '1', '1', '1'),
(5, '21111111', '2', '2', '2', '2', '2', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tutor_pet`
--

CREATE TABLE `tutor_pet` (
  `id` int(11) NOT NULL,
  `id_tutor` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tutor_pet`
--

INSERT INTO `tutor_pet` (`id`, `id_tutor`, `id_pet`) VALUES
(1, 4, 1),
(2, 1, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`, `id_tipo_usuario`, `ativo`) VALUES
(1, 'Amanda', '123', 'amanda.nrodrigues@hotmail.com', 1, '1'),
(2, '1', '1', '1', 3, '0'),
(3, '2334', '2', '2', 3, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creche`
--
ALTER TABLE `creche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pet_fk` (`id_pet`);

--
-- Indexes for table `hospedagem`
--
ALTER TABLE `hospedagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `tutor_pet`
--
ALTER TABLE `tutor_pet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tutor_fk` (`id_tutor`),
  ADD KEY `id_pet_fk` (`id_pet`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_usuario_fk` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creche`
--
ALTER TABLE `creche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospedagem`
--
ALTER TABLE `hospedagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tutor_pet`
--
ALTER TABLE `tutor_pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `creche`
--
ALTER TABLE `creche`
  ADD CONSTRAINT `id_pet_fkey` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tutor_pet`
--
ALTER TABLE `tutor_pet`
  ADD CONSTRAINT `id_pet_fk` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tutor_fk` FOREIGN KEY (`id_tutor`) REFERENCES `tutor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `id_tipo_usuario_fk` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
