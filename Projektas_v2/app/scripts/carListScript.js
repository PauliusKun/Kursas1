//<!--script for get cookies-->

function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
return "";
}

function getCookieAndWriteValue() {
	city = getCookie('city');
	date = getCookie('date');
	time = getCookie('time');
	backCity = getCookie('backCity');
	backDate = getCookie('backDate');
	backTime = getCookie('backTime');
	document.getElementById('pickup-place').innerHTML = city;
	document.getElementById('pickup-date').innerHTML = date;
	document.getElementById('pickup-time').innerHTML = time;
	document.getElementById('return-place').innerHTML = backCity;
	document.getElementById('return-date').innerHTML = backDate;
	document.getElementById('return-time').innerHTML = backTime;
	}
//		while (city != ' ' || date != ' ' || time != ' ' || backCity != ' ' || backDate != ' ' || backTime != ' ')

//script for print period in modals

	var periodas = document.getElementById('rental_period').value;
	document.getElementById('calculate-period-modal1').innerHTML = periodas + 'paros';

	var periodas = document.getElementById('rental_period').value;
	document.getElementById('calculate-period-modal2').innerHTML = periodas + 'paros';

	var periodas = document.getElementById('rental_period').value;
	document.getElementById('calculate-period-modal3').innerHTML = periodas + 'paros';

	var periodas = document.getElementById('rental_period').value;
	document.getElementById('calculate-period-modal4').innerHTML = periodas + 'paros';

	var periodas = document.getElementById('rental_period').value;
	document.getElementById('calculate-period-modal5').innerHTML = periodas + 'paros';

	var periodas = document.getElementById('rental_period').value;
	document.getElementById('calculate-period-modal6').innerHTML = periodas + 'paros';

//script for calculating suzuki swift price

var periodas1 = Number(document.getElementById('rental_period').value);

	if (periodas1 < 3) {
		var resultSwift = '€' + (periodas1 * 30) + ' <small>(30€/para)</small>';
		var resultSwift2 = (periodas1 * 30);
	} else if ((periodas1 >= 3) && (periodas1 < 5)) {
		var resultSwift = '€' + (periodas1 * 25) + ' <small>(25€/para)</small>';
		var resultSwift2 = (periodas1 * 25);
	} else if ((periodas1 >= 5) && (periodas1 < 7)) {
		var resultSwift = '€' + (periodas1 * 20) + ' <small>(20€/para)</small>';
		var resultSwift2 = (periodas1 * 20);
	} else if ((periodas1 >= 7) && (periodas1 < 14)) {
		var resultSwift = '€' + (periodas1 * 15) + ' <small>(15€/para)</small>';
		var resultSwift2 = (periodas1 * 15);
	} else {
		var resultSwift = '€' + (periodas1 * 10) + ' <small>(10€/para)</small>';
		var resultSwift2 = (periodas1 * 10);
	}
	document.getElementById('swift-price-for-period').innerHTML = resultSwift;
	document.getElementById('swift-price-hidden').innerHTML = resultSwift2;
	document.getElementById('day-price-swift').innerHTML = resultSwift2 / periodas1;
	document.getElementById('day-price-swift2').innerHTML = resultSwift2 / periodas1;
	document.getElementById('total-price-swift').innerHTML = resultSwift2;

function pridetiPaslauga() {
	var periodas = Number(document.getElementById('rental_period').value);
	var kasko = document.getElementById('full-kasko');
	var kilometrazas = document.getElementById('unlimited-mileage');
	var vairuotojas = document.getElementById('extra-driver');
	var netas = document.getElementById('wifi');

	if (kasko.checked == true) {
		var papildomasDraudimas = (periodas * 10);
	} else {
		var papildomasDraudimas = 0;
	}
	document.getElementById('extra-kasko').innerHTML = papildomasDraudimas;

	if (kilometrazas.checked == true) {
		var papildomasKilometrazas = (periodas * 5);
	} else {
		var papildomasKilometrazas = 0;
	}
	document.getElementById('extra-km').innerHTML = papildomasKilometrazas;

	if (vairuotojas.checked == true) {
		var papildomasVairuotojas = (periodas * 3);
	} else {
		var papildomasVairuotojas = 0;
	}
	document.getElementById('extra-dr').innerHTML = papildomasVairuotojas;
	if (netas.checked == true) {
		var papildomasInternetas = (periodas * 3);
	} else {
		var papildomasInternetas = 0;
	}
	document.getElementById('extra-wifi').innerHTML = papildomasInternetas;

	var extraKasko = Number(document.getElementById('extra-kasko').value);
	var extraKm = Number(document.getElementById('extra-km').value);
	var extraDriver = Number(document.getElementById('extra-dr').value);
	var extraWifi = Number(document.getElementById('extra-wifi').value);
	var papildomai = extraKasko + extraKm + extraDriver + extraWifi;

	document.getElementById('price-for-extra-swift').innerHTML = papildomai;
	document.getElementById('price-for-extra-swift2').innerHTML = papildomai;
	document.getElementById('total-price-swift').innerHTML = resultSwift2 + papildomai;
	document.getElementById('total-price-swift2').innerHTML = resultSwift2 + papildomai;
}

