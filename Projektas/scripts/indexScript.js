//<!--script for banner's slide-->

			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}
				slides[slideIndex-1].style.display = "block";
				setTimeout(showSlides, 4000);
			}

//<!--script for set cookies-->

			var pickupPlace = document.getElementById('select-pickup-place').value;
			var pickupDate = document.getElementById('pickup-date-input').value;
			var pickupTime = document.getElementById('pickup-time-input').value;
			var returnPlace = document.getElementById('select-return-place').value;
			var returnDate = document.getElementById('return-date-input').value;
			var returnTime = document.getElementById('return-time-input').value;

			function setCookie(cname,cvalue,exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires=" + d.toGMTString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}
			function saveValuesToCookies() {
				setCookie('city', pickupPlace, 31);
				setCookie('date', pickupDate, 31);
				setCookie('time', pickupTime, 31);
				setCookie('backCity', returnPlace, 31);
				setCookie('backDate', returnDate, 31);
				setCookie('backTime', returnTime, 31);
			}

//<!--script for accordion-->

			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.maxHeight) {
						panel.style.maxHeight = null;
					} else {
						panel.style.maxHeight = panel.scrollHeight + "px";
					}
				});
			}
