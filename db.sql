-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 10:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_serial_number` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asset_tag` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_model_barang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status_barang` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_serial_number`, `nip`, `asset_tag`, `id_model_barang`, `id_status_barang`) VALUES
('AW68DU', NULL, '20190400011', '1', '3'),
('CJ4ZAP', NULL, '20190400014', '2', '1'),
('CJPO93', NULL, '20190400015', '2', '1'),
('HJ434A', NULL, '20190400013', '2', '1'),
('HJ4HPO', NULL, '20190400012', '2', '5'),
('IJ4EYH', NULL, '20190400005', '3', '1'),
('IQ13OG', NULL, '20190400006', '3', '5'),
('L844DH', NULL, '20190400004', '6', '3'),
('LB2JDH', NULL, '20190400001', '6', '1'),
('LF7JDT', '5671', '20190400003', '6', '2'),
('NC2JDH', '1234', '20190400002', '7', '1'),
('PJ44DH', NULL, '20190400010', '4', '4'),
('PJ4907', NULL, '20190400007', '4', '5'),
('PJ49ZS', NULL, '20190400008', '3', '4'),
('PJ4PLK', NULL, '20190400009', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `detail_permintaan_barang`
--

CREATE TABLE `detail_permintaan_barang` (
  `id_permintaan_barang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status_permintaan` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_permintaan_barang`
--

INSERT INTO `detail_permintaan_barang` (`id_permintaan_barang`, `kode_jenis`, `id_status_permintaan`) VALUES
('1', 'RT', '1'),
('1', 'LS', '1'),
('1', 'LP', '2'),
('2', 'WR', '1'),
('2', 'PR', '3'),
('3', 'FR', '2'),
('3', 'PR', '3');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `kode_jenis` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_form_maintenance` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_jenis_maintenance` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`kode_jenis`, `nama`, `template_form_maintenance`, `id_jenis_maintenance`) VALUES
('FR', 'Firewall', 'maintenance_net_firewall.xls', '1'),
('LP', 'Laptop', 'maintenance_komputer_laptop.xls', '3'),
('LS', 'Layar Screen', 'maintenance_mult_layarscreen.xls', '2'),
('NB', 'Notebook', 'maintenance_komputer_notebook.xls', '3'),
('PJ', 'Projector', 'maintenance_mult_projector.xls', '2'),
('PR', 'Printer', 'maintenance_mult_printer.xls', '2'),
('RT', 'Router', 'maintenance_net_router.xls', '1'),
('SW', 'Switch', 'maintenance_net_switch.xls', '1'),
('WR', 'Wireless', 'maintenance_net_wireless.xls', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_maintenance`
--

CREATE TABLE `jenis_maintenance` (
  `id_jenis_maintenance` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_maintenance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_maintenance`
--

INSERT INTO `jenis_maintenance` (`id_jenis_maintenance`, `jenis_maintenance`) VALUES
('1', 'Network'),
('2', 'Multimedia'),
('3', 'Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_28_043906_create_jenis_maintenance_table', 2),
(6, '2022_09_28_030049_create_jenis_barang_table', 3),
(7, '2022_09_28_032926_create_status_barang_table', 3),
(8, '2022_09_28_033652_create_model_barang_table', 3),
(9, '2022_09_28_035216_create_barang_table', 3),
(10, '2022_09_28_041107_create_status_permintaan_table', 3),
(11, '2022_09_28_041420_create_permintaan_barang_table', 4),
(12, '2022_09_28_041213_create_detail_permintaan_barang_table', 5),
(13, '2022_09_28_042855_create_status_maintenance_table', 5),
(14, '2022_09_28_083001_create_permintaan_maintenance_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_barang`
--

CREATE TABLE `model_barang` (
  `id_model_barang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_barang`
--

INSERT INTO `model_barang` (`id_model_barang`, `model_barang`, `kode_jenis`) VALUES
('1', 'Asus WF', 'WR'),
('10', 'Edimax ES50', 'SW'),
('11', 'Netgear IGS300', 'SW'),
('2', 'Huawei WR', 'WR'),
('3', 'Infocus P92', 'PJ'),
('4', 'Sony L982', 'PJ'),
('5', 'Asus WF', 'WR'),
('6', 'Asus CoreI7', 'LP'),
('7', 'HP Notebook CoreI5', 'NB'),
('8', 'Acer CoreI5', 'LP'),
('9', 'Cisco c98', 'SW');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_barang`
--

CREATE TABLE `permintaan_barang` (
  `id_permintaan_barang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_peminta` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_permintaan` date NOT NULL,
  `surat_izin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_teknisi` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permintaan_barang`
--

INSERT INTO `permintaan_barang` (`id_permintaan_barang`, `nip_peminta`, `tanggal_permintaan`, `surat_izin`, `nip_teknisi`, `catatan`) VALUES
('1', '3030', '2022-01-19', 'izin.pdf', '5671', 'keperluan operasional'),
('2', '3030', '2022-01-22', 'izin.pdf', '5671', 'untuk backup'),
('3', '3030', '2022-01-29', 'izin.pdf', '5671', 'butuh cepat karena kebutuhan kerja sama');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_maintenance`
--

CREATE TABLE `permintaan_maintenance` (
  `id_permintaan_maintenance` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_serial_number` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_permintaan` date NOT NULL,
  `keterangan_maintenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_teknisi` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jadwal_perbaikan` date DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `upload_form_maintenance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_status_maintenance` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permintaan_maintenance`
--

INSERT INTO `permintaan_maintenance` (`id_permintaan_maintenance`, `id_serial_number`, `tanggal_permintaan`, `keterangan_maintenance`, `nip_teknisi`, `jadwal_perbaikan`, `note`, `lokasi`, `tanggal_selesai`, `upload_form_maintenance`, `id_status_maintenance`) VALUES
('1', 'LF7JDT', '2022-02-10', 'Layarnya bluescreen', '5671', '2022-02-11', 'udah bisa digunakan lagi', 'ICT', '2022-02-11', 'maintenance_laptop.xls', '3'),
('2', 'NC2JDH', '2022-03-30', 'Keypadnya macet', '5671', '2022-04-02', '', 'ICT', '0000-00-00', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_barang`
--

CREATE TABLE `status_barang` (
  `id_status_barang` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_barang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_barang`
--

INSERT INTO `status_barang` (`id_status_barang`, `status_barang`) VALUES
('1', 'Tersedia'),
('2', 'Dipakai'),
('3', 'Rusak'),
('4', 'Diperbaiki'),
('5', 'Hilang');

-- --------------------------------------------------------

--
-- Table structure for table `status_maintenance`
--

CREATE TABLE `status_maintenance` (
  `id_status_maintenance` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_maintenance` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_maintenance`
--

INSERT INTO `status_maintenance` (`id_status_maintenance`, `status_maintenance`) VALUES
('1', 'Dilaporkan'),
('2', 'Diterima'),
('3', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `status_permintaan`
--

CREATE TABLE `status_permintaan` (
  `id_status_permintaan` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_permintaan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_permintaan`
--

INSERT INTO `status_permintaan` (`id_status_permintaan`, `status_permintaan`, `keterangan`) VALUES
('1', 'Diajukan', 'Permintaan barang telah diajukan kepada admin'),
('2', 'Diterima', 'Permintaan barang telah diterima dan selesai'),
('3', 'Ditolak', 'Permintaan barang telah ditolak oleh admin'),
('4', 'Dipending', 'Permintaan barang sedang dalam proses pengadaan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eselon` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `name`, `email`, `password`, `unit_kerja`, `eselon`, `nohp`, `remember_token`, `created_at`, `updated_at`) VALUES
('1212', 'admin_teknisi', 'popi', 'popisya', 'popi@sig.id', '$2y$10$jiWMOZ.jLMm6RredRAI4b.K/K7YNNUrsrMcmQPYV6oYYSxuTcUydO', 'ICT', '3', '08243534632', NULL, '2023-01-19 23:00:32', '2023-01-19 23:00:32'),
('1234', 'karyawan', 'jimin', 'Jiminho', 'jimin@gmail.com', '$2y$10$LqQ6swRfJNYtHyyefqrE9uy166ulDHgYKvMR.kRRolP3kf1NhkKq2', 'ICT', '3', '08837492423', NULL, '2023-01-17 23:59:28', '2023-01-17 23:59:28'),
('3030', 'karyawan', 'danizen', 'Dani Zen', 'dani.zen@gmail.com', '$2y$10$uYDZr/bwk88FpIfMyyYqdetZv7admke/4yVxTRCP.Vp.5bygJbdtu', 'General Facility', '3', '081237877891', NULL, NULL, NULL),
('3276', 'admin_gudang', 'alghazali', 'Alghazali', 'alghazali@gmail.com', '$2y$10$0QHMQdirEY6B6z1raeLxUuicoAkxEMRBtXdFAVWJ4.6sx/ia955Ma', 'EPDC Maintenance', '3', '081234567891', NULL, NULL, NULL),
('3324', 'admin_teknisi', 'wismalda', 'Wismalda', 'wismalda@gmail.com', '$2y$10$Dnhz70UqFAJ5XTfbPAtwbO1h518u9eWsM2cyM3xPbz6kVeoJTDKvu', 'RKC 23 Operation', '3', '081374347623', NULL, NULL, NULL),
('3733', 'karyawan', 'zulfahman', 'Zulfahman', 'zulfahman@gmail.com', '$2y$10$cLmj5EJYyApZGd6FnN.01u/N67Zf56/h8bnXZCx.cWpet0Isa715m', 'Internal Audit', '2', '081266279891', NULL, NULL, NULL),
('4353', 'admin_gudang', 'ana', 'Anastasya', 'ana@gmail.com', '$2y$10$M6q3BVI1okXZ7cARHwZoqujW2EZ6IvFFRriPj7UHeavo9V12PakUu', 'ICT', '2', '0891245721', NULL, '2023-01-19 22:10:04', '2023-01-19 22:10:04'),
('5671', 'teknisi', 'povita', 'Povita', 'povita@gmail.com', '$2y$10$WSk8CMoV.wdy7473hInth.m/8x/x.jWu3oqxvyWPau/LGU.haKfc.', 'Mgt System', '4', '081344567891', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_serial_number`),
  ADD UNIQUE KEY `barang_asset_tag_unique` (`asset_tag`),
  ADD KEY `barang_nip_foreign` (`nip`),
  ADD KEY `barang_id_model_barang_foreign` (`id_model_barang`),
  ADD KEY `barang_id_status_barang_foreign` (`id_status_barang`);

--
-- Indexes for table `detail_permintaan_barang`
--
ALTER TABLE `detail_permintaan_barang`
  ADD KEY `detail_permintaan_barang_id_permintaan_barang_foreign` (`id_permintaan_barang`),
  ADD KEY `detail_permintaan_barang_kode_jenis_foreign` (`kode_jenis`),
  ADD KEY `detail_permintaan_barang_id_status_permintaan_foreign` (`id_status_permintaan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`kode_jenis`),
  ADD KEY `jenis_barang_id_jenis_maintenance_foreign` (`id_jenis_maintenance`);

--
-- Indexes for table `jenis_maintenance`
--
ALTER TABLE `jenis_maintenance`
  ADD PRIMARY KEY (`id_jenis_maintenance`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_barang`
--
ALTER TABLE `model_barang`
  ADD PRIMARY KEY (`id_model_barang`),
  ADD KEY `model_barang_kode_jenis_foreign` (`kode_jenis`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  ADD PRIMARY KEY (`id_permintaan_barang`),
  ADD KEY `permintaan_barang_nip_peminta_foreign` (`nip_peminta`),
  ADD KEY `permintaan_barang_nip_teknisi_foreign` (`nip_teknisi`);

--
-- Indexes for table `permintaan_maintenance`
--
ALTER TABLE `permintaan_maintenance`
  ADD PRIMARY KEY (`id_permintaan_maintenance`),
  ADD KEY `permintaan_maintenance_id_serial_number_foreign` (`id_serial_number`),
  ADD KEY `permintaan_maintenance_nip_teknisi_foreign` (`nip_teknisi`),
  ADD KEY `permintaan_maintenance_id_status_maintenance_foreign` (`id_status_maintenance`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status_barang`
--
ALTER TABLE `status_barang`
  ADD PRIMARY KEY (`id_status_barang`);

--
-- Indexes for table `status_maintenance`
--
ALTER TABLE `status_maintenance`
  ADD PRIMARY KEY (`id_status_maintenance`);

--
-- Indexes for table `status_permintaan`
--
ALTER TABLE `status_permintaan`
  ADD PRIMARY KEY (`id_status_permintaan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_id_model_barang_foreign` FOREIGN KEY (`id_model_barang`) REFERENCES `model_barang` (`id_model_barang`),
  ADD CONSTRAINT `barang_id_status_barang_foreign` FOREIGN KEY (`id_status_barang`) REFERENCES `status_barang` (`id_status_barang`),
  ADD CONSTRAINT `barang_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_permintaan_barang`
--
ALTER TABLE `detail_permintaan_barang`
  ADD CONSTRAINT `detail_permintaan_barang_id_permintaan_barang_foreign` FOREIGN KEY (`id_permintaan_barang`) REFERENCES `permintaan_barang` (`id_permintaan_barang`),
  ADD CONSTRAINT `detail_permintaan_barang_id_status_permintaan_foreign` FOREIGN KEY (`id_status_permintaan`) REFERENCES `status_permintaan` (`id_status_permintaan`),
  ADD CONSTRAINT `detail_permintaan_barang_kode_jenis_foreign` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis_barang` (`kode_jenis`);

--
-- Constraints for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD CONSTRAINT `jenis_barang_id_jenis_maintenance_foreign` FOREIGN KEY (`id_jenis_maintenance`) REFERENCES `jenis_maintenance` (`id_jenis_maintenance`);

--
-- Constraints for table `model_barang`
--
ALTER TABLE `model_barang`
  ADD CONSTRAINT `model_barang_kode_jenis_foreign` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis_barang` (`kode_jenis`);

--
-- Constraints for table `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  ADD CONSTRAINT `permintaan_barang_nip_peminta_foreign` FOREIGN KEY (`nip_peminta`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `permintaan_barang_nip_teknisi_foreign` FOREIGN KEY (`nip_teknisi`) REFERENCES `users` (`id`);

--
-- Constraints for table `permintaan_maintenance`
--
ALTER TABLE `permintaan_maintenance`
  ADD CONSTRAINT `permintaan_maintenance_id_serial_number_foreign` FOREIGN KEY (`id_serial_number`) REFERENCES `barang` (`id_serial_number`),
  ADD CONSTRAINT `permintaan_maintenance_id_status_maintenance_foreign` FOREIGN KEY (`id_status_maintenance`) REFERENCES `status_maintenance` (`id_status_maintenance`),
  ADD CONSTRAINT `permintaan_maintenance_nip_teknisi_foreign` FOREIGN KEY (`nip_teknisi`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
