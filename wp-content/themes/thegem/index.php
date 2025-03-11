<?php

$thegem_panel_classes = array('panel', 'row');

if(is_active_sidebar('page-sidebar')) {
	$thegem_panel_classes[] = 'panel-sidebar-position-right';
	$thegem_panel_classes[] = 'with-sidebar';
	$thegem_center_classes = 'col-lg-9 col-md-9 col-sm-12';
} else {
	$thegem_center_classes = 'col-xs-12';
}

get_header(); ?>

<div id="main-content" class="main-content">

<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 has-background-image" style="background-image: url(http://design.jillhannay.com/wp-content/uploads/2017/03/NSE_Publications.jpg);padding-top: 80px;padding-bottom: 145px;"></div>
</div><!--maincontent-->

<div class="more-space">
			<div class="row">
				<div class="col-md-3 col-sm-4">
		<div class="page-nav-cat">
	<?php dynamic_sidebar('publications-sidebar'); ?>
		</div>
	</div>

	<div class="col-md-9 col-sm-8">
<div class="content">
	<div class="category-title">
	<h2><?php
foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
} 
?></h2>
</div>
			<div class="<?php echo esc_attr(implode(' ', $thegem_panel_classes)); ?>">
				<div class="<?php echo esc_attr($thegem_center_classes); ?>">
				<?php
					if ( have_posts() ) {

						if(!is_singular()) { 
							wp_enqueue_style('thegem-blog');
							wp_enqueue_style('thegem-additional-blog');
							wp_enqueue_style('thegem-blog-timeline-new');
							wp_enqueue_script('thegem-scroll-monitor');
							wp_enqueue_script('thegem-items-animations');
							wp_enqueue_script('thegem-blog');
							wp_enqueue_script('thegem-gallery');
							echo '<div class="blog blog-style-default">';
						}

						while ( have_posts() ) : the_post();

							get_template_part( 'content', 'blog-item' );

						endwhile;

						if(!is_singular()) { thegem_pagination(); echo '</div>'; }

					} else {
						get_template_part( 'content', 'none' );
					}
				?>
				</div>
			</div>
			<div style="padding-bottom:500px"></div>
		</div><!-- .content -->
	</div><!-- .col -->

</div><!--row-->
</div><!-- morespace -->


<?php
get_footer();
