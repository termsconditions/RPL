-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2015 at 12:40 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(8000) NOT NULL,
  `id_port_foto` int(11) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `file`, `id_port_foto`) VALUES
(1, 'gtl.JPG', 4),
(2, 'browser.png', 4),
(3, 'pro3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Web'),
(2, 'Mobile'),
(3, 'Desktop'),
(4, 'Application'),
(5, 'Game');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(8000) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`) VALUES
(1, 'Gino Sunarto'),
(2, 'Primawan Satrio Bindono'),
(3, 'Alfi Hanif Noor');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_daftar` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(8000) NOT NULL,
  `nim` varchar(8000) NOT NULL,
  `email` varchar(8000) NOT NULL,
  `phone` varchar(8000) NOT NULL,
  `kelompok` int(11) NOT NULL,
  `file` varchar(8000) NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `name`, `nim`, `email`, `phone`, `kelompok`, `file`) VALUES
(1, 'rifqi', '1103110131', 'rifqi@gmail.com', '123', 1, 'CV.zip'),
(2, 'tomtom', '123', 'tomtom@gmail.com', '123', 1, '123.zip'),
(3, 'test daftar', '1103130121', '123@gmail.com', '123', 1, '1103130121.zip'),
(4, '123', '1233131', '13221321@gmail.com', '1233131', 1, '1233131.zip'),
(5, '321321515151', '321566766656', '123@gmail.com', '12321321', 1, '321566766656.zip'),
(6, '321412', '1232131', '12321@gmail.com', '1232132132', 2, '1232131.zip'),
(7, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(8, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(9, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(10, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(11, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(12, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(13, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(14, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(15, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(16, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(17, '231321', '3214155', '12312321321@gmail.com', '111', 2, '3214155.zip'),
(18, '3213', '11111', '1111@gmail.com', '123', 2, '11111.zip'),
(19, '3213114', '11114', '1111@gmail.com', '123', 2, '11114.zip'),
(20, '321321', '1555', '3213214@gmail.com', '4151', 2, '1555.zip');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id_port` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(8000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_status` date NOT NULL,
  `link` varchar(8000) NOT NULL,
  PRIMARY KEY (`id_port`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_port`, `judul`, `deskripsi`, `status`, `date_status`, `link`) VALUES
(1, 'KamanaWe.id', 'KamanaWe.id merupakan aplikasi yang bakal mempermudah kamu mencari rute ataupun trayek angkot. KamanaWe.id juga dilengkapi dengan fitur estimasi waktu tempuh dan tarif angkot sampai ke tempat tujuan. Melalui aplikasi ini kita dapat membantu para pengguna transportasi umum terutama angkot di Kota Bandung.', 'On Going', '2014-11-30', ''),
(4, 'Gatotkaca The Legend', 'Games about History of Javanese traditional hero, Gatotkaca.', 'Finished', '2011-09-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `port_have_kat`
--

CREATE TABLE IF NOT EXISTS `port_have_kat` (
  `fk_id_port` int(11) NOT NULL,
  `fk_id_kat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port_have_kat`
--

INSERT INTO `port_have_kat` (`fk_id_port`, `fk_id_kat`) VALUES
(1, 2),
(1, 4),
(4, 2),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `port_have_member`
--

CREATE TABLE IF NOT EXISTS `port_have_member` (
  `fk_memberh_id` int(11) NOT NULL,
  `fk_porth_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port_have_member`
--

INSERT INTO `port_have_member` (`fk_memberh_id`, `fk_porth_id`) VALUES
(1, 1),
(2, 1),
(3, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
