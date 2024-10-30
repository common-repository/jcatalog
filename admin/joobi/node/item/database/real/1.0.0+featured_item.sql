CREATE TABLE IF NOT EXISTS `#__featured_item` (
 `pid` int(10) unsigned NOT NULL,
 `ftdid` smallint(5) unsigned NOT NULL,
 `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `expiration` int(10) unsigned NOT NULL DEFAULT '0',
 `ordering` smallint(5) unsigned NOT NULL DEFAULT '0',
 `wdgt_91` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`pid`,`ftdid`),
 KEY `PK_item_featured_ordering_status_expiration` (`ordering`,`status`,`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;