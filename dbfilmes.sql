-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2024 às 18:30
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbfilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `Titulo` varchar(255) NOT NULL,
  `Ano` date NOT NULL,
  `Diretor` varchar(255) NOT NULL,
  `Genero` varchar(255) NOT NULL,
  `Duracao` text NOT NULL,
  `Classificação` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`Titulo`, `Ano`, `Diretor`, `Genero`, `Duracao`, `Classificação`) VALUES
('Alien ', '1979-10-21', 'Ridley Scott', 'Terror ', '1h57', 8),
('As Crônicas de Riddick', '2004-06-11', 'David Twohy', 'Ação', '1h59', 7),
('Die Hart ', '2020-06-20', 'Eric Appel', 'Comedia ', '1h24', 5),
('Oppenheimer', '2023-07-21', 'Christopher Nolan', 'Drama ', '3h', 9),
('Solaris\r\n', '2003-04-25', 'Steven Soderbergh', 'Ficção cientifica ', '1h39', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`Titulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
