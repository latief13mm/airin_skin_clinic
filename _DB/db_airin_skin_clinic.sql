-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 05:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poliklinik_aris`
--

-- --------------------------------------------------------

--
-- Table structure for table `det_pendaftaran`
--

CREATE TABLE `det_pendaftaran` (
  `NoRecord` int(11) NOT NULL,
  `NoPendaftaran` varchar(50) DEFAULT NULL,
  `IDJenisBiaya` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `det_pendaftaran`
--

INSERT INTO `det_pendaftaran` (`NoRecord`, `NoPendaftaran`, `IDJenisBiaya`) VALUES
(7, '201801060001', 'BY0002'),
(9, '201801060002', 'BY0002'),
(10, '201801060002', 'BY0001'),
(11, '201801060003', 'BY0001'),
(12, '201801060003', 'BY0002'),
(13, '201801060003', 'BY0003'),
(14, '201801080007', 'BY0001'),
(15, '201801080007', 'BY0002'),
(16, '201801090008', 'BY0001'),
(17, '201801090008', 'BY0002'),
(18, '201801110009', 'BY0001'),
(19, '201801110009', 'BY0002'),
(20, '201801110010', 'BY0001'),
(21, '201801110010', 'BY0002'),
(22, '201801250011', 'BY0001'),
(23, '201804110013', 'BY0001'),
(24, '202306220035', 'BY0001'),
(25, '202306220035', 'BY0002'),
(26, '202306240040', 'BY0001'),
(27, '202306240040', 'BY0002'),
(28, '202306240040', 'BY0003'),
(29, '202306240037', 'BY0004'),
(30, '202306240037', 'BY0003'),
(31, '202306290044', 'BY0001'),
(32, '202306300045', 'BY0003'),
(33, '202306300045', 'BY0001');

-- --------------------------------------------------------

--
-- Table structure for table `det_resep`
--

CREATE TABLE `det_resep` (
  `noRecord` int(11) NOT NULL,
  `NoResep` varchar(20) DEFAULT NULL,
  `KodeObat` varchar(20) DEFAULT NULL,
  `dosis` varchar(100) DEFAULT NULL,
  `jumlahObat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `det_resep`
--

INSERT INTO `det_resep` (`noRecord`, `NoResep`, `KodeObat`, `dosis`, `jumlahObat`) VALUES
(7, 'RE201801060001', 'B0001', '3 x 3', 6),
(9, 'RE201801060002', 'B0001', '2 x 2', 3),
(10, 'RE201801060002', 'B0002', '3 x 3', 4),
(11, 'RE201801060003', 'B0001', '2 x 3', 2),
(12, 'RE201801060003', 'B0002', '3 x 4', 1),
(13, 'RE201801060003', 'B0003', '4 x 5', 1),
(14, 'RE201801080004', 'B0001', '3 x 4 / Hari', 10),
(15, 'RE201801080004', 'B0002', '2 x 1 / Hari', 5),
(16, 'RE201801090005', 'B0001', '3 x 3 / hari', 20),
(17, 'RE201801110006', 'B0001', '5 x 5 / hari', 10),
(18, 'RE201801110006', 'B0002', '2 x 2 / hari', 5),
(19, 'RE201801110007', 'B0001', '5 x 5', 1),
(20, 'RE201801110007', 'B0002', '5 x 3', 2),
(21, 'RE201801250008', 'B0001', '5 x 5', 10),
(22, 'RE201804110009', 'B0003', '4 x 4 / hari', 20),
(23, 'RE202306220010', 'B0001', '50', 1),
(24, 'RE202306240011', 'B0001', NULL, 0),
(25, 'RE202306240011', 'B0002', NULL, 0),
(26, 'RE202306240012', 'B0001', '20', 10),
(27, 'RE202306290013', 'B0002', '10', 10),
(28, 'RE202306300014', 'B0003', '20', 10);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `KodeDokter` varchar(20) NOT NULL,
  `nmDokter` varchar(50) DEFAULT NULL,
  `almDokter` varchar(50) DEFAULT NULL,
  `jnsKelDokter` varchar(20) DEFAULT NULL,
  `telpDokter` varchar(20) DEFAULT NULL,
  `KodePoli` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`KodeDokter`, `nmDokter`, `almDokter`, `jnsKelDokter`, `telpDokter`, `KodePoli`) VALUES