//script for calculating toyota yaris price

var periodas2 = Number(document.getElementById('rental_period').value);
	if (periodas2 < 3) {
		var resultYaris = '€' + (periodas2 * 32) + ' <small>(32€/para)</small>';
		var resultYaris2 = (periodas2 * 32);
	} else if ((periodas2 >= 3) && (periodas2 < 5)) {
		var resultYaris = '€' + (periodas2 * 28) + ' <small>(28€/para)</small>';
		var resultYaris2 = (periodas2 * 28);
	} else if ((periodas2 >= 5) && (periodas2 < 7)) {
		var resultYaris = '€' + (periodas2 * 25) + ' <small>(25€/para)</small>';
		var resultYaris2 = (periodas2 * 25);
	} else if ((periodas2 >= 7) && (periodas2 < 14)) {
		var resultYaris = '€' + (periodas2 * 20) + ' <small>(20€/para)</small>';
		var resultYaris2 = (periodas2 * 20);
	} else {
		var resultYaris = '€' + (periodas2 * 15) + ' <small>(15€/para)</small>';
		var resultYaris2 = (periodas2 * 15);
	}
	document.getElementById('yaris-price-for-period').innerHTML = resultYaris;
	document.getElementById('yaris-price-hidden').innerHTML = resultYaris2;
	document.getElementById('day-price-yaris').innerHTML = resultYaris2 / periodas2;
	document.getElementById('total-price-yaris').innerHTML = resultYaris2;

function pridetiPaslauga2() {
	var periodas = Number(document.getElementById('rental_period').value);
	var kasko = document.getElementById('full-kasko2');
	var kilometrazas = document.getElementById('unlimited-mileage2');
	var vairuotojas = document.getElementById('extra-driver2');
	var netas = document.getElementById('wifi2');

	if (kasko.checked == true) {
		var papildomasDraudimas = (periodas * 10);
	} else {
		var papildomasDraudimas = 0;
	}
	document.getElementById('extra-kasko2').innerHTML = papildomasDraudimas;

	if (kilometrazas.checked == true) {
		var papildomasKilometrazas = (periodas * 5);
	} else {
		var papildomasKilometrazas = 0;
	}
	document.getElementById('extra-km2').innerHTML = papildomasKilometrazas;

	if (vairuotojas.checked == true) {
		var papildomasVairuotojas = (periodas * 3);
	} else {
		var papildomasVairuotojas = 0;
	}
	document.getElementById('extra-dr2').innerHTML = papildomasVairuotojas;
	if (netas.checked == true) {
		var papildomasInternetas = (periodas * 3);
	} else {
		var papildomasInternetas = 0;
	}
	document.getElementById('extra-wifi2').innerHTML = papildomasInternetas;

	var extraKasko = Number(document.getElementById('extra-kasko2').value);
	var extraKm = Number(document.getElementById('extra-km2').value);
	var extraDriver = Number(document.getElementById('extra-dr2').value);
	var extraWifi = Number(document.getElementById('extra-wifi2').value);
	var papildomai = extraKasko + extraKm + extraDriver + extraWifi;

	document.getElementById('price-for-extra-yaris').innerHTML = papildomai;
	document.getElementById('total-price-yaris').innerHTML = resultYaris2 + papildomai;
}

//script for calculating toyota corolla price

