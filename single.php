
<?php



 get_header();  ?>
<div class="container">
<h1>This is index page</h1>

<div class="container">
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
			<div>
			<!-- <h2><?php the_title();?></h2> -->
			<!-- <?php the_content();?> -->
			</div>
			<?php
		} // end while
	} // end if
	?>

</div>

</div>
<?php get_footer();  ?>

