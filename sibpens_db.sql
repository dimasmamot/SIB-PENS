-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 01:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibpens_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_apply_beasiswa`
--

CREATE TABLE `tb_apply_beasiswa` (
  `ID_USER` int(11) NOT NULL,
  `ID_BEASISWA` int(11) NOT NULL,
  `TANGGAL_APPLY` date DEFAULT NULL,
  `STATUS_PENERIMAAN` varchar(30) DEFAULT NULL,
  `STATUS_DOKUMEN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_beasiswa`
--

CREATE TABLE `tb_beasiswa` (
  `ID_BEASISWA` int(11) NOT NULL,
  `ID_DETAIL_BEASISWA` int(11) NOT NULL,
  `ID_PENDONOR` int(11) NOT NULL,
  `NAMA_BEASISWA` varchar(100) DEFAULT NULL,
  `TANGGAL_BEASISWA_DIBUKA` date DEFAULT NULL,
  `DEADLINE_BEASISWA` date DEFAULT NULL,
  `STATUS_BEASISWA` varchar(30) DEFAULT NULL,
  `PENDAFTAR_BEASISWA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_beasiswa`
--

INSERT INTO `tb_beasiswa` (`ID_BEASISWA`, `ID_DETAIL_BEASISWA`, `ID_PENDONOR`, `NAMA_BEASISWA`, `TANGGAL_BEASISWA_DIBUKA`, `DEADLINE_BEASISWA`, `STATUS_BEASISWA`, `PENDAFTAR_BEASISWA`) VALUES
(1, 1, 3, 'Gravicodev Bill', '2017-01-16', '2017-09-08', 'Aktif', 0),
(2, 2, 3, 'Mount Damiena', '2017-06-04', '2017-06-24', 'Aktif', 0),
(3, 3, 2, 'Program Beswan Djarum', '2017-04-04', '2017-06-12', 'Selesai', 542),
(4, 4, 1, 'Docomo Naver Jp', '2017-03-06', '2017-06-14', 'Aktif', 41),
(5, 5, 2, 'Stuttgart Autobahn Stag', '2017-03-30', '2017-08-23', 'Aktif', 30),
(6, 6, 3, 'Beasiswa Riset LPDP', '2017-06-05', '2017-06-30', 'Aktif', 4),
(7, 7, 1, 'Miku Mi Studio Tour Training', '2017-06-12', '2017-06-30', 'Aktif', 2),
(8, 8, 3, 'EA Sports Recursive Training', '2017-06-04', '2017-06-13', 'Selesai', 42),
(9, 9, 3, 'Full Sail University Scholarship', '2017-05-07', '2017-07-21', 'Aktif', 39),
(10, 10, 2, 'Phi Intuitive Training', '2017-05-07', '2017-06-08', 'Aktif', 11),
(11, 11, 3, 'Kacang Ma Kuaci Netmediatama', '2017-06-06', '2017-06-21', 'Aktif', 2),
(12, 12, 2, 'Saswi Foundation Abroad Programme', '2017-03-05', '2017-05-30', 'Aktif', 803);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_beasiswa`
--

