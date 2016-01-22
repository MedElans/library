/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : library

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-22 11:27:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_index` (`parent_id`),
  KEY `categories_lft_index` (`lft`),
  KEY `categories_rgt_index` (`rgt`),
  KEY `categories_user_id_foreign` (`user_id`),
  CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('5', null, '1', '2', '0', 'Réligion', '2016-01-22 10:18:37', '2016-01-22 10:18:37', '3');
INSERT INTO `categories` VALUES ('6', null, '3', '4', '0', 'Informatique', '2016-01-22 10:18:43', '2016-01-22 11:13:29', '3');
INSERT INTO `categories` VALUES ('7', null, '5', '6', '0', 'Développement personnel', '2016-01-22 10:18:49', '2016-01-22 11:13:29', '3');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_01_03_032719_create_categories_table', '2');
INSERT INTO `migrations` VALUES ('2016_01_03_082934_create_units_table', '3');
INSERT INTO `migrations` VALUES ('2016_01_03_083538_create_sources_table', '3');
INSERT INTO `migrations` VALUES ('2016_01_22_102449_add_description_source_table', '4');
INSERT INTO `migrations` VALUES ('2016_01_22_103405_add_user_id', '5');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for sources
-- ----------------------------
DROP TABLE IF EXISTS `sources`;
CREATE TABLE `sources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sources_user_id_foreign` (`user_id`),
  CONSTRAINT `sources_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sources
-- ----------------------------
INSERT INTO `sources` VALUES ('2', 'Grafikart', 'http://grafikart.fr/', '2016-01-03 08:58:39', '2016-01-22 10:30:14', '', '3');
INSERT INTO `sources` VALUES ('4', 'Openclassrooms', 'http://openclassrooms.com/', '2016-01-03 08:59:48', '2016-01-22 10:32:32', '', '3');
INSERT INTO `sources` VALUES ('5', 'Udemi', 'https://www.udemy.com/', '2016-01-20 11:25:40', '2016-01-20 11:25:40', '', '3');

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `units_user_id_foreign` (`user_id`),
  CONSTRAINT `units_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES ('2', 'Chapitres', '2016-01-03 08:59:27', '2016-01-03 09:07:01', '3');
INSERT INTO `units` VALUES ('3', 'Minutes', '2016-01-03 08:59:33', '2016-01-03 08:59:33', '3');
INSERT INTO `units` VALUES ('4', 'Pages', '2016-01-03 09:04:28', '2016-01-03 09:04:28', '3');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'Souhail Merroun', 'souhail.merroun@hotmail.com', '$2y$10$EGD9b9smS2/yF8RL/5LImuJ4961/xFo/La.87RIfjDY8cWZic/rYy', 'Q7ul6bh1bhlMoPsmKTPG6ULeYec9mrpmahK7Qpum4oXt08xsEzjSfBbsoVjS', '2016-01-01 10:59:20', '2016-01-20 11:36:01');
