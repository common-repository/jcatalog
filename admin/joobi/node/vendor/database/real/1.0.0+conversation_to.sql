CREATE TABLE IF NOT EXISTS `#__conversation_to` (
 `uid` int(10) unsigned NOT NULL,
 `mcid` int(10) unsigned NOT NULL,
 PRIMARY KEY (`uid`,`mcid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;