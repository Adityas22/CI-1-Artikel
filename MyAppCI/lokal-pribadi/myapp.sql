-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2025 at 01:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `cover` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `cover`, `date`) VALUES
(1, '1Manfaat Teknologi AI dalam Kehidupan Sehari-hari', '1Artificial Intelligence (AI) semakin banyak digunakan dalam berbagai aspek kehidupan. \r\nMulai dari asisten virtual, rekomendasi belanja online, hingga sistem kesehatan. \r\nPemanfaatan AI membuat pekerjaan lebih efisien dan membantu manusia mengambil keputusan \r\nberdasarkan data yang lebih akurat.', 'icon_gmail2.png', '2025-09-13 16:02:07'),
(2, '12Pentingnya Olahraga di Era Digital', '21Di era serba digital, banyak orang menghabiskan waktunya di depan layar. Olahraga ringan seperti jogging, yoga, atau bersepeda selama 30 menit per hari sangat penting untuk menjaga kesehatan fisik dan mental.', 'download__1_-removebg-preview.png', '2025-09-13 16:02:59'),
(3, 'Cara Mengelola Keuangan untuk Pemula12', '12Mengelola keuangan dapat dimulai dengan membuat anggaran bulanan, mencatat pengeluaran, serta menyisihkan minimal 10% pendapatan untuk tabungan. Dengan disiplin, kita dapat mencapai tujuan keuangan jangka panjang.', '1MOm36DHK0R8OfIC.png', '2025-09-13 15:58:54'),
(9, 'Fase Tidur yang Berbeda2', 'Kucing memiliki siklus tidur yang unik, terdiri dari tidur ringan dan tidur nyenyak. Sebagian besar waktu tidur mereka adalah tidur ringan, di mana mereka tetap waspada dan siap bangun kapan saja. Jadi, kalau kamu lihat telinganya bergerak, itu tandanya dia tidak tidur nyenyak.', 'corporate-social-responsibility_18420072.png', '2025-09-13 17:48:13'),
(13, 'Kondisi Lingkungan322', '3Lingkungan yang tenang dan nyaman akan membuat kucing merasa aman, sehingga mereka lebih mudah untuk tidur. Sebaliknya, jika ada banyak suara bising atau aktivitas, mereka akan lebih waspada dan kurang tidur.2', 'Baixar_logotipo_do_github,_ícone_do_git_hub_em_fundo_branco1.jpg', '2025-09-13 16:52:37'),
(39, 'axxxxxxxx', 'axxxxxxx axxxxxxxxx', 'icon_gmail22.png', '2025-09-14 07:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
