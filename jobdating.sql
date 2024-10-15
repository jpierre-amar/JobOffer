-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 09 oct. 2024 à 14:29
-- Version du serveur : 8.0.35
-- Version de PHP : 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jobdating`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidate`
--

CREATE TABLE `candidate` (
  `use_id` int NOT NULL,
  `job_id` int NOT NULL,
  `dateCandidate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `joboffer`
--

CREATE TABLE `joboffer` (
  `job_id` int NOT NULL,
  `job_dateCreate` date DEFAULT NULL,
  `job_title` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_company` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `job_description` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_salary` int DEFAULT NULL,
  `job_type` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_city` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_provide` tinyint(1) DEFAULT NULL,
  `use_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `joboffer`
--

INSERT INTO `joboffer` (`job_id`, `job_dateCreate`, `job_title`, `job_company`, `job_description`, `job_salary`, `job_type`, `job_city`, `job_provide`, `use_id`) VALUES
(1, '2024-10-07', 'Développeur Full Stack', 'Septeo', 'Au sein de la DSI, vous aurez en charge principalement de la refonte du Système d\'Information qui supporte les activités de l\'entreprise et sur la création de logiciels métiers innovants\r\nLes principales activités sont :\r\nPrendre en charge l\'analyse et la conception technique à partir des User Stories et Spécifications\r\nDévelopper les programmes en respectant coûts, délais et qualité\r\nExécuter les tests unitaires\r\nMaintenir et faire évoluer les applications et les développements existants\r\nLe po', 2500, 'CDI', 'Montpellier', 1, 6),
(2, '2024-09-09', 'UI/UX Développeur ', 'INO', 'INO cx est composée de 4 applications :\r\n- une interface d’administration pour choisir et gérer toutes les fonctionnalités\r\n- une application dédiée aux conseillers et superviseurs pour traiter les interactions (décrocher un appel, répondre à un email, envoyer un message chat, etc.)\r\n- une console de pilotage pour suivre toutes les performances avec des tableaux de bord et des graphiques personnalisables\r\n- une interface de gestion globale destinée à nos partenaires et revendeurs\r\nEn nous rejoig', 2800, 'CDD', 'Metz', 1, NULL),
(3, '2024-08-12', 'Developpeur Php', 'Acelys', '– Concevoir, développer et maintenir des applications web en PHP/ Symfony.\r\n– Intervenir à chaque étape du processus de développement.\r\n– Garantir un code de qualité tout en appliquant les standards de développement.\r\n– Étudier les attentes des utilisateurs afin de définir les objectifs métier.\r\n– Veiller à ce que les conceptions d’applications répondent aux objectifs métier définis.\r\n– Contribuer à l’analyse des besoins et à la rédaction des documents techniques.\r\n\r\nProfil recherché\r\n– Vous dét', 2300, 'CDI', 'Montpellier', 1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `jobofferskills`
--

CREATE TABLE `jobofferskills` (
  `job_id` int NOT NULL,
  `ski_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `ski_id` int NOT NULL,
  `ski_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`ski_id`, `ski_name`) VALUES
(1, 'Java'),
(2, 'JavaScript'),
(3, 'PHP'),
(4, 'C#'),
(5, 'C++'),
(6, 'C'),
(7, 'React'),
(8, 'Python'),
(9, 'Sql'),
(10, 'Ruby'),
(11, 'Flutter'),
(12, 'Swift');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `use_id` int NOT NULL,
  `use_isCompagny` tinyint(1) NOT NULL,
  `use_nameCompagny` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `use_firstName` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `use_lastName` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `use_email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `use_pwd` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `use_description` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `use_link` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `use_speciality` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `use_city` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`use_id`, `use_isCompagny`, `use_nameCompagny`, `use_firstName`, `use_lastName`, `use_email`, `use_pwd`, `use_description`, `use_link`, `use_speciality`, `use_city`) VALUES
(1, 0, '', 'Jean', 'Dupont', 'jean.dupont@gmail.com', '$2y$10$AyYuQpGzEu1ptruCCRCKgO0avYHeSuJqyeAmdEwDGJqSm7UgxQjYW', 'Passionné de technologie et de développement web', 'https://jeandupont.com', 'Développeur Full Stack', 'Paris'),
(2, 0, '', 'Marie', 'Martin', 'marie.martin@gmail.com', '$2y$10$vZKVTnn5w7T6iI3UQ4ZjB.Sl71OcYcSOujjFppIgvcSEmgHlkKxBa', 'Designer UX/UI avec 5 ans d\'expérience', 'https://mariemartin.design', 'Designer UX/UI', 'Lyon'),
(3, 0, '', 'Pierre', 'Lefebvre', 'pierre.lefebvre@gmail.com', '$2y$10$4KCyfAXTUdDJagr8g5YeNeFl/OIfnI.RZINYQgq26rcpnOhLo11s.', 'Expert en base de données', 'https://pierrelefebvre.security', 'Administrateur de bases de données ', 'Marseille'),
(4, 0, '', 'Sophie', 'Dubois', 'sophie.dubois@gmail.com', '$2y$10$wXgafOoFMrNQ8H.Tfn5rbuIBkWMOubkZ194SHNlWpCPDPYAjIMhC.', 'Passionnée de Design', 'https://sophiedubois.marketing', 'Developpeuse front-end', 'Bordeaux'),
(5, 0, '', 'Lucas', 'Moreau', 'lucas.moreau@gmail.com', '$2y$10$qkgeLIaVAF7AxMeNw1tbWOCFCzaOmxI8hDMnL7GEXu7bb1jKvht46', 'Ingénieur en intelligence artificielle', 'https://lucasmoreau.ai', 'Data Scientist', 'Toulouse'),
(6, 1, 'Septeo', NULL, NULL, 'septeo@gmail.com', '$2y$10$zZPWMEN0z0fulkO8ngNy8OO2ET9bQkWqgsyVNn5GABj.4vZz6Dcke', 'Rejoindre Septeo, c’est aussi :\r\n\r\nGrandir et s’épanouir grâce à un parcours de formation personnalisé, des opportunités de mobilité interne et la possibilité de s’auto-former via notre plateforme Udemy\r\nVivre une aventure humaine, échanger et partager autour d’évènements thématisés (afterworks, sport, RSE, séminaires, etc.)\r\nRejoindre un collectif qui prend soin des autres et s’engage en faveur de l’égalité des chances, la diversité et l’inclusion', NULL, NULL, 'Montpellier'),
(7, 1, 'Acelys', NULL, NULL, 'acelys@gmail.com', '$2y$10$ynGy8jJpwDQx96SRxQXZS.jTILOIeIbCMiZu.aP3MRBmq3SRAWzkm', 'Nos valeurs : nous apprécions autant votre savoir-faire que votre savoir-être. Si professionnalisme, enthousiasme, curiosité, sens du service ou encore esprit d’équipe sont des valeurs que vous prônez, n’hésitez plus !\r\n\r\nACELYS Services Numériques c’est 25 ans d’histoire, écrivons la suite ensemble', NULL, NULL, 'Montpellier');

-- --------------------------------------------------------

--
-- Structure de la table `userskills`
--

CREATE TABLE `userskills` (
  `use_id` int NOT NULL,
  `ski_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `userskills`
--

INSERT INTO `userskills` (`use_id`, `ski_id`) VALUES
(1, 2),
(2, 2),
(4, 2),
(1, 3),
(5, 5),
(5, 6),
(3, 9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`use_id`,`job_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Index pour la table `joboffer`
--
ALTER TABLE `joboffer`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `use_id` (`use_id`);

--
-- Index pour la table `jobofferskills`
--
ALTER TABLE `jobofferskills`
  ADD PRIMARY KEY (`job_id`,`ski_id`),
  ADD KEY `ski_id` (`ski_id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ski_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`use_id`);

--
-- Index pour la table `userskills`
--
ALTER TABLE `userskills`
  ADD PRIMARY KEY (`use_id`,`ski_id`),
  ADD KEY `ski_id` (`ski_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `joboffer`
--
ALTER TABLE `joboffer`
  MODIFY `job_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `ski_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `use_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`use_id`) REFERENCES `user` (`use_id`),
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `joboffer` (`job_id`);

--
-- Contraintes pour la table `joboffer`
--
ALTER TABLE `joboffer`
  ADD CONSTRAINT `joboffer_ibfk_1` FOREIGN KEY (`use_id`) REFERENCES `user` (`use_id`);

--
-- Contraintes pour la table `jobofferskills`
--
ALTER TABLE `jobofferskills`
  ADD CONSTRAINT `jobofferskills_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `joboffer` (`job_id`),
  ADD CONSTRAINT `jobofferskills_ibfk_2` FOREIGN KEY (`ski_id`) REFERENCES `skills` (`ski_id`);

--
-- Contraintes pour la table `userskills`
--
ALTER TABLE `userskills`
  ADD CONSTRAINT `userskills_ibfk_1` FOREIGN KEY (`use_id`) REFERENCES `user` (`use_id`),
  ADD CONSTRAINT `userskills_ibfk_2` FOREIGN KEY (`ski_id`) REFERENCES `skills` (`ski_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
