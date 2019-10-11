<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP11</title>
	</head>
	<body>
		<?php
			function staciakampioPlotas($a, $b) {
				$plotas = $a * $b;
				return $plotas;
				}
			if(!isset($_POST['submit']) || empty($_POST['ilgis']) || empty($_POST['plotis'])) {
		?>
		<form method="post" action="<?php $_PHP_SELF; ?>">
			<label for="staciakampio-ilgis">Įveskite stačiakampio ilgį (cm):</label><br>
			<input id="ilgis" type="number" name="ilgis" autofocus><br><br>
			<label for="staciakampio-plotis">Įveskite stačiakampio plotį (cm):</label><br>
			<input id="plotis" type="number" name="plotis"><br><br>
			<input type="submit" name="submit" value="Skaičiuoti">
		</form>
		<?php
			} else {
				$a = $_POST['ilgis'];
				$b = $_POST['plotis'];

				echo 'Stačiakampio, kurio kraštinės yra ' . $a . ' ir ' . $b . ', plotas lygus ' . staciakampioPlotas($a, $b);
			}
		?>
	</body>
</html>
