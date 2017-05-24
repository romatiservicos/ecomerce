<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */

global $road_opt;

if(is_ssl()){
	$road_opt['image_error']['url'] = str_replace('http:', 'https:', $road_opt['image_error']['url']);
}
get_header('error');
?>
	<div class="main-container error404">
		<?php if( isset($road_opt['image_error']['url']) ){ ?>
			<div class="image-404"><img src="<?php echo esc_url($road_opt['image_error']['url']); ?>" alt="" /></div>
		<?php } ?> 
		<div class="content">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-home"><?php _e( "back to homepage", "roadthemes" ); ?></a> 
		</div>
		<div class="inner-brands">
			<div class="container">
			<?php echo do_shortcode('[ourbrands]'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer('error'); ?>