('D0001', 'Dr. Xavier', 'West South Anthem 1', 'Laki-Laki', '021-123123', 'POLI0002'),
('D0002', 'Macan Kumbang', 'Hutan Rimba H', 'Laki-Laki', '021021', 'POLI0001'),
('D0003', 'Dr. Kolor', 'Celana Panjang', 'Laki-Laki', '09123123', 'POLI0001'),
('D0004', 'Dr. Komar', 'Cikomar', 'Laki-Laki', '089123921', 'POLI0002');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpraktek`
--

CREATE TABLE `jadwalpraktek` (
  `KodeJadwal` varchar(20) NOT NULL,
  `hari` varchar(15) DEFAULT NULL,
  `jamMulai` time DEFAULT NULL,
  `jamSelesai` time DEFAULT NULL,
  `KodeDokter` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwalpraktek`
--

INSERT INTO `jadwalpraktek` (`KodeJadwal`, `hari`, `jamMulai`, `jamSelesai`, `KodeDokter`) VALUES
('J0001', 'Senin', '07:00:00', '12:00:00', 'D0001'),
('J0002', 'Selasa', '07:00:00', '19:00:00', 'D0002'),
('J0003', 'Rabu', '07:00:00', '19:00:00', 'D0003'),
('J0004', 'Kamis', '09:00:00', '23:00:00', 'D0004'),
('J0005', 'Jumat', '07:00:00', '23:59:00', 'D0001'),
('J0006', 'Sabtu', '07:00:00', '23:00:00', 'D0002'),
('J0007', 'Minggu', '00:00:00', '17:00:00', 'D0001'),
('J0008', 'Kamis', '08:00:00', '23:59:00', 'D0003'),
('J0009', 'Kamis', '08:00:00', '23:59:00', 'D0001'),
('J0010', 'Rabu', '18:00:00', '22:00:00', 'D0004');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbiaya`
--

CREATE TABLE `jenisbiaya` (
  `IDJenisBiaya` varchar(20) NOT NULL,
  `namaBiaya` varchar(50) DEFAULT NULL,
  `tarif` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisbiaya`
--

INSERT INTO `jenisbiaya` (`IDJenisBiaya`, `namaBiaya`, `tarif`) VALUES
('BY0001', 'AIRIN ACNE INJECTION', 500000),
('BY0002', 'AIRIN FACIAL IPL PHOTOSHOWER', 1000000),
('BY0003', 'BLACK LASER', 1100000),
('BY0004', 'BOTOX', 900000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `noUser` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `typeUser` varchar(20) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `NoPasien` varchar(20) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`noUser`, `username`, `password`, `typeUser`, `NIP`, `NoPasien`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'marisa', '$2y$10$wFRfgfRf9fiCXV8k.xPqZeybhOohvKjAznBAYr2URJ45kU1zadmCK', 'ADMIN', 'K0001', NULL, 'vShQIwLvKEYbG9yMco3BhlFGjTvSRKIPNpLI2fzxVjCcJqpiyEsmdErEf8SV', '2018-01-02 19:13:37', '2018-01-02 19:13:37'),
(10, 'latief123', '$2y$10$3i5iTHvXMqz8EFigQawwb.XEXQSftsShFCIa0RxB910Pj2ddXaxQO', 'ADMIN', 'K0002', NULL, 'zcT8JTNsnGvhsxH61Oi3ReDuLBclzgosllAfHEyUBAR6M498TtM8bxruIJXo', NULL, NULL),
(16, 'pasien123', '$2y$10$orV5fBlz.1TVAg7ApsKr1OYYHjqpVx3kthp7L6asTgBejPR/Jn7NO', 'PASIEN', NULL, 'P0002', 'GDKTFHRNML8aRezFKSaHvwpzEPotW4eeSP6EMxPmn3SAlIAL0w1CvgtnLUHO', NULL, NULL),
(17, 'joni123', '$2y$10$msr6FfL4QHyOE8Uju5jBmuYMuBXzHsgn4YqYcxCrImP4f9Y82xHw.', 'PASIEN', NULL, 'P0004', 'wXvabe8CwVx95wKt69BpNtw8iwz4p7JRvYqVALDCzf89AMOp4uBtnQgRiRmb', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `KodeObat` varchar(20) NOT NULL,
  `nmObat` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `hargaJual` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`KodeObat`, `nmObat`, `merk`, `satuan`, `hargaJual`) VALUES
