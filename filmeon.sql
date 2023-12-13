-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Dez-2023 às 20:51
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filmeon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclient`
--

CREATE TABLE `tbclient` (
  `idClient` int(11) NOT NULL,
  `nomeClient` varchar(80) NOT NULL,
  `cpfClient` char(14) NOT NULL,
  `rgClient` char(12) NOT NULL,
  `nascClient` date NOT NULL,
  `celularClient` char(14) NOT NULL,
  `emailClient` varchar(100) NOT NULL,
  `passwordClient` varchar(15) NOT NULL,
  `cepClient` char(9) NOT NULL,
  `enderecoClient` varchar(100) NOT NULL,
  `imagemClient` varchar(50) NOT NULL,
  `tokenClient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbclient`
--

INSERT INTO `tbclient` (`idClient`, `nomeClient`, `cpfClient`, `rgClient`, `nascClient`, `celularClient`, `emailClient`, `passwordClient`, `cepClient`, `enderecoClient`, `imagemClient`, `tokenClient`) VALUES
(1, 'Luciano Macedo', '111.111.111-11', '11.111.111-1', '2023-10-30', '2023-10-30', 'luciano@gmail.com', '123', '08022-111', 'Rua Espirito Santo do Dourado, 098', 'c58c18e931d894bafb24371e49558be8.jpg', '9b27fd5c714e8859d96bf88b9314fe2d'),
(25, 'Manuela', '999.999.999-99', '99.999.999-9', '2023-10-30', '2023-10-30', 'manuela@gmail.com', '123', '08022-119', 'Rua Espirito Santo do Dourado, 713', 'd0b86fe6290e33712faa7bb0536a3843.jpg', '2f5262218e14c32670963ce0813e8540'),
(26, 'Rose', '888.888.888-88', '88.888.888-8', '2023-11-01', '2023-11-01', 'rose@gmail.com', '123', '08022-110', 'Bahia', 'ccc08a01ac9dcc28b776466ef523ea52.jpg', 'e61385bd20e90e2ca1c74e27ec8e3009');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmovie`
--

