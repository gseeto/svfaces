/* SQLEditor (MySQL (2))*/

DROP TABLE IF EXISTS `person_case_assn`;

DROP TABLE IF EXISTS `advocate`;

DROP TABLE IF EXISTS `login`;

DROP TABLE IF EXISTS `role_type`;

DROP TABLE IF EXISTS `relationship`;

DROP TABLE IF EXISTS `address`;

DROP TABLE IF EXISTS `services`;

DROP TABLE IF EXISTS `person`;

DROP TABLE IF EXISTS `case_suspect_assn`;

DROP TABLE IF EXISTS `cases`;

DROP TABLE IF EXISTS `agency`;

DROP TABLE IF EXISTS `court_information`;

DROP TABLE IF EXISTS `relationship_type`;

DROP TABLE IF EXISTS `language`;

DROP TABLE IF EXISTS `ethnicity`;

DROP TABLE IF EXISTS `crime_type`;

DROP TABLE IF EXISTS `suspect`;

DROP TABLE IF EXISTS `grant`;

DROP TABLE IF EXISTS `service_type`;

DROP TABLE IF EXISTS `case_status`;

CREATE TABLE `role_type`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`name` VARCHAR(40) UNIQUE,
PRIMARY KEY (`id`)
);

CREATE TABLE `login`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`role_type_id` INTEGER,
`username` VARCHAR(255),
`password` VARCHAR(255),
`date_last_login` DATETIME,
`first_name` VARCHAR(255),
`last_name` VARCHAR(255),
PRIMARY KEY (`id`)
);

CREATE TABLE `agency`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`name` VARCHAR(255),
PRIMARY KEY (`id`)
);

CREATE TABLE `court_information`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`information` VARCHAR(1024),
PRIMARY KEY (`id`)
);

CREATE TABLE `relationship_type`
(
`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
`name` VARCHAR(40) UNIQUE,
PRIMARY KEY (`id`)
);

CREATE TABLE `language`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`name` VARCHAR(255),
PRIMARY KEY (`id`)
);

CREATE TABLE `ethnicity`
(
`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
`name` VARCHAR(255),
PRIMARY KEY (`id`)
);

CREATE TABLE `person`
(
`victim_witness_num` INTEGER AUTO_INCREMENT UNIQUE,
`first_name` VARCHAR(255),
`last_name` VARCHAR(255),
`date_of_birth` DATE,
`social_security_number` INTEGER,
`phone` VARCHAR(12),
`email` VARCHAR(255),
`notes` VARCHAR(255),
`gender` BOOLEAN,
`ethnicity_id` INTEGER,
`age` INTEGER,
`primary_language_id` INTEGER,
`disabled` BOOLEAN,
`elderly` BOOLEAN,
`agency_referred_id` INTEGER,
PRIMARY KEY (`victim_witness_num`)
);

CREATE TABLE `relationship`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`person_id` INTEGER,
`related_to_person_id` INTEGER,
`relationship_type_id` INTEGER,
PRIMARY KEY (`id`)
);

