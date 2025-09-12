-- Migration: add supplier contact fields to tbl_product
ALTER TABLE `tbl_product`
  ADD COLUMN `p_supplier_phone` varchar(25) NULL AFTER `p_return_policy`,
  ADD COLUMN `p_supplier_whatsapp` varchar(25) NULL AFTER `p_supplier_phone`;
