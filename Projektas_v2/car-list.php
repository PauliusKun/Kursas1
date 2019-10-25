<?php
	require __DIR__ . '/app/src/app2.php';
?>

<!DOCTYPE html>
<html lang="lt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bluerent</title>
		<link rel="stylesheet" href="app/css/styles.css" type="text/css">
		<link rel="stylesheet" href="app/css/car-list-style.css" type="text/css">
		<link rel="icon" href="app/images/favicon.ico">
	</head>
	<body onload="getCookieAndWriteValue()">

<!-- Header -->

		<?php
			include('app/views/header.php');
		?>

<!-- Main-->

		<main>
			<div class="car-rental-period">
					<div>
						<h5>Automobilio paėmimas</h5>
						<div class="display-cookies">
							<output id="pickup-place" name="pickup-place"></output>
							<output id="pickup-date" name="pickup-date"></output>
							<output id="pickup-time" name="pickup-time"></output>
						</div>
						<h6><a href="index.php">Redaguoti</a></h6>
					</div>
					<div>
						<h5>Automobilio grąžinimas</h5>
						<div class="display-cookies">
							<output id="return-place" name="return-place"></output>
							<output id="return-date" name="return-date"></output>
							<output id="return-time" name="return-time"></output>
						</div>
						<h6><a href="index.php">Redaguoti</a></h6>
					</div>
					<output id="rental_period" name="rental-period">
						<?php
							$start_date = strtotime($_GET['pickup-date']);
							$end_date = strtotime($_GET['return-date']);
							echo round(($end_date - $start_date)/60/60/24);
						?>
					</output>
			</div>

<!--suzuki swift-->

			<div id="white-background" class="car-offer-bar">
				<div>
					<img src="app/images/suzuki-swift.jpg" alt="suzuki-swift-hybrid" title="suzuki-swift-hybrid-nuoma" >
				</div>
				<div>
					<div class="about-car">
						<div>
							<span><b>Ekonominė:</b></span><br><br>
							<span>Pagaminta:</span><br>
							<span>Kuro tipas:</span><br>
							<span>Pavaų dėžė:</span><br>
						</div>
						<div>
							<output name="car"><b>Suzuki Swift Hybrid</b></output><br><br>
							<span>2018 - 2019</span><br>
							<span>Benzinas/elektra</span><br>
							<span>Mechaninė</span><br>
						</div>
					</div>
					<div class="about-price">
						<span>Kaina:</span>
						<output id="swift-price-for-period" class="total-price" name="total_price_for_period"></output>
						<output id="swift-price-hidden" class="car-price-hidden"></output>
						<span><button id="continue-ordering" class="button">Pasirinkti</button></span>

<!--suzuki-swift-modal-->

						<div id="my-modal" class="modal">
							<div class="modal-content">
								<span class="close">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<form class="order-details" action="car-list.php" method="post">
									<div class="selection-details">
										<div >
											<img src="app/images/suzuki-swift.jpg" alt="suzuki-swift">
										</div>
										<div class="car-and-choice-details">
											<div>
												<div><h5>Ekonominė:</h5></div>
												<span>Paėmimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Grąžinimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Trukmė:</span>
											</div>
											<div>
												<div><h5>Suzuki Swift ar pan.</h5></div>
												<input class="hidden" name="car" value="Suzuki Swift ar pan.">
												<span>
													<input class="pickup-place-modal" name="pickup_place" readonly value="<?php echo ($_GET['pickup-place']);?>">
													<input class="pickup-date-modal" name="pickup_date" readonly value="<?php echo ($_GET['pickup-date']);?>">
													<input class="pickup-time-modal" name="pickup_time" readonly value="<?php echo ($_GET['pickup-time']);?>">
												</span><br>
												<span>
													<input class="return-place-modal" name="return_place" readonly value="<?php echo ($_GET['return-place']);?>">
													<input class="return-date-modal" name="return_date" readonly value="<?php echo ($_GET['return-date']);?>">
													<input class="return-time-modal" name="return_time" readonly value="<?php echo ($_GET['return-time']);?>">
												</span><br>
												<output id="calculate-period-modal1" class="period-in-modal">
												</output>
											</div>
										</div>
									</div>
									<hr>
									<div class="included-extras-and-driver-form">
										<div class="included-and-extras">
											<div class="included">
												<div><h5>Į kainą įskaičiuota</h5></div>
												<span><input id="kasko" type="checkbox" name="limited_kasko" checked value="Kasko(400)" onchange="uncheckKasko()">Kasko draudimas (frančizė - 400€)*</span><br>
												<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
												<span><input id="limited-mileage" type="checkbox" name="limited_mileage" checked value="ribota-rida" onchange="uncheckMileage()">400 km/para rida (papild.0,10€/km)</span><br>
												<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span>
												<span><input id="one-driver" type="checkbox" name="one_driver" value="one-driver" checked hidden onchange="uncheckDriver()"></span>
												<span><input id="no-wifi" type="checkbox" name="no_wifi" value="no-wifi" checked hidden onchange="uncheckWifi()"></span>
												<span><input id="no-child-seat" type="checkbox" name="no_child_seat" value="no-child-seat" checked hidden onchange="uncheckSeat()"></span>
												<span><input id="no-gps" type="checkbox" name="no_gps" value="no-gps" checked hidden onchange="uncheckGps()"></span>
											</div>
											<hr>
											<div class="extras">
												<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
												<span><input id="full-kasko" type="checkbox" name="full_kasko" value="pilnas-Kasko" onchange="uncheckKasko()" onclick="pridetiPaslauga()">Pilnas Kasko draudimas(10€/para)*</span><br>
												<span><input id="unlimited-mileage" type="checkbox" name="unlimited_mileage" value="neribota-rida" onchange="uncheckMileage()" onclick="pridetiPaslauga()">Neribota rida (5€/para)</span><br>
												<span><input id="extra-driver" type="checkbox" name="extra_driver" value="papildomas-vairuotojas" onclick="pridetiPaslauga()" onchange="uncheckDriver()">Papildomas vairuotojas (3€/para)</span><br>
												<span><input id="wifi" type="checkbox" name="wifi" value="wi-fi" onclick="pridetiPaslauga()" onchange="uncheckWifi()">Wi-Fi (3€/para)</span><br>
												<span><input id="child-seat" type="checkbox" name="child_seat" value="child-seat" onchange="uncheckSeat()">Vaikiška kėdutė (nemokamai)</span><br>
												<span><input id="gps" type="checkbox" name="gps" value="gps" onchange="uncheckGps()">GPS (nemokamai)</span><br><br>
												<div class="tooltip-insurance"><small>* Plačiau apie draudimą</small>
													<span class="tooltiptext-insurance">Į standartinę kainą įskaičiuotas privalomas civilnės atsakomybės draudimas galiojantis Lietuvoje ir Europoje bei draudimas nuo avarijos ir vagystės (Kasko) su asmenine atsakomybe: iki 400 Eur (ekonominė, kompaktinė ir universalas grupėms), iki 600 Eur (crossover, SUV grupėms). Papildomai pasirinkus pilną Kasko draudimą – draudimo nuo avarijos ir vagystės asmeninė atsakomybė – 0 (nulis) Eur.</span>
												</div>
											</div>
											<hr>
										</div>
										<div class="driver-information">
											<h5>Vairuotojo informacija</h5>
											<div class="form-row">
												<div class="driver-form">
													<label for="first-name1">Vardas: <span>*</span></label><br>
													<input id="first-name1" type="text" name="name" placeholder="Jūsų vardas" required autofocus>
												</div>
												<div class="driver-form">
													<label for="second-name1">Pavardė: <span>*</span></label><br>
													<input id="second-name1" type="text" name="surname" placeholder="Jūsų pavardė" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="telephone1">Telefonas: <span>*</span></label><br>
													<input id="telephone1" type="tel" name="phone" placeholder="Jūsų telefono numeris" required>
												</div>
												<div class="driver-form">
													<label for="e-mail1">El.paštas: <span>*</span></label><br>
													<input id="e-mail1" type="email" name="email" placeholder="Jūsų elektroninis paštas" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="birthday1">Gimimo data: <span>*</span></label><br>
													<input id="birthday1" type="text" name="birthday" placeholder="Jūsų gimimo data">
												</div>
												<div class="driver-form">
													<label for="flight-number1">Skrydžio numeris:</label><br>
													<input id="flight-number1" type="text" name="flight_number" placeholder="Skrydžio numeris">
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="message1">Pageidavimai: </label><br>
													<textarea id="message1" name="message" placeholder="Jūsų pageidavimai..."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="total-price-and-payment">
										<div class="sum-details">
											<div>
												<span>Paros kaina:</span><br>
												<span>Papildomai:</span><br>
												<span><b>Suma iš viso:</b></span>
											</div>
											<div>
