<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */

global $road_opt, $road_postthumb;

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
		$road_postthumb = 'category-thumb'; //750x510px
		break;
	case 'fullwidth':
		$blogclass = 'blog-fullwidth';
		$blogcolclass = 12;
		$blogsidebar = 'none';
		$road_postthumb = 'category-full'; //1144x510px
		break;
	default:
		$blogclass = 'blog-nosidebar';
		$blogcolclass = 12;
		$blogsidebar = 'none';
		$road_postthumb = 'post-thumb'; //500x500px
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
			
				<div class="page-content blog-page <?php echo esc_attr($blogclass); if($blogsidebar=='left') {echo ' left-sidebar'; } if($blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'roadthemes' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>

						<?php if ( tag_description() ) : // Show an optional tag description ?>
							<div class="archive-meta"><?php echo tag_description(); ?></div>
						<?php endif; ?>
						</header><!-- .archive-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * this in a child theme then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;
						?>
						
						<div class="pagination">
							<?php road_pagination(); ?>
						</div>
						
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php if( $blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>