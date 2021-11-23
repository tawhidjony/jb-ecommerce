-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table jb_ecomarce.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.categories: ~10 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `uuid`, `name`, `icon`, `photo`, `created_at`, `updated_at`) VALUES
	(4, 'd409f70b-bcc4-41f7-86c5-b0a48756b176', 'Electronics', '<i class="fas fa-laptop-medical"></i>', 'upload/category/kgUuhjKy96TMCebO7NEOK9S3uSXtLBsYcBonAI34.png', '2021-11-22 14:20:43', '2021-11-22 14:20:43'),
	(5, '4b6ec38f-821f-4952-bfa4-0d914d8184a5', 'Smart Phones', '<i class="fas fa-mobile-alt"></i>', 'upload/category/w2qftEkLGILerjvnjB1HkjVczOHO9E1R1Xtslzlt.png', '2021-11-22 14:21:13', '2021-11-22 14:21:13'),
	(6, '12fa05ac-0631-436c-a377-e41c9821102d', 'Cameras & Photo', '<i class="fas fa-camera-retro"></i>', 'upload/category/egqAwl2Muz479VainbX8HHA1vcbAGjsOlf9jfKfy.png', '2021-11-22 14:21:41', '2021-11-22 14:21:41'),
	(7, 'e1376002-e854-4406-ae67-b4a998bc41c3', 'Women\'s Fashion', '<i class="fas fa-female"></i>', 'upload/category/kUVI9fz19R1grWh0y1k5lwbT8pJ3j5iNspKw5HXp.png', '2021-11-22 14:22:13', '2021-11-22 14:22:13'),
	(8, '10ea372e-de00-4d45-a3b4-65d495aade21', 'Men\'s Fashion', '<i class="fas fa-male"></i>', 'upload/category/fUpBwLggFNakMPiMYopnwAVsrlT8XqmpwvsDEqAr.png', '2021-11-22 14:23:21', '2021-11-22 14:23:21'),
	(9, '484fa1e0-eef2-4f9c-9398-bfb98781e161', 'Healthy & Beauty', '<i class="fas fa-heartbeat"></i>', 'upload/category/rhGbNGf22m7YuoJ4oX61XL8Y206bfHW1UUqteZXu.png', '2021-11-22 14:24:14', '2021-11-22 14:24:14'),
	(10, 'e1a510ad-90b5-49ea-b2b9-6fa6a766e0f4', 'Gift Ideas', '<i class="fas fa-gift"></i>', 'upload/category/MY0xagWYNwu9YAArA8cX3bpGBPj4Wn2Vvw6UsXRf.png', '2021-11-22 14:24:58', '2021-11-22 14:25:38'),
	(11, 'bccad76b-3ce3-40ae-861c-57332baab1fe', 'Toy & Games', '<i class="fas fa-gamepad"></i>', 'upload/category/VU3ThNdpAYcHQRVWD27vjmLpsILnhQfwO2qURrsA.png', '2021-11-22 14:26:50', '2021-11-22 14:26:50'),
	(12, 'f22da26e-04c7-40b9-b103-155e4890d59b', 'Cooking', '<i class="fas fa-blender"></i>', 'upload/category/CeMorM7aR1BqkEJgb1xiMLov4oTVMyUxulPEZQxC.png', '2021-11-22 14:27:20', '2021-11-22 14:27:20'),
	(13, '788c2c44-740d-4fae-b4f0-f1071965b3c4', 'Accessories', '<i class="fas fa-swatchbook"></i>', 'upload/category/DJOmlGiltqhQwTeOBrfigxDPkvwao0Db1IM09P6Z.png', '2021-11-22 14:28:24', '2021-11-22 14:28:24');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.migrations: ~12 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_09_09_050636_create_permission_tables', 1),
	(5, '2021_10_24_050440_create_products_table', 1),
	(6, '2021_10_24_050558_create_categories_table', 1),
	(7, '2021_11_16_034828_create_sliders_table', 1),
	(8, '2021_11_16_035135_create_shippings_table', 1),
	(9, '2021_11_16_035205_create_orders_table', 1),
	(10, '2021_11_16_035220_create_order_details_table', 1),
	(11, '2021_11_16_035236_create_payments_table', 1),
	(12, '2021_11_16_035604_create_variations_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.model_has_roles: ~1 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.order_details
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.order_details: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.payments: ~0 rows (approximately)
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variation` json NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.products: ~5 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `uuid`, `name`, `price`, `qty`, `variation`, `description`, `thumbnail`, `product_img`, `created_at`, `updated_at`, `category_id`) VALUES
	(1, '5ad39023-2527-4da8-9dc7-2c240f3bb2a6', 'MacBook Pro, 16-inch,10-Core CPU 16-Core GPU, 16GB Unified Memory, 1TB SSD Storage¹.', '230000', '1', '["Amsterdam"]', '<div><strong>MacBook Pro, </strong></div>\r\n<div>16-inch,10-Core CPU</div>\r\n<div>16-Core GPU,</div>\r\n<div>16GB Unified Memory,</div>\r\n<div>1TB SSD Storage&sup1;.</div>', 'upload/products/thumbnail/qQNBfNhO7nTr89H9V28OqgWEuTjZPV4riZLiNWsF.png', '[{}, {}, {}, {}, {}, "upload/products/product_img/bgT5OvRpcG86faVbHnTc67dLrwAcg0iVOn1Xn0es.png", "upload/products/product_img/VtasW8SEqLjW29p101WgHF9lyEMovaR2aSBBIr8j.jpg", "upload/products/product_img/DU805HRZub4wvuDo2BHi5HCG1er7ww1P37O14JJz.jpg", "upload/products/product_img/HphZHGvma55X2PfK8KMgTuPCiB3MkPmCKRQkJzAh.jpg", "upload/products/product_img/8SiNXmmcDsqs850Luh6MPOxZzuEa2HknLKkOcgBr.jpg"]', '2021-11-22 14:04:27', '2021-11-22 14:04:27', '1'),
	(2, '68fcabe7-55ea-4826-9689-79b4a17d4618', 'iPhone 13 Pro Max 256GB A15 Bionic chip.', '110000', '1', '["Amsterdam"]', '<div><strong>iPhone 13 Pro Max </strong></div>\r\n<div>256GB</div>\r\n<div>A15 Bionic chip.</div>', 'upload/products/thumbnail/EiS6zpOE2P0mZgLgVBaXTJWeTOfANBXibmqxoLPq.png', '[{}, {}, {}, {}, {}, "upload/products/product_img/sAmRiDtA5bi7C8LKvYBR3Q4yKhJNnuoyxLTCIkT5.png", "upload/products/product_img/bLBQlTomuBPmL0QjhxFJmDNGxn0gC8aU8u1B4Fck.png", "upload/products/product_img/rRiPLO1F92zdK2utNOHqZga1rodZlkuHeDFkUJG9.png", "upload/products/product_img/X8vdAOsIbdZtBOeBHPwLZXWxEFt1imra1MbzTYJO.png", "upload/products/product_img/QHs8FDiNfADr7BxgJcc50p9EMXVm5479NBUiGhYI.png"]', '2021-11-22 14:33:41', '2021-11-22 14:33:41', '5'),
	(3, '5246bb56-fa91-4caf-932d-932120ef0827', 'Apple Watch, Gold Aluminum Case with Sport Loop, 40mm.', '25000', '1', '["40mm"]', '<div><strong>Apple Watch, </strong></div>\r\n<div>Gold Aluminum Case with Sport Loop,</div>\r\n<div>40mm.</div>', 'upload/products/thumbnail/qu6LggqqGJLhoYsloeVLBN8yXtLLFiD9wOX6KLAN.jpg', '[{}, {}, {}, {}, "upload/products/product_img/mUVJtaGM1RA3bYB2qOH4uyzwqJG4kbKK9XulJNnX.jpg", "upload/products/product_img/eRiDjNTlVz8dvmZ2oNl77ofMhYIpqBoa45I5UZrU.jpg", "upload/products/product_img/5QzBsAeUcMlebm5zRpXEF1RqAvJFHuTy72jXjD9I.jpg", "upload/products/product_img/ZhBsIK2Sx3IPs2ysrJZsTV3bVwgpSrJwHA5chFPU.jpg"]', '2021-11-22 14:35:54', '2021-11-22 14:35:54', '13'),
	(4, '764f8e16-1df5-4f5c-9806-ed4052e703db', 'iPad Air 256GB, Wi-Fi + Cellular model.', '73500', '1', '["256GB"]', '<div><strong>iPad Air </strong></div>\r\n<div>256GB,</div>\r\n<div>Wi-Fi + Cellular model.</div>', 'upload/products/thumbnail/puV36P84FSHr03acYpGAI5c7KMEYxQTuzCJXUrzI.png', '[{}, {}, {}, {}, "upload/products/product_img/xu64bSbv8XFenPcysSXRhssRubvO3Pdb1lIa5FZw.png", "upload/products/product_img/j6mvjH1onSSf3WPYnVM56uwvKZk9mqpi2bj2dCSz.png", "upload/products/product_img/wcKffzIwt5CEICbsnBEFpWPylP8Te5b1ifgLAG5D.png", "upload/products/product_img/xMTCXAcKe5LGaWxXIdSVAwuAYQl91dJ9WcE0Z36a.png"]', '2021-11-22 14:37:35', '2021-11-22 14:37:35', '4'),
	(5, 'c6ee2d41-3571-4495-a1b4-0ed6dc14d6a0', 'AirPods Max with 6 months of Apple Music free!', '43200', '1', '["AirPods Max"]', '<div>AirPods Max with 6 months of Apple Music free!</div>', 'upload/products/thumbnail/e36zRJSXdq2c4962HJNSwEnrb72YrXtEMEk3wEYs.png', '[{}, {}, {}, {}, "upload/products/product_img/xoKwSszHEfbKabiHivlnMVSsyGgkxE9dDC3F4mf2.png", "upload/products/product_img/rItRxFM46p8OmThMRnnipyVQbBPXdr3tAu9Ly0fK.png", "upload/products/product_img/oGZrz6YCO3wOlSsN2u5Qcy6crXfNbAmo8dvU63ld.png", "upload/products/product_img/3xHQirJCxBGwtz2MmStsMlBT0EwVroE0PbqjuKQo.png"]', '2021-11-22 14:38:59', '2021-11-22 14:38:59', '13');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.roles: ~1 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'super-admin', 'web', NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.role_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.shippings
CREATE TABLE IF NOT EXISTS `shippings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.shippings: ~0 rows (approximately)
/*!40000 ALTER TABLE `shippings` DISABLE KEYS */;
/*!40000 ALTER TABLE `shippings` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sliders_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.sliders: ~0 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `isRole` tinyint(1) NOT NULL DEFAULT '0',
  `address` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `isRole`, `address`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'super-admin', 'admin@gmail.com', NULL, '$2y$10$peoJcZByoy7KtVRPBSQ4KuUGNbs36riYgp3hav0Zy5rpRa38f7rQq', NULL, 0, 0, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table jb_ecomarce.variations
CREATE TABLE IF NOT EXISTS `variations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jb_ecomarce.variations: ~0 rows (approximately)
/*!40000 ALTER TABLE `variations` DISABLE KEYS */;
/*!40000 ALTER TABLE `variations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
