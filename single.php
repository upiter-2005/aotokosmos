<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
    <div class="breadcrumbs">
        <a href="/">Главная</a>/
        <?php $terms = wp_get_object_terms( $post->ID, 'category', array('orderby'=>'term_order') );
             foreach( $terms as $term ){
                $link = get_term_link($term->term_id);
                echo '<a href='.$link.'>'. $term->name .'</a>/ '; 
            }
        ?>
        
        <?php the_title(); ?>
        
    </div>
</div>
<section class="product">
		<div class="container-max">
			<div class="row">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
					<!-- <span class="date">Дата аукциона: <?php the_field('date-au'); ?></span> -->
				</div>
				<div class="col-md-7">
					<div class="product-img">

                    <?php 
                        $gall_arr = get_field( 'gal' ); 
                        $gall_arr_imgs = explode(",", $gall_arr);
                        $src = wp_get_attachment_image_src($gall_arr_imgs[0], 'large');
                    ?>

                    <div class="slider">
<?php
                
    foreach($gall_arr_imgs as $img_id){
    $src = wp_get_attachment_image_src($img_id, 'large'); ?>
                    <a href="<?php echo $src[0]; ?>">
								<img src="<?php echo $src[0]; ?>" alt="One" class="img-responsive popup-gallery">
							</a>
    <?php   }
?>
						</div> <!--slider close -->



						<!-- THUMBNAILS -->
						<div class="slider-nav-thumbnails">
<?php
                
    foreach($gall_arr_imgs as $img_id){
    $src = wp_get_attachment_image_src($img_id, 'large'); ?>
                    <div><img src="<?php echo $src[0]; ?>" alt="One"></div>
    <?php   }
?>	
						</div> <!--THUMB close -->
					</div>

					<div class="product-gen product-gen-mob d-flex d-md-none">
						<div class="price">$<?php the_field( 'price' ); ?></div>						
						<a href="#popup-product" class="to-calc open-popup-link">Просчитать стоимость</a>
						<a href="#popup-product" class="bye w100 open-popup-link">Купить</a>
					</div>
<?php
    $product_cat = wp_get_post_categories( $post->ID, array('fields' => 'names') );
    print_r( $test );
