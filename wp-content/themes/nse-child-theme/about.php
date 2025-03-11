<?php
/*Template Name: about*/
get_header(); ?>

<div id="main-content" class="main-content">
<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 has-background-image" style="background-image: url(/wp-content/uploads/2017/03/NSE_AboutUs.jpg);padding-top: 80px;padding-bottom: 145px;"></div>
</div><!-- #main-content -->
<div class="about-bg">
<div class="row">
		<div class="col-md-3 col-sm-4">
		</div>
		<div class="col-md-9 col-sm-8">
		<div class="about-lead-content">
	<?php the_field('text-4'); ?>
		</div>
	</div>
</div>
</div>


<div class="more-space-2">


<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="about-photo">
			<div class="about-img">
			<img src="<?php the_field('pic-1'); ?>" />
		</div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="about-content">
	<?php the_field('bio-1'); ?>
		</div>
	</div>
</div>

<div class="space-below-50px"></div>

<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="about-photo">
			<div class="about-img">
			<img src="<?php the_field('pic-3'); ?>" />
		</div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="about-content">
	<?php the_field('bio-3'); ?>
		</div>
	</div>
	</div>

	<div class="space-below-50px"></div>

	<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="about-photo">
			<div class="about-img">
			<img src="<?php the_field('pic-2'); ?>" />
		</div>
		</div>
	</div>

	<div class="col-md-9 col-sm-8">
		<div class="about-content">
	<?php the_field('bio-2'); ?>
		</div>
	</div>	
</div>


<div class="space-below-50px"></div>

<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="about-photo">
			<div class="about-img">
			<img src="<?php the_field('pic-5'); ?>" />
		</div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="about-content">
	<?php the_field('bio-5'); ?>
		</div>
	</div>
	</div>

	<div class="space-below-50px"></div>

	<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="about-photo">
			<div class="about-img">
			<img src="<?php the_field('pic-6'); ?>" />
		</div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="about-content">
	<?php the_field('bio-6'); ?>
		</div>
	</div>
	</div>

	<div class="space-below-50px"></div>

	<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="about-photo">
			<div class="about-img">
			<img src="<?php the_field('pic-7'); ?>" />
		</div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8">
		<div class="about-content">
	<?php the_field('bio-7'); ?>
		</div>
	</div>
	</div>

	<div class="space-below-50px"></div>


</div>
<?php
get_footer();


