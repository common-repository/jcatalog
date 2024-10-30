CREATE TABLE IF NOT EXISTS `#__emanager_handled` (
 `email` varchar(250) NOT NULL,
 `type` int(10) unsigned NOT NULL,
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 `total` tinyint(3) unsigned NOT NULL DEFAULT '1',
 PRIMARY KEY (`email`(100),`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;