<!--inputai sukurti uzsakymo formos siuntimui (neveikia - i inputa neideda tokios pacios reiksmes kaip outpute, pagal analogiska JavaScript formule)-->
												<output id="day-price-swift"></output><input id="day-price-swift2" class="hidden" name="day_price"><br>
												<output id="price-for-extra-swift">0</output><input id="price-for-extra-swift2" class="hidden" name="price_for_extra"><br>
												<output id="total-price-swift" class="total-price-modal"></output><input id="total-price-swift2" class="hidden" name="total_price">
											</div>
											<div>
												<span>€</span><br>
												<span>€</span><br>
												<span><b>€</b></span>
											</div>
										</div>
										<div class="payment-choice">
											<h5>Apmokėjimo būdas</h5>
											<span>
												<input id="credit-card1" class="credit-card" type="radio" name="credit-card" disabled>
												<label for="credit-card1">Pavedimu</label>
											</span>
											<span>
												<input id="pay-later1" class="pay-later" type="radio" name="pay-later" required>
												<label for="pay-later1">Mokėti atsiimant</label>
											</span>
										</div>
										<div class="button-continue">
											<div>
												<button id="continue-to-payment" class="button" name="confirm_order" type="submit">Užsakyti</button>
											</div>
										</div>
									</div>
									<div class="hidden">
										<output id="extra-kasko" name="extra_kasko"></output>
										<output id="extra-km" name="extra_km"></output>
										<output id="extra-dr" name="extra_dr"></output>
										<output id="extra-wifi" name="extra_wifi"></output>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--toyota yaris-->

			<div class="car-offer-bar">
				<div>
					<img src="app/images/toyota-yaris.png" alt="toyota-yaris-hybrid" title="toyota-yaris-hybrid-nuoma">
				</div>
				<div>
					<div class="about-car">
						<div>
							<span><b>Ekonominė:</b></span><br><br>
							<span>Pagaminta:</span><br>
							<span>Kuro tipas:</span><br>
							<span>Pavaų dėžė:</span><br>
						</div>
						<div>
							<span><b>Toyota Yaris ar pan.</b></span><br><br>
							<span>2016 - 2019</span><br>
							<span>Benzinas/elektra</span><br>
							<span>Automatinė</span><br>
						</div>
					</div>
					<div class="about-price">
						<span>Kaina:</span>
						<output id="yaris-price-for-period" class="total-price" name="total-price"></output>
						<output id="yaris-price-hidden" class="car-price-hidden"></output>
						<span><button id="continue-ordering2" class="button">Pasirinkti</button></span>

