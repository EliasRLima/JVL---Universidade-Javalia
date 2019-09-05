-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Fev-2019 às 03:28
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jvl2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avatar`
--

CREATE TABLE `avatar` (
  `id_avatar` int(11) NOT NULL,
  `p_link` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avatar`
--

INSERT INTO `avatar` (`id_avatar`, `p_link`, `sexo`) VALUES
(1, 'images/avatar/masculino/m1.jpg', 'M'),
(2, 'images/avatar/masculino/m2.jpg', 'M'),
(3, 'images/avatar/masculino/m3.jpg', 'M'),
(4, 'images/avatar/masculino/m4.jpg', 'M'),
(5, 'images/avatar/masculino/m5.jpg', 'M'),
(6, 'images/avatar/masculino/m6.jpg', 'M'),
(7, 'images/avatar/masculino/m7.jpg', 'M'),
(8, 'images/avatar/masculino/m8.jpg', 'M'),
(9, 'images/avatar/masculino/m9.jpg', 'M'),
(10, 'images/avatar/masculino/m10.jpg', 'M'),
(11, 'images/avatar/masculino/m11.jpg', 'M'),
(12, 'images/avatar/masculino/m12.jpg', 'M'),
(13, 'images/avatar/masculino/m13.jpg', 'M'),
(14, 'images/avatar/masculino/m14.jpg', 'M'),
(15, 'images/avatar/masculino/m15.jpg', 'M'),
(16, 'images/avatar/masculino/m16.jpg', 'M'),
(17, 'images/avatar/masculino/m17.jpg', 'M'),
(18, 'images/avatar/masculino/m18.jpg', 'M'),
(19, 'images/avatar/masculino/m19.jpg', 'M'),
(20, 'images/avatar/masculino/m20.jpg', 'M'),
(21, 'images/avatar/masculino/m21.jpg', 'M'),
(22, 'images/avatar/masculino/m22.jpg', 'M'),
(23, 'images/avatar/masculino/m23.jpg', 'M'),
(24, 'images/avatar/masculino/m24.jpg', 'M'),
(25, 'images/avatar/masculino/m25.jpg', 'M'),
(26, 'images/avatar/masculino/m26.jpg', 'M'),
(27, 'images/avatar/masculino/m27.jpg', 'M'),
(28, 'images/avatar/masculino/m28.jpg', 'M'),
(29, 'images/avatar/masculino/m29.jpg', 'M'),
(30, 'images/avatar/masculino/m30.jpg', 'M'),
(60, 'images/avatar/feminino/f1.jpg', 'F'),
(61, 'images/avatar/feminino/f2.jpg', 'F'),
(62, 'images/avatar/feminino/f3.jpg', 'F'),
(63, 'images/avatar/feminino/f4.jpg', 'F'),
(64, 'images/avatar/feminino/f5.jpg', 'F'),
(65, 'images/avatar/feminino/f6.jpg', 'F'),
(66, 'images/avatar/feminino/f7.jpg', 'F'),
(67, 'images/avatar/feminino/f8.jpg', 'F'),
(68, 'images/avatar/feminino/f9.jpg', 'F'),
(69, 'images/avatar/feminino/f10.jpg', 'F'),
(70, 'images/avatar/feminino/f11.jpg', 'F'),
(71, 'images/avatar/feminino/f12.jpg', 'F'),
(72, 'images/avatar/feminino/f13.jpg', 'F'),
(73, 'images/avatar/feminino/f14.jpg', 'F'),
(74, 'images/avatar/feminino/f15.jpg', 'F'),
(75, 'images/avatar/feminino/f16.jpg', 'F'),
(76, 'images/avatar/feminino/f17.jpg', 'F'),
(77, 'images/avatar/feminino/f18.jpg', 'F'),
(78, 'images/avatar/feminino/f19.jpg', 'F'),
(79, 'images/avatar/feminino/f20.jpg', 'F'),
(80, 'images/avatar/feminino/f21.jpg', 'F'),
(81, 'images/avatar/feminino/f22.jpg', 'F'),
(82, 'images/avatar/feminino/f23.jpg', 'F'),
(83, 'images/avatar/feminino/f24.jpg', 'F'),
(84, 'images/avatar/feminino/f25.jpg', 'F'),
(85, 'images/avatar/feminino/f26.jpg', 'F'),
(86, 'images/avatar/feminino/f27.jpg', 'F'),
(87, 'images/avatar/feminino/f28.jpg', 'F'),
(88, 'images/avatar/feminino/f29.jpg', 'F'),
(89, 'images/avatar/admin.jpg', ''),
(90, 'images/avatar/anonimo.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `p_seg1` varchar(3) DEFAULT NULL,
  `p_seg2` varchar(3) DEFAULT NULL,
  `p_seg3` varchar(3) DEFAULT NULL,
  `p_ter1` varchar(3) DEFAULT NULL,
  `p_ter2` varchar(3) DEFAULT NULL,
  `p_ter3` varchar(3) DEFAULT NULL,
  `p_qua1` varchar(3) DEFAULT NULL,
  `p_qua2` varchar(3) DEFAULT NULL,
  `p_qua3` varchar(3) DEFAULT NULL,
  `p_qui1` varchar(3) DEFAULT NULL,
  `p_qui2` varchar(3) DEFAULT NULL,
  `p_qui3` varchar(3) DEFAULT NULL,
  `p_sex1` varchar(3) DEFAULT NULL,
  `p_sex2` varchar(3) DEFAULT NULL,
  `p_sex3` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id_horario`, `descricao`, `p_seg1`, `p_seg2`, `p_seg3`, `p_ter1`, `p_ter2`, `p_ter3`, `p_qua1`, `p_qua2`, `p_qua3`, `p_qui1`, `p_qui2`, `p_qui3`, `p_sex1`, `p_sex2`, `p_sex3`) VALUES
(1, 'horario para a 602 de 2018.1', 'QUI', 'LDS', 'GEO', 'PDP', 'MTM', ' DS', 'QUI', 'BIO', 'GEO', 'LPT', 'MTM', 'DSW', 'GES', 'BIO', 'SOC'),
(2, 'para a 603 de 2018.2', 'gfj', 'gj', 'j', 'gh', 'ghj', 'j', 'g', 'hj', 'j', 'gjg', 'hj', 'jg', 'gj', 'j', 'g');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `p_matricula` varchar(40) DEFAULT NULL,
  `p_nome` varchar(70) DEFAULT NULL,
  `p_curso` varchar(50) DEFAULT NULL,
  `p_turma` int(3) DEFAULT NULL,
  `p_avatar` int(3) DEFAULT NULL,
  `p_senha` varchar(100) DEFAULT NULL,
  `p_sexo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `p_matricula`, `p_nome`, `p_curso`, `p_turma`, `p_avatar`, `p_senha`, `p_sexo`) VALUES
(1, '203908', 'Analista do Sistema', 'Administrador', NULL, 89, 'admin', NULL),
(2, '201612030327', 'Elias Rocha Lima', 'Sistema de Informaçao', 602, 1, '123', 'M'),
(3, '201612030564', 'Alexsandro Soares Teixeira', 'Sistema de Informaçao', 602, 1, '123', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(3) NOT NULL,
  `p_id_horario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `p_id_horario`) VALUES
(602, 1),
(603, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id_avatar`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD KEY `p_turma` (`p_turma`),
  ADD KEY `p_avatar` (`p_avatar`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id_avatar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `pessoa_ibfk_1` FOREIGN KEY (`p_turma`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `pessoa_ibfk_2` FOREIGN KEY (`p_avatar`) REFERENCES `avatar` (`id_avatar`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`p_id_horario`) REFERENCES `horarios` (`id_horario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
