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

 Date: 18/06/2025 16:26:36
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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of registrations
-- ----------------------------
INSERT INTO `registrations` VALUES (4, 'dad', 'dadad', 'bagussetyawan551@yahoo.com', '3131', 'dd', 'registrations/pas_foto/Tb8IawwcgXoNpQwq9idUIWc114TzJv0EiuUrnrEC.png', 'registrations/scan_kartu_pelajar/QCvRv8zL1eAIqabihZoXEqAhl9KaZxURjlmREHlD.pdf', 'registrations/bukti_follow/aI6IDaqT2cnhnkW0lpFnSnD5joBP1wWRtkvzgQ7C.png', 'registrations/bukti_posting_twibbon/7SdOqhELTbxStPPXbP0HQSqH9dJTERJTeD7O4S7q.png', '2025-06-18 07:52:54', '2025-06-18 07:52:54');
INSERT INTO `registrations` VALUES (5, 'dadad', 'dadasdsdsadasd', 'sisimunaroh@gmail.com', '33131', 'dd', 'registrations/pas_foto/up5bweC0s2rLVyGNrBuzpizZCqWrVjxxam7NIGSz.png', 'registrations/scan_kartu_pelajar/l9cjwWSbX20sUBvXiuTWRAmKnUWo6oC1Gbz8k1R8.pdf', 'registrations/bukti_follow/VGjE4BMV8bMhEcLt56BdR0vpYAhGbPTpIZxat9wi.png', 'registrations/bukti_posting_twibbon/e6VrT8YFxX3QyVsQXqvG5wOdfNHMysCCyugQWKNO.png', '2025-06-18 07:55:05', '2025-06-18 07:55:05');
INSERT INTO `registrations` VALUES (6, 'dada', 'cccc', 'dada@gmail.com', '3131', 'dd', 'registrations/pas_foto/vKl7HPsQQE1PbqtEY3ynIDywGlBN7tbBlF9JU1h3.png', 'registrations/scan_kartu_pelajar/gVtKskajGVElabG2xcIEGvNlomOvFdjQNpNyNww0.pdf', 'registrations/bukti_follow/dzP9j0x3VgymY1yyO1GMGHHsNOqpXJhVx14wISPK.png', 'registrations/bukti_posting_twibbon/a5j6Yshb9hD5GEa0WnfpfHeRyfEWf6UHGlVgaLco.png', '2025-06-18 09:09:30', '2025-06-18 09:09:30');
INSERT INTO `registrations` VALUES (7, 'rrwr', 'dsd', 'hrd@muliagrand.com', '3131313', 'ddd', 'registrations/pas_foto/uqCEvQZNrSyCcC09R3iu4wqp1TJSgzTImdw8cE8y.png', 'registrations/scan_kartu_pelajar/dzhLDGth7sQ245YXjayJaJFqPlLVMlr7kfBP9STP.pdf', 'registrations/bukti_follow/BP7jIT07yVQaHy0h0TfRYjU4A2iTa4Zyyy3ZNIyo.png', 'registrations/bukti_posting_twibbon/sDdo4vzJOlGCpoOY7NtLNKTsJBpPfj4hDp4B674t.png', '2025-06-18 09:15:45', '2025-06-18 09:15:45');
INSERT INTO `registrations` VALUES (8, 'a', 'b', 'bagus@muliagrand.com', '33131', '3131', 'registrations/pas_foto/jeUtVH9Gv9GMltGV5bbLo2cVfpsOtnZFswPdXibF.png', 'registrations/scan_kartu_pelajar/yGhNjZYbU1FKsbcyY8KFMYzD9ebTEKP7K8p14fiw.pdf', 'registrations/bukti_follow/RrtGG0VX6fzg8sL4iRo68Q0f6BPOqxAeUjSLfMi3.png', 'registrations/bukti_posting_twibbon/WtNJyMY1RO25OS6gEb4cHHYjdDvpzsEqmfPb1H8h.png', '2025-06-18 09:22:31', '2025-06-18 09:22:31');
INSERT INTO `registrations` VALUES (9, 's', 'd', 'bagus2@muliagrand.com', '313', 'da', 'registrations/pas_foto/glPeKYu4leu4sCNfSx4YpJ2zWMHFIS3bIVij0HnT.png', 'registrations/scan_kartu_pelajar/sLLydNadZhLM7qbEaXarBeAJG5ApDuHJcSgfODf3.pdf', 'registrations/bukti_follow/PlLSFYriqDwHtUwOQlGYtx25PRYN2RbGb55LwWKu.png', 'registrations/bukti_posting_twibbon/ocEb13bPXT1hwa3CoCbH3Ifd56XgyeSGgjvSkINB.png', '2025-06-18 09:23:50', '2025-06-18 09:23:50');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
