<?php
/*Template Name: 20years*/
get_header(); ?>

<div id="main-content" class="main-content">
<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'page' );
	endwhile;
?>
</div><!-- #main-content -->

	<div class="more-space-2">

		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="postcard">
					<img src="/wp-content/uploads/2022/03/NSE20_N.png" />
				</div>
			</div>
		

		
			<div class="col-xs-12 col-sm-12">
				<div class="postcard">
					<img src="/wp-content/uploads/2022/02/NSE20_S.png" />
				</div>
			</div>
		


		
			<div class="col-xs-12 col-sm-12">
				<div class="postcard">
					<img src="/wp-content/uploads/2022/02/NSE20_E.png" />
				</div>
			</div>
		</div>
	</div>
	


	

<?php
get_footer();


