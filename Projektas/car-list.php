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
						<span id="pickup-place"></span>
						<span id="pickup-date"></span>
						<span id="pickup-time"></span>
					</div>
					<h6><a href="index.php">Redaguoti</a></h6>
				</div>
				<div>
					<h5>Automobilio grąžinimas</h5>
					<div class="display-cookies">
						<span id="return-place"></span>
						<span id="return-date"></span>
						<span id="return-time"></span>
					</div>
					<h6><a href="index.php">Redaguoti</a></h6>
				</div>
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
							<span><b>Suzuki Swift Hybrid</b></span><br><br>
							<span>2018 - 2019</span><br>
							<span>Benzinas/elektra</span><br>
							<span>Mechaninė</span><br>
						</div>
					</div>
					<div class="about-price">
						<span>Kaina:</span>
						<span>€34 <small>(€17/parai)</small></span>
						<span><button id="continue-ordering" class="button" onclick="getCookieAndWriteValue();">Pasirinkti</button></span>

<!--suzuki-swift-modal-->

						<div id="my-modal" class="modal">
							<div class="modal-content">
								<span class="close">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<div class="selection-details">
									<div >
										<img src="app/images/suzuki-swift.jpg" alt="suzuki-swift">
									</div>
									<div class="car-and-choice-details">
										<div>
											<div><h5>Ekonominė:</h5></div>
											<span>Paėmimas:</span><br>
											<span>Grąžinimas:</span><br>
											<span>Trukmė:</span>
										</div>
										<div>
											<div><h5>Suzuki Swift ar pan.</h5></div>
											<span>
												<span class="pickup-place"></span>
												<span class="pickup-date"></span>
												<span class="pickup-time"></span>
											</span><br>
											<span>
												<span class="return-place"></span>
												<span class="return-date"></span>
												<span class="return-time"></span><br>
											</span>
											<span class="calculate-period"></span>
										</div>
									</div>
								</div>
								<hr>
								<form class="order-details">
									<div class="included-and-extras">
										<div class="included">
											<div><h5>Į kainą įskaičiuota</h5></div>
											<span><input id="kasko" type="checkbox" checked value="Kasko(400)" onchange="uncheckKasko()">Kasko draudimas (frančizė - 400€)</span><br>
											<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
											<span><input id="limited-mileage" type="checkbox" checked value="ribota-rida" onchange="uncheckMileage()">400 km/para rida (papild.0,10€/km)</span><br>
											<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span><br>
										</div>
										<hr>
										<div class="extras">
											<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
											<span><input id="full-kasko" type="checkbox" value="pilnas-Kasko" onchange="uncheckKasko()">Pilnas Kasko draudimas(10€/para)</span><br>
											<span><input id="unlimited-mileage" type="checkbox" value="neribota-rida" onchange="uncheckMileage()">Neribota rida (10€/para)</span><br>
											<span><input class="extra-driver" type="checkbox" value="papildomas-vairuotojas">Papildomas vairuotojas (5€/para)</span><br>
											<span><input class="wifi" type="checkbox" value="wi-fi">Wi-Fi (3€/para)</span><br>
											<span><input type="checkbox" value="kėdutė">Vaikiška kėdutė (nemokamai)</span><br>
											<span><input type="checkbox" value="gps">GPS (nemokamai)</span>
										</div>
										<hr>
									</div>
									<div class="sum-details">
										<div>
											<span>Paros kaina:</span><br>
											<span>Papildomai:</span><br>
											<span><b>Suma iš viso:</b></span>
										</div>
										<div>
											<span class="day-price">17</span><br>
											<span class="price-for-extra">3</span><br>
											<span class="total-price"><b></b></span>
										</div>
										<div>
											<span>€</span><br>
											<span>€</span><br>
											<span><b>€</b></span>
										</div>
									</div>
									<div class="button-continue">
										<button id="continue-to-payment" class="button">Tęsti</button>
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
						<span>€40 <small>(€20/parai)</small></span>
						<span><button id="continue-ordering2" class="button">Pasirinkti</button></span>