var periodas3 = Number(document.getElementById('rental_period').value);
	if (periodas3 < 3) {
		var resultCorolla = '€' + (periodas3 * 35) + ' <small>(35€/para)</small>';
		var resultCorolla2 = (periodas3 * 35);
	} else if ((periodas3 >= 3) && (periodas3 < 5)) {
		var resultCorolla = '€' + (periodas3 * 32) + ' <small>(32€/para)</small>';
		var resultCorolla2 = (periodas3 * 32);
	} else if ((periodas3 >= 5) && (periodas3 < 7)) {
		var resultCorolla = '€' + (periodas3 * 30) + ' <small>(30€/para)</small>';
		var resultCorolla2 = (periodas3 * 30);
	} else if ((periodas3 >= 7) && (periodas3 < 14)) {
		var resultCorolla = '€' + (periodas3 * 25) + ' <small>(25€/para)</small>';
		var resultCorolla2 = (periodas3 * 25);
	} else {
		var resultCorolla = '€' + (periodas3 * 20) + ' <small>(20€/para)</small>';
		var resultCorolla2 = (periodas3 * 20);
	}
	document.getElementById('corolla-price-for-period').innerHTML = resultCorolla;
	document.getElementById('corolla-price-hidden').innerHTML = resultCorolla2;
	document.getElementById('day-price-corolla').innerHTML = resultCorolla2 / periodas1;
	document.getElementById('total-price-corolla').innerHTML = resultCorolla2;

function pridetiPaslauga3() {
	var periodas = Number(document.getElementById('rental_period').value);
	var kasko = document.getElementById('full-kasko3');
	var kilometrazas = document.getElementById('unlimited-mileage3');
	var vairuotojas = document.getElementById('extra-driver3');
	var netas = document.getElementById('wifi3');

	if (kasko.checked == true) {
		var papildomasDraudimas = (periodas * 10);
	} else {
		var papildomasDraudimas = 0;
	}
	document.getElementById('extra-kasko3').innerHTML = papildomasDraudimas;

	if (kilometrazas.checked == true) {
		var papildomasKilometrazas = (periodas * 5);
	} else {
		var papildomasKilometrazas = 0;
	}
	document.getElementById('extra-km3').innerHTML = papildomasKilometrazas;

	if (vairuotojas.checked == true) {
		var papildomasVairuotojas = (periodas * 3);
	} else {
		var papildomasVairuotojas = 0;
	}
	document.getElementById('extra-dr3').innerHTML = papildomasVairuotojas;

	if (netas.checked == true) {
		var papildomasInternetas = (periodas * 3);
	} else {
		var papildomasInternetas = 0;
	}
	document.getElementById('extra-wifi3').innerHTML = papildomasInternetas;

	var extraKasko = Number(document.getElementById('extra-kasko3').value);
	var extraKm = Number(document.getElementById('extra-km3').value);
	var extraDriver = Number(document.getElementById('extra-dr3').value);
	var extraWifi = Number(document.getElementById('extra-wifi3').value);
	var papildomai = extraKasko + extraKm + extraDriver + extraWifi;

	document.getElementById('price-for-extra-corolla').innerHTML = papildomai;
	document.getElementById('total-price-corolla').innerHTML = resultCorolla2 + papildomai;
}

//script for calculating toyota corolla sw price

var periodas4 = Number(document.getElementById('rental_period').value);
	if (periodas4 < 3) {
		var resultCorollaSw = '€' + (periodas4 * 36) + ' <small>(36€/para)</small>';
		var resultCorollaSw2 = (periodas4 * 36);
	} else if ((periodas4 >= 3) && (periodas4 < 5)) {
		var resultCorollaSw = '€' + (periodas4 * 33) + ' <small>(33€/para)</small>';
		var resultCorollaSw2 = (periodas4 * 33);
	} else if ((periodas4 >= 5) && (periodas4 < 7)) {
		var resultCorollaSw = '€' + (periodas4 * 31) + ' <small>(31€/para)</small>';
		var resultCorollaSw2 = (periodas4 * 31);
	} else if ((periodas4 >= 7) && (periodas4 < 14)) {
		var resultCorollaSw = '€' + (periodas4 * 26) + ' <small>(26€/para)</small>';
		var resultCorollaSw2 = (periodas4 * 26);
	} else {
		var resultCorollaSw = '€' + (periodas4 * 21) + ' <small>(21€/para)</small>';
		var resultCorollaSw2 = (periodas4 * 21);
	}
	document.getElementById('corolla-sw-price-for-period').innerHTML = resultCorollaSw;
	document.getElementById('corolla-sw-price-hidden').innerHTML = resultCorollaSw2;
	document.getElementById('day-price-corolla-sw').innerHTML = resultCorollaSw2 / periodas1;
	document.getElementById('total-price-corolla-sw').innerHTML = resultCorollaSw2;

