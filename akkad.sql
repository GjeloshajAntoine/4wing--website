-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2018 at 11:27 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akkad`
--

-- --------------------------------------------------------

--
-- Table structure for table `citations`
--

CREATE TABLE `citations` (
  `id` int(11) NOT NULL,
  `citation` text NOT NULL,
  `ln` varchar(4) NOT NULL,
  `categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citations`
--

INSERT INTO `citations` (`id`, `citation`, `ln`, `categorie`) VALUES
(1, 'Citation santé', 'fr', 'sante');

-- --------------------------------------------------------

--
-- Table structure for table `contactte`
--

CREATE TABLE `contactte` (
  `id` int(11) NOT NULL,
  `non` varchar(50) DEFAULT NULL,
  `prenon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactte`
--

INSERT INTO `contactte` (`id`, `non`, `prenon`) VALUES
(1, 'fdsgs', 'qdsfsfd'),
(2, 'pipetlet', 'ketilop'),
(3, 'azert', 'dfdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `reponses` text NOT NULL,
  `langues` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `questions`, `reponses`, `langues`) VALUES
(1, 'Pour quoi la rose ?', 'Parce que la rose et rose !', ''),
(4, 'Où manger un kebab ?', 'Chez 4wings kebeb ! ', ''),
(5, 'Comment introduire le \"a\" ?', 'Vous aller à inject un mot !', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages_trad`
--

CREATE TABLE `pages_trad` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `string_origin` text NOT NULL,
  `string_trad` text NOT NULL,
  `lg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages_trad`
--

INSERT INTO `pages_trad` (`id`, `page_name`, `string_origin`, `string_trad`, `lg`) VALUES
(1, 'vraipage', 'title', 'La vrai page !', 'fr'),
(2, 'vraipage', 'title', 'The real title', 'en'),
(3, 'vraipage', 'permierparagrphe', 'Ceci est un parageahfgaherjgf\r\negfvkhgfzgrhjgvblerigvµ\r\nEN FRANCAIS', 'fr'),
(4, 'vraipage', 'permierparagrphe', 'jhregfhjegfvbhqebhfv\r\nIN ENGLISH\r\nYEAHHH', 'en'),
(5, 'vraipage', 'citation', 'Ceci est une citaion', 'fr'),
(6, 'vraipage', 'citation', 'this is a quote', 'en'),
(7, 'page2', 'title', 'ceci est un tire', 'fr'),
(8, 'page2', 'title', 'thats a title', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `page_faq`
--

CREATE TABLE `page_faq` (
  `id` int(11) NOT NULL,
  `quetions` text NOT NULL,
  `reponses` text NOT NULL,
  `langues` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_faq`
--

INSERT INTO `page_faq` (`id`, `quetions`, `reponses`, `langues`) VALUES
(1, 'Où manger un kebab ?', 'Chez 4wings kebeb ! ', ''),
(3, 'Pourquoi il est perdu ?', 'parceque c\'est akkad !', ''),
(4, 'Hier je le trouve ou ?', 'Demain tu le trouveras !', ''),
(5, 'weees on ', 'oui c\'est moi ', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects_parrains`
--

CREATE TABLE `projects_parrains` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `parrain` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects_porteur`
--

CREATE TABLE `projects_porteur` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects_trad`
--

CREATE TABLE `projects_trad` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `field` text NOT NULL,
  `trad` text NOT NULL,
  `ln` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `username`, `email`, `password`) VALUES
(2, 'Malibansou', 'Akkadou', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wings_user`
--

CREATE TABLE `wings_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0:user admin :peut ajouter des utilisateurs, 1:user normal ,peut uniquement publier du contenu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wings_user`
--

INSERT INTO `wings_user` (`id`, `name`, `password`, `auth`) VALUES
(2, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citations`
--
ALTER TABLE `citations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactte`
--
ALTER TABLE `contactte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_trad`
--
ALTER TABLE `pages_trad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_faq`
--
ALTER TABLE `page_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_trad`
--
ALTER TABLE `projects_trad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wings_user`
--
ALTER TABLE `wings_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citations`
--
ALTER TABLE `citations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactte`
--
ALTER TABLE `contactte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages_trad`
--
ALTER TABLE `pages_trad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_faq`
--
ALTER TABLE `page_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects_trad`
--
ALTER TABLE `projects_trad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wings_user`
--
ALTER TABLE `wings_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
