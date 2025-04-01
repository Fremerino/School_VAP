-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 21. lis 2023, 11:25
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `produkty`
--
CREATE DATABASE IF NOT EXISTS `produkty` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci;
USE `produkty`;

-- --------------------------------------------------------

--
-- Struktura tabulky `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `nazev` varchar(30) COLLATE utf8mb4_czech_ci NOT NULL,
  `popis` mediumtext COLLATE utf8mb4_czech_ci NOT NULL,
  `velikost` varchar(30) COLLATE utf8mb4_czech_ci NOT NULL,
  `barva` varchar(30) COLLATE utf8mb4_czech_ci NOT NULL,
  `url` varchar(80) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `data`
--

INSERT INTO `data` (`ID`, `nazev`, `popis`, `velikost`, `barva`, `url`) VALUES
(1, 'boty', 'Perfektní pro nošení', 'Y', 'Modrá', 'boty1'),
(2, 'boty', 'Perfektní pro nošení', 'S', 'Modrá', 'boty'),
(3, 'Pláštěnka', 'elegantní a durabilní', 'XXL', 'zelená', 'boty-xll'),
(4, 'Pláštěnka', 'elegantní a durabilní', 'S', 'zelená', 'boty-x');

-- --------------------------------------------------------

--
-- Struktura tabulky `kat`
--

CREATE TABLE `kat` (
  `ID` int(11) NOT NULL,
  `kategorie` varchar(1000) COLLATE utf8mb4_czech_ci NOT NULL,
  `popis` varchar(10000) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexy pro tabulku `kat`
--
ALTER TABLE `kat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pro tabulku `kat`
--
ALTER TABLE `kat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
