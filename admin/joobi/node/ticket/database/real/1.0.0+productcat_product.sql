CREATE TABLE IF NOT EXISTS `#__productcat_product` (
 `pid` int(11) NOT NULL,
 `catid` smallint(5) NOT NULL DEFAULT '0',
 `ordering` tinyint(3) unsigned NOT NULL DEFAULT '99',
 `used` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `premium` tinyint(4) NOT NULL DEFAULT '0',
 PRIMARY KEY (`pid`,`catid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;