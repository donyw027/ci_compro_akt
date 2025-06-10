<!-- Footer Area -->
<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer">
								<img src="<?= base_url('assets/img/AKT.png') ?>" alt="" width="60%"><br><br>
								<img src="<?= base_url('assets/img/apkb.png') ?>" alt="" width="60%"><br><br>
								<img src="<?= base_url('assets/img/SVLK Logo.png') ?>" alt="" width="60%">
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>AKT Indonesia is a musical instrument manufacturer producing guitars, ukuleles, castanets, and cajon with a blend of craftsmanship and quality.</p>
								<!-- Social -->
								<ul class="social">
									<!-- <li><a href=""><i class="icofont-facebook"></i></a></li>
									<li><a href=""><i class="icofont-google-plus"></i></a></li>
									<li><a href=""><i class="icofont-twitter"></i></a></li> -->
									<li><a href="mailto:info@akt-id.com"><i class="icofont-email"></i></a></li>
									<li><a target="_blank" href="https://id.pinterest.com/pt_akt_indonesia/"><i class="icofont-pinterest"></i></a></li> 
								</ul>
								<!-- End Social -->
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>We're here to assist you during our regular business hours. Please feel free to reach out </p>
								<ul class="time-sidual">
									<li class="day">Monday - Friday <span>07.00-16.00</span></li>
									<li class="day">Saturday & Sunday <span>Closed</span></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2025  | AKT Indonesia </p>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
		<!-- jquery Migrate JS -->
		<script src="<?= base_url('assets/js/jquery-migrate-3.0.0.js') ?>"></script>
		<!-- jquery Ui JS -->
		<script src="<?= base_url('assets/js/jquery-ui.min.js') ?>"></script>
		<!-- Easing JS -->
        <script src="<?= base_url('assets/js/easing.js') ?>"></script>
		<!-- Color JS -->
		<script src="<?= base_url('assets/js/colors.js') ?>"></script>
		<!-- Popper JS -->
		<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
		<!-- Jquery Nav JS -->
        <script src="<?= base_url('assets/js/jquery.nav.js') ?>"></script>
		<!-- Slicknav JS -->
		<script src="<?= base_url('assets/js/slicknav.min.js') ?>"></script>
		<!-- ScrollUp JS -->
        <script src="<?= base_url('assets/js/jquery.scrollUp.min.js') ?>"></script>
		<!-- Niceselect JS -->
		<script src="<?= base_url('assets/js/niceselect.js') ?>"></script>
		<!-- Tilt Jquery JS -->
		<script src="<?= base_url('assets/js/tilt.jquery.min.js') ?>"></script>
		<!-- Owl Carousel JS -->
        <script src="<?= base_url('assets/js/owl-carousel.js') ?>"></script>
		<!-- counterup JS -->
		<script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
		<!-- Steller JS -->
		<script src="<?= base_url('assets/js/steller.js') ?>"></script>
		<!-- Wow JS -->
		<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
		<!-- Magnific Popup JS -->
		<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
		<!-- Main JS -->
		<script src="<?= base_url('assets/js/main.js') ?>"></script>
    </body>
</html>


<script>
  const counters = document.querySelectorAll('.capacity-number');
  counters.forEach(counter => {
    counter.innerText = '0';
    const updateCounter = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText.replace(/,/g, '');
      const increment = target / 100;

      if (count < target) {
        counter.innerText = Math.ceil(count + increment).toLocaleString();
        setTimeout(updateCounter, 10);
      } else {
        counter.innerText = target.toLocaleString();
      }
    };
    updateCounter();
  });
</script>