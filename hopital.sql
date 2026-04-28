-- SQL schema for the mvc-hopital project
-- Generated for MySQL 8+

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `hopital`
    DEFAULT CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE `hopital`;

DROP TABLE IF EXISTS `tbl_consultation`;
DROP TABLE IF EXISTS `tbl_patient`;
DROP TABLE IF EXISTS `tbl_medicament`;

CREATE TABLE `tbl_medicament` (
  `code_medicament` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `categorie` varchar(80) NOT NULL DEFAULT 'General',
  `stock` int NOT NULL DEFAULT 0,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`code_medicament`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tbl_patient` (
  `code_patient` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `postnom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` datetime NOT NULL,
  `adresse` text NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`code_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tbl_consultation` (
  `code_consultation` int NOT NULL AUTO_INCREMENT,
  `code_patient` int NOT NULL,
  `code_medicament` int DEFAULT NULL,
  `motif` varchar(150) NOT NULL,
  `diagnostic` text NOT NULL,
  `notes` text,
  `cout` decimal(10,2) NOT NULL DEFAULT 0.00,
  `date_consultation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`code_consultation`),
  KEY `idx_consultation_patient` (`code_patient`),
  KEY `idx_consultation_medicament` (`code_medicament`),
  CONSTRAINT `fk_consultation_patient`
    FOREIGN KEY (`code_patient`) REFERENCES `tbl_patient` (`code_patient`)
    ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_consultation_medicament`
    FOREIGN KEY (`code_medicament`) REFERENCES `tbl_medicament` (`code_medicament`)
    ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tbl_medicament`
(`designation`, `description`, `prix`, `categorie`, `stock`)
VALUES
('ASPIRINE', 'Soulage les douleurs legeres et la fievre.', 1000.00, 'Antalgique', 48),
('AMOXICILLINE', 'Antibiotique couramment utilise pour les infections bacteriennes.', 3500.00, 'Antibiotique', 22),
('PARACETAMOL', 'Traitement de la douleur et de la fievre.', 1500.00, 'Antalgique', 60);

INSERT INTO `tbl_patient`
(`nom`, `postnom`, `prenom`, `date_naissance`, `adresse`, `telephone`, `sexe`, `email`)
VALUES
('KABILA', 'MUKENDI', 'Grace', '1998-07-14 00:00:00', 'Quartier Kasapa, Lubumbashi', '0990001111', 'F', 'grace.kabila@example.com'),
('ILUNGA', 'KASONGO', 'David', '1989-11-02 00:00:00', 'Avenue des Cliniques, Lubumbashi', '0972223333', 'M', 'david.ilunga@example.com'),
('MUTOMBO', 'KAZADI', 'Ruth', '2001-03-23 00:00:00', 'Commune Kampemba, Lubumbashi', '0814445555', 'F', 'ruth.mutombo@example.com');

INSERT INTO `tbl_consultation`
(`code_patient`, `code_medicament`, `motif`, `diagnostic`, `notes`, `cout`, `date_consultation`)
VALUES
(1, 1, 'Maux de tete persistants', 'Cephalee simple', 'Repos conseille pendant 24 heures.', 10000.00, '2026-04-20 09:30:00'),
(2, 2, 'Infection ORL', 'Angine bacterienne', 'Controle recommande apres 5 jours.', 18000.00, '2026-04-22 11:00:00'),
(3, 3, 'Fievre moderee', 'Syndrome grippal', 'Hydratation et surveillance a domicile.', 12000.00, '2026-04-24 14:15:00');

COMMIT;