function pridetiPaslauga4() {
	var periodas = Number(document.getElementById('rental_period').value);
	var kasko = document.getElementById('full-kasko4');
	var kilometrazas = document.getElementById('unlimited-mileage4');
	var vairuotojas = document.getElementById('extra-driver4');
	var netas = document.getElementById('wifi4');

	if (kasko.checked == true) {
		var papildomasDraudimas = (periodas * 10);
	} else {
		var papildomasDraudimas = 0;
	}
	document.getElementById('extra-kasko4').innerHTML = papildomasDraudimas;

	if (kilometrazas.checked == true) {
		var papildomasKilometrazas = (periodas * 5);
	} else {
		var papildomasKilometrazas = 0;
	}
	document.getElementById('extra-km4').innerHTML = papildomasKilometrazas;

	if (vairuotojas.checked == true) {
		var papildomasVairuotojas = (periodas * 3);
	} else {
		var papildomasVairuotojas = 0;
	}
	document.getElementById('extra-dr4').innerHTML = papildomasVairuotojas;
	if (netas.checked == true) {
		var papildomasInternetas = (periodas * 3);
	} else {
		var papildomasInternetas = 0;
	}
	document.getElementById('extra-wifi4').innerHTML = papildomasInternetas;

	var extraKasko = Number(document.getElementById('extra-kasko4').value);
	var extraKm = Number(document.getElementById('extra-km4').value);
	var extraDriver = Number(document.getElementById('extra-dr4').value);
	var extraWifi = Number(document.getElementById('extra-wifi4').value);
	var papildomai = extraKasko + extraKm + extraDriver + extraWifi;

	document.getElementById('price-for-extra-corolla-sw').innerHTML = papildomai;
	document.getElementById('total-price-corolla-sw').innerHTML = resultCorollaSw2 + papildomai;
}

//script for calculating toyota chr price

var periodas5 = Number(document.getElementById('rental_period').value);
	if (periodas5 < 3) {
		var resultChr = '€' + (periodas5 * 40) + ' <small>(40€/para)</small>';
		var resultChr2 = (periodas5 * 40);
	} else if ((periodas5 >= 3) && (periodas5 < 5)) {
		var resultChr = '€' + (periodas5 * 35) + ' <small>(35€/para)</small>';
		var resultChr2 = (periodas5 * 35);
	} else if ((periodas5 >= 5) && (periodas5 < 7)) {
		var resultChr = '€' + (periodas5 * 32) + ' <small>(32€/para)</small>';
		var resultChr2 = (periodas5 * 32);
	} else if ((periodas5 >= 7) && (periodas5 < 14)) {
		var resultChr = '€' + (periodas5 * 27) + ' <small>(27€/para)</small>';
		var resultChr2 = (periodas5 * 27);
	} else {
		var resultChr = '€' + (periodas5 * 22) + ' <small>(22€/para)</small>';
		var resultChr2 = (periodas5 * 22);
	}
	document.getElementById('chr-price-for-period').innerHTML = resultChr;
	document.getElementById('chr-price-hidden').innerHTML = resultChr2;
	document.getElementById('day-price-chr').innerHTML = resultChr2 / periodas1;
	document.getElementById('total-price-chr').innerHTML = resultChr2;

function pridetiPaslauga5() {
	var periodas = Number(document.getElementById('rental_period').value);
	var kasko = document.getElementById('full-kasko5');
	var kilometrazas = document.getElementById('unlimited-mileage5');
	var vairuotojas = document.getElementById('extra-driver5');
	var netas = document.getElementById('wifi5');

	if (kasko.checked == true) {
		var papildomasDraudimas = (periodas * 15);
	} else {
		var papildomasDraudimas = 0;
	}
	document.getElementById('extra-kasko5').innerHTML = papildomasDraudimas;

	if (kilometrazas.checked == true) {
		var papildomasKilometrazas = (periodas * 5);
	} else {
		var papildomasKilometrazas = 0;
	}
	document.getElementById('extra-km5').innerHTML = papildomasKilometrazas;

	if (vairuotojas.checked == true) {
		var papildomasVairuotojas = (periodas * 3);
	} else {
		var papildomasVairuotojas = 0;
	}
	document.getElementById('extra-dr5').innerHTML = papildomasVairuotojas;
	if (netas.checked == true) {
		var papildomasInternetas = (periodas * 3);
	} else {
		var papildomasInternetas = 0;
	}
	document.getElementById('extra-wifi5').innerHTML = papildomasInternetas;

	var extraKasko = Number(document.getElementById('extra-kasko5').value);
	var extraKm = Number(document.getElementById('extra-km5').value);
	var extraDriver = Number(document.getElementById('extra-dr5').value);
	var extraWifi = Number(document.getElementById('extra-wifi5').value);
	var papildomai = extraKasko + extraKm + extraDriver + extraWifi;

	document.getElementById('price-for-extra-chr').innerHTML = papildomai;
	document.getElementById('total-price-chr').innerHTML = resultChr2 + papildomai;
}

