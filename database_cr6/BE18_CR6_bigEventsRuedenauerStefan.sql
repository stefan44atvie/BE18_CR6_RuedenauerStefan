-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 15. Apr 2023 um 16:05
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `BE18_CR6_bigEventsRuedenauerStefan`
--
CREATE DATABASE IF NOT EXISTS `BE18_CR6_bigEventsRuedenauerStefan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE18_CR6_bigEventsRuedenauerStefan`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230414074618', '2023-04-14 07:46:31', 33);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_datetime` datetime NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `event_capacity` int(11) NOT NULL,
  `event_email` varchar(255) NOT NULL,
  `event_phone` varchar(255) NOT NULL,
  `event_address` varchar(255) NOT NULL,
  `event_url` varchar(255) NOT NULL,
  `event_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_datetime`, `event_description`, `event_image`, `event_capacity`, `event_email`, `event_phone`, `event_address`, `event_url`, `event_type`) VALUES
(1, 'Donauinselfest', '2023-06-27 09:00:00', 'das jährliche Donauinselfest, wieder auf der Donauinsel. Veranstaltet von der Stadt Wien', 'https://cdn.pixabay.com/photo/2020/05/12/19/19/donauinsel-5164595_1280.jpg', 5000, 'office@digitaleseele.at', '94382040490', 'Donauinsel 20, 1210 Wien', 'wwww.donauinselfest.at', 'Live'),
(3, 'Danube Island Wine', '2023-08-06 18:00:00', 'Try your favorite wines', 'https://cdn.pixabay.com/photo/2014/10/14/20/24/soccer-488700_1280.jpg', 200, 'event@event.at', '32849819879798979', 'Hellreingasse 12, 1200 Wien', 'www.event.at', 'Weinverkostung'),
(4, 'Stammersdorfer Weintage', '2023-09-10 09:00:00', 'Try wine originally from areas around Vienna', 'https://cdn.pixabay.com/photo/2015/11/26/22/28/woman-1064664_1280.jpg', 700, 'wein@gmail.com', '4281279374921', 'Kellergasse, 1210 Wien', 'www.weintage.at', 'Weinverkostung'),
(5, 'Stammersdorfer Kellergassentage', '2023-10-03 08:00:00', 'Unsere alljährlichen Kellertage mit Spezialitäten rund um die Kellergasse in Stammersdorf', 'https://cdn.pixabay.com/photo/2015/11/30/23/32/champagner-1071356_1280.jpg', 520, 'kellergasse@gmail.com', '29403912090', 'Kellergasse, 1210 Wien', 'www.kellergasse.at', 'Weinverkostung'),
(6, 'KISS Live', '2023-06-05 00:00:00', 'enjoy the famous KISS-band live in Vienna', 'https://cdn.pixabay.com/photo/2017/07/31/23/50/people-2562102_1280.jpg', 5000, 'kiss@live.com', '2336223232', 'Praterstadion, 1020 Wien', 'www.staion.at', 'Konzert'),
(7, 'PictureWalk', '2023-05-07 11:00:00', 'Join us at our first PictureWalk in Vienna. We will walk through the famous Donauinsel', 'https://www.centralpark.com/downloads/4634/download/a-walk-in-the-park.jpe?cb=783665e2e86dabe11fdbe675f24e26c4&w=2100&h=', 15, 'walk@gmail.com', '248918248712471', 'Donauinsel 3, 1210 Wien', 'www.donauinsel.at', 'walk'),
(8, 'Picture Walk Augarten', '2023-06-01 16:00:00', 'Our second PictureWalk will be held in city centre, in the well-known Augarten', 'https://www.stadt-wien.at/fileadmin/_processed_/f/9/xcsm_Augarten_c_BMLFUW_Michalski_356144f404.jpg.pagespeed.ic.KcnR9CseYu.jpg', 24, 'walk@gmail.com', '248302854208', 'Obere Augartenstraße 1, 1020 Wien', 'www.augarten.at', 'walk');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
