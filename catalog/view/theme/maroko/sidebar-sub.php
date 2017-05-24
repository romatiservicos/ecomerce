<?php
/**
 * The sub sidebar on the right side
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Road_Themes
 * @since Road Themes 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-sub' ) ) : ?>
<div id="secondary" class="col-xs-12 col-md-3 sidebar-sub">
	<?php dynamic_sidebar( 'sidebar-sub' ); ?>
</div>
<?php endif; ?>