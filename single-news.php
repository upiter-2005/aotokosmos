<?php get_header(); ?>
<?php
global $post;
$current_post =  $post->ID;
?>
<?php while( have_posts() ) : the_post();?>
                      
    <section class="article">
    <div class="container-min">
        <h1><?php the_title(); ?></h1>
        <?php the_field('text'); ?>
    </div>
</section>

<?php endwhile; ?>


<section class="news">
    <h2>Похожие новости</h2>
    <div class="container-max">
        <div class="row">
        <?php
        $args = array( 
        'posts_per_page' => 3,
        'post_type' => 'news',
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
    ?>
        <?php if (get_the_ID() !== $current_post) { ?>
            <div class="col-md-4">
                <div class="new-box">
                    <div class="new-box-img">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    </div>
                    <span class="new-date"><?php echo get_the_date(); ?></span>
                    <h4 class="new-title"><?php echo the_title(); ?></h4>
                    <p><?php the_field('prev'); ?></p>
                    <div class="more"><a href="<?php the_permalink();?>" class="more">Подробнее</a></div>
                </div>
            </div>
            <?php } ?>
            

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