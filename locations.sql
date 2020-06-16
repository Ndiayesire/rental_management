-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 avr. 2020 à 18:54
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `locations`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `matricule` varchar(10) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`matricule`, `id_role`) VALUES
('1054778', 1053803),
('1054889', 10538745);

-- --------------------------------------------------------

--
-- Structure de la table `bien_immobilier`
--

CREATE TABLE `bien_immobilier` (
  `id_bien` int(25) NOT NULL,
  `nom_bien` varchar(25) NOT NULL,
  `id_quartier` int(25) NOT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `nombre_chambre` smallint(10) NOT NULL,
  `nombre_sallon` int(25) NOT NULL,
  `nombre_etage` int(25) NOT NULL,
  `nombre_salle_de_bain` int(25) NOT NULL,
  `description` text NOT NULL,
  `surface` int(25) NOT NULL,
  `jardin` tinyint(1) NOT NULL,
  `matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bien_immobilier`
--

INSERT INTO `bien_immobilier` (`id_bien`, `nom_bien`, `id_quartier`, `disponibilite`, `nombre_chambre`, `nombre_sallon`, `nombre_etage`, `nombre_salle_de_bain`, `description`, `surface`, `jardin`, `matricule`) VALUES
(5, 'Parcelle', 12345, 1, 5, 2, 5, 2, 'Propre', 250, 1, '1053803');

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

CREATE TABLE `louer` (
  `matricule` varchar(10) NOT NULL,
  `id_ville` int(25) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `montant_caution` double NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `louer`
--

INSERT INTO `louer` (`matricule`, `id_ville`, `date_debut`, `date_fin`, `montant_caution`, `prix`) VALUES
('10538034', 2, '2020-04-26', '2020-05-10', 75000, 750000),
('1053814', 3, '2020-04-12', '2020-04-29', 75000, 545000),
('1054889', 5, '2020-04-25', '2020-04-30', 125000, 350000),
('10534603', 6, '2020-04-09', '2020-04-04', 125000, 350000),
('105346037', 7, '2020-04-09', '2020-04-04', 125000, 350000);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `date_de_naisance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`matricule`, `nom`, `prenom`, `telephone`, `email`, `adresse`, `date_de_naisance`) VALUES
('1053803', 'KANE', 'Ndiaye Sire', '778673184', 'ndiayesirekane@gmail.com', 'Mbour', '1996-11-05'),
('1053814', 'DIATTARA', 'Aly', '775486931', 'Grandali@hotmail.fr', 'Grand Mbour', '2020-04-09'),
('1054778', 'NDAO', 'Amadou Bourtanda', '783040842', 'superadmin@mail.com', 'Rufisque', '1999-02-24');

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `id_quartier` int(25) NOT NULL,
  `id_ville` int(25) NOT NULL,
  `nom_quartier` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quartier`
--

INSERT INTO `quartier` (`id_quartier`, `id_ville`, `nom_quartier`) VALUES
(2, 5390, 'Corona'),
(4, 5392, 'Thioce');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `status_role` varchar(25) NOT NULL,
  `code_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `status_role`, `code_role`) VALUES
(3, 'Permanence', 1053808),
(4, 'Vacataire', 1053803),
(7, 'Vacataire', 1053807);

-- --------------------------------------------------------

--
-- Structure de la table `type_bien`
--

CREATE TABLE `type_bien` (
  `Nom_bien` varchar(25) NOT NULL,
  `Code_du_bien` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_bien`
--

INSERT INTO `type_bien` (`Nom_bien`, `Code_du_bien`) VALUES
('Etage', 87),
('maison', 1025),
('Parcelle', 123);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `nom_ville` varchar(25) NOT NULL,
  `pays` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom_ville`, `pays`) VALUES
(5393, 'Abuja', 'Nigeria'),
(5394, 'Paris', 'France'),
(5395, 'DAKAR', 'Senegal'),
(5396, 'Kaolack', 'Senegal'),
(5397, 'Marseille', 'France'),
(5398, 'Lens', 'France'),
(5401, 'Paris', 'France');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`matricule`,`id_role`);

--
-- Index pour la table `bien_immobilier`
--
ALTER TABLE `bien_immobilier`
  ADD PRIMARY KEY (`id_bien`);

--
-- Index pour la table `louer`
--
ALTER TABLE `louer`
  ADD PRIMARY KEY (`id_ville`),
  ADD UNIQUE KEY `matricule` (`matricule`,`id_ville`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`matricule`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id_quartier`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `type_bien`
--
ALTER TABLE `type_bien`
  ADD PRIMARY KEY (`Nom_bien`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bien_immobilier`
--
ALTER TABLE `bien_immobilier`
  MODIFY `id_bien` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `louer`
--
ALTER TABLE `louer`
  MODIFY `id_ville` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `id_quartier` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5402;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
