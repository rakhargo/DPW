/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_voucher

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-16 14:07:27
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_kategori`
-- ----------------------------
DROP TABLE IF EXISTS `t_kategori`;
CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `gambar_kategori` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_kategori
-- ----------------------------
INSERT INTO `t_kategori` VALUES ('1', 'Steam Wallet', null);
INSERT INTO `t_kategori` VALUES ('2', 'Google Play', null);
INSERT INTO `t_kategori` VALUES ('3', 'Playstation Network', null);
INSERT INTO `t_kategori` VALUES ('4', 'Garena shells', null);
INSERT INTO `t_kategori` VALUES ('5', 'Robux', null);

-- ----------------------------
-- Table structure for `t_metode`
-- ----------------------------
DROP TABLE IF EXISTS `t_metode`;
CREATE TABLE `t_metode` (
  `id_metode` int(11) NOT NULL AUTO_INCREMENT,
  `nama_metode` char(50) DEFAULT NULL,
  `biaya_administrasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_metode`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_metode
-- ----------------------------
INSERT INTO `t_metode` VALUES ('1', 'QRIS', '500');
INSERT INTO `t_metode` VALUES ('2', 'Shopeepay', '500');
INSERT INTO `t_metode` VALUES ('3', 'Gopay', '500');
INSERT INTO `t_metode` VALUES ('4', 'OVO', '500');
INSERT INTO `t_metode` VALUES ('5', 'Dana', '500');
INSERT INTO `t_metode` VALUES ('6', 'Alfamart', '5000');
INSERT INTO `t_metode` VALUES ('7', 'Indomaret', '5000');
INSERT INTO `t_metode` VALUES ('8', 'Transfer bank', '6500');

-- ----------------------------
-- Table structure for `t_pesanan`
-- ----------------------------
DROP TABLE IF EXISTS `t_pesanan`;
CREATE TABLE `t_pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `waktu_pesanan` datetime NOT NULL,
  PRIMARY KEY (`id_pesanan`),
  KEY `pesanan_kategori` (`id_kategori`),
  KEY `pesanan_voucher` (`id_voucher`),
  KEY `pesanan_metode` (`id_metode`),
  CONSTRAINT `pesanan_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`),
  CONSTRAINT `pesanan_metode` FOREIGN KEY (`id_metode`) REFERENCES `t_metode` (`id_metode`),
  CONSTRAINT `pesanan_voucher` FOREIGN KEY (`id_voucher`) REFERENCES `t_voucher` (`id_voucher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_pesanan
-- ----------------------------

-- ----------------------------
-- Table structure for `t_voucher`
-- ----------------------------
DROP TABLE IF EXISTS `t_voucher`;
CREATE TABLE `t_voucher` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nominal_voucher` int(11) NOT NULL,
  `harga_voucher` int(11) NOT NULL,
  PRIMARY KEY (`id_voucher`),
  KEY `voucher_kategori` (`id_kategori`),
  CONSTRAINT `voucher_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_voucher
-- ----------------------------
INSERT INTO `t_voucher` VALUES ('1', '1', '12000', '12000');
INSERT INTO `t_voucher` VALUES ('2', '1', '45000', '45000');
INSERT INTO `t_voucher` VALUES ('3', '1', '60000', '60000');
INSERT INTO `t_voucher` VALUES ('4', '1', '90000', '90000');
INSERT INTO `t_voucher` VALUES ('5', '1', '120000', '120000');
INSERT INTO `t_voucher` VALUES ('6', '1', '400000', '400000');
INSERT INTO `t_voucher` VALUES ('7', '2', '5000', '5000');
INSERT INTO `t_voucher` VALUES ('8', '2', '10000', '10000');
INSERT INTO `t_voucher` VALUES ('9', '2', '20000', '20000');
INSERT INTO `t_voucher` VALUES ('10', '2', '50000', '50000');
INSERT INTO `t_voucher` VALUES ('11', '2', '100000', '100000');
INSERT INTO `t_voucher` VALUES ('12', '2', '150000', '150000');
INSERT INTO `t_voucher` VALUES ('13', '2', '300000', '300000');
INSERT INTO `t_voucher` VALUES ('14', '2', '500000', '500000');
INSERT INTO `t_voucher` VALUES ('15', '3', '100000', '100000');
INSERT INTO `t_voucher` VALUES ('16', '3', '200000', '200000');
INSERT INTO `t_voucher` VALUES ('17', '3', '300000', '300000');
INSERT INTO `t_voucher` VALUES ('18', '3', '600000', '600000');
INSERT INTO `t_voucher` VALUES ('19', '3', '1000000', '1000000');
INSERT INTO `t_voucher` VALUES ('20', '3', '1500000', '1500000');
