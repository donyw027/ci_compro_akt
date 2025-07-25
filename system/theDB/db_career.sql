-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2025 at 11:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_career`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `no_wa` varchar(14) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `cv` varchar(20) NOT NULL,
  `id_loker` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `email`, `no_wa`, `pendidikan`, `jurusan`, `jk`, `foto`, `cv`, `id_loker`) VALUES
(1, 'doni', 'malang', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '-', '-', '22'),
(2, 'rena', 'malang', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '-', '-', '23');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id` int(11) NOT NULL,
  `tgl_loker` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `batas_lamar` varchar(15) NOT NULL,
  `status` enum('open','close') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id`, `tgl_loker`, `posisi`, `deskripsi`, `batas_lamar`, `status`) VALUES
(22, '25-07-25', 'IT Networking', '<p><strong>. </strong><strong>IT Support:</strong></p>\r\n\r\n<ul>\r\n <li>Tugas: Memberikan dukungan teknis kepada pengguna, menangani masalah perangkat keras dan perangkat lunak, instalasi dan konfigurasi perangkat, pemeliharaan sistem, dan menjaga keamanan data.</li>\r\n <li>Keahlian: Menguasai sistem operasi, jaringan, perangkat keras dan lunak, troubleshooting, komunikasi efektif, customer service.</li>\r\n</ul>\r\n\r\n<p><strong>. </strong><strong>IT Support:</strong></p>\r\n\r\n<ul>\r\n <li>Tugas: Memberikan dukungan teknis kepada pengguna, menangani masalah perangkat keras dan perangkat lunak, instalasi dan konfigurasi perangkat, pemeliharaan sistem, dan menjaga keamanan data.</li>\r\n <li>Keahlian: Menguasai sistem operasi, jaringan, perangkat keras dan lunak, troubleshooting, komunikasi efektif, customer service.</li>\r\n</ul>', '2025-07-25', 'open'),
(23, '25-07-25', 'IT & ERP Staff', '<p><strong>Tanggung Jawab:</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Melakukan instalasi, konfigurasi, dan pemeliharaan perangkat keras (hardware) dan perangkat lunak (software) perusahaan.</p>\r\n </li>\r\n <li>\r\n <p>Menangani troubleshooting komputer, jaringan, printer, dan perangkat IT lainnya.</p>\r\n </li>\r\n <li>\r\n <p>Memastikan keamanan data dan jaringan perusahaan (backup, antivirus, firewall).</p>\r\n </li>\r\n <li>\r\n <p>Membantu pengguna (user) dalam menyelesaikan masalah teknis IT sehari-hari.</p>\r\n </li>\r\n <li>\r\n <p>Mendokumentasikan sistem dan prosedur IT yang berjalan di perusahaan.</p>\r\n </li>\r\n <li>\r\n <p>Melakukan monitoring sistem dan jaringan secara rutin.</p>\r\n </li>\r\n <li>\r\n <p>Bekerja sama dengan tim lain dalam pengembangan dan implementasi sistem baru.</p>\r\n </li>\r\n</ul>\r\n\r\n<hr>\r\n<p><strong>Kualifikasi:</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Pendidikan minimal D3/S1 di bidang Teknik Informatika, Ilmu Komputer, Sistem Informasi, atau bidang terkait.</p>\r\n </li>\r\n <li>\r\n <p>Memiliki pengalaman kerja minimal 1 tahun di posisi serupa (fresh graduate dipersilakan melamar).</p>\r\n </li>\r\n <li>\r\n <p>Menguasai troubleshooting hardware & software komputer (Windows/Linux/MacOS).</p>\r\n </li>\r\n <li>\r\n <p>Memahami dasar-dasar jaringan komputer (LAN/WAN, TCP/IP, Router, Switch, Wireless).</p>\r\n </li>\r\n <li>\r\n <p>Mampu melakukan instalasi & konfigurasi aplikasi/software kantor.</p>\r\n </li>\r\n <li>\r\n <p>Diutamakan memiliki sertifikat pendukung (misal: MTCNA, CCNA, CompTIA, dsb).</p>\r\n </li>\r\n <li>\r\n <p>Memiliki kemampuan analisa, komunikasi yang baik, dan siap bekerja secara individu maupun tim.</p>\r\n </li>\r\n <li>\r\n <p>Bersedia bekerja secara shifting/on call jika dibutuhkan.</p>\r\n </li>\r\n</ul>\r\n\r\n<hr>\r\n<p><strong>Keahlian Tambahan (Plus):</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Pengalaman menggunakan/mengelola cloud (Google Workspace, Microsoft 365, dll).</p>\r\n </li>\r\n <li>\r\n <p>Mengerti dasar pemrograman (PHP, Python, dsb) merupakan nilai tambah.</p>\r\n </li>\r\n <li>\r\n <p>Pengalaman membuat atau memelihara website perusahaan.</p>\r\n </li>\r\n <li>\r\n <p>Pernah menggunakan tools remote support (TeamViewer, AnyDesk, dll).</p>\r\n </li>\r\n</ul>', '2025-07-25', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('admin','non_admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(40, 'Doni', 'Doni', 'IT', '-', 'admin', '$2y$10$sUglcBYsmH30/GjNOYNo6embg/ibc.2sj7o/WKEyzkBrq512OV4GK', 1718692487, 'user.png', 1),
(42, 'Resia', 'resia', 'HRD', '-', 'admin', '$2y$10$2mTt81XmTn2nJkcGixEGh.yT0FoSSQp10slKNA9OCilmzfkQ0n25q', 1718864294, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
