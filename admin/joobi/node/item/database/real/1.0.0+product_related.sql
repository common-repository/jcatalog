CREATE TABLE IF NOT EXISTS `#__product_related` (
 `pid` int(10) unsigned NOT NULL DEFAULT '0',
 `relpid` int(10) unsigned NOT NULL DEFAULT '0',
 `ordering` smallint(5) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`pid`,`relpid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;