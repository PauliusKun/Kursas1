<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP12</title>
	</head>
	<body>
		<?php
			if(!isset($_POST['submit']) || empty($_POST['vardas']) || empty($_POST['pavarde'])) {
		?>
		<form method="post" action="<?php $_PHP_SELF; ?>">
			<label for="name">Vardas:</label><br>
			<input id="name" type="text" name="vardas" autofocus><br><br>
			<label for="surname">Pavardė:</label><br>
			<input id="surname" type="text" name="pavarde"><br><br>
			<input type="submit" name="submit" value="Siųsti">
		</form>
		<?php
			} else {
				$name = $_POST['vardas'];
				$surname = $_POST['pavarde'];

				echo 'Jūsų vardas ir pavardė - ' . $name . ' ' . $surname . ', nusiųstas. ';
			}
		?>
	</body>
</html>
