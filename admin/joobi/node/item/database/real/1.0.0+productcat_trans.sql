CREATE TABLE IF NOT EXISTS `#__productcat_trans` (
 `lgid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
 `catid` int(10) unsigned NOT NULL DEFAULT '0',
 `name` varchar(100) NOT NULL,
 `description` text NOT NULL,
 `auto` tinyint(4) NOT NULL DEFAULT '1',
 `fromlgid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `seotitle` varchar(255) NOT NULL,
 `seokeywords` varchar(255) NOT NULL,
 `seodescription` varchar(255) NOT NULL,
 `shorturl` varchar(250) NOT NULL,
 PRIMARY KEY (`lgid`,`catid`),
 KEY `IX_productcat_trans_name_sort` (`name`),
 FULLTEXT KEY `IX_productcat_trans_name` (`name`),
 FULLTEXT KEY `IX_productcat_trans_description` (`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;