/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : objectifs

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-16 09:34:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for formations
-- ----------------------------
DROP TABLE IF EXISTS `formations`;
CREATE TABLE `formations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `total` int(10) unsigned NOT NULL,
  `accomplished` int(10) unsigned NOT NULL DEFAULT '0',
  `unitId` int(10) unsigned DEFAULT NULL,
  `sourceId` int(10) unsigned DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoryId` int(10) unsigned NOT NULL,
  `update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ended` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUnite_unitesFormations` (`unitId`),
  KEY `idSource_sourcesFormations` (`sourceId`),
  KEY `idCategorie_categoriesFormations` (`categoryId`),
  CONSTRAINT `idCategorie_categoriesFormations` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`),
  CONSTRAINT `idSource_sourcesFormations` FOREIGN KEY (`sourceId`) REFERENCES `sources` (`id`),
  CONSTRAINT `idUnite_unitesFormations` FOREIGN KEY (`unitId`) REFERENCES `units` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of formations
-- ----------------------------
INSERT INTO `formations` VALUES ('2', 'apprendre cakephp 2.x ', null, '3.png', '481', '76', '2', '1', '2015-08-29 12:53:10', '37', '2015-09-01 03:26:04', null);
INSERT INTO `formations` VALUES ('5', 'la programmation orientée objet en php', null, '8.png', '443', '306', '2', '1', '2015-09-03 18:06:22', '16', '2015-09-18 08:28:21', null);
INSERT INTO `formations` VALUES ('10', 'javascript fundamentals ', null, 'mqdefault.jpg', '87', '87', '2', '3', '2015-09-12 22:31:02', '49', '2015-09-12 22:31:02', null);
INSERT INTO `formations` VALUES ('12', 'merise', null, null, '46', '46', '2', '1', '2015-09-15 16:31:32', '51', '2015-09-15 16:31:32', null);
