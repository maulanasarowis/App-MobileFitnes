-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 12:54 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fitnes`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventori`
--

CREATE TABLE IF NOT EXISTS `inventori` (
  `kode_alat` char(3) NOT NULL,
  `nama_alat` varchar(30) NOT NULL,
  `status` char(10) NOT NULL,
  PRIMARY KEY (`kode_alat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventori`
--

INSERT INTO `inventori` (`kode_alat`, `nama_alat`, `status`) VALUES
('001', 'DUMBELL 12KG', 'TIDAK BAIK'),
('002', 'Bench Press Line', 'baik'),
('003', 'barbell 12kg', 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE IF NOT EXISTS `keuangan` (
  `id_member` int(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `id_keuangan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_bayar` date NOT NULL,
  PRIMARY KEY (`id_keuangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_member`, `harga`, `id_keuangan`, `tgl_bayar`) VALUES
(2525337, 15000, 6, '1902-06-02'),
(2525339, 100000, 7, '1901-03-03'),
(235409, 100000, 8, '0000-06-06'),
(2525190, 100000, 9, '2017-12-14'),
(2525332, 100000, 10, '2017-12-14'),
(2525332, 100000, 11, '2017-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` char(10) NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `jenis_kelamin` char(7) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `jenis_kelamin`, `alamat`, `tgl_daftar`) VALUES
('2525337', 'Fadil', 'pria', 'Jalan Paus', '2017-11-16'),
('2525339', 'Sayuti', 'pria', 'Jalan Berdikari', '2017-10-09'),
('2525431', 'santi', 'wanita', 'Jalan Sepakat', '2017-10-02'),
('2525180', 'Diko', 'pria', 'Jalan Bukitbarisan', '2017-11-09'),
('2525332', 'Rio', 'pria', 'Jalan Kapausari', '2017-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
