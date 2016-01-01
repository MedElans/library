/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : objectifs

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-16 09:33:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for books
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `idCategorie` int(10) unsigned NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `total` int(10) unsigned NOT NULL,
  `accomplie` int(10) unsigned NOT NULL DEFAULT '0',
  `idUnite` int(10) unsigned NOT NULL,
  `idSource` int(10) unsigned NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateMiseAJour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateFin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `livres_idCategorie_categories` (`idCategorie`),
  KEY `livres_idUnite_unites` (`idUnite`),
  KEY `sources_idSource_sources` (`idSource`),
  CONSTRAINT `livres_idCategorie_categories` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`id`),
  CONSTRAINT `livres_idUnite_unites` FOREIGN KEY (`idUnite`) REFERENCES `units` (`id`),
  CONSTRAINT `sources_idSource_sources` FOREIGN KEY (`idSource`) REFERENCES `sources` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('2', 'Propulsez votre site avec WordPress', null, '48', '65.jpg', 'https://openclassrooms.com/courses/propulsez-votre-site-avec-wordpress', '112', '0', '1', '2', '2015-09-07 07:58:40', '2015-09-07 07:58:40', null);
INSERT INTO `books` VALUES ('3', 'Dynamisez vos sites web avec JavaScript', null, '49', 'js.jpg', 'https://openclassrooms.com/courses/dynamisez-vos-sites-web-avec-javascript', '277', '199', '1', '2', '2015-09-10 08:02:22', '2015-09-10 08:02:22', null);
