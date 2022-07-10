<?php 
require($_SERVER['DOCUMENT_ROOT'].'wp-load.php'); 

// $min_price = $_POST['min_price'];
// $maks_price = $_POST['maks_price'];
//$catname_slug = $_POST['catname_slug'];
$typeCar = $_POST[typeCar] ;


//print_r($typeCar);
$yearCar = $_POST[yearCar];
$privodCar = $_POST[privodCar];
$gaz = $_POST[gazCar];
$price = $_POST[priceCar];
$brand = $_POST[brand];
$modelCar = $_POST[modelCar];

$meta_query = array('relation' => 'AND');

if($typeCar){
    array_push($meta_query, array(
            'key'     => 'type',
            'value'   => $typeCar,
        )
    );  
}

if($yearCar){
    array_push($meta_query, array(
        'key'     => 'year',
        'value'   => $yearCar,
    )
);
}

if($privodCar){
    $meta_query[] = array(
        'key'     => 'privod',
        'value'   => $privodCar,
    );
}
if($gaz){
    $meta_query[] = array(
        'key'     => 'gaz',
        'value'   => $gaz,
    );
}
if($price){
    $meta_query[] = array(
        'key'     => 'price',
        'value'   => $price,
        'compare' 	=> '<',
        'type'		=> 'NUMERIC',
    );
}
//$category_array = explode(",", $category_names);

if($brand){
    if($modelCar){
        // $catArr = array_merge($brand, $modelCar);
        // echo '<pre>';
        // print_r($catArr);
        // echo '</pre>';
        $args = array( 
            'posts_per_page' => -1,
            'post_type' => 'post',
            'meta_query' => $meta_query,
            'category__in' => $modelCar
        );
    }else{
        $args = array( 
            'posts_per_page' => -1,
            'post_type' => 'post',
            'meta_query' => $meta_query,
            'cat' => $brand
        );
    }
     
}else{
    $args = array( 
        'posts_per_page' => -1,
        'post_type' => 'post',
        'meta_query' => $meta_query
    );  
}


// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col-xl-3 col-md-4 col-sm-6">
							<div class="showcase-item">
								<div class="showcase-item-img">
                                <a href="<?php the_permalink();?>"><img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	                    echo $large_image_url[0]; ?>" alt="autokosmos"></a>
								</div>
								<div class="showcase-item-data">
									<h3><?php the_title(); ?></h3>
									<span class="acz-date">Дата аукциона: <?php the_field( 'date-au' ); ?></span>
									<div class="info-block">
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr1.svg" alt=""> <?php the_field( 'privod' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr2.svg" alt=""> <?php the_field( 'year' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr3.svg" alt=""> <?php the_field( 'run' ); ?> Км</div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr4.svg" alt=""> <?php the_field( 'korobka' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr5.svg" alt=""> <?php the_field( 'gaz' ); ?></div>
										<div class="info-block-item"><img src="<?php echo get_template_directory_uri(); ?>/img/pr6.svg" alt=""> <?php the_field( 'type' ); ?></div>
									</div>
									<div class="showcase-item-bottom">
										<span class="price">$<?php the_field( 'price' ); ?>
                                        <?php if( !has_term('avto-v-ukraine', 'common_types') ) {
                                        echo '<span class="inner-cond">(цена на аукционе)</span>';
                                    }
                                    ?>
                                    </span>
										<a href="<?php the_permalink();?>">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
                    <?php

endwhile;

wp_reset_postdata();
else :
 echo 'Автомобилей не найдено';
endif;

?>
