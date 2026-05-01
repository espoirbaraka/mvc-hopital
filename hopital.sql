--Travail d'evaluation par Etienne kaskote
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 23 avr. 2026 à 07:39
-- Version du serveur : 8.0.30
-- Version de PHP : 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_medicament`
--

CREATE TABLE `tbl_medicament` (
  `code_medicament` int NOT NULL,
  `designation` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tbl_medicament`
--

INSERT INTO `tbl_medicament` (`code_medicament`, `designation`, `description`, `prix`) VALUES
(1, 'ASPIRINE', 'Traite la tete', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `code_patient` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `postnom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` datetime NOT NULL,
  `adresse` text NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_medicament`
--
ALTER TABLE `tbl_medicament`
  ADD PRIMARY KEY (`code_medicament`);

--
-- Index pour la table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`code_patient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_medicament`
--
ALTER TABLE `tbl_medicament`
  MODIFY `code_medicament` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `code_patient` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
