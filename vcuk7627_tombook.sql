-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 19 mai 2024 à 18:24
-- Version du serveur : 5.7.24
-- Version de PHP : 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vcuk7627_tombook`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `validate` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `commentaire`, `date`, `validate`) VALUES
(1, 'ThomasB', 'Hesitez pas à me laisser un petit message :D', '2020-11-29 22:17:58', 1),
(2, 'NathanH', 'yop', '2020-12-08 17:27:58', 1),
(11, 'Anxium', 'Salut les amis', '2020-12-12 03:07:34', 1),
(12, 'Sizzer', 'Hello tout le monde', '2020-12-12 03:07:37', 1),
(26, 'Account Test', 'Cool! ', '2020-12-19 16:23:15', 1),
(27, 'Account Test', 'slt bg', '2021-04-14 23:19:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `skill` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL,
  `url_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `skill`, `writer`, `url`, `image`, `date`, `posted`, `url_github`) VALUES
(1, 'Le Centaure Fleurus', 'Réalisation Bénévole, améliorations du responsive, optimisation du référencement.', 'Php, Wordpress, Elementor', 'thomasbailleux2@gmail.com', 'https://lecentaurefleurus.be/', 'Le Centaure Fleurus.png', '2024-05-07 23:12:31', 1, ''),
(2, 'Website Ladou', 'Site Ladou \'L\'attiéké déshydraté\' \r\n\r\nCrée pendant un stage dans la société \"Follow-us\", magnifique projet.', 'Php, WordPress, E-Commerce, Elementor', 'thomasbailleux2@gmail.com', 'https://ladou.eu/', 'ladou.png', '2020-10-10 01:35:11', 1, ''),
(3, 'Website Beltek', 'Pendant un stage réalisé à follow-us notre mission était de migrer le site beltek qui était sous un autre format de cms en WordPress, améliorer le visuel ainsi que le rendre plus fluide.', 'Php WordPress, Elementor', 'thomasbailleux2@gmail.com', 'https://www.beltek.be/', 'beltek.jpg', '2020-10-07 01:09:04', 1, ''),
(5, 'Plateforme Horus', ' La platformeHorus consiste à aider via des services de formation que cela soit en tutoriels, vidéos, chat, questions réponses.', 'Php, WordPress, E-Commerce, Elementor, Plugin Cloud et FTP clients crées par un collègue de \'BECODE\' et moi.', 'thomasbailleux2@gmail.com', '', 'plateformehorus.png', '2020-10-10 01:35:20', 1, ''),
(7, 'CineTom', 'Ce site cinéma à été crée pour approfondir mes connaissances en REACT mais aussi parce que j\'en avais envie.\r\n\r\nIl m\'a fallut vraiment longtemps sachant que je bosse à plein temps en tant que préparateur de commande et beaucoup de conseils de la part de @axel-avaux <3\r\n\r\n', 'Sass, Javascript React, Api Twitch', 'thomasbailleux2@gmail.com', 'https://bailleuxthomas.netlify.app/', 'cinetouf.png', '2020-10-10 01:54:15', 1, ''),
(8, 'Frontend-AllezCine', 'Pendant ma formation, nous avons eu pour objectif de crée un site cinéma en groupe.\r\n\r\nCe site cinéma devait suivre certaine règle:\r\n\r\nUne maquette était présente et nous devions la respecter à la lettre.\r\n\r\nCrée une Newsletter.\r\nCrée des cookies.\r\nMettre en place un message d\'accueil ainsi qu\'une règle si tu acceptes tu restes, si tu refuses cela renvoi l\'utilisateur vers une autre site.\r\n', 'Html, Sass, Javascript, Json', 'thomasbailleux2@gmail.com', 'https://bouzouitadavid.github.io/frontend-AllezCine/', 'allezcine.jpg', '2020-10-10 02:35:25', 1, 'https://github.com/BailleuxThomas/frontend-AllezCine'),
(9, 'Binding of Odul - 1er prix du jury ♥ (Work In Progress)', 'Binding of Odul est un jeu multijoueur réalisé en NodeJS (avec les packages citès ci-dessous) dans le cadre de la GameJam organisée par Ludovic Patho à BeCode - Charleroi (CRL-Turing-2.6).\r\n\r\nLe jeu se déroule dans un univers de développeur, où un ordinateur (Dorothy) vole des bouts de code à Odul (notre personnage principal qui est aussi notre coach). Le/les joueur(s) (4 maximum) devront combattre divers ennemis dans diverses salles d\'un donjon généré aléatoirement à chaque nouveau niveau. Dans ces salles, ils pourront trouver différents bonus qui les aideront, ou les dérangeront dans leur quête.\r\n\r\nThe team\r\nAxel Avaux - Project Manager (Fullstack Dev)\r\n\r\nJustine Crenier - Project Manager Assistant (Graphiste & Dev)\r\n\r\nRuben Pereira C - Graphiste (Couteau suisse Portugais)\r\n\r\nThomas Bailleux - Dev\r\n\r\nValentin Beaufays - Dev\r\n\r\nJérémy Creloa - Dev', 'Express, Phaser 3, Socket.io, Pug, mikewesthad/dungeon', 'thomasbailleux2@gmail.com', 'https://binding-of-odul.herokuapp.com/', 'game.jpg', '2020-10-10 02:46:57', 1, 'https://github.com/BailleuxThomas/Binding-of-Odul');

