<?php
	if(isset($_POST['submit'])) {

		$name = trim($_POST['name']);
		$surname = trim($_POST['surname']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$intcar = trim($_POST['interest_car']);
		$intperiod = trim($_POST['interest_period']);
		$message = trim($_POST['message']);

		if(empty($name) || empty($surname) || empty($phone) || empty($email) || empty($message)) {
			echo "<script>alert('Užpildyti ne visi laukai');</script>";
			exit();
		} elseif (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $surname)) {
			echo "<script>alert('Jūs įrašėte netinkamus symbolius');</script>";
			exit();
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<script>alert('Netinkamas el.pašto formatas');</script>";
			exit();
		}

		$from = "$email";
		$to = "p.kundrutas@gmail.com";
		$subject = "Nauja žinutė";
		$autorius = 'Nuo: ' . $name . ', ' . $email;
		$zinute = htmlspecialchars($message);
//		mail($to, $subject, $autorius, $zinute, $from);
		echo "<script>alert('Dėkojame. Jūsų užklausa gauta. Netrukus su Jumis susisieksime.');</script>";
		include 'db.php';
}
