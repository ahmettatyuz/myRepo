-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Oca 2022, 14:38:23
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kullanicilar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar_tablo`
--

CREATE TABLE `kullanicilar_tablo` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar_tablo`
--

INSERT INTO `kullanicilar_tablo` (`id`, `name`, `city`, `age`, `gender`) VALUES
(3, 'Ahmet', 'Niğde', 19, 1),
(4, 'Berat Hazer', 'Bursa', 19, 1),
(5, 'Oudoum Ali Houmed', 'Cibuti', 22, 1),
(6, 'Selin Soyyiğit', 'Niğde', 19, 2),
(8, 'Melih Çevik', 'Ankara', 20, 1),
(24, 'Nurhan İnceoğlu', 'Niğde', 1, 2),
(25, 'asdasd', 'Niğde', 12, 1),
(26, 'ASDASD', 'ASDASD', 65, 2),
(27, 'ASDASD', 'ASDASD', 31, 2),
(28, 'Ahmet', 'asdasd', 36, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar_tablo`
--
ALTER TABLE `kullanicilar_tablo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar_tablo`
--
ALTER TABLE `kullanicilar_tablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
