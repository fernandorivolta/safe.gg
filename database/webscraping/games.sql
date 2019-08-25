-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Ago-2019 às 20:57
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safegg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `game` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `games`
--

INSERT INTO `games` (`id`, `game`, `img`, `tag`, `category`, `created_at`, `updated_at`) VALUES
(1, 'League of Legends', 'https://static-cdn.jtvnw.net/ttv-boxart/League%20of%20Legends-285x380.jpg', 'League of Legends', 'MOBA', NULL, NULL),
(2, 'Counter-Strike:Global Offensive', 'https://static-cdn.jtvnw.net/ttv-boxart/./Counter-Strike:%20Global%20Offensive-285x380.jpg', 'CS:GO', 'FPS', NULL, NULL),
(3, 'Fortnite', 'https://static-cdn.jtvnw.net/ttv-boxart/Fortnite-285x380.jpg', 'Fortnite', 'Battle Royale', NULL, NULL),
(4, 'Overwatch', 'https://static-cdn.jtvnw.net/ttv-boxart/Overwatch-285x380.jpg', 'Overwatch', 'FPS', NULL, NULL),
(5, 'Minecraft', 'https://static-cdn.jtvnw.net/ttv-boxart/Minecraft-285x380.jpg', 'Minecraft', 'Aventura', NULL, NULL),
(6, 'Grand Theft Auto V', 'https://static-cdn.jtvnw.net/ttv-boxart/Grand%20Theft%20Auto%20V-285x380.jpg', 'GTA V', 'Ação', NULL, NULL),
(7, 'PLAYERUNKNOWN\'S BATTLEGROUNDS', 'https://static-cdn.jtvnw.net/ttv-boxart/PLAYERUNKNOWN%27S%20BATTLEGROUNDS-285x380.jpg', 'PUBG', 'Battle Royale', NULL, NULL),
(8, 'Tekken 7', 'https://static-cdn.jtvnw.net/ttv-boxart/Tekken%207-285x380.jpg', 'Tekken 7', 'Luta', NULL, NULL),
(9, 'Apex Legends', 'https://static-cdn.jtvnw.net/ttv-boxart/Apex%20Legends-285x380.jpg', 'Apex Legends', 'Battle Royale', NULL, NULL),
(10, 'Dota 2', 'https://static-cdn.jtvnw.net/ttv-boxart/Dota%202-285x380.jpg', 'Dota 2', 'MOBA', NULL, NULL),
(11, 'World of Warcraft', 'https://static-cdn.jtvnw.net/ttv-boxart/World%20of%20Warcraft-285x380.jpg', 'WOW', 'MMORPG', NULL, NULL),
(12, 'Tom Clancy\'s Rainbow Six: Siege', 'https://static-cdn.jtvnw.net/ttv-boxart/./Tom%20Clancy%27s%20Rainbow%20Six:%20Siege-285x380.jpg', 'R6', 'FPS', NULL, NULL),
(13, 'FIFA 19', 'https://static-cdn.jtvnw.net/ttv-boxart/FIFA%2019-285x380.jpg', 'FIFA 19', 'Futebol', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
