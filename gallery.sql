-- Membuat database
CREATE DATABASE IF NOT EXISTS sql_web_3;
USE sql_web_3;

-- Membuat tabel `gallery`
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `judul` VARCHAR(225) NOT NULL,
  `gambar` VARCHAR(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Memasukkan data ke dalam tabel `gallery`
INSERT INTO `gallery` (`id`, `judul`, `gambar`) VALUES
(1, 'Gambar 1', 'img1.jpg'),
(2, 'Gambar 2', 'img3.jpg'),
(3, 'Gambar 3', 'img4.jpg'),
(4, 'Gambar 4', 'img5.jpg'),
(5, 'Gambar 5', 'img2.jpg'),
(6, 'Gambar 6', '20241222122626.jpg');