<!--toyota yaris modal-->

						<div id="my-modal2" class="modal">
							<div class="modal-content">
								<span class="close2">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<form class="order-details" action="car-list.php" method="post">
									<div class="selection-details">
										<div >
											<img src="app/images/toyota-yaris.png" alt="toyota-yaris">
										</div>
										<div class="car-and-choice-details">
											<div>
												<div><h5>Ekonominė:</h5></div>
												<span>Paėmimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Grąžinimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Trukmė:</span>
											</div>
											<div>
												<div><h5>Toyota Yaris ar pan.</h5></div>
												<input class="hidden" name="car" value="Toyota Yaris ar pan.">
												<span>
													<input class="pickup-place-modal" name="pickup_place" readonly value="<?php echo ($_GET['pickup-place']);?>">
													<input class="pickup-date-modal" name="pickup_date" readonly value="<?php echo ($_GET['pickup-date']);?>">
													<input class="pickup-time-modal" name="pickup_time" readonly value="<?php echo ($_GET['pickup-time']);?>">
												</span><br>
												<span>
													<input class="return-place-modal" name="return_place" readonly value="<?php echo ($_GET['return-place']);?>">
													<input class="return-date-modal" name="return_date" readonly value="<?php echo ($_GET['return-date']);?>">
													<input class="return-time-modal" name="return_time" readonly value="<?php echo ($_GET['return-time']);?>">
												</span><br>
												<output id="calculate-period-modal2" class="period-in-modal">
												</output>
											</div>
										</div>
									</div>
									<hr>
									<div class="included-extras-and-driver-form">
										<div class="included-and-extras">
											<div class="included">
												<div><h5>Į kainą įskaičiuota</h5></div>
												<span><input id="kasko2" type="checkbox" name="limited_kasko" checked value="Kasko(400)" onchange="uncheckKasko2()">Kasko draudimas (frančizė - 400€)</span><br>
												<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
												<span><input id="limited-mileage2" type="checkbox" name="limited_mileage" checked value="ribota-rida" onchange="uncheckMileage2()">400 km/para rida (papild.0,10€/km)</span><br>
												<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span>
												<span><input id="one-driver2" type="checkbox" name="one_driver" value="one-driver" checked hidden onchange="uncheckDriver2()"></span>
												<span><input id="no-wifi2" type="checkbox" name="no_wifi" value="no-wifi" checked hidden onchange="uncheckWifi2()"></span>
												<span><input id="no-child-seat2" type="checkbox" name="no_child_seat" value="no-child-seat" checked hidden onchange="uncheckSeat2()"></span>
												<span><input id="no-gps2" type="checkbox" name="no_gps" value="no-gps" checked hidden onchange="uncheckGps2()"></span>
											</div>
											<hr>
											<div class="extras">
												<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
												<span><input id="full-kasko2" type="checkbox" name="full_kasko" value="pilnas-Kasko" onchange="uncheckKasko2()" onclick="pridetiPaslauga2()">Pilnas Kasko draudimas(10€/para)</span><br>
												<span><input id="unlimited-mileage2" type="checkbox" name="unlimited_mileage" value="neribota-rida" onchange="uncheckMileage2()" onclick="pridetiPaslauga2()">Neribota rida (5€/para)</span><br>
												<span><input id="extra-driver2" type="checkbox" name="extra_driver" value="papildomas-vairuotojas" onclick="pridetiPaslauga2()" onchange="uncheckDriver2()">Papildomas vairuotojas (3€/para)</span><br>
												<span><input id="wifi2" type="checkbox" name="wifi" value="wi-fi" onclick="pridetiPaslauga2()" onchange="uncheckWifi2()">Wi-Fi (3€/para)</span><br>
												<span><input id="child-seat2" type="checkbox" name="child_seat" value="child-seat" onchange="uncheckSeat2()">Vaikiška kėdutė (nemokamai)</span><br>
												<span><input id="gps2" type="checkbox" name="gps" value="gps" onchange="uncheckGps2()">GPS (nemokamai)</span><br><br>
												<div class="tooltip-insurance"><small>* Plačiau apie draudimą</small>
													<span class="tooltiptext-insurance">Į standartinę kainą įskaičiuotas privalomas civilnės atsakomybės draudimas galiojantis Lietuvoje ir Europoje bei draudimas nuo avarijos ir vagystės (Kasko) su asmenine atsakomybe: iki 400 Eur (ekonominė, kompaktinė ir universalas grupėms), iki 600 Eur (crossover, SUV grupėms). Papildomai pasirinkus pilną Kasko draudimą – draudimo nuo avarijos ir vagystės asmeninė atsakomybė – 0 (nulis) Eur.</span>
												</div>
											</div>
											<hr>
										</div>
										<div class="driver-information">
											<h5>Vairuotojo informacija</h5>
											<div class="form-row">
												<div class="driver-form">
													<label for="first-name2">Vardas: <span>*</span></label><br>
													<input id="first-name2" type="text" name="name" placeholder="Jūsų vardas" required>
												</div>
												<div class="driver-form">
													<label for="second-name2">Pavardė: <span>*</span></label><br>
													<input id="second-name2" type="text" name="surname" placeholder="Jūsų pavardė" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="telephone2">Telefonas: <span>*</span></label><br>
													<input id="telephone2" type="tel" name="phone" placeholder="Jūsų telefono numeris" required>
												</div>
												<div class="driver-form">
													<label for="e-mail2">El.paštas: <span>*</span></label><br>
													<input id="e-mail2" type="email" name="email" placeholder="Jūsų elektroninis paštas" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="birthday2">Gimimo data: <span>*</span></label><br>
													<input id="birthday2" type="text" name="birthday" placeholder="Jūsų gimimo data">
												</div>
												<div class="driver-form">
													<label for="flight-number2">Skrydžio numeris:</label><br>
													<input id="flight-number2" type="text" name="flight_number" placeholder="Skrydžio numeris">
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="message2">Pageidavimai: </label><br>
													<textarea id="message2" name="message" placeholder="Jūsų pageidavimai..."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="total-price-and-payment">
										<div class="sum-details">
											<div>
												<span>Paros kaina:</span><br>
												<span>Papildomai:</span><br>
												<span><b>Suma iš viso:</b></span>
											</div>
											<div>
												<output id="day-price-yaris"></output><input id="day-price-yaris2" class="hidden" name="day_price"><br>
												<output id="price-for-extra-yaris">0</output><input id="price-for-extra-yaris2" class="hidden" name="price_for_extra"><br>
												<output id="total-price-yaris" class="total-price-modal"></output><input id="total-price-yaris2" class="hidden" name="total_price">
											</div>
											<div>
												<span>€</span><br>
												<span>€</span><br>
												<span><b>€</b></span>
											</div>
										</div>
										<div class="payment-choice">
											<h5>Apmokėjimo būdas</h5>
											<span>
												<input id="credit-card2" class="credit-card" type="radio" name="credit-card" disabled>
												<label for="credit-card2">Pavedimu</label>
											</span>
											<span>
												<input id="pay-later2" class="pay-later" type="radio" name="pay-later" required>
												<label for="pay-later2">Mokėti atsiimant</label>
											</span>
										</div>
										<div class="button-continue">
											<div>
												<button id="continue-to-payment2" class="button" name="confirm_order" type="submit">Užsakyti</button>
											</div>
										</div>
									</div>
									<div class="hidden">
										<output id="extra-kasko2" name="extra_kasko"></output>
										<output id="extra-km2" name="extra_km"></output>
										<output id="extra-dr2" name="extra_dr"></output>
										<output id="extra-wifi2" name="extra_wifi"></output>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--toyota corolla-->

			<div id="white-background2" class="car-offer-bar">
				<div>
					<img src="app/images/toyota-corolla-hatchback.jpg" alt="toyota-corolla-hybrid" title="toyota-corolla-hybrid-nuoma">
				</div>
				<div>
					<div class="about-car">
						<div>
							<span><b>Kompaktinė:</b></span><br><br>
							<span>Pagaminta:</span><br>
							<span>Kuro tipas:</span><br>
							<span>Pavaų dėžė:</span><br>
						</div>
						<div>
							<span><b>Toyota Corolla ar pan.</b></span><br><br>
							<span>2019</span><br>
							<span>Benzinas/elektra</span><br>
							<span>Automatinė</span><br>
						</div>
					</div>
					<div class="about-price">
						<span>Kaina:</span>
						<output id="corolla-price-for-period" class="total-price" name="total-price"></output>
						<output id="corolla-price-hidden" class="car-price-hidden"></output>
						<span><button id="continue-ordering3" class="button">Pasirinkti</button></span>

