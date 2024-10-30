CREATE TABLE IF NOT EXISTS `#__product_bundle` (
 `pid` int(10) unsigned NOT NULL DEFAULT '0',
 `ref_pid` int(10) unsigned NOT NULL DEFAULT '0',
 `quantity` smallint(5) unsigned NOT NULL DEFAULT '1',
 PRIMARY KEY (`pid`,`ref_pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;