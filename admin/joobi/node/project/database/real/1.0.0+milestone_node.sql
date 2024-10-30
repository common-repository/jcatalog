CREATE TABLE IF NOT EXISTS `#__milestone_node` (
 `mileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `deadline` int(10) unsigned NOT NULL DEFAULT '0',
 `startdate` int(10) unsigned NOT NULL DEFAULT '0',
 `alias` varchar(255) NOT NULL,
 PRIMARY KEY (`mileid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;