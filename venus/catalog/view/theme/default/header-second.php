<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
?>
<?php global $road_opt; 
if(is_ssl()){
	$road_opt['logo_main']['url'] = str_replace('http:', 'https:', $road_opt['logo_main']['url']);
}
?>
		<div class="header-container layout2">
			
			<div class="header">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="global-table">
								<div class="global-row">
									<div class="global-cell">
										<?php if( isset($road_opt['logo_main']['url']) ){ ?>
											<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($road_opt['logo_main']['url']); ?>" alt="" /></a></div>
										<?php
										} else { ?>
											<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php
										} ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-7">
							<div class="horizontal-menu">
								<div class="global-table">
									<div class="global-row">
										<div class="global-cell">
											<div class="visible-large">
												<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'primary-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
											</div>
											<div class="visible-small mobile-menu">
												<div class="nav-container">
													<div class="mbmenu-toggler"><?php echo esc_html($road_opt['mobile_menu_label']);?><span class="mbmenu-icon"></span></div>
													<?php wp_nav_menu( array( 'theme_location' => 'mobilemenu', 'container_class' => 'mobile-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-2">
							<div class="global-table">
								<div class="global-row">
									<div class="global-cell">
										<div class="top-link">
											<?php if ( class_exists( 'WC_Widget_Cart' ) ) {
													the_widget('Custom_WC_Widget_Cart'); 
											} ?>
											<?php if ( is_active_sidebar( 'sidebar-sub' ) ) : ?>
												<div class="sidebar-toggler">
													<i class="fa fa-bars"></i>
												</div>
											<?php endif; ?>
											<?php if( class_exists('WC_Widget_Product_Search') ) { ?>
											<div class="header-search">
												<?php the_widget('WC_Widget_Product_Search', array('title' => 'Search')); ?>
											</div>
											<?php } ?> 
										</div> 
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div><!-- .header -->
			<div class="clearfix"></div>
		</div>