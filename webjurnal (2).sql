-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 03:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webjurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `judul_article` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `foto_article` varchar(225) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `judul_article`, `deskripsi`, `tanggal`, `foto_article`, `id_user`, `id_category`, `id_member`) VALUES
(22, 'asd', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2020-09-01', '259512404_as1.png', 27, 5, 3),
(23, 'asd', '<p>asd</p>\r\n', '2020-09-12', '592859612_doctors-1.jpg', 27, 5, 3),
(24, 'asd', '<p>asd</p>\r\n', '2020-09-12', '1636689928_doctors-1.jpg', 27, 5, 3),
(25, 'asd', '<p>asd</p>\r\n', '1932-03-06', '1654581346_doctors-4.jpg', 27, 5, 3),
(26, 'asdasdas', '<p>asd</p>\r\n', '2020-09-12', '1133747775_doctors-1.jpg', 27, 5, 3),
(27, 'sekarang', '<p>asd</p>\r\n', '2020-09-19', '', 27, 5, 3),
(28, 'sekarang1', '<p>123</p>\r\n', '2020-09-26', '733041316_doctors-1.jpg', 27, 5, 3),
(29, 'terjadisesuatu1', '<p>asd</p>\r\n', '2020-09-12', '970293542_admin.png', 27, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(5, 'asdsad'),
(6, 'ary');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(225) NOT NULL,
  `peserta` varchar(225) NOT NULL,
  `time` datetime NOT NULL,
  `foto_event` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `peserta`, `time`, `foto_event`) VALUES
(2, 'disana', '24', '2020-09-28 13:00:00', ''),
(3, 'asdsa', '23', '2020-09-11 08:02:00', 'kanye.jpg'),
(4, 'asdsad', '23', '2020-09-24 08:00:00', 'doctors-3.jpg'),
(5, 'asdzse3', '23', '2020-10-31 00:00:00', 'kanye.jpg'),
(7, '<p>can you make</p>\r\n', '23', '2020-09-30 10:30:56', 'doctors-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `tlp` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `fb` varchar(225) NOT NULL,
  `ig` varchar(225) NOT NULL,
  `nama_web` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `mail` varchar(225) NOT NULL,
  `maps` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `bg` varchar(225) NOT NULL,
  `main` varchar(225) NOT NULL,
  `visimisi` varchar(225) NOT NULL,
  `content` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `tlp`, `alamat`, `fb`, `ig`, `nama_web`, `deskripsi`, `mail`, `maps`, `logo`, `bg`, `main`, `visimisi`, `content`, `judul`) VALUES
(1, '628121306805022', 'jl.pratama blblalbalba\r\n22', '22', 'df', 'IKGEI', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'asddddsdasd', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.365253901911!2d106.82338631431145!3d-6.346726663859312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec2ee94773f9%3A0xf2228abd361e4190!2sMegan%20Konveksi%20Jakarta!5e0!3m2!1sid!2sid!4v1600174985634!5m2!1sid!2sid\r\n', '1832643570_ikgei[1].png', '90080065_hero.jpg', '942562206_150348060_about.jpg', '<p>asddddddd</p>\r\n', 'sd', '123333333');

-- --------------------------------------------------------

--
-- Table structure for table `iyuran`
--

CREATE TABLE `iyuran` (
  `id_iyuran` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `tanggal` varchar(225) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iyuran`
--

INSERT INTO `iyuran` (`id_iyuran`, `id_member`, `id_tahun`, `tanggal`, `status`) VALUES
(7, 3, 3, '2020-07-09', 'BELUM'),
(8, 4, 3, NULL, NULL),
(9, 5, 4, 'belum', 'belum'),
(10, 4, 3, 'belum', 'belum'),
(11, 3, 4, 'belum', 'belum'),
(12, 4, 4, 'belum', 'belum'),
(13, 3, 4, 'belum', 'belum'),
(14, 4, 4, 'belum', 'belum'),
(15, 5, 4, 'belum', 'belum'),
(16, 3, 3, '0000/00/00', 'belum'),
(17, 4, 3, '0000/00/00', 'belum'),
(18, 5, 3, '0000/00/00', 'belum'),
(19, 3, 4, '0000/00/00', 'belum'),
(20, 4, 4, '1900-12-01', 'SUDAH'),
(21, 5, 4, '0000/00/00', 'belum'),
(22, 6, 4, '0000/00/00', 'belum'),
(23, 7, 4, '0000/00/00', 'belum'),
(24, 8, 4, '0000/00/00', 'belum'),
(25, 10, 4, '0000/00/00', 'belum'),
(26, 11, 4, '0000/00/00', 'belum'),
(27, 12, 4, '0000/00/00', 'belum'),
(28, 15, 4, '0000/00/00', 'belum'),
(29, 16, 4, '0000/00/00', 'belum'),
(30, 17, 4, '0000/00/00', 'belum'),
(31, 18, 4, '0000/00/00', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(225) NOT NULL,
  `no_jabatan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `no_jabatan`) VALUES
(1, 'Ketua', '1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `no_id` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `npa` varchar(225) NOT NULL,
  `ttl` varchar(225) NOT NULL,
  `jk` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `ig` varchar(225) NOT NULL,
  `fb` varchar(225) NOT NULL,
  `domisili` varchar(225) NOT NULL,
  `status_keanggotaan` varchar(225) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `nama_clinic` varchar(225) NOT NULL,
  `alamat_clinic` text NOT NULL,
  `no_tlp_clinic` varchar(225) NOT NULL,
  `foto_member` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `no_id`, `nama`, `npa`, `ttl`, `jk`, `alamat`, `tlp`, `email`, `ig`, `fb`, `domisili`, `status_keanggotaan`, `tgl_daftar`, `keterangan`, `nama_clinic`, `alamat_clinic`, `no_tlp_clinic`, `foto_member`, `score`) VALUES
(5, '01', 'asdsadse123123123124124151', 'kandsa', 'sdad', 'Perempuan', '12321  ', '3123', '321321', '123ig', '123213', '321', 'Contributors', '2020-09-09', 'asd', 'asd', 'asd', '123213', '1148296935_doctors-4.jpg', 0),
(6, '13', 'Amirulluh', '123123', 'sdad', 'Laki-Laki', '123  ', 'qsdas', '123', 'asdas', '123213', 'Jakarta', 'General member', '2020-09-18', 'asd', 'asd', 'asd', '123213', '870106087_doctors-4.jpg', 0),
(7, '01', 'asdasd515', '123123', 'sdad', 'Laki-Laki', '13', '3123', 'asdasd2', 'asdas', '12312', 'asda', 'General member', '2015-03-13', 'asd', 'asd', 'asd', '123213', '1739033769_doctors-3.jpg', 0),
(8, '001', 'member2', '123123', 'sdad', 'Perempuan', 'jl.blalalal', 'qsdas', '321', 'asdas', '123213', '321', 'Diplomate', '2020-09-02', 'asd', 'asd', 'asd', '123213', '1597497848_doctors-2.jpg', 0),
(10, '12', 'asdasd515', '123123', 'sdad', 'Perempuan', 'asdasdasd', '08125154545', 'asd1', 'asdas', '123fb', 'asda', 'Contributors', '2020-09-12', 'asd', 'asd', 'asd', '123213', '1484142928_foto.jpeg', 0),
(11, '123', '321', '312', '312', 'Laki-Laki', '132', '123', '123', '123', '312', '321', 'Honorary Member', '2020-09-05', '123', 'asd', 'asd', '123213', '1886140557_doctors-1.jpg', 0),
(12, '01', 'asdasd515', '123123', '1332', 'Perempuan', 'asd', '123', 'asdasd', 'asdas2', 'asdas2', '12313', 'Honorary Member', '2020-08-30', '123', 'asd', 'asd', '123213', '261639326_kanye.jpg', 0),
(15, '002', 'asdasd515', '123123', 'sdad', 'Laki-Laki', 'sadsa', '123', '123213', '12312', '123fb', 'Jakarta', 'Honorary Member', '2020-08-31', 'asd', 'asd', 'asd', '123213', '1754938649_doctors-1.jpg', 0),
(16, '01', 'asdasd515', 'kandsa', '1332', 'Laki-Laki', '123', '123', '132', '132', '123213', 'Jakarta', 'Honorary Member', '2020-09-11', '123', 'asd', 'asd', '123213', '1260851495_doctors-1.jpg', 0),
(17, '12', 'asdasd515', 'kandsa', 'sdad', 'Perempuan', 'asdasdsadsa', '3123', 'asd1', '321', '12312', '12313', 'Honorary Member', '2020-09-04', '123', 'asd', 'asd', '123213', '333743262_doctors-1.jpg', 0),
(18, '12', 'ADetri', 'kandsa', 'sdad', 'Perempuan', 'asdasd', '232133', 'asdasd', '123123', 'asdas2', 'asda', 'Contributors', '2020-09-09', '12321', '12312', '12321', '21321', '1825654548_foto.jpeg', 123),
(20, 'MemberC', 'asdasd515', 'kandsa', '1332', 'Perempuan', 'asd', 'asd', 'asdasd2', '321', '123213', 'MemberB', 'Contributors', '2020-08-31', 'MemberB', 'D', 'MemberA', 'MemberB', '117518254_doctors-2.jpg', 0),
(21, '01', '123', 'kandsa', '1332', 'Perempuan', 'adssad', '232133', '123', 'asdas', '12312', 'Jakarta', 'Diplomate', '2020-09-18', 'MemberC', 'MemberA', 'MemberA', 'MemberA', '344038010_doctors-3.jpg', 0),
(22, '123', '123', '123', '123', 'Laki-Laki', '123', '123', 'sadas11', '321', '123', '213', 'General member', '2020-10-01', 'asd11', 'asd11', 'asd11', '213', '1529492620_doctors-2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama_pengurus` varchar(225) NOT NULL,
  `jk` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `ig` varchar(225) NOT NULL,
  `fb` varchar(225) NOT NULL,
  `domisili` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama_pengurus`, `jk`, `alamat`, `tlp`, `email`, `ig`, `fb`, `domisili`, `jabatan`, `foto`) VALUES
(5, 'saiiangl11', 'Laki-Laki', 'asdasd11', '12311', '12311', '21311', 'asdas11', 'MemberB11', 'Dewan Pembina', '1378734010_doctors-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `special_member`
--

CREATE TABLE `special_member` (
  `no_id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `npa` varchar(225) NOT NULL,
  `ttl` varchar(225) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `ig` varchar(225) NOT NULL,
  `fb` varchar(225) NOT NULL,
  `domisili` varchar(225) NOT NULL,
  `status_keanggotaan` varchar(225) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `nama_clinic` varchar(225) NOT NULL,
  `alamat_clinic` varchar(225) NOT NULL,
  `no_tlp_clinic` varchar(225) NOT NULL,
  `foto_member` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_member`
--

INSERT INTO `special_member` (`no_id`, `nama`, `npa`, `ttl`, `jk`, `alamat`, `tlp`, `email`, `ig`, `fb`, `domisili`, `status_keanggotaan`, `tgl_daftar`, `keterangan`, `nama_clinic`, `alamat_clinic`, `no_tlp_clinic`, `foto_member`) VALUES
(1, 'kasma1111', 'asd', 'asd', 'Laki-Laki', 'asd     ', 'ads', 'ads', 'adsads', 'ads', 'ads', 'Contributors', '0000-00-00', '', '11111111111111', '11qweqwew', 'asd', '62571520_doctors-1.jpg'),
(2, 'asdasd515', '123123', 'sdad', 'Perempuan', 'asd ', 'asd', 'asd1', '213', '123fb', '321', 'Special Member', '2020-09-03', '', 'MemberB', '12312', '12321', '1704770583_doctors-3.jpg'),
(3, 'ADetri', '123123', 'MemberC', 'Perempuan', '123', '232133', 'asd1', '213', '123213', 'MemberB', 'Special Member', '2020-09-23', 'MemberB', 'MemberC', '12321', 'MemberB', '1303311254_gk.jpg'),
(4, '123 hibibhbhbhjbjh vvgvvnvbvnb  yftf', 'kandsa', 'MemberC', 'Perempuan', 'dfs ', '232133', '321', '12312', '123fb', 'asda', 'Special Member', '2020-09-01', '', 'MemberA', '12312', 'MemberC', '1230835430_doctors-3.jpg'),
(5, 'dat stick ig asmda asdmkm as', 'asdas', 'das', 'Perempuan', 'asd   ', 'asd', '111111111111111111111111111', '11111111111111111111111111', '11111111111111111', 'asd', 'Special Member', '0000-00-00', '', 'sd', '213', '11qweqwew', '1609498906_foto.jpeg'),
(6, '1312312', '312312', '312321', 'Laki-Laki', '12312', '312312', '1323', '123', '123', '123', 'Special Member', '2020-09-23', '123', '123', '11', '213', '781331465_1907520579_doctors-3.jpg'),
(7, 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'Laki-Laki', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'Special Member', '2020-09-10', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', '1572924311_1907520579_doctors-3.jpg'),
(8, 'dat jijom as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'Perempuan', 'dat stick ig asmda asdmkm as ', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'Contributors', '2020-09-27', '', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', 'dat stick ig asmda asdmkm as', '1246401797_1907520579_doctors-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supported`
--

CREATE TABLE `supported` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(225) NOT NULL,
  `img_bran` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supported`
--

INSERT INTO `supported` (`id_brand`, `nama_brand`, `img_bran`) VALUES
(3, 'nama', '1918286987_ikgei[1].png'),
(4, 'nama', '174929379_logo1.jpg'),
(6, 'asdsadsadsa', '1799299363_Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun`) VALUES
(3, 2020),
(4, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `foto_user` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `foto_user`) VALUES
(36, 'AdminA', '202cb962ac59075b964b07152d234b70', 'admin', '495279067_doctors-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iyuran`
--
ALTER TABLE `iyuran`
  ADD PRIMARY KEY (`id_iyuran`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `special_member`
--
ALTER TABLE `special_member`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `supported`
--
ALTER TABLE `supported`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iyuran`
--
ALTER TABLE `iyuran`
  MODIFY `id_iyuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `special_member`
--
ALTER TABLE `special_member`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supported`
--
ALTER TABLE `supported`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
