-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 17, 2020 at 10:31 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jobboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `poste` varchar(255) DEFAULT NULL,
  `description` text,
  `connaissance_technique` varchar(255) DEFAULT NULL,
  `date_offre` date DEFAULT NULL,
  `type_contrat` varchar(255) DEFAULT NULL,
  `date_debut_cand` date DEFAULT NULL,
  `date_limit_cand` date DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `id_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `poste`, `description`, `connaissance_technique`, `date_offre`, `type_contrat`, `date_debut_cand`, `date_limit_cand`, `adress`, `experience`, `id_entreprise`) VALUES
(2, 'Vendeuse de légumes', 'bn,;ghgchgvjbhkjnlk,', 'jhk,nbvbnb,n;,bv', '2020-10-15', 'cdd', '2020-10-20', '2020-10-21', 'paris', 'o ans ', 1),
(5, 'Stage', 'sdfghjklmlkjhgfdsdfghjk', 'sdfgh;hgfdsdfghjk', '2020-10-06', 'cdd', '2020-10-06', '2020-10-06', 'fghjkjhgfd', 'ghjklkjhgffgh', 1),
(6, 'developpeur php', 'php expert', 'php', '2020-10-18', 'stage', '2020-10-18', '2020-10-24', 'paris', '2ans', 1);

-- --------------------------------------------------------

--
-- Table structure for table `annonceur`
--

CREATE TABLE `annonceur` (
  `id` int(11) NOT NULL,
  `poste_occup` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonceur`
--

INSERT INTO `annonceur` (`id`, `poste_occup`, `id_user`) VALUES
(1, 'DRH AYUDAFUND', NULL),
(2, 'DRH EPITECH\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name_entreprise` varchar(255) DEFAULT NULL,
  `annee_crea` year(4) DEFAULT NULL,
  `desc_entreprise` text,
  `siege_social` varchar(255) DEFAULT NULL,
  `valeur` varchar(255) DEFAULT NULL,
  `type_entreprise` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_annonceur` int(11) DEFAULT NULL,
  `id_social` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entreprise`
--

INSERT INTO `entreprise` (`id`, `logo`, `name_entreprise`, `annee_crea`, `desc_entreprise`, `siege_social`, `valeur`, `type_entreprise`, `email`, `id_annonceur`, `id_social`) VALUES
(1, 'http://localhost:8888/phpMyAdmin/tbl_change.php?db=jobboard&table=entreprise', 'AYUDAFUND', 2019, 'FDGHJ,NBVNCXFWSQESDGFHJK', 'DAKAR SENEGAL', 'DSGDRHGJHKJLKLJKHGFDSFGFHJKL,JHGFDSGFHJ', 'SOCIAL', 'email@email.com', 1, 1),
(3, 'http://localhost:8888/phpMyAdmin/tbl_change.php?db=jobboard&table=entreprise', 'Sadbouh', 2018, 'FDGHJ,NBVNCXFWSQESDGFHJK', 'DAKAR SENEGAL', 'DSGDRHGJHKJLKLJKHGFDSFGFHJKL,JHGFDSGFHJ', 'SOCIAL', 'email@email.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `type_experience` varchar(255) DEFAULT NULL,
  `titre_poste` varchar(255) DEFAULT NULL,
  `type_contrat` varchar(255) DEFAULT NULL,
  `organisme` varchar(255) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `localisation` varchar(255) DEFAULT NULL,
  `description` text,
  `id_postulant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `postulant`
--

CREATE TABLE `postulant` (
  `id` int(11) NOT NULL,
  `photo_profil` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `poste_actuel` varchar(255) DEFAULT NULL,
  `type_contrat` varchar(255) DEFAULT NULL,
  `mon_cv` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_social` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `GitHub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `linkedin`, `twitter`, `GitHub`) VALUES
(1, 'http://localhost:8888/phpMyAdmin/tbl_change.php?db=jobboard&table=entreprise', 'http://localhost:8888/phpMyAdmin/tbl_change.php?db=jobboard&table=entreprise', 'http://localhost:8888/phpMyAdmin/tbl_change.php?db=jobboard&table=entreprise');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `civilite` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Indexes for table `annonceur`
--
ALTER TABLE `annonceur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_social` (`id_social`),
  ADD KEY `id_annonceur` (`id_annonceur`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_postulant` (`id_postulant`);

--
-- Indexes for table `postulant`
--
ALTER TABLE `postulant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_social` (`id_social`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `annonceur`
--
ALTER TABLE `annonceur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postulant`
--
ALTER TABLE `postulant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `entreprise_ibfk_1` FOREIGN KEY (`id_annonceur`) REFERENCES `annonceur` (`id`);