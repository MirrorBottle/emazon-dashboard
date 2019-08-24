CREATE TABLE `user`
(
  `id` int PRIMARY KEY,
  `first_name` text,
  `last_name` text,
  `email` text,
  `password` text,
  `photo_profile_url` text,
  `role_id` int,
  `created_at` bigint,
  `is_active` boolean
);

CREATE TABLE `role`
(
  `id` int PRIMARY KEY,
  `name` text
);