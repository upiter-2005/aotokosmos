<?php
/**
 * Template Name: Template Ask (Ask)
 */
get_header(); ?>


<section class="short-fon">

<p class="title">Задать вопрос</p>
<form action="" class="short-form">

    <p class="short-form-p w20">
        <label for="shot-name">Имя</label>
        <input type="text" id="shot-name" name="name">
    </p>


    <p class="short-form-p w20">
        <label for="short-tel">Номер телефона</label>
        <input type="tel" name="short-tel">
    </p>


    <p class="short-form-p w40">
        <label for="short-mes">Вопрос</label>
        <textarea name="short-mes"></textarea>
    </p>
    <p class="short-form-p w20"><button type="submit" class="accent-but">Отправить</button></p>



</form>

</section>


<section class="faq">
<h2>Вопрос - Ответ</h2>

<div class="faq-container">


<?php 
$args = array( 'posts_per_page' => -1, 
'post_type' => 'faq',
 );
?>
<?php if ( have_posts() ) : query_posts($args);
while (have_posts()) : the_post(); ?>
    <div class="wrap-faq-item">
        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo get_the_ID(); ?>">
            <a class="card-title" id="titleTab1"> <? the_title(); ?></a>
        </div>
        <div id="<?php echo get_the_ID(); ?>" class=" collapse" data-parent="#accordion">
            <div class="card-body" id="tabText1">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <? endwhile; endif; wp_reset_query(); ?> 




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