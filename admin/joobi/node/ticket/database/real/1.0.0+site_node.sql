CREATE TABLE IF NOT EXISTS `#__site_node` (
 `stid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `url` varchar(255) NOT NULL,
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `ip` int(10) unsigned DEFAULT NULL,
 `domain` tinyint(3) unsigned NOT NULL DEFAULT '31',
 `parent` int(10) unsigned NOT NULL DEFAULT '0',
 `password` varchar(255) NOT NULL DEFAULT '0',
 `description` text NOT NULL,
 `alias` varchar(200) NOT NULL,
 PRIMARY KEY (`stid`),
 KEY `IX_site_node_url` (`url`),
 KEY `IX_site_node_modified` (`modified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;