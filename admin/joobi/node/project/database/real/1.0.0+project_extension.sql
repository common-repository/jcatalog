CREATE TABLE IF NOT EXISTS `#__project_extension` (
 `pjid` smallint(5) unsigned NOT NULL,
 `wid` smallint(5) unsigned NOT NULL,
 PRIMARY KEY (`pjid`,`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;