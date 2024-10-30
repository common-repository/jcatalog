CREATE TABLE IF NOT EXISTS `#__item_terms` (
 `termid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `namekey` varchar(150) NOT NULL,
 `alias` varchar(150) NOT NULL,
 `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `core` tinyint(4) NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `name` varchar(50) NOT NULL,
 `url` varchar(255) NOT NULL,
 `rolid` smallint(5) unsigned NOT NULL DEFAULT '1',
 `vendid` int(10) unsigned NOT NULL DEFAULT '0',
 `share` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`termid`),
 UNIQUE KEY `UK_namekey_item_terms` (`namekey`),
 KEY `IX_item_terms_publish_core_modified` (`publish`,`core`,`modified`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;