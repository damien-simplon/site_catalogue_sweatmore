CREATE DATABASE IF NOT EXISTS `sweatmore` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sweatmore`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--



CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `dernier_article` varchar(255) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `descri` varchar(255) NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS newsletter;
CREATE TABLE newsletter (id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT, email varchar(255) NOT NULL);
DROP TABLE IF EXISTS contact;
CREATE TABLE contact (id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT, nom varchar(255) NOT NULL, email varchar(255) NOT NULL, sujet varchar(255) NOT NULL, message varchar(255) NOT NULL, created_at datetime NOT NULL);
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `date_de_naissance`, `email`, `mdp`, `sexe`) VALUES
(1, 'test', 'test', '2019-08-09', 'root@root.fr', 'root', 'homme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
