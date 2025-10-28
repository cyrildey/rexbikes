-- Migration: add supplier contact fields to tbl_product
ALTER TABLE `tbl_product`
  ADD COLUMN `p_supplier_phone` varchar(25) NULL AFTER `p_return_policy`,
  ADD COLUMN `p_supplier_whatsapp` varchar(25) NULL AFTER `p_supplier_phone`;
  
ALTER TABLE `tbl_product`
  ADD COLUMN `seller_id` INT NULL AFTER `ecat_id`;

ALTER TABLE `tbl_product`
  ADD INDEX `idx_product_seller_id` (`seller_id`);


-- Migration: create seller profile table to store extended registration fields
CREATE TABLE IF NOT EXISTS `tbl_seller_profile` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `company_name` VARCHAR(100) DEFAULT '',
  `country_id` INT DEFAULT NULL,
  `address` TEXT NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `state` VARCHAR(100) NOT NULL,
  `zip` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `idx_seller_profile_user_id` (`user_id`),
  CONSTRAINT `fk_seller_profile_user`
    FOREIGN KEY (`user_id`) REFERENCES `tbl_user`(`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;