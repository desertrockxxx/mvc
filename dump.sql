-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Mrz 2017 um 10:53
-- Server Version: 5.5.32
-- PHP-Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `prichardtdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `autoren`
--

CREATE TABLE IF NOT EXISTS `autoren` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `vorname` varchar(100) DEFAULT NULL,
  `nachname` varchar(100) DEFAULT NULL,
  `benutzername` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `autoren`
--

INSERT INTO `autoren` (`ID`, `vorname`, `nachname`, `benutzername`) VALUES
(1, 'Hans', 'Meier', 'HaMe'),
(2, 'Gudrun', 'Kaschinski', 'GuKa');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `beitraege`
--

CREATE TABLE IF NOT EXISTS `beitraege` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(200) DEFAULT NULL,
  `inhalt` text,
  `erstellt` date DEFAULT NULL,
  `beitragsbild` varchar(200) DEFAULT NULL,
  `autorid` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `beitraege`
--

INSERT INTO `beitraege` (`ID`, `titel`, `inhalt`, `erstellt`, `beitragsbild`, `autorid`) VALUES
(1, 'Blogbeitrag 1 in unserem Blog', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '2017-03-29', 'http://placehold.it/550x300', 1),
(2, 'Blogbeitrag 2 Lorem', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam magna magna magna magna erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', '2017-03-30', 'http://placehold.it/550x300', 1),
(3, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam magna magna magna magna erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy At vero eos et accusam et justo duo dolores et ea rebum.', '2017-03-10', 'http://placehold.it/550x300', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `beitrag_kategorie`
--

CREATE TABLE IF NOT EXISTS `beitrag_kategorie` (
  `beitragid` int(11) DEFAULT NULL,
  `kategorieid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `beitrag_kategorie`
--

INSERT INTO `beitrag_kategorie` (`beitragid`, `kategorieid`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buecher`
--

CREATE TABLE IF NOT EXISTS `buecher` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(200) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `preis` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Daten für Tabelle `buecher`
--

INSERT INTO `buecher` (`ID`, `titel`, `autor`, `isbn`, `preis`) VALUES
(10, 'Test', 'asdsd', '6454345', '12.10');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorien`
--

CREATE TABLE IF NOT EXISTS `kategorien` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `kategorien`
--

INSERT INTO `kategorien` (`ID`, `name`) VALUES
(1, 'Sport'),
(2, 'Politik'),
(3, 'Gesellschaft');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
