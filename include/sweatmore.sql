-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 02 sep. 2019 à 11:05
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `sweatmore`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `photo1` varchar(100) DEFAULT NULL,
  `photo2` varchar(100) DEFAULT NULL,
  `photo3` varchar(100) DEFAULT NULL,
  `ref` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `cat`, `descri`, `photo1`, `photo2`, `photo3`, `ref`) VALUES
(1, 'test', 'sweat', 'test', '5.jpg', '', '', ''),
(2, 'test', 'sweat', 'test', 'img/sweat_front.jpg', 'img/sweat_front.jpg', '', ''),
(3, 'test', 'sweat', 'test', 'img/sweat_front.jpg', '', '', ''),
(4, 'ezev', 'tshirt', 'zevezv', 'img/tshirt_front.jpg', 'img/tshirt_front.jpg', '', ''),
(5, 'azf', 'basket', 'zafazf', 'img/basket_cote.jpg', '', '', ''),
(6, 'ezgezgze', 'homme', 'gzegze', 'img/tenue_complete_men_back.jpg', '', '', ''),
(7, 'zafazf', 'sweat', 'zafazfaz', NULL, '', '', ''),
(8, 'zfazgtttt', 'sweat', 'ttttt', NULL, '', '', ''),
(9, 'zgzg', 'basket', 'azgazgz', NULL, NULL, NULL, 'AZERTY1'),
(10, 'fezfezfezf', 'tshirt', 'ezfezfze', NULL, NULL, NULL, 'ABD123H'),
(11, 'qsfqsqsf', 'basket', 'sqfqsfqsf', NULL, NULL, NULL, 'ABC123H');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'root@root');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'user',
  `date_de_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `sexe` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `role`, `date_de_naissance`, `email`, `mdp`, `sexe`) VALUES
(1, 'test', 'test', 'user', '2019-08-09', 'root@root.fr', 'root', 'homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
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
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;