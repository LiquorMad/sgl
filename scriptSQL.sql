-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jan-2023 às 16:36
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sgl`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fontes`
--

CREATE TABLE `fontes` (
  `id` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fontes`
--

INSERT INTO `fontes` (`id`, `endereco`, `descricao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://laravel.com/', 'Site oficial do Laravel', NULL, '2023-01-08 14:05:52', NULL),
(11, 'https://reactjs.org/', 'Site oficial do React js', '2023-01-08 18:46:23', '2023-01-08 21:54:25', NULL),
(12, 'fre', 'ger', '2023-01-08 18:46:30', '2023-01-08 18:46:34', '2023-01-08 18:46:34'),
(13, 're', 'e', '2023-01-08 18:46:42', '2023-01-08 18:46:51', '2023-01-08 18:46:51'),
(14, 'ee', 'ee', '2023-01-08 18:46:47', '2023-01-08 18:47:03', '2023-01-08 18:47:03'),
(15, 'https://nodejs.org/', 'Site oficial do Node js', '2023-01-08 18:47:36', '2023-01-08 21:55:09', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `idFonte` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`id`, `endereco`, `descricao`, `idFonte`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://laravel.com/docs/9.x/configuration', 'Laravel configuration', 1, NULL, '2023-01-08 21:32:08', NULL),
(5, 'https://laravel.com/docs/9.x/queries#select-statements', 'Database: Query Builder', 1, '2023-01-08 18:49:25', '2023-01-08 18:50:37', '2023-01-08 18:50:37'),
(6, 'https://reactjs.org/docs/getting-started.html', 'Getting Started with react js', 1, '2023-01-08 18:49:57', '2023-01-08 18:50:45', '2023-01-08 18:50:45'),
(7, 'https://nodejs.org/en/download/', 'Download node js', 1, '2023-01-08 18:50:15', '2023-01-08 18:50:48', '2023-01-08 18:50:48'),
(8, 'https://reactjs.org/docs/getting-started.html', 'Getting Started', 11, '2023-01-08 18:51:09', '2023-01-08 18:51:09', NULL),
(9, 'https://nodejs.org/en/download/', 'Download node js', 15, '2023-01-08 18:51:26', '2023-01-08 18:51:26', NULL),
(1294, 'https://surveys.savanta.com/survey/selfserve/21e3/210643?list=2', NULL, 11, NULL, NULL, NULL),
(1295, 'https://surveys.savanta.com/survey/selfserve/21e3/210643?list=2', NULL, 11, NULL, NULL, NULL),
(1296, 'https://beta.reactjs.org', NULL, 11, NULL, NULL, NULL),
(1297, 'https://reactjs.org//', NULL, 11, NULL, NULL, NULL),
(1298, 'https://reactjs.org//docs/getting-started.html', NULL, 11, NULL, NULL, NULL),
(1299, 'https://reactjs.org//tutorial/tutorial.html', NULL, 11, NULL, NULL, NULL),
(1300, 'https://reactjs.org//blog/', NULL, 11, NULL, NULL, NULL),
(1301, 'https://reactjs.org//community/support.html', NULL, 11, NULL, NULL, NULL),
(1302, 'https://reactjs.org//versions', NULL, 11, NULL, NULL, NULL),
(1303, 'https://reactjs.org//languages', NULL, 11, NULL, NULL, NULL),
(1304, 'https://github.com/facebook/react/', NULL, 11, NULL, NULL, NULL),
(1305, 'https://reactjs.org//docs/getting-started.html', NULL, 11, NULL, NULL, NULL),
(1306, 'https://reactjs.org//tutorial/tutorial.html', NULL, 11, NULL, NULL, NULL),
(1307, 'https://reactnative.dev/', NULL, 11, NULL, NULL, NULL),
(1308, 'https://babeljs.io/repl/#?presets=react&code_lz=MYewdgzgLgBApgGzgWzmWBeGAeAFgRgD4AJRBEAGhgHcQAnBAEwEJsB6AwgbgChRJY_KAEMAlmDh0YWRiGABXVOgB0AczhQAokiVQAQgE8AkowAUAcjogQUcwEpeAJTjDgUACIB5ALLK6aRklTRBQ0KCohMQk6Bx4gA', NULL, 11, NULL, NULL, NULL),
(1309, 'https://reactjs.org//docs/getting-started.html', NULL, 11, NULL, NULL, NULL),
(1310, 'https://reactjs.org//tutorial/tutorial.html', NULL, 11, NULL, NULL, NULL),
(1311, 'https://reactjs.org//docs/getting-started.html', NULL, 11, NULL, NULL, NULL),
(1312, 'https://reactjs.org//docs/hello-world.html', NULL, 11, NULL, NULL, NULL),
(1313, 'https://reactjs.org//docs/accessibility.html', NULL, 11, NULL, NULL, NULL),
(1314, 'https://reactjs.org//docs/react-api.html', NULL, 11, NULL, NULL, NULL),
(1315, 'https://reactjs.org//docs/hooks-intro.html', NULL, 11, NULL, NULL, NULL),
(1316, 'https://reactjs.org//docs/testing.html', NULL, 11, NULL, NULL, NULL),
(1317, 'https://reactjs.org//docs/how-to-contribute.html', NULL, 11, NULL, NULL, NULL),
(1318, 'https://reactjs.org//docs/faq-ajax.html', NULL, 11, NULL, NULL, NULL),
(1319, 'https://github.com/facebook/react', NULL, 11, NULL, NULL, NULL),
(1320, 'https://stackoverflow.com/questions/tagged/reactjs', NULL, 11, NULL, NULL, NULL),
(1321, 'https://reactjs.org/community/support.html#popular-discussion-forums', NULL, 11, NULL, NULL, NULL),
(1322, 'https://discord.gg/reactiflux', NULL, 11, NULL, NULL, NULL),
(1323, 'https://dev.to/t/react', NULL, 11, NULL, NULL, NULL),
(1324, 'https://www.facebook.com/react', NULL, 11, NULL, NULL, NULL),
(1325, 'https://twitter.com/reactjs', NULL, 11, NULL, NULL, NULL),
(1326, 'https://github.com/facebook/react/blob/main/CODE_OF_CONDUCT.md', NULL, 11, NULL, NULL, NULL),
(1327, 'https://reactjs.org//community/support.html', NULL, 11, NULL, NULL, NULL),
(1328, 'https://reactjs.org//tutorial/tutorial.html', NULL, 11, NULL, NULL, NULL),
(1329, 'https://reactjs.org//blog', NULL, 11, NULL, NULL, NULL),
(1330, 'https://reactjs.org//acknowledgements.html', NULL, 11, NULL, NULL, NULL),
(1331, 'https://reactnative.dev/', NULL, 11, NULL, NULL, NULL),
(1332, 'https://opensource.facebook.com/legal/privacy', NULL, 11, NULL, NULL, NULL),
(1333, 'https://opensource.facebook.com/legal/terms', NULL, 11, NULL, NULL, NULL),
(1334, 'https://opensource.facebook.com/projects/', NULL, 11, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_utilizador`
--

CREATE TABLE `tipo_utilizador` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_utilizador`
--

INSERT INTO `tipo_utilizador` (`id`, `tipo`, `descricao`) VALUES
(1, 'Administrador', 'Utilizador que faz administração do sistema'),
(2, 'Normal', 'Utilizador normal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idTipoUtilizador` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `idTipoUtilizador`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'awn698FMW8', 'leila@example.org', '$2y$10$sp9uoV6FGPRQbSMhW2Mn4uHQ0cJCJwnXGEjRl8rl8YtYIKs66FQbe', 1, NULL, '2023-01-08 16:27:48', '2023-01-08 16:27:48'),
(2, 'leonildo', '123@gmail.com', '$2y$10$aZlg1gCM43TPDL/3.oXaVOa5IO2a1quHBAGwuUadrNOQbazAcbzJO', 1, '2023-01-08 16:27:41', '2023-01-08 16:28:51', '2023-01-08 16:28:51'),
(3, 'sety', 'sety@gmail.com', '$2y$10$nyehCYRdi9sUSBeDnKi9q.yo0fTNf0.gnIBtTGgaT80WuvbIKZC5y', 1, '2023-01-08 16:28:21', '2023-01-08 16:29:01', '2023-01-08 16:29:01'),
(4, 'peletxa', 'peletxa@gmail.com', '$2y$10$tNs2KnCsjX4gXg4.q9XoQO0YMSiNGVUbzr8bx.3jtIYV/.B8T3hXu', 1, '2023-01-08 16:28:45', '2023-01-08 18:52:21', '2023-01-08 18:52:21'),
(5, 'leonildo', '1@gmail.com', '$2y$10$lN2MmNb.XeRVvH56CtgnlupoXj49YyCTM13LufrosO4d1jOflUGcC', 1, '2023-01-08 17:12:45', '2023-01-08 18:53:06', '2023-01-08 18:53:06'),
(6, 'admin', 'admin@gmail.com', '$2y$10$sp9uoV6FGPRQbSMhW2Mn4uHQ0cJCJwnXGEjRl8rl8YtYIKs66FQbe', 1, '2023-01-08 18:52:37', '2023-01-08 21:53:49', NULL),
(7, 'normal.user', 'normal.user@gmail.com', '$2y$10$7STq.5Yk78Bj0ba3r7zM5.dZJD5LtjSP2DkxiL3xL67nyTNKI8Crm', 2, '2023-01-08 18:52:58', '2023-01-08 18:52:58', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_links`
--

CREATE TABLE `user_links` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_link` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fontes`
--
ALTER TABLE `fontes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFonte` (`idFonte`);

--
-- Índices para tabela `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTipoUtilizador` (`idTipoUtilizador`);

--
-- Índices para tabela `user_links`
--
ALTER TABLE `user_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_link` (`id_link`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fontes`
--
ALTER TABLE `fontes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1335;

--
-- AUTO_INCREMENT de tabela `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user_links`
--
ALTER TABLE `user_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`idFonte`) REFERENCES `fontes` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idTipoUtilizador`) REFERENCES `tipo_utilizador` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `user_links`
--
ALTER TABLE `user_links`
  ADD CONSTRAINT `user_links_ibfk_1` FOREIGN KEY (`id_link`) REFERENCES `links` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_links_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