//script for calculating toyota rav4 price

var periodas6 = Number(document.getElementById('rental_period').value);
	if (periodas6 < 3) {
		var resultRav = '€' + (periodas6 * 45) + ' <small>(45€/para)</small>';
		var resultRav2 = (periodas6 * 45);
	} else if ((periodas6 >= 3) && (periodas6 < 5)) {
		var resultRav = '€' + (periodas6 * 40) + ' <small>(40€/para)</small>';
		var resultRav2 = (periodas6 * 40);
	} else if ((periodas6 >= 5) && (periodas6 < 7)) {
		var resultRav = '€' + (periodas6 * 35) + ' <small>(35€/para)</small>';
		var resultRav2 = (periodas6 * 35);
	} else if ((periodas6 >= 7) && (periodas6 < 14)) {
		var resultRav = '€' + (periodas6 * 30) + ' <small>(30€/para)</small>';
		var resultRav2 = (periodas6 * 30);
	} else {
		var resultRav = '€' + (periodas6 * 25) + ' <small>(25€/para)</small>';
		var resultRav2 = (periodas6 * 25);
	}
	document.getElementById('rav4-price-for-period').innerHTML = resultRav;
	document.getElementById('rav4-price-hidden').innerHTML = resultRav2;
	document.getElementById('day-price-rav4').innerHTML = resultRav2 / periodas1;
	document.getElementById('total-price-rav4').innerHTML = resultRav2;

function pridetiPaslauga6() {
	var periodas = Number(document.getElementById('rental_period').value);
	var kasko = document.getElementById('full-kasko6');
	var kilometrazas = document.getElementById('unlimited-mileage6');
	var vairuotojas = document.getElementById('extra-driver6');
	var netas = document.getElementById('wifi6');

	if (kasko.checked == true) {
		var papildomasDraudimas = (periodas * 15);
	} else {
		var papildomasDraudimas = 0;
	}
	document.getElementById('extra-kasko6').innerHTML = papildomasDraudimas;

	if (kilometrazas.checked == true) {
		var papildomasKilometrazas = (periodas * 5);
	} else {
		var papildomasKilometrazas = 0;
	}
	document.getElementById('extra-km6').innerHTML = papildomasKilometrazas;

	if (vairuotojas.checked == true) {
		var papildomasVairuotojas = (periodas * 3);
	} else {
		var papildomasVairuotojas = 0;
	}
	document.getElementById('extra-dr6').innerHTML = papildomasVairuotojas;
	if (netas.checked == true) {
		var papildomasInternetas = (periodas * 3);
	} else {
		var papildomasInternetas = 0;
	}
	document.getElementById('extra-wifi6').innerHTML = papildomasInternetas;

	var extraKasko = Number(document.getElementById('extra-kasko6').value);
	var extraKm = Number(document.getElementById('extra-km6').value);
	var extraDriver = Number(document.getElementById('extra-dr6').value);
	var extraWifi = Number(document.getElementById('extra-wifi6').value);
	var papildomai = extraKasko + extraKm + extraDriver + extraWifi;

	document.getElementById('price-for-extra-rav4').innerHTML = papildomai;
	document.getElementById('total-price-rav4').innerHTML = resultRav2 + papildomai;
}

//<!--script for checking inputs modal1-->

var checkedKaskoInput = document.getElementById('kasko');
var checkedFullKaskoInput = document.getElementById('full-kasko');
var ckeckedLimitedMileageInput = document.getElementById('limited-mileage');
var checkedUnlimitedMileageInput = document.getElementById('unlimited-mileage');
var checkedOneDriver = document.getElementById('one-driver');
var checkedExtraDriver = document.getElementById('extra-driver');
var checkedNoWifi = document.getElementById('no-wifi');
var checkedWifi = document.getElementById('wifi');
var checkedNoSeat = document.getElementById('no-child-seat');
var checkedSeat = document.getElementById('child-seat');
var checkedNoGps = document.getElementById('no-gps');
var checkedGps = document.getElementById('gps');

function uncheckKasko() {
	if(checkedFullKaskoInput.checked) {
		checkedKaskoInput.checked = false;
	} else {
		checkedKaskoInput.checked = true;
	}
}
function uncheckMileage() {
	if(checkedUnlimitedMileageInput.checked) {
		ckeckedLimitedMileageInput.checked = false;
	} else {
		ckeckedLimitedMileageInput.checked = true;
	}
}