('B0001', 'Facial Wash All Skin Type', 'Airin Beauty', 'Tube', 80000),
('B0002', 'Facial Wash Acne Type 2', 'Airin Facial Wash', 'Tube', 60000),
('B0003', 'Niacinamide Gel', 'Airin Beauty', 'Cup', 63000),
('B0004', 'Hydrating Primer Toner', 'Airin Beauty', 'Tube', 102300),
('B0005', 'Glow Night Cream', 'Airin Beauty', 'Cup', 95000),
('B0006', 'Suncare Nia White 10 gr', 'Airin Beauty', 'Cup', 64000),
('B0007', 'Radiant Serum', 'Airin Beauty', 'Tube', 113000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `NoPasien` varchar(20) NOT NULL,
  `namaPas` varchar(50) DEFAULT NULL,
  `almPas` varchar(50) DEFAULT NULL,
  `telpPas` varchar(20) DEFAULT NULL,
  `tglLahirPas` date DEFAULT NULL,
  `jenisKelPas` varchar(20) DEFAULT NULL,
  `tglRegistrasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`NoPasien`, `namaPas`, `almPas`, `telpPas`, `tglLahirPas`, `jenisKelPas`, `tglRegistrasi`) VALUES
('P0002', 'Abdul Latief Mukti Mufida', 'JL Tomang Pulo', '081288080082', '1996-12-13', 'Laki-Laki', '2023-06-27'),
('P0004', 'Joni Ganteng', 'JL Siaga raya 1', '08128801', '2023-06-27', 'Laki-Laki', '2023-06-27'),
('P0005', 'Abdul Latief Mukti Mufida', 'JL Siaga', '0812880', '2023-06-27', 'laki-laki', '2023-06-27'),
('P0006', 'Marisa1', 'JL Siaga', '0812880', '2023-06-27', 'Perempuan', '2023-06-27'),
('P0007', 'bejo', 'Jl. sesuka hai', '081212121', '2023-07-09', 'laki dong', '2023-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(20) NOT NULL,
  `namaPeg` varchar(50) DEFAULT NULL,
  `almPeg` varchar(50) DEFAULT NULL,
  `telpPeg` varchar(50) DEFAULT NULL,
  `tglLahirPeg` date DEFAULT NULL,
  `jnsKelPeg` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `namaPeg`, `almPeg`, `telpPeg`, `tglLahirPeg`, `jnsKelPeg`) VALUES
('K0001', 'Marisa Aja', 'Jakpus', '083817122289', '2000-05-13', 'Perempuan'),
('K0002', 'Abdul Latief Mukti', 'Tomang', '08080123', '2000-05-15', 'Laki-Laki');

--
-- Triggers `pegawai`
--
DELIMITER $$
CREATE TRIGGER `buat_akun` AFTER INSERT ON `pegawai` FOR EACH ROW BEGIN
	
	insert into login (username,typeUser,NIP) VALUES(NEW.telpPeg,'PEGAWAI',NEW.NIP);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `NoPemeriksaan` varchar(50) NOT NULL,
  `keluhan` varchar(225) DEFAULT NULL,
  `diagnosa` varchar(225) DEFAULT NULL,
  `perawatan` varchar(225) DEFAULT NULL,
  `tindakan` varchar(225) DEFAULT NULL,
  `beratBadan` double DEFAULT NULL,
  `tensiDiastolik` int(11) DEFAULT NULL,
  `tensiSistolik` int(11) DEFAULT NULL,
  `NoPendaftaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`NoPemeriksaan`, `keluhan`, `diagnosa`, `perawatan`, `tindakan`, `beratBadan`, `tensiDiastolik`, `tensiSistolik`, `NoPendaftaran`) VALUES
