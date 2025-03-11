<?php
/*Template Name: Optimization*/
get_header(); ?>

<div id="main-content" class="main-content">
<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 has-background-image" style="background-image: url(/wp-content/uploads/2017/03/NSE_Publications.jpg);padding-top: 80px;padding-bottom: 145px;"></div>
</div><!-- #main-content -->


<div class="more-space">
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="page-nav-publications">
	 <?php dynamic_sidebar( 'publications-sidebar' ); ?> 
		</div>
	</div>

	<div class="col-md-9 col-sm-8">
	<?php dynamic_sidebar('optimization-feed'); ?>
	<div style="padding-bottom: 500px"></div>	
	</div>
	
</div>
</div>
<?php
get_footer();


