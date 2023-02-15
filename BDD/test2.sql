-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2023 at 12:50 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `visiteurs`
--

CREATE TABLE `visiteurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `age` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visiteurs`
--

INSERT INTO `visiteurs` (`id`, `nom`, `prenom`, `email`, `sexe`, `age`) VALUES
(1, ' Audet', 'Georges', 'Georges@mail.fr', 'H', 25),
(2, 'Douffet', 'Thibaut', 'ThibautDouffet@armyspy.com', 'H', 22),
(3, 'Mailloux', 'Gaspar', 'GasparMailloux@rhyta.com', 'H', 60),
(160, 'Lagrange', 'Thomas', 'ThomasLagrange@teleworm.us', 'H', 46),
(161, 'Beausoleil', 'Agathe', 'AgatheBeausoleil@rhyta.com', 'F', 19),
(162, 'Doyon', 'Lucille', 'LucilleDoyon@dayrep.com', 'F', 24),
(170, 'Dale', 'Jacobson', 'sed.eu@google.net', 'F', 73),
(171, 'Shafira', 'Steele', 'quisque.ac@google.couk', 'F', 94),
(172, 'Arden', 'Chan', 'dolor@yahoo.couk', 'H', 36),
(173, 'Jameson', 'Reynolds', 'dui.in.sodales@google.com', 'H', 76),
(174, 'Porter', 'Eaton', 'eu@outlook.edu', 'F', 55),
(175, 'Paula', 'Roman', 'pede.praesent@yahoo.ca', 'F', 61),
(176, 'Ralph', 'Jacobson', 'nunc.ac@yahoo.org', 'H', 37),
(177, 'Damon', 'Johnston', 'nibh.lacinia@google.couk', 'H', 22),
(178, 'Xaviera', 'Rowe', 'facilisis@hotmail.ca', 'F', 60),
(179, 'Gavin', 'Vang', 'arcu.morbi.sit@yahoo.ca', 'F', 15),
(180, 'Justin', 'Gross', 'arcu@aol.org', 'H', 47),
(181, 'Whilemina', 'Atkinson', 'quisque.nonummy@outlook.edu', 'H', 49),
(182, 'Lilah', 'Hickman', 'scelerisque.dui.suspendisse@outlook.edu', 'F', 7),
(183, 'Xantha', 'Keith', 'bibendum@hotmail.ca', 'F', 54),
(184, 'Iris', 'Bush', 'donec.nibh@aol.couk', 'H', 78),
(185, 'Lynn', 'Herring', 'risus.quis@outlook.com', 'H', 1),
(187, 'Burton', 'Morris', 'rhoncus.proin@icloud.ca', 'F', 6),
(188, 'Brenden', 'Pacheco', 'facilisis.vitae@yahoo.edu', 'H', 100),
(190, 'Hashim', 'Kent', 'nonummy@icloud.edu', 'F', 29),
(191, 'Quail', 'Boyle', 'interdum.feugiat@outlook.com', 'F', 36),
(192, 'Lilah', 'Day', 'massa.mauris@protonmail.ca', 'H', 65),
(193, 'Derek', 'Lee', 'est.vitae@protonmail.ca', 'H', 69),
(194, 'Seth', 'Mercado', 'neque.sed@outlook.com', 'F', 60),
(195, 'Judith', 'Parker', 'vestibulum@hotmail.ca', 'F', 79),
(196, 'Leonard', 'Dillon', 'aliquam.tincidunt@outlook.net', 'H', 31),
(197, 'Darrel', 'Oliver', 'purus.mauris@icloud.com', 'H', 19),
(198, 'Salvador', 'Randall', 'lobortis@google.edu', 'F', 58),
(199, 'Rylee', 'Valentine', 'tempor@hotmail.edu', 'F', 63),
(200, 'Odette', 'Camacho', 'a@icloud.edu', 'H', 42),
(201, 'Nolan', 'Kirk', 'feugiat.placerat.velit@protonmail.couk', 'H', 38),
(202, 'Bernard', 'Olsen', 'nec.ligula@google.net', 'F', 79),
(203, 'Mannix', 'Hoffman', 'dui.fusce.aliquam@protonmail.edu', 'F', 29),
(204, 'Charles', 'Bernard', 'lectus.ante.dictum@protonmail.org', 'H', 17),
(205, 'Valentine', 'Moran', 'mauris@hotmail.ca', 'H', 93),
(206, 'Gregory', 'Cummings', 'dolor.sit.amet@protonmail.net', 'F', 11),
(207, 'Bert', 'Ferrell', 'a.auctor@aol.org', 'F', 40),
(208, 'Neville', 'Reeves', 'nulla@google.net', 'H', 74),
(209, 'Judah', 'Donaldson', 'fermentum@hotmail.ca', 'H', 18),
(210, 'Shelley', 'Ashley', 'parturient@icloud.ca', 'F', 65),
(211, 'Charlotte', 'Conrad', 'nonummy.ut.molestie@yahoo.edu', 'F', 55),
(212, 'Asher', 'Mccormick', 'tempor@yahoo.couk', 'H', 86),
(213, 'Myra', 'Chan', 'duis.risus@protonmail.org', 'H', 53),
(214, 'Theodore', 'Nolan', 'augue.porttitor@outlook.edu', 'F', 98),
(215, 'Karleigh', 'Chen', 'et.magnis@icloud.couk', 'F', 26),
(216, 'Reece', 'Skinner', 'vel.lectus.cum@google.org', 'H', 14),
(217, 'Tanner', 'Contreras', 'mauris@google.com', 'H', 77),
(218, 'Brent', 'Perez', 'morbi.metus@outlook.edu', 'F', 51),
(219, 'Callie', 'Golden', 'nec.ligula@google.edu', 'F', 4),
(220, 'Katell', 'Cain', 'et.arcu@icloud.net', 'H', 37),
(221, 'Miranda', 'Barton', 'eget.ipsum@outlook.net', 'H', 2),
(222, 'Shelby', 'Wong', 'non.bibendum@hotmail.net', 'F', 98),
(223, 'Heidi', 'Barber', 'magna.duis@aol.net', 'F', 73),
(224, 'Mary', 'Wright', 'vitae@protonmail.couk', 'H', 56),
(225, 'Amy', 'Castaneda', 'nunc.nulla@google.couk', 'H', 98),
(226, 'Tyler', 'Boone', 'pellentesque.tincidunt@outlook.ca', 'F', 28),
(227, 'Alvin', 'Mooney', 'pellentesque@hotmail.com', 'F', 4),
(228, 'Tyrone', 'Hernandez', 'volutpat.nulla.dignissim@google.net', 'H', 49),
(229, 'Carlos', 'Cooper', 'posuere.at.velit@protonmail.org', 'H', 96),
(230, 'Porter', 'Curtis', 'sed@yahoo.com', 'F', 74),
(231, 'Amela', 'Davenport', 'pellentesque@hotmail.net', 'F', 78),
(232, 'Maisie', 'Mckee', 'viverra.maecenas@yahoo.edu', 'H', 39),
(233, 'Teagan', 'Joyce', 'urna.nunc@hotmail.edu', 'H', 95),
(234, 'Ayanna', 'York', 'phasellus.ornare@protonmail.net', 'F', 54),
(235, 'Kelly', 'Tyler', 'orci@protonmail.couk', 'F', 2),
(236, 'Iona', 'Spears', 'nibh.phasellus.nulla@protonmail.org', 'H', 81),
(237, 'Naomi', 'Perkins', 'nulla@aol.com', 'H', 67),
(238, 'Ferris', 'Blevins', 'massa.lobortis.ultrices@google.ca', 'F', 71),
(239, 'Astra', 'Bell', 'in@aol.com', 'F', 50),
(240, 'Craig', 'Mccormick', 'et.nunc@protonmail.ca', 'H', 23),
(241, 'Kyra', 'Hahn', 'parturient.montes@protonmail.couk', 'H', 18),
(242, 'Barry', 'Nolan', 'ante@protonmail.edu', 'F', 4),
(243, 'Erich', 'Alford', 'eget@outlook.com', 'F', 7),
(244, 'Jaquelyn', 'Thornton', 'natoque.penatibus@outlook.org', 'H', 18),
(245, 'Bevis', 'Zamora', 'iaculis@hotmail.net', 'H', 85),
(246, 'Aidan', 'Stewart', 'risus.nunc.ac@protonmail.org', 'F', 91),
(247, 'Vernon', 'Russo', 'dolor.donec@google.com', 'F', 65),
(248, 'Gillian', 'Randall', 'mi.eleifend.egestas@yahoo.net', 'H', 60),
(249, 'Jakeem', 'Howard', 'sit.amet@aol.net', 'H', 30),
(250, 'Maryam', 'Phillips', 'at.risus.nunc@icloud.edu', 'F', 36),
(251, 'Noble', 'Holland', 'sed.hendrerit@icloud.edu', 'F', 71),
(252, 'Wilma', 'Cummings', 'turpis.aliquam@hotmail.org', 'H', 81),
(253, 'Amethyst', 'Hudson', 'euismod.est@google.ca', 'H', 41),
(254, 'Jescie', 'Vaughan', 'pharetra.nibh.aliquam@protonmail.ca', 'F', 61),
(255, 'Madeline', 'Perry', 'tellus.faucibus.leo@yahoo.couk', 'F', 51),
(256, 'Marvin', 'Byers', 'sed.auctor@aol.com', 'H', 50),
(257, 'Alden', 'Britt', 'ultricies.dignissim.lacus@hotmail.net', 'H', 28),
(258, 'Genevieve', 'Johnson', 'pellentesque.tellus.sem@protonmail.ca', 'F', 71),
(259, 'Vera', 'Rogers', 'risus.quis@icloud.com', 'F', 49),
(260, 'Mara', 'Gonzalez', 'aliquam.ultrices@protonmail.com', 'H', 88),
(261, 'Naomi', 'Castaneda', 'mi.felis.adipiscing@icloud.couk', 'H', 32),
(262, 'Robert', 'Cabrera', 'sed@yahoo.org', 'F', 56),
(263, 'Madaline', 'Banks', 'mauris.suspendisse@hotmail.org', 'F', 35),
(264, 'Claudia', 'Pena', 'egestas.duis.ac@hotmail.org', 'H', 92),
(265, 'Jessica', 'Higgins', 'magnis.dis@google.couk', 'H', 4),
(266, 'Allegra', 'Hopkins', 'et.arcu.imperdiet@outlook.ca', 'F', 32),
(267, 'Alea', 'Clemons', 'maecenas.mi@protonmail.edu', 'F', 85),
(268, 'Kaseem', 'Burt', 'sapien.cursus@icloud.org', 'H', 69),
(269, 'Nasim', 'Carpenter', 'mus.proin.vel@hotmail.couk', 'H', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visiteurs`
--
ALTER TABLE `visiteurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visiteurs`
--
ALTER TABLE `visiteurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
