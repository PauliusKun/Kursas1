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

//<!--script for checking inputs modal1-->

			var checkedKaskoInput = document.getElementById('kasko');
			var ckeckedLimitedMileageInput = document.getElementById('limited-mileage');
			var checkedFullKaskoInput = document.getElementById('full-kasko');
			var checkedUnlimitedMileageInput = document.getElementById('unlimited-mileage');

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

//script for checking inputs modal2

			var checkedKaskoInput2 = document.getElementById('kasko2');
			var ckeckedLimitedMileageInput2 = document.getElementById('limited-mileage2');
			var checkedFullKaskoInput2 = document.getElementById('full-kasko2');
			var checkedUnlimitedMileageInput2 = document.getElementById('unlimited-mileage2');

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

//script for checking inputs modal3

			var checkedKaskoInput3 = document.getElementById('kasko3');
			var ckeckedLimitedMileageInput3 = document.getElementById('limited-mileage3');
			var checkedFullKaskoInput3 = document.getElementById('full-kasko3');
			var checkedUnlimitedMileageInput3 = document.getElementById('unlimited-mileage3');

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

//script for checking inputs modal4>

			var checkedKaskoInput4 = document.getElementById('kasko4');
			var ckeckedLimitedMileageInput4 = document.getElementById('limited-mileage4');
			var checkedFullKaskoInput4 = document.getElementById('full-kasko4');
			var checkedUnlimitedMileageInput4 = document.getElementById('unlimited-mileage4');

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

//script for checking inputs modal5>

			var checkedKaskoInput5 = document.getElementById('kasko5');
			var ckeckedLimitedMileageInput5 = document.getElementById('limited-mileage5');
			var checkedFullKaskoInput5 = document.getElementById('full-kasko5');
			var checkedUnlimitedMileageInput5 = document.getElementById('unlimited-mileage5');

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

//script for checking inputs modal6>

			var checkedKaskoInput6 = document.getElementById('kasko6');
			var ckeckedLimitedMileageInput6 = document.getElementById('limited-mileage6');
			var checkedFullKaskoInput6 = document.getElementById('full-kasko6');
			var checkedUnlimitedMileageInput6 = document.getElementById('unlimited-mileage6');

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

//<!--script for calculate price-->

//			function sumValues() {
				var totalPrice;
				var dayPrice = Number(document.getElementsByClassName('day-price').value);
				var priceForExtra = Number(document.getElementsByClassName('price-for-extra').value);

				var totalPrice = dayPrice + priceForExtra;
				document.getElementsByClassName('total-price').innerHTML = totalPrice;
//			}

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