<!--toyota corolla modal-->

						<div id="my-modal3" class="modal">
							<div class="modal-content">
								<span class="close3">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<form class="order-details">
									<div class="selection-details">
										<div >
											<img src="app/images/toyota-corolla-hatchback.jpg" alt="toyota-corolla-hybrid">
										</div>
										<div class="car-and-choice-details">
											<div>
												<div><h5>Kompaktinė:</h5></div>
												<span>Paėmimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Grąžinimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Trukmė:</span>
											</div>
											<div>
												<div><h5>Toyota Corolla ar pan.</h5></div>
												<input class="hidden" name="car" value="Toyota Corolla ar pan.">
												<span>
													<input class="pickup-place-modal" name="pickup_place" readonly value="<?php echo ($_GET['pickup-place']);?>">
													<input class="pickup-date-modal" name="pickup_date" readonly value="<?php echo ($_GET['pickup-date']);?>">
													<input class="pickup-time-modal" name="pickup_time" readonly value="<?php echo ($_GET['pickup-time']);?>">
												</span><br>
												<span>
													<input class="return-place-modal" name="return_place" readonly value="<?php echo ($_GET['return-place']);?>">
													<input class="return-date-modal" name="return_date" readonly value="<?php echo ($_GET['return-date']);?>">
													<input class="return-time-modal" name="return_time" readonly value="<?php echo ($_GET['return-time']);?>">
												</span><br>
												<output id="calculate-period-modal3" class="period-in-modal"></output>
											</div>
										</div>
									</div>
									<hr>
									<div class="included-extras-and-driver-form">
										<div class="included-and-extras">
											<div class="included">
												<div><h5>Į kainą įskaičiuota</h5></div>
												<span><input id="kasko3" type="checkbox" name="limited_kasko" checked value="Kasko(400)" onchange="uncheckKasko3()">Kasko draudimas (frančizė - 400€)</span><br>
												<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
												<span><input id="limited-mileage3" type="checkbox" name="limited_mileage" checked value="ribota-rida" onchange="uncheckMileage3()">400 km/para rida (papild.0,10€/km)</span><br>
												<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span>
												<span><input id="one-driver3" type="checkbox" name="one_driver" value="one-driver" checked hidden onchange="uncheckDriver3()"></span>
												<span><input id="no-wifi3" type="checkbox" name="no_wifi" value="no-wifi" checked hidden onchange="uncheckWifi3()"></span>
												<span><input id="no-child-seat3" type="checkbox" name="no_child_seat" value="no-child-seat" checked hidden onchange="uncheckSeat3()"></span>
												<span><input id="no-gps3" type="checkbox" name="no_gps" value="no-gps" checked hidden onchange="uncheckGps3()"></span>
											</div>
											<hr>
											<div class="extras">
												<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
												<span><input id="full-kasko3" type="checkbox" name="full_kasko" value="pilnas-Kasko" onchange="uncheckKasko3()" onclick="pridetiPaslauga3()">Pilnas Kasko draudimas(10€/para)</span><br>
												<span><input id="unlimited-mileage3" type="checkbox" name="unlimited_mileage" value="neribota-rida" onchange="uncheckMileage3()" onclick="pridetiPaslauga3()">Neribota rida (5€/para)</span><br>
												<span><input id="extra-driver3" type="checkbox" name="extra_driver" value="papildomas-vairuotojas" onclick="pridetiPaslauga3()" onchange="uncheckDriver3()">Papildomas vairuotojas (3€/para)</span><br>
												<span><input id="wifi3" type="checkbox" name="wifi" value="wi-fi" onclick="pridetiPaslauga3()" onchange="uncheckWifi3()">Wi-Fi (3€/para)</span><br>
												<span><input id="child-seat3" type="checkbox" name="child_seat" value="child-seat" onchange="uncheckSeat3()">Vaikiška kėdutė (nemokamai)</span><br>
												<span><input id="gps3" type="checkbox" name="gps" value="gps" onchange="uncheckGps3()">GPS (nemokamai)</span><br><br>
												<div class="tooltip-insurance"><small>* Plačiau apie draudimą</small>
													<span class="tooltiptext-insurance">Į standartinę kainą įskaičiuotas privalomas civilnės atsakomybės draudimas galiojantis Lietuvoje ir Europoje bei draudimas nuo avarijos ir vagystės (Kasko) su asmenine atsakomybe: iki 400 Eur (ekonominė, kompaktinė ir universalas grupėms), iki 600 Eur (crossover, SUV grupėms). Papildomai pasirinkus pilną Kasko draudimą – draudimo nuo avarijos ir vagystės asmeninė atsakomybė – 0 (nulis) Eur.</span>
												</div>
											</div>
											<hr>
										</div>
										<div class="driver-information">
											<h5>Vairuotojo informacija</h5>
											<div class="form-row">
												<div class="driver-form">
													<label for="first-name3">Vardas: <span>*</span></label><br>
													<input id="first-name3" type="text" name="name" placeholder="Jūsų vardas" required>
												</div>
												<div class="driver-form">
													<label for="second-name3">Pavardė: <span>*</span></label><br>
													<input id="second-name3" type="text" name="surname" placeholder="Jūsų pavardė" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="telephone3">Telefonas: <span>*</span></label><br>
													<input id="telephone3" type="tel" name="phone" placeholder="Jūsų telefono numeris" required>
												</div>
												<div class="driver-form">
													<label for="e-mail3">El.paštas: <span>*</span></label><br>
													<input id="e-mail3" type="email" name="email" placeholder="Jūsų elektroninis paštas" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="birthday3">Gimimo data: <span>*</span></label><br>
													<input id="birthday3" type="text" name="birthday" placeholder="Jūsų gimimo data">
												</div>
												<div class="driver-form">
													<label for="flight-number3">Skrydžio numeris:</label><br>
													<input id="flight-number3" type="text" name="flight_number" placeholder="Skrydžio numeris">
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="message3">Pageidavimai: </label><br>
													<textarea id="message3" name="message" placeholder="Jūsų pageidavimai..."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="total-price-and-payment">
										<div class="sum-details">
											<div>
												<span>Paros kaina:</span><br>
												<span>Papildomai:</span><br>
												<span><b>Suma iš viso:</b></span>
											</div>
											<div>
												<output id="day-price-corolla"></output><input id="day-price-corolla2" class="hidden" name="day_price"><br>
												<output id="price-for-extra-corolla">0</output><input id="price-for-extra-corolla2" class="hidden" name="price_for_extra"><br>
												<output id="total-price-corolla" class="total-price-modal"></output><input id="total-price-corolla2" class="hidden" name="total_price">
											</div>
											<div>
												<span>€</span><br>
												<span>€</span><br>
												<span><b>€</b></span>
											</div>
										</div>
										<div class="payment-choice">
											<h5>Apmokėjimo būdas</h5>
											<span>
												<input id="credit-card3" class="credit-card" type="radio" name="credit-card" disabled>
												<label for="credit-card3">Pavedimu</label>
											</span>
											<span>
												<input id="pay-later3" class="pay-later" type="radio" name="pay-later" required>
												<label for="pay-later3">Mokėti atsiimant</label>
											</span>
										</div>
										<div class="button-continue">
											<div>
												<button id="continue-to-payment3" class="button" name="confirm_order" type="submit">Užsakyti</button>
											</div>
										</div>
									</div>
									<div class="hidden">
										<output id="extra-kasko3" name="extra_kasko"></output>
										<output id="extra-km3" name="extra_km"></output>
										<output id="extra-dr3" name="extra_dr"></output>
										<output id="extra-wifi3" name="extra_wifi"></output>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--toyota corolla touring-->

			<div class="car-offer-bar">
				<div>
					<img src="app/images/toyota-corolla-sw.png" alt="toyota-corolla-touring-hybrid" title="toyota-corolla-touring-hybrid-nuoma">
				</div>
				<div>
					<div class="about-car">
						<div>
							<span><b>Universalas:</b></span><br><br>
							<span>Pagaminta:</span><br>
							<span>Kuro tipas:</span><br>
							<span>Pavaų dėžė:</span><br>
						</div>
						<div>
							<span><b>Toyota Corolla ar pan.</b></span><br><br>
							<span>2019</span><br>
							<span>Benzinas/elektra</span><br>
							<span>Automatinė</span><br>
						</div>
					</div>
					<div class="about-price">
						<span>Kaina:</span>
						<output id="corolla-sw-price-for-period" class="total-price" name="total-price"></output>
						<output id="corolla-sw-price-hidden" class="car-price-hidden"></output>
						<span><button id="continue-ordering4" class="button">Pasirinkti</button></span>

