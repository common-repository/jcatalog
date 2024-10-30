CREATE TABLE IF NOT EXISTS `#__ticket_rating` (
 `trid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `tkrid` mediumint(8) unsigned NOT NULL DEFAULT '0',
 `rate` int(10) unsigned NOT NULL DEFAULT '0',
 `supportuid` int(10) unsigned NOT NULL DEFAULT '0',
 `pjid` smallint(5) unsigned NOT NULL DEFAULT '0',
 `modified` int(10) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`trid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;