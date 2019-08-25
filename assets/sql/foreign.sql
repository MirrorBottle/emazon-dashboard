ALTER TABLE `user` ADD FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

ALTER TABLE `dropdown_sub_menu` ADD FOREIGN KEY (`dropdown_menu_id`) REFERENCES `dropdown_menu` (`id`);

ALTER TABLE `dropdown_sub_menu` ADD FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

ALTER TABLE `access_menu` ADD FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

ALTER TABLE `access_menu` ADD FOREIGN KEY (`role_id`) REFERENCES `user` (`role_id`);

ALTER TABLE `user_token` ADD FOREIGN KEY (`email`) REFERENCES `user` (`email`);