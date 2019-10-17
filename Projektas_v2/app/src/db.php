<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "potencialus_klientai");

	$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	if($mysqli->connect_error) {
		echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
		echo 'Klaida: ' . $mysqli->connect_error . '\n';
		exit();
	}
	mysqli_query($mysqli, "INSERT INTO klientai (name, surname, phone, email, intcar, intperiod, message) VALUES('$_POST[name]', '$_POST[surname]', '$_POST[phone]', '$_POST[email]', '$_POST[interest_car]', '$_POST[interest_period]', '$_POST[message]')");
