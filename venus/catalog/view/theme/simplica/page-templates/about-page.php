<?php
/**
 * Template Name: About Page
 *
 * Description: About page template
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
global $road_opt;

get_header();
?>
<div class="main-container about-page">

	<div class="about_header">
		<div class="container">
			<?php the_title(); ?>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
	
</div>
<?php get_footer(); ?>