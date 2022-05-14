/*
 Navicat Premium Data Transfer

 Source Server         : local mysql
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : 127.0.0.1:3306
 Source Schema         : cpm-db

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 14/05/2022 15:03:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project`  (
  `project_id` int NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `instance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `attachment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime(6) NULL DEFAULT NULL,
  `mentor_id` int NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `progress` int NULL DEFAULT NULL,
  `start_date` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`project_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES (1, 'proyek baru-1', 'pt mercon', 'hehehe', 'let.xlsx', 'anto', '2022-12-05 00:00:00.000000', 11, 'D', 67, '2022-12-05 00:00:00');
INSERT INTO `project` VALUES (2, 'pro2', 'PLLP', 'kawok', '9__Langkah_Implementasi_eProcurement_T4.docx', 'anatan ads fads  asdfasdf', '2022-05-02 00:00:00.000000', 13, 'B', 0, '1212-12-12 00:00:00');
INSERT INTO `project` VALUES (3, 'proyek3 he', 'bca', 'awkoltltltl', 'IMG_20210504_114121.jpg', 'anatan ads fads  asdfasdf', '2022-05-08 00:00:00.000000', 13, 'B', 0, '2022-02-22 00:00:00');

-- ----------------------------
-- Table structure for project_detail
-- ----------------------------
DROP TABLE IF EXISTS `project_detail`;
CREATE TABLE `project_detail`  (
  `detail_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `duration` int NULL DEFAULT NULL,
  `code` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `predecessor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `percentage` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `progress_att` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `updated_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`detail_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project_detail
-- ----------------------------
INSERT INTO `project_detail` VALUES (1, 2, '1', 1, '1', '', 0, NULL, NULL, NULL, NULL);
INSERT INTO `project_detail` VALUES (2, 2, '2', 2, '2', '1', 0, NULL, NULL, NULL, NULL);
INSERT INTO `project_detail` VALUES (3, 1, 'pre', 1, 'a1', '', 0, NULL, NULL, NULL, NULL);
INSERT INTO `project_detail` VALUES (4, 1, 'prepa', 3, 'a2', 'a1', 0, '2022-05-08 19:22:13', 'IMG202010201110093.jpg', 'tetetatasdfadfad', 'anatan ads fads  asdfasdf');
INSERT INTO `project_detail` VALUES (5, 1, 'post', 5, 'a3', 'a1,a2', 0, '2022-05-08 19:28:50', 'IMG_20210728_2138341.jpg', 'aaaaaaaa', 'anatan ads fads  asdfasdf');

-- ----------------------------
-- Table structure for project_member
-- ----------------------------
DROP TABLE IF EXISTS `project_member`;
CREATE TABLE `project_member`  (
  `member_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NULL DEFAULT NULL,
  `user_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`member_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project_member
-- ----------------------------
INSERT INTO `project_member` VALUES (1, 2, 2);
INSERT INTO `project_member` VALUES (2, 2, 3);
INSERT INTO `project_member` VALUES (3, 2, 4);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `birthdate` datetime(6) NULL DEFAULT NULL,
  `phone` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'ana@mail.com', 'anatan ads fads  asdfasdf', 'sdf', 'STUDENT', 'm', '2022-04-19 22:17:44.000000', NULL);
INSERT INTO `users` VALUES (2, 'asdf@mailc.on', 'megamind', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Murid', 'L', '2333-02-03 00:00:00.000000', '2323');
INSERT INTO `users` VALUES (3, 'admin@asdf.co', 'asdfa m,sdf', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'P', '0023-02-03 00:00:00.000000', '23123');
INSERT INTO `users` VALUES (4, 'admin@adf.co', 'chopper ana', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'L', '0233-02-03 00:00:00.000000', '2');
INSERT INTO `users` VALUES (5, 'a@asdf.coi', 'namsdofke', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'L', '2323-12-31 00:00:00.000000', '222');
INSERT INTO `users` VALUES (6, 'asdf@mailc.on', ',p[a,weojawoejfa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Murid', 'L', '2333-02-03 00:00:00.000000', '2323');
INSERT INTO `users` VALUES (7, 'admin@asdf.co', 'awasd asdfe kmo', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'P', '0023-02-03 00:00:00.000000', '23123');
INSERT INTO `users` VALUES (8, 'admin@adf.co', 'popopopopopop ', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'L', '0233-02-03 00:00:00.000000', '2');
INSERT INTO `users` VALUES (9, 'a@asdf.coi', 'qwqwqwqwqw', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'L', '2323-12-31 00:00:00.000000', '222');
INSERT INTO `users` VALUES (11, 'admin@asdf.co', 'ererererererere', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'P', '0023-02-03 00:00:00.000000', '23123');
INSERT INTO `users` VALUES (12, 'admin@adf.co', 'vfvfvfvfvfvfvfvfvfv', 'c46ab9168846f1867bcab31c75070878646744ca', 'Murid', 'L', '0233-02-03 00:00:00.000000', '2');
INSERT INTO `users` VALUES (13, 'a@asdf.coi', 'fdasdf', 'c46ab9168846f1867bcab31c75070878646744ca', 'Pembimbing', 'L', '2323-12-31 00:00:00.000000', '222');

-- ----------------------------
-- View structure for v_project
-- ----------------------------
DROP VIEW IF EXISTS `v_project`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_project` AS select `p`.`project_id` AS `project_id`,`p`.`project_name` AS `project_name`,`p`.`instance` AS `instance`,`p`.`description` AS `description`,`p`.`attachment` AS `attachment`,`p`.`created_by` AS `created_by`,`p`.`created_at` AS `created_at`,`p`.`start_date` AS `start_date`,`p`.`mentor_id` AS `mentor_id`,`p`.`status` AS `status`,`p`.`progress` AS `progress`,`u`.`fullname` AS `mentor_name`,case when `p`.`status` = 'B' then 'Belum dikerjakan' when `p`.`status` = 'D' then 'Sedang dikerjakan' when `p`.`status` = 'S' then 'Selesai' else '' end AS `stat`,`pd`.`project_id` AS `pd`,`pm`.`project_id` AS `pm` from (((`cpm-db`.`project` `p` left join `cpm-db`.`users` `u` on(`u`.`user_id` = `p`.`mentor_id`)) left join (select distinct `cpm-db`.`project_member`.`project_id` AS `project_id` from `cpm-db`.`project_member`) `pm` on(`pm`.`project_id` = `p`.`project_id`)) left join (select distinct `cpm-db`.`project_detail`.`project_id` AS `project_id` from `cpm-db`.`project_detail`) `pd` on(`pd`.`project_id` = `p`.`project_id`));

-- ----------------------------
-- View structure for v_project_detail
-- ----------------------------
DROP VIEW IF EXISTS `v_project_detail`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_project_detail` AS select `d`.`detail_id` AS `detail_id`,`d`.`project_id` AS `project_id`,`d`.`description` AS `description`,`d`.`duration` AS `duration`,`d`.`code` AS `code`,`d`.`predecessor` AS `predecessor`,`d`.`percentage` AS `percentage`,`d`.`updated_at` AS `updated_at`,`d`.`progress_att` AS `progress_att`,`d`.`note` AS `note`,`d`.`updated_by` AS `updated_by`,`p`.`project_name` AS `project_name`,`u`.`fullname` AS `mentor_name` from ((`project_detail` `d` left join `project` `p` on(`p`.`project_id` = `d`.`project_id`)) left join `users` `u` on(`u`.`user_id` = `p`.`mentor_id`));

-- ----------------------------
-- View structure for v_project_member
-- ----------------------------
DROP VIEW IF EXISTS `v_project_member`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_project_member` AS select `m`.`member_id` AS `member_id`,`m`.`project_id` AS `project_id`,`m`.`user_id` AS `user_id`,`u`.`fullname` AS `member_name` from (`project_member` `m` left join `users` `u` on(`u`.`user_id` = `m`.`user_id`));

SET FOREIGN_KEY_CHECKS = 1;
