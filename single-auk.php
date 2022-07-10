<?php get_header(); ?>
<?php
global $post;
$current_post =  $post->ID;
?>
<?php while( have_posts() ) : the_post();?>
                      
 




<section class="info">
    <div class="container-min">
       <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="aukc">

        <h2 class="pt70"><?php the_title(); ?></h2>
        <div class="row">
        <?php the_content(); ?>
        </div>
    </div>
</section>

<?php endwhile; ?>

<section class="main-cats">
    <div class="container-max">
        <div class="main-cats-wrap">

            <a href="/common_types/avto-do-10-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">авто до 10 000$</a>
            <a href="/common_types/elektrokary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x2.jpg')">Электрокары </a>
            <a href="/common_types/avto-do-15-000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x3.jpg')">авто до 15 000$</a>
            <a href="/common_types/avto-v-ukraine/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x4.jpg')">Авто в Украине</a>
            <a href="/common_types/avto-do-8000/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x5.jpg')">авто до 8 000$</a>
            <a href="/common_types/maslkary/" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/x1.jpg')">Маслкары </a>

        </div>
    </div>
</section>


<?php get_footer(); ?> 