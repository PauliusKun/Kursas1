<?php
	$metai = 1791;
	$cities3 = [
		'Tokijas' => [13.6, 1868, 'Japonija'],
		'Vasingtonas' => [0.6, 1790, 'JAV'],
		'Maskva' => [11.5, 1147, 'Rusija']
	];
?>
<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP06</title>
	</head>
	<body>
		<?php
			$result = $cities3['Vasingtonas'][1] - $metai;
			if($metai >= $cities3['Vasingtonas'][1]) {
				echo 'Vašingtonas yra Jav sostinė';
			} elseif ($metai == 1774) {
					echo 'JAV sostinė vis dar Filadelfijoje';
			} else {
				echo "Liko $result metai (-ų) iki Vašingtono įkūrimo";
			}
		?>
	</body>
</html>