function uncheckDriver() {
	if(checkedExtraDriver.checked) {
		checkedOneDriver.checked = false;
	} else {
		checkedOneDriver.checked = true;
	}
}

function uncheckWifi() {
	if(checkedWifi.checked) {
		checkedNoWifi.checked = false;
	} else {
		checkedNoWifi.checked = true;
	}
}

function uncheckSeat() {
	if(checkedSeat.checked) {
		checkedNoSeat.checked = false;
	} else {
		checkedNoSeat.checked = true;
	}
}

function uncheckGps() {
	if(checkedGps.checked) {
		checkedNoGps.checked = false;
	} else {
		checkedNoGps.checked = true;
	}
}

//script for checking inputs modal2

var checkedKaskoInput2 = document.getElementById('kasko2');
var checkedFullKaskoInput2 = document.getElementById('full-kasko2');
var ckeckedLimitedMileageInput2 = document.getElementById('limited-mileage2');
var checkedUnlimitedMileageInput2 = document.getElementById('unlimited-mileage2');
var checkedOneDriver2 = document.getElementById('one-driver2');
var checkedExtraDriver2 = document.getElementById('extra-driver2');
var checkedNoWifi2 = document.getElementById('no-wifi2');
var checkedWifi2 = document.getElementById('wifi2');
var checkedNoSeat2 = document.getElementById('no-child-seat2');
var checkedSeat2 = document.getElementById('child-seat2');
var checkedNoGps2 = document.getElementById('no-gps2');
var checkedGps2 = document.getElementById('gps2');

function uncheckKasko2() {
	if(checkedFullKaskoInput2.checked) {
		checkedKaskoInput2.checked = false;
	} else {
		checkedKaskoInput2.checked = true;
	}
}
function uncheckMileage2() {
	if(checkedUnlimitedMileageInput2.checked) {
		ckeckedLimitedMileageInput2.checked = false;
	} else {
		ckeckedLimitedMileageInput2.checked = true;
	}
}

function uncheckDriver2() {
	if(checkedExtraDriver2.checked) {
		checkedOneDriver2.checked = false;
	} else {
		checkedOneDriver2.checked = true;
	}
}

function uncheckWifi2() {
	if(checkedWifi2.checked) {
		checkedNoWifi2.checked = false;
	} else {
		checkedNoWifi2.checked = true;
	}
}

function uncheckSeat2() {
	if(checkedSeat2.checked) {
		checkedNoSeat2.checked = false;
	} else {
		checkedNoSeat2.checked = true;
	}
}

function uncheckGps2() {
	if(checkedGps2.checked) {
		checkedNoGps2.checked = false;
	} else {
		checkedNoGps2.checked = true;
	}
}


//script for checking inputs modal3

var checkedKaskoInput3 = document.getElementById('kasko3');
var checkedFullKaskoInput3 = document.getElementById('full-kasko3');
var ckeckedLimitedMileageInput3 = document.getElementById('limited-mileage3');
var checkedUnlimitedMileageInput3 = document.getElementById('unlimited-mileage3');
var checkedOneDriver3 = document.getElementById('one-driver3');
var checkedExtraDriver3 = document.getElementById('extra-driver3');
var checkedNoWifi3 = document.getElementById('no-wifi3');
var checkedWifi3 = document.getElementById('wifi3');
var checkedNoSeat3 = document.getElementById('no-child-seat3');
var checkedSeat3 = document.getElementById('child-seat3');
var checkedNoGps3 = document.getElementById('no-gps3');
var checkedGps3 = document.getElementById('gps3');

function uncheckKasko3() {
	if(checkedFullKaskoInput3.checked) {
		checkedKaskoInput3.checked = false;
	} else {
		checkedKaskoInput3.checked = true;
	}
}
function uncheckMileage3() {
	if(checkedUnlimitedMileageInput3.checked) {
		ckeckedLimitedMileageInput3.checked = false;
	} else {
		ckeckedLimitedMileageInput3.checked = true;
	}
}

function uncheckDriver3() {
	if(checkedExtraDriver3.checked) {
		checkedOneDriver3.checked = false;
	} else {
		checkedOneDriver3.checked = true;
	}
}

function uncheckWifi3() {
	if(checkedWifi3.checked) {
		checkedNoWifi3.checked = false;
	} else {
		checkedNoWifi3.checked = true;
	}
}

function uncheckSeat3() {
	if(checkedSeat3.checked) {
		checkedNoSeat3.checked = false;
	} else {
		checkedNoSeat3.checked = true;
	}
}

