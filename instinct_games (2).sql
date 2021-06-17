-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 09:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instinct_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `page_name` varchar(128) NOT NULL,
  `game_desc` text NOT NULL,
  `category` text NOT NULL,
  `requirments` text NOT NULL,
  `multiplayer` text NOT NULL,
  `visual_effects` text NOT NULL,
  `game_play` text NOT NULL,
  `video_link` text NOT NULL,
  `release_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `game_desc`, `category`, `requirments`, `multiplayer`, `visual_effects`, `game_play`, `video_link`, `release_date`) VALUES
(1, 'Ark: Survival Evolved', 'Ark: Survival Evolved (stylized as ΛRK) is a 2017 action-adventure survival video game. In the game, players must survive being stranded on an island filled with roaming dinosaurs and other prehistoric animals, natural hazards, and potentially hostile human players.As a man or woman stranded naked, freezing starving on a mysterious island, you must hunt, harvest, craft items, grow crops, build shelters to survive. Use skill and cunning to kill or tame ride the Dinosaurs primeval creatures roaming the land, team up with hundreds of players or play locally!. The game has both single-player and multiplayer options. Multiplayer allows the option to form tribes of members in a server. Co-developed by Studio Wildcard, Efecto Studio, and Virtual Basement.', 'Vertical Shooter', 'Intel Core i5-2400/AMD FX-8320 or better, 8 GB RAM, NVIDIA GTX 670 2GB/AMD Radeon HD 7870 2GB or better, Version 10, 60 GB', 'Games Controller System', 'Operating System', 'Ark: Survival Evolved is an action-adventure survival game.Set in an open world environment with a dynamic day-night cycle and played either from a third-person or first-person perspective. To survive, players must establish a base, with a fire and weapons;additional activities, such as taming and feeding dinosaurs, require more resources. The game\'s world, known as the Ark, is approximately 48 km2 in size: there is approximately 36 km2 of land with 12 km2 of ocean.There are currently 176 creatures that populate the world of Ark. In the early versions of the game, nearly all creatures were real dinosaurs and other prehistoric creatures, however, as the storyline progressed.', 'https://www.youtube.com/watch?v=5fIAPcVdZO8', 'August 29, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `page_images`
--

CREATE TABLE `page_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `page_id` int(11) UNSIGNED NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_images`
--

INSERT INTO `page_images` (`id`, `page_id`, `image`) VALUES
(1, 1, 'ArkLogo.jpg'),
(2, 1, 'ARK2.jpg'),
(3, 1, 'ARK4.png'),
(4, 1, 'ARK5.jpg'),
(5, 1, 'ARK1.jpg'),
(6, 1, 'ARK6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `job` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `job`, `location`) VALUES
(1, 'Web Designer', 'Cario, Egypt'),
(2, 'Python Developer', 'Cario, Egypt'),
(3, 'Game Designer', 'Cario, Egypt'),
(4, 'UX Designer', 'Cairo, Egypt'),
(5, 'UI Designer', 'Cairo, Egypt.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `name`, `email`, `password`, `phone`, `image`) VALUES
(1, '18204204', 'Amr khaled', 'Amrkhaled6@hotmail.com', '123', '+01020324406', 'Web_Photo_Editor.jpg'),
(2, '', '', '', '', '', ''),
(3, 'OmarHafez', 'OmarHafez ', 'Omar@gmail.com', '123', '01022767470', 'WhatsApp Image 2020-11-19 at 3.07.20 PM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_images`
--
ALTER TABLE `page_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_images`
--
ALTER TABLE `page_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page_images`
--
ALTER TABLE `page_images`
  ADD CONSTRAINT `page_images_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;