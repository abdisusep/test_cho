/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_test`;

/*Table structure for table `administrasi_umum` */

DROP TABLE IF EXISTS `administrasi_umum`;

CREATE TABLE `administrasi_umum` (
  `id_administrasi_umum` int(11) NOT NULL AUTO_INCREMENT,
  `nama_administrasi_umum` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_administrasi_umum`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `administrasi_umum` */

insert  into `administrasi_umum`(`id_administrasi_umum`,`nama_administrasi_umum`,`deleted`) values 
(21,'CEO','0'),
(22,'HRD','0'),
(23,'Designer','0'),
(24,'Photographer','0'),
(25,'HRD','0'),
(26,'1123','1');

/*Table structure for table `agama` */

DROP TABLE IF EXISTS `agama`;

CREATE TABLE `agama` (
  `id_agama` int(11) NOT NULL AUTO_INCREMENT,
  `nama_agama` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `agama` */

insert  into `agama`(`id_agama`,`nama_agama`,`deleted`) values 
(30,'Islam','0'),
(31,'Kristen','0'),
(32,'Katholik','0'),
(33,'Hindu','0'),
(34,'Budha','0'),
(35,'Konghucu','0');

/*Table structure for table `aktivitas_lain` */

DROP TABLE IF EXISTS `aktivitas_lain`;

CREATE TABLE `aktivitas_lain` (
  `id_aktivitas_lain` int(11) NOT NULL AUTO_INCREMENT,
  `nama_aktivitas_lain` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_aktivitas_lain`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `aktivitas_lain` */

insert  into `aktivitas_lain`(`id_aktivitas_lain`,`nama_aktivitas_lain`,`deleted`) values 
(15,'Freelance','0'),
(16,'Kuliah','0'),
(17,'Tidak ada','0');

/*Table structure for table `daftar_bagian` */

DROP TABLE IF EXISTS `daftar_bagian`;

CREATE TABLE `daftar_bagian` (
  `id_daftar_bagian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_daftar_bagian` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_daftar_bagian`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `daftar_bagian` */

insert  into `daftar_bagian`(`id_daftar_bagian`,`nama_daftar_bagian`,`deleted`) values 
(13,'Web Developer','0'),
(14,'Design Graphic','0'),
(15,'Marketing','0'),
(16,'Operator','0'),
(17,'Security','0');

/*Table structure for table `gaji_pokok` */

DROP TABLE IF EXISTS `gaji_pokok`;

CREATE TABLE `gaji_pokok` (
  `id_gaji_pokok` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(40) DEFAULT NULL,
  `idr` int(11) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_gaji_pokok`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `gaji_pokok` */

insert  into `gaji_pokok`(`id_gaji_pokok`,`kota`,`idr`,`deleted`) values 
(16,'Karanganyar',2065000,'0'),
(17,'Surakarta',2036000,'0'),
(18,'Bandung',3775000,'0'),
(19,'Kota Salatiga',1234567,'0'),
(20,'Jogja',1000000,'0');

/*Table structure for table `golongan` */

DROP TABLE IF EXISTS `golongan`;

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_golongan` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

/*Data for the table `golongan` */

insert  into `golongan`(`id_golongan`,`nama_golongan`,`deleted`) values 
(19,'Golongan I','0'),
(20,'Golongan II','0'),
(21,'Golongan III','0'),
(22,'Golongan IV','0'),
(23,'Golongan V','0'),
(24,'Golongan VI','0'),
(25,'Golongan VII','0');

/*Table structure for table `golongan_darah` */

DROP TABLE IF EXISTS `golongan_darah`;

CREATE TABLE `golongan_darah` (
  `id_golongan_darah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_golongan_darah` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_golongan_darah`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

/*Data for the table `golongan_darah` */

insert  into `golongan_darah`(`id_golongan_darah`,`nama_golongan_darah`,`deleted`) values 
(27,'A','0'),
(28,'B','0'),
(29,'AB','0'),
(30,'O','0'),
(31,'ABC','0');

/*Table structure for table `informasi_umum` */

DROP TABLE IF EXISTS `informasi_umum`;

CREATE TABLE `informasi_umum` (
  `id_informasi_umum` int(11) NOT NULL AUTO_INCREMENT,
  `nama_informasi_umum` varchar(40) DEFAULT NULL,
  `aktif` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_informasi_umum`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `informasi_umum` */

insert  into `informasi_umum`(`id_informasi_umum`,`nama_informasi_umum`,`aktif`) values 
(10,'Data Pribadi','1'),
(11,'Data Fisik','1'),
(12,'Data Media Sosial','1'),
(13,'Pengalaman Sebelumnya','1'),
(14,'Data Pendaftaran','1'),
(15,'Data Keluarga','1'),
(16,'Upload Data','1');

/*Table structure for table `jenis_kelamin` */

DROP TABLE IF EXISTS `jenis_kelamin`;

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_kelamin` varchar(20) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_jenis_kelamin`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jenis_kelamin` */

insert  into `jenis_kelamin`(`id_jenis_kelamin`,`nama_jenis_kelamin`,`deleted`) values 
(49,'Laki-laki','0'),
(50,'Perempuan','0'),
(51,'Lainnya','0');

/*Table structure for table `jenis_pekerjaan` */

DROP TABLE IF EXISTS `jenis_pekerjaan`;

CREATE TABLE `jenis_pekerjaan` (
  `id_jenis_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_pekerjaan` varchar(20) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_jenis_pekerjaan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jenis_pekerjaan` */

insert  into `jenis_pekerjaan`(`id_jenis_pekerjaan`,`nama_jenis_pekerjaan`,`deleted`) values 
(8,'Marketing','0'),
(9,'Product','0'),
(10,'Developer','0');

/*Table structure for table `jumlah_tanggungan` */

DROP TABLE IF EXISTS `jumlah_tanggungan`;

CREATE TABLE `jumlah_tanggungan` (
  `id_jumlah_tanggungan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jumlah_tanggungan` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_jumlah_tanggungan`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jumlah_tanggungan` */

insert  into `jumlah_tanggungan`(`id_jumlah_tanggungan`,`nama_jumlah_tanggungan`,`deleted`) values 
(11,'0 Tanggungan','0'),
(12,'1 Tanggungan','0'),
(13,'2 Tanggungan','0'),
(14,'3 Tanggungan','0'),
(15,'Lebih dari 3 Tanggungan','0');

/*Table structure for table `kepintaran` */

DROP TABLE IF EXISTS `kepintaran`;

CREATE TABLE `kepintaran` (
  `id_kepintaran` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kepintaran` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_kepintaran`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kepintaran` */

insert  into `kepintaran`(`id_kepintaran`,`nama_kepintaran`,`deleted`) values 
(16,'Tipe Musikal','0'),
(17,'Tipe Logika Matematika','0'),
(18,'Tipe Visual - Spasial','0'),
(19,'Tipe Kinestetik','0'),
(20,'Tipe Intrapersonal','0'),
(21,'Tipe Interpersonal','0'),
(22,'Tipe Naturalistik','0'),
(23,'Tipe Verbal - Linguistik','0');

/*Table structure for table `kepribadian` */

DROP TABLE IF EXISTS `kepribadian`;

CREATE TABLE `kepribadian` (
  `id_kepribadian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kepribadian` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_kepribadian`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kepribadian` */

insert  into `kepribadian`(`id_kepribadian`,`nama_kepribadian`,`deleted`) values 
(15,'Analisis - Artsitek (INTJ)','0'),
(16,'Analisis - Ahli Logika (INTP)','0'),
(17,'Analisis - Komandan (ENTJ)','0'),
(18,'Analisis - Pendebat (ENTP)','0');

/*Table structure for table `kontrak` */

DROP TABLE IF EXISTS `kontrak`;

CREATE TABLE `kontrak` (
  `id_kontrak` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `mulai_kontrak` date DEFAULT NULL,
  `habis_kontrak` date DEFAULT NULL,
  `ttd1` varchar(80) DEFAULT NULL,
  `ttd2` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_kontrak`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kontrak` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(20) DEFAULT NULL,
  `nama_menu` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `menu` */

insert  into `menu`(`id_menu`,`kode`,`nama_menu`) values 
(1,'a1','Input SDM Tahap 1'),
(2,'a2','Format Dasar Payroll'),
(3,'a3','Format PTKP'),
(4,'a4','Format BPJS'),
(5,'a5','PPh 21'),
(6,'a6','Ketentuan Jam Kerja'),
(7,'a7','Kategori Posisi'),
(8,'a8','Informasi Khusus');

/*Table structure for table `pendidikan` */

DROP TABLE IF EXISTS `pendidikan`;

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pendidikan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pendidikan` */

insert  into `pendidikan`(`id_pendidikan`,`nama_pendidikan`) values 
(1,'SD'),
(2,'SMP/Mts'),
(3,'SMA/SMK/MA'),
(4,'D3'),
(5,'D4/S1'),
(6,'S2'),
(7,'S3');

/*Table structure for table `penghasilan_ortu` */

DROP TABLE IF EXISTS `penghasilan_ortu`;

CREATE TABLE `penghasilan_ortu` (
  `id_penghasilan_ortu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penghasilan_ortu` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_penghasilan_ortu`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `penghasilan_ortu` */

insert  into `penghasilan_ortu`(`id_penghasilan_ortu`,`nama_penghasilan_ortu`,`deleted`) values 
(11,'Rp1,000,000 - 2,000,000','0'),
(12,'Lebih dari Rp2,000,000','0');

/*Table structure for table `penjualan` */

DROP TABLE IF EXISTS `penjualan`;

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penjualan` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `penjualan` */

insert  into `penjualan`(`id_penjualan`,`nama_penjualan`,`deleted`) values 
(18,'SPV Marketing','0'),
(19,'SPV C.Service','0'),
(20,'Marketing','1'),
(21,'SPV WEB','1');

/*Table structure for table `riwayat_penyakit` */

DROP TABLE IF EXISTS `riwayat_penyakit`;

CREATE TABLE `riwayat_penyakit` (
  `id_riwayat_penyakit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_riwayat_penyakit` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_riwayat_penyakit`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `riwayat_penyakit` */

insert  into `riwayat_penyakit`(`id_riwayat_penyakit`,`nama_riwayat_penyakit`,`deleted`) values 
(18,'Asma','0'),
(19,'Magh','0'),
(20,'Tidak ada','0');

/*Table structure for table `riwayat_versi` */

DROP TABLE IF EXISTS `riwayat_versi`;

CREATE TABLE `riwayat_versi` (
  `id_riwayat_versi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(40) DEFAULT NULL,
  `sub_menu` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_riwayat_versi`)
) ENGINE=InnoDB AUTO_INCREMENT=730 DEFAULT CHARSET=utf8mb4;

/*Data for the table `riwayat_versi` */

insert  into `riwayat_versi`(`id_riwayat_versi`,`tanggal`,`sub_menu`) values 
(558,'18 May 2022','a1b1'),
(559,'18 May 2022','a1b1'),
(560,'18 May 2022','a1b1'),
(561,'18 May 2022','a1b2'),
(562,'18 May 2022','a1b2'),
(563,'18 May 2022','a1b2'),
(564,'18 May 2022','a1b2'),
(565,'18 May 2022','a1b2'),
(566,'18 May 2022','a1b2'),
(567,'18 May 2022','a1b3'),
(568,'18 May 2022','a1b3'),
(569,'18 May 2022','a1b3'),
(570,'18 May 2022','a1b3'),
(571,'18 May 2022','a1b4'),
(572,'18 May 2022','a1b4'),
(573,'18 May 2022','a1b4'),
(574,'18 May 2022','a1b4'),
(575,'18 May 2022','a1b5'),
(576,'18 May 2022','a1b5'),
(577,'18 May 2022','a1b5'),
(578,'18 May 2022','a1b5'),
(579,'18 May 2022','a1b5'),
(580,'18 May 2022','a1b6'),
(581,'18 May 2022','a1b6'),
(582,'18 May 2022','a1b6'),
(583,'18 May 2022','a1b7'),
(584,'18 May 2022','a1b7'),
(585,'18 May 2022','a1b8'),
(586,'18 May 2022','a1b8'),
(587,'18 May 2022','a1b8'),
(588,'18 May 2022','a1b9'),
(589,'18 May 2022','a1b9'),
(590,'18 May 2022','a1b9'),
(591,'18 May 2022','a1b11'),
(592,'18 May 2022','a1b11'),
(593,'18 May 2022','a1b12'),
(594,'18 May 2022','a1b12'),
(595,'18 May 2022','a1b12'),
(596,'18 May 2022','a1b12'),
(597,'18 May 2022','a1b13'),
(598,'18 May 2022','a1b13'),
(599,'18 May 2022','a1b10'),
(600,'18 May 2022','a1b10'),
(601,'18 May 2022','a1b13'),
(602,'18 May 2022','a1b13'),
(603,'18 May 2022','a1b14'),
(604,'18 May 2022','a1b14'),
(605,'18 May 2022','a1b14'),
(606,'18 May 2022','a2b1'),
(607,'18 May 2022','a2b1'),
(608,'18 May 2022','a2b1'),
(609,'18 May 2022','a2b2'),
(610,'18 May 2022','a2b2'),
(611,'18 May 2022','a2b2'),
(612,'18 May 2022','a2b2'),
(613,'18 May 2022','a2b2'),
(614,'18 May 2022','a2b2'),
(615,'18 May 2022','a2b2'),
(616,'18 May 2022','a2b2'),
(617,'18 May 2022','a2b2'),
(618,'18 May 2022','a2b2'),
(619,'18 May 2022','a2b2'),
(620,'18 May 2022','a2b2'),
(621,'18 May 2022','a2b2'),
(622,'18 May 2022','a2b2'),
(623,'18 May 2022','a2b2'),
(624,'18 May 2022','a2b2'),
(625,'18 May 2022','a2b2'),
(626,'18 May 2022','a2b2'),
(627,'18 May 2022','a2b2'),
(628,'18 May 2022','a2b2'),
(629,'18 May 2022','a7b1'),
(630,'18 May 2022','a7b1'),
(631,'18 May 2022','a7b1'),
(632,'18 May 2022','a7b2'),
(633,'18 May 2022','a7b2'),
(634,'18 May 2022','a7b2'),
(635,'18 May 2022','a7b2'),
(636,'18 May 2022','a8b1'),
(637,'18 May 2022','a8b1'),
(638,'18 May 2022','a8b1'),
(639,'18 May 2022','a8b1'),
(640,'18 May 2022','a8b2'),
(641,'18 May 2022','a8b2'),
(642,'18 May 2022','a8b3'),
(643,'18 May 2022','a8b3'),
(644,'18 May 2022','a8b3'),
(645,'18 May 2022','a1b15'),
(646,'18 May 2022','a1b15'),
(647,'18 May 2022','a1b15'),
(648,'18 May 2022','a1b15'),
(649,'18 May 2022','a1b15'),
(650,'18 May 2022','a1b15'),
(651,'18 May 2022','a1b15'),
(652,'18 May 2022','a1b15'),
(653,'18 May 2022','a1b15'),
(654,'18 May 2022','a1b15'),
(655,'18 May 2022','a1b15'),
(656,'18 May 2022','a1b15'),
(657,'18 May 2022','a1b15'),
(658,'18 May 2022','a1b15'),
(659,'18 May 2022','a1b15'),
(660,'18 May 2022','a1b15'),
(661,'18 May 2022','a1b15'),
(662,'18 May 2022','a1b15'),
(663,'18 May 2022','a1b15'),
(664,'18 May 2022','a1b15'),
(665,'18 May 2022','a1b15'),
(666,'18 May 2022','a1b15'),
(667,'18 May 2022','a1b15'),
(668,'18 May 2022','a1b15'),
(669,'18 May 2022','a1b15'),
(670,'18 May 2022','a1b15'),
(671,'18 May 2022','a1b15'),
(672,'18 May 2022','a1b15'),
(673,'18 May 2022','a1b15'),
(674,'18 May 2022','a1b15'),
(675,'18 May 2022','a1b15'),
(676,'18 May 2022','a1b15'),
(677,'18 May 2022','a1b15'),
(678,'18 May 2022','a1b15'),
(679,'18 May 2022','a1b15'),
(680,'18 May 2022','a1b15'),
(681,'18 May 2022','a1b15'),
(682,'18 May 2022','a1b15'),
(683,'18 May 2022','a1b15'),
(684,'18 May 2022','a1b15'),
(685,'18 May 2022','a1b15'),
(686,'18 May 2022','a1b15'),
(687,'18 May 2022','a1b15'),
(688,'18 May 2022','a1b15'),
(689,'18 May 2022','a1b15'),
(690,'18 May 2022','a1b15'),
(691,'18 May 2022','a1b15'),
(692,'18 May 2022','a1b15'),
(693,'18 May 2022','a1b2'),
(694,'18 May 2022','a1b13'),
(695,'18 May 2022','a8b2'),
(696,'18 May 2022','a8b2'),
(697,'18 May 2022','a8b3'),
(698,'18 May 2022','a8b3'),
(699,'18 May 2022','a8b3'),
(700,'18 May 2022','a8b3'),
(701,'18 May 2022','a8b3'),
(702,'18 May 2022','a1b15'),
(703,'18 May 2022','a1b15'),
(704,'18 May 2022','a7b2'),
(705,'18 May 2022','a7b2'),
(706,'18 May 2022','a7b1'),
(707,'18 May 2022','a7b1'),
(708,'18 May 2022','a7b1'),
(709,'18 May 2022','a7b1'),
(710,'18 May 2022','a2b1'),
(711,'18 May 2022','a1b15'),
(712,'18 May 2022','a1b15'),
(713,'18 May 2022','a1b15'),
(714,'18 May 2022','a1b15'),
(715,'18 May 2022','a1b1'),
(716,'18 May 2022','a1b10'),
(717,'18 May 2022','a1b15'),
(718,'18 May 2022','a2b1'),
(719,'18 May 2022','a1b5'),
(720,'18 May 2022','a2b2'),
(721,'19 May 2022','a1b12'),
(722,'19 May 2022','a1b12'),
(723,'19 May 2022','a1b12'),
(724,'19 May 2022','a1b12'),
(725,'19 May 2022','a1b12'),
(726,'19 May 2022','a1b8'),
(727,'19 May 2022','a1b8'),
(728,'19 May 2022','a7b2'),
(729,'19 May 2022','a1b4');

/*Table structure for table `sifat_dasar` */

DROP TABLE IF EXISTS `sifat_dasar`;

CREATE TABLE `sifat_dasar` (
  `id_sifat_dasar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sifat_dasar` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_sifat_dasar`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sifat_dasar` */

insert  into `sifat_dasar`(`id_sifat_dasar`,`nama_sifat_dasar`,`deleted`) values 
(16,'Sanguinis','0'),
(17,'Melankolis','0'),
(18,'Plegmatis','0'),
(19,'Koleris','0');

/*Table structure for table `status_keluarga` */

DROP TABLE IF EXISTS `status_keluarga`;

CREATE TABLE `status_keluarga` (
  `id_status_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_status_keluarga` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_status_keluarga`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `status_keluarga` */

insert  into `status_keluarga`(`id_status_keluarga`,`nama_status_keluarga`,`deleted`) values 
(13,'Kandung','0'),
(14,'Tiri','0'),
(15,'Pungut','0');

/*Table structure for table `status_ortu` */

DROP TABLE IF EXISTS `status_ortu`;

CREATE TABLE `status_ortu` (
  `id_status_ortu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_status_ortu` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_status_ortu`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `status_ortu` */

insert  into `status_ortu`(`id_status_ortu`,`nama_status_ortu`,`deleted`) values 
(11,'Berpisah','0'),
(12,'Bersama','0'),
(13,'Bercerai','0');

/*Table structure for table `status_sekarang` */

DROP TABLE IF EXISTS `status_sekarang`;

CREATE TABLE `status_sekarang` (
  `id_status_sekarang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_status_sekarang` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_status_sekarang`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `status_sekarang` */

insert  into `status_sekarang`(`id_status_sekarang`,`nama_status_sekarang`,`deleted`) values 
(19,'Lajang','0'),
(20,'Berpacaran','0'),
(21,'Menikah','0'),
(22,'Cerai','0');

/*Table structure for table `sub_golongan` */

DROP TABLE IF EXISTS `sub_golongan`;

CREATE TABLE `sub_golongan` (
  `id_sub_golongan` int(11) NOT NULL AUTO_INCREMENT,
  `id_golongan` int(20) DEFAULT NULL,
  `nama_sub_golongan` varchar(40) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_sub_golongan`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sub_golongan` */

insert  into `sub_golongan`(`id_sub_golongan`,`id_golongan`,`nama_sub_golongan`,`jumlah`,`deleted`) values 
(28,19,'A',0,'0'),
(29,20,'A',250000,'0'),
(30,21,'A',450000,'0'),
(31,21,'B',550000,'0'),
(32,21,'C',650000,'0'),
(33,22,'A',750000,'0'),
(34,22,'B',1050000,'0'),
(35,22,'C',1550000,'0'),
(36,23,'A',2000000,'0'),
(37,23,'B',2500000,'0'),
(38,23,'C',3000000,'0'),
(39,24,'A',3500000,'0');

/*Table structure for table `sub_informasi_umum` */

DROP TABLE IF EXISTS `sub_informasi_umum`;

CREATE TABLE `sub_informasi_umum` (
  `id_sub_informasi_umum` int(11) NOT NULL AUTO_INCREMENT,
  `id_info_umum` int(11) DEFAULT NULL,
  `nama_sub_informasi_umum` varchar(40) DEFAULT NULL,
  `aktif` enum('0','1') DEFAULT NULL,
  `tipe` enum('input-text','input-number','textarea','select','file') DEFAULT NULL,
  `tabel_select` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_sub_informasi_umum`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sub_informasi_umum` */

insert  into `sub_informasi_umum`(`id_sub_informasi_umum`,`id_info_umum`,`nama_sub_informasi_umum`,`aktif`,`tipe`,`tabel_select`) values 
(60,10,'Nama Lengkap','1','input-text',''),
(61,10,'Nama Panggilan','1','input-text',''),
(62,10,'Jenis Kelamin','1','select','jenis_kelamin'),
(63,10,'Tempat Lahir','1','input-text',''),
(64,10,'Tanggal Lahir','1','input-text',''),
(65,10,'Alamat Sesuai KTP','1','textarea',''),
(66,10,'Provinsi','1','input-text',''),
(67,10,'Kota/Kabupaten','1','input-text',''),
(68,10,'Alamat Saat Ini','1','input-text',''),
(69,10,'Provinsi','1','input-text',''),
(70,10,'Kota / Kabupaten','1','input-text',''),
(71,10,'No.Handphone','1','input-number',''),
(72,10,'NIK KTP','1','input-number',''),
(73,10,'Agama','1','select','agama'),
(74,10,'Status Sekarang','1','select','status_sekarang'),
(75,11,'Golongan Darah','1','select','golongan_darah'),
(76,11,'Tinggi Badan ','1','input-number',''),
(77,11,'Berat Badan','1','input-number',''),
(78,11,'Ukuran Baju','1','select','ukuran_baju'),
(79,11,'Riwayat Penyakit','1','select','riwayat_penyakit'),
(80,12,'Instagram','1','input-text',''),
(81,12,'Facebook','1','input-text',''),
(82,12,'Twitter','1','input-text',''),
(83,13,'Pendidikan Terakhir','1','input-text',''),
(84,13,'Tujuan Bekerja','1','select','tujuan_bekerja'),
(85,13,'Pernah Bekerja di','1','input-text',''),
(86,14,'Tanggal Pemanggilan','1','input-text',''),
(87,14,'Daftar di bagian','1','select','daftar_bagian'),
(88,14,'Aktivitas di luar lain','1','select','aktivitas_lain'),
(89,15,'Nomor Kerabat / Keluarga','1','input-number',''),
(90,15,'Alamat Orang Tua saat ini','1','textarea',''),
(91,15,'Provinsi','1','input-text',''),
(92,15,'Kota/Kabupaten','1','input-text',''),
(93,15,'Status Orang Tua','1','select','status_ortu'),
(94,15,'Penghasilan Orang Tua','1','select','penghasilan_ortu'),
(95,15,'Jumlah tanggungan orang tua','1','select','jumlah_tanggungan'),
(96,15,'Nama Lengkap Ayah','1','input-text',''),
(97,15,'Status Ayah','1','select','status_ortu'),
(98,15,'Pekerjaan Ayah','1','input-text',''),
(99,15,'Nama Lengkap Ibu','1','input-text',''),
(100,15,'Status Ibu','1','select','status_ortu'),
(101,15,'Pekerjaan Ibu','1','input-text',''),
(102,15,'Pekerjaan Saudara 1','1','input-text',''),
(103,15,'Pekerjaan Saudara 2','1','input-text',''),
(104,15,'Pekerjaan Saudara 3','1','input-text',''),
(105,16,'Foto Diri','1','file',''),
(106,16,'Foto Kartu Tanda Penduduk','1','file',''),
(107,16,'Foto Kartu Keluarga','1','file',''),
(108,10,'Jenis Kelamin','1','select','jenis_kelamin'),
(109,14,'hehehe','1','input-text','');

/*Table structure for table `sub_menu` */

DROP TABLE IF EXISTS `sub_menu`;

CREATE TABLE `sub_menu` (
  `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(20) DEFAULT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama_sub_menu` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_sub_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sub_menu` */

insert  into `sub_menu`(`id_sub_menu`,`id_menu`,`kode`,`nama_sub_menu`) values 
(1,'a1','a1b1','Jenis Kelamin'),
(2,'a1','a1b2','Agama'),
(3,'a1','a1b3','Status Sekarang'),
(4,'a1','a1b4','Gol. Darah'),
(5,'a1','a1b5','Ukuran Baju'),
(6,'a1','a1b6','Riwayat Penyakit'),
(7,'a1','a1b7','Tujuan Bekerja'),
(8,'a1','a1b8','Daftar di Bagian'),
(9,'a1','a1b9','Aktivitas Lain'),
(10,'a1','a1b10','Status Keluarga'),
(11,'a1','a1b11','Penghasilan Orang Tua'),
(12,'a1','a1b12','Jumlah Tanggungan'),
(13,'a1','a1b13','Status Orang Tua'),
(14,'a1','a1b14','Jenis Pekerjaan'),
(15,'a2','a2b1','Gaji Pokok'),
(16,'a2','a2b2','Golongan'),
(17,'a7','a7b1','Penjualan'),
(18,'a7','a7b2','Administrasi Umum'),
(19,'a8','a8b1','Sifat Dasar'),
(20,'a8','a8b2','Kepribadian'),
(21,'a8','a8b3','Kepintaran');

/*Table structure for table `tujuan_bekerja` */

DROP TABLE IF EXISTS `tujuan_bekerja`;

CREATE TABLE `tujuan_bekerja` (
  `id_tujuan_bekerja` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tujuan_bekerja` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_tujuan_bekerja`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tujuan_bekerja` */

insert  into `tujuan_bekerja`(`id_tujuan_bekerja`,`nama_tujuan_bekerja`,`deleted`) values 
(11,'Mencari Pengalaman','0'),
(12,'Mencari Teman','0');

/*Table structure for table `ukuran_baju` */

DROP TABLE IF EXISTS `ukuran_baju`;

CREATE TABLE `ukuran_baju` (
  `id_ukuran_baju` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ukuran_baju` varchar(40) DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id_ukuran_baju`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ukuran_baju` */

insert  into `ukuran_baju`(`id_ukuran_baju`,`nama_ukuran_baju`,`deleted`) values 
(17,'S','0'),
(18,'M','0'),
(19,'L','0'),
(20,'XL','0'),
(21,'XXL','0'),
(22,'XXXL','0');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `nama_panggilan` varchar(40) DEFAULT NULL,
  `jk` varchar(40) DEFAULT NULL,
  `tmp_lahir` varchar(40) DEFAULT NULL,
  `tgl_lahir` varchar(40) DEFAULT NULL,
  `alamat_ktp` text DEFAULT NULL,
  `provinsi1` varchar(40) DEFAULT NULL,
  `kota1` varchar(40) DEFAULT NULL,
  `alamat_saat_ini` text DEFAULT NULL,
  `provinsi2` varchar(40) DEFAULT NULL,
  `kota2` varchar(40) DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `agama` varchar(40) DEFAULT NULL,
  `status_sekarang` varchar(40) DEFAULT NULL,
  `goldar` varchar(8) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `ukuran_baju` varchar(8) DEFAULT NULL,
  `riwayat_penyakit` varchar(40) DEFAULT NULL,
  `instagram` varchar(40) DEFAULT NULL,
  `facebook` varchar(40) DEFAULT NULL,
  `twitter` varchar(40) DEFAULT NULL,
  `pendidikan` varchar(40) DEFAULT NULL,
  `tujuan_bekerja` varchar(40) DEFAULT NULL,
  `pernah_bekerja` varchar(40) DEFAULT NULL,
  `tgl_panggil` varchar(40) DEFAULT NULL,
  `daftar_bagian` varchar(40) DEFAULT NULL,
  `aktivitas_lain` varchar(40) DEFAULT NULL,
  `no_keluarga` int(11) DEFAULT NULL,
  `alamat_ortu` text DEFAULT NULL,
  `provinsi3` varchar(40) DEFAULT NULL,
  `kota3` varchar(40) DEFAULT NULL,
  `status_ortu` varchar(40) DEFAULT NULL,
  `penghasilan_ortu` varchar(40) DEFAULT NULL,
  `jum_tanggungan` varchar(40) DEFAULT NULL,
  `nama_ayah` varchar(40) DEFAULT NULL,
  `status_ayah` varchar(40) DEFAULT NULL,
  `pekerjaan_ayah` varchar(40) DEFAULT NULL,
  `nama_ibu` varchar(40) DEFAULT NULL,
  `status_ibu` varchar(40) DEFAULT NULL,
  `pekerjaan_ibu` varchar(40) DEFAULT NULL,
  `pekerjaan1` varchar(40) DEFAULT NULL,
  `pekerjaan2` varchar(40) DEFAULT NULL,
  `pekerjaan3` varchar(40) DEFAULT NULL,
  `foto_diri` varchar(40) DEFAULT NULL,
  `foto_ktp` varchar(40) DEFAULT NULL,
  `foto_kk` varchar(40) DEFAULT NULL,
  `status` enum('1','2') DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama_lengkap`,`nama_panggilan`,`jk`,`tmp_lahir`,`tgl_lahir`,`alamat_ktp`,`provinsi1`,`kota1`,`alamat_saat_ini`,`provinsi2`,`kota2`,`no_hp`,`nik`,`agama`,`status_sekarang`,`goldar`,`tinggi_badan`,`berat_badan`,`ukuran_baju`,`riwayat_penyakit`,`instagram`,`facebook`,`twitter`,`pendidikan`,`tujuan_bekerja`,`pernah_bekerja`,`tgl_panggil`,`daftar_bagian`,`aktivitas_lain`,`no_keluarga`,`alamat_ortu`,`provinsi3`,`kota3`,`status_ortu`,`penghasilan_ortu`,`jum_tanggungan`,`nama_ayah`,`status_ayah`,`pekerjaan_ayah`,`nama_ibu`,`status_ibu`,`pekerjaan_ibu`,`pekerjaan1`,`pekerjaan2`,`pekerjaan3`,`foto_diri`,`foto_ktp`,`foto_kk`,`status`) values 
(122,'Susep Supriatna','Susep','Perempuan','Jakarta','2022-05-20','Kemayoran','Dki Jakarta','Kota Jakarta Selatan','Susep Supriatna','Jawa Timur','Kabupaten Sidoarjo',2147483647,2147483647,'Islam','Lajang','O',24,24,'M','Asma','sdfdsf','sfs','sfsf','D4/S1','Mencari Pengalaman','sfsf','2022-05-20','Design Graphic','Kuliah',324234,'Susep Supriatna','Di Yogyakarta','Kabupaten Bantul','Tiri','Lebih dari Rp2,000,000','0 Tanggungan','sdfs','Bersama','sfs','sfsf','Berpisah','sfs','-','-','-','FOTO_202205202780478.png','KTP_202205201216856.jpg','KK_202205201216856.jpg','1'),
(123,'Ade Sumarno','Ade','Laki-laki','Bekasi','2022-05-20','Cibiru','Jawa Barat','Kabupaten Ciamis','Ade Sumarno','Dki Jakarta','Kota Jakarta Barat',888118811,2147483647,'Islam','Lajang','O',172,70,'L','Tidak ada','ig','fb','tw','D4/S1','Mencari Pengalaman','pernah','2022-05-20','Web Developer','Tidak ada',123123,'Ade Sumarno','Di Yogyakarta','Kabupaten Bantul','Kandung','Rp1,000,000 - 2,000,000','1 Tanggungan','dad','Berpisah','ada','adad','Berpisah','ada','-','-','-','FOTO_202205202794306.jpg','KTP_202205202794306.jpg','KK_202205202794306.jpg','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