CREATE TABLE `address`
(
`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
`address_1` VARCHAR(255),
`address_2` VARCHAR(255),
`address_3` VARCHAR(255),
`city` VARCHAR(255),
`state` VARCHAR(255),
`zipcode` VARCHAR(10),
`country` VARCHAR(255),
`person_id` INTEGER,
PRIMARY KEY (`id`)
);

CREATE TABLE `crime_type`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`name` VARCHAR(255) UNIQUE,
PRIMARY KEY (`id`)
);

CREATE TABLE `suspect`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`first_name` VARCHAR(255),
`last_name` VARCHAR(255),
`date_of_birth` DATE,
`pfd` INTEGER,
`information` VARCHAR(1024),
PRIMARY KEY (`id`)
);

CREATE TABLE `grant`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`name` VARCHAR(255),
PRIMARY KEY (`id`)
);

CREATE TABLE `advocate`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`login_id` INTEGER,
`grant_id` INTEGER,
PRIMARY KEY (`id`)
);

CREATE TABLE `service_type`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`service_name` VARCHAR(255) UNIQUE,
PRIMARY KEY (`id`)
);

CREATE TABLE `services`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`services_type_id` INTEGER,
`person_id` INTEGER,
PRIMARY KEY (`id`)
);

CREATE TABLE `case_status`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`name` VARCHAR(255),
PRIMARY KEY (`id`)
);

CREATE TABLE `cases`
(
`id` INTEGER AUTO_INCREMENT UNIQUE,
`crime_type_id` INTEGER,
`crime_date` DATETIME,
`agency_reported_to_id` INTEGER,
`crime_report_number` INTEGER,
`family_law_number` INTEGER,
`court_id` INTEGER,
`case_status_id` INTEGER,
PRIMARY KEY (`id`)
);

CREATE TABLE `person_case_assn`
(
`person_id` INTEGER,
`case_id` INTEGER,
`advocate_id` INTEGER,
`primary_person` BOOLEAN
);

CREATE TABLE `case_suspect_assn`
(
`case_id` INTEGER NOT NULL,
`suspect_id` INTEGER NOT NULL
);

ALTER TABLE `login` ADD FOREIGN KEY role_type_id_idxfk (`role_type_id`) REFERENCES `role_type` (`id`);

ALTER TABLE `person` ADD FOREIGN KEY ethnicity_id_idxfk (`ethnicity_id`) REFERENCES `ethnicity` (`id`);

ALTER TABLE `person` ADD FOREIGN KEY primary_language_id_idxfk (`primary_language_id`) REFERENCES `language` (`id`);

ALTER TABLE `person` ADD FOREIGN KEY agency_referred_id_idxfk (`agency_referred_id`) REFERENCES `agency` (`id`);

ALTER TABLE `relationship` ADD FOREIGN KEY person_id_idxfk (`person_id`) REFERENCES `person` (`victim_witness_num`);

ALTER TABLE `relationship` ADD FOREIGN KEY related_to_person_id_idxfk (`related_to_person_id`) REFERENCES `person` (`victim_witness_num`);

ALTER TABLE `relationship` ADD FOREIGN KEY relationship_type_id_idxfk (`relationship_type_id`) REFERENCES `relationship_type` (`id`);

ALTER TABLE `address` ADD FOREIGN KEY person_id_idxfk_1 (`person_id`) REFERENCES `person` (`victim_witness_num`);

ALTER TABLE `advocate` ADD FOREIGN KEY login_id_idxfk (`login_id`) REFERENCES `login` (`id`);

ALTER TABLE `advocate` ADD FOREIGN KEY grant_id_idxfk (`grant_id`) REFERENCES `grant` (`id`);

ALTER TABLE `services` ADD FOREIGN KEY services_type_id_idxfk (`services_type_id`) REFERENCES `service_type` (`id`);

ALTER TABLE `services` ADD FOREIGN KEY person_id_idxfk_2 (`person_id`) REFERENCES `person` (`victim_witness_num`);

ALTER TABLE `cases` ADD FOREIGN KEY crime_type_id_idxfk (`crime_type_id`) REFERENCES `crime_type` (`id`);

ALTER TABLE `cases` ADD FOREIGN KEY agency_reported_to_id_idxfk (`agency_reported_to_id`) REFERENCES `agency` (`id`);

ALTER TABLE `cases` ADD FOREIGN KEY court_id_idxfk (`court_id`) REFERENCES `court_information` (`id`);

ALTER TABLE `cases` ADD FOREIGN KEY case_status_id_idxfk (`case_status_id`) REFERENCES `case_status` (`id`);

CREATE INDEX `person_id_idx` ON `person_case_assn`(`person_id`);
ALTER TABLE `person_case_assn` ADD FOREIGN KEY person_id_idxfk_3 (`person_id`) REFERENCES `person` (`victim_witness_num`);

CREATE INDEX `case_id_idx` ON `person_case_assn`(`case_id`);
ALTER TABLE `person_case_assn` ADD FOREIGN KEY case_id_idxfk (`case_id`) REFERENCES `cases` (`id`);

CREATE INDEX `advocate_id_idx` ON `person_case_assn`(`advocate_id`);
ALTER TABLE `person_case_assn` ADD FOREIGN KEY advocate_id_idxfk (`advocate_id`) REFERENCES `advocate` (`id`);

ALTER TABLE `case_suspect_assn` ADD FOREIGN KEY case_id_idxfk_1 (`case_id`) REFERENCES `cases` (`id`);

ALTER TABLE `case_suspect_assn` ADD FOREIGN KEY suspect_id_idxfk (`suspect_id`) REFERENCES `suspect` (`id`);
