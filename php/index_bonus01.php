<?php
	$temp = 10;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Bonus 1</title>
	</head>
	<body>
		<?php
			if (($temp < -35) || ($temp > 35)) {
				echo 'Turbūt kalbam ne apie Lietuvos orus';
			} elseif ($temp < 0) {
				echo 'Ar vis dar žiema?';
			} elseif ($temp < 10) {
				echo 'Kada gi ateis pavasaris?';
			} elseif (($temp >= 10) && ($temp < 20)) {
				echo 'Pagaliau pavasaris!';
			} elseif ($temp >= 20) {
				echo 'Gal jau vasara?';
		?>
	</body>
</html>
