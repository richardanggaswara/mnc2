-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2014 at 07:16 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mitra`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`username`, `password`) VALUES
('mitra', 'mitra123'),
('rickolazuardi', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mitra`
--

CREATE TABLE IF NOT EXISTS `tb_mitra` (
  `kd_mtr` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggalpks` date NOT NULL,
  `nopks` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `tanggalas` date NOT NULL,
  `tanggalakh` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`kd_mtr`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `tb_mitra`
--

INSERT INTO `tb_mitra` (`kd_mtr`, `nama`, `jenis`, `area`, `lokasi`, `alamat`, `tanggalpks`, `nopks`, `nominal`, `tanggalas`, `tanggalakh`, `status`) VALUES
(69, 'asd', 'PSB', 'Mitra Sulampua Area', 'malang', 'nononoo', '2014-09-06', '1234/11/11245', '500000', '2014-09-27', '2014-09-30', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
