
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
CREATE OR REPLACE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `cpm-db`.`v_project` AS SELECT
	`p`.`project_id` AS `project_id`,
	`p`.`project_name` AS `project_name`,
	`p`.`instance` AS `instance`,
	`p`.`description` AS `description`,
	`p`.`attachment` AS `attachment`,
	`p`.`created_by` AS `created_by`,
	`p`.`created_at` AS `created_at`,
	`p`.`mentor_id` AS `mentor_id`,
	`p`.`status` AS `status`,
	`p`.`progress` AS `progress`,
	`p`.`start_date` AS `start_date`,
	`p`.`end_date` AS `end_date`,
	`p`.`type` AS `type`,
	`p`.`final_att` AS `final_att`,
	`p`.`pho` AS `pho`,
	`p`.`fho` AS `fho`,
	`p`.`owner` AS `owner`,
	`p`.`location` AS `location`,
	`p`.`no_ctr` AS `no_ctr`,
	`p`.`type_ctr` AS `type_ctr`,
	`p`.`value` AS `value`,
	`p`.`spmk` AS `spmk`,
	`u`.`fullname` AS `mentor_name`,
CASE
		
		WHEN `p`.`status` = 'B' THEN
		'Belum dikerjakan' 
		WHEN `p`.`status` = 'D' THEN
		'Sedang dikerjakan' 
		WHEN `p`.`status` = 'P' 
		AND `p`.`nkp` IS NOT NULL THEN
			'Progress lengkap (Perlu perbaikan)' 
			WHEN `p`.`status` = 'P' 
			AND `p`.`nkp` IS NULL THEN
				'Progress lengkap' 
				WHEN `p`.`status` = 'V' THEN
				'Sedang menunggu verifikasi' 
				WHEN `p`.`status` = 'C' THEN
				'Sedang menunggu persetujuan' 
				WHEN `p`.`status` = 'S' THEN
				'Selesai' ELSE '' 
			END AS `stat`,
			`pd`.`project_id` AS `pd`,
			`pm`.`project_id` AS `pm` 
		FROM
			(((
						`cpm-db`.`project` `p`
						LEFT JOIN `cpm-db`.`users` `u` ON ( `u`.`user_id` = `p`.`mentor_id` ))
				LEFT JOIN ( SELECT DISTINCT `cpm-db`.`project_member`.`project_id` AS `project_id` FROM `cpm-db`.`project_member` ) `pm` ON ( `pm`.`project_id` = `p`.`project_id` ))
	LEFT JOIN ( SELECT DISTINCT `cpm-db`.`project_detail`.`project_id` AS `project_id` FROM `cpm-db`.`project_detail` ) `pd` ON ( `pd`.`project_id` = `p`.`project_id` ));