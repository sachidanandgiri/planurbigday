--
-- 29 March 2020
--

ALTER TABLE `users` ADD `role_id` INT(1) NOT NULL AFTER `occasion_date`;
UPDATE `planurbigday`.`users` SET `role_id` = '1' WHERE `users`.`id` = 1;