('PM201801060001', 'Sakit mata', 'Kepala Pusing', 'Beri Bodrex', 'Secepatnya', 66, 30, 40, '201801060001'),
('PM201801060002', 'Sakit Pinggang', 'Kebanyakan Duduk', 'Nangtung we', 'Suruh beli obat encok', 70, 20, 30, '201801060002'),
('PM201801060003', 'Sakit Hati', 'Kebanyakan di PHP-in', 'Nyari kesenangan', 'Medis tingkat mendunia', 65, 30, 40, '201801060003'),
('PM201801080004', 'Sakit Pinggang', 'Kebanyakan Berdiri', 'Duduk yang lama', 'Awas ambien', 60, 20, 30, '201801080007'),
('PM201801090005', 'Sakit Pinggang', 'Teluk Patah', 'Lem', 'Secepatnya', 67, 40, 40, '201801090008'),
('PM201801110006', 'Sakit Mata', 'Kebanyakan ngoding', 'Relaksasi', 'Secepatnya', 60, 50, 40, '201801110009'),
('PM201801110007', 'Sakit Mata', 'Ambient', 'Refleksi Otak', 'Pijat Otak', 60, 50, 40, '201801110010'),
('PM201801250008', 'Sakit Gigi', 'Makan Kembang Gula', 'Sikat GIgi', 'ASAP', 65, 44, 45, '201801250011'),
('PM201804110009', 'Sakit Pinggang', 'Tulang Punggung retak', 'Rontgen Darurat', 'Medis secepatnya ASAP', 59, 55, 54, '201804110013'),
('PM202306220010', 'sakit hati', 'di tolak cinta', 'perlu kekasih', 'taaruf', 50, 20, 50, '202306220035'),
('PM202306240011', 'sakit hati', 'perlu pacar', 'gombal', 'pacaran', 150, 200, 2200, '202306240040'),
('PM202306240012', 'oy', 'uhu', 'dd', 'tt', 200, 300, 55, '202306240037'),
('PM202306290013', 'capek', 'ogah ogahan', 'terapis', 'cabut bulu', 200, 20, 20, '202306290044'),
('PM202306300014', 'sering lupa', 'wibu', 'kurang doi', 'perlu pacar', 150, 150, 150, '202306300045');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `NoPendaftaran` varchar(50) NOT NULL,
  `tglPendaftaran` date DEFAULT NULL,
  `noUrut` int(11) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `NoPasien` varchar(20) DEFAULT NULL,
  `KodeJadwal` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`NoPendaftaran`, `tglPendaftaran`, `noUrut`, `NIP`, `NoPasien`, `KodeJadwal`) VALUES
