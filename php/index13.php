<?php
	class People {
		public $vardas;
		public $pavarde;
		public $metodas;

		public function hello() {
			return $this -> metodas . ', ' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
		}
	}

	$zmogus1 = new People ();
	$zmogus2 = new People ();

	$zmogus1 -> vardas = "Jonas";
	$zmogus1 -> pavarde = "Jonaitis";
	$zmogus1 -> metodas = "Labas vakaras";

	$zmogus2 -> vardas = "Petras";
	$zmogus2 -> pavarde = "Petraitis";
	$zmogus2 -> metodas = "Labas rytas";

	echo $zmogus1 -> hello();
	echo $zmogus2 -> hello();
?>
