-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 12:31 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_import_excel`
--

-- --------------------------------------------------------

--
-- Table structure for table `databank`
--

CREATE TABLE `databank` (
  `IDBank` varchar(11) NOT NULL,
  `Nama` varchar(55) NOT NULL,
  `Photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databank`
--

INSERT INTO `databank` (`IDBank`, `Nama`, `Photo`) VALUES
('B1', 'BANK MEGA', 'bank-mega.png'),
('B2', 'BANK BNI', 'bank-bni.png'),
('B3', 'BANK BRI', 'bank-bri.png'),
('B4', 'BANK HOME CREDIT', 'bank-hc.png'),
('B5', 'BANK DANAMON', 'bank-danamon.png'),
('B6', 'BANK TUNAIKU', 'bank-tunaiku.png'),
('B7', 'BANK COLLECTIUS', 'bank-coll.png'),
('B8', 'BANK CIMB NIAGA', 'bank-cimb.png');

-- --------------------------------------------------------

--
-- Table structure for table `datanasabah`
--

CREATE TABLE `datanasabah` (
  `ID` int(11) NOT NULL,
  `IDBank` varchar(11) NOT NULL,
  `TanggalImport` datetime NOT NULL,
  `NomorKartu` int(11) NOT NULL,
  `NamaNasabah` varchar(75) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `NomorHP` varchar(11) NOT NULL,
  `NomorTeleponRumah` varchar(11) NOT NULL,
  `NomorTeleponKantor` varchar(11) NOT NULL,
  `NomorEC` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `IbuKandung` varchar(75) NOT NULL,
  `JenisKelamin` varchar(20) NOT NULL,
  `AlamatRumah1` text NOT NULL,
  `AlamatRumah2` text NOT NULL,
  `AlamatRumah3` text NOT NULL,
  `AlamatRumah4` text NOT NULL,
  `NamaKantor` varchar(100) NOT NULL,
  `AlamatKantor1` text NOT NULL,
  `AlamatKantor2` text NOT NULL,
  `AlamatKantor3` text NOT NULL,
  `AlamatKantor4` text NOT NULL,
  `NamaEC` varchar(75) NOT NULL,
  `AlamatEC` text NOT NULL,
  `Regional` varchar(50) NOT NULL,
  `TglTurunAccount` date NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Action` varchar(50) NOT NULL,
  `OpenDate` date NOT NULL,
  `WODate` date NOT NULL,
  `LastPaymentDate` date NOT NULL,
  `LastPaymentNominal` varchar(60) NOT NULL,
  `Limitasi` varchar(60) NOT NULL,
  `OSBall` varchar(50) NOT NULL,
  `Principall` varchar(50) NOT NULL,
  `PermanentMessage` text NOT NULL,
  `LastReport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datanasabah`
--