CREATE TABLE `tbmovie` (
  `idMovie` int(11) NOT NULL,
  `tituloMovie` varchar(50) NOT NULL,
  `descricaoMovie` varchar(200) NOT NULL,
  `duracaoMovie` int(11) NOT NULL,
  `categoriaMovie` varchar(30) NOT NULL,
  `imagemMovie` varchar(50) NOT NULL,
  `trailerMovie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbmovie`
--

INSERT INTO `tbmovie` (`idMovie`, `tituloMovie`, `descricaoMovie`, `duracaoMovie`, `categoriaMovie`, `imagemMovie`, `trailerMovie`) VALUES
(2, 'O Poderoso Chefão 2', 'A série de filmes The Godfather consiste em três filmes de drama e suspense policial dirigidos por Francis Ford Coppola com base no romance homônimo do ítalo-americano Mario Puzo. ', 255, 'Ação', '16f143ca32d69ee17833cb0e8935f59a.jpg', 'https://www.youtube.com/embed/SaHZHU-44XA?si=KFY3T720Le2Thw9R'),
(3, 'Missão Impossível 7: Acerto de Contas Parte 1', 'Ethan Hunt e sua equipe devem rastrear uma nova arma que pode ameaçar toda a humanidade se cair em mãos erradas. Com o destino do mundo em jogo, se inicia uma corrida mortal ao redor do globo.', 119, 'Aventura', 'b7ffd619bf94b73732d651eee0637ca2.jpg', 'https://www.youtube.com/embed/avz06PDqDbM'),
(4, 'A Noite das Bruxas', 'O detetive belga Hercule Poirot investiga um assassinato enquanto participa de uma sessão espírita de Halloween em um palazzo assombrado em Veneza, Itália.', 90, 'Ação', 'af6dbe619f043a4b79b226e559c0a81f.jpg', 'https://www.youtube.com/embed/CLpH3-rcHdQ?si=1QQvj7r8f-0hVIEd'),
(5, 'Besouro Roxo', 'O adolescente Jaime Reyes ganha superpoderes quando um misterioso escaravelho se prende à sua coluna e lhe fornece uma poderosa armadura alienígena azul.', 110, 'Ação', 'e40b87fcaa927ec56c45d6e2563c0891.jpg', 'https://www.youtube.com/embed/IZw2slPIoGs?si=4yxW3N4SiBmhlfF'),
(6, 'Homem-Aranha: Através do Aranhaverso', 'Depois de se reunir com Gwen Stacy, Homem-Aranha é jogado no multiverso, onde ele encontra uma equipe encarregada de proteger sua própria existência.', 97, 'Ação', 'f4e7886faace915185c2259f12ff5441.jpg', 'https://www.youtube.com/embed/LZBlXkDvhh4?si=eejV6-p5n4iBotN6'),
(7, 'Elvis', 'Desde sua ascensão ao estrelato, o ícone do rock Elvis Presley mantém um relacionamento complicado com seu enigmático empresário, Tom Parker, por mais de 20 anos', 169, 'Ação', 'dacac52eb4a6804688a107a7dde33523.jpg', 'https://www.youtube.com/embed/XpU9J2oL0GE?si=1QuenA7-S1qonQ9o'),
(8, 'Os Mercenários 4', 'A equipe enfrenta um traficante de armas que comanda um enorme exército privado. Munidos com todas as armas inimagináveis, os Mercenários são a última linha de defesa do mundo.', 145, 'Ação', 'b9dccc2e3e0ae997a83cef66b9d0254c.jpg', 'https://www.youtube.com/embed/w7v8J6eN_0k?si=JfbVw0dM5rEvuW2b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbreview`
--

CREATE TABLE `tbreview` (
  `idReview` int(11) NOT NULL,
  `notaReview` int(11) NOT NULL,
  `reviewReview` varchar(255) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idMovie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbreview`
--

INSERT INTO `tbreview` (`idReview`, `notaReview`, `reviewReview`, `idClient`, `idMovie`) VALUES
(1, 8, 'Filme mais ou menos', 25, 3),
(2, 10, 'Filme Muito bom', 25, 6),
(3, 6, 'Médio', 25, 4),
(4, 2, 'ok1', 1, 4),
(5, 2, 'ok2', 1, 5),
(6, 2, 'ok3', 1, 7),
(7, 8, 'Filme muito bom da Aghata Crithie', 26, 4),
(8, 9, 'Filme Bom', 1, 3),
(9, 8, 'O primeiro é melhor', 1, 6),
(10, 7, 'filme Bom', 1, 8),
(11, 2, 'muito ruim', 25, 8),
(12, 8, 'Filme muito bom', 25, 5),
(13, 9, 'filme muito bom kkkkkk', 1, 3),
(14, 8, 'qwqw', 1, 4),
(15, 10, 'show', 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(30) NOT NULL,
  `sobrenomeUser` varchar(50) NOT NULL,
  `cpfUser` char(14) NOT NULL,
  `nascUser` date NOT NULL,
  `emailUser` varchar(100) NOT NULL,
  `passwordUser` varchar(50) NOT NULL,
  `imagemUser` varchar(50) NOT NULL,
  `tokenUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `nomeUser`, `sobrenomeUser`, `cpfUser`, `nascUser`, `emailUser`, `passwordUser`, `imagemUser`, `tokenUser`) VALUES
(2, 'Chaves', 'do nove', '111.111.111-11', '2023-07-04', 'chaves@gmail.com', '12341', 'ff0857ffb4b599124492fa32384087a4.jpg', 'b7e0fcbf2519625b789158fc2514540b'),
(3, 'Chiquinha', 'silva', '222.222.222-22', '2023-05-17', 'chiquinha@gmail.com', '11112222', '36e4f2725c247f5e35a4a2fc0deead13.jpg', '503602ce2ea43fe105c12668d472aae2'),
(4, 'Madruga', 'Madruguinha', '222.222.222-13', '2023-10-02', 'madruga@outlook.com', '123', 'e10017033cfa61cc4f5cb2d960210086.jpg', '4dd87c1598ac155fcbf1567bf6f28cc1'),
(8, 'Madrugaaaa', 'qeqeqeeq', '555.555.555-55', '2023-11-10', 'sfs@gmail.com', '11212122', '', '84abf85140d68288169fae067dc8128b'),
(9, 'Chaves', 'wewewewe', '777.777.777-77', '2023-11-09', '777@gmail.com', '6565656', '', 'a91e69de1336182b43931374724e9b1b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbclient`
--
ALTER TABLE `tbclient`
  ADD PRIMARY KEY (`idClient`),
  ADD UNIQUE KEY `cpfClient` (`cpfClient`),
  ADD UNIQUE KEY `rgClient` (`rgClient`),
  ADD UNIQUE KEY `emailClient` (`emailClient`);

--
-- Índices para tabela `tbmovie`
--
ALTER TABLE `tbmovie`
  ADD PRIMARY KEY (`idMovie`),
  ADD UNIQUE KEY `tituloFilme` (`tituloMovie`);

--
-- Índices para tabela `tbreview`
--
ALTER TABLE `tbreview`
  ADD PRIMARY KEY (`idReview`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idMovie` (`idMovie`);

--
-- Índices para tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `cpfUser` (`cpfUser`),
  ADD UNIQUE KEY `emailUser` (`emailUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbclient`
--
ALTER TABLE `tbclient`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tbmovie`
--
ALTER TABLE `tbmovie`
  MODIFY `idMovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbreview`
--
ALTER TABLE `tbreview`
  MODIFY `idReview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbreview`
--
ALTER TABLE `tbreview`
  ADD CONSTRAINT `idClient` FOREIGN KEY (`idClient`) REFERENCES `tbclient` (`idClient`),
  ADD CONSTRAINT `idMovie` FOREIGN KEY (`idMovie`) REFERENCES `tbmovie` (`idMovie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
