CREATE TABLE IF NOT EXISTS `#__project_milestones` (
 `pjid` int(11) unsigned NOT NULL,
 `mileid` int(10) unsigned NOT NULL,
 PRIMARY KEY (`pjid`,`mileid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;