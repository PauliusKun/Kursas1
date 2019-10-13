<?php
	function websiteCopyright($year) {
		if ($year >= date('Y')) {
			echo '&copy;'.date('Y');
		} else {
			echo '&copy;'. $year . ' - ' . date('Y');
		}
	}
	websiteCopyright(2017);
?>