<!--toyota corolla touring modal-->

						<div id="my-modal4" class="modal">
							<div class="modal-content">
								<span class="close4">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<form class="order-details">
									<div class="selection-details">
										<div >
											<img src="app/images/toyota-corolla-sw.png" alt="toyota-corolla-touring-hybrid">
										</div>
										<div class="car-and-choice-details">
											<div>
												<div><h5>Universalas:</h5></div>
												<span>Paėmimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Grąžinimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Trukmė:</span>
											</div>
											<div>
												<div><h5>Toyota Corolla Sw ar pan.</h5></div>
												<input class="hidden" name="car" value="Toyota Corolla Sw ar pan.">
												<span>
													<input class="pickup-place-modal" name="pickup_place" readonly value="<?php echo ($_GET['pickup-place']);?>">
													<input class="pickup-date-modal" name="pickup_date" readonly value="<?php echo ($_GET['pickup-date']);?>">
													<input class="pickup-time-modal" name="pickup_time" readonly value="<?php echo ($_GET['pickup-time']);?>">
												</span><br>
												<span>
													<input class="return-place-modal" name="return_place" readonly value="<?php echo ($_GET['return-place']);?>">
													<input class="return-date-modal" name="return_date" readonly value="<?php echo ($_GET['return-date']);?>">
													<input class="return-time-modal" name="return_time" readonly value="<?php echo ($_GET['return-time']);?>">
												</span><br>
												<output id="calculate-period-modal4" class="period-in-modal"></output>
											</div>
										</div>
									</div>
									<hr>
									<div class="included-extras-and-driver-form">
										<div class="included-and-extras">
											<div class="included">
												<div><h5>Į kainą įskaičiuota</h5></div>
												<span><input id="kasko4" type="checkbox" name="limited_kasko" checked value="Kasko(400)" onchange="uncheckKasko4()">Kasko draudimas (frančizė - 400€)</span><br>
												<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
												<span><input id="limited-mileage4" type="checkbox" name="limited_mileage" checked value="ribota-rida" onchange="uncheckMileage4()">400 km/para rida (papild.0,10€/km)</span><br>
												<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span>
												<span><input id="one-driver4" type="checkbox" name="one_driver" value="one-driver" checked hidden onchange="uncheckDriver4()"></span>
												<span><input id="no-wifi4" type="checkbox" name="no_wifi" value="no-wifi" checked hidden onchange="uncheckWifi4()"></span>
												<span><input id="no-child-seat4" type="checkbox" name="no_child_seat" value="no-child-seat" checked hidden onchange="uncheckSeat4()"></span>
												<span><input id="no-gps4" type="checkbox" name="no_gps" value="no-gps" checked hidden onchange="uncheckGps4()"></span>
											</div>
											<hr>
											<div class="extras">
												<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
												<span><input id="full-kasko4" type="checkbox" name="full_kasko" value="pilnas-Kasko" onchange="uncheckKasko4()" onclick="pridetiPaslauga4()">Pilnas Kasko draudimas(10€/para)</span><br>
												<span><input id="unlimited-mileage4" type="checkbox" name="unlimited_mileage" value="neribota-rida" onchange="uncheckMileage4()" onclick="pridetiPaslauga4()">Neribota rida (5€/para)</span><br>
												<span><input id="extra-driver4" type="checkbox" name="extra_driver" value="papildomas-vairuotojas" onclick="pridetiPaslauga4()" onchange="uncheckDriver4()">Papildomas vairuotojas (3€/para)</span><br>
												<span><input id="wifi4" type="checkbox" name="wifi" value="wi-fi" onclick="pridetiPaslauga4()" onchange="uncheckWifi4()">Wi-Fi (3€/para)</span><br>
												<span><input id="child-seat4" type="checkbox" name="child_seat" value="child-seat" onchange="uncheckSeat4()">Vaikiška kėdutė (nemokamai)</span><br>
												<span><input id="gps4" type="checkbox" name="gps" value="gps" onchange="uncheckGps4()">GPS (nemokamai)</span><br><br>
												<div class="tooltip-insurance"><small>* Plačiau apie draudimą</small>
													<span class="tooltiptext-insurance">Į standartinę kainą įskaičiuotas privalomas civilnės atsakomybės draudimas galiojantis Lietuvoje ir Europoje bei draudimas nuo avarijos ir vagystės (Kasko) su asmenine atsakomybe: iki 400 Eur (ekonominė, kompaktinė ir universalas grupėms), iki 600 Eur (crossover, SUV grupėms). Papildomai pasirinkus pilną Kasko draudimą – draudimo nuo avarijos ir vagystės asmeninė atsakomybė – 0 (nulis) Eur.</span>
												</div>
											</div>
											<hr>
										</div>
										<div class="driver-information">
											<h5>Vairuotojo informacija</h5>
											<div class="form-row">
												<div class="driver-form">
													<label for="first-name4">Vardas: <span>*</span></label><br>
													<input id="first-name4" type="text" name="name" placeholder="Jūsų vardas" required>
												</div>
												<div class="driver-form">
													<label for="second-name4">Pavardė: <span>*</span></label><br>
													<input id="second-name4" type="text" name="surname" placeholder="Jūsų pavardė" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="telephone4">Telefonas: <span>*</span></label><br>
													<input id="telephone4" type="tel" name="phone" placeholder="Jūsų telefono numeris" required>
												</div>
												<div class="driver-form">
													<label for="e-mail4">El.paštas: <span>*</span></label><br>
													<input id="e-mail4" type="email" name="email" placeholder="Jūsų elektroninis paštas" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="birthday4">Gimimo data: <span>*</span></label><br>
													<input id="birthday4" type="text" name="birthday" placeholder="Jūsų gimimo data">
												</div>
												<div class="driver-form">
													<label for="flight-number4">Skrydžio numeris:</label><br>
													<input id="flight-number4" type="text" name="flight_number" placeholder="Skrydžio numeris">
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="message4">Pageidavimai: </label><br>
													<textarea id="message4" name="message" placeholder="Jūsų pageidavimai..."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="total-price-and-payment">
										<div class="sum-details">
											<div>
												<span>Paros kaina:</span><br>
												<span>Papildomai:</span><br>
												<span><b>Suma iš viso:</b></span>
											</div>
											<div>
												<output id="day-price-corolla-sw"></output><input id="day-price-corolla-sw2" class="hidden" name="day_price"><br>
												<output id="price-for-extra-corolla-sw">0</output><input id="price-for-extra-corolla-sw2" class="hidden" name="price_for_extra"><br>
												<output id="total-price-corolla-sw" class="total-price-modal"></output><input id="total-price-corolla-sw2" class="hidden" name="total_price">
											</div>
											<div>
												<span>€</span><br>
												<span>€</span><br>
												<span><b>€</b></span>
											</div>
										</div>
										<div class="payment-choice">
											<h5>Apmokėjimo būdas</h5>
											<span>
												<input id="credit-card4" class="credit-card" type="radio" name="credit-card" disabled>
												<label for="credit-card4">Pavedimu</label>
											</span>
											<span>
												<input id="pay-later4" class="pay-later" type="radio" name="pay-later" required>
												<label for="pay-later4">Mokėti atsiimant</label>
											</span>
										</div>
										<div class="button-continue">
											<div>
												<button id="continue-to-payment4" class="button" name="confirm_order" type="submit">Užsakyti</button>
											</div>
										</div>
									</div>
									<div class="hidden">
										<output id="extra-kasko4" name="extra_kasko"></output>
										<output id="extra-km4" name="extra_km"></output>
										<output id="extra-dr4" name="extra_dr"></output>
										<output id="extra-wifi4" name="extra_wifi"></output>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--toyota c-hr-->

			<div id="white-background3" class="car-offer-bar">
				<div>
					<img src="app/images/toyota-chr.png" alt="toyota-chr-hybrid" title="toyota-chr-hybrid-nuoma">
				</div>
				<div>
					<div class="about-car">
						<div>
							<span><b>Krosoveris:</b></span><br><br>
							<span>Pagaminta:</span><br>
							<span>Kuro tipas:</span><br>
							<span>Pavaų dėžė:</span><br>
						</div>
						<div>
							<span><b>Toyota C-HR</b></span><br><br>
							<span>2017 - 2019</span><br>
							<span>Benzinas/elektra</span><br>
							<span>Automatinė</span><br>
						</div>
					</div>
					<div class="about-price">
						<span>Kaina:</span>
						<output id="chr-price-for-period" class="total-price" name="total-price"></output>
						<output id="chr-price-hidden" class="car-price-hidden"></output>
						<span><button id="continue-ordering5" class="button">Pasirinkti</button></span>

