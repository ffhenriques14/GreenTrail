-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jul-2024 às 13:27
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
-- Banco de dados: `greentrail`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `green_users`
--

CREATE TABLE `green_users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `green_users`
--

INSERT INTO `green_users` (`id`, `name`, `email`, `password`, `image`) VALUES
(11, 'francisco', 'diasis@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1234.1.JPG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guiasviagem`
--

CREATE TABLE `guiasviagem` (
  `id_guia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `guiasviagem`
--

INSERT INTO `guiasviagem` (`id_guia`, `titulo`, `descricao`, `image`, `icon`, `link`) VALUES
(1, 'Pedalada em Minasota', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi', 'pedaladaMinasota.jpg', 'ph--bicycle.svg', ''),
(2, 'Kayak pelo Gelo da Gronelândia', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi', 'Valdez__Kayak__Alaska__USA_Shutterstock__1_.webp', 'material-symbols--kayaking.svg', ''),
(3, 'Caminhada pelas Montanhas Azuis', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi', 'GettyImages-992515854-18d0d89fd5f249709eb40b68e2f72273.jpg', 'gis--hiker.svg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ofertas`
--

CREATE TABLE `ofertas` (
  `id_oferta` int(11) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `custo` int(11) NOT NULL,
  `avaliacao` decimal(11,1) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `filtro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ofertas`
--

INSERT INTO `ofertas` (`id_oferta`, `hotel`, `descricao`, `custo`, `avaliacao`, `link`, `image`, `filtro`) VALUES
(1, 'Luna River', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 499, 8.0, 'https://www.ecocamp.travel/', 'images/Hoteles-sustentables-chile.webp', 'com vista mar'),
(2, 'Amazon Malpique', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 999, 8.5, 'https://www.naypaladhideaway.com/bird-nest/', 'images/bird-nest-hotel-standard-1200x800.jpg', 'America'),
(3, 'Ocean Drive', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC', 799, 9.0, 'https://svart.no/', 'images/un-hotel-circulaire-1201x650.webp', 'Aventuras');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ofertas_filtros`
--

CREATE TABLE `ofertas_filtros` (
  `id` int(11) NOT NULL,
  `filtro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ofertas_filtros`
--

INSERT INTO `ofertas_filtros` (`id`, `filtro`) VALUES
(1, 'com vista mar\r\n'),
(2, 'com piscina'),
(3, 'com pequeno-almoço'),
(4, 'Asia Norte'),
(5, 'Oceania'),
(6, 'America'),
(7, 'Pequeno-almoço'),
(8, 'Meio Regime'),
(9, 'Tudo Incluído'),
(10, 'Luxuosa'),
(11, 'Aventuras'),
(12, 'Relaxante');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `green_users`
--
ALTER TABLE `green_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `guiasviagem`
--
ALTER TABLE `guiasviagem`
  ADD PRIMARY KEY (`id_guia`);

--
-- Índices para tabela `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Índices para tabela `ofertas_filtros`
--
ALTER TABLE `ofertas_filtros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `green_users`
--
ALTER TABLE `green_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `guiasviagem`
--
ALTER TABLE `guiasviagem`
  MODIFY `id_guia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ofertas_filtros`
--
ALTER TABLE `ofertas_filtros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
