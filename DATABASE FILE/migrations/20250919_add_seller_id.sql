-- Migration: add seller_id to tbl_product for ownership
ALTER TABLE `tbl_product`
  ADD COLUMN `seller_id` INT NULL AFTER `ecat_id`;

ALTER TABLE `tbl_product`
  ADD INDEX `idx_product_seller_id` (`seller_id`);

-- Optional (requires InnoDB and compatible FK settings):
-- ALTER TABLE `tbl_product`
--   ADD CONSTRAINT `fk_product_seller`
--   FOREIGN KEY (`seller_id`) REFERENCES `tbl_user`(`id`)
--   ON DELETE SET NULL
--   ON UPDATE CASCADE;
