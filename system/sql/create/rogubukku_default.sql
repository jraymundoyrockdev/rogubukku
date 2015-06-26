/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : rogubukku

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-04-27 22:48:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ministry
-- ----------------------------
DROP TABLE IF EXISTS `ministry`;
CREATE TABLE `ministry` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `ministry` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ministry
-- ----------------------------
INSERT INTO `ministry` VALUES ('1', 'None');
INSERT INTO `ministry` VALUES ('2', 'Music');
INSERT INTO `ministry` VALUES ('3', 'Dance');
INSERT INTO `ministry` VALUES ('4', 'GTTAM');
INSERT INTO `ministry` VALUES ('5', 'Usher');
INSERT INTO `ministry` VALUES ('6', 'YROCK');
INSERT INTO `ministry` VALUES ('7', 'Sunday School');
INSERT INTO `ministry` VALUES ('8', 'All');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `roles` VALUES ('2', 'admin', 'Administrative user, has access to everything.');

-- ----------------------------
-- Table structure for roles_users
-- ----------------------------
DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles_users
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ministry_id` tinyint(3) DEFAULT 1,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active_flag` enum('Y','N') DEFAULT 'N',
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  KEY `fk_users_2_idx` (`ministry_id`),
  CONSTRAINT `fk_users_2` FOREIGN KEY (`ministry_id`) REFERENCES `ministry` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for user_tokens
-- ----------------------------
DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for table `transactions`
-- ----------------------------

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ministry_id` int(10) unsigned NOT NULL,
  `transaction` varchar(50) NOT NULL,
  `colored` int(3) NOT NULL,
  `non_colored` int(3) NOT NULL,
  `reason` text NOT NULL,
  `transaction_date` datetime NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `logged_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logged_by` int(10) unsigned NOT NULL,
  `last_login` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;