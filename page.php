
<?php



 get_header();  ?>
 
 




<div class="container">




	<div id='left-menu-wrap'>
		<?php wp_nav_menu(array('theme_location' => 'left' ));?>
	</div>


	<div id='content'>
	<?php 

		

	
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
			<div class='text'>
			<h2><?php the_title();?></h2>
			<?php the_content();?>
			</div>
			<?php
		} // end while
	} // end if
	?>
	</div>


</div>
<?php get_footer();  ?>