<!--toyota yaris modal-->

						<div id="my-modal2" class="modal">
							<div class="modal-content">
								<span class="close2">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<div class="selection-details">
									<div >
										<img src="app/images/toyota-yaris.png" alt="toyota-yaris">
									</div>
									<div class="car-and-choice-details">
										<div>
											<div><h5>Ekonominė:</h5></div>
											<span>Paėmimas:</span><br>
											<span>Grąžinimas:</span><br>
											<span>Trukmė:</span>
										</div>
										<div>
											<div><h5>Toyota Yaris ar pan.</h5></div>
											<span>
												<span class="pickup-place"></span>
												<span class="pickup-date"></span>
												<span class="pickup-time"></span>
											</span><br>
											<span>
												<span class="return-place"></span>
												<span class="return-date"></span>
												<span class="return-time"></span><br>
											</span>
											<span class="calculate-period"></span>
										</div>
									</div>
								</div>
								<hr>
								<form class="order-details">
									<div class="included-and-extras">
										<div class="included">
											<div><h5>Į kainą įskaičiuota</h5></div>
											<span><input id="kasko2" type="checkbox" checked value="Kasko(400)" onchange="uncheckKasko2()">Kasko draudimas (frančizė - 400€)</span><br>
											<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
											<span><input id="limited-mileage2" type="checkbox" checked value="ribota-rida" onchange="uncheckMileage2()">400 km/para rida (papild.0,10€/km)</span><br>
											<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span><br>
										</div>
										<hr>
										<div class="extras">
											<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
											<span><input id="full-kasko2" type="checkbox" value="pilnas-Kasko" onchange="uncheckKasko2()">Pilnas Kasko draudimas(10€/para)</span><br>
											<span><input id="unlimited-mileage2" type="checkbox" value="neribota-rida" onchange="uncheckMileage2()">Neribota rida (10€/para)</span><br>
											<span><input class="extra-driver" type="checkbox" value="papildomas-vairuotojas">Papildomas vairuotojas (5€/para)</span><br>
											<span><input class="wifi" type="checkbox" value="wi-fi">Wi-Fi (3€/para)</span><br>
											<span><input type="checkbox" value="kėdutė">Vaikiška kėdutė (nemokamai)</span><br>
											<span><input type="checkbox" value="gps">GPS (nemokamai)</span>
										</div>
										<hr>
									</div>
									<div class="sum-details">
										<div>
											<span>Paros kaina:</span><br>
											<span>Papildomai:</span><br>
											<span><b>Suma iš viso:</b></span>
										</div>
										<div>
											<span class="day-price"></span><br>
											<span class="price-for-extra"></span><br>
											<span class="total-price"><b></b></span>
										</div>
										<div>
											<span>€</span><br>
											<span>€</span><br>
											<span><b>€</b></span>
										</div>
									</div>
									<div class="button-continue">
										<button id="continue-to-payment2" class="button">Tęsti</button>
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
						<span>€50 <small>(€25/parai)</small></span>
						<span><button id="continue-ordering3" class="button">Pasirinkti</button></span>

