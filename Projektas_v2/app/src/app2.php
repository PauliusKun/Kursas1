<?php
	if(isset($_POST['confirm_order'])) {
		include_once 'db2.php';

		$name = trim($_POST['name']);
		$surname = trim($_POST['surname']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$birthday = trim($_POST['birthday']);
		$flightnumber = trim($_POST['flight_number']);
		$message = trim($_POST['message']);
		$car = $_POST['car'];
		$pickup_place = $_POST['pickup_place'];
		$pickup_date = $_POST['pickup_date'];
		$pickup_time = $_POST['pickup_time'];
		$return_place = $_POST['return_place'];
		$return_date = $_POST['return_date'];
		$return_time = $_POST['return_time'];
		$day_price = $_POST['day_price'];
		$price_for_extra = $_POST['price_for_extra'];
		$total_price = $_POST['total_price'];

		if (isset($_POST['full_kasko'])) {
			$kasko = $_POST['full_kasko'];
		} else if (isset($_POST['limited_kasko'])) {
			$kasko = $_POST['limited_kasko'];
		}

		if (isset($_POST['unlimited_mileage'])) {
			$mileage = $_POST['unlimited_mileage'];
		} else if (isset($_POST['limited_mileage'])) {
			$mileage = $_POST['limited_mileage'];
		}

		if (isset($_POST['extra_driver'])) {
			$driver = $_POST['extra_driver'];
		} else if (isset($_POST['one_driver'])) {
			$driver = $_POST['one_driver'];
		}

		if (isset($_POST['wifi'])) {
			$wifi = $_POST['wifi'];
		} else if (isset($_POST['no_wifi'])) {
			$wifi = $_POST['no_wifi'];
		}

		if (isset($_POST['gps'])) {
			$navi = $_POST['gps'];
		} else if (isset($_POST['no_gps'])) {
			$navi = $_POST['no_gps'];
		}

		if (isset($_POST['child_seat'])) {
			$seat = $_POST['child_seat'];
		} else if (isset($_POST['no_child_seat'])) {
			$seat = $_POST['no_child_seat'];
		}


		if(empty($name) || empty($surname) || empty($phone) || empty($email) || empty($birthday)) {
			echo "<script>alert('Užpildyti ne visi laukai');</script>";
			exit();
		} elseif (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $surname)) {
			echo "<script>alert('Jūs įrašėte netinkamus symbolius');</script>";
			exit();
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<script>alert('Netinkamas el.pašto formatas');</script>";
			exit();
		}

		$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
		if($mysqli->connect_error) {
			echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
			echo 'Klaida: ' . $mysqli->connect_error . '\n';
			exit();
		}
		mysqli_query($mysqli, "INSERT INTO uzsakymo_duomenys (name, surname, phone, email, birthday, car, pickup_date, return_date, price) VALUES('$_POST[name]', '$_POST[surname]', '$_POST[phone]', '$_POST[email]', '$_POST[birthday]', '$_POST[car]', '$_POST[pickup_date]', '$_POST[return_date]', '$_POST[total_price]')");

		$from = "$email";
		$to = "p.kundrutas@gmail.com";
		$subject = "Naujas užsakymas";
		$uzsakovas = 'Nuo: ' . $name . ', ' . $email;
		$zinute = htmlspecialchars($message);
		$uzsakymo_duomenys = 'Automobilis: ' . $car . '<br>' . 'Paėmimas: ' . $pickup_place . $pickup_date . $pickup_time . '<br>' . 'Gražinimas: ' . $return_place . $return_date . $return_time . '<br>';
		$papildomi_pasirinkimai = 'Draudimas: ' . $kasko . '<br>' . 'Kilometražas: ' . $mileage . '<br>' . 'Papildomas vairuotojas: ' . $driver . '<br>' . 'Wi-Fi: ' . $wifi . '<br>' . 'Vaikiška kėdutė: ' . $seat . '<br>' . 'Navigacija: ' . $navi;
		$kainos_duomenys = 'Paros kaina: ' . $day_price . '<br>' . 'Papildomai: ' . $price_for_extra . '<br>' . 'Iš viso: ' . $total_price;
//		mail($to, $subject, $uzsakovas, $zinute, $uzsakymo_duomenys, $papildomi_pasirinkimai, $kainos_duomenys, $from);
		echo "<script>alert('Dėkojame. Jūsų užsakymas gautas. Netrukus gausite patvirtinantį laišką jūsų nurodytu el.paštu.');</script>";
}
