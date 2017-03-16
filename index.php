<?php get_header();  ?>

<div class="container">



	<!--posts loop-->
<div class="posts_container">
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			?>

			<div class="post">
			<h3><?php the_title();?></h3>
			<p><?php the_content();?></p>
			</div>
			<?php
		} // end while
	} // end if
	?>

</div>

	<!--posts loop-->

	<!--posts loop-->

</div>
<?php get_footer();  ?>