<!--toyota corolla modal-->

						<div id="my-modal3" class="modal">
							<div class="modal-content">
								<span class="close3">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<div class="selection-details">
									<div >
										<img src="app/images/toyota-corolla-hatchback.jpg" alt="toyota-corolla-hybrid">
									</div>
									<div class="car-and-choice-details">
										<div>
											<div><h5>Kompaktinė:</h5></div>
											<span>Paėmimas:</span><br>
											<span>Grąžinimas:</span><br>
											<span>Trukmė:</span>
										</div>
										<div>
											<div><h5>Toyota Corolla ar pan.</h5></div>
											<span>
												<span class="pickup-place"></span>
												<span class="pickup-date"></span>
												<span class="pickup-time"></span>
											</span><br>
											<span>
												<span class="return-place"></span>
												<span class="return-date"></span>
												<span class="return-time"></span><br>
											</span>
											<span class="calculate-period"></span>
										</div>
									</div>
								</div>
								<hr>
								<form class="order-details">
									<div class="included-and-extras">
										<div class="included">
											<div><h5>Į kainą įskaičiuota</h5></div>
											<span><input id="kasko3" type="checkbox" checked value="Kasko(400)" onchange="uncheckKasko3()">Kasko draudimas (frančizė - 400€)</span><br>
											<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
											<span><input id="limited-mileage3" type="checkbox" checked value="ribota-rida" onchange="uncheckMileage3()">400 km/para rida (papild.0,10€/km)</span><br>
											<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span><br>
										</div>
										<hr>
										<div class="extras">
											<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
											<span><input id="full-kasko3" type="checkbox" value="pilnas-Kasko" onchange="uncheckKasko3()">Pilnas Kasko draudimas(10€/para)</span><br>
											<span><input id="unlimited-mileage3" type="checkbox" value="neribota-rida" onchange="uncheckMileage3()">Neribota rida (10€/para)</span><br>
											<span><input class="extra-driver" type="checkbox" value="papildomas-vairuotojas">Papildomas vairuotojas (5€/para)</span><br>
											<span><input class="wifi" type="checkbox" value="wi-fi">Wi-Fi (3€/para)</span><br>
											<span><input type="checkbox" value="kėdutė">Vaikiška kėdutė (nemokamai)</span><br>
											<span><input type="checkbox" value="gps">GPS (nemokamai)</span>
										</div>
										<hr>
									</div>
									<div class="sum-details">
										<div>
											<span>Paros kaina:</span><br>
											<span>Papildomai:</span><br>
											<span><b>Suma iš viso:</b></span>
										</div>
										<div>
											<span class="day-price"></span><br>
											<span class="price-for-extra"></span><br>
											<span class="total-price"><b></b></span>
										</div>
										<div>
											<span>€</span><br>
											<span>€</span><br>
											<span><b>€</b></span>
										</div>
									</div>
									<div class="button-continue">
										<button id="continue-to-payment3" class="button">Tęsti</button>
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
						<span>€60 <small>(€30/parai)</small></span>
						<span><button id="continue-ordering4" class="button">Pasirinkti</button></span>

<!--toyota corolla touring modal-->

						<div id="my-modal4" class="modal">
							<div class="modal-content">
								<span class="close4">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<div class="selection-details">
									<div >
										<img src="app/images/toyota-corolla-sw.png" alt="toyota-corolla-touring-hybrid">
									</div>
									<div class="car-and-choice-details">
										<div>
											<div><h5>Universalas:</h5></div>
											<span>Paėmimas:</span><br>
											<span>Grąžinimas:</span><br>
											<span>Trukmė:</span>
										</div>
										<div>
											<div><h5>Toyota Corolla ar pan.</h5></div>
											<span>
												<span class="pickup-place"></span>
												<span class="pickup-date"></span>
												<span class="pickup-time"></span>
											</span><br>
											<span>
												<span class="return-place"></span>
												<span class="return-date"></span>
												<span class="return-time"></span><br>
											</span>
											<span class="calculate-period"></span>
										</div>
									</div>
								</div>
								<hr>
								<form class="order-details">
									<div class="included-and-extras">
										<div class="included">
											<div><h5>Į kainą įskaičiuota</h5></div>
											<span><input id="kasko4" type="checkbox" checked value="Kasko(400)" onchange="uncheckKasko4()">Kasko draudimas (frančizė - 400€)</span><br>
											<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
											<span><input id="limited-mileage4" type="checkbox" checked value="ribota-rida" onchange="uncheckMileage4()">400 km/para rida (papild.0,10€/km)</span><br>
											<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span><br>
										</div>
										<hr>
										<div class="extras">
											<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
											<span><input id="full-kasko4" type="checkbox" value="pilnas-Kasko" onchange="uncheckKasko4()">Pilnas Kasko draudimas(10€/para)</span><br>
											<span><input id="unlimited-mileage4" type="checkbox" value="neribota-rida" onchange="uncheckMileage4()">Neribota rida (10€/para)</span><br>
											<span><input class="extra-driver" type="checkbox" value="papildomas-vairuotojas">Papildomas vairuotojas (5€/para)</span><br>
											<span><input class="wifi" type="checkbox" value="wi-fi">Wi-Fi (3€/para)</span><br>
											<span><input type="checkbox" value="kėdutė">Vaikiška kėdutė (nemokamai)</span><br>
											<span><input type="checkbox" value="gps">GPS (nemokamai)</span>
										</div>
										<hr>
									</div>
									<div class="sum-details">
										<div>
											<span>Paros kaina:</span><br>
											<span>Papildomai:</span><br>
											<span><b>Suma iš viso:</b></span>
										</div>
										<div>
											<span class="day-price"></span><br>
											<span class="price-for-extra"></span><br>
											<span class="total-price"><b></b></span>
										</div>
										<div>
											<span>€</span><br>
											<span>€</span><br>
											<span><b>€</b></span>
										</div>
									</div>
									<div class="button-continue">
										<button id="continue-to-payment4" class="button">Tęsti</button>
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
						<span>€70 <small>(€35/parai)</small></span>
						<span><button id="continue-ordering5" class="button">Pasirinkti</button></span>

