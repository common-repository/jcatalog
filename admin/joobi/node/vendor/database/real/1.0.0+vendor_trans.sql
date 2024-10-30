CREATE TABLE IF NOT EXISTS `#__vendor_trans` (
 `vendid` int(10) unsigned NOT NULL,
 `lgid` int(10) unsigned NOT NULL,
 `name` varchar(254) NOT NULL,
 `description` text NOT NULL,
 `auto` tinyint(4) NOT NULL DEFAULT '1',
 `fromlgid` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `shorturl` varchar(250) NOT NULL,
 PRIMARY KEY (`vendid`,`lgid`),
 KEY `IX_vendor_trans_name` (`name`),
 FULLTEXT KEY `FX_vendor_trans_name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;