('201801060001', '2018-01-06', 1, 'K0001', 'P0001', 'J0006'),
('201801060002', '2018-01-06', 2, 'K0001', 'P0002', 'J0006'),
('201801060003', '2018-01-06', 3, 'K0001', 'P0003', 'J0006'),
('201801060004', '2018-01-06', 4, 'K0001', 'P0004', 'J0006'),
('201801070005', '2018-01-07', 1, 'K0001', 'P0001', 'J0007'),
('201801070006', '2018-01-07', 2, 'K0001', 'P0004', 'NOTHING'),
('201801080007', '2018-01-08', 1, 'K0001', 'P0005', 'J0001'),
('201801090008', '2018-01-09', 1, 'K0001', 'P0006', 'J0002'),
('201801110009', '2018-01-11', 1, 'K0001', 'P0007', 'J0009'),
('201801110010', '2018-01-11', 2, 'K0001', 'P0006', 'J0009'),
('201801250011', '2018-01-25', 1, 'K0001', 'P0006', 'J0009'),
('201803050012', '2018-03-05', 1, 'K0001', 'P0004', 'NOTHING'),
('201804110013', '2018-04-11', 1, 'K0001', 'P0008', 'J0010'),
('202306200014', '2023-06-20', 1, 'K0001', 'P0001', 'J0002'),
('202306200015', '2023-06-20', 2, 'K0001', 'P0001', 'NOTHING'),
('202306210016', '2023-06-21', 1, 'K0001', 'P0001', 'NOTHING'),
('202306210017', '2023-06-21', 2, '', 'P0009', 'NOTHING'),
('202306210018', '2023-06-21', 3, 'K0001', 'P0010', 'NOTHING'),
('202306210019', '2023-06-21', 4, 'K0001', 'P0011', 'NOTHING'),
('202306210020', '2023-06-21', 5, 'K0001', 'P0012', 'NOTHING'),
('202306210021', '2023-06-21', 6, 'K0001', 'P0013', 'NOTHING'),
('202306210022', '2023-06-21', 7, '', 'P0014', 'NOTHING'),
('202306210023', '2023-06-21', 8, 'K0001', 'P0015', 'NOTHING'),
('202306210024', '2023-06-21', 9, '', 'P0016', 'NOTHING'),
('202306210025', '2023-06-21', 10, '', 'P0017', 'NOTHING'),
('202306210026', '2023-06-21', 11, '', 'P0018', 'NOTHING'),
('202306210027', '2023-06-21', 12, '', 'P0019', 'NOTHING'),
('202306210028', '2023-06-21', 13, '', 'P0020', 'NOTHING'),
('202306210029', '2023-06-21', 14, '', 'P0021', 'NOTHING'),
('202306210030', '2023-06-21', 15, '', 'P0022', 'NOTHING'),
('202306210031', '2023-06-21', 16, '', 'P0023', 'NOTHING'),
('202306210032', '2023-06-21', 17, '', 'P0024', 'NOTHING'),
('202306210033', '2023-06-21', 18, '', 'P0011', 'NOTHING'),
('202306220034', '2023-06-22', 1, 'K0001', 'P0001', 'J0009'),
('202306220035', '2023-06-22', 2, 'K0001', 'P0011', 'J0009'),
('202306220036', '2023-06-22', 3, 'K0001', 'P0003', 'J0009'),
('202306240037', '2023-06-24', 1, 'K0001', 'P0001', 'J0006'),
('202306240038', '2023-06-24', 2, 'K0001', 'P0001', 'J0006'),
('202306240039', '2023-06-24', 3, 'K0001', 'P0008', 'J0006'),
('202306240040', '2023-06-24', 4, 'K0001', 'P0010', 'J0006'),
('202306240041', '2023-06-24', 5, 'K0001', 'P0006', 'J0006'),
('202306240042', '2023-06-24', 6, 'K0001', 'P0002', 'J0006'),
('202306290043', '2023-06-29', 1, '', 'P0003', 'NOTHING'),
('202306290044', '2023-06-29', 2, '', 'P0003', 'J0009'),
('202306300045', '2023-06-30', 1, '', 'P0003', 'J0005'),
('202307090046', '2023-07-09', 1, NULL, 'P0004', 'NOTHING'),
('202307090047', '2023-07-09', 2, NULL, 'P0004', 'NOTHING'),
('202307090048', '2023-07-09', 3, '', 'P0007', 'NOTHING'),
('202307090049', '2023-07-09', 4, NULL, 'Joni Ganteng don', 'NOTHING'),
('202307090050', '2023-07-09', 5, NULL, 'Joni Ganteng don', 'NOTHING'),
('202307090051', '2023-07-09', 6, NULL, 'P0004', 'NOTHING'),
('202307090052', '2023-07-09', 7, NULL, 'P0004', 'NOTHING'),
('202307090053', '2023-07-09', 8, NULL, 'Joni Ganteng don', 'NOTHING'),
('202307090054', '2023-07-09', 9, NULL, 'Joni Ganteng don', 'NOTHING'),
('202307090055', '2023-07-09', 10, NULL, 'P0004', 'NOTHING'),
('202307090056', '2023-07-09', 11, NULL, 'Joni Ganteng don', 'NOTHING'),
('202307090057', '2023-07-09', 12, NULL, 'Joni Ganteng don', 'NOTHING'),
('202307090058', '2023-07-09', 13, NULL, 'P0004', 'NOTHING');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `KodePoli` varchar(20) NOT NULL,
  `namaPoli` varchar(50) DEFAULT NULL,
  `alamatPoli` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`KodePoli`, `namaPoli`, `alamatPoli`) VALUES
