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

 Date: 05/06/2022 23:32:14
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
  `end_date` datetime NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `final_att` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`project_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `ext_note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `ext_reply` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`detail_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for project_member
-- ----------------------------
DROP TABLE IF EXISTS `project_member`;
CREATE TABLE `project_member`  (
  `member_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NULL DEFAULT NULL,
  `user_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`member_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

INSERT INTO `users` VALUES (1, 'admin@mail.com', 'Admin', '4297f44b13955235245b2497399d7a93', 'Pembimbing', 'L', '2022-04-19 22:17:44.000000', NULL);

-- ----------------------------
-- View structure for v_project
-- ----------------------------
DROP VIEW IF EXISTS `v_project`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_project` AS select `p`.`project_id` AS `project_id`,`p`.`project_name` AS `project_name`,`p`.`instance` AS `instance`,`p`.`description` AS `description`,`p`.`attachment` AS `attachment`,`p`.`created_by` AS `created_by`,`p`.`created_at` AS `created_at`,`p`.`mentor_id` AS `mentor_id`,`p`.`status` AS `status`,`p`.`progress` AS `progress`,`p`.`start_date` AS `start_date`,`p`.`end_date` AS `end_date`,`p`.`type` AS `type`,`p`.`final_att` AS `final_att`,`u`.`fullname` AS `mentor_name`,case when `p`.`status` = 'B' then 'Belum dikerjakan' when `p`.`status` = 'D' then 'Sedang dikerjakan' when `p`.`status` = 'P' then 'Progress lengkap' when `p`.`status` = 'V' then 'Sedang diverifikasi' when `p`.`status` = 'C' then 'Sedang menunggu persetujuan' when `p`.`status` = 'S' then 'Selesai' else '' end AS `stat`,`pd`.`project_id` AS `pd`,`pm`.`project_id` AS `pm` from (((`cpm-db`.`project` `p` left join `cpm-db`.`users` `u` on(`u`.`user_id` = `p`.`mentor_id`)) left join (select distinct `cpm-db`.`project_member`.`project_id` AS `project_id` from `cpm-db`.`project_member`) `pm` on(`pm`.`project_id` = `p`.`project_id`)) left join (select distinct `cpm-db`.`project_detail`.`project_id` AS `project_id` from `cpm-db`.`project_detail`) `pd` on(`pd`.`project_id` = `p`.`project_id`));

-- ----------------------------
-- View structure for v_project_detail
-- ----------------------------
DROP VIEW IF EXISTS `v_project_detail`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_project_detail` AS select `d`.`detail_id` AS `detail_id`,`d`.`project_id` AS `project_id`,`d`.`description` AS `description`,`d`.`duration` AS `duration`,`d`.`code` AS `code`,`d`.`predecessor` AS `predecessor`,`d`.`percentage` AS `percentage`,`d`.`updated_at` AS `updated_at`,`d`.`progress_att` AS `progress_att`,`d`.`note` AS `note`,`d`.`updated_by` AS `updated_by`,`p`.`project_name` AS `project_name`,`p`.`mentor_id` AS `mentor_id`,`u`.`fullname` AS `mentor_name`,`d`.`ext_note` AS `ext_note`,`d`.`ext_reply` AS `ext_reply`,case when `d`.`percentage` = 100 then 'Sudah selesai' when `d`.`percentage` = 80 then 'Segera diperbaiki' when `d`.`percentage` = 50 then 'Sedang dicek' else 'Belum diupdate' end AS `status` from ((`project_detail` `d` left join `project` `p` on(`p`.`project_id` = `d`.`project_id`)) left join `users` `u` on(`u`.`user_id` = `p`.`mentor_id`));

-- ----------------------------
-- View structure for v_project_member
-- ----------------------------
DROP VIEW IF EXISTS `v_project_member`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_project_member` AS select `m`.`member_id` AS `member_id`,`m`.`project_id` AS `project_id`,`m`.`user_id` AS `user_id`,`u`.`fullname` AS `member_name` from (`project_member` `m` left join `users` `u` on(`u`.`user_id` = `m`.`user_id`));

SET FOREIGN_KEY_CHECKS = 1;
