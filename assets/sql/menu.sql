CREATE TABLE `menu`
(
  `id` int PRIMARY KEY,
  `name` text,
  `icon` text,
  `url` text
);

CREATE TABLE `dropdown_menu`
(
  `id` int PRIMARY KEY,
  `name` text,
  `icon` text
);

CREATE TABLE `dropdown_sub_menu`
(
  `dropdown_menu_id` int,
  `menu_id` int
);

CREATE TABLE `access_menu`
(
  `id` int PRIMARY KEY,
  `menu_id` int,
  `role_id` int
);