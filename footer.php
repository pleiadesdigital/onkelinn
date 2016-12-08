		</div><!-- id="content" class="site-content" (from HEADER) -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div class="footer-container">

				<!-- SITE INFO -->
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pleiades17' ) ); ?>"><?php printf( esc_html__('Proudly powered by %s', 'pleiades17' ), 'WordPress'); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__('Theme: %1$s by %2$s.', 'pleiades17' ), 'pleiades17', '<a href="http://www.pleiadesdigital.com" rel="designer">Ronaldo Ortiz</a>'); ?>
				</div><!-- .site-info -->

				
				<!-- SOCIAL NAV -->
				<nav class="menu-social">
					<ul class="menu-social-items">
						<li>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"accesskey=""></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
						</li>
					</ul>
				</nav>
					
			</div><!-- class="footer-container" -->

		</footer><!-- class="site-footer" -->

	</div><!-- class="main-container" -->
</div><!-- id="page" class="site" -->

<?php wp_footer(); ?>

</body>
</html>
