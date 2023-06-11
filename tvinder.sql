-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 11 juin 2023 à 10:53
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tvinder`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `film_name` varchar(255) NOT NULL,
  `film_poster` varchar(255) NOT NULL,
  `film_release` bigint(255) NOT NULL,
  `likes` bigint(255) NOT NULL,
  `id` int(6) UNSIGNED NOT NULL,
  `film_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`film_name`, `film_poster`, `film_release`, `likes`, `id`, `film_type`) VALUES
('Maverick', 'poster/AAAmaverick.jpg', 2022, 6, 1, 'film'),
('Baby driver', 'poster/babydriver.jpg', 2017, 1, 2, 'film'),
('The professor', 'poster/brown.jpg', 2018, 50, 3, 'film'),
('Ender\'s game', 'poster/endersgame.jpg', 2013, 3, 4, 'film'),
('Game night', 'poster/gamenight.jpg', 2018, 0, 5, 'film'),
('Spiderman: into the spiderverse', 'poster/intothespiderverse.jpg', 2018, 250, 6, 'film'),
('The lord of the rings: the fellowship of the ring', 'poster/lotr1.jpeg', 2001, 0, 7, 'film'),
('The lord of the rings: the two towers', 'poster/lotr2.jpeg', 2002, 514, 8, 'film'),
('The lord of the rings: the return of the king', 'poster/lotr3.jpg', 2003, 0, 9, 'film'),
('Puss in boots 2', 'poster/pussinboots2.jpg', 2022, 50, 10, 'film'),
('Shrek', 'poster/shrek.jpg', 2001, 0, 11, 'film'),
('Ted', 'poster/ted.jpg', 2012, 0, 12, 'film'),
('Ted 2', 'poster/ted2.jpg', 2015, 100, 13, 'film'),
('Mario', 'poster/thesupermariobros.jpg', 2023, 49, 23, 'film'),
('Malcolm in the middle', 'poster/MV5BMTI1NDkxNjE3M15BMl5BanBnXkFtZTcwNzYzNTkxMQ@@._V1_.jpg', 2000, 0, 25, 'tvshow'),
('Breaking bad', 'poster/MV5BMTk0MDAxNTIwMV5BMl5BanBnXkFtZTcwMDE2MzQ1MQ@@._V1_FMjpg_UX1000_.jpg', 2008, 0, 26, 'tvshow'),
('Sherlock', 'poster/MV5BMWEzNTFlMTQtMzhjOS00MzQ1LWJjNjgtY2RhMjFhYjQwYjIzXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_FMjpg_UX1000_.jpg', 2010, 0, 27, 'tvshow'),
('Stranger things', 'poster/MV5BN2EyZWIwYjItZWM2Mi00YzM1LWFhYzQtZGZmYzlhNWZkYWQyXkEyXkFqcGdeQXVyNDI0MTA5NTE@._V1_.jpg', 2016, 0, 28, 'tvshow'),
('Chernobyl', 'poster/MV5BNTdkN2QwMDItMDVhNS00ZjFiLWEzNTctMzY5ODQzYWNkMDllXkEyXkFqcGdeQXVyMTMzNDExODE5._V1_FMjpg_UX1000_.jpg', 2019, 0, 29, 'tvshow'),
('The leftovers', 'poster/MV5BNTE3MDc1MjY4NV5BMl5BanBnXkFtZTgwMDg4MjQ4MTE@._V1_FMjpg_UX1000_.jpg', 2014, 0, 30, 'tvshow'),
('Sex education', 'poster/MV5BOTE0MjQ1NDU3OV5BMl5BanBnXkFtZTgwNTI4MTgwNzM@._V1_FMjpg_UX1000_.jpg', 2019, 0, 31, 'tvshow'),
('The boys', 'poster/MV5BOTEyNDJhMDAtY2U5ZS00OTMzLTkwODktMjU3MjFkZWVlMGYyXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_FMjpg_UX1000_.jpg', 2019, 0, 32, 'tvshow'),
('Game of thrones', 'poster/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_FMjpg_UX1000_.jpg', 2011, 0, 33, 'tvshow'),
('Squid game', 'poster/MV5BYWE3MDVkN2EtNjQ5MS00ZDQ4LTliNzYtMjc2YWMzMDEwMTA3XkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg', 2021, 0, 34, 'tvshow'),
('One piece', 'poster/MV5BODcwNWE3OTMtMDc3MS00NDFjLWE1OTAtNDU3NjgxODMxY2UyXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_FMjpg_UX1000_.jpg', 1999, 6, 35, 'anime'),
('Terror in resonnace', 'poster/MV5BNjdhYzY0M2QtODgwZi00NDg2LTliNDQtMzA4ZTMzMzQ0MGEyXkEyXkFqcGdeQXVyMTA3OTEyODI1._V1_.jpg', 2014, 3, 36, 'anime'),
('Code geass', 'poster/MV5BYzZjY2MzYTAtMmQxMi00MWVjLTlkZGQtYjJmNWVhODY3YjdjXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg', 2006, 0, 37, 'anime'),
('Dragon ball', 'poster/MV5BYzI0YjYxY2UtNzRjNS00NTZiLTgzMDItNGEzMjU5MmE0ZWJmXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg', 1986, 0, 38, 'anime'),
('Hunter X Hunter', 'poster/MV5BNGM0YTk3MWEtN2JlZC00ZmZmLWIwMDktZTMxZGE5Zjc2MGExXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg', 2011, 0, 39, 'anime');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