<!--toyota c-hr modal-->

						<div id="my-modal5" class="modal">
							<div class="modal-content">
								<span class="close5">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<form class="order-details">
									<div class="selection-details">
										<div >
											<img src="app/images/toyota-chr.png" alt="toyota-chr-hybrid">
										</div>
										<div class="car-and-choice-details">
											<div>
												<div><h5>Krosoveris:</h5></div>
												<span>Paėmimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Grąžinimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Trukmė:</span>
											</div>
											<div>
												<div><h5>Toyota C-HR ar pan.</h5></div>
												<input class="hidden" name="car" value="Toyota C-HR ar pan.">
												<span>
													<input class="pickup-place-modal" name="pickup_place" value="<?php echo ($_GET['pickup-place']);?>">
													<input class="pickup-date-modal" name="pickup_date" value="<?php echo ($_GET['pickup-date']);?>">
													<input class="pickup-time-modal" name="pickup_time" value="<?php echo ($_GET['pickup-time']);?>">
												</span><br>
												<span>
													<input class="return-place-modal" name="return_place" value="<?php echo ($_GET['return-place']);?>">
													<input class="return-date-modal" name="return_date" value="<?php echo ($_GET['return-date']);?>">
													<input class="return-time-modal" name="return_time" value="<?php echo ($_GET['return-time']);?>">
												</span><br>
												<output id="calculate-period-modal5" class="period-in-modal"></output>
											</div>
										</div>
									</div>
									<hr>
									<div class="included-extras-and-driver-form">
										<div class="included-and-extras">
											<div class="included">
												<div><h5>Į kainą įskaičiuota</h5></div>
												<span><input id="kasko5" type="checkbox" name="limited_kasko" checked value="Kasko(400)" onchange="uncheckKasko5()">Kasko draudimas (frančizė - 600€)</span><br>
												<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
												<span><input id="limited-mileage5" type="checkbox" name="limited_mileage" checked value="ribota-rida" onchange="uncheckMileage5()">400 km/para rida (papild.0,10€/km)</span><br>
												<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span>
												<span><input id="one-driver5" type="checkbox" name="one_driver" value="one-driver" checked hidden onchange="uncheckDriver5()"></span>
												<span><input id="no-wifi5" type="checkbox" name="no_wifi" value="no-wifi" checked hidden onchange="uncheckWifi5()"></span>
												<span><input id="no-child-seat5" type="checkbox" name="no_child_seat" value="no-child-seat" checked hidden onchange="uncheckSeat5()"></span>
												<span><input id="no-gps5" type="checkbox" name="no_gps" value="no-gps" checked hidden onchange="uncheckGps5()"></span>
											</div>
											<hr>
											<div class="extras">
												<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
												<span><input id="full-kasko5" type="checkbox" name="full_kasko" value="pilnas-Kasko" onchange="uncheckKasko5()" onclick="pridetiPaslauga5()">Pilnas Kasko draudimas(15€/para)</span><br>
												<span><input id="unlimited-mileage5" type="checkbox" name="unlimited_mileage" value="neribota-rida" onchange="uncheckMileage5()" onclick="pridetiPaslauga5()">Neribota rida (5€/para)</span><br>
												<span><input id="extra-driver5" type="checkbox" name="extra_driver" value="papildomas-vairuotojas" onclick="pridetiPaslauga5()" onchange="uncheckDriver5()">Papildomas vairuotojas (3€/para)</span><br>
												<span><input id="wifi5" type="checkbox" name="wifi" value="wi-fi" onclick="pridetiPaslauga5()" onchange="uncheckWifi5()">Wi-Fi (3€/para)</span><br>
												<span><input id="child-seat5" type="checkbox" name="child_seat" value="child-seat" onchange="uncheckSeat5()">Vaikiška kėdutė (nemokamai)</span><br>
												<span><input id="gps5" type="checkbox" name="gps" value="gps" onchange="uncheckGps5()">GPS (nemokamai)</span><br><br>
												<div class="tooltip-insurance"><small>* Plačiau apie draudimą</small>
													<span class="tooltiptext-insurance">Į standartinę kainą įskaičiuotas privalomas civilnės atsakomybės draudimas galiojantis Lietuvoje ir Europoje bei draudimas nuo avarijos ir vagystės (Kasko) su asmenine atsakomybe: iki 400 Eur (ekonominė, kompaktinė ir universalas grupėms), iki 600 Eur (crossover, SUV grupėms). Papildomai pasirinkus pilną Kasko draudimą – draudimo nuo avarijos ir vagystės asmeninė atsakomybė – 0 (nulis) Eur.</span>
												</div>
											</div>
											<hr>
										</div>
										<div class="driver-information">
											<h5>Vairuotojo informacija</h5>
											<div class="form-row">
												<div class="driver-form">
													<label for="first-name5">Vardas: <span>*</span></label><br>
													<input id="first-name5" type="text" name="name" placeholder="Jūsų vardas" required>
												</div>
												<div class="driver-form">
													<label for="second-name5">Pavardė: <span>*</span></label><br>
													<input id="second-name5" type="text" name="surname" placeholder="Jūsų pavardė" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="telephone5">Telefonas: <span>*</span></label><br>
													<input id="telephone5" type="tel" name="phone" placeholder="Jūsų telefono numeris" required>
												</div>
												<div class="driver-form">
													<label for="e-mail5">El.paštas: <span>*</span></label><br>
													<input id="e-mail5" type="email" name="email" placeholder="Jūsų elektroninis paštas" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="birthday5">Gimimo data: <span>*</span></label><br>
													<input id="birthday5" type="text" name="birthday" placeholder="Jūsų gimimo data">
												</div>
												<div class="driver-form">
													<label for="flight-number5">Skrydžio numeris:</label><br>
													<input id="flight-number5" type="text" name="flight_number" placeholder="Skrydžio numeris">
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="message5">Pageidavimai: </label><br>
													<textarea id="message5" name="message" placeholder="Jūsų pageidavimai..."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="total-price-and-payment">
										<div class="sum-details">
											<div>
												<span>Paros kaina:</span><br>
												<span>Papildomai:</span><br>
												<span><b>Suma iš viso:</b></span>
											</div>
											<div>
												<output id="day-price-chr"></output><input id="day-price-chr2" class="hidden" name="day_price"><br>
												<output id="price-for-extra-chr">0</output><input id="price-for-extra-chr2" class="hidden" name="price_for_extra"><br>
												<output id="total-price-chr" class="total-price-modal"></output><input id="total-price-chr2" class="hidden" name="total_price">
											</div>
											<div>
												<span>€</span><br>
												<span>€</span><br>
												<span><b>€</b></span>
											</div>
										</div>
										<div class="payment-choice">
											<h5>Apmokėjimo būdas</h5>
											<span>
												<input id="credit-card5" class="credit-card" type="radio" name="credit-card" disabled>
												<label for="credit-card5">Pavedimu</label>
											</span>
											<span>
												<input id="pay-later5" class="pay-later" type="radio" name="pay-later" required>
												<label for="pay-later5">Mokėti atsiimant</label>
											</span>
										</div>
										<div class="button-continue">
											<div>
												<button id="continue-to-payment5" class="button" name="confirm_order" type="submit">Užsakyti</button>
											</div>
										</div>
									</div>
									<div class="hidden">
										<output id="extra-kasko5" name="extra_kasko"></output>
										<output id="extra-km5" name="extra_km"></output>
										<output id="extra-dr5" name="extra_dr"></output>
										<output id="extra-wifi5" name="extra_wifi"></output>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--toyota rav4-->

			<div class="car-offer-bar">
				<div>
					<img src="app/images/toyota-rav4.png" alt="toyota-rav4-hybrid" title="toyota-rav4-hybrid-nuoma">
				</div>
				<div>
					<div class="about-car">
						<div>
							<span><b>Visureigis:</b></span><br><br>
							<span>Pagaminta:</span><br>
							<span>Kuro tipas:</span><br>
							<span>Pavaų dėžė:</span><br>
						</div>
						<div>
							<span><b>Toyota Rav4 ar pan.</b></span><br><br>
							<span>2016 - 2019</span><br>
							<span>Benzinas/elektra</span><br>
							<span>Automatinė</span><br>
						</div>
					</div>
					<div class="about-price">
						<span>Kaina:</span>
						<output id="rav4-price-for-period" class="total-price" name="total-price"></output>
						<output id="rav4-price-hidden" class="car-price-hidden"></output>
						<span><button id="continue-ordering6" class="button">Pasirinkti</button></span>

