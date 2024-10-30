CREATE TABLE IF NOT EXISTS `#__product_download_members` (
 `dmid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `pid` int(10) unsigned NOT NULL DEFAULT '0',
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`dmid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;