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
            'paged' => 1,
            'post_type' => 'post',
            'meta_query' => $meta_query,
            'category__in' => $modelCar
        );
    }else{
        $args = array( 
            'posts_per_page' => -1,
            'paged' => 1,
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
    <div class="list-item">
						<div class="list-item-img">
                        
                        <a href="<?php the_permalink();?>"><img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	                    echo $large_image_url[0]; ?>" alt="autokosmos"></a>
                        
                        </div>
						<div class="list-item-data">
                        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
							<div class="date">Дата аукциона: <span><?php the_field( 'date-au' ); ?></span> </div>
							<div class="param-flex">
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/privod.svg" alt=""><?php the_field( 'privod' ); ?></div>
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/gas.svg" alt=""><?php the_field( 'gaz' ); ?></div>
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/calendar.svg" alt=""><?php the_field( 'year' ); ?></div> 
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/raod.svg" alt=""><span class="format-run"><?php the_field( 'run' ); ?></span> mi</div> 
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/trans.svg" alt=""><?php the_field( 'korobka' ); ?></div> 
								<div class="param-item"><img src="<?php echo get_template_directory_uri(); ?>/img/type.svg" alt=""><?php the_field( 'type' ); ?></div> 
								<div class="price">$<?php the_field( 'price' ); ?>
                                <?php if( !has_term('avto-v-ukraine', 'common_types') ) {
                                        echo '<span class="inner-cond">(цена на аукционе)</span>';
                                    }
                                    ?>
                                </div>
								<div class="permalink"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
								<div class="to-cart-wrap"><a href="#popup-product" class="to-cart want open-popup-link">Купить</a></div>	
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