('POLI0001', 'Airin Skin Clinic Mampang', 'JL. Mampang'),
('POLI0002', 'Airin Skin Clinic Menteng', 'JL. Menteng'),
('POLI0003', 'Airin Skin Clinik Depok', 'Jl. Depok');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `NoResep` varchar(20) NOT NULL,
  `NoPemeriksaan` varchar(20) NOT NULL,
  `proses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`NoResep`, `NoPemeriksaan`, `proses`) VALUES
('RE201801060001', 'PM201801060001', 'Selesai'),
('RE201801060002', 'PM201801060002', 'Selesai'),
('RE201801060003', 'PM201801060003', 'Selesai'),
('RE201801080004', 'PM201801080004', 'Selesai'),
('RE201801090005', 'PM201801090005', 'Selesai'),
('RE201801110006', 'PM201801110006', 'Selesai'),
('RE201801110007', 'PM201801110007', 'Selesai'),
('RE201801250008', 'PM201801250008', 'Selesai'),
('RE201804110009', 'PM201804110009', 'Selesai'),
('RE202306220010', 'PM202306220010', 'Selesai'),
('RE202306240011', 'PM202306240011', 'Selesai'),
('RE202306240012', 'PM202306240012', 'Menuju Apoteker'),
('RE202306290013', 'PM202306290013', 'Selesai'),
('RE202306300014', 'PM202306300014', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pemasukan_obat`
-- (See below for the actual view)
--
CREATE TABLE `v_pemasukan_obat` (
`NoResep` varchar(20)
,`NoPasien` varchar(20)
,`namaPas` varchar(50)
,`nmObat` varchar(50)
,`jumlahObat` int(11)
,`hargaJual` double
,`Total` double
,`tglPendaftaran` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pemasukan_pemeriksaan`
-- (See below for the actual view)
--
CREATE TABLE `v_pemasukan_pemeriksaan` (
`NoPendaftaran` varchar(50)
,`tglPendaftaran` date
,`noUrut` int(11)
,`NoPasien` varchar(20)
,`namaPas` varchar(50)
,`jumlah` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_bayar_obat`
-- (See below for the actual view)
--
CREATE TABLE `v_total_bayar_obat` (
`NoPemeriksaan` varchar(50)
,`NoResep` varchar(20)
,`TotalBayarObat` double
);

-- --------------------------------------------------------

--
-- Structure for view `v_pemasukan_obat`
--
DROP TABLE IF EXISTS `v_pemasukan_obat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pemasukan_obat`  AS  select `resep`.`NoResep` AS `NoResep`,`pendaftaran`.`NoPasien` AS `NoPasien`,`pasien`.`namaPas` AS `namaPas`,`obat`.`nmObat` AS `nmObat`,`det_resep`.`jumlahObat` AS `jumlahObat`,`obat`.`hargaJual` AS `hargaJual`,(`obat`.`hargaJual` * `det_resep`.`jumlahObat`) AS `Total`,`pendaftaran`.`tglPendaftaran` AS `tglPendaftaran` from (((((`resep` join `pemeriksaan` on((`resep`.`NoPemeriksaan` = `pemeriksaan`.`NoPemeriksaan`))) join `pendaftaran` on((`pemeriksaan`.`NoPendaftaran` = `pendaftaran`.`NoPendaftaran`))) join `pasien` on((`pendaftaran`.`NoPasien` = `pasien`.`NoPasien`))) join `det_resep` on((`resep`.`NoResep` = `det_resep`.`NoResep`))) join `obat` on((`det_resep`.`KodeObat` = `obat`.`KodeObat`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pemasukan_pemeriksaan`
--
DROP TABLE IF EXISTS `v_pemasukan_pemeriksaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pemasukan_pemeriksaan`  AS  select `pendaftaran`.`NoPendaftaran` AS `NoPendaftaran`,`pendaftaran`.`tglPendaftaran` AS `tglPendaftaran`,`pendaftaran`.`noUrut` AS `noUrut`,`pendaftaran`.`NoPasien` AS `NoPasien`,`pasien`.`namaPas` AS `namaPas`,sum(`jenisbiaya`.`tarif`) AS `jumlah` from (((`pendaftaran` join `pasien` on((`pendaftaran`.`NoPasien` = `pasien`.`NoPasien`))) join `det_pendaftaran` on((`pendaftaran`.`NoPendaftaran` = `det_pendaftaran`.`NoPendaftaran`))) join `jenisbiaya` on((`det_pendaftaran`.`IDJenisBiaya` = `jenisbiaya`.`IDJenisBiaya`))) group by `pendaftaran`.`NoPendaftaran` ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_bayar_obat`
--
DROP TABLE IF EXISTS `v_total_bayar_obat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_bayar_obat`  AS  select `pemeriksaan`.`NoPemeriksaan` AS `NoPemeriksaan`,`resep`.`NoResep` AS `NoResep`,sum((`obat`.`hargaJual` * `det_resep`.`jumlahObat`)) AS `TotalBayarObat` from (((`pemeriksaan` join `resep` on((`pemeriksaan`.`NoPemeriksaan` = `resep`.`NoPemeriksaan`))) join `det_resep` on((`resep`.`NoResep` = `det_resep`.`NoResep`))) join `obat` on((`det_resep`.`KodeObat` = `obat`.`KodeObat`))) group by `pemeriksaan`.`NoPemeriksaan`,`resep`.`NoResep` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `det_pendaftaran`
--
ALTER TABLE `det_pendaftaran`
  ADD PRIMARY KEY (`NoRecord`);

--
-- Indexes for table `det_resep`
--
ALTER TABLE `det_resep`
  ADD PRIMARY KEY (`noRecord`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`KodeDokter`);

--
-- Indexes for table `jadwalpraktek`
--
ALTER TABLE `jadwalpraktek`
  ADD PRIMARY KEY (`KodeJadwal`);

--
-- Indexes for table `jenisbiaya`
--
ALTER TABLE `jenisbiaya`
  ADD PRIMARY KEY (`IDJenisBiaya`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`noUser`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`KodeObat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`NoPasien`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`NoPemeriksaan`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`NoPendaftaran`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`KodePoli`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`NoResep`);

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
-- AUTO_INCREMENT for table `det_pendaftaran`
--
ALTER TABLE `det_pendaftaran`
  MODIFY `NoRecord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `det_resep`
--
ALTER TABLE `det_resep`
  MODIFY `noRecord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `noUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
