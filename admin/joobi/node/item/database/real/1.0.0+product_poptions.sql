CREATE TABLE IF NOT EXISTS `#__product_poptions` (
 `opid` mediumint(8) unsigned NOT NULL,
 `pid` int(10) unsigned NOT NULL,
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `ordering` tinyint(3) unsigned NOT NULL DEFAULT '5',
 PRIMARY KEY (`pid`,`opid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;