CREATE DATABASE IF NOT EXISTS `Hsist`;
USE `Hsist`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Login` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Imagem` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `DataDeRegistro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuantRepos` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_unique` (`Login`),
  UNIQUE KEY `users_nome_unique` (`Nome`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
