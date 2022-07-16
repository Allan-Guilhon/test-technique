-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `finishes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cars` (`id`, `brand`, `model`, `hp`, `year`, `finishes`, `description`, `picture`, `price`, `created_at`, `updated_at`) VALUES
(1,	'Renault',	'Clio 4',	6,	'2018',	'Business',	'Boite manuel 6 rapports, 3 portes, toutes options, garantie 24 mois.',	'20220716093732renault-clio-iv-societe-12-16v-75-occasion-2018-albertville.jpg',	19500,	'2022-07-16 07:37:32',	'2022-07-16 07:37:32'),
(4,	'Peugeot',	'308',	7,	'2017',	'Executive',	'Boite automatique 6 vitesses, 5 portes, toutes options, garantie 24 mois',	'20220716095213381407_e922fca3592a3757faad66d363f8e356.jpg',	21000,	'2022-07-16 07:52:13',	'2022-07-16 07:52:13'),
(6,	'Citroen',	'DS4',	7,	'2020',	'Exclusive',	'Boite automatique 6 vitesses, toutes options, garantie 24 mois',	'20220716095543CITROEN-DS4-00.jpg',	25000,	'2022-07-16 07:55:43',	'2022-07-16 07:55:43'),
(7,	'Renault',	'Clio 4',	6,	'2018',	'Connected',	'Boite manuel 6 rapports, 3 portes, toutes options, garantie 24 mois.',	'20220716095811renault-clio-iv-societe-12-16v-75-occasion-2018-albertville.jpg',	17000,	'2022-07-16 07:58:11',	'2022-07-16 07:58:11'),
(8,	'Peugeot',	'308',	7,	'2019',	'Puretech',	'Boite auto 6 rapports, 5 portes, toutes options, garantie 24 mois.',	'20220716100152381407_e922fca3592a3757faad66d363f8e356.jpg',	21000,	'2022-07-16 08:01:52',	'2022-07-16 08:01:52'),
(9,	'Citroen',	'C4',	7,	'2018',	'Performance',	'Boite manuel 6 rapports, 5portes, toutes options, garantie 24 mois.',	'20220716100409CITROEN-DS4-00.jpg',	21000,	'2022-07-16 08:04:09',	'2022-07-16 08:04:09'),
(10,	'Renault',	'Clio 4',	6,	'2018',	'Business',	'Boite manuel 6 rapports, 3 portes, toutes options, garantie 24 mois.',	'20220716100546renault-clio-iv-societe-12-16v-75-occasion-2018-albertville.jpg',	16500,	'2022-07-16 08:05:46',	'2022-07-16 08:05:46'),
(11,	'Peugeot',	'308',	7,	'2020',	'Sport',	'Boite automatique 6 vitesses, 5 portes, toutes options, garantie 24 mois',	'20220716100651381407_e922fca3592a3757faad66d363f8e356.jpg',	24500,	'2022-07-16 08:06:51',	'2022-07-16 08:06:51'),
(12,	'Citroen',	'DS4',	7,	'2019',	'Puretech',	'Boite automatique 6 vitesses, 5 portes, toutes options, garantie 24 mois',	'20220716100847CITROEN-DS4-00.jpg',	21000,	'2022-07-16 08:08:47',	'2022-07-16 08:08:47'),
(16,	'Renault',	'Clio 4',	7,	'2017',	'Business',	'Boite manuel 6 rapports, 3 portes, toutes options, garantie 24 mois.',	'20220716144647renault-clio-iv-societe-12-16v-75-occasion-2018-albertville.jpg',	16000,	'2022-07-16 12:46:47',	'2022-07-16 12:46:47'),
(17,	'Peugeot',	'308',	7,	'2020',	'Sport',	'Boite automatique 6 vitesses, 5 portes, toutes options, garantie 24 mois',	'20220716144855381407_e922fca3592a3757faad66d363f8e356.jpg',	21000,	'2022-07-16 12:48:55',	'2022-07-16 12:48:55');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2022_07_13_095548_create_cars_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Allan',	'allan@nolastname.com',	NULL,	'$2y$10$6xQE2Yhe3Kzi.NYkCo6WHOf2xSKswBq9e.fOm7O4vLljkoZPv0gmC',	NULL,	'2022-07-16 07:33:30',	'2022-07-16 07:33:30');

-- 2022-07-16 14:50:05