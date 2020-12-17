CREATE TABLE IF NOT EXISTS `Users` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`Email` TEXT NOT NULL,
	`Password` TEXT NOT NULL,
	`Firstname` TEXT NOT NULL,
	`Surname` TEXT NOT NULL,
	`DOB` TEXT NOT NULL,
	`Registered` datetime NOT NULL DEFAULT NOW(),
	PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `Reminders` (
	`ID` int NOT NULL AUTO_INCREMENT,
	`User` int NOT NULL,
	`Title` TEXT NOT NULL,
	`Text` TEXT NOT NULL,
	`EndDate` datetime NOT NULL,
	`Added` datetime NOT NULL DEFAULT NOW(),
	PRIMARY KEY (`ID`)
);