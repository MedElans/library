/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : library

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-03 05:28:19
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
  PRIMARY KEY (`id`),
  KEY `categories_parent_id_index` (`parent_id`),
  KEY `categories_lft_index` (`lft`),
  KEY `categories_rgt_index` (`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', null, '1', '4', '0', 'Livres', '2016-01-03 04:04:22', '2016-01-03 04:48:37');
INSERT INTO `categories` VALUES ('2', null, '5', '6', '0', 'Articles', '2016-01-03 04:20:31', '2016-01-03 04:48:37');
INSERT INTO `categories` VALUES ('3', null, '7', '8', '0', 'Formations', '2016-01-03 04:20:42', '2016-01-03 04:48:37');
INSERT INTO `categories` VALUES ('4', null, '9', '12', '0', 'test', '2016-01-03 04:30:57', '2016-01-03 04:48:37');
INSERT INTO `categories` VALUES ('7', '4', '10', '11', '1', 'teeqsf', '2016-01-03 04:45:15', '2016-01-03 04:48:37');
INSERT INTO `categories` VALUES ('8', '1', '2', '3', '1', 'Développement personnel', '2016-01-03 04:48:37', '2016-01-03 04:48:37');

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
INSERT INTO `users` VALUES ('3', 'Souhail Merroun', 'souhail.merroun@hotmail.com', '$2y$10$EGD9b9smS2/yF8RL/5LImuJ4961/xFo/La.87RIfjDY8cWZic/rYy', 'eJ608NMvsTmlW5mr7EQFFwQfjzAXPuoT2h1flWjBoKkPpgijvg0B9kPCA3K5', '2016-01-01 10:59:20', '2016-01-01 11:07:40');
