-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 27 mai 2019 à 09:32
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `synopsis` text NOT NULL,
  `url_affiche` text NOT NULL,
  `pays_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `annee`, `synopsis`, `url_affiche`, `pays_id`) VALUES
(1, 'Le secret de Terabithia', 2007, 'Jess, ado issu d\'une famille nombreuse modeste, et Leslie, fille unique d\'un couple d\'écrivains, s\'inventent un monde imaginaire, Terabithia, pour fuir la difficile réalité de leur vie quotidienne. Lorsque cet univers magique prend vie, ils se trouvent confrontés à des aventures plus périlleuses que ce qu\'ils avaient imaginé.\r\n', 'https://www.chroniquedisney.fr/imgFilm/2000/2007-terabithia-6.jpg\r\n', 1),
(2, 'Sleepy Hollow', 1999, 'Le détective new-yorkais Ichabod Crane est envoyé à Sleepy Hollow pour enquêter sur une série de meurtres mystérieux où les victimes ont été retrouvées décapitées.\r\n', 'http://fr.web.img6.acsta.net/medias/nmedia/18/74/38/21/19255611.jpg\r\n', 1),
(3, 'L\'Histoire sans fin', 1984, 'Depuis la mort de sa mère, Bastien, dix ans, s\'est replié sur lui-même et s\'est bâti un monde imaginaire nourri de romans d\'aventures qu\'il dévore. Un jour, il découvre dans la librairie de M. Koreander un livre intitulé `L\'histoire sans fin\', qu\'il dérobe. Dès les premières pages, Bastien se sent entraîné dans l\'univers merveilleux du pays fantastique.\r\n', 'https://www.telerama.fr/sites/tr_master/files/08c7287a-48f6-4d61-9e9e-578e928573d7_2.jpg\r\n', 1),
(4, 'Jurassic Park', 1993, 'John Parker Hammond, le PDG de la puissante compagnie InGen, parvient à donner vie à des dinosaures grâce à la génétique et décide de les utiliser dans le cadre d’un parc d\'attractions qu’il compte ouvrir sur une île au large du Costa Rica. Avant l\'ouverture, il fait visiter le parc à un groupe d\'experts pour obtenir leur aval. Pendant la visite, une tempête éclate et un informaticien corrompu par une entreprise rivale en profite pour couper les systèmes de sécurité afin de voler des embryons de dinosaures. En l\'absence de tout système de sécurité pendant plusieurs heures, les dinosaures s\'échappent sans mal, mais le cauchemar des visiteurs ne fait que commencer...\r\n', 'https://image.noelshack.com/fichiers/2019/21/2/1558424682-affiche-jurassic.jpg\r\n', 1),
(5, 'Good Morning England', 2009, 'En 1966, le rock explose dans le monde, et notamment au Royaume-Uni. Pourtant, la BBC diffuse moins de 45 minutes quotidiennes de ce nouveau son. Radio Rock, une radio pirate, diffuse ses programmes depuis un bateau naviguant dans les eaux internationales de la mer du Nord, au large de la côte anglaise. Le gouvernement britannique est bien décidé à réduire ces voix dissidentes au silence, mais ces incroyables disc jockeys ne comptent pas se laisser faire. Quand ils occupent l\'antenne avec de la drogue et du rock\'n\'roll, près d\'un Anglais sur deux est à l\'écoute.\r\n', 'https://image.noelshack.com/fichiers/2019/21/2/1558425263-good-morning.jpg\r\n', 2),
(6, 'Le Bon, la Brute et le Truand', 1966, 'Le film raconte l\'histoire de trois as de la gâchette qui durant la guerre de Sécession sont à la recherche d\'un chargement d\'or disparu. Le premier à être présenté est Tuco Benedicto Pacifico Juan Maria Ramirez, un criminel ayant commis de nombreux délits et dont la tête est mise à prix. Tuco est de connivence avec Blondin, ce dernier livre Tuco aux autorités, encaisse la prime de l\'arrestation et libère ensuite son complice au moment où celui-ci est pendu. Les deux se partagent ensuite le butin et refont la même opération dans les comtés voisins. Durant ce temps, un troisième personnage nommé Sentenza, un tueur sans pitié, apprend l\'existence d\'un coffre rempli de pièces d\'or des Confédérés, caché par un soldat nommé Bill Carson. Il commence donc à chercher plus d\'informations à ce sujet.\r\n', 'https://image.noelshack.com/fichiers/2019/21/2/1558426142-bon.jpg\r\n', 1),
(7, 'À tout jamais, une histoire de Cendrillon', 1998, 'Adaptation moderne de la célèbre légende qui connaît dans le monde prés de cinq cents versions dont la premiere serait d\'origine chinoise et liée à la passion bien connue de ce peuple pour les petits pieds. Dans cette version, Danielle, l\'héroïne, n\'a rien d\'une victime et décide de son propre chef de rester dans la maison paternelle après la disparition de son père, entre sa maratre Rodmilla et ses deux soeurs Marguerite et Jacqueline. Cette Cendrillon est belle, libre et surtout eminemment spirituelle et cultivée. Elle saura séduire le futur héritier du trône de France.\r\n', 'https://www.zeguigui.com/dvd/jaquettes/recto/toutjamais.jpg\r\n', 1),
(8, 'Matilda', 1996, 'Blondin décide de rompre son partenariat avec Tuco l\'abandonnant dans le désert. Tuco réussit cependant à survivre et après une traversée de plus de 100 km, il arrive, complètement épuisé, dans un petit village. Il décide de se venger. Il retrouve rapidement Blondin et le capture, profitant d\'une diversion offerte par la retraite des Confédérés de Californie. Il inverse alors les rôles, contraignant son ex-compagnon à le suivre à pied dans le désert. Alors que Tuco est sur le point d\'abattre Blondin, il aperçoit une diligence remplie de soldats confédérés, morts ou mourants. Parmi ceux-ci se trouve Bill Carson, l\'homme recherché par Sentenza. Carson révèle à Tuco le nom du cimetière où est caché l\'or, mais demande de l\'eau en échange du nom sur la tombe. Pendant que Tuco va chercher une gourde, Carson meurt, non sans avoir donné le nom de la tombe à Blondin, qui tout à coup devient très important pour Tuco. Celui-ci devra donc le soigner pour connaître le nom en question. Tuco conduit alors Blondin mourant dans une mission catholique administrée par son frère. Après avoir quitté la mission, Tuco et Blondin, déguisés en soldats confédérés, sont capturés par un groupe de soldats de l\'Union et sont conduits dans un camp de prisonniers2.\r\n', './img/matilda.jpg\r\n', 1),
(9, 'Hocus Pocus', 1995, 'Halloween 1993 : Pour gagner le coeur de sa bien-aimée, Max Dennison, va, par bravade, allumer la bougie fatidique qui a le pouvoir de faire renaître les trois soeurs Sanderson Winifred, Sarah et Mary, les trois plus célèbres sorcières de Salem.\r\n', 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/17/10/30/11/11/1959558.jpg\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE `participe` (
  `personne_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participe`
--

INSERT INTO `participe` (`personne_id`, `role_id`, `film_id`) VALUES
(1, 2, 1),
(2, 2, 1),
(3, 2, 1),
(36, 1, 1),
(4, 2, 2),
(5, 2, 2),
(6, 2, 2),
(7, 1, 2),
(8, 2, 3),
(9, 2, 3),
(10, 2, 3),
(11, 1, 3),
(12, 2, 4),
(13, 2, 4),
(14, 2, 4),
(15, 1, 4),
(16, 2, 5),
(17, 2, 5),
(18, 2, 5),
(19, 1, 5),
(20, 2, 6),
(21, 2, 6),
(22, 2, 6),
(23, 1, 6),
(25, 2, 8),
(24, 2, 7),
(26, 2, 7),
(27, 1, 7),
(28, 2, 8),
(29, 2, 8),
(30, 2, 8),
(31, 1, 8),
(32, 1, 9),
(33, 2, 9),
(34, 2, 9),
(35, 2, 9);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(6) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'USA'),
(2, 'Royaume Uni'),
(3, 'Allemagne'),
(4, 'Italie'),
(5, 'Nouvelle-Zélande');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `pays_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `full_name`, `pays_id`) VALUES
(1, 'AnnaSophia Robb', 1),
(2, 'Josh Hutcherson', 1),
(3, 'Bailee Madison', 1),
(4, 'Johnny Depp', 1),
(5, 'Christina Ricci', 1),
(6, 'Christopher Walken', 1),
(7, 'Tim Burton', 1),
(8, 'Gerald McRaney', 1),
(9, 'Noa Hataway', 1),
(10, 'Thomas Hill', 1),
(11, 'Wolfgang Petersen ', 3),
(12, 'Sam Neil', 5),
(13, 'Laura Dern', 1),
(14, 'Jeffrey Goldblum', 1),
(15, 'Steven Spielberg', 1),
(16, 'Tom Sturridge', 2),
(17, 'Philip Hoffman', 1),
(18, 'Rhys Ifans', 2),
(19, 'Richard Curtis', 5),
(20, 'Clint Eastwood', 1),
(21, 'Lee Van Cleef', 1),
(22, 'Eli Wallach', 1),
(23, 'Sergio Leone', 4),
(24, 'Drew Barrymore', 1),
(25, 'Dougray Scott', 1),
(26, 'Anjelica Huston', 1),
(27, 'Andy Tennant', 1),
(28, 'Mara Wilson', 1),
(29, 'Rhea Perlman', 1),
(30, 'Embeth Davidtz', 1),
(31, 'Danny Devito', 1),
(32, 'Kenny Ortega', 1),
(33, 'Sarah Jessica Parker', 1),
(34, 'Kathy Najimy', 1),
(35, 'Tobias Jelinek', 1),
(36, 'Csupo Gabor', 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(6) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nom`) VALUES
(1, 'Réalisateur'),
(2, 'Acteur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pays_id` (`pays_id`);

--
-- Index pour la table `participe`
--
ALTER TABLE `participe`
  ADD KEY `fk_personne` (`personne_id`),
  ADD KEY `fk_role` (`role_id`),
  ADD KEY `fk_film` (`film_id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pays` (`pays_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_pays_id` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `fk_personne` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`),
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `fk_pays` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
