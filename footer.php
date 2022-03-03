<?php
$footer = get_term_by('name', 'footer', 'nav_menu');
$footer_id = $footer->term_id;
$footer_menu = wp_get_nav_menu_object( $footer_id );
?>
<footer data-scroll id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-4">
					<h5>Folge uns:</h5>
					<?php wp_nav_menu(array( 'theme_location' => 'extra' )); ?>
				</div>
				<div class="col-4">
					<div class="sitemap">
						<h5>Besuche uns</h5>
						<?php if ( have_rows( 'company_info', $footer_menu ) ):
							while ( have_rows('company_info', $footer_menu ) ) : the_row(); ?>

							<div class="information">
								<?php $adress = get_sub_field('adress');
								if ( !empty ( $adress ) ) {
									echo $adress;
								}; ?>
							</div>

							<?php endwhile;
						endif; ?>
					</div>
				</div>
				<div class="col-4">
					<div class="booking__container">
						<?php if ( have_rows( 'company_info', $footer_menu ) ):
							while ( have_rows('company_info', $footer_menu ) ) : the_row(); ?>

							<h5>Reservieren oder Vorbestellen</h5>
							<div class="links">
								<?php if ( have_rows( 'additional_links' ) ):
									while ( have_rows('additional_links' ) ) : the_row();
									$footer_link = get_sub_field('link');
									$footer_link_target = $link['target'] ? $link['target'] : '_self';?>

									<a href="<?php echo esc_url($footer_link['url']); ?>" target="<?php echo esc_attr( $footer_link_target ); ?>"><?php echo esc_html( $footer_link['title'] ); ?></a>

									<?php endwhile;
								endif; ?>
							</div>
						<?php endwhile;
					endif; ?>
					</div>
				</div>
			</div>
		</div>

	<div class="copy">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'Spectreblank'); ?> <a href="https://5pectre.com" title="Spectre Blank">5pectre</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script>
	const scroll = new LocomotiveScroll({
	    el: document.querySelector('[data-scroll-container]'),
	    smooth: true
	});
</script>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>

</body>
</html>
