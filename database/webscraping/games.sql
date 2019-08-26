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
(1, 'League of Legends', '/images/games/LOL.jpg', 'League of Legends', 'MOBA', NULL, NULL),
(2, 'Counter-Strike:Global Offensive', '/images/games/CSGO.jpg', 'CS:GO', 'FPS', NULL, NULL),
(3, 'Fortnite', '/images/games/FORTNITE.jpg', 'Fortnite', 'Battle Royale', NULL, NULL),
(4, 'Overwatch', '/images/games/OVERWATCH.jpg', 'Overwatch', 'FPS', NULL, NULL),
(5, 'Minecraft', '/images/games/Minecraft.jpg', 'Minecraft', 'Aventura', NULL, NULL),
(6, 'Grand Theft Auto V', '/images/games/GTAV.jpg', 'GTA V', 'Ação', NULL, NULL),
(7, 'PLAYERUNKNOWN\'S BATTLEGROUNDS', '/images/games/PUBG.jpg', 'PUBG', 'Battle Royale', NULL, NULL),
(8, 'Tekken 7', '/images/games/Tekken7.jpg', 'Tekken 7', 'Luta', NULL, NULL),
(9, 'Apex Legends', '/images/games/ApexLegends.jpg', 'Apex Legends', 'Battle Royale', NULL, NULL),
(10, 'Dota 2', '/images/games/Dota2.jpg', 'Dota 2', 'MOBA', NULL, NULL),
(11, 'World of Warcraft', '/images/games/WOW.jpg', 'WOW', 'MMORPG', NULL, NULL),
(12, 'Tom Clancy\'s Rainbow Six: Siege', '/images/games/R6.jpg', 'R6', 'FPS', NULL, NULL),
(13, 'FIFA 19', '/images/games/FIFA19.jpg', 'FIFA 19', 'Futebol', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