<!--toyota c-hr modal-->

						<div id="my-modal5" class="modal">
							<div class="modal-content">
								<span class="close5">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<div class="selection-details">
									<div >
										<img src="app/images/toyota-chr.png" alt="toyota-chr-hybrid">
									</div>
									<div class="car-and-choice-details">
										<div>
											<div><h5>Krosoveris:</h5></div>
											<span>Paėmimas:</span><br>
											<span>Grąžinimas:</span><br>
											<span>Trukmė:</span>
										</div>
										<div>
											<div><h5>Toyota C-HR ar pan.</h5></div>
											<span>
												<span class="pickup-place"></span>
												<span class="pickup-date"></span>
												<span class="pickup-time"></span>
											</span><br>
											<span>
												<span class="return-place"></span>
												<span class="return-date"></span>
												<span class="return-time"></span><br>
											</span>
											<span class="calculate-period"></span>
										</div>
									</div>
								</div>
								<hr>
								<form class="order-details">
									<div class="included-and-extras">
										<div class="included">
											<div><h5>Į kainą įskaičiuota</h5></div>
											<span><input id="kasko5" type="checkbox" checked value="Kasko(400)" onchange="uncheckKasko5()">Kasko draudimas (frančizė - 400€)</span><br>
											<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
											<span><input id="limited-mileage5" type="checkbox" checked value="ribota-rida" onchange="uncheckMileage5()">400 km/para rida (papild.0,10€/km)</span><br>
											<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span><br>
										</div>
										<hr>
										<div class="extras">
											<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
											<span><input id="full-kasko5" type="checkbox" value="pilnas-Kasko" onchange="uncheckKasko5()">Pilnas Kasko draudimas(10€/para)</span><br>
											<span><input id="unlimited-mileage5" type="checkbox" value="neribota-rida" onchange="uncheckMileage5()">Neribota rida (10€/para)</span><br>
											<span><input class="extra-driver" type="checkbox" value="papildomas-vairuotojas">Papildomas vairuotojas (5€/para)</span><br>
											<span><input class="wifi" type="checkbox" value="wi-fi">Wi-Fi (3€/para)</span><br>
											<span><input type="checkbox" value="kėdutė">Vaikiška kėdutė (nemokamai)</span><br>
											<span><input type="checkbox" value="gps">GPS (nemokamai)</span>
										</div>
										<hr>
									</div>
									<div class="sum-details">
										<div>
											<span>Paros kaina:</span><br>
											<span>Papildomai:</span><br>
											<span><b>Suma iš viso:</b></span>
										</div>
										<div>
											<span class="day-price"></span><br>
											<span class="price-for-extra"></span><br>
											<span class="total-price"><b></b></span>
										</div>
										<div>
											<span>€</span><br>
											<span>€</span><br>
											<span><b>€</b></span>
										</div>
									</div>
									<div class="button-continue">
										<button id="continue-to-ordering5" class="button">Tęsti</button>
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
						<span>€80 <small>(€40/parai)</small></span>
						<span><button id="continue-ordering6" class="button">Pasirinkti</button></span>

