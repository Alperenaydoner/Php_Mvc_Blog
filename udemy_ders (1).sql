-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Eyl 2022, 18:27:21
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `udemy_ders`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `id` int(11) NOT NULL,
  `konu` varchar(100) NOT NULL,
  `metin` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`id`, `konu`, `metin`) VALUES
(1, 'Php Nedir?', 'PHP (PHP için sürekli tekrarlanan kısaltma: Hypertext Preprocessor – Üstünyazı Önişlemcisi) JavaScript ve Python gibi programlama dillerinin alt kümesidir. Aralarındaki fark ise PHP genellikle sunucu taraflı iletişim için kullanılırken JavaScript ise hem frontend ve backend için kullanılır. Python ise sadece istemci tarafı için kullanılmaktadır (backend).'),
(2, 'Mvc Nedir?', 'MVC, Yazılım Mühendisliği’nde önemli bir yere sahip architectural patterns (yazılım mimari desenleri)’ın bir parçasıdır. Model, View ve Controller kelimelerinin baş harflerinden oluşan MVC (Model-View-Controller), 1979 yılında Tygve Reeskaug tarafından oluşturulmuş ve yazılım gelişmede bir çok projede kullanılmıştır. Son dönemlerde Microsoft’un MVC desenini Asp.Net teknolojisi ile birleştirmesi ile popülaritesi daha da artmıştır.'),
(3, 'aa', ''),
(4, 'PHP Veri Nesneleri (PDO)', ' PHP Veri Nesneleri (PDO), çeşitli veritabanlarına erişim için oldukça hafif ve tutarlı bir arayüz sunan bir PHP programlama dili eklentisidir. PDO arayüzü bulunan veritabanı sürücüleri yardımıyla, veritabanına özgü işlevler genel PHP eklenti işlevleri olarak çalıştırabilirler.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `proje`
--

CREATE TABLE `proje` (
  `id` int(11) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `tarih` date NOT NULL,
  `Update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `proje`
--

INSERT INTO `proje` (`id`, `eposta`, `sifre`, `tarih`, `Update_at`) VALUES
(1, 'nesuleyman@gamil.com', '12234', '2022-09-11', '0000-00-00'),
(2, 'alperen@gmail.com', '12234', '2022-09-11', '0000-00-00'),
(3, 'alpeiren@gmail.com', '3242342', '0000-00-00', '0000-00-00'),
(4, 'alpren@gmail.com', '56654', '0000-00-00', '0000-00-00'),
(5, 'ren@gmail.com', '696969', '0000-00-00', '0000-00-00'),
(6, 'dsadsadsa@gmail.com', '12456', '0000-00-00', '0000-00-00'),
(7, 'eyman@gamil.com', '5656565', '0000-00-00', '0000-00-00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `proje`
--
ALTER TABLE `proje`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `proje`
--
ALTER TABLE `proje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
