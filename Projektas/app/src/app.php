<?php
	if(isset($_POST['submit'])) {
	$name = trim($_POST['name']);
	$surname = trim($_POST['surname']);
	$phone = trim($_POST['phone']);
	$email = trim($_POST['email']);
	$intcar = trim($_POST['interest_car']);
	$intperiod = trim($_POST['interest_period']);
	$message = trim($_POST['message']);

	if(!empty($name) && !empty($surname) && !empty($phone) && !empty($email) && !empty($message)) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$from = "$email";
			$to = "p.kundrutas@gmail.com";
			$subject = "Nauja žinutė";
			$autorius = 'Nuo: ' . $name . ', ' . $email;
			$zinute = htmlspecialchars($message);
//			mail($to, $subject, $autorius, $zinute, $from);
			echo "<script>alert('Dėkojame. Jūsų užklausa gauta. Netrukus susisieksime.');</script>";
		}
	}
	include('db.php');
}
