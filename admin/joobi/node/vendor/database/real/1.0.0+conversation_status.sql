CREATE TABLE IF NOT EXISTS `#__conversation_status` (
 `uid` int(10) unsigned NOT NULL,
 `mcid` int(10) unsigned NOT NULL,
 `isread` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `replies` smallint(5) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`uid`,`mcid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;