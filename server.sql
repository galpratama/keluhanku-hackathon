-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 17. Oktober 2015 jam 03:44
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `server`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daemons`
--

CREATE TABLE IF NOT EXISTS `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gammu`
--

CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
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
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `inbox`
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
-- Struktur dari tabel `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(100) NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`ID`, `keyword`, `reply`) VALUES
(1, 'reg', 'informasi keyword reg'),
(2, 'unreg', 'informasi unreg'),
(3, '', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outbox`
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
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  KEY `outbox_sender` (`SenderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=678 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outbox_multipart`
--

CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`,`SequencePosition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbk`
--

CREATE TABLE IF NOT EXISTS `pbk` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `pbk`
--

INSERT INTO `pbk` (`ID`, `GroupID`, `Name`, `Number`) VALUES
(10, 1, 'number 3', '0895332516869'),
(9, 2, 'number three', '0895332516869');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbk_groups`
--

CREATE TABLE IF NOT EXISTS `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `pbk_groups`
--

INSERT INTO `pbk_groups` (`Name`, `ID`) VALUES
('teman kuliah', 1),
('keluarga', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbk_temp`
--

CREATE TABLE IF NOT EXISTS `pbk_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pbkID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `pbk_temp`
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
-- Struktur dari tabel `phones`
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
  `Received` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IMEI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('layananSMS', '2015-10-14 15:07:37', '2015-10-14 15:06:04', '2015-10-14 15:07:47', 'yes', 'yes', '354058181011496', 'Gammu 1.28.90, Windows XP SP3, GCC 4.4, MinGW 3.13', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sentitems`
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
  `CreatorID` text NOT NULL,
  PRIMARY KEY (`ID`,`SequencePosition`),
  KEY `sentitems_date` (`DeliveryDateTime`),
  KEY `sentitems_tpmr` (`TPMR`),
  KEY `sentitems_dest` (`DestinationNumber`),
  KEY `sentitems_sender` (`SenderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sentitems`
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
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `active` enum('0','1') NOT NULL,
  `token` varchar(4) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`users_id`, `nama_lengkap`, `email`, `no_hp`, `password`, `active`, `token`) VALUES
(5, 'nuris akbar', 'nuris.akbar@gmail.com', '089533251686', '74d7273be4b0ddeac49bfa169b288c5b', '1', 'pzTS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