function uncheckGps3() {
	if(checkedGps3.checked) {
		checkedNoGps3.checked = false;
	} else {
		checkedNoGps3.checked = true;
	}
}

//script for checking inputs modal4>

var checkedKaskoInput4 = document.getElementById('kasko4');
var checkedFullKaskoInput4 = document.getElementById('full-kasko4');
var ckeckedLimitedMileageInput4 = document.getElementById('limited-mileage4');
var checkedUnlimitedMileageInput4 = document.getElementById('unlimited-mileage4');
var checkedOneDriver4 = document.getElementById('one-driver4');
var checkedExtraDriver4 = document.getElementById('extra-driver4');
var checkedNoWifi4 = document.getElementById('no-wifi4');
var checkedWifi4 = document.getElementById('wifi4');
var checkedNoSeat4 = document.getElementById('no-child-seat4');
var checkedSeat4 = document.getElementById('child-seat4');
var checkedNoGps4 = document.getElementById('no-gps4');
var checkedGps4 = document.getElementById('gps4');


function uncheckKasko4() {
	if(checkedFullKaskoInput4.checked) {
		checkedKaskoInput4.checked = false;
	} else {
		checkedKaskoInput4.checked = true;
	}
}
function uncheckMileage4() {
	if(checkedUnlimitedMileageInput4.checked) {
		ckeckedLimitedMileageInput4.checked = false;
	} else {
		ckeckedLimitedMileageInput4.checked = true;
	}
}

function uncheckDriver4() {
	if(checkedExtraDriver4.checked) {
		checkedOneDriver4.checked = false;
	} else {
		checkedOneDriver4.checked = true;
	}
}

function uncheckWifi4() {
	if(checkedWifi4.checked) {
		checkedNoWifi4.checked = false;
	} else {
		checkedNoWifi4.checked = true;
	}
}

function uncheckSeat4() {
	if(checkedSeat4.checked) {
		checkedNoSeat4.checked = false;
	} else {
		checkedNoSeat4.checked = true;
	}
}

function uncheckGps4() {
	if(checkedGps4.checked) {
		checkedNoGps4.checked = false;
	} else {
		checkedNoGps4.checked = true;
	}
}

//script for checking inputs modal5>

var checkedKaskoInput5 = document.getElementById('kasko5');
var checkedFullKaskoInput5 = document.getElementById('full-kasko5');
var ckeckedLimitedMileageInput5 = document.getElementById('limited-mileage5');
var checkedUnlimitedMileageInput5 = document.getElementById('unlimited-mileage5');
var checkedOneDriver5 = document.getElementById('one-driver5');
var checkedExtraDriver5 = document.getElementById('extra-driver5');
var checkedNoWifi5 = document.getElementById('no-wifi5');
var checkedWifi5 = document.getElementById('wifi5');
var checkedNoSeat5 = document.getElementById('no-child-seat5');
var checkedSeat5 = document.getElementById('child-seat5');
var checkedNoGps5 = document.getElementById('no-gps5');
var checkedGps5 = document.getElementById('gps5');

function uncheckKasko5() {
	if(checkedFullKaskoInput5.checked) {
		checkedKaskoInput5.checked = false;
	} else {
		checkedKaskoInput5.checked = true;
	}
}
function uncheckMileage5() {
	if(checkedUnlimitedMileageInput5.checked) {
		ckeckedLimitedMileageInput5.checked = false;
	} else {
		ckeckedLimitedMileageInput5.checked = true;
	}
}

function uncheckDriver5() {
	if(checkedExtraDriver5.checked) {
		checkedOneDriver5.checked = false;
	} else {
		checkedOneDriver5.checked = true;
	}
}

function uncheckWifi5() {
	if(checkedWifi5.checked) {
		checkedNoWifi5.checked = false;
	} else {
		checkedNoWifi5.checked = true;
	}
}

function uncheckSeat5() {
	if(checkedSeat5.checked) {
		checkedNoSeat5.checked = false;
	} else {
		checkedNoSeat5.checked = true;
	}
}

function uncheckGps5() {
	if(checkedGps5.checked) {
		checkedNoGps5.checked = false;
	} else {
		checkedNoGps5.checked = true;
	}
}

//script for checking inputs modal6>

