-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2017 às 07:57
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_02`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(55) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `logradouro` varchar(55) DEFAULT NULL,
  `numero` varchar(55) DEFAULT NULL,
  `bairro` varchar(55) DEFAULT NULL,
  `cidade` varchar(55) DEFAULT NULL,
  `estado` varchar(55) DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL,
  `cep` varchar(55) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `data_nascimento`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `data_criacao`, `cep`) VALUES
(29, 'Aluno 02', '2017-08-18', 'Praça da Sé', '9543332232', 'Sé', 'São Paulo', 'SP', '2017-08-17 07:47:13', '01001000'),
(28, 'Aluno 01', '2017-08-15', 'Praça da Sé', '9288833322', 'Sé', 'São Paulo', 'SP', '2017-08-17 07:46:43', '01001000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `data_criacao` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome`, `data_criacao`) VALUES
(6, 'Algebra Linear', '2017-08-17 04:44:12'),
(2, 'Ciencia da Computacao', NULL),
(7, 'Fisica Quantica', '2017-08-17 04:44:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id_notas` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `nota2` double DEFAULT NULL,
  `nota1` double DEFAULT NULL,
  `nota3` double DEFAULT NULL,
  `nota4` double DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`id_notas`, `id_professor`, `id_curso`, `id_aluno`, `nota2`, `nota1`, `nota3`, `nota4`, `data_criacao`) VALUES
(14, 21, 2, 28, 12, 10, 12, 12, '2017-08-17 07:49:58'),
(13, 20, 6, 28, 8, 10, 6, 7, '2017-08-17 07:48:39'),
(15, 21, 7, 29, 8, 6, 10, 5, '2017-08-17 07:50:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `data_criacao` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `id_curso`, `nome`, `data_nascimento`, `data_criacao`) VALUES
(20, 2, 'Professor 01', '2017-08-18', '2017-08-17 05:30:33'),
(21, 6, 'Professor 02', '2017-08-18', '2017-08-17 07:19:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_notas`,`id_professor`,`id_curso`,`id_aluno`),
  ADD KEY `professor_notas_fk` (`id_professor`,`id_curso`),
  ADD KEY `aluno_notas_fk` (`id_aluno`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`,`id_curso`),
  ADD KEY `curso_professor_fk` (`id_curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
