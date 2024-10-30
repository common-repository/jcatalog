CREATE TABLE IF NOT EXISTS `#__ticket_reply_files` (
 `filid` int(10) unsigned NOT NULL,
 `tkrid` int(10) unsigned NOT NULL,
 `ordering` tinyint(3) unsigned NOT NULL DEFAULT '1',
 PRIMARY KEY (`tkrid`,`filid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;