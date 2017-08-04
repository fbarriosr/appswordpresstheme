<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<div class="columns small-3">
					<div class="row">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/umbrella-logo bco.png" style="width:233px ,height: 200px">
					</div>
					<div class="row footerSocial">
						<div class="columns small-4">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/facebook.png" alt="Space" style="width:43px , height: 42px">
						</div>
						<div class="columns small-8" style="padding:0px">
							<p>Siguenos en Facebook</p>
						</div>
					</div>
				</div>

				<div class="columns small-9">
					<div class="row">
						<ul class="menu footermenu">
						  <li><a href="#">Familia Umbrella</a></li>
						  <li><a href="#">Evidencia Cientifica</a></li>
						  <li><a href="#">Blog</a></li>
						  <li><a href="#">Contacto</a></li>
						</ul>
						<hr size="8px" color="#3A7FDC" />
					</div>	
					<div class="row">
						<div class="columns small-9 footermenu">
								<p>Derechos reservados Pharma Investi Chile S.A. <br>
					Pharma Investi de Chile S.A. / Avenida Andres Bello 1495, Providencia, Santiago. <br>
					Teléfono:(2) 2340 5800</p>
						</div>
						<div class="columns small-3">
								<img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/assets/images/logoPharma.png" alt="Space" style="width:172px , height: 47px">
						</div>
					</div>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
