-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2025 at 10:25 AM
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
  `id_loker` varchar(5) NOT NULL,
  `applydate` varchar(17) NOT NULL,
  `salary_ekspetasi` varchar(17) NOT NULL,
  `last_salary` varchar(17) NOT NULL,
  `experience` varchar(17) NOT NULL,
  `status` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `email`, `no_wa`, `pendidikan`, `jurusan`, `jk`, `foto`, `cv`, `id_loker`, `applydate`, `salary_ekspetasi`, `last_salary`, `experience`, `status`) VALUES
(1, 'doni sortir', 'malang', '7 mei', 'doni@gmail', '089672574222', 'S1', 'Sistem Inform', 'Laki Laki', '1.jpg', 'C1052.pdf', '22', '7 juni ', '', '', '', 'tidak_relevan'),
(2, 'rena sortir', 'malang2', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '2.jpg', 'C1052.pdf', '23', '7 juni jam1', '', '', '', 'sortir'),
(3, 'doni inter', 'malang3', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '3.jpg', 'C1052.pdf', '22', '7 juni ', '', '', '', 'sortir'),
(4, 'rena inter', 'malang4', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '2.jpg', 'C1052.pdf', '23', '7 juni jam1', '', '', '', 'sortir'),
(5, 'doni TR', 'malang5', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '2.jpg', 'C1052.pdf', '22', '7 juni ', '', '', '', 'sortir'),
(6, 'rena TR', 'malang6', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '1.jpg', 'C1052.pdf', '23', '7 juni jam1', '', '', '', 'sortir'),
(7, 'doni lolos', 'malang6', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '2.jpg', 'C1052.pdf', '22', '7 juni ', '', '', '', 'lolos'),
(8, 'rena tidak lolos', 'malang7', '7 mei', 'doni@gmail', '312831', 'S1', 'Sistem Inform', 'Laki Laki', '1.jpg', 'C1052.pdf', '23', '7 juni jam1', '', '', '', 'tidak lolos'),
(9, 'soni', 'adalah', 'anak', 'baik@gmail.com', '089672574222', 'SMA / SMK', 're', 'Laki-laki', '1.jpg', 'C1052.pdf', '23', '0', '', '', '', 'sortir'),
(10, 'kedua', 'kalinya', 'aku', 'djasi@gmail.com', '089672574222', 'D-I /D-III', 're', 'Laki-laki', '2.jpg', 'C1052.pdf', '23', '26-07-2025 10:0', '', '', '', 'sortir'),
(11, 'doni', 'tamsa', 'dsa', 'das@gmail.com', '089672574222', 'S-2 (Pascasarjana)', 're', 'Perempuan', '3.jpg', 'C1052.pdf', '23', '26-07-2025 10:07', '', '', '', 'sortir'),
(12, 'doni', 'tamsa', 'dsa', 'das@gmail.com', '089672574222', 'S-2 (Pascasarjana)', 're', 'Perempuan', '1.jpg', 'C1052.pdf', '23', '26-07-2025 10:08', '', '', '', 'sortir'),
(13, 'dandal', 'dska', 'dska', 'das@gmail.com', '089672574222', 'SMA / SMK', 're', 'Laki-laki', '2.jpg', 'C1052.pdf', '23', '26-07-2025 10:09', '', '', '', 'sortir'),
(14, 'tesqas', 'dassd', 'dsa', 'dsa@gmail.com', '089672574222', 'D-I /D-III', 're', 'Laki-laki', '3.jpg', 'C1052.pdf', '22', '26-07-2025 10:13', '', '', '', 'sortir'),
(15, 'seuri', 'tamsa', 'aku', 'doniwicaksono27@gmail.com', '089672574222', 'D-I /D-III', 're', 'Perempuan', '1.jpg', 'C1052.pdf', '22', '26-07-2025 10:14', '', '', '', 'sortir'),
(16, 'Resia', 'Gempol', '2021-06-26', 'resdono27@gmail.com', 'dan', 'D-IV / S-1', 'Sikolog', 'Laki-laki', '2.jpg', '3.pdf', '23', '26-07-2025 10:48', '', '', '', 'sortir'),
(25, 'Disa Sasmita', 'Malng', '6651-12-15', 'dimasbudipratama@gmail.com', '31290', 'D-IV / S-1', 'Teknik Informatika', 'Perempuan', '1753597125_f.png', '1753597125_c.pdf', '24', '27-07-2025 08:18', '', '', '', 'sortir'),
(26, 'Dea Tamara', 'dasda d as', '2025-07-02', 'doni@gmail.com', '2626', 'S-2 (Pascasarjana)', 'Teknik Informatika', 'Laki-laki', '1753597525_f.png', '1753597525_c.pdf', '24', '27-07-2025 08:25', '', '', '', 'sortir'),
(27, 'HRD Trial', 'Pasuruan', '1999-01-01', 'hrd2@akt-id.com', '081234567890', 'D-IV / S-1', 'HRD', 'Laki-laki', '1753681954_f.png', '1753681954_c.pdf', '25', '28-07-2025 07:52', '', '', '', 'sortir'),
(28, 'asd', 'asd', '2000-01-01', 'asd@akt-id.com', '6285928373072', 'D-IV / S-1', 'asd', 'Laki-laki', '1753682590_f.png', '1753682590_c.pdf', '25', '28-07-2025 08:03', '', '', '', 'sortir'),
(29, 'tesdoini', 'malang', '2025-07-31', 'aktindonesia123@gmail.com', '4849', 'SMA / SMK', 'malang', 'Laki-laki', '1753689334_f.png', '1753689334_c.pdf', '26', '28-07-2025 09:55', '15415', '1651', 'Fresh Graduate', 'sortir'),
(30, 'teas', 'asd', '2025-07-28', 'bromoguitars@gmail.com', '4849', 'D-I /D-III', 'malang', 'Perempuan', '1753689763_f.png', '1753689763_c.pdf', '26', '28-07-2025 10:02', '4456416', '4564564', 'Experienced', 'sortir');

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
(22, '25-07-25', 'IT Networking', '<p><strong>. </strong><strong>IT Support:</strong></p>\r\n\r\n<ul>\r\n <li>Tugas: Memberikan dukungan teknis kepada pengguna, menangani masalah perangkat keras dan perangkat lunak, instalasi dan konfigurasi perangkat, pemeliharaan sistem, dan menjaga keamanan data.</li>\r\n</ul>\r\n\r\n<ol>\r\n <li>Keahlian: Menguasai sistem operasi, jaringan, perangkat keras dan lunak, troubleshooting, komunikasi efektif, customer service.</li>\r\n</ol>\r\n\r\n<p> </p>\r\n\r\n<p><strong>. </strong><strong>IT Support:</strong></p>\r\n\r\n<ul>\r\n <li>Tugas: Memberikan dukungan teknis kepada pengguna, menangani masalah perangkat keras dan perangkat lunak, instalasi dan konfigurasi perangkat, pemeliharaan sistem, dan menjaga keamanan data.</li>\r\n <li>Keahlian: Menguasai sistem operasi, jaringan, perangkat keras dan lunak, troubleshooting, komunikasi efektif, customer service.</li>\r\n</ul>', '2025-07-25', 'close'),
(23, '25-07-25', 'IT & ERP Staff', '<p><strong>Tanggung Jawab:</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Melakukan instalasi, konfigurasi, dan pemeliharaan perangkat keras (hardware) dan perangkat lunak (software) perusahaan.</p>\r\n </li>\r\n <li>\r\n <p>Menangani troubleshooting komputer, jaringan, printer, dan perangkat IT lainnya.</p>\r\n </li>\r\n <li>\r\n <p>Memastikan keamanan data dan jaringan perusahaan (backup, antivirus, firewall).</p>\r\n </li>\r\n <li>\r\n <p>Membantu pengguna (user) dalam menyelesaikan masalah teknis IT sehari-hari.</p>\r\n </li>\r\n <li>\r\n <p>Mendokumentasikan sistem dan prosedur IT yang berjalan di perusahaan.</p>\r\n </li>\r\n <li>\r\n <p>Melakukan monitoring sistem dan jaringan secara rutin.</p>\r\n </li>\r\n <li>\r\n <p>Bekerja sama dengan tim lain dalam pengembangan dan implementasi sistem baru.</p>\r\n </li>\r\n</ul>\r\n\r\n<hr>\r\n<p><strong>Kualifikasi:</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Pendidikan minimal D3/S1 di bidang Teknik Informatika, Ilmu Komputer, Sistem Informasi, atau bidang terkait.</p>\r\n </li>\r\n <li>\r\n <p>Memiliki pengalaman kerja minimal 1 tahun di posisi serupa (fresh graduate dipersilakan melamar).</p>\r\n </li>\r\n <li>\r\n <p>Menguasai troubleshooting hardware & software komputer (Windows/Linux/MacOS).</p>\r\n </li>\r\n <li>\r\n <p>Memahami dasar-dasar jaringan komputer (LAN/WAN, TCP/IP, Router, Switch, Wireless).</p>\r\n </li>\r\n <li>\r\n <p>Mampu melakukan instalasi & konfigurasi aplikasi/software kantor.</p>\r\n </li>\r\n <li>\r\n <p>Diutamakan memiliki sertifikat pendukung (misal: MTCNA, CCNA, CompTIA, dsb).</p>\r\n </li>\r\n <li>\r\n <p>Memiliki kemampuan analisa, komunikasi yang baik, dan siap bekerja secara individu maupun tim.</p>\r\n </li>\r\n <li>\r\n <p>Bersedia bekerja secara shifting/on call jika dibutuhkan.</p>\r\n </li>\r\n</ul>\r\n\r\n<hr>\r\n<p><strong>Keahlian Tambahan (Plus):</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Pengalaman menggunakan/mengelola cloud (Google Workspace, Microsoft 365, dll).</p>\r\n </li>\r\n <li>\r\n <p>Mengerti dasar pemrograman (PHP, Python, dsb) merupakan nilai tambah.</p>\r\n </li>\r\n <li>\r\n <p>Pengalaman membuat atau memelihara website perusahaan.</p>\r\n </li>\r\n <li>\r\n <p>Pernah menggunakan tools remote support (TeamViewer, AnyDesk, dll).</p>\r\n </li>\r\n</ul>', '2025-07-25', 'open'),
(24, '26-07-25', 'Shipping Staff', '<h4><strong>Deskripsi Pekerjaan:</strong></h4>\r\n\r\n<ul>\r\n <li>\r\n <p>Mengelola dokumen ekspor-impor (invoice, packing list, BL, COO, dan PEB/PIB).</p>\r\n </li>\r\n <li>\r\n <p>Koordinasi dengan pihak forwarding, EMKL, pelayaran, dan bea cukai.</p>\r\n </li>\r\n <li>\r\n <p>Memastikan proses custom clearance berjalan tepat waktu dan sesuai regulasi.</p>\r\n </li>\r\n <li>\r\n <p>Melakukan entry data pada sistem INSW dan CEISA.</p>\r\n </li>\r\n <li>\r\n <p>Mengurus perizinan ekspor-impor (API, NIK, dokumen Lartas, dll).</p>\r\n </li>\r\n <li>\r\n <p>Berkoordinasi dengan bagian produksi dan gudang terkait jadwal pengiriman.</p>\r\n </li>\r\n <li>\r\n <p>Menangani klaim atau permasalahan dalam proses pengiriman barang.</p>\r\n </li>\r\n</ul>\r\n\r\n<h4><strong>Kualifikasi:</strong></h4>\r\n\r\n<ul>\r\n <li>\r\n <p>Minimal pendidikan <strong>D3/S1</strong> dari jurusan Manajemen Transportasi, Logistik, atau Kepabeanan.</p>\r\n </li>\r\n <li>\r\n <p>Memiliki pengalaman <strong>minimal 2 tahun</strong> di bidang ekspor impor.</p>\r\n </li>\r\n <li>\r\n <p>Memahami proses kepabeanan dan regulasi ekspor-impor di Indonesia.</p>\r\n </li>\r\n <li>\r\n <p>Terbiasa menggunakan sistem <strong>CEISA, INSW</strong>, dan aplikasi bea cukai lainnya.</p>\r\n </li>\r\n <li>\r\n <p>Mampu berbahasa Inggris (minimal pasif).</p>\r\n </li>\r\n <li>\r\n <p>Komunikatif, detail, dan mampu bekerja di bawah tekanan.</p>\r\n </li>\r\n <li>\r\n <p>Diutamakan memiliki <strong>sertifikasi PPJK atau Brevet C</strong>.</p>\r\n </li>\r\n</ul>', '2025-08-09', 'open'),
(25, '26-07-25', 'HRD', '<p><strong>Deskripsi Pekerjaan:</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Bertanggung jawab atas proses rekrutmen dan seleksi karyawan (job posting, screening, interview).</p>\r\n </li>\r\n <li>\r\n <p>Menyusun dan mengembangkan kebijakan serta prosedur perusahaan terkait HR.</p>\r\n </li>\r\n <li>\r\n <p>Melakukan onboarding karyawan baru serta pelatihan dan pengembangan karyawan.</p>\r\n </li>\r\n <li>\r\n <p>Mengelola administrasi kepegawaian (absensi, cuti, kontrak kerja, dll).</p>\r\n </li>\r\n <li>\r\n <p>Menangani proses penilaian kinerja karyawan (KPI).</p>\r\n </li>\r\n <li>\r\n <p>Menjadi penghubung antara perusahaan dan karyawan dalam hal komunikasi dan keluhan.</p>\r\n </li>\r\n <li>\r\n <p>Menyusun laporan HR secara berkala kepada manajemen.</p>\r\n </li>\r\n</ul>\r\n\r\n<p><strong>Kualifikasi:</strong></p>\r\n\r\n<ul>\r\n <li>\r\n <p>Pria/Wanita, usia maksimal 35 tahun.</p>\r\n </li>\r\n <li>\r\n <p>Pendidikan minimal S1 Psikologi, Hukum, atau Manajemen SDM.</p>\r\n </li>\r\n <li>\r\n <p>Pengalaman minimal 2 tahun di bidang HR.</p>\r\n </li>\r\n <li>\r\n <p>Memahami peraturan ketenagakerjaan Indonesia.</p>\r\n </li>\r\n <li>\r\n <p>Mampu mengoperasikan Ms. Office dan sistem HRIS.</p>\r\n </li>\r\n <li>\r\n <p>Memiliki kemampuan komunikasi, negosiasi, dan interpersonal yang baik.</p>\r\n </li>\r\n <li>\r\n <p>Teliti, disiplin, dan mampu bekerja di bawah tekanan.</p>\r\n </li>\r\n</ul>', '2025-08-09', 'open'),
(26, '28-07-25', 'EXPORT - IMPORT', '<p><strong>SHIPPING (EXPORT-IMPORT)</strong></p>\r\n\r\n<p>We are looking for a skilled and experienced Export-Import (Shipping) who will handle end-to-end export-import processes, ensure customs documentation compliance, and coordinate with external stakeholders.<br>\r\n<br>\r\n<strong>Responsibilities :</strong><br>\r\n- Manage the complete process of export and import operations.<br>\r\n- Prepare and handle all customs documentation accurately.<br>\r\n- Coordinate with Customs, forwarders, PPJK, shipping lines, and other related agencies.<br>\r\n- Input and monitor documents through CEISA, INSW, and Bonded Zone systems.<br>\r\n- Ensure compliance with all applicable export-import regulations.<br>\r\n- Prepare detailed reports and maintain documentation.</p>\r\n\r\n<p><br>\r\n<strong>Qualifications :</strong><br>\r\n- Minimum education D3/S1 in All Major (preferably in Logistics, Customs, or Management).<br>\r\n- At least 2 years of experience in a similar role, especially in a Bonded Zone company.<br>\r\n- Deep understanding of customs clearance procedures, and familiarity with Customs Documents.<br>\r\n- Familiar with custom clearance, Indonesian Customs regulations, and export-import documents (PIB, PEB, COO, Packing List, Invoice, etc.)<br>\r\n- Proficient in using CEISA, INSW, and other digital customs platforms.<br>\r\nStrong English communication skills (verbal and written).<br>\r\n- Detail-oriented, disciplined, and high integrity.<br>\r\n- Willing to attend tests/recruitment process (offline) and Work at the Pasuruan (PIER).<br>\r\n<br>\r\n<strong>If you have experience with bonded zone, know your way around Customs Documents, and speak fluent English – this one’s for you!</strong></p>', '2025-08-31', 'open');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
