CREATE TABLE IF NOT EXISTS `#__productcat_category` (
 `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `catidparent` smallint(5) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`catid`,`catidparent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;