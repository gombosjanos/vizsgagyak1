-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Már 31. 12:31
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `futreg`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jelentkezes`
--

CREATE TABLE `jelentkezes` (
  `nev` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `szulnap` date NOT NULL,
  `nem` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `jelentkezes`
--

INSERT INTO `jelentkezes` (`nev`, `email`, `szulnap`, `nem`) VALUES
('asdasasdas', 'gombosjanos04@gmail.com', '2022-03-11', 'Férfi'),
('fasfasdasdfasdf', 'asd@asd.com', '2022-03-31', 'Férfi'),
('asdasdasdsas', 'asd@asd.com', '2022-03-04', 'Férfi'),
('asdasdasdsas', 'asd@asd.com', '2022-03-04', 'Férfi'),
('asdasdasdsas', 'asd@asd.com', '2022-03-04', 'Férfi'),
('könyörgöm működj már', 'asd@asd.com', '2022-03-18', 'Férfi'),
('sdasdas', 'gombosjanos02@gmail.com', '2002-01-30', 'Férfi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
