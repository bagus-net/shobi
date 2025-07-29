/*
 Navicat Premium Data Transfer

 Source Server         : bagusdb
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : shobi

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 29/07/2025 13:47:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_08_30_000000_create_registrations_table', 1);
INSERT INTO `migrations` VALUES (6, '2024_08_30_000001_add_role_to_users_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for registrations
-- ----------------------------
DROP TABLE IF EXISTS `registrations`;
CREATE TABLE `registrations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_sekolah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lomba` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pas_foto_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scan_kartu_pelajar_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_follow_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_posting_twibbon_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `registrations_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of registrations
-- ----------------------------
INSERT INTO `registrations` VALUES (11, 'ahmad', 'smpit', 'smpitdaaf@gmail.com', '081261161632', 'Olimpiade MIPA', 'registrations/pas_foto/EfyNHzKjLQJN3SC3IuKrEeh52QXlNxFLGkr2y7w5.png', 'registrations/scan_kartu_pelajar/mEtTDVcUbkeaRt8ELKEUeYkn0ylkhkTARkvDDpgN.pdf', 'registrations/bukti_follow/HBAJiWrgIMW0q9d1YCtQ0L4cIoXhv7VTIq6I86GT.png', 'registrations/bukti_posting_twibbon/zv7mP1uKBVLdAjQL3EUPTnUQ7isXENA2CHU3XdZP.jpg', '2025-06-19 15:04:04', '2025-06-19 15:04:04');
INSERT INTO `registrations` VALUES (13, 'bgs', 'sda', 'bagus@muliagrand.com', '31313', 'Story Telling', 'registrations/pas_foto/HKz9nzelBqxt1BpuNZQe4Tn9D8kg9mwSBooJZQUU.png', 'registrations/scan_kartu_pelajar/lWmz1TF0cBU6MOfUSnIqskvtbe5j37GZD7O2lKhH.pdf', 'registrations/bukti_follow/NgLeCjvr5WHgM3kLvrtwByIIOU4yQ9RBD3h6t6oX.jpg', 'registrations/bukti_posting_twibbon/pJdyoG0Lbehx3LxN5H4P3GpwQoWhenwHfj52imF9.jpg', '2025-07-14 09:19:46', '2025-07-14 09:19:46');
INSERT INTO `registrations` VALUES (16, 'ejaa', 'smpit', 'ejaaja@gmail.com', '024165665', 'MHQ', 'registrations/pas_foto/ajhzlm45z4DFVgURFsuPMmgxIszelVA8O1cIt0S8.jpg', 'registrations/scan_kartu_pelajar/FL2XoWb8broDwbk80L3ZUCwEZCPEMz5eaVfvdNoB.pdf', 'registrations/bukti_follow/VYg38I7ey1UaPLIdWt2tpdXVTNSkqoKLt0N7Q16p.png', 'registrations/bukti_posting_twibbon/lNQL1ngdIc6DAq9NTFILdgphbOF7KmNTJBXS0cGA.pdf', '2025-07-18 05:43:32', '2025-07-18 05:43:32');
INSERT INTO `registrations` VALUES (17, 'rab', 'smpit', 'ahmad.hukma6@smp.belajar.id', '081113345562', 'MTQ', 'registrations/pas_foto/RwtLQw9A00Yd95VS0pySMgLptSY0hdBfsaYuTCos.jpg', 'registrations/scan_kartu_pelajar/SsVpxsX6DO5vR8fDKIM41rebFLgKD9KMr1lPHduU.pdf', 'registrations/bukti_follow/GHgMSn9SVHdsnymocLf6oMXQSILAECTNEDIaxDJF.png', 'registrations/bukti_posting_twibbon/hHtH1RMCTNwY1E9lKEtpVrPfQroiPngZzpLDgxXK.jpg', '2025-07-18 06:17:38', '2025-07-18 06:17:38');
INSERT INTO `registrations` VALUES (18, 'dada', 'dada', 'bagussetyawan551@yahoo.com', '3131313131', 'Story Telling', 'registrations/pas_foto/XGfNdmrQL3SFQD2fnWCQDWGteGxKhL6TCb9CpLcl.png', 'registrations/scan_kartu_pelajar/hdHaHd7XDbsMYaGJnlvMxDK12lZCKxsX6janX8ZD.pdf', 'registrations/bukti_follow/9H2LPRPmfKG00O7zPN50mHZguQuKlwjcblSDNagq.pdf', 'registrations/bukti_posting_twibbon/0hINo1i1d94cgUUw67EI6saBkarhkuwrZnTJ5ALr.pdf', '2025-07-18 06:17:44', '2025-07-18 06:17:44');
INSERT INTO `registrations` VALUES (19, 'ahmad', 'smpit', 'denirokhman72@guru.smp.belajar.id', '081113345562', 'MHQ', 'registrations/pas_foto/2MqtPS6KbEWrR9mWj8BdhjhBMU6cIkGd5VMPOL1I.jpg', 'registrations/scan_kartu_pelajar/2obqFPAg1W9lz93MZTDrV0jKczUVh8eRonW8u6oY.pdf', 'registrations/bukti_follow/SFCLj0CiHb5PS7UOViVi4OEoyN5hYvuevzo9yDrb.pdf', 'registrations/bukti_posting_twibbon/e7CEyxDW0M48BolhBljxeVFuT0vqYx82nHX4WjFI.pdf', '2025-07-18 07:51:29', '2025-07-18 07:51:29');
INSERT INTO `registrations` VALUES (21, 'arab', 'mait', 'deni@gmail.com', '093828382917', 'Story Telling', 'registrations/pas_foto/WxtTX34CudXitMU9VOJ80kwVmRLQnVE9hCHRX7FC.png', 'registrations/scan_kartu_pelajar/Osad93R63DHqPcGbHgpqFKxyY7AE8cs8kkm48KqP.pdf', 'registrations/bukti_follow/8bpTyuDhkgQv7SYFLH5JU3757mdYJC0fujXZbz7U.pdf', 'registrations/bukti_posting_twibbon/ENrUldI9NwwkbyJlfhs9n35AkSmaB7inE63ngV5d.jpg', '2025-07-29 06:27:33', '2025-07-29 06:27:33');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@difest.com', NULL, '$2y$10$yDWCwc463LDO4D8OYbcY6eB3Q5vmjAwqTGrVNLOkIHhLK9irLZENC', 'admin', NULL, '2025-06-20 04:16:04', '2025-06-20 04:16:04');

SET FOREIGN_KEY_CHECKS = 1;
