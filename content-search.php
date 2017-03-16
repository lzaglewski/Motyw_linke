<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
	
	
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink();?>">Czytaj dalej...</a>
	

	<hr>

</article>