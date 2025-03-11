<?php
/**
 * The Content Sidebar
 */

if ( ! is_active_sidebar( 'publications-sidebar' ) ) {
	return;
}
?>
<div class="page-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar('publications-sidebar'); ?>
</div>
