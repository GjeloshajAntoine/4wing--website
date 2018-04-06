-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 20 Mars 2018 à 14:05
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `citations`
--

CREATE TABLE `citations` (
  `id` int(11) NOT NULL,
  `citation` text NOT NULL,
  `auteur` text NOT NULL,
  `ln` varchar(4) NOT NULL,
  `categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `citations`
--

INSERT INTO `citations` (`id`, `citation`, `auteur`, `ln`, `categorie`) VALUES
(1, 'Citation santé ', 'éditée', 'fr', 'sante'),
(2, 'Dat is een citation', '', 'nl', 'techEducation'),
(3, ' is a test  changde', 'un auteur de test', 'en', 'techEducation'),
(4, 'test in engerish', '', 'en', 'sante'),
(5, 'Test interface admin +1', '', 'nl', 'sante'),
(6, 'Nouvelle  citation test d\'auteur', 'ceci est un auteur de citation', 'nl', 'sante');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `reponses` text NOT NULL,
  `langues` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `faq`
--

INSERT INTO `faq` (`id`, `questions`, `reponses`, `langues`) VALUES
(1, 'Pour quoi la rose ?', 'Parce que la rose et rose !', ''),
(4, 'Où manger un kebab ?', 'Chez 4wings kebeb ! ', ''),
(5, 'Comment introduire le "a" ?', 'Vous aller à inject un mot !', '');

-- --------------------------------------------------------

--
-- Structure de la table `pages_trad`
--

CREATE TABLE `pages_trad` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `string_origin` text NOT NULL,
  `string_trad` text NOT NULL,
  `lg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pages_trad`
--

INSERT INTO `pages_trad` (`id`, `page_name`, `string_origin`, `string_trad`, `lg`) VALUES
(1, 'vraipage', 'title', 'La vrai page ! ---remise Ã&nbsp; kjksbfkjsbq', 'fr'),
(2, 'vraipage', 'title', 'The real title', 'en'),
(3, 'vraipage', 'permierparagrphe', 'Ceci est un paragraphe changée\r\nBootstrap test', 'fr'),
(4, 'vraipage', 'permierparagrphe', 'fvIN ENGLISHYEAHHH', 'en'),
(5, 'vraipage', 'citation', 'Ceci est une citaion test test update', 'fr'),
(6, 'vraipage', 'citation', 'this is a  updataded', 'en'),
(7, 'page2', 'title', 'ceci <i>est</i> un tire', 'fr'),
(8, 'page2', 'title', 'thats a title', 'en'),
(10, 'missions', 'titre', '<h1>Nos  <span class="marron">missions</span></h1>', 'fr'),
(11, 'missions', 'titre', '<h1>Nos  <span class="marron">missions</span></h1>', 'en'),
(12, 'missions', 'titre', '<h1>Onze missies</h1>', 'nl'),
(13, 'missions', 'paragraphe_1', '                Cette expérience est passionnante. La <b>4WINGS Foundation</b> est très jeune. Avant tout, nous voulons essayer, agir, participer. Nous apprenons en faisant. Nous sommes convaincus que l’esprit d’entreprise a un rôle à jouer dans la construction d’une société plus solidaire.\r\n', 'fr'),
(14, 'missions', 'paragraphe_1', '[EN]Cette expérience est passionnante. La <b>4WINGS Foundation</b> est très jeune. Avant tout, nous voulons essayer, agir, participer. Nous apprenons en faisant. Nous sommes convaincus que l’esprit d’entreprise a un rôle à jouer dans la construction d’une société plus solidaire.\r\n', 'en'),
(15, 'missions', 'paragraphe_1', '[NL]                Cette expérience est passionnante. La <b>4WINGS Foundation</b> est très jeune. Avant tout, nous voulons essayer, agir, participer. Nous apprenons en faisant. Nous sommes convaincus que l’esprit d’entreprise a un rôle à jouer dans la construction d’une société plus solidaire.\r\n', 'nl'),
(16, 'techEducation', 'TitreH1', 'Tech - Education\r\n<i>traduite</i>', 'fr'),
(17, 'techEducation', 'SousTitreH1', 'Programmer in het nedernlands', 'nl'),
(21, 'alimentation', 'titre', 'Santé par la nutrition', 'fr'),
(22, 'alimentation', 'titre', 'Santé par la nutrition', 'nl'),
(23, 'alimentation', 'titre', '__enSanté par la nutrition', 'en'),
(27, 'footer', 'coord', 'Fondation d\'Utilité Publique<br>                 Chaussée de Vieurgat 282 a, boite 1, <br>                 1050 Bruxelles<br><br>                 Belgique<br>', 'fr'),
(28, 'footer', 'coord', '[nl]                 <h4>Fondation d\'Utilité Publique </h4>                 Chaussée de Vieurgat 282 a, boite 1, <br>                 1050 Bruxelles<br>                 Belgique<br>', 'nl'),
(29, 'footer', 'coord', '[en]                 <h4>Fondation d\'Utilité Publique </h4>                 Chaussée de Vieurgat 282 a, boite 1, <br>                 1050 Bruxelles<br>                 Belgique<br>', 'en'),
(30, 'valeurs', 'titre', 'Nos  valeurs', 'fr'),
(31, 'valeurs', 'titre', '[nl] Nos  <span class="marron">valeurs</span>', 'nl'),
(32, 'valeurs', 'titre', '[EN] Nos  valeurs', 'en'),
(33, 'valeurs', 'paragraphe_1', 'Cette expérience est passionnante. La <b>4WINGS Foundation</b> est très jeune. Avant tout, nous voulons essayer, agir, participer. Nous apprenons en faisant. Nous sommes convaincus que l’esprit d’entreprise a un rôle à jouer dans la construction d’une société plus solidaire.', 'fr'),
(34, 'valeurs', 'paragraphe_1', '[nl]Cette expérience est passionnante. La <b>4WINGS Foundation</b> est très jeune. Avant tout, nous voulons essayer, agir, participer. Nous apprenons en faisant. Nous sommes convaincus que l’esprit d’entreprise a un rôle à jouer dans la construction d’une société plus solidaire.', 'nl'),
(35, 'valeurs', 'paragraphe_1', 'Cette expérience est passionnante. La <b>4WINGS Foundation</b> est très jeune. Avant tout, nous voulons essayer, agir, participer. Nous apprenons en faisant. Nous sommes convaincus que l’esprit d’entreprise a un rôle à jouer dans la construction d’une société plus solidaire.', 'en'),
(36, 'header', 'menu_a_propos', '[fr]A propos', 'fr'),
(37, 'header', 'menu_a_propos', '[nl]A propos', 'nl'),
(38, 'header', 'menu_a_propos', '[en]A propos', 'en'),
(39, 'header', 'element_mission', '[fr]missions', 'fr'),
(40, 'header', 'element_mission', '[nl]missions', 'nl'),
(41, 'header', 'element_mission', '[en]missions', 'en'),
(42, 'header', 'element_valeurs', '[fr]Valeurs', 'fr'),
(43, 'header', 'element_valeurs', '[nl]Valeurs', 'nl'),
(44, 'header', 'element_valeurs', '[en]Valeurs', 'en'),
(45, 'header', 'element_selections_projet', '[fr]Sélection de projets', 'fr'),
(46, 'header', 'element_selections_projet', '[nl]Sélection de projets', 'nl'),
(47, 'header', 'element_selections_projet', '[en]Sélection de projets', 'en'),
(48, 'header', 'element_equipes', '[fr]Équipe', 'fr'),
(49, 'header', 'element_equipes', '[nl]Équipe', 'nl'),
(50, 'header', 'element_equipes', '[en]Équipe', 'en'),
(51, 'header', 'element_faq', '[fr]FAQ', 'fr'),
(52, 'header', 'element_faq', '[nl]FAQ', 'nl'),
(53, 'header', 'element_faq', '[en]FAQ', 'en'),
(54, 'header', 'element_reseau_partenaires', '[fr]Réseau & partenaires', 'fr'),
(55, 'header', 'element_reseau_partenaires', '[nl]Réseau & partenaires', 'nl'),
(56, 'header', 'element_reseau_partenaires', '[en]Réseau & partenaires', 'en'),
(57, 'header', 'menu_projets', '[fr]Les projets', 'fr'),
(58, 'header', 'menu_projets', '[nl]Les projets', 'nl'),
(59, 'header', 'menu_projets', '[en]Les projets', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text,
  `category` varchar(200) DEFAULT NULL,
  `link` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logo_file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `category`, `link`, `date`, `logo_file_name`) VALUES
(7, 'titre de test santé', NULL, 'logement', 'http://www.4wings.org/fr/missions', '2018-02-06 14:50:56', 'subway-lines.png'),
(8, 'oui', NULL, 'logement', NULL, '2018-02-06 16:06:37', '589802_1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `projects_images`
--

CREATE TABLE `projects_images` (
  `id` int(11) NOT NULL,
  `image_file_name` text NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projects_images`
--

INSERT INTO `projects_images` (`id`, `image_file_name`, `project_id`) VALUES
(1, '23', 7),
(2, '25', 7),
(5, 'CKYDVxn.png', 7);

-- --------------------------------------------------------

--
-- Structure de la table `projects_parrains`
--

CREATE TABLE `projects_parrains` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `parrain` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projects_porteur`
--

CREATE TABLE `projects_porteur` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projects_trad`
--

CREATE TABLE `projects_trad` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `field` text,
  `trad` text,
  `ln` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projects_trad`
--

INSERT INTO `projects_trad` (`id`, `project_id`, `field`, `trad`, `ln`) VALUES
(19, 7, 'titre', '', 'fr'),
(20, 7, 'le_projet', 'test', 'fr'),
(21, 7, 'soutiens', 'ouiiiiiiii', 'fr'),
(22, 7, 'titre', NULL, 'nl'),
(23, 7, 'le_projet', NULL, 'nl'),
(24, 7, 'soutiens', NULL, 'nl'),
(25, 7, 'titre', NULL, 'en'),
(26, 7, 'le_projet', NULL, 'en'),
(27, 7, 'soutiens', NULL, 'en'),
(28, 8, 'titre', NULL, 'fr'),
(29, 8, 'le_projet', NULL, 'fr'),
(30, 8, 'soutiens', NULL, 'fr'),
(31, 8, 'titre', NULL, 'nl'),
(32, 8, 'le_projet', NULL, 'nl'),
(33, 8, 'soutiens', NULL, 'nl'),
(34, 8, 'titre', NULL, 'en'),
(35, 8, 'le_projet', NULL, 'en'),
(36, 8, 'soutiens', NULL, 'en');

-- --------------------------------------------------------

--
-- Structure de la table `wings_user`
--

CREATE TABLE `wings_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0:user admin :peut ajouter des utilisateurs, 1:user normal ,peut uniquement publier du contenu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `wings_user`
--

INSERT INTO `wings_user` (`id`, `name`, `email`, `password`, `auth`) VALUES
(2, 'test', '', '$2y$10$ezyKF18fPXFI./Z4/I6r2eL4mAeEyNznzOxvuGpH17mveKds/4k.G', 1),
(3, 'admin', '', '$2y$10$NvLfysc6W/Ei21/uoQqj9uQJHXvi.xO52c7/cTI61nUV.8ELRYpU2', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `citations`
--
ALTER TABLE `citations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages_trad`
--
ALTER TABLE `pages_trad`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects_images`
--
ALTER TABLE `projects_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects_trad`
--
ALTER TABLE `projects_trad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `wings_user`
--
ALTER TABLE `wings_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `citations`
--
ALTER TABLE `citations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `pages_trad`
--
ALTER TABLE `pages_trad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `projects_images`
--
ALTER TABLE `projects_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `projects_trad`
--
ALTER TABLE `projects_trad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `wings_user`
--
ALTER TABLE `wings_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
