<?php

	if(!defined("APP")) die();

	function userExists($email){
		GLOBAL $db;
		$result = $db->query("
			SELECT * 
			FROM `Users` 
			WHERE `Email` = \"" . $db->real_escape_string($email) . "\";
		");
		if($result === false) return false;
		return $result->num_rows > 0;
	}

	function userGet($email){
		GLOBAL $db;
		$result = $db->query("
			SELECT 
				`ID`, 
				`Email`, 
				`Firstname`, 
				`Surname`, 
				`DOB`, 
				`Registered` 
			FROM `Users` 
			WHERE `Email` = \"" . $db->real_escape_string($email) . "\";
		");
		if($result === false) return false;
		$data = $result->fetch_assoc();
		if($data === false) return false;
		return (object)$data;
	}

	function userAdd($email, $password, $firstname, $surname, $dob){
		GLOBAL $db;
		return $db->query("
			INSERT INTO `Users` (
				`Email`,
				`Password`,
				`Firstname`,
				`Surname`,
				`DOB`
			)
			VALUES (" . 
				"\"" . $db->real_escape_string($email) . "\", " .
				"\"" . $db->real_escape_string(password_hash($password, PASSWORD_DEFAULT)) . "\", " .
				"\"" . $db->real_escape_string($firstname) . "\", " .
				"\"" . $db->real_escape_string($surname) . "\", " .
				"\"" . $db->real_escape_string($dob) . "\");
		") !== false;
	}

	function userLogin($email, $password){
		GLOBAL $db;
		$result = $db->query("
			SELECT * 
			FROM `Users` 
			WHERE `Email` = \"" . $db->real_escape_string($email) . "\";
		");
		if($result === false) return false;
		$data = $result->fetch_assoc();
		if($result === false) return false;
		$data = (object)$data;
		if(isset($data->Password) === false) return false;
		if(password_verify($password, $data->Password) === false) return false;
		return true;
	}

	function reminderAdd($user, $title, $text, $endDate){
		GLOBAL $db;
		return $db->query("
			INSERT INTO `Reminders` (
				`User`, 
				`Title`, 
				`Text`,
				`EndDate`
			)
			VALUES (" . 
				"\"" . $db->real_escape_string($user) . "\", " .
				"\"" . $db->real_escape_string($title) . "\", " .
				"\"" . $db->real_escape_string($text) . "\", " .
				"\"" . $db->real_escape_string($endDate) . "\");
		") !== false;
	}

	function reminderDelete($user, $id){
		GLOBAL $db;
		return $db->query("
			DELETE FROM `Reminders`
			WHERE `User` = \"" . $db->real_escape_string($user) . "\"
			AND `ID` = \"" . $db->real_escape_string($id) . "\";
		") !== false;
	}

	function remindersAll($user){
		GLOBAL $db;
		$reminders = array();
		$result = $db->query("
			SELECT * 
			FROM `Reminders` 
			WHERE `User` = \"" . $db->real_escape_string($user) . "\";
		");
		if($result !== false){
			while($row = $result->fetch_assoc()){
				$reminders[] = (object)$row;
			}
		}
		return $reminders;
	}

?>