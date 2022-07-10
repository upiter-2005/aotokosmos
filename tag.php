<?php /*
Template Name: Tag Archive
*/ ?>
<div>
<?php get_header(); ?>
<h2>Архив меток</h2>
<?php wp_tag_cloud('smallest=12&largest=36&number=1500&format=flat&separator=|&orderby=name'); ?>
<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry">
	<?php the_content('Читать всё'); ?>
	</div>

	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>