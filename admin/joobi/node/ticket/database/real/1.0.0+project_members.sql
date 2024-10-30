CREATE TABLE IF NOT EXISTS `#__project_members` (
 `pjid` smallint(5) unsigned NOT NULL,
 `uid` int(10) unsigned NOT NULL,
 `supportlevel` tinyint(3) unsigned NOT NULL DEFAULT '1',
 `role` tinyint(3) unsigned NOT NULL DEFAULT '0',
 `notify` tinyint(3) unsigned NOT NULL DEFAULT '1',
 PRIMARY KEY (`pjid`,`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;