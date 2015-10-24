-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2015 at 11:04 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackaton`
--

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE IF NOT EXISTS `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(11);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`) VALUES
('2015-10-15 15:42:54', '2015-10-15 14:48:37', '', '+62895332516869', 'Default_No_Compression', '', '', -1, 'mencoba sms malam hari 123', 9, '', 'false'),
('2015-10-15 15:41:56', '2015-10-15 14:48:37', '', '+62895332516869', 'Default_No_Compression', '', '', -1, 'mencoba sms malam hari 123', 8, '', 'false'),
('2015-10-15 15:41:56', '2015-10-15 09:36:39', '', '+62895332516869', 'Default_No_Compression', '', '', -1, 'sms sore', 7, '', 'false'),
('2015-10-16 10:12:11', '2015-10-16 10:11:39', '', '+62895332516869', 'Default_No_Compression', '', '', -1, 'coba kirim pesan dari server', 20, '', 'false'),
('2015-10-16 10:12:11', '2015-10-16 10:11:36', '', '+62895332516869', 'Default_No_Compression', '', '', -1, 'coba kirim pesan dari server', 19, '', 'false'),
('2015-10-16 07:20:35', '2015-10-16 07:20:04', '', '+6289699935552', 'Default_No_Compression', '', '', -1, 'Test kirim sms Dari hp', 18, '', 'false'),
('2015-10-16 07:08:50', '2015-10-16 07:08:23', '', '+6289699935552', 'Default_No_Compression', '', '', -1, 'Test sms Dari hp', 17, '', 'false'),
('2015-10-16 05:53:37', '2015-10-16 00:10:37', '', '+62895332516869', 'Default_No_Compression', '', '', -1, 'Token anda adalah pzTS', 16, '', 'false'),
('2015-10-16 05:53:37', '2015-10-16 00:10:37', '', '+62895332516869', 'Default_No_Compression', '', '', -1, 'Token anda adalah pzTS', 15, '', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `ID` int(11) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `keyword`, `reply`) VALUES
(1, 'reg', 'informasi keyword reg'),
(2, 'unreg', 'informasi unreg'),
(3, '', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=678 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE IF NOT EXISTS `pbk` (
  `ID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pbk`
--

INSERT INTO `pbk` (`ID`, `GroupID`, `Name`, `Number`) VALUES
(10, 1, 'number 3', '0895332516869'),
(9, 2, 'number three', '0895332516869');

-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE IF NOT EXISTS `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pbk_groups`
--

INSERT INTO `pbk_groups` (`Name`, `ID`) VALUES
('teman kuliah', 1),
('keluarga', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pbk_temp`
--

