<?php
/**
 * The Content Sidebar
 */

if ( ! is_active_sidebar( 'projects-sidebar' ) ) {
	return;
}
?>
<div class="page-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar('projects-sidebar'); ?>
</div>
