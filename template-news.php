<?php
/**
 * Template Name: Template News (News)
 */
get_header(); ?>
<section class="news">
    <h2>Новости</h2>
    <div class="container-max">
        <div class="row">

        
        <?php 
            $args = array( 'posts_per_page' => 1, 'post_type' => 'news'  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

            <div class="col-md-8">
                <div class="new-box">
                    <div class="new-box-img">
                    <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a> 
                    </div>
                    <span class="new-date"><?php echo get_the_date(); ?></span>
                    <h4 class="new-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                    <p><?php the_field('prev'); ?></p>
                    <div class="more"><a href="<?php the_permalink();?>" class="more">Подробнее</a></div>
                </div>
            </div>
				            
        <? endwhile; endif; wp_reset_query(); ?>

           


        <?php 
            $args = array( 'posts_per_page' => 999, 'post_type' => 'news','offset' => 1, 'order' => 'desc',  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

            <div class="col-md-4 col-sm-6">
                <div class="new-box">
                    <div class="new-box-img">
                    <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a> 
                    </div>
                    <span class="new-date"><?php echo get_the_date(); ?></span>
                    <h4 class="new-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                    <p><?php the_field('prev'); ?></p>
                    <div class="more"><a href="<?php the_permalink();?>" class="more">Подробнее</a></div>
                </div>
            </div>
				            
        <? endwhile; endif; wp_reset_query(); ?>


           
          

        </div>
    </div>
</section>


<?php get_footer(); ?>