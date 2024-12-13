-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 01:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'artcontent1.png', 'When I was young, I loved watching cartoons and anime, often getting scolded for watching too much TV. Living far from relatives with no one to play with, I entertained myself by drawing stick-figure characters and acting out their stories.', NULL),
(2, 1, 'artcontent2.png', 'Over time, drawing became a hobby. It made me feel cool at school, but the real reason I loved it was that it let me bring my imagination to life. It also became an escape when reality didn’t feel so great.', NULL),
(3, 1, 'artcontent3.png', 'Now, it’s become a meaningful part of my life, shaping how I see the world. It taught me to value life as a whole while finding joy in the little details I might have overlooked before.', NULL),
(4, 2, 'playtimecontent1.png', 'When Mobile Legends became popular, it piqued my interest. At first, I was hesitant to play because I didn’t know how, and I was more interested in Dota. But eventually, it turned out to be one of my favorite ways to spend my leisure time.', NULL),
(5, 2, 'playtimecontent2.png', 'When the pandemic began, I switched from Mobile Legends to Call of Duty Mobile because it had also become a trend. This game will always have a special place in my heart, even though I don\'t play it anymore, because it was such a great and memorable experience.', NULL),
(6, 2, 'playtimecontent3.png', 'I also play other games like Clash of Clans and NBA Live. However, when it comes to sports, I’m more focused on basketball and volleyball, where I get to bond with my cousins. I will always treasure the laughter, fun, and competitiveness of these games forever.', NULL),
(7, 3, 'musiccontent1.png', 'I remember when I was about 9 years old, my mama would always make me sing the famous song \"Ikaw na Nga,\" covered by Willie Revillame, during family events, especially when there was karaoke. I think it helped me develop my sense of rhythm and improved my confidence in singing.', NULL),
(8, 3, 'musiccontent2.png', 'In my early teen years, I would always find myself listening to lo-fi beats. It was an era filled with chill vibes and lowkey sad thoughts. I even covered some free copyright-free beats and posted them on my social media account, but unfortunately, I can no longer find that account.', NULL),
(9, 3, 'musiccontent3.png', 'These are some of my favorite songs that I always listen to. They’re all sad, and I’m not sure why I like these sad songs. Maybe it\'s because they give me comfort and remind me that it’s okay to feel sad sometimes.', NULL),
(10, 4, 'naturecontent1.png', 'I’ve always been fascinated by nature, maybe because I love vibrant green colors. There’s something calming about the way the trees sway in the wind and how the sunlight filters through the leaves. Being surrounded by nature makes me feel connected and at peace.', NULL),
(11, 4, 'naturecontent2.png', 'Whenever I was stressed, I would go to the end of the compound near my grandma’s house. There was a big tree there where my cousin and I would sit, talking about life and passing the time. It was a simple yet cherished memory that always brings me comfort.', NULL),
(12, 4, 'naturecontent3.png', 'My cousins and I love to bond by traveling or visiting places close to nature. We would climb trees to pick fruits or simply relax in a cool, shady spot surrounded by tall trees. It was always a fun and refreshing experience.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'ART ISLAND', 'This is where creativity comes to life. It’s a place filled with colors, drawings, and imagination, allowing me to express my thoughts and dreams through art.', NULL, '#7EACB5', 'artisland.png', NULL),
(2, 'PLAYTIME ISLAND', 'A place of fun, games, and laughter. It’s where I bond with my cousins and enjoy sports or adventures that keep the spirit light and happy.', NULL, '#FADFA1', 'playtimeisland.png', NULL),
(3, 'MUSIC ISLAND', 'The soundtrack of my life lives here. From lo-fi beats to soulful songs, this island represents my love for music and how it brings comfort and connection.', NULL, '#A888B5', 'musicisland.png', NULL),
(4, 'NATURE ISLAND', 'A peaceful escape surrounded by trees, fresh air, and vibrant greenery. It’s my retreat to find calm, unwind, and connect with the simple beauty of the outdoors.', NULL, '#B1C29E', 'natureisland.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
