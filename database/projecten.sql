-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 okt 2021 om 09:26
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `git` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`id`, `name`, `language`, `description`, `picture`, `git`) VALUES
(1, 'Black Jack', 'C#', 'Ik heb met C# gebruikt voor een project genaamt \'BackJack\'. BlackJack is een kaart spel wat ik voor het holland casino moest maken met een team uit mijn klas. Het spel wordt automaties uitgelegt zonder timer.\r\nZodat je rustig een idee kan krijgen hoe het spel in zijn werking gaat.\r\n', '/Img/BlackJack.png', 'www.github.com/302883510/hoger-lager-game-herres-internationale-V2'),
(2, 'Rekenmachien', 'Html, Css, Javascript', 'Waarom ik trots ben op deze eenvoudige rekenmachien is omdat: ik er veel te lang aan gewerkt heb en het mij eindelijk is gelukt.', 'Img/rekenmachien.PNG', 'https://github.com/J0hnty/blyat-maschien'),
(3, 'Boter, kaas en Eieren\r\n', 'Html, Css, Javascript', 'Een simple en cool project met interactie tussen twee mensen', 'Img/BKE.PNG', 'https://github.com/J0hnty/JS-BKE'),
(4, 'Een opdracht die ik in bootstrap-4 op mijn pagina heb verwerkt.', 'Html, Css, Javascript', 'aap', 'Img/bootstrap opdracht.PNG', 'https://github.com/J0hnty/Opdracht-Bootstrap'),
(5, 'Yeet project', 'Html, css, Javascript\r\n', 'Dit project had het doel om een prototype te maken van een vraag en antwoord service die zou moeten uitgroeien naar een forum voor een school voor ict waar mensen hun problemen neer kunnen legen en kunnen kijken of andere het zelfde probleem hadden en hoe ze het hebben opgelost. daar buiten heb ik hiervan geleerd dat als je in een team werkt je duidelijk moet zijn over de taakverdeling anders krijg je wat je hier ook kan terug vinden en wil dat ook niet weglaten omdat ik vind dat ik open moet staan voor verbetering en dat het niet erg is om fouten te maken daarom laat ik dit hier zo als het is.', 'project interaction design/img/yeet.logo.png', 'https://github.com/J0hnty/ID-keuzendeel-project-YEET\r\n'),
(6, 'thema switcher', 'Html, css, Javascript', 'thema switcher zie kunt u zien bij de rekenmachine aangezien ik daar lichte kleuren heb gebruikt heb ik daar de thema switcher bij toegevoegt zodat je een donkere versie er van kan zien. ', 'Img/thema switcher.PNG', 'https://github.com/J0hnty/blyat-maschien');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `projecten`
--
ALTER TABLE `projecten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
