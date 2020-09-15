CREATE TABLE `Users` (
  `id` int,
  `nama` varchar(32),
  `email` varchar(64),
  `phone_number` varchar(12),
  `password` varchar(128),
  `level` char(3)
);

CREATE TABLE `Lahan` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int,
  `luas_lahan` float,
  `id_tanaman` int
);

CREATE TABLE `Tanaman` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nama` varchar(64) NOT NULL,
  `jenis_bibit` varchar(64)
);

CREATE TABLE `Pupuk` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nama` varchar(64),
  `harga` money,
  `jumlah` int
);

CREATE TABLE `Pemesanan` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_lahan` int,
  `id_pupuk` int,
  `jumlah` int
);

CREATE TABLE `Bahan` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nama` varchar(64),
  `jumlah` int
);

CREATE TABLE `Komposisi` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_pupuk` int,
  `id_detail_komposisi` int
);

CREATE TABLE `DetailKomposisi` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_bahan` int,
  `rasio` float,
  `satuan` ENUM ('kw', 'kg', 'g', 'L', 'mL')
);

ALTER TABLE `Pemesanan` ADD FOREIGN KEY (`id_lahan`) REFERENCES `Lahan` (`id`);

ALTER TABLE `Tanaman` ADD FOREIGN KEY (`id`) REFERENCES `Lahan` (`id_tanaman`);

ALTER TABLE `Lahan` ADD FOREIGN KEY (`id_user`) REFERENCES `Users` (`id`);

ALTER TABLE `Komposisi` ADD FOREIGN KEY (`id_pupuk`) REFERENCES `Pupuk` (`id`);

ALTER TABLE `DetailKomposisi` ADD FOREIGN KEY (`id`) REFERENCES `Komposisi` (`id_detail_komposisi`);

ALTER TABLE `Bahan` ADD FOREIGN KEY (`id`) REFERENCES `DetailKomposisi` (`id_bahan`);
