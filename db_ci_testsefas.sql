/*
 Navicat Premium Data Transfer

 Source Server         : ALOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : db_ci_testsefas

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 16/02/2024 11:33:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jabatan`;
CREATE TABLE `tbl_jabatan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_jabatan
-- ----------------------------
INSERT INTO `tbl_jabatan` VALUES (1, 'HRD');
INSERT INTO `tbl_jabatan` VALUES (2, 'Accounting');
INSERT INTO `tbl_jabatan` VALUES (3, 'Direktur');
INSERT INTO `tbl_jabatan` VALUES (4, 'Sales');
INSERT INTO `tbl_jabatan` VALUES (5, 'IT');

-- ----------------------------
-- Table structure for tbl_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_karyawan`;
CREATE TABLE `tbl_karyawan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `jabatan_id` int NULL DEFAULT NULL,
  `kota_asal_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_karyawan
-- ----------------------------
INSERT INTO `tbl_karyawan` VALUES (1, 'Andi', '1980-01-13', 1, 3);
INSERT INTO `tbl_karyawan` VALUES (2, 'Budi', '1987-05-28', 2, 2);
INSERT INTO `tbl_karyawan` VALUES (3, 'Dewi', '1974-12-04', 3, 4);
INSERT INTO `tbl_karyawan` VALUES (4, 'Sari', '1990-03-31', 4, 2);

-- ----------------------------
-- Table structure for tbl_kota
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kota`;
CREATE TABLE `tbl_kota`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kota
-- ----------------------------
INSERT INTO `tbl_kota` VALUES (1, 'Bekasi');
INSERT INTO `tbl_kota` VALUES (2, 'Jakarta');
INSERT INTO `tbl_kota` VALUES (3, 'Manado');
INSERT INTO `tbl_kota` VALUES (4, 'Surabaya');

SET FOREIGN_KEY_CHECKS = 1;
