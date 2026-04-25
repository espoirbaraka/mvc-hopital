CREATE DATABASE IF NOT EXISTS hopital;
USE hopital;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--=========================
-- TABLE MEDICAMENT
-- ========================
CREATE TABLE `tbl_medicament` (
  `code_medicament` INT NOT NULL AUTO_INCREMENT,
  `designation` VARCHAR(50) NOT NULL,
  `description` TEXT NOT NULL,
  `prix` FLOAT NOT NULL,
  PRIMARY KEY (`code_medicament`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertion des données
INSERT INTO `tbl_medicament` (`designation`, `description`, `prix`) VALUES
('ASPIRINE', 'Traite la tete', 1000);

-- ========================
-- TABLE PATIENT
-- ========================
CREATE TABLE `tbl_patient` (
  `code_patient` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `postnom` VARCHAR(50) NOT NULL,
  `prenom` VARCHAR(50) NOT NULL,
  `date_naissance` DATETIME NOT NULL,
  `adresse` TEXT NOT NULL,
  `telephone` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`code_patient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

--script pour inserer des donnees dans tbl_medicament

INSERT INTO tbl_medicament (designation, description, prix) VALUES
('PARACETAMOL', 'Soulage la douleur et la fièvre', 500),
('IBUPROFENE', 'Anti-inflammatoire', 1200),
('AMOXICILLINE', 'Antibiotique', 2500),
('ASPIRINE', 'Maux de tête', 1000),
('VITAMINE C', 'Immunité', 800),
('DOLIPRANE', 'Antalgique', 600);