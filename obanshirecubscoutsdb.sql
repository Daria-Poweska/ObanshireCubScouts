-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 11:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obanshirecubscoutsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `availability_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `availability_day` varchar(50) DEFAULT NULL,
  `availability_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`availability_id`, `user_id`, `availability_day`, `availability_time`) VALUES
(13, 12, 'Monday', 'Morning'),
(16, 20, 'Tuesday', 'Evening'),
(17, 22, 'Monday', 'Morning'),
(19, 25, 'Monday', 'Evening'),
(20, 26, 'Tuesday', 'Morning'),
(21, 28, 'Monday', 'Afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `badge_id` int(11) NOT NULL,
  `badge_name` varchar(100) NOT NULL,
  `badge_description` text DEFAULT NULL,
  `badge_picture` varchar(255) DEFAULT NULL,
  `badge_category` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`badge_id`, `badge_name`, `badge_description`, `badge_picture`, `badge_category`, `user_id`) VALUES
(1, 'First Aid', 'Earned for demonstrating first aid skills', 'artist.png', 'Health and Fitness', 9),
(2, 'Astronautics', 'Earned for demonstrating astronautics skills', 'astronautics.png', 'Science and Technology', 9),
(3, 'Astronomics', 'Earned for demonstrating astronomics skills', 'astronomics.png', 'Science and Technology', 9),
(4, 'Communicator', 'Earned for demonstrating communication skills', 'communicator.png', 'Communication', 9),
(5, 'Craft', 'Earned for demonstrating craft skills', 'craft.png', 'Arts and Crafts', 9),
(6, 'Cyclist', 'Earned for demonstrating cycling skills', 'cyclist.png', 'Sports and Recreation', 9),
(7, 'DIY', 'Earned for demonstrating do-it-yourself skills', 'diy.png', 'Skills Development', 9),
(8, 'Entertainer', 'Earned for demonstrating entertainment skills', 'entertainer.png', 'Arts and Entertainment', 9),
(9, 'Environmental', 'Earned for demonstrating environmental awareness', 'environmental.png', 'Environment', 9),
(10, 'Farming', 'Earned for demonstrating farming skills', 'farming.png', 'Agriculture', 9),
(11, 'Fire', 'Earned for demonstrating fire safety skills', 'fire.png', 'Health and Fitness', 9);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `activities` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `event_date`, `location`, `description`, `activities`, `image`) VALUES
(2, 'Exciting Camping Trip Coming Up!', '2024-05-30', 'Oakwood Forest Campsite', 'Get ready, Cub Scouts! We\'re gearing up for an adventurous camping trip next month. Pack your bags, grab your tents, and get ready for a weekend full of fun activities, outdoor games, and campfire stories. This is an opportunity you won\'t want to miss! Date: June 12th - June 14th, 2024', 'Hiking, Nature Walks, Campfire Stories, Outdoor Games', 'event2.jpg'),
(3, 'Family Fun Day', '2024-05-18', 'Riverside Park, Glasgow', 'Celebrate the arrival of spring with us at our annual Obanshire Cub Scouts Family Fun Day! Join us for a day filled with live music, delicious food vendors, arts and crafts stalls, children\'s activities, and more.', 'Live Music, Food Vendors, Arts and Crafts, Children\'s Activities', 'event1.jpg'),
(4, 'Movie Night', '2024-08-25', 'Obanshire Community Center, Obanshire', 'Grab your blankets and popcorn for a night under the stars at the Obanshire Cub Scouts Outdoor Movie Night! Join us for a family-friendly movie screening in the beautiful surroundings of the Obanshire Community Center.', 'Movie Screening, Community Gathering, Snacks and Drinks', 'event3.jpg'),
(5, 'Community Service', '2024-07-05', 'Obanshire Community Park', 'Join us for a day of giving back to our community! We\'ll be working together on various projects to improve our local park, including planting trees, cleaning up litter, and building birdhouses.', 'Tree Planting, Park Clean-up, Birdhouse Building', 'event4.jpg'),
(6, 'Cub Scouts Talent Show', '2024-09-15', 'Obanshire Community Hall', 'Showcase your talents at our annual Cub Scouts Talent Show! Whether you sing, dance, play an instrument, or have another special talent, we want to see it! Come support your fellow scouts and enjoy a night of amazing performances.', 'Talent Performances, Audience Participation, Snacks and Drinks', 'event5.jpg'),
(7, 'Survival Skills Workshop', '2024-10-12', 'Pinewood Scout Camp', 'Learn essential survival skills at our Outdoor Survival Skills Workshop! From building shelters to starting fires and finding food, this workshop will teach you everything you need to know to thrive in the great outdoors.', 'Shelter Building, Fire Starting, Food Foraging', 'event6.jpg'),
(8, 'Cub Scouts Science Fair', '2024-11-10', 'Obanshire Community Center', 'Show off your scientific skills at our Cub Scouts Science Fair! From experiments to demonstrations, we want to see your best scientific projects. Come and be inspired by the amazing work of your fellow scouts.', 'Science Experiments, Project Demonstrations, Interactive Displays', 'event7.jpg'),
(9, 'Winter Holiday Celebration', '2024-05-11', 'Obanshire Town Squaree', 'Join us for a festive Winter Holiday Celebration! Enjoy a night of holiday lights, carol singing, and warm treats. Bring your family and friends to celebrate the season with the Obanshire Cub Scouts.', 'Holiday Lights Display, Carol Singing, Hot Chocolate and Treats', 'event2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `helperdetails`
--

CREATE TABLE `helperdetails` (
  `helper_detail_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `training_name` varchar(100) DEFAULT NULL,
  `disclosure_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `helperdetails`
--

INSERT INTO `helperdetails` (`helper_detail_id`, `user_id`, `training_name`, `disclosure_number`) VALUES
(28, 20, 'Camping Skills Training', 'DS-567890'),
(29, 22, 'Child Protection Training', 'DS-234567'),
(31, 25, 'First Aid Training for Leaders', 'DS-456789'),
(32, 26, 'Youth Mental Health Awareness Training', 'DS-012345'),
(33, 28, 'Diversity and Inclusion Training', 'DS-678901'),
(86, 37, 'Camping Skills Training', 'ds-012342');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `picture_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `img_description` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `is_approved` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`picture_id`, `user_id`, `title`, `img_description`, `img_path`, `is_approved`, `created_at`, `category`) VALUES
(34, 9, 'Camping in the Highlands', 'Exploring the great outdoors with Obanshire Cub Scouts', 'assets/Images/Gallery/img1.jpg', 1, '2024-05-30 15:55:52', 'Camping'),
(35, 9, 'Camp Cookout', 'Learning essential camping skills with Obanshire Cub Scouts', 'assets/Images/Gallery/img2.jpg', 1, '2024-05-30 15:55:52', 'Camping'),
(36, 9, 'Scouting Games', 'Having fun and building teamwork with Obanshire Cub Scouts', 'assets/Images/Gallery/img3.jpg', 1, '2024-05-30 15:55:52', 'Activities'),
(37, 9, 'Hiking Adventures', 'Exploring the great outdoors with Obanshire Cub Scouts', 'assets/Images/Gallery/img4.jpg', 1, '2024-05-30 15:55:52', 'Hiking'),
(38, 9, 'Nature Trail', 'Discovering the wonders of nature with Obanshire Cub Scouts', 'assets/Images/Gallery/img5.jpg', 1, '2024-05-30 15:55:52', 'Hiking'),
(39, 9, 'Scenic Hike', 'Exploring the breathtaking landscapes with Obanshire Cub Scouts', 'assets/Images/Gallery/img6.jpg', 1, '2024-05-30 15:55:52', 'Hiking'),
(43, 9, 'Image 1', 'Image 1', 'night.jpg', 0, '2024-05-30 16:13:53', 'Camping');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` enum('leader','helper','cub','parent/carer') NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `surname`, `password`, `email`, `user_type`, `is_active`) VALUES
(1, 'NavidHarrid', 'Navid', 'Harrid', '$2y$10$KNYXMz1VgQGm.yUWPX6Zmu1fgegR/W8QSfiPi5DTIYxokE8vVfTqK', 'cub@gmail.com', 'cub', 0),
(4, 'leader', 'Winston', 'Ingram', '$2y$10$AzzA/qkiAGkTZsAiY4HKIOq1nUAjPdOJsL5TFjCffq/Yx5rSleH0K', 'leader@gmail.com', 'leader', 1),
(5, 'helpery', 'isaa', 'dreanan', '$2y$10$YRjWzFF7Y/70FnAn828.rOpMWpBmDkWvnU.N/yHxPWTH7EWELFGly', 'iss@gmail.com', 'helper', 1),
(9, 'cub', 'Scott', 'Reid', '$2y$10$ffI845ZeMQMHpxkK3X9bou.HHITEvVQUBvEC89QMxKirlYfv3FPiO', 'scott@gmail.com', 'cub', 0),
(10, 'dsds', 'Daria', 'Poweska', '$2y$10$6wG0eAvJROaUpXVAjvBG6.CmWqD58gz5GshFcAI.NWc2JEXgQZF6S', 'poweskadaria@gmail.com', 'leader', 1),
(12, 'helper566', 'Jane', 'Smith', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'jane.smith@example.com', 'helper', 1),
(14, 'leader2', 'Winston', 'Ingram', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'leader2@gmail.com', 'leader', 1),
(15, 'cub3', 'Alan', 'Murphy', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'scotet@gmail.com', 'cub', 0),
(17, 'leader3', 'Linda', 'Evans', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'linda.evans@example.com', 'leader', 1),
(20, 'helper6', 'David', 'Martinez', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'david.martinez@example.com', 'helper', 1),
(21, 'leader4', 'Chris', 'Lee', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'chris.lee@example.com', 'leader', 1),
(22, 'helper7', 'Sarah', 'Anderson', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'sarah.anderson@example.com', 'helper', 0),
(24, 'leader5', 'Tom', 'Hernandez', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'tom.hernandez@example.com', 'leader', 1),
(25, 'helper9', 'Amanda', 'Thomas', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'amanda.thomas@example.com', 'helper', 1),
(26, 'helper10', 'Matthew', 'Hernandez', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'matthew.hernandez@example.com', 'helper', 1),
(27, 'leader6', 'James', 'Young', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'james.young@example.com', 'leader', 1),
(28, 'helper11', 'Ashley', 'Young', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'ashley.young@example.com', 'helper', 1),
(32, 'leader7', 'Katie', 'Perez', '$2y$10$PG0i60D2abRWyC6x7K6RiuF1kvXJvDPzwK2495h7nMt...', 'katie.perez@example.com', 'leader', 1),
(37, 'helper', '', 'Drennan', '$2y$10$DsaWD0GG7eQxJqgeDFrDl.qoYfU0aE47hGUpWiC./iby535A5cI26', 'helper123@gmail.com', 'helper', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_badges`
--

CREATE TABLE `user_badges` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `achieved` tinyint(1) DEFAULT 0,
  `awarded_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_badges`
--

INSERT INTO `user_badges` (`id`, `user_id`, `badge_id`, `achieved`, `awarded_date`) VALUES
(23, 1, 5, 1, '2024-05-12'),
(24, 1, 4, 1, '2024-05-12'),
(25, 1, 11, 1, '2024-05-12'),
(26, 1, 7, 1, '2024-05-14'),
(27, 1, 3, 1, '2024-05-17'),
(36, 9, 4, 1, '2024-05-19'),
(37, 9, 5, 1, '2024-05-19'),
(38, 9, 9, 1, '2024-05-19'),
(41, 1, 10, 1, '2024-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`availability_id`),
  ADD UNIQUE KEY `unique_availability` (`user_id`,`availability_day`,`availability_time`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`badge_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `helperdetails`
--
ALTER TABLE `helperdetails`
  ADD PRIMARY KEY (`helper_detail_id`),
  ADD UNIQUE KEY `disclosure_number` (`disclosure_number`),
  ADD UNIQUE KEY `unique_disclosure_number` (`disclosure_number`),
  ADD KEY `fk_helperdetails_user_id` (`user_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`picture_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_badges`
--
ALTER TABLE `user_badges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `badge_id` (`badge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `availability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `helperdetails`
--
ALTER TABLE `helperdetails`
  MODIFY `helper_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_badges`
--
ALTER TABLE `user_badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `availability`
--
ALTER TABLE `availability`
  ADD CONSTRAINT `availability_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `badges`
--
ALTER TABLE `badges`
  ADD CONSTRAINT `badges_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `helperdetails`
--
ALTER TABLE `helperdetails`
  ADD CONSTRAINT `fk_helperdetails_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `helperdetails_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_badges`
--
ALTER TABLE `user_badges`
  ADD CONSTRAINT `user_badges_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_badges_ibfk_2` FOREIGN KEY (`badge_id`) REFERENCES `badges` (`badge_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
