-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 05 nov. 2017 à 18:31
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dcw_touring`
--

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

CREATE TABLE `hotels` (
  `id_hotel` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `stars` tinyint(1) NOT NULL,
  `email` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`id_hotel`, `name`, `street`, `city`, `country`, `stars`, `email`) VALUES
(1, 'Le Grand Cerf', 'rue Saint Blaise', 'Alençon', 'France', 5, 'danssamaison@ungrandcerf.fr'),
(2, 'Hôtel Mercure', 'rue de la Paix', 'Paris', 'France', 4, 'mercurehotel@groupe.com'),
(3, 'Au piment d\'espelette', 'rue de la Paix', 'Saint-Jean de Luz', 'France', 4, 'piment@gmail.com'),
(4, 'Trump Tower', 'Tweet avenue', 'New York', 'USA', 1, 'picsou@donald.com'),
(5, 'Elementary hotel', 'Baker street', 'Londres', 'Angleterre', 3, 'watson@yahoo.uk'),
(6, 'Viva el papa', 'Piazza Navone', 'Rome', 'Italie', 3, 'elpapa@gmail.com'),
(7, 'Pizza Hotel', 'El camino della pasta', 'Milan', 'Italie', 2, 'pizza@hut.com'),
(8, 'El carnavalo', 'Via Triestina', 'Venise', 'Italie', 3, 'elcarnavalo@hotmail.it'),
(9, 'Le petit Vatel', 'place de Lancrel', 'Alençon', 'France', 4, 'petitvatel@alencon.fr');

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id_offer` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_description` varchar(255) NOT NULL,
  `option_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id_offer`, `id_hotel`, `option_name`, `option_description`, `option_price`) VALUES
(1, 1, 'Maison hantée', 'Vivez une expérience mémorable dans un vrai hôtel désaffecté. Les rats et les pigeons sont authentiques !', 500),
(2, 1, 'Maison hantée formule éco', 'Comme la formule \"Maison hantée\", mais sans les rats.', 100),
(3, 2, 'Vue sur la tour eiffel', 'Clignotement de la tour commandé depuis la chambre', 300),
(4, 3, 'Mer, piscine et piperade', 'Euskal Herrira ongietorria', 80),
(5, 4, 'Pourquoi payer moins cher ?', 'Le mauvais goût au prix fort', 5000),
(6, 5, 'Sur les pas de Sherlock Holmes', 'Avec déguisements d\'époque. Thé avec la reine tous les jeudi.', 350),
(7, 6, 'Formule pèlerin', 'Vous aurez faim, mais ce sera bien', 40),
(8, 7, 'L\'Italie à petit prix', 'Une pizza offerte à l\'arrivée (sauce pimentée en supplément 50 €)', 200),
(9, 8, 'Formule carnaval', 'Vivez le carnaval de Venise de l\'intérieur. Frissons garantis', 600),
(10, 9, 'Charme de la province', 'Un séjour au calme dans la plus belle ville de France', 150);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id_offer`),
  ADD KEY `offers_hotels_id_hotel` (`id_hotel`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_hotels_id_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotels` (`id_hotel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
