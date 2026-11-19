CREATE DATABASE IF NOT EXISTS `company` DEFAULT CHARACTER SET utf8mb4;
USE `company`;

CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `gaji` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `employes` (`nama`, `alamat`, `gender`, `gaji`) VALUES
('Anton', 'Surabaya', 'L', 3000000),
('Budi', 'Kediri', 'L', 2500000),
('Ani', 'Malang', 'P', 2800000),
('Sinta', 'Surabaya', 'P', 3200000);