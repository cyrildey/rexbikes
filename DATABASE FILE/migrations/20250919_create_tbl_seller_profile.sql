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