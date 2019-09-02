-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 sep 2019 om 11:41
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialapp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hobbys`
--

CREATE TABLE `hobbys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `hobbys`
--

INSERT INTO `hobbys` (`id`, `name`) VALUES
(1, 'Fietsen'),
(2, 'voetbal'),
(3, 'Knikkeren'),
(4, 'Eten\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` longblob NOT NULL,
  `lat` double(11,10) NOT NULL,
  `lon` double(11,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`, `lat`, `lon`) VALUES
(1, 'Feyza', 'd261472@edu.rocwb.nl', NULL, '$2y$10$3.3IV0yxMRVVv.VPa6M86egQs7h/jdvKIVM11apcKrkfgzhh71USi', NULL, '2019-09-02 05:52:11', '2019-09-02 05:52:11', '', 0.0000000000, 0.0000000000),
(2, 'Feyza', 'feyza@keles.nl', NULL, '$2y$10$PMshROxs1VvGGVy0vEks2eCdlNZH4VQ1eMqAc8YXSsl9Lw5n7H7rm', NULL, '2019-09-02 05:52:53', '2019-09-02 05:52:53', '', 0.0000000000, 0.0000000000),
(3, 'Feyza', 'd2614742@edu.rocwb.nl', NULL, '$2y$10$wkNkSYkY71zR/7PF6hkSaOCE5R9qu065zf21.cEUwoKU/sR5MQg1q', NULL, '2019-09-02 05:57:48', '2019-09-02 05:57:48', '', 0.0000000000, 0.0000000000);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_hobby`
--

CREATE TABLE `user_hobby` (
  `userId` int(11) NOT NULL,
  `hobbyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `hobbys`
--
ALTER TABLE `hobbys`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `hobbys`
--
ALTER TABLE `hobbys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
