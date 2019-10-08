<?php
	$x = 10;
	$y = 7;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP03</title>
	</head>
	<body>
		<?php
		$result = $x + $y;
		echo $x.' + '.$y.' = '.$result.'<br>';

		$result = $x - $y;
		echo $x.' - '.$y.' = '.$result.'<br>';

		$result = $x * $y;
		echo $x.' * '.$y.' = '.$result.'<br>';

		$result = $x / $y;
		echo $x.' / '.$y.' = '.$result.'<br>';

		$result = $x % $y;
		echo $x.' % '.$y.' = '.$result;
		?>
	</body>
</html>
