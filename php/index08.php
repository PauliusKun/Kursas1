<?php
	$temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
	rsort($temp);
?>

<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP08</title>
	</head>
	<body>
		<?php
			$sum = 0;
			foreach($temp as $element) {
				$sum += $element;
			}
			echo 'Vidutinė temperatūra: '.round($sum / count($temp)).'<br>';
			echo 'Penkios šilčiausios temperatūros: '.implode(", ", array_slice($temp, 0, 5)).'<br>';
			echo 'Penkios šalčiausios temperatūros: '.implode(", ", array_slice($temp, -5, 5));
		?>
	</body>
</html>
