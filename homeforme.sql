-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2016 at 04:10 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homeforme`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptions`
--

CREATE TABLE IF NOT EXISTS `adoptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `names` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idPerson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `housingType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cellPhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `docs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `animal_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adoptions_animal_id_foreign` (`animal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `adoptions`
--

INSERT INTO `adoptions` (`id`, `names`, `lastName`, `idPerson`, `birthDate`, `address`, `housingType`, `cellPhone`, `email`, `docs`, `animal_id`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 1),
(3, 'test', 'test', 'test', 'test', 'test', 'Casa Propia', 'test', 'test', 'Factura luz;Fotocopia Carnet;', 2);

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE IF NOT EXISTS `animals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `arrivalState` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrivalDate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsiblePerson` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `responsiblePersonContact` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `responsiblePersonType` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `generalDescription` text COLLATE utf8_unicode_ci,
  `foundAddress` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `species_id` int(10) unsigned NOT NULL,
  `breed_id` int(10) unsigned DEFAULT NULL,
  `foundAddressStreet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `profileimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `animals_breed_id_foreign` (`breed_id`),
  KEY `species_id` (`species_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `gender`, `arrivalState`, `arrivalDate`, `responsiblePerson`, `responsiblePersonContact`, `responsiblePersonType`, `generalDescription`, `foundAddress`, `species_id`, `breed_id`, `foundAddressStreet`, `age`, `height`, `profileimage`) VALUES
(1, 'Keita', 'Macho', 'Abandonado', '1464297409853', 'ndwjka', 'nfceksl', 'Voluntario', 'vjlse', 'fwa', 2, 3, 'vesvs', '3 meses', 'Pequeño', 'catheadperfil.png'),
(2, 'Dogui', 'Macho', 'Rescatado', '1464297661833', 'fdnwak', 'nfeks', 'Ciudadano', 'fcnejsk', 'vfhjsak', 1, 2, 'bfejksl', '3 años', 'Mediano', 'dogheadprofile.png'),
(3, 'dmkwad', 'Macho', 'Abandonado', '1464312975355', 'femskj', 'mfeksl', 'Voluntario', 'nejf', 'ejkfa', 1, 1, 'njfse', '2 meses', 'Pequeño', 'Screenshot at 2016-05-25 22:22:49.png');

-- --------------------------------------------------------

--
-- Table structure for table `behavior_observations`
--

CREATE TABLE IF NOT EXISTS `behavior_observations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` datetime NOT NULL,
  `temperamentWithAnimals` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attitudeWithAnimals` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `temperamentWithPeople` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attitudeWithPeople` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommendations` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volunteer_id` int(10) unsigned NOT NULL,
  `animal_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `behavior_observations_volunteer_id_foreign` (`volunteer_id`),
  KEY `behavior_observations_animal_id_foreign` (`animal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `behavior_observations`
--

INSERT INTO `behavior_observations` (`id`, `datetime`, `temperamentWithAnimals`, `attitudeWithAnimals`, `temperamentWithPeople`, `attitudeWithPeople`, `recommendations`, `volunteer_id`, `animal_id`) VALUES
(1, '2016-05-27 01:27:17', 'Energico-amistoso', 'En alerta-vivaz', 'Energico-amistoso', 'En alerta-vivaz', 'dnwajkdjwa', 1, 1),
(2, '2016-05-27 01:36:50', 'Timido', 'En alerta-vivaz', 'Energico-amistoso', 'En alerta-vivaz', 'bfejksa', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE IF NOT EXISTS `breeds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `species_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `breeds_species_id_foreign` (`species_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`id`, `description`, `species_id`) VALUES
(1, 'Bull Terrier', 1),
(2, 'Coocker Spaniel', 1),
(3, 'Siames', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medical_valorations`
--

CREATE TABLE IF NOT EXISTS `medical_valorations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `medicalCares` text COLLATE utf8_unicode_ci,
  `vet_id` int(10) unsigned DEFAULT NULL,
  `animal_id` int(10) unsigned DEFAULT NULL,
  `pain` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bodycondition` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eyes` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mouth` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abdomen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ears` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nosenthroat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `neuro` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feet` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medical_valorations_vet_id_foreign` (`vet_id`),
  KEY `medical_valorations_animal_id_foreign` (`animal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `medical_valorations`
--

INSERT INTO `medical_valorations` (`id`, `date`, `medicalCares`, `vet_id`, `animal_id`, `pain`, `weight`, `bodycondition`, `eyes`, `mouth`, `abdomen`, `skin`, `ears`, `nosenthroat`, `neuro`, `feet`) VALUES
(1, '2016-05-26', 'ninguno', 1, 2, 'Si', '12 kg', 'Esbelto', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal'),
(2, '2016-05-26', 'mfkwla', 1, 2, 'Si', '12 kg', 'Esbelto', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal'),
(3, '2016-05-27', 'dnwjkadw', 1, 1, 'Si', '234', 'Esbelto', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal'),
(4, '2016-05-27', 'njdkaw', 1, 3, 'Si', '23', 'Esbelto', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_28_144149_create_table_species', 2),
('2016_04_28_151919_create_table_animals', 3),
('2016_05_04_013833_create_status_table', 3),
('2016_05_04_015515_create_status_animal_table', 4),
('2016_05_05_034604_create_status_animal_table', 5),
('2016_05_08_231352_create_breeds_table', 6),
('2016_05_08_232647_add_breeds_id_to_animals', 7),
('2016_05_08_234845_create_status_animal_table', 8),
('2016_05_12_021646_create_vets_table', 9),
('2016_05_19_015326_create_volunteers_table', 10),
('2016_05_19_015327_create_behavior_observations_table', 10),
('2016_05_26_225247_create_adopter_table', 11),
('2016_05_26_232516_create_adopter_table', 12),
('2016_05_27_012615_create_behavior_observations_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE IF NOT EXISTS `species` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `name`) VALUES
(1, 'Canino'),
(2, 'Felino');

-- --------------------------------------------------------

--
-- Table structure for table `status_animal`
--

CREATE TABLE IF NOT EXISTS `status_animal` (
  `animal_id` int(10) unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `state` int(11) NOT NULL,
  KEY `status_animal_animal_id_foreign` (`animal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status_animal`
--

INSERT INTO `status_animal` (`animal_id`, `status`, `date`, `state`) VALUES
(2, 'Valorando', '2016-05-26 21:39:17', 0),
(2, 'Adopcion', '2016-05-26 21:41:48', 0),
(2, 'Adoptado', '0000-00-00 00:00:00', 1),
(1, 'Valorando', '2016-05-27 01:22:05', 0),
(1, 'Adopcion', '2016-05-27 01:27:38', 0),
(1, 'Adoptado', '0000-00-00 00:00:00', 1),
(3, 'Valorando', '2016-05-27 01:36:18', 0),
(3, 'Adopcion', '2016-05-27 01:37:06', 0),
(3, 'Adoptado', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vets`
--

CREATE TABLE IF NOT EXISTS `vets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `veterinary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vets`
--

INSERT INTO `vets` (`id`, `idV`, `completeName`, `veterinary`, `address`, `phone`) VALUES
(1, '5623192 LP', 'Wendy Paola Cruz Coareti', 'San Pedro', 'Calle San Pedro #533', '73829904');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enrollmentDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `idV`, `completeName`, `address`, `phone`, `enrollmentDate`) VALUES
(1, '345678', 'Clara Cruz', 'Calle San Pedro #533 Adrian Patino', '345678', '2016-05-26 21:40:38');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoptions`
--
ALTER TABLE `adoptions`
  ADD CONSTRAINT `adoptions_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`);

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_breed_id_foreign` FOREIGN KEY (`breed_id`) REFERENCES `breeds` (`id`),
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`species_id`) REFERENCES `species` (`id`);

--
-- Constraints for table `behavior_observations`
--
ALTER TABLE `behavior_observations`
  ADD CONSTRAINT `behavior_observations_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`),
  ADD CONSTRAINT `behavior_observations_volunteer_id_foreign` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteers` (`id`);

--
-- Constraints for table `breeds`
--
ALTER TABLE `breeds`
  ADD CONSTRAINT `breeds_species_id_foreign` FOREIGN KEY (`species_id`) REFERENCES `species` (`id`);

--
-- Constraints for table `medical_valorations`
--
ALTER TABLE `medical_valorations`
  ADD CONSTRAINT `medical_valorations_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`),
  ADD CONSTRAINT `medical_valorations_vet_id_foreign` FOREIGN KEY (`vet_id`) REFERENCES `vets` (`id`);

--
-- Constraints for table `status_animal`
--
ALTER TABLE `status_animal`
  ADD CONSTRAINT `status_animal_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
