-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 07 Juin 2015 à 19:19
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ftz`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genre_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenoms_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ddn_contact` date NOT NULL,
  `fonction_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel_contact` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `societe_id` int(11) NOT NULL,
  `etat` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `contacts`
--

INSERT INTO `contacts` (`id`, `genre_contact`, `nom_contact`, `prenoms_contact`, `ddn_contact`, `fonction_contact`, `service_contact`, `description_contact`, `adresse_contact`, `email_contact`, `tel_contact`, `societe_id`, `etat`, `created_at`, `updated_at`) VALUES
(2, 'Monsieur', 'Camara', 'Moussa', '0000-00-00', 'Marketeur ', 'Marketing', '', 'Casablanca, Maroc', 'camaramouss@gmail.com', '0608834111', 1, '1', '2015-05-26 01:08:51', '2015-05-30 01:06:54'),
(3, 'Monsieur', 'Sy Savané ', 'Hassane', '0000-00-00', '', '', '', '', '', '0', 1, '1', '2015-05-27 13:01:42', '2015-05-27 13:01:42'),
(4, 'Monsieur', 'Camara', 'Mory', '0000-00-00', '', '', '', '', '', '0', 1, '1', '2015-05-27 13:05:35', '2015-05-27 13:05:35'),
(5, 'Monsieur', 'Sefraoui', 'Nada', '0000-00-00', '', '', '', '', '', '0', 1, '0', '2015-05-27 13:06:02', '2015-05-28 04:48:54'),
(6, 'Monsieur', 'Dramé ', 'Moussa', '0000-00-00', 'Commercial', 'Service Commercial', '', '', '', '0', 7, '1', '2015-05-27 16:45:16', '2015-05-27 16:45:16'),
(7, 'Madame', 'Kaba', 'Mariama', '0000-00-00', 'Comptable', 'Service Comptabilité', '', '', '', '6060608', 7, '1', '2015-05-27 16:47:35', '2015-05-27 16:47:35'),
(8, 'Monsieur', 'Baldet', 'Fatou', '0000-00-00', '', '', '', '', '', '0', 7, '1', '2015-05-27 16:55:27', '2015-05-27 16:55:27'),
(9, 'Monsieur', 'Keita', 'Bintou', '0000-00-00', '', '', '', '', '', '0', 7, '1', '2015-05-27 17:03:07', '2015-05-27 17:03:07');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL,
  `capital` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_sub_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iso_3166_2` char(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `iso_3166_3` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `region_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sub_region_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `eea` tinyint(1) NOT NULL DEFAULT '0',
  `calling_code` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `countries_id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_11_022814_create_contact_table', 2),
('2015_05_11_140639_create_societe_table', 3),
('2015_05_15_030425_create_societes_table', 4),
('2015_05_15_030446_create_contacts_table', 4),
('2015_05_16_040051_setup_countries_table', 5),
('2015_05_16_040052_charify_countries_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `societes`
--

CREATE TABLE IF NOT EXISTS `societes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_clt` text COLLATE utf8_unicode_ci NOT NULL,
  `effectif_clt` int(11) DEFAULT NULL,
  `ca_clt` int(11) DEFAULT NULL,
  `comment_clt` text COLLATE utf8_unicode_ci,
  `num_tva_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_siege_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax_siege_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_siege_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville_siege_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etat_siege_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pays_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse_siege_clt` text COLLATE utf8_unicode_ci,
  `tel_usine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax_usine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rue_usine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etat_usine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pays_usine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_account_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activite_clt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statut` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '0',
  `etat` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Contenu de la table `societes`
--

INSERT INTO `societes` (`id`, `nom_clt`, `effectif_clt`, `ca_clt`, `comment_clt`, `num_tva_clt`, `url_clt`, `tel_siege_clt`, `fax_siege_clt`, `email_siege_clt`, `ville_siege_clt`, `etat_siege_clt`, `pays_clt`, `adresse_siege_clt`, `tel_usine`, `fax_usine`, `rue_usine`, `etat_usine`, `pays_usine`, `bank_account_clt`, `activite_clt`, `statut`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Valius Corporation', 15, 15000000, '', 'RB1225', 'www.valius.com', '+212614151689', 'CSA145', 'valius@valius.com', 'Casablanca', '', 'Maroc', '', '', '', '', '', '', '', '', '0', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'FTZ', 0, 0, '', '', '', '0608080808', '', 'ftz@ftz.fr', 'Casablanca', '', 'MA', '', '', '', '', '', '', '', '', '0', '0', '2015-05-16 16:50:39', '2015-05-25 16:44:46'),
(3, 'Familia', 0, 0, '', '', '', '0601040508', '', 'familia@familia.com', 'Conakry', '', 'GN', '', '', '', '', '', '', '', '', '0', '0', '2015-05-16 16:59:41', '2015-05-25 18:09:10'),
(4, 'Familia', 0, 0, '', '', '', '0601040508', '', 'ftz@ftz.fr', 'Casablanca', '', 'DZ', '', '', '', '', '', '', '', '', '0', '1', '2015-05-16 17:49:48', '2015-05-23 01:30:02'),
(5, 'Familia', 0, 0, '', '', '', '0601040508', '', 'ftz@ftz.fr', 'Casablanca', '', 'DZ', '', '', '', '', '', '', '', '', '0', '1', '2015-05-16 17:50:06', '2015-05-23 01:35:37'),
(6, 'FTZ', 0, 0, '', '', '', '0608080808', '', 'ftz@ftz.fr', 'Conakry', '', 'AD', '', '', '', '', '', '', '', '', '0', '1', '2015-05-16 17:50:51', '2015-05-23 01:36:06'),
(7, 'UPS', 20, 25000, 'Société de logistique', '1010', 'http://www.ups.com', '0610102020', 'B1520', 'upslogistic@ups.com', 'Casablanca', '', 'MA', 'Boulevard Zerktouni 4512 Immeuble Rafiq Etage 2 Appartement 3 Casablanca, Maarif Maroc', '', '', '', '', '', '', '', '0', '1', '2015-05-17 04:12:38', '2015-05-23 01:36:15'),
(8, 'Fractus', 0, 0, '', '', '', '00600606', '', '', 'Alger', '', 'Algérie', '', '', '', '', '', '', '', '', '0', '1', '2015-05-22 02:53:34', '2015-05-25 15:59:37'),
(9, 'ABRICO', 15, 200000, '', '5124', 'http:/www.abrico.com', '0601020304', '', 'abrico@abrico.com', 'Rabat', '', 'Maroc', '', '', '', '', '', '', '', '', '0', '1', '2015-05-22 12:15:58', '2015-05-25 15:59:50'),
(10, 'Prime Society', 0, 0, '', '', '', '', '', '', 'Rabat', '', 'Maroc', '', '', '', '', '', '', '', '', '0', '1', '2015-05-22 13:49:35', '2015-05-22 13:49:35'),
(11, 'Société Générale des Banques de Guinée SARL', 0, 0, '', '', '', '', '', '', '', '', 'Afghanistan', '', '', '', '', '', '', '', '', '0', '1', '2015-05-22 21:40:32', '2015-05-22 21:40:32'),
(12, 'Société Générale des Banques de Guinée SARL', 0, 0, '', '', '', '', '', '', '', '', 'Afghanistan', '', '', '', '', '', '', '', '', '0', '0', '2015-05-22 21:45:18', '2015-05-23 01:35:54'),
(13, 'Suptechnology ', 15, 1000000, '', '', '', '', '', '', '', '', 'Maroc', '', '', '', '', '', '', '', '', '0', '1', '2015-05-27 12:16:08', '2015-05-27 12:18:54'),
(14, 'ValueSap', 0, 0, '', '', '', '', '', '', '', '', 'Maroc', '', '', '', '', '', '', '', '', '0', '1', '2015-05-29 14:52:32', '2015-05-29 14:52:32'),
(62, 'Mauritania', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-04 04:51:16', '2015-06-04 04:51:16'),
(63, 'Mauritania', 100, 25000000, 'Compagnie aérienne', NULL, NULL, '212614458796', NULL, 'mauritania@mauritania.fr', 'Tanger', NULL, 'Maroc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-04 04:53:07', '2015-06-04 04:53:07'),
(64, 'Mauritania', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-04 10:47:22', '2015-06-04 10:47:22'),
(65, 'Mauritania', 100, 25000000, 'Compagnie aérienne', NULL, NULL, '212614458796', NULL, 'mauritania@mauritania.fr', 'Tanger', NULL, 'Maroc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51'),
(66, 'SupValue', 15, 1000000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Maroc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51'),
(67, 'Marius', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51'),
(68, 'TechnoLab', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51'),
(69, 'Fiera', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51'),
(70, 'Belingo Gold', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51'),
(71, 'Rio Tinto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51'),
(72, 'Valey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2015-06-05 06:45:51', '2015-06-05 06:45:51');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