?>
					<div class="product-data product-data-mob d-block d-md-none">


                    <?php
                        $submodel='';
                        $termID = '';
                        $cat = get_the_category($post->ID);

                        foreach ($cat as $cat_child) {
                            if($cat_child->parent == 0){
                                $termID = $cat_child->term_id;
                                $termName = $cat_child->name;
                            }else{
                                $submodel = $cat_child->slug;
                                $submodel_name = $cat_child->name;
                            }
                        }
                        
                    ?>


                        <div class="product-data-tr">
							<span>Бренд</span>
							<!-- <span><?php //echo $product_cat[1]; ?></span> -->
                            <span><?php echo $termName; ?></span>
						</div>
						<div class="product-data-tr">
							<span>Модель авто</span>
							<!-- <span><?php //echo $product_cat[0]; ?></span> -->
							<span><?php echo $submodel_name; ?></span>
						</div>
                        <div class="product-data-tr">
							<span>Номер VIN</span>
							<span><?php the_field( 'win' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Год</span>
							<span><?php the_field( 'year' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Метонахождение</span>
							<span><?php the_field( 'place' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Пробег mi</span>
							<span><span class="format-run"><?php the_field( 'run' ); ?></span></span>
						</div>
						<div class="product-data-tr">
							<span>Тип кузова</span>
							<span><?php the_field( 'type' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Тип топлива</span>
							<span><?php the_field( 'gaz' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Цвет</span>
							<span><?php the_field( 'color' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Привод</span>
							<span><?php the_field( 'privod' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Объём</span>
							<span><?php the_field( 'liter' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Коробка</span>
							<span><?php the_field( 'korobka' ); ?></span>
						</div>
					</div>

					<div class="product-description">
						<h3>Описание</h3>
						<?php the_field( 'desc' ); ?>
					</div>
				</div>
				<div class="col-md-5 ">

					<div class="product-gen d-none d-md-flex">
						<div class="price">$<?php the_field( 'price' ); ?></div>
						<a href="#popup-product" class="bye open-popup-link">Купить</a>
						<a href="#popup-product" class="to-calc open-popup-link">Просчитать стоимость</a>
					</div>
					<div class="product-data d-none d-md-block">
                    <div class="product-data-tr">
							<span>Бренд</span>
							<!-- <span><?php //echo $product_cat[1]; ?></span> -->
                            <span><?php echo $termName; ?></span>
						</div>
						<div class="product-data-tr">
							<span>Модель авто</span>
							<!-- <span><?php //echo $product_cat[0]; ?></span> -->
							<span><?php echo $submodel_name; ?></span>
						</div>
                        <div class="product-data-tr">
							<span>Номер VIN</span>
							<span><?php the_field( 'win' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Год</span>
							<span><?php the_field( 'year' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Метонахождение</span>
							<span><?php the_field( 'place' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Пробег mi</span>
							<span><span class="format-run"><?php the_field( 'run' ); ?></span></span>
						</div>
						<div class="product-data-tr">
							<span>Тип кузова</span>
							<span><?php the_field( 'type' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Тип топлива</span>
							<span><?php the_field( 'gaz' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Цвет</span>
							<span><?php the_field( 'color' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Привод</span>
							<span><?php the_field( 'privod' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Объём</span>
							<span><?php the_field( 'liter' ); ?></span>
						</div>
						<div class="product-data-tr">
							<span>Коробка</span>
							<span><?php the_field( 'korobka' ); ?></span>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>
    

    <section class="relative-models">
		<div class="container-max">
			<div class="relative-models-wrap">

				<h2>Другие модели марки <?php echo $termName; ?></h2>
				
<?php

    $sub_cats = get_categories( array(
        'child_of' => $termID,
        'hide_empty' => 0
) );

foreach ($sub_cats as $child) { 
    
    if($child->count != 0){?>
    <a href="<?php echo get_term_link($child->slug, $child->taxonomy); ?>" ><?php echo $child->name; ?></a>
<?php }else{
    
}
}
?>
			</div>

		</div>
	</section>

    <section class="showcase">
        <h2 class="accent">Аналогичные модели </h2>
       
        

		<div class="container-max">
			<div class="row">



     
    <?php 
    $args = array( 'posts_per_page' => 4, 'post_type' => 'post', 'category_name' => $submodel );
    global $post;
    $current_post =  $post->ID;
    ?>

    <?php if ( have_posts() ) : query_posts($args);
    while (have_posts()) : the_post(); ?>

        <?php if (get_the_ID() !== $current_post) { ?>

                <div class="col-xl-3 col-md-4 col-sm-6">
					<div class="showcase-item">
						<div class="showcase-item-img">
                        <?php echo get_the_post_thumbnail(); ?>
						
						</div>
						<div class="showcase-item-data">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<!-- <span class="acz-date">Дата аукциона: <?php the_field( 'date-au' ); ?></span> -->
							<div class="info-block">
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr1.svg" alt=""> <?php the_field( 'privod' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr2.svg" alt=""> <?php the_field( 'year' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr3.svg" alt=""> <?php the_field( 'run' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr4.svg" alt=""> <?php the_field( 'korobka' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr5.svg" alt=""> <?php the_field( 'gaz' ); ?></div>
								<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr6.svg" alt=""> <?php the_field( 'type' ); ?></div>
							</div>
							<div class="showcase-item-bottom">
								<span class="price">$<?php the_field( 'price' ); ?></span>
								<a href="<?php the_permalink(); ?>">Подробнее</a>
							</div>
						</div>

					</div>
				</div>

         <?php } ?>       
<? endwhile; endif; wp_reset_query(); ?>
				



			</div>
		</div>
	</section>




    <section class="short-fon">

<p class="title">Задать вопрос</p>
<form action="" class="short-form">

    <p class="short-form-p w20">
        <label for="shot-name">Имя</label>
        <input type="text" id="shot-name" name="name" required>
    </p>


    <p class="short-form-p w20">
        <label for="short-tel">Номер телефона</label>
        <input type="tel" name="short-tel" required>
    </p>


    <p class="short-form-p w40">
        <label for="short-mes">Вопрос</label>
        <textarea name="short-mes"></textarea>
    </p>
    <p class="short-form-p w20"><button type="submit" class="accent-but">Отправить</button></p>



</form>

</section>

<?php get_footer(); ?>

	
