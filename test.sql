-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2023, 15:55:50
-- Sunucu sürümü: 10.1.26-MariaDB
-- PHP Sürümü: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

CREATE TABLE `gallery` (
  `image_id` int(11) NOT NULL,
  `image_url` varchar(2555) NOT NULL,
  `image_group` int(11) NOT NULL,
  `filter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `gallery`
--

INSERT INTO `gallery` (`image_id`, `image_url`, `image_group`, `filter`) VALUES
(1, 'ika.jpeg', 1, 'yarisma'),
(2, '1.jpg', 2, 'tasarim'),
(3, '2.jpg', 2, 'tasarim'),
(4, '3.jpg', 2, 'tasarim'),
(5, '4.jpg', 2, 'tasarim'),
(6, '5.jpg', 2, 'atolye'),
(7, '6.jpg', 2, 'atolye'),
(8, '7.jpg', 2, 'atolye'),
(9, '8.jpg', 2, 'atolye'),
(10, '9.jpg', 2, 'etkinlik'),
(11, '10.jpg', 2, 'etkinlik'),
(12, '11.jpg', 2, 'etkinlik'),
(13, '12.jpg', 2, 'etkinlik'),
(14, '13.jpg', 2, 'etkinlik'),
(15, '14.jpeg', 2, 'etkinlik'),
(16, '15.jpeg', 2, 'etkinlik'),
(17, '16.jpeg', 2, 'etkinlik'),
(18, '17.jpeg', 2, 'etkinlik'),
(19, '18.jpg', 2, 'yarisma'),
(20, '19.jpg', 2, 'yarisma'),
(21, '20.jpg', 2, 'yarisma'),
(22, '21.jpg', 2, 'yarisma'),
(23, '22.jpg', 2, 'yarisma'),
(24, '23.jpg', 2, 'yarisma'),
(25, '1.jpg', 1, 'atolye'),
(26, '2.jpg', 1, 'atolye'),
(27, '3.jpg', 1, 'atolye'),
(28, '4.jpg', 1, 'atolye'),
(29, '5.jpg', 1, 'atolye'),
(30, '6.jpg', 1, 'atolye'),
(31, '7.jpg', 1, 'atolye'),
(32, '8.jpg', 1, 'atolye'),
(33, '9.jpg', 1, 'atolye'),
(34, '10.jpg', 1, 'atolye'),
(35, '11.jpg', 1, 'atolye'),
(36, '12.jpg', 1, 'etkinlik'),
(37, '13.jpg', 1, 'etkinlik'),
(38, '14.jpg', 1, 'etkinlik'),
(39, '15.png', 1, 'etkinlik'),
(40, '16.JPG', 1, 'etkinlik'),
(41, '17.JPG', 1, 'etkinlik'),
(42, '18.JPG', 1, 'etkinlik'),
(43, '19.jpeg', 1, 'etkinlik'),
(44, '20.jpeg', 1, 'etkinlik'),
(45, '21.jpeg', 1, 'etkinlik'),
(46, '22.jpeg', 1, 'etkinlik'),
(47, '23.jpg', 1, 'ika'),
(48, '24.jpg', 1, 'ika'),
(49, '25.jpg', 1, 'ika'),
(50, '26.jpg', 1, 'ika'),
(51, '27.png', 1, 'ika'),
(52, '28.png', 1, 'ika'),
(53, '29.png', 1, 'ika'),
(54, '30.png', 1, 'ika'),
(55, '31.jpg', 1, 'ika'),
(56, '32.jpg', 1, 'ika'),
(57, '33.jpg', 1, 'ika'),
(58, '34.jpg', 1, 'ika'),
(59, '35.jpg', 1, 'ika'),
(60, '36.jpg', 1, 'ika'),
(61, '37.jpg', 1, 'ika'),
(62, '38.jpg', 1, 'ika'),
(63, '39.jpg', 1, 'ika'),
(64, '40.jpg', 1, 'ika'),
(65, '41.jpg', 1, 'ika'),
(66, '42.png', 1, 'ika');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`) VALUES
(1, 'Greenguard'),
(2, 'MARM-99');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Tablo için indeksler `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gallery`
--
ALTER TABLE `gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Tablo için AUTO_INCREMENT değeri `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
