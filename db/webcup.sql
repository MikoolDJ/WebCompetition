-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 01 fév. 2019 à 19:35
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webcup`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment_section`
--

CREATE TABLE `comment_section` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text,
  `q_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment_section`
--

INSERT INTO `comment_section` (`id`, `username`, `comment`, `q_id`) VALUES
(14, 'anonymous', 'thanks bro', 15),
(20, 'anonymous', 'test', 25),
(21, 'anonymous', 'This is great work man!!!', 25),
(23, 'didier41', 'fausse sa.', 29),
(24, 'didier41', 'mo pa agree r toi moi.', 14),
(25, 'didier41', 'Very easy!!  Type:\r\ngit commit -m \"<your website name>\"', 30),
(26, 'abuVD', 'avy sa manG toi...', 30);

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `umail` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `details`
--

INSERT INTO `details` (`firstname`, `lastname`, `username`, `gender`, `email`, `password`, `university`, `umail`, `field`, `course`, `level`, `qualification`, `interest`) VALUES
('abubakar siddick khan', 'chonnoo', 'abu00', 'male', 'abubakar421@hotmail.com', 'cccccccccc', 'uom', 'drc@umail.com', 'foicdt', 'se', 2, 'Diploma', 'nothing'),
('didier', 'michel', 'didier41', 'male', 'didier@gmail.com', 'didier1234', 'university of mauritius', 'didier@gmail.com', 'computer science', 'software ', 2, 'Doctoral Degree', 'nothing'),
('michael', 'didier', 'michel01', 'male', 'michaeldidier4510@gmail.com', '123456789', '', '', '', '', 0, 'Choose your actual qualification', ''),
('oumeir', 'rengony', 'oumeir00', 'male', 'oumer@gmail.com', 'gal415', 'uom', 'oumtdg@gmail.com', 'Informatics', 'software engineering', 2, 'Diploma', 'art, artificial intelligence, business'),
('abubakar', 'VD', 'abuVD', 'male', 'abuVD@gmail.com', 'gugi2hk22c', 'uom', 'abulolo@gmail.com', 'it', 'software engineering', 4, 'Doctoral Degree', 'soccer'),
('ronaldo', 'messi', 'rm7', 'male', 'rm014@gmail.com', '3fc3fd', 'uom', 'rnflf@gmail.com', 'Informatics', 'software engineering', 1, 'Diploma', 'football');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `flags` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `title`, `description`, `username`, `likes`, `dislikes`, `flags`) VALUES
(4, 'First year at the university?', 'Understandably, many are nervous about what it is going to be like when they arrive, and this is not helped by the many common misconceptions about the university experience.', 'test00', 0, 0, 0),
(8, 'Last year at the university?', 'Understandably, many are nervous about what it’s going to be like when they arrive, and this isn’t helped by the many common misconceptions about the university experience.', 'test01', 0, 0, 0),
(9, 'Which engineering degree do you recommend me to study?', 'This is just a dummy code and is going to be replaced later.please bare with us for any inconvenience.Thank you for your patience.', 'test04', 0, 0, 0),
(10, 'May i know the full name of the dean of University of Mauritius please?', 'This is just a dummy code and is going to be replaced later.please bare with us for any inconvenience.Thank you for your patience.', 'test03', 0, 0, 0),
(11, 'Where is the office to make exam payment?', 'This is a practice code.Beware!!!', 'test06', 0, 0, 0),
(12, 'Who is the current vice-chancellor of UTM', 'Who agrees with me on the price of the food of the canteen?They are too high!!', 'test05', 0, 0, 0),
(13, 'Where is the office to make exam payment?', 'This is a practice code.Beware!!!', 'test06', 0, 0, 0),
(14, 'Hey someone please help me with the guidelines for a presentation??', 'Who agrees with me on the price of the food of the canteen?They are too high!!', 'test05', 13, 2, 4),
(15, 'What are the typical jobs related to artificial intelligence?', 'AI is quickly creating large numbers of new jobs, the biggest challenge of which is having enough qualified workers to fill these positions.\r\nThese are some of the AI-related job titles that are currently in the highest demand on job search portals: data scientists, software engineers, research scientists, machine learning experts, and deep learning experts.\r\n\r\nHowever, there will be an even greater demand for professionals who understand how AI works in general, as well as how to help companies and individuals apply these technologies for the benefit of businesses and society.', 'test124', 0, 0, 0),
(18, 'Can someone explain the rule number 4 of the admin section please?', 'This is a dummy code and is intended to be replaced at latest.', 'anonymous', 0, 0, 0),
(25, 'This is a test question?', 'i dont know what is this.', 'anonymous', 0, 0, 0),
(29, 'Sa universiter la dan differ sa dow!!', 'bezer', 'didier41', 1, 0, 0),
(30, 'How do you post a website to GitHub?', 'Well, im new there and i still dont know how to host my website to a repository on github.', 'didier41', 1, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment_section`
--
ALTER TABLE `comment_section`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment_section`
--
ALTER TABLE `comment_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
