-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Jan 2021 um 13:20
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `living_room_visualizer`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `admin`
--

INSERT INTO `admin` (`ID`, `name`, `email`, `passwort`) VALUES
(1, 'Peter', 'admin@lrv.com', '$2y$10$Me2S3kuyPnaID8KxQCKDyutTO1nC.x5etFfEOMwEc5dne/evoxRga');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `datum` varchar(255) NOT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`ID`, `titel`, `datum`, `artikel`) VALUES
(1, 'Wir sind online', '2021-01-02', '<p>Endlich ist es soweit. Ab sofort kann Livingroom-Visualizer benutzt werden. Wir w&uuml;nschen euch viel Spass, beim einrichten eures virtuellen Traumwohnzimmers</p>\r\n\r\n<p>P. Wagner</p>\r\n'),
(2, 'Willkommen erste Nutzer', '2021-01-04', '<p>Die erste Benutzer habe sich registriert. Herzlich willkommen.</p>\r\n\r\n<p>P. Wagner</p>\r\n'),
(3, 'Kaffee-Tisch und Liege-Sofa', '2021-01-05', '<p>Zwei weitere Modelle sind dem Visualizer hinzugef&uuml;gt worden. Der gem&uuml;tliche Kaffe-Tisch und das entspannende Liege-Sofa. Schaut sie euch mal an.</p>\r\n\r\n<p>P. Wagner</p>\r\n'),
(4, 'Kinder-Fort', '2021-01-15', '<p>Wir denken auch an die Kinder. Deshalb haben wir das Kinder-Fort&nbsp;im Visualizer hinzugef&uuml;gt. Schliesslich sollen die Kleinen auch ihren Spass haben.</p>\r\n\r\n<p>P. Wagner</p>\r\n');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `plz` int(11) NOT NULL,
  `ort` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwort` varchar(255) NOT NULL,
  `registriert` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `vorname`, `nachname`, `adresse`, `plz`, `ort`, `email`, `passwort`, `registriert`) VALUES
(1, 'Peter', 'Wagner', 'Kirchackerstrasse 32', 8405, 'Winterthur', 'peter.wagner86@hotmail.com', '$2y$10$rUj6Mpo6suxB9SbRf/3hj.O/7X0MFyx1ODczNMXkehtofB91OWMuS', '2020-12-23 13:24:41'),
(2, 'Fritz', 'Maier', 'Musterstr. 120', 8400, 'Winterthur', 'f.maier@hallo.ch', '$2y$10$EiB3b4tnDz4lSnMxldCJJOdpB/IdMDUV75NcijQIfwqNnIcwo5M66', '2020-12-30 13:02:32'),
(3, 'Heinz', 'Gerster', 'Hundegasse 98', 6554, 'Katzenstardt', 'h.gerster@suppe.ch', '$2y$10$KynweDEGaOqanfl8uVJ2vOc1noNvcxgOICNpWASVrb0nFDiRvEJ.W', '2020-12-30 13:52:35'),
(4, 'Xing', 'Lung', 'Jadestr. 190', 7210, 'Jadepalace', 'x.lung@lung.com', '$2y$10$Wz2uVFL7j1rRkm2He5asI.I1jJJNdWlUDLy2FFZP5bmoIamrWvaqW', '2020-12-30 13:53:59'),
(5, 'John', 'Cena', 'WWEStr. 54', 1234, 'FUTown', 'u@cantsee.me', '$2y$10$2ESwdXaHDNXjcUKM/o9//.5AKM6uHUTJ3qzdDxsXwV4Sv6ZssentS', '2020-12-30 13:58:11'),
(6, 'Freddy', 'Kruger', 'Elmstr. 20', 2345, 'Nightmaretown', 'freddy@cutyou.com', '$2y$10$0lPF62TxCMoPGBNZHQbZC.P1wWVR9SoVhE6PdJI7cBAzQYkY6q8gy', '2020-12-31 14:31:07');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
