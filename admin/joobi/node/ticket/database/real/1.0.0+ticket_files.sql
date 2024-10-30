CREATE TABLE IF NOT EXISTS `#__ticket_files` (
 `filid` int(10) unsigned NOT NULL,
 `tkid` int(10) unsigned NOT NULL,
 `ordering` tinyint(3) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (`tkid`,`filid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;