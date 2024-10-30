CREATE TABLE IF NOT EXISTS `#__address_members` (
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `adid` int(10) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `ordering` tinyint(3) unsigned NOT NULL DEFAULT '9',
 PRIMARY KEY (`adid`,`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;