CREATE TABLE `tb_detail_beasiswa` (
  `ID_DETAIL_BEASISWA` int(11) NOT NULL,
  `PERSYARATAN_DOKUMEN` varchar(100) DEFAULT NULL,
  `CONTACT_PERSON_EMAIL` varchar(80) DEFAULT NULL,
  `CONTACT_PERSON_TELEPON` varchar(15) DEFAULT NULL,
  `ASAL_BEASISWA` varchar(80) DEFAULT NULL,
  `DESKRIPSI_BEASISWA` text,
  `JENIS_BEASISWA` varchar(50) DEFAULT NULL,
  `TARGET_JURUSAN` varchar(50) DEFAULT NULL,
  `TARGET_PRODI` varchar(6) DEFAULT NULL,
  `TARGET_SEMESTER` varchar(1) DEFAULT NULL,
  `PATH_FOTO_BEASISWA` varchar(255) DEFAULT NULL,
  `PATH_FOTO_FEATURED` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_beasiswa`
--

INSERT INTO `tb_detail_beasiswa` (`ID_DETAIL_BEASISWA`, `PERSYARATAN_DOKUMEN`, `CONTACT_PERSON_EMAIL`, `CONTACT_PERSON_TELEPON`, `ASAL_BEASISWA`, `DESKRIPSI_BEASISWA`, `JENIS_BEASISWA`, `TARGET_JURUSAN`, `TARGET_PRODI`, `TARGET_SEMESTER`, `PATH_FOTO_BEASISWA`, `PATH_FOTO_FEATURED`) VALUES
(1, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'a@gmail.com', '0129013', 'GRAVICODEV', 'Beasiswa Berasal Dari gravicodev, lorem ipsum sit dolor amet, Beasiswa Berasal Dari gravicodev, lorem ipsum sit dolor amet, Beasiswa Berasal Dari gravicodev, lorem ipsum sit dolor amet, Beasiswa Berasal Dari gravicodev, lorem ipsum sit dolor amet', 'Beasiswa Prestasi', 'Informatika', 'D4', '4', NULL, NULL),
(2, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'b@gmail.com', '12421312', 'Mount Damiena', 'Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Pelatihan', 'Elektro', 'D4', '6', NULL, NULL),
(3, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'c@gmail.com', '078685', 'Beswan Djarum', 'Beswan Djarum lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Prestasi', 'Semua Jurusan', 'D4', '4', NULL, NULL),
(4, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'd@gmail.com', '57899789', 'Docomo Jp', 'Beasiswa docomo lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Prestasi', 'Telekomunikasi', 'D3', '2', NULL, NULL),
(5, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'e@gmail.com', '07896', 'Stuttgart Stag', 'Beasiswa Stuttgart Stag lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Prestasi', 'Elektro Industri', 'D4', '7', NULL, NULL),
(6, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'f@gmail.com', '67069678', 'LPDP', 'Beasiswa LPDP lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Riset', 'Semua Jurusan', 'D4', '8', NULL, NULL),
(7, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'g@gmail.com', '0678678', 'Miku Mi', 'Beasiswa Miku Mi lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Prestasi', 'Teknologi Game', 'D3', '2', NULL, NULL),
(8, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'h@gmail.com', '06789678', 'Electronic Arts', 'Beasiswa EA lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Pelatihan & Prestasi', 'Teknologi Game', 'D3', '4', NULL, NULL),
(9, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'i@gmail.com', '0678678967', 'Full Sail', 'Beasiswa Full Sail University lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Prestasi', 'Multimedia Broadcasting', 'D3', '4', NULL, NULL),
(10, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'j@gmail.com', '0769678', 'Phi Studio', 'Beasiswa Phi Studio lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Pelatihan', 'Sistem Pembangkit Energi', 'D4', '6', NULL, NULL),
(11, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'k@gmail.com', '0678679', 'Kacang Ma kuaci', 'Beasiswa Kacang Ma Kuaci lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Prestasi', 'Semua Jurusan', 'D4', '4', NULL, NULL),
(12, 'CV, Motivation Letter, Surat Keterangan Mahasiswa', 'l@gmail.com', '047596067', 'Saswi Co,', 'Beasiswa Saswi Co, lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, Beasiswa mount damiena lorem ipsum sit dolor amet, ', 'Beasiswa Pelatihan', 'Semua Jurusan', 'D3', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pendonor`
--

CREATE TABLE `tb_detail_pendonor` (
  `ID_DETAIL_PENDONOR` int(11) NOT NULL,
  `NAMA_PENDONOR` varchar(100) DEFAULT NULL,
  `NOMOR_TELEPON_PENDONOR` varchar(15) DEFAULT NULL,
  `ALAMAT_PENDONOR` varchar(100) DEFAULT NULL,
  `PATH_DOKUMEN_LEGALISIR` varchar(255) DEFAULT NULL,
  `STATUS_AKUN_PENDONOR` varchar(50) DEFAULT NULL,
  `NAMA_PJ_BEASISWA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pendonor`
--

INSERT INTO `tb_detail_pendonor` (`ID_DETAIL_PENDONOR`, `NAMA_PENDONOR`, `NOMOR_TELEPON_PENDONOR`, `ALAMAT_PENDONOR`, `PATH_DOKUMEN_LEGALISIR`, `STATUS_AKUN_PENDONOR`, `NAMA_PJ_BEASISWA`) VALUES
(2, 'wda', 'awdw', 'awda', NULL, NULL, 'awdawd'),
(3, 'asd', 'asd', 'asd', NULL, NULL, 'sda'),
(4, 'GRAVICODEV', '0182038123', 'Jl. Nusa Indah', NULL, NULL, 'Mamot');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_user`
--

CREATE TABLE `tb_detail_user` (
  `ID_DETAIL_USER` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(80) DEFAULT NULL,
  `USIA` int(11) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(80) DEFAULT NULL,
  `PROVINSI` varchar(50) DEFAULT NULL,
  `KOTA` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `KELAS` varchar(1) DEFAULT NULL,
  `PRODI` varchar(6) DEFAULT NULL,
  `JURUSAN` varchar(50) DEFAULT NULL,
  `PARAREL` varchar(1) DEFAULT NULL,
  `SEMESTER` varchar(1) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(50) DEFAULT NULL,
  `TANGGAL_MASUK` date DEFAULT NULL,
  `PATH_FOTO` varchar(255) DEFAULT NULL,
  `NRP` varchar(10) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_user`
--

INSERT INTO `tb_detail_user` (`ID_DETAIL_USER`, `NAMA_LENGKAP`, `USIA`, `JENIS_KELAMIN`, `PROVINSI`, `KOTA`, `ALAMAT`, `KELAS`, `PRODI`, `JURUSAN`, `PARAREL`, `SEMESTER`, `TANGGAL_LAHIR`, `TEMPAT_LAHIR`, `TANGGAL_MASUK`, `PATH_FOTO`, `NRP`, `NIP`) VALUES
(1, 'Dimas Rizky H.P.', 21, 'Pria', 'Jawa Timur', 'Sidoarjo', 'Jl. Nusa Indah E6 Wisma Tropodo', '3', 'D4', 'Informatika', 'A', '6', '1996-01-10', 'Bojonegoro', '2014-08-07', NULL, '2110141011', NULL),
(2, 'Dimas BAAK', 32, 'Pria', 'Jawa Timur', 'Sidoarjo', 'Jl. Nusa Indah E6', NULL, NULL, NULL, NULL, NULL, '1996-10-01', 'Bojonegoro', NULL, NULL, NULL, '19962931231241'),
(3, 'Admin SIB Dimas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `ID_DOKUMEN` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_DOKUMEN` varchar(100) DEFAULT NULL,
  `PATH_DOKUMEN` varchar(255) DEFAULT NULL,
  `JENIS_DOKUMEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen_proses`
--

CREATE TABLE `tb_dokumen_proses` (
  `ID_DOKUMEN_PROSES` int(11) NOT NULL,
  `NAMA_DOKUMEN_PROSES` varchar(100) DEFAULT NULL,
  `JENIS_DOKUMEN_PROSES` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendonor`
--

CREATE TABLE `tb_pendonor` (
  `ID_PENDONOR` int(11) NOT NULL,
  `ID_DETAIL_PENDONOR` int(11) NOT NULL,
  `USER_PENDONOR` varchar(50) DEFAULT NULL,
  `PASSWORD_PENDONOR` varchar(100) DEFAULT NULL,
  `EMAIL_PENDONOR` varchar(50) DEFAULT NULL,
  `SALT_PENDONOR` varchar(5) DEFAULT NULL,
  `TANGGAL_PEMBUATAN_PENDONOR` datetime DEFAULT NULL,
  `TERAKHIR_LOGIN_PENDONOR` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendonor`
--

INSERT INTO `tb_pendonor` (`ID_PENDONOR`, `ID_DETAIL_PENDONOR`, `USER_PENDONOR`, `PASSWORD_PENDONOR`, `EMAIL_PENDONOR`, `SALT_PENDONOR`, `TANGGAL_PEMBUATAN_PENDONOR`, `TERAKHIR_LOGIN_PENDONOR`) VALUES
(1, 2, 'pendonorA', 'de3a3fa08e4d1cf3af010278c8237388', 'a@gmail.com', 'saltn', '2017-06-12 16:23:11', '2017-06-12 16:23:11'),
(2, 3, 'pendonorB', '42ad65a89d466144c0623c2b9a5b581c', 'b@gmail.com', 'saltn', '2017-06-12 18:12:23', '2017-06-12 18:12:23'),
(3, 4, 'gravicodev', '3d939a14c04ae16c98e3bddf6e8e4dd7', 'donor@gravicodev.id', 'salti', '2017-06-13 12:21:45', '2017-06-13 12:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_request`
--

CREATE TABLE `tb_request` (
  `ID_USER` int(11) NOT NULL,
  `ID_DOKUMEN_PROSES` int(11) NOT NULL,
  `TANGGAL_REQUEST_DOKUMEN` datetime DEFAULT NULL,
  `TANGGAL_REQUEST_DIPENUHI` datetime DEFAULT NULL,
  `STATUS_REQUEST_DOKUMEN` varchar(30) DEFAULT NULL,
  `CATATAN_TAMBAHAN_REQUEST` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_USER` int(11) NOT NULL,
  `ID_DETAIL_USER` int(11) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `SALT` varchar(5) DEFAULT NULL,
  `ROLE` varchar(10) DEFAULT NULL,
  `TANGGAL_PEMBUATAN` datetime DEFAULT NULL,
  `TERAKHIR_LOGIN` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID_USER`, `ID_DETAIL_USER`, `EMAIL`, `PASSWORD`, `SALT`, `ROLE`, `TANGGAL_PEMBUATAN`, `TERAKHIR_LOGIN`) VALUES
(1, 1, 'dimasrizkyhp@it.student.pens.ac.id', 'a22bcce765549d4dae35bf18ad6834af', 'awawa', 'mahasiswa', '2017-06-13 11:16:59', '2017-06-13 23:50:44'),
(2, 3, 'admin@mamot.com', '21232f297a57a5a743894a0e4a801fc3', 'salti', 'admin', '2017-06-13 09:14:40', '2017-06-13 10:15:26'),
(3, 2, 'baak@pens.ac.id', 'f6edb4c31cf9be5ce497d12251a9d29e', 'salti', 'baak', '2017-06-13 07:17:12', '2017-06-13 12:19:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_apply_beasiswa`
--
ALTER TABLE `tb_apply_beasiswa`
  ADD PRIMARY KEY (`ID_USER`,`ID_BEASISWA`),
  ADD KEY `FK_RELATIONSHIP_9` (`ID_BEASISWA`);

--
-- Indexes for table `tb_beasiswa`
--
ALTER TABLE `tb_beasiswa`
  ADD PRIMARY KEY (`ID_BEASISWA`),
  ADD KEY `FK_MEMBUAT_BASIS_BEASISWA` (`ID_PENDONOR`),
  ADD KEY `FK_MEMILIKI_DETAIL_BEASISWA` (`ID_DETAIL_BEASISWA`);

--
-- Indexes for table `tb_detail_beasiswa`
--
ALTER TABLE `tb_detail_beasiswa`
  ADD PRIMARY KEY (`ID_DETAIL_BEASISWA`);

--
-- Indexes for table `tb_detail_pendonor`
--
ALTER TABLE `tb_detail_pendonor`
  ADD PRIMARY KEY (`ID_DETAIL_PENDONOR`);

--
-- Indexes for table `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  ADD PRIMARY KEY (`ID_DETAIL_USER`);

--
-- Indexes for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`ID_DOKUMEN`),
  ADD KEY `FK_MEMILIKI` (`ID_USER`);

--
-- Indexes for table `tb_dokumen_proses`
--
ALTER TABLE `tb_dokumen_proses`
  ADD PRIMARY KEY (`ID_DOKUMEN_PROSES`);

--
-- Indexes for table `tb_pendonor`
--
ALTER TABLE `tb_pendonor`
  ADD PRIMARY KEY (`ID_PENDONOR`),
  ADD KEY `FK_MEMILIKI_DETAIL_PENDONOR` (`ID_DETAIL_PENDONOR`);

--
-- Indexes for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`ID_USER`,`ID_DOKUMEN_PROSES`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID_DOKUMEN_PROSES`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_MEMILIKI_DETAIL` (`ID_DETAIL_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_beasiswa`
--
ALTER TABLE `tb_beasiswa`
  MODIFY `ID_BEASISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_detail_beasiswa`
--
ALTER TABLE `tb_detail_beasiswa`
  MODIFY `ID_DETAIL_BEASISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_detail_pendonor`
--
ALTER TABLE `tb_detail_pendonor`
  MODIFY `ID_DETAIL_PENDONOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  MODIFY `ID_DETAIL_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `ID_DOKUMEN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_dokumen_proses`
--
ALTER TABLE `tb_dokumen_proses`
  MODIFY `ID_DOKUMEN_PROSES` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pendonor`
--
ALTER TABLE `tb_pendonor`
  MODIFY `ID_PENDONOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_apply_beasiswa`
--
ALTER TABLE `tb_apply_beasiswa`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_BEASISWA`) REFERENCES `tb_beasiswa` (`ID_BEASISWA`);

--
-- Constraints for table `tb_beasiswa`
--
ALTER TABLE `tb_beasiswa`
  ADD CONSTRAINT `FK_MEMBUAT_BASIS_BEASISWA` FOREIGN KEY (`ID_PENDONOR`) REFERENCES `tb_pendonor` (`ID_PENDONOR`),
  ADD CONSTRAINT `FK_MEMILIKI_DETAIL_BEASISWA` FOREIGN KEY (`ID_DETAIL_BEASISWA`) REFERENCES `tb_detail_beasiswa` (`ID_DETAIL_BEASISWA`);

--
-- Constraints for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`);

--
-- Constraints for table `tb_pendonor`
--
ALTER TABLE `tb_pendonor`
  ADD CONSTRAINT `FK_MEMILIKI_DETAIL_PENDONOR` FOREIGN KEY (`ID_DETAIL_PENDONOR`) REFERENCES `tb_detail_pendonor` (`ID_DETAIL_PENDONOR`);

--
-- Constraints for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_DOKUMEN_PROSES`) REFERENCES `tb_dokumen_proses` (`ID_DOKUMEN_PROSES`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `FK_MEMILIKI_DETAIL` FOREIGN KEY (`ID_DETAIL_USER`) REFERENCES `tb_detail_user` (`ID_DETAIL_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
