
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class`  (
  `cls_id` int NOT NULL AUTO_INCREMENT,
  `cls_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cls_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES (1, 'X MM');
INSERT INTO `class` VALUES (2, 'XI MM');
INSERT INTO `class` VALUES (3, 'XII MM');

SET FOREIGN_KEY_CHECKS = 1;


ALTER TABLE `cpm-db`.`users` 
ADD COLUMN `cls_id` int NULL AFTER `pict`;

CREATE OR REPLACE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `cpm-db`.`v_project_member` AS SELECT
	`m`.`member_id` AS `member_id`,
	`m`.`project_id` AS `project_id`,
	`m`.`user_id` AS `user_id`,
	`u`.`fullname` AS `member_name`,
	`c`.`cls_name` AS `cls_name` 
FROM
	((
			`project_member` `m`
		LEFT JOIN `users` `u` ON ( `u`.`user_id` = `m`.`user_id` ))
	LEFT JOIN `class` `c` ON ( `c`.`cls_id` = `u`.`cls_id` ));