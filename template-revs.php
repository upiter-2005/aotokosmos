<?php
/**
 * Template Name: Template Revs (Revs)
 */
get_header(); ?>



<section class="full-fon revs">

<h2>Отзывы</h2>
<div class="container-max rev-container">
    <div class="row">

    <?php 
$args = array( 'posts_per_page' => -1, 
'post_type' => 'rev',
 );
?>
<?php if ( have_posts() ) : query_posts($args);
while (have_posts()) : the_post(); ?>
        <div class="col-md-4 col-sm-6">
            <div class="rev-item">
                <div class="rev-item-img">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                </div>
                <p class="rev-item-name"><?php the_title(); ?></p>
                <span class="date"><?php echo get_the_date(); ?></span>
                <p class="text-rev">
                  <?php the_content(); ?>
                </p>
            </div>
        </div>
    <? endwhile; endif; wp_reset_query(); ?> 

       
      
    </div>
</div> 


</section>


<section class="main-cats">
    <div class="container-max">
        <div class="main-cats-wrap">

            <a href="/avto-do-10-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">авто до 10 000$</a>
            <a href="/elektrokary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x2.jpg')">Электрокары </a>
            <a href="/avto-do-15-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x3.jpg')">авто до 15 000$</a>
            <a href="/avto-v-ukraine/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x4.jpg')">Авто в Украине</a>
            <a href="/avto-do-8000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x5.jpg')">авто до 8 000$</a>
            <a href="/maslkary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">Маслкары </a>

        </div>
    </div>
</section>

<?php get_footer(); ?>