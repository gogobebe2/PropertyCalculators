<?php

/*

Template Name: Netyield

*/
	get_header();
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				
				<?php get_template_part( 'content', 'page' ); ?>

				<?php

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;
				?>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
		<?php include('html/netyield.html'); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>

