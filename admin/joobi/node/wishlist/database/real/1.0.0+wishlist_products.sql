CREATE TABLE IF NOT EXISTS `#__wishlist_products` (
 `pid` int(10) unsigned NOT NULL,
 `wlid` int(10) unsigned NOT NULL,
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `publish` tinyint(4) NOT NULL DEFAULT '1',
 `vendid` int(10) unsigned NOT NULL DEFAULT '0',
 `catid` int(10) unsigned NOT NULL DEFAULT '0',
 `name` varchar(254) NOT NULL,
 PRIMARY KEY (`wlid`,`pid`,`vendid`,`catid`),
 KEY `IX_wishlist_products_pid_publish` (`pid`,`publish`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;