var checkedKaskoInput6 = document.getElementById('kasko6');
var checkedFullKaskoInput6 = document.getElementById('full-kasko6');
var ckeckedLimitedMileageInput6 = document.getElementById('limited-mileage6');
var checkedUnlimitedMileageInput6 = document.getElementById('unlimited-mileage6');
var checkedOneDriver6 = document.getElementById('one-driver6');
var checkedExtraDriver6 = document.getElementById('extra-driver6');
var checkedNoWifi6 = document.getElementById('no-wifi6');
var checkedWifi6 = document.getElementById('wifi6');
var checkedNoSeat6 = document.getElementById('no-child-seat6');
var checkedSeat6 = document.getElementById('child-seat6');
var checkedNoGps6 = document.getElementById('no-gps6');
var checkedGps6 = document.getElementById('gps6');


function uncheckKasko6() {
	if(checkedFullKaskoInput6.checked) {
		checkedKaskoInput6.checked = false;
	} else {
		checkedKaskoInput6.checked = true;
	}
}
function uncheckMileage6() {
	if(checkedUnlimitedMileageInput6.checked) {
		ckeckedLimitedMileageInput6.checked = false;
	} else {
		ckeckedLimitedMileageInput6.checked = true;
	}
}

function uncheckDriver6() {
	if(checkedExtraDriver6.checked) {
		checkedOneDriver6.checked = false;
	} else {
		checkedOneDriver6.checked = true;
	}
}

function uncheckWifi6() {
	if(checkedWifi6.checked) {
		checkedNoWifi6.checked = false;
	} else {
		checkedNoWifi6.checked = true;
	}
}

function uncheckSeat6() {
	if(checkedSeat6.checked) {
		checkedNoSeat6.checked = false;
	} else {
		checkedNoSeat6.checked = true;
	}
}

function uncheckGps6() {
	if(checkedGps6.checked) {
		checkedNoGps6.checked = false;
	} else {
		checkedNoGps6.checked = true;
	}
}


//<!--script for madal	-->

var modal = document.getElementById('my-modal');
var modal2 = document.getElementById('my-modal2');
var modal3 = document.getElementById('my-modal3');
var modal4 = document.getElementById('my-modal4');
var modal5 = document.getElementById('my-modal5');
var modal6 = document.getElementById('my-modal6');
var btn = document.getElementById('continue-ordering');
var btn2 = document.getElementById('continue-ordering2');
var btn3 = document.getElementById('continue-ordering3');
var btn4 = document.getElementById('continue-ordering4');
var btn5 = document.getElementById('continue-ordering5');
var btn6 = document.getElementById('continue-ordering6');
var span = document.getElementsByClassName('close')[0];
var span2 = document.getElementsByClassName('close2')[0];
var span3 = document.getElementsByClassName('close3')[0];
var span4 = document.getElementsByClassName('close4')[0];
var span5 = document.getElementsByClassName('close5')[0];
var span6 = document.getElementsByClassName('close6')[0];

btn.onclick = function() {
	modal.style.display = "block";
}
btn2.onclick = function() {
	modal2.style.display = "block";
}
btn3.onclick = function() {
	modal3.style.display = "block";
}
btn4.onclick = function() {
	modal4.style.display = "block";
}
btn5.onclick = function() {
	modal5.style.display = "block";
}
btn6.onclick = function() {
	modal6.style.display = "block";
}

span.onclick = function() {
	modal.style.display = "none";
}
span2.onclick = function() {
	modal2.style.display = "none";
}
span3.onclick = function() {
	modal3.style.display = "none";
}
span4.onclick = function() {
	modal4.style.display = "none";
}
span5.onclick = function() {
	modal5.style.display = "none";
}
span6.onclick = function() {
	modal6.style.display = "none";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
		}
	}
window.onclick = function(event) {
	if (event.target == modal2) {
		modal2.style.display = "none";
		}
	}
window.onclick = function(event) {
	if (event.target == modal3) {
		modal3.style.display = "none";
		}
	}
window.onclick = function(event) {
	if (event.target == modal4) {
		modal4.style.display = "none";
		}
	}
window.onclick = function(event) {
	if (event.target == modal5) {
		modal5.style.display = "none";
		}
	}
window.onclick = function(event) {
	if (event.target == modal6) {
		modal6.style.display = "none";
		}
	}

//script for form in modal

var modal0 = document.getElementById("form-in-modal2");
var btn0 = document.getElementById("open-form2");
var span0 = document.getElementsByClassName("close-modal")[0];

btn0.onclick = function() {
	modal0.style.display = "block";
	}

span0.onclick = function() {
	modal0.style.display = "none";
	}

window.onclick = function(event) {
	if (event.target == modal0) {
	modal0.style.display = "none";
	}
}
