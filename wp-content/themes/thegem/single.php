<?php

get_header(); ?>

<div id="main-content" class="main-content">
<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 has-background-image" style="background-image: url(/wp-content/uploads/2017/03/NSE_Publications.jpg);padding-top: 80px;padding-bottom: 145px;"></div>
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
<h1 class="page-title">Abstract</h1>
<?php
	while ( have_posts() ) : the_post();
		if(get_post_type() == 'post' || get_post_type() == 'thegem_pf_item' || get_post_type() == 'thegem_news') {
			get_template_part( 'content', 'page' );
		} else {
			get_template_part( 'content', get_post_format() );
		}
	endwhile;
?>

</div>

	</div>


			</div>

				
			</div>


		

<?php
get_footer();
