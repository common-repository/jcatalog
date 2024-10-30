CREATE TABLE IF NOT EXISTS `#__product_images` (
 `pid` int(10) unsigned NOT NULL DEFAULT '0',
 `filid` int(10) unsigned NOT NULL DEFAULT '0',
 `ordering` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `premium` tinyint(4) NOT NULL DEFAULT '0',
 PRIMARY KEY (`pid`,`filid`),
 KEY `IX_product_images_pid_premium_ordering` (`pid`,`premium`,`ordering`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;