CREATE TABLE IF NOT EXISTS `#__product_downloads` (
 `pid` int(10) unsigned NOT NULL,
 `filid` int(10) unsigned NOT NULL,
 `ordering` smallint(5) unsigned NOT NULL DEFAULT '1',
 PRIMARY KEY (`pid`,`filid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;