<!--toyota rav4 modal-->

						<div id="my-modal6" class="modal">
							<div class="modal-content">
								<span class="close6">&times;</span>
								<div>
									<h4>Automobilio rezervacija</h4>
								</div>
								<div class="selection-details">
									<div >
										<img src="app/images/toyota-rav4.png" alt="toyota-rav4-hybrid">
									</div>
									<div class="car-and-choice-details">
										<div>
											<div><h5>Visureigis:</h5></div>
											<span>Paėmimas:</span><br>
											<span>Grąžinimas:</span><br>
											<span>Trukmė:</span>
										</div>
										<div>
											<div><h5>Toyota Rav4 ar pan.</h5></div>
											<span>
												<span class="pickup-place"></span>
												<span class="pickup-date"></span>
												<span class="pickup-time"></span>
											</span><br>
											<span>
												<span class="return-place"></span>
												<span class="return-date"></span>
												<span class="return-time"></span><br>
											</span>
											<span class="calculate-period"></span>
										</div>
									</div>
								</div>
								<hr>
								<form class="order-details">
									<div class="included-and-extras">
										<div class="included">
											<div><h5>Į kainą įskaičiuota</h5></div>
											<span><input id="kasko6" type="checkbox" checked value="Kasko(400)" onchange="uncheckKasko6()">Kasko draudimas (frančizė - 400€)</span><br>
											<span><input type="checkbox" checked disabled>Privalomas draudimas</span><br>
											<span><input id="limited-mileage6" type="checkbox" checked value="ribota-rida" onchange="uncheckMileage6()">400 km/para rida (papild.0,10€/km)</span><br>
											<span><input type="checkbox" checked disabled>24/7 pagalba kelyje</span><br>
										</div>
										<hr>
										<div class="extras">
											<div><h5>Papildomai <small>(pažymėti reikalingus)</small></h5></div>
											<span><input id="full-kasko6" type="checkbox" value="pilnas-Kasko" onchange="uncheckKasko6()">Pilnas Kasko draudimas(10€/para)</span><br>
											<span><input id="unlimited-mileage6" type="checkbox" value="neribota-rida" onchange="uncheckMileage6()">Neribota rida (10€/para)</span><br>
											<span><input class="extra-driver" type="checkbox" value="papildomas-vairuotojas">Papildomas vairuotojas (5€/para)</span><br>
											<span><input class="wifi" type="checkbox" value="wi-fi">Wi-Fi (3€/para)</span><br>
											<span><input type="checkbox" value="kėdutė">Vaikiška kėdutė (nemokamai)</span><br>
											<span><input type="checkbox" value="gps">GPS (nemokamai)</span>
										</div>
										<hr>
									</div>
									<div class="sum-details">
										<div>
											<span>Paros kaina:</span><br>
											<span>Papildomai:</span><br>
											<span><b>Suma iš viso:</b></span>
										</div>
										<div>
											<span class="day-price"></span><br>
											<span class="price-for-extra"></span><br>
											<span class="total-price"><b></b></span>
										</div>
										<div>
											<span>€</span><br>
											<span>€</span><br>
											<span><b>€</b></span>
										</div>
									</div>
									<div class="button-continue">
										<button id="continue-to-payment6" class="button">Tęsti</button>
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
			include('app/views/footer.php');
		?>

<!--script-->

		<script src="app/scripts/carListScript.js"></script>

	</body>
</html>
