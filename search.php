<?php get_header();  ?>

<div class="container">

<h2 class="searchResultsTitle" style="display:none;">Wyniki</h2>

	<!--posts loop-->
<div class="content">

	

		
		

		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 

					get_template_part('content', 'search'); 
					
				} // end while
			}else{
				echo "<p>Brak wyników dla wyszukania<p>";
			}
			?>
		
	
	</div>

	

</div>

	<!--posts loop-->

	<!--posts loop-->


<?php get_footer();  ?>


