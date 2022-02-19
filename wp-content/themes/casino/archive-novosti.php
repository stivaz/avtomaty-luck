<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

get_header(); 
get_sidebar();
?>

<div class="all_content">

		<?php
   
        
		if ( have_posts() ) : ?>

		
				<?php
					echo '<h1 class="br3">Новости</h1>'; //the_archive_title( '<h1 class="br3">', '</h1>' );
					the_archive_description( '<div class="cat_desc">', '</div>' );
				?>
		
<div class="osn_content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'stati-news' );

			endwhile;

			if (function_exists('wp_corenavi')) wp_corenavi(); 

echo '</div>';

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


</div>
<?php

get_footer();