CREATE TABLE IF NOT EXISTS `pbk_temp` (
  `id` int(11) NOT NULL,
  `pbkID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbk_temp`
--

INSERT INTO `pbk_temp` (`id`, `pbkID`) VALUES
(1, 8),
(2, 6),
(3, 6),
(4, 8),
(5, 3),
(6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '0',
  `Signal` int(11) NOT NULL DEFAULT '0',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('layananSMS', '2015-10-14 15:07:37', '2015-10-14 15:06:04', '2015-10-14 15:07:47', 'yes', 'yes', '354058181011496', 'Gammu 1.28.90, Windows XP SP3, GCC 4.4, MinGW 3.13', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`) VALUES
('2015-10-15 15:58:36', '0000-00-00 00:00:00', '2015-10-15 09:22:11', NULL, '', 'testing kirim pesan', 'Default_No_Compression', '', '', -1, '0895332516869', 0, '', 1, 'SendingError', -1, -1, -1, ''),
('2015-10-15 16:03:20', '0000-00-00 00:00:00', '2015-10-15 09:22:11', NULL, '', 'testing kirim pesan', 'Default_No_Compression', '', '', -1, '0895332516869', 679, '', 1, 'SendingError', -1, -1, -1, ''),
('2015-10-15 16:03:20', '0000-00-00 00:00:00', '2015-10-15 09:23:46', NULL, '', '0895332516869', 'Default_No_Compression', '', '', -1, 'test kirim pesan boy', 680, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-15 16:03:20', '0000-00-00 00:00:00', '2015-10-15 09:31:20', NULL, '', 'coba kirim sms dari ', 'Default_No_Compression', '', '', -1, '0895332516869', 681, '', 1, 'SendingError', -1, -1, -1, ''),
('2015-10-15 16:03:21', '0000-00-00 00:00:00', '2015-10-15 09:33:55', NULL, '', 'kirim pesan coba', 'Default_No_Compression', '', '', -1, '0895332516869', 682, '', 1, 'SendingError', -1, -1, -1, ''),
('2015-10-15 16:03:21', '0000-00-00 00:00:00', '2015-10-15 09:37:00', NULL, '', '0895332516869', 'Default_No_Compression', '', '', -1, 'sms sore', 683, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-15 16:03:21', '0000-00-00 00:00:00', '2015-10-15 15:02:35', NULL, '', '085315990012', 'Default_No_Compression', '', '', -1, 'mencoba sms malam hari 123', 686, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-15 16:03:21', '0000-00-00 00:00:00', '2015-10-15 15:02:39', NULL, '', '0895332516869', 'Default_No_Compression', '', '', -1, 'mencoba sms malam hari 123', 684, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-15 16:03:21', '0000-00-00 00:00:00', '2015-10-15 15:02:43', NULL, '', '089699953332', 'Default_No_Compression', '', '', -1, 'mencoba sms malam hari 123', 685, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 05:53:37', '0000-00-00 00:00:00', '2015-10-16 00:35:11', NULL, '', '0895332516869', 'Default_No_Compression', '', '', -1, 'Token anda adalah pzTS', 687, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:00:30', '0000-00-00 00:00:00', '2015-10-16 07:00:16', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'Token anda adalah 16dP', 688, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:00:31', '0000-00-00 00:00:00', '2015-10-16 07:00:20', NULL, '', '089699953332', 'Default_No_Compression', '', '', -1, 'rererere', 689, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:01:56', '0000-00-00 00:00:00', '2015-10-16 07:01:55', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'Token anda adalah YB3U', 690, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:01:59', '0000-00-00 00:00:00', '2015-10-16 07:01:59', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'Token anda adalah YB3U', 691, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:02:03', '0000-00-00 00:00:00', '2015-10-16 07:02:02', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'Token anda adalah YB3U', 692, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:05:38', '0000-00-00 00:00:00', '2015-10-16 07:05:37', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'coba kirim sms ya nuris', 695, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:05:41', '0000-00-00 00:00:00', '2015-10-16 07:05:41', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'coba kirim sms ya nuris', 694, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:05:45', '0000-00-00 00:00:00', '2015-10-16 07:05:44', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'coba kirim sms ya nuris', 693, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:07:49', '0000-00-00 00:00:00', '2015-10-16 07:07:49', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'sms online', 698, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:07:53', '0000-00-00 00:00:00', '2015-10-16 07:07:52', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'sms online', 697, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:07:56', '0000-00-00 00:00:00', '2015-10-16 07:07:55', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'sms online', 696, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 07:16:28', '0000-00-00 00:00:00', '2015-10-16 07:16:20', NULL, '', '089699935552', 'Default_No_Compression', '', '', -1, 'Token anda adalah RZXi', 4, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 10:12:01', '0000-00-00 00:00:00', '2015-10-16 10:11:59', NULL, '', '0895332516869', 'Default_No_Compression', '', '', -1, 'coba kirim pesan dari server', 61, '', 1, 'SendingOKNoReport', -1, -1, -1, ''),
('2015-10-16 10:12:11', '0000-00-00 00:00:00', '2015-10-16 10:12:02', NULL, '', '0895332516869', 'Default_No_Compression', '', '', -1, 'coba kirim pesan dari server', 62, '', 1, 'SendingOKNoReport', -1, -1, -1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_instansi`
--

CREATE TABLE IF NOT EXISTS `tabel_instansi` (
  `instansi_id` int(11) NOT NULL,
  `nama_instansi` varchar(300) NOT NULL,
  `daerah_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tweeter` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_instansi`
--

INSERT INTO `tabel_instansi` (`instansi_id`, `nama_instansi`, `daerah_id`, `alamat`, `no_telp`, `no_hp`, `email`, `tweeter`, `password`) VALUES
(1, 'damkar kalimaru', 1, 'jl pemuda no 45, rt 05 rw 16, kecamatan singkulan, kabupaten lomiru', '0222345625', '082121473036', 'damkarkalimaru@gmail.com', 'damkarkalimaru', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_volunteer`
--

CREATE TABLE IF NOT EXISTS `tabel_volunteer` (
  `volunteer_id` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_ktp` varchar(33) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `foto` text NOT NULL,
  `biografi` text NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_volunteer`
--

INSERT INTO `tabel_volunteer` (`volunteer_id`, `nama_lengkap`, `no_hp`, `no_ktp`, `email`, `password`, `foto`, `biografi`, `alamat`, `jenis`) VALUES
(1, 'nuris akbar', '082121473036', '7212121323', 'nuris.akbar@gmail.com', 'nuris', 'nuris.jpg', 'sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text \r\n\r\nsample text sample text sample text sample text sample text sample text ', '', ''),
(2, 'Galih Pratama', '082121473823', '33434343434', 'hai_galih@gmail.com', 'galih', 'galih.jpg', 'sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text \r\n\r\nsample text sample text sample text sample text ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daerah`
--

CREATE TABLE IF NOT EXISTS `tbl_daerah` (
  `daerah_id` int(11) NOT NULL,
  `nama_daerah` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daerah`
--

INSERT INTO `tbl_daerah` (`daerah_id`, `nama_daerah`, `email`, `password`) VALUES
(1, 'Palembang', 'nuris.akbar@gmail.com', '74d7273be4b0ddeac49bfa169b288c5b'),
(2, 'Riau', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_masalah`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori_masalah` (
  `kategori_id` int(11) NOT NULL,
  `kategori_masalah` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_masalah`
--

INSERT INTO `tbl_kategori_masalah` (`kategori_id`, `kategori_masalah`) VALUES
(1, 'kabut asap'),
(2, 'kebakaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permasalahan`
--

CREATE TABLE IF NOT EXISTS `tbl_permasalahan` (
  `masalah_id` int(11) NOT NULL,
  `nama_masalah` varchar(300) NOT NULL,
  `daerah_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('1','0') NOT NULL,
  `hastag` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover_image` text NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permasalahan`
--

INSERT INTO `tbl_permasalahan` (`masalah_id`, `nama_masalah`, `daerah_id`, `start_date`, `end_date`, `status`, `hastag`, `deskripsi`, `cover_image`, `kategori_id`) VALUES
(1, 'kabut asap jambi', 1, '2015-10-17', '2015-10-22', '1', '#kabutAsap #jambi', 'sample text deskripsi untuk kabut asap', 'kabut-jambi.jpg', 1),
(2, 'kabut asap palembang', 1, '2015-10-06', '2015-10-01', '1', '#KabutAsapPalembang ', 'Kabut asap pekat menyelimuti Kota Palembang, Sumatera Selatan. Kualitas udara memburuk selama berbulan-bulan hingga masuk dalam kategori berbahaya.', 'kabut-palembang.jpg', 1),
(3, 'bandung kekeringan', 2, '2015-10-01', '2015-10-15', '', '#bandung #Gersang', 'sudah lama bandung tidak diguyur hujan menyebabkan banyak daerah mulai berdampak kekeringan', 'kabut-pekanbaru.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `active` enum('0','1') NOT NULL,
  `token` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `nama_lengkap`, `email`, `no_hp`, `password`, `active`, `token`) VALUES
(5, 'nuris akbar', 'nuris.akbar@gmail.com', '089533251686', '74d7273be4b0ddeac49bfa169b288c5b', '1', 'pzTS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`), ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`), ADD KEY `outbox_sender` (`SenderID`);

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pbk`
--
ALTER TABLE `pbk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbk_temp`
--
ALTER TABLE `pbk_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`), ADD KEY `sentitems_date` (`DeliveryDateTime`), ADD KEY `sentitems_tpmr` (`TPMR`), ADD KEY `sentitems_dest` (`DestinationNumber`), ADD KEY `sentitems_sender` (`SenderID`);

--
-- Indexes for table `tabel_instansi`
--
ALTER TABLE `tabel_instansi`
  ADD PRIMARY KEY (`instansi_id`);

--
-- Indexes for table `tabel_volunteer`
--
ALTER TABLE `tabel_volunteer`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- Indexes for table `tbl_daerah`
--
ALTER TABLE `tbl_daerah`
  ADD PRIMARY KEY (`daerah_id`);

--
-- Indexes for table `tbl_kategori_masalah`
--
ALTER TABLE `tbl_kategori_masalah`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_permasalahan`
--
ALTER TABLE `tbl_permasalahan`
  ADD PRIMARY KEY (`masalah_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=678;
--
-- AUTO_INCREMENT for table `pbk`
--
ALTER TABLE `pbk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pbk_temp`
--
ALTER TABLE `pbk_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabel_instansi`
--
ALTER TABLE `tabel_instansi`
  MODIFY `instansi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_volunteer`
--
ALTER TABLE `tabel_volunteer`
  MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_daerah`
--
ALTER TABLE `tbl_daerah`
  MODIFY `daerah_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kategori_masalah`
--
ALTER TABLE `tbl_kategori_masalah`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_permasalahan`
--
ALTER TABLE `tbl_permasalahan`
  MODIFY `masalah_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
