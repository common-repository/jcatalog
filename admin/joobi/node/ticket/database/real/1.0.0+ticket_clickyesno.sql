CREATE TABLE IF NOT EXISTS `#__ticket_clickyesno` (
 `clickid` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `tkid` int(10) unsigned NOT NULL DEFAULT '0',
 `ip` int(10) unsigned DEFAULT NULL,
 `uid` int(10) unsigned NOT NULL DEFAULT '0',
 `created` int(10) unsigned NOT NULL DEFAULT '0',
 `yesno` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`clickid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;