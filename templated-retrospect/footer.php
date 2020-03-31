	<!-- Footer -->
	<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
					<?php
  wp_nav_menu(array(
  'theme-location' => 'footer-menu',
  'menu_class' => 'my-footer-menu')
);?>
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->

			<!-- [if lte IE 8]><script src="<?php echo get_template_directory_uri();?>/assets/js/ie/respond.min.js"></script><![endif] -->

<?php wp_footer(); ?>
	</body>
</html>