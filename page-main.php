<!-- Template Name: Main
-->

<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-page' );

	// ACF - Flexible Content fields.
	$sections = get_field( 'block_sections' );

  if (have_rows('block_sections')) {
    while (have_rows('block_sections')) {
      the_row();
      include('template-parts/sections/'.get_row_layout().'.php');
    }
  }

endwhile; // End of the loop.

get_footer();