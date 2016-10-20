-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Octobre 2016 à 20:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `appartoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `prenom`, `nom`, `email`, `adresse`, `tel`, `site`, `id_user`) VALUES
(1, 'julie', 'jcp', 'julie.jcp@gmail.com', '78865ez frzsfs', '06070902', 'http://www.google.com', 4),
(2, 'walid', 'baya', 'walid@baya.com', '176 av jkd', '0758502444', 'http://walidbaya.com', 4),
(7, 'weed', 'baya', 'walid@baya.com', '176 av jkd', '0758502444', 'http://walidbaya.com', 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'ww', 'ww', 'w@w.w', 'w@w.w', 1, 'kpapvauic0gcgo8sw00kksc0koocok', 'z4ZOhAjXR5w4+F/17os8Whi6yiop1xHVTbWLrjak4ErS56NJBWwwiuiNqYAoNonpUlr5iKUIPVP1vNgRXUpoFA==', '2016-10-20 16:02:52', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, 'walid', 'walid', 'walid.baya@gmail.com', 'walid.baya@gmail.com', 1, '2axdsskgcbdws8cw8oc8g8ooc8wok80', '42sdP5arJpCr7befAgQ6cM/NPdSfWVPrO0D6JQdZt7yn/nTvH7j51TFGfiYk44q6Pjk0EHwzgpFjg8s1qptaxg==', '2016-10-20 19:03:59', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(3, 'julie', 'julie', 'julie@julie.com', 'julie@julie.com', 1, 'prdapa2ij74o8sssoo4gc840gssgcoc', 'l2RkB1Yrc6BhmFAywgEmTw3+sWWQkyWW9lWk3eQM2EWnhzrouSSABW1izwR2k14zdKkdZojokp5sbMTsh9s+NA==', '2016-10-20 19:03:43', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:9:"ROLE_USER";}', 0, NULL),
(4, 'julie1', 'julie1', 'julie1@gmail.com', 'julie1@gmail.com', 1, 'bn45oszf6jsocg00o4k4wc0g0koooc4', 'Y90GiXj70lOsfIqGJmCJHMYYSqBshmH3SbQ8f1VAW9Z4ia6bp3ive7Rd87k2kC8939EG/T3U/+SEsP2s1dJCog==', '2016-10-20 19:04:13', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
