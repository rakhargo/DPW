/*
Navicat MySQL Data Transfer

Source Server         : SQL Connection
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_voucher

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-21 13:14:28
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2023_06_18_083305_create_t_kategori', '1');
INSERT INTO `migrations` VALUES ('6', '2023_06_18_084433_create_t_metode', '1');
INSERT INTO `migrations` VALUES ('7', '2023_06_18_084939_create_t_voucher', '1');
INSERT INTO `migrations` VALUES ('8', '2023_06_18_085107_create_t_pesanan', '1');

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `t_kategori`
-- ----------------------------
DROP TABLE IF EXISTS `t_kategori`;
CREATE TABLE `t_kategori` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `gambar_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_kategori
-- ----------------------------
INSERT INTO `t_kategori` VALUES ('1', 'Steam Wallet', 'gambar_kategori/VLBttiYXTQhHrz78pk1hEMsJRFcfYL4tjbOtUgtv.png', '2023-06-21 05:44:07', '2023-06-21 05:44:07');
INSERT INTO `t_kategori` VALUES ('2', 'Google Pay', 'gambar_kategori/KxdOrg4bPW9uE1p9mjfSAOxkeHFZlPB4T3viDt4z.png', '2023-06-21 05:44:24', '2023-06-21 05:44:24');
INSERT INTO `t_kategori` VALUES ('3', 'Xbox', 'gambar_kategori/1AvAlMHyF3VPW96YJOIv9BL1U8TSM6OWhqiVTpPS.png', '2023-06-21 05:44:43', '2023-06-21 05:44:43');
INSERT INTO `t_kategori` VALUES ('4', 'Playstation Points', 'gambar_kategori/K5b6EuyVuuvDQ5OGSR9LnOMRjjHIAV37mizxHjPV.png', '2023-06-21 05:44:59', '2023-06-21 05:44:59');
INSERT INTO `t_kategori` VALUES ('5', 'Nintendo e-shop', 'gambar_kategori/iBv0Mxx1PuWWf5Geid0As4ytRUmdan1vgPQQbWI3.png', '2023-06-21 05:45:59', '2023-06-21 05:45:59');

-- ----------------------------
-- Table structure for `t_metode`
-- ----------------------------
DROP TABLE IF EXISTS `t_metode`;
CREATE TABLE `t_metode` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_metode` varchar(255) NOT NULL,
  `biaya_administrasi` int(11) NOT NULL,
  `gambar_metode` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_metode
-- ----------------------------
INSERT INTO `t_metode` VALUES ('1', 'QRIS', '2500', 'gambar_metode/AeH74BuT2ku43335ng3NSfDZS6A6YIkin9b0039Q.jpg', '2023-06-21 05:46:36', '2023-06-21 05:46:36');

-- ----------------------------
-- Table structure for `t_pesanan`
-- ----------------------------
DROP TABLE IF EXISTS `t_pesanan`;
CREATE TABLE `t_pesanan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `waktu_pesanan` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_pesanan
-- ----------------------------
INSERT INTO `t_pesanan` VALUES ('1', '1', '2', '1', '47500', 'heisenbruh@gmail.com', '2023-06-21 06:13:42', '2023-06-21 06:13:42', '2023-06-21 06:13:42');

-- ----------------------------
-- Table structure for `t_voucher`
-- ----------------------------
DROP TABLE IF EXISTS `t_voucher`;
CREATE TABLE `t_voucher` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nominal_voucher` varchar(255) NOT NULL,
  `harga_voucher` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of t_voucher
-- ----------------------------
INSERT INTO `t_voucher` VALUES ('1', '1', 'Rp. 12000', '12000', null, '2023-06-20 05:01:34');
INSERT INTO `t_voucher` VALUES ('2', '1', 'Rp. 45000', '45000', null, null);
INSERT INTO `t_voucher` VALUES ('3', '1', 'Rp. 60000', '60000', null, null);
INSERT INTO `t_voucher` VALUES ('4', '1', 'Rp. 90000', '90000', null, null);
INSERT INTO `t_voucher` VALUES ('5', '1', 'Rp. 120000', '120000', null, null);
INSERT INTO `t_voucher` VALUES ('6', '1', 'Rp. 250000', '250000', null, null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin@venti.com', null, '$2y$10$KLFY0br3HrsS6BDBN//i6uy2gM4UtQFNgVvlZtO5IxLm9ZuVK1b42', null, null, null);
