-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 août 2020 à 16:27
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dradmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `medicaments`
--

CREATE TABLE `medicaments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicaments`
--

INSERT INTO `medicaments` (`id`, `name`, `description`) VALUES
(166, 'jjjjj', 'sdak; ;s;kl sdf;l'),
(167, 'dradmin', 'SDFG');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `mutuelle` varchar(255) NOT NULL,
  `scolarite` varchar(255) NOT NULL,
  `date_naissance_age` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `autre_inforamtions` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `nombre_denfant` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `situation_familiale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `reference`, `cin`, `mutuelle`, `scolarite`, `date_naissance_age`, `adresse`, `tel`, `autre_inforamtions`, `profession`, `nombre_denfant`, `prenom`, `situation_familiale`) VALUES
(160, 'aziz', '', '', '', '', '', '', '', '', '', 0, '', ''),
(163, '', '', '', '', '', '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noumber` int(40) NOT NULL,
  `diplome` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hashpassword` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'admin',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `noumber`, `diplome`, `work`, `password`, `hashpassword`, `role`, `created_at`) VALUES
(45, 'azize', 'azizetrousse1@gmail.com', 2147483647, 'Remarié', 'adward', '$2y$10$ciYppsSFsutckFrlRLX.nu0RkTDSv/cMwrXRROkz0kNs7i7Ul512W', '', 'admin', '2020-07-19 03:36:28'),
(46, 'azize', 'info@semi-colen.com', 2147483647, 'Divorcé', 'jkjjklkljlkj', '$2y$10$8Hzm/38X3AOT2b0J.45TlOiIq0.hSbtJuBNp.gfEKDAvLdh2VBGFG', '', 'admin', '2020-07-19 04:21:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medicaments`
--
ALTER TABLE `medicaments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medicaments`
--
ALTER TABLE `medicaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
