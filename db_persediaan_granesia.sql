-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 07:05 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_persediaan_granesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_data_barang`
--

CREATE TABLE `master_data_barang` (
  `id` int(128) NOT NULL,
  `kode_barang` varchar(128) NOT NULL,
  `nama_barang` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_data_barang`
--

INSERT INTO `master_data_barang` (`id`, `kode_barang`, `nama_barang`) VALUES
(1, '1101.05.01', 'Koran Paper (32.5x44)'),
(2, '1101.05.02', 'Koran Paper (61x86)'),
(3, '1101.05.03', 'Koran Paper (65x100)'),
(4, '1101.05.04', 'Koran Paper (A4)'),
(5, '1101.05.05', 'Koran Paper (44x29)'),
(6, '1101.05.06', 'Koran Paper (63x76)'),
(7, '1101.05.07', 'Koran Paper (63x76)'),
(8, '1101.05.08', 'Koran Paper (58x35)'),
(9, '1102.01.01', 'HVS Paper 58 Gr (61x86)'),
(10, '1102.02.01', 'HVS Paper 60 Gr (61x86)'),
(11, '1102.02.02', 'HVS Paper 60 Gr (65x100)'),
(12, '1102.03.01', 'HVS Paper 70 Gr - Kuning (65x100)'),
(13, '1102.03.02', 'HVS Paper 70 Gr (61x86)'),
(14, '1102.03.03', 'HVS Paper 70 Gr (65x100)'),
(15, '1102.03.04', 'HVS Paper 70 Gr (79x109)'),
(16, '1102.03.05', 'HVS Paper 70 Gr (33x43)'),
(17, '1102.03.06', 'HVS Paper 70 Gr (64x44.5)'),
(18, '1102.03.07', 'HVS Paper 70 Gr (A4)'),
(19, '1102.03.08', 'HVS Paper 70 Gr (F4)'),
(20, '1102.03.09', 'HVS 70 Gr (53x36)'),
(21, '1102.04.01', 'HVS Paper 80 Gr (39x52)'),
(22, '1102.04.02', 'HVS Paper 80 Gr (61x86)'),
(23, '1102.04.03', 'HVS Paper 80 Gr (65x100)'),
(24, '1102.04.04', 'HVS Paper 80 Gr (79x109)'),
(25, '1102.05.01', 'HVS Paper 100 Gr (61x86)'),
(26, '1102.05.02', 'HVS Paper 100 Gr (65x100)'),
(27, '1102.05.03', 'HVS Paper 100 Gr (79x109)'),
(28, '1102.06.01', 'HVS Paper CLR 60 Gr - Biru (65x100)'),
(29, '1102.06.02', 'HVS Paper CLR 60 Gr - Kuning (65x100)'),
(30, '1102.06.03', 'HVS Paper CLR 60 Gr - Merah (65x100)'),
(31, '1102.07.01', 'HVS Stiker (70x108)'),
(32, '1103.01.01', 'AP 85 Gr (43x63)'),
(33, '1103.01.02', 'AP 85 Gr (65x100)'),
(34, '1103.01.03', 'AP 85 Gr (79x109)'),
(35, '1103.02.01', 'AP 100 Gr (61x92)'),
(36, '1103.02.02', 'AP 100 Gr (65x100)'),
(37, '1103.02.03', 'AP 100 Gr (79x109)'),
(38, '1103.02.04', 'AP 100 Gr (42x33)'),
(39, '1103.03.01', 'AP 120 Gr (61x92)'),
(40, '1103.03.02', 'AP 120 Gr (65x100)'),
(41, '1103.03.03', 'AP 120 Gr (79x109)'),
(42, '1103.04.01', 'AP 150 Gr (61x92)'),
(43, '1103.04.02', 'AP 150 Gr (65x100)'),
(44, '1103.04.03', 'AP 150 Gr (79x109)'),
(45, '1103.04.04', 'AP 150 Gr (65x90)'),
(46, '1103.05.01', 'AP 190 Gr (79x109)'),
(47, '1103.05.02', 'AP 190 Gr (65x100)'),
(48, '1103.06.01', 'AP 210 Gr (61x92)'),
(49, '1103.06.02', 'AP 210 Gr (65x100)'),
(50, '1103.06.03', 'AP 210 Gr (79x109)'),
(51, '1103.07.01', 'AP 230 Gr (65x100)'),
(52, '1103.07.02', 'AP 230 Gr (79x109)'),
(53, '1103.08.01', 'AP 260 Gr (65x100)'),
(54, '1103.08.02', 'AP 260 Gr (79x109)'),
(55, '1103.09.01', 'AP 310 Gr (65x100)'),
(56, '1103.09.02', 'AP 310 Gr (79x109)'),
(57, '1103.09.03', 'AP 310 Gr (52x37)'),
(58, '1103.10.01', 'AP 360 Gr (33x48)'),
(59, '1103.10.02', 'AP 360 Gr (65x100)'),
(60, '1103.10.03', 'AP 360 Gr (79x109)'),
(61, '1104.01.01', 'NCR Paper 60 Gr - Bot Biru (65x100)'),
(62, '1104.01.02', 'NCR Paper 60 Gr - Bot Hijau (65x100)'),
(63, '1104.01.03', 'NCR Paper 60 Gr - Bot Kuning (65x100)'),
(64, '1104.01.04', 'NCR Paper 60 Gr - Bot Merah (65x100)'),
(65, '1104.01.05', 'NCR Paper 60 Gr - Bot Putih (65x100)'),
(66, '1104.02.01', 'NCR Paper 60 Gr - Mid Biru (65x100)'),
(67, '1104.02.02', 'NCR Paper 60 Gr - Mid Hijau (65x100)'),
(68, '1104.02.03', 'NCR Paper 60 Gr - Mid Kuning (65x100)'),
(69, '1104.02.04', 'NCR Paper 60 Gr - Mid Merah (65x100)'),
(70, '1104.02.05', 'NCR Paper 60 Gr - Mid Putih (65x100)'),
(71, '1104.03.01', 'NCR Paper 60 Gr - Top Putih (65x100)'),
(72, '1105.01.01', 'MATT Paper 85 Gr (65x100)'),
(73, '1105.01.02', 'MATT Paper 100 Gr (65x100)'),
(74, '1105.02.01', 'MATT Paper 120 Gr (79x109)'),
(75, '1105.02.02', 'MATT Paper 120 Gr (65x100)'),
(76, '1105.03.01', 'MATT Paper 150 Gr (65x100)'),
(77, '1105.03.02', 'MATT Paper 150 Gr (79x109)'),
(78, '1106.01.01', 'Karton Paper No.160 (64x76)'),
(79, '1106.02.01', 'Karton Paper No.30A (64x76)'),
(80, '1106.03.01', 'Karton Paper No.140 (64x76)'),
(81, '1106.04.01', 'Karton Paper No.40 (64x76)'),
(82, '1107.01.01', 'Label Stiker (70x54)'),
(83, '1107.01.02', 'Label Stiker (70x108)'),
(84, '1108.01.01', 'Book Paper 57.5 Gr (65x100)'),
(85, '1108.01.02', 'Book Paper 57.5 Gr (79x109)'),
(86, '1108.02.01', 'Book Paper 60 Gr (65x100)'),
(87, '1108.02.02', 'Book Paper 60 Gr (79x109)'),
(88, '1108.02.03', 'Book Paper 60 Gr (61x86)'),
(89, '1109.01.01', 'Concorde 90 Gr - Hijau (79x109)'),
(90, '1109.01.02', 'Concorde 90 Gr - Putih (79x109)'),
(91, '1109.02.01', 'Concorde 90 Gr - Putih (65x100)'),
(92, '1110.01.01', 'Duplek 250 Gr (79x109)'),
(93, '1110.02.01', 'Duplek 400 Gr (79x109)'),
(94, '1111.01.01', 'BC White 160 Gr (61x86)'),
(95, '1111.01.02', 'BC Merah Muda 160 Gr (61x86)'),
(96, '1111.01.03', 'BC Hijau Toska 160 Gr (61x86)'),
(97, '1111.01.04', 'BC Biru Muda 160 Gr (61x86)'),
(98, '1111.01.05', 'BC White 150 (61x86)'),
(99, '1112.01.01', 'Akasia Paper 80 Gr (79x109)'),
(100, '1112.02.01', 'Akasia Paper 200 Gr (79x109)'),
(101, '1113.01.01', 'Amplop Cabinet (110x230)'),
(102, '1113.01.02', 'Amplop Cabinet kaca kanan (110x230)'),
(103, '1113.02.01', 'Amplop Casing (12x26)'),
(104, '1113.02.02', 'Amplop Casing (18x27.5)'),
(105, '1113.02.03', 'Amplop Casing (24x35)'),
(106, '1113.02.04', 'Amplop Casing (27.5x38)'),
(107, '1113.02.05', 'Amplop Casing(12x28)'),
(108, '1114.01.01', 'Buffalo 230 Gr (79x109)'),
(109, '1115.01.01', 'Casing Paper 80 Gr (90x120)'),
(110, '1116.01.01', 'Continous Form 1 Ply (19x11)'),
(111, '1116.01.02', 'Continous Form 1 Ply (9.5x11/3)'),
(112, '1116.01.03', 'Continous Form 1 Ply (HVS - 14 7/8x11)'),
(113, '1116.01.04', 'Continous Form 1 Ply (HVS - 9.6x11)'),
(114, '1116.02.01', 'Continous Form 2 Ply (9.5x11/3)'),
(115, '1116.02.02', 'Continous Form 2 Ply (NCR - 14 7/8x11)'),
(116, '1116.03.01', 'Continous Form 3 Ply (9.5x11/3)'),
(117, '1116.03.02', 'Continous Form 3 Ply (NCR - 9.6x11)'),
(118, '1117.01.01', 'Gloria 85 Gr (79x109)'),
(119, '1117.02.01', 'Gloria 210 Gr (79x109)'),
(120, '1118.01.01', 'Hammer Pink 90 Gr (79x109)'),
(121, '1119.01.01', 'Ivory 210 Gr (79x110)'),
(122, '1120.01.01', 'Jepit Kaleng (30 Cm)'),
(123, '1120.01.02', 'Jepit Kaleng (33 Cm)'),
(124, '1120.01.03', 'Jepit Kaleng (34 Cm)'),
(125, '1120.01.04', 'Jepit Kaleng (38 Cm)'),
(126, '1120.01.05', 'Jepit Kaleng (40 Cm)'),
(127, '1120.01.06', 'Jepit Kaleng (44 Cm)'),
(128, '1120.01.07', 'Jepit Kaleng (31 Cm)'),
(129, '1121.01.01', 'Kertas Roti (75x100)'),
(130, '1122.01.01', 'Linen Hitam (160x1600)'),
(131, '1122.01.02', 'Linen Hitam (79x109)'),
(132, '1123.01.01', 'Conqueror 220 Gr (70x100)'),
(133, '1124.01.01', 'Garda Pat 90 Gr (70x100)'),
(134, '1190.00.00', 'Lain-Lain'),
(135, 'AT11470101', 'Ballpoint'),
(136, 'AT11470102', 'Penghapus Pensil'),
(137, 'AT11470103', 'Penghapus White Board'),
(138, 'AT11470104', 'Pensil HB'),
(139, 'AT11470105', 'Spidol besar ( Water proop ) G'),
(140, 'AT11470106', 'Spidol kecil'),
(141, 'AT11470107', 'Spidol White Board besar BG'),
(142, 'AT11470108', 'Stabillo'),
(143, 'AT11470109', 'Tinta Bak Stempel'),
(144, 'AT11470110', 'Tips Eks'),
(145, 'AT11470111', 'Snoman HT ( F )'),
(146, 'AT11470201', 'Continus Form  9,5 X 11 \" 1 Ply'),
(147, 'AT11470202', 'Continus Form  9,5 X 11 \"  2 Ply'),
(148, 'AT11470203', 'Karbon Daito'),
(149, 'AT11470204', 'Kertas HVS A - 3 ( 70 gram ) Buy'),
(150, 'AT11470205', 'Kertas HVS Folio ( 70 gram ) Buy'),
(151, 'AT11470206', 'Kertas HVS A - 3 ( 70 gram ) Lokal'),
(152, 'AT11470207', 'Kertas HVS A - 4 ( 60 gram ) Lokal'),
(153, 'AT11470208', 'Kertas HVS A - 4 ( 70 gram ) Buy'),
(154, 'AT11470209', 'Kertas HVS Quarto  Lokal'),
(155, 'AT11470210', 'Continus Form 9,5 X 11 : 2'),
(156, 'AT11470211', 'Kertas Koran'),
(157, 'AT11470212', 'Kertas Quarto  ( 70 gram ) Buy'),
(158, 'AT11470213', 'Kertas Quarto mini ( 70 gram )'),
(159, 'AT11470214', 'Kertas Struk Calkulator'),
(160, 'AT11470215', 'Continus Form 1 Ply 14 7/8 X 11 \"'),
(161, 'AT11470216', 'Kertas Faximile'),
(162, 'AT11470217', 'Kertas HVS Folio ( 70 gram ) Lokal'),
(163, 'AT11470218', 'Kertas HVS F4 ( Folio  80 grm )'),
(164, 'AT11470219', 'Kertas Buram F-4'),
(165, 'AT11470220', 'Kertas Buram A-4'),
(166, 'AT11470221', 'kertas HVS B - 5 ( 70 Gram )'),
(167, 'AT11470301', 'Odner Computer'),
(168, 'AT11470302', 'Odner besar'),
(169, 'AT11470303', 'Odner Kecil'),
(170, 'AT11470304', 'Filing Folder'),
(171, 'AT11470305', 'Map  PT Granesia'),
(172, 'AT11470306', 'Map File Dokumen 60 lembar'),
(173, 'AT11470307', 'Map plastik jepit'),
(174, 'AT11470308', 'Map plastik transparan'),
(175, 'AT11470309', 'Map Kertas biasa'),
(176, 'AT11470310', 'Sys Box'),
(177, 'AT11470311', 'Hank map'),
(178, 'AT11470401', 'Amplop Coklat PT Granesia 24,5X37 cm'),
(179, 'AT11470402', 'Amplop Coklat PT Granesia 32,5X46 cm'),
(180, 'AT11470403', 'Amplop Coklat PT Granesia 17 X 28 cm'),
(181, 'AT11470404', 'Amplop Coklat PT Granesia 14,5X37 cm'),
(182, 'AT11470405', 'Amplop Gaji polos uk.90'),
(183, 'AT11470406', 'Amplop Gaji'),
(184, 'AT11470408', 'Amplop Surat PT Granesia'),
(185, 'AT11470409', 'Amplop Surat kecil polos'),
(186, 'AT11470410', 'Paper line 9 1/2 X 11 \" ( 1 Ply )'),
(187, 'AT11470411', 'Paper line 9 1/2 X 11 \" ( 2 Ply )'),
(188, 'AT11470412', 'Amplop Coklat PT Granesia 27,5 x 38 cm'),
(189, 'AT11470501', 'Blinder Clips No 0223'),
(190, 'AT11470502', 'Blinder Clips No 0224'),
(191, 'AT11470503', 'Blinder Clips No 0225'),
(192, 'AT11470504', 'Blinder Clips No 0226'),
(193, 'AT11470505', 'Blinder Clips No 172'),
(194, 'AT11470506', 'Blinder Clips No 200'),
(195, 'AT11470507', 'Blinder Clips No 0260'),
(196, 'AT11470508', 'Blinder Clips No 5'),
(197, 'AT11470509', 'Blinder Clips No 3'),
(198, 'AT11470510', 'Blinder Clips No 155'),
(199, 'AT11470511', 'Blinder Clips No 111'),
(200, 'AT11470512', 'Blinder Clips No 107'),
(201, 'AT11470513', 'Blinder Clips No 1'),
(202, 'AT11470601', 'Blanko BP'),
(203, 'AT11470602', 'Blanko Bukti Pengeluaran Barang ( B )'),
(204, 'AT11470603', 'Blanko Daftar Kebutuhan Barang'),
(205, 'AT11470604', 'Blanko Faktur Besar'),
(206, 'AT11470605', 'Blanko Kontra Bon'),
(207, 'AT11470606', 'Blanko Kop Surat PT Granesia'),
(208, 'AT11470607', 'Blanko Kwitansi PT Granesia'),
(209, 'AT11470608', 'Blanko Laporan Cetak'),
(210, 'AT11470609', 'Blanko Nota Serah Terima Barang'),
(211, 'AT11470610', 'Blanko Pengeluaran Barang ( A )'),
(212, 'AT11470611', 'Blanko Perjalan Dinas'),
(213, 'AT11470612', 'Blanko Permohonan'),
(214, 'AT11470613', 'Blanko Permohonan Cuti'),
(215, 'AT11470614', 'Blanko Permohonan Pinjaman'),
(216, 'AT11470615', 'Blanko Pesanan Barang'),
(217, 'AT11470616', 'Buku Expedisi'),
(218, 'AT11470617', 'Buku File plastik'),
(219, 'AT11470618', 'Buku Folio biasa'),
(220, 'AT11470619', 'Buku Quarto'),
(221, 'AT11470620', 'Buku Folio Akuntansi'),
(222, 'AT11470621', 'Kartu Persediaan Barang'),
(223, 'AT11470622', 'Blanko Permintaan Barang'),
(224, 'AT11470623', 'Tanda Terima'),
(225, 'AT11470624', 'SPKL besar'),
(226, 'AT11470625', 'SPKL Kecil'),
(227, 'AT11470626', 'Blanko faktur Kecil'),
(228, 'AT11470627', 'Blangko Nota keluar Barang / Gudang'),
(229, 'AT11470700', 'Block Note Agenda Surat'),
(230, 'AT11470701', 'Block Note PT Granesia Tebal'),
(231, 'AT11470702', 'Block Note PT Granesia Tipis / RUPS'),
(232, 'AT11470703', 'Buku Agenda Surat'),
(233, 'AT11470704', 'Pencil 2 B'),
(234, 'AT11470801', 'Tinta Cartidge HP 45 Black'),
(235, 'AT11470802', 'Tinta Cartidge HP 78 Colour'),
(236, 'AT11470803', 'Pita Cartidge Epson LQ 2180 ( # SO 15140 )'),
(237, 'AT11470804', 'Pita Cartidge Epson LX 300'),
(238, 'AT11470805', 'Tinta Cartidge Lexmark Black 17'),
(239, 'AT11470806', 'Tinta Cartidge Lexmark Colour 27'),
(240, 'AT11470807', 'Pita mesin Tik Manual'),
(241, 'AT11470808', 'Refil Pita Epson LQ 2180 ( # SO 15140 )'),
(242, 'AT11470809', 'Pita Cartidge LQ 1050'),
(243, 'AT11470810', 'Pita  Cartidge OKI 100'),
(244, 'AT11470811', 'Refil Pita Epson LX 300'),
(245, 'AT11470812', 'Refil Tinta Acasiana Black'),
(246, 'AT11470813', 'Refil Tinta Acasiana Colour'),
(247, 'AT11470814', 'Tinta Cartidge Canon BC 03'),
(248, 'AT11470815', 'Tinta Cartidge Canon BC 20 Black'),
(249, 'AT11470816', 'Tinta Cartidge Canon BCl 21 Black'),
(250, 'AT11470817', 'Tinta Cartidge Canon BCl 21 Colour'),
(251, 'AT11470818', 'Pita  Cartidge Epson LQ 100'),
(252, 'AT11470819', 'Tinta Cartidge Canon BCl 24 Colour'),
(253, 'AT11470820', 'Tinta Cartidge Canon BCl 24 Black'),
(254, 'AT11470821', 'Pita Cartidge SE 305'),
(255, 'AT11470822', 'Tinta Cartidge Canon  40 Black'),
(256, 'AT11470823', 'Tinta Cartidge Canon  41 Colour'),
(257, 'AT11470824', 'Tinta Cartidge Canon  92 Black'),
(258, 'AT11470825', 'Tinta Cartidge Canon  93 Colour'),
(259, 'AT11470901', 'CD Blank'),
(260, 'AT11470902', 'Disket 3,5 HD'),
(261, 'AT11470903', 'CD - RW'),
(262, 'AT11471001', 'Bak Stempel'),
(263, 'AT11471002', 'Cutter besar'),
(264, 'AT11471003', 'Cutter kecil'),
(265, 'AT11471004', 'Gunting'),
(266, 'AT11471005', 'Hekter besar'),
(267, 'AT11471006', 'Isi Cutter besar'),
(268, 'AT11471007', 'Isi Cutter kecil'),
(269, 'AT11471008', 'Isi Hekter besar 2 4/6'),
(270, 'AT11471009', 'Isi Hekter kecil'),
(271, 'AT11471010', 'Jangka'),
(272, 'AT11471011', 'Pembolong Kertas'),
(273, 'AT11471012', 'Tape Dispenser'),
(274, 'AT11471013', 'Tusukan Bon'),
(275, 'AT11471014', 'Hekter kecil'),
(276, 'AT11471101', 'Doble Tape'),
(277, 'AT11471102', 'Label Stiker 121'),
(278, 'AT11471103', 'Lak Band Hitam'),
(279, 'AT11471104', 'Lem Kertas Botol'),
(280, 'AT11471105', 'Lem UHU'),
(281, 'AT11471106', 'Selotip Panfix ( bening )'),
(282, 'AT11471107', 'Selotip Kertas'),
(283, 'AT11471201', 'Penggaris 1 meter'),
(284, 'AT11471202', 'Penggaris 30 cm ( Plastik )'),
(285, 'AT11471203', 'Penggaris 60 cm ( Plastik )'),
(286, 'AT11471301', 'Calculator Canon KC D 50 E'),
(287, 'AT11471302', 'Pita Catridge Printer AP 01'),
(288, 'AT11471303', 'Power Suply 450 Watt'),
(289, 'AT11471304', 'Power Suply 230 Watt'),
(290, 'AT11471305', 'Calkulator KC 529C/12'),
(291, 'AT11471306', 'Calculator Struk Citizen SDC 867'),
(292, 'AT11471307', 'Calkulator KC - D29E'),
(293, 'AT11471308', 'Calkulator KC - DX140C'),
(294, 'AT11471309', 'Calculator Merk Casio mx - 12V'),
(295, 'AT11471310', 'Calculator KC - 328'),
(296, 'AT11471311', 'Calculator SDC - 640II Merk Citicen'),
(297, 'AT11471312', 'USB Flash disck merk kingstone 2 GB'),
(298, 'AT11471313', 'USB Flas Disck merk Kingsttone 4 GB'),
(299, 'AT11471314', 'USB Flas Disck merk Kingsttone 8 GB'),
(300, 'AT11471315', 'USB Flash disck merk THOSHIBA 32 GB'),
(301, 'AT11471316', 'USB Flas Disck merk Kingsttone 16 GB'),
(302, 'AT11471317', 'Mouse'),
(303, 'AT11471318', 'Keyboard'),
(304, 'AT11471319', 'USB Flash disck merk Thosibha 8 GB'),
(305, 'AT11471401', 'Batu Baterai besar'),
(306, 'AT11471402', 'Batu Baterai kecil AA'),
(307, 'AT11471403', 'Batu Baterai Sedang'),
(308, 'AT11471404', 'Batu Baterai kecil (Alkalin )  AAA ( s2 )'),
(309, 'AT11471405', 'Serutan Pinsil'),
(310, 'AT11471406', 'Penghapus Mesin Tik TA'),
(311, 'AT11471407', 'Refil Tinta Infus Black'),
(312, 'AT11471408', 'Tinta Numbering'),
(313, 'AT11471409', 'Refil Tinta Infus Magenta'),
(314, 'AT11471410', 'Refil Tinta Infus Yellow'),
(315, 'AT11471411', 'Refil Tinta Infus Cyan'),
(316, 'AT11471412', 'Refil Kit Data Print - 27'),
(317, 'AT11471413', 'Refil Kit Data Print - 28'),
(318, 'AT11471414', 'Refil Kit Data Print - 40'),
(319, 'AT11471415', 'Refil Kit Data Print - 41'),
(320, 'AT11471416', 'Head Printer BC 21e'),
(321, 'AT11471417', 'Batu Baterai Akaline AA 2s'),
(322, 'AT11471418', 'Penggaris 30 cm (Besi)'),
(323, 'AT11471419', 'Batu Baterai 9V'),
(324, 'AT11471420', 'Kertas Concord A4 220 10S'),
(325, 'AT11471421', 'Kwitansi Biasa'),
(326, 'AT11471422', 'Tinta Catridge 830'),
(327, 'AT11471423', 'Tinta Catridge 831'),
(328, 'AT11471424', 'Calculator Struk Casio FR -2650T - WE'),
(329, 'AT11471425', 'Kantong Order'),
(330, 'AT11471426', 'Blanko Brief Order'),
(331, 'AT11471427', 'Calculator SDC - 664S Merk Citicen'),
(332, 'AT11471428', 'Cartride Printer IP 1600'),
(333, 'AT11479000', 'Lain lain'),
(334, 'BP/000001', 'FILM HRA. HS 558 M X 60 M Shafira'),
(335, 'BP/000002', 'FILM BENEFI 55.9 M X 61 M'),
(336, 'BP/000003', 'FILM HCS 100 MERK FUJI'),
(337, 'BP/000006', 'Dev Pos DJP 01'),
(338, 'BP/000007', 'AL Kohol IPA'),
(339, 'BP/000008', 'Spraymount'),
(340, 'BP/000009', 'Plate Cleaner Primer'),
(341, 'BP/000010', 'Corektor RR Pos'),
(342, 'BP/000011', 'Remover RP 1 Pos Merk Fuji'),
(343, 'BP/000012', 'AL Kohol 95 %'),
(344, 'BP/000013', 'Prolen'),
(345, 'BP/000014', 'Sponze'),
(346, 'BP/000015', 'Solatip Panfix'),
(347, 'BP/000016', 'Solatip Merah'),
(348, 'BP/000017', 'Anti Set of folder'),
(349, 'BP/000018', 'Lackban kertas'),
(350, 'BP/000019', 'Uniwash'),
(351, 'BP/000020', 'Remover RN 2 Fuji Negatif'),
(352, 'BP/000021', 'Varnis Tinta CT'),
(353, 'BP/000022', 'Dev Film Shafira'),
(354, 'BP/000023', 'Fixer Film Shafira'),
(355, 'BP/000024', 'Gum GU 7 Fuji'),
(356, 'BP/000025', 'Kalkir A3 Golden'),
(357, 'BP/000026', 'Crislin'),
(358, 'BP/000027', 'Kawat Jahit'),
(359, 'BP/000028', 'Koas Tusir Plate No 6'),
(360, 'BP/000029', 'Koas Tusir Plate No 3'),
(361, 'BP/000030', 'Fountain Solution EU 3 Fuji'),
(362, 'BP/000031', 'Toner HP 82 X'),
(363, 'BP/000032', 'Toner HP 29 X'),
(364, 'BP/000033', 'Lem Bloklem Merk Polichemy'),
(365, 'BP/000034', 'Lack Ban Plastik'),
(366, 'BP/000035', 'Spregum / Lokal'),
(367, 'BP/000036', 'GUM strekker Negatip'),
(368, 'BP/000037', 'Gravo Dryaer Extra Cairan'),
(369, 'BP/000038', 'Fetro Drayer'),
(370, 'BP/000039', 'Journal Fount'),
(371, 'BP/000040', 'Solven Chem Cleaner'),
(372, 'BP/000041', 'Kalkir Plano UK 32.5 x 21.9 ( Modif )'),
(373, 'BP/000042', 'Kalkir Plano UK A 4 ( Buku )'),
(374, 'BP/000043', 'Gom solution Lokal'),
(375, 'BP/000044', 'Developer  Plate Pos  NH 3'),
(376, 'BP/000045', 'Fountain Master ( Sheet Fed )'),
(377, 'BP/000046', 'Fountain Maco ( WEB )'),
(378, 'BP/000047', 'Dev Plate Pos EP 5'),
(379, 'BP/000048', 'Developer Plate Pos DP-4'),
(380, 'BP/000049', 'Kape Besar ( Sendok Tinta )'),
(381, 'BP/000050', 'Kape Kecil  ( Sendok Tinta ) Mesin MO'),
(382, 'BP/000051', 'Selotip Listrik ( Merk Nito )'),
(383, 'BP/000052', 'Benang Nilylon'),
(384, 'BP/000053', 'Developer Film AGFA'),
(385, 'BP/000054', 'Fixer AGFA'),
(386, 'BP/000055', 'Thinner'),
(387, 'BP/000056', 'Lem Fox'),
(388, 'BP/000057', 'Chem R W A'),
(389, 'BP/000058', 'Hot melt Oceanus HMM 2912'),
(390, 'BP/000059', 'Koas Plate Nomor 10'),
(391, 'BP/000060', 'Koas Plate Nomor 12'),
(392, 'BP/000061', 'Koas Plate Nomor  8'),
(393, 'BP/000062', 'Lem Alteko'),
(394, 'BP/000063', 'Samping Lem'),
(395, 'BP/000064', 'AQuaMol X 65'),
(396, 'BP/000065', 'Gom Ultrachem'),
(397, 'BP/000066', 'Kampas Rem'),
(398, 'BP/000067', 'Asah Pisau HSS'),
(399, 'BP/000068', 'Asah Bantalan Pisau'),
(400, 'BP/000069', 'Strapping Band'),
(401, 'BP/000070', 'Mata Bor'),
(402, 'BP/000071', 'Lem HM 156'),
(403, 'BP/000072', 'Lem HM 167'),
(404, 'BP/000073', 'Lem HM 250'),
(405, 'BP/000074', 'Lem HM 167 A'),
(406, 'BP/000075', 'Lem Presto HM 1709'),
(407, 'BP/000076', 'Febo Clean'),
(408, 'BP/000077', 'Ampelas'),
(409, 'BP/000078', 'Lem TONG SHEN ENT'),
(410, 'BP/000079', 'Batere Energizer 9V'),
(411, 'BP/000080', 'Lem Inwood'),
(412, 'BP/000081', 'Kunci Laci'),
(413, 'BP/000082', 'Snaprings - 16'),
(414, 'BP/000083', 'SBX 0410'),
(415, 'BP/000084', 'Bearing SBX 0410'),
(416, 'BP/000085', 'Universal Indic PH'),
(417, 'BP/000086', 'Oli Mesin Web'),
(418, 'BP/000087', 'Sealer'),
(419, 'BP/000088', 'Lap Majun'),
(420, 'BP/000089', 'Tali Rapia'),
(421, 'BP/000090', 'Kardus'),
(422, 'BP/000091', 'Developer Plate'),
(423, 'BP/000092', 'Solar'),
(424, 'BP/000093', 'Aseton'),
(425, 'BP/000094', 'Plastik Kecil uk. 32 x 50'),
(426, 'BP/000095', 'Plastik Besar uk. 55 x 75'),
(427, 'BP/000096', 'Best Wash CT'),
(428, 'BP/000097', 'United Oil Web'),
(429, 'BP/000098', 'United Oil Sheet Feed'),
(430, 'BP/000099', 'Sarung tangan'),
(431, 'BP/000100', 'Kuas 5 inc'),
(432, 'BP/000101', 'Masker'),
(433, 'BP/000102', 'Palet Besar'),
(434, 'BP/000103', 'Palet kecil'),
(435, 'BP/000104', 'Megacools chain (Pelumas rantai mesin GTO)'),
(436, 'BP/000105', 'Star wheel mesin GTO'),
(437, 'BP/000106', 'Karet Penghisap mesin bloklem'),
(438, 'BP/000107', 'Dispenser OPP(rumah lakban)'),
(439, 'BP/000108', 'Jarum'),
(440, 'BP/000109', 'Kaca Loop'),
(441, 'BP/000110', 'Fountex Plus'),
(442, 'BP/000111', 'Kardus uk 565x360x240'),
(443, 'BP/000112', 'Kardus uk 360x260x330'),
(444, 'BP/000113', 'Kardus uk 360x260x300'),
(445, 'BP/000114', 'Plastik ukuran 70x80x0.050'),
(446, 'BP/000115', 'Penutup telinga'),
(447, 'BP/000116', 'Plastik ukuran 65x70x0.040'),
(448, 'BP/000117', 'Ampelas 1000/1500'),
(449, 'BP/000119', 'Plastik mesin sring uk 17x17'),
(450, 'BP/000120', 'Plastik uk 30x50'),
(451, 'BP/000121', 'Plastik ukuran 30x45'),
(452, 'BP/000122', 'Ban karet no 3'),
(453, 'BP/000123', 'Corong'),
(454, 'BP/000124', 'Kuas ukuran 2 inch'),
(455, 'BP/000125', 'Kuas ukuran 1 inch'),
(456, 'BP/000126', 'Pastik ukuran 21x27,5'),
(457, 'BP/000127', 'Plastik mesin sring 15 mikron 13 inc'),
(458, 'BP/000128', 'Palet'),
(459, 'BP/000129', 'Oli Mesin TSK'),
(460, 'BP/000130', 'Lem BHM 8239 {Z}'),
(461, 'BP/000131', 'Lem BHM 8810 N {Z} / Punggung'),
(462, 'BP/000132', 'Putty Knifet/Kape Kecil'),
(463, 'BP/000133', 'Plastik Srink Film 17 inc'),
(464, 'BP/000135', 'Kertas Lakmus'),
(465, 'BP/000136', 'Ampelas CC1000'),
(466, 'BP/000137', 'Kunci L Uk 14 inc Forklif'),
(467, 'BP/000138', 'Kardus Uk 42,5x30,3x26'),
(468, 'BP/000139', 'Plastik Srink 18 inc 15 micron'),
(469, 'BP/900000', 'Lain-Lain'),
(470, 'BR/011001', 'Plate Web Uk 889x586 - Konvensional'),
(471, 'BR/012001', 'Plate Web Uk 889x586 Exwl - CTCP'),
(472, 'BR/012002', 'Plate Web Uk 889x586 HG - CTCP'),
(473, 'BR/012004', 'Plate Web Uk 889x586 Bocica - CTCP'),
(474, 'BR/012005', 'Plate Web Uk 889x586 Diaplate - CTCP'),
(475, 'BR/013003', 'Plate Web Uk 889x586 Fuji - CTP'),
(476, 'BR/013004', 'Plate Web uk 889x586 - Master CTCP'),
(477, 'BR/021001', 'Plate GTO Uk 510 x 400 - Konvensional'),
(478, 'BR/022001', 'Plate GTO Uk 510 x 400 Arirang - CTCP'),
(479, 'BR/022002', 'Plate GTO Uk 510 x 400 Diaplate - CTCP'),
(480, 'BR/022003', 'Plate GTO Uk 510 x 400 HG - CTCP'),
(481, 'BR/022004', 'Plate GTO Uk 510 x 400 Bocica - CTCP'),
(482, 'BR/022005', 'Plate uk. 525 x 459 HG'),
(483, 'BR/022006', 'Plate GTO uk 510x400 Master CTCP'),
(484, 'BR/022007', 'Plate Goss Uk 889x637x0,30'),
(485, 'BR/031001', 'Plate MO Uk 650 x 550 - Konvensional'),
(486, 'BR/032001', 'Plate MO Uk 650 x 550 Arirang - CTCP'),
(487, 'BR/032002', 'Plate MO Uk 650 x 550 Diaplate - CTCP'),
(488, 'BR/092001', 'Plate  Uk 570 x 510 Diaplate - CTCP'),
(489, 'BR/900000', 'Lain-Lain'),
(490, 'BT/010001', 'Tinta Web Proc.Black Cemani Toka'),
(491, 'BT/010002', 'Tinta Web Proc.Cyan Cemani Toka'),
(492, 'BT/010003', 'Tinta Web Proc Magenta Cemani Toka'),
(493, 'BT/010004', 'Tinta Web Proc Yellow Cemani Toka'),
(494, 'BT/010005', 'Tinta Web Proc.Black DIC'),
(495, 'BT/010006', 'Tinta Web Proc Cyan DIC'),
(496, 'BT/010007', 'Tinta Web Proc Magenta DIC'),
(497, 'BT/010008', 'Tinta Web Proc Yellow DIC'),
(498, 'BT/010009', 'Tinta Web Proc Cyan News Prime'),
(499, 'BT/010010', 'Tinta Web Proc Magenta News Prim'),
(500, 'BT/010011', 'Tinta Web Proc Yellow News Prime'),
(501, 'BT/010012', 'Tinta Web Black News Prime ( Multi G )'),
(502, 'BT/010013', 'Tinta Web Black Printcolor'),
(503, 'BT/010014', 'Tinta Web Cyan Princolor'),
(504, 'BT/010015', 'Tinta Web Magenta Printcolor'),
(505, 'BT/010016', 'Tinta Web Yellow Printcolor'),
(506, 'BT/010017', 'Tinta Web Black Toyoin'),
(507, 'BT/010018', 'Tinta Web Proc Cyan Toyoin'),
(508, 'BT/010019', 'Tinta Web Proc Magenta Toyoin'),
(509, 'BT/010020', 'Tinta Web Proc Yellow Toyoin'),
(510, 'BT/010021', 'Tinta Webb Proc Cyan 143071 Hostman'),
(511, 'BT/010022', 'Tinta Webb Proc Magenta 143072 Host'),
(512, 'BT/010023', 'Tinta Webb Proc Yellow 143073 Hostman'),
(513, 'BT/010024', 'Tinta Webb Proc Black 143074 Hostman'),
(514, 'BT/010025', 'Tinta Web Dark Green (Mixing)'),
(515, 'BT/010026', 'Tinta WRO Bonze Blue ( Galamedia ) CT'),
(516, 'BT/010027', 'Tinta WRO Fajar Banten CT'),
(517, 'BT/020001', 'Tinta Best One Black Cemani Toka'),
(518, 'BT/020002', 'Tinta Best One Cyan CemaniToka'),
(519, 'BT/020003', 'Tinta Best One Magenta Cemani Toka'),
(520, 'BT/020004', 'Tinta Best One Yellow Cemani Toka'),
(521, 'BT/020005', 'Tinta Best One Cyan Emblem H'),
(522, 'BT/020006', 'Tinta Best One Magenta Emblem H'),
(523, 'BT/020007', 'Tinta Best One Yellow Emblem H'),
(524, 'BT/020008', 'Tinta Best One Black Emblem H'),
(525, 'BT/020009', 'Tinta TC 5400 Black CT'),
(526, 'BT/020010', 'Tinta Medium 001CT'),
(527, 'BT/020011', 'Tinta TC 1105 Bronze Red CT'),
(528, 'BT/020012', 'Tinta WRO Red 135 CT'),
(529, 'BT/020013', 'Tinta Karton Sari Kemuning CT'),
(530, 'BT/020014', 'Tinta Mat Black CT'),
(531, 'BT/020015', 'Tinta Mat Black DIC'),
(532, 'BT/020016', 'Tinta FA 172 Harisma Gray DIC'),
(533, 'BT/020017', 'Visko Proc Black'),
(534, 'BT/020018', 'Visko Proc Cyan'),
(535, 'BT/020019', 'Visko Proc Magenta'),
(536, 'BT/020020', 'Visko Proc Yellow'),
(537, 'BT/020021', 'Tinta New Graft  SP  Black'),
(538, 'BT/020022', 'Tinta New Graft  SP Cyan'),
(539, 'BT/020023', 'Tinta New Graft  SP Magenta'),
(540, 'BT/020024', 'Tinta New Graft  SP Yellow'),
(541, 'BT/020025', 'Tinta PRB Orange'),
(542, 'BT/020026', 'Tinta PRB Grey'),
(543, 'BT/020027', 'Tinta Best One Magenta M - QD'),
(544, 'BT/020028', 'Tinta Best One Yellow M - QD'),
(545, 'BT/020029', 'Tinta Best One Cyan M - QD'),
(546, 'BT/020030', 'Tinta Best One Black M - QD'),
(547, 'BT/020031', 'Tinta TC 0105 Medium Yellow'),
(548, 'BT/020032', 'Tinta W BLACK II/III'),
(549, 'BT/020033', 'Tinta TC 0105 MEDIUM YELLLOW'),
(550, 'BT/020034', 'Tinta TC 1705 Deep Red'),
(551, 'BT/020035', 'Tinta TC 6409 Silver'),
(552, 'BT/020036', 'Tinta Reflex Blue'),
(553, 'BT/020037', 'Tinta Violet'),
(554, 'BT/020038', 'Tinta TC 6207 Gold'),
(555, 'BT/020039', 'UV Coat Varnish CT-LO'),
(556, 'BT/020040', 'Tinta Ligh Blue'),
(557, 'BT/020041', 'Tinta Best One Neo Proc Magenta HD'),
(558, 'BT/020042', 'Tinta Best One Neo Proc Cyan HD'),
(559, 'BT/020043', 'TC 0105 Medium Yellow'),
(560, 'BT/900000', 'Lain-Lain'),
(561, 'SP/000001', 'Bearing No 6203'),
(562, 'SP/000002', 'Bearing RAL 0.12'),
(563, 'SP/000003', 'Bearing FA - 206 SKF'),
(564, 'SP/000004', 'Bearing Besar SKF'),
(565, 'SP/000005', 'Bearing 6001RSI SKP'),
(566, 'SP/000006', 'Bearing 6002 RSI SKP'),
(567, 'SP/000007', 'Blanket GTO 52 Merk Vulkan'),
(568, 'SP/000008', 'Blanket GTO 52 Merk Day Internasional'),
(569, 'SP/000009', 'Blanket MO Merk Day Internasional'),
(570, 'SP/000010', 'Blanket GTO 52 Merk Meiji'),
(571, 'SP/000011', 'Karet Kipas MO'),
(572, 'SP/000012', 'Karet Rakel Repro'),
(573, 'SP/000013', 'Karet Rakel GTO 52'),
(574, 'SP/000014', 'Dampening Go Knite'),
(575, 'SP/000015', 'Cutting Rubber ( Mesin WEB )'),
(576, 'SP/000016', 'Lampu Plate Makker Repro uk pendek'),
(577, 'SP/000017', 'Cutting Stick Mesin Potong'),
(578, 'SP/000018', 'Steel Jacket MO'),
(579, 'SP/000019', 'Bearing RCB'),
(580, 'SP/000020', 'Oli Can Crisbow'),
(581, 'SP/000021', 'Ring Specer'),
(582, 'SP/000022', 'Baut Geaer Prosesore'),
(583, 'SP/000023', 'Bearing 6001 Skf MO'),
(584, 'SP/000024', 'Bearing 6001 NTN'),
(585, 'SP/000025', 'Rubber Sucker MO'),
(586, 'SP/000026', 'WD 40'),
(587, 'SP/000027', 'Filter Regulator Mesin MOZ'),
(588, 'SP/000028', 'Lem Dextona'),
(589, 'SP/000029', 'Lampu Plate Makker GL KW'),
(590, 'SP/000030', 'Comb Brush Folder'),
(591, 'SP/000031', 'Lampu Amba AM 328 X'),
(592, 'SP/000032', 'Niping Folder XW'),
(593, 'SP/000033', 'Blaket Day Internasional Web'),
(594, 'SP/000034', 'Blanket Butther BT 39 00 WEB'),
(595, 'SP/000035', 'Blanket Printeck WEB'),
(596, 'SP/000036', 'Blanket Printeck MO'),
(597, 'SP/000037', 'Blanket GTO Printeck GTO 52'),
(598, 'SP/000038', 'Blanket Phoenik Web'),
(599, 'SP/000039', 'Blanket WEB Meiji'),
(600, 'SP/000040', 'Baud Mur Baja Uk 3/8 x 3/4'),
(601, 'SP/000041', 'Baud Mur Baja Uk 5 x 30'),
(602, 'SP/000042', 'Baud Baja Uk 3/16 x 1 In'),
(603, 'SP/000043', 'Fen Bell ( Penghantar Kertas )'),
(604, 'SP/000044', 'Selang Feomatik MO Uk 4 x 6'),
(605, 'SP/000045', 'Selang Feomatick MO Uk 2,1/2 x 4'),
(606, 'SP/000046', 'Jarum Folder Web'),
(607, 'SP/000047', 'Kipas Motor'),
(608, 'SP/000048', 'Hampelas Halus'),
(609, 'SP/000049', 'Stempet Mesin'),
(610, 'SP/000050', 'Astralon Uk 0.10'),
(611, 'SP/000051', 'Astralon Uk 0.75'),
(612, 'SP/000052', 'Astralon UK 0.16'),
(613, 'SP/000053', 'Olie Gear 220'),
(614, 'SP/000054', 'Baud Stanlees 12 x 100'),
(615, 'SP/000055', 'Rubber Sucker Ring Karet'),
(616, 'SP/000056', 'Roll pin Drif 4 x 25'),
(617, 'SP/000057', 'Per penahan kertas Naik Turun'),
(618, 'SP/000058', 'Milar Keramik'),
(619, 'SP/000059', 'Sikring 15 Amper'),
(620, 'SP/000060', 'Kabel Roll Listrik'),
(621, 'SP/000061', 'Baud Kopling'),
(622, 'SP/000062', 'Konci  L'),
(623, 'SP/000063', 'Bussing Prosesor'),
(624, 'SP/000064', 'New Moll MO 800 x 50 x 40'),
(625, 'SP/000065', 'Skring Lampu 3 Amper'),
(626, 'SP/000066', 'Kain Roll Ductor  ( Meleton )'),
(627, 'SP/000067', 'Sikring  5 Amper'),
(628, 'SP/000068', 'Sikring  3 Amper'),
(629, 'SP/000069', 'Plastik Stiel  ( Merk Dextona  )'),
(630, 'SP/000070', 'Cutting Knife ( Pisou potong   )'),
(631, 'SP/000071', 'New Moll GTO 550 x 50 x 40'),
(632, 'SP/000072', 'Lampu Metal Repro'),
(633, 'SP/000073', 'Recaver Rol Q 67 x900 P.As .927'),
(634, 'SP/000074', 'Recaver Rol Q 70 x900 P.As .926'),
(635, 'SP/000075', 'Pompa Stempet'),
(636, 'SP/000076', 'Sava Goss Blanket Web'),
(637, 'SP/000077', 'Roll Form Air Recaver uk 70x905 < 915'),
(638, 'SP/000078', 'RollFormTinta Recaver uk 67x890< 895'),
(639, 'SP/000079', 'Rol FormTinta Recaver uk 70 x890< 890'),
(640, 'SP/000080', 'Breaker LZM C3 A400'),
(641, 'SP/000081', 'Underlay uk.1030 x 795 x 0.10 - Cream'),
(642, 'SP/000082', 'Underlay uk. 1030 x 795 x 0.15 - Coklat'),
(643, 'SP/000083', 'Underlay uk. 1030 x 795 x 0.20 - Hijau'),
(644, 'SP/000084', 'Underlay uk. 1030 x 795 x 0.25 - Oren'),
(645, 'SP/000085', 'Underlay uk. 1030 x 795 x 0.30 - Kuning'),
(646, 'SP/000086', 'Folding Ukuran 57'),
(647, 'SP/000087', 'Folding Ukuran 58'),
(648, 'SP/000088', 'Bearing 368TIMKEN'),
(649, 'SP/000089', 'Bearing 363DTIMKEN'),
(650, 'SP/000090', 'Bearing 1209 NTN'),
(651, 'SP/000091', 'Grease'),
(652, 'SP/000092', 'Belt Dressing & Conditioner'),
(653, 'SP/000093', 'Bustle Wheels'),
(654, 'SP/000094', 'Recaver Handle, SIDLEY'),
(655, 'SP/000095', 'BAUD'),
(656, 'SP/000096', 'Brass Wire Brush'),
(657, 'SP/000097', 'Steel Wire Brush'),
(658, 'SP/000098', 'Spray Powder Master'),
(659, 'SP/000099', 'Rubber'),
(660, 'SP/000100', 'Bevel Gear'),
(661, 'SP/000101', 'Helical Gear'),
(662, 'SP/000102', 'Recovery Roll Tinta     MQ'),
(663, 'SP/000103', 'Recovery Roll Tinta GTO'),
(664, 'SP/000104', 'Turnbuckle'),
(665, 'SP/000105', 'Lampu Indikator'),
(666, 'SP/000106', 'Recover Roll Lipat 44,4x305'),
(667, 'SP/000107', 'Filter Benang'),
(668, 'SP/000108', 'Vanvel GTO'),
(669, 'SP/000109', 'Backet Bustle Wheel'),
(670, 'SP/000110', 'Pisau Cacah'),
(671, 'SP/000114', 'Roll Air Recover 70 x 910'),
(672, 'SP/000115', 'Roll Tinta Recover 73 x 910'),
(673, 'SP/000116', 'Roll Tinta Recover 70 x 910'),
(674, 'SP/000117', 'Roll Tinta Recover 67 x 910'),
(675, 'SP/000118', 'Smash'),
(676, 'SP/000119', 'Slitter Porporasi'),
(677, 'SP/000120', 'Contact Cleaner'),
(678, 'SP/000121', 'Super Blue'),
(679, 'SP/000122', 'Boshing Vibrator'),
(680, 'SP/000123', 'Acid Floric / HF'),
(681, 'SP/000124', 'Kuku Macan'),
(682, 'SP/000125', 'Sikat Bulu'),
(683, 'SP/000126', 'Selang Greese'),
(684, 'SP/000127', 'Switch On-Off mesin Strapping Band'),
(685, 'SP/000128', 'Filter / Saringan Tembaga Mesin'),
(686, 'SP/000129', 'Filter Saringan Air'),
(687, 'SP/000130', 'Bearing No. 6206'),
(688, 'SP/000131', 'Push Button Switch 500 V / 3,7 KW'),
(689, 'SP/000132', 'Siemens S ABG'),
(690, 'SP/000133', 'Siemens 3 TH 42'),
(691, 'SP/000134', 'Siemens 3 TH 82'),
(692, 'SP/000135', 'Siemens 3 TF 40'),
(693, 'SP/000136', 'Siemens 3 TF 41'),
(694, 'SP/000137', 'Siemens 3 TF 43'),
(695, 'SP/000138', 'Siemens 3 TF 44'),
(696, 'SP/000139', 'Moeller'),
(697, 'SP/000140', 'Kran Air 3 Sisi'),
(698, 'SP/000142', 'Sikat Ijuk'),
(699, 'SP/000143', 'Switch Penangkal Petir'),
(700, 'SP/000144', 'Tambang Tembaga / Penangkal Petir'),
(701, 'SP/000145', 'Balas Travo'),
(702, 'SP/000146', 'Box Sambungan / Duradus'),
(703, 'SP/000147', 'Bando Belt Serie A-35'),
(704, 'SP/000148', 'Bando Belt Serie B-57'),
(705, 'SP/000149', 'Timing Belt Serie 2450'),
(706, 'SP/000150', 'Timing Belt Serie 130 XL'),
(707, 'SP/000151', 'Covenyor Belt Seri SG 250'),
(708, 'SP/000152', 'Conveyor Belt Seri 465'),
(709, 'SP/000153', 'Roda troli'),
(710, 'SP/000154', 'United Oil Web'),
(711, 'SP/000155', 'United Oil Sheet Feed'),
(712, 'SP/000156', 'Contak Dressing'),
(713, 'SP/000157', 'Pisau tinta mesin MO'),
(714, 'SP/000158', 'Pisau tinta mesin GTO'),
(715, 'SP/000159', 'Gigi gear mesin Web'),
(716, 'SP/000160', 'Bedak tabur'),
(717, 'SP/000161', 'Bearing FYH'),
(718, 'SP/000162', 'Pompa sedotan'),
(719, 'SP/000163', 'O ring 175x4 mesin genset'),
(720, 'SP/000164', 'Sealant mesin genset'),
(721, 'SP/000165', 'Hampelas No 240'),
(722, 'SP/000166', 'Mur NW SS 6 ml mesin GTO'),
(723, 'SP/000167', 'Ring Baja 4 ml mesin GTO'),
(724, 'SP/000168', 'Ring Baja 6 x 16 ml mesin GTO'),
(725, 'SP/000169', 'Kunci Jurnal GTO 50'),
(726, 'SP/000170', 'Baut GTO 52 uk 8x40 ml'),
(727, 'SP/000171', 'Cutting Stick mesin Itoh'),
(728, 'SP/000172', 'Rol Tinta Plat GTO 52 uk 45x520'),
(729, 'SP/000173', 'Rol Tinta Plat GTO 52 uk 49x520'),
(730, 'SP/000174', 'Rol Tinta Plat GTO 52 uk 51x520'),
(731, 'SP/000175', 'Rol Tinta Plat GTO 52 uk 47x520'),
(732, 'SP/000176', 'Rol Air Plat GTO 52 uk 46x530'),
(733, 'SP/000177', 'Cuting Stick Wohlenberg uk 13x13'),
(734, 'SP/000178', 'Dudukan rol tinta kiri mesin GTO'),
(735, 'SP/000179', 'Dudukan rol tinta kanan mesin GTO'),
(736, 'SP/000180', 'Pisau Mesin Bloklem(Baby Poni)'),
(737, 'SP/000181', 'Cutting knife mesin Web'),
(738, 'SP/000182', 'Accu 190 H52 mesin Genset'),
(739, 'SP/000183', 'Kabel Ties'),
(740, 'SP/000184', 'Silikon kit'),
(741, 'SP/000185', 'Master Silant Silicon mesin bloklem'),
(742, 'SP/000186', 'Saklar mesin Bloklem'),
(743, 'SP/000187', 'Automatic cover mesin bloklem'),
(744, 'SP/000188', 'Relag 110 vac mesin web'),
(745, 'SP/000189', 'Pilot Lamp 130 vac mesin web'),
(746, 'SP/000190', 'Saklar pus on 4 kaki mesin web'),
(747, 'SP/000191', 'Mainboard type 1+ mesin CTP'),
(748, 'SP/000192', 'Pipa PVC 3/4'),
(749, 'SP/000193', 'Keni L 3/4'),
(750, 'SP/000194', 'Water Mur 3/4'),
(751, 'SP/000195', 'Sambungan T 3/4'),
(752, 'SP/000196', 'Sok Drat Luar 3/4'),
(753, 'SP/000197', 'Sok Drat Dalam 3/4'),
(754, 'SP/000198', 'Lem PVC Asahi Kaleng'),
(755, 'SP/000199', 'Sok Sambungan 3/4'),
(756, 'SP/000200', 'Reset Switch mesin Straping Band'),
(757, 'SP/000201', 'Feed Switch mesin Straping Band'),
(758, 'SP/000202', 'Strap Guide Exist mesin Straping Band'),
(759, 'SP/000203', 'Control Board mesin Web'),
(760, 'SP/000204', 'Relay MY2-GS mesin bloklem'),
(761, 'SP/000205', 'Recovery Roll Tinta Plat GTO uk 45x520'),
(762, 'SP/000206', 'Recovery Roll Tinta Plat GTO uk 46x530'),
(763, 'SP/000207', 'Karet Rem Stopper depan mesin Shetfed'),
(764, 'SP/000208', 'Rol Opas (Penguat Rol) mesin GTO'),
(765, 'SP/000209', 'Pembersih Rol Opas mesin GTO'),
(766, 'SP/000210', 'Ring No 17 (Tipis) mesin GTO'),
(767, 'SP/000211', 'Ring No 17 (Tebal) mesin GTO'),
(768, 'SP/000212', 'Mur No 10 mesin GTO'),
(769, 'SP/000213', 'Baut 1/4 panjang  1 3/4 mesin Web'),
(770, 'SP/000214', 'Ring plat 1/4 mesin Web'),
(771, 'SP/000215', 'Mur 1/4 mrsin Web'),
(772, 'SP/000216', 'Soket Set MM 12x40 mesin Web'),
(773, 'SP/000217', 'Push bottom 25mm mesin Web'),
(774, 'SP/000218', 'Baut Baja uk 7/16 x 1 1/4 mesin Web'),
(775, 'SP/000219', 'Underlay karet mesin GTO uk 520x410'),
(776, 'SP/000220', 'Baud M 3/8x244x1132+Mur mesin web'),
(777, 'SP/000221', 'Baud M 3/8x244x1302+Mur mesin Web'),
(778, 'SP/000222', 'Bearing No 61902-ZZ mesin Woojin'),
(779, 'SP/000223', 'Bearing No 6006 mesin Woojin'),
(780, 'SP/000224', 'Bearing No 6005 mesin Woojin'),
(781, 'SP/000225', 'Bearing No 608 mesin Woojin'),
(782, 'SP/000226', 'Bearing No 6001 mesin Woojin'),
(783, 'SP/000227', 'Snapring no 10 mesin Woojin'),
(784, 'SP/000228', 'Snapring no 12 mesin Woojin'),
(785, 'SP/000229', 'Vanbelt 420 H-075 mesin muller Martini'),
(786, 'SP/000230', 'Stopkran angin mesin GTO'),
(787, 'SP/000231', 'Ring plate mesin GTO'),
(788, 'SP/000232', 'Oring P 12/seal karet mesin GTO'),
(789, 'SP/000233', 'Double nepel kuningan ancuran mesin GTO'),
(790, 'SP/000234', 'Pisau Potong mesin potong ITOCH'),
(791, 'SP/000235', 'Per Guide Strap mesin GTO'),
(792, 'SP/000236', 'Spring meja delivery kanan mesin GTO'),
(793, 'SP/000237', 'Spring meja delivery kiri mesin GTO'),
(794, 'SP/000238', 'Mur baja uk 16x2,0 mesin bloklem'),
(795, 'SP/000239', 'Mur baja uk 16x36x2,5 mesin bloklem'),
(796, 'SP/000240', 'Relay S2 -24 volt mesin potong itoch'),
(797, 'SP/000241', 'Relay S4 - 24 volt mesin potong itoch'),
(798, 'SP/000242', 'Isolasi listrik mesin potong itoch'),
(799, 'SP/000243', 'Lem listrik mesin potong itoch'),
(800, 'SP/000244', 'Elemen Pemanas mesin bloklem Woojin'),
(801, 'SP/000245', 'Per tank mesin muler martini'),
(802, 'SP/000246', 'Kabel Serabut mesin Web'),
(803, 'SP/000247', 'Relay S3E-24 volt mesin potong itoch'),
(804, 'SP/000248', 'Kabel Tie mesin UV'),
(805, 'SP/000249', 'Solasi anti panas mesin bloklem Woojin'),
(806, 'SP/000250', 'Clamp Selang mesin Web'),
(807, 'SP/000251', 'Vanbelt B 46 mesin Web'),
(808, 'SP/000252', 'Silent Kawat tembaga'),
(809, 'SP/000253', 'Baud L camp plate uk 6x80'),
(810, 'SP/000254', 'Plastik stil mesin bloklem'),
(811, 'SP/000255', 'Selenoid mesin CTP'),
(812, 'SP/000256', 'Sekun uk 1.25 mesin CTP'),
(813, 'SP/000257', 'Kabel listrik mesin sring'),
(814, 'SP/000258', 'MCB mesin sring'),
(815, 'SP/000259', 'Steaker mesin sring'),
(816, 'SP/000260', 'Solatif tahan panas mesin sring'),
(817, 'SP/000261', 'Rubber Sucker mesin Bloklem'),
(818, 'SP/000262', 'Mur Baut dan Ring Per troli'),
(819, 'SP/000263', 'Lem Super glue'),
(820, 'SP/000264', 'Pully Ukuran 100x34 Mesin Bloklem'),
(821, 'SP/000265', 'Pully Ukuran 102x24 Mesin Bloklem'),
(822, 'SP/000266', 'Bearing 6003-2Z mesin bloklem muler martini'),
(823, 'SP/000267', 'Bearing 6000-2Z mesin bloklem muler martini'),
(824, 'SP/000268', 'Neple Grease mesin bloklem muler martini'),
(825, 'SP/000269', 'Ampelas No 240'),
(826, 'SP/000270', 'Ampelas No 1000'),
(827, 'SP/000271', 'Relay HG2-DC 24 V AP 622270408 TH/8 kaki mesin pot'),
(828, 'SP/000272', 'Cutting Stick Itoch ukuran 16x16'),
(829, 'SP/000273', 'Lem Sunpad 310+hardener'),
(830, 'SP/000274', 'Dioda 25 UF  mesin Wojin'),
(831, 'SP/000275', 'Termostad  mesin Wojin'),
(832, 'SP/000276', 'Soket mesin Wojin'),
(833, 'SP/000277', 'Pen Kunci Baja Uk 16 x115 Mesin TSK'),
(834, 'SP/000278', 'United Compresor Oil ISO 100'),
(835, 'SP/000279', 'Pisau Three Knife Trimmer TSK'),
(836, 'SP/000280', 'Rubber Sucker For Arm Gather TSK'),
(837, 'SP/000281', 'Cuting Stik Size 336 mm'),
(838, 'SP/000282', 'Pisau Tiga Sisi RRT TSK'),
(839, 'SP/000283', 'Nouching Uk 35,5x18x1x30Z'),
(840, 'SP/000284', 'Pisau Milling 30Z'),
(841, 'SP/000285', 'Pisau Porporasi Nipping Web'),
(842, 'SP/000286', 'Lampu 24V Mesin TSK'),
(843, 'SP/000287', 'Plastik Steel'),
(844, 'SP/000288', 'Cutting Stick 336mm'),
(845, 'SP/000289', 'Hose Premelter 2,5m Japan Original'),
(846, 'SP/000300', 'Roll Sikat Mesin TSK'),
(847, 'SP/000301', 'Filter 51x27x91Mesin TSK'),
(848, 'SP/000302', 'Per Filter Mesin TSK'),
(849, 'SP/000303', 'Baud+Mur baja Uk 12x55 TSK'),
(850, 'SP/000304', 'Oil Seal Uk 40x55x8 TSK'),
(851, 'SP/000305', 'Trust Greasshild 657 HT'),
(852, 'SP/000306', 'Trust Miracle 843 SAE 15W/40 TSK'),
(853, 'SP/000307', 'Isolasi Anti Panas'),
(854, 'SP/000308', 'Spon Cyntetic 24x12'),
(855, 'SP/000309', 'Bearing Nipping FAG 66205'),
(856, 'SP/000310', 'Bearing Nipping FAG 66206'),
(857, 'SP/000311', 'Bearing  22206 - EI'),
(858, 'SP/000312', 'Bearing  22205 - EI'),
(859, 'SP/000313', 'Boshing Penjempit TSK'),
(860, 'SP/000314', 'Klem As Gear Mesin TSK'),
(861, 'SP/000315', 'Fanbell'),
(862, 'SP/000316', 'Baud L baja 6x20 TSK'),
(863, 'SP/000317', 'WP baja 6x16x1,5'),
(864, 'SP/000318', 'Bearing 6000 zz / C3'),
(865, 'SP/000319', 'Bearing 6200 zz / C3'),
(866, 'SP/000320', 'Snapring H 26'),
(867, 'SP/000321', 'Filter 88x45x20 Mesin TSK'),
(868, 'SP/000322', 'Plat Baja F 0,5 Uk 26x763Z'),
(869, 'SP/000323', 'Jarum Folder Goss Community'),
(870, 'SP/000324', 'Blanket Vulcan 714M, Goss Comm'),
(871, 'SP/000325', 'Bearing NPP FA 106'),
(872, 'SP/000326', 'Bearing RA 012 NPP FA 106 Goss Comm'),
(873, 'SP/000327', 'Cutting Knife Goss Comm 63'),
(874, 'SP/000328', 'T-Belt 2600 8M (Optibelt) Goss Comm 63'),
(875, 'SP/000329', 'V-Belt A-142 (Bdo) Goss Comm 63'),
(876, 'SP/000330', 'GO Knit Size 2 Goss Comm 63'),
(877, 'SP/000331', 'Roll Karet Goss Comm 63'),
(878, 'SP/000332', 'Piringan Rem Goss Comm 63'),
(879, 'SP/000333', 'Roda Fiuroretan Goss Comm 63'),
(880, 'SP/000334', 'Kanvas Rem Goss Comm 63'),
(881, 'SP/000335', 'Bearing 7612 Goss Comm 63'),
(882, 'SP/000336', 'Bearing 7516 Goss Comm 63'),
(883, 'SP/900000', 'Lain-Lain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemakaian`
--

CREATE TABLE `tbl_pemakaian` (
  `id` int(11) NOT NULL,
  `no_dok` varchar(128) NOT NULL,
  `tgl_dok` varchar(20) NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `kode_barang` varchar(128) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `qty` decimal(10,0) NOT NULL,
  `hrg_satuan` decimal(10,0) NOT NULL,
  `jumlah` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `no_dok` varchar(128) NOT NULL DEFAULT '',
  `kode_barang` varchar(128) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `qty` decimal(10,0) NOT NULL,
  `hrg_satuan` decimal(10,0) NOT NULL,
  `jumlah` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`id`, `tanggal`, `no_dok`, `kode_barang`, `nama_barang`, `qty`, `hrg_satuan`, `jumlah`) VALUES
(1, '27-03-2019', '', '000.0001', 'KE delapan', '6', '1', '6'),
(2, '27-03-2019', '', '13134', 'cek2', '12', '12', '12'),
(3, '27-03-2019', '', '1230923', 'Jam Dinding Hari Ini Jam 21:14', '1', '23500', '23500'),
(4, '27-03-2019', '123/GRA/23/2019', '119837.09237', 'Gelas Kaca', '2', '7000', '14000'),
(5, '27-03-2019', '111/123/GRA/2019', '11923.atk', 'Socket Genset', '5', '12000', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saldo_awal`
--

CREATE TABLE `tbl_saldo_awal` (
  `id` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `satuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stok`
--

CREATE TABLE `tbl_stok` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(128) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Muluk Dharmayana', 'uzumaryuki@gmail.com', 'default.jpg', '$2y$10$jhuK6sFF4GWyRP1prRf4YO20QI8lqI6j32k3xNBsIdIE2WNa7SEJC', 1, 1, 1553184727),
(3, 'Hadi', 'hadi@gmail.com', 'default.jpg', '$2y$10$uQRNV7ngU.xh0/kVGnBo9emRAP6urtK/5uRd2vJ4xVGUDmh79ZnFi', 2, 1, 1553185767),
(4, 'Rivan', 'xipan87@gmail.com', 'default.jpg', '$2y$10$SYn1gP6krMonqKV66Ch8XeqwKPrmtBvLi22wPBmabtVUzbywtDwli', 2, 1, 1553658064),
(5, 'USER Muluk Dharmayana', 'uzumaryuki@yahoo.com', 'default.jpg', '$2y$10$5upI5k8.w6lWK5toMMXmv.uANPiSpB3dx4m5EdV/OyodWLYCUk3c6', 2, 1, 1553662046),
(6, 'Dian Bellina', 'dian.bellina@gmail.com', 'default.jpg', '$2y$10$mB.napozx325nBwCwDZBnu1jykyk0IFbh4skjF6zYOEKpOeasIhYK', 2, 1, 1553752964);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_menu`
--

CREATE TABLE `tbl_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_menu`
--

INSERT INTO `tbl_user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_submenu`
--

CREATE TABLE `tbl_user_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_submenu`
--

INSERT INTO `tbl_user_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Master Data Barang', 'Admin', 'fas fa-fw fa-user-alt', 1),
(2, 2, 'Stok Awal', 'user/saldo_awal', 'fas fa-fw fa-folder', 1),
(3, 2, 'Pembelian', 'user', 'fas fa-fw fa-shopping-cart', 1),
(4, 2, 'Pemakaian', 'user/pemakaian', 'fas fa-fw fa-folder', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_data_barang`
--
ALTER TABLE `master_data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemakaian`
--
ALTER TABLE `tbl_pemakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stok`
--
ALTER TABLE `tbl_stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_menu`
--
ALTER TABLE `tbl_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_submenu`
--
ALTER TABLE `tbl_user_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_data_barang`
--
ALTER TABLE `master_data_barang`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=884;

--
-- AUTO_INCREMENT for table `tbl_pemakaian`
--
ALTER TABLE `tbl_pemakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_stok`
--
ALTER TABLE `tbl_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_menu`
--
ALTER TABLE `tbl_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_submenu`
--
ALTER TABLE `tbl_user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