<!--toyota rav4 modal-->

						<div id="my-modal6" class="modal">
							<div class="modal-content">
								<span class="close6">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<form class="order-details">
									<div class="selection-details">
										<div >
											<img src="app/images/toyota-rav4.png" alt="toyota-rav4-hybrid">
										</div>
										<div class="car-and-choice-details">
											<div>
												<div><h5>Visureigis:</h5></div>
												<span>Paėmimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Grąžinimas:</span><br><br class="make-br"><br class="make-br2">
												<span>Trukmė:</span>
											</div>
											<div>
												<div><h5>Toyota Rav4 ar pan.</h5></div>
												<input class="hidden" name="car" value="Toyota Rav4 ar pan.">
												<span>
													<input class="pickup-place-modal" name="pickup_place" value="<?php echo ($_GET['pickup-place']);?>">
													<input class="pickup-date-modal" name="pickup_date" value="<?php echo ($_GET['pickup-date']);?>">
													<input class="pickup-time-modal" name="pickup_time" value="<?php echo ($_GET['pickup-time']);?>">
												</span><br>
												<span>
													<input class="return-place-modal" name="return_place" value="<?php echo ($_GET['return-place']);?>">
													<input class="return-date-modal" name="return_date" value="<?php echo ($_GET['return-date']);?>">
													<input class="return-time-modal" name="return_time" value="<?php echo ($_GET['return-time']);?>">
												</span><br>
												<output id="calculate-period-modal6" class="period-in-modal"></output>
											</div>
										</div>
									</div>
									<hr>
									<div class="included-extras-and-driver-form">
										<div class="included-and-extras">
											<div class="included">
												<div><h5>Į kainą įskaičiuota</h5></div>
												<span><input id="kasko6" type="checkbox" name="limited_kasko" checked value="Kasko(400)" onchange="uncheckKasko6()">Kasko draudimas (frančizė - 600€)</span><br>
												<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
												<span><input id="limited-mileage6" type="checkbox" name="limited_mileage" checked value="ribota-rida" onchange="uncheckMileage6()">400 km/para rida (papild.0,10€/km)</span><br>
												<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span>
												<span><input id="one-driver6" type="checkbox" name="one_driver" value="one-driver" checked hidden onchange="uncheckDriver6()"></span>
												<span><input id="no-wifi6" type="checkbox" name="no_wifi" value="no-wifi" checked hidden onchange="uncheckWifi6()"></span>
												<span><input id="no-child-seat6" type="checkbox" name="no_child_seat" value="no-child-seat" checked hidden onchange="uncheckSeat6()"></span>
												<span><input id="no-gps6" type="checkbox" name="no_gps" value="no-gps" checked hidden onchange="uncheckGps6()"></span>
											</div>
											<hr>
											<div class="extras">
												<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
												<span><input id="full-kasko6" type="checkbox" name="full_kasko" value="pilnas-Kasko" onchange="uncheckKasko6()" onclick="pridetiPaslauga6()">Pilnas Kasko draudimas(15€/para)</span><br>
												<span><input id="unlimited-mileage6" type="checkbox" name="unlimited_mileage" value="neribota-rida" onchange="uncheckMileage6()" onclick="pridetiPaslauga6()">Neribota rida (10€/para)</span><br>
												<span><input id="extra-driver6" type="checkbox" name="extra_driver" value="papildomas-vairuotojas" onclick="pridetiPaslauga6()" onchange="uncheckDriver6()">Papildomas vairuotojas (5€/para)</span><br>
												<span><input id="wifi6" type="checkbox" name="wifi" value="wi-fi" onclick="pridetiPaslauga6()" onchange="uncheckWifi6()">Wi-Fi (3€/para)</span><br>
												<span><input id="child-seat6" type="checkbox" name="child_seat" value="child-seat" onchange="uncheckSeat6()">Vaikiška kėdutė (nemokamai)</span><br>
												<span><input id="gps6" type="checkbox" name="gps" value="gps">GPS (nemokamai)</span><br><br>
												<div class="tooltip-insurance"><small>* Plačiau apie draudimą</small>
													<span class="tooltiptext-insurance">Į standartinę kainą įskaičiuotas privalomas civilnės atsakomybės draudimas galiojantis Lietuvoje ir Europoje bei draudimas nuo avarijos ir vagystės (Kasko) su asmenine atsakomybe: iki 400 Eur (ekonominė, kompaktinė ir universalas grupėms), iki 600 Eur (crossover, SUV grupėms). Papildomai pasirinkus pilną Kasko draudimą – draudimo nuo avarijos ir vagystės asmeninė atsakomybė – 0 (nulis) Eur.</span>
												</div>
											</div>
											<hr>
										</div>
										<div class="driver-information">
											<h5>Vairuotojo informacija</h5>
											<div class="form-row">
												<div class="driver-form">
													<label for="first-name6">Vardas: <span>*</span></label><br>
													<input id="first-name6" type="text" name="name" placeholder="Jūsų vardas" required>
												</div>
												<div class="driver-form">
													<label for="second-name6">Pavardė: <span>*</span></label><br>
													<input id="second-name6" type="text" name="surname" placeholder="Jūsų pavardė" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="telephone6">Telefonas: <span>*</span></label><br>
													<input id="telephone6" type="tel" name="phone" placeholder="Jūsų telefono numeris" required>
												</div>
												<div class="driver-form">
													<label for="e-mail6">El.paštas: <span>*</span></label><br>
													<input id="e-mail6" type="email" name="email" placeholder="Jūsų elektroninis paštas" required>
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="birthday6">Gimimo data: <span>*</span></label><br>
													<input id="birthday6" type="text" name="birthday" placeholder="Jūsų gimimo data">
												</div>
												<div class="driver-form">
													<label for="flight-number6">Skrydžio numeris:</label><br>
													<input id="flight-number6" type="text" name="flight_number" placeholder="Skrydžio numeris">
												</div>
											</div>
											<div class="form-row">
												<div class="driver-form">
													<label for="message6">Pageidavimai: </label><br>
													<textarea id="message6" name="message" placeholder="Jūsų pageidavimai..."></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="total-price-and-payment">
										<div class="sum-details">
											<div>
												<span>Paros kaina:</span><br>
												<span>Papildomai:</span><br>
												<span><b>Suma iš viso:</b></span>
											</div>
											<div>
												<output id="day-price-rav4"></output><input id="day-price-rav42" class="hidden" name="day_price"><br>
												<output id="price-for-extra-rav4">0</output><input id="price-for-extra-rav42" class="hidden" name="price_for_extra"><br>
												<output id="total-price-rav4" class="total-price-modal"></output><input id="total-price-rav42" class="hidden" name="total_price">
											</div>
											<div>
												<span>€</span><br>
												<span>€</span><br>
												<span><b>€</b></span>
											</div>
										</div>
										<div class="payment-choice">
											<h5>Apmokėjimo būdas</h5>
											<span>
												<input id="credit-card6" class="credit-card" type="radio" name="credit-card" disabled>
												<label for="credit-card6">Pavedimu</label>
											</span>
											<span>
												<input id="pay-later6" class="pay-later" type="radio" name="pay-later" required>
												<label for="pay-later6">Mokėti atsiimant</label>
											</span>
										</div>
										<div class="button-continue">
											<div>
												<button id="continue-to-payment6" class="button" name="confirm_order" type="submit">Užsakyti</button>
											</div>
										</div>
									</div>
									<div class="hidden">
										<output id="extra-kasko6" name="extra_kasko"></output>
										<output id="extra-km6" name="extra_km"></output>
										<output id="extra-dr6" name="extra_dr"></output>
										<output id="extra-wifi6" name="extra_wifi"></output>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

<!--Footer-->

		<?php
			include('app/views/footer2.php');
		?>

<!--script-->

		<script src="app/scripts/carListScript.js"></script>

	</body>
</html>
