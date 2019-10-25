<footer>
	<div id="footer" class="footer">
		<a id="open-form2" class="open-form">Užklausa</a>
		<div id="form-in-modal2" class="modal-form">
			<div class="modal-form-content">
				<span class="close-modal">&times;</span>
				<form id="contact-form" action="index.php" method="post">
					<h3>Užklausos forma</h3>
					<div class="form-row">
						<div>
							<label for="first-name0">Vardas: <span>*</span></label><br>
							<input id="first-name0" type="text" name="name" placeholder="Jūsų vardas" required autofocus>
						</div>
						<div>
							<label for="second-name0">Pavardė: <span>*</span></label><br>
							<input id="second-name0" type="text" name="surname" placeholder="Jūsų pavardė" required>
						</div>
					</div>
					<div class="form-row">
						<div>
							<label for="telephone0">Telefonas: <span>*</span></label><br>
							<input id="telephone0" type="tel" name="phone" placeholder="Jūsų telefono numeris" required>
						</div>
						<div>
							<label for="e-mail0">El.paštas: <span>*</span></label><br>
							<input id="e-mail0" type="email" name="email" placeholder="Jūsų elektroninis paštas" required>
						</div>
					</div>
					<div class="form-row">
						<div>
							<label for="car0">Automobilis:</label><br>
							<input id="car0" type="text" name="interest_car" placeholder="Dominantis automobilis">
						</div>
						<div>
							<label for="period0">Nuomos trukmė:</label><br>
							<input id="period0" type="number" name="interest_period" placeholder="Dominanti nuomos trukmė">
						</div>
					</div>
					<div class="form-row">
						<div>
							<label for="message0">Žinutė: <span>*</span></label><br>
							<textarea id="message0" name="message" placeholder="Jūsų žinutė..." required></textarea>
						</div>
						<div>
							<button id="contact-form-submit" class="button" name="submit" type="submit">Siųsti</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<a href="https://www.facebook.com/pauleoo" target="_blank">Facebook</a>
		<a href="https://www.instagram.com/pauliuskundrutas/Instagram" target="_blank">Instagram</a>
		<p class="copyright">
			<?php
				function copyrightYear($year) {
					if ($year >= date('Y')) {
						echo '&copy;' . date('Y') . ' Bluerent';
					} else {
						echo '&copy;'. $year . ' - ' . date('Y') . ' Bluerent';
					}
				}
				copyrightYear(2019);
			?>
		</p>
	</div>
</footer>