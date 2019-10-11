<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP10</title>
	</head>
	<body>
		<?php
			staciakampioPlotas(2, 5);
			function staciakampioPlotas($a, $b) {
				$plotas = $a * $b;
				echo "Stačiakampio plotas - $plotas";
			}
		?>
	</body>
</html>
