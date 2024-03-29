CREATE TABLE `user`
(
  `id` int PRIMARY KEY,
  `first_name` text,
  `last_name` text,
  `email` text,
  `password` text,
  `img` text,
  `role_id` int,
  `created_at` bigint,
  `is_active` boolean
);

CREATE TABLE `user_token`
(
  `id` int PRIMARY KEY,
  `email` text,
  `token` text
);

CREATE TABLE `role`
(
  `id` int PRIMARY KEY,
  `name` text
);