INSERT INTO `datanasabah` (`ID`, `IDBank`, `TanggalImport`, `NomorKartu`, `NamaNasabah`, `DateOfBirth`, `NomorHP`, `NomorTeleponRumah`, `NomorTeleponKantor`, `NomorEC`, `Email`, `IbuKandung`, `JenisKelamin`, `AlamatRumah1`, `AlamatRumah2`, `AlamatRumah3`, `AlamatRumah4`, `NamaKantor`, `AlamatKantor1`, `AlamatKantor2`, `AlamatKantor3`, `AlamatKantor4`, `NamaEC`, `AlamatEC`, `Regional`, `TglTurunAccount`, `Status`, `Action`, `OpenDate`, `WODate`, `LastPaymentDate`, `LastPaymentNominal`, `Limitasi`, `OSBall`, `Principall`, `PermanentMessage`, `LastReport`) VALUES
(1, 'B5', '2020-04-11 07:40:26', 2147483647, 'ANDI HONG', '1976-02-12', '08136600078', '0751-810546', '0778-334091', '778', 'rinawaty_lau@yahoo.com', 'ACING', 'M', 'JL.NUSA JAYA EKA PUTRA BLOK I NO 15', 'SEI PANAS', '', '', 'BUMI INDAH BATAM PERMAI PT', 'BUMI INDAH BLOK 2 NO 14', '', '', '', 'UNTHUNG', 'LEGENDA MALAKA A3 NO 17', 'MEDAN', '0000-00-00', 'Investigasi', 'Valid', '2012-11-30', '2013-08-30', '2014-07-18', 'Rp3,044,505', 'Rp5,000,000', ' Rp 5,760,361 ', ' Rp 4,216,136 ', 'nomor baru nasabah 08293824', '05/09/2019/HP:ch rencana mau bayar  1jt , karna kmrin di suruh bayar1jt untuk cicilan nya , dan sudah mengiyahkan _x000D_\nHM: no telpon tidak terhubung WK: sudah tidak bkerja lg disana EC: diangkat namun tidak knal dgn suami si ch dan tdk pnya no nya_x000D_\n18/09/2019/ HP: ch sudah done pembyarn di 1jt, bulan kemrin 500rb_x000D_\n24/09/2019/ HP: ch mnta pngajuan di angka 8.5jt, jika masuk angka nya ch mau lunasi tagihan cc nya'),
(2, 'B5', '2020-04-11 07:40:26', 2147483647, 'DEDI SUSANTO', '1974-03-15', '08126560763', '0751-32230', '0751-27396', '751', 'rinawaty_lau@yahoo.com', 'SITI ZAITUN', 'M', 'ASRAMA TNI AD AUR DURI B5', 'RT.03/03', 'PRG TIMUR', 'PADANG TIMUR', 'ANDALAS SURYA JAYA PT', 'JL.RAYA PDG BKT KM 22', 'DUKU PDG', '', '', 'TATIK KUSTIATI', 'JL.DAMAR', 'MEDAN', '0000-00-00', 'Lunas', 'PROSPEK', '2012-11-30', '2013-09-02', '2014-07-23', 'Rp1,245,722', 'Rp5,000,000', ' Rp 2,354,370 ', ' Rp 7,002,401 ', '      081382560462 HPN    085893852127 HPCH       ', '03/08/2019/Anak CH: sudah di infokan untuk angka lunas nya di 4.5jt , dan di beri waktu sampai tgl 15 , nnti akan di infokan ke si ch malam ,_x000D_\n04/08/2019/ HP:no telpon  tidak di angkat Anak CH: no telpon tidak di angkat_x000D_\n05/08/2019/ HP: no telpon di alihkan saja anak CH: telpon di matikan saja_x000D_\n10/09/2019/ HP:sudah di isi surat nya oleh anak si ch tapi blm di kirim saja sampe saat ini_x000D_\n28/09/2019/ HP: ch sudah done pembyran di nominal 2jt sisa nya 2,5jt saat kmrin'),
(3, 'B5', '2020-04-11 08:12:01', 2147483647, 'ANDI HONG', '1976-02-12', '08136600078', '0751-810546', '0778-334091', '0778-457644', 'rinawaty_lau@yahoo.com', 'ACING', 'M', 'JL.NUSA JAYA EKA PUTRA BLOK I NO 15', 'SEI PANAS', '', '', 'BUMI INDAH BATAM PERMAI PT', 'BUMI INDAH BLOK 2 NO 14', '', '', '', 'UNTHUNG', 'LEGENDA MALAKA A3 NO 17', 'MEDAN', '0000-00-00', 'Investigasi', 'Valid', '2012-11-30', '2013-08-30', '2014-07-18', 'Rp3,044,505', 'Rp5,000,000', ' Rp 5,760,361 ', ' Rp 4,216,136 ', 'nomor baru nasabah 08293824', '05/09/2019/HP:ch rencana mau bayar  1jt , karna kmrin di suruh bayar1jt untuk cicilan nya , dan sudah mengiyahkan _x000D_\nHM: no telpon tidak terhubung WK: sudah tidak bkerja lg disana EC: diangkat namun tidak knal dgn suami si ch dan tdk pnya no nya_x000D_\n18/09/2019/ HP: ch sudah done pembyarn di 1jt, bulan kemrin 500rb_x000D_\n24/09/2019/ HP: ch mnta pngajuan di angka 8.5jt, jika masuk angka nya ch mau lunasi tagihan cc nya'),
(4, 'B5', '2020-04-11 08:12:01', 2147483647, 'DEDI SUSANTO', '1974-03-15', '08126560763', '0751-32230', '0751-27396', '0751-483565', 'rinawaty_lau@yahoo.com', 'SITI ZAITUN', 'M', 'ASRAMA TNI AD AUR DURI B5', 'RT.03/03', 'PRG TIMUR', 'PADANG TIMUR', 'ANDALAS SURYA JAYA PT', 'JL.RAYA PDG BKT KM 22', 'DUKU PDG', '', '', 'TATIK KUSTIATI', 'JL.DAMAR', 'MEDAN', '0000-00-00', 'Lunas', 'PROSPEK', '2012-11-30', '2013-09-02', '2014-07-23', 'Rp1,245,722', 'Rp5,000,000', ' Rp 2,354,370 ', ' Rp 7,002,401 ', '      081382560462 HPN    085893852127 HPCH       ', '03/08/2019/Anak CH: sudah di infokan untuk angka lunas nya di 4.5jt , dan di beri waktu sampai tgl 15 , nnti akan di infokan ke si ch malam ,_x000D_\n04/08/2019/ HP:no telpon  tidak di angkat Anak CH: no telpon tidak di angkat_x000D_\n05/08/2019/ HP: no telpon di alihkan saja anak CH: telpon di matikan saja_x000D_\n10/09/2019/ HP:sudah di isi surat nya oleh anak si ch tapi blm di kirim saja sampe saat ini_x000D_\n28/09/2019/ HP: ch sudah done pembyran di nominal 2jt sisa nya 2,5jt saat kmrin'),
(5, 'B5', '2020-04-11 08:12:01', 2147483647, 'BUDI REKSA', '1969-07-21', '08196018661', '0741-755519', '0711-540470', '0711-352824', 'rinawaty_lau@yahoo.com', 'H SA\'ADAH', 'F', 'JL.DI PANJAITAN NO 222', 'RT.06/05', 'BAGUS KUNING', 'PLAJU', 'ASKRINDO', 'JL.KAPTEN A RIVAI NO 45', '', '', '', 'SAZILI', '', 'MEDAN', '0000-00-00', 'Komplain', 'SOMASI', '2012-11-30', '2013-09-02', '2014-07-25', 'Rp3,938,646', 'Rp5,000,000', ' Rp 1,749,513 ', ' Rp 8,939,026 ', '                                                  ', '03/08/2019/HP: no telpon tidak di angkat2_x000D_\n05/08/2019/ HP; no telpon tidak di angkat_x000D_\n09/08/2019/ HP:ch hanya menjanjikan saja akan bayar_x000D_\n17/09/2019/ HP: no telpon tidak di angkat , dan saat itu di konfirmasi  masih nunggu dana nya_x000D_\n19/09/2019/ HP: sudah di konfirmasi beberapa kali ,namun si ch jadi sulit di telpon , di kirim pesan malah di abaikan 20/09/2019/ HP: no telpon tidak di angkat-angkat_x000D_\n23/09/2019/ HP: no telpon tidak di angkat-angkat_x000D_\n25/09/2019/ HP: no telpon tidak di angkat_x000D_\nWhatsapp tidak di balas_x000D_\n27/09/2019/ HP: no telpon tidak di angkat_x000D_\nWhatsapp tidak di balas'),
(6, 'B5', '2020-04-11 08:12:01', 2147483647, 'WAKIEPRIE NURHAYAT', '1958-08-23', '08126548557', '', '0711-518739', '0711-311345', 'rinawaty_lau@yahoo.com', 'HJ BAHUSLAH', 'M', 'KOMP PERMATA BIRU BLOK B NO.22', 'JL JEND A YANI', 'RT 16/05 16 ULU', 'SEBERANG ULU II', 'DINAS KEBUDAYAAN DAN PARIWISATA', 'JL DEMANG LEBAR DAUN KAV.IX', '', '', '', '', 'JL JEND A YANI LRG RIANG NO 27', 'MEDAN', '0000-00-00', 'Hard Contact', 'SKIP', '2012-11-30', '2013-09-06', '2014-08-04', 'Rp2,676,070', 'Rp5,000,000', ' Rp 1,327,775 ', ' Rp 2,719,657 ', ' WK JOBL                                          ', '03/09/2019/HP:ch ingin melunasi di angka 3.5jt dan tidak sanggup jika membyar di 5.1jt , namun sdh di infokan tdk bisa masuk untuk angka yang di inginkan HM: no telpon tidak ada _x000D_\n04/09/2019/ HP: ch jadi untuk bayar mnggu dpn 3,5jt, ch di suruh isi font pelunasan 4x byar, dan besok ch akan kirim nya NHP:082311501444_x000D_\n05/08/2019/ HP; ch nnti sore akan kirim kan font pengajuan keringanan nya_x000D_\n19/09/2019/ ARKO: sisa tagihan nasabah 3.5jt, dan sblmnya di beri angka sm arko 5.1jt tpi ada kesalahan sistem, HP: ch di beritahukan , tidak terima, dan skrng si ch marah'),
(7, 'B5', '2020-04-11 08:12:01', 2147483647, 'JOHAN KOK ANG', '1976-07-20', '08154105027', '061-4533370', '0741-34579', '0741-573409', 'rinawaty_lau@yahoo.com', 'MEI HUA', 'M', 'JL GUNUNG KIDUL NO.43', 'RT 05/02', 'TALANG BANJAR', 'JAMBI TIMUR', 'BINTANG SURYASINDO PT', 'JL ABDURAHMAN SALEH NO 39', 'PAAL MERAH LAMA', '', '', 'RICKY RIANDRY', 'KAMI 4', 'MEDAN', '0000-00-00', 'Hard Contact', 'SKIP', '2012-12-04', '2013-09-11', '2014-08-04', 'Rp6,159,217', 'Rp5,000,000', ' Rp 21,468,963 ', ' Rp 2,823,478 ', '087884097888                                      ', '05/09/2019/HP:no telpon tidak terhubung _x000D_\nHM: no telpon tidak terhubung WK: no telpon tidak terhubung EC: no telpon tidak di angkat _x000D_\n19/09/2019/ HP: smua no telpon si ch sulit di hububngi, di callback telpon jadi sibuk'),
(8, 'B5', '2020-04-11 08:12:01', 2147483647, 'ABDUL RAHIM CHAN', '1971-01-01', '0811632041', '0741-60665', '0751-26803', '0751-810546', 'rinawaty_lau@yahoo.com', 'ALIMAH', 'M', 'KP KELAWI NO 44', 'LUBUK LINTAH', 'KURANJI', '', 'POS INDONESIA PT', 'JL BAGINDO AZIZ CHAN NO 7', 'PASAR BARU', 'PADANG BARAT', '', 'JUNIMAR/MEME', 'GORDANG PERMAI BLOK Q 10', 'MEDAN', '0000-00-00', 'Hard Contact', 'SKIP', '2012-12-05', '2013-09-11', '2014-08-05', 'Rp3,011,793', 'Rp5,000,000', ' Rp 14,701,489 ', ' Rp 7,231,504 ', '   HPN087886990619                                ', '25/09/2019/ HP: no telpon tidak di angkat WA: belum ada respon pesan 26/09/2019/ HP: no telpon tidak di angkat WA: belum ada respon pesan_x000D_\n27/09/2019/ HP: ch blum  ada dana nya, nntii jika sudah ada dana nya akan di bayarkan_x000D_\n28/09/2019/ HP: no telpon tidak di angkat2 , di kirim pesan tidak ada respon'),
(9, 'B5', '2020-04-11 08:12:01', 2147483647, 'RIKA YOLANDA', '1980-01-12', '0816395221', '0741-64696', '0751-445352', '0751-32230', 'rinawaty_lau@yahoo.com', 'NISMAR IDRUS', 'F', 'JL ALAI TIMUR NO 12A', 'RT 03/02', 'AP KOPI', 'PADANG UTARA', 'SURIATAMA MINANG LESTARI PT', 'JL PERMINDO NO 40', '', '', '', 'TATIK KUSTIATI', 'JL DR SUTOMO NO 42', 'MEDAN', '0000-00-00', 'Hard Contact', 'SKIP', '2012-12-07', '2013-09-12', '2014-08-06', 'Rp3,756,051', 'Rp5,000,000', ' Rp 4,216,136 ', ' Rp 11,558,870 ', 'BYK OMONG, BYK LAGU  0811809514                   ', '12/09/2019/ HP: hari jumat ch mau bayar tagihan nya , nnti langsung di kabari jika sudah masuk cicilan_x000D_\n16/09/2019/ HP: ch rencana bayar hari ini, jika sudah bayar akan di kabari langsung/ done payment 1jt, angsuran ke2'),
(10, 'B5', '2020-04-11 08:12:01', 2147483647, 'ABDUL RAZAK', '1982-01-04', '0811698869', '0741-25600#', '', '0741-755519', 'rinawaty_lau@yahoo.com', 'SISWATY', 'M', 'JL HAJI ADAM MALIK', 'PERUMAHAN CITRA BERINGIN REGENCY', 'BLOK F NO 12 RT 023', 'THE HOK - JAMBI SELATAN', 'CREDIT PLUS', 'JL HAYAM WURUK NO 1D', 'JELUTUNG', '.', '.', 'TOMMY LUMANAW', 'JL KOL MIKUKUN NO 56', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-07', '2013-09-12', '2014-08-06', 'Rp8,573,325', 'Rp7,000,000', ' Rp 7,002,401 ', ' Rp 3,563,747 ', ' 2 CC / 08111908513                               ', '19/09/2019/ SPS: sudah di sampaikan sama istri nya untuk melakukan pembyaran sebelum tgl 29 _x000D_\n25/09/2019/ HP: no telpon tidak di angkat WA: belum ada respon pesan _x000D_\n27/09/2019/ HP: ch sudah masuk pembyran kemarin malam, untuk sisa nya tinggal 1x bayar lagi di bulan depan'),
(11, 'B5', '2020-04-11 08:12:01', 2147483647, 'HAIRI AGUS', '1967-08-21', '0811691116', '0743-23295', '0711-324328', '', 'rinawaty_lau@yahoo.com', 'MASRYATI', 'M', 'PERUM PURI SEJAHTERA', 'JL SUKATANI BLOK F NO 6', 'RT 31 SUKAMAJU', 'SAKO KENTEN', 'PARIT PADANG GLOBAL PT', 'SUKABANGUN II JL MARZUKI NO 2257', 'RT 07 RW 02', 'SUKA BANGUN', 'SUKARAME', '05065912EVIE', 'JL PROF KAFRAN PANE NO 2 A', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-07', '2013-09-18', '2014-08-08', 'Rp3,260,579', 'Rp7,000,000', ' Rp 8,939,026 ', ' Rp 2,692,569 ', '                                                  ', '10/09/2019/HP:no telpon tidak diangkat_x000D_\nHM: no telpon tidak di angkat WK:no telpon tidak terhubung EC:no telpon tidak terhubung_x000D_\n25/09/2019/HP:no telpon tidak diangkat_x000D_\nHM: no telpon tidak di angkat WK:no telpon tidak terhubung EC:no telpon tidak terhubung/ ch jadi bayar nya nnti di tanggal 27 di angka 1jt_x000D_\n28/09/2019/ HP: ch sudah masuk pembyran kemrin malam jam 8 melalui atm link, untuk bulan depan akan masuk angsuran di 500rb/bln'),
(12, 'B5', '2020-04-11 08:12:01', 2147483647, 'RATNA DEWI', '1980-12-11', '0811661509', '0751-27153', '061-8218793', '061-4533370', 'iwan.syahrial@gmail.com', 'AMALIA', 'F', 'JL FLAMBOYAN RAYA NO 107', 'RT 05/02 LINK III', 'TJ SELAMAT', 'MEDAN TUNTUNGAN', 'MENARA DANA SEJAHTERA PT', 'JL ORION NO 48', '.', 'PETISAN', 'MEDAN PETISAN', 'TIN TIN', 'JL FLAMBOYAN RAYA NO 110', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-07', '2013-09-19', '2014-08-08', 'Rp3,986,918', 'Rp7,000,000', ' Rp 2,719,657 ', ' Rp 1,122,582 ', 'RESIGN  HPN 081382520111                          ', '06/09/2019/HP:no telpon tidak terhubung_x000D_\nHM:no telpo tidak ada WK:no telpon tidak terhubung_x000D_\n EC:no telpon tidak terhubung_x000D_\nNHP : terbaru CH_x000D_\nFB: https://www.facebook.com/mimyviolet.hen_x000D_\nIG: https://www.instagram.com/deyarisis/_x000D_\n082281746718_x000D_\nHP: ch ambil cicilan yang 6.5jt , bulan ini masuk 2 jt dlu sisa nya 4.5jt bln depan  , 10.2jt ang osball nya_x000D_\n16/09/2019/ HP: no telpon tidak di angkat, chj blm ada konfirmasi kembali sampai saat ini_x000D_\n20/09/2019/ HP: no telpon tidak di angkat2, di inbox tdk balas lagi pesan_x000D_\n27/09/2019/ HP: no telpon tidak di angkat'),
(13, 'B5', '2020-04-11 08:12:01', 2147483647, 'DODIK TRI SUBAGIONO', '1963-08-28', '0811948284', '061-7852895', '.', '0741-60665', 'iwan.syahrial@gmail.com', 'SUINDIYAH', 'M', 'PERUM PURI MAYANG CLUSTER BOUGENVILLE', 'BLOK J NO 9', 'BUNGO TIMUR', 'MUARA BUNGO', 'BANK BPD JAMBI (KABID RISK MANAGEMENT)', 'GD BANK BPD JAMBI LT 3', 'JL JEND A YANI NO 18', 'TELANAIPURA', '.', 'SITI THERESA M', 'PERUM AL JL GOLF X NO 10', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-10', '2013-10-01', '2014-08-14', 'Rp11,368,217', 'Rp7,000,000', ' Rp 2,823,478 ', ' Rp 3,563,747 ', ' 087786466019 / 087885263924 EC                   ', '06/09/2019/HP:no telpon tidak di angkat _x000D_\nHM: no telpon tidak terhubung WK: ch sudah  tidak bkerja lg disana sjak 2018 EC:no telpon sdang tidak aktif_x000D_\n18/09/2019/ HP: no telpon tidak di angkat di search data tidak ada data tambhan nya_x000D_\n20/09/2019/ HP: ch rencana mau ambil lunas untuk masalah tagihan nya, di arahkan bulan inii masuk 1jt dlu, sisa nya akan di cicil 500rb/bln_x000D_\n21/09/2019/ HP; ch sudah kirim persyratan nya untuk ikut program cicilan_x000D_\n25/09/2019/ HP: belum ada respon dari whatsapp nya si ch , ditelpon tidak di angkat_x000D_\n27/09/2019/ HP: ch sdang mncari dana nya dlu , jika sudah dapat pinjaman dari teman nya nnti akan di kabari'),
(14, 'B5', '2020-04-11 08:12:01', 2147483647, 'VANNY YUSNITA', '1976-06-06', '08566658788', '061-6857257', '.', '0741-64696', 'iwan.syahrial@gmail.com', 'AMINAH', 'F', 'JL DARMAWANGSA NO 55', 'RT 16', 'KENALI ASAM ATAS', 'KOTA BARU', 'KOPERASI TELKOMSEL', 'JL SUMANTRI BROJONEGORO NO 5', '.', 'PAYO LEBAR', 'JELUTUNG', 'HANNY CIMONE', 'JL SEROJA V NO 32', 'MEDAN', '0000-00-00', 'Investigasi', 'SOMASI', '2012-12-10', '2013-11-13', '2014-08-15', 'Rp2,608,750', 'Rp7,000,000', ' Rp 7,231,504 ', ' Rp 2,692,569 ', 'HM=WK                                             ', '09/09/2019/ HP: no telpon tidak terhubung_x000D_\nHM: no telpon tidak ada WK: no telpon salah sambung EC: ec baru 1x terima telpon dri bank, ec akan bntu untuk konfirmasi sm si ch langsung agar di beri tahu bagaimana klanjutan pembyaran nya_x000D_\n08159919246 WA si ch_x000D_\n13/09/2019/ HP: ch sudah krim  persyratan untuk ambil pelunasan/ pelunasan berthap, dan ch mnta waktu mau ambil opsi pembyaran sperti apa_x000D_\n16/09/2019/ HP: ch akan bayar 57jt di bayar 6x bayar_x000D_\n17/09/2019/ HP: ch sudah done pembyaran 5jt, sisa nya tgl 27 di 4,5jt_x000D_\n27/09/2019/ HP: nanti jika sudah melakukan pembyran , ch akan kabari langsung'),
(15, 'B5', '2020-04-11 08:12:01', 2147483647, 'SANTOSO AGOENG PRIBADI', '1961-08-21', '08526608688', '0741-701213', '0741-755328', '0741-25600#', 'iwan.syahrial@gmail.com', 'RATNA DJOEWITA', 'M', 'JL PROF M YAMIN NO 08', 'RT 29', 'LEBAK BANDUNG', 'JELUTUNG', 'TRITAMA CAHAYA ABADI PT', 'JL GATOT SOBROTO 92-98 LT 2', '.', '.', '.', 'ANGGENI', 'HOTEL ABADI JL GATOT SUBROTO NO 92-98', 'MEDAN', '0000-00-00', 'Cicilan', 'PROSPEK', '2012-12-10', '2013-11-14', '2014-08-18', 'Rp1,738,246', 'Rp7,000,000', ' Rp 11,558,870 ', ' Rp 2,692,569 ', 'CF:02174703388                                    ', '10/09/2019/ HP:no telpon tidak di angkat_x000D_\nHM: no telpon tidak di angkat WK: no telpon tidak terhubung EC: no telpon tidak di angkat_x000D_\n18/09/2019/ HP:no telpon tidak di angkat _x000D_\nHM: no telpon tidak di angkat EC: no telpon tidak diangkat 19/09/2019/ HP:no telpon tidak di angkat _x000D_\nHM: no telpon tidak di angkat EC: no telpon tidak diangkat diangkat_x000D_\n21/09/2019/ HP; sudah di kirim rincian tagihan nya namun tidak ada respon pesandari si ch_x000D_\nHM: no telpon tidak di angkat/ _x000D_\nch rencana mau datang ke BNI hari senin, mau melunasi _x000D_\n23/09/2019/ anak CH: sudah di sampaikan ke si ch nnti akan bertemu dgn pak dico jika nnti sudah melakukan penyelesai an,_x000D_\nch sudah bayar lunas di angka cardlink 10.343.827'),
(16, 'B5', '2020-04-11 08:12:01', 2147483647, 'ABDUL RAZAK', '1982-01-04', '0811643806', '061-6855650', '0741-60373', '0743-23295', 'iwan.syahrial@gmail.com', 'KARSINEM', 'M', 'JL HS BACHRUN  NO 32', 'RT 25/08', 'PAYO LEBAR', 'JELUTUNG', 'BANK RAKYAT INDONESIA TBK PT', 'DESA SUKA MAKMUR JALUR IIIA', '.', 'SUKA MAKMUR', 'SUNGAI BAHAR', 'ANE PUTRI YANANTA', 'JL PATTIMURA LRG KENALI JAYA NO 64', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-07', '2013-09-12', '2014-08-06', 'Rp8,573,325', 'Rp7,000,000', ' Rp 7,002,401 ', ' Rp 3,563,747 ', 'RESIGN                                            ', '10/09/2019/ HP:no telpon tidak di angkat // no hp terhubng ke kedai pejualan coffea_x000D_\nHM: no telpon EC: ch skrng tinggal di jogja , sedang melanjutkan study S2 nya , dan bulan depan akan balik lagi ke jakarta, ch di jogja berjualan_x000D_\nkementrian kehutanan gatoto subroto_x000D_\nEMAIL: djudo.siapasuka@gmail.com_x000D_\nIG SPS: https://www.instagram.com/vikatries/_x000D_\nIG:https://www.instagram.com/gibran_benjamin/tagged/085716459157 no sps_x000D_\n13/09/2019/ HP:ch sudah ada deal angka di 2jt/bln , total tagihan di 10jt , osball 15jt_x000D_\n17/09/2019/ HP: ch sudah kirim font pngajuan keringanan untuk pembyaran pelunasan bertahap_x000D_\n24/09/2019/ HP: ch sudah bayar , deal di angka 10jt , pembyaran di 5x bayar'),
(17, 'B5', '2020-04-11 08:12:01', 2147483647, 'HAIRI AGUS', '1967-08-21', '08136246630', '0711-352824', '0751-787534', '0751-27153', 'iwan.syahrial@gmail.com', 'RAIBA', 'M', 'KOMP PESONA FILANO I EE S NO 10', '.', 'PISANG', 'PAUH', 'ASDP INDONESIA FERRY PT (BAG KASIR)', 'JL PERINTIS KEMERDEKAAN NO 4', '.', '.', '.', 'RITA RUMONDANG', 'JL PASAR BARU NO 52', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-07', '2013-09-18', '2014-08-08', 'Rp3,260,579', 'Rp7,000,000', ' Rp 8,939,026 ', ' Rp 2,692,569 ', 'WK RESIGN PER DESEMBER 2016                       ', '11/09/2019/ HP:no telpon tidak diangkat_x000D_\nHM: no telpon tidak ada WK:no telpon tidak diangkat _x000D_\nEC:no telpon tidak terhubung_x000D_\n17/09/2019/ HP: no telpon tidak di angkat_x000D_\n19/09/2019/ HP: ch akan bayar tagihan nya nnti nunggu rumah nya terjual, jika sdah di jual ch akanlunasi langsung_x000D_\n21/09/2019/ HP: sudah di konfirmasi kan lagi kpd si ch, ch rencana mau masuk dlu pembyaran sblum tanggal 25,jika dana sudah ada, ch akan bayar lunas  karna masih tunggu penjualan rumah_x000D_\nsens.indonesia@gmail.com_x000D_\nno WK: 02129888200_x000D_\n25/09/2019/ HP: no telpon tidak di angkat WK:no telpon tidak di angkat _x000D_\n27/09/2019/ HP: ch masih cari dana tambhan nya jika sudah ada akan di setorkan_x000D_\n28/09/2019: HP: ch sudah bayar kan tagihan nya namun melalui atm BCA di nominal 500rb , dan kling , ch akan ikut cicilan 500rb/bln'),
(18, 'B5', '2020-04-11 08:12:01', 2147483647, 'RATNA DEWI', '1980-12-11', '06177747342', '0711-311345', '061-6631353', '061-7852895', 'iwan.syahrial@gmail.com', 'KRISTINA', 'M', 'JL IBRAHIM UMAR NO 20', 'RT 09/05', 'SEI KERA HILIR II', 'MEDAN PERJUANGAN', 'KARYA UTAMA GRAHA PT (MGR PERENCANAAN)', 'JL KARYA JAYA NO 215', '.', 'PKL MANSYUR', 'MEDAN', 'ANTON', 'JL KARYA DARMA NO 86 A', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-07', '2013-09-19', '2014-08-08', 'Rp3,986,918', 'Rp7,000,000', ' Rp 2,719,657 ', ' Rp 1,122,582 ', '', '17/09/2019/ HP: ch akan bayar nanti tgl 20an untuk melakukan pelunasan di angka 2,5jt , nnti jika akan bayar, akan konfirmasi dahulu_x000D_\n25/09/2019/ HP: ch belum ada respon untuk bayar tagihan nya, masiih blum jelas akan bayar_x000D_\n26/09/2019/ HP: no telpon tidak aktif , di kirim pesan tidak ada respon saja'),
(19, 'B5', '2020-04-11 08:12:01', 2147483647, 'DODIK TRI SUBAGIONO', '1963-08-28', '08153030036', '0741-573409', '061-6857257', '061-6857257', 'iwan.syahrial@gmail.com', 'SAMIAH', 'M', 'JL PALTINA RAYA NO 9', 'TITI PAPAN', 'RENGAS PULAU', 'MEDAN MARELAN', 'JD SERVICE', 'JL PLATINA RAYA NO 9', 'TITI PAPAN', 'RENGAS PULAU', 'MEDAN MARELAN', 'ZULFAN', 'JL PLATINA RAYA GG KELUARGA NOTO NO 12', 'MEDAN', '0000-00-00', 'Investigasi', 'EXTEND', '2012-12-10', '2013-10-01', '2014-08-14', 'Rp11,368,217', 'Rp7,000,000', ' Rp 2,823,478 ', ' Rp 3,563,747 ', '    WKN 0215730356                                ', '06/09/2019/HP:no telpon tidak di angkat _x000D_\nHM: no telpon tidak terhubung WK: ch sudah  tidak bkerja lg disana sjak 2018 EC:no telpon sdang tidak aktif_x000D_\n18/09/2019/ HP: no telpon tidak di angkat di search data tidak ada data tambhan nya_x000D_\n20/09/2019/ HP: ch rencana mau ambil lunas untuk masalah tagihan nya, di arahkan bulan inii masuk 1jt dlu, sisa nya akan di cicil 500rb/bln_x000D_\n21/09/2019/ HP; ch sudah kirim persyratan nya untuk ikut program cicilan_x000D_\n25/09/2019/ HP: belum ada respon dari whatsapp nya si ch , ditelpon tidak di angkat_x000D_\n27/09/2019/ HP: ch sdang mncari dana nya dlu , jika sudah dapat pinjaman dari teman nya nnti akan di kabari'),
(20, 'B5', '2020-04-11 08:12:01', 2147483647, 'VANNY YUSNITA', '1976-06-06', '08196008762', '0751-810546', '', '0741-701213', 'iwan.syahrial@gmail.com', 'N/A', 'M', 'JL ANGGREK PERMAI BLOK J NO 33', 'RW 00', 'PANGKALAN PETAI', '', 'JAYA KENCANA MOTOR', 'JL A RAHMAN SALEH NO 25', 'RT 06', 'PASIR PUTIH', 'JAMBI SELATAN', 'LIENDRA BONGSU', 'TOKO AHOK', 'MEDAN', '0000-00-00', 'Investigasi', 'SOMASI', '2012-12-10', '2013-11-13', '2014-08-15', 'Rp2,608,750', 'Rp7,000,000', ' Rp 7,231,504 ', ' Rp 2,692,569 ', ' 087776645159 WF                                  ', '09/09/2019/ HP: no telpon tidak terhubung_x000D_\nHM: no telpon tidak ada WK: no telpon salah sambung EC: ec baru 1x terima telpon dri bank, ec akan bntu untuk konfirmasi sm si ch langsung agar di beri tahu bagaimana klanjutan pembyaran nya_x000D_\n08159919246 WA si ch_x000D_\n13/09/2019/ HP: ch sudah krim  persyratan untuk ambil pelunasan/ pelunasan berthap, dan ch mnta waktu mau ambil opsi pembyaran sperti apa_x000D_\n16/09/2019/ HP: ch akan bayar 57jt di bayar 6x bayar_x000D_\n17/09/2019/ HP: ch sudah done pembyaran 5jt, sisa nya tgl 27 di 4,5jt_x000D_\n27/09/2019/ HP: nanti jika sudah melakukan pembyran , ch akan kabari langsung'),
(21, 'B5', '2020-04-11 08:12:01', 2147483647, 'SANTOSO AGOENG PRIBADI', '1961-08-21', '08154046091', '0751-32230', '061-7762909', '061-6855650', 'iwan.syahrial@gmail.com', 'MARIAM LAWU', 'F', 'KOMP TAMAN PLATINA BLOK D NO 7', 'JL PALTINA DALAM TITIPAPAN', 'TITIPAPAN', 'MEDAN DEU', 'ES HUPINDO PT - KASIR', 'KAWASAN INDUSTRI MEDAN', 'JL PULAU DALU NO 2', 'MABAR', '.', 'MERIWATY', 'KOMP TAMAN PLATINA BLOK B NO 12A', 'MEDAN', '0000-00-00', 'Cicilan', 'PROSPEK', '2012-12-10', '2013-11-14', '2014-08-18', 'Rp1,738,246', 'Rp7,000,000', ' Rp 11,558,870 ', ' Rp 2,692,569 ', '                                                  ', '10/09/2019/ HP:no telpon tidak di angkat_x000D_\nHM: no telpon tidak di angkat WK: no telpon tidak terhubung EC: no telpon tidak di angkat_x000D_\n18/09/2019/ HP:no telpon tidak di angkat _x000D_\nHM: no telpon tidak di angkat EC: no telpon tidak diangkat 19/09/2019/ HP:no telpon tidak di angkat _x000D_\nHM: no telpon tidak di angkat EC: no telpon tidak diangkat diangkat_x000D_\n21/09/2019/ HP; sudah di kirim rincian tagihan nya namun tidak ada respon pesandari si ch_x000D_\nHM: no telpon tidak di angkat/ _x000D_\nch rencana mau datang ke BNI hari senin, mau melunasi _x000D_\n23/09/2019/ anak CH: sudah di sampaikan ke si ch nnti akan bertemu dgn pak dico jika nnti sudah melakukan penyelesai an,_x000D_\nch sudah bayar lunas di angka cardlink 10.343.827'),
(22, 'B5', '2020-04-11 08:12:01', 0, '', '0000-00-00', '', '', '', '', '', '', '', 'JL TERNAK I NO 29 LK VI', '.', 'POLONIA', 'MEDAN POLONIA', '', '', '', '', '', '', '', 'MEDAN', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databank`
--
ALTER TABLE `databank`
  ADD PRIMARY KEY (`IDBank`);

--
-- Indexes for table `datanasabah`
--
ALTER TABLE `datanasabah`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datanasabah`
--
ALTER TABLE `datanasabah`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
