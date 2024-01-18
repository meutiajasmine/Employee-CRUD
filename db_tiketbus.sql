/*
Navicat MySQL Data Transfer

Source Server         : praktikum6
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_tiketbus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-03-28 22:47:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_bus`
-- ----------------------------
DROP TABLE IF EXISTS `t_bus`;
CREATE TABLE `t_bus` (
  `id_bus` int(5) NOT NULL AUTO_INCREMENT,
  `nama_bus` varchar(30) DEFAULT NULL,
  `no_bus` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_bus`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_bus
-- ----------------------------
INSERT INTO `t_bus` VALUES ('1', 'DAMRI', 'BS01');
INSERT INTO `t_bus` VALUES ('2', 'AKAS', 'BS02');
INSERT INTO `t_bus` VALUES ('3', 'Sinar Jaya', 'BS03');
INSERT INTO `t_bus` VALUES ('4', 'HIBA', 'BS04');
INSERT INTO `t_bus` VALUES ('5', 'Primajasa', 'BS05');

-- ----------------------------
-- Table structure for `t_cust`
-- ----------------------------
DROP TABLE IF EXISTS `t_cust`;
CREATE TABLE `t_cust` (
  `id_cust` int(5) NOT NULL AUTO_INCREMENT,
  `nama_cust` varchar(50) DEFAULT NULL,
  `email_cust` varchar(50) DEFAULT NULL,
  `jadwal_cust` time DEFAULT NULL,
  `id_bus` int(5) DEFAULT NULL,
  `id_tiket` int(5) DEFAULT NULL,
  `id_terminal` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_cust`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_cust
-- ----------------------------
INSERT INTO `t_cust` VALUES ('1', 'Sarah', 'sarah@gmail.com', '07:00:00', '1', '3', '4');
INSERT INTO `t_cust` VALUES ('2', 'Amirah', 'amirah@gmail.com', '13:00:00', '2', '4', '3');
INSERT INTO `t_cust` VALUES ('3', 'Hans', 'hans@gmail.com', '13:00:00', '3', '2', '1');
INSERT INTO `t_cust` VALUES ('4', 'Nana', 'nana@gmail.com', '10:00:00', '5', '1', '2');
INSERT INTO `t_cust` VALUES ('5', 'Karin', 'karin@gmail.com', '20:00:00', '1', '2', '3');
INSERT INTO `t_cust` VALUES ('6', 'Lany', 'lany@gmail.com', '18:00:00', '4', '1', '3');
INSERT INTO `t_cust` VALUES ('7', 'Laras', 'laras@gmail.com', '12:00:00', '2', '1', '1');
INSERT INTO `t_cust` VALUES ('8', 'Mursid', 'mursid@gmail.com', '09:00:00', '5', '4', '4');
INSERT INTO `t_cust` VALUES ('9', 'Tira', 'tira@gmail.com', '07:00:00', '2', '3', '2');
INSERT INTO `t_cust` VALUES ('10', 'Bina', 'bina@gmail.com', '08:00:00', '1', '2', '3');

-- ----------------------------
-- Table structure for `t_terminal`
-- ----------------------------
DROP TABLE IF EXISTS `t_terminal`;
CREATE TABLE `t_terminal` (
  `id_terminal` int(5) NOT NULL AUTO_INCREMENT,
  `nama_terminal` varchar(30) DEFAULT '',
  `alamat_terminal` varchar(30) DEFAULT '',
  PRIMARY KEY (`id_terminal`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_terminal
-- ----------------------------
INSERT INTO `t_terminal` VALUES ('1', 'Purabaya', 'Bungurasih');
INSERT INTO `t_terminal` VALUES ('2', 'Tambak Osowilangun', 'Gresik');
INSERT INTO `t_terminal` VALUES ('3', 'Joyoboyo', 'Wonokromo');
INSERT INTO `t_terminal` VALUES ('4', 'Bratang', 'Gubeng');

-- ----------------------------
-- Table structure for `t_tiket`
-- ----------------------------
DROP TABLE IF EXISTS `t_tiket`;
CREATE TABLE `t_tiket` (
  `id_tiket` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_tiket` varchar(30) DEFAULT NULL,
  `harga_tiket` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_tiket`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_tiket
-- ----------------------------
INSERT INTO `t_tiket` VALUES ('1', 'Executive', '500000');
INSERT INTO `t_tiket` VALUES ('2', 'Non AC', '250000');
INSERT INTO `t_tiket` VALUES ('3', 'VIP', '400000');
INSERT INTO `t_tiket` VALUES ('4', 'Ekonomi', '150000');
