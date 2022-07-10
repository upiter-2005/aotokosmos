<?php
/**
 * Template Name: Template Usluga (Usluga)
 */
get_header(); ?>

<div class="container usluga-block">
<?php
	/* Start the Loop */
    while ( have_posts() ) :  the_post(); ?>
      <h1><?php the_title(); ?></h1>  
<?php		
the_content();
	endwhile;
?>
</div>


<?php get_footer(); ?>