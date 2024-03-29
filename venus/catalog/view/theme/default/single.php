<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */

global $road_opt;

get_header();
?>
<?php 
$bloglayout = 'nosidebar';
if(isset($road_opt['blog_layout']) && $road_opt['blog_layout']!=''){
	$bloglayout = $road_opt['blog_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$bloglayout = $_GET['layout'];
}
$blogsidebar = 'right';
if(isset($road_opt['sidebarblog_pos']) && $road_opt['sidebarblog_pos']!=''){
	$blogsidebar = $road_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$blogsidebar = $_GET['sidebar'];
}
switch($bloglayout) {
	case 'sidebar':
		$blogclass = 'blog-sidebar';
		$blogcolclass = 9;
		break;
	case 'fullwidth':
		$blogclass = 'blog-nosidebar'; //for both fullwidth and no sidebar
		$blogcolclass = 12;
		$blogsidebar = 'none';
		break;
	default:
		$blogclass = 'blog-nosidebar'; //for both fullwidth and no sidebar
		$blogcolclass = 12;
		$blogsidebar = 'none';
}
?>
<div class="main-container page-wrapper">
	<div class="blog_header">
		<div class="container">
			<?php _e('Blog', 'roadthemes'); ?>
		</div>
	</div>
	<div class="container">
		<?php road_breadcrumb(); ?>
		<div class="row">

			<?php if($blogsidebar=='left') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			
			<div class="col-xs-12 <?php echo 'col-md-'.$blogcolclass; ?>">
				<div class="page-content blog-page single <?php echo esc_attr($blogclass); if($blogsidebar=='left') {echo ' left-sidebar'; } if($blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

						<?php comments_template( '', true ); ?>
						
						<!--<nav class="nav-single">
							<h3 class="assistive-text"><?php _e( 'Post navigation', 'roadthemes' ); ?></h3>
							<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'roadthemes' ) . '</span> %title' ); ?></span>
							<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'roadthemes' ) . '</span>' ); ?></span>
						</nav><!-- .nav-single -->
						
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php if( $blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>