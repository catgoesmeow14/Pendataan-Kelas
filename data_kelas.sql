/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - data-kelas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`data-kelas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `data-kelas`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kelas_matkul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` tinyint(4) NOT NULL,
  `nama_dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kelas` */

insert  into `kelas`(`id`,`kelas_matkul`,`sks`,`nama_dosen`,`created_at`,`updated_at`) values 
(5,'Pemrograman A',3,'Zanny','2021-04-19 08:25:43','2021-04-19 08:25:43'),
(6,'Teknologi Basis Data A',3,'Kamado Tanjirou','2021-04-19 08:26:49','2021-04-19 08:26:49'),
(7,'Imaging System B',2,'Edo Ranpo','2021-04-19 08:27:59','2021-04-19 08:27:59');

/*Table structure for table `kelas_mahasiswas` */

DROP TABLE IF EXISTS `kelas_mahasiswas`;

CREATE TABLE `kelas_mahasiswas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` bigint(20) unsigned NOT NULL,
  `kelas_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kelas_mahasiswas_mahasiswa_id_foreign` (`mahasiswa_id`),
  KEY `kelas_mahasiswas_kelas_id_foreign` (`kelas_id`),
  CONSTRAINT `kelas_mahasiswas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  CONSTRAINT `kelas_mahasiswas_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kelas_mahasiswas` */

insert  into `kelas_mahasiswas`(`id`,`mahasiswa_id`,`kelas_id`) values 
(7,8,5),
(8,4,6),
(9,5,5),
(10,5,6),
(11,4,7);

/*Table structure for table `mahasiswas` */

DROP TABLE IF EXISTS `mahasiswas`;

CREATE TABLE `mahasiswas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nim` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mahasiswas` */

insert  into `mahasiswas`(`id`,`nim`,`nama`,`no_hp`,`created_at`,`updated_at`) values 
(4,'190555','Vidya','0851','2021-04-19 08:14:51','2021-04-19 08:14:51'),
(5,'190555','Prabhaisvari','0851','2021-04-19 08:15:21','2021-04-19 08:15:21'),
(6,'190555','Metta','0851','2021-04-19 08:23:35','2021-04-19 08:23:35'),
(7,'190555','Igap Larasati','08510','2021-04-19 08:25:04','2021-04-19 08:25:04'),
(8,'190555','Suciana','0855','2021-04-19 08:29:22','2021-04-19 08:29:22');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2021_04_16_151757_create_mahasiswas_table',1),
(5,'2021_04_18_115909_create_kelas_table',1),
(6,'2021_04_18_125511_create_kelas_mahasiswas_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
