-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Kwi 2023, 16:07
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rph`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `obraz` varchar(255) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `kategoria` varchar(255) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `galeria`
--

INSERT INTO `galeria` (`id`, `obraz`, `kategoria`) VALUES
(1, 'images/wolsztyn/Wolsztyn0.jpg', 'wolsztyn'),
(2, 'images/wolsztyn/Wolsztyn1.jpg', 'wolsztyn'),
(3, 'images/wolsztyn/Wolsztyn3.jpg', 'wolsztyn'),
(4, 'images/wolsztyn/Wolsztyn5.jpg', 'wolsztyn'),
(5, 'images/wolsztyn/Wolsztyn6.jpg', 'wolsztyn'),
(6, 'images/wolsztyn/Wolsztyn7.jpg', 'wolsztyn'),
(7, 'images/wolsztyn/Wolsztyn8.jpg', 'wolsztyn'),
(8, 'images/wolsztyn/Wolsztyn9.jpg', 'wolsztyn'),
(9, 'images/wolsztyn/Wolsztyn10.jpg', 'wolsztyn'),
(10, 'images/wolsztyn/Wolsztyn11.jpg', 'wolsztyn'),
(11, 'images/wolsztyn/Wolsztyn12.jpg', 'wolsztyn'),
(12, 'images/wolsztyn/Wolsztyn13.jpg', 'wolsztyn'),
(13, 'images/wolsztyn/Wolsztyn14.jpg', 'wolsztyn'),
(14, 'images/wolsztyn/Wolsztyn15.jpg', 'wolsztyn'),
(15, 'images/wolsztyn/Wolsztyn16.jpg', 'wolsztyn'),
(16, 'images/wolsztyn/Wolsztyn17.jpg', 'wolsztyn'),
(17, 'images/wolsztyn/Wolsztyn18.jpg', 'wolsztyn'),
(18, 'images/choinka/Choinka0.jpg', 'choinka'),
(19, 'images/choinka/Choinka1.jpg', 'choinka'),
(20, 'images/choinka/Choinka2.jpg', 'choinka'),
(21, 'images/choinka/Choinka3.jpg', 'choinka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odeszli`
--

CREATE TABLE `odeszli` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `nazwisko` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `opis` text COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `obraz` varchar(1000) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `odeszli`
--

INSERT INTO `odeszli` (`id`, `imie`, `nazwisko`, `opis`, `obraz`) VALUES
(1, 'Łucja', 'Binaś', 'W dniu 26 września 2012 roku w wieku 65 lat zmarła Łucja Binaś ps. Lucyna -\r\nnauczycielka, instruktorka w stopniu harcmistrzyni, wieloletnia instruktorka\r\nZwiązku Harcerstwa Polskiego w Hufcu Nowy Tomyśl. Członkini kręgu\r\n\"Bratnich Rąk\"i „ Zawisza Czarny”, członkini stowarzyszenia Rady Przyjaciół\r\nHarcerstwa Hufca ZHP Nowy Tomyśl. Uczestniczka międzynarodowych\r\nrajdów harcerskich. Niezwykły człowiek i wspaniała przyjaciółka.\r\nCześć Jej Pamięci!', 'images/odeszli/odeszli1.png'),
(2, 'Stefan', 'Wojtkiewicz', 'W dniu 6 kwietnia 2013 r. zmarł w wieku 77 lat Stefan Wojtkiewicz\r\nharcmistrz - wieloletni instruktor Związku Harcerstwa Polskiego,\r\nwspaniały zuchmistrz Chorągwi Wielkopolskiej ZHP, autor licznych\r\npublikacji metodycznych o tematyce zuchowej, przewodniczący\r\nHufcowej Komisji Stopni Instruktorskich, członek kręgu\r\n\"Bratnich Rąk\" i „Zawisza Czarny”, członek Komendy Hufca\r\nNowy Tomyśl. Założyciel i długoletni przewodniczący zarządu\r\nRady Przyjaciół Harcerstwa Hufca ZHP Nowy Tomyśl.\r\nCześć Jego Pamięci!', 'images/odeszli/odeszli2.png'),
(3, 'Józef', 'Maciejewski', 'W dniu 26 maja 2016 r. W wieku 88 lat zmarł Józef Maciejewski\r\nharcmistrz, wieloletni instruktor Związku Harcerstwa Polskiego\r\nczłonek Hufca Nowy Tomyśl. Cześć Jego Pamięci!', 'images/odeszli/odeszli3.png'),
(4, 'Jerzy', 'Tyc', 'W dniu 3 sierpnia 2017 r. w wieku 91 lat zmarł Jerzy Tyc\r\nharcmistrz, wieloletni instruktor Związku Harcerstwa Polskiego\r\nczłonek Hufca Nowy Tomyśl. Założyciel Rady Przyjaciół Harcerstwa\r\nuczestnik międzynarodowych rajdów harcerskich, wspaniały druh\r\ni przyjaciel. Cześć Jego pamięci!', 'images/odeszli/odeszli4.png'),
(5, 'Janina', 'Nowak', 'W dniu 21 marca 2018 r. w wieku 77 lat zmarła\r\nJanina Nowak harcmistrzyni Związku Harcerstwa Polskiego,\r\nnamiestniczka zuchowa, instruktorka Hufca Nowy Tomyśl,\r\ni wieloletnia członki Rady Przyjaciół Harcerstwa.\r\nUczestniczka międzynarodowych rajdów i zlotów\r\nharcerskich, wspaniały człowiek i dobra przyjaciółka.\r\nCześć Jej pamięci!', 'images/odeszli/odeszli5.png'),
(6, 'Zdzisław', 'Mizerski', 'W dniu 6 kwietnia 2020 r. lat zmarł\r\nZdzisław Mizerski harcmistrz Związku Harcerstwa Polskiego,\r\ninstruktor, członek komendy Hufca Nowy Tomyśl,\r\nwieloletni członek Rady Przyjaciół Harcerstwa.\r\nUczestnik międzynarodowych rajdów i zlotów harcerskich.\r\nKomendant i kwatermistrz obozów harcerskich. Wspaniały człowiek, dobry przyjaciel.\r\nCześć Jego pamięci!', 'images/odeszli/odeszli6.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `odeszli`
--
ALTER TABLE `odeszli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `odeszli`
--
ALTER TABLE `odeszli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
