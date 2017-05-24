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
				<?php if(isset($road_opt)) { ?>
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
								<?php if(isset($road_opt['product_shortcode1'])){ ?>
									<div class="product-shortcode">
										<?php if(isset($road_opt['product_shortcode1_title'])){ ?>
											<h3 class="widget-title"><?php echo esc_html($road_opt['product_shortcode1_title']);?></h3>
										<?php } ?>
										<?php echo do_shortcode($road_opt['product_shortcode1']);?>
									</div>
								<?php } ?>
							</div>
							<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
								<?php if(isset($road_opt['product_shortcode2'])){ ?>
									<div class="product-shortcode">
										<?php if(isset($road_opt['product_shortcode2_title'])){ ?>
											<h3 class="widget-title"><?php echo esc_html($road_opt['product_shortcode2_title']);?></h3>
										<?php } ?>
										<?php echo do_shortcode($road_opt['product_shortcode2']);?>
									</div>
								<?php } ?>
							</div>
							<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
								<div class="widget-product-tags">
									<?php if(isset($road_opt['product_tag_title'])){ ?>
										<h3 class="widget-title"><?php echo esc_html($road_opt['product_tag_title']);?></h3>
									<?php } ?>
									<?php 
									if(class_exists('WC_Widget_Product_Tag_Cloud')) {
										the_widget('WC_Widget_Product_Tag_Cloud');
									}
									?>
								</div>
							</div>
							<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
								<div class="widget-latest-tweets">
									<?php if(isset($road_opt['twitter_widget_title'])){ ?>
											<h3 class="widget-title"><?php echo esc_html($road_opt['twitter_widget_title']);?></h3>
										<?php } ?>
									<?php echo do_shortcode('[rotatingtweets screen_name="'.$road_opt['twitter_username'].'"]');?>
								</div> 
							</div> 
						</div>
					</div>
				</div>
				<?php } ?>
				<?php 
				$showftmiddle = false;
				if( isset($road_opt['footer_menu1']) && $road_opt['footer_menu1']!='' ) {
					$showftmiddle = true;
				}
				if( isset($road_opt['footer_menu2']) && $road_opt['footer_menu2']!='' ) {
					$showftmiddle = true;
				}
				if( isset($road_opt['footer_menu3']) && $road_opt['footer_menu3']!='' ) {
					$showftmiddle = true;
				}
				if(isset($road_opt['contact_us']) && $road_opt['contact_us']!=''){
					$showftmiddle = true;
				}
				if($showftmiddle) { ?>
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							<?php
							if( isset($road_opt['footer_menu1']) && $road_opt['footer_menu1']!='' ) {
								$menu1_object = wp_get_nav_menu_object( $road_opt['footer_menu1'] );
								$menu1_args = array(
									'menu_class'      => 'nav_menu',
									'menu'         => $road_opt['footer_menu1'],
								); ?>
								<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
									<div class="widget widget_menu">
										<h3 class="widget-title"><?php echo esc_html($menu1_object->name); ?></h3>
										<?php wp_nav_menu( $menu1_args ); ?>
									</div>
								</div>
							<?php }
							if( isset($road_opt['footer_menu2']) && $road_opt['footer_menu2']!='' ) {
								$menu2_object = wp_get_nav_menu_object( $road_opt['footer_menu2'] );
								$menu2_args = array(
									'menu_class'      => 'nav_menu',
									'menu'         => $road_opt['footer_menu2'],
								); ?>
								<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
									<div class="widget widget_menu">
										<h3 class="widget-title"><?php echo esc_html($menu2_object->name); ?></h3>
										<?php wp_nav_menu( $menu2_args ); ?>
									</div>
								</div>
							<?php }
							if( isset($road_opt['footer_menu3']) && $road_opt['footer_menu3']!='' ) {
								$menu3_object = wp_get_nav_menu_object( $road_opt['footer_menu3'] );
								$menu3_args = array(
									'menu_class'      => 'nav_menu',
									'menu'         => $road_opt['footer_menu3'],
								); ?>
								<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
									<div class="widget widget_menu">
										<h3 class="widget-title"><?php echo esc_html($menu3_object->name); ?></h3>
										<?php wp_nav_menu( $menu3_args ); ?>
									</div>
								</div>
							<?php }
							if( isset($road_opt['footer_menu4']) && $road_opt['footer_menu4']!='' ) {
								$menu4_object = wp_get_nav_menu_object( $road_opt['footer_menu4'] );
								$menu4_args = array(
									'menu_class'      => 'nav_menu',
									'menu'         => $road_opt['footer_menu4'],
								); ?>
							<div class="col-xs-12 col-md-3 col-sm-6 col-sms-6">
								<div class="widget widget_menu">
										<h3 class="widget-title"><?php echo esc_html($menu4_object->name); ?></h3>
										<?php wp_nav_menu( $menu4_args ); ?>
									</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php } ?>
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
										echo 'Copyright <a href="http://www.themes24x7.com/">Themes24x7</a> 2014. All Rights Reserved';
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
	<?php 
	if($road_opt['page_layout']!='box') {
		get_sidebar('sub');
	}
	?>
	<?php wp_footer(); ?>
</body>
</html>