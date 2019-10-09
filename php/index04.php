<?php
	$cities = ['Berlynas','Roma','Londonas'];
	$cities[]='Tokijas';
	print_r($cities);
	$cities2 = [
		'tokijas' => 13.6,
		'vasingtonas' => 0.6,
		'maskva' => 11.5
	];
	$cities2['londonas'] = 8.6;
	print_r($cities2);
?>
<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP04</title>
	</head>
	<body>
		<ul>
			<?php
				echo "<li>$cities[1]</li>";
			?>
		</ul>
		<ul>
			<?php
				echo "<li>Gyventojų skaičius $cities2[tokijas]</li>";
			?>
		</ul>

	</body>
</html>
