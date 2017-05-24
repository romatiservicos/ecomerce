<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
?>
<?php global $road_opt; ?>
			<div class="footer">
				
				<div class="footer-link">
					<div class="container">
						<?php if( isset($road_opt['logo_footer']['url']) ){ ?>
							<div class="logo-footer"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($road_opt['logo_footer']['url']); ?>" alt="" /></a></div>
						<?php
						} else { ?>
							<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						} ?>
						
						<?php if( isset($road_opt['footer_menu_bottom']) && $road_opt['footer_menu_bottom']!='' ) {
							$menubt_object = wp_get_nav_menu_object( $road_opt['footer_menu_bottom'] );
							$menubt_args = array(
								'menu_class'      => 'nav_menu',
								'menu'         => $road_opt['footer_menu_bottom'],
							); ?>
							<div class="widget bottom_menu">
								<?php wp_nav_menu( $menubt_args ); ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-md-6">
								
								<div class="copyright-info">
									<?php 
									if( isset($road_opt['copyright']) && $road_opt['copyright']!='' ) {
										echo wp_kses($road_opt['copyright'], array(
											'a' => array(
												'href' => array(),
												'title' => array()
											),
											'br' => array(),
											'em' => array(),
											'strong' => array(),
										));
									} else {
										echo 'Copyright <a href="http://www.roadthemes.com/">Roadthemes</a> 2014. All Rights Reserved';
									}
									?>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="bottom-right">
									<?php if(isset($road_opt['payment_icons'])) {
										echo wp_kses($road_opt['payment_icons'], array(
											'a' => array(
												'href' => array(),
												'title' => array()
											),
											'img' => array(
												'src' => array(),
												'alt' => array()
											),
										)); 
									} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie8.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>