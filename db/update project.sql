ALTER TABLE `cpm-db`.`project` 
ADD COLUMN `pho` datetime NULL AFTER `final_att`,
ADD COLUMN `fho` datetime NULL AFTER `pho`,
ADD COLUMN `owner` varchar(255) NULL AFTER `fho`,
ADD COLUMN `location` varchar(255) NULL AFTER `owner`,
ADD COLUMN `no_ctr` varchar(255) NULL AFTER `location`,
ADD COLUMN `type_ctr` varchar(255) NULL AFTER `no_ctr`,
ADD COLUMN `value` varchar(255) NULL AFTER `type_ctr`,
ADD COLUMN `spmk` varchar(255) NULL AFTER `value`;

ALTER TABLE `cpm-db`.`users` 
ADD COLUMN `pict` varchar(255) NULL AFTER `birthplace`;