-- --------------------------------------------------------

--
-- Structure de la table `tournois`
--

CREATE TABLE `tournois` (
  `Id` int(11) NOT NULL,
  `Pseudo1` varchar(255) NOT NULL,
  `Pseudo2` varchar(255) NOT NULL,
  `Race1` varchar(255) NOT NULL,
  `Race2` varchar(255) NOT NULL,
  `Score1` varchar(255) NOT NULL,
  `Score2` varchar(255) NOT NULL,
  `Replay` varchar(255) NOT NULL DEFAULT 'remplay.avi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tournois`
--

INSERT INTO `tournois` (`Id`, `Pseudo1`, `Pseudo2`, `Race1`, `Race2`, `Score1`, `Score2`, `Replay`) VALUES
(10, 'Sizzer', 'Max', 'Chinois', 'Francais', '2', '2', 'remplay.avi'),
(11, 'Sizzer', 'Max', 'Francais', 'Saint Empire Romain', '5', '6', 'remplay.avi'),
(13, 'touf', 'dydy', 'Saint Empire Romain', 'Russ', '6', '2', 'remplay.avi');

-- --------------------------------------------------------

--
-- Structure de la table `tuto`
--

CREATE TABLE `tuto` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `skill` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `video` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL,
  `url_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tuto`
--

INSERT INTO `tuto` (`id`, `title`, `title2`, `content`, `skill`, `writer`, `url`, `image`, `video`, `date`, `posted`, `url_github`) VALUES
(6, 'League Of Legends Rank', 'Petit projet personnel', '<p>Il va rechercher sur une api des données en temps réelle, qui se change automatiquement suivant les paramètres de RIOTGAME.</p>\r\n<p>Logiciel utile afin de mieux comprendre l’api.\r\nPour ma part je vous conseille « FireFox Developper ».</p>\r\n<hr style=\"border:1px dashed #7f8fa6;\">\r\n<p>Veuillez-vous rendre sur : https://developer.riotgames.com/\r\nFaite une demande d’api Personnel, une fois fait, vous recevrez une clé < API SECRET >\r\nUne fois que vous avez cette clé, nous nous-rendons dans la documentation Riot Game:\r\nDans la  rubrique à votre gauche vous trouverez \"SUMMONER-V4\" cliquer pour choisir cette option et sur votre droite vous-trouverez \"GET /lol/summoner/v4/summoners/by-name/{summonerName}\"\r\nTout en bas vous trouverez SummonerName: \"écrivez le pseudo IN-GAME que vous voudriez avoir dans votre liste\"</p>\r\n<p>Choisissez Query Param, CLIQUER sur EXECUTE REQUEST, un lien apparait, cliquer dessus\r\nExemple avec le mien: https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/startouuf?api_key=\"mettez votre clé ici\"\r\n\r\nCela vous donne ceci =></p>\r\n\r\n<img src=\"./img/tuto/API-lol.png\" alt=\"Image 1 API-LOL.png\" width=\"100%\">\r\n\r\n<p>Ce n\'est pas les informations que nous voulions, mais nous avons l\'information nécessaire pour la suite.\r\n\r\nCopier l\'ID, dans notre cas c\'est \"Y7u-jhyalsPFf837WR_IDdkVMJpOTiXfBzL_zIWHJx4gogU\"\r\n\r\nRetournons sur la documentation, sur votre gauche (rubrique) choisissez \"League-V4\" puis \"/lol/league/v4/entries/by-summoner/{encryptedSummonerId}\" \r\n\r\n<img src=\"./img/tuto/encryptedSummonerld.png\" alt=\"Image 2 encryptedSummonerld.png\" width=\"100%\">\r\n\r\nCliquer sur le lien et nous obtenons ceci:\r\n\r\n<img src=\"./img/tuto/API-lol2.png\" alt=\"Image 3 API-lol2.png\" width=\"100%\">\r\n\r\nDans le code ci-dessous crée une variable \r\n\r\n=> const Test = \'Y7u-jhyalsPFf837WR_IDdkVMJpOTiXfBzL_zIWHJx4gogU\'; <=\r\n\r\nOublier pas avec javascript il faut toujours le \";\".\r\n\r\nVoici le code entier:</p>\r\n\r\n<div class=\"code mt-2\">\r\nvar https = require(\'https\');\r\nvar http = require(\'http\');\r\n\r\nlet output = [\'\']\r\n\r\n    const key = \'\';\r\n    const URLKEY = \'?api_key=\';\r\n    const port = process.env.PORT || 8080;\r\n\r\n    \r\n    const EU = \'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/\';\r\n    const NA1 = \'https://na1.api.riotgames.com/lol/league/v4/entries/by-summoner/\';\r\n\r\n    // <= PRO =>\r\n    const TFBLADE = \'KL0E7Za3_sU4sz0wnrAULo1nmn1bGrglKauxXzQJDGRYf7g\';\r\n    // <= IRL =>\r\n    const Thomas = \'ZHd2VXBU5vuGumSIty1WXq5OqWu0XpAfXG8TyjIgDSwAGlU\';\r\n\r\n    // Doesn\'t work when you put multiple players :(\r\n    const PLAYERID = [Thomas,TFBLADE];\r\n    PLAYERID.forEach(id => {\r\n        // console.log(\'Here the different id\');\r\n        // console.log(id);\r\n        // console.log(\'continuation\');\r\n        const responses = []\r\n        https.get(EU + id + URLKEY + key, (rr) => {\r\n            rr.on(\'data\', (chunk) => {\r\n                responses.push(JSON.parse(chunk));\r\n            });\r\n            rr.on(\'end\', () => {\r\n                responses.forEach((item) => {\r\n                    for (let i = 0; i < item.length; i++) {\r\n                        output += \"Name : \" + item[i].summonerName + \" League : \" + item[i].queueType + \"\\n\\tRank : \" + item[i].tier + \" \" + item[i].rank + \" \" + item[i].leaguePoints + \" LP Nombre de victoires : \" + item[i].wins + \" Nombre de defaites : \" + item[i].losses + \" \\n\\n\";\r\n                        // console.log(output);\r\n                        \r\n                    }\r\n                })\r\n            });\r\n        });\r\n    });\r\n    \r\n \r\n     var server = http.createServer(function (req, res) {\r\n\r\n        res.write(output); //write a response to the client\r\n        res.end(); //end the response\r\n\r\n    }).listen(port, () => {console.log(\'Server started on port \'+ port);});</div>\r\n', 'Nodejs', 'thomasbailleux2@gmail.com', 'https://tomtomb.herokuapp.com/', 'ranklol.png', 'ranklol.mp4', '2020-10-10 02:07:50', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'logo.png',
  `role` varchar(255) NOT NULL DEFAULT 'membre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `email`, `age`, `password`, `image`, `role`) VALUES
(9, 'Account Test', 'Visiteur', '', 'test@test.com', 28, '$2y$10$Zp2k2PcRUlvOaEiGVwWVYeCJYEmNBO8xp1Cyey4eTLGP4UuIRTHZe', 'logo.png', 'membre'),
(18, 'Tournoi', 'tournoi', 'tournoi', 'tournoi@gmail.com', 32, '$2y$10$wnEwssOwedRMTfQ7FMrjUe6407adCMV2/.EMBg91TWdd/A0934LeK', 'logo.png', 'tournois'),
(19, 'Admin', 'Visiteur (Admin)', '', 'admin@gmail.com', 28, '$2y$10$zlaikz/UV748DhS.SlVxQeM.B.UpuaAvr4LAL4X.W10KKpZmj4qiW', 'logo.png', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `title`, `content`, `img`, `url`, `rank`) VALUES
(1, 'HEADSHOT GEPETTO', 'HEADSHOT sur le compte de GEPETTO', 'valorant.png', 'HS-GEPETTO.mp4', 'Silver'),
(2, 'Brimstone 3V1', 'Brimstone 3V1 en low GOLD', 'valorant.png', 'valorant1.mp4', 'Gold'),
(3, 'JET CARRY ROUNDS', 'Jet en low GOLD', 'valorant.png', 'valorant2.mp4', 'Silver'),
(4, '1V4 avec VIPER !', '', 'valorant.png', '1V4VIPERDIA3.mp4', 'Diamand 3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tournois`
--
ALTER TABLE `tournois`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tuto`
--
ALTER TABLE `tuto`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `tournois`
--
ALTER TABLE `tournois`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `tuto`
--
ALTER TABLE `tuto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
